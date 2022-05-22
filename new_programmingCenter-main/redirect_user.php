<?php
session_start(); 

include 'user.php';

  if ($_SESSION['role'] == "student")
  	$page = "home_student.php";
  
  else if ($_SESSION['role'] == "teacher")
  	$page = "home_teacher.php";


?>