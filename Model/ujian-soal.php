<?php

class Ujian_Soal{
    public $IdUjian;
    public $IdSoal;
    public $Jawaban;

    public function __construct($a,$b,$c){
        $this->IdUjian = $a;
        $this->IdSoal = $b;
        $this->Jawaban = $c;
    }


}

?>
