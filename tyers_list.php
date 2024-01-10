<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/tyres_list.js"></script>
  
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
                <span>Tyres Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Tyres
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Edit Tyres </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight:600;">Fill your Details</h4>
                              <form id="form_tyre_list">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Brand</label>
                                        <input type="text" class="form-control" placeholder="" id="brand" name="brand">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Model</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre" name="tyre">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Position</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_position" name="tyre_position">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Size of the tyre</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_size" name="tyre_size">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Diameter</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_diameter" name="tyre_diameter">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Width</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_width" name="tyre_width">
                                      </div>
                                    </div> -->
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                     <div class="form-outline ">
                                      <label for="yr_state" class="form-label text-dark">Category</label>
                                      <select class="form-select form-control" aria-label=".form-select-lg example"id="category" name="category">
                                         
                                      </select>
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
                                        <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                      </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="subbnt" class="btn btn-success btn_all">Submit</button>
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
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select Brand</option>
                  <option value="1">Mahindra</option>
                  <option value="2">Swaraj</option>
                  <option value="3">John deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
              <div class="form-outline">
                <label class="form-label">Tyre Position</label>
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected disabled>Select Position</option>
                  <option value="1">Front-Left</option>
                  <option value="2">Front-right</option>
                  <option value="2">Back-Left</option>
                  <option value="2">Back-right</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4  mt-3">
              <div class="text-center">
                <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn  btn_all" id="Reset">Reset</button>
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
                <th class="d-none d-md-table-cell text-white">Name</th>
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
  </div>
</section>
<div class="modal fade" id="view_model_tyre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Nursery Enquiry Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr> 
                            <td>First Name-</td>
                            <td id="fname1"></td>
                            <td>Last Name-</td>
                            <td id="lname1"></td>
                          </tr>
                          <tr>
                           
                            <td>Mobile Number-</td>
                            <td id="number1"></td>
                            <td>Email-</td>
                            <td id="email_1"></td>
                          </tr>
                          <tr>
                          <td>Date-</td>
                            <td id="date_1"></td>
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
</div>
</body>

 <!-- model edit -->
 <div class="modal fade" id="edit_tyres" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"       aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Update Hire Tractor Enquiry</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <form id="tyres_form">
                                <div class="row  pt-4">
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>  
                                <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="10" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>

                                 <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">First Name</label>
                                        <input type="text" class="form-control" placeholder="" id="first_name" name="fname">
                                      </div>
                                    </div>
                                    <div class="ol-12 col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-outline">
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
                                        <label for="name" class="form-label text-dark">Email</label>
                                        <input type="text" class="form-control" placeholder="" id="email" name="email">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Date</label>
                                        <input type="text" class="form-control" placeholder="" id="date" name="date">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                             <label class="form-label text-dark">State</label>
                                              <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                                <option value>Select State</option>
                                                <option value="Chattisgarh">Chattisgarh</option>
                                                <option value="Other">Other</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">District</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="dist_" name="dist">
                                              <option value>Select District</option>
                                              <option value="Raipur">Raipur</option>
                                              <option value="Bilaspur">Bilaspur</option>
                                              <option value="Surajpur">Surajpur</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline mt-3">
                                            <label class="form-label text-dark">Tehsil</label>
                                            <select class="form-select py-2" aria-label="Default select example" id="tehsil_">
                                              <option value>Select Tehsil</option>
                                              <option value="Raipur">Raipur</option>
                                              <option value="Bilaspur">Bilaspur</option>
                                              <option value="Surajpur">Surajpur</option>
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
                  <button type="button" id="subbtn_tyre" class="btn btn-success fw-bold px-3">Save change</button>
                </div>
              </div>
            </div>
          </div>
    
</div>

<?php
   include 'includes/footertag.php';
   ?> 