<?php
include_once "../navbar.php";

include_once "../sidebar.php";
$id = 0;

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

// echo $id;
?>

<span id="alert_action"></span>
<div class="row">
  <div class="col-lg-12">

    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
            <h3 class="panel-title">Vehicle Management</h3>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
            <!-- <button type="button" name="add" id="add_button" class="btn btn-primary btn-xs">Add</button> -->
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
<div class="col-md-3">
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

                  <div class="col-9">
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
                                  <input type="text" class="form-control" name="vehicle_name" id="vehicle_name">
                                  <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Enter a nickname to distinguish this vehicle in System.&nbsp;</span>
                                </div>
                                <div class="row">
                                  <div class="col-sm-10">
                                    <!-- text input -->
                                    <div class="form-group">
                                      <label for="vin_sn">VIN/SN</label>
                                      <input type="text" name="vin_sn" id="vin_sn" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="form-group">
                                      <label></label>
                                      <input style="margin-top: 8px;" type="text" class="form-control" placeholder="Decode VIN" disabled>
                                    </div>

                                  </div>

                                </div>
                                <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Vehicle Identification Number or Serial Number.&nbsp;</span>


                                <div class="form-group">
                                  <label for="license_plate">License Plate</label>
                                  <input type="text" class="form-control" name="license_plate" id="license_plate">
                                </div>
                                <div class="form-group">
                                  <label for="type">Type</label>
                                  <select name="type" class="form-control" id="type">
                                    <option value="Atv">Atv</option>
                                    <option value="Boat">Boat</option>
                                    <option value="Bus">Bus</option>
                                    <option value="Car">Car</option>
                                    <option value="Forklift">Forklift</option>
                                    <option value="Generator">Generator</option>
                                    <option value="Loader">Loader</option>
                                    <option value="Motorcycle">Motorcycle</option>
                                    <option value="Mower">Mower</option>
                                    <option value="Other">Other</option>
                                    <option value="Pickup Truck">Pickup Truck</option>
                                    <option value="Semi Truck">Semi Truck</option>
                                    <option value="Suv">Suv</option>
                                    <option value="Trailer">Trailer</option>
                                    <option value="Van">Van</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="year">Year</label>
                                  <input type="text" class="form-control" name="year" id="year">
                                </div>
                                <div class="form-group">
                                  <label for="make">Make</label>
                                  <select name="make" class="form-control" id="make">
                                    <option value="AMC">AMC</option>
                                    <option value="Audi">Audi</option>
                                    <option value="BCI">BCI</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Capacity">Capacity</option>
                                    <option value="AutoCar">AutoCar</option>

                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="model">Model</label>
                                  <select name="model" class="form-control" id="model">
                                    <option value="Cascadia">Cascadia</option>
                                    <option value="Reefer">Reefer</option>
                                    <option value="Prius">Prius</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="trims">Trim</label>
                                  <input type="text" class="form-control" name="trims" id="trims">
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
                              <div class="ml-3 mt-2">
                                <h3 class="card-title">Preventative Maintenance</h3>
                                <br>
                              </div>
                              <div class="card-body">


                                <div class="form-group">
                                  <label for="service_program">Service Program</label>
                                  <select name="service_program" class="form-control" id="service_program">
                                    <option value="Common service">Common service</option>
                                    <option value="Common">Common</option>
                                    <option value="All">All</option>
                                  </select>
                                </div>
                              </div>
                              <div class="ml-3 mt-2">
                                <h3 class="card-title">Classification</h3>
                                <br>
                              </div>
                              <div class="card-body">

                                <div class="form-group">
                                  <label for="status">Status</label>
                                  <select name="status" class="form-control" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="group">Group</label>
                                  <select name="group" class="form-control" id="group">
                                    <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                    <option value="London">London</option>
                                    <option value="Asia">Asia</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="operator">Operator</label>
                                  <select name="operator" class="form-control" id="operator">
                                    <option value="John Smith">John Smith</option>
                                    <option value="Ben jackson">Ben jackson</option>
                                  </select>
                                </div>
                              </div>
                              <div class="ml-3 mt-2">
                                <h3 class="card-title">Additional Details</h3>
                                <br>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="ownership">Ownership</label>
                                  <select name="ownership"  class="form-control" id="ownership">
                                    <option value="Owned">Owned</option>
                                    <option value="Listed">Listed</option>
                                    <option value="Rented">Rented</option>
                                    <option value="Customer">Customer</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="color">Color</label>
                                  <input type="text" class="form-control" name="color" id="color">
                                </div>
                                <div class="form-group">
                                  <label for="body_type">Body Type</label>
                                  <select name="body_type" class="form-control" id="body_type">
                                    <option value="Conventional">Conventional</option>
                                    <option value="Full Size">Full Size</option>
                                    <option value="Hatch back">Hatch back</option>
                                    <option value="Pick Up">Pick Up</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="body_subtype">Body Subtype</label>
                                  <select name="body_subtype" class="form-control" id="body_subtype">
                                    <option value="Cargo">Cargo</option>
                                    <option value="Crew Cab">Crew Cab</option>
                                    <option value="Sleeper Cab">Sleeper Cab</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="msrp">MSRP</label>
                                  <input type="text" class="form-control" name="msrp" id="msrp">
                                </div>
                                <div class="form-group">
                                  <label for="linked_vehicles">Linked Vehicles</label>
                                  <select name="linked_vehicles" class="form-control" id="linked_vehicles">
                                    <option value="Toyota">Toyota</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Hyster">Hyster</option>
                                  </select>
                                </div>
                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer float-right">
              <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add"/>
            <button type="submit" id="action" name="action" class="btn btn-primary">Add Vehicle</button>
                                        <!-- <button type="submit">Submit</button> -->
                                      </div>
                                    </form>
                                  </div>
                                  <!-- /.card-body -->
                                </div>

                              </div>
                              

                              <!-- Other Forms -->
