<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLACK Studios | Submission Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/nav.css">
    <link rel="stylesheet" href="../../styles/footer.css">
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
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
            animation: fadeIn 0.5s ease forwards;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 1.5rem;
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

        .back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1.5rem;
            margin-bottom: 2rem;
            background: var(--primary);
            color: var(--text-primary);
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.2rem;
            text-decoration: none;
            border-radius: 8px;
            transition: var(--transition);
            box-shadow: 0 4px 10px rgba(255, 94, 26, 0.3);
        }

        .back-btn:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(255, 94, 26, 0.4);
        }

        .details-card {
            background: var(--bg-light);
            border-radius: 12px;
            padding: 2rem;
            border: 1px solid rgba(255, 94, 26, 0.2);
            animation: fadeInUp 0.5s ease forwards;
        }

        .detail-group {
            margin-bottom: 1rem;
        }

        .detail-group strong {
            display: block;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.2rem;
            color: var(--text-primary);
            margin-bottom: 0.3rem;
        }

        .detail-group span,
        .detail-group a {
            font-size: 1rem;
            color: var(--text-secondary);
        }

        .detail-group a {
            color: var(--primary);
            text-decoration: none;
        }

        .detail-group a:hover {
            text-decoration: underline;
        }

        .detail-group img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1rem 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .detail-group audio {
            width: 100%;
            margin: 1rem 0;
            filter: brightness(1.2);
        }

        .error-message {
            color: #ff4444;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
            background: var(--bg-light);
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                padding: 1rem 0.5rem;
            }

            h1 {
                font-size: 2rem;
            }

            .back-btn {
                padding: 0.5rem 1rem;
                font-size: 1rem;
            }

            .details-card {
                padding: 1.5rem;
            }

            .detail-group strong {
                font-size: 1.1rem;
            }

            .detail-group span,
            .detail-group a {
                font-size: 0.9rem;
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

    // Get submission ID
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id <= 0) {
        echo "<div class='error-message'>Invalid submission ID.</div>";
        mysqli_close($conn);
        exit;
    }

    // Fetch submission
    $query = "SELECT * FROM actor_applications WHERE id = " . mysqli_real_escape_string($conn, $id);
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "<div class='error-message'>Query failed: " . htmlspecialchars(mysqli_error($conn)) . "</div>";
        mysqli_close($conn);
        exit;
    }

    $submission = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

    if (!$submission) {
        echo "<div class='error-message'>Submission not found.</div>";
        exit;
    }

     ?>

    <div class="container">
        <a href="index.php" class="back-btn">← Back to Dashboard</a>
        <h1>Submission Details</h1>
        <div class="details-card">
            <div class="detail-group">
                <strong>Name:</strong>
                <span><?php echo htmlspecialchars($submission['first_name'] . ' ' . $submission['last_name']); ?></span>
            </div>
            <div class="detail-group">
                <strong>ID:</strong>
                <span><?php echo htmlspecialchars($submission['id']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Phone:</strong>
                <span><?php echo htmlspecialchars($submission['phone']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Email:</strong>
                <span><?php echo htmlspecialchars($submission['email']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Location:</strong>
                <span><?php echo htmlspecialchars($submission['location']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Gender:</strong>
                <span><?php echo htmlspecialchars($submission['gender']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Date of Birth:</strong>
                <span><?php echo htmlspecialchars($submission['dob']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Marital Status:</strong>
                <span><?php echo htmlspecialchars($submission['marital_status']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Occupation:</strong>
                <span><?php echo htmlspecialchars($submission['occupation']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Acting Experience:</strong>
                <span><?php echo htmlspecialchars($submission['acting_experience']); ?> years</span>
            </div>
            <div class="detail-group">
                <strong>Previous Roles:</strong>
                <span><?php echo htmlspecialchars($submission['previous_roles'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Portfolio:</strong>
                <?php if ($submission['portfolio']): ?>
                    <a href="<?php echo htmlspecialchars($submission['portfolio']); ?>" target="_blank">View Portfolio</a>
                <?php else: ?>
                    <span>None</span>
                <?php endif; ?>
            </div>
            <div class="detail-group">
                <strong>Languages:</strong>
                <span><?php echo htmlspecialchars($submission['languages'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Special Skills:</strong>
                <span><?php echo htmlspecialchars($submission['special_skills'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Height:</strong>
                <span><?php echo htmlspecialchars($submission['height'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Weight:</strong>
                <span><?php echo htmlspecialchars($submission['weight'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Body Type:</strong>
                <span><?php echo htmlspecialchars($submission['body_type'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Tattoos/Piercings:</strong>
                <span><?php echo htmlspecialchars($submission['tattoos'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Available for Travel:</strong>
                <span><?php echo htmlspecialchars($submission['travel']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Willing to Work Weekends/Nights:</strong>
                <span><?php echo htmlspecialchars($submission['weekends']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Availability:</strong>
                <span><?php echo htmlspecialchars($submission['availability']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Agency Signed:</strong>
                <span><?php echo htmlspecialchars($submission['agency']); ?></span>
            </div>
            <div class="detail-group">
                <strong>Agency Info:</strong>
                <span><?php echo htmlspecialchars($submission['agency_info'] ?? 'None'); ?></span>
            </div>
            <div class="detail-group">
                <strong>Headshot:</strong>
                <?php if ($submission['headshot_path']): ?>
                    <img src="<?php echo htmlspecialchars($submission['headshot_path']); ?>" alt="Headshot">
                <?php else: ?>
                    <span>No headshot available</span>
                <?php endif; ?>
            </div>
            <div class="detail-group">
                <strong>Voice Recording:</strong>
                <?php if ($submission['voice_recording_path']): ?>
                    <audio controls src="<?php echo htmlspecialchars($submission['voice_recording_path']); ?>"></audio>
                <?php else: ?>
                    <span>No voice recording available</span>
                <?php endif; ?>
            </div>
            <div class="detail-group">
                <strong>Submitted On:</strong>
                <span><?php echo htmlspecialchars(date('F j, Y, g:i a', strtotime($submission['created_at']))); ?></span>
            </div>
        </div>
    </div>

 </body>
</html>