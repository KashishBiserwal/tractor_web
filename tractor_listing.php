<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?>



<body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app">
      <?php
      include 'includes/left_nav.php';
      include 'includes/header_admin.php';
      ?>
      <section style="padding: 0 15px;">
        <div class="">
          <div class="container">
            <div class="card-body d-flex align-items-center justify-content-between page_title">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">

                  <li class="breadcrumb-item">
                    <span>Tractor Listing</span>
                  </li>
                </ol>
              </nav>


              <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New tractor</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <h4 class="text-center">Fill your Tractor Details</h4>
                          <form id="add_tractor_form" method="post">
                            <div class="row justify-content-center pt-4">
                              <h5 class="fw-bold">Listing</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
                                <div class="form-outline">
                                  <label class="form-label">Brand</label>
                                  <select class="form-select py-2" id="brand_name" aria-label="Default select example">
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2">
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
                                  <input type="number" class="" placeholder=" " id="starting_price">
                                  <label for="name" class="text-dark ">Starting Price</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-group">
                                  <input type="number" class="" placeholder=" " id="ending_price">
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
                                <div class="form-outline">
                                  <label class="form-label" id="">Tractor Type</label>
                               <!--<select  class="form-select py-2" id="type_name" >
                                      <option selected disabled="" value="">Please select an option</option>
                                    </select>-->
                                  <select placeholder="Choose skills" id="type_name" multiple class="select2">
                                    <option selected disabled="" value="">Please select an option</option>

                                  </select>
                                </div>
                              </div>



                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                <div class="background__box">
                                  <div class="background__btn-box">
                                    <label class="background__btn">
                                      <p class="text-white bg-success p-2 rounded">Upload images</p>
                                      <input type="file" data-max_length="20" name="imgfile" ref="fileInput" style="display: none" @change="handleFileInput" accept="image/png, image/jpg, image/jpeg" class="background__inputfile" id="image_name">
                                      <small></small>
                                    </label>
                                  </div>
                                  <div class="">
                                    <div class="background__img-wrap"></div>
                                  </div>
                                </div>
                              </div>
                              <h5 class="fw-bold"> Brand Details</h5>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Capacity CC</label>
                                  <select class="form-select py-2" id="CAPACITY_CC" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
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
                                  <select class="form-select py-2" id="fuel_pump_id" aria-label="Default select example">
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="form-outline">
                                  <label class="form-label">Torque</label>
                                  <select class="form-select py-2" id="TORQUE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
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
                                <div class="form-outline">
                                  <label class="form-label">Type</label>
                                  <select class="form-select py-2" id="POWER_TAKEOFF_TYPE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
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
                                <div class="form-outline">
                                  <label class="form-label">Wheel Base</label>
                                  <select class="form-select py-2" id="WHEEL_BASE" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="fw-bold mb-3">Hydraulics Details</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Lifting Capacity</label>
                                  <select class="form-select py-2" id="LIFTING_CAPACITY" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="fuel_tank_cc">
                                  <label for="name" class="text-dark ">Capacity(Ltr)</label>
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
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                  <input type="text" class="" placeholder=" " id="accessory">
                                  <label for="name" class="text-dark ">Accessories</label>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Status</label>
                                  <select class="form-select py-2" id="STATUS" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 ">
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Filter Card -->
          <div class="filter-card mb-2">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select Brand</option>
                      <option value="1">Mahindra</option>
                      <option value="2">Swaraj</option>
                      <option value="3">John Deere</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <!-- <input type="text" id="search_email" name="search_email" class="form-control" /> -->
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select Model</option>
                      <option value="1">3032 NX</option>
                      <option value="2">3030 NX</option>
                      <option value="3">3230 NX</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select HP</option>
                      <option value="1">32 HP</option>
                      <option value="2">40 HP</option>
                      <option value="3">37 HP</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                  <div class="">
                    <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                    <button type="button" class="btn-success btn px-4 py-2" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" mb-5">
            <div class="table-responsive">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white">Model</th>
                    <th class="d-none d-md-table-cell text-white">No. of Cylinder</th>
                    <th class="d-none d-md-table-cell text-white">PTO HP</th>
                    <th class="d-none d-md-table-cell text-white"> HP Category</th>
                    <th class="d-none d-md-table-cell text-white"> Brakes</th>
                    <th class="d-none d-md-table-cell text-white">Steering</th>
                    <th class="d-none d-md-table-cell text-white">Tyres</th>
                  </tr>
                </thead>
                <tbody id="data-table" class="">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>


    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>

<script src="<?php $baseUrl; ?>model/tractor_listing.js"></script>



<script>
  // $(document).ready(function() {
  //   $('#type_name').select2();
  // });
</script>