<?php
$pageTitle = "About";
include('includes/header.php');
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					About Us
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.php"> About Us</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<?php
$keepButton = false;
include('includes/our-history.php'); ?>
<!-- End home-about Area -->

<!-- Start review Area -->
<?php include('includes/reviews.php'); ?>
<!-- End review Area -->

<!-- Start about-video Area -->
<?php include('includes/about-video.php'); ?>
<!-- End about-video Area -->

<?php include('includes/footer.php'); ?>