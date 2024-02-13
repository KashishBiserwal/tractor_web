<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/hatbazar_list.js"></script>
   <style>
     label.error {
    color: red; 
  }
.height-same {
    height: 33px; /* Adjust as needed */
  }
   </style>
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
        <div class="align-items-center justify-content-between page_title my-2">
          <div class="row">
            <div class="col-12 col-sm-5 col-lg-5 col-md-5">
             <h5 class="fw-bold"> Haatbazaar Item List</h5>
            </div>
            
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <!-- <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i> Category
                </button> -->
                <!-- modal -->
                <!-- <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add HaatBazaar Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                        <div class="modal-body bg-light">
                          <div class="row justify-content-center">
                            <div class="col-12">
                              <h5 class="text-center">Fill Category Details</h5>
                              <form id=category_details>
                                <div class="row justify-content-center">
                                  <div class="col-12">
                                    <div class="form-outline mt-3">
                                      <label for="name" class="form-label text-dark"> Add Category</label>
                                      <input type="text" class="form-control line-height-2" placeholder="" id="category" name="category">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="btn_submit" class="btn btn-success fw-bold px-3">Submit</button>
                        </div>
                    </div>
                  </div>
                </div> -->
                 <!-- subcategory -->
                 <!-- <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop2">
                  <i class="fa fa-plus" aria-hidden="true"></i> Sub-Category
                </button>
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add HaatBazaar Sub-Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                        <div class="modal-body bg-light">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h5 class="text-center">Fill Sub-Category Details</h5>
                                    <form id="sub_category_form">
                                        <div class="row justify-content-center">
                                        <div class="col-12" hidden>
                                                <div class="form-outline mt-4">
                                                    <label for="name" class="form-label text-dark">Enter Sub-Category</label>
                                                    <input type="text" class="form-control" placeholder="" value="2" id="category_id" name="sub_categor">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-outline">
                                                    <label class="form-label text-dark">Select Category</label>
                                                    <select class="form-select py-2" aria-label="Default select example" id="category_1" name="category_">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="form-outline mt-4">
                                                    <label for="name" class="form-label text-dark">Enter Sub-Category</label>
                                                    <input type="text" class="form-control" placeholder="" id="sub_category" name="sub_category">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="btn_subcat" class="btn btn-success fw-bold px-3">Submit</button>
                      </div>
                    </div>
                  </div>
                </div> -->
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
                  <i class="fa fa-plus" aria-hidden="true"></i> Haatbazaar Items
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add HaatBazaar Items</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                    <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                    <h4 class="text-center">Fill your Details</h4>
                                <form id="hatbazar_form">
                                    <div class="row justify-content-center pt-4">
                                      <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="7" id="enquiry_type_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="2" id="image_type_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="9" id="sub_category_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-outline">
                                              <label class="form-label">Category</label>
                                              <select class="form-select py-2 category_cls" aria-label="Default select example" id="c_category" name="_category" onchange="get_sub_category_1(this.value)">
                                                  <!-- onchange event modified to trigger get_sub_category1 function -->
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-outline">
                                              <label class="form-label">Sub-Category</label>
                                              <select class="form-select py-2 sub_category_cls" aria-label="Default select example" id="sub_cate" name="sub_cate">
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                          <div class="input-group">
                                              <input type="number" id="quantityInput" class="form-control text-black height-same" placeholder="Quantity" aria-label="Text input with dropdown button" name="quantity">
                                              <select type="button" id="unitSelect" name="unit" class="btn border border-secondary-2 h-25 dropdown-toggle height-same" data-bs-toggle="dropdown">
                                                  <ul class="dropdown-menu">
                                                      <option class="dropdown-item" value="">Select Unit</option>
                                                      <option class="dropdown-item" value="Each">Each</option>
                                                      <option class="dropdown-item" value="gram">gram</option>
                                                      <option class="dropdown-item" value="Kg">Kg</option>
                                                      <option class="dropdown-item" value="Quintal">Quintal</option>
                                                      <option class="dropdown-item" value="Ton">Ton</option>
                                                      <option class="dropdown-item" value="Pack">Pack</option>
                                                      <!-- <option class="dropdown-item" value="Unit">Unit</option> -->
                                                  </ul>
                                              </select>
                                          </div>
                                      </div>

                                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Price</label>
                                              <input type="text" class="form-control" placeholder="" id="price" name="price">
                                          </div>
                                      </div>
                                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                          <div class="form-outline mt-4">
                                              <label for="name" class="form-label text-dark">Total Price Calculation</label>
                                              <input type="text" class="form-control" placeholder="" id="tprice" name="tprice" readonly>
                                          </div>
                                      </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                          <div class="upload__box mt-5">
                                            <div class="upload__btn-box text-center">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap row"></div>
                                          </div>
                                        </div>
                                        
                                        <div class="col-12 ">
                                            <div class="form-outline ">
                                                <label class="form-label text-dark">About Your Harvest</label>
                                                <textarea rows="4" cols="70" class="w-100 pt-2" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                                            </div>
                                        </div>
                                        
                                      <div class="text-center">
                                        <h4 class="pb-2 mt-2">Personal Information</h4>
                                      </div>
                                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-2">
                                            <label for="name" class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control" placeholder="" id="fname" name="fname">
                                        </div>
                                      </div>
                                     <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-outline mt-2">
                                        <label for="name" class="form-label text-dark">Last Name</label>
                                        <input type="text" class="form-control" placeholder="" id="lname" name="lname">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-outline mt-2">
                                        <label for="name" class="form-label text-dark">Mobile Number</label>
                                         <input type="text" class="form-control" placeholder="" id="number" name="number">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-outline mt-2">
                                          <label class="form-label ">State</label>
                                          <select class="form-select py-2" aria-label="Default select example" id="state_" name="state_">
                                              <option value="">Select State</option>
                                              <option value="Chattisgarh">Chattisgarh</option>
                                              <option value="Other">Other</option>
                                          </select>
                                      </div>
                                    </div>
                                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                          <label class="form-label ">District</label>
                                          <select class="form-select py-2" aria-label="Default select example" id="dist" name="dist">
                                            <option value="">Select District</option>
                                            <option value="Raipur">Raipur</option>
                                            <option value="Bilaspur">Bilaspur</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <div class="form-outline mt-3">
                                          <label class="form-label">Tehsil</label>
                                          <select class="form-select py-2" id="tehsil" aria-label="Default select example">
                                              <option value>Select Tehsil</option>
                                              <option value="Raipur">Raipur</option>
                                              <option value="Bilaspur">Bilaspur</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-2">
                        <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="save_btn" class="btn btn-success fw-bold px-3">Submit</button>
                        
                    </div>
                </div>
            </div>
          </div>
            </div>
            </div>
          </div>
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
                <label class="form-label">Category</label>
                <select class="form-select py-2 category_cls" aria-label="Default select example" id="cc_category" name="_category" onchange="get_sub_category(this.value)">
                 <!-- onchange event added to trigger get_sub_category function -->
                </select>
              </div>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                      <label class="form-label">Sub-Category</label>
                      <select class="form-select py-2 sub_category_cls" aria-label="Default select example" id="ss_sub_cate" name="sub_cate_1">
                      </select>
                  </div>
              </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">State</label>
                <select class="form-select py-2" aria-label="Default select example" id="select_state">
                    <option value>Select State</option>
                     <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
              <div class="form-outline">
                <label class="form-label">District</label>
                <select class="form-select py-2" aria-label="Default select example" id="select_dist">
                    <option value>Select District</option>
                    <option value="Raipur">Raipur</option>
                    <option value="Bilaspur">Bilaspur</option>
                    <option value="Surajpur">Surajpur</option>
                </select>
              </div>
            </div>
            
            <div class="col-12 mt-3">
              <div class="text-center">
                <button type="button" class="btn-success btn px-4 pt-2" id="Search"  onclick="searchdata()">Search</button>
                <button type="button" class="btn-success btn mx-2 px-4 pt-2" id="Reset"  onclick="resetForm()">Reset</button>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class="mb-5  shadow bg-white mt-3 p-3">
    <div class="table-responsive mt-2">
        <table id="example" class="table table-striped table-hover table-bordered no-footer" width="100%;">
            <thead>
                <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Category</th>
                    <th class="d-none d-md-table-cell text-white">Sub-Category</th>
                    <th class="d-none d-md-table-cell text-white">Full Name</th>
                    <th class="d-none d-md-table-cell text-white">Mobile</th>
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
          <div class="modal fade" id="view_model_hatbazar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> HaatBazar Details</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr>
                            <td>Category-</td>
                            <td id="category"></td>
                            <td>Sub-Category-</td>
                            <td id="subcategory"></td>
                          </tr>
                          <tr>
                            <td>Quantity</td>
                            <td> <span id="quantity"></span> <span id="as_per"></span></td>
                            <td>Total Price-</td>
                            <td id="Total_price"></td>
                          </tr>
                          <tr>
                            
                            <!-- <td>District-</td>
                            <td id="dist1"></td> -->
                          </tr>
                          <tr>
                              <td>Description-</td>
                              <td colspan="3">
                                  <div class="col-12" id="textarea"></div>
                              </td>
                          </tr>
                          <tr>
                            <td>Name-</td>
                            <td> <span id="first_name"></span> <span id="last_name"></span></td>
                            <td>Mobile Number-</td>
                            <td id="number2"></td>
                          </tr>
                          <tr>
                            <td>State-</td>
                            <td id="state"></td>
                            <td>District-</td>
                            <td id="district"></td>
                          </tr>
                          <tr>
                            <td>Tehsil-</td>
                            <td id="tehsil1"></td>
                          </tr>
                          <tr>
                              <td>Upload images-</td>
                              <td colspan="3">
                                  <div class="col-12">
                                      <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                  </div>
                              </td>
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


