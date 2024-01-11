<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/old_harvester_enqu.js"></script>

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
                <span>Old Harvester Enquiry List</span>
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
          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label"> Seller Name</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Name</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">District</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option selected>Select District</option>
                        <option value="1">Raipur</option>
                        <option value="2">Bilaspur</option>
                        <option value="3">Ambikapur</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="">
                <button type="button" class="btn-success btn px-3 py-2" id="Search">Search</button>
                <button type="button" class="btn-success btn  mx-2 px-3 py-2" id="Reset">Reset</button>
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
                        <th class="d-none d-md-table-cell text-white">Name</th>
                        <th class="d-none d-md-table-cell text-white">Mobile Number</th>
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
   <div class="modal fade" id="view_old_harvester_enqu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Harvester Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                          <td>First Name-</td>
                            <td id="First_Name1"></td>
                            <td>Last Name-</td>
                            <td id="Last_Name1"></td>
                          </tr>
                          <tr>
                            <td>Mobile-</td>
                            <td id="Mobile_1"></td>
                            <td>Email-</td>
                            <td id="email_1"></td>
                          </tr>
                          <tr>
                          <td>Date-</td>
                            <td id="date_1"></td>
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
    
  <div class="modal fade" id="editmodel_old_harvester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Old Harvester Enquiries</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                           <form id="old_harvester_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                                <div class="row justify-content-center pt-4">
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                                          <div class="form-outline ">
                                            <label for="name" class="form-label text-dark">Harvester</label>
                                            <input type="text" class="form-control" placeholder="" id="userId" name="name">
                                          </div>
                                        </div>
                                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                          <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                  <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="22" name="first_name" placeholder="Enter First Name">
                                          <small></small>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="fnam_e" name="fname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                          <div class="form-outline">
                                            <label for="name" class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control" placeholder="" id="lnam_e" name="lname">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Mobile Number</label>
                                              <input type="text" class="form-control" placeholder="" id="numbe_r" name="number">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Email</label>
                                              <input type="text" class="form-control" placeholder="" id="emai_l" name="email">
                                          </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Date</label>
                                              <input type="text" class="form-control" placeholder="" id="dat_e" name="date">
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                          <div class="form-outline mt-4">
                                             <label class="form-label">State</label>
                                              <select class="form-select py-2" aria-label="Default select example" id="stat_e" name="state_">
                                                <option value>Select State</option>
                                                <option value="Chattisgarh">Chattisgarh</option>
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
                  <button type="submit" id="undate_btn_oldharvester_enq" class="btn btn-success fw-bold px-3" >Save Change</button>
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