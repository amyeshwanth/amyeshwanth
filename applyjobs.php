<?php
   include("config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $cid = mysqli_real_escape_string($db,$_POST['cid']);
      $cname = mysqli_real_escape_string($db,$_POST['cname']); 
	  $jid = mysqli_real_escape_string($db,$_POST['jid']); 
	  $jname = mysqli_real_escape_string($db,$_POST['jname']); 
      $jdisc = mysqli_real_escape_string($db,$_POST['jdisc']); 
      $jpack = mysqli_real_escape_string($db,$_POST['jpack']); 
      $jloc = mysqli_real_escape_string($db,$_POST['jloc']); 
      
	  $sql = "Insert into apply values ('".$_SESSION['uname']."','$cid','$cname','$jid','$jname','$jdisc','$jpack','$jloc','Pending')";
	  echo $sql;
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert(' Applied Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='userjobs.php';</script>";
     
   }
?>