<?php
session_start();
include 'user.php';

$user = new User();

	if(isset($_POST['submit']))
	{
		$teacher_name  = $_SESSION['user_name'];
		$teacher_id  = $_SESSION['user_id'];
		$fromEmail   = $_POST['fromEmail'];
		$phone   = $_POST['phone'];
		$details  = $_POST['details'];
		$title = $_POST['title'];
		$date_time = $_POST['date_time'];
		$place = $_POST['place'];

		
		$sql = $user->workshop_request($teacher_name,$teacher_id,$fromEmail, $phone, $details, $title, $date_time, $place);

		if($sql)
		{
			echo "<script>alert('You have request to host a workshop successfully');";
	        echo "location='teacher_sessions.php';</script>";
		}
		else
		{
			echo "<script>alert('Your request to host a workshop is not booked successfully!');";
	        echo "location='teacher_sessions.php';</script>";
		}
	
}

?>