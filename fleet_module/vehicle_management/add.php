<?php
include_once "../navbar.php";

include_once "../sidebar.php";
$id = 0;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

// echo $id;
?>

<div class="row">
  <div class="col-lg-12">

    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
            <h3 class="panel-title ml-3" id="heading">New Vehicle</h3>
            <?php //echo $_SESSION['base_url']; ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
            <a href="index.php">
              <button class="btn btn-xs btn-info mr-2"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Back</button>
            </a>
          </div>
        </div>
      </div>
<span id="alert_action"></span>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-2">
              <!-- general form elements -->


              <div class="col-12">
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Details</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Lifecycles</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Specifications</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>

                </div>
              </div>


            </div>

            <div class="col-10">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="card card-warning">
                    <div class="ml-4 mt-4">
                      <h3 class="card-title ml-3">Identification</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                      <form  method="post" id="vehicle_details" class="vehicle_details">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="vehicle_name">Vehicle Name *</label>
                            <input type="hidden" value="" class="form-control" name="vehicle_details_id" id="vehicle_details_id">
                            <input type="hidden" value="" class="form-control" name="vehicles_lifecycles_id" id="vehicles_lifecycles_id">
                            <input type="hidden" value="" class="form-control" name="vehicle_specifications_id" id="vehicle_specifications_id">
                            <input type="hidden" value="" class="form-control" name="vehicle_settings_id" id="vehicle_settings_id">
                            <input type="text" class="form-control" name="vehicle_name" id="vehicle_name">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Enter a nickname to distinguish this vehicle in System.&nbsp;</span>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <!-- text input -->
                              <div class="form-group">
                                <label for="vin_sn">VIN/SN</label>
                                <input type="text" name="vin_sn" id="vin_sn" class="form-control">
                              </div>
                            </div>
<!--                            <div class="col-sm-2">-->
<!--                              <div class="form-group">-->
<!--                                <label></label>-->
<!--                                <input style="margin-top: 8px;" type="text" class="form-control" placeholder="Decode VIN" disabled>-->
<!--                              </div>-->
<!--                            </div>-->

                          </div>
                          <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Vehicle Identification Number or Serial Number.&nbsp;</span>


                          <div class="form-group">
                            <label for="license_plate">License Plate</label>
                            <input type="text" class="form-control" name="license_plate" id="license_plate">
                          </div>
                          <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control" id="type">
                              <?php echo filled_type_name($connect); ?>
                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Categorize this vehicle</span>

                          </div>
                          <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" name="year" id="year">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. 1999, 2012, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="make">Make</label>
                            <select name="make" class="form-control" id="make">
                              <?php echo filled_make_name($connect); ?>


                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. Toyota, GMC, Chevrolet, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="model">Model</label>
                            <select name="model" class="form-control" id="model">
                              <?php echo filled_model_name($connect); ?>

                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. 4Runner, Yukon, Silverado, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="trims">Trim</label>
                            <input type="text" class="form-control" name="trims" id="trims">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. SE, LE, XLE, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="registration_state">Registration State/Province</label>
                            <input type="text" class="form-control" name="registration_state" id="registration_state">
                          </div>

                          <div class="form-group">
                            <label for="photo">Photo</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="photo" id="photo">
                                <label class="custom-file-label" for="photo">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <img src="" alt="" id="targetLayer" name="targetLayer" width="100px">
                                <input type="hidden" id="photo_url" name="photo_url">
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<!--                    <div class="card">-->
<!--                      <div class="card-body">-->
<!---->
<!--                        <div class="ml-3 mt-2">-->
<!--                          <h3 class="card-title">Preventative Maintenance</h3>-->
<!--                          <br>-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                          <div class="card">-->
<!--                            <div class="card-body">-->
<!--                              <span class="font-sans m-0 text-sm  text-left font-normal normal-case">To apply the Manufacturer’s Recommended Service Schedule to your vehicle, first decode the VIN above. Alternatively, choose an existing Service Program from your account from the dropdown below.</span>-->
<!--                            </div>-->
<!--                          </div>-->
<!---->
<!--                          <div class="form-group">-->
<!--                            <label for="service_program">Service Program</label>-->
<!--                            <select name="service_program" class="form-control" id="service_program">-->
<!--                              <option value="Common service">Common service</option>-->
<!--                              <option value="Common">Common</option>-->
<!--                              <option value="All">All</option>-->
<!--                            </select>-->
                  <input type="hidden" name="service_program" id="service_program">
