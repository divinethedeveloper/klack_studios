<?php
session_start();

// Database connection configuration
$host = 'localhost';
$dbname = 'klack_studios';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<ul><li>Database connection failed: " . htmlspecialchars($e->getMessage()) . "</li></ul>";
    exit;
}

// Initialize error array
$errors = [];

// Sanitize and validate form inputs, converting empty strings to NULL
$first_name = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING) ?? '';
$last_name = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING) ?? '';
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '';
$location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING) ?? '';
$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING) ?? '';
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING) ?? '';
$marital_status = filter_input(INPUT_POST, 'marital-status', FILTER_SANITIZE_STRING) ?? '';
$occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING) ?? '';
$acting_experience = filter_input(INPUT_POST, 'acting-experience', FILTER_SANITIZE_NUMBER_INT) ?? '';
$previous_roles = filter_input(INPUT_POST, 'previous-roles', FILTER_SANITIZE_STRING) ?? '';
$portfolio = filter_input(INPUT_POST, 'portfolio', FILTER_SANITIZE_URL) ?? '';
$languages = filter_input(INPUT_POST, 'languages', FILTER_SANITIZE_STRING) ?? '';
$special_skills = filter_input(INPUT_POST, 'special-skills', FILTER_SANITIZE_STRING) ?? '';
$height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_STRING) ?? '';
$weight = filter_input(INPUT_POST, 'weight', FILTER_SANITIZE_STRING) ?? '';
$body_type = filter_input(INPUT_POST, 'body-type', FILTER_SANITIZE_STRING) ?? '';
$tattoos = filter_input(INPUT_POST, 'tattoos', FILTER_SANITIZE_STRING) ?? '';
$travel = filter_input(INPUT_POST, 'travel', FILTER_SANITIZE_STRING) ?? '';
$weekends = filter_input(INPUT_POST, 'weekends', FILTER_SANITIZE_STRING) ?? '';
$availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_STRING) ?? '';
$agency = filter_input(INPUT_POST, 'agency', FILTER_SANITIZE_STRING) ?? '';
$agency_info = filter_input(INPUT_POST, 'agency-info', FILTER_SANITIZE_STRING) ?? '';

// Convert empty strings to NULL for all fields to avoid invalid format errors
$first_name = ($first_name === '') ? NULL : $first_name;
$last_name = ($last_name === '') ? NULL : $last_name;
$phone = ($phone === '') ? NULL : $phone;
$email = ($email === '') ? NULL : $email;
$location = ($location === '') ? NULL : $location;
$gender = ($gender === '') ? NULL : $gender;
$dob = ($dob === '') ? NULL : $dob;
$marital_status = ($marital_status === '') ? NULL : $marital_status;
$occupation = ($occupation === '') ? NULL : $occupation;
$acting_experience = ($acting_experience === '') ? NULL : $acting_experience;
$previous_roles = ($previous_roles === '') ? NULL : $previous_roles;
$portfolio = ($portfolio === '') ? NULL : $portfolio;
$languages = ($languages === '') ? NULL : $languages;
$special_skills = ($special_skills === '') ? NULL : $special_skills;
$height = ($height === '') ? NULL : $height;
$weight = ($weight === '') ? NULL : $weight;
$body_type = ($body_type === '') ? NULL : $body_type;
$tattoos = ($tattoos === '') ? NULL : $tattoos;
$travel = ($travel === '') ? NULL : $travel;
$weekends = ($weekends === '') ? NULL : $weekends;
$availability = ($availability === '') ? NULL : $availability;
$agency = ($agency === '') ? NULL : $agency;
$agency_info = ($agency_info === '') ? NULL : $agency_info;

// Initialize file paths
$headshot_path = NULL;
$voice_recording_path = NULL;
$full_body_path = NULL; // Not used in the form, but kept for schema compatibility

// File upload handling
$upload_dir = '../uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0775, true);
}

