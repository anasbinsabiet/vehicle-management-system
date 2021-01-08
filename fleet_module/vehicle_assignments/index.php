<?php
include_once "../navbar.php";
include_once "../sidebar.php";


?>

<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Vehicle</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item active"><a
          href="<?php echo $_SESSION['base_url'] . 'dashboard/index'; ?>">Dashboard</a></li>
      <li class="breadcrumb-item active">Vehicle Assignments</li>
    </ol>
  </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-9">
            <h3 class="card-title">Vehicle Assignments</h3>
          </div>
          <div class="col-lg-3">
            <a href="add.php">
              <button class="btn btn-sm btn-info"><b>Add Vehicle Assignments</b> <i class="fas fa-plus"></i></button>
            </a>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Vehicle</th>
            <th>Operator</th>
            <th>Start Date</th>
            <th>Start Time</th>
            <th>End Date</th>
            <th>End Time</th>
            <th>Comment</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $query = $connect->prepare("SELECT * FROM `vehicle_assignments` WHERE delete_status =0");
          $query->execute();

          $result = $query->fetchAll();

          // echo "<pre>";print_r($result);die();

          foreach ($result as $row) {

            ?>
            <tr>
              <td><?php echo $row['vehicle_assignments_id']; ?></td>

              <td><?php echo get_vehicle_name($connect, $row['vehicle']); ?></td>
              <td><?php echo get_operator_name($connect, $row['operator']) ; ?></td>
              <td><?php echo $row['start_date_time']; ?></td>
              <td><?php echo $row['start_time']; ?></td>
              <td><?php echo $row['end_date_time']; ?></td>
              <td><?php echo $row['end_time']; ?></td>
              <td><?php echo $row['comment']; ?></td>

              <td>
                <a
                  href="add.php?id=<?php echo $row['vehicle_assignments_id']; ?>">
                  <button class="badge badge-info btn-sm">Edit</button>
                </a>
                  
                  <button type="button" name="delete" id="<?php echo $row["vehicle_assignments_id"] ?>"
                                                    class="badge badge-danger  btn-sm delete"
                                                    data-status="<?php echo $row["delete_status"] ?>">Delete
                                            </button>

              </td>

            </tr>
            
            <?php
          }
          ?>

          </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.row -->
  </div><!--/. container-fluid -->
</section>
<!-- /.content -->
<!--//////////////// DATATABLES-->

<?php
include_once "../footer.php";
?>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
  $(function () {
    // $("#example1").DataTable({
    //   "responsive": true,
    //   "autoWidth": false,
    // });
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });



// delete
  $(document).on('click', '.delete', function () {
      var vehicle_assignments_id = $(this).attr('id');
      var btn_action = 'delete';
      if (confirm("Are you sure you want to Delete?")) {
          $.ajax({
              url: "action.php",
              method: "POST",
              data: {vehicle_assignments_id: vehicle_assignments_id, btn_action: btn_action},
              success: function (data) {
                  alert(data); 
                  location.reload();
              }
          })
      } else {
          return false;
      }
  });




</script>
