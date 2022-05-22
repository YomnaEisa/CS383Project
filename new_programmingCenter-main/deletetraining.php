<?php
include 'user.php';
//include 'workshop.php';
$user = new User();
session_start();


$conn = $user->connect();

$records = mysqli_query($conn,"select * from trainingprograms"); // fetch data from database
$sql = "DELETE FROM trainingprograms WHERE id =  '" . $_GET["id"] . "'";



if(mysqli_query($conn, $sql))
{
    echo "<script>alert('training program is deleted');";
    echo "location='workshop.php';</script>";
    exit;   
}
else
{
    echo "<script>alert('Erorr training program not deleted');";
    echo "location='workshop.php';</script>";
}    


?>