<?php

class auto {

    private $merk;
    private $prijs;
    private $foto_url;


    function __construct($merk, $prijs, $foto_url) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->foto_url = $foto_url;
    }

    function getFoto() {
        return $this->foto_url;
    }

    function getmerk() {
        return $this->merk;
    }

    function setmerk($merk) {
        $this->merk = $merk;
    }

    function getprijs() {
        return $this->prijs;
    }

    function setprijs($prijs) {
        $this->prijs = $prijs;
    }


    
}



?>