<!-- lifecycle forms -->
                              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <!-- lifecycle -->
                                <!-- general form elements disabled -->
                                <div class="card card-warning">
                                  <div class="ml-4 mt-4">
                                    <h3 class="card-title ml-3">In-Service</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <form role="form" method="post" id="vehicles_lifecycle">
                                      <div class="card-body">
                                        <div class="form-group">
                                          <label for="in_service_date">In-Service Date</label>
                                          <input type="date" class="form-control" name="in_service_date" id="in_service_date">
                                        </div>


                                        <!-- text input -->
                                        <div class="form-group">
                                          <label for="in_service_odometer">In-Service Odometer</label>
                                          <input type="text" name="in_service_odometer" id="in_service_odometer" class="form-control">
                                        </div>
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Vehicle Life Estimates</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">

                                        <div class="form-group">
                                          <label for="estimated_service_life_months">Estimated Service Life in Months</label>
                                          <input type="text" name="estimated_service_life_months" id="estimated_service_life_months" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label for="estimated_service_life_miles">Estimated Service Life in Miles</label>
                                          <input type="text" name="estimated_service_life_miles" id="estimated_service_life_miles" class="form-control">
                                        </div>
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Out-of-Service</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">

                                        <div class="form-group">
                                          <label for="estimated_resale_value">Estimated Resale Value</label>
                                          <input type="text" class="form-control" name="estimated_resale_value" id="estimated_resale_value">
                                        </div>
                                        <div class="form-group">
                                          <label for="out_of_service_date">Out-of-Service Date</label>
                                          <input type="date" class="form-control" name="out_of_service_date" id="out_of_service_date">
                                        </div>
                                        <div class="form-group">
                                          <label for="out_of_service_odometer">Out-of-Service Odometer</label>
                                          <input type="text" class="form-control" name="out_of_service_odometer" id="out_of_service_odometer">
                                        </div>


                                      </div>
                                      <!-- /.card-body -->

                                      <div class="card-footer float-right">
              <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add_lifecycles"/>
            <button type="submit" id="action" name="action" class="btn btn-primary">Add Vehicle</button>
                                      </div>
                                    </form>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <!-- lifecycle -->
                              </div>
                              
