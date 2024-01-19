<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/old_farm_equilist.js"></script>
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
                <span>Old Farm Implements</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right add_trac" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Old Farm Implements
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Farm Implements</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <!-- <h4 class="text-center">Fill your Tractor Details</h4> -->
                              <form id="old_farm_implement" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-3">
                                <h5 class="fw-bold">Your Old Farm Implements Information</h5>
                                
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden >
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">id</label>
                                    <input type="text" class="form-control" placeholder="" value="" id="EditIdmain_" name="">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Category</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="category"name="category">
                                      
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="brand"name="brand">
                                     
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Model Name</label>
                                    <input type="text" class="form-control"  id="model"name="model">
                                   
                                  </div>
                                </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="year" name="year">
                                      <option value="">Select Purchase Year</option>
                                      <option value="2020">2020</option>
                                       <option value="2021">2021</option>
                                    </select>
                                  </div>
                                </div>
                               
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Hours Drive</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="hours_driven" name="hours">
                                      <option value="">Select Hours Drive</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                    </select>
                                    </select>
                                  </div>
                                </div>
                                
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                  <div class="form-outline">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                  </div>
                               </div>
                              
                                <div class="col-12 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">About</label>
                                      <textarea rows="3" cols="70" class="w-100 p-2" minlength="1" maxlength="255" id="about" name="about"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                <div class="upload__box mt-5">
                                        <div class="upload__btn-box text-center">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                      </div>
                                        </div>
                                  <h5 class="fw-bold mt-4 ">Personal Information</h5>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                  <div class="form-outline">
                                    <label for="name" class="form-label text-dark"> First Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark"> Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Name">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Mobile</label>
                                    <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">State</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="state" name="state">
                                        <option value="">Select State</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Others">Others</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">District</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="district" name="district">
                                        <option value="">Select Districte</option>
                                        <option value="Jagdalpur">Jagdalpur</option>
                                        <option value="Sarguja">Sarguja</option>
                                        <option value="Dhamtari">Dhamtari</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                        <option value="">Select Tehsil</option>
                                        <option value="Jagdalpur">Jagdalpur</option>
                                          <option value="Sarguja">Sarguja</option>
                                          <option value="Dhamtari">Dhamtari</option>
                                      </select>
                                  </div>
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer mt-3">
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="submitbtn" class="btn btn-success btn_all">Submit</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3"hidden>
              <div class="form-outline">
                <label class="form-label">Search By id</label>
                  <select class=" form-select form-control mb-0" id="brand_id">
                  </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select py-2" aria-label="Default select example" id="brand2">
                  
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                  <input type="text" class="form-control" id="model2" name="model2">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example"  id="state2">
                    <option value>Select State</option>
                    <option value="Chattisgarh">Chattisgarh</option>
                    <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example" id="district2">
                    <option value>Select District</option>
                    <option value="Raipur">Raipur</option>
                    <option value="Bilaspur">Bilaspur</option>
                    <option value="Surajpur">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 my-4">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white mt-3">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                      <th class="d-none d-md-table-cell text-white">S.No.</th>
                      <th class="d-none d-md-table-cell text-white">Date</th>
                      <th class="d-none d-md-table-cell text-white">Brand</th>
                      <th class="d-none d-md-table-cell text-white">Model</th>
                      <th class="d-none d-md-table-cell text-white">Seller name</th>
                      <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                      <th class="d-none d-md-table-cell text-white">Year</th>
                      <th class="d-none d-md-table-cell text-white">State</th>
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


     <!-- view -->
     <div class="modal fade" id="old_farm_view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Tractor Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Brand:-</td>
                            <td id="brand_2"></td>
                            <td>Model-</td>
                            <td id="model_2"></td>
                          </tr>
                         <tr>
                            <td>First Name:-</td>
                            <td id="first_name2"></td>
                            <td>Last Name-</td>
                            <td id="last_name2"></td>
                          </tr>
                          <tr>
                            <td>Mobile Number-</td>
                            <td id="mobile"></td>
                            <td>Email-</td>
                            <td id="email_2"></td>
                          </tr>
                          <tr>
                            <td>Date-</td>
                            <td id="date_2"></td>
                            <td>Year-</td>
                            <td id="year_2"></td>
                          </tr>
                          <tr>
                          <td>State-</td>
                            <td id="state_2"></td>
                            <td>District-</td>
                            <td id="district_2"></td>
                          </tr>
                          <tr>
                          <td>Tehsil-</td>
                            <td id="tehsil2"></td>
                          </tr>
                          <tr>
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
   </section>
      
    
</div>
</div>
</body>
