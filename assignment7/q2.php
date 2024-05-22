<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2.php" method="post">
        <label for="">Enter 1st Number </label>
        <input type="text" name="num1">
        <br>
        <label for="">Enter 2nd Number</label>
        <input type="text" name="num2">
        <br>
        <select name="operation" id="operation">
            <option value="ADD">+</option>
            <option value="SUB">-</option>
            <option value="MUL">*</option>
            <option value="DIV">/</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    function add($a,$b){
        echo "ANS =".$a+$b;
    }
    function sub($a,$b){
        echo "ANS =".$a-$b;
    }
    function mul($a,$b){
        echo "ANS =".$a*$b;
    }
    function div($a,$b){
        echo "ANS =".(int)$a/$b;
    }

    if(isset($_POST["submit"])){
        $op=$_POST["operation"];
        $n1=$_POST["num1"];
        $n2=$_POST["num2"];
        if($op=="ADD"){
            add($n1,$n2);
        }
        if($op=="SUB"){
            sub($n1,$n2);
        }
        if($op=="MUL"){
            mul($n1,$n2);
        }
        if($op=="DIV"){
            div($n1,$n2);
        }

    }
?>