<!-- lifecycle forms -->
<!-- specificatoins form here -->
                              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <!-- specificatoins -->
                                <!-- general form elements disabled -->
                                <div class="card card-warning">
                                  <div class="ml-4 mt-4">
                                    <h3 class="card-title ml-3">Dimensions</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <form role="form" method="post" id="vehicle_specificatoins">
                                      <div class="card-body">
                                        <!-- new dimension by imran -->
                                        <div class="row">
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="width">Width</label>
                                              <input type="text" name="width" id="width" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="height">Height</label>
                                              <input type="text" name="height" id="height" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="length">Length</label>
                                              <input type="text" name="length" id="length" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="interior_volume">Interior Volume</label>
                                              <input type="text" name="interior_volume" id="interior_volume" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="passenger_volume">Passenger Volume</label>
                                              <input type="text" name="passenger_volume" id="passenger_volume" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="cargo_volume">Cargo Volume</label>
                                              <input type="text" name="cargo_volume" id="cargo_volume" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="ground_clearence">Ground Clearance </label>
                                              <input type="text" name="ground_clearence" id="ground_clearence" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-group">
                                              <label for="bed_length">Bed Length</label>
                                              <input type="text" name="bed_length" id="bed_length" class="form-control">
                                            </div>
                                          </div>

                                        </div>
                                        <!-- new dimension by imran  -->
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Weight</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label for="curv_weight">Curb Weight</label>
                                              <input type="text" name="curv_weight" id="curv_weight" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="gross_vehicle_weight_rating">Gross Vehicle Weight Rating</label>
                                              <input type="text" name="gross_vehicle_weight_rating" id="gross_vehicle_weight_rating" class="form-control">
                                            </div>

                                          </div>

                                        </div>

                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Performance</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label for="towing_capacity">Towing Capacity</label>
                                              <input type="text" name="towing_capacity" id="towing_capacity" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="max_payload">Max Payload</label>
                                              <input type="text" name="max_payload" id="max_payload" class="form-control">
                                            </div>

                                          </div>

                                        </div>

                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Fuel Economy</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label for="epa_city">EPA City</label>
                                              <input type="text" name="epa_city" id="epa_city" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="epa_highway">EPA Highway</label>
                                              <input type="text" name="epa_highway" id="epa_highway" class="form-control">
                                            </div>

                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="epa_combined">EPA Combined</label>
                                              <input type="text" name="epa_combined" id="epa_combined" class="form-control">
                                            </div>

                                          </div>

                                        </div>

                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Engine</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label for="engine_summary">Engine Summary</label>
                                              <input type="text" name="engine_summary" id="engine_summary" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="engine_brand">Engine Brand</label>
                                              <input type="text" name="engine_brand" id="engine_brand" class="form-control">
                                            </div>

                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="aspiration">Aspiration</label>
                                              <input type="text" name="aspiration" id="aspiration" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="block_type">Block Type</label>
                                              <input type="text" name="block_type" id="block_type" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="bore">Bore</label>
                                              <input type="text" name="bore" id="bore" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="cam_type">Cam Type</label>
                                              <input type="text" name="cam_type" id="cam_type" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="compression">Compression</label>
                                              <input type="text" name="compression" id="compression" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="cylinders">Cylinders</label>
                                              <input type="text" name="cylinders" id="cylinders" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="displacement">Displacement</label>
                                              <input type="text" name="displacement" id="displacement" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="fuel_induction">Fuel Induction</label>
                                              <input type="text" name="fuel_induction" id="fuel_induction" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="max_hp">Max HP</label>
                                              <input type="text" name="max_hp" id="max_hp" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="max_torque">Max Torque</label>
                                              <input type="text" name="max_torque" id="max_torque" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="redline_rpm">Redline RPM</label>
                                              <input type="text" name="redline_rpm" id="redline_rpm" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="stroke">Stroke</label>
                                              <input type="text" name="stroke" id="stroke" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="valves">Valves</label>
                                              <input type="text" name="valves" id="valves" class="form-control">
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Transmission</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                              <label for="transmission_summary">Transmission Summary</label>
                                              <input type="text" name="transmission_summary" id="transmission_summary" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="transmission_brand">Transmission Brand</label>
                                              <input type="text" name="transmission_brand" id="transmission_brand" class="form-control">
                                            </div>

                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="transmission_type">Transmission Type</label>
                                              <input type="text" name="transmission_type" id="transmission_type" class="form-control">
                                            </div>
                                          </div>
                                          <div class="col-sm-12">
                                            <div class="form-group">
                                              <label for="transmission_gears">Transmission Gears</label>
                                              <input type="text" name="transmission_gears" id="transmission_gears" class="form-control">
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Wheels & Tires</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="drive_type">Drive Type</label>
                                              <select name="drive_type" class="form-control" id="drive_type">
                                                <option value="4X4">4X4</option>
                                                <option value="6x4">6x4</option>
                                                <option value="FWD">FWD</option>
                                                <option value="RWD">RWD</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="brake_system">Brake System</label>
                                              <select name="brake_system" class="form-control" id="brake_system">
                                                <option value="Air">Air</option>
                                                <option value="Hydraulic">Hydraulic</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="front_track_width">Front Track Width</label>
                                              <input class="form-control" type="text" name="front_track_width" id="front_track_width">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="rear_track_width">Rear Track Width</label>
                                              <input class="form-control" type="text" name="rear_track_width" id="rear_track_width">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="wheelbase">Wheelbase</label>
                                              <input class="form-control" type="text" name="wheelbase" id="wheelbase">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="front_wheel_diameter">Front Wheel Diameter</label>
                                              <input class="form-control" type="text" name="front_wheel_diameter" id="front_wheel_diameter">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="rear_wheel_diameter">Rear Wheel Diameter</label>
                                              <input class="form-control" type="text" name="rear_wheel_diameter" id="rear_wheel_diameter">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="rear_axle">Rear Axle</label>
                                              <input class="form-control" type="text" name="rear_axle" id="rear_axle">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="front_tire_type">Front Tire Type</label>
                                              <input class="form-control" type="text" name="front_tire_type" id="front_tire_type">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="front_tire_psi">Front Tire PSI</label>
                                              <input class="form-control" type="text" name="front_tire_psi" id="front_tire_psi">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="rear_tire_type">Rear Tire Type</label>
                                              <input class="form-control" type="text" name="rear_tire_type" id="rear_tire_type">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="rear_tire_psi">Rear Tire Type</label>
                                              <input class="form-control" type="text" name="rear_tire_psi" id="rear_tire_psi">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Fuel</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">


                                        <div class="row">
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="fuel_type">Fuel Type</label>
                                              <select name="fuel_type" class="form-control" id="fuel_type">
                                                <option value="CNG">CNG</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Gasoline">Gasoline</option>
                                                <option value="Propane">Propane</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="fuel_quality">Fuel Quality</label>
                                              <input class="form-control" type="text" name="fuel_quality" id="fuel_quality">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="fuel_tank_one_capacity">Fuel Tank 1 Capacity</label>
                                              <input class="form-control" type="text" name="fuel_tank_one_capacity" id="fuel_tank_one_capacity">
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                              <label for="fuel_tank_two_capacity">Fuel Tank 2 Capacity</label>
                                              <input class="form-control" type="text" name="fuel_tank_two_capacity" id="fuel_tank_two_capacity">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="ml-3 mt-2">
                                        <h3 class="card-title">Oil</h3>
                                        <br>
                                      </div>
                                      <div class="card-body">

                                        <div class="row">
                                          <div class="col-sm-12">
                                            <div class="form-group">
                                              <label for="oil_capacity">Oil Capacity</label>
                                              <input class="form-control" type="text" name="oil_capacity" id="oil_capacity">
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <!-- /.card-body -->

                                      <div class="card-footer float-right">
            <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add_specifications"/>
            <button type="submit" id="action" name="action" class="btn btn-primary">Add Vehicle</button>
                                      </div>
                                    </form>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                <!-- specifications -->

                              </div>

