<?php 
include('userhead.php');
?>
<?php
   session_start();
   
?>

<?php
   
   if($_SESSION['uname']=="" || $_SESSION['uname']==null){
	echo "<script> window.location = 'login.html'; </script>" ; 
   }
?>


<!-- banner -->
<div style="height:500px;background-color:#F2F3F4;padding-top:100px;">
		<div style="width:30%;float:left;margin:0;text-align:center;margin-right:100px;margin-left:100px;">
		<a href="allfur.php" style="font-size:25px;">
			<img src="./assets/images/resume.jpeg" style="width:90%;height:200px;border-radius:45px;margin-left:15%;"/>
			Upload Resumes</a>
        </div>
		<div style="width:30%;float:left;margin:0;text-align:center;margin-left:100px;">
		<a href="mypurchases.php" style="font-size:25px;">
			<img src="./assets/images/company5.jpeg" style="width:90%;height:200px;border-radius:45px;margin-left:15%;"/>
			View Company</a>
        </div>
		
	


</div>

	

</body>

</html>