<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Page</title>
</head>
<body>
    <?php
        include_once "db-connect.php";

        $qry = "SELECT * FROM praticesong";
        $res = $conn->query($qry);

        while($ad=$res->fetch_assoc()){
            $filepath= "audio/".$ad['audio'];
            ?>
            <audio src="<?php echo $filepath; ?>" controls></audio>
            <?php
        }
        $conn->close();
    ?>
</body>
</html>
