<?php
$HOSTNAME = "127.0.0.1";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "rashmi";
$conn=new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DBNAME);
if($conn->connect_error){
    echo $conn->connect_error;
}