<!-- specificatoins form here -->
<!-- settings form start from here -->
                              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

                                <!-- settings -->
                                <!-- general form elements disabled -->
                                <div class="card card-warning">
                                  <div class="ml-4 mt-4">
                                    <h3 class="card-title ml-3">Settings</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <form role="form" method="post" id="vehicle_settings">
                                      <div class="card-body">

                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <label for="vin-sn">Primary Meter * </label><br>
                                            <span>Select how you measure utilization for this vehicle.</span>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="primary_meter" id="primary_meter" value="Miles" checked>
                                              <label class="form-check-label" for="primary_meter">
                                                Miles
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="primary_meter" id="primary_meter" value="Kilometers">
                                              <label class="form-check-label" for="primary_meter">
                                                Kilometers
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="primary_meter" id="primary_meter" value="Hours">
                                              <label class="form-check-label" for="primary_meter">
                                                Hours
                                              </label>
                                            </div>
                                            
                                          </div>
                                          <div class="col-sm-6">
                                           <div class="form-group">
                                            <label for="primary_current_reading">Current Reading</label>
                                            <input type="text" name="primary_current_reading" id="primary_current_reading" class="form-control">
                                          </div>
                                          <div class="form-group">
                                            <label for="primary_avg_usage">Average Usage per Day</label>
                                            <input type="text" name="primary_avg_usage" id="primary_avg_usage" class="form-control" >
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                              <label class="form-check-label" for="defaultCheck1">
                                                Automatically calculate
                                              </label>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="checkbox" name="checkbox" id="checkbox">
                                        <label class="form-check-label" for="defaultCheck1">
                                          Secondary Meter
                                        </label>

                                      </div>
                                      <div class="row">
                                          <div class="col-sm-6">
                                            <!-- text input -->
                                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Track an additional meter, such as a concrete mixer, street sweeper, cleaning equipment, etc.<a class="text-blue-700 spark-a-focus hover:underline" href="#" target="_blank" rel="noopener noreferrer" role="link" tabindex="-1">Learn more</a></span>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="secondary_meter" id="secondary_meter" value="Miles" checked>
                                              <label class="form-check-label" for="secondary_meter">
                                                Miles
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="secondary_meter" id="secondary_meter" value="Kilometers">
                                              <label class="form-check-label" for="secondary_meter">
                                                Kilometers
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="secondary_meter" id="secondary_meter" value="Hours">
                                              <label class="form-check-label" for="secondary_meter">
                                                Hours
                                              </label>
                                            </div>
                                            
                                          </div>
                                          <div class="col-sm-6">
                                           <div class="form-group">
                                            <label for="secondary_current_reading">Current Reading</label>
                                            <input type="text" name="secondary_current_reading" id="secondary_current_reading" class="form-control">
                                          </div>
                                          <div class="form-group">
                                            <label for="secondary_avg_usage">Average Usage per Day</label>
                                            <input type="text" name="secondary_avg_usage" id="secondary_avg_usage" class="form-control">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                              <label class="form-check-label" for="defaultCheck1">
                                                Automatically calculate
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      


                                      <div class="form-group">
                                        <label for="license_plate">Fuel Unit *</label><br>
                                        <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Sets the volume units used when entering fuel entries for this vehicle.<a class="text-blue-700 spark-a-focus hover:underline" href="#" target="_blank" rel="noopener noreferrer" role="link" tabindex="-1">Learn more</a></span>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="fuel_unit" id="fuel_unit" value="Gallons (US)" checked>
                                          <label class="form-check-label" for="fuel_unit">
                                            Gallons (US)
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="fuel_unit" id="fuel_unit" value="Gallons (UK)">
                                          <label class="form-check-label" for="fuel_unit">
                                            Gallons (UK)
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="fuel_unit" id="fuel_unit" value="Liters">
                                          <label class="form-check-label" for="fuel_unit">
                                            Liters
                                          </label>
                                        </div>
                                        

                                      </div>
                                      <div class="form-group">
                                        <label for="license_plate">Measurement Units *</label><br>
                                        <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Used for displaying the units on certain attributes like length, width, weight, etc.<a class="text-blue-700 spark-a-focus hover:underline" href="#" target="_blank" rel="noopener noreferrer" role="link" tabindex="-1">Learn more</a></span>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="measurement_unit" id="measurement_unit" value="Imperial (inches, pounds, gallons, miles)" checked>
                                          <label class="form-check-label" for="measurement_unit">
                                            Imperial (inches, pounds, gallons, miles)
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="measurement_unit" id="measurement_unit" value="Metric (centimeters, kilograms, liters, kilometers)">
                                          <label class="form-check-label" for="measurement_unit">
                                            Metric (centimeters, kilograms, liters, kilometers)
                                          </label>
                                        </div>                         
                                      </div>                      
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer float-right">
                  <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add_settings"/>
            <button type="submit" id="action" name="action" class="btn btn-primary">Add Vehicle</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

