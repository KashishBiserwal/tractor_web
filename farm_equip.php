<?php
 include 'includes/headertag.php';
 include 'includes/headertagadmin.php';
 include 'includes/footertag.php';
 
 ?> 
  <link rel="stylesheet" type="text/css" href="assets/css/banner-image.css" />
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/farm_imple_product.js" defer></script>
  <script src="model/banner-image.js"></script>
  <style>
    .card{
      margin-left: -60px !important;
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
                    <span>Farm Equipment Listings</span>
                  </li>
                </ol>
              </nav>
              <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <i class="fa fa-plus" aria-hidden="true"></i>Add Farm Equipments
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header modal_head">
                      <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Farm Equipments</h5>
                      <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                    </div>
                    <div class="modal-body bg-white">
                      <div class="row justify-content-center">
                        <div class="col-lg-10">
                          <h4 class="text-center" style="font-weight:600;">Fill your Details</h4>
                          <form method="POST" id="product-form">
                            <div class="row justify-content-center">
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label for="brand_main" class="form-label" for="brand">Brand</label>
                                  <select class="form-select" id="brand_main" name="brand" required>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3" hidden>
                                <div class="form-outline">
                                  <label for="idUser" class="form-label" for="model">idUser</label>
                                  <input type="text" class="form-control" name="idUser" id="idUser" placeholder=""/>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-3">
                                <div class="form-outline">
                                  <label class="form-label" for="model">Model</label>
                                  <input type="text" class="form-control" name="model_main" id="model" placeholder="Enter Model"/>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6  mt-3">
                                <div class="form-outline">
                                  <label for="lookupSelectbox" class="form-label">Category</label>
                                  <select class="form-select form-control py-2" value="lookupSelectbox" for="lookupSelectbox" id="lookupSelectbox" aria-label="Default select example">
                                    <option value="" id="lookupSelect">Select Category</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6 col-md-6 col-lg-6  mt-3">
                                <div class="form-outline">
                                  <label for="lookupSelect2" class="form-label">Sub-Category</label>
                                  <select class="form-select form-control py-2" value="lookupSelectbox2" for="lookupSelectbox2" id="lookupSelectbox2" aria-label="Default select example">
                                    <option value="" id="lookupSelect2">Select Category</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-12 mt-3" id="fields"></div>
                                <div class="col-12 mt-5">
                                  <div class="upload__box text-center">
                                    <div class="upload__btn-box text-center">
                                      <label>
                                        <p class="upload__btn">Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image_name" name="_image"required>
                                      </label>
                                    </div>
                                    <div class="col-12">
                                      <div id="selectedImagesContainer2" class="upload__img-wrap float-start"></div>
                                    </div>             
                                  </div>
                                  <p class="text-danger">Note*- Image Must be JPEG, PNG & JPG format</p>
                                </div>
                              </div>
                              <!-- <div class="col-6 mt-5">
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
                            <div id="fields"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn bg-success text-white btn_all" id="save">Submit</button>
                      <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <!-- Filter Card -->
          <div class="filter-card mb-2">
            <div class="card-body">
              <form action="" id="myform" class="mb-0">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-outline">
                      <label for="seach_subcat1" class="form-label">Category</label> 
                      <select class="form-select form-control" id="seach_subcat1" aria-label="Default select example">
                        <option selected>Select Category</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-outline">
                      <label for="seach_subcat" class="form-label">Subcategory</label> 
                      <select class="form-select form-control" id="seach_subcat" aria-label="Default select example">
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="text-center">
                      <button type="button" class="btn-success btn mb-0 btn_all" id="search">Search</button>
                      <button type="button" class="btn-success btn mb-0 btn_all" id="Reset">Reset</button>
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
                    <th class="d-none d-md-table-cell text-white">Category </th>
                    <th class="d-none d-md-table-cell text-white">Subcategory</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white"> Model</th>
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
      <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content modal_box">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> New Farm Equipment Information </h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <div class="row ">
                <div class="col-12">
                  <table class="table table-striped">
                    <tbody>
                      <p class="fw-bold text-center">Implement Data Info</p>
                      <tr> 
                        <td>Implement Category Name-</td>
                        <td id="category_view"></td>
                        <td>Subcategory Name-</td>
                        <td id="subcategory_view"></td>
                      </tr>
                      <tr> 
                        <td>Brand Name-</td>
                        <td id="brand_view"></td>
                        <td>Model Name-</td>
                        <td id="model_view"></td>
                      </tr>
                      <tr>
                        <td>Thumbnail Image-</td>
                        <td id="thumbnail" class="row"></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="justify-content-center" style="margin: 0 auto;">
                    <p class="fw-bold text-center">Implement Custom Data Info</p>
                    <div id="implementData" class="row"></div>
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
</body>

<script>
  const form = document.getElementById('form');
  const brand = document.getElementById('brand');
  const type = document.getElementById('type');
  const power = document.getElementById('power');
  const category = document.getElementById('category');
  const image = document.getElementById('image');
  const description = document.getElementById('description');

  function showError(input, message) {
      const formControl = input.parentElement;
      const small = formControl.querySelector('small');
      formControl.className = 'form-outline mb-3 error';
      small.innerText = message;
      small.classList.add('error-message');
  }
  function showSuccess(input) {
      const formControl = input.parentElement;
      formControl.className = 'form-outline mb-3 success';
  }

  function checkRequired(inputArr) {
      inputArr.forEach(function (input) {
          if (input.value.trim() === '') {
              showError(input, `${getFieldName(input)} is required`);
            
          } else {
              showSuccess(input);
          }
      });
  }
  // Check input length
  function checkLength(input, min, max) {
      if (input.value.length < min) {
          showError(input, `${getFieldName(input)} must be at least ${min} characters`);
      } else if (input.value.length > max) {
          showError(input, `${getFieldName(input)} must be less than ${max} characters`);
      } else {
          showSuccess(input);
      }
  }
  // Get Field Name
  function getFieldName(input) {
      return input.id.charAt(0).toUpperCase() + input.id.slice(1);
  }
  // Check email format
  function checkEmail(input) {
      const emailValue = input.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailValue)) {
          showError(input, 'Invalid email format');
      } else {
          showSuccess(input);
      }
  }
</script>