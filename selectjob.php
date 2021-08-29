<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	 
	  $sql = "update apply set Status='Selected' where Userid='$id'";
	  echo $sql;
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Student Selected !!');</script>";
	echo "<script type='text/javascript'>window.location='companyappliedjobs.php';</script>";
	

   //}
?>