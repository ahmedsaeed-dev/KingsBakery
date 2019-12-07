<?php 

function printItems($conn, $type){
	$sql = "SELECT * FROM market WHERE type = '$type' AND isFeatured = true;";
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
									<a class="nav-link active" id="drinks-tab" data-toggle="pill" href="#drinks" role="tab" aria-controls="pills-drinks" aria-selected="true">Drinks</a>
								</li>	
								<li class="nav-item">
										<a class="nav-link" id="pills-snacks-tab" data-toggle="pill" href="#pills-snacks" role="tab" aria-controls="pills-snacks" aria-selected="false">Snacks</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-fruits-tab" data-toggle="pill" href="#pills-fruits" role="tab" aria-controls="pills-fruits" aria-selected="false">Fruits</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-vegetables-tab" data-toggle="pill" href="#pills-vegetables" role="tab" aria-controls="pills-vegetables" aria-selected="false">Vegetables</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-householditems-tab" data-toggle="pill" href="#pills-householditems" role="tab" aria-controls="pills-householditems" aria-selected="false">Household Items</a>
								</li>
								<li class="nav-item">
										<a class="nav-link" id="pills-misc-tab" data-toggle="pill" href="#pills-misc" role="tab" aria-controls="pills-misc" aria-selected="false">Misc</a>
								</li>
							
							  							  
							</ul>							
						</div>

					</div>
					<div id="pills-tabContent" class="tab-content absolute">
						
						<!-- Drinks -->
						<div class="tab-pane fade show active" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
							<?php printItems($conn, 'drinks'); ?> 
						</div> 

						<!-- Snacks -->
						 <div class="tab-pane fade" id="pills-snacks" role="tabpanel" aria-labelledby="pills-snacks-tab">
						 	<?php printItems($conn, 'snacks'); ?> 
						 </div>

						<!-- Fruits -->
						<div class="tab-pane fade" id="pills-fruits" role="tabpanel" aria-labelledby="pills-fruits-tab">
						 	<?php printItems($conn, 'fruits'); ?> 
						 </div>

						<!-- vegetables -->
						<div class="tab-pane fade" id="pills-vegetables" role="tabpanel" aria-labelledby="pills-vegetables-tab">
						 	<?php printItems($conn, 'vegetables'); ?> 
						 </div>				

						<!-- householditems -->
						<div class="tab-pane fade" id="pills-householditems" role="tabpanel" aria-labelledby="pills-householditems-tab">
						 	<?php printItems($conn, 'householditems'); ?> 
						 </div>

						<!-- misc -->
						<div class="tab-pane fade" id="pills-misc" role="tabpanel" aria-labelledby="pills-misc-tab">
						 	<?php printItems($conn, 'misc'); ?> 
						 </div>
					</div>
				</div>	
			</section>