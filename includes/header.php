<!-- University of Michigan Dearborn's Senior Capstone for Software Engineering Students
Project:	King's Bakery LLC Website
Developers: Ahmed Saeed, Billal Asoufy, Khansa Alhaidi, Annan Qayed
Development Start Date: July 15, 2019 -->

<?php 

include_once('core/init.php');

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>King's Bakery | <?= $pageTitle; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						<div class="menu-social-icons">
							<a href="https://www.facebook.com/Kings-Bakery-323090631127671/" target="blank_"><i class="fa fa-facebook fa-lg"></i></a>
							<a href="https://www.instagram.com/kings_bakery/" target="blank_"><i 				class="fa fa-instagram fa-lg"></i></a>
							<a href="https://snapchat.com/add/kings_bakery" target="blank_"><i 					class="fa fa-snapchat fa-lg"></i></a>
							<a href="https://www.yelp.com/biz/kings-bakery-dearborn" target="blank_"><i 		class="fa fa-yelp fa-lg"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
						<a class="btns" href="tel:+1313 551 3027"><span class="lnr lnr-phone-handset"></span>
							+(313) 551-3027
						</a>
						<a class="btns" href="mailto:kingsbakerydearborn@gmail.com"><span class="lnr lnr-envelope"></span>
							KingsBakeryDearborn@gmail.com
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<a href="index.php"><img src="img/fav.png" alt="" title="" height="60" width="105" /></a>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="market.php">Market</a></li>
						<li><a href="meat.php">Meat</a></li>
						<li><a href="catering.php">Catering</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->