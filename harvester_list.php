<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/add_new_harvester.js"></script>
  <script src="<?php $baseUrl; ?>model/brand_function.js"></script>
<body class="loaded"> 
<div class="main-wrapper">
    <div class="app" id="app">
    <?php
    include 'includes/left_nav.php';
    include 'includes/header_admin.php';
    ?>
   <section style="padding: 0 15px 0 60px;">
    <div class="">
      <div class="">
      <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <span>Harvester Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" onclick="resetFormFields();" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New Harvester
          </button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight:600">Fill your Details</h4>
                            <form id="harvester_form">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Product id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="4" id="product_type_id" name="product_type_id">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3" hidden>
                                      <div class="form-outline">
                                        <label class="form-label">id</label>
                                        <input type="text" name="id" id="id" class="form-control">
                                      </div>
                                    </div>
                                <div class="row justify-content-center py-3">
                                  <h5 class="fw-bold mb-3">Specification</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Brand</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example" id="brand" name="brand">
                                      
                                      </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Model</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example" name="model" id="model">
                                      
                                      </select>
                                        <!-- <input type="text" name="model" id="model" class="form-control"> -->
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Engine Rated RPM</label>
                                        <input type="text" name="rpm" id="rpm" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">HP Power</label>
                                        <input type="text" name="hp_power" id="hp_power" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Air Filter</label>
                                        <select class="form-select form-control" id="AIR_FILTER" name="AIR_FILTER" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cylinder</label>
                                        <select class="form-select form-control" id="TOTAL_CYLINDER" name="TOTAL_CYCLINDER" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Power Source</label>
                                        <select class="form-select form-control" id="POWER_SOURCE" name="POWER_SOURCE" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Cutter Bar & Cutting Mechanism</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cutter Bar Width (ft.)</label>
                                        <input type="text" name="cutting_bar" id="cutting_bar" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Cutting Height</label>
                                        <input type="text" name="cuttingmax_height" id="cuttingmax_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Cutting Height</label>
                                        <input type="text" name="cuttingmin_height" id="cuttingmin_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment</label>
                                        <!-- <input type="text" name="height_adjust" id="height_adjust" class="form-control"> -->
                                        <select class="form-select form-control" id="CUTTER_BAR_HEIGHT_ADJUSTMENT" name="CUTTER_BAR_HEIGHT_ADJUSTMENT" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Reel</h5>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <!-- <input type="text" name="type" id="type" class="form-control"> -->
                                        <select class="form-select form-control" id="REEL_TYPE" name="REEL_TYPE" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Reel Diameter</label>
                                        <input type="text" name="reel_dia" id="reel_dia" class="form-control">


                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Speed Adjustment</label>
                                        <!-- <input type="text" name="speed_adj" id="speed_adj" class="form-control"> -->
                                        <select class="form-select form-control" id="REEL_SPEED_CONTROL" name="REEL_SPEED_CONTROL" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Revolution</label>
                                        <input type="text" name="min_revol" id="min_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Revolution</label>
                                        <input type="text" name="max_revol" id="max_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment</label>
                                        <!-- <input type="text" name="REEL_HEIGHT_ADJUSTMENT" id="height_adj" class="form-control"> -->
                                        <select class="form-select form-control" id="REEL_HEIGHT_ADJUSTMENT" name="REEL_HEIGHT_ADJUSTMENT" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>

                                    <h5 class="fw-bold my-3">Cooling System</h5>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cooling System</label>
                                        <!-- <input type="text" name="min_revol" id="cool_system" class="form-control"> -->
                                        <select class="form-select form-control" id="COOLING" name="COOLING" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Coolent Capacity</label>
                                        <input type="text" name="cool_capacity" id="cool_capacity" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Threshing & Cleaning System</h5>
                                    <div class="col-12 col-sm-6 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Width</label>
                                        <input type="text" name="drump_width" id="drump_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Length</label>
                                        <input type="text" name="drump_length" id="drump_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Diameter</label>
                                        <input type="text" name="drump_diameter" id="drump_diameter" class="form-control">

                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drum Speed Adjustment</label>
                                        <!-- <input type="text" name="drump_adjust" id="drump_adjust" class="form-control"> -->
                                        <select class="form-select form-control" id="THRESHING_DRUM_SPEED_ADJUSTMENT" name="THRESHING_DRUM_SPEED_ADJUSTMENT" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Clearance Concave</label>
                                        <input type="text" name="clear_concave" id="clear_concave" class="form-control">
                                      </div>
                                    </div>
                                    
                                    <h5 class="fw-bold my-3">Grain Handling</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Grain Trank Capacity (m3)</label>
                                        <input type="text" name="tank_capa" id="tank_capa" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3"></div>

                                    <h5 class="fw-bold my-3">Transmission and Clutch</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Transmission (No. Of Gears)</label>
                                        <input type="text" name="transmission_gears" id="transmission_gears" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Clutch Type</label>
                                        <select class="form-select form-control" id="TRANSMISSION_CLUTCH" name="TRANSMISSION_CLUTCH" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Tyre Specification</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Front)</label>
                                        <input type="text" name="tyre_sizefront" id="tyre_sizefront" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Rear)</label>
                                        <input type="text" name="tyre_sizerear" id="tyre_sizerear" class="form-control">
                                      </div>
                                    </div>
                                    <!-- <h5 class="fw-bold my-3">Fuel & Capacity</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Fuel Tank Capacity(L)</label>
                                        <input type="text" name="fuel_capacity" id="fuel_capacity" class="form-control">
                                      </div>
                                    </div> -->
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Total weight Without Grain(kg)</label>
                                        <input type="text" name="total_weight_without_grains" id="total_weight_without_grains" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Dimensions & Clearance</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Length(mm)</label>
                                        <input type="text" name="dia_length" id="dia_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height(mm)</label>
                                        <input type="text" name="dia_height" id="dia_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Width(mm)</label>
                                        <input type="text" name="dia_width" id="dia_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Ground Clearance</label>
                                        <input type="text" name="ground_clerance" id="ground_clerance" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Crops & Additional Features</h5>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Crops</label>
                                        <!-- <input type="text" name="crops" id="crops" class="form-control"> -->
                                        <select class="form-select form-control" id="CROPS_TYPE" name="CROPS_TYPE" aria-label="Default select example">
                                            <option selected disabled>Please select an option</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5">
                                      <div class="upload__box text-center">
                                          <div class="upload__btn-box text-center">
                                            <label >
                                                  <p class="upload__btn">Upload images</p>
                                                  <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image_name" name="_image"required>
                                              </label>
                                           </div>
                                           <p class="text-danger">Note*- Image Must be JPEG, PNG & JPG format</p>
                                          <div class="col-12">
                                            <div id="selectedImagesContainer2" class="upload__img-wrap float-start"></div>
                                          </div>
                                          
                                      </div>
                                  </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success btn_all" id="add_harvester">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select form-control " id="brand_name1" aria-label="Default select example">
                   
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3" hidden>
            <label class="form-label">Search By id</label>
                      <select class="js-select2 form-select form-control mb-0" id="brand_id">
                      </select>
                
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Model Name</label>
                <select class="form-select form-control "  id="model1" aria-label="Default select example">
                   
                   </select>
               <!-- <input type="text" id="model1" class="form-control"> -->
              </div>
            </div>
          
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="text-center">
                    <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                    <button type="button" class="btn-success btn btn_all" id="Reset" onclick="resetform()">Reset</button>
                </div>
            </div>
           
            
            
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model Name </th>
                <th class="d-none d-md-table-cell text-white">HP Power</th>
                <th class="d-none d-md-table-cell text-white">Air Filter</th>
                <th class="d-none d-md-table-cell text-white">Crops</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody id="data-table">
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="modal fade" id="view_model_harvester" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h4 class="modal-title">All Harvester Information</h4>
        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <table class="table">
                        <tbody>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Listing</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Brand</td>
                            <td class="bg-light" id="brand_name"></td>
                            <td>Model Name</td>
                            <td id="model_name"></td>
                          </tr>
                          <tr>
                            <td>Engine Rated RPM</td>
                            <td id="engine_rpm"></td>
                            <td class="bg-light">HP Power</td>
                            <td class="bg-light"> <span id="hp_power2"></span> HP</td>
                          </tr>
                          <tr>
                          <td>Air Filter</td>
                            <td id="air_filter"></td>
                            <td class="bg-light">Cylinder</td>
                            <td id="cylinder" class="bg-light"></td>
                          </tr>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Cutter Bar & Cutting Mechanism</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Cutter Bar Width (ft.)</td>
                            <td class="bg-light"><span id="cutter_bar_width"></span> mm</td>
                            <td>Maximum Cutting Height</td>
                            <td id=""><span id="max_cutting_height"></span> mm</td>
                          </tr>
                          <tr>
                            <td>Minimum Cutting Height</td>
                            <td id=""> <span id="min_cutting_height"></span> mm</td>
                            <td class="bg-light">Height Adjustment</td>
                            <td id="" class="bg-light"><span id="height_adjust"></span> </td>
                          </tr>
                          <tr>
                            <td colspan="4" class="fw-bold text-center py-3">Reel</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Type</td>
                            <td id="reel_type"class="bg-light"></td>
                            <td>Reel Diameter</td>
                            <td id=""> <span id="reel_diameter"></span> mm</td>
                          </tr>
                          <tr>
                            <td>Speed Adjustment</td>
                            <td id="speed_adjust"></td>
                            <td class="bg-light">Minimum Revolution</td>
                            <td id=""class="bg-light">  <span id="min_revo"></span> mm</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Maximum Revolution</td>
                            <td id="" class="bg-light"> <span id="max_revo"></span> mm</td>
                            <td>Height Adjustment</td>
                            <td id="reel_height_adjust"></td>
                          </tr>
                          <tr>
                          <td colspan="4" class="fw-bold text-center py-3">Cooling System</td>
                          </tr>
                          <tr>
                            <td class="bg-light">Cooling System</td>
                            <td id="cooling_sys" class="bg-light"></td>
                            <td>Coolent Capacity</td>
                            <td id=""> <span id="coolent_capacity"></span> Ltr.</td>
                          </tr>
                          <tr>
                          <td colspan="4" class="fw-bold text-center py-3">Threshing & Cleaning System</td>
                          </tr>
                          <tr>
                            <td>Thresing Drump Width</td>
                            <td id=""><span id="thresing_duump_width"></span> mm</td>
                            <td class="bg-light">Thresing Drump Length</td>
                            <td id="" class="bg-light"><span id="drump_length1"></span> mm</td>
                          </tr> <tr>
                            <td class="bg-light">Thresing Drump Diameter</td>
                            <td id="" class="bg-light"> <span id="drump_diameter1"></span> mm</td>
                            <td>Thresing Drum Speed Adjustment</td>
                            <td id=""> <span id="drump_speed_adjust"></span> </td>
                            
                          </tr>
                          <tr>
                          <td>Clearance Concave</td>
                            <td id=""><span id="clearance_concave"></span> mm</td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Grain Handling & Transmission and Clutch</td>
                          <tr>
                            <td class="bg-light">Grain Trank Capacity (m3)</td>
                            <td id="grain_tank_capacity" class="bg-light"></td>
                            <td>Clutch Type</td>
                            <td id="clutch_type"></td>
                          </tr>
                         
                          <td colspan="4" class="fw-bold text-center py-3">Tyre Specification</td>
                          <tr>
                            <td class="bg-light">Tyre Size(Front)</td>
                            <td id="front_tyre" class="bg-light"></td>
                            <td>Tyre Size(Rear)</td>
                            <td id="rear_tyre"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Fuel & Capacity</td>
                          <tr>
                            <!-- <td class="bg-light">Fuel Tank Capacity(L)</td>
                            <td id="fuel_capacity1" class="bg-light"></td> -->
                            <td>Total weight Without Grain(kg)</td>
                            <td id="weight_grain"></td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Dimensions & Clearance</td>
                          <tr>
                            <td class="bg-light">Length(mm)</td>
                            <td id="length" class="bg-light"></td>
                            <td>Height(mm)</td>
                            <td id="height"></td>
                          </tr>
                          <tr>
                            <td>Width(mm)</td>
                            <td id="width"></td>
                            <td>Ground Clearance</td>
                            <td > <span id="ground_clearance"></span> mm</td>
                          </tr>
                          <td colspan="4" class="fw-bold text-center py-3">Crops & Additional Features</td>
                          <tr>
                            <td class="bg-light">Crops</td>
                            <td id="crops" class="bg-light"></td>
                          </tr>
                          
                          <tr>
                            <td class="bg-light">Upload images</td>
                            <td colspan="3">
                              <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                 
                            </td>
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
  </section>
      
    
</div>
</div>
</body>

