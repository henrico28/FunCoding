<?php

class Ujian{
    public $IdUjian;
    public $Username;
    public $IdMasterSoal;
    public $Skor;

    public function __construct($a,$b,$c,$d){
        $this->IdUjian = $a;
        $this->Username = $b;
        $this->IdMasterSoal = $c;
        $this->Skor = $d;

    }


}

?>
