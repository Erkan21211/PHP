<?php

class programma {
    private $naam = "";
    private $omschrijving = "";

    function getProgramma() {
        return array(
            "naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    public function setNaam($n) {
        $this->naam = $n;
    }

    public function getNaam($naam) {
        return $this->naam;
    }

    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

    public function getOmschrijving() {
        return $this->omschrijving;
    }

}

$program = new programma();
$program->setNaam("start");
$program->setOmschrijving("EVEN TESTEN");

foreach($program->getProgramma() as $p) {
    echo $p."<br>";
}


?>
