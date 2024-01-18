<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/new_tyre_list.js"></script>
  
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
                <span>Tyres Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add New Tyre
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Tyre </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight:600;">Fill your Details</h4>
                              <form id="form_tyre_list">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3 ">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">Brand</label>
                                        <select class="form-select form-control" aria-label=".form-select-lg example" id="brand" name="brand">
                                    
                                    </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Model</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre" name="tyre">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Position</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_position" name="tyre_position">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                     <div class="form-outline ">
                                      <label for="yr_state" class="form-label text-dark">Category</label>
                                      <select class="form-select form-control" aria-label=".form-select-lg example"id="category" name="category">
                                         
                                      </select>
                                    </div>
                                  </div>
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 mt-3">
                                      <div class="row">
                                        <div class="col-3">
                                          <h6  class=" fw-bold mt-2">Size of the tyre</h6>
                                        </div>
                                        <div class="col-9">
                                            <div class="row">
                                              <div class="col-5 col-lg-5 col-md-5 col-sm-5">
                                                <div class="form-outline ">
                                                  <label for="name" class="form-label text-dark">Tyre Diameter</label>
                                                  <input type="text" class="form-control" placeholder="" id="tyre_diameter" name="tyre_diameter">
                                                </div>
                                              </div> 
                                              <div class="col-1 col-lg-1 col-md-1 col-sm-1 mt-2"><h6>X</h6></div>
                                              <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-outline ">
                                                  <label for="name" class="form-label text-dark">Tyre Width</label>
                                                  <input type="text" class="form-control" placeholder="" id="tyre_width" name="tyre_width">
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                       
                                    </div>
                                  <!--   <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Diameter</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_diameter" name="tyre_diameter">
                                      </div>
                                    </div> -->
                                    <!-- <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">Tyre Width</label>
                                        <input type="text" class="form-control" placeholder="" id="tyre_width" name="tyre_width">
                                      </div>
                                    </div>  -->
                                 
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 mt-5">
                                      <div class="upload__box">
                                        <div class="upload__btn-box">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                          <!-- <p></p> -->
                                        </div>
                                        <div id="selectedImagesContainer1" class="upload__img-wrap row"></div>
                                      </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="submit_btn" class="btn btn-success  btn_all">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
              <div class="form-outline">
                <label class="form-label">Brand</label>
                <select class="form-select form-control" aria-label="Default select example" id="brand1">
                 
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
              <div class="form-outline">
                <label class="form-label">Tyre Position</label>
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected disabled>Select Position</option>
                  <option value="1">Front-Left</option>
                  <option value="2">Front-right</option>
                  <option value="2">Back-Left</option>
                  <option value="2">Back-right</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4  mt-3">
              <div class="text-center">
                <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn  btn_all" id="Reset">Reset</button>
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
                <th class="d-none d-md-table-cell text-white">Brand</th>
                <th class="d-none d-md-table-cell text-white">Model</th>
                <th class="d-none d-md-table-cell text-white">Tyre Position</th>
                <th class="d-none d-md-table-cell text-white">Size</th>
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
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Tyre Information </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body bg-light">
                    <div class="row ">
                       <div class="col-12">
                        <table class="table table-striped">
                        <tbody>
                         <tr>
                            <td>Brand Name:-</td>
                            <td id="brand_name2"></td>
                            </tr>
                          <tr>
                            <td>Model-</td>
                            <td id="model2"></td>
                          </tr>
                          <tr>
                            <td>Tyre Position-</td>
                            <td id="quantity"></td>
                            </tr>
                          <tr>
                            <td>Tyre Size-</td>
                            <td id="grade"></td>
                          </tr>
                          <tr>
                            <td>Tyre Category-</td>
                            <td id="price"></td>
                          </tr>
                          
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

<?php
   include 'includes/footertag.php';
   ?> 
