<?php


class radioprogramma {

    private $titel;
    private $artiest;
    private $leidjes = array();

    function __construct($t, $a) {
        $this->titel = $t;
        $this->artiest = $a;
    }

    public function addSong($leidje) {
        $this->leidjes[] = $leidje;
    }

    public function getSong() {
        return $this->leidjes;
    }

    function getProgramma() {
        return array(
            "naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    public function getTitel() {
        return $this->titel;
    }

    public function setTitel($titel) {
        $this->titel = $titel;
    }

    public function getAriest() {
        return $this->artiest;
    }

    public function setAriest($artiest) {
        $this->artiest = $artiest;
    }

}

$newsong = new radioprogramma("rick roll", "ik wil kaas");
$newsong2 = new radioprogramma("youssef", "rijst eten");

$newsong->addSong($newsong);
foreach($newsong->getSong() as $leidje) {
    echo $leidje->getTitel(). " - ". $leidje->getAriest(). "<br>";
}

$newsong2->addSong($newsong2);
foreach($newsong2->getSong() as $leidje) {
    echo $leidje->getTitel(). " - ". $leidje->getAriest(). "<br>";
}


?>