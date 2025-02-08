<?php
  include 'includes/headertag.php';
  include 'includes/headertagadmin.php';
  include 'includes/footertag.php';
?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/lookupdata.js" defer></script>
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
                  <span>Lookup Data</span>
                </li>
              </ol>
            </nav>
            <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Lookup Data
            </button>
            <!-- modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content modal_box">
                  <div class="modal-header modal_head">
                    <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Lookup Data</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                  </div>
                  <div class="modal-body bg-white">
                    <div class="row justify-content-center">
                      <div class="col-12">
                        <form id="lookup_data_form" method="POST">
                          <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12  mt-4">
                              <div class="form-outline">
                                <label for="lookupSelectbox" class="form-label">Type</label>
                                <select class="form-select form-control py-2" value="lookupSelectbox" for="lookupSelectbox" id="lookupSelectbox" aria-label="Default select example">
                                  <option value="" id="lookupSelect">Select Type Name</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-12 mt-4">
                              <div class="form-outline">
                                <label for="lookup_data_value" class="form-label text-dark"> Lookup Data Name</label>
                                <input type="text" class="form-control" placeholder=" " id="lookup_data_value"  for="lookup_data" name="lookup_datavalue">
                              </div>
                            </div>
                          </div>
                          <button type="button" class="btn btn-success  mt-3 mb-0 btn_all" id="lookup_data_submit">Submit</button>
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
                  <label class="form-label">Search by Lookup type</label>
                  <input type="text" id="lookup_type" name="name_1" class="mb-0 data_search form-control input-group-sm" />
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="form-outline">
                  <label class="form-label">Search by Lookup data </label>
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
                <th class="d-none d-md-table-cell text-white">Lookup Type </th>
                <th class="d-none d-md-table-cell text-white">Lookup Data </th>
                <th class="d-none d-md-table-cell text-white">Action</th>
              </tr>
            </thead>
            <tbody id="data-table"></tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="staticBackdrop_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content modal_box">
        <div class="modal-header modal_head">
          <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Lookup Data</h5>
          <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
        </div>
        <div class="modal-body bg-white">
          <div class="row justify-content-center">
            <div class="col-12">
              <form id="lookup_data_form_1" method="POST">
                <div class="row justify-content-center">
                  <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                    <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                    <small></small>
                  </div> 
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12  mt-4">
                    <div class="form-outline">
                      <label for="lookupSelectbox" class="form-label">Type</label>
                      <select class="form-select form-control py-2" value="lookupSelectbox" for="lookup" id="lookupSelectbox1" name="lookup_Selectbox1" aria-label="Default select example">
                        <option value="" >Select Type Name</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="form-outline">
                      <label for="lookup_data_value" class="form-label text-dark"> Lookup Data Name</label>
                      <input type="text" class="form-control" placeholder=" " id="lookup_data_value1"  for="lookup_data" name="lookup_datavalue1">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" id="dataeditbtn" class="btn btn-success fw-bold px-3">Save Chnage</button>
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
