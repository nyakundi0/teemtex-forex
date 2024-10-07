<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "teemtexc_Simon352";
$password = "Simon352.";
$dbname = "teemtexc_teemtex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match. Please <a href='signup'>try again</a>.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

    // Check if phone or email already exists
    $checkUser = $conn->query("SELECT * FROM users WHERE phone='$phone' OR email='$email'");
    
    if ($checkUser->num_rows > 0) {
        $message = "Phone number or Email already exists. Please login instead.";
        echo "<script>alert('$message'); window.location.href='login';</script>";
    } else {
        // SQL query to insert user data with automatic reg_date
        $sql = "INSERT INTO users (first_name, last_name, username, phone, email, password)
                VALUES ('$first_name', '$last_name', '$username', '$phone', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Set session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("Location: Dashboard.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
