<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$year_level = $_POST['year_level'];

$sql = "INSERT INTO info (name, birthdate, birthplace, year_level, status)
        VALUES ('$name', '$birthdate', '$birthplace', '$year_level', 'Pending')";

if ($conn->query($sql)) {
    header("Location: view.php");
} else {
    echo "Error: " . $conn->error;
}
?>