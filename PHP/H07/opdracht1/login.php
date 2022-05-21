<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['name']) && isset($_POST['password'])) {

	
    if (isset($_SESSION['error']) AND !empty($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . "</div>";
        $_SESSION['error'] = null;
    }

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($name)) {
		exit(header("Location: /H07/opdracht1/index.php?error=username_required"));
	}else if(empty($pass)){
	    exit(header("Location: /H07/opdracht1/index.php?error=password_required"));
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				exit(header("Location: /H07/opdracht1/home.php"));
				echo "welkom gebruiker!";
				echo '<img src="https://source.unsplash.com/random/?user" alt="user">';
		        exit();
            }else{
				exit(header("Location: /H07/opdracht1/index.php?error=ERROR 20"));
			}
		}else{
			// invalid username and password</p>";
	        exit(header("Location: /H07/opdracht1/index.php?error=invalid username and password"));
		}
	}
	
}else{
	exit(header("Location: /H07/opdracht1/index.php?error=ERROR 21"));
}
