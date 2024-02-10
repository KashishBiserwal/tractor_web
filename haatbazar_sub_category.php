<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/haatbazar_sub_category.js"></script>
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
                <span>Sub Category</span>
              </li>
            </ol>
          </nav>

        <!-- subcategory -->
                <button type="button" id="add_trac" class="btn add_btn bg-success p-1" data-bs-toggle="modal"  data-bs-target="#staticBackdrop2">
                  <i class="fa fa-plus" aria-hidden="true"></i> Sub-Category
                </button>
                <!-- modal -->
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
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Category</label>
                            <input type="text" id="lookup_type" name="name_1" class="mb-0 data_search form-control input-group-sm" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Sub Category</label>
                            <input type="text" id="lookup_data" name="name_2" class="mb-0 data_search form-control input-group-sm" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="text-center">
                      <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                            <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset">Reset</button>
                      </div>
                    </div>
                    
                </div>
            </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5  shadow bg-white mt-3 p-3">
      <div class="table-responsive">
            <table id="example" class="table table-striped  table-hover table-bordered  no-footer" width="100%;">
                 <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white">ID</th>
                                            <th class="d-none d-md-table-cell text-white">Category</th>
                                            <th class="d-none d-md-table-cell text-white">Sub Category </th>
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
      

               <!-- modal -->
               <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                            <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                                <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                                <small></small>
                                           </div> 
                                            <div class="col-12" hidden>
                                                <div class="form-outline mt-4">
                                                    <label for="name" class="form-label text-dark">Enter Sub-Category</label>
                                                    <input type="text" class="form-control" placeholder="" value="2" id="category_id" name="sub_categor">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-outline">
                                                    <label class="form-label text-dark">Select Category</label>
                                                    <select class="form-select py-2" aria-label="Default select example" id="category_2" name="category_">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="form-outline mt-4">
                                                    <label for="name" class="form-label text-dark">Enter Sub-Category</label>
                                                    <input type="text" class="form-control" placeholder="" id="sub_category_1" name="sub_category">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                          <button type="submit" id="btn_subcat_1" class="btn btn-success fw-bold px-3">Submit</button>
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
 