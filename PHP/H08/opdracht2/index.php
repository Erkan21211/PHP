<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr wheely</title>
    <style>
        img {
        width:100px;
        height: 100px;
        }

    </style>
</head>
<body>


    <form action="index.php" method="GET">

        <label for="merk">Merk:</label>
        <select id="merk" name="merk">
            <option value="audi">Audi</option>
            <option value="ferrari">Ferrari</option>
            <option value="fiat">Fiat</option>
        </select>

        
        <label for="minPrijs">Minimale prijs:</label>
        <input type="text" name="minPrijs" id="minPrijs">

        <label for="maxPrijs">maximale prijs:</label>
        <input type="text" name="maxPrijs" id="maxPrijs">
        <input type="submit">
    </form>

<?php

require('Auto.php');

$merk = isset($_GET['merk']) && !empty($_GET['merk']) ? $_GET['merk'] : 0;
$minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
$maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 99999999;



$autos =  [
    new Auto('audi', '102500.00', 'https://source.unsplash.com/random/?audi'),
    new Auto('ferrari', '99500.00' ,'https://source.unsplash.com/random/?ferrari'),
    new Auto('fiat', '10500.00', 'https://source.unsplash.com/random/?Fiat')
];

foreach($autos as $auto) {
    if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs && $auto->getmerk() == $merk) {
        echo $auto->getmerk() . '<br>';
        echo $auto->getprijs() . '<br>';
        echo '<img src=" '. $auto->getFoto() .' " alt="auto">' . '<br>';
    }
}


?>
</body>
</html>
