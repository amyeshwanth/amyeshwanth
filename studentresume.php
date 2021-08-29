<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Placement</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light py-md-2 py-0 px-0">
					<a class="navbar-brand" href="index.html"><img src="assets/images/logo-icon.png" alt="" />Placement Cell</a>
					<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="companyhome.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="uploadjobs.php">Upload Jobs</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="companyjobs.php">View Jobs</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="companyappliedjobs.php">Select Candidates</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="selected.php">Selected Candidates</a>
							</li>
							
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- //header -->
<!--  Main banner section -->
 <section class="w3l-main-banner">
   <div class="companies20-content">
     <div class="companies-wrapper">
       <div class="container">
	   <div class="banner-item">
           
               <!-- banner -->
<div style="height:900px;background-color:#F2F3F4;">
<div style="width:40%;float:left;margin:0;background-color:#F2F3F4;">
			<img src="./assets/images/resume.jpeg" style="width:70%;height:300px;border-radius:45px;"/>
        </div>
<?php
   session_start();
  
	?>
        <div style="width:50%;float:left;padding-center:1px;height:500px;background-color:#F2F3F4;">
            	<form method="post" action="resumedata.php">
				<table class="style1">
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:red;">View Resume !!!</span></td>
                        <td>
						
                            &nbsp;</td>
                    </tr>
					                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-color=blue;font-size:18px;color:black;">Personal Details</span></td>
                        <td>
						
                            &nbsp;</td>
                    </tr>
					
					<?php include('config.php');
 $id = mysqli_real_escape_string($db,$_GET['id']);
$result = mysqli_query($db,"SELECT * FROM resume where uid='$id'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
?>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Student Name: </span></td>
                        <td>&nbsp;
                        <input type="text" placeholder="Enter name" id="uname" name="uname"  value= "<?php echo $row['uname']; ?>" style="border-style:solid;border-radius: 15px;" onchange="valuname()"/>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                   
					 <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Student Address: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="sadd" name="sadd"  style="border-style:solid;border-radius: 15px;"  > <?php echo $row['sadd']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					</tr>
					                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-color=blue;font-size:18px;color:black;">Education Details</span></td>
                        <td>
						
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">SSLC With Details: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="sslc" name="sslc"  value= "" style="border-style:solid;border-radius: 15px;"  ><?php echo $row['sslc']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">PUC With Details: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="puc" name="puc"  value= "<?php echo $row['puc']; ?>"style="border-style:solid;border-radius: 15px;"  ><?php echo $row['puc']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">UG With Details: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="ug" name="ug"  value= "" style="border-style:solid;border-radius: 15px;"  ><?php echo $row['ug']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">PG With Details:: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="pg" name="pg"  value= "" style="border-style:solid;border-radius: 15px;"  ><?php echo $row['pg']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					                 <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-color=blue;font-size:18px;color:black;">Certification course Details</span></td>
                        <td>
						
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Certificate Details: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="cert" name="cert"  value= "" style="border-style:solid;border-radius: 15px;"  ><?php echo $row['cert']; ?></textarea>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                   
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					<?php }?>
                    
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                           
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <a href="companyappliedjobs.php">Close</a></td>
                        </td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                </table>
                </form>
            </div>
		


</div>
   
 </section
 
</body>


<script>
		function myFunction()
		{
		debugger;
		document.getElementById('uid').value="Stu"+Math.floor((Math.random() * 1234) + 1);
		}
		
		
		function valuname()
		{
			var uname = document.getElementById('uname').value;
			var unamePattern = /^[A-Za-z ]+$/;
			if (!unamePattern.test(uname)) {
            alert('Please enter valid username.');
            document.getElementById('uname').focus();
        }
		}
		
		function valemail()
		{
			  var email = document.getElementById('email').value;
        var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailReg.test(email) || email == '') {
            alert('Please enter a valid email id.');
           
            document.getElementById('email').focus();
        }
		}
		
		function valphone()
		{
			  var phone = document.getElementById('ph').value;
        var intRegex = /^(7|8|9)[0-9]{9}$/;
        if (!intRegex.test(phone)) {
            alert('Please enter a valid phone number.');
            document.getElementById('ph').focus();
        }
		}

</script>
