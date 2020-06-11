<?php require_once('nav.php') ; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Product Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Create Product </h1>
        </div> 
         
         <div class="col-md-8">
            
<form method="post" action="pserver.php" enctype="multipart/form-data">

  <div class="form-group">
    <label> Update Date</label>
    <input type="date" class="form-control" name="date" required>
  </div>

  <div class="form-group">
    <label>Update Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Give name of event here" required>
  </div>

 <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="desc" placeholder="Please give description in less than 1000 charcters">
  </div>

  <div class="form-group">
    <label>Upload Update related image here</label>
    <input type="file" class="form-control" name="imageFile[]" value="Post">
  </div>

  <button type="submit" class="btn btn-primary" name="update_submit">Submit</button>
</form> 

         </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