// Handle headshot upload
if (isset($_FILES['headshot']) && $_FILES['headshot']['error'] !== UPLOAD_ERR_NO_FILE) {
    $headshot = $_FILES['headshot'];
    if ($headshot['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['image/jpeg', 'image/png'];
        $max_size = 5 * 1024 * 1024; // 5MB
        if (!in_array($headshot['type'], $allowed_types)) {
            $errors[] = "Headshot must be a JPEG or PNG file.";
        } elseif ($headshot['size'] > $max_size) {
            $errors[] = "Headshot file size exceeds 5MB limit.";
        } else {
            $ext = pathinfo($headshot['name'], PATHINFO_EXTENSION);
            $headshot_filename = 'headshot_' . uniqid() . '.' . $ext;
            $headshot_path = $upload_dir . $headshot_filename;
            if (!move_uploaded_file($headshot['tmp_name'], $headshot_path)) {
                $errors[] = "Failed to upload headshot.";
            }
        }
    } else {
        $errors[] = "Headshot upload error: " . $headshot['error'];
    }
}

// Handle voice recording upload
if (isset($_FILES['voice-recording']) && $_FILES['voice-recording']['error'] !== UPLOAD_ERR_NO_FILE) {
    $voice_recording = $_FILES['voice-recording'];
    if ($voice_recording['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['audio/webm'];
        $max_size = 10 * 1024 * 1024; // 10MB
        if (!in_array($voice_recording['type'], $allowed_types)) {
            $errors[] = "Voice recording must be a WEBM file.";
        } elseif ($voice_recording['size'] > $max_size) {
            $errors[] = "Voice recording file size exceeds 10MB limit.";
        } else {
            $voice_recording_filename = 'voice_' . uniqid() . '.webm';
            $voice_recording_path = $upload_dir . $voice_recording_filename;
            if (!move_uploaded_file($voice_recording['tmp_name'], $voice_recording_path)) {
                $errors[] = "Failed to upload voice recording.";
            }
        }
    } else {
        $errors[] = "Voice recording upload error: " . $voice_recording['error'];
    }
}

// Optional email validation
if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

// Optional portfolio URL validation
if ($portfolio && !filter_var($portfolio, FILTER_VALIDATE_URL)) {
    $errors[] = "Invalid portfolio URL format.";
}

// Optional acting experience validation (ensure non-negative if provided)
if ($acting_experience !== NULL && $acting_experience < 0) {
    $errors[] = "Years of acting experience cannot be negative.";
}

// If there are errors, return them
if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul>";
    exit;
}

try {
    // Prepare SQL statement
    $sql = "INSERT INTO actor_applications (
        first_name, last_name, phone, email, location, gender, dob, marital_status, occupation,
        acting_experience, previous_roles, portfolio, languages, special_skills, height, weight,
        body_type, tattoos, travel, weekends, availability, agency, agency_info, headshot_path,
        full_body_path, voice_recording_path, created_at
    ) VALUES (
        :first_name, :last_name, :phone, :email, :location, :gender, :dob, :marital_status, :occupation,
        :acting_experience, :previous_roles, :portfolio, :languages, :special_skills, :height, :weight,
        :body_type, :tattoos, :travel, :weekends, :availability, :agency, :agency_info, :headshot_path,
        :full_body_path, :voice_recording_path, NOW()
    )";

    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':dob', $dob, PDO::PARAM_NULL);
    $stmt->bindParam(':marital_status', $marital_status);
    $stmt->bindParam(':occupation', $occupation);
    $stmt->bindParam(':acting_experience', $acting_experience, PDO::PARAM_INT);
    $stmt->bindParam(':previous_roles', $previous_roles);
    $stmt->bindParam(':portfolio', $portfolio);
    $stmt->bindParam(':languages', $languages);
    $stmt->bindParam(':special_skills', $special_skills);
    $stmt->bindParam(':height', $height);
    $stmt->bindParam(':weight', $weight);
    $stmt->bindParam(':body_type', $body_type);
    $stmt->bindParam(':tattoos', $tattoos);
    $stmt->bindParam(':travel', $travel);
    $stmt->bindParam(':weekends', $weekends);
    $stmt->bindParam(':availability', $availability);
    $stmt->bindParam(':agency', $agency);
    $stmt->bindParam(':agency_info', $agency_info);
    $stmt->bindParam(':headshot_path', $headshot_path);
    $stmt->bindParam(':full_body_path', $full_body_path);
    $stmt->bindParam(':voice_recording_path', $voice_recording_path);

    // Execute the statement
    $stmt->execute();

    // Return success message
    echo "Application Submitted Successfully";
} catch (PDOException $e) {
    echo "<ul><li>Error saving application: " . htmlspecialchars($e->getMessage()) . "</li></ul>";
    exit;
}
?>