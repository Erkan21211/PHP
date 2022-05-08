<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 6</title>
    <style>
        
        tr, td {
            border: solid 1px grey;
            border-collapse: collapse;
        }
        
        td {
            padding: 10px;
        }

        td.borderless {
            border: none;
        }


        img {
            gap: 10px;
            width: 100px;
            height: 100px;
        }

    </style>
</head>
<body>

<?php

$zwemclubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];

echo '<table>';

foreach ($zwemclubs as $clubnaam => $aantal_leden) {
    echo '<tr>';
    echo '<td>' . $clubnaam . '</td>';
    echo '<td>' . $aantal_leden . '</td>';
    $aantal_plaatjes = floor($aantal_leden / 5);
    echo '<td>';
    for ($i = 0; $i < $aantal_plaatjes; $i++) {
        echo '<img src="https://source.unsplash.com/random/?swimmer" alt="Zwemmer">';
    }
    echo '</td>';
    echo '</tr>';
}

echo '</table>';

?>
</body>
</html>
	
<!-- https://source.unsplash.com/random/?swimmer -->