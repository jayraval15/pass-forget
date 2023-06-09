<?php
// if(isset($_POST['update'])){
    require_once("conetion.php");

    $jsondata = file_get_contents("php://input");

    $data = json_decode($jsondata,true);

    // print_r($data);
    // die();2
    $name = ($data['uname']);
    $npass = ($data['password']);

    $query = "UPDATE `justifyd` set  `password`='$npass',`uname`='$name' where `uname`='$name'";

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
    
// }
?>
