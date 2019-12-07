<?php 

function printItems($conn, $type){
	$sql = "SELECT * FROM meat WHERE type = '$type' AND isFeatured = true;";
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
				<?php
					 foreach($prices as $string) {
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
									<a class="nav-link active" id="beef-tab" data-toggle="pill" href="#beef" role="tab" aria-controls="pills-beef" aria-selected="true">Beef</a>
								</li>	
								<li class="nav-item">
										<a class="nav-link" id="pills-poultry-tab" data-toggle="pill" href="#pills-poultry" role="tab" aria-controls="pills-poultry" aria-selected="false">Poultry</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-lamb-tab" data-toggle="pill" href="#pills-lamb" role="tab" aria-controls="pills-lamb" aria-selected="false">Lamb</a>
								</li>
							</ul>							
						</div>
					</div>
					<div id="pills-tabContent" class="tab-content absolute">
						
						<!-- Beef -->
						<div class="tab-pane fade show active" id="beef" role="tabpanel" aria-labelledby="beef-tab">
							<?php printItems($conn, 'beef'); ?> 
						</div>

						<!-- Poultry -->
						 <div class="tab-pane fade" id="pills-poultry" role="tabpanel" aria-labelledby="pills-poultry-tab">
						 	<?php printItems($conn, 'poultry'); ?> 
						 </div> 

						<!-- Lamb -->
						<div class="tab-pane fade" id="pills-lamb" role="tabpanel" aria-labelledby="pills-lamb-tab">
						 	<?php printItems($conn, 'lamb'); ?> 
						 </div> 

					</div>
				</div>	
			</section>