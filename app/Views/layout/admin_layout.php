<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Medika Sehat</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/style.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logos">
            <img src="<?php base_url(); ?>/favicon.ico" alt="">
        </div>

        <hr class="ms-2 me-2" style="border: 1 solid black;">

        <div class="side_list">
            <h3 class="ms-2">Data</h3>
            <ul>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Dokter</a></li>
                <li><a href="#">Obat</a></li>
                <li><a href="#">Pasien</a></li>
                <li><a href="#">Resep</a></li>
            </ul>
        </div>
    </div>
    <!-- End-Sidebar -->

    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <button class="btn" href="#"><i class="fa-solid fa-bars"></i></button>
        </div>
    </nav>
    <!-- End-Navbar -->

    <!-- Content -->
    <?php $this->renderSection('content'); ?>
    <!-- End-Content -->

    <!-- Javascript -->
    <!-- ##Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/3f3f76799f.js" crossorigin="anonymous"></script>
</body>

</html>