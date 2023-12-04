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
   <section style="padding: 0 15px;">
    <div class="">
      <div class="container">
        <div class="align-items-center justify-content-between page_title my-4">
        
          <div class="row">
            <div class="col-12 col-sm-5 col-lg-5 col-md-5">
              <h4>Lookup Type</h4>
            </div>
            <div class="col-12 col-sm-7 col-lg-7 col-md-7">
              <div class=" float-end">
                <button type="button" id="add_trac" class="btn add_btn bg-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i>Add Lookup Type
                </button>
                <!-- modal -->
                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Type</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body bg-light">
                              <div class="row justify-content-center">
                                  <div class="col-12">
                                    <h5 class="text-center">Fill Details</h5>
                                    <form id="form">
                                      <div class="row justify-content-center">
                                          <div class="col-12 mt-3">
                                            <div class="">
                                                <label class="text-dark">Lookup Type Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control py-2 text-uppercase" id="name" for="name" name="name" placeholder="">
                                            </div>
                                          </div>
                                      </div>
                                      <!-- <button type="button" id="" class="btn btn-success fw-bold px-3">Submit</button> -->
                                      <button type="submit" class="btn px-4 bg-success" id="login">Submit</button>
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
         
         
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-outline">
                            <label class="form-label">Search by Any Field</label>
                            <input type="text" id="namesearch"  name="search_name" class=" data_search form-control input-group-sm" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <input type="reset" class="bg-success text-white btn px-4 py-2" value="Reset">
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
      <div class="card mb-5">
          <div class="table-responsive shadow" style="overflow: hidden;">
            <table id="example" class="table  no-footer" width="100%; margin-bottom: 15px;">
                <thead>
                    <tr class="bg-success">
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

