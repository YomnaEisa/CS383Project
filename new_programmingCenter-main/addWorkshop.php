<?php
session_start();
include 'user.php';

$user = new User();

	if(isset($_POST['submit']))
	{
		
		$title   = $_POST['title'];
		$detail  = $_POST['detail'];
		$presenter = $_POST['presenter'];
		$date_time = $_POST['date_time'];
		$place = $_POST['place'];

		
		$sql = $user->addworkshop($title,$detail, $presenter, $date_time, $place);

		if($sql)
		{
			echo "<script>alert('You have add a workshop successfully');";
	        echo "location='workshop_admin.php';</script>";
		}
		else
		{
			echo "<script>alert('Your workshop is not added successfully!');";
	        echo "location='workshop_admin.php';</script>";
		}
	
}

?>