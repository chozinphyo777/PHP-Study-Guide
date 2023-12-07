<?php
//echo, print, var_dump, print_r 
$name = "cho";
echo $name ."<br><br>"; //cho

$num1 = 2;
$num2 = 3;
echo $num1 + $num2 ."<br><br>"; //5

$foods = ["pizza", "hotpot"];
var_dump($foods); //array(2) { [0]=> string(5) "pizza" [1]=> string(6) "hotpot" }

echo "<br><br>";
print_r($foods); //Array ( [0] => pizza [1] => hotpot )

echo "<br><br>". $foods[0]; // pizza

$associative_arr = [
    "name" => "cho",
    "geder" => "male",
];
echo "<br><br>";
var_dump($associative_arr); //array(2) { ["name"]=> string(3) "cho" ["geder"]=> string(4) "male" }

$fav_food = "pizza";
if($fav_food == "pizza"){
    echo "<br><br> He likes $fav_food";
}
else{
    echo "<br><br>He don't like $fav_food";
}

//tinary operator
$result = $fav_food == "pizza" ? "He likes $fav_food" : "He don't like $fav_food";
echo "<br><br> $result";

?>