<?php
    $count=0;
    $arr=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    $min=$arr[0];
    $max=$arr[0];
    foreach($arr as $a){
        $count+=1;
        {
            if($a>$max){
                $max=$arr[$a];
            }
            if($a<$min){
                $min=$arr[$a];
            }
        }
    }
    echo "The number of element is present in the array is"." ".$count;
    echo "<br>";
    echo "The large number is"." ".$max;
    echo "<br>";
    echo "The small number is"." ".$min;
    echo "<br>";
    echo "The reverse order of array is :";
    echo "<br>";
    $rev= array_reverse($arr);
    foreach($rev as $a){
        echo $a." ";
    }
    echo "<br>";
    echo "Array in sorting order:";
    echo "<br>";
    sort($arr);
    for($i=0;$i< count($arr);$i++){
        echo $arr[$i]." ";
    }
    echo"<br>";
    echo "array is in descending order";
    echo"<br>";
    rsort($arr);
    for($i=0;$i< count($arr);$i++){
        echo $arr[$i]." ";
    }
    echo "<br>";
    echo "10 present in the array at index :";
    echo "<br>";
    $index= array_search(10,$arr);
    if($index){
        echo $index;
    }
    else{
        echo "not available";
    }

?>