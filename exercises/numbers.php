<?php 
	//interger
	$number = 85;
	//float
	$otherNumber = 3.56;

	//increment & decrement operators
	$number++;
	$number--;

	//shorthand operators
	$number += 80;
	$number -= 10;
	$number *= 2;

	// echo floor($otherNumber);
	// echo ceil($otherNumber);
	// echo pi();

	//exponentiattion
	// echo 4**2;

	//modulo
	$students = 82;
	$groups = 6;
	$studenntsWithNoGroup = $students % $groups;
	echo $studenntsWithNoGroup;

	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>
<body>
	<h1><?php echo $number ?></h1> 	
</body>
</html>