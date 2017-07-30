
<form class="form-control" action="<?php echo BASE_URL; ?>login/login" method="POST">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <input type="text" name="lgUsername" placeholder="Username" class="form-control field-outline">
      </div>
      <div class="form-group">
        <input type="password" name="lgPassword" placeholder="Password" class="form-control field-outline">
      </div>
      <div class="form-group">
        <input type="submit" name="lgSubmit" class="form-control field-outline">Login</button>
      </div>
      <div class="form-group">
        <button name="home" class="form-control field-outline" id="home"><a href="<?php echo BASE_URL; ?>">Home</a></button>
      </div>
      <div id="feedback">

      </div>
    </div>
  </div>
</form>
<link href="<?php echo BASE_URL; ?>files/style/style.css" rel='stylesheet' type='text/css' />
