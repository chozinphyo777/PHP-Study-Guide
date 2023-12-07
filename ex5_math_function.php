<?php
echo "<br> power =>" . pow(2, 3);
echo "<br> sqrt => " . sqrt(8);
echo "<br> abs => " . abs(-4);
echo "<br> ceil (5.3) => " . ceil(5.3);
echo "<br> floor (5.3) =>" . floor(5.3);
echo "<br> round (5.3) =>" . round(5.3);
echo "<br> round (5.6) =>" . round(5.6);
echo "<br> rand number between 1 and 10 =>" . rand(1,10);
echo "<br> rand number =>" . rand();
$arr = [2, 3, 45, 55, 44, 23];
echo "<pre>";
var_dump($arr);
echo "<br> Max Number =>" . max($arr);
echo "<br> Min Number =>" . min($arr);