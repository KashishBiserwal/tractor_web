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
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Type</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                      <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <form id="look_up_form" method="POST">
                              <div class="row justify-content-center">
                                <div class="col-12 mt-4">
                                  <div class="form-outline">
                                    <label class="form-label text-dark">Lookup Type Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " for="name" name="lookup_name" placeholder="" id="name">
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-success  mt-3 mb-0 btn_all" id="submit_button">Submit</button>
                            </form>
                          </div>
                        </div>
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
      <div class="mb-5 shadow bg-white mt-3 p-3">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-hover table-bordered no-footer" width="100%;">
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

   <!-- Modal -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal_box">
            <div class="modal-header modal_head ">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Lookup Type</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-white">
              <div class="row justify-content-center">
                <div class="col-12">
                  <form id="look_up_form1" method="POST">
                    <div class="row justify-content-center">
                      <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                        <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                        <small></small>
                      </div> 
                      
                      <div class="col-12 mt-4">
                        <div class="form-outline">
                          <label class="form-label text-dark">Lookup Type Name<span class="text-danger">*</span></label>
                          <input type="text" class="form-control " for="name" name="lookup_name1" id="look_up_name" placeholder="">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
              <button type="button" id="savechangebtn" class="btn btn-success fw-bold px-3">Save Change</button>
            </div>
          </div>
        </div>
      </div>
   
</div>
</div>
</body>

