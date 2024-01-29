<?php
   include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   ?> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/haatbzr_byr_enq.js"></script>

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
                <span>Haatbazar Buyer Enquiry List</span>
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
                <label class="form-label fw-bold">Buyer Name</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Name</option>
                    <option value="1">name1</option>
                    <option value="2">name2</option>
                    <option value="3">name3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label fw-bold">District</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select District</option>
                    <option value="1">Raipur</option>
                    <option value="2">Bilaspur</option>
                    <option value="3">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label fw-bold">Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Vegitable</option>
                    <option value="2">Fruits</option>
                    <option value="2">Grains</option>
                    <option value="2">Pulses</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline  ">
                <label class="form-label fw-bold">Sub-Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Sub-Category</option>
                    <option value="1">Potato</option>
                    <option value="2">Papaya</option>
                    <option value="3">Rice</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="text-center mt-3">
                <button type="button" class="btn-success btn px-4 pt-2 " id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 px-4 pt-2" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive bg-white shadow">
                                <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%">
                                    <thead>
                                        <tr>
                                        <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Category</th>
                                            <th class="d-none d-md-table-cell text-white">Sub-Category</th>
                                            <th class="d-none d-md-table-cell text-white">Name</th>
                                            <th class="d-none d-md-table-cell text-white">Phone Number</th>
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

   <!-- Modal -->
<div class="modal fade" id="viewdatamodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Haatbazar Buyer Enquiry Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Category-</td>
                            <td id="category"></td>
                            <td>Sub-Category-</td>
                            <td id="sub_category"></td>
                          </tr>
                         <tr>
                            <td>First Name-</td>
                            <td id="fname"></td>
                            <td>Last Name-</td>
                            <td id="lname"></td>
                          </tr>
                          <tr>
                            <td>Mobile-</td>
                            <td id="mob"></td>
                            <td>State-</td>
                            <td id="state"></td>
                          </tr>
                          <tr>
                            <td>District-</td>
                            <td id="dist"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil"></td>
                          </tr>
                          <tr>
                            <td>Price-</td>
                            <td id="price1"></td>
                          </tr>
                          <!-- <tr>
                              <td>Upload images-</td>
                              <td colspan="3">
                                  <div class="col-12">
                                      <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                  </div>
                              </td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  


       
       
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="data_for_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Update Haatbazar Buyer Enquiry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="haatbazar_buyer" name="haatbazar_buyer" method="post" class="p-3">
          <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2" hidden>
              <div class="form-outline">
                <label class="form-label" for="first_name">User Name</label>
                <input type="text" id="userId" name="" value="" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2" hidden>
              <div class="form-outline">
                <label class="form-label" for="first_name">User Name</label>
                <input type="text" id="enquiry_type_id" name="user_name" value="7" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2" hidden>
              <div class="form-outline">
                <label class="form-label" for="first_name">User Name</label>
                <input type="text" id="username" name="name" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline">
                <label class="form-label" for="first_name">Category</label>
                <input type="text" id="category1" name="category" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline">
                <label class="form-label" for="first_name">Sub-category</label>
                <input type="text" id="sub_category1" name="sub_category1" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline mt-3">
                <label class="form-label" for="first_name">First Name</label>
                <input type="text" id="first_name1" name="first_name" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline mt-3">
                <label class="form-label" for="first_name">Last Name</label>
                <input type="text" id="last_name1" name="last_name" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline mt-3">
                <label class="form-label" for="mobile_number">Mobile Number</label>
                <input type="text" id="mobile_no" name="mobile" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline mt-3">
                <label class="form-label" for="state">State</label>
                <select class="form-select py-2" aria-label="Default select example" id="state_" name="state">
                  <option selected disabled="" ></option>
                  <option value="1">Chhattisgarh</option>
                  <option value="2">Other </option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-2">
              <div class="form-outline mt-3">
                <label class="form-label" for="district">District</label>
                <select class="form-select py-2" aria-label="Default select example" name="district" id="district">
                  <option selected disabled=""></option>
                  <option value="1">Raigarh</option>
                  <option value="2">Sarguja</option>
                  <option value="3">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
              <div class="form-outline mt-2">
                <label class="form-label" for="tehsil">Tehsil</label>
                <select class="form-select py-2" aria-label="Default select example" name="tehsil" id="tehsil">
                  <option selected disabled=""></option>
                  <option value="1">Raigarh</option>
                  <option value="2">ambikapur</option>
                  <option value="3">chirmiri</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
              <div class="form-outline mt-3 ">
                <label class="form-label" for="mobile_number">Price</label>
                <input type="text" id="price" name="price_name" class=" data_search form-control input-group-sm py-2" />
              </div>
            </div>
            <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <div class="upload__box mt-3">
                    <div class="upload__btn-box text-center">
                        <label>
                            <p class="upload__btn">Upload images</p>
                            <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image_pic">
                        </label>
                    </div>
                    <div id="selectedImagesContainer2" class="upload__img-wrap row"></div>
                </div>
            </div> -->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update_button">Save Change</button>
      </div>
    </div>
  </div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 