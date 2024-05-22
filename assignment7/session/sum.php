<?php
session_start();
$sum=$_SESSION['num1']+$_SESSION['num2'];
echo "The sum of Two number is $sum";
?>
