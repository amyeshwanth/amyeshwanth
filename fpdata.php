<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
include('config.php');
 $uid = mysqli_real_escape_string($db,$_POST['uid']);
$result = mysqli_query($db,"SELECT * FROM student where Userid='$uid'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
try {
	
	$email= $row['Email'];
	$id= $row['Userid'];
	//echo $email;
	$name=$row['Username'];
	$pass =$row['Password'];
	//$body= $row['Body'];
    // Server settings
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
    $mail->Subject = "Password Recovery of '$id'";
    $mail->Body = nl2br("Kindly Find your password below \n Studnet Id: '$id' \n Name: '$name' \n Password :'$pass'");
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
   echo "<script type='text/javascript'>alert('Password sent your mail!!');</script>";
	echo "<script type='text/javascript'>window.location='login.html';</script>";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>