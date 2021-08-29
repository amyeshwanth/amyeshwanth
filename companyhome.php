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
								<a class="nav-link" href="companyhome.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="uploadjobs.php">Post Jobs</a>
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
<body>

<?php
   session_start();
   if($_SESSION['uname']=="" || $_SESSION['uname']==null){
	echo "<script> window.location = 'login.html'; </script>" ; 
   }
?>


<!-- banner -->
<div style="height:500px;background-color:#F2F3F4;padding-top:100px;">
		<div style="width:30%;float:left;margin:0;text-align:center;margin-right:100px;margin-left:100px;">
		<a href="allfur.php" style="font-size:25px;">
			<img src="./assets/images/jobs.jpeg" style="width:100%;height:200px;border-radius:25px;"/>
			Post Jobs</a>
        </div>
		<div style="width:30%;float:left;margin:0;text-align:center;margin-left:100px;">
		<a href="mypurchases.php" style="font-size:25px;">
			<img src="./assets/images/selects.jpeg" style="width:100%;height:200px;border-radius:25px;"/>
			Select Candidates</a>
        </div>
		
	


</div>

	

</body>

</html>