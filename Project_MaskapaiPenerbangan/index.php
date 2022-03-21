<?php
//ambil data dari file JSON
$data = file_get_contents('data/bandara.json');
$dataRute = file_get_contents('data/daftar_rute.json');

if($data !== false)
{
    //convert data json ke array assoc
    $jsonData = json_decode($data, true);
}

if($dataRute !== false)
{
    //convert data json ke array assoc
    $jsonRute = json_decode($dataRute, true);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Project - Maulana Bintang Irfansyah</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            <div class="col-12 text-center m-4">
                <h1>Pendaftaran Rute Penerbangan</h1>
            </div>
            <div class="col-4">
                <h4>Form Pengisian Data Maskapai</h4>
                <hr>
                <form method="post" id="inputForm" action="proses.php">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Maskapai</label>
                        <div class="col-md-10">
                            <input type="text" name="maskapai" class="form-control" placeholder="Nama Maskapai" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Bandara Asal</label>
                        <div class="col-md-10">
                            <select name="bandara_asal" class="form-control" required>
                                <option value="">--Pilih--</option>
                                <?php
                                //keluarkan data bandara dari file json
                                //jika data tidak NULL
                                if($jsonData != NULL){
                                    foreach($jsonData as $data):
                                        echo "<option value=\"".$data['code']."\">".$data['nama_bandara']." (".$data['code'].")</option>";
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Bandara Tujuan</label>
                        <div class="col-md-10">
                            <select name="bandara_tujuan" class="form-control" required>
                                <option value="">--Pilih--</option>
                                <?php
                                //keluarkan data bandara dari file json
                                //jika data tidak NULL
                                if($jsonData != NULL){
                                    foreach($jsonData as $data):
                                        echo "<option value=\"".$data['code']."\">".$data['nama_bandara']." (".$data['code'].")</option>";
                                    endforeach;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Harga Tiket</label>
                        <div class="col-md-10">
                            <input type="number" name="harga_tiket" class="form-control" placeholder="Harga Tiket" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label"></label>
                        <div class="col-md-10 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-8">
                <h4>Daftar Rute Tersedia</h4>
                <hr>
                <nav class="nav nav-pills nav-fill mb-3">
                    <a class="btn btn-info nav-link" href="export_excel.php">Export to Excel</a>
                </nav>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Maskapai</th>
                            <th class="text-center">Asal Penerbangan</th>
                            <th class="text-center">Tujuan Penerbangan</th>
                            <th class="text-center">Harga Tiket</th>
                            <th class="text-center">Pajak</th>
                            <th class="text-center">Total Harga Tiket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //keluarkan data dari hasil convert json
                        //ke dalam list table
                        //cek apakah $jsonRute memiliki data / tidak NULL
                        if($jsonRute != NULL)
                        {
                            //lakukan perulangan untuk ambil data
                            foreach($jsonRute as $rute):
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $rute['maskapai']; ?></td>
                            <td class="text-center"><?php echo $rute['asal']; ?></td>
                            <td class="text-center"><?php echo $rute['tujuan']; ?></td>
                            <td class="text-center"><?php echo $rute['harga_tiket']; ?></td>
                            <td class="text-center"><?php echo $rute['pajak']; ?></td>
                            <td class="text-center"><?php echo $rute['total_harga']; ?></td>
                        </tr>
                        <?php
                            endforeach;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>