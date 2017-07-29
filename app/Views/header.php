	<body>
		<div id="top" class="bg">
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<p class="lead"><a href="<?php echo BASE_URL; ?>"><span>roughly</span><span>Coding.rs</span></a></p>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="#about" class="scroll">About</a></li>
								<li class="active"><a href="#port" class="scroll">portfolio</a></li>
								<li><a href="#wedo" class="scroll">wedo</a></li>
								<li><a href="#team" class="scroll">team</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
							</ul>
							<a href="#" id="pull"><img src="<?php echo BASE_URL; ?>files/images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- header-info ---->
			<div class="header-info text-center">
				<div class="container">
					<h1><span> </span><label>WE DEVELOP SOFTWARE</label> <span> </span></h1>
					<p>That makes Your bussiness grow.</p>
					<a class="big-btn" href="#">Contact us</a>
					<a class="down-arrow down-arrow-to scroll" href="#about"><span> </span></a>
					<label class="mouse-divice"> </label>
				</div>
			</div>
			</div>
			<div class="clearfix"> </div>
			<!---- header-info ---->
			<script type="text/javascript">
				$(".logo").hover(function() {
					$(".logo span:first").css({
						'color': '#fff'
					});
					$(".logo span:nth-child(2)").css({
						'color': '#FC645F'
					});
				}, function() {
					$(".logo span:first").css({
						'color': '#FC645F'
					});
					$(".logo span:nth-child(2)").css({
						'color': '#FFF'
					});
				});
			</script>
