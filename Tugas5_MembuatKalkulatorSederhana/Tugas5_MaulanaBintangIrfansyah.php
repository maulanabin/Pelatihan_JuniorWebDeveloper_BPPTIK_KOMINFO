<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 - Maulana Bintang Irfansyah</title>
</head>
<body>
    <form method="POST">
        Bilangan 1 = <input type="number" name="bil_pertama"><br>
        Bilangan 2 = <input type="number" name="bil_kedua"><br>
        <input type="submit" value="Hitung">
    </form>
    <hr><hr>
    <?php
        if (isset($_POST['bil_pertama']) && isset($_POST['bil_kedua'])) { // mengecek apakah variabel sudah diset
            // memanggil fungsi penjumlahan
            echo "Hasil Penjumlahan adalah: " . penjumlahan($_POST['bil_pertama'], $_POST['bil_kedua']) . "<br>";   
            // memanggil fungsi pengurangan
            echo "Hasil Pengurangan adalah: " . pengurangan($_POST['bil_pertama'], $_POST['bil_kedua']) . "<br>";   
            // memanggil fungsi perkalian
            echo "Hasil Perkalian adalah: " . perkalian($_POST['bil_pertama'], $_POST['bil_kedua']) . "<br>";   
            // memanggil fungsi pembagian
            echo "Hasil Pembagian adalah: " . pembagian($_POST['bil_pertama'], $_POST['bil_kedua']) . "<br>";   

        }
        // fungsi untuk penjumlahan
        function penjumlahan($bil_pertama, $bil_kedua) {
            return $bil_pertama + $bil_kedua;
        }
        // fungsi untuk pengurangan
        function pengurangan ($bil_pertama, $bil_kedua) {
            return $bil_pertama  - $bil_kedua;
        }
        // fungsi untuk perkalian
        function perkalian ($bil_pertama, $bil_kedua) {
            return $bil_pertama * $bil_kedua;
        }
        // fungsi untuk pembagian
        function pembagian ($bil_pertama, $bil_kedua) {
            return $bil_pertama / $bil_kedua;
        }
    ?>

</body>
</html>