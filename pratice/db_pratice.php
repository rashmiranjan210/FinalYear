<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="db_pratice.php" method="post" enctype="multipart/form-data" >
        <label for=""input a song></label>
        <input type="file" name="song">
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $song=$_FILES['song'];
            // echo "<pre>";
            // var_dump($song);
            // var_dump($_FILES);
            // echo "</pre>";
            $name = $song['name'];
            $path="audio";
            $complete_path=$path."/".$name;
            if(move_uploaded_file($song['tmp_name'],$complete_path)){
                echo "Upload Successfully!";
                require_once "db-connect.php";
                $escapedName = mysqli_real_escape_string($conn, $name);
                $qry="INSERT INTO praticesong (audio) VALUES ('$escapedName')";
                if($conn->query($qry)){
                    echo "Data Inserted Successfully!";
                }
                else{
                    echo $conn->error;
                }
                $conn->close();
            }
            else{
                echo "Error";
            }

        }
     ?>
</body>
</html>