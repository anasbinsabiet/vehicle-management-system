<?php
include_once "../navbar.php";

include_once "../sidebar.php";
$id = 0;
$id = $_GET['id'];
// echo $id;

// vehicle details

$query = $connect->prepare("SELECT * FROM `vehicle_details` WHERE delete_status =0 AND vehicle_details_id =	'$id' ");
$query->execute();

$vehicle_details = $query->fetchAll();
// echo "<pre>";\

// print_r($vehicle_details);

// vehicles Lifecycle

$query_lifecycle = $connect->prepare("SELECT * FROM `vehicles_lifecycle` WHERE delete_status =0 AND vehicles_lifecycles_id =	'$id' ");
$query_lifecycle->execute();

$vehicles_lifecycle = $query_lifecycle->fetchAll();
// echo "<pre>";\

// print_r($vehicles_lifecycle);
// vehicles Lifecycle

$query_specifications = $connect->prepare("SELECT * FROM `vehicle_specifications` WHERE delete_status =0 AND vehicle_specifications_id =	'$id' ");
$query_specifications->execute();

$vehicle_specifications = $query_specifications->fetchAll();
// echo "<pre>";\

// print_r($vehicle_specifications);
// vehicles Lifecycle

$query_settings = $connect->prepare("SELECT * FROM `vehicle_settings` WHERE delete_status =0 AND vehicle_settings_id =	'$id' ");
$query_settings->execute();

$vehicle_settings = $query_settings->fetchAll();
// echo "<pre>";\

// print_r($vehicle_settings);
?>


