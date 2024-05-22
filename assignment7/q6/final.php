<?php
    $name = $_COOKIE['name'] ?? '';
    $father = $_COOKIE['father'] ?? '';
    $dob = $_COOKIE['dob'] ?? '';
    $mobile = $_COOKIE['mobile'] ?? '';
    $email = $_COOKIE['email'] ?? '';
    $adress = $_COOKIE['adress'] ?? '';
    require_once("db-connect.php");
    $qry="INSERT INTO q6 values('$name','$father','$adress','$mobile','$email','$dob')";
    if($conn->query($qry)){
        echo "Data inserted successfully.";
    }
    setcookie('name', '', time() - 3600, "/");
    setcookie('father', '', time() - 3600, "/");
    setcookie('dob', '', time() - 3600, "/");
    setcookie('mobile', '', time() - 3600, "/");
    setcookie('email', '', time() - 3600, "/");
    setcookie('address', '', time() - 3600, "/");