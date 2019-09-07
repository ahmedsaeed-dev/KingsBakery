<?php
$pageTitle = "Catering";
include('includes/header.php');
?>

<!-- start banner Area -->
<?php 
$Link_title = "King's Catering";
$Link_ref = "catering.php";
$Link_name = "Catering";
include('includes/nonindex-banner.php');
?>
<!-- End banner Area -->

<!-- Start catering-list Area -->
<?php include('includes/components/catering-items.php'); ?>
<!-- End catering-list Area -->


<?php include('includes/footer.php'); ?>