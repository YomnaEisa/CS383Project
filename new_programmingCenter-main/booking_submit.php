<?php
	session_start();

	include 'user.php';
	// include 'appointment.php';

	$user = new User();
    $conn = $user->connect();


		$stdid = $_SESSION['user_id'];
		$stdname = $_SESSION['user_name'];
		$course = $_POST['course'];
		$teacher = $_POST['teacher'];
		$date_time = $_POST['date_time'];
		$details = $_POST['details'];
		$sql = $user->stu_appointment($stdid,$stdname,$course,$teacher,$date_time,$details);
        


		
		if($sql)
		{
			echo "<script>alert('Office hour is booked successfully');";
	        echo "location='appointment.php';</script>";
		}
		else
		{
			echo "<script>alert('Office hour is not booked successfully!');";
	        echo "location=appointment.php';</script>";
		}


 ?>
