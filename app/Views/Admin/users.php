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
               <th>Korisnicko ime</th>
               <th>Email</th>
               <th>Izmeni</th>
               <th>Obrisi</th>
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
            <form method="post" action="<?php echo BASE_URL;?>admin/add">
              <p><strong>First name :</strong></p>
              <div class="form-group">
                <input type="text" name="tbFirstName" value="" class="form-control">
              </div>
              <p><strong>Last name :</strong></p>
              <div class="form-group">
                <input type="text" name="tbLastName" value="" class="form-control">
              </div>
              <p><strong>Position :</strong></p>
              <div class="form-group">
                <input type="text" name="tbPosition" value="" class="form-control">
              </div>
              <p><strong>LinkedIn :</strong></p>
              <div class="form-group">
                <input type="text" name="tbLinkedIn" value="" class="form-control">
              </div>
              <p><strong>Facebook :</strong></p>
              <div class="form-group">
                <input type="text" name="tbFacebook" value="" class="form-control">
              </div>
              <p><strong>Twitter :</strong></p>
              <div class="form-group">
                <input type="text" name="tbTwitter" value="" class="form-control">
              </div>
              <p><strong>Instagram :</strong></p>
              <div class="form-group">
                <input type="text" name="tbInstagram" value="" class="form-control">
              </div>
              <p><strong>Picture :</strong></p>
              <div class="form-group">
                <input type="file" name="tbPicture" value="" class="form-control">
              </div>
              <p><strong>Alt attribute :</strong></p>
              <div class="form-group">
                <input type="text" name="tbAlt" value="" class="form-control">
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
