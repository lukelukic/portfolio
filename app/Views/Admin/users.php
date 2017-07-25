        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Members</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <!-- /.col-lg-8 -->


				<div class="col-lg-10 col-lg-offset-1">
					<table class="table table-hover table-striped table-bordered">
             <tr>
               <th>#</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Position</th>
               <th>LinkedIn</th>
               <th>Facebook</th>
               <th>Twitter</th>
               <th>Instagram</th>
               <th>Picture</th>
               <th>Alt Attribute</th>
               <th>Modify</th>
               <th>Delete</th>
             </tr>
					</table>
				</div>
            <!-- /.row -->
			</div>
        <!-- /#page-wrapper -->
        <div class="row">
        <div class="col-lg-3 col-lg-offset-4">

            <!-- Forma za dodavanje novog korisnika, prikazuje se uvek osim ako je prosledjen edit parametar -->
              <p class="lead">New team members</p>
            <form method="post" action="<?php echo BASE_URL;?>admin/addMember">
              <div class="form-group">
                <input type="text" name="tbFirstName" value="" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" name="tbLastName" value="" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" name="tbPosition" value="" class="form-control" placeholder="Position">
              </div>
              <div class="form-group">
                <input type="text" name="tbLinkedIn" value="" class="form-control" placeholder="LinkedIn">
              </div>
              <div class="form-group">
                <input type="text" name="tbFacebook" value="" class="form-control" placeholder="Facebook">
              </div>
              <div class="form-group">
                <input type="text" name="tbTwitter" value="" class="form-control" placeholder="Twitter">
              </div>
              <div class="form-group">
                <input type="text" name="tbInstagram" value="" class="form-control" placeholder="Instagram">
              </div>
              <p><strong>Picture :</strong></p>
              <div class="form-group">
                <input type="file" name="tbPicture" value="" class="form-control">
              </div>
              <div class="form-group">
                <input type="text" name="tbAlt" value="" class="form-control" placeholder="Alt Attribute">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Add member" class="form-control">
              </div>
            </form>
        </div>
     </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo BASE_URL ?>vendor/components/jquery/jquery.min.js"></script>
    <script type="text/javascript">

        $(".usrDelete").click(function(event) {
          confirm("Da li ste sigurni da zelite da obrisete korisnika?") ? true : event.preventDefault();
        });
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>vendor/components/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASE_URL; ?>files/js/sb-admin-2.js"></script>
</body>


</html>
