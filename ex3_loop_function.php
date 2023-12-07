<?php 
$car = ["Toyota","BMW","Crown"];
for ($i = 0; $i < count($car); $i++){
    echo $car[$i]."<br>";
}

foreach($car as $val){
    echo "<br>".$val;
}
$num = 1;
while($num <= 10){
    echo $num."<br>";
    $num++;
}
echo ".............................";
$num1 =1;
do {
    echo "<br>".$num1;
    $num1++;

} while ($num1 <= 10);

function add($num1, $num2){
    $result = $num1+$num2;
    echo  "<br>Add Result => ".$result;
}
add(3,4);
function sub($num1,$num2){
   
   return $num1 - $num2; 
    
}
$sub = sub(5,3);
echo "<br>Sub Result => ".$sub;

