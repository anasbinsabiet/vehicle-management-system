<?php
include_once "../navbar.php";
include_once "../sidebar.php";

?>

<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">User Profile</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item active"><a
          href="<?php echo $_SESSION['base_url'] . 'dashboard/index'; ?>">Dashboard</a></li>
      <li class="breadcrumb-item active">User Profile</li>
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
          <div class="col-lg-10">
            <h3 class="card-title">User Profile List</h3>
          </div>
          <div class="col-lg-2">
            <a href="add.php">
              <button class="btn btn-sm btn-info"><b><i class="fas fa-plus"></i> Add User</b> </button>
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
            <th>User Image</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $query = $connect->prepare("SELECT * FROM `basic_information` WHERE delete_status =0");
          $query->execute();

          $result = $query->fetchAll();

          // echo "<pre>";print_r($result);die();

          foreach ($result as $row) {

            ?>
            <tr>
              <td><?php echo $row['bi_id']; ?></td>
              <td><img src="<?php echo $row['photo']; ?>" width='70px'></td>
              <td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td>
                <a
                  href="add.php?id=<?php echo $row['bi_id']; ?>">
                  <button class="badge badge-info btn-sm">Edit</button>
                </a>


                <br>

                <button type="button" name="delete" id="<?php echo $row["bi_id"] ?>"
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




            $(document).on('click', '.delete', function () {
                var bi_id = $(this).attr('id');
                var um_id = $(this).attr('id');
                var ci_id = $(this).attr('id');
                var pi_id = $(this).attr('id');
                var status = $(this).data("status");
                var btn_action = 'delete';
                // alert(bi_id);
                // alert(um_id);
                // alert(ci_id);
                // alert(pi_id);
                if (confirm("Are you sure you want to Delete?")) {
                    $.ajax({
                        url: "action.php",
                        method: "POST",
                        data: {bi_id: bi_id, um_id: um_id, ci_id: ci_id, pi_id: pi_id, status: status, btn_action: btn_action},
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
