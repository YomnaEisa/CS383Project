
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="css/new.css" rel="stylesheet">


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
<nav class="navbar navbar-expand-md navbar-light bg-white "><!--sticky-top-->
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
    <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png"  height="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="teacher_sessions.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="workshop.php">Workshop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pleasework.htm">Resources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx">SDL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!-- volunteer request-->
<div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> Upcoming Workshops</h2>
                     <span></span></div></div></div>

<?php 
session_start(); 
         include 'user.php';
         $user  = new User();
         $req = $user->workshops();
         

         if ($req == null)
          echo "<h3>No Workshops is added</h3>";

      else 
      {
        echo "  <div class=\"container\">";
        echo "  <div class=\"row\">";
       foreach ($req as $data)
       { 

              ?>
      <div class="col-md-4">
      <div class="card card-1">  
      <h3><?php echo $data['title'];?></h3>
      <p><?php echo $data['detail'];?></p>
      <p><?php echo $data['presenter'];?></p>
      <p><?php echo $data['date_time'];?></p>
      <p><?php echo $data['place'];?></p>

</div>
  </div>

<?php
        }   
       } 
         ?>
         </div></div></div></div></div>

<!--offer help section-->
      <div id="about"  class="about">
         <div class="container"><br><br><br>
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> Host a Workshop</h2>
                     <span></span>
                     <p> If you're intersted you can host your own workshop according to your time and interst with our programming center team. spread knowledge to other students! </p>
                     <a class="read_more" href="hostWorkshop.php" > Host Workshop  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="css/images/workshop.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div><br><br><br><br>
      </div>



      <!-- about section-->
      <div id="aboutus" class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Helpin Sessions</span>
                <span>Volunteering</span>
                <span>Offering Workshops</span>
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