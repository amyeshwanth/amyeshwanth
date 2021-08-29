<?php
   include("config.php");
   session_start();
   
      //$id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from resume where uid='".$_SESSION['uname']."'";	  
	
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Student Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='addresume.php';</script>";
	

   //}
?>