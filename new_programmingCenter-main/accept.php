<?php
    include('user.php');
$user = new User();
session_start(); 

$conn = $user->connect();
$id=$_SESSION['user_id'];

$query = "select * from `volunteeringrequest`";
$query2 = "select * from `login_student` WHERE student_id =  '$id'";

    $sql = $user->add_volunteer($query);
    $sql2 = $user->delete_volunteer($query);
    $sql3 = $user->add_login($query2);
$sql4 = "DELETE FROM login_student WHERE student_id =  '$id'";




    if(mysqli_query($conn, $sql4))
        {
    echo "<script>alert('Request has been Accepted Succefuly.');";
    echo "location='request.php';</script>";
    exit; 
    }else{
                echo "<script> alert('Unknown error occured. Please try again.');";
                    echo "location='request.php';</script>";

    }
    
?>
