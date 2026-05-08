<?php include "session_check.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>GCAMFI Application Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ===================== GLOBAL ===================== */

body {
    margin: 0;
    padding: 0;
    background: #f5f5f5;
    font-family: "Times New Roman", serif;
    font-size: 15px;
    color: #000;
}

/* ===================== PAGE ===================== */

.page {
    width: 8.5in;
    height: 11in;
    margin: 10px auto;
    padding: 0.4in;
    box-sizing: border-box;
    background: white;
    overflow: hidden;
}

/* ===================== TEXT ===================== */

h4 {
    font-size: 17px;
    font-weight: bold;
    margin: 3px 0;
}

p {
    margin: 2px 0;
    font-size: 14px;
    line-height: 1.2;
}

/* ===================== INPUT ===================== */

.line-input {
    font-family: "Times New Roman", serif;
    font-size: 13px;
    border: none;
    border-bottom: 1px solid black;
    height: 18px;
    width: 100%;
    padding: 0;
}

/* ===================== LIST ===================== */

.option-space {
    display: inline-block;
    margin-right: 20px; /* space between options */
}

.committee-list {
    font-size: 17px;
    line-height: 1.8; /* improves readability */
}

.committee-list input[type="checkbox"] {
    transform: scale(1.2); /* adjust size */
    margin-right: 5px;
}

/* =====================ALIGN =======================*/

.form-group-row {
    display: flex;
    align-items: center;
    gap: 10px; /* space between label and input */
    margin-bottom: 10px;
}

.line-input {
    flex: 1; /* input takes remaining space */
    border: none;
    border-bottom: 1px solid #000;
    outline: none;
    font-size: 14px;
}

/* ===================== BOXES ======================*/

.committee-box {
    font-size: 16px; /* change this */
}

.committee-box input[type="checkbox"] {
    transform: scale(1.2); /* adjust size */
    margin-right: 5px;
}

/*====================== PLEDGE TEXT ==================*/

.pledge-text {
    font-size: 18px; /* adjust as needed */
}

/*====================== TRUSTEE TEXT ====================*/

.trustee-text {
    font-size: 16px; /* adjust this */
}

/* ===================== NOTE ===================== */

.form-note {
    font-size: 17px;
    margin: 3px 0;
    line-height: 1.2;
}

/* ===================== SIGNATURE ===================== */

.print-signature {
    margin-top: 8px;
}

