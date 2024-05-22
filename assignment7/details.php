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
       
    $qry = "SELECT * FROM Student WHERE Student_ID=$eid";
    $res = $conn->query($qry);
    if($res-> num_rows > 0){
        ?>
            <table border="1" cellpadding="8">
                <tr>
                    <th>EID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>DOB</th>
                    <th>ADDRESS</th>
                    <th>MOBILE</th>
                    <th>EMAIL</th>
                    <th>DEPARTMENT</th>
                    <th>CGPA</th>
                </tr>
            
        <?php
        $emp = $res->fetch_assoc();
       
        ?>
                <tr>
                    <td><?php echo $emp['Student_ID'] ?></td>
                    <td><?php echo $emp['Name'] ?></td>
                    <td><?php echo $emp['Gender'] ?></td>
                    <td><?php echo $emp['DOB'] ?></td>
                    <td><?php echo $emp['Adress'] ?></td>
                    <td><?php echo $emp['mobile'] ?></td>
                    <td><?php echo $emp['email'] ?></td>
                    <td><?php echo $emp['department'] ?></td>
                    <td><?php echo $emp['CGPA'] ?></td>
                </tr>
            <?php
    } else {
        echo "No Record Found";
    }
    $conn->close();
    ?>
</body>
</html>