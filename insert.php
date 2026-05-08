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
