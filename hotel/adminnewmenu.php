<?php include("adminsession.php");?>
<?php include("adminheader.php");?>
<br><br><br><br><br><br>
<div class="container">
    <div class="section-title text-center">
      <h2>Add New Menu Item</h2>
      <hr>
    
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form action="addmenu.php" method="post" enctype = "multipart/form-data">
      
       <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <select id="menutype" class="form-control" name="menutype" placeholder="Menu Type" required="required">
              	<option value="">Select Menu Type</option>
              		
              		<?php foreach ($menuitemtype as &$value) {?>

							<option value="<?php echo  $value;?>"><?php echo  $value;?></option>
							<?php }?>

              </select>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="itemname" class="form-control" name="itemname" placeholder="Item Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" id="password" class="form-control" name="itemprice" placeholder="Item Price" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" id="itemquantity" class="form-control" name="itemquantity" placeholder="Item Quantity" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
        
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            Item Image
              <input type="file" id="image" class="form-control" name="image" placeholder="Item Image" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
        
         <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <textarea id="itemdesc" class="form-control" name="itemdesc" placeholder="Item Description" required="required"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
        
        
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="submit" value="Add Menu Item" class="btn btn-success" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
        
       </form>
      </div>
      </div>
     

<?php include("footer.php");?>