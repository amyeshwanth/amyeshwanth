
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
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="register.html">Register</a>
							</li>
							<li class="nav-item @@services-active">
								<a class="nav-link" href="login.html">Login</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="contact.html">Contact</a>
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
           <div class="banner-view">
             <div class="banner-info">
               <h3 class="banner-text">
			   <div class="two-mid-button d-flex justify-content-center mt-lg-15 mt-md-5 mt-sm-14 mt-3">
							
               </h3>
               <div class="two-mid-button d-flex justify-content-center mt-lg-5 mt-md-4 mt-sm-4 mt-3">
               <a href="register.html" class="btn btn-outline-primary theme-button">Register</a>
			   <a href="login.html" class="btn btn-primary theme-button mr-3">Login</a>
			   </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
   include("config.php"); ?>



     <!-- move top -->
     <button onclick="topFunction()" id="movetop" title="Go to top">
       <span class="fa fa-angle-up" aria-hidden="true"></span>
     </button>
     <script>
       // When the user scrolls down 20px from the top of the document, show the button
       window.onscroll = function () {
         scrollFunction()
       };

       function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           document.getElementById("movetop").style.display = "block";
         } else {
           document.getElementById("movetop").style.display = "none";
         }
       }

       // When the user clicks on the button, scroll to the top of the document
       function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
       }
     </script>
     <!-- /move top -->

   </footer>
   <!-- Footer -->

   <!-- jQuery and Bootstrap JS -->
   <script src="assets/js/jquery-3.3.1.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

   <!-- Template JavaScript -->

   <!-- stats number counter-->
   <script src="assets/js/jquery.waypoints.min.js"></script>
   <script src="assets/js/jquery.countup.js"></script>
   <script>
     $('.counter').countUp();
   </script>
   <!-- //stats number counter -->


   <!-- testimonials owlcarousel -->
   <script src="assets/js/owl.carousel.js"></script>

   <!-- script for owlcarousel -->
   <script>
     $(document).ready(function () {
       $('.owl-one').owlCarousel({
         loop: true,
         margin: 0,
         nav: false,
         responsiveClass: true,
         autoplay: false,
         autoplayTimeout: 5000,
         autoplaySpeed: 1000,
         autoplayHoverPause: false,
         responsive: {
           0: {
             items: 1,
             nav: false
           },
           480: {
             items: 1,
             nav: false
           },
           667: {
             items: 1,
             nav: false
           },
           1000: {
             items: 1,
             nav: false
           }
         }
       })
     })
   </script>
   <!-- //script for owlcarousel -->
   <!-- //testimonials owlcarousel -->

   <!-- script for courses -->
   <script>
     $(document).ready(function () {
       $('.owl-two').owlCarousel({
         loop: true,
         margin: 30,
         nav: false,
         responsiveClass: true,
         autoplay: false,
         autoplayTimeout: 5000,
         autoplaySpeed: 1000,
         autoplayHoverPause: false,
         responsive: {
           0: {
             items: 1,
             nav: false
           },
           480: {
             items: 1,
             nav: false
           },
           667: {
             items: 2,
             nav: false
           },
           1000: {
             items: 3,
             nav: false
           }
         }
       })
     })
   </script>
   <!-- //script for courses -->

   <!-- disable body scroll which navbar is in active -->
   <script>
     $(function () {
       $('.navbar-toggler').click(function () {
         $('body').toggleClass('noscroll');
       })
     });
   </script>
   <!-- disable body scroll which navbar is in active -->

   </body>

   </html>