<?php

$user = "schooluser";
$pass = "ServerlocalhostSL";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306;', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        echo '<br><table><br>';
        print_r($row);
        echo '<br></table><br>';
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>