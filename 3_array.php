<?php

$arr = [];

for ($i=0; $i < 10; $i++) { 
    $rand = rand(1,100);
    echo $arr[$i] = $rand .PHP_EOL;
    # code...
}
$result = array_sum($arr)/count($arr); // array_sum - built in func to sum all , count display lenght insted of strlen
echo 'average of the array is: '. floor($result); // return nearest decimal