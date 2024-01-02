<?php
include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/lookupvalue.js"></script>
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
                <span>Lookup Type</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
              <i class="fa fa-plus" aria-hidden="true"></i> Add Lookup Type
          </button>
       
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Type</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-white">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <!-- <h5 class="text-center">Fill Details</h5> -->
                                    <form id="form">
                                      <div class="row justify-content-center">
                                          <div class="col-12 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label">Lookup Type Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control " id="name" for="name" name="name" placeholder="">
                                            </div>
                                          </div>
                                      </div>
                                      <!-- <button type="button" id="" class="btn btn-success fw-bold px-3">Submit</button> -->
                                      <button type="submit" class="btn btn-success  mt-3 mb-0 btn_all" id="login">Submit</button>
                                    </form>
                                  </div>
                              </div>
                          </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                        
                      </div> -->
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
                            <label class="form-label">Search by Any Field</label>
                            <input type="text" id="namesearch"  name="search_name" onkeyup="myFunction()" class="mb-0 data_search form-control input-group-sm" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <input type="button" onclick="resetForm()" class="bg-success text-white btn mb-0 btn_all" value="Reset">
                    </div>
                </div>
            </form>
        </div>
      </div>
      <!-- Table Card -->
      <!-- <div class=" mb-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell text-white">ID</th>
                        <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                        <th class="d-none d-md-table-cell text-white">Action</th>
                    </tr>
                </thead>
                <tbody id="data-table">
                </tbody>
            </table>
        </div>
      </div> -->
      <div class=" mb-5">
          <div class="table-responsive shadow bg-white mt-3">
            <table id="example" class="table table-striped  table-hover table-bordered  no-footer" width="100%;">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell text-white">ID</th>
                        <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                        <th class="d-none d-md-table-cell text-white">Action</th>
                    </tr>
                </thead>
              <tbody id="data-table"></tbody>
              
            </table>
          </div>
      </div>
    </div>
   </section>
      
    
</div>
</div>
</body>

