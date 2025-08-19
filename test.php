<?php
session_start();
require_once "connection.php";

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_SESSION["UserID"])) {
    // Get the user ID from the session
    $userId = $_SESSION["UserID"];

    // Prepare the SQL query
    $sql = "SELECT * FROM withdrawal_details WHERE user_id = ?";
    
    // Initialize prepared statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("i", $userId);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Check if there is an entry
    if ($result->num_rows > 0) {
        // There is an entry
         
        $entry = "valid";
    } else {
        // No entry found
        $entry = "invalid";
     
    }

    $fetchBalanceQuery = "SELECT account_balance FROM account WHERE user_id = '$userId'";
    $balanceResult = $conn->query($fetchBalanceQuery);

    // Initialize the $account_balance variable with a default value
    $account_balance = 0.00; // Default account balance

    if ($balanceResult->num_rows > 0) {
        // Retrieve the account_balance from the query result
        $balanceRow = $balanceResult->fetch_assoc();
        $account_balance = $balanceRow["account_balance"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "components/head.php"?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="css/deposit.css">
</head>
<body>

    <div class="container">
        <div class="top cen">
            <span class="cen active" onclick="location.href='withdrawal.php'">Withdraw Now</span>
            <span class="cen" onclick="location.href='w_history.php'">Withdrawal History</span>
        </div>

        <div class="bal">
            <span>Total Balance</span>
            <h3>USDT <?php echo $account_balance ?></h3>
        </div>

        <div class="method">
            <h4>Withdraw Method</h4>
            <p>- Withdrawal will be credited to your binding Wallet Address within 30 minutes.</p>
            <p>- Kindly confirm your address with customer service after you submit the withdrawal request</p>
        </div>

        <form class="mf" action="backend/withdrawal.php" method="post">
            <div class="item">
                <label for="withdraw_amount">Withdraw Amount</label>
                <input type="number" name="withdraw_amount" id="withdraw_amount" placeholder="Type Here" required>
            </div>

            <div class="item">
                <label for="withdrawal_password">Withdrawal Password</label>
                <input type="text" name="withdrawal_password" id="withdrawal_password" placeholder="Type Here" required>
            </div>

            <div class="ee">
                <?php if($entry == "invalid"): ?>
                    <div class="cover" onclick="alert_bind()"></div>
                <?php endif; ?>
                <button type="submit">Submit</button>
            </div>
        </form>

        <?php require_once "components/b_nav.php"; ?>
    </div>

    <script>
        // Define the alert_bind function
        function alert_bind() {
            Swal.fire({
                title: 'You need to bind your wallet before you can make a withdrawal',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Bind Wallet',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to bind wallet page or perform any other action
                    window.location.href = './bind.php'; // Replace with your actual URL
                } else if (result.isDismissed) {
                    // Handle the cancel action if needed
                    console.log('User canceled the binding process');
                }
            });
        }
    </script>

    <script>
        function set(value) {
            var elements = document.getElementsByClassName("val");
            if (elements.length > 0) {
                elements[0].value = value;
            } else {
                console.error("No element found with the class name 'val'");
            }
        }
    </script>

</body>
</html>
