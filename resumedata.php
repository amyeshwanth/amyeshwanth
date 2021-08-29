<?php
   include("config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      $sadd = mysqli_real_escape_string($db,$_POST['sadd']); 
	  $sslc = mysqli_real_escape_string($db,$_POST['sslc']); 
	  $puc = mysqli_real_escape_string($db,$_POST['puc']); 
      $ug = mysqli_real_escape_string($db,$_POST['ug']); 
      $pg = mysqli_real_escape_string($db,$_POST['pg']); 
      $cert = mysqli_real_escape_string($db,$_POST['cert']); 
      
	  $sql = "Insert into resume values ('$uname','$sadd','$sslc','$puc','$ug','$pg','$cert','".$_SESSION['uname']."')";
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Resume Saved Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='addresume.php';</script>";
     
   }
?>