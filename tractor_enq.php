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
                <span>Tractor Enquiries</span>
              </li>
            </ol>
          </nav>
          <!-- <button id="adduser" type="button" class="add_btn btn-success float-right">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New</button> -->
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
                <label class="form-label">UserName</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">Brand</label>
                <input type="text" id="Brand" name="Brand" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">Model</label>
                <input type="text" id="Model" name="Model" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline mb-3">
                <label class="form-label">State</label>
                <input type="text" id="State" name="State" class="form-control" />
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="float-end text-center">
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
                    <th class="d-none d-md-table-cell text-dark">Date</th>
                    <th class="d-none d-md-table-cell text-dark">Brand</th>
                    <th class="d-none d-md-table-cell text-dark">Model</th>
                    <th class="d-none d-md-table-cell text-dark">Name </th>
                    <th class="d-none d-md-table-cell text-dark"> Phone no</th>
                    <th class="d-none d-md-table-cell text-dark">State</th>
                    <th class="d-none d-md-table-cell text-dark">District</th>
                    <th class="d-none d-md-table-cell text-dark">Tehsil</th>
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