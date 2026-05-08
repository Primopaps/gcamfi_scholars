<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

if (!isset($_GET['id'])) {
    die("No record selected");
}

$year_level = $_GET['id'];

$sql = "SELECT * FROM info WHERE year_level='$year_level'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Record not found");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Status</title>
</head>

<body style="font-family:Arial;text-align:center;margin-top:100px;">

<h2>Edit Status</h2>

<form action="update_status.php" method="POST">

    <input type="hidden" name="year_level" value="<?php echo $row['year_level']; ?>">

    <select name="status" required>
        <option value="Completed" <?php if($row['status']=="Completed") echo "selected"; ?>>Completed</option>
        <option value="Partial" <?php if($row['status']=="Partial") echo "selected"; ?>>Partial</option>
        <option value="Missing" <?php if($row['status']=="Missing") echo "selected"; ?>>Missing</option>
    </select>

    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>