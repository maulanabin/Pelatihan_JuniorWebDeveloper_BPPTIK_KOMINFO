<?php
//load file autoload composer
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//ambil data rute dari file json
$dataRute = file_get_contents('data/daftar_rute.json');
if($dataRute !== false)
{
    //convert data json ke array assoc
    $jsonRute = json_decode($dataRute, true);
} else {
    //bila tidak ada file atau data kosong
    //tampilkan pesan error bahwa data tidak ada
    echo "file data rute tidak ada.";
    exit;
}

//memanggil Class Spreadsheet dan membuat object active sheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
//set width kolom
$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(25);
$sheet->getColumnDimension('C')->setWidth(35);
$sheet->getColumnDimension('D')->setWidth(35);
$sheet->getColumnDimension('E')->setWidth(20);
$sheet->getColumnDimension('F')->setWidth(20);
$sheet->getColumnDimension('G')->setWidth(20);


//buat header untuk kolom
$sheet->setCellValue('A1', 'No.');
$sheet->setCellValue('B1', 'Maskapai');
$sheet->setCellValue('C1', 'Asal Penerbangan');
$sheet->setCellValue('D1', 'Tujuan Penerbangan');
$sheet->setCellValue('E1', 'Harga Tiket');
$sheet->setCellValue('F1', 'Pajak');
$sheet->setCellValue('G1', 'Total Harga Tiket');

//inisiasi row
$i = 2; //start di row 2 karena row 1 untuk kolom
$no = 1;
foreach($jsonRute as $rute):
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $rute['maskapai']);
    $sheet->setCellValue('C'.$i, $rute['asal']);
    $sheet->setCellValue('D'.$i, $rute['tujuan']);
    $sheet->setCellValue('E'.$i, $rute['harga_tiket']);
    $sheet->setCellValue('F'.$i, $rute['pajak']);
    $sheet->setCellValue('G'.$i, $rute['total_harga']);
    //penambahan $i untuk berlanjut ke baris berikut nya
    $i++;
endforeach;

//untuk buat border pada excel
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:G'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('export/export_data_rute_'.date('Ymd_His').'.xlsx');

header('Location:index.php');
exit();