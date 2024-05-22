<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="post">
        <label for="">Enter any number</label>
        <input type="text" name="num">
        <input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>
<?php
    function checkprime($num){
        for($i=2;$i<=(int)$num/2;$i++){
            if($num % $i ==0){
                return false;
            }
        }
        return true;
    }

    if(isset($_POST["submit"]))
    {
        $num=$_POST["num"];
        if(checkprime($num))
        {
            echo "Its a prime number";
        }
        else{
            echo "Its not a prime number";
        }
    }

?>