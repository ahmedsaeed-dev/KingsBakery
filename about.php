<?php
$pageTitle = "About";
include('includes/header.php');
?>

<!-- start banner Area -->
<?php
$Link_title = "About Us";
$Link_ref = "about.php";
$Link_name = "About Us";
include('includes/nonindex-banner.php');
?>
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