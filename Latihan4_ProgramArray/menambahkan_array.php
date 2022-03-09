<?php
    $hobi = [
        "Membaca",
        "Menulis",
        "Ngeblog"
    ];

    // menambahkan isi pada indeks ke-3
    $hobi[3] = "Coding";

    // menambahkan isi pada indeks terakhir
    $hobi[] = "Olahraga";

    // cetak array dengan perulangan
    foreach($hobi as $hobiku) {
        echo $hobiku."<br>";
    }
?>