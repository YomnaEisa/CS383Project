<?php
session_start();

include 'user.php';
$user = new User();
 
	if(isset($_POST['submit']))
	{
		$title      = $_POST['title'];
		$details     = $_POST['details'];
		$presenter  = $_POST['username'];
		$date       = $_POST['date'];
		$time       = $_POST['time'];
		$place      = $_POST['place'];

		$sql = $user->addWorkshop($title, $details, $presenter, $date, $time, $place);

		if($sql)
		{
			echo "<script>alert('Workshop is added');";
	        echo "location='workshop.php';</script>";
		}
		else
		{
			echo "<script>alert('Workshop is not added');";
	        echo "location='workshop.php';</script>";
		}
	
}
?>