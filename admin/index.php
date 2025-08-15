<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLACK Studios | Submissions Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
 
    <style>
        :root {
            --primary: #ff5e1a;
            --primary-dark: #e04b00;
            --bg-dark: #0a0a0a;
            --bg-light: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            color: var(--primary);
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 60px;
            height: 3px;
            background: var(--primary);
            transform: translateX(-50%);
        }

        .submission-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .submission-card {
            background: var(--bg-light);
            border-radius: 12px;
            padding: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
            animation: fadeInUp 0.5s ease forwards;
            border: 1px solid rgba(255, 94, 26, 0.2);
            text-decoration: none;
            color: inherit;
        }

        .submission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(255, 94, 26, 0.3);
            border-color: var(--primary);
        }

        .submission-card h3 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .submission-card p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 0.3rem;
        }

        .error-message {
            color: #ff4444;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .submission-list {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem 0.5rem;
            }

            h1 {
                font-size: 2rem;
            }

            .submission-card {
                padding: 1rem;
            }

            .submission-card h3 {
                font-size: 1.3rem;
            }

            .submission-card p {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <?php
    session_start();
    // Database connection
    $host = 'localhost';
    $dbname = 'klack_studios';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (!$conn) {
        echo "<div class='error-message'>Database connection failed: " . htmlspecialchars(mysqli_connect_error()) . "</div>";
        exit;
    }

    // Fetch submissions
    $query = "SELECT id, first_name, last_name, email, created_at FROM actor_applications ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "<div class='error-message'>Query failed: " . htmlspecialchars(mysqli_error($conn)) . "</div>";
        mysqli_close($conn);
        exit;
    }

    $submissions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $submissions[] = $row;
    }
    mysqli_free_result($result);
    mysqli_close($conn);

     ?>

    <div class="container">
        <h1>Submissions Dashboard</h1>
        <?php if (empty($submissions)): ?>
            <div class="error-message">No submissions found.</div>
        <?php else: ?>
            <div class="submission-list">
                <?php foreach ($submissions as $index => $sub): ?>
                    <a href="details.php?id=<?php echo htmlspecialchars($sub['id']); ?>" class="submission-card" style="animation-delay: <?php echo $index * 0.1; ?>s">
                        <h3><?php echo htmlspecialchars($sub['first_name'] . ' ' . $sub['last_name']); ?></h3>
                        <p>ID: <?php echo htmlspecialchars($sub['id']); ?></p>
                        <p>Email: <?php echo htmlspecialchars($sub['email']); ?></p>
                        <p>Submitted: <?php echo htmlspecialchars(date('F j, Y, g:i a', strtotime($sub['created_at']))); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

 </body>
</html>