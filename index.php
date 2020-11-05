<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMATIKA - Universitas Trilogi</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="asset/css/bulma.min.css">
    <!-- Costume CSS -->
    <link rel="stylesheet" href="asset/css/costume.css">
    <!-- Blog CSS -->
    <link rel="stylesheet" href="asset/css/blog.css">
    <!-- Animasi -->
    <link rel="stylesheet" href="asset/css/animate.min.css" />
</head>

<body>
    <!-- MULAI NAVBAR -->
    <?php require('layout/navbar.php') ?>
    <!-- AKHIR NAVBAR -->

    <!-- MULAI JUMBOTRON -->
    <?php require('layout/jumbotron.php') ?>
    <!-- AKHIR JUMBOTRON -->

    <!-- KEGIATAN -->
    <?php require('layout/acara.php') ?>
    <!-- AKHIR KEGIATAN -->

    <!-- Struktur Organisasi -->
    <?php require('layout/anggota.php') ?>
    <!-- AKHIR Struktur Organisasi -->

    <!-- VISI MISI -->
    <?php require('layout/visimisi.php') ?>
    <!-- AKHIR VISI MISI -->

    <!-- FOOTER ATAS -->
    <?php require('layout/atasfooter.php') ?>
    <!-- AKHIR FOOTER ATAS -->

    <!-- MEDIA FOOTER -->
    <?php require('layout/footer.php') ?>
    <!-- AKHIR MEDIA FOOTER -->

    <!-- Javascript -->
    <script src="asset/js/main.js"></script>
</body>

</html>