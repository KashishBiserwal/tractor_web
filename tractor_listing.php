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
                <span>Tractor Listing</span>
              </li>
            </ol>
          </nav>
          

          <button type="button" id="add_trac" class="btn add_btn btn-success float-right" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New tractor</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-light">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center">Fill your Tractor Details</h4>
                            <form>
                                <div class="row justify-content-center py-4">
                                    <!-- <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                      <div class="form-group">
                                        <label for="name" class="text-dark fw-bold">Tractor Category</label>
                                        <div class="boxes">
                                            <input type="checkbox" id="box-1">
                                            <label for="box-1"class="text-dark">New tractor</label>

                                            <input type="checkbox" id="box-2" checked>
                                            <label for="box-2" class="text-dark">Mini Tractor </label>

                                            <input type="checkbox" id="box-3">
                                            <label for="box-3" class="text-dark">4WD</label>
                                        </div>
                                      </div>
                                    </div> -->
                                   
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="brand">
                                        <label for="name" class="text-dark fw-bold"> Brand</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="model">
                                        <label for="name" class="text-dark fw-bold">Model</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="model_name">
                                        <label for="name" class="text-dark fw-bold">Model Name</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-6 col-lg-6 my-2 ps-4">
                                        <p class="text-dark fw-bold ">Select type of Tractor</p>
                                        <div class="form-check my-3 ps-5">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label text-dark ps-2" for="exampleRadios1">
                                            Mini Tractor
                                            </label>
                                        </div>
                                        <div class="form-check  ps-5">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label  text-dark ps-2" for="exampleRadios2">
                                                4WD
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">No. of Cylinder</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">HP Category</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold"> PTO HP</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text"class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold"> Gear Box</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-5 col-md-4 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Brakes</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-5 col-md-4 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Tyres</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-sm-5 col-md-4 my-1">
                                      <div class="form-group">
                                        <input type="text"class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Steering</label>
                                      </div>
                                    </div>
                                    <div class="col-12  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Engine Description</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text"class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Quality Features</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="file" class="py-3" placeholder=" " id="name">
                                        <label for="file" class="text-dark fw-bold"></label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text"class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Price</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-3" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">Warranty</label>
                                      </div>
                                    </div>
                                    <div class="col-12  my-1">
                                      <div class="form-group">
                                        <input type="text" class="py-5" placeholder=" " id="name">
                                        <label for="name" class="text-dark fw-bold">About</label>
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
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">Brand</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">Model</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">Name</label>
                <input type="text" id="designation" name="designation" class="form-control" />
              </div>
            </div> -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">HP Category</label>
                <input type="text" id="phone" name="phone" class="form-control" />
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <div class="">
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
                                            <th class="d-none d-md-table-cell text-dark">Model</th>
                                            <th class="d-none d-md-table-cell text-dark"> No. of Cylinder</th>
                                            <th class="d-none d-md-table-cell text-dark">  PTO HP</th>
                                            <th class="d-none d-md-table-cell text-dark"> HP Category</th>
                                            <th class="d-none d-md-table-cell text-dark"> Gear Box</th>
                                            <th class="d-none d-md-table-cell text-dark"> Brakes</th>
                                            <th class="d-none d-md-table-cell text-dark">Steering</th>
                                            <th class="d-none d-md-table-cell text-dark">Tyres</th>
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