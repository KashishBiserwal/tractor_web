<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/old_tractor_list.js"></script>
    <body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app"> <?php
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
                    <span>Old Tractor List</span>
                  </li>
                </ol>
              </nav>
              <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa fa-plus" aria-hidden="true"></i>Add Old tractor </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old tractor</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <form id="old_tract" name="old_tract" method="post" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row">
                              <h5>Fill Your Detail</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="enquiry_type_id" name="" value="1" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="image_type_id" name="" value="1" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                  <input type="text" id="tractor_type_id" name="" value="1" class="data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="form_type" name="form_type" value="FOR_SELL_TRACTOR" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="first_name">First Name</label>
                                  <input type="text" id="first_name" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="last_name">Last Name</label>
                                  <input type="text" id="last_name" name="last_name" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="mobile_number">Mobile Number</label>
                                  <input type="text" id="mobile_number" name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="state">State</label>
                                  <select class="form-select py-2" aria-label="Default select example" id="state" name="state">
                                    <option selected disabled="" ></option>
                                    <option value="">Chhattisgarh</option>
                                    <option value="">Other </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">District</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="district" id="district">
                                    <option selected disabled=""></option>
                                    <option value="">Raigarh</option>
                                    <option value="">Sarguja</option>
                                    <option value="">Surajpur</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Tehsil</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tehsil" id="tehsil">
                                    <option selected disabled=""></option>
                                    <option value="">Raigarh</option>
                                    <option value="">ambikapur</option>
                                    <option value="">chirmiri</option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="mt-2">Which Tractor do you Own ?</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Brand</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="brand" id="brand">
                                    <option selected disabled=""></option>
                                  
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Model</label>
                                  <input type="text" id="model" name="model" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Purchase Year</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="purchase_year" id="purchase_year">
                                    <option selected disabled=""></option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="mt-2">Share Tractor Condition with Buyers</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Engine Condition</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="condition" id="condition">
                                    <option selected disabled=""></option>
                                    <option value="">0-25%(Poor)</option>
                                    <option value="">26-50%(Average)</option>
                                    <option value="">51-75%(Good)</option>
                                    <option value="">76-100%(very Good)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Tyre Condition</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tyrecondition" id="tyrecondition">
                                    <option selected disabled=""></option>
                                    <option value="">0-25%(Poor)</option>
                                    <option value="">26-50%(Average)</option>
                                    <option value="">51-75%(Good)</option>
                                    <option value="">76-100%(very Good)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Hours Driven</label>
                                  <select class="form-select py-2"  name="hours_driven" id="hours_driven" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <div class="form-outline">
                                  <label class="form-label" for="">RC Number</label>
                                  <input type="text" id="rc_num" name="rc_num" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <label class="pe-3 fs-5 text-dark">Financed</label>
                                <input type="radio" id="yes" name="fav_language" value="1">
                                <label for="html" class="text-dark">Yes</label> 
                                <input type="radio" id="no" name="fav_language" value="0">
                                <label for="css" class="text-dark">No</label>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3" id="nocDiv" style="display: none;">
                                <label class="pe-3 fs-5 text-dark">NOC Available:</label>
                                <input type="radio" id="nocyes" name="fav_language1" value="1">
                                <label for="nocyes" class="text-dark">Yes</label> 
                                <input type="radio" id="nocno" name="fav_language1" value="0">
                                <label for="nocno" class="text-dark">No</label>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <div class="form-outline">
                                  <label class="form-label" for="">Price</label>
                                  <input type="text" id="price_old" name="price_old" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <h5 class="mt-2">Upload Image</h5>
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                <div class="">
                                      <div class="upload__btn-box">
                                        <label class="upload__btn">
                                          <p>Upload images</p>
                                          <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image_pic" name="image_pic">
                                        </label>
                                      </div>
                                      <p>Upload minimum 2 images</p>
                                      <div class="upload__img-wrap"></div>
                                    </div>
                              </div>
                              <div class="col-12 col-sm-8 col-lg-8 col-md-8 ">
                                <div class="form-outline">
                                  <label class="form-label" for="mobile_number">Description</label>
                                  <textarea type="text" id="description" name="description" class=" data_search form-control input-group-sm py-2"></textarea>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Product Type</label>
                                  <input type="text" class="" placeholder=" " value="1" id="product_type_id">
                                </div>
                              </div>
                        
                            </div>
                          </form>
                          <div class="text-center">
                            <button type="button" id="old_btn" class="btn btn-success fw-bold px-3 w-25">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" ">
          <!-- Filter Card -->
          <div class="filter-card mb-2">
            <div class="card-body">
            <form action="" id="myform" class="mb-0">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by Brand</label>
                    <input type="email"  name="search_name" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by Model</label>
                    <input type="text"  name="search_email" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by State</label>
                    <input type="text" name="state" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by District</label>
                    <input type="text" name="state" class="form-control" />
                  </div>
                </div>
                <div class="col-12 mt-3">
                  <div class=" text-center">
                    <button type="button" class="btn-success btn mb-0 btn_all" id="search">Search</button>
                    <button type="button" class="btn-success btn mb-0 btn_all" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
          <!-- Table Card -->
          <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <!-- <th class="d-none d-md-table-cell text-white">UID</th> -->
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white"> Model </th>
                    <th class="d-none d-md-table-cell text-white"> Purchase Year </th>
                    <th class="d-none d-md-table-cell text-white"> State </th>
                    <th class="d-none d-md-table-cell text-white"> Action </th>
                  </tr>
                </thead>
                <tbody id="data-table"></tbody>
              </table>
            </div>
          </div>

          <div class="modal fade" id="staticBackdrop_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Old tractor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <h4 class="text-center">Fill Old Tractor Details</h4>
              <form id="old_tract" name="old_tract px-5" method="post" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row">
                              <h5>Fill Your Detail</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="enquiry_type_id1" name="" value="1" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="image_type_id1" name="" value="1" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                  <input type="text" id="tractor_type_id1" name="" value="1" class="data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                
                                  <input type="text" id="form_type1" name="form_type" value="FOR_SELL_TRACTOR" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="first_name">First Name</label>
                                  <input type="text" id="first_name1" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="last_name">Last Name</label>
                                  <input type="text" id="last_name1" name="last_name" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="mobile_number">Mobile Number</label>
                                  <input type="text" id="mobile_number1" name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="state">State</label>
                                  <select class="form-select py-2" aria-label="Default select example" id="state1" name="state">
                                    <option selected disabled="" ></option>
                                    <option value="">Chhattisgarh</option>
                                    <option value="">Other </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">District</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="district" id="district1">
                                    <option selected disabled=""></option>
                                    <option value="">Raigarh</option>
                                    <option value="">Sarguja</option>
                                    <option value="">Surajpur</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Tehsil</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tehsil" id="tehsil1">
                                    <option selected disabled=""></option>
                                    <option value="">Raigarh</option>
                                    <option value="">ambikapur</option>
                                    <option value="">chirmiri</option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="mt-2">Which Tractor do you Own ?</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Brand</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="brand" id="brand1">
                                    <option selected disabled=""></option>
                                  
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Model</label>
                                  <input type="text" id="model" name="model" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Purchase Year</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="purchase_year" id="purchase_year1">
                                    <option selected disabled=""></option>
                                  </select>
                                </div>
                              </div>
                              <h5 class="mt-2">Share Tractor Condition with Buyers</h5>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Engine Condition</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="condition" id="condition1">
                                    <option selected disabled=""></option>
                                    <option value="">0-25%(Poor)</option>
                                    <option value="">26-50%(Average)</option>
                                    <option value="">51-75%(Good)</option>
                                    <option value="">76-100%(very Good)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Tyre Condition</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tyrecondition" id="tyrecondition1">
                                    <option selected disabled=""></option>
                                    <option value="">0-25%(Poor)</option>
                                    <option value="">26-50%(Average)</option>
                                    <option value="">51-75%(Good)</option>
                                    <option value="">76-100%(very Good)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Hours Driven</label>
                                  <select class="form-select py-2"  name="hours_driven" id="hours_driven1" aria-label="Default select example">
                                    <option selected disabled="" value="">Please select an option</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <div class="form-outline">
                                  <label class="form-label" for="">RC Number</label>
                                  <input type="text" id="rc_num1" name="rc_num" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <label class="pe-3 fs-5 text-dark">Financed</label>
                                <input type="radio" id="yes1" name="fav_language" value="1">
                                <label for="html" class="text-dark">Yes</label> 
                                <input type="radio" id="no1" name="fav_language" value="0">
                                <label for="css" class="text-dark">No</label>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3" id="nocDiv" style="display: none;">
                                <label class="pe-3 fs-5 text-dark">NOC Available:</label>
                                <input type="radio" id="nocyes" name="fav_language1" value="1">
                                <label for="nocyes1" class="text-dark">Yes</label> 
                                <input type="radio" id="nocno" name="fav_language1" value="0">
                                <label for="nocno1" class="text-dark">No</label>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                <div class="form-outline">
                                  <label class="form-label" for="">Price</label>
                                  <input type="text" id="price_old1" name="price_old" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <!-- <h5 class="mt-2">Upload Image</h5> -->
                              <div class="col-12 col-sm-4 col-lg-4 col-md-4 mt-4">
                                <div class="">
                                      <div class="upload__btn-box">
                                        <label class="upload__btn">
                                          <p>Upload Image</p>
                                          <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image_pic1" name="image_pic">
                                        </label>
                                      </div>
                                      <p>Upload minimum 2 images</p>
                                      <div class="upload__img-wrap"></div>
                                    </div>
                              </div>
                              <div class="col-12 col-sm-8 col-lg-8 col-md-8 ">
                                <div class="form-outline">
                                  <label class="form-label" for="mobile_number">Description</label>
                                  <textarea type="text" id="description1" name="description" class=" data_search form-control input-group-sm py-2"></textarea>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Product Type</label>
                                  <input type="text" class="" placeholder=" " value="1" id="product_type_id1">
                                </div>
                              </div>
                        
                            </div>
                          </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="px-4 bg-success btn btn-primary" id="save_brand1">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>
