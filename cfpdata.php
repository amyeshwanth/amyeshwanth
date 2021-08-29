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
$result = mysqli_query($db,"SELECT * FROM company where Cid='$uid'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
try {
	
	$email= $row['Cemail'];
	$id= $row['Cid'];
	//echo $email;
	$name=$row['Cname'];
	$pass =$row['Cpass'];
	//$body= $row['Body'];
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'placementcell105@gmail.com'; // YOUR gmail email
    $mail->Password = 'cell@111'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('placementcell105@gmail.com', 'Placement Management System');
    $mail->addAddress($email,$name);
    $mail->addReplyTo('placementcell105@gmail.com', 'Placement Management System'); // to set the reply to

    // Setting the email contentnce
    $mail->IsHTML(true);
    $mail->Subject = "Password Recovery of '$id'";
    $mail->Body = nl2br("Kindly Find your password below \n Studnet Id: '$id' \n Name: '$name' \n Password :'$pass'");
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
   echo "<script type='text/javascript'>alert('Password sent your mail!!');</script>";
	echo "<script type='text/javascript'>window.location='companylogin.php';</script>";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>