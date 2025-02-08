<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/footertag.php';
?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/rent_trsc_enq.js" defer></script>

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
                  <span>Rent tractor Enquiry List</span>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Filter Card -->
        <div class="filter-card mb-2">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-outline">
                  <label class="form-label"> Brand Name</label>
                  <input type="text" id="search_email" name="search_email" class="form-control" />
                  <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Brand</option>
                    <option value="1">Mahindra</option>
                    <option value="2">Swaraj</option>
                    <option value="3">John Deere</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-outline ">
                  <label class="form-label">Model</label>
                  <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Model</option>
                    <option value="1">3032 NX</option>
                    <option value="2">3030 NX</option>
                    <option value="3">3230 NX</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-outline">
                  <label class="form-label">Implement Type</label>
                  <select class="form-select py-2" aria-label="Default select example">
                    <option selected>Select Implement Type</option>
                    <option value="1">Hydraulic Reversible Plough</option>
                    <option value="2">Baler</option>
                    <option value="3">Seed Drill</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <div class="">
                  <button type="button" class="btn-success btn px-3 py-2" id="Search">Search</button>
                  <button type="button" class="btn-success btn  mx-2 px-3 py-2" id="Reset">Reset</button>
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
                  <th class="d-none d-md-table-cell text-white">Brand name</th>
                  <th class="d-none d-md-table-cell text-white">Model</th>
                  <th class="d-none d-md-table-cell text-white">Rate </th>
                  <th class="d-none d-md-table-cell text-white">Rate Per</th>
                  <th class="d-none d-md-table-cell text-white">Implement Type</th>
                  <th class="d-none d-md-table-cell text-white">Action</th>
                </tr>
              </thead>
              <tbody></tbody>
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