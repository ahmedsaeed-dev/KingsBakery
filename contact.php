<?php
$pageTitle = "Contact Us";
include('includes/header.php');
?>

<!-- start banner Area -->
<?php
$Link_title = "Contact Us";
$Link_ref = "contact.php";
$Link_name = "Contact Us";
include('includes/nonindex-banner.php');
?>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<a href="https://www.google.com/maps/place/Kings+Bakery+'Home+of+the+Manouwich'/@42.3183757,-83.1968473,17z/data=!3m1!4b1!4m5!3m4!1s0x883b34f0460dd08f:0x116fa460b86fa976!8m2!3d42.3183757!4d-83.1946586">
							<h5>4618 Greenfield Rd</h5>
						</a>
						<p>
							Dearborn, MI 48126
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<a href="tel:+1313 551 3027">
							<h5>+1 (313) 551-3027</h5>
						</a>
						<script src="js/vendor/jquery.min.js"></script>
						<div class="business-hours">
							<ul class="list-unstyled opening-hours">
								<li id="1">Mon. <span class="pull-right">Closed</span></li>
								<li id="2">Tues. <span class="pull-right">6:00AM - 6:00PM</span></li>
								<li id="3">Wed. &emsp; <span class="pull-right">6:00AM - 6:00PM</span></li>
								<li id="4">Thur. <span class="pull-right">6:00AM - 6:00PM</span></li>
								<li id="5">Fri. <span class="pull-right">6:00AM - 6:00PM</span></li>
								<li id="6"> Sat. <span class="pull-right">6:00AM - 5:00PM</span></li>
								<li id="0">Sun. <span class="pull-right">6:00AM - 4:00PM</span></li>
							</ul>
						</div>
						<style>

						</style>
						<script>
							//------- Date Highlighter on Contact Page --------//  
							var today = new Date().getDay();
							$("#" + today).addClass("highlight");
						</script>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<a href="mailto:kingsbakerydearborn@gmail.com">
							<h5>KingsBakeryDearborn@Gmail.com</h5>
						</a>
						<p>Send us your query anytime!</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="form-area " id="myForm" action="logic/mail.php" method="post" class="contact-form text-right">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
						</div>
						<div class="col-lg-12">
							<div class="alert-msg" style="text-align: left;"></div>
							<button class="genric-btn primary" style="float: right;">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->

<?php include('includes/footer.php'); ?>