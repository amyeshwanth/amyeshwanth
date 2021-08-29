<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from student where Userid='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Student Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='deleteuser.php';</script>";
	

   //}
?>