<!--                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">A Service Program applies Service Reminders to vehicles that share common preventative maintenance schedules.</span>-->
<!---->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
                    <div class="card">
                      <div class="card-body">
                        <div class="ml-3 mt-2">
                          <h3 class="card-title">Classification</h3>
                          <br>
                        </div>
                        <div class="card-body">

                          <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status">
                              <?php echo filled_status_name($connect); ?>


                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Vehicle's Status.</span>

                          </div>
                          <div class="form-group">
                            <label for="group">Group</label>
                            <select name="group" class="form-control" id="group">
                              <?php echo filled_group_name($connect); ?>

                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Vehicle's Group.</span>

                          </div>
                          <div class="form-group">
                            <label for="operator">Operator</label>
                            <select name="operator" class="form-control" id="operator">
                              <?php echo filled_operator_name($connect); ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="ownership">Ownership</label>
                            <select name="ownership"  class="form-control" id="ownership">
                              <?php echo filled_ownership_name($connect); ?>

                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="ml-3 mt-2">
                          <h3 class="card-title">Additional Details</h3>
                          <br>
                        </div>
                        <div class="card-body">
                          
                          <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" name="color" id="color">
                          </div>
                          <div class="form-group">
                            <label for="body_type">Body Type</label>
                            <select name="body_type" class="form-control" id="body_type">
                              <?php echo filled_body_type_name($connect); ?>

                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. Convertible, Coupe, Pickup, Sedan, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="body_subtype">Body Subtype</label>
                            <select name="body_subtype" class="form-control" id="body_subtype">
                              <?php echo filled_body_subtype_name($connect); ?>

                            </select>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">e.g. Extended Cab, Crew Cab, etc.</span>

                          </div>
                          <div class="form-group">
                            <label for="msrp">MSRP</label>
                            <input type="text" class="form-control" name="msrp" id="msrp">
                          </div>
                          <div class="form-group">
                            <label for="linked_vehicles">Linked Vehicles</label>
                            <select name="linked_vehicles" class="form-control" id="linked_vehicles">
                              <?php echo filled_vehicle_name($connect); ?>
                            </select>
                          </div>
                        </div>
                        <!-- /.card-body -->



                      </div>
                      <!-- /.card-body -->
                    </div>

                  </div>


                  <!-- Other Forms -->
                  <!-- lifecycle forms -->
                  <?php include 'vehicle_lifecycle.php'; ?>

                  <!-- lifecycle forms -->
                  <!-- specificatoins form here -->
                  <?php include 'vehicle_specification.php'; ?>

                  <!-- specificatoins form here -->
                  <!-- settings form start from here -->
                  <?php include 'vehicle_settings.php'; ?>
                </div>
              </div>

              <div class="float-right">
                <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add" />
                <button type="submit" id="action" name="action" class="btn btn-primary">Add Vehicle</button>
                <!-- <button type="submit">Submit</button> -->
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

</div>
</div>
</section>
</div>
</div>


