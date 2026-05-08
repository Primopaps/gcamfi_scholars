<?php
session_start();

$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";

$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid login";
}
?>