<?php
	include 'user.php';
	$user = new User();
	session_start();

	$conn = $user->connect();
	$part[]=$_SESSION['user_name'];
	
        $participant= implode(',', $part);
        $query= "UPDATE sessions_table SET participant = '$participant' WHERE session_id =  '" . $_GET["session_id"] . "' ";
        $query2= "UPDATE sessions_table SET status = 'Booked' WHERE session_id =  '" . $_GET["session_id"] . "' ";
        $sql= mysqli_query($conn,$query);
        $sql2=mysqli_query($conn,$query2);

        if($sql)

		{
			echo "<script>alert('Office hour is booked successfully');";
	        echo "location='sessions.php';</script>";
		}
	
		else
		{
			echo "<script>alert('Office hour is not booked successfully!');";
	        echo "location=sessions.php';</script>";
		}
	
 ?>
