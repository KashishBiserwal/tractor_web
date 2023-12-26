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
                          <form id="add_tractor_form" method="post"enctype="multipart/form-data" onsubmit="return false">
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-2">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="model">
                                  <label for="name" class="text-dark "> Model Name</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Product Type</label>
                                  <input type="text" class="" placeholder=" " value="2" id="product_type_id">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Image Type</label>
                                  <input type="text" class="" placeholder=" " value="1" id="image_type_id">
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="hp_category">
                                  <label for="name" class="text-dark "> HP Category</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-outline">
                                  <label class="form-label">No. of Cylinder</label>
                                  <select class="form-select py-2" id="TOTAL_CYCLINDER" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="horse_power">
                                  <label for="name" class="text-dark "> PTO HP</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="gear_box_forward">
                                  <label for="name" class="text-dark ">Gear Box Forward</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="gear_box_reverse">
                                  <label for="name" class="text-dark ">Gear Box Reverse</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Brakes</label>
                                  <select class="form-select py-2" id="BRAKE_TYPE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="" class="" placeholder=" " id="starting_price">
                                  <label for="name" class="text-dark ">Starting Price</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="" class="" placeholder=" " id="ending_price">
                                  <label for="name" class="text-dark ">Ending Price</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="warranty">
                                  <label for="name" class="text-dark ">Warranty</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-8 col-lg-8 col-md-8">
                              <label for="name" class="text-dark fw-bold">Select Tractor Type</label>
                                <div id="type_name">
                                 
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                <!-- <div class="background__box">
                                  <div class="background__btn-box">
                                    <label class="background__btn">
                                      <p class="text-white bg-success p-2 rounded">Upload images</p>
                                      <input type="file" data-max_length="20" name="files[]" ref="fileInput" style="display: none" @change="handleFileInput" accept="image/png, image/jpg, image/jpeg" class="background__inputfile" id="image_name">
                                      <small></small>
                                    </label>
                                  </div>
                                  <div class="">
                                    <div class="background__img-wrap"></div>
                                  </div>
                                </div> -->
                                <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image_name">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                              </div>
                              <h5 class="fw-bold"> Engine Details</h5>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="CAPACITY_CC">
                                  <label for="name" class="text-dark ">Capacity CC</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="engine_rated_rpm">
                                  <label for="name" class="text-dark ">Engine Rated RPM</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Select Cooling</label>
                                  <select class="form-select py-2" id="COOLING" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Air Filter</label>
                                  <select class="form-select py-2" id="AIR_FILTER" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Fuel pump</label>
                                  <select class="form-select py-2" id="FUEL_PUMP" aria-label="Default select example">
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="TORQUE">
                                  <label for="name" class="text-dark ">Torque</label>
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="min_forward_speed">
                                  <label for="name" class="text-dark ">Min Forward Speed</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="max_forward_speed">
                                  <label for="name" class="text-dark ">Max Forward Speed</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="min_reverse_speed">
                                  <label for="name" class="text-dark ">Min Reverse Speed</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="max_reverse_speed">
                                  <label for="name" class="text-dark ">Max Reverse Speed</label>
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="POWER_TAKEOFF_TYPE">
                                  <label for="name" class="text-dark ">Type</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="power_take_off_rpm">
                                  <label for="name" class="text-dark ">RPM</label>
                                </div>
                              </div>
                              <h5 class="fw-bold">Dimensions And Weight Details</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="totat_weight">
                                  <label for="name" class="text-dark ">Total Weight</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="WHEEL_BASE">
                                  <label for="name" class="text-dark ">Wheel Base</label>
                                </div>
                              </div>
                              <h5 class="fw-bold mb-3">Hydraulics Details</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="LIFTING_CAPACITY">
                                  <label for="name" class="text-dark ">Lifting Capacity</label>
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
                              <!-- <h5 class="fw-bold mt-3">Fuel Tank</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="fuel_tank_cc">
                                  <label for="name" class="text-dark ">Capacity(Ltr)</label>
                                </div>
                              </div> -->
                              <h5 class="fw-bold"> Wheels And Tyres Details</h5>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Wheel Drive</label>
                                  <select class="form-select py-2" id="WHEEL_DRIVE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="front_tyre">
                                  <label for="name" class="text-dark ">Front</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="rear_tyre">
                                  <label for="name" class="text-dark ">Rear</label>
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="py-5" placeholder=" " id="description">
                                  <label for="name" class="text-dark">About</label>
                                </div>
                              </div>
                            </div>
                            <button type="button" id="save" class="btn btn-success fw-bold px-3">Submit</button>
                          </form>
    </div>
</div>