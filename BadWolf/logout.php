<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Doctor Who Logout</title>
</head>
<body>
<?php
session_start();
unset($_SESSION['appusername']);
unset($_SESSION['appemail']);
header("Location: loginAuth.html") 
?>    

</body>
</html>
