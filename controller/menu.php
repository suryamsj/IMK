<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "page/home/home.php";
            break;
        case 'acara':
            include "page/acara/acara.php";
            break;
        case 'tentang':
            include "page/about/about.php";
            break;
        case 'ubahmhs':
            include "page/mahasiswa/edit.php";
            break;
        case 'hapusmhs':
            include "page/mahasiswa/delete.php";
            break;
        case 'fakultas':
            include "page/fakultas/index.php";
            break;
        case 'jurusan':
            include "page/jurusan/index.php";
            break;
    }
} else {
    include "page/home/home.php";
}
