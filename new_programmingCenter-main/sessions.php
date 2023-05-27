
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="css/styling.css" rel="stylesheet">
    

<style>

  .card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
  height: 100%;
  } 

  .card:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  }


.card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}


.card-1{
    background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
    background-repeat: no-repeat;
    background-position: right;
    background-size: 80px; 
}

.card-2{
   background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-3{
   background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

@media(max-width: 990px){
  .card{
    margin: 20px;
  }
} 

</style>
</head>
<body>
  
   <!-- Navigation -->

   <nav class="navbar navbar-expand-md navbar-light bg-white "> <!-- sticky-top -->
      <div class="container-fluid">
         <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
         <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="newhome.html">Home</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" href="workshop_student.php">Workshops</a>
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
<BR>

   <div class="mobile" style="padding-top: 5%;">
   <div class="titlepage" style = "padding-left: 5%; padding-bottom: 2%">
                     <h2>Sessions</h2>
            <span></span></div>   
<?php 
 session_start(); 
         include 'user.php';
         $user  = new User();

         $req= $user->sessions(1, $_SESSION['user_name']);
         

         if ($req == null)
          echo "<h3>No Sessions is added</h3>";

      else 
      {
        echo "  <div class=\"container\">";
        echo "  <div class=\"row\">";
       foreach ($req as $data)
       { 

              ?>
      <div class="col-md-4">
      <div class="card card-1"> 
       <?php $data['session_id'];?> 
      <h3><?php echo $data['course'];?></h3>
      <p>Teacher: <?php echo $data['teacher_name'];?></p>
      <p>Time: <?php echo $data['time'];?></p>
      <p>Week Number: <?php echo $data['week_number'];?></p>
      <p>Place: <?php echo $data['place'];?></p>
      <p>status: <?php echo $data['status'];?></p>

      <?php if($data['status'] ==! "Booked") {?>
        <a class="btn btn-outline-secondary" href="enroll.php?session_id=<?php echo $data["session_id"]; ?>">Enroll</a>
   <?php  } ?>

</div>

  </div>
      
  
<?php
        }   
       } 
         ?>

         
         </div>

         <div class = "container">

         <h5 style = "color: #ffff; padding-top: 3%; padding-bottom: 1%;">Can't find a session that fits your schedule? book a session at <i>your own time</i></h5>
         <a class="read_more_color" href="appointment.php" >Book A Session</a>
      </div>

        </div>
      </div>
        </div>
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





<!--footer -->
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
        <li><a href="#">SDL</a></li>
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


<script src="main.js"></script>

</body>
</html>