<?php

class MahlukHidup {

    function __construct(){
        echo "ini mahluk hidup";
        echo "<br>";
    }

}

class Manusia extends Mahlukhidup{

    public function Biodata($nama, $umur, $jeniskelamin)
    {
        echo $nama . " - ";
        echo $umur . " - ";
        echo $jeniskelamin ."<br>";
    }    
}
class Binatang extends Mahlukhidup{

    public function Hewan($nama, $jenis, $kelamin)
    {
        echo $nama . " - ";
        echo $jenis . " - ";
        echo $kelamin ."<br>";
    }    
}


$new = New Manusia;
$aa = New Binatang;
$new->Biodata("Usman Habib", 12, "L");
$aa->Hewan("Usman Habib", 12, "L");









 