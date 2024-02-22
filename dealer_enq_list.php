<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/dealers_enq.js"></script>
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
                <span>Dealers Enquiry List</span>
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
          
            <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-outline">
                      <label class="form-label">Search By Brand</label>
                      <select class="js-select2 form-select form-control mb-0" id="brand_name_1">
                      </select>
                </div>
              </div> -->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2 state_select" aria-label="Default select example"  id="state_1">
                   
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label fw-bold">District</label>
                <select class="form-select py-2 district_select" aria-label="Default select example" id="district_1">
                 
                </select>
              </div>
            </div>
           
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="text-center">
                <button type="button" class="btn-success btn px-3 py-2 " id="Search" onclick="searchdata()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-3 py-2  " id="Reset" >Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
    <nav class="">
    <div class="nav nav-tabs w-50" id="nav-tab" role="tablist">
        <a class="nav-link active px-5 py-3 h5 fw-bold text-dark py-2" type="button" id="dealers_certifide_target" data-bs-toggle="tab" data-bs-target="#table_data1" role="tab" aria-controls="nav-home" aria-selected="true">Certified</a>
        <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="dealers_normal_target" type="button" data-bs-toggle="tab" data-bs-target="#table_data2" role="tab" aria-controls="nav-contact" aria-selected="false">Normal</a>
    </div>
</nav>


<div class=" mb-5">
    <div class="tab-content">

            <!-- for particular enquiry table -->
        <div class="tab-pane fade show active" id="table_data1" role="tabpanel">
            <div class="table-responsive shadow bg-white mt-2">
                <table id="example" class="table table-striped table-hover dataTable no-footer py-1" width="100%">
                    <thead>
                        <tr>
                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                            <th class="d-none d-md-table-cell text-white">Date </th>
                            <!-- <th class="d-none d-md-table-cell text-white">Dealer Name </th> -->
                            <th class="d-none d-md-table-cell text-white">Brand</th>
                            <th class="d-none d-md-table-cell text-white">Name </th>
                            <th class="d-none d-md-table-cell text-white">Phone number</th>
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


        <!-- for normal enquiry table -->
        <div class="tab-pane fade show active" id="table_data2" role="tabpanel">
            <div class="table-responsive shadow bg-white mt-2">
                <table id="example2" class="table table-striped table-hover dataTable no-footer py-1" width="100%">
                    <thead>
                        <tr class="bg-success">
                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                            <th class="d-none d-md-table-cell text-white">Date </th>
                            <th class="d-none d-md-table-cell text-white">Brand</th>
                            <th class="d-none d-md-table-cell text-white">Name </th>
                            <th class="d-none d-md-table-cell text-white">Phone number</th>
                            <th class="d-none d-md-table-cell text-white">State</th>
                            <th class="d-none d-md-table-cell text-white">District</th>
                            <th class="d-none d-md-table-cell text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody id="data-table2">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>


   <!-- model edit  table 2 normal enquiry -->
        <div class="modal fade" id="view_model_dealer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Dealers Enquiry Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr> 
                         <tr> 
                           
                            <td>First Name-</td>
                            <td id="fname1"></td>
                            <td>Last Name-</td>
                            <td id="lname1"></td>
                          </tr>
                             <td>Mobile Number-</td>
                            <td id="number1"></td>
                            <td>Date-</td>
                            <td id="date_1"></td>
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


   <!-- model edit  table 2 normal enquiry -->
          <div class="modal fade" id="edit_dealers" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Update Dealers Enquiry</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <form id="dealers_form">
                                <div class="row  pt-4">
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>  
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="enquiry_type_id"  id="enquiry_type_id" value="14" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>
                                      <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="product_id"  id="product_id" value="13" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline">
                                            <label class="form-label">Brand Name</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="brand_name" name="bname">
                                                
                                            </select>
                                        </div>
                                      </div>
                                
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" placeholder="" id="first_name" name="fname">
                                      </div>
                                    </div>
                                    <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline mt-3">
                                          <label class="form-label text-dark"> Last Name</label>
                                          <input type="text" class="form-control py-2" for="last_name"  id="last_name" name="last_name">
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
                                        <input type="text" class="form-control" placeholder="" id="date" name="date" readonly="readonly">
                                      </div>
                                    </div>
                                  
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                             <label class="form-label text-dark">State</label>
                                              <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_" name="state_">
                                           
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

                                    <!-- <div class="col-12  mb-2">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Discription</label>
                                        <textarea rows="3" cols="70" class="w-100 pt-2" minlength="1" maxlength="255" id="message" name="message"></textarea>
                                      </div>
                                    </div> -->
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="subbtn" class="btn btn-success fw-bold px-3">Save Change</button>
                </div>
              </div>
            </div>
          </div>
    
