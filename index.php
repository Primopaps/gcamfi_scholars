<?php
include "session_check.php";
?>

<!-- TOP NAVBAR -->
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

    <div class="offcanvas-body">
        <a href="dashboard.php" class="btn btn-warning w-100 mb-2">Dashboard</a>
        <a href="index.php" class="btn btn-danger w-100 mb-2">Add Scholar</a>
        <a href="view.php" class="btn btn-secondary w-100">View Records</a>
        <a href="logout.php" class="btn btn-dark w-100 mt-3">Logout</a>
    </div>
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Add Scholar</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-danger text-black text-center">
                    <h4 class="mb-0">Add Scholars</h4>
                </div>

                <div class="card-body">

                    <form action="insert.php" method="POST">

                        <!-- YEAR LEVEL -->
                        <div class="mb-3">
                            <label class="form-label">Year Level</label>
                            <select name="year_level" class="form-select" required>
                                <option value="">Select Year Level</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div>

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <!-- BIRTHDATE -->
                        <div class="mb-3">
                            <label class="form-label">Birthdate</label>
                            <input type="date" name="birthdate" class="form-control" required>
                        </div>

                        <!-- BIRTHPLACE -->
                        <div class="mb-3">
                            <label class="form-label">Birthplace</label>
                            <input type="text" name="birthplace" class="form-control" required>
                        </div>

                        <!-- STATUS -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="">Select Status</option>
                                <option value="Completed">Completed</option>
                                <option value="Partial">Partial</option>
                                <option value="Missing">Missing</option>
                            </select>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-danger w-100">
                            Add Scholars
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>