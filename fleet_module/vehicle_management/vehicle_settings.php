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

                        <div class="card-body">

                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <label for="vin-sn">Primary Meter * </label><br>
                              <span>Select how you measure utilization for this vehicle.</span>
                              <div class="form-check">
                                <input class="form-check-input primary_meter1" type="radio" name="primary_meter"
                                       id="primary_meter" value="Miles" checked>
                                <label class="form-check-label" for="primary_meter">
                                  Miles
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input primary_meter2" type="radio" name="primary_meter"
                                       id="primary_meter"
                                       value="Kilometers">
                                <label class="form-check-label" for="primary_meter">
                                  Kilometers
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input primary_meter3" type="radio" name="primary_meter"
                                       id="primary_meter"
                                       value="Hours">
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
                              <input class="form-check-input secondary_meter1" type="radio" name="secondary_meter"
                                     id="secondary_meter" value="Miles" checked>
                              <label class="form-check-label" for="secondary_meter">
                                Miles
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input secondary_meter2" type="radio" name="secondary_meter"
                                     id="secondary_meter" value="Kilometers">
                              <label class="form-check-label" for="secondary_meter">
                                Kilometers
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input secondary_meter3" type="radio" name="secondary_meter"
                                     id="secondary_meter" value="Hours">
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
                            <input class="form-check-input fuel_unit1" type="radio" name="fuel_unit" id="fuel_unit"
                                   value="Gallons (BD)" checked>
                            <label class="form-check-label" for="fuel_unit">
                              Gallons (BD)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input fuel_unit2" type="radio" name="fuel_unit" id="fuel_unit"
                                   value="Gallons (UK)">
                            <label class="form-check-label" for="fuel_unit">
                              Gallons (UK)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input fuel_unit3" type="radio" name="fuel_unit" id="fuel_unit"
                                   value="Liters">
                            <label class="form-check-label" for="fuel_unit">
                              Liters
                            </label>
                          </div>


                        </div>
                        <div class="form-group">
                          <label for="license_plate">Measurement Units *</label><br>
                          <span class="font-sans m-0 text-sm  text-left font-normal normal-case">Used for displaying the units on certain attributes like length, width, weight, etc.<a class="text-blue-700 spark-a-focus hover:underline" href="#" target="_blank" rel="noopener noreferrer" role="link" tabindex="-1">Learn more</a></span>
                          <div class="form-check">
                            <input class="form-check-input measurement_unit1" type="radio" name="measurement_unit"
                                   id="measurement_unit" value="Imperial (inches, pounds, gallons, miles)" checked>
                            <label class="form-check-label" for="measurement_unit">
                              Imperial (inches, pounds, gallons, miles)
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input measurement_unit2" type="radio" name="measurement_unit"
                                   id="measurement_unit" value="Metric (centimeters, kilograms, liters, kilometers)">
                            <label class="form-check-label" for="measurement_unit">
                              Metric (centimeters, kilograms, liters, kilometers)
                            </label>
                          </div>                         
                        </div>                      
                      </div>

                    </div>

                  </div>
