<?php

	session_start();

	include_once 'user.php';
//	include_once 'workshop.html';

	$user = new User();

	if(isset($_POST['submit']))
	{
		$title      = $_POST['title'];
		$details     = $_POST['details'];
		$presenter  = $_POST['username'];
		$date       = $_POST['date'];
		$time       = $_POST['time'];
		$place      = $_POST['place'];
		$sql        = $user->trainingprograms($title, $details, $presenter, $date, $time, $place);

		if($sql)
		{
			echo "<script>alert('training program is added');";
	        echo "location='workshop.php';</script>";
		}
		else
		{
			echo "<script>alert('training program is not added');";
	        echo "location='workshop.php';</script>";
		}
	
}
?>