<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        include_once "db-connect.php";
        $sic=$_POST['sic'];
        $name=$_POST['name'];
        $branch=$_POST['branch'];
        $cgpa=$_POST['cgpa'];
        $qry="INSERT INTO std VALUES('$sic','$name','$branch','$cgpa')";
        if($conn->query($qry)){
            echo "One Record inserted";
        } else {
            echo $conn->error;
        }
    }
?>