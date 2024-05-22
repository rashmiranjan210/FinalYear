<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="input.php" method="post">
            id <input type="text" name="id" id="id"><br>
            name <input type="text" name="name" id="name"><br>
            sic <input type="text" name="sic" id="sic"><br>
            male <input type="radio" name="gender" id="male" value="male">
            female <input type="radio" name="gender" id="female" value="female">
            <select name="dept" id="">
                <option value="mca">mca</option>
                <option value="btech">btech</option>
            </select>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html> -->
<?php
// if(isset($_POST['submit'])){
 require_once "db-connect.php";
//     $id=$_POST['id'];
//     $name=$_POST['name'];
//     $sic=$_POST['sic'];
//     $gender=$_POST['gender'];
//     $dept=$_POST['dept'];
//     $qry="INSERT INTO crud VALUES('$id','$name','$sic','$gender','$dept')";
//     if($conn->query($qry)){
//         echo "one inserted";
//     }
//     else{
//         echo $conn->error;
//     }
    $qry="SELECT * FROM crud";
    $res=$conn->query($qry);
    // var_dump($emp= $res->fetch_assoc());
    while($emp = $res->fetch_assoc()){
        ?>
        <table border=1 rules=all>
        <tr>
        <td><?php echo $emp['id'] ?></td>
        <td><?php echo $emp['name'] ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
        $conn->close();

//}
?>