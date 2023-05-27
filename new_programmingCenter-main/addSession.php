  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scedule Your Session</title>
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
  padding: 10px 20px 120px 70px;
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


<nav class="navbar navbar-expand-md navbar-light bg-white ">  <!-- sticky-top -->

<div class="container-fluid">
     <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="80px" width="80px"></a>
     <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item" >
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
<!--
<nav class="navbar navbar-expand-lg navbar-light bg-white">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav">
     <a class="navbar-brand" href="#"><img src="css/images/yucdep_logo.png" height="80px"></a> 
     <a class="navbar-brand" href="#"><img src="css/images/logo.png" height="90px" width="90px" style="padding-left: 3%;"></a> 
       <a class="nav-item nav-link" href="home_volunteer.php" style="padding-left: 5%; padding-top: 5%;">Home</a>
       <a class="nav-item nav-link" href="workshop_student.php" style="padding-left: 10%; padding-top: 5%;">Workshops</a>
       <a class="nav-item nav-link" href="resources.html" style="padding-left: 10%; padding-top: 5%;">Resources</a>
       <a class="nav-item nav-link" href="https://sdl.edu.sa/sdlportal/en/publishers.aspx" style="padding-left: 10%; padding-top: 5%;">SDL</a>
       <a class="nav-item nav-link" href="#aboutus" style="padding-left: 10%; padding-top: 5%;">About</a>
       <a class="nav-item nav-link" href="logout.php" style="padding-left: 10%; padding-top: 5%;">Logout</a>
     </div>
   </div>
 </nav> -->

<!--
<div class="container33">
    <img class="img-form" 
      src="css/images/logo.png"
      alt="image">
    <form action="offer_help.php" method="post" class="formcontainer">
    <div class="container-text">
      <h2 class="h-form">Add a Session <br>According to your time!</h2>
      <p class="p-form">You can schedule your own session with the Programming Center Team, <br> We Encourage students to get help <br>At any Time.</p>
       

        <select  class="input-form" id="" name="week">
    <option value=""disabled selected>Select a Week</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    </select>
             <input class="input-form" type="datetime-local" name="time" placeholder="Enter Time" required>


        <input type="radio" name="place" value="Programming center(A1-***)" required>
            <label for="">Programming center(A1-***)</label><br>


        <input type="radio" id="" name="place" value="Online session" placeholder="Online session" required>   
         <label for="">Online session</label><br>



        <input class="input-form" type="text" placeholder="Enter Course" name="course" required>

      <button class="button-form" type="submit" name="submit" value="submit">ADD</button>
    </div></form>
  </div> -->
  

<div class = "mobile" style="padding:5%">

<div class="alert alert-success" id="add_session_alert" style ="display: none;">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong> Your session is added successfully!
</div>

<div class="container">

  <!--  <img class="img-form" 
      src="css/images/logo.png"
      alt="image"> -->
    <form method="post" class="formcontainer">
    <div class="container-text">
      <h1 class="h-form" style="color:#fff">Add a Session <br>According to your time!</h1>
      <p class="p-form" style="color:#fff">You can schedule your own session with the Programming Center Team, We Encourage students to get help <br>At any Time.</p>

        <select  class="input-form" id="" name="week" id = "week">
    <option value=""disabled selected>Select a Week</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    </select>
             <input class="input-form" type="datetime-local" name="time" placeholder="Enter Time" id = "time" required>


        <input type="radio" name="place" value="Programming center(A1-***)" id = "place" required>
            <label for="" style="color:#fff">Programming center(A1-***)</label><br>


        <input type="radio" id="place" name="place" value="Online session" placeholder="Online session" required>   
         <label for="" style="color:#fff">Online session</label><br>



        <input class="input-form" type="text" placeholder="Enter Course" name="course" id = "course" required>

      <button class="read_more_color" id = "addsession_button"
       style = "margin-left: 41%; margin-top:3%;">Add</button>
    </div></form>

    <div class="d-flex justify-content-center">
  <div id = "addsession_spinner" class="spinner-border text-light" role="status" style = "display: none;">
    <span class="sr-only">Loading...</span>
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

<script src="NewMain.js"></script>

</body>
</html>