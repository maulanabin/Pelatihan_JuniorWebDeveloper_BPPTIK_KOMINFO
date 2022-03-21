<?php
/**
 * FILE ini untuk memproses hasil input form data maskapai
 */
//cek apakah ada kiriman data dari form
//jika iya proses
if(isset($_POST))
{
    //ambil data dari file JSON
    $data = file_get_contents('data/bandara.json');
    if($data !== false)
    {
        //convert data json ke array assoc
        $jsonData = json_decode($data, true);
    }
    //ambil data kiriman form dan masukkan ke dalam variable baru
    $maskapai = $_POST['maskapai'];
    $bandaraAsal = $_POST['bandara_asal']; //menampung kode bandara
    $bandaraTujuan = $_POST['bandara_tujuan']; //menampung kode bandara
    $hargaTiket = $_POST['harga_tiket'];

    //cari data pajak masing-masing
    $pajakAsal = 0;
    $asalText = "";
    $pajakTujuan = 0;
    $tujuanText = "";
    $totalPajak = 0;
    foreach($jsonData as $baris):
        if($bandaraAsal == $baris['code'])
        {
            $pajakAsal = $baris['pajak'];
            $asalText = $baris['nama_bandara']." (".$baris['code'].")";
        }

        if($bandaraTujuan == $baris['code'])
        {
            $pajakTujuan = $baris['pajak'];
            $tujuanText = $baris['nama_bandara']." (".$baris['code'].")";
        }
    endforeach;
    //kalkulasi total pajak
    $totalPajak = $pajakAsal + $pajakTujuan;

    //buat data baru
    $newData = array(
        'maskapai' => $maskapai,
        'asal' => $asalText,
        'tujuan' => $tujuanText,
        'harga_tiket' => $hargaTiket,
        'pajak' => $totalPajak,
        'total_harga' => $hargaTiket + $totalPajak
    );

    //ambil data yang ada
    $listData = file_get_contents('data/daftar_rute.json');
    //convert data json yang ada ke data array
    $tempData = json_decode($listData);
    //masukkan array baru dari inputan user
    //cek apakah ada data 
    //jika tidak ada data maka buat data baru
    if($tempData == NULL)
    {
        $tempData = array();
    }
    array_push($tempData, $newData);
    //convert data array ke json 
    $jsonNewData = json_encode($tempData);
    //masukkan ke file
    file_put_contents('data/daftar_rute.json', $jsonNewData);
    
    //redirect ke halaman awal
    header('Location:index.php');
    exit();

} else {
    //jika tidak tampilkan error
    echo "Invalid request.";
    exit();
}