<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM info WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Scholar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4">
        <h3>Edit Scholar</h3>

        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label>Year Level</label>
            <select name="year_level" class="form-control mb-2">
                <option value="1" <?php if($row['year_level']==1) echo "selected"; ?>>1st Year</option>
                <option value="2" <?php if($row['year_level']==2) echo "selected"; ?>>2nd Year</option>
                <option value="3" <?php if($row['year_level']==3) echo "selected"; ?>>3rd Year</option>
                <option value="4" <?php if($row['year_level']==4) echo "selected"; ?>>4th Year</option>
            </select>

            <label>Name</label>
            <input type="text" name="name" class="form-control mb-2"
                   value="<?php echo $row['name']; ?>">

            <label>Birthdate</label>
            <input type="date" name="birthdate" class="form-control mb-2"
                   value="<?php echo $row['birthdate']; ?>">

            <label>Birthplace</label>
            <input type="text" name="birthplace" class="form-control mb-2"
                   value="<?php echo $row['birthplace']; ?>">

            <label>Status</label>
            <select name="status" class="form-control mb-3">
                <option <?php if($row['status']=="Completed") echo "selected"; ?>>Completed</option>
                <option <?php if($row['status']=="Partial") echo "selected"; ?>>Partial</option>
                <option <?php if($row['status']=="Missing") echo "selected"; ?>>Missing</option>
            </select>

            <button class="btn btn-primary">Update</button>
            <a href="view.php" class="btn btn-secondary">Back</a>

        </form>
    </div>

</div>

</body>
</html>