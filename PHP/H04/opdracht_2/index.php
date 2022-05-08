<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <?php

        for ($i = -5; $i <= 15; $i++) {
            $welofniet = checknumber($i) ? "" : " NIET ";
            echo "{$i} is {$welofniet} deelbaar door 3.<br>\n";
        }

        function checknumber($number) {
            return $number % 3 === 0;
        }
    ?>
</body>
</html>