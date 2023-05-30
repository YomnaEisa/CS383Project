<?php
	session_start();

	include 'user.php';
	$user = new User();


		$name = $_SESSION['user_name'];
		$ID = $_SESSION['user_id'];
		$fromEmail = $_POST['fromEmail'];
		$phone = $_POST['phone'];
		$CourseCode = $_POST['CourseCode'];
		$grade = $_POST['grade'];

		$sql = $user->volunteer_request($name,$ID,$fromEmail,$phone,$CourseCode,$grade);

		if($sql)
		{
			//echo "<script>alert('You have request to volunteer successfully');";
	        //echo "location='newhome.html';</script>";
			echo "success";
		}
		else
		{
			echo "<script>alert('Your request to volunteer is not booked successfully!');";
	        echo "location=newhome.html';</script>";
		}

 ?>
