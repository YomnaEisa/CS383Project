<?php
class User
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
       $this->servername="localhost";
       $this->username="root";
       $this->password="";        
       $this->dbname="programming_center";
    
      //pre-defined function 
       $conn=new mysqli($this->servername,
                        $this->username,
                        $this->password,
                        $this->dbname);

       return $conn;
       if (mysqli_connect_errno())
       {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
   }

      function check_login($id,$password)
   {
       $conncetion = $this->connect();
       $sql1="SELECT * from login_student WHERE student_id='$id' and password='$password'"; 
       $sql2="SELECT * from login_teacher WHERE teacher_id='$id' and password='$password'";
       $sql3="SELECT * from login_admin WHERE admin_id='$id' and password='$password'";
       $sql4="SELECT * from login_volunteer WHERE volunteer_id='$id' and password='$password'";

       
       $result1   = $conncetion->query($sql1);
       $result2   = $conncetion->query($sql2);
       $result3   = $conncetion->query($sql3);
       $result4  = $conncetion->query($sql4);

       $count_student = $result1->num_rows;
       $count_teacher = $result2->num_rows;
       $count_admin = $result3->num_rows;
       $count_volunteer = $result4->num_rows;



        if ($count_student == 1)
        {
          $_SESSION['role'] = "student";
          return $result1;
        }

        else if ($count_teacher == 1)
        {
          $_SESSION['role'] = "teacher";
          return $result2;
        }
          else if ($count_admin == 1)
        {
          $_SESSION['role'] = "admin";
          return $result3;
        }
           else if ($count_volunteer == 1)
        {
          $_SESSION['role'] = "volunteer";
          return $result4;
        }

        else 
        { return null;}   
   }



