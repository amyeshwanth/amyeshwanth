<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from jobs where Jid='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Job Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='companyjobs.php';</script>";
	

   //}
?>