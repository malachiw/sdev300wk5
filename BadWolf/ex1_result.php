<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Payment Page</title>
<link rel="stylesheet" href="includes/order_form.css" type="text/css" />
</head>
<body>

<?php
require('includes/ex1.inc.php');

echo "Name on order: " .$_SESSION['appusername']. "<br>";
echo "Email on order: " .$_SESSION['appemail']. "";

echo getOrderInfo();
?>
<p>
	<form name="main" method="post" action="sonics.php"> 
	<input name="btnsubmit" type="submit" value="Back">
</p>
</body>
</html>