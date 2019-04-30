<?php

class Level{
    public $IdSertifikat;
    public $Waktu;
    public $Username;

    public function __construct($a,$b,$c){
        $this->IdSertifikat = $a;
        $this->Waktu = $b;
        $this->Username = $c;
    }


}

?>
