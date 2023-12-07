<?php 
// define(name, value, case-insensitive)
// case-insensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING ."<br>";


define("Hello", "Welcome to W3Schools.com!", true);
echo hello."<br>";

define("Hi", "Welcome to W3Schools.com!", false);
echo hi."<br>";

$arr = ["mango", "apple", "banana"];
$name = "zaw zaw"; //local scope in php ( cannot call it inside the function)
define("FRUITS", $arr, false); // local scope but can use it inside the function
function showMessage(){
    echo $name; // cannot call it
    echo "<br>Fruits => ". FRUITS['1'];

}
showMessage();

?> 