<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        h1 {
            text-align: center;
        }

        .img {
            width: 100px;
            height: 100px;
        }
    </style>
    <title>3</title>
</head>
<body class="container">
    <h1>Select an animal in the list to see it</h1>
    <form action="onaction.php" method="GET" class="">

        <div class="form-group">
            <select multiple class="form-control" name="dierennamen[]" id="dierennamen">
                <option value="dog">Hond</option>
                <option value="petcat">Kat</option>
                <option value="rabbit">Konijn</option>
                <option value="hamster">hamster</option>
                <option value="tiger">Tigger</option>
            </select>
        </div>
        
    
        <button class="btn btn-primary" type="submit">enter</button>
        

    </form>
</body>
</html>