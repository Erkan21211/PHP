

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H7 OPDRACHT 1</title>
    <style>
        .error {
            background: #F2DEDE;
            color: red;
            padding: 10px;
            width: 95%;
        }
        .logout {
            background: #141414;
            color: white;
            padding: 10px;
            width: 95%;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <?php if (isset($_GET['logout'])) { ?>
            <p class="logout"><?php echo $_GET['logout'];?></p>
        <?php } ?>
        <label>username</label>
        <input type="text" name="name" placeholder="enter name"><br>

        <label>password</label>
        <input type="password" name="password" placeholder="enter password"><br>

        <button type="submit">Login</button>


    </form>
</body>
</html>