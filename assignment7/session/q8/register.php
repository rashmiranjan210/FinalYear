
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Mobile</label>
        <input type="tel" name="mobile"><br>
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <label for="">Password</label><br>
        <input type="text" name="password"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a></p>
</body>
</html>
<?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $mobile = $_POST['mobile'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            require_once("db-connect.php");
            $qry="INSERT INTO qeight values('$name','$mobile','$email','$password')";
            
            if($conn->query($qry)){
                echo "Data inserted successfully.";
            }
        }
?>

