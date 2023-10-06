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
                <span> Farm Equipment Enquiries</span>
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
      <div class="filter-card mb-2">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Model Name </label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Model</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Implement Type</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Implement Type</option>
                    <option value="1">Implement1</option>
                    <option value="2">Implement2</option>
                    <option value="3">Implement3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Category</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Category</option>
                    <option value="1">Category-1</option>
                    <option value="2">Category-2</option>
                    <option value="3">Category-3</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Implement Power</label>
                <select class="form-select py-2" aria-label="Default select example">
                    <option selected> Select Implement Category</option>
                    <option value="1">Implement-1</option>
                    <option value="2">Implement-2</option>
                    <option value="3">Implement-3</option>
                </select>
              </div>
            </div>
           
            
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
              <div class="float-end text-center">
                <button type="button" class="btn-success btn btn_search" id="Search">Search</button>
                <button type="button" class="btn-success btn mx-2 btn_search" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive">
              <table id="example" class="table dataTable no-footer py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Model Name </th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Implement Type</th>
                    <th class="d-none d-md-table-cell text-white">Category</th>
                    <th class="d-none d-md-table-cell text-white">Implement power</th>
                    <th class="d-none d-md-table-cell text-white">Price</th>
                    <th class="d-none d-md-table-cell text-white">Action</th>
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