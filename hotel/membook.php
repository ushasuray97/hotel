<?php include("session.php");?>
<?php include("memheader.php");?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div class="section-title text-center">
<h2> Menu Book</h2>
<hr>

</div>
<div class="col-md-10 col-md-offset-1">
<form action="searchbook.php" method="get" >
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
              <input type="submit" value="Search" class="btn btn-success" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
</form>
</div>
</div>



<?php include("footer.php");?>