<?php
   include 'includes/footertag.php';
   ?> 
 <script>
        $(document).ready(function() {
          $('input[type="radio"]').change(function(){
        if($(this).attr('id') == 'yes'){
            $('#nocDiv').show();
        } else if ($(this).attr('id') == 'no'){
            $('#nocDiv').hide();
        }
      });
    });
        
//           BackgroundUpload()
//             $("#old_tract").validate({
//                 rules: {
//                     first_name: 'required',
//                     last_name: 'required',
//                     mobile_number: {
//                         required: true,
//                         digits: true, // Allow only digits
//                     },
//                     state: "required",
//                     district: "required",
//                     brand:"required",
//                     model:"required",
//                     year:"required",
//                     condition:"required",
//                     tyrecondition:"required",
//                     brand_img:"required",
//                     hour:"required",
//                     rc:"rc",
//                     description:"required",
//                     fav_language:"required",
//                     fav_language1:"required",
//                 }
//             });
//             $('#old_btn').on('click', function() {
//                 $('#old_tract').valid();
//                 console.log($('#old_tract').valid());
//             });
//         });

// function BackgroundUpload(){
//     var imgWrap = "";
//     var imgArray = [];

//     function generateUniqueClassName(index) {
//       return "background-image-" + index;
//     }

//     $('.background__inputfile').each(function () {
//       $(this).on('change', function (e) {
//         imgWrap = $(this).closest('.background__box').find('.background__img-wrap');
//         var maxLength = $(this).attr('data-max_length');

