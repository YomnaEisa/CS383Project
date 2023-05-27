var script = document.createElement('script');
script.type = 'text/javascript';
script.src = "http://code.jquery.com/jquery-3.5.1.min.js";

 
$(document).ready(function(){
  // Add smooth scrolling  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
     if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  

$(document).ready(function(){
  $("#show_add").click(function(){
    $(".add").show();
  });
    $("#hide").click(function(){
    $(".add").hide();
  });
});


  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
 

 //Chatbot 

var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = 'Chatbot', //name of the chatbot
  talking = false; //when false the speach function doesn't work


//edit this function to change what the chatbot says
function chatbotResponse() {
   botMessage = "I'm confused"; //the default message

  if (lastUserMessage === 'hi' || lastUserMessage =='hello' || lastUserMessage =='Hello' || lastUserMessage =='Hi' || lastUserMessage =='Hey' || lastUserMessage =='hey' 
  || lastUserMessage =='greetings' || lastUserMessage =='Greetings' || lastUserMessage =='good morning' || lastUserMessage =='good evening' || lastUserMessage =='good afternoon'
  || lastUserMessage =='whats up') {
    const hi = ['hi','hello', 'hi there']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }

  if (lastUserMessage === 'bye' || lastUserMessage =='Bye' || lastUserMessage =='Thank you' || lastUserMessage =='Thanks' || lastUserMessage =='bye bye' ) {
    const hi = ['Bye','see you soon!', 'Bye Bye!']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }

  if (lastUserMessage === 'help' || lastUserMessage === 'HELP' || lastUserMessage === 'Help' || lastUserMessage === 'i need help'|| lastUserMessage === 'i want help' || lastUserMessage === 'get resources' || lastUserMessage === 'send me resources') { //HELP here
    botMessage = 'Sure! Enter course code example: CS331';
  }

  if (lastUserMessage === 'cs331' || lastUserMessage === 'CS331' || lastUserMessage === 'Cs331') { //HELP here
    botMessage = 'CS331 resources: <br><a href= "https://cs.calvin.edu/courses/cs/344/kvlinden/resources/AIMA-3rd-edition.pdf">E-Book</a><br><a href="https://www.javatpoint.com/search-algorithms-in-ai">Java t point</a>';
  }

  if (lastUserMessage === 'cs382' || lastUserMessage === 'CS382' || lastUserMessage === 'Cs382') { //HELP here
    botMessage = 'CS382 resources: <br><a href= "https://www.amazon.com/Professional-JavaScript-Developers-Nicholas-Zakas/dp/1118026691">E-Book</a><br><a href="https://www.w3schools.com/">W3Schools</a>';
  }

  if (lastUserMessage === 'cs101' || lastUserMessage === 'CS101' || lastUserMessage === 'Cs101') { //HELP here
      botMessage = 'CS101 resources: <br><a href= "https://www.w3schools.com/">E-Book</a><br><a href="https://web.stanford.edu/class/cs101/">Stanford courses</a>';
    }

  if (lastUserMessage === 'cs381' || lastUserMessage === 'CS381' || lastUserMessage === 'Cs381') { //HELP here
    botMessage = 'CS101 resources: <br><a href= "https://www.amazon.com/Learning-PHP-MySQL-JavaScript-Javascript/dp/1491918667">E-Book</a><br><a href="https://www.w3schools.com/">W3Schools</a>';
  }
  
  if (lastUserMessage === 'cs102' || lastUserMessage === 'CS102' || lastUserMessage === 'Cs102') { //HELP here
    botMessage = 'CS102 resources: <br><a href= "https://www.amazon.com/Intro-Java-Programming-Comprehensive-Version/dp/0133761312">E-Book</a><br><a href="https://www.geeksforgeeks.org/introduction-to-java/">GeeksForGeeks</a>';
  }
  
    if (lastUserMessage === 'cs204' || lastUserMessage === 'CS204' || lastUserMessage === 'Cs204') { //HELP here
    botMessage = 'CS204 resources: <br><a href= "https://www.amazon.com/Practical-Introduction-Data-Structures-Algorithms/dp/0136609112">E-Book</a><br><a href="https://www.javatpoint.com/data-structure-tutorial">Java Point</a>';
  }
  
      if (lastUserMessage === 'cs203' || lastUserMessage === 'CS203' || lastUserMessage === 'Cs203') { //HELP here
    botMessage = 'CS203 resources: <br><a href= "https://www.amazon.com/Art-Assembly-Language-2nd/dp/1593272073">E-Book</a><br><a href="https://www.tutorialspoint.com/assembly_programming/index.htm">tutorial Point</a>';
  }
  
     if (lastUserMessage === 'cs277' || lastUserMessage === 'CS277' || lastUserMessage === 'Cs277') { //HELP here
    botMessage = 'CS277 resources: <br><a href= "https://www.amazon.com/Software-Engineering-Google-Lessons-Programming/dp/1492082791">E-Book</a><br><a href="https://www.geeksforgeeks.org/software-engineering-introduction-to-software-engineering/#:~:text=Software%20Engineering%20%7C%20Introduction%20to%20Software%20Engineering,-Difficulty%20Level%20%3A%20Easy&text=Software%20is%20a%20program%20or,cost%2Deffective%20solution%20to%20problems.">GeeksForGeeks</a>';
  }
  
     if (lastUserMessage === 'cs311' || lastUserMessage === 'CS311' || lastUserMessage === 'Cs311') { //HELP here
    botMessage = 'C311 resources: <br><a href= "https://www.amazon.com/High-Performance-MySQL-Strategies-Operating/dp/1492080519/ref=sr_1_1?keywords=mysql&qid=1639513619&s=books&sr=1-1">E-Book</a><br><a href="https://www.w3schools.com/mySQl/default.asp">W3School</a>';
  }
  
     if (lastUserMessage === 'cs201' || lastUserMessage === 'CS201' || lastUserMessage === 'Cs201') { //HELP here
    botMessage = 'CS203 resources: <br><a href= "https://www.amazon.com/Digital-Fundamentals-11th-Thomas-Floyd/dp/0132737965">E-Book</a><br><a href="https://learn.sparkfun.com/tutorials/digital-logic/all">Digital Logic</a>';
  }
  
}

//this runs each time enter is pressed.
//It controls the overall input and output
function newEntry() {
  //if the message from the user isn't empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    messages.push("<div class=\"messagesuser \">" + lastUserMessage + "</div>");
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
    //add the chatbot's name and message to the array messages
    messages.push("<div class=\"messages\"><b>" + botName + ":</b> " + botMessage + "</div>");
    // says the message using the text to speech function written below
     //outputs the last few array elements of messages to html
    for (var i = 1; i < 5; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
  }
}

//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is 'enter' runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  if (key == 38) {
    console.log('hi')
      //document.getElementById("chatbox").value = lastUserMessage;
  }
}

