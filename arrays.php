<?php 
	
	//indexed arrays
	$arrayOne = ["a", "b", "c"];
	$arrayTwo = array(1, 2, 3);
	$arrayOne[1] = "z";
	$arrayOne[] = "adios";
	array_push($arrayOne, "hola");
	$mergedArray = array_merge($arrayOne, $arrayTwo);
	

	//associative arrays
	//key value pairs

	$arrayThree = ["shaun" => "black", "mario" => "orange", "luigi" => "brown"];
	$arrayFour = array("bower" => "green", "peach" => "yellow");
	$arrayFour["toad"] = "pink";
	$mergedArray2 = array_merge($arrayThree, $arrayFour);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h1><?php print_r($arrayOne) ?></h1>
	<h1><?php echo $arrayOne[0] ?></h1> 	
	<h1><?php echo $arrayTwo[0] ?></h1> 	
	<h1><?php echo count($arrayOne) ?></h1> 	
	<h1><?php print_r($mergedArray) ?></h1> 	
	<h1><?php print_r($arrayThree) ?></h1> 	
	<h1><?php echo $arrayThree["mario"] ?></h1> 	
	<h1><?php print_r($arrayFour) ?></h1> 	
	<h1><?php echo count($arrayFour) ?></h1> 
	<h1><?php print_r($mergedArray2) ?></h1> 
		
</body>
</html>