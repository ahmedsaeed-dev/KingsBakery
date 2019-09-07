<?php
$pageTitle = "Team";
include('includes/header.php');
?>

<!-- start banner Area -->
<?php 
$Link_title = "King's Team";
$Link_ref = "Team.php";
$Link_name = "Team";
include('includes/nonindex-banner.php');
?>
<!-- End banner Area -->

<!-- Start team Area -->
<section class="team-area section-gap" id="team">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Meet the King's Bakery Team</h1>
					<p>Dedicated in providing you fast, friendly, and fresh service.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center d-flex align-items-center">
			<div class="col-lg-3 col-md-6 single-team">
				<div class="thumb">
					<img class="img-fluid" src="img/t2.jpg" alt="">
					<div class="align-items-center justify-content-center d-flex">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="meta-text mt-30 text-center">
					<h4>Employee Name</h4>
					<p>Employee Title</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 single-team">
				<div class="thumb">
					<img class="img-fluid" src="img/t2.jpg" alt="">
					<div class="align-items-center justify-content-center d-flex">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="meta-text mt-30 text-center">
					<h4>Employee Name</h4>
					<p>Employee Title</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 single-team">
				<div class="thumb">
					<img class="img-fluid" src="img/t2.jpg" alt="">
					<div class="align-items-center justify-content-center d-flex">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="meta-text mt-30 text-center">
					<h4>Employee Name</h4>
					<p>Employee Title</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 single-team">
				<div class="thumb">
					<img class="img-fluid" src="img/t2.jpg" alt="">
					<div class="align-items-center justify-content-center d-flex">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="meta-text mt-30 text-center">
					<h4>Employee Name</h4>
					<p>Employee Title</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End team Area -->

<!-- Start item-category Area -->
<?php include('includes/item-category.php'); ?>
<!-- End item-category Area -->

<!-- Start home-about Area -->
<?php
$keepButton = true;
include('includes/about-us.php'); ?>
<!-- End home-about Area -->

<?php include('includes/footer.php'); ?>