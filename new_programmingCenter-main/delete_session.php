<?php
include 'user.php';
$user = new User();
session_start();


$conn = $user->connect();

$sql = "DELETE FROM sessions_table WHERE session_id =  '" . $_GET["session_id"] . "'";

        if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Session is deleted');";
    echo "location='teacher_sessions.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr session not deleted');";
    echo "location='teacher_sessions.php';</script>";
}    


?>
