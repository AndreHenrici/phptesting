<?php
    include "../funktionen.php";
    include "./Reise.php";

abstract class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    abstract public function makeSound();
}
    
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}
    
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}    
$cat = new Cat("Whiskers");
echo $cat->makeSound(); // prints "Meow!"

$dog = new Dog("Buddy");
echo $dog->makeSound(); // prints "Woof!"
      
echo $cat->getName();