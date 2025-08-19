<?php
session_start();

// Handle form submission before any output
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';

    // Check if password is exactly "Bills123"
    if ($password === 'Bills123') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: ../admin/'); // Redirect to dashboard.php in the same directory
        exit;
    } else {
        $error = 'Invalid password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLACK Studios | Admin Login</title>
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
            background: linear-gradient(45deg, var(--bg-dark), #1c1c1c);
            background-size: 200% 200%;
            animation: gradientShift 15s ease infinite;
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow: hidden;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        /* Background gradient animation */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Subtle particle effect */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 94, 26, 0.3);
            border-radius: 50%;
            animation: particleFloat 10s infinite linear;
        }

        @keyframes particleFloat {
            0% { transform: translateY(0) scale(1); opacity: 0.5; }
            50% { opacity: 0.2; }
            100% { transform: translateY(-100vh) scale(0.5); opacity: 0; }
        }

        .container {
            max-width: 450px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            margin-bottom: 2.5rem;
            color: var(--primary);
            position: relative;
            animation: fadeInDown 1s ease forwards;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 80px;
            height: 4px;
            background: var(--primary);
            transform: translateX(-50%);
            animation: expandWidth 0.8s ease forwards;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes expandWidth {
            from { width: 0; }
            to { width: 80px; }
        }

        .login-form {
            background: var(--bg-light);
            border-radius: 16px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 94, 26, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: var(--transition);
            animation: fadeInUp 0.8s ease forwards;
        }

        .login-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255, 94, 26, 0.4);
            border-color: var(--primary);
        }

        .form-group {
            margin-bottom: 1.8rem;
            text-align: left;
            position: relative;
        }

        .form-group label {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            display: block;
            transition: var(--transition);
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 1px solid var(--text-secondary);
            border-radius: 10px;
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
            position: relative;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 8px rgba(255, 94, 26, 0.6);
            transform: scale(1.02);
        }

        .form-group input:not(:placeholder-shown) + label,
        .form-group input:focus + label {
            transform: translateY(-2.5rem) translateX(-10px) scale(0.8);
            color: var(--primary);
        }

        button {
            width: 100%;
            padding: 1rem;
            background: var(--primary);
            border: none;
            border-radius: 10px;
            color: var(--text-primary);
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 94, 26, 0.5);
        }

        button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        button:hover::before {
            width: 300px;
            height: 300px;
        }

        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .loader {
            display: none;
            width: 24px;
            height: 24px;
            border: 3px solid var(--text-primary);
            border-top: 3px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        button:disabled .loader {
            display: block;
        }

        button:disabled span {
            opacity: 0;
        }

        @keyframes spin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .error-message {
            color: #ff4444;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
            margin-top: 1rem;
            animation: shake 0.5s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 1.5rem 1rem;
            }

            h1 {
                font-size: 2.2rem;
            }

            .login-form {
                padding: 2rem;
            }

            .form-group label {
                font-size: 1.2rem;
            }

            .form-group input {
                font-size: 0.95rem;
                padding: 0.8rem;
            }

            button {
                font-size: 1.2rem;
                padding: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="particles">
        <div class="particle" style="width: 10px; height: 10px; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="width: 8px; height: 8px; left: 30%; animation-delay: 2s;"></div>
        <div class="particle" style="width: 12px; height: 12px; left: 50%; animation-delay: 4s;"></div>
        <div class="particle" style="width: 6px; height: 6px; left: 70%; animation-delay: 1s;"></div>
        <div class="particle" style="width: 9px; height: 9px; left: 90%; animation-delay: 3s;"></div>
    </div>

    <div class="container">
        <h1>Admin Login</h1>
        <div class="login-form">
            <form method="POST" action="" id="loginForm">
                <div class="form-group">
                    <input type="text" id="username" name="username" value="admin" required>
                    <label for="username"></label>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" required>
                    <label for="password"></label>
                </div>
                <button type="submit" id="loginButton">
                    <span>Login</span>
                    <div class="loader"></div>
                </button>
                <?php if ($error): ?>
                    <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <script>
        // Handle form submission without interfering with PHP redirect
        const form = document.getElementById('loginForm');
        const button = document.getElementById('loginButton');
        form.addEventListener('submit', () => {
            button.disabled = true; // Show loader
        });
    </script>
</body>
</html>