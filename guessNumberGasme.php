<?php

$play_count;
$correct_guesses = 0;
$guess_high = 0;
$guess_low =0;

 echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber()
{
  global $play_count, $correct_guesses, $guess_high, $guess_low;

  $play_count ++;

  $randomNumber = rand(1,10);

  echo "\nMake your guess...\n";

  $userGuess = $_POST["number"];

  $userGuess = intval($userGuess);

  echo "Round: $play_count\nMy Number: $randomNumber\nYour guess: $userGuess";

  if ($randomNumber === $userGuess) {
    $correct_guesses++;
  } elseif ($userGuess > $randomNumber) {
    $guess_high++;
  } else {
    $guess_low++;
  }

  $percent_correct = $correct_guesses / $play_count * 100;

echo "\nAfter $play_count rounds, here are some facts about your guessing:\nYou guessed the number correctly $percent_correct% of the time.\n";

if($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high.";
} else {
  "When you guess wrong, you tended to guess low.";
}

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Guess Game</title>
    </head>
    <body>
        <form method="post" >
            <input name="number" type="number"/>
            <input type="submit"/>
        </form>
        <?php
           if(isset($_POST["number"]))
           {
               guessNumber();
           } 
        ?>
    </body>
</html>