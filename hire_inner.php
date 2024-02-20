<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/hire_inner.js"></script>
  <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

</head>
<body>
<?php
   include 'includes/headertag.php';
   ?>
    <style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 23px;
    }

    label.error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }

    .img_buy_hire {
        height: 400px;
    }

    .post-slide .post-content {
        background: #fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }
    </style>
</head>

<body> <?php
   include 'includes/header.php';
   ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class="mt-5 pt-5">
        <div class="container pt-5">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a><span class="text-dark"><a
                            href="hire.php" class="text-decoration-none header-link px-1"> Hire Tractor </a></span>
                </span>
            </div>
        </div>
    </section>
    <section class="mt-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="position: relative;">
                    <div>
                        <h1 class="fw-bold text-danger pt-3" id="brand_name"></h1>
                        <div class="gallery">   
                            <div class="swiper-container gallery-slider">
                                <div class="swiper-wrapper mySwiper2_data"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>

                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper mySwiper_data"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" >
                    <h5 class="text-black fw-bold text-center "></h5>
                    <div class="power">
                        <div class="row ">
                            <div class="content d-flex flex-column flex-grow-1 mt-2">
                                <div class="power ">
                                    <table class="table border bg-light  mt-5">
                                        <tbody>
                                            <tr>
                                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <p class="text-dark "><i class="fa-solid fa-user mx-2"></i>Name</p>
                                                </td>
                                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                 <p class="text-dark "id="name_first"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="text-dark "><i class="fa-solid fa-location-dot mx-2"></i>Location</p>
                                                </td>
                                                <td> <p class="text-dark "><span id="set_dist"></span>,<span id="set_state"></span></p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                 <p class="text-dark "><i class="fas fa-bolt mx-2"></i>Price</p>
                                                </td>
                                                <td>  <p class="text-dark " id="power_hp"></p></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                 <p class="text-dark "><i class="fa-solid fa-gear mx-2"></i>Area </p>
                                                </td>
                                                <td>
                                                <p id="engine_cc" type="" class="text-dark "></p>
                                                </td>
                                            </tr>
                                            
                                        
                                        </tbody>
                                    </table>
                                    <div class="col-12">
                                        <button id="send_enquiry" type="button" class="add_btn  btn-success w-100"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Send Enquiry</button>
                                    </div>

                                     <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title text-dark fw-bold" id="model_name_2"></h4>
                                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="model-cont">
                                                    <form id="hire_inner" name="hire_inner" method="post">
            
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                                <input type="text" class="form-control" id="product_id" value="">
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> model</label>
                                                                <input type="text" class="form-control" id="model_form" value="">
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> brand</label>
                                                                <input type="text" class="form-control" id="brand_name_form" value="">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="first_name"><i
                                                                            class="fa-regular fa-user"></i> First Name</label>
                                                                    <input type="text" id="first_name" name="first_name" class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="last_name"><i class="fa-regular fa-user"></i> Last Name</label>
                                                                    <input type="text" id="last_name" name="last_name"class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="mobile_number">Mobile Number</label>
                                                                    <input type="text" id="mobile_number"name="mobile_number" class=" data_search form-control input-group-sm py-2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="state"> <i class="fas fa-location"></i> State</label>
                                                                    <select class="form-select py-2 state-dropdown" aria-label="Default select example" id="the_state"name="state">
                                                                  
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="district"><i class="fa-solid fa-location-dot"></i>District</label>
                                                                    <select class="form-select py-2 district-dropdown"aria-label="Default select example"name="district" id="the_district">
                                                                   
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label"for="tehsil">Tehsil</label>
                                                                    <select class="form-select py-2 tehsil-dropdown" aria-label="Default select example"name="tehsil" id="the_tehsil">
                                                                    
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger"id="button_hire">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mt-4 pt-3">
                <h4 class="assured px-2 fw-bold mb-3">Related Old Harvester </h4>
                <div class="carousel-wrap">
                <div class="owl-carousel" id="old_harvester_car">
              
                </div>
              </div>
                <div class="col text-center pb-4 mt-5">
                  <a href="used_harvester.php" class="btn btn-success px-5">View all Old Harvester</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section slider-section">

        <div class="container ">
            <h3 class="assured px-2 fw-bold mt-4 mb-2">Similar Rent Tractor</h3>
            <div class=" carousel-wrap">
                <div class="owl-carousel" id="new_harvester"></div>
                
            </div>
        </div>
    </section>
    <div class="col-12 text-center mb-4 pt-2 ">
        <a href="hire.php"><button id="adduser"  type="button" class="add_btn btn btn-success">
                <i class="fas fa-undo"></i> Load More tractors</button></a>
    </div>

    <div class="container">
        <h4 class="fw-bold assured px-2">Quick Links</h4>
        <div class="row my-4">
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="index.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="find_new_tractors.php" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="harveste.php" id="adduser" class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>HARVESTERS</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="used_tractor.php" id="adduser" class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="insurance.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>EASY FINANCE</a>
            </div>
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                <a href="certified_dealers.php" id="adduser" class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                    <i class="fas fa-bolt"></i>DEALERSHIP</a>
            </div>
        </div>
    </div>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true,
                    indianMobile: true, // Allow only digits
                },
                state: "required",
                district: "required",
            }
        });
        $('#button_hire').on('click', function() {
            $('#hire_inner').valid();
            console.log($('#hire_inner').valid());
        });
    });

    $('#usedtractorforsell').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],

        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>