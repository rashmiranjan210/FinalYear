<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q3.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        <br>
        <label for="">Date of Birth</label>
        <input type="date" name="dob">
        <br>
        <label for="">Adress</label>
        <br>
        <textarea name="adress" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="">Mobile No</label>
        <input type="tel" name="mobile">
        <br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br>
        <label for="">Branch</label>
        <select name="branch" id="branch">
            <option value="MCA">MCA</option>
            <option value="BTECH">BTECH</option>
            <option value="MSc">MSc</option>
        </select>
        <br>
        <label for="">Language</label>
        <input type="checkbox" name="language[]" value="english">English
        <input type="checkbox" name="language[]" value="hindi">Hindi
        <input type="checkbox" name="language[]" value="odia">Odia
        <br>
        <input type="submit" value="submit" name="submit">
    </form>    
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $adress=$_POST["adress"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $branch=$_POST["branch"];
        $language=$_POST["language"];
        echo "Name=".$name."<br>";
        echo "Gender=".$gender."<br>";
        echo "dob=".$dob."<br>";
        echo "adress=".$adress."<br>";
        echo "mobile=".$mobile."<br>";
        echo "email=". $email."<br>";
        echo "branch=".$branch."<br>";
        echo "Languages ".implode(" , ", $language);
    }
 
?>