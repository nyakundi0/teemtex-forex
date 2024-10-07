<?php
$servername = "localhost";
$username = "Simon352";
$password = "Simon352.";
$dbname = "teemtex";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