function add_session($week, $time, $place, $course, $teacher_id, $teacher_name)
   {

      $conncetion = $this->connect();
      $sql = "INSERT INTO sessions_table (week_number, time, place, course, teacher_id, teacher_name)
      VALUES ('$week', '$time', '$place', '$course', '$teacher_id', '$teacher_name')";

      $inserted = $conncetion->query($sql);
      return $inserted;
   }

   function sessions($choice, $name)
   {
      $conncetion = $this->connect();

      if ($choice == 1){ //all sessions
          $sql  ="SELECT * from sessions_table";
      }

       else if ($choice == 0) { //only teacher sessions
          $sql   ="SELECT * from sessions_table WHERE teacher_name='$name'";}

      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }

   function delete_session($session_id)
   {
        $conncetion = $this->connect();

   }
    
   function stu_appointment($stdid,$stdname,$course,$teacher,$date_time,$details)
   {

     $conncetion = $this->connect();
      $sql="INSERT INTO appointment (student_id,student_name,course,teacher,date_time,details)
      VALUES ('$stdid','$stdname','$course', '$teacher', '$date_time', '$details')";
      
    $inserted =  $conncetion->query($sql) ;
    return $inserted;
       
    }
       function appointments($name)
   {
      $conncetion = $this->connect();

    $sql   ="SELECT * from appointment WHERE teacher='$name'";

      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }



     function volunteer_request($name,$ID,$fromEmail,$phone,$CourseCode,$grade,$date_time)
   {
     $conncetion = $this->connect();
      $sql="INSERT INTO volunteeringrequest (name,ID,fromEmail,phone,CourseCode,grade,date_time)
      VALUES ('$name','$ID','$fromEmail', '$phone', '$CourseCode', '$grade', '$date_time')";

//////////////////////////

      $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 
 
 //getting customer data
 $name = $_SESSION['user_name'];
 $ID = $_SESSION['user_id'];
 $fromEmail = $_POST['fromEmail']; //getting volunteer's email
 $phone = $_POST['phone']; //getting volunteer's Phone number
 $CourseCode = $_POST['CourseCode']; //getting coursecode from volunteer
 $grade = $_POST['grade']; //getting grade from volunteer
 $date_time = $_POST['date_time']; //getting grade from volunteer


//email subjects
 $subject = "New Volunteer Request - Programming Center";
 $subject2 = "Confirmation: your Volunteering request - Programming Center"; // For customer confirmation
 

 //Email body that will be sent to the both admin and Volunteer
 $message = 
  "Name: " . $name . "\n"
 . "Student ID: " . $ID . "\n"
 . "Email: " .  $fromEmail. "\n"
 . "Phone Number: " . $phone . "\n"
 . "Course Code: ".$CourseCode."\n"
 . "Grade recieved in ".$CourseCode.": ". $grade. 
 "\n";

 
 //Message for volunteer confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $message . "\n\n"
 . "Regards," . "\n" . "- Programming Center Team";
 
 //message to admin
 $message3 = "New Incoming Volunteering Request \n\n".$message."\n\n"
 ."Please go to 'Workshop request page' to accept or decline this request";
 
 //Email headers
 $headers = "From: " . $fromEmail; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message3, $headers); // This email sent to admin 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 

    $inserted =  $conncetion->query($sql) ;
     return $inserted;
  
      }
     


  

    function workshop_request($teacher_name,$teacher_id,$fromEmail, $phone, $details, $title, $date_time, $place)
   {
     $conncetion = $this->connect();
      $sql="INSERT INTO workshoprequest (teacher_name,teacher_id,fromEmail, phone, details, title, date_time, place)
      VALUES ('$teacher_name','$teacher_id','$fromEmail', '$phone', '$details', '$title', '$date_time', '$place')";

//////////////////////////

      $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 
 
 //getting customer data
 $teacher_name  = $_SESSION['user_name'];
 $teacher_id  = $_SESSION['user_id'];
 $fromEmail = $_POST['fromEmail']; //getting volunteer's email
 $phone = $_POST['phone']; //getting volunteer's Phone number
 $details = $_POST['details']; //getting coursecode from volunteer
 $title = $_POST['title']; //getting grade from volunteer
 $date_time = $_POST['date_time']; //getting grade from volunteer
 $place = $_POST['place']; //getting grade from volunteer


//email subjects
 $subject = "new Workshop Request - Programming Center";
 $subject2 = "Confirmation: your Workshop request"; // For customer confirmation
 

 //Email body that will be sent to the both admin and Volunteer
 $message = 
 "teacher_id: " . $teacher_id . "\n"
 ."teacher_name: " . $teacher_name . "\n"
 . "Phone Number: " . $phone . "\n"
 . "Email: " .  $fromEmail. "\n"
 . "Details: ".$details
 . "Title: " .  $title. "\n"
 . "Date and Time: " .  $date_time. "\n"
 . "Place: " .  $place. "\n".
 "\n";

 
 //Message for volunteer confirmation
 $message2 = "Dear " . $teacher_name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $message . "\n\n"
 . "Regards," . "\n" . "- Programming Center Team";
 
 //message to admin
 $message3 = "New Incoming Workshop Request \n\n".$message."\n\n"
 ."Please go to 'Workshop request page' to accept or decline this request";
 
 //Email headers
 $headers = "From: " . $fromEmail; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message3, $headers); // This email sent to admin 
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
      $inserted =  $conncetion->query($sql) ;
     return $inserted;
    }




    //yomna's functions
    
      function workshopsessions()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from workshop";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }


   
    function delete_workshop($id)
   {
        $conncetion = $this->connect();


   }
    
      function addWorkshop($title,$detail, $presenter, $date_time, $place)
   {
      $conncetion = $this->connect();
      $sql = "INSERT INTO workshop (title, detail, presenter, date_time, place)
      VALUES ('$title', '$detail', '$presenter', '$date_time', '$place')";

      $inserted = $conncetion->query($sql);
      return $inserted;
   }
    
  function add_workshop($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($rows = $result->fetch_assoc()){   
           //$data[]=$row;
           $id  = $rows['id'];
           $title = $rows['title'];
           $details = $rows['details'];
           $teacher_name  = $rows['teacher_name'];
           $date_time   = $rows['date_time'];
           $place      = $rows['place'];
           $fromEmail      = $rows['fromEmail'];



           $sql = "INSERT INTO workshop (id, title, detail, presenter, date_time, place) VALUES 
           ('$id', '$title', '$details', '$teacher_name', '$date_time','$place');";


/////////// EMAIL PART 

     $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 

      
//email subjects
 $subject = "congratulations! You're Workshop Request has been Accepted! ";
 $subject2 = "Confirmation: Workshop request Acceptance"; // For customer confirmation
 
 //Email body that will be sent to the both admin and Volunteer
 $message = "congratulations " . $teacher_name . "! \n"
 . "Your ".$title." Workshop has been accepted by the Programming Center! How exciting is that!\n
 Thank you for being a part of our community, we look forward to seeing you! \n - Programming Center Team";

 
 

 //message to admin

  $message2 = "You have accepted this Workshop"."\n\n".
  "Name: " . $teacher_name . "\n"
 . "Title: " .  $title. "\n"
 . "Details: ". $details. "\n"
 . "Title: " .  $title. "\n"
 . "Date and Time: " .  $date_time. "\n"
 . "Place: " .  $place. "\n".
 "\n";


 //Email headers
 $headers = "From: " . $fromEmail; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject2, $message2, $headers); // This email sent to admin 
  $result2 = mail($fromEmail, $subject, $message, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }


      }
       // return $data;
      }   
     // $sqll = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";
   

      $inserted = $conncetion->query($sql);
    //  $deleted = $conncetion->query($sqll);
      return $inserted;
      return $deleted;
   }


