<?php
  include 'includes/headertag.php';
  include 'includes/headertagadmin.php';
  include 'includes/footertag.php';
 ?> 
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/banner-image.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/old_tractor_list.js" defer></script>
    <script src="<?php $baseUrl; ?>model/sdt.js" defer></script>
    <!-- <script src="<?php $baseUrl; ?>model/brand_function.js" defer></script> -->
    <script src="model/banner-image.js"></script>
<script>
  $(document).ready(function() {
    console.log('dfsdwe');
  $(".js-select2").select2({
    closeOnSelect: true
  });
});
</script>
<style>  
      .hidden {
      display: none;
    }
    .card{
      margin-left: 180px !important;
    }
    </style>
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
                  <span>Old Tractor List</span>
                </li>
              </ol>
            </nav>
            <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" onclick="resetFormFields();" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i>Add Old tractor 
            </button>
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
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                              <div class="form-outline">
                                <label class="form-label" for="state">State</label>
                                <select class="form-select py-2 state-dropdown1" aria-label="Default select example" id="state" name="state">
                                </select>
                              </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                              <div class="form-outline">
                                <label class="form-label" for="district">District</label>
                                <select class="form-select py-2  district-dropdown1" aria-label="Default select example" name="district" id="district">
                                </select>
                              </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                              <div class="form-outline">
                                <label class="form-label" for="tehsil">Tehsil</label>
                                <select class="form-select py-2 tehsil-dropdown1" aria-label="Default select example" name="tehsil" id="tehsil">
                                </select>
                              </div>
                            </div>
                            <h5 class="mt-2">Which Tractor do you Own ?</h5>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                              <div class="form-outline">
                                <label class="form-label" for="brand">Brand</label>
                                <select class="form-select py-2" aria-label="Default select example" name="brand" id="brand">
                                </select>
                              </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                              <div class="form-outline">
                                <label class="form-label" for="model">Model</label>
                                <select class="form-select py-2" aria-label="Default select example" id="model" name="model">
                                </select>
                              </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                              <div class="form-outline">
                                <label class="form-label" for="purchase_year">Purchase Year</label>
                                <select class="form-select py-2" aria-label="Default select example" name="purchase_year" id="purchase_year">
                                  <option selected disabled=""></option>
                                </select>
                              </div>
                            </div>
                            <h5 class="mt-2">Share Tractor Condition with Buyers</h5>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                              <div class="form-outline">
                                <label class="form-label" for="condition">Engine Condition</label>
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
                                <label class="form-label" for="tyrecondition">Tyre Condition</label>
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
                                <label class="form-label" for="hours_driven">Hours Driven</label>
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
                                <label class="form-label" for="rc_num">Vehicle Registered Number</label>
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
                            <div class="col-12  mt-3">
                              <label for="a_hrvst" class="form-label text-dark  fw-bold">Description</label>
                              <textarea class="form-control" rows="3" placeholder="Leave a comment here (max 200 words)" name="about" id="about" onkeydown="return /[a-zA-Z\s]/i.test(event.key)"  oninput="limitWords(this, 200)"></textarea>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mt-5 ">
                              <div class="upload__box ">
                                <div class="upload__btn-box text-center mt-3">
                                  <label >
                                    <p class="upload__btn ">Upload images</p>
                                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                  </label>
                                </div>
                                <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                              </div>
                            </div>
                            <!-- <div class="col-12 mt-4 text-center">
                                <div class="card" id="card-container">
                                  <div class="card-header" style="position: relative; background-image: url('assets/images/ImportedPhoto_1736147006513.jpg'); background-size: cover; background-position: center; height: 120px;">
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: black; text-align: center; width: 100%;">
                                      <input type="text" class="text-input-box" placeholder="" style=" ">
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div class="image-upload-container">
                                      <div class="image-row">
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 0)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-0"  class="preview-img">
                                          </label>
                                        </div>
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 1)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-1"  class="preview-img">
                                          </label>
                                        </div>
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 2)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-2"  class="preview-img">
                                          </label>
                                        </div>
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 3)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-3"  class="preview-img">
                                          </label>
                                        </div>
                                      </div>
                                      <div class="input-row">
                                        <input type="text" id="input-0" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-1" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-2" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-3" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                      </div>
                                      <div class="image-row">
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 4)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-4"  class="preview-img">
                                          </label>
                                        </div>
                                        <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 5)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-5"  class="preview-img">
                                          </label>
                                       </div>
                                       <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 6)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-6"  class="preview-img">
                                          </label>
                                       </div>
                                       <div class="image-box">
                                          <label>
                                            <input type="file" accept="image/*" onchange="previewImage(this, 7)" style="display: none;"><i class="bi bi-plus-lg"></i>
                                            <img id="preview-img-7"  class="preview-img">
                                          </label>
                                       </div>
                                      </div>
                                      <div class="input-row">
                                        <input type="text" id="input-4" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-5" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-6" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                        <input type="text" id="input-7" placeholder="Enter description" class="image-input p-1" style="border-radius:0px">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button onclick="generateAndReplace()">Generate and Replace</button>
                                <canvas id="card-canvas" style="display:none;"></canvas>
                              </div> -->
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6 my-2" hidden>
                              <div class="form-outline">
                                <label class="form-label">Product Type</label>
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
        <div class="filter-card mb-2">
          <div class="card-body">
            <div class="row" id="myForm">
              <div class="col-12 col-sm-12 col-md-4 col-lg-4"hidden>
                <div class="form-outline">
                  <label class="form-label" for="brand_id">Search By id</label>
                  <select class="js-select2 form-select form-control mb-0" id="brand_id">
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <label class="text-dark fw-bold mb-2" for="brand_name">Search By Brand</label>
                <select class="form-select" id="brand_name">
                </select>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <label class="text-dark fw-bold mb-2" for="model_name">Search by Model</label>
                <select class="form-select" id="model_name">
                </select>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <label class="text-dark fw-bold mb-2" for="state_name">Search by State</label>
                <select class="form-select" id="state_name">
                </select>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                <div class="mt-4 pt-1">
                  <button type="button" class="btn-success btn px-4 py-2"  id="Search" onclick="search_data()">Search</button>
                  <button type="button" class="btn-success btn btn_all" id="Reset" onclick="resetform()">Reset</button>
                </div>
              </div>
            </div>
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
        if ($('#rc_res').is(':checked')) {
          $('.rc-num-container').removeClass('hidden');
        } else {
          $('.rc-num-container').addClass('hidden');
        }
      });
   });
  </script>                
  <script>
  $(document).ready(function() {
    $('#price_old').on('input', function() {
      var value = $(this).val().replace(/\D/g, ''); 
      var formattedValue = Number(value).toLocaleString('en-IN'); 
      $(this).val(formattedValue);
    });
    var input = document.getElementById('price_old');
    input.focus();
    input.setSelectionRange(0, 0);
    input.style.textAlign = 'left';
  });
