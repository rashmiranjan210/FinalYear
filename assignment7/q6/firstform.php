<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="firstform.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Father</label>
        <input type="text" name="father">
        <label for="">DOB</label>
        <input type="date" name="DOB">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $father=$_POST['father'];
            $date=$_POST['DOB'];
            setcookie("name",$name,time()+86400);
            setcookie("father",$father,time()+86400);
            setcookie("dob",$date,time()+86400);
            header('location: second.php');
        }
?>

</body>
</html>
