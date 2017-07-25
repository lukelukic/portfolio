<!DOCTYPE html>
<html>
<head>
  <title>404</title>
<style media="screen">
.error-template {padding: 40px 15px;text-align: center;}
.error-actions {margin-top:15px;margin-bottom:15px;}
.error-actions .btn { margin-right:10px; }
</style>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>vendor/components/bootstrap/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>vendor/components/font-awesome/css/font-awesome.css" media="screen">
</link>
</head>
<body>
  <div class="container">
      <div class="row">
      <div class="error-template">
  	    <h1>Oops!</h1>
  	    <h2>404 Not Found</h2>
  	    <div class="error-details">
  		Sorry, an error has occured, Requested page not found!<br>
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
