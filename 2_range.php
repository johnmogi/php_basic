<?php

$num1 = rand(1,30);
$num2 = rand(1,30);

if($num1 < $num2):
    $num3 = $num1;
    $num1 = $num2;
    $num2 = $num3;
endif;
 
//  echo $num1. 'and' . $num2;

for ($num2; $num2 < $num1; $num2++) { 
    echo $num2 . ",";
}
echo $num1;