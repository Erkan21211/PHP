<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
</body>


<?php

define("FARE", 10);
define("SENIOR_AGE", 65);
define("SENIOR_DISCOUNT", 50);
define("JUNIOR_AGE", 12);
define("JUNIOR_DIscoUNT", 50);
define("KIDS_AGE", 3);
define("KIDS_DISCOUNT", 100);
$age = 80;

echo "<table>\n";

for ($i = 0; $i <= 10; $i++) {
    $age = $i;

    if ($age >= SENIOR_AGE) {
        $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
    } else if ($age < KIDS_AGE) {
        $price = FARE * ((100 - JUNIOR_DIscoUNT) / 100);
    } else if ($age <= JUNIOR_AGE) {
        $price = FARE * ((100 - JUNIOR_DIscoUNT)) / 100;
    } else {
        $price = FARE;
    }
    echo '<tr><td>Iemand van ' . $age. 'betaalt ' . $price." euro.</td></tr>\n";
}

echo '<table>';
?>
	
