<!DOCTYPE html>
<?php
include 'connection.php';
if(!(isset($_SESSION['user_name'])))
{
header('location:login.php');
}

$sql="select * from album order by albumid desc LIMIT 5";
$result=mysqli_query($con,$sql);

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Hash Tag Production</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>
<body>

	<!-- Header -->
	<header id="header" class="transparent-navbar">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img class="logo-img" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="gallery.php">Event Gallery</a></li>
					<li><a href="#galery">Gallery</a></li>
					<li><a href="#speakers">Speakers</a></li>
					<li><a href="#sponsors">Clients</a></li>
					<li><a href="#contact">Contact</a></li>
					
					<li><a href="#"id="logout" onclick="logout()">LogOut</a></li>
					<li>
					<?php $mid1=$_SESSION['name'];?>
					<p style="font face:Times New Roman; size=4; color:white; margin-left:75%; margin-top:30px"><i>hai...!!!<?php echo $mid1;?><i></p> 
					</li>
				</ul>
			</nav>
			<!-- /Navigation -->
		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Home -->
	<div id="home">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/background01.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
							<h1>Hashtag Productions</h1>
							<h4 class="lead"><i>“To provide & deliver event solutions & services with the highest standard of professionalism, creativity upholding at all times quality, integrity and innovation.”</i></h4>
</h4>
							<a href="index.php" class="main-btn">Come Join Us</a>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
	<!-- /Home -->

	<!-- About -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>About</span> <span style="color: #dd0a37;">Event</span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about content -->
					<div class="about-content">
						<p><b>Special Events:</b> <i>• Live Shows • Concerts & Fashion Shows • Entertainment Extravaganzas • Awards Functions • High Profile Parties • Wedding Management • Club Nights • Theme Parties  </i>
</div>
					<!-- /about content -->

					<!-- Numbers -->
					<div id="numbers">
						<!-- row -->
						<div class="row">
							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="900" data-speed="1500">0</span>+</h3>
									<p>Hours</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="750" data-speed="1500">0</span>+</h3>
									<p>Venues</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="5" data-speed="1500">0</span>+</h3>
									<p>Country</p>
								</div>
							</div>
							<!-- /number -->

							<!-- number -->
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="number">
									<h3><span class="counter" data-from="0" data-to="20" data-speed="1500">0</span>+</h3>
									<p>Speakers</p>
								</div>
							</div>
							<!-- /number -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Numbers -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /About -->

	<!-- Galery -->
	<div id="galery">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- galery owl -->
				
				<div id="galery-owl" class="owl-carousel owl-theme">
					<!-- galery item -->
					<?php
					
				$i=0;
					while($row=mysqli_fetch_array($result))
					{
					?>
					<div class="galery-item">
					
						<img src="<?php echo $row['album']?>"alt="">
						
						
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<!--<div class="galery-item">
						<img src="./img/galery02.jpg" alt="">
					</div>
					<!-- /galery item -->

					<!-- galery item -->
					<!--<div class="galery-item">
						<img src="./img/galery03.jpg" alt="">
					</div>
					<!-- /galery item -->
					<?php
					}
					?>
				</div>
				<!-- /galery owl -->
				
			</div>
			
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Galery -->

	<!-- Video CTA -->
	<div id="video-cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/background02.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<a class="video-play" href="#">
							<i class="fa fa-play"></i>
						</a>
						<h2>Watch this video</h2>
						
				
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<video width="300" height="200" autoplay="autoplay">
					<source src="img/b1" type="video/mp4" />
					</video>
					</div>
					<section id="banner" data-video="img/b1">
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Video CTA -->

	<!-- Event Schedule -->
	<!-- /Event Schedule -->

	<!-- Speakers -->
	<div id="speakers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Speakers</span></h3>
				</div>
				<!-- section title -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/speaker01.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>John Doe</h2>
								<span>Manager, CEO</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/speaker02.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>John Doe</h2>
								<span>Manager, CEO</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker -->
				<div class="col-md-4 col-sm-6">
					<div class="speaker" data-toggle="modal" data-target="#speaker-modal-1">
						<div class="speaker-img">
							<img src="./img/speaker03.jpg" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa fa-linkedin"></i></a>
							</div>
							<div class="speaker-content">
								<h2>John Doe</h2>
								<span>Manager, CEO</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker -->

				<!-- speaker modal -->
				<div id="speaker-modal-1" class="speaker-modal modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<button type="button" class="speaker-modal-close" data-dismiss="modal"></button>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-5">
										<div class="speaker-modal-img">
											<img src="./img/speaker-info.jpg" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="speaker-modal-content">
											<h2 class="speaker-name">John Doe</h2>
											<span class="speaker-job">- Manager, CEO</span>

											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

											<div class="speaker-website">
												<h4>Website</h4>
												<a href="#">www.johndoe.com</a>
											</div>

											<div class="speaker-social">
												<h4>Social Profile</h4>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-instagram"></i></a>
												<a href="#"><i class="fa fa fa-linkedin"></i></a>
											</div>

											<div class="speaker-events">
												<h4>Sessions</h4>
												<div class="speaker-event">
													<span><strong>Day 1 -</strong> February 20, 2018 8 : 00 AM - 11 : 00 AM</span>
													<p>His id altera fabellas facilisis. Has eros assueverit cu</p>
												</div>

												<div class="speaker-event">
													<span><strong>Day 2 -</strong> February 20, 2018 8 : 00 AM - 11 : 00 AM</span>
													<p>At mucius deserunt delicatissimi eam, labitur detraxit ut sit</p>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /speaker modal -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Speakers -->

	<!-- Sponsors -->
	<div id="sponsors" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Clients</span></h3>
				</div>
				<!-- /section title -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="#" class="sponsor">
						<img src="./img/sponsor.png" alt="">
					</a>
				</div>
				<!-- /sponsor -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Sponsors -->

	<!-- CTA -->
	<div id="cta" class="section">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(./img/background03.jpg)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- container -->
		<div class="container">
			<!-- container -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-8 col-md-offset-2">
					<div class="cta-content text-center">
						<h2>Get Ticket Now!</h2>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="main-btn">Buy Ticket</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CTA -->

	<!-- Contact -->
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contact</span> <span style="color: #dd0a37;">Info</span></h3>
				</div>
				<!-- /section title -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Address</h3>
						<p>HashTag Productions 60/49E,2ND FLOOR, J.C CHAMBER</p>
						<p>PANAMBILLY NAGAR, KOCHI 682036</p>
						
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Phone</h3>
						<p>+918590814332</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<h3>GSTIN</h3>
						<p>32AAJFH5201K1ZN</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="#">event@support.com</a>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<!-- Map -->
		<div id="map"></div>
		<!-- /Map -->
	</div>
	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.php">
							<img class="logo-img" src="./img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- /footer logo -->

				<!-- contact social -->
				<div class="col-md-4 col-md-push-4">
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa fa-linkedin"></i></a>
					</div>
				</div>
				<!-- /contact social -->

				<!-- copyright -->
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script><br> All rights reserved to Deep Blue Technologies <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<!-- /copyright -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
	<script>
function logout(){
        var reallyLogout=confirm("Do you really want to log out?");
        if(reallyLogout){
            location.href="logout.php";
        }
}


</script>
</body>

</html>
