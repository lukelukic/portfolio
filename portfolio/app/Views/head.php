<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>roughlyCoding.rs | Applications Development</title>
		<meta name="description" content="roughlyCoding.rs is a software company primary dedicated to web and desktop applications, database and SEO optimization.">
		<meta name="author" content="Luka Lukic">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Website, Software, Development, Desktop, roughlyCoding, Database, SEO, Web" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Robots" content="index,follow">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<!-- Styles -->
		<link href="<?php echo BASE_URL; ?>vendor/components/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo BASE_URL; ?>vendor/components/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo BASE_URL; ?>vendor/components/jquery/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo BASE_URL; ?>files/style/style.css" rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="<?php echo BASE_URL ?>files/images/favicon.png" />
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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-103595915-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
