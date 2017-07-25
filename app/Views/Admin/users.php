        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Korisnici</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <!-- /.col-lg-8 -->
				<div class="col-lg-3">

            <!-- Forma za dodavanje novog korisnika, prikazuje se uvek osim ako je prosledjen edit parametar -->
              <p class="lead">Novi korisnik</p>
            <form method="get" action="">
              <p><strong>Korisnicko ime :</strong></p>
              <div class="form-group">
                <input type="text" name="tbUsername" value="" class="form-control">
              </div>
              <p><strong>Lozinka :</strong></p>
              <div class="form-group">
                <input type="password" name="tbPassword" value="" class="form-control">
              </div>
              <p><strong>Email :</strong></p>
              <div class="form-group">
                <input type="text" name="tbEmail" value="" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Dodaj" class="form-control">
              </div>
            </form>
        </div>

				<div class="col-lg-7 col-lg-offset-1">
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