.sig-wrapper {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

.sig-box {
    width: 50%;
    font-size: 14px;
}

/* ===================== BUTTON ===================== */

.no-print {
    display: block;
}

/* ===================== PRINT FIX ===================== */

@media print {

    @page {
        size: 8.5in 11in;
        margin: 0;
    }

    html, body {
        width: 8.5in;
        height: 11in;
        margin: 0 !important;
        padding: 0 !important;
        background: white;
    }

    body {
        font-family: "Times New Roman", serif;
        font-size: 14px;
    }

    .container {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .page {
        width: 8.5in;
        height: 11in;
        margin: 0;
        padding: 0.35in;
        box-shadow: none;
        overflow: hidden;
        page-break-after: always;
    }

    .row {
        display: flex !important;
        flex-wrap: nowrap !important;
    }

    .col-md-6, .col-md-4 {
        flex: 1 !important;
        max-width: 100% !important;
    }

    .no-print {
        display: none !important;
    }

    * {
        box-sizing: border-box;
    }
}

</style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-3 mb-3">

<!-- PRINT BUTTON -->
<div class="d-flex justify-content-between align-items-center mb-3 no-print">
    
    <button class="btn btn-primary" type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#sidebar">
        ☰
    </button>

    <button onclick="window.print()" class="btn btn-success">
        Print Form
    </button>

</div>

<!-- ================= SIDEBAR MENU ================= -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title"><strong>Menu</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
    <a href="dashboard.php" class="btn btn-warning w-100 mb-2">Dashboard</a>
    <a href="index.php" class="btn btn-danger w-100 mb-2">Add Scholar</a>
    <a href="application.php" class="btn btn-info w-100 mb-2">Application Form</a>
    <a href="view.php" class="btn btn-secondary w-100 mb-2">View Records</a>
    <a href="logout.php" class="btn btn-dark w-100 mt-3">Logout</a>
</div>
</div>

<!-- ================= PAGE 1 ================= -->
<div class="page">

    <div class="row">
        <div class="col-md-6">
            <img src="gcamfi_logo.jpg" width="200">
        </div>

        <div class="col-md-6 text-end">
            <strong>G/F CEPALCO Administration Bldg.</strong><br>
            Fr. Masterson Avenue, Upper Balulang, 
            <br>Cagayan de Oro City 9000 <br>
            Email: gcamfi@cepalco.com.ph<br>
            Tel Nos.: (08822)744481; (088)853-4900
        </div>
    </div>

    <h4 class="text-center"><u>APPLICATION FORM</u></h4>

    <br>

   <div class="form-group-row">
    <strong>NAME:</strong>
    <input type="text" class="line-input">
</div>

<div class="form-group-row">
    <strong>ADDRESS:</strong>
    <input type="text" class="line-input">
</div>

<div class="row">
    <div class="col-md-4 form-group-row">
        <strong>TELEPHONE:</strong>
        <input type="text" class="line-input">
    </div>

    <div class="col-md-4 form-group-row">
        <strong>AGE:</strong>
        <input type="text" class="line-input">
    </div>

    <div class="col-md-4 form-group-row">
        <strong>SEX:</strong>
        <input type="text" class="line-input">
    </div>
</div>

    <br>

 <p class="committee-list">
    I would like to be a:
    <span class="option-space">
        <input type="checkbox"> <strong>Member</strong>
    </span>

    <span class="option-space">
        <input type="checkbox"> <strong>Benefactor</strong>
    </span>

    of the <strong>GONZALO and CARMEN ABAYA MEMORIAL FOUNDATION, INC. (GCAMFI).</strong>
</p>

<p class="committee-list">
    I would like to volunteer to help the foundation by being a member of a committee.
    Please check (you may check more than one).
</p>

    <div class="row committee-box">
        <div class="col-md-6">
            <input type="checkbox"> Ways & Means Committee<br>
            <input type="checkbox"> Beneficiary Screening Committee <br>
            <input type="checkbox"> Committee on Students
        </div>

        <div class="col-md-6">
            <input type="checkbox"> Committee on Schools <br>
            <input type="checkbox"> Committee on Teachers <br>
            <input type="checkbox"> Membership Growth & Development<br>
        </div>
    </div>

    <br>

    <p class="pledge-text">I would like to pledge financial support to the foundation.</p>

    <label style="margin-right:20px;">
    <input type="checkbox"> Yes
    </label>

    <label>
    <input type="checkbox"> No
    </label>

    <p class="committee-list">If yes, how much: <strong>PHP</strong> ____________</p>

    <div class="row committee-list">
        <div class="col-md-6">
            <input type="checkbox"> Monthly <br>
            <input type="checkbox"> Semi-Annual
        </div>

        <div class="col-md-6">
            <input type="checkbox"> Quarterly <br>
            <input type="checkbox"> Annual
        </div>
    </div>

    <p class="form-note">
        (<strong>NOTE:</strong> Pledge is for 1 year and renewable every year unless stopped through a written notice to the Treasurer)
    </p>

    <div class="print-signature sig-wrapper">

        <div class="sig-box">
            <p class="trustee-text">
            <br><br><strong>Approved by:</strong><br>
            <br>________________________
            </p>
            
            <p class="trustee-text">
                <strong>Trustee In-charge, Membership & Growth Development Committee</strong>
            </p>
             
            <p class="trustee-text"> <strong>Date: ____________ </strong>
            </p>
        </div>

        <div class="sig-box text-center">
            <br>____________________<br>
            <p class="trustee-text"> <strong>Signature</strong> </p>
            <br>
            <p class="trustee-text"><br><strong>Noted by:</strong></p>
             ____________________<br> 
            <p class="trustee-text"><strong>Foundation Chairman</strong></p>
        </div>

    </div>

</div>

<!-- ================= PAGE 2 ================= -->
<div class="page">

    <h4 class="text-center">DONATION PLEDGE</h4>

    <br>

    I pledge to donate PHP
    <input type="text" class="line-input" style="width:250px; display:inline-block;">

    <br>

    Every
    <input type="text" class="line-input" style="width:250px; display:inline-block;">

    (15 Days, Monthly, Semi-Annual, Annual)

    <br><br>

    <strong>Please Check:</strong><br><br>

    <input type="checkbox"> I will authorize the deduction of the amount in my payroll.<br>
    <input type="checkbox"> I will remit the amount personally to the Foundation office.<br>

    <br><br><br>

    <strong>Signature: ____________________</strong> <br>
    <strong>Name: ________________________</strong> <br>
    <strong>Date: ________________________</strong>

</div>

</div>

</body>
</html>