<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="second.php" method="post">
        Enter 2nd Number <input type="text" name="num2">
        <input type="submit" name="accept">
    </form>
    <?php
        if(isset($_POST['accept'])){
            session_start();
            $_SESSION['num2'] = $_POST['num2'];
            // echo $_SESSION['num2'];
            header('location:sum.php');
         }
         ?>
</body>
</html>