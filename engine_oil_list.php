<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/engineoil_list.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
  .select2{
    width: 100%;
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
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              
              <li class="breadcrumb-item">
                <span> Engine Oil Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Engine Oil
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> Add Engine Oil </h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h5 class="text-center">Fill your Details</h5>
                            <form id="engine_oil_form">
                                <div class="row justify-content-center pt-4">
                                   
                                   <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                      <label for="name" class="form-label text-dark">Brand</label>
                                      <select class="form-select form-control" aria-label=".form-select-lg example" id="brand" name="brand">
                                        <option value=""disabled>Select Brand</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Model Name</label>
                                        <input type="text" class="form-control" placeholder="" id="model" name="model">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Grade</label>
                                        <input type="text" class="form-control" placeholder="" id="grade" name="grade">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Quantity</label>
                                        <input type="text" class="form-control" placeholder="" id="qualtity" name="qualtity">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                      <div class="form-outline mt-3">
                                        <label for="name" class="form-label text-dark">Price</label>
                                        <input type="text" class="form-control" placeholder="" id="price" name="price">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                     <div class="form-outline my-3"  id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                      <label for="yr_state" class="form-label text-dark">Compatible Tractors</label>
                                      <select class="js-example-basic-multiple w-100" name="states[]" id="ass_list" multiple="multiple">
                                        <option value="" selected>hello</option>
                                        <option value="" >hyy</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-12 ">
                                    <div class="form-outline my-3">
                                      <label class="form-label text-dark">Description</label>
                                      <textarea rows="4" cols="70" class="w-100" minlength="1" maxlength="255" id="textarea_" name="textarea_"></textarea>
                                    </div>
                                  </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                      <div class="upload__box">
                                        <div class="upload__btn-box text-center">
                                          <label >
                                            <p class="upload__btn ">Upload images</p>
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="_image" name="_image">
                                          </label>
                                        </div>
                                        <div id="selectedImagesContainer" class="upload__img-wrap"></div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="submit_btn"class="btn btn-success fw-bold px-3">Submit</button>
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
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Model Name</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="text-center mt-1">
                <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                <button type="button" class="btn-success btn px-4 py-2" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
               <div class="table-responsive">
                                <table id="example" class="table dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">S.No.</th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white">Model Name</th>
                                            <th class="d-none d-md-table-cell text-white">Quantity</th>
                                            <th class="d-none d-md-table-cell text-white">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="data-table">
                                    </tbody>
                                </table>
                            </div>
                       </div>
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
                      <h6 class="fw-bold">Brand Name: </h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <p id="brand_name2" ></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Model:</h6>
                    </div>
                    <div class="col-12  col-lg-6 col-sm-6 col-md-6">
                     <div id="model2"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Quantity:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="quantity"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Grade:</h6>
                    </div>
                    <div class="col-12  col-lg-6 col-sm-6 col-md-6">
                     <div id="grade"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Price:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="price"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Compatitble Tractors:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="compatible"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                      <h6 class="fw-bold">Description:</h6>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-6 col-md-6">
                     <div id="descrption"></div>
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

