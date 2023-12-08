<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

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

              <!-- Add new tractor -->
              <a href="tractor_form_list.php" type="button"  class="btn add_btn btn-success float-right" >
                <i class="fa fa-plus" aria-hidden="true"></i>Add New tractor
              </a>

              
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
                    <label class="form-label">Search By Brand</label>
                            <select class="form-select py-2" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="1">name1</option>
                                <option value="2">name2</option>
                                <option value="3">name3</option>
                            </select>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by Model</label>
                            <select class="form-select py-2" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="1">name1</option>
                                <option value="2">name2</option>
                                <option value="3">name3</option>
                            </select>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                  <div class="form-outline">
                    <label class="form-label">Search by HP</label>
                            <select class="form-select py-2" aria-label="Default select example">
                                <option selected=""></option>
                                <option value="1">23 HP</option>
                                <option value="2">33 HP</option>
                                <option value="3">45 HP</option>
                            </select>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center">
                  <div class="">
                    <button type="button" class="btn-success btn px-4 py-2" id="Search">Search</button>
                    <button type="button" class="btn-success btn px-4 py-2" id="Reset">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" mb-5">
            <div class="table-responsive shadow bg-white">
              <table id="example" class="table bg-white table-striped table-hover py-1" width="100%">
                <thead>
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Brand</th>
                    <th class="d-none d-md-table-cell text-white">Model</th>
                    <th class="d-none d-md-table-cell text-white">Wheel Drive</th>
                    <th class="d-none d-md-table-cell text-white"> HP Category</th>
                    <th class="d-none d-md-table-cell text-white"> Price</th>
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


    </div>
  </div>
</body>
<script>
  var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
  var baseUrl = "<?php echo $baseUrl; ?>";
</script>

<script src="<?php $baseUrl; ?>model/newtractor_listing_get.js"></script>
