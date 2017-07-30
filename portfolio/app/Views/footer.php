<footer class="footer-black" id="footer-contact">
     <div class="container">
       <div class="row">
         <div class="text-center">

          <div id="hidden-arrow">
          <a href="#top" class="scroll arrow-position"><img src="<?php echo BASE_URL; ?>files/images/to-top1.png"/></a>
          </div>

          <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Send us a message!</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="mFirstName" placeholder="First Name" class="form-control field-outline" id="mFirstName" title="Starts with uppercase letter, must contain only letters, and have at least 2 and a maximum of 15 characters.">
                        </div>
                        <div class="form-group">
                          <input type="text" name="mPhoneNumber" placeholder="Phone Number (Optional)" class="form-control field-outline" id="mPhoneNumber" title="+123 (456) 789-1234 / 063-123-4567">
                        </div>
                        <div class="form-group">
                          <input type="text" name="mEmail" placeholder="Email" class="form-control field-outline" id="mEmail" title="mail@mail.com">
                        </div>
                        <div class="form-group">
                          <textarea name="mMessage" rows="8" cols="80" class="form-control field-outline" placeholder="Your Message" id="mMessage" title="Your message goes here."></textarea>
                        </div>
                        <div class="form-group">
                          <button name="mSubmit" class="form-control field-outline" id="mSubmit">Send</button>
                        </div>
                        <div id="feedback">

                        </div>
                      </div>
                    </div>
                </div>
              </div>
              </div>
            </div>
        <div class="p-position">
        <p class="lead"><a href="<?php echo BASE_URL; ?>"><span>roughly</span><span>Coding.rs</span></a></p>
        <p class="footer-company-name col-md-12">roughyCoding 2017 | &copy; All Rights Reserved </p>
        </div>
      </div>
    </div>
		</footer>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/vendor/components/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>files/js/ajax.js"></script>
	</body>

</html>
