<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <!-- lifecycle -->
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                      <div class="ml-4 mt-4">
                        <h3 class="card-title ml-3">In-Service</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">

                        <div class="card-body">
                          <div class="form-group">
                            <label for="in_service_date">In-Service Date</label>
                            <input type="date" class="form-control" name="in_service_date" id="in_service_date">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Date vehicle entered active fleet service</span>

                          </div>


                          <!-- text input -->
                          <div class="form-group">
                            <label for="in_service_odometer">In-Service Odometer</label>
                            <input type="text" name="in_service_odometer" id="in_service_odometer" class="form-control">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Odometer reading on in-service date</span>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="ml-3 mt-2">
                          <h3 class="card-title">Vehicle Life Estimates</h3>
                          <br>
                        </div>
                        <div class="card-body">

                          <div class="form-group">
                            <label for="estimated_service_life_months">Estimated Service Life in Months</label>
                            <input type="text" name="estimated_service_life_months" id="estimated_service_life_months" class="form-control">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Number of months vehicle is expected to be in active fleet service</span>

                          </div>
                          <div class="form-group">
                            <label for="estimated_service_life_miles">Estimated Service Life in Miles</label>
                            <input type="text" name="estimated_service_life_miles" id="estimated_service_life_miles" class="form-control">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Miles vehicle is expected to run before retiring from fleet service</span>

                          </div>
                          <div class="form-group">
                            <label for="estimated_resale_value">Estimated Resale Value</label>
<!--                            <input type="text" class="form-control" name="estimated_resale_value" id="estimated_resale_value">-->
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">৳</span>
                                </div>
                                <input type="text" name="estimated_resale_value" id="estimated_resale_value" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Amount expected to be recuperated after retirement and sale/disposal (less any associated costs)</span>

                          </div>




                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="ml-3 mt-2">
                          <h3 class="card-title">Out-of-Service</h3>
                          <br>
                        </div>
                        <div class="card-body">

                          
                          <div class="form-group">
                            <label for="out_of_service_date">Out-of-Service Date</label>
                            <input type="date" class="form-control" name="out_of_service_date" id="out_of_service_date">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Date vehicle was retired from fleet service</span>

                          </div>
                          <div class="form-group">
                            <label for="out_of_service_odometer">Out-of-Service Odometer</label>
                            <input type="text" class="form-control" name="out_of_service_odometer" id="out_of_service_odometer">
                            <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Final odometer reading on out-of-service date</span>

                          </div>


                        </div>
                        <!-- /.card-body -->


                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- lifecycle -->
                  </div>
