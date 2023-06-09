<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "forget";
$tablename = "justifyd";

 $conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("conetion error");

 if($conn){
    echo "";
 }else{
    echo "if error";
 }
?>