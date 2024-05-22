<?php
 include_once "header.php";
if(isset($_POST['update_std'])){
    require_once "db-connect.php";
    $ID = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['DOB'];
    $address = $_POST['adress'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['Email'];
    $dept = $_POST['branch'];
    $cgpa= $_POST['cgpa'];
    $qry = "UPDATE student set Name='$name', Gender='$gender', DOB='$dob', Adress='$address', Mobile='$mobile', Email='$email', Department='$dept', CGPA='$cgpa' WHERE Student_ID=$ID";
    // echo $qry;
    if($conn->query($qry)){
        header("location:display.php?update=ok");
    } else {
        header("location:display.php?update=error");
    }
}

?>