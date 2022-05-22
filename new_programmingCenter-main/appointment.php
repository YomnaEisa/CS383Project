  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Schedule Your Session</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="css/new.css" rel="stylesheet">
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
        <a class="nav-link" href="newhome.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="workshop_student.php">Workshop</a>
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
<div class="container33">
    <img class="img-form" 
      src="css/images/logo.png"
      alt="image">
    <form action="booking_submit.php" method="post" class="formcontainer">
    <div class="container-text">
      <h2 class="h-form">Book session <br>According to your time!</h2>
      <p class="p-form">You can schedule your own session with the Programming Center Team, <br> We Encourage students to get help <br>At any Time.</p>

        <input class="input-form" type="text" placeholder="Enter A Course Code You'd need help with" name="course" required>

        <select class="input-form" id="" name="teacher">
          <option value=""disabled selected>Choose a teacher</option>
          <option value="kajal Khan">kajal Khan</option>
          <option value="Roba Darwish">Roba Darwish</option>
          <option value="siti haris">Siti haris</option>
          <option value="Aisha al-johani">Aisha al-johani</option>
          <option value="omammah Hawasawi">Omammah Hawasawi</option>
          <option value="Other">Other</option>
        </select>

         <input class="input-form" type="datetime-local" name="date_time" placeholder="Enter Time" required>

        <textarea class="input-form" type="text" placeholder="Enter Any Details that can help us provide the suitable help.." name="details" required></textarea>

      <button class="button-form" type="submit" name="submit" value="submit">Book</button>
    </div></form>
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