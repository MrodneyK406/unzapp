<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; 
$password = "Diducthatcar31725"; 
$dbname = "unzapp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $lecturer_id = $_POST['Lecturer_id'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['GENDER'];
    $school = $_POST['school'];
    $department = $_POST['department'];
    $lecturer_email = $_POST['lecturer_email'];
    $nrc = $_POST['nrc'];
    $program_code = $_POST['program_code'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        die("Passwords do not match!");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind
    // Prepare and bind
$stmt = $conn->prepare("INSERT INTO lecturer (lecturer_id, full_name, date_of_birth, gender, school, department, lecturer_email, nrc, program_code, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssssssssss", $lecturer_id, $full_name, $date_of_birth, $gender, $school, $department, $lecturer_email, $nrc, $program_code, $password);

    
    $stmt->bind_param("ssssssssss", $lecturer_id, $full_name, $date_of_birth, $gender, $school, $department, $lecturer_email, $nrc, $program_code, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New lecturer registered successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
