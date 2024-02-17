<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/form_equi_enq.js"></script> 
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
                <span> New Farm Equipment Enquiries</span>
              </li>
            </ol>
          </nav>
          <!-- <button id="adduser" type="button" class="add_btn btn-success float-right">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New</button> -->
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
                <label class="form-label">Brand</label>
                <select class="form-select py-2" id="brand_search" class="brand" aria-label="Default select example">
                    <option selected>Select Implement Type</option>
                    <option value="1">Implement1</option>
                    <option value="2">Implement2</option>
                    <option value="3">Implement3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">Category</label>
                <select class="form-select py-2" class="category" id="model_search" aria-label="Default select example">
                    
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" id="state_search" aria-label="Default select example">
                    <option value>Select State</option>
                    <option value="1">Chattisgarh</option>
                    <option value="2">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" id="district_search" aria-label="Default select example">
                    <option value>Select District</option>
                    <option value="1">Raipur</option>
                    <option value="2">Bilaspur</option>
                    <option value="3">Surajpur</option>
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
        <div class="table-responsive">
          <table id="example" class="table dataTable no-footer py-1" width="100%">
            <tbody id="data-table">
              <thead>
                  <tr>
                    
                  </tr>
                </thead>
            </tbody>
          </table>
        </div>
      </div>
</section>
      
    
</div>
</div>



<div class="modal fade" id="view_model_tyre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Tyre Details </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                        <tr> 
                            <td>Category-</td>
                            <td id="cate1"></td>
                            <td>Subcategory-</td>
                            <td id="subcate1"></td>
                          </tr>
                          <td>Brand-</td>
                            <td id="brand1"></td>
                            <td>Model-</td>
                            <td id="model1"></td>
                          </tr>
                          <tr>
                          <td>Name-</td>
                            <td id="First_Name1"></td>
                            <td>Mobile-</td>
                            <td id="Mobile_1"></td>
                          </tr>
                          <tr>

                          <td>State-</td>
                            <td id="State_1"></td>
                            <td>District-</td>
                            <td id="District_1"></td>
                          </tr>
                          <tr>
                          
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
    
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Tyre Enquiries</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                           <form id="form_tyre_list" method="post"enctype="multipart/form-data" onsubmit="return false">
                                <div class="row  pt-4">
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">id</label>
                                            <input type="text" class="form-control" placeholder="" id="userId" name="name">
                                          </div>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id enquiry_type_id<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="6" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id product_id<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="product_id" name="product_id" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Category Name</label>
                                        <select class="form-select py-2" aria-label="Default select example" class="category" id="category" name="category"></select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Subcategory Name</label>
                                        <select class="form-select py-2" aria-label="Default select example" id="subcategory
                                      " name="subcategory"></select>
                                      </div>
                                    </div> -->
                                        <!-- <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline mt-4">
                                            <label for="name" class="form-label text-dark">Brand Name</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="brand" name="brand"></select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline mt-4">
                                            <label for="name" class="form-label text-dark">Model Name</label>
                                            <input type="text" class="form-control" placeholder="" id="model" name="lname">
                                          </div>
                                        </div> -->
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">First Name</label>
                                              <input type="text" class="form-control" placeholder="" id="namef" name="number">
                                          </div>
                                        </div>
                                       
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Last Name</label>
                                              <input type="text" class="form-control" placeholder="" id="namel" name="date">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Mobile Number</label>
                                              <input type="text" class="form-control" placeholder="" id="number" name="number">
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                             <label class="form-label">State</label>
                                              <select class="form-select py-2" aria-label="Default select example" id="stat_e" name="state_">
                                                <option value>Select State</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Other">Other</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">District</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="dis_t" name="dist">
                                              <option value>Select District</option>
                                              <option value="Raipur">Raipur</option>
                                              <option value="Bilaspur">Bilaspur</option>
                                              <option value="Surajpur">Surajpur</option>
                                              <option value="Korba">Korba</option>Durg
                                              <option value="Durg">Durg</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                            <label class="form-label">Tehsil</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="tehsi_l">
                                              <option value>Select Tehsil</option>
                                              <option value="Raipur">Raipur</option>
                                              <option value="Bilaspur">Bilaspur</option>
                                              <option value="Surajpur">Surajpur</option>
                                              <option value="Korba">Korba</option>Durg
                                              <option value="Durg">Durg</option>
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
                  <button type="submit" id="undate_btn" class="btn btn-success fw-bold px-3" >Save Change</button>
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