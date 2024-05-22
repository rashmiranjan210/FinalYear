<?php
    $a=2000;
    if($a % 400 ==0){
        echo $a."is a leap year";
    }
    elseif($a % 100==0){
        echo $a."is not leap year";
    }
    elseif($a % 4 ==0){
        echo $a."is a leap year";
    }
    else{
        echo $a."is not a leap year";
    }
?>