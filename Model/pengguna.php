<?php

class Pengguna{
    public $Username;
    public $Password;
    public $Alamat;
    public $Negara;
    public $Email;
    public $IdPosisi;

    public function __construct($a,$b,$c,$d,$e,$f){
        $this->Username = $a;
        $this->Password = $b;
        $this->Alamat = $c;
        $this->Negara = $d;
        $this->Email = $e;
        $this->IdPosisi = $f;

    }


}

?>
