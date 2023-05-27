<?php
    include('user.php');
$user = new User();
session_start(); 

//$accept_vol = $_POST["accept_vol"];
$conn = $user->connect();
$id = $_SESSION['user_id'];

$query = "select * from `volunteeringrequest` = '$id'"; //ALL VOLUNTEERS
$query2 = "select * from `login_student` WHERE student_id = '$id'"; //1312

    $sql = $user->add_volunteer($query);
    $sql2 = $user->delete_volunteer($query);
    $sql3 = $user->add_login($query2);
//$sql4 = "DELETE FROM login_student WHERE student_id =  '$id'";


//mysqli_query($conn, $sql4); 

//echo "location='request.php';</script>";

//echo "<script>";
//echo "location='request.php';</script>";

  /*  if(mysqli_query($conn, $sql4))
        {
    echo "<script>";
    echo "location='request.php';</script>";
    exit; 
    }else{
                echo "<script> alert('Unknown error occured. Please try again.');";
                    echo "location='request.php';</script>";

    } */


    
?>
