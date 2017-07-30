<?php require_once '../config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>403</title>
<link rel="stylesheet" href="<?php echo BASE_URL ?>files/style/core.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>vendor/components/bootstrap/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>vendor/components/font-awesome/css/font-awesome.css" media="screen">
</link>
</head>
<body>
  <div class="container">
      <div class="row">
      <div class="error-template">
  	    <h1>Oops!</h1>
  	    <h2>403 Permission Denied</h2>
  	    <div class="error-details">
  		Sorry, You do not have permission to access this page.<br>
  	    </div>
  	    <div class="error-actions">
  		<a href="<?php echo BASE_URL; ?>" class="btn btn-primary">
  		    Take Me Home <i class='fa fa-home'></i> </a>
  	    </div>
  	</div>
      </div>
  </div>
</body>
</html>
