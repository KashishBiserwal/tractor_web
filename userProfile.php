<!DOCTYPE html>
<html lang="en">
  <head> 
    <?php
        include 'includes/headertag.php';
        include 'includes/footertag.php';
    ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/customer_info.js"></script>
    <style>
      /* owl nav */
      .owl-prev span,
      .owl-next span {
        color: #8199A3;
      }

      .owl-prev span:hover,
      .owl-next span:hover {
        color: #8199A3;
      }

      .owl-prev,
      .owl-next {
        position: absolute;
        top: 0;
        height: 100%;
      }

      .owl-prev {
        left: 7px;
      }

      .owl-next {
        right: 7px;
      }

      /* removing blue outline from buttons */
      button:focus,
      button:active {
        outline: none;
      }

      #purchase_request table {
        display: none;
      }

      #purchase_request table:target {
        display: block;
      }
      #my_list table{
        display: none;
      }
      #my_list table:target {
        display: block;
      }
    </style>
  </head>
  <body> <?php 
     include 'includes/header.php';
    ?> <section class="mt-130 bg-white">
      <div class="container ">
        <div class="py-2">
          <div class="row"></div>
          <span class="text-white">
            <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i>
            </a>
            <span class="text-dark p">Profile</span>
          </span>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid bg-light">
        <div class="row w-100">
          <div class="col-12 my-3">
            <div class="customer_options bg-white">
              <ul class="nav nav-tabs" role="tablist">
                <li class="active nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#presonal_info">
                    <span>
                      <i class="fa-solid fa-image-portrait"></i>
                      <span>Personal Information </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#purchase_request">
                    <span>
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Purchase Request </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#my_list">
                    <span>
                      <i class="fa-solid fa-bars"></i>
                      <span>My List </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#interested_buyers">
                    <span>
                      <i class="fa-solid fa-tags"></i>
                      <span>Interested Buyers </a>
                </li>
              </ul>
            </div>
            <div class="customer_detail_section bg-white tab-content">
                <div id="presonal_info" class="tab-pane active shadow bg-white  p-3">
                    <div class=" col-9 mx-auto  my-5  p-3" style="border: 1px solid #dcdcdc;">
                    <div class="heading00 d-flex py-2">
                        <h3>Personal Information</h3>
                        <button onclick="edit_personal_detail()">
                        <i class="fa-solid fa-user-pen"></i>
                        </button>
                    </div>
                    <form>
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">First Name</label>
                            <input type="text" placeholder=" " id="firstname" name="firstname" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">Last Name</label>
                            <input type="text" placeholder=" " id="lastname" name="lastname" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">Mobile Number</label>
                            <input type="number" placeholder=" " id="phone" name="phone" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3"><div class="form-outline"><label class="form-label">Email</label><input type="email" placeholder=" " id="email"  name="email" class="form-control" disabled="disabled"></div></div> -->
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">State</label>
                            <input type="text" placeholder=" " id="state" name="state" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">District</label>
                            <input type="text" placeholder=" " id="district" name="district" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                            <label class="form-label">Tehsil</label>
                            <input type="text" placeholder=" " id="tehsil" name="tehsil" class="form-control" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 ">
                            <button type="button" class="btn btn-success edit_presonal_detail_btn float-end" onclick="edit_detail_customer()" style="display: none;">Save</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div id="purchase_request" class="tab-pane shadow bg-white">
                    <div class="w-100">
                        <div class=" my-3">
                            <div class="col-12 col-carousel py-2">
                                <div class="owl-carousel carousel-main">
                                    <a class="nav-link text-center bg-light" href="#purchase_tractor_table">
                                    <span>
                                        <i class="fa-solid fa-image-portrait"></i>
                                    </span> Tractor </a>
                                    <a class="nav-link bg-light text-center" href="#purchase_harvester_table">
                                    <span>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </span> Harvester </a>
                                    <a class="nav-link bg-light text-center" href="#purchase_haatbazar_table">
                                    <span>
                                        <i class="fa-solid fa-bars"></i>
                                        <span>HaatBazar </a>
                                    <a class="nav-link bg-light text-center" href="#purchase_implements_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Implements </a>
                                    <a class="nav-link text-center bg-light" href="#purchase_nursery_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Nursery </a>
                                    <a class="nav-link text-center bg-light" href="#purchase_tyre_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Tyre </a>
                                    <a class="nav-link text-center bg-light" href="#purchase_engineoil_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Engine Oil </a>
                                    <a class="nav-link text-center bg-light" href="#purchase_dealer_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Dealer </a>
                                    <a class="nav-link text-center bg-light" href="#purchase_hire_table">
                                    <span>
                                        <i class="fa-solid fa-tags"></i>
                                        <span>Hire </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="purchase_tractor_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                                <thead class="bg-success w-100">
                                    <tr class="col-12 w-100">
                                    <th class="d-none d-md-table-cell text-white">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand list</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Seller Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table1" class="data-table">
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_harvester_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand er</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    </tr>
                                </thead> 
                                <tbody id="data-table2" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_haatbazar_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand erffg</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table3" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_implements_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand sdfcgh</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table4" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                            <table id="purchase_nursery_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand gg</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table5" class="data-table"></tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_tyre_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand tyre</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table6" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_engineoil_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand oil</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table7"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                                <table id="purchase_dealer_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                    <th class="d-none d-md-table-cell text-white">Brand dealer</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">Name</th>
                                    <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table8" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive">
                            <table id="purchase_hire_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                <thead class="bg-success w-100">
                                <tr>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    <th class="d-none d-md-table-cell text-white ">Request Type.</th>
                                </tr>
                                </thead>
                                <tbody id="data-table9" class="data-table"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
                <div id="my_list" class="tab-pane">
                    <!-- all used list -->
                    <div class="col-12 col-carousel py-2">
                        <div class="owl-carousel carousel-main">
                            <a class="nav-link text-center bg-light" href="#list_purchase_tractor_table">
                                <span>
                                    <i class="fa-solid fa-image-portrait"></i>
                                </span> Tractor
                            </a>
                            <a class="nav-link bg-light text-center" href="#list_purchase_harvest_table">
                                <span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </span> Harvester 
                            </a>
                            <a class="nav-link bg-light text-center" href="#list_purchase_imple_table">
                                <span>
                                    <i class="fa-solid fa-tags"></i>
                                    <span> Implements
                            </a>
                            <a class="nav-link bg-light text-center" href="#list_purchase_haatbazar_table">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                    <span>HaatBazar
                            </a>  
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="list_purchase_tractor_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                            <thead class="bg-success w-100">
                                <tr>
                                <th class="d-none d-md-table-cell text-white">Request No.</th>
                                <th class="d-none d-md-table-cell text-white">Brand list</th>
                                <th class="d-none d-md-table-cell text-white">Model</th>
                                <th class="d-none d-md-table-cell text-white">Name</th>
                                <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                </tr>
                            </thead>
                            <tbody id="data-table10">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="list_purchase_harvest_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                            <thead class="bg-success w-100">
                                <tr>
                                <th class="d-none d-md-table-cell text-white">Request No.</th>
                                <th class="d-none d-md-table-cell text-white">Brand list</th>
                                <th class="d-none d-md-table-cell text-white">Model</th>
                                <th class="d-none d-md-table-cell text-white">Name</th>
                                <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                <th class="d-none d-md-table-cell text-white">Date</th>
                                </tr>
                            </thead>
                            <tbody id="data-table12">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="list_purchase_imple_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                            <thead class="bg-success w-100">
                                <tr>
                                <th class="d-none d-md-table-cell text-white">Request No.</th>
                                <th class="d-none d-md-table-cell text-white">Brand list</th>
                                <th class="d-none d-md-table-cell text-white">Model</th>
                                <th class="d-none d-md-table-cell text-white">Name</th>
                                <th class="d-none d-md-table-cell text-white">Mobile Number</th>
                                <th class="d-none d-md-table-cell text-white">Date</th>
                                </tr>
                            </thead>
                            <tbody id="data-table">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="list_purchase_haatbazar_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                            <thead class="bg-success w-100">
                                <tr>
                                <th class="d-none d-md-table-cell text-white">Request No.</th>
                                <th class="d-none d-md-table-cell text-white">Date</th>
                                <th class="d-none d-md-table-cell text-white">Category</th>
                                <th class="d-none d-md-table-cell text-white">Subcategory</th>
                                <th class="d-none d-md-table-cell text-white">Price</th>
                                <th class="d-none d-md-table-cell text-white">Quantity</th>
                                </tr>
                            </thead>
                            <tbody id="data-table11">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="interested_buyers" class="tab-pane">
                    <div class=" mb-5 shadow bg-white p-3">
                        <div class="table-responsive">
                        <table id="interested" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                            <thead class="bg-success">
                            <tr>
                                <th class="d-none d-md-table-cell text-white ">Type</th>
                                <th class="d-none d-md-table-cell text-white ">Name</th>
                                <th class="d-none d-md-table-cell text-white ">Mobile Number</th>
                                <th class="d-none d-md-table-cell text-white">Brand</th>
                                <th class="d-none d-md-table-cell text-white">Model</th>
                                <th class="d-none d-md-table-cell text-white">State</th>
                            </tr>
                            </thead>
                            <tbody id="data-table12"></tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- </div> -->
    </section> 
        <?php   
        include 'includes/footer.php';
        ?>
  </body>
  <script>
    $('.carousel-main').owlCarousel({
          items: 4,
          loop: false,
          autoplay: false,
          autoplayTimeout: 3000,
          margin: 10,
          nav: true,
          dots: false,
          navText: [' <span class = "fas fa-chevron-left fa-2x"> </span>',' <span class = "fas fa-chevron-right fa-2x" > </span>'],
          });
  </script>