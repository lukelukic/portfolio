

			<!--- Portfolio --->
			<div id="port" class="portfolio-box">
				<div class="container">
					<div class="portfolio-head text-center">
						<h4>projects</h4>
					</div>
					<!---- start-portfolio-script----->
					<script type="text/javascript" src="<?php echo BASE_URL; ?>files/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
						$(function () {
							var filterList = {
								init: function () {

									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});

								},
								hoverEffect: function () {
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
										}
									);

								}

							};
							// Run the show!
							filterList.init();
						});
					</script>
					<!----//End-portfolio-script----->
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">BROWSE OUR PROJECTS</span> </li>

					</ul>
					<div id="portfoliolist">
					<div class="portfolio logo1 mix_all port-big-grid" data-cat="logo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p2.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p3.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="portfolio web mix_all" data-cat="web" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p4.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p1.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p5.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="<?php echo BASE_URL; ?>files/images/p6.jpg" class="b-link-stripe b-animate-go  thickbox swipebox">
						     <img class="p-img" src="<?php echo BASE_URL; ?>files/images/p6.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo BASE_URL; ?>files/images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
					</div>
					<div class="clearfix"> </div>
					<a class="load-ports" href="#">Request Project</a>
				</div>

			</div>
         		<a class="port-down-arrow down-arrow-to scroll" href="#team"><span> </span></a>
         		<span class="port-mouse"> </span>
				</div>

			</div>
			<!--- Portfolio --->

      			<div class="clearfix"> </div>
