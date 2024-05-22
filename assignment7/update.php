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
 include_once "header.php";
   if(!isset($_GET['id'])){
    header('location:display.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
   
$qry = "SELECT * FROM student WHERE Student_ID=$eid";
$res = $conn->query($qry);
    $emp = $res->fetch_assoc();
    ?>
    <form action="updatedata.php" method="post" >
    <label for="">Student ID</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $emp['Student_ID'] ?>"><br>
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $emp['Name'] ?>">
        <label for="">Gender</label>
        <select name="gender" class="form-select"  id="gender">
            <option value="male" <?php $emp['Gender'] === "male"? print "selected" : ""; ?>>Male</option>
            <option value="Female"  <?php $emp['Gender'] === "Female"? print "selected" : ""; ?>>Female</option>
            <option value="Others"  <?php $emp['Gender'] === "Others"? print "selected" : ""; ?>>Others</option>
        </select>
        <label for="">Date of Birth</label>
            <input type="date" name="DOB" value="<?php echo $emp['DOB'] ?>">
            <br>
            <label for="">Mobile No</label>
            <input type="tel" name="Mobile" class="form-control" value="<?php echo $emp['mobile'] ?>">
            <label for="">Email</label>
            <input type="text" name="Email" class="form-control" value="<?php echo $emp['email'] ?>">
            <label for="">Adress</label>
            <br>
            <textarea name="adress" id="" cols="30" rows="10"><?php echo $emp['Adress'] ?></textarea>
            <br>
            <label for="">Department</label>
            <select name="branch" class="form-select"  id="branch">
                <option value="CSE" <?php $emp['department'] === "CSE"? print "selected" : ""; ?>>CSE</option>
                <option value="CST" <?php $emp['department'] === "CST"? print "selected" : ""; ?>>CST</option>
                <option value="CEN" <?php $emp['department'] === "CEN"? print "selected" : ""; ?>>CEN</option>
                <option value="MCA" <?php $emp['department'] === "MCA"? print "selected" : ""; ?>>MCA</option>
                <option value="MSc" <?php $emp['department'] === "MSc"? print "selected" : ""; ?>>MSc</option>
            </select>
            <label for="">CGPA</label>
            <input type="text" name="cgpa" class="form-control" value="<?php echo $emp['CGPA'] ?>">
            <input type="submit" name="update_std" class="btn btn-primary mb-5" value="Update">
    </form> 
</body>
</html>