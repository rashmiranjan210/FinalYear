<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="second.php" method="post">
        <label for="">Mobile</label>
        <input type="tel" name="mobile"><br>
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">Adress</label><br>
        <textarea name="adress" id="adress" cols="30" rows="10"></textarea><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
        if(isset($_POST['submit'])){
            $mobile = $_POST['mobile'];
            $email=$_POST['email'];
            $adress=$_POST['adress'];
            setcookie("mobile",$mobile,time()+86400);
            setcookie("email",$email,time()+86400);
            setcookie("adress",$adress,time()+86400);
            header("Location: verify.php");
        }
?>
