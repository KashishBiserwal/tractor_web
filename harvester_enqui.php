<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
  ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/harvester_enqui.js" defer></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
  <script src="<?php $baseUrl; ?>model/state2_dist2.js" defer></script>
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
                    <span>New Harvester Enquiries</span>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="filter-card mb-2">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3"hidden>
                  <div class="form-outline">
                    <label class="form-label" for="brand_id1">Search By id</label>
                      <select class=" form-select form-control mb-0" id="brand_id1">
                      </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label" for="brand_search">Search By Brand</label>
                    <select class="js-select2 form-select form-control mb-0" id="brand_search">
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline ">
                    <label class="form-label" for="model3">Model</label>
                    <select class="form-select py-2" aria-label="Default select example" id="model3" name="model"> 
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label" for="state3">State</label>
                    <select class="form-select py-2 state_select" aria-label="Default select example" id="state3">
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label" for="district3">District</label>
                    <select class="form-select py-2 district_select" aria-label="Default select example" id="district3">
                    </select>
                  </div>
                </div>
                <div class="col-12 mt-4">
                  <div class="text-center">
                    <button type="button" class="btn-success btn px-3 pt-2" id="Search" onclick="searchdata()">Search</button>
                    <button type="button" class="btn-success btn mx-2 px-3 pt-2" id="Reset" onclick="resetform()">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Table Card -->
          <div class=" mb-5">
            <div class="table-responsive shadow bg-white">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white">Model</th>
                    <th class="d-none d-md-table-cell text-white">Name</th>
                    <th class="d-none d-md-table-cell text-white">Mobile</th>
                    <th class="d-none d-md-table-cell text-white">State</th>
                    <th class="d-none d-md-table-cell text-white">District</th>
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
      <div class="modal fade" id="view_new_harvester_enq" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content modal_box">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel"> New Harvester Enquiry Information </h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <div class="row ">
                <div class="col-12">
                  <table class="table table-striped">
                    <tbody>
                      <tr> 
                        <td>Brand Name-</td>
                        <td id="bname1"></td>
                        <td>Model Name-</td>
                        <td id="mname1"></td>
                      </tr>
                      <tr> 
                        <td>First Name-</td>
                        <td id="fname1"></td>
                        <td>Last Name-</td>
                        <td id="lname1"></td>
                      </tr>
                      <tr>
                        <td>Mobile Number-</td>
                        <td id="number1"></td>
                        <td>Date-</td>
                        <td id="date_1"></td>
                      </tr>
                      <tr>
                        <td>State-</td>
                        <td id="state1"></td>
                        <td>District-</td>
                        <td id="dist1"></td>
                      </tr>
                      <tr>
                        <td>Tehsil-</td>
                        <td id="tehsil1"></td>
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
      <div class="modal fade" id="editmodel_new_harvester" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content modal_box">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update New Harvester Enquiries</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body bg-light">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <form id="new_harvester_form"method="post"enctype="multipart/form-data" onsubmit="return false">
                    <div class="row  pt-4">
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1" hidden>
                        <div class="form-outline ">
                          <label for="name" class="form-label text-dark">Harvester</label>
                          <input type="text" class="form-control" placeholder="" id="userId" name="name">
                        </div>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                        <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-2" for="idUser"  id="product_id" value="307" name="first_name" placeholder="Enter First Name">
                        <small></small>
                      </div>
                      <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                        <label class="text-dark"> id Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-2" for="idUser"  id="enquiry_type_id" value="4" name="first_name" placeholder="Enter First Name">
                        <small></small>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                        <div class="form-outline">
                          <label for="brand_name_1" class="form-label text-dark">Brand Name</label>
                          <select class="js-select2 form-select form-control mb-0" id="brand_name_1" name="bname">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                        <div class="form-outline">
                          <label for="model_name" class="form-label text-dark">Model Name</label>
                          <select class="js-select2 form-select form-control mb-0" id="model_name" name="mname">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                        <div class="form-outline mt-4">
                          <label for="name" class="form-label text-dark">First Name</label>
                          <input type="text" class="form-control" placeholder="" id="fname_2" name="fname">
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                        <div class="form-outline mt-4">
                          <label for="name" class="form-label text-dark">Last Name</label>
                          <input type="text" class="form-control" placeholder="" id="lname_2" name="lname">
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                        <div class="form-outline mt-4">
                          <label for="name" class="form-label text-dark">Mobile Number</label>
                          <input type="text" class="form-control" placeholder="" id="number_2" name="number">
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                        <div class="form-outline mt-4">
                          <label for="name" class="form-label text-dark">Date</label>
                          <input type="text" class="form-control" placeholder="" id="date_2" name="date">
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                        <div class="form-outline mt-4">
                          <label class="form-label" for="state_">State</label>
                          <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="state_" name="state_">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                        <div class="form-outline mt-4">
                          <label class="form-label" for="dist_">District</label>
                          <select class="form-select py-2 district-dropdown" aria-label="Default select example" id="dist_" name="dist">
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                        <div class="form-outline mt-4">
                          <label class="form-label" for="tehsil_2">Tehsil</label>
                          <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example" id="tehsil_2">
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="undate_btn_harvester_enq" class="btn btn-success fw-bold px-3" >Save Change</button>
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