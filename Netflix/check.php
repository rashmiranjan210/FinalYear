<?php
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email==="rashmibaral210@gmail.com" and $password==="12345"){
        header("Location:dashboard.php?email=$email");
    }
    else{
        header("Location:Signin.php?error=$true");
    }
}