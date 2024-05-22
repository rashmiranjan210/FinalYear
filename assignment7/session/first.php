<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="first.php" method="post">
        Enter 1st Number <input type="text" name="num1">
        <input type="submit" name="accept">
    </form>
    <?php
        if(isset($_POST['accept'])){
            session_start();
            $_SESSION['num1'] = $_POST['num1'];
            header('location:second.php');
         }
         ?>
</body>
</html>