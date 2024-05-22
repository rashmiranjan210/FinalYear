<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <h1>User Login</h1>
    
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Log In">
    </form>

    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>

<?php
require_once('db-connect.php');
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM qeight WHERE email='$email'  AND password='$password'";
    $res = $conn->query($qry);
        if($res->num_rows>0){
            $row = $res->fetch_assoc(); 
        $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
           $sc="login succesfully";
           header("Location:dashboard.php");
        } else {
            // echo $conn->error;
            $msg="Invalid Email or Password.";
        }
}

$conn->close();
?>
