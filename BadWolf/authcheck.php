<?php 
	// Retrieve Post Data
	$username = $_POST["username"];
	$email = $_POST["emailadd"];
	$password = $_POST["password"];
	
 
		 // Set the session information
		 session_start();  
		 $_SESSION['appusername'] = $username; 
		 $_SESSION['appemail'] = $email;
		 $_SESSION['appPassword'] = $password;

		 setcookie('appusername', $_POST['username'], time() + (60), "/");

	header("Location: sonics.php")
	?>
