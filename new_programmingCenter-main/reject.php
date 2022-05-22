<?php
include 'user.php';
$user = new User();
session_start();


$conn = $user->connect();

$sql = "select * from `volunteeringrequest`";


    $query = $user->delete_volunteer($sql);
   

 if($sql){
        echo "<script> alert('Request has been rejected.');";
        echo "location='request.php';</script>";


    }else{
                echo "<script> alert('Unknown error occured. Please try again.');</script>";
    echo "location='request.php';</script>";
    }


?>
