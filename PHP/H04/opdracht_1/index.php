<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <?php

        for ($i = -10; $i <= 40; $i++) {
            calcFahrenheitFromCelsius($i);
        }

        function calcFahrenheitFromCelsius($celsius) {
            $fahrenheit = $celsius * 1.8 + 32;
            echo "from celsius:{$celsius} is {$fahrenheit} fehrenheit<br>";
        }
    ?>
</body>
</html>