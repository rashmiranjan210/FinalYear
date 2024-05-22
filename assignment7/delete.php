<?php
if(!isset($_GET['id'])){
    header('location:display.php');
}
require_once "db-connect.php";
$eid = $_GET['id'];
$qry = "DELETE FROM Student WHERE Student_ID=$eid";
if($conn->query($qry)){
    header("location:display.php?status=ok");
} else {
    header("location:display.php?status=error");
}
?>