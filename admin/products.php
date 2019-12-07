<?php 

include('../core/init.php');

function getEdit($conn) {
    $id = $_GET['id'];
    $page = $_GET['page'];
    $sql = "SELECT * FROM $page WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <div class="w3-container w3-animate-left">
    <h2>Editing <?=ucfirst($page);?> Item - <?=$row['name'];?></h2>
    <p>After making changes, select UPDATE to update the product.</p>

    <form action="<?=$page;?>.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name">Name</label>
                <input name='name' type="text" class="form-control" id="name" aria-describedby="nameHelp" value='<?=$row['name']?>' required/> 
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <input name='description' type="text" class="form-control" id="description" value='<?=$row['description']?>' required/> 
            </div>
        </div>
        <?php if ($page != 'catering'){ ?>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="pricing">Size/Price</label>
                <input name='pricing' type="text" class="form-control" id="pricing" aria-describedby="pricingHelp"  value='<?=$row['pricing']?>'/> 
                <small id="pricingHelp" class="form-text text-muted">Follow this format: Reg:1.50;Large:4.00</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="type">Choose a product type</label>
                <select class="form-control" name="type" id="type" required> 
                    <option value=''></option>
                    <?php 
                        $sql = "SELECT distinct type FROM $page";
                        $result = $conn->query($sql);
                        while($type = $result->fetch_assoc()) { ?>
                            <?php if($type['type'] == $row['type']) {?>
                                <option value='<?=$type['type']?>' selected><?=$type['type']?></option>
                            <? } else {?>
                            <option value='<?=$type['type']?>'><?=$type['type']?></option>
                        <?php } }// end of while loop ?>
                </select>
            </div>        
        </div>
          <?php } ?>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="custom-control custom-switch">
                    <?php if($row['isFeatured'] == TRUE) {?>
                            <input name='isFeatured' type="checkbox" class="custom-control-input" value='1' id="isFeatured" checked>
                        <? } else {?>
                            <input name='isFeatured' type="checkbox" class="custom-control-input" value='1' id="isFeatured">
                        <?php }?>
                    <label class="custom-control-label" for="isFeatured">Display Item</label>
                </div>
            </div>
        </div>
        <input type="hidden" name="update" value="1">
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="hidden" name="page" value='<?=$page;?>'>
        <button type="submit" class="btn btn-success float-right" style="margin:5px;">UPDATE</button>
        <button type="button" class="btn btn-danger float-right"  onclick="location.href='<?=$page;?>.php'" style="margin:5px;">CANCEL</button>
    </form>
    </div>
<?php } ?>

<?php
function getAdd($conn) {
    $page = $_GET['page']; ?>
    <div class="w3-container w3-animate-left">
    <h2>Add New <?=ucfirst($page);?> Item</h2>
    <p>After making changes, select SUBMIT to add the new item.</p>
    <form action="<?=$page;?>.php" method="post">
    
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name">Name</label>
                <input name='name' type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder='Enter product name' required/> 
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="description">Description</label>
                <input name='description' type="text" class="form-control" id="description" placeholder='Enter description' required/> 
            </div>
        </div>
        
        <?php if ($page != 'catering'){ ?>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="pricing">Size/Price</label>
                <input name='pricing' type="text" class="form-control" id="pricing" aria-describedby="pricingHelp"  placeholder='Enter Size and Price' required/> 
                <small id="pricingHelp" class="form-text text-muted">Follow this format: Reg:1.50;Large:4.00</small>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="type">Select a product type</label>
        <select class="form-control" name="type" id="type" required> 
            <option value=''></option>
            <?php 
                $page = $_GET['page'];
                $sql = "SELECT distinct type FROM $page";
                $result = $conn->query($sql);
                while($type = $result->fetch_assoc()) { ?>
                    <option value='<?=$type['type']?>'><?=$type['type']?></option>
                <?php } // end of while loop ?>
        </select>
            </div>            
        </div>
        <?php } ?>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="custom-control custom-switch">
                    <input name='isFeatured' type="checkbox" class="custom-control-input" value='1' id="isFeatured">
                    <label class="custom-control-label" for="isFeatured">Display Item</label>
                </div>
            </div>
        </div>

                
        <input type="hidden" name="insert" value="1">
        <input type="hidden" name="page" value='<?=$page;?>'>
        <button type="submit" class="btn btn-success float-right" style="margin:5px;">SUBMIT</button>
        <button type="button" class="btn btn-danger float-right" onclick="location.href='<?=$page;?>.php'" style="margin:5px;">CANCEL</button>

    </form>
    </div>
<?php } ?>

<!-- Header -->
<?php include('includes/header.php'); ?>

    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Manage Products</li>
        </ol>
       <?php if(isset($_GET['edit'])){ getEdit($conn); }?>
       <?php if(isset($_GET['add'])){ getAdd($conn); }?>
      </div>

<!-- Footer -->
<?php include('includes/footer.php'); ?>
