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
    closeOnSelect: true
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
              <a href="tractor_form_list.php" type="button"  class="btn add_btn btn-success float-right" onclick="resetFormFields();" >
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
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4"hidden>
                  <div class="form-outline">
                    <label class="form-label">Search By id</label>
                      <select class="js-select2 form-select form-control mb-0" id="brand_id">
                      </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search By Brand</label>
                    <select class="form-select" id="brand">
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold  mb-2">Search by Model</label>
                    <input type="text" name="model" id="model" class="form-control">
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <label class="text-dark fw-bold mb-2">Search by HP</label>
                    <input type="text" name="hp" id="hp" class="form-control">
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                  <div class="mt-4 pt-1">
                    <button type="button" class="btn-success btn px-4 py-2"  id="Search" onclick="search_data()">Search</button>
                    <button type="button" class="btn-success btn btn_all" id="Reset" onclick="resetform()">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
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
                              <div class="">
                             
                                <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center col-12 col-sm-4 col-lg-4 col-md-4 ps-3">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image_name">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap col-12 col-sm-12 col-lg-12 col-md-12"></div>
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
                                  <textarea rows="4" cols="70" class="w-100" minlength="1"  id="description" name="description"></textarea>
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
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h4 class="modal-title">New Tractor Information</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <table class="table">
                        <tbody>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Listing</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Brand-</td>
                            <td class="bg-light" id="brand_"></td>
                            <td>Model Name-</td>
                            <td id="model_"></td>
                          </tr>
                          <tr>
                            <td>HP Category-</td>
                            <td id="hp_"></td>
                            <td class="bg-light">No. of Cylinder-</td>
                            <td id="cylinder_" class="bg-light"></td>
                          </tr>
                          <tr>
                          <td>Gear Box Reverse-</td>
                            <td id="Gear_Box_Reverse_1"></td>
                            <!-- <td class="bg-light">PTO HP-</td>
                            <td id="pto_hp_" class="bg-light"></td> -->
                            <td>Gear Box Forward-</td>
                            <td id="Gear_Box_Forward_1"></td>
                          </tr>
                          <tr>
                          
                            <td class="bg-light">Brakes-</td>
                            <td id="brakes_1" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Starting Price-</td>
                            <td id="Starting_Price_1" class="bg-light"></td>
                            <td>Ending Price-</td>
                            <td id="Ending_Price_1"></td>
                          </tr>
                          <tr>
                            <td>Warranty-</td>
                            <td id="Warranty_1"></td>
                            <td class="bg-light">Select Tractor Type-</td>
                            <td id="Select_Tractor_Type_1" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Upload images-</td>
                            <td colspan="3">
                              <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                 
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Engine Details</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Capacity CC-</td>
                            <td id="capacity_cc_1"class="bg-light"></td>
                            <td>Engine Rated RPM-</td>
                            <td id="Engine_Rated_RPM_1"></td>
                          </tr>
                          <tr>
                            <td>Select Cooling-</td>
                            <td id="Select_Cooling_1"></td>
                            <td class="bg-light">Air Filter-</td>
                            <td id="Air_Filter_1"class="bg-light"></td>
                          </tr>
                          <tr>
                            <td class="bg-light">Fuel pump-</td>
                            <td id="Fuel_pump_1" class="bg-light"></td>
                            <td>Torque-</td>
                            <td id="Torque_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Transmission Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="Type_1" class="bg-light"></td>
                            <td>Clutch-</td>
                            <td id="Clutch_1"></td>
                          </tr>
                          <tr>
                            <td>Min Forward Speed-</td>
                            <td id="Min_Forward_Speed_1"></td>
                            <td class="bg-light">Max Forward Speed-</td>
                            <td id="Max_Forward_Speed_1" class="bg-light"></td>
                          </tr> <tr>
                            <td class="bg-light">Min Reverse Speed-</td>
                            <td id="Min_Reverse_Speed_1" class="bg-light"></td>
                            <td>Max Reverse Speed-</td>
                            <td id="Max_Reverse_Speed_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Steering Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="st_Type_1" class="bg-light"></td>
                            <td>Coloumn-</td>
                            <td id="Coloumn_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Power Take Off Details</td>
                          <tr>
                            <td class="bg-light">Type-</td>
                            <td id="Type2_1" class="bg-light"></td>
                            <td>RPM-</td>
                            <td id="RPM_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Dimensions And Weight Details</td>
                          <tr>
                            <td class="bg-light">Total Weight-</td>
                            <td id="Total_Weight_1" class="bg-light"></td>
                            <td>Wheel Base-</td>
                            <td id="Wheel_Base_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Hydraulics Details</td>
                          <tr>
                            <td class="bg-light">Lifting Capacity-</td>
                            <td id="Lifting_Capacity_1" class="bg-light"></td>
                            <td>3 Point Linkage-</td>
                            <td id="Point_Linkage_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Wheels And Tyres Details</td>
                          <tr>
                            <td class="bg-light">Wheel Drive-</td>
                            <td id="Wheel_Drive_1" class="bg-light"></td>
                            <td>Front-</td>
                            <td id="Front_1"></td>
                          </tr>
                          <tr>
                            <td>Rear-</td>
                            <td id="Rear_1"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Other Information Details</td>
                          <tr>
                            <td class="bg-light">Accessories-</td>
                            <td id="Accessories_1" class="bg-light"></td>
                            <td>Status-</td>
                            <td id="Status_1"></td>
                          </tr>
                          <tr>
                            <td>About-</td>
                            <td id="About_1"></td>
                          </tr>
                        </tbody>
          </table>
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
<!-- <script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script> -->
