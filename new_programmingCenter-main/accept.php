<?php
    include('user.php');
$user = new User();
session_start(); 

$conn = $user->connect();
$id = $_SESSION['user_id'];

$query = "select * from `volunteeringrequest` = '$id'"; 
$query2 = "select * from `login_student` WHERE student_id = '$id'"; 

    $sql = $user->add_volunteer($query);
    $sql2 = $user->delete_volunteer($query);
    $sql3 = $user->add_login($query2);
//$sql4 = "DELETE FROM login_student WHERE student_id =  '$id'";


//mysqli_query($conn, $sql4); 

//echo "location='request.php';</script>";

echo "<script>";
echo "location='request.php';</script>";



    
?>
