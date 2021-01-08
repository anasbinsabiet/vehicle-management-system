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
      <div class="panel-heading col-md-12">
        <div class="row">
          <div class="col-md-6">
            <h3 class="panel-title ml-2" id="heading">Add User</h3>
          </div>
          <div class="col-md-6">
            <div class="float-right">
              <a href="index.php">
                <button class="btn btn-xs btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Back
                </button>
              </a>
            </div>
          </div>
        </div>


      </div>
      <span id="alert_action"></span>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-3">
              <!-- general form elements -->


              <div class="col-12">
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                     href="#list-home" role="tab" aria-controls="home">Basic Information</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                     href="#list-profile" role="tab" aria-controls="profile">User Management</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                     href="#list-messages" role="tab" aria-controls="messages">Contact Information</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                     href="#list-settings" role="tab" aria-controls="settings">Personal Information</a>

                </div>
              </div>


            </div>

            <div class="col-9">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  <div class="card card-warning">
                    <div class="ml-4 mt-4">
                      <h3 class="card-title ml-3">Basic Information</h3>
                    </div>
                    <div class="card-body">
                      <form method="post" id="contacts_users" class="contacts_users">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="first_name" class="col-sm-3 col-form-label">First Name *</label>
                            <div class="col-sm-5">
                              <input type="text" name="first_name" id="first_name" class="form-control">
                              <input type="hidden" name="bi_id" id="bi_id" class="form-control">
                              <input type="hidden" name="um_id" id="um_id" class="form-control">
                              <input type="hidden" name="ci_id" id="ci_id" class="form-control">
                              <input type="hidden" name="pi_id" id="pi_id" class="form-control">
                            </div>
                            <div class="col-sm-4">
                              <input type="text" name="middle_name" id="middle_name" class="form-control"
                                     placeholder="Middle name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="last_name" class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="group" class="col-sm-3 col-form-label">Group</label>
                            <div class="col-sm-9">
                              <select name="group" class="form-control" id="group">
                                <?php echo filled_group_name($connect); ?>

                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" name="email" id="email" class="form-control">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="operator" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-5">
                              <div class="row">
                                <div class="col-sm-1">
                                  <input type="checkbox" class="form-control col-sm-1" name="operator" id="operator">
                                </div>
                                <div class="col-sm-11">
                                  <label for="operator" class="col-form-label">Operator</label>
                                </div>
                              </div>
                              <span class="col-sm-12"
                                    style="font-size: 12px;">This contact can be assigned to vehicless</span>
                            </div>
                            <div class="col-sm-4">
                              <div class="row">
                                <div class="col-sm-1">
                                  <input type="checkbox" class="form-control col-sm-1" name="employee" id="employee">
                                </div>
                                <div class="col-sm-11">
                                  <label for="employee" class="col-form-label">Employee</label>
                                </div>
                              </div>
                              <span class="col-sm-12" style="font-size: 12px;">For identifiable purposes only</span>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
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
                  </div>
                </div>


                <!-- Other Forms -->
                <!-- lifecycle forms -->
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                  <!-- lifecycle -->
                  <!-- general form elements disabled -->
                  <div class="card card-warning">
                    <div class="ml-4 mt-4">
                      <h3 class="card-title ml-3">User Management</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                      <div class="card-body">
                        <div class="form-group row">
                          <label for="title" class="col-sm-3 col-form-label">Login *</label>
                          <div class="col-sm-9 mt-2">
                            <span class="col-sm-12" style="font-size: 12px;">Users can log in to fleet using a username or email address.</span>

                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="title" class="col-sm-3 col-form-label">Work email address</label>
                          <div class="col-sm-9">
                            <input type="text" name="vin_sn" id="vin_sn" class="form-control" disabled=""
                                   placeholder="Add an email in Basic Information">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="username" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" id="username" class="form-control">

                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="password" class="col-sm-3 col-form-label">Password *</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" id="password" class="form-control">
                            <input type="password" name="confirm_password" id="confirm_password"
                                   class="form-control mt-2" placeholder="Confirm password">

                          </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                          <label for="time_zone" class="col-sm-3 col-form-label">Time zone</label>
                          <div class="col-sm-9">
                            <input type="text" name="time_zone" id="time_zone" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="user_type" class="col-sm-3 col-form-label">User Type</label>
                          <div class="col-sm-9">
                            <select name="user_type" class="form-control" id="user_type">
                              <?php echo filled_user_type_name($connect); ?>

                            </select>
                            <span class="col-sm-12"
                                  style="font-size: 12px;">Assign a user type to dictate access level</span>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="title" class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <div class="form-check">
                              <input type="radio" class="form-check-input user_operator1" id="user_operator"
                                     name="user_operator"
                                     value="Fleet Manager" checked="">
                              <label class="form-check-label" for="user_operator">Fleet Manager</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" class="form-check-input user_operator2" id="user_operator"
                                     name="user_operator" value="Notifications-Only">
                              <label class="form-check-label" for="user_operator">Notifications-Only</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" class="form-check-input user_operator3" id="user_operator"
                                     name="user_operator" value="Operator">
                              <label class="form-check-label" for="user_operator">Operator</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" class="form-check-input user_operator4" id="user_operator"
                                     name="user_operator" value="Technician">
                              <label class="form-check-label" for="user_operator">Technician</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" class="form-check-input user_operator5" id="user_operator"
                                     name="user_operator" value="Viewer">
                              <label class="form-check-label" for="user_operator">Viewer</label>
                            </div>


                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="card-body">
                      <div class="ml-4 mt-2">
                        <h3 class="card-title">Record Sets</h3>
                        <br>
                      </div>
                      <div class="card-body">
                        <span style="font-size: 12px;">Record Sets are the collections of primary records — Vehicles, Contacts, or Parts — that a user can access. The actions they can execute on these records are determined by the permissions given in their Role.</span><br><br>
                        <h6>Vehicle Sets</h6>
                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">View & Update</label>
                              <div class="col-sm-1 mx-auto mt-2">
                                <input class="form-check-input vehicle_view_update1" type="radio"
                                       name="vehicle_view_update"
                                       id="vehicle_view_update" value="All" checked>
                                <label class="form-check-label" for="vehicle_view_update">
                                  All
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input vehicle_view_update2" type="radio"
                                       name="vehicle_view_update"
                                       id="vehicle_view_update" value="Some" checked>
                                <label class="form-check-label" for="vehicle_view_update">
                                  Some
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input vehicle_view_update3" type="radio"
                                       name="vehicle_view_update"
                                       id="vehicle_view_update" value="None" checked>
                                <label class="form-check-label" for="vehicle_view_update">
                                  None
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">View-Only</label>
                              <div class="col-sm-1 mx-auto mt-2">
                                <input class="form-check-input vehicle_view1" type="radio" name="vehicle_view"
                                       id="vehicle_view"
                                       value="All" checked>
                                <label class="form-check-label" for="vehicle_view">
                                  All
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input vehicle_view2" type="radio" name="vehicle_view"
                                       id="vehicle_view"
                                       value="Some" checked>
                                <label class="form-check-label" for="vehicle_view">
                                  Some
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input vehicle_view3" type="radio" name="vehicle_view"
                                       id="vehicle_view"
                                       value="None" checked>
                                <label class="form-check-label" for="vehicle_view">
                                  None
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Contact Sets</h6>
                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">View & Update</label>
                              <div class="col-sm-1 mx-auto mt-2">
                                <input class="form-check-input contact_view_update1" type="radio"
                                       name="contact_view_update"
                                       id="contact_view_update" value="All" checked>
                                <label class="form-check-label" for="contact_view_update">
                                  All
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input contact_view_update2" type="radio"
                                       name="contact_view_update"
                                       id="contact_view_update" value="Some" checked>
                                <label class="form-check-label" for="contact_view_update">
                                  Some
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input contact_view_update3" type="radio"
                                       name="contact_view_update"
                                       id="contact_view_update" value="None" checked>
                                <label class="form-check-label" for="contact_view_update">
                                  None
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">View-Only</label>
                              <div class="col-sm-1 mx-auto mt-2">
                                <input class="form-check-input contact_view1" type="radio" name="contact_view"
                                       id="contact_view"
                                       value="All" checked>
                                <label class="form-check-label" for="contact_view">
                                  All
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input contact_view2" type="radio" name="contact_view"
                                       id="contact_view"
                                       value="Some" checked>
                                <label class="form-check-label" for="contact_view">
                                  Some
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input contact_view3" type="radio" name="contact_view"
                                       id="contact_view"
                                       value="None" checked>
                                <label class="form-check-label" for="contact_view">
                                  None
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Inspection Form Sets</h6>

                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">
                              <label for="title" class="col-sm-4 col-form-label">View-Only</label>
                              <div class="col-sm-1 mx-auto mt-2">
                                <input class="form-check-input inspection_form_view1" type="radio"
                                       name="inspection_form_view"
                                       id="inspection_form_view" value="All" checked>
                                <label class="form-check-label" for="inspection_form_view">
                                  All
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input inspection_form_view2" type="radio"
                                       name="inspection_form_view"
                                       id="inspection_form_view" value="Some" checked>
                                <label class="form-check-label" for="inspection_form_view">
                                  Some
                                </label>
                              </div>
                              <div class="col-sm-2 mt-2">
                                <input class="form-check-input inspection_form_view3" type="radio"
                                       name="inspection_form_view"
                                       id="inspection_form_view" value="None" checked>
                                <label class="form-check-label" for="inspection_form_view">
                                  None
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <h6>Admin Permissions</h6>

                        <div class="card">
                          <div class="card-body">
                            <div class="form-group row">

                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="manage_user_roles"
                                       id="manage_user_roles">
                                <label class="form-check-label" for="manage_user_roles">Manage Users & Roles</label>
                                <p style="font-size: 12px;">Create users, edit and delete other users (user will not be
                                  able to edit himself/herself). Also allows user to manage roles.</p>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="manage_subscription_billing"
                                       id="manage_subscription_billing">
                                <label class="form-check-label" for="manage_subscription_billing">Manage Subscription
                                  and Billing Information</label>
                                <p style="font-size: 12px;">Change subscription plan, update billing and credit card
                                  details</p>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="export_account_data"
                                       id="export_account_data">
                                <label class="form-check-label" for="export_account_data">Export All Account
                                  Data</label>
                                <p style="font-size: 12px;">Download all account data to a spreadsheet from Account
                                  Settings area</p>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <!-- lifecycle forms -->
                <!-- specificatoins form here -->
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                  <!-- specificatoins -->
                  <!-- general form elements disabled -->
                  <div class="card card-warning">
                    <div class="ml-4 mt-4">
                      <h3 class="card-title ml-3">Contact Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                      <div class="card-body">
                        <!-- new dimension by imran -->
                        <div class="form-group row">
                          <label for="phone_numbers" class="col-sm-3 col-form-label">Phone numbers</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone_numbers" id="phone_numbers" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="street_address" class="col-sm-3 col-form-label">Street Address</label>
                          <div class="col-sm-9">
                            <input type="text" name="street_address" id="street_address" class="form-control">
                            <p style="font-size: 12px;">Street and number, P.O. box</p>

                          </div>

                        </div>
                        <div class="form-group row">
                          <label for="second_address" class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" name="second_address" id="second_address" class="form-control">
                            <p style="font-size: 12px;">Apartment, suite, unit, building, etc</p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="city" class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="city" id="city" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="state_province_region"
                                 class="col-sm-3 col-form-label">State/Province/Region</label>
                          <div class="col-sm-9">
                            <input type="text" name="state_province_region" id="state_province_region"
                                   class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="zip_postal_code" class="col-sm-3 col-form-label">Zip/Postal Code</label>
                          <div class="col-sm-9">
                            <input type="text" name="zip_postal_code" id="zip_postal_code" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="country" class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control" id="country" name="country">
                              <?php echo filled_country_name($connect); ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- Contact Information -->

                </div>

                <!-- specificatoins form here -->
                <!-- settings form start from here -->
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">

                  <!-- settings -->
                  <!-- general form elements disabled -->
                  <div class="card card-warning">
                    <div class="ml-4 mt-4">
                      <h3 class="card-title ml-3">Personal Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form method="post" id="contacts_users" class="contacts_users">
                        <div class="card-body">
                          <div class="form-group row">
                            <label for="job_title" class="col-sm-3 col-form-label">Job Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="job_title" id="job_title" class="form-control"
                                     placeholder="Ex. Assistant to the Regional Manager">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="dob" class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input type="date" name="dob" id="dob" class="form-control">
                              <p style="font-size: 12px;">(Ex: 2020-12-15)</p>

                            </div>
                          </div>

                          <h5>Employee Details</h5>

                          <div class="form-group row">
                            <label for="employee_number" class="col-sm-3 col-form-label">Employee Number</label>
                            <div class="col-sm-9">
                              <input type="text" name="employee_number" id="employee_number" class="form-control">

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="start_date" class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                              <input type="date" name="start_date" id="start_date" class="form-control">
                              <p style="font-size: 12px;">(Ex: 2020-12-15)</p>

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="leave_date" class="col-sm-3 col-form-label">Leave Date</label>
                            <div class="col-sm-9">
                              <input type="date" name="leave_date" id="leave_date" class="form-control">
                              <p style="font-size: 12px;">(Ex: 2020-12-15)</p>

                            </div>
                          </div>
                          <h5>Operator Details</h5>
                          <div class="form-group row">
                            <label for="license_number" class="col-sm-3 col-form-label">License Number</label>
                            <div class="col-sm-9">
                              <input type="text" name="license_number" id="license_number" class="form-control">

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="license_class" class="col-sm-3 col-form-label">License Class</label>
                            <div class="col-sm-9">
                              <input type="text" name="license_class" id="license_class" class="form-control">

                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="license_state" class="col-sm-3 col-form-label">License
                              State/Province/Region</label>
                            <div class="col-sm-9">
                              <input type="text" name="license_state" id="license_state" class="form-control">
                            </div>
                          </div>
                          <h5>Technician Details</h5>
                          <div class="form-group row">
                            <label for="hourly_labor_rate" class="col-sm-3 col-form-label">Hourly Labor Rate</label>
                            <div class="col-sm-9">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">৳</span>
                                </div>
                                <input type="text" name="hourly_labor_rate" id="hourly_labor_rate" class="form-control"
                                       aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                            </div>
                          </div>


                        </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="float-right">
                <input type="hidden" name="btn_action" id="btn_action" name="btn_action" value="Add"/>
                <button type="submit" id="action" name="action" class="btn btn-primary">Add User</button>
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


    $("#targetLayer").attr("style", "visibility:visible");


    $('#photo').change(function () {

      $("#targetLayer").attr("style", "visibility:visible");


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
<?php if (isset($_GET['id'])) { ?>
  <script type="text/javascript">
    $(document).ready(function () {


      var url = document.URL;
      // alert(url);
      var id = url.substring(url.lastIndexOf('=') + 1);
      // alert(id);
      var bi_id = '';
      bi_id = id;

      if (bi_id != Number.isNaN(NaN) || bi_id != '') {

        var btn_action = 'fetch_single';

        $.ajax({
          url: 'action.php',
          method: "POST",
          data: {bi_id: bi_id, btn_action: btn_action},
          dataType: "json",
          success: function (data) {
            // alert(bi_id);
            // alert(data);

            $('#bi_id').val(data.bi_id);

            $('#first_name').val(data.first_name);
            $('#middle_name').val(data.middle_name);
            $('#last_name').val(data.last_name);
            $('#group').val(data.group);
            $('#email').val(data.email);
            if (data.operator == 'on') {
              $('#operator').val(data.operator).prop('checked', true);
            }
            if (data.employee == 'on') {
              $('#employee').val(data.employee).prop('checked', true);
            }
            $('#targetLayer').attr('src', data.photo);
            $('#photo_url').val(data.photo);

            // user management

            $('#um_id').val(data.um_id);
            $('#username').val(data.username);
            $('#password').val(data.password);
            $('#time_zone').val(data.time_zone);
            $('#user_type').val(data.user_type);

            if (data.user_operator == 'Fleet Manager') {
              $('.user_operator1').val(data.user_operator).prop('checked', true);
            } else if (data.user_operator == 'Notifications-Only') {
              $('.user_operator2').val(data.user_operator).prop('checked', true);
            } else if (data.user_operator == 'Operator') {
              $('.user_operator3').val(data.user_operator).prop('checked', true);
            } else if (data.user_operator == 'Technician') {
              $('.user_operator4').val(data.user_operator).prop('checked', true);
            } else {
              $('.user_operator5').val(data.user_operator).prop('checked', true);
            }

            // $('#user_operator').val(data.user_operator);
            if (data.vehicle_view_update == 'All') {
              $('.vehicle_view_update1').val(data.vehicle_view_update).prop('checked', true);
            } else if (data.vehicle_view_update == 'Some') {
              $('.vehicle_view_update2').val(data.vehicle_view_update).prop('checked', true);
            } else {
              $('.vehicle_view_update3').val(data.vehicle_view_update).prop('checked', true);
            }

            // $('#vehicle_view_update').val(data.vehicle_view_update);
            if (data.vehicle_view == 'All') {
              $('.vehicle_view1').val(data.vehicle_view).prop('checked', true);
            } else if (data.vehicle_view == 'Some') {
              $('.vehicle_view2').val(data.vehicle_view).prop('checked', true);
            } else {
              $('.vehicle_view3').val(data.vehicle_view).prop('checked', true);
            }

            // $('#vehicle_view').val(data.vehicle_view);
            if (data.contact_view_update == 'All') {
              $('.contact_view_update1').val(data.contact_view_update).prop('checked', true);
            } else if (data.contact_view_update == 'Some') {
              $('.contact_view_update2').val(data.contact_view_update).prop('checked', true);
            } else {
              $('.contact_view_update3').val(data.contact_view_update).prop('checked', true);
            }

            // $('#contact_view_update').val(data.contact_view_update);

            if (data.contact_view == 'All') {
              $('.contact_view1').val(data.contact_view).prop('checked', true);
            } else if (data.contact_view == 'Some') {
              $('.contact_view2').val(data.contact_view).prop('checked', true);
            } else {
              $('.contact_view3').val(data.contact_view).prop('checked', true);
            }

            // $('#contact_view').val(data.contact_view);

            if (data.inspection_form_view == 'All') {
              $('.inspection_form_view1').val(data.inspection_form_view).prop('checked', true);
            } else if (data.inspection_form_view == 'Some') {
              $('.inspection_form_view2').val(data.inspection_form_view).prop('checked', true);
            } else {
              $('.inspection_form_view3').val(data.inspection_form_view).prop('checked', true);
            }
            // $('#inspection_form_view').val(data.inspection_form_view);

            if (data.manage_user_roles == 'on') {
              $('#manage_user_roles').val(data.manage_user_roles).prop('checked', true);
            }
            if (data.manage_subscription_billing == 'on') {
              $('#manage_subscription_billing').val(data.manage_subscription_billing).prop('checked', true);
            }
            if (data.export_account_data == 'on') {
              $('#export_account_data').val(data.export_account_data).prop('checked', true);
            }


            // contact information

            $('#ci_id').val(data.ci_id);
            $('#phone_numbers').val(data.phone_numbers);
            $('#street_address').val(data.street_address);
            $('#second_address').val(data.second_address);
            $('#city').val(data.city);
            $('#state_province_region').val(data.state_province_region);
            $('#zip_postal_code').val(data.zip_postal_code);
            $('#country').val(data.country);


            // personal information

            $('#pi_id').val(data.pi_id);
            $('#job_title').val(data.job_title);
            $('#dob').val(data.dob);
            $('#employee_number').val(data.employee_number);
            $('#start_date').val(data.start_date);
            $('#leave_date').val(data.leave_date);
            $('#license_number').val(data.license_number);
            $('#license_class').val(data.license_class);
            $('#license_state').val(data.license_state);
            $('#hourly_labor_rate').val(data.hourly_labor_rate);


            $('#heading').html("Edit User");
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
////////////// Insert User details
    $(document).on('submit', '#contacts_users', function (event) {
      event.preventDefault();
      // alert("Hello");
      var form_data = $(this).serialize();
      // alert(form_data);
      $.ajax({
        url: "action.php",
        method: "POST",
        data: form_data,
        success: function (data) {
          $('#contacts_users')[0].reset();
          $('#alert_action').fadeIn().html('<div>' + data +
            '</div>');
          // alert(data);
        }
      })


      $('html, body').animate({
        scrollTop: $(".content-header").offset().top
      }, 200);


    });


  });


</script>
