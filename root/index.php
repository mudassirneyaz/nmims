<?php require_once('nav.php'); ?> 
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> News & Events </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="#" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>ID</th>
                  <th>Event Name</th>
                  <th>Events Description</th>
                  <th>Event image</th>
                  <th>Event Date</th>
                  <th>Time Uploaded</th>  
                </tr>
              </thead>
              <tfoot>

                <tr>
                   <th>ID</th>
                  <th>Event Name</th>
                  <th>Events Description</th>
                  <th>Event image</th>
                  <th>Event Date</th>
                  <th>Time Uploaded</th>  
                </tr>
              </tfoot>
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * FROM `events` ORDER BY id DESC';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                           <tr>
                              <th>
                              <?php echo $row['id']; ?>
                              </th>
                              <td>
                              <?php echo $row['eventname']; ?>
                              </td>
                              <td>
                              <?php echo $row['event_desc']; ?>
                              </td>
                              <td>
                              <?php echo $row['event_img']; ?>
                              </td>
                              <td>
                              <?php echo $row['event_date']; ?>
                              </td>
                              <td>
                              <?php echo $row['upload_date']; ?>
                              </td>
                           </tr>
                        </tbody>

                        <?php
$count++;
}
} else {
echo '0 results';
}
?>
              
            </table>
          </div>
        </div>
       <!--  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © All rights reserved</small>
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
