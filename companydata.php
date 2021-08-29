C<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $cid = mysqli_real_escape_string($db,$_POST['cid']);
      $cname = mysqli_real_escape_string($db,$_POST['cname']); 
	  $ctype = mysqli_real_escape_string($db,$_POST['ctype']); 
	  $cemail = mysqli_real_escape_string($db,$_POST['cemail']); 
      $cpass = mysqli_real_escape_string($db,$_POST['cpass']); 
      $cph = mysqli_real_escape_string($db,$_POST['cph']); 
      $cdet = mysqli_real_escape_string($db,$_POST['cdet']); 
	  $cadd = mysqli_real_escape_string($db,$_POST['cadd']); 
      
	  $sql = "Insert into company values ('$cid','$cname','$ctype','$cemail','$cpass','$cph','$cdet','$cadd' )";
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Data Saved Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='register.html';</script>";
     
   }
?>