<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Projects</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
    <!-- /.col-lg-8 -->


<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 ">
  <table class="table table-hover table-striped table-bordered">
     <tr>

       <th>Number</th>
       <th>Project Name</th>
       <th>Project Link</th>
       <th>Project Picture</th>
       <th>Tags</th>
     </tr>
  </table>
</div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 ">

  <?php if(isset($_SESSION['delSuccess'])): ?>
    <div class="alert alert-success alert-dismissible">
    <?php echo $_SESSION['delSuccess']; ?>
    </div>
  <?php endif; ?>

  <?php if(isset($_SESSION['delError'])): ?>
    <div class="alert alert-danger alert-dismissible">
      <?php echo $_SESSION['delError']; ?>
    </div>
  <?php endif; ?>

    <!-- Forma za dodavanje novog korisnika, prikazuje se uvek osim ako je prosledjen edit parametar -->

    <!-- <?php if(isset($project)): ?> -->
      <p class="lead">Edit project</p>
    <form method="post" action="<?php echo BASE_URL;?>admin/doEdit" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" name="tbNumber" value="" class="form-control" placeholder="Number" id="tbNumber">
      </div>
      <div class="form-group">
        <input type="text" name="tbProjectName" value="" class="form-control" placeholder="Project Name"id="tbProjectName">
      </div>
      <div class="form-group">
        <input type="text" name="tbProjectLink" value="" class="form-control" placeholder="Project Link" id="tbProjectLink">
      </div>
      <p><strong>Project picture :</strong></p>
      <div class="form-group">
        <input type="file" name="tbProjectPicture" value="" class="form-control" id="tbProjectPicture">
      </div>
      <div class="form-group">
        <input type="checkbox" name="" value="">
      </div>
        <p><strong>Project tags :</strong></p>
      <div class="form-group">
        <input type="submit" class="btn btn-warning" name="btnSubmit" value="Edit project" class="form-control" id="submitProject">
        <a href="<?php echo BASE_URL;?>admin/projects"><input type="button" name="" value="Cancel" class="btn btn-danger"></a>
      </div>
    </form>

    <div id="feedback" class="hidden alert alert-danger ">

    </div>

    <!-- <?php else: ?> -->
      <p class="lead">New project</p>
    <form method="post" action="<?php echo BASE_URL;?>admin/doEdit" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" name="tbNumber" value="" class="form-control" placeholder="Number" id="tbNumber">
      </div>
      <div class="form-group">
        <input type="text" name="tbProjectName" value="" class="form-control" placeholder="Project Name"id="tbProjectName">
      </div>
      <div class="form-group">
        <input type="text" name="tbProjectLink" value="" class="form-control" placeholder="Project Link" id="tbProjectLink">
      </div>
      <p><strong>Project picture :</strong></p>
      <div class="form-group">
        <input type="file" name="tbProjectPicture" value="" class="form-control" id="tbProjectPicture">
      </div>
      <p><strong>Project tags :</strong></p>
      <div class="form-group">
        <input type="checkbox" name="" value="">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Add project" class="form-control" id="submitProject">
      </div>
    </form>

    <div id="feedback" class="hidden alert alert-danger ">

    </div>
  <!-- <?php endif ?> -->



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
