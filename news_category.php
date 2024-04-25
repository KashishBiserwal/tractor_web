<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/news_category.js"></script>
<body class="loaded">
  <div class="main-wrapper">
    <div class="app" id="app">
      <?php
      include 'includes/left_nav.php';
      include 'includes/header_admin.php';
      ?>


<div id="confirmationModal" style="display: none;">
  <p>Are you sure you want to delete this data?</p>
  <button onclick="confirmDelete()">Yes</button>
  <button onclick="cancelDelete()">No</button>
</div>

<section style="padding: 0 15px 0 60px;">
    <div class="">
      <div class="">
        <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <span>Blog Category Listing</span>
                  </li>
                </ol>
              </nav>

              <!-- add Accesories -->
              <div class="float-end">
              <button type="button" id="add_trac" class="btn add_btn bg-success btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop1">
                  <i class="fa fa-plus" aria-hidden="true"></i>Add Category
              </button>
                <!-- modal -->
              <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content modal_box">
                      <div class="modal-header modal_head">
                        <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add Blog Category</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                      <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                          <div class="col-12">
                            <h5 class="text-center">Fill Details</h5>
                            <form id="acc_form" name="acc_form">
                              <div class="row justify-content-center">
                                <div class="col-12 mt-3">
                                    <div class="form-outline">
                                        <label class="form-label"> Category Name </label>
                                        <input type="text" id="accessories" name="accessories" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 mt-3"hidden>
                                    <div class="form-outline">
                                        <label class="form-label"> Accessories Name </label>
                                        <input type="text" id="idUse_1" name="" class="form-control" />
                                    </div>
                                </div>
                              </div>
                              <button type="button" id="add_ass" class="btn btn-success  fw-bold px-3 mt-4" >Submit</button>
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
        </div>
        <div class="">
          <div class="filter-card">
            <div class="card-body">
              <form action="" id="myform">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-outline">
                    <label class="form-label"> Search by Field Name </label>
                    <input type="text" id="name" name="search_email" onkeyup="myFunction()" class=" data_search form-control" />
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <button type="button"onclick="resetForm()" class="btn-success  btn btn_all" value="reset" id="Reset">Reset</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          <div class=" mb-5 shadow bg-white mt-3 p-3">
            <div class="table-responsive">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">News Category Name</th>
                    <th class="d-none d-md-table-cell text-white">Action</th>
                  </tr>
                </thead>
                <tbody id="data-table" class="">
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!-- model edit -->
      <div class="modal fade" id="staticBackdrop_1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modal_head">
              <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Update Category</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
            </div>
            <div class="modal-body">
            <form id="acc_form" name="acc_form">
              <div class="row justify-content-center">
                <div class="col-12 mt-3">
                  <div class="form-outline">
                    <label class="form-label"> Category Name </label>
                    <input type="text" id="accessories_1" name="accessories" class="form-control" />
                  </div>
                </div>
                <div class="col-12 mt-3"hidden>
                  <div class="form-outline">
                    <label class="form-label"> Category Name </label>
                    <input type="text" id="idUser" name="" class="form-control"/>
                  </div>
                </div>
              </div>           
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="update_ass" class="btn btn-success fw-bold px-3">Update</button>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</body>
<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>
<!-- 
<script src="<?php $baseUrl; ?>model/tractor_listing.js"></script> -->



<script>
  // $(document).ready(function() {
  //   $('#type_name').select2();
  // });
</script>