<?php
    $str= "PHP stands for PHP : Hypertext Preprocessor";
    echo strlen($str);
    echo "<br>";
    echo strtoupper($str);
    echo "<br>";
    $word = explode(" ",$str);
    $max=$word[0];
    $min=$word[0];
    for($i=0;$i<count($word);$i++)
    {
        if(strlen($word[$i])>strlen($max)){
            $max=$word[$i];
        }
        if(strlen($word[$i])<strlen($min) and $word[$i]!=":"){
            $min=$word[$i];
        }
    }
    echo "the max word is &nbsp".$max."<br>".strlen($max);
    echo "<br>";
    echo "the min word is &nbsp".$min."<br>".strlen($min);
    echo "<br>";
    echo join("-",$word);
    echo "<br>";
    echo strpos($str,"PHP");
    echo "<br>";
    echo str_replace("PHP","XYZ",$str);
    
?>