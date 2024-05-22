<?php
   function sum(...$nums)
   {
    $s=0;
    if(count($nums)<2)
    {
        echo "Insufficient number of operand <br>";
        return NULL;
    }
    else
    {
        return array_sum($nums);
    }
}
    // echo sum(2)."<br>";
    echo sum(1,2,3,4,5,6)."<br>";
?>