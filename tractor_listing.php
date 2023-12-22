<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script>
<script>
  $(document).ready(function() {
    console.log('dfsdwe');
  $(".js-select2").select2({
    closeOnSelect: false
  });
});
</script>
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

              <!-- Add new tractor -->
              <a href="tractor_form_list.php" type="button"  class="btn add_btn btn-success float-right" >
                <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
              </a>

              
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Filter Card -->
          <div class="filter-card mb-2">
            <div class="card-body">
              <div class="row" id="myForm">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search By Brand</label>
                    <select class="js-select2 form-select" id="brand">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold  mb-2">Search by Model</label>
                    <select class="js-select2 form-select" id="model">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search by HP</label>
                    <select class="js-select2 form-select" id="hp">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                  <div class="mt-3 pt-1">
                    <button type="button" class="btn-success btn px-4 py-2"  id="Search">Search</button>
                    <button type="reset" value = "Reset data"  class="btn-success btn px-4 py-2" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-5">
            <div class="table-responsive shadow bg-white">
              <table id="example" class="table bg-white table-striped table-hover py-1" width="100%">
                  <thead>
                    <tr>
                      <th class="d-none d-md-table-cell text-white">S.No.</th>
                      <th class="d-none d-md-table-cell text-white">Date</th>
                      <th class="d-none d-md-table-cell text-white">Brand</th>
                      <th class="d-none d-md-table-cell text-white">Model</th>
                      <th class="d-none d-md-table-cell text-white">Wheel Drive</th>
                      <th class="d-none d-md-table-cell text-white"> HP Category</th>
                      <th class="d-none d-md-table-cell text-white"> Price</th>
                      <th class="d-none d-md-table-cell text-white">Action</th>
                    </tr>
                  </thead>
                <tbody id="data-table" class="">
                </tbody>
              </table>
            </div>

            <!-- model -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Enter Subject Name:</label>
                            <input type="text" placeholder="Subject Name" class="form-control" id="subject_name1" prachii=""></input>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Enter Subject Code:</label>
                            <input type="text" placeholder="Subject Code" class="form-control" id="subject_code1" name="">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Subject Type:</label>
                            <select placeholder="Slect name" class="form-control" id="subject_type1" name="">
                              <option value="Theory">Theory</option>
                              <option value="Practical">Practical</option>
                              <option value="NUE">Non-University Exam</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="prachiedit" data-dismiss="modal">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    </div>
  </div>
</body>
<div class="modal fade" id="editAdminbtn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                             
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
                                  <select class="form-select py-2" id="FUEL_PUMP" aria-label="Default select example">
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
                              <!-- <h5 class="fw-bold mt-3">Fuel Tank</h5>
                              <div  class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <div class="form-outline">
                                  <label class="form-label">Capacity(Ltr)</label>
                                  <input type="text" placeholder=" " id="fuel_tank_cc"  name="fuel_tank_cc" class="form-control">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="viewModal_btn" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New Tractor Information</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Listing</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                            <p>Brand-</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                            <p id="brand_"></p>
                          </div>
                        </div>
                       </div>

                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Model Name-</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="model_"></p>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Product Type</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="P_type_val"></p>
                          </div>
                        </div>
                      </div> -->
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>HP Category</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="hp_"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>No. of Cylinder</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="cylinder_"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>PTO HP</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="pto_hp_"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Gear Box Forward</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Gear_Box_Forward_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Gear Box Reverse</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Gear_Box_Reverse_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Brakes</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="brakes_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Starting Price</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Starting_Price_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Ending Price</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Ending_Price_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Warranty</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Warranty_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Select Tractor Type</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p id="Select_Tractor_Type_1"></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Upload images</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div class="row">
                            <div class="col-12 col-sm-3 col-md-3 col-lg-3" id="image_1"></div>
                           </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Engine Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                      
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Capacity CC</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="capacity_cc_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Engine Rated RPM</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Engine_Rated_RPM_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Select Cooling</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Select_Cooling_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Air Filter</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Air_Filter_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Fuel pump</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Fuel_pump_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Torque</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Torque_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 bg-light"><h6 class="fw-bold text-center py-1">Transmission Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Type</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Type_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Clutch</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Clutch_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Min Forward Speed</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Min_Forward_Speed_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Max Forward Speed</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Max_Forward_Speed_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Min Reverse Speed</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Min_Reverse_Speed_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Max Reverse Speed</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Max_Reverse_Speed_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1"> Steering Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Type</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="st_Type_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Coloumn</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Coloumn_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Power Take Off Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Type</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Type2_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>RPM</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="RPM_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Dimensions And Weight Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Total Weight</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Total_Weight_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Wheel Base</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Wheel_Base_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Hydraulics Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Lifting Capacity</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Lifting_Capacity_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>3 Point Linkage</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Point_Linkage_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1"> Wheels And Tyres Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Wheel Drive</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Wheel_Drive_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Front</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Front_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Rear</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Rear_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="clo-12 bg-light"><h6 class="fw-bold text-center py-1">Other Information Details</h6></div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Accessories</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Accessories_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>Status</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="Status_1"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 my-1">
                        <div class="row">
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <p>About</p>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                           <div id="About_1"></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>

<script>
//    function fun(){  
//    document.getElementById("myForm").reset();  
//  }   
</script>
<script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script>