<?php
include_once "../footer.php";
?>
<script type="text/javascript">

  $(document).ready(function (e) {
//////////////////// Image / File Upload

// $("#targetLayer").attr("style","visibility:visible");


$('#photo').change(function () {

$("#targetLayer").attr("style","visibility:visible");


  var file_data = $('#photo').prop('files')[0];
  var form_data = new FormData();
  // alert(file_data);
  // alert(form_data);
  form_data.append('photo', file_data);
  $.ajax({
    url: "action.php",
    type: "POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    success: function (data) {
      $("#targetLayer").attr('src', data);
      $("#photo_url").val(data);
    }
  });
});

//////////////////// Image / File Upload END


});
</script>
<?php if(isset($_GET['id'])){ ?>
  <script type="text/javascript">
    $(document).ready(function () {


      var url = document.URL;
    // alert(url);
    var id = url.substring(url.lastIndexOf('=') + 1);
    // alert(id);
    var vehicle_details_id = '';
    vehicle_details_id = id;
    // vehicle_details_id = Math.round(vehicle_details_id-.5);
    // vehicle_details_id = Math.round(vehicle_details_id);
    // alert(vehicle_details_id);


    if (vehicle_details_id != Number.isNaN(NaN) || vehicle_details_id != '') {

      // alert("ID = "+vehicle_details_id);

      var btn_action = 'fetch_single';

      $.ajax({
        url: 'action.php',
        method: "POST",
        data: {vehicle_details_id: vehicle_details_id, btn_action: btn_action},
        dataType: "json",
        success: function (data) {
          // alert(vehicle_details_id);
          // alert(data);

          $('#vehicle_details_id').val(data.vehicle_details_id);
// vehicle details
$('#vehicle_name').val(data.vehicle_name);
$('#vin_sn').val(data.vin_sn);
$('#license_plate').val(data.license_plate);
$('#type').val(data.type);
$('#year').val(data.year);
$('#make').val(data.make);
$('#model').val(data.model);
$('#trims').val(data.trims);
$('#registration_state').val(data.registration_state);
$('#targetLayer').attr('src',data.photo);
$('#photo_url').val(data.photo);
$('#service_program').val(data.service_program);
$('#status').val(data.status);
$('#group').val(data.group);
$('#operator').val(data.operator);
$('#ownership').val(data.ownership);
$('#color').val(data.color);
$('#body_type').val(data.body_type);
$('#body_subtype').val(data.body_subtype);
$('#msrp').val(data.msrp);
$('#linked_vehicles').val(data.linked_vehicles);
// vehicle lifecycle
$('#vehicles_lifecycles_id').val(data.vehicles_lifecycles_id);
$('#in_service_date').val(data.in_service_date);
$('#in_service_odometer').val(data.in_service_odometer);
$('#estimated_service_life_months').val(data.estimated_service_life_months);
$('#estimated_service_life_miles').val(data.estimated_service_life_miles);
$('#estimated_resale_value').val(data.estimated_resale_value);
$('#out_of_service_date').val(data.out_of_service_date);
$('#out_of_service_odometer').val(data.out_of_service_odometer);

          // end vehicle lifecycle

          // vehicle specificatoins
          $('#vehicle_specifications_id').val(data.vehicle_specifications_id);
          $('#width').val(data.width);
          $('#height').val(data.height);
          $('#length').val(data.length);
          $('#interior_volume').val(data.interior_volume);
          $('#passenger_volume').val(data.passenger_volume);
          $('#cargo_volume').val(data.cargo_volume);
          $('#ground_clearence').val(data.ground_clearence);
          $('#bed_length').val(data.bed_length);
          $('#curv_weight').val(data.curv_weight);
          $('#gross_vehicle_weight_rating').val(data.gross_vehicle_weight_rating);
          $('#towing_capacity').val(data.towing_capacity);
          $('#max_payload').val(data.max_payload);
          $('#epa_city').val(data.epa_city);
          $('#epa_highway').val(data.epa_highway);
          $('#epa_combined').val(data.epa_combined);
          $('#engine_summary').val(data.engine_summary);
          $('#engine_brand').val(data.engine_brand);
          $('#aspiration').val(data.aspiration);
          $('#block_type').val(data.block_type);
          $('#bore').val(data.bore);
          $('#cam_type').val(data.cam_type);
          $('#compression').val(data.compression);
          $('#cylinders').val(data.cylinders);
          $('#displacement').val(data.displacement);
          $('#fuel_induction').val(data.fuel_induction);
          $('#max_hp').val(data.max_hp);
          $('#max_torque').val(data.max_torque);
          $('#redline_rpm').val(data.redline_rpm);
          $('#stroke').val(data.stroke);
          $('#valves').val(data.valves);
          $('#transmission_summary').val(data.transmission_summary);
          $('#transmission_brand').val(data.transmission_brand);
          $('#transmission_type').val(data.transmission_type);
          $('#transmission_gears').val(data.transmission_gears);
          $('#drive_type').val(data.drive_type);
          $('#brake_system').val(data.brake_system);
          $('#front_track_width').val(data.front_track_width);
          $('#rear_track_width').val(data.block_type);
          $('#wheelbase').val(data.wheelbase);
          $('#front_wheel_diameter').val(data.front_wheel_diameter);
          $('#rear_wheel_diameter').val(data.rear_wheel_diameter);
          $('#rear_axle').val(data.rear_axle);
          $('#front_tire_type').val(data.front_tire_type);
          $('#front_tire_psi').val(data.front_tire_psi);
          $('#rear_tire_type').val(data.rear_tire_type);
          $('#rear_tire_psi').val(data.rear_tire_psi);
          $('#fuel_type').val(data.fuel_type);
          $('#fuel_quality').val(data.fuel_quality);
          $('#fuel_tank_one_capacity').val(data.fuel_tank_one_capacity);
          $('#fuel_tank_two_capacity').val(data.fuel_tank_two_capacity);
          $('#oil_capacity').val(data.oil_capacity);

          // end vehicle specificatoins
          // vehicle settings
          $('#vehicle_settings_id').val(data.vehicle_settings_id);

          if (data.primary_meter=='Miles') {
            $('.primary_meter1').val(data.primary_meter).prop('checked', true);
          }else if (data.primary_meter=='Kilometers'){
            $('.primary_meter2').val(data.primary_meter).prop('checked', true);
          }else{
            $('.primary_meter3').val(data.primary_meter).prop('checked', true);
          }

          $('#primary_current_reading').val(data.primary_current_reading);
          $('#primary_avg_usage').val(data.primary_avg_usage);

          if (data.secondary_meter=='Miles') {
            $('.secondary_meter1').val(data.secondary_meter).prop('checked', true);
          }else if (data.secondary_meter=='Kilometers'){
            $('.secondary_meter2').val(data.secondary_meter).prop('checked', true);
          }else{
            $('.secondary_meter3').val(data.secondary_meter).prop('checked', true);
          }

          $('#secondary_current_reading').val(data.secondary_current_reading);
          $('#secondary_avg_usage').val(data.secondary_avg_usage);

          if (data.fuel_unit=='Gallons (BD)') {
            $('.fuel_unit1').val(data.fuel_unit).prop('checked', true);
          }else if (data.fuel_unit=='Gallons (UK)'){
            $('.fuel_unit2').val(data.fuel_unit).prop('checked', true);
          }else{
            $('.fuel_unit3').val(data.fuel_unit).prop('checked', true);
          }

          if (data.measurement_unit=='Imperial (inches, pounds, gallons, miles)') {
            $('.measurement_unit1').val(data.measurement_unit).prop('checked', true);
          }else{
            $('.measurement_unit2').val(data.measurement_unit).prop('checked', true);
          }

          // end vehicle settings
          $('#heading').html("Edit Vehicle");
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


    // alert("LOL");
////////////// Insert vehicle details
$(document).on('submit', '#vehicle_details', function (event) {
  event.preventDefault();
  // alert("Hello");
  var form_data = $(this).serialize();
  // alert(form_data);
  $.ajax({
    url: "action.php",
    method: "POST",
    data: form_data,
    success: function (data) {
      $('#vehicle_details')[0].reset();
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
