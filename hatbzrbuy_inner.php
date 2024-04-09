<!DOCTYPE html>
<html lang="en">

<head>  <?php
// include 'includes/header.php';
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';

?> 
<script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
     <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/haatbazar_inner.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
   
</head>
<style>
    .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
    </style>

<body> <?php
   include 'includes/header.php';
   ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class=" bg-light mt-5 pt-5">
        <div class="container pt-5">
            <div class="py-1">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="">
                        <span class="text-dark header-link  px-1">HaatBazar <i
                                class="fa-solid fa-chevron-right px-1"></i>
                        </span>
                    </span>
                </div>
        </div>
    </section>
    <section>
        <div class="container pt-3">
            <div class="vegehead">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <h3 class="fw-bold text-danger"> <span id="Sub_category_main"></span></h3>
                       
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <h4 class="fw-bold text-danger">Are You Intrested In This Harvest ?</h4>
                        <h5>Price:- <span id="original_price"></span>/<span id="per"></span></h5>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class=" swiper-slide swiper-slide_buy">
                                    <!-- <img class="img_buy" src="assets/images/437-1632718440.webp" /> -->
                                </div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <form action="" id="haatbazar_form" method="post">
                        <div class="row my-3">
                            <div class="col-12 justify-content-center bg-light">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class=" ml-2">
                                            <div class="row px-3 ">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="8" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                    <input type="text" class="form-control" id="product_id" value="">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="fname" class="form-label "><i class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" id="fname" onkeydown="return /[a-zA-Z]/i.test(event.key)" name="fname" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="lname" class="form-label "><i class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-outline mt-4">
                                                        <label for="phone" class="form-label "><i class="fa fa-phone"aria-hidden="true"></i> Mobile Number</label>
                                                        <input type="text" class="form-control" placeholder="Enter Number" id="number_number" name="number_number" required>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-outline mt-4">
                                                        <label for="state" class="form-label "><i class="fas fa-location"></i> State</label>
                                                        <select class="form-select mb-2 state-dropdown"aria-label=".form-select-lg example" id="state_2"name="state" required>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <div for="district" class="form-outline mt-4">
                                                        <label class="form-label "><i
                                                                class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select mb-2 district-dropdown" aria-label=".form-select-lg example" name="district"id="district" required>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                                    <div class="form-outline mt-4">
                                                        <label for="tehsil" class="form-label">Tehsil</label>
                                                        <select class="form-select tehsil-dropdown" aria-label=".form-select-lg example" name="tehsil" id="tehsil" required>
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <div class="form-outline mt-4">
                                                        <label for="price" class="form-label ">Price</label>
                                                        <input type="text" class="form-control" id="price" name="price" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 mt-4 p-2">
                                                    <button type="button" class="btn btn-success w-100" id="button_nursery" data-bs-toggle="modal" data-bs-target="get_OTP_btn1">
                                                        Contact Seller
                                                    </button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="get_OTP_btn1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                        <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="mobile_verify"name="Mobile">
                            </div>
                            <div class="col-12">
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp1"name="opt_1">
                            </div>
                            <div class="float-end col-12">
                                <a href="" class="float-end">Resend OTP</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-success" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="seller_contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Contact Seller</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"class="w-25"></button>
                </div>
                <div class="modal-body">
                    <div class="model-cont">
                        <h4 class="text-center text-danger">Seller Information</h3>
                        <div class="row px-3 py-2">
                            <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>Seller Name</label>
                                <input type="text" class="form-control" id="slr_name">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                                <input type="text" class="form-control" id="mob_num">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  id="got_it_btn "class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
                                       
    <section>
        <div class="container">
            <h3 class="text-danger assured ps-2">About Item</h3>
            <table class="table w-100 table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6">Category</td>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6" id="category_name_1"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Vegetable Type:</td>
                        <td class="table-data"id="sucategory_name"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Quantity:</td>
                        <td class="table-data" id="quantity"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Price as per: <span id="Per_price"></span></td>
                        <td class="table-data" id="price_as"><span>/</span></td>
                    </tr>
                    <tr>
                        <td class="table-data">About</td>
                        <td class="table-data" id="description_1"></td>
                    </tr>


                </tbody>
            </table>
            <h3 class="text-danger assured ps-2">Personal Information</h3>
            <table class="table w-100 table-hover table table-striped my-4">
                <tbody>
                    <tr>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6">Name</td>
                        <td class="table-data col-6 col-md-6 col-lg-6 col-sm-6" id="first_name"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Phone Number</td>
                        <td class="table-data" id="phone_number"></td>
                    </tr>
                    <tr>
                        <td class="table-data">State</td>
                        <td class="table-data" id="state_1"></td>
                    </tr>
                    <tr>
                        <td class="table-data">District</td>
                        <td class="table-data" id="district_dist"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Tehsil</td>
                        <td class="table-data" id="tehsil_1"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
                <div id="productContainer" class="row mt-3">
                
                 
                </div>
        </div>
        <div class="col text-center my-3 pb-5">
            <a href="hatbazar_buy.php" class="btn btn-success btn-lg">View All</a>
        </div>
    </section>

                                                
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>


    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script>
$(document).ready(function() {
    $.validator.addMethod("indianMobile", function(value, element) {
        return this.optional(element) || /^[789]\d{9}$/.test(value);
    }, "Please enter a valid Indian mobile number.");

    $("#haatbazar_form").validate({
        rules: {
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            number_number: {
                required: true,
                digits: true,
                indianMobile: true,
            },
            state: true,
            district: true,
            price: true,
        },
        messages: {
            fname: {
                required: 'This field is required',
            },
            lname: {
                required: 'This field is required',
            },
            number_number: {
                required: 'This field is required',
                digits: 'Please enter only digits',
                indianMobile: 'Please enter a valid Indian mobile number',
            },
        }
    });

    $('#button_nursery').on('click', function() {
        $('#haatbazar_form').valid();
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
        $('#price').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            var formattedValue = Number(value).toLocaleString('en-IN'); // Format using Indian numbering system
            $(this).val(formattedValue);
        });

        // Set cursor position to the beginning of the input field
        var input = document.getElementById('price');
        input.focus();
        input.setSelectionRange(0, 0);

        // Set text alignment to left
        input.style.textAlign = 'left';
   
});
</script>
<!-- <script>
    $(document).ready(function() {
    
    $('#price').inputmask({
        alias: 'numeric',
        groupSeparator: ',',
        autoGroup: true,
        digits: 2,
        digitsOptional: false,
        placeholder: '0',
        onBeforeMask: function (value, opts) {
            return value.replace(/\,/g,'');
        },
    });

    var input = document.getElementById('price');
    input.focus();
    input.setSelectionRange(0, 0);

    input.style.textAlign = 'left';
});
</script> -->

</html>