<?php 
include('../core/init.php'); 

function getCount($conn, $page){
  $sql = "SELECT COUNT(*) as total FROM $page";
  $result = $conn->query($sql);
  $data = mysqli_fetch_assoc($result);
  echo $data['total'];  
}
?>

<!-- Header -->
<?php include('includes/header.php'); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Admin Home</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All King's Bakery Products</div>
            <div class="card-deck">

            <!-- Menu -->
              <div class="card">
                <img class="card-img-top" src="img/menu.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title d-flex justify-content-center">Menu Items</h5>
                  <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <button type="button"  onclick="window.location.href='menu.php'" class="btn btn-primary btn-lg btn-block mt-auto">See Menu Items</button>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Item Count: <mark><strong><?=getCount($conn, 'menu');?></strong></mark></small>
                </div>
              </div>
              
              <!-- Market -->
              <div class="card">
                <img class="card-img-top" src="img/market.jpg" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title d-flex justify-content-center">Market Items</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <button type="button"  onclick="window.location.href='market.php'" class="btn btn-primary btn-lg btn-block mt-auto">See Market Items</button>
                </div>
                <div class="card-footer">
                <small class="text-muted">Item Count: <mark><strong><?=getCount($conn, 'market');?></strong></mark></small>
                </div>
              </div>

              <!-- Meat -->
              <div class="card">
                <img class="card-img-top" src="img/meat.jpg" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title d-flex justify-content-center">Meat Items</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <button type="button"  onclick="window.location.href='meat.php'" class="btn btn-primary btn-lg btn-block mt-auto">See Meat Items</button>
                </div>
                <div class="card-footer">
                <small class="text-muted">Item Count: <mark><strong><?=getCount($conn, 'meat');?></strong></mark></small>
                </div>
              </div>

              <!-- Catering -->
              <div class="card">
                <img class="card-img-top" src="img/catering.png" alt="Card image cap">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title d-flex justify-content-center">Catering Options</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <button type="button"  onclick="window.location.href='catering.php'" class="btn btn-primary btn-lg btn-block mt-auto">See Catering Items</button>

                </div>
                <div class="card-footer">
                <small class="text-muted">Item Count: <mark><strong><?=getCount($conn, 'catering');?></strong></mark></small>
                </div>
              </div>
            </div>

      </div>

        

      </div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>