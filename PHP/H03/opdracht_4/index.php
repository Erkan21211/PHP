<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 200px
        }
        img.green-border {
            border: solid 2px green;
        }
        img.red-border {
            border: solid 2px red;
        }
    </style>
</head>
<body>
</body>


<?php

for ($i = 1; $i <= 5; $i++) {

    if ($i % 2 == 0) {
        echo '<img class="red-border" src="apen/aap'. $i .'.png" alt="aap '. $i .'">';
    } else {
        echo '<img class="green-border" src="apen/aap'. $i .'.png" alt="aap '. $i .'">';
    }

}


?>
	
