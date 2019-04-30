<?php

class Soal{
    public $IdSoal;
    public $NamaSoal;
    public $JawabanSoal;
    public $IdMasterSoal;

    public function __construct($a,$b,$c,$d){
        $this->IdSoal = $a;
        $this->NamaSoal = $b;
        $this->JawabanSoal = $c;
        $this->IdMasterSoal = $d;

    }


}

?>
