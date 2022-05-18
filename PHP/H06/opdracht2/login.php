<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($name)) {
		header("Location: /index.php?error=User Name is required");
		echo "User Name is required";
	    exit();
	}else if(empty($pass)){
        header("Location: /index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name && $row['password'] === $pass) {
				echo "<script> windows.location.href='home.php';</script>";
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				echo "welkom gebruiker!";
				echo '<img src="https://source.unsplash.com/random/?user" alt="user">';
		        exit();
            }else{
				echo "<script> windows.location.href='index.php?error';</script>";
				echo "Incorect username or password";
		        exit();
			}
		}else{
			echo "<script> windows.location.href='index.php?error';</script>";
			echo "Incorect username or password";
	        exit();
		}
	}
	
}else{
	echo "<script> windows.location.href='index.php';</script>";
	exit();
}