//         var files = e.target.files;
//         var filesArr = Array.prototype.slice.call(files);
//         var iterator = 0;
//         filesArr.forEach(function (f, index) {

//           if (!f.type.match('image.*')) {
//             return;
//           }

//           if (imgArray.length > maxLength) {
//             return false;
//           } else {
//             var len = 0;
//             for (var i = 0; i < imgArray.length; i++) {
//               if (imgArray[i] !== undefined) {
//                 len++;
//               }
//             }
//             if (len > maxLength) {
//               return false;
//             } else {
//               imgArray.push(f);

//               var reader = new FileReader();
//               reader.onload = function (e) {
//                 var className = generateUniqueClassName(iterator);
//                 var html = "<div class='background__img-box'><div onclick='BackgroundImage(\"" + className + "\")' style='background-image: url(" + e.target.result + ")' data-number='" + $(".background__img-close").length + "' data-file='" + f.name + "' class='img-bg " + className + "'><div class='background__img-close'></div></div></div>";
//                 imgWrap.append(html);
//                 iterator++;
//               }
//               reader.readAsDataURL(f);
//             }
//           }
//         });
//       });
//     });

//     $('body').on('click', ".background__img-close", function (e) {
//       var file = $(this).parent().data("file");
//       for (var i = 0; i < imgArray.length; i++) {
//         if (imgArray[i].name === file) {
//           imgArray.splice(i, 1);
//           break;
//         }
//       }
//       $(this).parent().parent().remove();
//     });
// }
   </script>
                       