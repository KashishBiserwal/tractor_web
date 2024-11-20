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
     <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      /* owl nav */
      .owl-prev span,
      .owl-next span {
        color: #2E8B57;
      }

      .owl-prev span:hover,
      .owl-next span:hover {
        color: #2E8B57;
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

      /* #purchase_request table {
        display: none;
      } */

      /* #purchase_request table:target {
        display: block;
      } */
      /* #my_list table{
        display: none;
      } */
      /* #my_list table:target {
        display: block;
      } */
      .dataTables_wrapper .dataTables_scrollBody tbody {
    height: auto !important;

    }
    /* #purchase_engineoil_table_info {
        display: none;
    } */
    /* .mylist-nav-link.active {
    background-color: #2E8B57 !important;
    color: white !important;
} */
.hover-bg-success:hover {
    background-color: #D3D3D3 !important; 
    color:	#000000;
}
.list-item:hover{
    /* background-color: #D3D3D3 !important;  */
    color:	#000000;
}
.hover-bg-success{
    background-color: #E6E6FA !important; 
    
}
.nav-link.hover-bg-success.active {
    background-color: #2f8f59 !important; 
    color:	#FFFFFF;
}
.table-responsive {
        width: 100%;
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
                  <a class="nav-link list-item" data-bs-toggle="tab" href="#presonal_info">
                    <span>
                      <i class="fa-solid fa-image-portrait"></i>
                      <span>Personal Information </a>
                </li>
                <li class="active nav-item">
                  <a class="nav-link list-item" data-bs-toggle="tab" href="#purchase_request">
                    <span>
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Purchase Request </a>
                </li>
                <li class="active nav-item">
                  <a class="nav-link list-item" data-bs-toggle="tab" href="#my_list">
                    <span>
                      <i class="fa-solid fa-bars"></i>
                      <span>My List </a>
                </li>
                <li class="active nav-item">
                  <a class="nav-link list-item" data-bs-toggle="tab" href="#interested_buyers">
                    <span>
                      <i class="fa-solid fa-tags"></i>
                      <span>Interested Buyers </a>
                </li>
              </ul>
            </div>
            <div class="customer_detail_section bg-white tab-content">
                <div id="presonal_info" class="tab-pane active shadow bg-white  p-3">
               
                    <div class=" col-9 mx-auto  my-5  p-3" style="border: 1px solid #dcdcdc;">
                    <div class="">
                    <button onclick="edit_personal_detail()" class="float-end">
                        <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <div class="heading00 py-2">
                        <h3>Personal Information</h3>
                    </div>
                    
                    <form>
                        <div class="row">
                        <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                                  <label class="text-dark">User<span class="text-danger">*</span></label>
                                          <input type="text" class="form-control py-2" for="idUser"  id="idUser" name="first_name" placeholder="Enter First Name">
                                  <small></small>
                                </div>  
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
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                            <div class="form-outline">
                                <label for="eo_state" class="form-label"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state" disabled="disabled">
                                </select>
                            </div>
                        </div> 
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                            <div class="form-outline">
                                <label for="eo_dist" class="form-label"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="dist" name="district" disabled="disabled">
                                </select>
                            </div>                    
                        </div>       
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                            <div class="form-outline">
                                <label for="eo_tehsil" class="form-label"> Tehsil</label>
                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil" disabled="disabled">
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 ">
                            <button type="button" class="btn btn-success edit_presonal_detail_btn float-end" id="btn_edit" style="display: none;">Save</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                <div id="purchase_request" class="tab-pane w-100">
                    <div class="w-100">
                        <div class="my-3">
                            <div class="col-12 col-carousel py-2">
                                <div class="owl-carousel carousel-main">
                                    <a class="nav-link text-center bg-light hover-bg-success tab-pane active" href="#purchase_tractor_table" id="tractor_active">
                                        <span><i class="fa-solid fa-image-portrait"></i></span> Tractor
                                    </a>
                                    <a class="nav-link bg-light text-center hover-bg-success" href="#purchase_harvester_table"id="harvester">
                                        <span><i class="fa-solid fa-cart-shopping"></i></span> Harvester
                                    </a>
                                    <a class="nav-link bg-light text-center hover-bg-success" href="#purchase_haatbazar_table" id="hatbazar">
                                        <span><i class="fa-solid fa-bars"></i></span> HaatBazar
                                    </a>
                                    <a class="nav-link bg-light text-center hover-bg-success" href="#purchase_implements_table" id="implement">
                                        <span><i class="fa-solid fa-tags"></i></span> Implements
                                    </a>
                                    <a class="nav-link text-center bg-light hover-bg-success" href="#purchase_nursery_table" id="nursery">
                                        <span><i class="fa-solid fa-tags"></i></span> Nursery
                                    </a>
                                    <a class="nav-link text-center bg-light hover-bg-success" href="#purchase_tyre_table" id="tyre">
                                        <span><i class="fa-solid fa-tags"></i></span> Tyre
                                    </a>
                                    <a class="nav-link text-center bg-light hover-bg-success" href="#purchase_engineoil_table" id="engine">
                                        <span><i class="fa-solid fa-tags"></i></span> Engine Oil
                                    </a>
                                    <a class="nav-link text-center bg-light hover-bg-success" href="#purchase_dealer_table"id="dealer">
                                        <span><i class="fa-solid fa-tags"></i></span> Dealer
                                    </a>
                                    <a class="nav-link text-center bg-light hover-bg-success" href="#purchase_hire_table" id="hire">
                                        <span><i class="fa-solid fa-tags"></i></span> Hire
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-active" active>
                            <table id="purchase_tractor_table" class="table table-striped table-hover table-bordered no-footer ">
                                <thead class="bg-success w-100">
                                    <tr>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Seller Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table1" class="data-table">
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive table-hide">
                                <table id="purchase_harvester_table" class="table table-striped table-hover table-bordered no-footer">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <!-- <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th> -->
                                    </tr>
                                </thead> 
                                <tbody id="data-table2" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive table-hide">
                            <table id="purchase_haatbazar_table" class="table table-striped  table-hover table-bordered  no-footer">
                                <thead class="bg-success">
                                    <tr>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Category Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Sub Sategory Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table3" class="data-table"></tbody>
                            </table>
                        </div>
                        <div class="table-responsive table-hide">
                                <table id="purchase_implements_table" class="table table-striped table-hover table-bordered  no-footer">
                                <thead class="bg-success">
                                    <tr>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                    </tr>
                                </thead>
                                <tbody id="data-table4" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive table-hide">
                            <table id="purchase_nursery_table" class="table table-striped table-hover table-bordered no-footer">
                                <thead class="bg-success">
                                    <tr>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Nursery Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                        <!-- <th class="d-md-table-cell text-white" style="width: 275px;">State</th>
                                        <th class="d-md-table-cell text-white" style="width: 275px;">District</th> -->
                                    </tr>
                                </thead>
                                <tbody id="data-table5" class="data-table"></tbody>
                            </table>
                        </div>
                        <div class="table-responsive table-hide">
                                <table id="purchase_tyre_table" class="table table-striped  table-hover table-bordered  no-footer">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <!-- <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th> -->
                                    
                                    </tr>
                                </thead>
                                <tbody id="data-table6" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive table-hide">
                                <table id="purchase_engineoil_table" class="table table-striped  table-hover table-bordered  no-footer">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <!-- <th class="d-md-table-cell text-white" style="width: 275px;">Seller Name</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th> -->
                                    </tr>
                                </thead>
                                <tbody id="data-table7"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive table-hide">
                                <table id="purchase_dealer_table" class="table table-striped  table-hover table-bordered  no-footer">
                                <thead class="bg-success">
                                    <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand dealer</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                    <!-- <th class="d-md-table-cell text-white" style="width: 275px;">State</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">District</th> -->
                                    </tr>
                                </thead>
                                <tbody id="data-table8" class="data-table"></tbody>
                                </table>
                        </div>
                        <div class="table-responsive table-hide">
                            <table id="purchase_hire_table" class="table table-striped  table-hover table-bordered  no-footer">
                                <thead class="bg-success w-100">
                                <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Name</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Mobile Number</th>
                                </tr>
                                </thead>
                                <tbody id="data-table9" class="data-table"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
             
                 <div id="my_list" class="tab-pane w-100">
                    <div class="col-12 col-carousel py-2">
                        <div class="owl-carousel carousel-main">
                        <a class="nav-link bg-light text-center hover-bg-success tab-pane active" href="#list_purchase_tractor_table" id="tractor_table_active">
                                <span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </span> Tractor 
                            </a>
                            <a class="nav-link bg-light text-center hover-bg-success" href="#list_purchase_harvest_table">
                                <span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </span> Harvester 
                            </a>
                            <a class="nav-link bg-light text-center hover-bg-success" href="#list_purchase_imple_table">
                                <span>
                                    <i class="fa-solid fa-tags"></i>
                                    <span> Implements
                            </a>
                            <a class="nav-link bg-light text-center hover-bg-success" href="#list_purchase_haatbazar_table">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                    <span>HaatBazar
                            </a>  
                        </div>
                    </div>
                    <div class="table-responsive w-100 table-active" active>
                        <table id="list_purchase_tractor_table" class="table table-striped table-hover table-bordered no-footer" style="width: 100%;">
                            <thead class="bg-success">
                            <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand list</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">purchase year</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">price</th>
                                </tr>
                            </thead>
                            <tbody id="data-table10">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive table-hide w-100">
                        <table id="list_purchase_harvest_table" class="table table-striped table-hover table-bordered no-footer" style="width: 100%;">
                            <thead class="bg-success w-100">
                                <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand list</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Model</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">purchase year</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">price</th>
                                </tr>
                            </thead>
                            <tbody id="data-table12">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive table-hide w-100">
                        <table id="list_purchase_imple_table" class="table table-striped table-hover table-bordered no-footer" style="width: 100%;">
                            <thead class="bg-success w-100">
                                <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Brand list</th>
                                    <th class="d-md-table-cell text-white"style="width: 275px;">Model</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">purchase year</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">price</th>
                                </tr>
                            </thead>
                            <tbody id="data-table22">
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive table-hide  w-100">
                        <table id="list_purchase_haatbazar_table" class="table table-striped table-hover table-bordered no-footer"style="width: 100%;">
                            <thead class="bg-success">
                                <tr>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Request Type</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Date</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Category</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Sub Category</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Price</th>
                                    <th class="d-md-table-cell text-white" style="width: 275px;">Quantity</th>
                                </tr>
                            </thead>
                            <tbody id="data-table11">
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="interested_buyers" class=" tab-pane  w-100">
                    <div class="col-12 col-carousel py-2">
                        <div class="owl-carousel carousel-main">
                            <a class="nav-link text-center bg-light hover-bg-success tab-pane active" id="listInterested" href="#list_interested_buyers_table">
                                <span>
                                    <i class="fa-solid fa-tags"></i>
                                </span> Tractor/Harverset/Implement
                            </a> 
                        </div>
                    </div>
                    <div class="table-responsive table-active" active>
                        <table id="list_interested_buyers_table" class="table table-striped table-hover table-bordered no-footer w-100">
                            <thead class="bg-success">
                                <tr>
                                    <th class="d-md-table-cell text-white">Enquiry Type </th>
                                    <th class="d-md-table-cell text-white">Date</th>
                                    <th class="d-md-table-cell text-white">Brand</th>
                                    <th class="d-md-table-cell text-white">Model</th>
                                    <th class="d-md-table-cell text-white">Name</th>
                                    <th class="d-md-table-cell text-white">Mobile</th>
                                    <th class="d-md-table-cell text-white">Price</th>
                                </tr>
                            </thead>
                            <tbody id="data-table-tractor">
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="table-responsive">
                        <table id="list_interested_buyers_haatbazar_table" class="table table-striped table-hover table-bordered no-footer w-100">
                            <thead class="bg-success">
                            <tr>
                                    <th class="d-none d-md-table-cell text-white">Request Type</th>
                                    <th class="d-none d-md-table-cell text-white">Date</th>
                                    <th class="d-none d-md-table-cell text-white">Brand list</th>
                                    <th class="d-none d-md-table-cell text-white">Model</th>
                                    <th class="d-none d-md-table-cell text-white">purchase year</th>
                                    <th class="d-none d-md-table-cell text-white">price</th>
                                </tr>
                            </thead>
                            <tbody id="data-table_haatbazar">
                            </tbody>
                        </table>
                    </div> -->
                </div>
            </div>
        </div>
      </div>
      <!-- </div> -->
    </section> 
     
  </body>
  <script>
    $(document).ready(function() {
        $('.carousel-main').owlCarousel({
            items: 4,
            loop: false,
            autoplay: false, // Set autoplay to true
            autoplayTimeout: 5000,
            margin: 10,
            nav: true,
            dots: false,
            navText: ['<span class="fas fa-chevron-left fa-2x"></span>', '<span class="fas fa-chevron-right fa-2x"></span>']
        });
    });
</script>
<script>
    $(document).ready(function() {
    // Function to handle tab clicks
    $('.nav-link').on('click', function() {
        
        // Remove active class from all tabs
        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        var targetTable = $(this).attr('href');
        $('.table-responsive').hide();
        $(targetTable).closest('.table-responsive').show();
    });
});
</script>

<script>
$(document).ready(function() {
    // Function to show tractor table when "Purchase Request" tab is clicked
    $('.nav-link[href="#purchase_request"]').on('click', function() {
       
        $('#purchase_tractor_table').closest('.table-responsive').show();
        $('#tractor_active').addClass('active');
        // $(this).addClass('active');
        // Hide other tables for Purchase Request
        $('.table-hide').not('#purchase_tractor_table').hide();
    });

    // Function to show respective table when other tabs are clicked
    $('.nav-link').not('[href="#purchase_request"]').on('click', function() {
        // Hide all tables
        $('.table-responsive').hide();
        
        // Show the table corresponding to the clicked link
        var tableIdToShow = $(this).attr('href').replace('#', ''); // Remove '#' from href
        $('#' + tableIdToShow).closest('.table-responsive').show();
    });
});

$(document).ready(function() {
    // Function to show tractor table when "My List" tab is clicked
    $('.nav-link[href="#my_list"]').on('click', function() {
        // Show the tractor table for My List
        $('#list_purchase_tractor_table').closest('.table-responsive').show();
        $('#tractor_table_active').addClass('active');
        // Hide other tables for My List
        $('.table-hide').not('#list_purchase_tractor_table').hide();
    });
});
$(document).ready(function() {
    // Function to show tractor table when "My List" tab is clicked
    $('.nav-link[href="#interested_buyers"]').on('click', function() {
        $('#list_interested_buyers_table').closest('.table-responsive').show();
        $('#listInterested').addClass('active');
        $('.table-hide').not('#list_interested_buyers_table').hide();
    });
});
</script>

