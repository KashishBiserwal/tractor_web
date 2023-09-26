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
                <span> Engine Oil Listings</span>
              </li>
            </ol>
          </nav>
          <button type="button" id="adduser" class=" add_btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i>Add New</button>

          <!-- Modal --> 
          <div class="modal fade bg-light" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content modal_box">
                    <div class="modal-header">
                        <h1 class="modal-title text-dark fs-5 fw-bold" id="exampleModalLabel">Add Engine Oil Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                            <!-- <h3 class="mb-3">Fill The Form</h3> -->
                            <form>
                                <div class="row justify-content-center ">
                                  <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <label for="brand" class=" text-dark float-start fw-bold">Upload Image </label>
                                        <input type="file" id="myFile" class="form-control" name="filename" id="img" name="img" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <label for="name" class=" text-dark float-start fw-bold">Name</label>
                                        <input type="text" class="form-control text-dark" placeholder="" id="name" name="name" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <label for="address" class=" text-dark float-start fw-bold">Brand</label>
                                        <input type="text" class="form-control text-dark" placeholder="" id="address" name="address" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <label for="email" class=" text-dark float-start fw-bold">Grade</label>
                                        <input type="email" class="form-control text-dark" placeholder="" id="email" name="email" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-1">
                                        <label for="email" class=" text-dark float-start fw-bold">Specification</label>
                                        <input type="email" class="form-control text-dark" placeholder="" id="email" name="email" required>
                                    </div>
                                    <div class="col-12 col-lg-6 col-sm-5 col-md-6  mt-4 pt-1">
                                        <button data-res="<?php echo $sum; ?>" type="submit" class="btn-success w-100 fw-bold" > Sumbit</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class=" btn-success">Save changes</button>
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
                <label class="form-label">Model Name</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
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
                                            <th class="d-none d-md-table-cell text-dark">Model </th>
                                            <th class="d-none d-md-table-cell text-dark">Action</th>
                                           
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