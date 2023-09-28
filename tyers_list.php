<?php
   include 'includes/headertagadmin.php';
  
   
   ?> 
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
          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
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
                            <form>
                                <div class="row justify-content-center pt-4">
                                   
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="brand">
                                        <label for="name" class="text-dark fw-bold"> Brand</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model">
                                        <label for="name" class="text-dark fw-bold">Tyre Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Tyre Position</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Size of the tyre</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  my-1">
                                      <div class="form-group">
                                        <input type="file" class="py-3" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold"></label>
                                      </div>
                                    </div>
                                    
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success fw-bold px-3">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <!-- Filter Card -->
      <div class="filter-card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="form-outline mb-3">
                <label class="form-label">Brand</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="form-outline mb-3">
                <label class="form-label">Tyre Position</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12">
              <div class="float-end">
                <button type="button" class="btn-success btn_search" id="Search">Search</button>
                <button type="button" class="btn-success  mx-2 btn_search" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
                            <div class="table-responsive">
                                <table id="example" class="table  table_useroverview dataTable no-footer py-1" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="d-none d-md-table-cell text-dark">S.No.</th>
                                            <!-- <th class="d-none d-md-table-cell text-dark">Category</th> -->
                                            <th class="d-none d-md-table-cell text-dark">Brand</th>
                                            <th class="d-none d-md-table-cell text-dark">Tyre Position  </th>
                                            <th class="d-none d-md-table-cell text-dark">Size </th>
                                            <th class="d-none d-md-table-cell text-dark">Photo</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
      </div>
    </div>
   </section>
      
    
</div>
</div>
</body>

<?php
   include 'includes/footertag.php';
   ?> 