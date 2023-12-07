<?php 
class Animal{
public $name;
public $color;
public function __construct($userName , $userColor){
        $this->name = $userName;
        $this->color = $userColor;
}
public function run(){
        echo "Run Quickly<br>";
}
}
class Dog extends Animal
{
    public function greeting(){
        echo "Hello Dog<br>";
    }
}
$dog = new Dog("MO MO","Brown");
$dog->greeting();
$dog->run();

$animal = new Animal("Go Go","White");
echo $animal->name ."<br>";
echo $animal->color."<br>";
$animal->run();
