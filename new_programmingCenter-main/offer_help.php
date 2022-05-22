<?php
session_start();
include 'user.php';

$user = new User();

	if(isset($_POST['submit']))
	{
		$week   = $_POST['week'];
		$time   = $_POST['time'];
		$place  = $_POST['place'];
		$course = $_POST['course'];
		$teacher_id  = $_SESSION['user_id'];
		$teacher_name  = $_SESSION['user_name'];

		
		$sql = $user->add_session($week, $time, $place, $course, $teacher_id, $teacher_name);

		if($sql)
		{
			echo "<script>alert('Session is added');";
	        echo "location='teacher_sessions.php';</script>";
		}
		else
		{
			echo "<script>alert('Session is not added');";
	        echo "location='teacher_sessions.php';</script>";
		}
	
}

?>