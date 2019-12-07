<?php 
function printItems($conn){
	$sql = "SELECT * FROM catering WHERE isFeatured = true;";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {  ?>
			<div class="single-menu-list row justify-content-between align-items-center">
				<div class="col-lg-9">
					<a href="#"><h4><?=$row['name'];?></h4></a>
					<p><?=$row['description'];?></p>
				</div>
			</div>
	<?php } } } ?>

<section class="menu-list-area section-gap" style="margin-top: -50px;">
	<div class="container">
		<div class="tab-content absolute">
			<!-- Start of Manaeesh -->
			<div>
				<?php printItems($conn); ?>
			</div> <!-- End of Manaeesh -->
		</div>
	</div>	
</section>