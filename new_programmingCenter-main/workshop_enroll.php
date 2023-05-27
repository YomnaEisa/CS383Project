<?php
	include 'user.php';
	$user = new User();
	session_start();
    

    $participant = $_SESSION['user_name'];
	$conn = $user->connect();

	 $add_participant = $conn->query("UPDATE workshop SET participant='$participant' WHERE id=  '" . $_GET["id"] . "' ");
	 $sql= mysqli_query($conn,$add_participant); 

/*
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
*/

 //       if($sql)

	//	{
echo "<script>alert('Workshop is booked successfully');";
//echo "<script>";
echo "location='workshop_student.php';</script>";
/*echo "<div class='alert alert-success' role='alert'>";
echo "<h4 class='alert-heading'>Well done!</h4>";
echo "<p>Aww yeah, you successfully read this important alert message.
 This example text is going to run a bit longer so that you can see how 
 spacing within an alert works with this kind of content.</p>
<hr>";
echo "<p class='mb-0'>Whenever you need to, be sure to use margin utilities 
to keep things nice and tidy.</p>
</div>"; */
	
	/*	}
	
		else
		{
			echo "<script>alert('Workshop is NOT booked');";
	        echo "location='workshop_student.php';</script>";
		}

*/
	
 ?>
