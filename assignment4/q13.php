<?php
    function swap(&$x,&$y)
    {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    $a = 18;
    $b = 45;
    echo "Before swap a=".$a.",b=".$b."<br>";
    swap($a,$b);
    echo "After swap a=".$a.",b=".$b."<br>";
?>
