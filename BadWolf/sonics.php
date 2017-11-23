<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Allons-y!</title>
<?php
require('includes/html_form.class.php');
require('includes/html_table.class.php');
require('includes/ex1.inc.php');
?>
<link rel="stylesheet" href="includes/order_form.css" type="text/css" />
<link href="https://fonts.google.com/css?family=Dosis:200, 400, 500, 700" rel="stylesheet">
<script src="includes/order_form.js" type="text/javascript"></script>
<script type="text/javascript">
var PRODUCT_ABBRS = <?php echo json_encode( getProductAbbrs() ) ?>;
</script>
</head>
<body>
<div>
	<img class="banner" src="images/layout/doctor-who-banner.jpg">
</div>
<div>
<h1>Sonic Screwdriver Order Form</h1>

<?php
echo getOrderForm();
?>
</div>
</body>
</html>