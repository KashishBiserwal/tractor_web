<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/header.php';
        include 'includes/headertag.php';
        include 'includes/footertag.php';
    ?>
    <style>
        .sidebar_profile{
            background: linear-gradient(-185deg, rgb(63, 81, 181) 19%, rgb(76, 175, 80) 100%);
            border-radius: 8px;
        }
        .profile_image img{
            width: 85px;
            margin: 0px auto;
            text-align: center;
            display: block;
            padding: 30px 0 10px;
        }
        .profile_name p{
            color:#fff;
            text-align: center;
            line-height: 20px;
        }
        .btn_all2{
            color: #fff !important;
    text-transform: capitalize;
        }
        .hr1{
            border: 1px solid #fff !important;
    width: 1px;
    height: 20px !important;
    background-color: #fff !important;
    margin: 8px 0 0;
        }
        .profile_btn{
            display: flex;
    text-align: center;
    margin: 0 auto;
    justify-content: center;
    padding-bottom: 20px;
        } 
        .customer_options{
            border-bottom: 2px solid #dcdcdc;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
        }
      .customer_options .nav-tabs li{
        padding: 0;
        font-weight: 600 !important;
    border-right: 2px solid #dcdcdc;

      }
      .customer_options .nav-tabs li a{
        color: #a5a2a2;
    text-decoration: none;
    font-weight: 600 !important;
        
      }
      .customer_options .nav-tabs li a span i{
        margin: 0 10px;
      }
      .customer_options .nav-tabs .nav-link.active, .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
        border-color: #fff;
    border: none;
    color: #a5a2a2;
    font-weight: 600 !important;
      }
      #purchase thead th , #mylist thead th, #interested thead th{
        background: rgb(21 115 71);
      }
    </style>
</head>
<body>
<section class="mt-130 bg-white">
            <div class="container ">
                <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                        <span class="text-dark p">Profile</span>
                    </span>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid pt-4 bg-light">
                <div class="row w-100">
                    <div class="col-3 my-3">
                        <div class="sidebar_profile">
                            <div class="profile_image">
                                <img src="assets/images/user.png">
                            </div>
                            <div class="profile_name">
                                <p>Welcome!<br> <span style="font-size:20px; font-weight:700;">John Berry<span></p>
                            </div>
                            <div class="profile_btn">
                                <button class="btn btn_all2">Logout</button>
                                <div class="hr1"></div>
                                <button class="btn btn_all2">Edit</button>
                            </div>
                        </div>
                        <div class="sidebar_profile2">
                        
                        </div>
                        
                    </div>
                    <div class="col-9 my-3">
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
                            <div class=" mb-5  p-3" style="border: 1px solid #dcdcdc;">
                                    <div class="heading00 py-2"><h3>Personal Information</h3></div>
                                   <form>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">First Name</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Email</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">State</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">District</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                                            <div class="form-outline">
                                                <label class="form-label">Tehsil</label>
                                                <input type="text" placeholder=" " id="f_name"  name="f_name" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                   </form>
                                </div>
                            </div>
                            <div id="purchase_request" class="tab-pane">
                                <div class=" mb-5 shadow bg-white p-3">
                                    <div class="table-responsive">
                                    <table id="purchase" class="table table-striped  table-hover table-bordered  no-footer" width="100%; margin-bottom: 15px;">
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

                            <div id="my_list" class="tab-pane">
                                <div class=" mb-5 shadow bg-white p-3">
                                    <div class="table-responsive">
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

