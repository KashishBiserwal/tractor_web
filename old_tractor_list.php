<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/old_tractor_list.js"></script>

    <script>
  $(document).ready(function() {
    console.log('dfsdwe');
  $(".js-select2").select2({
    closeOnSelect: true
  });
});
</script>
    <body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app"> <?php
    include 'includes/left_nav.php';
    include 'includes/header_admin.php';
    ?> 

</script>
    <style>
      
      .hidden {
      display: none;
    }
    </style>
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
              <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" onclick="resetFormFields();" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa fa-plus" aria-hidden="true"></i>Add Old tractor </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old tractor</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
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
                                  <input type="text" id="EditIdmain_" name="" value="" class=" data_search form-control input-group-sm py-2" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2" hidden>
                                <div class="form-outline">
                                  <input type="text" id="customer_id" name="" value="" class=" data_search form-control input-group-sm py-2" />
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
                                    <option selected disabled="" >Select State</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Other">Other </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">District</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="district" id="district">
                                    <option selected disabled=""> Select District</option>
                                    <option value="Raigarh">Raigarh</option>
                                    <option value="Sarguja">Sarguja</option>
                                    <option value="Surajpur">Surajpur</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="district">Tehsil</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tehsil" id="tehsil">
                                    <option selected disabled="">Select Tehsil</option>
                                    <option value="Raigarh">Raigarh</option>
                                    <option value="ambikapur">ambikapur</option>
                                    <option value="chirmiri">chirmiri</option>
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
                                    <option selected disabled="">Select Condition</option>
                                    <option value="0-25%(Poor)">0-25%(Poor)</option>
                                    <option value="26-50%(Average)">26-50%(Average)</option>
                                    <option value="51-75%(Good)">51-75%(Good)</option>
                                    <option value="76-100%(very Good)">76-100%(very Good)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                                <div class="form-outline">
                                  <label class="form-label" for="tehsil">Tyre Condition</label>
                                  <select class="form-select py-2" aria-label="Default select example" name="tyrecondition" id="tyrecondition">
                                    <option selected disabled="">Select Condition</option>
                                    <option value="0-25%(Poor)">0-25%(Poor)</option>
                                    <option value="26-50%(Average)">26-50%(Average)</option>
                                    <option value="51-75%(Good)">51-75%(Good)</option>
                                    <option value="76-100%(very Good)">76-100%(very Good)</option>
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
                                <label class="pe-3 fs-5 text-dark">RC Number</label>
                                <input type="radio" id="rc_res" name="fav_rc" value="1">
                                <label for="html" class="text-dark">Yes</label> 
                                <input type="radio" id="rc_no" name="fav_rc" value="0">
                                <label for="css" class="text-dark">No</label>
                              </div>
                              <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3 rc-num-container hidden">
                                  <div class="form-outline">
                                    <label class="form-label" for="">Vehicle Registered Number</label>
                                    <input type="text" id="rc_num" name="rc_num" class="data_search form-control input-group-sm py-2" />
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
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 row">
                              <div class="upload__box ">
                                            <div class="upload__btn-box text-center mt-3">
                                              <label >
                                                <p class="upload__btn ">Upload images</p>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                              </label>
                                            </div>
                                            <div id="selectedImagesContainer" class="upload__img-wrap float-start"></div>
                                          </div>
                              </div>
                              <div class="col-12 col-sm-8 col-lg-8 col-md-8 mt-4">
                                <div class="form-outline">
                                  <label class="form-label" for="mobile_number">Description</label>
                                  <textarea type="text" id="description" name="description" class=" data_search form-control input-group-sm py-2"></textarea>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                                <div class="form-outline">
                                  <label class="form-label">Product Type</label>
                                  <!-- <input type="text" class="" placeholder=" " value="1" id="product_type_id"> -->
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer ">
                    <button type="button" id="old_btn" class="btn btn-success fw-bold px-3"  data-bs-dismiss="modal">Submit</button>
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
                      <label class="form-label">Search By Brand</label>
                      <select class="js-select2 form-select form-control mb-0" id="brand_name">
                      </select>
                </div>
              </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by Model</label>
                    <input type="text" id="model_name" name="model" class="form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by State</label>
                    <input type="text" id="state_name" name="state" class="form-control" />
                  </div>
                </div>
                <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by District</label>
                    <input type="text"id="district_name"  name="state" class="form-control" />
                  </div>
                </div> -->
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
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
                    <th class="d-none d-md-table-cell text-white">Date / Time</th>
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


          <!-- view -->
          <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Tractor Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr>
                            <td>First Name:-</td>
                            <td id="first_name2"></td>
                            <td>Last Name-</td>
                            <td id="last_name2"></td>
                          </tr>
                          <tr>
                            <td>Mobile Number-</td>
                            <td id="monile"></td>
                            <td>State-</td>
                            <td id="state2"></td>
                          </tr>
                          <tr>
                            <td>District-</td>
                            <td id="district2"></td>
                            <td>Tehsil-</td>
                            <td id="tehsil2"></td>
                          </tr>
                          <tr>
                            <td>Brand-</td>
                            <td id="brand1"></td> 
                            <td>Model-</td>
                            <td id="model1"></td> 
                          </tr>
                          <tr>
                            <td>Purchase Year-</td>
                            <td id="purchase_year1"></td> 
                            <td>Engine Condition-</td>
                            <td id="eng_condition"></td> 
                          </tr>
                          <tr>
                            <td>Tyre Condition-</td>
                            <td id="tyre_con"></td> 
                            <td>Hours Driven-</td>
                            <td id="hr_driven"></td> 
                          </tr>
                          <tr>
                            <td>RC Number-</td>
                            <td id="rcNumber"></td> 
                            <td>Vehicle Number-</td>
                            <td id="Finance_veh"></td> 
                          </tr>
                          <tr>
                            <td>NOC Available-</td>
                            <td id="noc_available"></td> 
                            <td>Price-</td>
                            <td id="price12"></td> 
                          </tr>
                          <tr>
                            <td>Upload images-</td>
                              <td colspan="3">
                                  <div class="col-12">
                                      <div id="selectedImagesContainer-old" class="upload__img-wrap row"></div>
                                  </div>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>  
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </div>
</body>
<?php
 
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
      $('input[name="fav_rc"]').change(function() {
      // Check if "Yes" radio button is selected
      if ($('#rc_res').is(':checked')) {
        // Show the div if "Yes" is selected
        $('.rc-num-container').removeClass('hidden');
      } else {
        // Hide the div if "No" is selected
        $('.rc-num-container').addClass('hidden');
      }
    });
    });

   
   </script>
                       