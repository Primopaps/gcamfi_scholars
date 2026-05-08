<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$id = $_POST['id'];
$year = $_POST['year_level'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$status = $_POST['status'];

$sql = "UPDATE info SET 
        year_level='$year',
        name='$name',
        birthdate='$birthdate',
        birthplace='$birthplace',
        status='$status'
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>