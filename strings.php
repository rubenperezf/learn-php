<?php 

	$stringOne = "hola mundo";
	$stringTwo = "Aprendiendo php";

	// echo $stringOne;
	//concatenate strings
	// echo $stringOne . " " . $stringTwo;
	//variables interpolation
	// echo "Yo estoy $stringTwo";
	// echo "como estas 'Pelos'";
	// echo "como estas \"Pelos\"";

	// echo $stringTwo[2]

	//length
	// echo strlen($stringOne);
	// echo strtoupper($stringOne);
	// echo strtolower($stringTwo)

	// echo str_replace("h", "j", $stringOne)


?>

<!DOCTYPE html>
<html>
<head>
	<title>Strings</title>
</head>
<body>
	<h1><?php echo $stringOne ?></h1>
	<h1><?php echo $stringOne[0] ?></h1>
	<h1><?php echo strlen($stringOne) ?></h1>
	<h1><?php echo strtoupper($stringOne) ?></h1>
	<h1><?php echo str_replace("h", "j", $stringOne) ?></h1>
	<h1><?php echo "{$stringOne}s" ?></h1>
</body>
</html>