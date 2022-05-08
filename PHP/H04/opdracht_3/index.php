<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <?php

        echo reverseString("Erkan");
         
        function reverseString($String) {

            $Length = strlen($String);
            for ($i = $Length - 1; $i >= 0 ; $i--) {
                $reversedenaam .= substr($String, $i, 1);
            }

            return $reversedenaam;
        }
        
    ?>
</body>
</html>