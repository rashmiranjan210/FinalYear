<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $arr=array("Tom" =>25000, "Jerry"=>37000, "Spike"=>32000, "Casper"=>50000,
        "Droopy"=>45000, "Mickey"=>42000);
        foreach($arr as $name=>$salary){
        ?>
        <ul>
            <li><?php echo "Salary of"." ".$name." "."is"." ".$salary; ?>
            </li>
        </ul>
            <?php
        }
        foreach($arr as $name=>$salary){
            echo $name."<br> ";
        }
        echo "<br>";
        $total=0;
        foreach($arr as $name=>$salary){
            $total+=$salary;
            
        }
        echo "the total salary is".$salary."<br> ";
        echo "<br> <br>";
        ksort($arr);
        foreach($arr as $name=>$salary){
            echo $name." "."Salary of"." ".$salary."<br>";
        }
        echo "<br> <br>";
        asort($arr);
        foreach($arr as $name=>$salary){
            echo $salary." " ."is the salary of".$name."<br>";
        }
        foreach($arr as $name=>$salary){
            if($salary == max($arr)){
                echo $salary." " ."is the salary of".$name."<br>";
            }
           
        }
        

    ?>

</body>
</html>
<?php 
