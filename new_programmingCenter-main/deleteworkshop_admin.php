<?php
include 'user.php';
$user = new User();
session_start();


$conn = $user->connect();

$records = mysqli_query($conn,"select * from workshop"); // fetch data from database
$sql = "DELETE FROM workshop WHERE title =  '" . $_GET["title"] . "'";



if(mysqli_query($conn, $sql))
{
    echo "<script>alert('Workshop is deleted');";
    echo "location='workshop_admin.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr Workshop not deleted');";
    echo "location='workshop_admin.php';</script>";
}    


?>