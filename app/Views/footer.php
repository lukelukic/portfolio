<!---- footer ---->
<div class="footer text-center">
  <a href="#"><img src="<?php echo BASE_URL; ?>files/images/footer-logo.png" title="daisy" /></a>
  <p class="copy-right">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
  <script type="text/javascript">
            $(document).ready(function() {
              /*
              var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
              };
              */

              $().UItoTop({ easingType: 'easeOutCubic' });

            });
          </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!---- footer ---->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>files/css/swipebox.css">
<script src="<?php echo BASE_URL; ?>files/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
    jQuery(function($) {
      $(".swipebox").swipebox();
    });
  </script>

</body>
</html>
