<?php 
function greetPeople() {
	echo "hola";
}

function greetPeople2(){
	echo "hola";
	return "adios";
}
	
$say_bye = greetPeople2();

//arguments

function math($num1, $num2){
	return $num1 + $num2;
}

//default parameters
function math2($num1 = 5, $num2 = 10){
	return $num1 + $num2;
}

//pass by reference
function addX ($param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addX($word); // Prints: HelloX
echo $word; // Prints: Hello

function addXPermanently (&$param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addXPermanently($word); // Prints: HelloX
echo $word; // Prints: HelloX


//global variables
//not used when invoked functions
$feed_quantity = 300;
function calculateDaysLeft($number, $rate)
{
  global $feed_quantity;
  $result = $feed_quantity / ($number * $rate);
  return $result;
}
echo calculateDaysLeft(2, 120);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>
	<h1><?php echo $say_bye ?></h1> 	
	<h1><?php echo math(5, 5) ?></h1> 	
	<h1><?php echo math2(5) ?></h1> 	
</body>
</html>