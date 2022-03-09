<?php

    // menampilkan isi array
    // echo $barang[0]."<br>";
    // echo $barang[1]."<br>";
    // echo $barang[2]."<br>";

    $barang = ['buku tulis', 'penghapus', 'spidol'];
    
    for ($i=0; $i < count($barang); $i++) {
      echo $barang[$i] . "<br>";
    }

?>