</script>
<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
  const stateDropdown = document.getElementById('state');
  const districtDropdown = document.getElementById('district');
  const tehsilDropdown = document.getElementById('tehsil');
  const textInputBox = document.querySelector('.text-input-box');
  const firstNameInput = document.getElementById('first_name');
  const lastNameInput = document.getElementById('last_name');
  const mobileNumberInput = document.getElementById('mobile_number');
  const mockData = {
    State1: {
      districts: {
        District1: ["Tehsil1-1", "Tehsil1-2"],
        District2: ["Tehsil2-1", "Tehsil2-2"]
      }
    },
    State2: {
      districts: {
        District3: ["Tehsil3-1", "Tehsil3-2"],
        District4: ["Tehsil4-1", "Tehsil4-2"]
      }
    }
  };
  for (let state in mockData) {
    stateDropdown.innerHTML += `<option value="${state}">${state}</option>`;
  }
  stateDropdown.addEventListener('change', function () {
    const selectedState = stateDropdown.value;
    if (selectedState) {
      const districts = mockData[selectedState].districts;
      districtDropdown.innerHTML = '<option value="">Select District</option>';
      tehsilDropdown.innerHTML = '<option value="">Select Tehsil</option>';
      for (let district in districts) {
        districtDropdown.innerHTML += `<option value="${district}">${district}</option>`;
      }
      textInputBox.value = '';
    }
  });
  districtDropdown.addEventListener('change', function () {
    const selectedState = stateDropdown.value;
    const selectedDistrict = districtDropdown.value;
    if (selectedDistrict) {
      const tehsils = mockData[selectedState].districts[selectedDistrict];
      tehsilDropdown.innerHTML = '<option value="">Select Tehsil</option>';
      tehsils.forEach(tehsil => {
        tehsilDropdown.innerHTML += `<option value="${tehsil}">${tehsil}</option>`;
      });
      textInputBox.value = '';
    }
  });
  tehsilDropdown.addEventListener('change', function () {
    const selectedStateName = stateDropdown.options[stateDropdown.selectedIndex].textContent;
    const selectedDistrictName = districtDropdown.options[districtDropdown.selectedIndex].textContent;
    const selectedTehsilName = tehsilDropdown.options[tehsilDropdown.selectedIndex].textContent;
    const firstName = firstNameInput.value.trim();
    const lastName = lastNameInput.value.trim();
    const mobileNumber = mobileNumberInput.value.trim();

    if (selectedTehsilName) {
      textInputBox.value = `${firstName} ${lastName}, ${selectedTehsilName}, ${selectedDistrictName}, ${selectedStateName},  ${mobileNumber}`;
    }
  });
});

</script> -->