<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/old_farm_eqi_list.js"></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
  <script src="<?php $baseUrl; ?>model/state2_dist2.js"></script>
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
                <span>Old Farm Implements Enquiry List</span>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
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
                <select class="form-select py-2 " aria-label="Default select example" id="brand_name1">
                  
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                <select class="form-select py-2 " aria-label="Default select example" id="model_enquiry" name="model_enquiry">
                  
                </select>
                <!-- <input type="text" class="form-control py-2 model_select" for="idUser"  id="model_enquiry" name="model_enquiry" > -->
                  
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2 state_select" aria-label="Default select example"  id="state_enquiry">
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2 district_select" aria-label="Default select example" id="district_enquiry">
                </select>
              </div>
            </div>
            <div class="col-12 my-4">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset"  onclick="resetform()">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
          <div class="table-responsive shadow bg-white mt-3">
            <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">                                                                                                                                                                                                                                                                                                                                                                                                                                     
                    <thead>
                      <tr>
                        <th class="d-none d-md-table-cell text-white">S.No.</th>
                        <th class="d-none d-md-table-cell text-white"> Date</th>
                        <th class="d-none d-md-table-cell text-white"> Brand</th>
                        <th class="d-none d-md-table-cell text-white">Model</th>
                        <th class="d-none d-md-table-cell text-white">Name</th>
                        <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                        <th class="d-none d-md-table-cell text-white">Year</th>
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

   <div class="modal fade" id="old_farm_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Farm Implements Enquiry Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                        <tr> 
                            <td>Brand-</td>
                            <td id="bname1"></td>
                            <td>Model-</td>
                            <td id="mname1"></td>
                          </tr>
                         <tr> 
                            <td>First Name-</td>
                            <td id="fname1"></td>
                            <td>Last Name-</td>
                            <td id="lname1"></td>
                         
                          </tr>
                          <tr>
                            <td>Mobile Number-</td>
                            <td id="number1"></td>
                            <td>Date-</td>
                            <td id="date_1"></td>
                          </tr>
                          <tr>
                            <td>Year-</td>
                            <td id="year_1"></td>
                            <td>State-</td>
                            <td id="state1"></td>
                          </tr>
                          <tr>
                            <td>District-</td>
                            <td id="dist1"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil1"></td>
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
      

    <!-- model edit -->
<div class="modal fade" id="old_farm_implement_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"       aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">UpdateOld Farm Implements Enquiries</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <form id="old_farm_implement_from">
                                <div class="row  pt-4">
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>  
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="25" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="product_id" value="389" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline">
                                            <label class="form-label">Brand Name</label>
                                            <select class="form-select py-2 brand_select" aria-label="Default select example" id="brand_name" name="bname">
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Model Name</label>
                                        <select class="form-select py-2 model_select" aria-label="Default select example" id="model_name" name="mname">
                                        </select>
                                 
                                      </div>
                                    </div>
                                 <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" placeholder="" id="first_name" name="fname">
                                      </div>
                                    </div>
                                    <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark"> Last Name</label>
                                            <input type="text" class="form-control py-2" for="last_name"  id="last_name" name="last2_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="" id="mobile" name="mobile">
                                      </div>
                                    </div>
                                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Date</label>
                                        <input type="text" class="form-control" placeholder="" id="date" name="date">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Year</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example" id="year" name="year">
                                     </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                             <label class="form-label text-dark">State</label>
                                              <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_" name="state">
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">District</label>
                                            <select class="form-select py-2 district-dropdown" aria-label="Default select example" id="dist_" name="dist">
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Tehsil</label>
                                            <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example" id="tehsil_">
                                            </select>
                                          </div>
                                        </div>
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="implement_btn" class="btn btn-success fw-bold px-3">Save Change</button>
                </div>
              </div>
            </div>
          </div>
    
</div>
    
</div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 
