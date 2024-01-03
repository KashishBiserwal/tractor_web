<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/add_new_harvester.js"></script>
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
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New Harvester
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight:600">Fill your Details</h4>
                            <form>
                                <div class="row justify-content-center py-3">
                                  <h5 class="fw-bold mb-3">Specification</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Brand</label>
                                        <input type="email" name="brand" id="brand" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Model</label>
                                        <input type="email" name="model" id="model" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Engine Rated RPM</label>
                                        <input type="email" name="rpm" id="rpm" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">HP Power</label>
                                        <input type="email" name="hp_power" id="hp_power" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Air Filter</label>
                                        <select class="form-select form-control" id="air_filter" name="air_filter" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">Mahindra</option>
                                            <option value="2">Swaraj</option>
                                            <option value="3">John Deere</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Engine</label>
                                        <input type="email" name="engine" id="engine" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cylinder</label>
                                        <select class="form-select form-control" id="cylinder" name="cylinder" aria-label="Default select example">
                                            <option selected disabled></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3"> 3</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Cutter Bar & Cutting Mechanism</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cutter Bar Width (ft.)</label>
                                        <input type="email" name="cutting_bar" id="cutting_bar" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Cutting Height</label>
                                        <input type="email" name="cuttingmax_height" id="cuttingmax_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Cutting Height</label>
                                        <input type="email" name="cuttingmin_height" id="cuttingmin_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment</label>
                                        <input type="email" name="height_adjust" id="height_adjust" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Reel</h5>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Type</label>
                                        <input type="email" name="type" id="type" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Reel Diameter</label>
                                        <input type="email" name="reel_dia" id="reel_dia" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Speed Adjustment</label>
                                        <input type="email" name="speed_adj" id="speed_adj" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Minimum Revolution</label>
                                        <input type="email" name="min_revol" id="min_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Maximum Revolution</label>
                                        <input type="email" name="max_revol" id="max_revol" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-4 col-md-4 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height Adjustment</label>
                                        <input type="email" name="height_adj" id="height_adj" class="form-control">
                                      </div>
                                    </div>

                                    <h5 class="fw-bold my-3">Cooling System</h5>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Cooling System</label>
                                        <input type="email" name="min_revol" id="cool_system" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Coolent Capacity</label>
                                        <input type="email" name="cool_capacity" id="cool_capacity" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Threshing & Cleaning System</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Width</label>
                                        <input type="email" name="drump_width" id="drump_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drump Length</label>
                                        <input type="email" name="drump_length" id="drump_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Thresing Drum Speed Adjustment</label>
                                        <input type="email" name="drump_adjust" id="drump_adjust" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Clearance Concave</label>
                                        <input type="email" name="clear_concave" id="clear_concave" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Grain Handling</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Grain Trank Capacity (m3)</label>
                                        <input type="email" name="tank_capa" id="tank_capa" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Clutch Type</label>
                                        <input type="email" name="clutch_type" id="clutch_type" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Tyre Specification</h5>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Front)</label>
                                        <input type="email" name="tyre_sizefront" id="tyre_sizefront" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Tyre Size(Rear)</label>
                                        <input type="email" name="tyre_sizerear" id="tyre_sizerear" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Fuel & Capacity</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Fuel Tank Capacity(L)</label>
                                        <input type="email" name="fuel_capacity" id="fuel_capacity" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Total weight Without Grain(kg)</label>
                                        <input type="email" name="weight_drain" id="weight_drain" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Dimensions & Clearance</h5>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Length(mm)</label>
                                        <input type="email" name="dia_length" id="dia_length" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Height(mm)</label>
                                        <input type="email" name="dia_height" id="dia_height" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Width(mm)</label>
                                        <input type="email" name="dia_width" id="dia_width" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12  col-sm-6 col-lg-6 col-md-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Ground Clearance</label>
                                        <input type="email" name="ground_clerance" id="ground_clerance" class="form-control">
                                      </div>
                                    </div>
                                    <h5 class="fw-bold my-3">Crops & Additional Features</h5>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline">
                                        <label class="form-label">Crops</label>
                                        <input type="email" name="crops" id="crops" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="upload__box">
                                        <div class="upload__btn-box text-center">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                          <!-- <p></p> -->
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap"></div>
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
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Model Name</label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Name</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">category</label>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="text-center">
                    <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                    <button type="button" class="btn-success btn btn_all" id="Reset">Reset</button>
                </div>
            </div>
           
            
            
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white mt-3">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Category </th>
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model Name </th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
      
    
</div>
</div>
</body>

