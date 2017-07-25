<!DOCTYPE HTML>
<html>
	<head>
		<title>Daisy Website Template | Home :: w3layouts</title>
		<link href="<?php echo BASE_URL; ?>vendor/components/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo BASE_URL; ?>vendor/components/jquery/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo BASE_URL; ?>files/style/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo BASE_URL; ?>files/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>files/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1500);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->

	</head>