function deleteWorkshopReq($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($rows = $result->fetch_assoc()){   
           //$data[]=$row;
           $id = $rows['id'];
           $teacher_name = $rows['teacher_name'];
           $teacher_id = $rows['teacher_id'];
           $fromEmail = $rows['fromEmail'];
           $phone      = $rows['phone'];
           $details      = $rows['details'];
           $title       = $rows['title'];
           $date_time      = $rows['date_time'];
           $place      = $rows['place'];

        $sqll = "DELETE FROM workshoprequest WHERE ID =  '" . $rows["id"] . "'";

    }

  }

      //$inserted = $conncetion->query($sql);
      $deleted = $conncetion->query($sqll);
    //  return $inserted;
      return $deleted;
  }




function delete_workshop_req($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($rows = $result->fetch_assoc()){   
           //$data[]=$row;
           $id = $rows['id'];
           $teacher_name = $rows['teacher_name'];
           $teacher_id = $rows['teacher_id'];
           $fromEmail = $rows['fromEmail'];
           $phone      = $rows['phone'];
           $details      = $rows['details'];
           $title       = $rows['title'];
           $date_time      = $rows['date_time'];
           $place      = $rows['place'];

        $sql = "DELETE FROM workshoprequest WHERE id =  '" . $rows["id"] . "'";




$mailto = "3910012@stu.rcyci.edu.sa";  //admin email 

      
//email subjects
 $subject = "Regarding Your Workshop Request - Programming Center ";
 $subject2 = "Confirmation: Workshop request Rejection"; // For customer confirmation
 
 //Email body that will be sent to the both admin and Volunteer
 $message = "Dear " . $teacher_name . ",\n"
 . "We appreciate that you took the time to apply to host a ".$title." workshop with YUC's programming center. After reviewing your submitted request, we have decided that we will not proceed with hosting this workshop. \n\n

 We appreciate that your interest. thank you for applying. We wish you all the best.

\n\n\n\n
Regards, Programming Center Team";

 
 

 //message to admin

  $message2 = "You have rejected this Workshop"."\n\n".
  "Teacher Name: " . $teacher_name . "\n"
 . "Teacher ID: " . $teacher_id . "\n"
 . "Phone Number: " . $phone . "\n"
 . "Title: " .  $title. "\n"
 . "Details: ".$details."\n"
 . "Date and Time: " .  $date_time. "\n\n";


 //Email headers
 $headers = "From: " . $fromEmail; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject2, $message2, $headers); // This email sent to admin 
  $result2 = mail($fromEmail, $subject, $message, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }




      }
       // return $data;
      }   
     // $sqll = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";
   

      //$inserted = $conncetion->query($sql);
      $deleted = $conncetion->query($sql);
    //  return $inserted;
      return $deleted;
   }
   



      function requests()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from volunteeringrequest";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }
      function workshoprequests()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from workshoprequest";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }
      function workshops()
   {
      $conncetion = $this->connect();
          $sql  ="SELECT * from workshop";
 
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
          $data[]=$row;
      }
        return $data;
      }   
   }
  
   function add_volunteer($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
           $name = $row['name'];
           $ID =  $row['ID'];
           $Email      = $row['fromEmail'];
           $phone     = $row['phone'];
           $CourseCode       = $row['CourseCode'];
           $grade      = $row['grade'];

           $sql = "INSERT INTO volunteer (name, ID, fromEmail, phone, CourseCode, grade) VALUES ('$name', '$ID', '$Email',' $phone', '$CourseCode', '$grade');";
  

  $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 

      
//email subjects
 $subject = "congratulations! You're now a Programming Center volunteer ";
 $subject2 = "Confirmation: volunteer request Acceptance"; // For customer confirmation
 
 //Email body that will be sent to the both admin and Volunteer
 $message = "congratulations " . $name . "! \n"
 . "You are now offically a YUC Programming Center volunteer! How exciting is that!\n
 You can now log into the Programming Center Website with your username and password to view your Volunteering page! \n
 Thank you for being a part of our community, we look forward to seeing you! \n - Programming Center Team";

 
 

 //message to admin
 $message2 = "You have accepted this user as a volunteer"."\n\n".
  "Name: " . $name . "\n"
 . "Student ID: " . $ID . "\n"
 . "Email: " .  $Email. "\n"
 . "Phone Number: " . $phone . "\n"
 . "Grade recieved in ".$CourseCode.": ". $grade. 
 "\n";


 //Email headers
 $headers = "From: " . $Email; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject2, $message2, $headers); // This email sent to admin 
  $result2 = mail($Email, $subject, $message, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }


      }
       // return $data;
      }   
     // $sqll = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";
   

      $inserted = $conncetion->query($sql);
    //  $deleted = $conncetion->query($sqll);
      return $inserted;
      return $deleted;
   }


