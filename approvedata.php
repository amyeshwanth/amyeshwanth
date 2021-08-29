<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['uid']);
	  
      $result = mysqli_query($db,"SELECT * FROM student where Userid='$id'")or die(mysqli_error());
      while($row = mysqli_fetch_array( $result ))
      {
     
         
         $email= $row['Email'];
         $pass= $row['Password'];
         $name= $row['Username'];
         echo $email;
	 
	  $sql = "update student set Status='Approved' where Userid='$id' and Status= 'Pending'";
	  
      $result = mysqli_query($db,$sql);
      try {
      $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
  
      $mail->Username = 'onlinenoticeboard24@gmail.com'; // YOUR gmail email
      $mail->Password = 'Noticeboard24'; // YOUR gmail password
  
      // Sender and recipient settings
      $mail->setFrom('onlinenoticeboard24@gmail.com', 'Placement Management System');
      $mail->addAddress($email,$name);
      $mail->addReplyTo('onlinenoticeboard24@gmail.com', 'Placement Management System'); // to set the reply to
  
      // Setting the email contentnce
      $mail->IsHTML(true);
      $mail->Subject = "Approved by Admin";
      $mail->Body = nl2br("Approved Sucessfully \n Staff Id: '$id' \n Name: '$name' \n Password :'$pass'");
      //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
  
      $mail->send();
      echo "<script type='text/javascript'>alert('Student Approved Successfully !!');</script>";
      echo "<script type='text/javascript'>window.location='approveuser.php';</script>";
      }
   catch (Exception $e) {
      echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
  }
	
	
	

   }
?>