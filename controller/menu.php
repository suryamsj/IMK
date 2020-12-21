<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "page/home/home.php";
            break;
        case 'acara':
            include "page/blog/blog.php";
            break;
        case 'tentang':
            include "page/about/about.php";
            break;
        case 'kontak':
            include "page/kontak/kontak.php";
            break;
    }
} else {
    include "page/home/home.php";
}