<div class="row">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vehicle Details</h5>
        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Vehicle Name</th>
			      <th scope="row"><?php echo $vehicle_details[0]['vehicle_name']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">VIN/SN</th>
			      <th scope="row"><?php echo $vehicle_details[0]['vin_sn']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">License Plate</th>
			      <th scope="row"><?php echo $vehicle_details[0]['license_plate']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Type</th>
            <th><?php echo get_type_name($connect, $vehicle_details[0]['type']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Year</th>
			      <th scope="row"><?php echo $vehicle_details[0]['year']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Make</th>
            <th><?php echo get_make_name($connect, $vehicle_details[0]['make']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Model</th>
            <th><?php echo get_model_name($connect, $vehicle_details[0]['model']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Trim</th>
			      <th scope="row"><?php echo $vehicle_details[0]['trims']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Registration State</th>
			      <th scope="row"><?php echo $vehicle_details[0]['registration_state']; ?></th>
			    </tr>
<!--			    <tr>-->
<!--			      <th scope="col">Service Program</th>-->
<!--			      <th scope="row">--><?php //echo $vehicle_details[0]['service_program']; ?><!--</th>-->
<!--			    </tr>-->
			    <tr>
			      <th scope="col">Status</th>
            <th><?php echo get_status_name($connect, $vehicle_details[0]['status']); ?></th>

          </tr>
			    <tr>
			      <th scope="col">Group</th>
            <th><?php echo get_group_name($connect, $vehicle_details[0]['group']); ?></th>

			    </tr>
			    <tr>
			      <th scope="col">Opearator</th>
            <th><?php echo get_operator_name($connect, $vehicle_details[0]['operator']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Ownership</th>
            <th><?php echo get_ownership_name($connect, $vehicle_details[0]['ownership']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Color</th>
			      <th scope="row"><?php echo $vehicle_details[0]['color']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Body Type</th>
            <th><?php echo get_body_type_name($connect, $vehicle_details[0]['body_type']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Body Subtype</th>
            <th><?php echo get_body_subtype_name($connect, $vehicle_details[0]['body_subtype']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">MSRP</th>
			      <th scope="row"><?php echo $vehicle_details[0]['msrp']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Linked Vehicle</th>
            <th><?php echo get_vehicle_name($connect, $vehicle_details[0]['linked_vehicles']); ?></th>

			    </tr>
			    <tr>
			      <th scope="col">Year</th>
			      <th scope="row"><?php echo $vehicle_details[0]['license_plate']; ?></th>
			    </tr>

			  </thead>
  
			</table>
      </div>
    </div>
  </div>
 <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vehicle Lifecycle</h5>
        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">In-service Date</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['in_service_date']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">In-service Odomiter</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['in_service_odometer']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Estimated Service Life Months</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['estimated_service_life_months']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Estimated Service Life Miles</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['estimated_service_life_miles']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Estimated Resale Value</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['estimated_resale_value']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Out of Service Date</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['out_of_service_date']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Out of Service Odometer</th>
			      <th scope="row"><?php echo $vehicles_lifecycle[0]['out_of_service_odometer']; ?></th>
			    </tr>
			    

			  </thead>
  
			</table>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vehicle Specifications</h5>
        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Width</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['width']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Height</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['height']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Length</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['length']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Interior Volume</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['interior_volume']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Passenger Volume</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['passenger_volume']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Cargo Volume</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['cargo_volume']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Ground Clearence</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['ground_clearence']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Bed Length</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['bed_length']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Curv Weight</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['curv_weight']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Gross Vehicle Weight Rating</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['gross_vehicle_weight_rating']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Towing Capacity</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['towing_capacity']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Max Payload</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['max_payload']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">EPA Capacity</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['epa_city']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">EPA Highway</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['epa_highway']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">EPA Combined</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['epa_combined']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Engine Summary</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['engine_summary']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Engine Brand</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['engine_brand']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Aspiration</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['aspiration']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Block Type</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['block_type']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Bore</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['bore']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Cam Type</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['cam_type']; ?></th>
			    </tr>
				<tr>
			      <th scope="col">Compression</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['compression']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Cylinders</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['cylinders']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Displacement</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['displacement']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Fuel Induction</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['fuel_induction']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Max HP</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['max_hp']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Max Torque</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['max_torque']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Redline RPM</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['redline_rpm']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Stroke</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['stroke']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Valves</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['valves']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Transmission Summary</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['transmission_summary']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Transmission Brand</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['transmission_brand']; ?></th>
			    </tr>
				<tr>
			      <th scope="col">Transmission Type</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['transmission_type']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Transmission Gears</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['transmission_gears']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Drive Type</th>
            <th><?php echo get_drive_type_name($connect, $vehicle_specifications[0]['drive_type']); ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Brake System</th>
             <th><?php echo get_brake_system_name($connect, $vehicle_specifications[0]['brake_system']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Front Track Width</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['front_track_width']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Rear Track Width</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['rear_track_width']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Wheelbase</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['wheelbase']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Front Wheel Diameter</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['front_wheel_diameter']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Rear Wheel Diameter</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['rear_wheel_diameter']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Rear Axle</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['rear_axle']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Front Tire Type</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['front_tire_type']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Front Tire PSI</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['front_tire_psi']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Rear Tire Type</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['rear_tire_type']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Rear Tire PSI</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['rear_tire_psi']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Fuel Type</th>
            <th><?php echo get_fuel_type_name($connect, $vehicle_specifications[0]['fuel_type']); ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Fuel Quality</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['fuel_quality']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Fuel Tank 1 Capacity</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['fuel_tank_one_capacity']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Fuel Tank 2 Capacity</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['fuel_tank_two_capacity']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Oil Capacity</th>
			      <th scope="row"><?php echo $vehicle_specifications[0]['oil_capacity']; ?></th>
			    </tr>
			    		    

			  </thead>
  
			</table>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vehicle Settings</h5>
        <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">Primary Meter</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['primary_meter']; ?></th>
			    </tr>
			     <tr>
			      <th scope="col">Primary Current Reading</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['primary_current_reading']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Primary Average Usage</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['primary_avg_usage']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Secondary Meter</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['secondary_meter']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Secondary Current Reading</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['secondary_current_reading']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Secondary Average Usage</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['secondary_avg_usage']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Fuel Unit</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['fuel_unit']; ?></th>
			    </tr>
			    <tr>
			      <th scope="col">Measurement Unit</th>
			      <th scope="row"><?php echo $vehicle_settings[0]['measurement_unit']; ?></th>
			    </tr>


			  </thead>
  
			</table>
      </div>
    </div>
  </div>
</div>

<?php
include_once "../footer.php";
?>
