<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/loan_enquiry.js"></script>

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
                <span>Loan Enquiry Listing</span>
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
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label fw-bold"> Brand</label>
                <select class="form-select error mb-2 pb-2" aria-label="Default select example"id="brand_search" name="insurance_type"> 
                </select>
             
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example"  id="state_state">
                    <option value>Select State</option>
                    <option value="chattisgarh">Chattisgarh</option>
                    <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example" id="dist_state">
                    <option value>Select District</option>
                    <option value="raipur">Raipur</option>
                    <option value="bilaspur">Bilaspur</option>
                    <option value="	dhamtari">	Dhamtari</option>
                    <option value="surajpur">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="">
                <button type="button" class="btn-success btn px-3 py-2 " id="Search" onclick="search_data()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 py-2  " id="Reset" onclick="resetform()">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive shadow bg-white">
                                <table id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Date </th>
                                            <th class="d-none d-md-table-cell text-white">Loan Type </th>
                                            <th class="d-none d-md-table-cell text-white">Name </th>
                                            <th class="d-none d-md-table-cell text-white">Phone Number</th>
                                            <th class="d-none d-md-table-cell text-white">State</th>
                                            <th class="d-none d-md-table-cell text-white">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="data-table">
                                    </tbody>
                                </table>
                            </div>
      </div>
    </div>


    <!-- edit model -->
    <div class="modal fade" id="editmodel_nursery_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Loan Enquiries</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                           <form id="narsary_list_enq_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                                <div class="row  pt-4">
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">user id</label>
                                            <input type="text" class="form-control" placeholder="" id="userId" name="name">
                                          </div>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="15" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> product_type_id <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="product_id" value="3" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">Insurance Type</label>
                                            <select class="form-select error mb-2 pb-2" aria-label="Default select example"
                                              id="insurance_type" name="insurance_type">
                                        
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="first_name" name="first_name">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline  mt-4">
                                            <label for="name" class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control" placeholder="" id="last_name" name="last_name">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Mobile Number</label>
                                              <input type="text" class="form-control" placeholder="" id="mobile_no" name="mobile_no">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Brand</label>
                                              <!-- <input type="text" class="form-control" placeholder="" id="brand_name" name="brand_name"> -->
                                              <select class="form-select error mb-2 pb-2" aria-label="Default select example"
                                              id="brand_name" name="brand_name">
                                        
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Model</label>
                                              <!-- <input type="text" class="form-control" placeholder="" id="model_name" name="model_name"> -->
                                              <select class="form-select error mb-2 pb-2" aria-label="Default select example"
                                              id="model_name" name="model_name">
                                        
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Vehicle Registered  </label>
                                              <input type="text" class="form-control" placeholder="" id="vehicle_no" name="vehicle_no">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark"> Registered Year</label>
                                              <input type="text" class="form-control" placeholder="" id="registerd_year" name="registerd_year">
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                             <label class="form-label">State</label>
                                              <select class="form-select py-2" aria-label="Default select example" id="state_2" name="state_">
                                                <option value>Select State</option>
                                                <option value="chattisgarh">Chattisgarh</option>
                                                <option value="other">Other</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">District</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="dist_2" name="dist">
                                              <option value>Select District</option>
                                              <option value="raipur">Raipur</option>
                                              <option value="bilaspur">Bilaspur</option>
                                              <option value="surajpur">Surajpur</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">Tehsil</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="tehsil_2">
                                              <option value>Select Tehsil</option>
                                              <option value="raipur">Raipur</option>
                                              <option value="bilaspur">Bilaspur</option>
                                              <option value="surajpur">Surajpur</option>
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
                  <button type="submit" id="undate_btn_nursery_enq" class="btn btn-success fw-bold px-3" >Save Change</button>
                </div>
              </div>
            </div>
          </div>

   </section>

   <!-- insurance view -->
   <div class="modal fade" id="view_model_nursery_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal_box">
                  <div class="modal-header modal_head">
                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Loan Enquiry Information </h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                  </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr> 
                         <td>Insurance Type-</td>
                            <td id="insurance_type_name1"></td>
                            <td>Full Name-</td>
                            <td id="last_name2"></td>
                            
                          </tr>
                          <tr>
                            <td>Mobile Number-</td>
                            <td id="number"></td>
                            <td>Brand Name-</td>
                            <td id="brand_id"></td>
                         </tr>
                          <tr>
                             <td>Model Name-</td>
                            <td id="model1"></td>
                            <td>Vehicle Registered Number-</td>
                            <td id="vehicle"></td>
                           </tr>
                          <tr>
                          <td>Registered Number-</td>
                            <td id="regi_no"></td>
                            <td>State-</td>
                            <td id="state1"></td>
                            
                          </tr>
                          <tr>
                          <td>District-</td>
                          <td id="district1"></td>
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


</body>
</html>