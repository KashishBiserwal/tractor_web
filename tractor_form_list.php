<?php
include 'includes/headertag.php';
include 'includes/footertag.php';
?>

<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>

<script src="<?php $baseUrl; ?>model/tractor_listing.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container">
    <div class="row  my-4 shadow">
    <h4 class="text-center">Fill your Tractor Details</h4>
                          <form id="add_tractor_form" method="post">
                            <div class="row justify-content-center pt-4">
                              <h5 class="fw-bold">Listing</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                <div class="form-outline">
                                  <label class="form-label">Brand</label>
                                  <select class="form-select py-2" id="brand_name" aria-label="Default select example">
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                      <div class="form-outline">
                                        <label class="form-label">Model Name</label>
                                        <input type="text" name="model" id="model" class="form-control">
                                      </div>
                                    </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Product Type</label>
                                  <input type="text" class="" placeholder=" " value="2" id="product_type_id">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">HP Category</label>
                                  <input type="text"  placeholder=" " id="hp_category" name="hp_category" class="form-control">
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">No. of Cylinder</label>
                                  <select class="form-select py-2" id="TOTAL_CYCLINDER" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                    <option value="1">1</option>
                                    <option value="2">1</option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">PTO HP</label>
                                  <input type="text" placeholder=" " id="horse_power"  name="horse_power" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Gear Box Forward</label>
                                  <input type="text" placeholder=" " id="gear_box_forward"  name="gear_box_forward" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Gear Box Reverse</label>
                                  <input type="text" placeholder=" " id="gear_box_reverse"  name="gear_box_reverse" class="form-control">
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Brakes</label>
                                  <select class="form-select py-2" id="BRAKE_TYPE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Starting Price</label>
                                  <input type="text" placeholder=" " id="starting_price"  name="starting_price" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Ending Price</label>
                                  <input type="text" placeholder=" " id="ending_price"  name="ending_price" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Warranty</label>
                                  <input type="text" placeholder=" " id="warranty"  name="warranty" class="form-control">
                                </div>
                              </div>
                              <div class="col-12 col-sm-8 col-lg-8 col-md-8 mt-4">
                              <label for="name" class="text-dark fw-bold">Select Tractor Type</label>
                                <div id="type_name">
                                 
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                          <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                              <h5 class="fw-bold"> Brand Details</h5>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Capacity CC</label>
                                  <input type="text" placeholder=" " id="CAPACITY_CC"  name="CAPACITY_CC" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Engine Rated RPM</label>
                                  <input type="text" placeholder=" " id="engine_rated_rpm"  name="engine_rated_rpm" class="form-control">
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Select Cooling</label>
                                  <select class="form-select py-2" id="COOLING" name="COOLING" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Air Filter</label>
                                  <select class="form-select py-2" id="AIR_FILTER" name="AIR_FILTER" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Fuel pump</label>
                                  <select class="form-select py-2" id="fuel_pump_id" aria-label="Default select example">
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Torque</label>
                                  <input type="text" placeholder=" " id="TORQUE"  name="TORQUE" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold mt-4">Transmission Details</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                <div class="form-outline">
                                  <label class="form-label">Type</label>
                                  <select class="form-select py-2" id="TRANSMISSION_TYPE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mb-4">
                                <div class="form-outline">
                                  <label class="form-label">Clutch</label>
                                  <select class="form-select py-2" id="TRANSMISSION_CLUTCH" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Min Forward Speed</label>
                                  <input type="text" placeholder=" " id="min_forward_speed"  name="min_forward_speed" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Max Forward Speed</label>
                                  <input type="text" placeholder=" " id="max_forward_speed"  name="max_forward_speed" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Min Reverse Speed</label>
                                  <input type="text" placeholder=" " id="min_reverse_speed"  name="min_reverse_speed" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Max Reverse Speed</label>
                                  <input type="text" placeholder=" " id="max_reverse_speed"  name="max_reverse_speed" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold"> Steering Details</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Type</label>
                                  <select class="form-select py-2" id="STEERING_DETAIL" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Coloumn</label>
                                  <select class="form-select py-2" id="STEERING_COLUMN" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="fw-bold mt-3 ">Power Take Off Details</h5>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Type</label>
                                  <input type="text" placeholder=" " id="POWER_TAKEOFF_TYPE"  name="POWER_TAKEOFF_TYPE" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">RPM</label>
                                  <input type="text" placeholder=" " id="power_take_off_rpm"  name="power_take_off_rpm" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold">Dimensions And Weight Details</h5>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Total Weight</label>
                                  <input type="text" placeholder=" " id="totat_weight"  name="totat_weight" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Wheel Base</label>
                                  <input type="text" placeholder=" " id="WHEEL_BASE"  name="WHEEL_BASE" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold mb-3">Hydraulics Details</h5>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Lifting Capacity</label>
                                  <input type="text" placeholder=" " id="LIFTING_CAPACITY"  name="LIFTING_CAPACITY" class="form-control">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">3 Point Linkage</label>
                                  <select class="form-select py-2" id="LINKAGE_POINT" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="fw-bold mt-3">Fuel Tank</h5>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Capacity(Ltr)</label>
                                  <input type="text" placeholder=" " id="fuel_tank_cc"  name="fuel_tank_cc" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold"> Wheels And Tyres Details</h5>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Wheel Drive</label>
                                  <select class="form-select py-2" id="WHEEL_DRIVE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Front</label>
                                  <input type="text" placeholder=" " id="front_tyre"  name="front_tyre" class="form-control">
                                </div>
                              </div>
                              <div  class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Rear</label>
                                  <input type="text" placeholder=" " id="rear_tyre"  name="rear_tyre" class="form-control">
                                </div>
                              </div>
                              <h5 class="fw-bold">Other Information Details</h5>
                              <div class="col-12 mb-4">
                                <label class="text-dark fw-bold" >Accessories</label>
                                    <select class="js-example-basic-multiple w-100" name="states[]" id="ass_list" multiple="multiple">
                                        
                                    </select>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Status</label>
                                  <select class="form-select py-2" id="STATUS" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">About</label>
                                  <textarea rows="4" cols="70" class="w-100" minlength="1" maxlength="255" id="description" name="description"></textarea>
                                </div>
                              </div>
                            </div>
                            <button type="button" id="save" class="btn btn-success fw-bold px-3">Submit</button>
                          </form>
    </div>
</div>