<!-- settings form end here -->
                            <!-- Other Forms -->


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

    $('#photo').change(function () {
      var file_data = $('#photo').prop('files')[0];
      var form_data = new FormData();
      alert(file_data);
      alert(form_data);
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

          $('#vehicle_name').val(data.vehicle_name);
          $('#vin_sn').val(data.vin_sn);
          $('#license_plate').val(data.license_plate);
          $('#type').val(data.type);
          $('#year').val(data.year);
          $('#make').val(data.make);
          $('#model').val(data.model);
          $('#trims').val(data.trims);
          $('#registration_state').val(data.registration_state);
          $('#photo').val(data.photo);
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

          $('#heading').html("Vehicle Profile Edit");
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
          // $('#alert_action').fadeIn().html('<div class="alert alert-success">' + data + '</div>');
          alert(data);
        }
      })
    });

    // insert  Lifecycles
    $(document).on('submit', '#vehicles_lifecycle', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#vehicles_lifecycle')[0].reset();
          // $('#alert_action').fadeIn().html('<div class="alert alert-success">' + data + '</div>');
          alert(data);
        }
      })
    });
 // insert Specifications
    $(document).on('submit', '#vehicle_specificatoins', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#vehicle_specificatoins')[0].reset();
          // $('#alert_action').fadeIn().html('<div class="alert alert-success">' + data + '</div>');
          alert(data);
        }
      })
    });

     // insert settings
    $(document).on('submit', '#vehicle_settings', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
// alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#vehicle_settings')[0].reset();
          // $('#alert_action').fadeIn().html('<div class="alert alert-success">' + data + '</div>');
          alert(data);
        }
      })
    });

  });


</script>
