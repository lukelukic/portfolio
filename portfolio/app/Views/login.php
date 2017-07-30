
<link href="<?php echo BASE_URL; ?>vendor/components/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<div class="container text-center">
  <form class="" action="<?php echo BASE_URL; ?>login/login" method="POST">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
          <input type="text" name="lgUsername" placeholder="Username" class="form-control field-outline">
        </div>
        <div class="form-group">
          <input type="password" name="lgPassword" placeholder="Password" class="form-control field-outline">
        </div>
        <div class="form-group">
          <input type="submit" name="lgSubmit"  value="Login" class='btn btn-primary'>
        </div>
        <div class="form-group">
        <a href="<?php echo BASE_URL; ?>">Back to website</a></button>
        </div>
        <div id="feedback">
          <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
              <?php echo $_SESSION['error']; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </form>
</div>
