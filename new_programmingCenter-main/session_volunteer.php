<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  session_start(); 
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Sessions</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/StylingSheet.css">
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-white ">  <!-- sticky-top -->
  <div class="container-fluid">
     <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
     <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="home_volunteer.html">Home</a>
           </li>
           <li class="nav-item ">
              <a class="nav-link" href="workshop_student.php">Workshop</a>
           </li>
           <li class="nav-item ">
              <a class="nav-link" href="resources.html">Resources</a>
           </li>
           <li class="nav-item ">
              <a class="nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a>
           </li>
           <li class="nav-item ">
              <a class="nav-link" href="#aboutus">About Us</a>
           </li>
           <li class="nav-item ">
              <a class="nav-link" href="logout.php">Log Out</a>
           </li>
        </ul>
     </div>
  </div>
</nav> 
 <br>
<div class="mobile" style="padding: 4%;">
    <div id="about" >
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> Your Upcoming Sessions</h2>
                     <span></span>
                  </div>
               </div>
            </div>
  
            <!-- ALERT -->
  <div class="alert alert-success" id="delete_session_alert" style = "display: none;">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success!</strong> Your session is deleted successfully!</div>   

<br>
<a class="read_more_color" href="addSession.php" >Add Session</a>
<br>
<br>
 <section class="row"> 
 <?php 
 //session_start(); 

         include 'user.php';
         $user  = new User();

         $session = $user->sessions(0, $_SESSION['user_name']);
         $sessionArray = array();
         $weekArray = array();
         $courseArray = array();
  
         if ($session == null)
          echo "<h3 style = \"color = #ffff;\">No Sessions is added</h3>";

      else 
      {
        echo "  <div class=\"container\">";
        echo "  <div class=\"row\">";
       foreach ($session as $data)
       { 

              ?>
      <div class="col-md-4">
      <div class="card card-1"> 

       <?php $data['session_id'];?> 
      <h3><?php echo $data['course'];?></h3>
      <p>Time: <?php echo $data['time'];?></p>
      <p>Place: <?php echo $data['place'];?></p>
 <a class="btn btn-outline-secondary"id = "delete_session_button" href="delete_session.php?session_id=<?php echo $data["session_id"]; ?>">Delete</a>
 <!-- <button class="btn btn-outline-secondary" id = "delete_session_button">Delete</button> -->
 

</div>
  </div>

<?php
        }   
       } 
         ?>
         </div></div></div></div>

 </section>
      </div>
 
   <!-- about section-->
   <div id="aboutus" class="about-section" style = "padding-top: 0%;">
      <div class="inner-container">
         <h1>About Us</h1>
         <p class="text">
            The <i><b>Programming Center</b></i> is located within the Yanbu Industrial College and is
             dedicated to providing computer science and engineering students with the support they need to 
             excel in their courses.
             
             <br><br><b>Our mission</b> is to help our students become knowledgeable and exceptional 
             engineers by offering a wide range of resources and services. We believe in providing
              a collaborative and inclusive learning environment that fosters creativity and innovation.
         </p>
         <div class="skills">
         </div>
      </div>
   </div>



<!--   <div class="containerfooter"></div> -->
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
      <ul class = "ul">
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul class = "ul">
        <li><a href="#">Docs</a></li>
        <li><a href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul class = "ul">
        <li><a href="#">Help</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Get free updates before others do!</p>
      <form class = "emailup">
        <input type="email" name="email" placeholder="Enter email address">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </section>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list" class = "ul">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2021 by HAYA, YOMNA, SARAH</li>
    </ul>
  </section>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="JS/NewMain.js"></script>
</body>
</html>