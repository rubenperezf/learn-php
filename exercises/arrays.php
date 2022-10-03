<?php

//indexed arrays or ordered array
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
array_pop($mergedArray2); //delete last one
array_shift($mergedArray); //delete first one
array_unshift($mergedArray, 10); //add one to the beginning
unset($mergedArray2["luigi"]);
//union operator
$arrayFive = [1, 2];
$arraySix = [3, 4];
$mergedArray3 = $arrayFive + $arraySix;

$arraySeven = ["name" => "Ruben"];
$arrayEight = ["lastName" => "Perez"];

$mergedArray4 = $arraySeven + $arrayEight;

//multidimensional array

$blog = [
	["mario party", "mario", "lorem", 3],
	["mario kart cheats", "toad", "lorem", 25],
	["zelda hidden chests", "link", "lorem", 50],
];

$blog2 = [
	[
		"title" => "mario party",
		"author" => "mario",
		"content" => "lorem",
		"likes" => 3
	],
	[
		"title" => "mario kart cheats",
		"author" => "toad",
		"content" => "lorem",
		"likes" => 25
	],
	[
		"title" => "zelda hidden chests",
		"author" => "link",
		"content" => "lorem",
		"likes" => 50
	],
];

$blogs[] = [
	"title" => "castle party",
	"author" => "peach",
	"content" => "lorem",
	"likes" => 100
]

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
	<h1><?php echo implode(", ", $mergedArray2) ?></h1>
	<h1><?php echo implode(", ", $mergedArray3) ?></h1>
	<h1><?php echo implode(", ", $mergedArray4) ?></h1>
	<h1><?php echo $blog[0][0] ?></h1>
	<h1><?php echo $blog2[0]["title"] ?></h1>
	<h1><?php echo count($blog2) ?></h1>
	<h1><?php print_r($blog2) ?></h1>

</body>

</html>