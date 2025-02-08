<?php
  include 'includes/headertag.php';
  include 'includes/headertagadmin.php';
  include 'includes/footertag.php';
?> 
 <link rel="stylesheet" type="text/css" href="assets/css/banner-image.css"/>
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/hatbazar_list.js" defer></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
  <script src="<?php $baseUrl; ?>model/state2_dist2.js" defer></script>
  <script src="model/banner-image.js"></script>
   <style>
     label.error {
    color: red; 
  }
.height-same {
    height: 33px;
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
          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <h5 class="fw-bold" style="margin-left:20px;"> Bazaar Item List</h5>
          </div>
          <div class="col-12 col-sm-6 col-lg-6 col-md-6">
            <div class=" float-end">
              <button type="button" id="add_trac" class="btn add_btn bg-success" onclick="resetFormFields()" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
                <i class="fa fa-plus" aria-hidden="true"></i> Bazaar Items
              </button>
              <!-- modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Bazaar Items</h5>
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
                                  <input type="text" class="form-control" placeholder="" value="" id="sub_category_id" name="price">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-outline">
                                  <label for="c_category" class="form-label">Category</label>
                                  <select class="form-select py-2 category_cls" aria-label="Default select example" id="c_category" name="_category" onchange="get_sub_category_1(this.value)">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-outline">
                                  <label for="sub_cate" class="form-label">Sub-Category</label>
                                  <select class="form-select py-2 sub_category_cls" aria-label="Default select example" id="sub_cate" name="sub_cate">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="input-group">
                                  <input type="number" id="quantityInput" class="form-control text-black height-same" placeholder="Quantity" aria-label="Text input with dropdown button" name="quantity">
                                  <select type="button" id="unitSelect" name="unit" class="btn border border-secondary-2 h-25 dropdown-toggle height-same" data-bs-toggle="dropdown">
                                    <ul class="dropdown-menu">
                                      <option class="dropdown-item unitSelect" value="">Select Unit</option>
                                      <option class="dropdown-item unitSelect" value="Each">Each</option>
                                      <option class="dropdown-item unitSelect" value="gram">gram</option>
                                      <option class="dropdown-item unitSelect" value="Kg">Kg</option>
                                      <option class="dropdown-item unitSelect" value="Quintal">Quintal</option>
                                      <option class="dropdown-item unitSelect" value="Ton">Ton</option>
                                      <option class="dropdown-item unitSelect" value="Pack">Pack</option>
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
                            
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                <div class="form-outline mt-4">
                                  <label for="name" class="form-label text-dark">Total Price Calculation</label>
                                  <input type="text" class="form-control" placeholder="" id="tprice" name="tprice" readonly>
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 "> </div>
                              
                              <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                <div class="upload__box mt-5">
                                  <div class="upload__btn-box text-center">
                                    <label >
                                      <p class="upload__btn ">Upload images</p>
                                      <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                    </label>
                                  </div>
                                  <div id="selectedImagesContainer" class="upload__img-wrap row"></div>
                                </div>
                              </div> -->
                              <div class="col-12 mt-4">
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
                                  <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_" name="state_">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 my-1">
                                <div class="form-outline mt-3">
                                  <label class="form-label" for="district">District</label>
                                  <select class="form-select py-2 district-dropdown" aria-label="Default select example" name="dist" id="dist">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                <div class="form-outline mt-3">
                                  <label for="tehsil" class="form-label">Tehsil</label>
                                  <select class="form-select py-2 tehsil-dropdown" id="tehsil" aria-label="Default select example">
                                  </select>
                                </div>
                              </div> 
                              <div class="col-6 mt-4">
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
    <div class="filter-card mb-2">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
            <div class="form-outline">
              <label for="cc_category" class="form-label">Category</label>
              <select class="form-select py-2 category_cls" aria-label="Default select example" id="cc_category" name="_category" onchange="get_sub_category(this.value)">
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
            <div class="form-outline">
              <label for="ss_sub_cate" class="form-label">Sub-Category</label>
              <select class="form-select py-2 sub_category_cls" aria-label="Default select example" id="ss_sub_cate" name="sub_cate_1">
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
            <div class="form-outline">
              <label class="form-label" for="select_state">State</label>
              <select class="form-select py-2 state_select" aria-label="Default select example" id="select_state">
              </select>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3">
            <div class="form-outline">
              <label class="form-label" for="select_dist">District</label>
              <select class="form-select py-2 district_select" aria-label="Default select example" id="select_dist">
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
          <tbody id="data-table"></tbody>
        </table>
      </div>
    </div>
  </div>
</section>
  <div class="modal fade" id="view_model_hatbazar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content modal_box">
        <div class="modal-header modal_head">
          <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Bazar Details</h5>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
  $(document).ready(function() {
    $('#price').on('input', function() {
      var value = $(this).val().replace(/\D/g, '');
      var formattedValue = Number(value).toLocaleString('en-IN'); 
      $(this).val(formattedValue);
  });
  var input = document.getElementById('price');
    input.focus();
    input.setSelectionRange(0, 0);
    input.style.textAlign = 'left';
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const stateDropdown = document.getElementById('state_');
  const districtDropdown = document.getElementById('dist');
  const tehsilDropdown = document.getElementById('tehsil');
  const textInputBox = document.querySelector('.text-input-box');
  const firstNameInput = document.getElementById('fname');
  const lastNameInput = document.getElementById('lname');
  const mobileNumberInput = document.getElementById('number');

  // Mock data for states, districts, and tehsils
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

      // Clear the input box
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
      // Update the input box in the desired order
      textInputBox.value = `${firstName} ${lastName}, ${selectedTehsilName}, ${selectedDistrictName}, ${selectedStateName},${mobileNumber}`;
    }
  });
});
</script>