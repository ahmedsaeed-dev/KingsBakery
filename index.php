<?php
$pageTitle = "Home";
include('includes/header.php');

?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg">
	</div>
	<div class="container">
		<div class="row fullscreen d-flex justify-content-center align-items-center">
			
			<div class="banner-content col-lg-10 col-md-12 justify-content-center">
				<h6 class="text-uppercase">Middle eastern cuisine and grocery</h6>
				<h1>
					King's Bakery
				</h1>
				<p class="text-white mx-auto">
					We specialize in mediterranean gourmet flat breads and sandwiches<br>
					We are known for our phenomenal shawarmas and Manou-wiches (cheese bread sandwiches)
				</p>
				<a href="menu.php" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<?php
$keepButton = true;
include('includes/about-us.php'); ?>
<!-- End home-about Area -->

<!-- Start item-category Area -->
<?php include('includes/item-category.php'); ?>
<!-- End item-category Area -->

<!-- Start about-video Area -->
<?php include('includes/about-video.php'); ?>
<!-- End about-video Area -->

<!-- Start review Area -->
<?php include('includes/reviews.php'); ?>
<!-- End review Area -->

<!-- REMOVED REMOVED REMOVED REMOVED REMOVED REMOVED REMOVED Start blog Area -->
<!-- <?php include('includes/blog-area.php'); ?> -->
<!-- end blog Area -->

<?php include('includes/footer.php'); ?>