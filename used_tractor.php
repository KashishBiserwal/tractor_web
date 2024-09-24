<!-- <!DOCTYPE html> -->
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     include 'includes/spinner.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/used_tractor.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
    </script>
<body>
<style>
    .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
    </style>

   <?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-5 bg-light">
    <div class="container">
        <div class="mt-5">
            <span class="mt-4 text-white ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" text-decoration-none text-dark px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">  Used Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="">SEARCH USED  <span class="text-success fw-bold">TRACTORS IN INDIA</span> </h3>
                <div class=" row mb-3" id="">
                    <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-3">
                        <button id="adduser" type="button" class="add_btn btn  btn-success px-3">
                             <i class="fa-solid fa-cart-shopping"></i> Buy tractor </button>  &nbsp;
                        <button id="adduser" type="button" class="add_btn btn btn-success">
                            <i class="fa-sharp fa-solid fa-handshake"></i> Sell tractor </button>
                    </div> -->
                </div>
               
                <div class="row my-3">
                    <div id="productContainer" class="row "></div>
                    <div class="col-12 text-center">
                        <!-- <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow">
                        <i class="fas fa-undo"></i>  Load More Tractor </button> -->
                         <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                         <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>

                        <button type="button" id="loadMoreBtn" class="btn btn-success shadow px-5 w-40">Load More</button> 
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button onclick="resetform()" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor"  type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>  Apply Filter </button>
                                </div>
                            </div>
                        </div>
                    </div>
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 6 Lakh - 9 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="9 - 12"/><span class="ps-2 fs-6"> 9 Lakh - 12 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2" id="checkboxContainer"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                        <div class="HP py-2" id="state_state" style=" height: 78px;">
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="district_container">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold pt-2">Search By District</h5>
                        <div class="HP py-2" id="get_dist">
                            <!-- District checkboxes will be appended here -->
                        </div>
                    </div>
                </div>
              
                <div class="scrollbar mb-3" id="my-2">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold pt-2">Search By Year</h5>
                        <div class="HP py-2" id="P_year">
                            <!-- Checkboxes will be dynamically added here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used Tractor by Location</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Bilaspur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Surajpur </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In korba </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Manendragarh </p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Second Hand Tractors By Brand</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
                </ul>
            </div> 
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Farmtrac tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Swaraj tractors for sale </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <!-- <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Verify Your OTP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                            <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Munber</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
                            </div>
                            <div class="col-12">
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"name="opt_1">
                            </div>
                            <div class="float-end col-12">
                                <a href="" class="float-end">Resend OTP</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="Verify">Verify</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" id="saller_name">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                                <input type="text" class="form-control" id="mobile_num">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  id="got_it_btn "class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
<script>
 $(document).ready(function(){
    console.log('testing');
    $('#contact-seller-call').validate({
        rules:{
            fname:{
                required:true,
            },
            lname:{
                required:true,
            },
            number:{
                required:true,
            },
            state:{
                required:true,
            },
            district:{
                required:true,
            },
            badget:{
                required:true,
            },
            Tehsil:{
                required:true,
            }
        },
        messages:{
            fname:{
                required:"This field is required",
            },
            lname:{
                required:"This field is required",
            },
            number:{
                required:"This field is required",
            },
            state:{
                required:"This field is required",
            },
            district:{
                required:"This field is required",
            },
            badget:{
                required:"This field is required",
            },
            Tehsil:{
                required:"This field is required",
            }
        },
        submitHandler: function(form) {
        form.submit();
        }
    });
});

    </script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'hi,en,bn,ar,ja,iw', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
    </html>
