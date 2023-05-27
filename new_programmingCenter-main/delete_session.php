<?php
include 'user.php';
$user = new User();
//session_start();


$conn = $user->connect();

$sql = "DELETE FROM sessions_table WHERE session_id =  '" . $_GET["session_id"] . "'";

        if(mysqli_query($conn, $sql))
{
   echo "<script>";
    echo "location='session_volunteer.php';</script>";
   // echo "success";
    exit;   
}
else
{
    echo "<script>alert('Erorr session not deleted');";
    echo "location='session_volunteer.php';</script>";
}    


?>
