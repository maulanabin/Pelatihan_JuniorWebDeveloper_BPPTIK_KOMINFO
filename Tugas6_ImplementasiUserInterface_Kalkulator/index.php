<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 - Maulana Bintang Irfansyah</title>
    <link rel="stylesheet" href="file.css">
</head>
<body>
    <div class="div1">
        <h1>Aplikasi Kalkulator Sederhana</h1>
    </div>
    <div>
        <div class="div2">
            <form method="post">
                Bilangan 1: <input type="number" name="bil1" value="" required><br>
                Bilangan 2: <input type="number" name="bil2" value="" required><br>
                <input type="submit" value="Hitung" class="button block" >
            </form>
        </div>
        <hr>
        <div class="div3">
            <table id="myTable">
                <?php
                    if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
                        echo "<th align='left'>Operasi</th>";
                        echo "<th>Hasil</th>";
                        echo "<tr>
                                <td>Penjumlahan</td>
                                <td class='text-center'>" . penjumlahan($_POST['bil1'], $_POST['bil2']) . "</td>
                            </tr>
                            <tr>
                                <td>Pengurangan</td>
                                <td class='text-center'>" . pengurangan($_POST['bil1'], $_POST['bil2']) . "</td>
                            </tr>
                            <tr>
                                <td>Perkalian</td>
                                <td class='text-center'>" . perkalian($_POST['bil1'], $_POST['bil2']) . "</td>
                            </tr>
                            <tr>
                                <td>Pembagian</td>
                                <td class='text-center'>" . pembagian($_POST['bil1'], $_POST['bil2']) . "</td>
                            </tr>";
                    }

                    function penjumlahan ($bil1, $bil2){
                        return $bil1 + $bil2;   
                    }
                    function pengurangan ($bil1, $bil2){
                        return $bil1 - $bil2;   
                    }
                    function perkalian ($bil1, $bil2){
                        return $bil1 * $bil2;   
                    }
                    function pembagian ($bil1, $bil2){
                        return $bil1 / $bil2;   
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>