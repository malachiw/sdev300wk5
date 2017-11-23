<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Thank You</title>
<link rel="stylesheet" href="includes/order_form.css" type="text/css" />
</head>
<body>
<p>
<?php
	echo 'Thanks for your order ' .$_SESSION['appusername']. '!';
?>
    
</p> 
<p>
	<form name="main" method="post" action="logout.php"> 
 	<input name="btnsubmit" type="submit" value="Logout">
 </p>
</body>
</html>