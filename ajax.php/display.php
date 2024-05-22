<?php
    include_once "db-connect.php";
    $qry = "SELECT * FROM std";
    $res = $conn->query($qry);
    if($res-> num_rows > 0){
        $data = $res->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    } else {
        echo "No Data Available";
    }
?>