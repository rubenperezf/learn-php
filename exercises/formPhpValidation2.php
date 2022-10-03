
<?php
//  data sanitizing
//  $email = "     aisle.nevertell@yahoo.com   ";
//  echo trim($email); // Prints: aisle.nevertell@yahoo.com
//  $data = "<a href=\"https://www.evil-spam.biz/html/\">Your account has been compromised! Click here to get technical support!!</a>";
//  echo htmlspecialchars($data);  

// Basic Sanitization with filter_var()
// $bad_email = '<a href="www.evil-spam.biz">@gmail.com';
// echo filter_var($bad_email, FILTER_SANITIZE_EMAIL);
// Prints: ahref=www.evil-spam.biz@gmail.com  
  
  
?>

<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

// Write your code here:

if($_SERVER["REQUEST_METHOD"] ==="POST"){
  $user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
  if($user_answer != -5){
    $validation_error = "* Wrong answer. Try again.";
  } else {
    $submission_response = "Correct!";
  }
}



?>
<h2>Time for a math quiz!</h2>
<form method="post" action="">
<h4>Question 1:</h4>  
<p>What is 6 - 11?</p> 
<input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
<br>
<span class="error" id="error"><?= $validation_error;?></span> 
<br> 
<input type="submit" value="Submit Your Answer">
</form>
<div>
  <p id="answer-display">Your answer was: <?= $user_answer;?></p>
  <p id="submission-response"><?= $submission_response;?></p>
</div>
  