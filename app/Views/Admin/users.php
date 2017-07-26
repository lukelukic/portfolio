        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Members</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            <!-- /.col-lg-8 -->


				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 ">
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
             <?php if(isset($team_members)): ?>
               <?php $rb=1; ?>
               <?php foreach($team_members as $member): ?>
                 <tr>
                   <td><?php echo $rb++; ?></td>
                   <td><?php echo $member->firstName; ?></td>
                   <td><?php echo $member->lastName; ?></td>
                   <td><?php echo $member->position; ?></td>
                   <td><?php echo $member->linkedIn ? $member->linkedIn : "/"; ?></td>
                   <td><?php echo $member->facebook ? $member->facebook : "/"; ?></td>
                   <td><?php echo $member->twitter ? $member->twitter : "/"; ?></td>
                   <td><?php echo $member->instagram ? $member->instagram : "/"; ?></td>
                   <td><?php echo $member->picture; ?></td>
                   <td><?php echo $member->alt; ?></td>
                   <td><a href="<?php echo BASE_URL; ?>admin/memberEdit/<?php echo $member->id; ?>" class='btn btn-warning btn-sm'>Edit</a></td>
                   <td><a href="<?php echo BASE_URL; ?>admin/memberDelete/<?php echo $member->id; ?>" class='btn btn-danger btn-sm'>Delete</a></td>
                 </tr>
               <?php endforeach; ?>
             <?php endif; ?>
					</table>
				</div>
            <!-- /.row -->
			</div>
        <!-- /#page-wrapper -->
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 ">

            <!-- Forma za dodavanje novog korisnika, prikazuje se uvek osim ako je prosledjen edit parametar -->
              <p class="lead">New team members</p>
            <form method="post" action="<?php echo BASE_URL;?>admin/addMember" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="tbFirstName" value="" class="form-control" placeholder="First Name" id="tbFirstName">
              </div>
              <div class="form-group">
                <input type="text" name="tbLastName" value="" class="form-control" placeholder="Last Name"id="tbLastName">
              </div>
              <div class="form-group">
                <input type="text" name="tbPosition" value="" class="form-control" placeholder="Position" id="tbPosition">
              </div>
              <div class="form-group">
                <input type="text" name="tbLinkedIn" value="" class="form-control" placeholder="LinkedIn" id="tbLinkedIn">
              </div>
              <div class="form-group">
                <input type="text" name="tbFacebook" value="" class="form-control" placeholder="Facebook" id="tbFacebook">
              </div>
              <div class="form-group">
                <input type="text" name="tbTwitter" value="" class="form-control" placeholder="Twitter" id="tbTwitter">
              </div>
              <div class="form-group">
                <input type="text" name="tbInstagram" value="" class="form-control" placeholder="Instagram" id="tbInstagram">
              </div>
              <p><strong>Picture :</strong></p>
              <div class="form-group">
                <input type="file" name="tbPicture" value="" class="form-control" id="tbPicture">
              </div>
              <div class="form-group">
                <input type="text" name="tbAlt" value="" class="form-control" placeholder="Alt Attribute" id="tbAlt">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" name="btnSubmit" value="Add member" class="form-control" id="formSubmit">
              </div>
            </form>

            <div id="feedback" class="hidden alert alert-danger ">

            </div>



              <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible">
                <?php echo $_SESSION['success']; ?>
                </div>
              <?php endif; ?>

              <?php if(isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger alert-dismissible">
                <?php foreach($_SESSION['errors'] as $err): ?>
                  <?php echo $err . "</br>"; ?>
                <?php endforeach; ?>
                </div>
              <?php endif; ?>

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
    <script type="text/javascript" src="<?php echo BASE_URL; ?>files/js/check.js">

    </script>
</body>


</html>
