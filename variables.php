<?php 
	$age = 89;
	//camel case
	$firstName = "Luis";
	//snake case
	$last_name = "Perez";
	//over writte 
	$firstName = "Ruben";
	//constants
	define("NAME", "Lucas");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Variables</title>
</head>
<body>
	<h1><?php echo $firstName ?></h1>
	<h1><?php echo NAME ?></h1>
</body>
</html>