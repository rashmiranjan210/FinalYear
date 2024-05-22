<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        ?>
    <div style="width:600px;border:1px solid black" class="mx-auto mt-5 px-5 pt-4 pb-3">
    <form action="q5.php" method="post">
    <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Student ID</label>
            <div class="col-sm-10">
            <input type="text" name="id" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control" >
            </div>
        </div>
        <label for="">Gender</label>
        <select class=" form-select" name="gender" aria-label="Default select example">
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
        <br>
        <label for="">Date of Birth</label>
        <input type="date" name="dob">
        <br><br>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-10">
            <input  type="tel" name="mobile"class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input  type="email" name="email"class="form-control" >
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Adress</label>
            <textarea class="form-control" name="adress" id="" cols="30" rows="10"></textarea>
         </div>
        <label for="">Department</label>
        <select name=" branch" class="form-select"  id="branch" aria-label="Default select example">
            <option value="CSE">CSE</option>
            <option value="CST">CST</option>
            <option value="CEN">CEN</option>
            <option value="MCA">MCA</option>
            <option value="MSc">MSc</option>
        </select>
        <br>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">CGPA</label>
            <div class="col-sm-10">
            <input  type="text" name="cgpa"class="form-control" >
            </div>
        </div>
        <input type="submit" value="submit" name="submit" class="btn btn-danger">
    </form>  
 </div>  
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        require_once"db-connect.php";
        $id=$_POST["id"];
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $dob=$_POST["dob"];
        $adress=$_POST["adress"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $branch=$_POST["branch"];
        $cgpa=$_POST["cgpa"];
        $qry = "INSERT INTO Student(Name, Gender, DOB, Mobile, Email,Adress, department,CGPA) VALUES('$name', '$gender', '$dob',$mobile, '$email','$adress', '$branch',$cgpa)";
        $res=$conn->query($qry);
        if($res){
            echo "one data inserted";
        }
        else{
            echo "ERROR:".$conn->error;
        }
        $conn->close();

    }
 
?>