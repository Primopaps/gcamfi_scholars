<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$year_level = $_POST['year_level'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$status = $_POST['status'];

$sql = "INSERT INTO info (year_level, name, birthdate, birthplace, status)
        VALUES ('$year_level', '$name', '$birthdate', '$birthplace', '$status')";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>

<body style="font-family:Arial;text-align:center;margin-top:100px;">

<?php
if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Data inserted successfully!</h2>";
    echo "<a href='index.php'>Home</a> | <a href='view.php'>View Data</a>";
} else {
    echo "<h2>❌ Error: " . $conn->error . "</h2>";
}
$conn->close();
?>

</body>
</html>