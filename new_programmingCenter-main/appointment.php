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
  <link href="css/styling.css" rel="stylesheet">
  <style>

.container33 {
  background-color: $primary-color;
  width: 80%;
  height: 100%;
  position: relative;
  display: grid;
  padding: 60px 20px 35px 50px;
  grid-template-columns: 1fr 2fr;
  place-items: center;
  line-height: 1.5;
}

  .img-form{
    width: 300px;
    height: 400px;
    object-fit: cover;
    object-position: center;
    padding: 20px 25px 35px 5px;
  }

    .h-form {
      font-size: 1.2rem;
      color: #1A2250;
    }

    .p-form {
      font-size: 14px;
      color: #3B4169;
      margin: 10px 0;
    }

    .input-form , .button-form {
      width: 100%;
      border: none;
      padding: 14px;
      border-radius: 3px;
    }

    .input-form {
      border: 2px solid #DADDEC;
      margin: 5px 0 10px;
      font-size: 1rem;
      color: #656880;
    }

    .button-form {
      background-image: linear-gradient(to right, #457c66, #74c4a4);
      display: block;
      color: $primary-color;
      font-size: 1rem;
      cursor: $cursor;
      box-shadow: 0 5px 20px #89caff94;
      transition: box-shadow .3s ease-in-out;
    }

    .button-form:hover {
      box-shadow: none;
    }
    </style>

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
<!--
<nav class="navbar navbar-expand-lg navbar-light bg-white">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav">
     <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a> 
     <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="90px" width="90px" style="padding-left: 3%;"></a> 
       <a class="nav-item nav-link" href="newhome.html" style="padding-left: 5%; padding-top: 5%;">Home</a>
       <a class="nav-item nav-link" href="workshop_student.php" style="padding-left: 10%; padding-top: 5%;">Workshops</a>
       <a class="nav-item nav-link" href="resources.html" style="padding-left: 10%; padding-top: 5%;">Resources</a>
       <a class="nav-item nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx" style="padding-left: 10%; padding-top: 5%;">SDL</a>
       <a class="nav-item nav-link" href="#aboutus" style="padding-left: 10%; padding-top: 5%;">About</a>
       <a class="nav-item nav-link" href="logout.php" style="padding-left: 10%; padding-top: 5%;">Logout</a>
     </div>
   </div>
 </nav> -->
  

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

        <input class="input-form" type="text" placeholder="Enter A Course Code You'd need help with" name="course" id = "course" required>

        <select class="input-form" name="teacher" id = "teacher">
          <option value="" disabled selected>Choose a teacher</option>
          <option value="kajal Khan">kajal Khan</option>
          <option value="Roba Darwish">Roba Darwish</option>
          <option value="siti haris">Siti haris</option>
          <option value="Aisha al-johani">Aisha al-johani</option>
          <option value="omammah Hawasawi">Omammah Hawasawi</option>
          <option value="Other">Other</option>
        </select>

         <input class="input-form" type="datetime-local" name="date_time" placeholder="Enter Time" id = "date_time" required>

        <textarea class="input-form" type="text" placeholder="Enter Any Details that can help us provide the suitable help.." name="details" id = "details" required></textarea>

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

<script src="NewMain.js"></script>

</body>
</html>