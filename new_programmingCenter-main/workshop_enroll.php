<?php

	include 'user.php';
	$user = new User();
	session_start();
    

    $username = $_SESSION['user_name'];
	$conn = $user->connect();

     $sql  = "SELECT participant from workshop  WHERE id =  '" . $_GET["id"] . "'";
     $result = $conn->query($sql); 


    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $part = array($rows); //an array of the ppl that already enrolled


	  
   array_push($part, $username); //pushing the new username in the array of enrolled students 
   $participant = implode(" , " , $part); //imploding the array
   $test = $conn->query("UPDATE workshop SET participant='$participant' WHERE id=  '" . $_GET["id"] . "' ");
   $sql1= mysqli_query($conn,$test); 

print_r($participant);

/*
        if($sql)

		{
			echo "<script>alert('Workshop is booked successfully');";
	        echo "location='workshop_student.php';</script>";
		}
	
		else
		{
			echo "<script>alert('Workshop is NOT booked');";
	        echo "location='workshop_student.php';</script>";
		}
*/

	
 ?>