//clears the placeholder text ion the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}

//End Chatbot

//ALERTS CODE

//WORKSHOP HOSTING REQUEST ALERT
$(document).ready(function() {
        
  $("#workshop_host_apply_button").click(function (e) {

    e.preventDefault();

var formData = {
      fromEmail :  $("#fromEmail").val(),
      phone :  $("#phone").val(),
      title :  $("#title").val(),
      details : $("#details").val(),
      date_time :  $("#date_time").val(),
      place :  $("#place").val(),
  };

      $.ajax({
          type: "POST",
          url: "host.php",
          data: formData ,
          beforeSend: function(){
            // Show spinner
              $("#hostworkshop_spinner").show();
                      },
          success: function(response) {
         $("#workshop_host_apply_alert").show();
         $("#hostworkshop_spinner").hide();
         $('html, body').animate({ scrollTop: 0 }, 0);
             
                        }
      });
  });
});

//ALERT FOR VOLUNTEER REQUEST

$(document).ready(function() {
        
  $("#volunteer_apply_button").click(function (e) {

    e.preventDefault();

var formData = {
      CourseCode :  $("#CourseCode").val(),
      fromEmail :  $("#fromEmail").val(),
      phone :  $("#phone").val(),
      grade : $("#grade").val(),
    //  date_time :  $("#date_time").val(),
  };

      $.ajax({
          type: "POST",
          url: "requestvol.php",
          data: formData ,
          beforeSend: function(){
            // Show spinner
              $("#volunteerreq_spinner").show();
                      },
          success: function(response) {
         $("#volunteer_apply_alert").show();
         $("#volunteerreq_spinner").hide();
         $('html, body').animate({ scrollTop: 0 }, 0);
             
                        }
      });
  });
});

//ALERT FOR ADDING A SESSION 

$(document).ready(function() {
        
  $("#addsession_button").click(function (e) {

    e.preventDefault();

var formData = {
  week :  $("#week").val(),
  time :  $("#time").val(),
  place :  $("#place").val(),
  course : $("#course").val(),
  };

      $.ajax({
          type: "POST",
          url: "offer_help.php",
          data: formData ,
          beforeSend: function(){
            // Show spinner
              $("#volunteerreq_spinner").show();
                      },
          success: function(response) {
         $("#add_session_alert").show();
         $("#addsession_spinner").hide();
         $('html, body').animate({ scrollTop: 0 }, 0);
             
                        }
      });
  });
});

//ALERT TO DELETE VOLUNTEER SESSION - NOT USED

/*
$(document).ready(function() {
        
  $("delete_session_button").click(function (e) {

    e.preventDefault();

      $.ajax({
          type: "POST",
          url: "delete_session.php",
          success: function(response) {
         $("#delete_session_alert").show();
         $('html, body').animate({ scrollTop: 0 }, 0);
             
                        }
      });
  });
});
*/
//ALERT TO BOOK A SESSION AT YOUR TIME

$(document).ready(function() {
        
  $("#book_session_button").click(function (e) {

    e.preventDefault();

     var course = $("#course").val();
     var date_time = $("#date_time").val();
     var details = $("#details").val();
     var teacher = $('#teacher option:selected').val();
 
      $.ajax({
          type: "POST",
          url: "booking_submit.php",
          data: { 
            course : course,
            date_time : date_time,
            details : details,
            teacher : teacher
          },
          success: function(response) {
         $("#book_session_alert").show();
         $('html, body').animate({ scrollTop: 0 }, 0);
                        }
      });
  });
});


// ALERT TO ACCEPT/DECLINE VOLUNTEER - ADMIN

$(document).ready(function() {
        
  $(".accept_vol").click(function (e) {

    e.preventDefault();

  //  var accept_vol = $(".accept_vol").value;
  //  var accept_vol = $(".accept_vol:checked").val();
    var accept_vol = $(this).prev().prev().prev().find('.thisid').html();

   //var accept_vol = document.getElementsByClassName("accept_vol");
  //var accept_vol1 = $("#accept_vol").val();
    alert(accept_vol);

     $.ajax({
          type: "POST",
          url: "accept.php",
          data: { 
            accept_vol : accept_vol
          },
          success: function(response) {
          alert(accept_vol);
         $("#add_vol_alert").show();
         $('html, body').animate({ scrollTop: 0 }, 0);
                        }
      });
  });
});

