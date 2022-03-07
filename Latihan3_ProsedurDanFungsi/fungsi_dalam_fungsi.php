<?php
//membuat fungsi
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam= "assalamualaikum"){
    echo $salam. ", ";
    echo "perkenalkan, nama saya". $nama. "<br/>";
    //memanggil fungsi lain
    echo "saya berusia ". hitungumur(1994, 2015) ."tahun<br/>";
    echo "senang berkenalan dengan anda <br/>";
    }
    //memanggil fungsi perkenalan
    perkenalan("Ardianta");

?>