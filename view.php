<?php
include "session_check.php";
?>

<nav class="navbar navbar-dark bg-warning">
    <div class="container-fluid">

        <!-- ☰ BUTTON -->
        <button class="btn btn-light"
    data-bs-toggle="offcanvas"
    data-bs-target="#sidebar">
    ☰
</button>

        <!-- TITLE -->
        <span class="navbar-brand d-flex align-items-center text-dark">
    <img src="gcamfi_logo.jpg" alt="Logo" width="100" height="40" class="me-2">
    Gonzalo and Carmen Abaya Memorial Foundation, Inc.
</span>

        <!-- ADMIN NAME -->
        <span class="text-black">
            <?php echo $_SESSION['user'] ?? 'Guest'; ?>
        </span>

    </div>
</nav>

<!-- SIDEBAR MENU -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <<div class="offcanvas-body">
    <a href="dashboard.php" class="btn btn-warning w-100 mb-2">Dashboard</a>
    <a href="index.php" class="btn btn-danger w-100 mb-2">Add Scholar</a>
    <a href="application.php" class="btn btn-info w-100 mb-2">Application Form</a>
    <a href="view.php" class="btn btn-secondary w-100 mb-2">View Records</a>
    <a href="logout.php" class="btn btn-dark w-100 mt-3">Logout</a>
</div>
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Scholars Records</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<hr>



<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Scholars Records</h3>
        <a href="index.php" class="btn btn-success">+ Add Scholars</a>
    </div>


            </div>

    <!-- SEARCH BAR -->
    <form method="GET" class="mb-3 d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search name...">
        <button class="btn btn-primary">Search</button>
        <a href="view.php" class="btn btn-secondary">Reset</a>
    </form>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-bordered table-hover mb-0 text-center">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Year Level</th>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>Birthplace</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

<?php
$conn = new mysqli("localhost", "root", "", "gcamfi_scholars");

$search = isset($_GET['search']) ? $_GET['search'] : '';

if ($search != '') {
    $sql = "SELECT * FROM info 
            WHERE name LIKE '%$search%' 
            OR birthplace LIKE '%$search%' 
            OR status LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM info";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $count = 1;

    while($row = $result->fetch_assoc()) {
?>


<tr>
    <td><?php echo $count++; ?></td>

    <td>
        <?php
        if ($row['year_level'] == 1) echo "1st Year";
        elseif ($row['year_level'] == 2) echo "2nd Year";
        elseif ($row['year_level'] == 3) echo "3rd Year";
        elseif ($row['year_level'] == 4) echo "4th Year";
        else echo "Not Set";
        ?>
    </td>

    
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['birthdate']; ?></td>
    <td><?php echo $row['birthplace']; ?></td>

    <td>
        <?php
    $status = $row['status'];

    if ($status == "Completed") {
        echo "<span style='color:green;'>Completed</span>";
    } elseif ($status == "Partial") {
        echo "<span style='color:orange;'>Partial</span>";
    } elseif ($status == "Pending") {
    echo "<span style='color:blue;'>Pending</span>";
    }   else {
        echo "<span style='color:red;'>Missing</span>";
    } 
}
    ?>

       
    </td>

    <td>
    
    <a href="edit.php?id=<?php echo $row['id']; ?>" 
       class="btn btn-warning btn-sm" title="Edit">
        <i class="fas fa-edit"></i>
    </a>
    
    <a href="delete.php?id=<?php echo $row['id']; ?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Are you sure you want to delete this record?')"
       title="Delete">
        <i class="fas fa-trash"></i>
    </a>
</td>
</tr>

<?php
    }
 else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}
?>


                </tbody>
            </table>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>