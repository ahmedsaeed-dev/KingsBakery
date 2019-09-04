<?php
$pageTitle = "Meat";
include('includes/header.php');
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					King's Meat
				</h1>
				<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="meat.php"> Meat Department</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start menu-list Area -->
<?php include('includes/meat-items.php'); ?>
<!-- End menu-list Area -->


<?php include('includes/footer.php'); ?>