</div>
</div>


        <!-- model edit  table 1 Particular enquiry -->
        <div class="modal fade" id="view_model_dealer_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Dealers Enquiry Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr> 
                         <tr> 
                            <!-- <td>Dealer Name-</td>
                            <td id="dname1"></td> -->
                            <td>Brand-</td>
                            <td id="bname1"></td>
                            <td>First Name-</td>
                            <td id="fname_1"></td>
                          </tr>
                         <tr> 
                            
                            <td>Last Name-</td>
                            <td id="lname_1"></td>
                            <td>Mobile Number-</td>
                            <td id="number_1"></td>
                          </tr>
                            
                            <td>Date-</td>
                            <td id="date1"></td>
                            <td>State-</td>
                            <td id="state_2"></td>
                          </tr>
                          <tr>
                          
                            <td>District-</td>
                            <td id="dist_1"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil_1"></td>
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

         <!-- model edit  table 1 Particular enquiry -->
          <div class="modal fade" id="edit_dealers_certifed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Update Dealers Enquiry</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <form id="dealers_form">
                                <div class="row  pt-4">
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="e" placeholder="Enter First Name">
                                  <small></small>
                                </div>  
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="enquiry_type_id"  id="enquiry_type_id" value="16" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>
                                <div class="col- col-sm-6 col-lg-6 col-md-6 " hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="product_id"  id="product_id" value="13" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="ol-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                        <div class="form-outline">
                                            <label class="form-label">Brand Name</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="brand_name_2" name="bname">
                                                
                                            </select>
                                        </div>
                                    </div>
                                <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Dealers Name</label>
                                        <input type="text" class="form-control" placeholder="" id="dname_name" name="dname" readonly="readonly">
                                      </div>
                                    </div> -->
                                    <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Model Name</label>
                                        <input type="text" class="form-control" placeholder="" id="model_name" name="mname">
                                      </div>
                                    </div> -->
                                 <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" placeholder="" id="first_nme_1" name="fname">
                                      </div>
                                    </div>
                                    <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline mt-3">
                                            <label class="form-label text-dark"> Last Name</label>
                                            <input type="text" class="form-control py-2" for="last_name"  id="last_name_1" name="last_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="" id="mobile_1" name="mobile">
                                      </div>
                                    </div>
                                    <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Email</label>
                                        <input type="text" class="form-control" placeholder="" id="email" name="email">
                                      </div>
                                    </div> -->
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Date</label>
                                        <input type="text" class="form-control" placeholder="" id="date_date" name="date" readonly="readonly">
                                      </div>
                                    </div>
                                  
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                             <label class="form-label text-dark">State</label>
                                              <select class="form-select py-2 " aria-label="Default select example" id="state_state" name="state_">
                                             
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">District</label>
                                            <select class="form-select py-2 " aria-label="Default select example" id="dist2" name="dist">
                                          
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Tehsil</label>
                                            <select class="form-select py-2 " aria-label="Default select example" id="tehsil_tehsil">
                                      
                                            </select>
                                          </div>
                                        </div>

                                      <!-- <div class="col-12  mb-2">
                                        <div class="form-outline mt-3">
                                          <label for="name" class="form-label text-dark">Discription</label>
                                         
                                          <textarea rows="3" cols="70" class="w-100 pt-2" minlength="1" maxlength="255" id="message_1" name="message"></textarea>
                                        </div>
                                      </div> -->
                                </div>
                               
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="subbtn_2" class="btn btn-success fw-bold px-3">Save Change</button>
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



<script>
    $(document).ready(function () {
        $('#dealers_certifide_target').on('click', function () {
            showTable('#table_data1');
        });

        $('#dealers_normal_target').on('click', function () {
            showTable('#table_data2');
        });

        function showTable(tabId) {
            // Hide all tables
            $('#table_data1, #table_data2').removeClass('show active');

            // Show the selected table
            $(tabId).addClass('show active');
        }

        // Initial load for the first tab
        showTable('#table_data1');
    });
</script>

<script>
    $(document).ready(function () {
        $('#example2').DataTable({
            lengthChange: false, // Disable show entries
            searching: false,    // Disable search field
        });
        $('#example').DataTable({
            lengthChange: false, // Disable show entries
            searching: false,    // Disable search field
        });
    });
</script>