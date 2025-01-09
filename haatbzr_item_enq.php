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
                    <span>Haatbazar Item Enquiry List</span>
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
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label fw-bold">Seller Name</label>
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select Name</option>
                      <option value="1">name1</option>
                      <option value="2">name2</option>
                      <option value="3">name3</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline ">
                    <label class="form-label fw-bold">District</label>
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select District</option>
                      <option value="1">Raipur</option>
                      <option value="2">Bilaspur</option>
                      <option value="3">Surajpur</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label fw-bold">Category</label>
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select Category</option>
                      <option value="1">Vegitable</option>
                      <option value="2">Fruits</option>
                      <option value="2">Grains</option>
                      <option value="2">Pulses</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline  ">
                    <label class="form-label fw-bold">Sub-Category</label>
                    <select class="form-select py-2" aria-label="Default select example">
                      <option selected>Select Sub-Category</option>
                      <option value="1">Potato</option>
                      <option value="2">Papaya</option>
                      <option value="3">Rice</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                  <div class="text-center mt-3">
                    <button type="button" class="btn-success btn px-4 pt-2 " id="Search">Search</button>
                    <button type="button" class="btn-success btn mx-2 px-4 pt-2" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Table Card -->
        <div class="mb-5">
          <div class="table-responsive">
            <table id="example" class="table dataTable no-footer py-1" width="100%">
              <thead>
                <tr>
                  <th class="d-none d-md-table-cell text-white">S.No.</th>
                  <th class="d-none d-md-table-cell text-white">Category</th>
                  <th class="d-none d-md-table-cell text-white">Sub-Category</th>
                  <th class="d-none d-md-table-cell text-white">Name</th>
                  <th class="d-none d-md-table-cell text-white">Phone Number</th>
                  <th class="d-none d-md-table-cell text-white">State</th>
                  <th class="d-none d-md-table-cell text-white">District</th>
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