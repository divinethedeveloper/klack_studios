<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "klack_studios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $first_name = filter_var($_POST['first-name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['last-name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);
    $marital_status = filter_var($_POST['marital-status'], FILTER_SANITIZE_STRING);
    $occupation = filter_var($_POST['occupation'], FILTER_SANITIZE_STRING);
    $acting_experience = filter_var($_POST['acting-experience'], FILTER_SANITIZE_NUMBER_INT);
    $previous_roles = filter_var($_POST['previous-roles'], FILTER_SANITIZE_STRING);
    $portfolio = filter_var($_POST['portfolio'], FILTER_SANITIZE_URL);
    $languages = filter_var($_POST['languages'], FILTER_SANITIZE_STRING);
    $special_skills = filter_var($_POST['special-skills'], FILTER_SANITIZE_STRING);
    $height = filter_var($_POST['height'], FILTER_SANITIZE_STRING);
    $weight = filter_var($_POST['weight'], FILTER_SANITIZE_STRING);
    $body_type = filter_var($_POST['body-type'], FILTER_SANITIZE_STRING);
    $tattoos = filter_var($_POST['tattoos'], FILTER_SANITIZE_STRING);
    $travel = filter_var($_POST['travel'], FILTER_SANITIZE_STRING);
    $weekends = filter_var($_POST['weekends'], FILTER_SANITIZE_STRING);
    $availability = filter_var($_POST['availability'], FILTER_SANITIZE_STRING);
    $agency = filter_var($_POST['agency'], FILTER_SANITIZE_STRING);
    $agency_info = isset($_POST['agency-info']) ? filter_var($_POST['agency-info'], FILTER_SANITIZE_STRING) : '';

    // Validate required fields
    $errors = [];
    if (empty($first_name)) $errors[] = "First name is required";
    if (empty($last_name)) $errors[] = "Last name is required";
    if (empty($phone)) $errors[] = "Phone number is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
    if (empty($location)) $errors[] = "Location is required";
    if (empty($gender)) $errors[] = "Gender is required";
    if (empty($dob)) $errors[] = "Date of birth is required";
    if (empty($marital_status)) $errors[] = "Marital status is required";
    if (empty($occupation)) $errors[] = "Occupation is required";
    if (!isset($acting_experience) || $acting_experience < 0) $errors[] = "Valid years of acting experience is required";
    if (empty($travel)) $errors[] = "Travel availability is required";
    if (empty($weekends)) $errors[] = "Weekend/night shoot availability is required";
    if (empty($availability)) $errors[] = "Current availability is required";
    if (empty($agency)) $errors[] = "Agency status is required";

    // Handle file uploads
    $upload_dir = "../../uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $headshot_path = $full_body_path = $voice_recording_path = '';

    // Headshot upload
    if (isset($_FILES['headshot']) && $_FILES['headshot']['error'] == 0) {
        $headshot_ext = strtolower(pathinfo($_FILES['headshot']['name'], PATHINFO_EXTENSION));
        if (!in_array($headshot_ext, ['jpg', 'jpeg', 'png'])) {
            $errors[] = "Headshot must be a JPG or PNG file";
        } else {
            $headshot_name = uniqid() . "_headshot." . $headshot_ext;
            $headshot_path = $upload_dir . $headshot_name;
            if (!move_uploaded_file($_FILES['headshot']['tmp_name'], $headshot_path)) {
                $errors[] = "Failed to upload headshot";
            }
        }
    } else {
        $errors[] = "Headshot is required";
    }

    // Full body photo upload
    if (isset($_FILES['full-body']) && $_FILES['full-body']['error'] == 0) {
        $full_body_ext = strtolower(pathinfo($_FILES['full-body']['name'], PATHINFO_EXTENSION));
        if (!in_array($full_body_ext, ['jpg', 'jpeg', 'png'])) {
            $errors[] = "Full body photo must be a JPG or PNG file";
        } else {
            $full_body_name = uniqid() . "_fullbody." . $full_body_ext;
            $full_body_path = $upload_dir . $full_body_name;
            if (!move_uploaded_file($_FILES['full-body']['tmp_name'], $full_body_path)) {
                $errors[] = "Failed to upload full body photo";
            }
        }
    } else {
        $errors[] = "Full body photo is required";
    }

    // Voice recording upload (optional)
    if (isset($_FILES['voice-recording']) && $_FILES['voice-recording']['error'] == 0) {
        $voice_ext = strtolower(pathinfo($_FILES['voice-recording']['name'], PATHINFO_EXTENSION));
        if (!in_array($voice_ext, ['mp3', 'wav'])) {
            $errors[] = "Voice recording must be an MP3 or WAV file";
        } else {
            $voice_name = uniqid() . "_voice." . $voice_ext;
            $voice_recording_path = $upload_dir . $voice_name;
            if (!move_uploaded_file($_FILES['voice-recording']['tmp_name'], $voice_recording_path)) {
                $errors[] = "Failed to upload voice recording";
            }
        }
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $stmt = $conn->prepare("
            INSERT INTO actor_applications (
                first_name, last_name, phone, email, location, gender, dob, marital_status, 
                occupation, acting_experience, previous_roles, portfolio, languages, special_skills, 
                height, weight, body_type, tattoos, travel, weekends, availability, agency, 
                agency_info, headshot_path, full_body_path, voice_recording_path
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $stmt->bind_param(
            "sssssssssisssssssssssssss",
            $first_name, $last_name, $phone, $email, $location, $gender, $dob, $marital_status,
            $occupation, $acting_experience, $previous_roles, $portfolio, $languages, $special_skills,
            $height, $weight, $body_type, $tattoos, $travel, $weekends, $availability, $agency,
            $agency_info, $headshot_path, $full_body_path, $voice_recording_path
        );

        if ($stmt->execute()) {
            echo "<h2>Application Submitted Successfully!</h2>";
            echo "<p>Thank you for applying to KLACK Studios. We'll review your application and get back to you soon.</p>";
            echo "<a href='index.html'>Return to Home</a>";
        } else {
            echo "<h2>Error</h2>";
            echo "<p>Something went wrong: " . $conn->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<h2>Submission Errors</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='application.html'>Go Back to Form</a>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
    echo "<p>Please submit the form correctly.</p>";
}

$conn->close();
?>