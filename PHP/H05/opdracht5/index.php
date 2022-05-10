<?php

    $users = [
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ];

    

    function checkdata($mailadres, $wachtwoord) {
        global $users;
        foreach ($users as $key => $value) {
            if ($key == $mailadres AND $value == $wachtwoord) {
                return true;
            }
        }
    
        return false;
    }

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
    <style>
        .error {
            color: red;
        }
    </style>
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
    if (isset($_SESSION['error']) AND !empty($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . "</div>";
        $_SESSION['error'] = null;
    }
    ?>
    <?php
} else {
    
    if (!isset($_POST['mailadres']) or empty($_POST['mailadres'])){
        $_SESSION['error'] = "Je bent vergeten je mailadres in te vullen";
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    if (!isset($_POST['wachtwoord']) or empty($_POST['wachtwoord'])){
        $_SESSION['error'] = "Je bent vergeten je wachtwoord in te vullen";
        header("Location: " . $_SERVER['PHP_SELF']);
    }


    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];


    if (checkdata($mailadres, $wachtwoord)) {
        exit("Welkom");
    } else {
        exit("Sorry geen toegang");
    }

    
}

?>
</body>
</html>