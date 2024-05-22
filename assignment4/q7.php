<?php
    $num=23;
    $temp=$num;
    $i = 0;
    $a=array();
    while($num>0) 
    {
        $a[$i]=$num%2;
        $num=(int)($num/ 2);
        $i++;
    }

    echo "Binary of ".$temp." is:";
    for ($j = $i - 1; $j >= 0; $j--)
    {
        echo $a[$j];
    }
?>