<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/tyres_list.js"></script>
  
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
                <span>Tyres Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" onclick="resetFormFields();" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Tyres
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add Tyres </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Details</h4>
                              <form id="form_tyre_list" method="post" enctype="multipart/form-data" onsubmit="return false">
                                <div class="row justify-content-center pt-4">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Brand</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example" id="brand" name="brand">
                                        <option value=""  disabled>Select Brand</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Model</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_model" name="tyre">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Tyre Position</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_position" name="tyre_position">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Size of the tyre</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_size" name="tyre_size">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                     <div class="form-outline my-3">
                                      <label for="yr_state" class="form-label text-dark">Category</label>
                                      <select class="form-select form-control" aria-label=".form-select-lg example"id="category" name="category">
                                          <option value="" selected disabled>Select Categoey</option>
                                      </select>
                                    </div>
                                  </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="upload__box">
                                        <div class="upload__btn-box text-center">
                                          <label>
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" name='files[]' multiple=""  data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                          <!-- <p></p> -->
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap row"></div>
                                      </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="subbnt"  class="btn btn-success fw-bold px-3">Submit</button>
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
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Select Brand</option>
                  <option value="1">Mahindra</option>
                  <option value="2">Swaraj</option>
                  <option value="3">John deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Tyre Position</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Select Position</option>
                  <option value="1">Front-Left</option>
                  <option value="2">Front-right</option>
                  <option value="2">Back-Left</option>
                  <option value="2">Back-right</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="text-center">
                <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                <button type="button" class="btn-success btn  mx-2 px-4 py-2" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class="mb-5">
        <div class="table-responsive">
          <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer bg-white" width="100%; margin-bottom: 15px;">
            <thead>
              <tr>
                <th class="d-none d-md-table-cell text-white">S.No.</th>
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model</th>
                <!-- <th class="d-none d-md-table-cell text-white">Tyre Name</th> -->
                <th class="d-none d-md-table-cell text-white">Tyre Position</th>
                <th class="d-none d-md-table-cell text-white">Size(mm)</th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
          <tbody id="data-table">
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <!-- <div class="modal fade" id="staticBackdrop_model" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header modal_head">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Update Tyre Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

              <h4 class="text-center">Update Tyre Details</h4>
              <form id="old_tract" name="old_tract px-5" method="post" enctype="multipart/form-data" onsubmit="return false">
                <div class="row justify-content-center pt-4">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-outline mt-3">
                      <label for="name" class="form-label text-dark">Brand</label>
                      <select class="form-select form-control" aria-label=".form-select-lg example" id="brand1" name="brand">
                        <option value=""  disabled>Select Brand</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <div class="form-outline mt-3">
                      <label for="name" class="form-label text-dark">Tyre Model</label>
                      <input type="text" class="form-control" placeholder="" id="tyre_model1" name="tyre">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <div class="form-outline mt-3">
                      <label for="name" class="form-label text-dark">Tyre Position</label>
                      <input type="text" class="form-control" placeholder="" id="tyre_position1" name="tyre_position">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                    <div class="form-outline mt-3">
                      <label for="name" class="form-label text-dark">Size of the tyre</label>
                      <input type="text" class="form-control" placeholder="" id="tyre_size1" name="tyre_size">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-outline my-3">
                      <label for="yr_state" class="form-label text-dark">Category</label>
                      <select class="form-select form-control" aria-label=".form-select-lg example"id="category1" name="category">
                        <option value="" selected disabled>Select Categoey</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div class="upload__box">
                      <div class="upload__btn-box text-center">
                        <label>
                        <p class="upload__btn ">Upload images</p>
                        <input type="file" name='files[]' multiple=""  data-max_length="20" class="upload__inputfile" id="_image1" name="_image">
                        </label>
                      </div>
                      <div id="selectedImagesContainer" class="upload__img-wrap"></div>
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
    </div> -->
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
                      <h6 class="fw-bold">Brand Name: </h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="brand_name2" ></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Tyre Model:</h6>
                    </div>
                    <div class="col-12  col-lg-6 col-sm-6 col-md-6">
                     <div id="model2"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Tyre Position:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="quantity"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Size of Tyre:</h6>
                    </div>
                    <div class="col-12  col-lg-6 col-sm-6 col-md-6">
                     <div id="grade"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Category:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="price"></div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <!-- <h6 class="fw-bold">Image:</h6> -->
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                    <div id="selectedImagesContainer" class="upload__img-wrap row"></div>
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

<?php
   include 'includes/footertag.php';
   ?> 