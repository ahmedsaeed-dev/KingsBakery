<?php 

function printItems($conn, $type){
	$sql = "SELECT * FROM menu WHERE type = '$type' AND isFeatured = true;";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) { 
			// pricing is formated {'item1':'price1';'item2':'price2'}
			// will explode into array per ';'
			$prices = explode(';', $row['pricing']); ?>
			<div class="single-menu-list row justify-content-between align-items-center">
				<div class="col-lg-9">
					<a href="#"><h4><?=$row['name'];?></h4></a>
					<p><?=$row['description'];?></p>
				</div>
				<div class="col-lg-3 flex-row d-flex price-size">
					<?php foreach($prices as $string) {
						// current format per array 'item1':'price1'
						// will explode on ':' per iteration
						$price_array = explode(':', $string);
						$name = $price_array[0];
						$price = $price_array[1]; ?>
						<div class="s-price col">
							<h4><?=$name?></h4>
							<span><?='$'.$price?></span>
						</div>
					<?php } ?>					
				</div>
			</div>
	<?php } } } ?>



<section class="menu-list-area section-gap">
				<div class="container">
					<div class="row">
						<div class="menu-cat mx-auto">
							<ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="manaeesh-tab" data-toggle="pill" href="#manaeesh" role="tab" aria-controls="pills-manaeesh" aria-selected="true">Manaeesh</a>
								</li>	
								<li class="nav-item">
										<a class="nav-link" id="pills-kingsmanaeesh-tab" data-toggle="pill" href="#pills-kingsmanaeesh" role="tab" aria-controls="pills-kingsmanaeesh" aria-selected="false">Kings Manaeesh Special</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-smallmanaeesh-tab" data-toggle="pill" href="#pills-smallmanaeesh" role="tab" aria-controls="pills-smallmanaeesh" aria-selected="false">Small Manaeesh</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-minipies-tab" data-toggle="pill" href="#pills-minipies" role="tab" aria-controls="pills-minipies" aria-selected="false">Mini Pies</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-croissants-tab" data-toggle="pill" href="#pills-croissants" role="tab" aria-controls="pills-croissants" aria-selected="false">Croissants</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-rolls-tab" data-toggle="pill" href="#pills-rolls" role="tab" aria-controls="pills-rolls" aria-selected="false">Rolls</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-manouwich-tab" data-toggle="pill" href="#pills-manouwich" role="tab" aria-controls="pills-manouwich" aria-selected="false">Manou-wich</a>
								</li>		
								<li class="nav-item">
									<a class="nav-link" id="pills-breakfastplates-tab" data-toggle="pill" href="#pills-breakfastplates" role="tab" aria-controls="pills-breakfastplates" aria-selected="false">Breakfast Plates</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-dinnerplates-tab" data-toggle="pill" href="#pills-dinnerplates" role="tab" aria-controls="pills-dinnerplates" aria-selected="false">Dinner Plates</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-sandwiches-tab" data-toggle="pill" href="#pills-sandwiches" role="tab" aria-controls="pills-sandwiches" aria-selected="false">Sandwiches</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-sides-tab" data-toggle="pill" href="#pills-sides" role="tab" aria-controls="pills-sides" aria-selected="false">Sides</a>
								</li>		
							  							  
							</ul>							
						</div>

					</div>
					<div id="pills-tabContent" class="tab-content absolute">

						<!-- Manaeesh -->
						<div class="tab-pane fade show active" id="manaeesh" role="tabpanel" aria-labelledby="manaeesh-tab">
							<?php printItems($conn, 'manaeesh'); ?> 
						</div> 

						<!-- Rolls -->
						<div class="tab-pane fade" id="pills-rolls" role="tabpanel" aria-labelledby="pills-rolls-tab">
							<?php printItems($conn, 'rolls'); ?> 
						</div> 

						<!-- Dinner Plates -->
						 <div class="tab-pane fade" id="pills-dinnerplates" role="tabpanel" aria-labelledby="pills-dinnerplates-tab">
						 	<?php printItems($conn, 'dinnerplates'); ?> 
						 </div> 

						<!-- Sandwich -->
						<div class="tab-pane fade" id="pills-sandwiches" role="tabpanel" aria-labelledby="pills-sandwiches-tab">
							<?php printItems($conn, 'sandwiches'); ?> 
						</div> 

						<!-- Manouwich -->
						<div class="tab-pane fade" id="pills-manouwich" role="tabpanel" aria-labelledby="pills-manouwich-tab">
							<?php printItems($conn, 'manouwich'); ?> 
						</div>
						
						<!-- Sides -->
						<div class="tab-pane fade" id="pills-sides" role="tabpanel" aria-labelledby="pills-sides-tab">
							<?php printItems($conn, 'sides'); ?> 
						</div> 

						<!-- Breakfast Plates -->
						<div class="tab-pane fade" id="pills-breakfastplates" role="tabpanel" aria-labelledby="pills-breakfastplates-tab">
							<?php printItems($conn, 'breakfastplates'); ?> 
						</div>

						<!-- Kings Manaeesh Special -->
						<div class="tab-pane fade" id="pills-kingsmanaeesh" role="tabpanel" aria-labelledby="pills-kingsmanaeesh-tab">
							<?php printItems($conn, 'kingsmanaeeshspecial'); ?> 
						</div>

						<!-- Small Manaeesh -->
						<div class="tab-pane fade" id="pills-smallmanaeesh" role="tabpanel" aria-labelledby="pills-smallmanaeesh-tab">
							<?php printItems($conn, 'smallmanaeesh'); ?> 
						</div> 

						<!-- Mini Pies -->
						<div class="tab-pane fade" id="pills-minipies" role="tabpanel" aria-labelledby="pills-minipies-tab">
							<?php printItems($conn, 'minipies'); ?> 			
						</div> 

						<!-- Croissants -->
						<div class="tab-pane fade" id="pills-croissants" role="tabpanel" aria-labelledby="pills-croissants-tab">
							<?php printItems($conn, 'croissant'); ?> 
						</div> 

					</div>
				</div>	
			</section>