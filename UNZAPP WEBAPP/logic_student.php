<?php
// Database connection parameters for the student sign up
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
    if(isset($_POST['sign-up-student'])) {
        $student_id = $_POST['student_id'];
        $full_name = $_POST['full_name'];
        $gender = $_POST['GENDER'];
        $date_of_birth = $_POST['date_of_birth'];
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
        $stmt = $conn->prepare("INSERT INTO students (student_id, full_name, gender, date_of_birth, nrc, program_code, password) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("sssssss", $student_id, $full_name, $gender, $date_of_birth, $nrc, $program_code, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New student registered successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid form submission.";
    }
} else {
    echo "Invalid request method.";
}
?>
