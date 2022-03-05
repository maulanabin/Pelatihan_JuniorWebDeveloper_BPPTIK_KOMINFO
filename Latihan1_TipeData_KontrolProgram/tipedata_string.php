<?php
    $namaDepan = "Ibnu"; // pakai tanda petik dua
    $namaBelakang = 'Jakaria'; // pakai tanda petik satu

    // menggabungkan dua variabel dengan tanda petik dua
    $namaLengkap = "{$namaDepan} {$namaBelakang}";


    // menggabungkan string dengan menggunakan tanda (.)
    $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    // [Tampilkan Data]
    // dapat memasukkan variabel lain jika menggunakan tanda petik dua
    echo "Nama Depan: {$namaDepan} <br>";

    // jika memakai tanda petik satu, tidak dapat masukkan variabel - 
    //  di dalam string, akan tetapi dapat menggabungkannya dengan operator titik (.)
    echo 'Nama Belakang: ' . $namaBelakang . '<br>';

    echo $namaLengkap;


?>