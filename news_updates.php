<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script src="<?php $baseUrl; ?>model/new_updates.js"></script>
<body class="loaded"> 
<div class="main-wrapper">
    <div class="app" id="app">
    <?php
    include 'includes/left_nav.php';
    include 'includes/header_admin.php';
    ?>
  <section style="padding: 0 15px 0 60px;">
   <div class="">
      <div class="">
      <div class="card-body d-flex align-items-center justify-content-between page_title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <span>News & Updates</span>
              </li>
            </ol>
          </nav>
           <button type="button" id="add_trac" class="btn add_btn btn-success float-right btn_all" data-bs-toggle="modal"  data-bs-target="#staticBackdrop">
              <i class="fa fa-plus" aria-hidden="true"></i>News & Update
            </button>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content modal_box">
                <div class="modal-header modal_head">
                  <h5 class="modal-title text-white fw-bold" id="staticBackdropLabel">Add New & Updates</h5>
                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                              <h4 class="text-center" style="font-weight: 600;">Fill your Details</h4>
                            <form id="form_news_updates">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6  mt-3">
                                      <div class="form-outline">
                                        <label for="name" class="form-label text-dark">News Category</label>
                                        <input type="text" class="form-control" placeholder="" id="brand" name="brand">
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-3">
                                      <div class="form-outline ">
                                        <label for="name" class="form-label text-dark">News Headline</label>
                                        <input type="text" class="form-control" placeholder="" id="headline" name="headline">
                                      </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                  <div class="form-outline">
                                  <label class="form-label text-dark">Body/ News Content</label>
                                  <textarea class="w-100" name="contant" id="contant" rows="4" cols="70" minlength="1" maxlength="255"></textarea>
                                  </div>
                               </div>
                                    <div class="col-12">
                                        <div class="upload__box">
                                          <div class="upload__btn-box">
                                            <label >
                                              <p class="upload__btn ">Upload images</p>
                                              <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="image_" name="image_">
                                            </label>
                                            <p></p>
                                          </div>
                                          <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn_all" data-bs-dismiss="modal">Close</button>
                      <button type="submit" id="submitBtn" class="btn btn-success btn_all">Submit</button>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="">
      <!-- Filter Card -->
      <div class="filter-card mb-2">
        <div class="card-body">
        <form action="" id="myform" class="mb-0">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
              <div class="form-outline">
                <label class="form-label">Category</label>
                <input type="email" id="search_name" name="search_name" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="form-outline">
                <label class="form-label">Headline</label>
                <input type="text" id="search_email" name="search_email" class="form-control" />
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
              <div class="text-center float-end">
              <button type="button" class="btn-success btn btn_all" id="Search">Search</button>
                <button type="button" class="btn-success btn btn_all" id="Reset">Reset</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      <!-- Table Card -->
      <div class=" mb-5">
            <div class="table-responsive shadow bg-white mt-3">
              <table id="example" class="table table-striped  table-hover table-bordered dataTable no-footer" width="100%; margin-bottom: 15px;">
                <thead class="">
                  <tr>
                    <th class="d-none d-md-table-cell text-white">S.No.</th>
                    <th class="d-none d-md-table-cell text-white">Date</th>
                    <th class="d-none d-md-table-cell text-white">Category</th>
                    <th class="d-none d-md-table-cell text-white">Headline </th>
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

