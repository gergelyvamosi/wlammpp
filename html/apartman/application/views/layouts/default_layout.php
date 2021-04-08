<?php
	$my_base_url = '/apartman/';
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Apartman - <?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Apartman booking website" />
	<meta name="keywords" content="apartman, booking, website" />
	<meta name="author" content="Gergely Vámosi" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo $my_base_url?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo $my_base_url?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo $my_base_url?>assets/css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo $my_base_url?>assets/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo $my_base_url?>assets/css/style.css">

	<!-- Modernizr JS -->
<script src="<?php echo $my_base_url?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
<script src="<?php echo $my_base_url?>assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="top-menu">
				<div class="row">
					<div class="col-sm-10 text-right menu-1">
						<ul>
							<li><a style="font-size: 14px; padding: 5px 5px;" href="<?php echo $my_base_url?>index.php/LanguageSwitcher/switchLang/magyar">Magyar</a></li>
							<li><a style="font-size: 14px; padding: 5px 5px;" href="<?php echo $my_base_url?>index.php/LanguageSwitcher/switchLang/english">English</a></li>
							<li><a style="font-size: 14px; padding: 5px 5px;" href="<?php echo $my_base_url?>index.php/LanguageSwitcher/switchLang/deutsch">Deutsch</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					&nbsp;
				</div>
				<div class="row">
					<div class="col-sm-2">
						<div id="fh5co-logo"><a href="index.html">Apartman<span>.</span></a></div>
					</div>
					<div class="col-sm-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html"><?php echo $this->lang->line('menu_photos'); ?></a></li>
							<li><a href="single.html"><?php echo $this->lang->line('menu_booking'); ?></a></li>
							<li><a href="contact.html"><?php echo $this->lang->line('menu_contact'); ?></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container">
		<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 col-md-pull-2">
					<h2>Apartman kiadó.</span></h2>
		<!-- PAGE CONTENT BEGINS -->
			<?php echo $contents;?>
		<!-- PAGE CONTENT ENDS -->
				</div>
			</div>
		</div>
	</div><!-- END container -->

	<div class="container">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-3 fh5co-widget">
					<h4>Az oldalról</h4>
					<p>Jogi információ.</p>
				</div>
				<div class="col-md-3 col-md-push-1">
					<h4>Lorem Ipsum</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">12345</a></li>
						<li><a href="#">67890</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-md-push-1">
					<h4>Linkek</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Képek</a></li>
						<li><a href="#">Foglalás</a></li>
						<li><a href="#">Kapcsolat</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Kapcsolat</h4>
					<ul class="fh5co-footer-links">
						<li>Kossuth utca 10,<br>1111 Budapest</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://localhost/apartman">apartman</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
<script src="<?php echo $my_base_url?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
<script src="<?php echo $my_base_url?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
<script src="<?php echo $my_base_url?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
<script src="<?php echo $my_base_url?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
<script src="<?php echo $my_base_url?>assets/js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
<script src="<?php echo $my_base_url?>assets/js/sticky-kit.min.js"></script>
	<!-- Main -->
<script src="<?php echo $my_base_url?>assets/js/main.js"></script>

	</body>
</html>

