<?php
    $halaman = "berita";
    switch ($halaman) {
        case "home":
            echo "Anda memilih home";
            break;
        case "berita";
            echo "Anda memilih berita";
            break;
        case "artikel":
            echo "Anda memilih artikel";
            break;
        default:
            echo "Halaman yang Anda cari tidak tersedia";
    }
?>