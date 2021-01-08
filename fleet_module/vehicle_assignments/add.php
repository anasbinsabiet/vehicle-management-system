<?php
include_once "../navbar.php";

include_once "../sidebar.php";


$id = 0;

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

// echo $id;
?>



<?php
include_once "../footer.php";
?>

<div class="container">
  <div class="col-sm-9 mx-auto">
    <div class="card">

      <div class="card-body">

<span id="alert_action"></span>

    <div>
    <div>
      <div>
        <div class="row">
          <div class="col-md-6">
            <h5 id="heading">Add Assignments</h5>
          </div>
          <div class="col-md-6">
            <div class="float-right">
              <a href="index.php">
                <button class="btn btn-xs btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Back</button>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-body">

        <form class="vehicle_assignments" id="vehicle_assignments" method="POST">
          <input type="hidden" class="form-control" name="vehicle_assignments_id" id="vehicle_assignments_id">
            <div class="form-group">
              <label for="vehicle">Vehicle *</label>
                        
              <select class="form-control" id="vehicle" name="vehicle">

                <?php echo filled_vehicle_name($connect); ?>


              </select>
            </div>
            <div class="form-group">
              <label for="operator">Operator *</label>
              <select class="form-control" id="operator" name="operator">
                <?php echo filled_operator_name($connect); ?>

              </select>
            </div>
          <!-- taken -->
          <div class="form-group datetime_picker optional vehicle_assignment_started_at">
    <div>
        <label class="control-label datetime_picker optional" for="vehicle_assignment_started_at">
            Start Date/Time
            <i rel="tooltip" class="material-icons md-info_outline" title="" data-container="body" data-original-title="When was the contact assigned this vehicle? Leave blank if the vehicle has always been assigned to this contact."></i>
        </label>
    </div>
    <div class="split-datetime-picker date" placeholder="YYYY-MM-DD" data-date-format="YYYY-MM-DD" data-date-stepping="1" data-date-view-mode="days" data-date-side-by-side="true" data-date-time-zone="" data-time-format="hh:mm A">
        <div class="row">
            <div class="col-sm-7 date-picker">
                <span class="input-wrapper">
                    <div class="icon-wrapper"><i class="material-icons">Date Range</i></div>
                    <input type="date" class="form-control date-component" name="start_date_time" id="start_date_time" />
                </span>
            </div>
            <div class="col-sm-5 time-picker">
                <span class="input-wrapper">
                    <div class="icon-wrapper"><i class="material-icons">Access Time</i></div>
                    <input type="time" class="form-control time-component" name="start_time" id="start_time"/>
                </span>
            </div>
        </div>
        
    </div>
    <p class="help-block no-b-margin">(Ex: 2020-12-10 06:35 pm)</p>
</div>
<div class="form-group datetime_picker optional vehicle_assignment_ended_at">
    <div>
        <label class="control-label datetime_picker optional" for="vehicle_assignment_ended_at">
            End Date/Time <i rel="tooltip" class="material-icons md-info_outline" title="" data-container="body" data-original-title="(optional) When did/should the assignment end? (can be past or future)"></i>
        </label>
    </div>
    <div class="split-datetime-picker date" placeholder="YYYY-MM-DD" data-date-format="YYYY-MM-DD" data-date-stepping="1" data-date-view-mode="days" data-date-side-by-side="true" data-date-time-zone="" data-time-format="hh:mm A">
        <div class="row">
            <div class="col-sm-7 date-picker">
                <span class="input-wrapper">
                    <div class="icon-wrapper"><i class="material-icons">Date Range</i></div>
                    <input type="date" class="form-control date-component" name="end_date_time" id="end_date_time" />
                </span>
            </div>
            <div class="col-sm-5 time-picker">
                <span class="input-wrapper">
                    <div class="icon-wrapper"><i class="material-icons">Access Time</i></div>
                    <input type="time" class="form-control time-component" name="end_time" id="end_time"/>
                </span>
            </div>
        </div>

    </div>
    <p class="help-block no-b-margin">(Ex: 2020-12-10 06:35 pm)</p>
</div>

          <div class="media media-comment no-b-margin">
              <div class="media-left">
              <svg aria-alt="mih" aria-hidden="" aria-label="mih" aria-presentation="true" class="spark-icon-placeholder-wrapper spark-icon-placeholder ui-placeholder" height="32" version="1.1" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" fill="#78858A" r="16"></circle><text alignment-baseline="central" dominant-baseline="central" fill="#ffffff" font-size="10px" text-anchor="middle" x="16" y="16">MH</text></svg>
              </div>
              <div class="media-body">
              <div class="form-group">
              <textarea class="form-control" rows="2" placeholder="Add an optional comment..." name="comment" id="comment"></textarea>
              </div>
              </div>
              </div>
          <!-- taken -->
          <div class="float-right">
                <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add"/>
                <button type="submit" id="action" name="action" class="btn btn-primary">Add Assignments</button>
          </div>
        </form>
      </div>
</div>
</div>

<?php if(isset($_GET['id'])){ ?>
<script type="text/javascript">
  $(document).ready(function () {


    var url = document.URL;
    // alert(url);
    var id = url.substring(url.lastIndexOf('=') + 1);
    // alert(id);
    var vehicle_assignments_id = '';
    vehicle_assignments_id = id;
    // vehicle_assignments_id = Math.round(vehicle_assignments_id-.5);
    // vehicle_assignments_id = Math.round(vehicle_assignments_id);
    // alert(vehicle_assignments_id);


    if (vehicle_assignments_id != Number.isNaN(NaN) || vehicle_assignments_id != '') {

      // alert("ID = "+vehicle_assignments_id);

      var btn_action = 'fetch_single';

      $.ajax({
        url: 'action.php',
        method: "POST",
        data: {vehicle_assignments_id: vehicle_assignments_id, btn_action: btn_action},
        dataType: "json",
        success: function (data) {
          // alert(vehicle_assignments_id);
          // alert(data);

          $('#vehicle_assignments_id').val(data.vehicle_assignments_id);

          $('#vehicle').val(data.vehicle);
          $('#operator').val(data.operator);
          $('#start_date_time').val(data.start_date_time);
          // $('#color').val(data.color).attr("checked", "checked");;
          // $('#color input[type=radio]:checked').val();

          $('#start_time').val(data.start_time);
          $('#end_date_time').val(data.end_date_time);
          $('#end_time').val(data.end_time);
          $('#comment').val(data.comment);
        
          $('#heading').html("Edit Assignments");
          $('#action').val('Edit');
          $('#action').html('Edit');
          $('#btn_action').val('Edit');
        }
      })

    }


  });

</script>

<?php } ?>

<script type="text/javascript">
  $(document).ready(function () {

// ass assignments

 $(document).on('submit', '#vehicle_assignments', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#vehicle_assignments')[0].reset();
          $('#alert_action').fadeIn().html('<div style="margin-top:30px; margin-bottom:0px;" class="alert alert-success">' + data + '</div>');
          
          // alert(data);
        }
      })
          $('html, body').animate({
        scrollTop: $(".content-header").offset().top
    }, 200);


    });




 
  });


</script>
