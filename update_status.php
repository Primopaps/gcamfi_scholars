<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$year_level = $_POST['year_level'];
$status = $_POST['status'];

$sql = "UPDATE info SET status='$status' WHERE year_level='$year_level'";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>