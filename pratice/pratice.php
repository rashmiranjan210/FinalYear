<?php
$str="My name is rashmi";
$word=explode(" ",$str);
$i=0;
$arr=array();
foreach($word as $a){
    // $a=$word[$i];
    $arr[$a]=strlen($a);
    // array_push($arr,$a);
    // // array_push($arr,$length);
    // $i++;
    // if($i>count($word))
    // {
    //     break;
    // }
    
}
// foreach($arr as $a=>$length){
//     echo "$a $length";
    
// }
 print_r($arr);
?>
