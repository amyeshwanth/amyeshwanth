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
								<a class="nav-link" href="userhome.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="addresume.php">Upload Resume</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="deleteresume.php">Delete Resume</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="userviewcomapny.php">View Company</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="userjobs.php">View Jobs</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="appliedjobs.php">Applied Jobs</a>
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
<div style="height:700px;background-color:#F2F3F4;">
<div style="width:40%;float:left;margin:0;background-color:#F2F3F4;">
			<img src="./assets/images/companys.png" style="width:70%;height:300px;border-radius:65px;"/>
        </div>

        <div style="width:50%;float:left;padding-center:1px;height:500px;background-color:#F2F3F4;">
            	<form method="post" action="companydata.php">
				<div class="container" style="width:90%;float:center;height:550px;margin-top:25px;background-color:white;border:3px solid black;border-radius:15px;margin-left:-80px;">
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
                            <span style="font-weight:bolder;font-size:25px;color:black;">View Company </span></td>
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
					<?php include('config.php');
 $id = mysqli_real_escape_string($db,$_GET['id']);
$result = mysqli_query($db,"SELECT * FROM company where Cid='$id'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
?>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
						
                            <span style="font-size:20px;font-weight:bold;">Company ID: </span></td>
                        <td>&nbsp;
                        <input type="text" placeholder="Enter ID" id="cid" name="cid" value= "<?php echo $row['Cid']; ?>" style="border-style:solid;border-radius: 15px;"  />
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
                            <span style="font-size:20px;font-weight:bold;">Company Name: </span></td>
                        <td>&nbsp;
                        <input type="text" placeholder="Enter name" id="cname" name="cname" value= "<?php echo $row['Cname']; ?>" style="border-style:solid;border-radius: 15px;"  onchange="valuname()" />
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
                            <span style="font-size:20px;font-weight:bold;">Company Type: </span></td>
                        <td>
                        &nbsp;
						
                        <select id="ctype" name="ctype"  style="border-style:solid;border-radius: 15px;">
						<option value= "<?php echo $row['CType']; ?>"><?php echo $row['CType']; ?></option>
							<option value="Medical">Medical</option>
							<option value="Banking">Banking</option>
							<option value="IT">IT</option>
							<option value="Manufacturing">Manufacturing</option>
							
							
    </select>
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
                            <span style="font-size:20px;font-weight:bold;">Email Id: </span></td>
                        <td>
                        &nbsp;
						
                        <input type="text" placeholder="Email Id" id="cemail" name="cemail" value= "<?php echo $row['Cemail']; ?>" style="border-style:solid;border-radius: 15px;" onchange="valemail()"/>
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
                            <span style="font-size:20px;font-weight:bold;">Phone# : </span></td>
                        <td>
                        &nbsp;
						
                        <input type="text" placeholder="Phone #" id="cph" name="cph" value= "<?php echo $row['Cphone']; ?>" style="border-style:solid;border-radius: 15px;"  onchange="valphone()"/>
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
                            <span style="font-size:20px;font-weight:bold;">Company Details: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Details" id="cdet" name="cdet" "style="border-style:solid;border-radius: 15px;"  > <?php echo $row['Cdetails']; ?> </textarea>
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
                            <span style="font-size:20px;font-weight:bold;">Company Address: </span></td>
                        <td>&nbsp;
                        <textarea placeholder="Company Address" id="cadd" name="cadd"  style="border-style:solid;border-radius: 15px;"  ><?php echo $row['Caddress']; ?> </textarea>
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
                            </td>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="userviewcomapny.php"style="background-color:#d5ec57;border-radius:5px;width:150px;height:35px;"> Close</a> </td>
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
   
 </section>
 
</body>


<script>
		function myFunction()
		{
		debugger;
		document.getElementById('uid').value="101"+Math.floor((Math.random() * 1234) + 1);
		}
		
		
		function valuname()
		{
			var uname = document.getElementById('cname').value;
			var unamePattern = /^[A-Za-z ]+$/;
			if (!unamePattern.test(uname)) {
            alert('Please enter valid username.');
            document.getElementById('uname').focus();
        }
		}
		
		function valemail()
		{
			  var email = document.getElementById('cemail').value;
        var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailReg.test(email) || email == '') {
            alert('Please enter a valid email id.');
           
            document.getElementById('email').focus();
        }
		}
		
		function valphone()
		{
			  var phone = document.getElementById('cph').value;
        var intRegex = /^(7|8|9)[0-9]{9}$/;
        if (!intRegex.test(phone)) {
            alert('Please enter a valid phone number.');
            document.getElementById('ph').focus();
        }
		}

</script>
</html>