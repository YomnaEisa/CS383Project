<?php
    include('user.php');
$user = new User();
session_start(); 

$conn = $user->connect();

//$title = $data['title'];
$query = "select * from `workshoprequest`";

    $sql = $user->add_workshop($query);
    $sql2 = $user->deleteWorkshopReq($query);


    if($sql){
        echo "<script> alert('Request accepted');";
        echo "location='request.php';</script>";


    }else{
                echo "<script> alert('error');</script>";
    echo "location='request.php';</script>";
    }
    
?>