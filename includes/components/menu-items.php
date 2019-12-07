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
					<!-- data-name = '<?=$row['name'];?>'
						data-description = '<?=$row['description'];?>' 
					-->
					<a id="view_modal_link" class="view_modal" data-name='<?=$row['name'];?>' data-img="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg" data-description='description' onclick="document.getElementById('view_modal').style.display = 'block';" href="#"><h4><?=$row['name'];?></h4></a>
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


 <!-- View Modal -->
 <div id="view_modal" class="modal" style="display: none">
 	<div class="vertical-alignment-helper"> 
		<div class="modal-dialog vertical-align-center">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div id="modal-item-name"></div>
					<button type="button" class="close" onclick="document.getElementById('view_modal').style.display = 'none'; sessionStorage.clear();" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div id="modal-item-img"></div>
				</div>
				<div class="modal-footer">
					<button type="button" onclick="document.getElementById('view_modal').style.display = 'none'; sessionStorage.clear();" class="btn btn-default" >Close</button>
				</div>
			</div>    
		</div>
	</div>
</div>

<style>

img {
    max-width:100%;
}
body.modal-open {
    overflow: visible;
}
.vertical-alignment-helper {
    display:table;
    height: 100%;
    width: 100%;
    pointer-events:none; /* This makes sure that we can still click outside of the modal to close it */
}
.vertical-align-center {
    /* To center vertically */
    display: table-cell;
    vertical-align: middle;
    pointer-events:none;
}
.modal-content {
    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
    width:inherit;
    max-width:inherit; /* For Bootstrap 4 - to avoid the modal window stretching full width */
    height:inherit;
    /* To center horizontally */
    margin: 0 auto;
    pointer-events: all;
}</style>

<script>
document.getElementById("view_modal_link").addEventListener("click", function() {
	sessionStorage.setItem("name", $(this).data('name'));
	sessionStorage.setItem("img", $(this).data('img'));

	var modal_name = sessionStorage.getItem('name');
	$('#modal-item-name').html(modal_name);
	
	var img = document.createElement("img");
	img.src = sessionStorage.getItem('img');
	var src = document.getElementById("modal-item-img");
	src.appendChild(img);

});


	// $('.view_modal').click(function () {
    // // Store curent record to session storage
    // sessionStorage.setItem("name", $(this).data('name'));
    // sessionStorage.setItem("description", $(this).data('description'));
   
    // // var modal_name = sessionStorage.getItem('name');
    // // $('#modal_name').html(modal_name);
	
    // // var modal_description = sessionStorage.getItem('description');
    // // $('#modal_description').html(modal_description);

// });



</script>
