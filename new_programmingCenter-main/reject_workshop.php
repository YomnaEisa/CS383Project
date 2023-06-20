<?php
include('user.php');
$user = new User();
session_start();

$conn = $user->connect();

$query = "select * from `workshoprequest`";

    $sql = $user->delete_workshop_req($query);

 if($sql){
        echo "<script>";
        echo "location='request.php';</script>";


    }else{
                echo "<script> alert('Unknown error occured. Please try again.');</script>";
    echo "location='request.php';</script>";
    }

?>