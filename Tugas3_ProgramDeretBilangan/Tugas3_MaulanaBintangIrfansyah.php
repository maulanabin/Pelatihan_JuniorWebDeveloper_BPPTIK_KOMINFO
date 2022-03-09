<?php
    // Maulana Bintang Irfansyah - JWD
    echo "=============== CETAK BILANGAN GANJIL GENAP 1-100===============<br>"; // menampilkan tulisan judul dengan memberikan komentar
    for ($j = 1; $j <= 100; $j++) { // menggunakan for loop untuk perulangan sampai 100
        if ($j % 2 == 0) { // menggunakan kondisi if else untuk dengan kondisi sisa bagi / modulo untuk mendapatkan nilai bilangan genap dan ganjil
            echo "$j adalah Bilangan Genap <br>";
        } else {
            echo "$j adalah Bilangan Ganjil <br>";
    
        }
    }
?>