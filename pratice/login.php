<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if($error===$true){
            echo "invalid Email or Password";
        }

    }
?>
    <form action="logincheck.php" method="post">
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Log In">
    </form>
</body>
</html>