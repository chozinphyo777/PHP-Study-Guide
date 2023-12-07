<?php
$arr = ['noddle', 'apple', 'pizza', 'Egg'];
echo "<br> Count => ".count($arr);
echo "<br> Current => " . current($arr);
echo "<br> End => " . end($arr);
echo "<br> Array rand => " . $arr[array_rand($arr)];//array_rand($arr) output only index
$number_arr = range(1, 5);
echo "<pre>";
var_dump($number_arr);
echo "<br> Array Sum => " . array_sum($number_arr);
echo "<br><br>";
$is_egg_exist = in_array("Egg", $arr) ? true : false ;//array_rand($arr) output only index
echo "<br> In Array => " . $is_egg_exist;
$info =[
    "accupation" => "doctor",
    "name" => "cho",
    "age" => 44,
];
$check_age_key_exist = array_key_exists("age", $info) ? true : false;
echo "<br> Array Key Exists => " . $check_age_key_exist;
echo "<br><br><br> Array Keys => ";
var_dump(array_keys($info));
echo "<br><br> Array Values => ";
var_dump(array_values($info));
echo "<br> Implode => " . implode("|", $arr);
echo "<br> Join => " . join("|", $arr);

shuffle($arr);
echo "<br><br> Shaffle => ";
var_dump($arr);

array_push($arr,"fish");
echo "Array push => ";
var_dump($arr);

array_pop($arr);
echo "Array pop => ";
var_dump($arr);

array_unshift($arr,"fish");
echo "Array Unshift => ";
var_dump($arr);

array_shift($arr);
echo "Array Shift => ";
var_dump($arr);

sort($number_arr);
echo "Array Sort => ";
var_dump($number_arr);

rsort($number_arr);
echo "Array Reverse Sort => ";
var_dump($number_arr);

asort($info);
echo "Associative Array value Sort => ";
var_dump($info);

arsort($info);
echo "Associative Array value reverse Sort => ";
var_dump($info);

ksort($info);
echo "Associative Array key Sort => ";
var_dump($info);

krsort($info);
echo "Associative Array key reverse Sort => ";
var_dump($info);