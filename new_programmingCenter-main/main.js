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

function show_hide() {
  var x = document.getElementById(".add");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

 //Chatbot 
/*
var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  day = "",
  slot = "",
  course ="",
  name = "",
  slotName= "",
  botName = 'Chatbot', //name of the chatbot
  talking = false; //when false the speach function doesn't work


//edit this function to change what the chatbot says
function chatbotResponse() {
   botMessage = "im confused"; //the default message
  if (lastUserMessage === 'hi' || lastUserMessage =='hello' || lastUserMessage =='Hello' || lastUserMessage =='Hi' || lastUserMessage =='Hey' || lastUserMessage =='hey'
  || lastUserMessage =='greetings' || lastUserMessage =='Greetings' || lastUserMessage =='good morning' || lastUserMessage =='good evening' || lastUserMessage =='good afternoon'
  || lastUserMessage =='whats up') {
    const hi = ['hi','hello', 'hi']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }
 
   // slotNames
    if (lastUserMessage === 'A') { //HELP here
slotName = 'A';  }
     
if (lastUserMessage === 'B') { //HELP here
slotName = 'B';  }

if (lastUserMessage === 'C') { //HELP here
slotName = 'C'; }

  if (lastUserMessage === 'bye' || lastUserMessage =='Bye' || lastUserMessage =='Thank you' || lastUserMessage =='Thanks' || lastUserMessage =='bye bye' ) {
    const hi = ['Bye','see you soon!', 'Bye Bye!']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }
 
 
  if (lastUserMessage === 'help' || lastUserMessage === 'HELP' || lastUserMessage === 'Help' || lastUserMessage === 'i need help'|| lastUserMessage === 'i want help' || lastUserMessage === 'get resources' || lastUserMessage === 'send me resources') { //HELP here
    botMessage = 'Sure! Enter which day of the week you would like you session in. example: sunday';
  }

//days of the week with their time slots
  if (lastUserMessage === 'Sunday' || lastUserMessage === 'sunday' || lastUserMessage === 'SUNDAY') { //HELP here
    botMessage = 'available time slots on sunday, Please Responde only with the slot you like<br> example: A<br> <br>Slot A: 10:15 - 11:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05 <br> ';
  day = lastUserMessage;
  }

   if (lastUserMessage === 'Monday' || lastUserMessage === 'monday' || lastUserMessage === 'MONDAY') { //HELP here
    botMessage = 'available time slots on monday, Please Responde only with the slot you like<br> example: A<br> <br>Slot A: 08:15 - 09:05 <br> Slot B: 02:15 - 03:05 <br> Slot C: 03:15 - 04:05 <br> ';
  day = lastUserMessage;

  }

   if (lastUserMessage === 'Tuesday' || lastUserMessage === 'tuesday' || lastUserMessage === 'TUESDAY') { //HELP here
    botMessage = 'available time slots on tuesday, Please Responde only with the slot you like<br> example: A<br> <br>Slot A: 07:15 - 08:05 <br> Slot B: 09:15 - 10:05 <br> Slot C: 01:15 - 02:05 <br> ';
   day = lastUserMessage;
 }

  if (lastUserMessage === 'Wednesday' || lastUserMessage === 'wednesday' || lastUserMessage === 'WEDNESDAY') { //HELP here
    botMessage = 'available time slots on wednesday Please Responde only with the slot you like<br> example: A<br> <br>Slot A: 10:15 - 11:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05 <br> ';
 
  day = lastUserMessage;
  }
 
  if (lastUserMessage === 'Thursday' || lastUserMessage === 'thursday' || lastUserMessage === 'THURSDAY') { //HELP here
    botMessage = 'available time slots on thursday Please Responde only with the slot you like<br> example: A<br> <br>Slot A: 08:15 - 09:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05 <br> ';
    day = lastUserMessage;
  }
 


  //each sunday with the choosen time slot
    if (day === 'sunday' && slotName === 'A') { //HELP here
slot = 'Slot A: 10:15 - 11:05'
    botMessage = 'you have pick slot A on sunday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'sunday'&& slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on sunday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'sunday' && slotName === 'C' ) { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on sunday, correct? <br> awnser with Yes/no';
  }
 
 



  //each monday with the choosen time slot
  //Slot A: 08:15 - 09:05 <br> Slot B: 02:15 - 03:05 <br> Slot C: 03:15 - 04:05 <br> ';
    if (day === 'monday' && slotName === 'A') { //HELP here
slot = 'Slot A: 08:15 - 09:05'
    botMessage = 'you have pick slot A on Monday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'monday' && slotName === 'B') { //HELP here
slot = 'Slot B: 02:15 - 03:05'
    botMessage = 'you have pick slot B on Monday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'monday' && slotName === 'C') { //HELP here
slot = 'Slot C: 03:15 - 04:05'
    botMessage = 'you have pick slot C on Monday, correct? <br> awnser with Yes/no';
  }
 

 
    //each Tuesday with the choosen time slot
//<br>Slot A: 07:15 - 08:05 <br> Slot B: 09:15 - 10:05 <br> Slot C: 01:15 - 02:05 <br>  
if (day === 'tuesday' && slotName === 'A') { //HELP here
slot = 'Slot A: 07:15 - 08:05'
    botMessage = 'you have pick slot A on Tuesday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'tuesday' && slotName === 'B') { //HELP here
slot = 'Slot B: 09:15 - 10:05'
    botMessage = 'you have pick slot B on Tuesday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'tuesday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on Tuesday, correct? <br> awnser with Yes/no';
  }
 
 
    //each wednesday with the choosen time slot
//<br>Slot A: 10:15 - 11:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05  
    if (day === 'wednesday'&& slotName === 'A') { //HELP here
slot = 'A: 10:15 - 11:05'
    botMessage = 'you have pick slot A on Wednesday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'wednesday'&& slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on Wednesday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'wednesday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05  '
    botMessage = 'you have pick slot C on Wednesday, correct? <br> awnser with Yes/no';
  }
 
 
     //each Thursday with the choosen time slot
  //<br>Slot A: 08:15 - 09:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05 <br>
 
      if (day === 'thursday' && slotName === 'A') { //HELP here
slot = 'Slot A: 08:15 - 09:05'
    botMessage = 'you have pick slot A on Thursday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'thursday' && slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on Thursday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'thursday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on Thursday, correct? <br> awnser with Yes/no';
  }
 
 
 
      if (lastUserMessage === 'Yes' || lastUserMessage === 'yes' || lastUserMessage === 'YES' || lastUserMessage === 'Y' || lastUserMessage === 'y') { //HELP here
    botMessage = 'Cool! now, please send me the following information<br> course code<br> example: CS383';
  }
 
 
      if (lastUserMessage === 'No' || lastUserMessage === 'no' || lastUserMessage === 'NO' || lastUserMessage === 'N' || lastUserMessage === 'n' ) { //HELP here
    botMessage = 'Ok lets start over! Enter which day of the week you would like you session in. example: sunday';
  }
 
     if (lastUserMessage === 'CS101' || lastUserMessage === 'CS102' || lastUserMessage === 'CS201' || lastUserMessage === 'CS202' || lastUserMessage === 'CS203' || lastUserMessage === 'CS204' || lastUserMessage === 'CS311' || lastUserMessage === 'CS331' || lastUserMessage === 'CS302' || lastUserMessage === 'CS382' || lastUserMessage === 'CS383' || lastUserMessage === 'CS401' || lastUserMessage === 'CS480' || lastUserMessage === 'CS471') { //HELP here
    course = lastUserMessage;
    botMessage = 'Awsome! so before we move forward, please check if all your information is correct. <br> if it is please anwser with done, if not please awnser with no. <br><p>Course Code: '+course+'<br>day: '+day+'<br>time slot: '+ slot+'</p>';
  }
 
 
  if (lastUserMessage === 'done' || lastUserMessage === 'DONE' || lastUserMessage === 'Done' ) { //HELP here
  botMessage = 'Alright! youre all set for your appointment! see you on '+day+' at '+slot+' in the programming center!';

  }
 

  //botMessage = 'Awsome! so before we move forward, please check if all your information is correct. <br> if it is please anwser with done, if not please awnser with no. <br> <p>Course Code: '+course+'<br>day: '+day+'<br>time slot: '+ slot+'</p>';

} */


var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  day = "",
  slot = "",
  course ="",
  name = "",
  slotName= "",
  botName = 'Chatbot', //name of the chatbot
  talking = false; //when false the speach function doesn't work


//edit this function to change what the chatbot says
function chatbotResponse() {
   botMessage = "im confused"; //the default message
  if (lastUserMessage === 'hi' || lastUserMessage =='hello' || lastUserMessage =='Hello' || lastUserMessage =='Hi' || lastUserMessage =='Hey' || lastUserMessage =='hey'
  || lastUserMessage =='greetings' || lastUserMessage =='Greetings' || lastUserMessage =='good morning' || lastUserMessage =='good evening' || lastUserMessage =='good afternoon'
  || lastUserMessage =='whats up') {
    const hi = ['hi','hello', 'hi']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }
 
  /*
   // slotNames
    if (lastUserMessage === 'A') { //HELP here
slotName = 'A';  }
     
if (lastUserMessage === 'B') { //HELP here
slotName = 'B';  }

if (lastUserMessage === 'C') { //HELP here
slotName = 'C'; } */

  if (lastUserMessage === 'bye' || lastUserMessage =='Bye' || lastUserMessage =='Thank you' || lastUserMessage =='Thanks' || lastUserMessage =='bye bye' ) {
    const hi = ['Bye','see you soon!', 'Bye Bye!']
    botMessage = hi[Math.floor(Math.random()*(hi.length))];
  }
 
 
  if (lastUserMessage === 'help' || lastUserMessage === 'HELP' || lastUserMessage === 'Help' || lastUserMessage === 'i need help'|| lastUserMessage === 'i want help' || lastUserMessage === 'get resources' || lastUserMessage === 'send me resources') { //HELP here
    botMessage = 'Sure! Enter which Course you need its resources of! \n example: CS480';
  }

//days of the week with their time slots
  if (lastUserMessage === 'CS101' || lastUserMessage === 'Cs101' || lastUserMessage === 'cs101' || lastUserMessage === 'cS101') { //HELP here
    botMessage = 'CS101 - Introduction to Computer Programming resources: \n W3School - C programming https://www.w3schools.com/c/c_intro.php#:~:text=What%20is%20C%3F,write%20the%20UNIX%20operating%20system. ';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS102' || lastUserMessage === 'Cs102' || lastUserMessage === 'cs102' || lastUserMessage === 'cS102') { //HELP here
    botMessage = 'CS102';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS202' || lastUserMessage === 'Cs202' || lastUserMessage === 'cs202' || lastUserMessage === 'cS202') { //HELP here
    botMessage = 'CS202';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS201' || lastUserMessage === 'Cs201' || lastUserMessage === 'cs201' || lastUserMessage === 'cS201') { //HELP here
    botMessage = 'CS201';
    course = lastUserMessage;
  }
 
  if (lastUserMessage === 'CS203' || lastUserMessage === 'Cs203' || lastUserMessage === 'cs203' || lastUserMessage === 'cS203') { //HELP here
    botMessage = 'CS203';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS204' || lastUserMessage === 'Cs204' || lastUserMessage === 'cs204' || lastUserMessage === 'cS204') { //HELP here
    botMessage = 'CS204';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS311' || lastUserMessage === 'Cs311' || lastUserMessage === 'cs311' || lastUserMessage === 'cS311') { //HELP here
    botMessage = 'CS311';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS302' || lastUserMessage === 'Cs302' || lastUserMessage === 'cs302' || lastUserMessage === 'cS302') { //HELP here
    botMessage = 'CS302';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS381' || lastUserMessage === 'Cs381' || lastUserMessage === 'cs381' || lastUserMessage === 'cS381') { //HELP here
    botMessage = 'CS381';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS382' || lastUserMessage === 'CS382' || lastUserMessage === 'CS382' || lastUserMessage === 'CS382') { //HELP here
    botMessage = 'CS382';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS383' || lastUserMessage === 'CS383' || lastUserMessage === 'CS383' || lastUserMessage === 'CS383') { //HELP here
    botMessage = 'CS383';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS401' || lastUserMessage === 'CS401' || lastUserMessage === 'CS401' || lastUserMessage === 'CS401') { //HELP here
    botMessage = 'CS401';
    course = lastUserMessage;
  }

  if (lastUserMessage === 'CS480' || lastUserMessage === 'CS480' || lastUserMessage === 'CS480' || lastUserMessage === 'CS480') { //HELP here
    botMessage = 'CS480';
    course = lastUserMessage;
  }

  /*
  //each sunday with the choosen time slot
    if (lastUserMessage === 'CS101' || lastUserMessage === 'Cs101' || lastUserMessage === 'cs101' || lastUserMessage === 'cS101') { //HELP here
slot = 'Slot A: 10:15 - 11:05'
    botMessage = 'you have pick slot A on sunday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'sunday'&& slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on sunday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'sunday' && slotName === 'C' ) { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on sunday, correct? <br> awnser with Yes/no';
  }
 
 



  //each monday with the choosen time slot
  //Slot A: 08:15 - 09:05 <br> Slot B: 02:15 - 03:05 <br> Slot C: 03:15 - 04:05 <br> ';
    if (day === 'monday' && slotName === 'A') { //HELP here
slot = 'Slot A: 08:15 - 09:05'
    botMessage = 'you have pick slot A on Monday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'monday' && slotName === 'B') { //HELP here
slot = 'Slot B: 02:15 - 03:05'
    botMessage = 'you have pick slot B on Monday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'monday' && slotName === 'C') { //HELP here
slot = 'Slot C: 03:15 - 04:05'
    botMessage = 'you have pick slot C on Monday, correct? <br> awnser with Yes/no';
  }
 

 
    //each Tuesday with the choosen time slot
//<br>Slot A: 07:15 - 08:05 <br> Slot B: 09:15 - 10:05 <br> Slot C: 01:15 - 02:05 <br>  
if (day === 'tuesday' && slotName === 'A') { //HELP here
slot = 'Slot A: 07:15 - 08:05'
    botMessage = 'you have pick slot A on Tuesday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'tuesday' && slotName === 'B') { //HELP here
slot = 'Slot B: 09:15 - 10:05'
    botMessage = 'you have pick slot B on Tuesday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'tuesday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on Tuesday, correct? <br> awnser with Yes/no';
  }
 
 
    //each wednesday with the choosen time slot
//<br>Slot A: 10:15 - 11:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05  
    if (day === 'wednesday'&& slotName === 'A') { //HELP here
slot = 'A: 10:15 - 11:05'
    botMessage = 'you have pick slot A on Wednesday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'wednesday'&& slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on Wednesday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'wednesday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05  '
    botMessage = 'you have pick slot C on Wednesday, correct? <br> awnser with Yes/no';
  }
 
 
     //each Thursday with the choosen time slot
  //<br>Slot A: 08:15 - 09:05 <br> Slot B: 11:15 - 12:05 <br> Slot C: 01:15 - 02:05 <br>
 
      if (day === 'thursday' && slotName === 'A') { //HELP here
slot = 'Slot A: 08:15 - 09:05'
    botMessage = 'you have pick slot A on Thursday, correct? <br> awnser with Yes/no';
  }
   
      if (day === 'thursday' && slotName === 'B') { //HELP here
slot = 'Slot B: 11:15 - 12:05'
    botMessage = 'you have pick slot B on Thursday, correct? <br> awnser with Yes/no';
  }
 
      if (day === 'thursday' && slotName === 'C') { //HELP here
slot = 'Slot C: 01:15 - 02:05'
    botMessage = 'you have pick slot C on Thursday, correct? <br> awnser with Yes/no';
  }
 
 */
 
  /*
      if (lastUserMessage === 'Yes' || lastUserMessage === 'yes' || lastUserMessage === 'YES' || lastUserMessage === 'Y' || lastUserMessage === 'y') { //HELP here
    botMessage = 'Cool! now, please send me the following information<br> course code<br> example: CS383';
  }
 
 
      if (lastUserMessage === 'No' || lastUserMessage === 'no' || lastUserMessage === 'NO' || lastUserMessage === 'N' || lastUserMessage === 'n' ) { //HELP here
    botMessage = 'Ok lets start over! Enter which day of the week you would like you session in. example: sunday';
  }
 
     if (lastUserMessage === 'CS101' || lastUserMessage === 'CS102' || lastUserMessage === 'CS201' || lastUserMessage === 'CS202' || lastUserMessage === 'CS203' || lastUserMessage === 'CS204' || lastUserMessage === 'CS311' || lastUserMessage === 'CS331' || lastUserMessage === 'CS302' || lastUserMessage === 'CS382' || lastUserMessage === 'CS383' || lastUserMessage === 'CS401' || lastUserMessage === 'CS480' || lastUserMessage === 'CS471') { //HELP here
    course = lastUserMessage;
    botMessage = 'Awsome! so before we move forward, please check if all your information is correct. <br> if it is please anwser with done, if not please awnser with no. <br><p>Course Code: '+course+'<br>day: '+day+'<br>time slot: '+ slot+'</p>';
  }
 
 
  if (lastUserMessage === 'done' || lastUserMessage === 'DONE' || lastUserMessage === 'Done' ) { //HELP here
  botMessage = 'Alright! youre all set for your appointment! see you on '+day+' at '+slot+' in the programming center!';

  }
 

  //botMessage = 'Awsome! so before we move forward, please check if all your information is correct. <br> if it is please anwser with done, if not please awnser with no. <br> <p>Course Code: '+course+'<br>day: '+day+'<br>time slot: '+ slot+'</p>';
*/
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