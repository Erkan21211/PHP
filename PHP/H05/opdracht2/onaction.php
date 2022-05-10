<?php




validateData("naam");
validateData("email");
validateData("password");

function validateData($index) {
    if (isset($_POST[$index]) && !empty($_POST[$index])) {
       $nameindex = $_POST[$index];
    } else {
        echo "Let op: je hebt geen {$index} ingevuld!<br>\n";
    }
}


$naam = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST['password'];


echo "<br> info: <br>\n";
echo "Naam: {$naam} <br>\n";
echo "email: {$email} <br>\n";
echo "password: {$password} <br>\n";