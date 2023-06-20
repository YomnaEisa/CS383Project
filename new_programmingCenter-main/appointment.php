  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Schedule Your Session</title>
  <script type="text/javascript" src = https://code.jquery.com/jquery-3.5.1.js></script> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="css/StylingSheet.css">
</head>
<body>
 <!-- Navigation -->

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
              <a class="nav-link" href="newhome.html">Home</a>
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

  

<div class = "mobile"  style = "padding: 5%">

<div class="alert alert-success" id="book_session_alert" style = "display: none;">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong> Your session is booked successfully!
</div>

<div class="container">
  <!-- <img class="img-form" 
      src="css/images/logo.png"
      alt="image"> -->
    <form method="post" class="formcontainer">
    <div class="container-text">
      <h2 class="h-form" style = "color: #ffff">Book a session According to your time!</h2>
      <p class="p-form"  style = "color: #ffff">You can schedule your own session with the Programming Center Team, <br> We Encourage students to get help At any Time!</p>

        <input class="input-form" type="text" placeholder="Enter A Course Code You'd need help with" name="course" id = "course" required
        style = "width: 100%; border: none; padding: 14px; border-radius: 3px; margin-bottom: 2%; margin-top: 2%;">

        <select class="input-form" name="teacher" id = "teacher"
         style = "width: 100%; border: none; padding: 14px; border-radius: 3px; color: grey;">
          <option value="" disabled selected>Choose a teacher</option>
          <option value="kajal Khan">kajal Khan</option>
          <option value="Roba Darwish">Roba Darwish</option>
          <option value="siti haris">Siti haris</option>
          <option value="Aisha al-johani">Aisha al-johani</option>
          <option value="omammah Hawasawi">Omammah Hawasawi</option>
          <option value="Other">Other</option>
        </select>

         <input class="input-form" type="datetime-local" name="date_time" placeholder="Enter Time" id = "date_time" required
         style = "width: 100%; border: none; padding: 14px; border-radius: 3px; margin-bottom: 2%; margin-top: 2%; color: grey;">

        <textarea class="input-form" type="text" placeholder="Enter Any Details that can help us provide the suitable help.." name="details" id = "details" required
        style = "width: 100%; border: none; padding: 14px; border-radius: 3px;"></textarea>

      <button id = "book_session_button" class="read_more_color" style = "margin-left: 40%; margin-top:1%;">Book</button>
    </div></form>
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

<script src="JS/NewMain.js"></script>

</body>
</html>