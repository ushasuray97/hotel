<?php include("header.php");?>
<br><br><br><br><br><br>
<div class="container">
    <div class="section-title text-center">
      <h2>Login Form</h2>
      <hr>
    
    </div>
    <div class="col-md-10 col-md-offset-1">
      <form action="log.php" method="post" id="log">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="username" class="form-control" name="username" placeholder="Username" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        
        
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-success" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
       </form>
      </div>
      </div>
     

<?php include("footer.php");?>