<?php
 class Car{
    public $name; // can use anywhere
    private $color; //can use only class
    public $price = 1000;
    
    function setName($name = "defaultName"){
        $this->name = $name;
    }
    function getName(){ //type function ( return)
         return $this->name;
    }
   
    function calPrice($qty){ //void function (not return)
        echo $qty * $this->price ."$";
   }
 }

$carInfo = new Car(); //create obj
//set Name
$carInfo->setName("Toyota");
echo $carInfo->name."<br>";

//Get Name
$car_name = $carInfo->getName();
echo $car_name."<br>";

//Cal Price
$carInfo->calPrice(2);
?>