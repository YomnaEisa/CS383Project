<?php
include 'user.php';
$user = new User();
session_start();


$conn = $user->connect();

$records = mysqli_query($conn,"select * from workshops"); // fetch data from database
$sql = "DELETE FROM workshops WHERE id =  '" . $_GET["id"] . "'";



if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Workshop is deleted');";
    echo "location='workshop.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr workshop not deleted');";
    echo "location='workshop.php';</script>";
}    


?>