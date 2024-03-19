<?php
    include 'includes/headertag.php';
    // $product_id=$_REQUEST['product_id'];
    // echo $product_id;
    include 'includes/footertag.php';
    ?>
   
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
   <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
   <script src="<?php $baseUrl; ?>model/old_harvesteradmin.js"></script>
   <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
  <script src="<?php $baseUrl; ?>model/state2_dist2.js"></script>
  <script src="<?php $baseUrl; ?>model/brand_function.js"></script>
  
  <style>
        .upload__inputfile {
  width: .1px;
  height: .1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
  }

  .upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 150px;
  padding: 5px;
  transition: all .3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color:  #198754;
  border-color:  #198754;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
  }

  .upload__btn:hover {
  background-color: unset;
  color:  #198754;
  transition: all .3s ease;
  }

  .upload__btn-box {
  margin-bottom: 10px;
  margin-top:-25px;
  }

  .upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
  }

  .upload__img-box {
  flex: 0 0 calc(33.333% - 20px); 
  margin: 0 10px 20px; 
  position: relative;
  display: flex;
    flex-wrap: wrap;
  }

  .upload__img-close,.upload__img-close_button {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 60px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
  }

  .upload__img-close:after,.upload__img-close_button:after {
  content: '\2716';
  font-size: 14px;
  color: white;
  }
  

  .img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  position: relative;
  width: 123;
  height: 125px;
  }
      
    </style>
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
                <span>Old Harvester List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  onclick="resetFormFields()"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Old Harvester
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <!-- <h4 class="text-center">Fill your Tractor Details</h4> -->
                              <form id="old_form" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-3">
                                <h5 class="fw-bold">Your Harvester Information</h5>
                              
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden >
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark"> customer_id id</label>
                                    <input type="text" class="form-control"  id="customer_id" name="" value="">
                                  </div>
                               </div>
                               <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Product id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="3" id="product_type_id" name="product_type_id">
                                  </div>
                               </div> -->
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Form type</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="FOR_SELL_HARVESTER" id="form_type" name="form_type">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="brand_brand" name="brand">
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Model Name</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example"  id="model_model" name="model">
                                    </select>
                                    <!-- <input type="text" class="form-control" placeholder="Enter Your Model Name" id="model" name="model"> -->
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Crop Type</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="CROPS_TYPE" name="CROPS_TYPE">
                                       
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark"> Power Source</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="POWER_SOURCE" name="POWER_SOURCE">
                                      
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Hours</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="hours" name="hours">
                                    </select>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="year" name="year">
                                          
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                  <div class="form-outline">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="upload__box ">
                                     <div class="upload__btn-box text-center mt-3">
                                      <label >
                                        <p class="upload__btn ">Upload images</p>
                                        <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image">
                                      </label>
                                    </div>
                                    <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                  </div>
                                </div>
                                <div class="col-12 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">About</label>
                                      <textarea rows="4" cols="70" class="w-100 p-2" minlength="1" maxlength="255" id="about" name="about"></textarea>
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
                                    <select class="form-select form-control state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                       
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">District</label>
                                    <select class="form-select form-control district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                       
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select form-control tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                     
                                    </select>
                                  </div>
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer mt-3">
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submitbtn" class="btn btn-success btn_all">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" ">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select form-control brand_select" id="brand2">
                 
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                <!-- <input type="text" class="form-control" id="model_name" name="model"> -->
                    <select class="form-select form-control model_select" aria-label="Default select example"id="model_name" name="model">
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select form-control state_select" aria-label="Default select example" id="state_name" name="state">
                
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select form-control district_select" aria-label="Default select example" id="district_name" name="district">
                  
                </select>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="text-center">
                <button type="button" class="btn-success btn btn_all" id="Search" onclick="searchdata()">Search</button>
                <button type="button" class="btn-success btn btn_all" id="Reset" onclick="resetform()">Reset</button>
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
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white"> Model </th>
                    <th class="d-none d-md-table-cell text-white"> Year </th>
                    <th class="d-none d-md-table-cell text-white"> Phone Number </th>
                    <th class="d-none d-md-table-cell text-white"> State </th>
                    <th class="d-none d-md-table-cell text-white"> district </th>
                    <th class="d-none d-md-table-cell text-white"> Action </th>
                  </tr>
                </thead>
              <tbody id="data-table">
              </tbody>
            </table>
          </div>
    </div>
   </section>
      
   <div class="modal fade" id="view_old_harvester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Harvester Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr>
                            <td>Brand-</td>
                            <td id="brand_name"></td>
                            <td>Model Name-</td>
                            <td id="model_name_1"></td>
                          </tr>
                          <tr>
                            <td>Crop Type-</td>
                            <td id="CROPS_TYPE_1"></td>
                            <td>Power Sourcer-</td>
                            <td id="POWER_SOURCE_1"></td>
                          </tr>
                          <tr>
                            <td>Hours-</td>
                            <td id="hours_1"></td>
                            <td>Purchase Year-</td>
                            <td id="year_1"></td>
                          </tr>
                          <tr>
                            <td>Price-</td>
                            <td id="Price_1"></td>
                            <tr>
                              <td>Upload images-</td>
                              <td colspan="3">
                                  <div class="col-12">
                                      <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                  </div>
                              </td>
                          </tr>
                            <td>About-</td>
                            <td id="About_1"></td>
                          <tr>
                            <td>First Name-</td>
                            <td id="First_Name"></td>
                            <td>Last Name-</td>
                            <td id="Last_Name"></td>
                          </tr>
                          <tr>
                            <td>Mobile-</td>
                            <td id="Mobile_1"></td>
                            <td>State-</td>
                            <td id="State_1"></td>
                          </tr>
                          <tr>
                            <td>District-</td>
                            <td id="District_1"></td>
                            <td>Tehsil-</td>
                            <td id="Tehsil_1"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>  
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <!-- <button type="submit" id="btn_sb" class="btn btn-success fw-bold px-3">Submit</button> -->
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</div>

