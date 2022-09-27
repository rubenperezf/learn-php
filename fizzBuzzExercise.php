<?php
for($i=1; $i<=100; $i++){
  if(($i%3 === 0) && ($i%5 === 0)){
    echo "FizzBuzz \n";
  } elseif($i%3 === 0){
    echo "Fizz \n";
  } else if($i%5 === 0){
    echo "Buzz \n";
  } else {
    echo $i . "\n";
  }
}

$arrayFizzBuzz =[];

for($i=1; $i<=100; $i++){
  if(($i%3 === 0) && ($i%5 === 0)){
    array_push($arrayFizzBuzz, "FizzBuzz");
  } elseif($i%3 === 0){
    echo array_push($arrayFizzBuzz, "Fizz");
  } else if($i%5 === 0){
    echo array_push($arrayFizzBuzz, "Buzz");
  } else {
    echo array_push($arrayFizzBuzz, $i);
  }
}

print_r($arrayFizzBuzz);

foreach ($arrayFizzBuzz as $value) {
  if ($value === "Fizz") {
    continue;
  }
  if($value === "FizzBuzz"){
    break;
  }
  echo $value . "\n";
};
?>