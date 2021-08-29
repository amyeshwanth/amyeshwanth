<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      $pswd = mysqli_real_escape_string($db,$_POST['pswd']); 
	  $gender = mysqli_real_escape_string($db,$_POST['gender']); 
	  $dept = mysqli_real_escape_string($db,$_POST['dept']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $ph = mysqli_real_escape_string($db,$_POST['ph']); 
      $uid = mysqli_real_escape_string($db,$_POST['uid']); 
      
	  $sql = "Insert into student values ('$email','$pswd','$gender','$dept','$ph','$uid','$uname','Pending' )";
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Data Saved Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='register.html';</script>";
     
   }
?>