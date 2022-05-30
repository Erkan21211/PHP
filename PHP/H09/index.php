<?php

session_start();
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>bakkerij Wim Vlecht</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style>
        body {
            background-image: url("./images/brood-winkel.jpg");
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        td, th {
            width: 100%;
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        .form-row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }

        label {
            font-size: 20px;
        }
        </style>
    </head>
<body>

    <form action="index.php" method="POST" class="">


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="soortMeel">Soort meel:</label>
                <input class="form-control" type="text" name="soortMeel" id="soortMeel">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="vorm">Soort vorm:</label>
                <input class="form-control" type="text" name="vorm" id="vorm">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gewicht">gewicht:</label>
                <input class="form-control" type="number" name="gewicht" id="gewicht">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gewicht">row aanpassen:</label>
                <input class="form-control" type="number" name="arr_input" id="arr_input">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <input class="btn btn-primary" type="submit" name="add" value="add">
                <input class="btn btn-primary" type="submit" name="update" value="update">
            </div>
        </div>

    </form>



<?php

class brood {

    public $soort_meel;
    public $vorm_brood;
    public $gewicht;

    function __construct($soort_meel, $vorm_brood, $gewicht) {
        $this->soort_meel = $soort_meel;
        $this->vorm_brood = $vorm_brood;
        $this->gewicht = $gewicht;
    }


    function getGewicht() {
        return $this->gewicht;
    }

    function setGewicht($gewicht) {
        $this->gewicht = $gewicht;
    }

    function getVorm_brood() {
        return $this->vorm_brood;
    }

    function setVorm_brood($vorm_brood) {
        $this->vorm_brood = $vorm_brood;
    }
    
    function getSoort_meel() {
        return $this->soort_meel;
    }

    function setSoort_meel($soort_meel) {
        $this->soort_meel = $soort_meel;
    }

}

$brood_winkel = $_SESSION['brood_winkel'];

$soort_meel = isset($_POST['soortMeel']) && !empty($_POST['soortMeel']) ? $_POST['soortMeel'] : null;
$vorm_brood = isset($_POST['vorm']) && !empty($_POST['vorm']) ? $_POST['vorm'] : null;
$gewicht = isset($_POST['gewicht']) && !empty($_POST['gewicht']) ? $_POST['gewicht'] : null;
$arr_input = isset($_POST['arr_input']) && !empty($_POST['arr_input']) ? $_POST['arr_input'] : null;


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $brood_winkel;

    if(isset($_POST['add'])) {
        if(isset($_SESSION['brood_winkel'])) {
            $brood_winkel = $_SESSION['brood_winkel'];
        } else {
            $brood_winkel = array(
                
            );
        }

        if ($soort_meel != null && $vorm_brood != null && $gewicht != null) {
            array_push($brood_winkel, new brood($soort_meel, $vorm_brood, $gewicht));
        }
    }


    if(isset($_POST['update'])) {

        if(isset($_SESSION['arr_input'])) {
        $arr_input = $_SESSION['arr_input'];
        } else {
        $_SESSION['brood_winkel'][$arr_input]->setGewicht($gewicht);
        $_SESSION['brood_winkel'][$arr_input]->setSoort_meel($vorm_brood);
        $_SESSION['brood_winkel'][$arr_input]->setVorm_brood($soort_meel);
        }
    }
}

//unset


// ADD NEW BROOD


foreach($brood_winkel as $newbrood) {
    echo "<table>";
    echo "<tr>";
    echo "<th>" . $newbrood->getSoort_meel() . "</th>";
    echo "<th>" . $newbrood->getVorm_brood() . "</th>";
    echo "<th>" .  $newbrood->getGewicht() . "</th>";
    echo "</tr>";
    echo "</table>";
}


$_SESSION['brood_winkel'] = $brood_winkel;
$_SESSION['update'] = $arr_input;


?>
</body>
</html>