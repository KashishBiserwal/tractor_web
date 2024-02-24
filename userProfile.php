<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // include 'includes/header.php';
        include 'includes/headertag.php';
        include 'includes/footertag.php';
    ?>
      <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/customer_info.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <style>
        body {
	background: #2E86DE;
}

/* .col-carousel {
	margin: 70px 0;
} */

/* owl nav */
.owl-prev span, .owl-next span {
	color: #8199A3;
}

.owl-prev span:hover, 
.owl-next span:hover {
	color: #8199A3;
}

.owl-prev, .owl-next {
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
button:focus, button:active {
   outline: none;
}
    </style>
</head>
<body>
    <?php 
     include 'includes/header.php';
    ?>
<section class="mt-130 bg-white">
            <div class="container ">
                <div class="py-2">
                    <div class="row">
                
                    </div>
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

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
                            <ul class="nav nav-tabs"  role="tablist">
                                <li class="active nav-item"><a class="nav-link" data-bs-toggle="tab" href="#presonal_info"><span><i class="fa-solid fa-image-portrait"></i><span>Personal Information</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_request"><span><i class="fa-solid fa-cart-shopping"></i><span>Purchase Request</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#my_list"><span><i class="fa-solid fa-bars"></i><span>My List</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#interested_buyers"><span><i class="fa-solid fa-tags"></i><span>Interested Buyers</a></li>
                            </ul>
                        </div> 
                        <div class="customer_detail_section bg-white tab-content">
                            <div id="presonal_info" class="tab-pane active shadow bg-white  p-3">
                                <div class=" col-9 mx-auto  my-5  p-3" style="border: 1px solid #dcdcdc;">
                                    <div class="heading00 d-flex py-2">
                                        <h3>Personal Information</h3>
                                       
                                        <button onclick="edit_personal_detail()"><i class="fa-solid fa-user-pen"></i></button>
                                    </div>
                                   <form>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">First Name</label>
                                                <input type="text" placeholder=" " id="firstname"  name="firstname" class="form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" placeholder=" " id="lastname"  name="lastname" class="form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="number" placeholder=" " id="phone"  name="phone" class="form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Email</label>
                                                <input type="email" placeholder=" " id="email"  name="email" class="form-control" disabled="disabled">
                                            </div>
                                        </div> -->
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">State</label>
                                                <input type="text" placeholder=" " id="state"  name="state" class="form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">District</label>
                                                <input type="text" placeholder=" " id="district"  name="district" class="form-control" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Tehsil</label>
                                                <input type="text" placeholder=" " id="tehsil"  name="tehsil" class="form-control" disabled="disabled">
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
                                                <div class="bg-light" id="purchase_tractor"> <a class="nav-link text-center" data-toggle="tab">
                                                        <span><i class="fa-solid fa-image-portrait"></i></span> Tractor
                                                    </a>
                                                </div>
                                                <div class="bg-light" id="purchase_harvester"><a class="nav-link text-center" data-bs-toggle="tab" ><span><i class="fa-solid fa-cart-shopping"></i><span>Harvester</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_haatbazar"><span><i class="fa-solid fa-bars"></i> <span>HaatBazar</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_implements"><span><i class="fa-solid fa-tags"></i> <span>Implements</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_nursery"><span><i class="fa-solid fa-tags"></i> <span>Nursery</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_tyre"><span><i class="fa-solid fa-tags"></i> <span>Tyre</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_engineoil"><span><i class="fa-solid fa-tags"></i> <span>Engine Oil</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_dealer"><span><i class="fa-solid fa-tags"></i> <span>Dealer</a></div>
                                                <div class="bg-light"><a class="nav-link text-center" data-bs-toggle="tab" href="#purchase_hire"><span><i class="fa-solid fa-tags"></i> <span>Hire</a></div>
                                            </div>
                                        </div>
                                        <!-- <div class="sidebar_profile2 mx-3 shadow  bg-white">
                                            <ul class="nav nav-tabs"  role="tablist">
                                                <h4 style="padding: 10px 10px; text-align: center; margin: 0 auto; background: #4bab54;  width: 100%; color: #fff; text-transform: uppercase; font-size: 20px;"> Purchase Request</h4>
                                                <li class="active nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_tractor"><span><i class="fa-solid fa-image-portrait"></i><span>Tractor</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_harvester"><span><i class="fa-solid fa-cart-shopping"></i><span>Harvester</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_haatbazar"><span><i class="fa-solid fa-bars"></i><span>HaatBazar</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_implements"><span><i class="fa-solid fa-tags"></i><span>Implements</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_nursery"><span><i class="fa-solid fa-tags"></i><span>Nursery</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_tyre"><span><i class="fa-solid fa-tags"></i><span>Tyre</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_engineoil"><span><i class="fa-solid fa-tags"></i><span>Engine Oil</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_dealer"><span><i class="fa-solid fa-tags"></i><span>Dealer</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_rent"><span><i class="fa-solid fa-tags"></i><span>Rent</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#purchase_hire"><span><i class="fa-solid fa-tags"></i><span>Hire</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                <div class=" col-12 my-3  bg-white">
                                    <div class="customer_detail_section bg-white tab-content">
                                        <div id="" data-bs-target="purchase_tractor" class="tab-pane active shadow p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_tractor_table" class="table table-striped table-hover table-bordered no-footer" width="100%">
                                                    <thead class="bg-success">
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
                                                        <!-- Add your table data here -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="" data-bs-target="purchase_harvester" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_harvester_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="bg-success">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>
                                        <div id="purchase_haatbazar" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_haatbazar_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_implements" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_implements_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_nursery" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_nursery_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_tyre" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_tyre_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_engineoil" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_engineoil_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>


                                        <div id="purchase_dealer" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_dealer_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_rent" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_rent_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>

                                        <div id="purchase_hire" class="tab-pane shadow bg-white  p-3">
                                            <div class="table-responsive b-t-1">
                                                <table id="purchase_hire_table" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                                    <thead class="">
                                                    <tr>
                                                        <th class="d-none d-md-table-cell text-white ">Request No.</th>
                                                        <th class="d-none d-md-table-cell text-white">Brand</th>
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
                                        </div>
                                    </div>
                                   
                                </div>
                                </div>
                                
                            </div>

                            <div id="my_list" class="tab-pane">
                                <div class="p-3 shadow bg-white">
                                        <div class="col-9 mx-auto table-responsive">
                                        <table id="mylist" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                            <thead class="">
                                            <tr>
                                                <th class="d-none d-md-table-cell text-white ">Type</th>
                                                <th class="d-none d-md-table-cell text-white">Brand</th>
                                                <th class="d-none d-md-table-cell text-white">Model</th>
                                                <th class="d-none d-md-table-cell text-white">Year</th>
                                                <th class="d-none d-md-table-cell text-white">Price</th>
                                                <th class="d-none d-md-table-cell text-white">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="data-table">
                                            </tbody>
                                        </table>
                                        </div>
                                   
                                    
                                </div>
                            </div>

                            <div id="interested_buyers" class="tab-pane">
                                <div class=" mb-5 shadow bg-white p-3">
                                    <div class="table-responsive">
                                    <table id="interested" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
                                        <thead class="">
                                        <tr>
                                            <th class="d-none d-md-table-cell text-white ">Type</th>
                                            <th class="d-none d-md-table-cell text-white ">Name</th>
                                            <th class="d-none d-md-table-cell text-white ">Mobile Number</th>
                                            <th class="d-none d-md-table-cell text-white">Brand</th>
                                            <th class="d-none d-md-table-cell text-white">Model</th>
                                            <th class="d-none d-md-table-cell text-white">State</th>
                                        </tr>
                                        </thead>
                                        <tbody id="data-table">
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php   
        include 'includes/footer.php';
   
    ?> 
</body>
<script>
$('.carousel-main').owlCarousel({
	items: 5,
	loop: true,
	autoplay: false,
	autoplayTimeout: 3000,
	margin: 10,
	nav: true,
	dots: false,
	navText: ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
})
</script>