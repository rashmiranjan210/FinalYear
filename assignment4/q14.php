<?php
    function area(...$nums)
    {
        if(count($nums)==1)
        {
            $ar=pow($nums[0],2);
            echo "Area of square is: " .$ar ."<br>";
            $peri=4*$nums[0];
            echo "Perimeter of square is: ".$peri ."<br>";
        }
        else
        {
            $ar=$nums[0]*$nums[1];
            echo "Area of rectangle is: " .$ar ."<br>";
            $peri=2*($nums[0]+$nums[1]);
            echo "Perimeter of rectangle is: ".$peri ."<br>";
        }
    }
    echo area(5)."<br>";
    echo area(7,5)."<br>";
?>