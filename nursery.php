<?php
   include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   ?> 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/nursery.js" defer></script>
<script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
<script src="<?php $baseUrl; ?>model/sdt.js" defer></script>
<script src="<?php $baseUrl; ?>model/state2_dist2.js" defer></script>

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
                    <span> Nursery Item Listings</span>
                  </li>
                </ol>
              </nav>
              <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
                  <i class="fa fa-plus" aria-hidden="true"></i> Add New Items
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add New Nursery Item</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                    </div>
                    <div class="modal-body bg-light">
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <h4 class="text-center">Fill your Details</h4>
                          <form id="narsary_list_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-4">
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                <div class="form-outline ">
                                  <label for="name" class="form-label text-dark">Nursery Name</label>
                                  <input type="text" class="form-control" placeholder="" id="name" name="name">
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                <div class="form-outline">
                                  <label for="name" class="form-label text-dark">First Name</label>
                                  <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                <div class="form-outline mt-2">
                                  <label for="name" class="form-label text-dark">Last Name</label>
                                  <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                <div class="form-outline mt-2">
                                  <label for="name" class="form-label text-dark">Mobile Number</label>
                                  <input type="text" class="form-control" placeholder="" id="number" name="number">
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-outline mt-3">
                                  <label class="form-label" for="state_">State</label>
                                  <select class="form-select py-2 state-dropdown1" aria-label="Default select example" id="state_" name="state_">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-outline mt-3">
                                  <label class="form-label" for="dist">District</label>
                                  <select class="form-select py-2 district-dropdown1" aria-label="Default select example" id="dist" name="dist">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-outline mt-3">
                                  <label class="form-label" for="tehsil">Tehsil</label>
                                  <select class="form-select py-2 tehsil-dropdown1" aria-label="Default select example" id="tehsil">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-outline mt-4">
                                  <label for="name" class="form-label text-dark">Location</label>
                                  <input type="text" class="form-control" placeholder="" id="loc" name="loc">
                                </div>
                              </div>
                              <div class="col-12  ">
                              <div class="form-outline mt-3">
                                <label class="form-label text-dark">Description</label>
                                <textarea rows="3" cols="70" class="w-100 py-2" minlength="" maxlength="1000" id="textarea_d" name="textarea_d"></textarea>
                              </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5">
                                <div class="upload__box mt-3">
                                  <div class="upload__btn-box text-center">
                                    <label>
                                      <p class="upload__btn ">Upload images</p>
                                      <input type="file" name='files[]'  multiple="" data-max_length="20" class="upload__inputfile" id="_image">
                                    </label>
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
                      <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                      <button type="submit" id="btn_sb" class="btn btn-success fw-bold px-3">Submit</button>
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
                    <label class="form-label">Name</label>
                    <input type="text" id="name1" name="name1" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label for="state_1" class="form-label">State</label>
                    <select class="form-select py-2 state_select" aria-label="Default select example" id="state_1" name="state_1">
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label for="district_1" class="form-label">District</label>
                    <select class="form-select py-2 district_select" aria-label="Default select example" id="district_1" name="district_1">
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="text-center">
                    <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                    <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset" onclick="resetform()">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Table Card -->
          <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Name</th>
                    <th class="d-none d-md-table-cell text-white">Phone Number </th>
                    <th class="d-none d-md-table-cell text-white">State </th>
                    <th class="d-none d-md-table-cell text-white">District</th>
                    <th class="d-none d-md-table-cell text-white">Action</th>
                  </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="view_model_nursery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content modal_box">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Nursery Information </h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <div class="row ">
                <div class="col-12">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>Nursery Name-</td>
                          <td id="nursery_name"></td>
                          <td>First Name-</td>
                          <td id="fname1"></td>
                        </tr>
                        <tr>
                          <td>Last Name-</td>
                          <td id="lname1"></td>
                          <td>Mobile Number-</td>
                          <td id="number1"></td>
                        </tr>
                        <tr>
                          <td>State-</td>
                          <td id="state1"></td>
                          <td>District-</td>
                          <td id="dist1"></td>
                        </tr>
                        <tr>
                          <td>Tehsil-</td>
                          <td id="tehsil1"></td>
                          <td>Location-</td>
                          <td id="loc1"></td>
                        </tr>
                        <tr>
                          <td>Description-</td>
                          <td colspan="3">
                            <div class="col-12" id="textarea"></div>
                          </td>
                        </tr>
                        <tr>
                          <td>Upload images-</td>
                          <td colspan="3">
                            <div class="col-12">
                              <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
    <div class="modal fade" id="editmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal_box">
          <div class="modal-header modal_head">
            <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Nursery</h5>
            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
          </div>
          <div class="modal-body bg-light">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <h4 class="text-center">Fill your Details</h4>
                <form id="narsary_list_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                  <div class="row justify-content-center pt-4">
                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                      <div class="form-outline ">
                        <label for="name" class="form-label text-dark">Nursery</label>
                        <input type="text" class="form-control" placeholder="" id="userId" name="name">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                      <div class="form-outline ">
                        <label for="name" class="form-label text-dark">Nursery Name</label>
                        <input type="text" class="form-control" placeholder="" id="nursery_name2" name="name">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                      <div class="form-outline">
                        <label for="name" class="form-label text-dark">First Name</label>
                        <input type="text" class="form-control" placeholder="" id="fname2" name="fname">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                      <div class="form-outline mt-2">
                        <label for="name" class="form-label text-dark">Last Name</label>
                        <input type="text" class="form-control" placeholder="" id="lname2" name="lname">
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                      <div class="form-outline mt-2">
                        <label for="name" class="form-label text-dark">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="" id="number2" name="number">
                      </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="form-outline mt-3">
                        <label class="form-label" for="state">State</label>
                        <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state" name="state_">
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="form-outline mt-3">
                        <label class="form-label" for="dist_">District</label>
                        <select class="form-select py-2 district-dropdown" aria-label="Default select example" id="dist_" name="dist">
                        </select>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="form-outline mt-3">
                        <label class="form-label" for="tehsil_">Tehsil</label>
                        <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example" id="tehsil_" name="tehsil_">
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-outline mt-4">
                        <label for="name" class="form-label text-dark">Location</label>
                        <input type="text" class="form-control" placeholder="" id="loc2" name="loc">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-outline mt-3">
                        <label class="form-label text-dark">Description</label>
                        <textarea rows="3" cols="70" class="w-100 py-1" minlength="" maxlength="1000" id="textarea_d2" name="textarea_d2"></textarea>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5">
                      <div class="upload__box mt-3">
                        <div class="upload__btn-box text-center">
                          <label>
                            <p class="upload__btn ">Upload images</p>
                            <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="_image2">
                          </label>
                        </div>
                        <div id="selectedImagesContainer2" class="upload__img-wrap"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="undate_btn" class="btn btn-success fw-bold px-3" >Save Change</button>
          </div>
        </div>
      </div>
    </div>
  </body>
