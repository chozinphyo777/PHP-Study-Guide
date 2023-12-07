<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    asort($ceu);
    foreach($ceu as $key=>$value){
        echo "Capital of ".$key.' is '.$value.'<br>';
    }
    ?>

    <?PHP
     $x = array(1, 2, 3, 4, 5);
     var_dump($x);
     echo "<br>";
    //  array_pop($x);
    unset($x[2]);
     var_dump($x);
    ?>


<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
// echo $color[4];
?>

<?php 
echo "<br><br><br>";
$data =' {"Title" => "The Cuckoos Calling",
    "Author" => "Robert Galbraith",
    "Detail" => {
    "Publisher": "Little Brown",
    }
    }';
   $new = json_decode($data,true);
   var_dump($new);

   echo "<br><br>";
?>

    <?php
    function w3rfunction($value,$key)
    {
    echo "$key : $value"."\n";
    }


    $a = '{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail":
    { 
    "Publisher": "Little Brown"
    }
    }';
    $j1 = json_decode($a,true);



    array_walk_recursive($j1,"w3rfunction");

    echo "<br><br>";
    ?>

    <?PHP
    $arr = [1,2,3,4,5];
    array_splice($arr,3,0,'$');
    foreach ($arr as $key => $value) {
        echo $value;
        echo " ";
    }
     ?>


<?php
echo "<br><br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo var_dump($new_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>
    

</body>
</html>