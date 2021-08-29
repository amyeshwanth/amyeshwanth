<?php
   include("config.php");
   session_start();
   $result1 = mysqli_query($db,"SELECT * FROM company where Cid='".$_SESSION['uname']."'")or die(mysqli_error());
   while($row = mysqli_fetch_array( $result1 ))
{
	$cid=$row['Cid'];
	$cname=$row['Cname'];
	$ctype=$row['CType'];
	$cemail=$row['Cemail'];
	$cph=$row['Cphone'];
	
}
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $jid = mysqli_real_escape_string($db,$_POST['jid']);
      $jname = mysqli_real_escape_string($db,$_POST['jname']); 
	  $jdisc = mysqli_real_escape_string($db,$_POST['jdisc']); 
	  $jpack = mysqli_real_escape_string($db,$_POST['jpack']); 
      $jloc = mysqli_real_escape_string($db,$_POST['jloc']); 
      
      
	  $sql = "Insert into jobs values ('$cid','$cname','$ctype','$cemail','$cph','$jid','$jname','$jdisc','$jpack','$jloc' )";
	  echo $sql;
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Data Saved Successfully !!');</script>";
   echo "<script type='text/javascript'>window.location='uploadjobs.php';</script>";
     
   }
?>