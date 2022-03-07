<?php
    // membuat fungsi
    function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    // memanggil fungsi yang telah dibuat
    perkenalan("Maulana", "Hi");

    echo "<hr>";
    
    $saya = "Indry";
    $ucapanSalam = "Selamat pagi";

    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);
?>  