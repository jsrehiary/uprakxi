<?php
session_start();

error_reporting();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$su = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Landing Message -->
    <div class="container-fluid bg-light text-dark p-3" style="background: #C88EA7;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-3">Welcome, <span style="font-weight: 600; color: #E7B10A;"><?= $su ?></span></h2>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, odio error odit fugiat quam
                        dolore aspernatur ab. Expedita deleniti fugiat hic facere reiciendis ea quaerat deserunt
                        quibusdam, sequi perspiciatis voluptates!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <?php include 'partials/nav.php'; ?>

    <!-- Cards -->
    <div class="container mt-3 d-flex justify-content-between">
        <div class="card" style="width: 18rem;">
            <img src="assets/img2.jpg" class="card-img-top" >
            <div class="card-img-ctx"></div>
            <div class="card-body">
                <h5 class="card-title">Database Makanan</h5>
                <p class="card-text">Manajemen Menu Makanan.</p>
                <a href="app.php" class="btn btn-outline-primary">Open</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
<script>
    var element = document.getElementById("home");
    element.classList.add('active')
</script>

</html>