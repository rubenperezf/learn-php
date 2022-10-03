<?php
class Documents {
  public $name, $id, $is_public;
  function printData(){
    echo $this->name . " " . $this->id;
  }
  //A constructor method is one of several magic methods provided by PHP. This method is automatically called when an object is instantiated.
  //A constructor method is defined with the special method name __construct.
  function __construct($name =""){
    $this->is_public = TRUE;
    $this->name = $name;

  }

};

$document1 = new Documents();
if($document1->is_public){
  echo "test";
};
$document2 = new Documents("Passport");
echo $document2->name;
$document1->name = "1099";
$document1->id = 38;
echo $document1->name;
echo $document1->printData();



//  Inheritance
//  Imagine we wanted a Dog class in our program. This class would have all the properties of the more general Pet class, 
// but it would have a few more properties and methods specific to only dogs. Rather than having to manually duplicate the things the two classes have in common, 
// we can create a new class which extends the other. The original class can be thought of as the parent and the new class can be thought of as the child class. 
// In object oriented programming, we call this process inheritance since the child class inherits properties and methods from its parent class. 
// A child class is also referred to as a subclass in PHP.
// class 

class Pdf extends Documents {
  function print(){
    echo "printing...";
  }
}

$document3 = new Pdf("test name");
echo $document3->print();
echo $document3->name;

// Overriding Methods
// Sometimes, we want to change how methods behave for subclasses from the original parent definition. This is called overriding a method. 
// To do this, define a new method within the subclass with the same name as the parent method.

class Pet {
  function type() {
    return "pet";
  }
};
class Dog extends Pet{
  function type() {
    return "dog";
  }
  function classify(){
    echo "This " . parent::type() . " is of type " . $this->type();
    // Prints: This pet is of type dog 
  }
};

//  Visibility - Private Members
class Animal {
  private $healthScore = 0; 
  function exercise(){
    $this->healthScore++;
  }
  function feed(){
    $this->healthScore++;
  }
  function healthCheck(){
    if ($this->healthScore >= 2){
      echo "This is a healthy pet!";
    } else {
      echo "This is an unhealthy pet";
    }
  }
}

// Visibility - Protected Members
class WildAnimal {
  private $healthScore = 0; 
}
 
class Horse extends WildAnimal {
  function brushTeeth() {
    $this->healthScore++; 
  }
}
 
$my_pet = new Horse();
$my_pet->brushTeeth(); // Error

class JungleAnimal {
  protected $healthScore = 0; 
}
 
class Snake extends JungleAnimal {
  function brushTeeth() {
    $this->healthScore++; 
  }
}
 
$my_pet = new Snake();
$my_pet->brushTeeth(); // Successfully increments healthScore
$my_pet->healthScore; // Error

// Static Members

class AdamsUtils {
  public static $the_answer = 42;
  public static function addTowel($string) {
    return $string . " and a towel.";
  }
}

$items = "I brought apples";

echo AdamsUtils::addTowel($items);
echo AdamsUtils::$the_answer;














?>
  

  
  