<!-- Modal -->
        <!-- <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <form id="old_form" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-3">
                                <h5 class="fw-bold">Your Harvester Information</h5>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Enquiry id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="enquiry_type_id" name="enquiry_type_id" value="3">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Product id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="3" id="product_type_id" name="product_type_id">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Form type</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="FOR_SELL_HARVESTER" id="form_type" name="form_type">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="brand" name="brand">
                                      
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Model Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="model1" name="model">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Crop Type</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="CROPS_TYPE" name="CROPS_TYPE">
                                       
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark"> Power Source</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="POWER_SOURCE" name="POWER_SOURCE">
                                      
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Hours</label>
                                    <select class="form-select form-control " aria-label=".form-select-lg example" id="hours1" name="hours">
                                    </select>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="year1" name="year">
                                          
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                  <div class="form-outline">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price1" name="price">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                          <div class="upload__box ">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                                <div class="col-12 mt-3">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">About</label>
                                      <textarea rows="4" cols="70" class="w-100 p-2" minlength="1" maxlength="255" id="about1" name="about"></textarea>
                                    </div>
                                </div>
                                  <h5 class="fw-bold mt-4 ">Personal Information</h5>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                  <div class="form-outline">
                                    <label for="name" class="form-label text-dark"> First Name</label>
                                    <input type="text" class="form-control" id="name1" name="name" placeholder="Enter Your Name">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark"> Last Name</label>
                                    <input type="text" class="form-control" id="lname1" name="lname" placeholder="Enter Your Name">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label for="name" class="form-label text-dark">Mobile</label>
                                    <input type="text" class="form-control"  id="Mobile1" name="Mobile" placeholder="Enter Your Number">
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">State</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="state1" name="state">
                                        <option value="">Select State</option>
                                        <option value="1">Chhattisgarh</option>
                                        <option value="2">Others</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">District</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="district1" name="district">
                                        <option value="">Select Districte</option>
                                        <option value="1">Jagdalpur</option>
                                        <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                  <div class="form-outline ">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select form-control" aria-label=".form-select-lg example" id="tehsil1" name="tehsil">
                                        <option value="">Select Tehsil</option>
                                        <option value="1">Jagdalpur</option>
                                          <option value="2">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer mt-3">
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submitbtn" class="btn btn-success btn_all">Submit</button>
                </div>
              </div>
            </div>
        </div> -->

</body>


<script>
     $(document).ready(function() {
      $('#price').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            var formattedValue = Number(value).toLocaleString('en-IN'); // Format using Indian numbering system
            $(this).val(formattedValue);
        });

        // Set cursor position to the beginning of the input field
        var input = document.getElementById('price');
        input.focus();
        input.setSelectionRange(0, 0);

        // Set text alignment to left
        input.style.textAlign = 'left';
    });
  </script>
                       