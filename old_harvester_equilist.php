<?php
    include 'includes/headertag.php';
    // $product_id=$_REQUEST['product_id'];
    // echo $product_id;
    include 'includes/footertag.php';
    ?>
   
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
   <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
   <script src="<?php $baseUrl; ?>model/old_harvesteradmin.js"></script>

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
                <span>Old Harvester List</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i> Add Old Harvester
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Harvester</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <!-- <h4 class="text-center">Fill your Tractor Details</h4> -->
                              <form id="old_form" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-4">
                                <h5 class="fw-bold">Your Harvester Information</h5>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Enquiry id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="enquiry_type_id" name="enquiry_type_id" value="3">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6"hidden>
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Product id</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="3" id="product_type_id" name="product_type_id">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Form type</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" value="FOR_SELL_HARVESTER" id="form_type" name="form_type">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select " aria-label=".form-select-lg example" id="brand"name="brand">
                                      
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Model Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Model Name" id="model" name="model">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Crop Type</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="CROPS_TYPE" name="CROPS_TYPE">
                                       
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark"> Power Source</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="POWER_SOURCE" name="POWER_SOURCE">
                                      
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Hours</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="hours" name="hours">
                                          
                                      </select>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="form-outline pt-3 mt-3">
                                    <label class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="year" name="year">
                                          
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="form-outline pt-3 mt-3">
                                    <label for="name" class="form-label text-dark">Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                  </div>
                               </div>
                               <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-2">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                          </div>
                                        </div>
                               <div class="col-12 ">
                                            <div class="form-outline ">
                                                <label class="form-label text-dark">About</label>
                                                <textarea rows="4" cols="70" class="w-100" minlength="1" maxlength="255" id="about" name="about"></textarea>
                                            </div>
                                        </div>
                                  <h5 class="fw-bold mt-4 ">Personal Information</h5>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark"> First Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                  </div>
                               </div>
                               <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark"> Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Name">
                                  </div>
                               </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label for="name" class="form-label text-dark">Mobile</label>
                                    <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">State</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="state" name="state">
                                        <option value="">Select State</option>
                                        <option value="">Chhattisgarh</option>
                                        <option value="">Others</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">District</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="district" name="district">
                                        <option value="">Select Districte</option>
                                        <option value="">Jagdalpur</option>
                                        <option value="">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                  <div class="form-outline mt-3">
                                    <label class="form-label text-dark">Tehsil</label>
                                    <select class="form-select" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                        <option value="">Select Tehsil</option>
                                        <option value="">Jagdalpur</option>
                                          <option value="">Sarguja</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-12 text-center mt-4"> 
                                 
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submitbtn" class="btn btn-success fw-bold px-3 ">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container ">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label"> Brand Name</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="">Mahindra</option>
                    <option value="">Swaraj</option>
                    <option value="">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline ">
                <label class="form-label">Model</label>
                    <select class="form-select py-2" aria-label="Default select example">
                        <option selected>Select Model</option>
                        <option value="">3032 NX</option>
                        <option value="">3030 NX</option>
                        <option value="">3230 NX</option>
                    </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select State</option>
                    <option value="">Chattisgarh</option>
                    <option value="">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option value>Select District</option>
                    <option value="">Raipur</option>
                    <option value="">Bilaspur</option>
                    <option value="">Surajpur</option>
                </select>
              </div>
            </div>
            <div class="col-12 mt-3">
              <div class="text-center">
                <button type="button" class="btn-success btn px-5 pt-2" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 px-5 pt-2" id="Reset">Reset</button>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive shadow bg-white">
                                <table  id="example" class="table bg-white table-striped table-hover py-1" width="100%">
                                    <thead>
                                        <tr>
                                        <th class="d-none d-md-table-cell text-white">S.No</th>
                                            <th class="d-none d-md-table-cell text-white">Date</th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white"> Model </th>
                                            <th class="d-none d-md-table-cell text-white"> Year </th>
                                            <th class="d-none d-md-table-cell text-white"> State </th>
                                            <th class="d-none d-md-table-cell text-white"> district </th>
                                            <th class="d-none d-md-table-cell text-white"> Phone Numner </th>
                                            <th class="d-none d-md-table-cell text-white"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-table">
                                    </tbody>
                                </table>
                            </div>
    </div>
   </section>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Brand Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div> -->
              <div class="modal-body">
                <h4 class="fw-bold mb-2">Brand Information</h4>
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h5>Brand Name: </h5>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="brand_name2" class="fw-bold"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h5>Model Name: </h5>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="model_name2" class="fw-bold"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h5>Crop Type: </h5>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="crop_type" class="fw-bold"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h5>Power Source: </h5>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="crop_type" class="fw-bold"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Hours:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="hours"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Purchase Year:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="year"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Price:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="year"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Image:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="image"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>About:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="about"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>name:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="name"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>Mobile Number:</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="mobile"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>State</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="state"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                      <h5>District</h5>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-8 col-md-8">
                     <div id="district"></div>
                    </div>
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
</body>


  
                       