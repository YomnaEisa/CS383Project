<?php
	session_start();

	include 'user.php';
	$user = new User();

	if(isset($_POST['submit']))
	{
		$name = $_SESSION['user_name'];
		$ID = $_SESSION['user_id'];
		$fromEmail = $_POST['fromEmail'];
		$phone = $_POST['phone'];
		$CourseCode = $_POST['CourseCode'];
		$grade = $_POST['grade'];
		$date_time = $_POST['date_time'];

		$sql = $user->volunteer_request($name,$ID,$fromEmail,$phone,$CourseCode,$grade,$date_time);

		if($sql)
		{
			echo "<script>alert('You have request to volunteer successfully');";
	        echo "location='newhome.html';</script>";
		}
		else
		{
			echo "<script>alert('Your request to volunteer is not booked successfully!');";
	        echo "location=newhome.html';</script>";
		}
	}
 ?>
