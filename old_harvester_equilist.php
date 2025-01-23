<?php
  include 'includes/headertag.php';
  include 'includes/footertag.php';
?>
 <link rel="stylesheet" type="text/css" href="assets/css/banner-image.css"/>
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/old_harvesteradmin.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
    <script src="<?php $baseUrl; ?>model/state2_dist2.js" defer></script>
    <script src="<?php $baseUrl; ?>model/brand_function.js" defer></script>
    <script src="model/banner-image.js"></script>
  <style>
  .upload__inputfile {
  width: .1px;
  height: .1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
  }
  .upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 150px;
  padding: 5px;
  transition: all .3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color:  #198754;
  border-color:  #198754;
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
  }
  .upload__btn:hover {
  background-color: unset;
  color:  #198754;
  transition: all .3s ease;
  }
  .upload__btn-box {
  margin-bottom: 10px;
  margin-top:-25px;
  }
  .upload__img-wrap {
    display: flex;
    flex-wrap: wrap;
  }
  .upload__img-box {
  flex: 0 0 calc(33.333% - 20px); 
  margin: 0 10px 20px; 
  position: relative;
  display: flex;
    flex-wrap: wrap;
  }
  .upload__img-close,.upload__img-close_button {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 60px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
  }
  .upload__img-close:after,.upload__img-close_button:after {
  content: '\2716';
  font-size: 14px;
  color: white;
  }
  .img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  position: relative;
  width: 123;
  height: 125px;
  }  
  .card{
    margin-left: -65px;
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
                    <span>Old Harvester List</span>
                  </li>
                </ol>
              </nav>
              <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  onclick="resetFormFields()"  data-bs-target="#staticBackdrop">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Old Harvester
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Old Harvester</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                    </div>
                    <div class="modal-body bg-white">
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <form id="old_form" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row justify-content-center pt-3">
                              <h5 class="fw-bold">Your Harvester Information</h5>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden >
                                <div class="form-outline ">
                                  <label for="name" class="form-label text-dark"> customer_id id</label>
                                  <input type="text" class="form-control"  id="customer_id" name="" value="">
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3" hidden>
                                <div class="form-outline ">
                                  <label for="name" class="form-label text-dark">Form type</label>
                                  <input type="text" class="form-control" placeholder="Enter Your Model Name" value="FOR_SELL_HARVESTER" id="form_type" name="form_type">
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline ">
                                  <label for="brand_brand" class="form-label text-dark">Brand</label>
                                  <select class="form-select form-control" aria-label=".form-select-lg example" id="brand_brand" name="brand">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                <div class="form-outline ">
                                  <label for="model_model" class="form-label text-dark">Model Name</label>
                                  <select class="form-select form-control" aria-label=".form-select-lg example" id="model_model" name="model">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label for="CROPS_TYPE" class="form-label text-dark">Crop Type</label>
                                  <select class="form-select form-control " aria-label=".form-select-lg example" id="CROPS_TYPE" name="CROPS_TYPE">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline ">
                                  <label for="POWER_SOURCE" class="form-label text-dark"> Power Source</label>
                                  <select class="form-select form-control " aria-label=".form-select-lg example" id="POWER_SOURCE" name="POWER_SOURCE">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label for="hours" class="form-label text-dark">Hours</label>
                                  <select class="form-select form-control " aria-label=".form-select-lg example" id="hours" name="hours">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label for="year" class="form-label text-dark">Purchase Year</label>
                                  <select class="form-select form-control" aria-label=".form-select-lg example" id="year" name="year">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                <div class="form-outline">
                                  <label for="price" class="form-label text-dark">Price</label>
                                  <input type="text" class="form-control" placeholder="Enter Price" id="price" name="price">
                                </div>
                              </div>
                              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3"></div>
                                <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                  <div class="upload__box ">
                                    <div class="upload__btn-box text-center mt-3">
                                      <label>
                                        <p class="upload__btn ">Upload images</p>
                                        <input type="file" name='files[]' multiple="" data-max_length="20" class="upload__inputfile" id="image">
                                      </label>
                                    </div>
                                    <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                  </div>
                                </div> -->
                              <div class="col-12 mt-3">
                                <div class="form-outline">
                                  <label class="form-label text-dark">About</label>
                                  <textarea rows="4" cols="70" class="w-100 p-2" minlength="1" maxlength="255" id="about" name="about"></textarea>
                                </div>
                              </div>
                              <h5 class="fw-bold mt-4 ">Personal Information</h5>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6  mt-3">
                                <div class="form-outline">
                                  <label for="name" class="form-label text-dark"> First Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline ">
                                  <label for="name" class="form-label text-dark"> Last Name</label>
                                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Your Name">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline ">
                                  <label for="name" class="form-label text-dark">Mobile</label>
                                  <input type="text" class="form-control"  id="Mobile" name="Mobile" placeholder="Enter Your Number">
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline ">
                                  <label for="state" class="form-label text-dark">State</label>
                                  <select class="form-select form-control state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                  </select>
                                  </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline ">
                                  <label for="district" class="form-label text-dark">District</label>
                                  <select class="form-select form-control district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-lg-6 col-md-6 mt-3">
                                <div class="form-outline ">
                                  <label for="tehsil" class="form-label text-dark">Tehsil</label>
                                  <select class="form-select form-control tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
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
                    <div class="modal-footer mt-3">
                      <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                      <button type="submit" id="submitbtn" class="btn btn-success btn_all">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class=" ">
              <!-- Filter Card -->
              <div class="filter-card">
                <div class="card-body">
                  <form action="" id="myform" class="mb-0">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="form-outline">
                          <label for="brand2" class="form-label">Brand Name</label>
                          <select class="form-select form-control brand_select" id="brand2">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="form-outline ">
                          <label for="model_name" class="form-label">Model</label>
                          <select class="form-select form-control model_select" aria-label="Default select example" id="model_name" name="model">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="form-outline">
                          <label for="state_name" class="form-label">State</label>
                          <select class="form-select form-control state_select" aria-label="Default select example" id="state_name" name="state">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="form-outline">
                          <label class="form-label">District</label>
                          <select class="form-select form-control district_select" aria-label="Default select example" id="district_name" name="district">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 mt-4">
                        <div class="text-center">
                          <button type="button" class="btn-success btn btn_all" id="Search" onclick="searchdata()">Search</button>
                          <button type="button" class="btn-success btn btn_all" id="Reset" onclick="resetform()">Reset</button>
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
                        <th class="d-none d-md-table-cell text-white">Brand</th>
                        <th class="d-none d-md-table-cell text-white"> Model </th>
                        <th class="d-none d-md-table-cell text-white"> Year </th>
                        <th class="d-none d-md-table-cell text-white"> Phone Number </th>
                        <th class="d-none d-md-table-cell text-white"> State </th>
                        <th class="d-none d-md-table-cell text-white"> district </th>
                        <th class="d-none d-md-table-cell text-white"> Action </th>
                      </tr>
                    </thead>
                    <tbody id="data-table">
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
            <div class="modal fade" id="view_old_harvester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal_box">
                  <div class="modal-header modal_head">
                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Old Harvester Information </h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                  </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                      <div class="col-12">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td>Brand-</td>
                              <td id="brand_name"></td>
                              <td>Model Name-</td>
                              <td id="model_name_1"></td>
                            </tr>
                            <tr>
                              <td>Crop Type-</td>
                              <td id="CROPS_TYPE_1"></td>
                              <td>Power Sourcer-</td>
                              <td id="POWER_SOURCE_1"></td>
                            </tr>
                            <tr>
                              <td>Hours-</td>
                              <td id="hours_1"></td>
                              <td>Purchase Year-</td>
                              <td id="year_1"></td>
                            </tr>
                            <tr>
                              <td>Price-</td>
                              <td id="Price_1"></td>
                            <tr>
                              <td>Upload images-</td>
                              <td colspan="3">
                                <div class="col-12">
                                  <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                </div>
                              </td>
                            </tr>
                              <td>About-</td>
                              <td id="About_1"></td>
                            <tr>
                              <td>First Name-</td>
                              <td id="First_Name"></td>
                              <td>Last Name-</td>
                              <td id="Last_Name"></td>
                            </tr>
                            <tr>
                              <td>Mobile-</td>
                              <td id="Mobile_1"></td>
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
                  </div>
                </div>
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

    document.addEventListener('DOMContentLoaded', function () {
  const stateDropdown = document.getElementById('state');
  const districtDropdown = document.getElementById('district');
  const tehsilDropdown = document.getElementById('tehsil');
  const textInputBox = document.querySelector('.text-input-box');
  const firstNameInput = document.getElementById('name');
  const lastNameInput = document.getElementById('lname');
  const mobileNumberInput = document.getElementById('Mobile');

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
      textInputBox.value = `${firstName} ${lastName}, ${selectedTehsilName}, ${selectedDistrictName}, ${selectedStateName},${mobileNumber}`;
    }
  });
});
</script>
                       