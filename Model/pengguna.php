<?php

class Pengguna{
    public $Username;
    public $Password;
    public $NamaPengguna;
    public $Negara;
    public $Email;
    public $IdPosisi;

    public function __construct($a,$b,$c,$d,$e,$f){
        $this->Username = $a;
        $this->Password = $b;
        $this->NamaPengguna = $c;
        $this->Negara = $d;
        $this->Email = $e;
        $this->IdPosisi = $f;

    }


}

?>