function delete_volunteer_req($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
           $name = $row['name'];
           $ID = $row['ID'];
           $Email      = $row['fromEmail'];
           $phone     = $row['phone'];
           $CourseCode       = $row['CourseCode'];
           $grade      = $row['grade'];

        $sql = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";

 
 $mailto = "3910012@stu.rcyci.edu.sa";  //admin email 

      
//email subjects
 $subject = "Regarding Your Volunteering Request - Programming Center ";
 $subject2 = "Confirmation: Volunteer request Rejection"; // For customer confirmation
 
 //Email body that will be sent to the both admin and Volunteer
 $message = "Dear " . $name . ",\n"
 . "We appreciate that you took the time to apply to volunteer at YUC's programming center. After reviewing your submitted request, unfortunately you were not selected to volunteer.\n

  We appreciate that your interest. thank you for applying, We wish you all the best.

\n\n\n\n
Regards, Programming Center Team";

 
 

 //message to admin

 $message2 ="You have Rejected this volunteer\n 
 Name: " . $name . "\n"
 . "Student ID: " . $ID . "\n"
 . "Email: " .  $Email. "\n"
 . "Phone Number: " . $phone . "\n"
 . "Course Code: " .  $CourseCode. "\n"
 . "Grade recieved in ".$CourseCode.": ". $grade. 
 "\n";

 //Email headers
 $headers = "From: " . $Email; // volunteer email, admin will receive
 $headers2 = "From: " . $mailto; // This will be received by the volunteer
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject2, $message2, $headers); // This email sent to admin 
  $result2 = mail($Email, $subject, $message, $headers2); //This confirmation email to volunteer
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }




      }
       // return $data;
      }   
     // $sqll = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";
   

      //$inserted = $conncetion->query($sql);
      $deleted = $conncetion->query($sql);
    //  return $inserted;
      return $deleted;
   }
    


    function delete_volunteer($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){   
           $name = $row['name'];
           $ID = $row['ID'];
           $Email      = $row['fromEmail'];
           $phone     = $row['phone'];
           $CourseCode       = $row['CourseCode'];
           $grade      = $row['grade'];

        $sql = "DELETE FROM volunteeringrequest WHERE ID =  '" . $row["ID"] . "'";
      }

      }   
   
      $deleted = $conncetion->query($sql);
      return $deleted;
   }

   

    function add_login($sql)
   {

      $conncetion = $this->connect();
      $result    = $conncetion->query($sql);            
      $count_t   = $result->num_rows;             
      if ($count_t > 0)
      {
          While ($row = $result->fetch_assoc()){ 

           $volunteer_id = $row['student_id'];  
           $volunteer_name = $row['student_name'];
           $password      = $row['password'];

           $sql = "INSERT INTO login_volunteer (volunteer_name, volunteer_id, password) VALUES ('$volunteer_name', '$volunteer_id', '$password');";

      }
      }   
   

      $inserted = $conncetion->query($sql);

      return $inserted;
      
   }

    
   
 }
?>