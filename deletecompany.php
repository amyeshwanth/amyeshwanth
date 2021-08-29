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
  <body onload="myFunction()">
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
								<a class="nav-link" href="adminhome.html">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="approveuser.php">Approve User</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="deleteuser.php">Manage User</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="addcompany.php">Add company</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="deletecompany.php">Manage Company</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="adminselect.php">View Candidates</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="logout.php">Admin Logout</a>
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
	   <div style="height:550px;background-color:#F2F3F4;padding-top:0px;">
		
		<!--<div style="width:100%;float:left;padding-left:15px;padding-top:10px;min-height:550px;background-color:#F2F3F4>-->
		<div style="width:110%;margin-left:-5%;padding-left:15px;padding-top:10px;min-height:550px;background-color:#F2F3F4;">
         
            <div style="width:50%;float:left;padding-left:1px;">
            	<form method="post" action="savedata.php">
				<h1 style="font-weight:bolder;font-size:25px;color:black;text-align:left;">  Manage the Company </h1> <br><br>
				<?php

include('config.php');

$result = mysqli_query($db,"SELECT * FROM company")or die(mysqli_error());

echo "<table border='1' cellpadding='10' width='1200px'>";
echo "<tr style='text-decoration:underline;text-align:center;'>
<th><font color='#4c4c4c'>company ID</font></th>
<th><font color='#4c4c4c'>company Name</font></th>
<th><font color='#4c4c4c'>company Type</font></th>
<th><font color='#4c4c4c'>company Email</font></th>
<th><font color='#4c4c4c'>company Phone</font></th>
<th><font color='#4c4c4c'>company Detalis</font></th>
<th><font color='#4c4c4c'>company Address</font></th>
<th><font color='#4c4c4c'>Delete</font></th>
</tr>";

while($row = mysqli_fetch_array( $result ))
{

echo "<tr align='center'>";
echo '<td><b><font color="#663300">' . $row['Cid'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Cname'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['CType'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Cemail'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Cphone'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Cdetails'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Caddress'] . '</font></b></td>';
echo '<td><b><font color="#663300"><a href="deletecompanydata.php?id=' . $row['Cid'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
                </form>
            </div>


</div>
