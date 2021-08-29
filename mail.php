<?php

include('smtp/PHPMailerAutoload.php');
$html='Msg';
echo smtp_mailer('placementcell105@gmail.com','subject',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = 'ssl://smtp.gmail.com';
	$mail->Port = 465; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "placementcell105@gmail.com";
	$mail->Password = "cell@111";
	$mail->SetFrom("placementcell105@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}