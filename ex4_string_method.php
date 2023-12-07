<?php
$name = "shin thiri zaw";
echo "<br> $name";
echo "<br>String Length => ".strlen($name);
echo "<br> String word count => ".str_word_count($name);
echo "<br> String Reverse => " . strrev($name);
echo "<br> String Shuffle => " . str_shuffle($name);
echo "<br> String Postion => " . strpos($name,"Zaw");
echo "<br> Sub String => " . substr($name,0,10);
echo "<br> String Uppder => " . strtoupper($name);
echo "<br> String Lower => " . strtolower($name);
echo "<br>  ucfirst => " . ucfirst($name);
echo "<br> ucwords => " . ucwords($name);
$nick_name = "<h3><i>$name</i></h3>";
echo "$nick_name";
echo "Strip Tag => " . strip_tags($name);
echo "<br>String Replace => " . str_replace("zaw","Maung",$name);
$phone = "099702173450";
echo "<br>Phone =>  $phone";
echo "<br> Trim left and right => " . trim($phone,0);// remove left 0 and right 0
echo "<br> Left Trim => " . ltrim($phone,0);// remove left 0 and right 0
//Explode
$date_data = "23/3/2012";
echo "<br><br> Explode =><pre>" ; //string to array
var_dump(explode("/",$date_data));
var_dump(explode("/",$date_data,2));
//String Split
echo "<br> String Split =><pre>" ; //string to array
var_dump(str_split($date_data));
echo "<br> Specfic Count String Split =><pre>" ; //string to array
var_dump(str_split($date_data,4));
?>