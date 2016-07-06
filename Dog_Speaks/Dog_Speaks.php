<!DOCTYPE html>
<html>
	<head>
	  <title> Dog Speak </title>
	</head>
	<body>
      <p>
        <?php
        class Dog{
            public $numLegs = 4;
            public $name;
            public function bark(){
                return "Woof! ";
            }
            public function __construct($name){
                $this->name=$name;
            }
            public function greet(){
                return "Hello! My name is " . $this->name . ". Didn't know a dog could speak did you? ";
            }
        }
        $dog1 = new Dog("Barker");
        $dog2 = new Dog("Amigo");
        echo $dog1->bark();
        echo $dog2->greet();
        ?>
      </p>
    </body>
</html>