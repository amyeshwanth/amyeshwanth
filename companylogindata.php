<?php
   include("config.php");
   session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$uname=$_POST["uname"];
	$pswd=$_POST["pswd"];
	
	if($uname=="admin" && $pswd=="admin")
	{
			$_SESSION['uname']=$uname;
		echo "<script>		window.location='adminhome.html';		</script>";
	}
	else
	{
		$query="select * from company where Cid='$uname' and Cpass='$pswd'";
		
		$result=mysqli_query($db,$query);
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count>0)
		{
			$_SESSION['uname']=$uname;
			echo $_SESSION['uname'];
			echo "<script>window.location='companyhome.php';</script>";
		}
		else
		{
			echo "<script>
			alert('Please create an account');
		window.location='login.html';
		</script>";
		}
	}
	
	
	
}

?>