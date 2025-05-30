<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/agrclg_enquiry.js"></script>
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
                <span>Agriculture College Enquiry Listing</span>
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
                    <label class="form-label"> College Name</label>
                    <input type="text" class="form-control" id="college_name" name="college_name" placeholder="Enter Your College Name">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2 state_select" aria-label="Default select example"  id="state_state">
                
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2 district_select" aria-label="Default select example" id="dist_state">
                   
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
                                <table id="example" class="table table-striped table-hover table-bordered no-footer dataTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Date</th>
                                            <th class="d-none d-md-table-cell text-white">College Name</th>
                                            <th class="d-none d-md-table-cell text-white">Name</th>
                                            <th class="d-none d-md-table-cell text-white">Phone Number</th>
                                            <th class="d-none d-md-table-cell text-white">District</th>
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
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Agriculture College Enquiries</h5>
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
                                                  <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="27" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> product_type_id <span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="product_id" value="" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                          <div class="form-outline mt-4">
                                            <label for="name" class="form-label text-dark">College Name</label>
                                            <input type="text" class="form-control" placeholder="" id="college_name_edit" name="cname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 ">
                                          <div class="form-outline mt-4">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="first_name_edit" name="fname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline  mt-4">
                                            <label for="name" class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control" placeholder="" id="last_name_edit" name="lname">
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
                                             <label class="form-label">State</label>
                                              <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_2" name="state_">
                                             
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">District</label>
                                            <select class="form-select py-2 district-dropdown" aria-label="Default select example" id="dist_2" name="dist">
                                             
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">Tehsil</label>
                                            <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example" id="tehsil_2">
                                            
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
                            <td>Agriculture College:-</td>
                            <td id="agr_clg"></td>
                            <td>First Name-</td>
                            <td id="first_name_view"></td>
                          </tr>
                          <tr>
                            <td>Last Name-</td>
                            <td id="last_name_view"></td>
                            <td>Mobile Number-</td>
                            <td id="mob_nub"></td>
                          </tr>
                          <tr>
                          <td>Date-</td>
                            <td id="date_view"></td>
                            <td>State-</td>
                            <td id="state_view"></td>
                          
                          </tr>
                          <tr>
                          <td>District-</td>
                            <td id="district_view"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil_view"></td>
                            
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