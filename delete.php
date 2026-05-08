<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM info WHERE id=$id";

    if ($conn->query($sql) === TRUE) {

        // ✅ REDIRECT BACK TO VIEW PAGE
        header("Location: view.php");
        exit();

    } else {
        echo "Error deleting record: " . $conn->error;
    }

} else {
    echo "No ID provided";
}
?>