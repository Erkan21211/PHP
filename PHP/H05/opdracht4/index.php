<?php

    $users = [
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
<?php if (!isset($_POST['knop'])) { ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"
        <h1></h1>
        Naam: <input type="text" name="mailadres" placeholder="mailadres"><br>
        Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
        <input type="submit" name="knop" value="VERSTUUR">
    </form>

    <?php
} else {
    
    if (!isset($_POST['mailadres']) or empty($_POST['mailadres'])){
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    if (!isset($_POST['wachtwoord']) or empty($_POST['wachtwoord'])){
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];

    foreach ($users as $key => $value) {
        if ($key == $mailadres && $value == $wachtwoord) {
            exit("welkom");
        }
    }

    exit("sorry geen toegang!");
}

?>
</body>
</html>