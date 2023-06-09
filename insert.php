<?php 
require_once("conetion.php");

$jsonedata=file_get_contents("php://input");
$data=json_decode($jsonedata,true);

$name = ($data['uname']);
$number = ($data['number']);
$pass = ($data['password']);

$query = "INSERT INTO $tablename (`uname`,`number`,`password`) value ('$name','$number','$pass')";

$result = mysqli_query($conn,$query);

    if($result==1){
        $status = 1;
        $massge = "data saved";
    }else{
        $status=0;
        $massge="your data not saved";
    }
    $arr=[
        'massge'=>$massge,
        'status'=>$status
    ];
    echo json_encode($arr,JSON_PRETTY_PRINT);

?>