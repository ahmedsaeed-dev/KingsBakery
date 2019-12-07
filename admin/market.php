<?php 
include('../core/init.php');

function getRecords($conn){
	$sql = "SELECT * FROM market ORDER BY name ASC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) { ?>
			  <tr>
        <td><a href="products.php?edit=1&id=<?=$row['id']?>&page=market" class="btn btn-default"><i class="far fa-edit"></a></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['description'];?></td>
        <td><?=$row['pricing'];?></td>
        <td><?=$row['type'];?></td>
        <td><?=$row['isFeatured'];?></td>
      </tr>
      <?php  } } } ?>

<!-- Header -->
<?php include('includes/header.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Market Items</li>
        </ol>

        <?php 
        // update query
        if(isset($_POST['update'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $page = $_POST['page'];
            $type = $_POST['type'];
            $id = $_POST['id'];
            $isFeatured = 0;
            if (isset($_POST['isFeatured'])) { $isFeatured = 1; }
            else { $isFeatured == 0; }
            $sql = "UPDATE $page SET name='$name', description='$description', isFeatured='$isFeatured', type='$type' WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
              header("location: market.php?clear=1");
            } else {
              echo '<div class="bg-danger"><p class="text-white text-center">Product could not be updated.</p></div>';
              }
          }

          // insert query
          if(isset($_POST['insert'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $page = $_POST['page'];
            $type = $_POST['type'];
            $pricing = $_POST['pricing'];
            $isFeatured = 0;
            if (isset($_POST['isFeatured'])) { $isFeatured = 1; }
            else { $isFeatured == 0; }
            $sql = "INSERT INTO $page (name, description, pricing, isFeatured, type) VALUES ('$name', '$description', '$pricing', '$isFeatured', '$type')";
            if ($conn->query($sql) === TRUE) {
              header("location: market.php?clear=1");
            } else {
              echo '<div class="bg-danger"><p class="text-white text-center">Product could not be added.</p></div>';
            }
          }
          
          // redirect if successful
          if(isset($_GET['clear'])){
            echo '<div class="bg-success"><p class="text-white text-center">Changes Saved!</p></div>';
          } ?>
         
       

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All King's Bakery Products</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a class="btn btn-success float-right" id="add-product-btn" href="products.php?add=1&page=market">Add Product</a>
              <div class="clearfix"></div><br>
                <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Displayed</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Displayed</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php getRecords($conn);?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
      </div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
