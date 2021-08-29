<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from apply where Jid='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('My Job Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='appliedjobs.php';</script>";
	

   //}
?>