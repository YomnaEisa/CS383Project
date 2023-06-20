
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>workshops</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/StylingSheet.css">
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
                  <a class="nav-link" href="request.php">Home</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#">Workshops</a>
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
<!-- volunteer request-->
<div id="about" class="mobile" style = "padding-top: 5%">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2> Upcoming Workshops</h2>
                     <span></span></div></div></div>

<?php 
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
  <a class="btn btn-outline-secondary" href="deleteworkshop_admin.php?title=<?php echo $data["title"]; ?>">Delete</a>

</div>
  </div>

<?php
        }   
       } 
         ?>
         </div></div></div></div></div>

<!--- Welcome Section -->
<div class="container" style = "padding-top: 3%; padding-bottom: 0%;"> 
 <div class="row d_flex">
   <div class="col-md-4">
     <div class="titlepage">
        <h2>Add Workshop</h2>
        <span></span>
      </div>
    </div>
 </div>
</div>


    <div class="container33">
    <img class="img-form" 
      src="css/images/logo.png"
      alt="image">
    <form action="addWorkshop.php" method="post" class="formcontainer"> 
    <div class="container-text" style = "padding-bottom: 5%; padding-top: 0%;">


        <input class="input-form" type="text" placeholder="Enter A title  for a workshop" name="title" required>

        <input class="input-form" type="text" placeholder="Enter Any Details that can help us understand the purpose.." name="detail" required>

        <input class="input-form" type="text" placeholder="Enter A presenter name for a workshop" name="presenter" required>

        <input class="input-form" type="datetime-local" name="date_time" placeholder="Enter Time" required>

        <input class="input-form" type="text" placeholder="Enter A place for your workshop" name="place" required>

      <button class="button-form" type="submit" name="submit" value="submit">Add Workshop</button>
      
    </div></form>
  </div>
<!--</div>
</div>-->

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


<script src="JS/NewMain.js"></script>

</body>
</html>