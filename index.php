<?php
class Mahasiswa{
    public $ipk;
    public $kelas;

    public function __construct($ipk, $kelas){
        $this->ipk      = $ipk;
        $this->kelas    = $kelas;
        $this->kuliah();
    }

    public function kuliah(){
        echo "Mahasiswa kuliah dengan ipk $this->ipk 
                di kelas $this->kelas <br>";
        $this->ujian();
    }

    public function ujian(){
        echo "Melakukan ujian<br>";
    }
}

class Aktivis extends Mahasiswa{
    public function rapat(){
        echo "rapat kegiatan<br>";
    }
}

class Asisten extends Mahasiswa{
    public function maintainlab(){
        echo "Bersih-berish lab<br>";
    }
}

$rendra = new Aktivis(3.29,"4601");
$rendra->rapat();
$gobel  = new Asisten(4.00, "4602");
$gobel->maintainlab();




