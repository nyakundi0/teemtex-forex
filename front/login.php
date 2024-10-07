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

$message = ""; // Variable to hold alert messages

// Handling the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE phone='$phone'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Update last_login timestamp
            $updateLoginSql = "UPDATE users SET last_login = NOW() WHERE id = ?";
            $stmt = $conn->prepare($updateLoginSql);
            $stmt->bind_param("i", $user['id']);
            $stmt->execute();

            // Store user data in session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the user ID
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];

            // Redirect to dashboard
            echo "<script>
                    window.location.href='Dashboard.php';
                  </script>";
        } else {
            // Invalid password
            $message = "Invalid phone number or password. Please try again.";
            echo "<script>alert('$message'); window.location.href='login';</script>";
        }
    } else {
        // No account found with the provided phone number
        $message = "No account found with this phone number. Please sign up.";
        echo "<script>alert('$message'); window.location.href='signup';</script>";
    }
}

$conn->close();
?>
