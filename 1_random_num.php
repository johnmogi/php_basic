<?php

    $randomNum = rand(1,100);

    // if($randomNum >= 60):
    //     echo 'passed (-: ' . $randomNum;
    // else:
    //     echo 'failed )-: ' . $randomNum;
    // endif;
    // $message = 'bool';
    // $randomNum>=60 ? $message = true : $message =false;
    $randomNum>=60  ? $message = 'passed (-: ' : $message = 'failed )-: ';
    echo $message . $randomNum;

    // echo  $randomNum;