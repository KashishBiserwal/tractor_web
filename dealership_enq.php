<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/dealership_enq.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
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
    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-5 py-1">
            <div class="">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                        <span class=""><span class="text-dark header-link  px-1">Dealership Enquiry</span></span> 
                        <!-- <i class="fa-solid fa-chevron-right px-1"></i>  -->
                </span> 
            </div>
        </div>
    </section>
    
    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/dealership-enquiry.jpg); background-position: center; background-size: cover;">
            </div>
        </div>
        <div class="page-banner-content text-center position-absolute px-2">
            <h1>Tractor Dealer Enquiry</h1>
            <!-- <p>Enquiry Form</p> -->
        </div>
    </section>

    <!-- FORM -->
    <section class="form-view bg-white pb-4">
        <div class="container" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                        <div class="row justify-content-center">
                           <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>enquiryName</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="14" name="fname">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product id</label>
                                <input type="text" class="form-control" id="product_id" value="">
                            </div>
                          
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3 ">
                                            <div class="form-outline">
                                                <label for="f_name" class="form-label mb-0 text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name"  id="f_name_1" name="f_name" required>
                                            </div>
                                        </div>
                          
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2 mt-3">
                                            <div class="form-outline">
                                                <label for="eo_name" class="form-label text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name"  id="l_name_1" name="l_name" required>
                                            </div>
                                        </div>
                          
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 mt-3">
                                            <div class="form-outline mt-3">
                                                <label for="eo_number" class="form-label text-dark"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mob_num" name="mob_num" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                            </div>
                                        </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="yr_state" class="form-label text-dark fw-bold "> <i class="fas fa-location"></i> State</label>
                                    <select class="form-select py-2 state-dropdown" id="state_s" name="_state"aria-label=".form-select-lg example">
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                    <select class="form-select py-2 district-dropdown" id="district_s" name="_district" aria-label=".form-select-lg example">
                                 
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="yr_price" class="form-label text-dark"> Tehsil</label>
                                    <select class="form-select py-2 tehsil-dropdown" id="t_tehsil" name="_tehsil"aria-label=".form-select-lg example">
                                    <option value="" selected disabled=""></option>
                                     
                                    </select>    
                                </div>  
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="brand" class="form-label text-dark">Brand</label>
                                    <select class="form-select py-2 " id="b_brand_1" name="_brand"aria-label=".form-select-lg example">
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="text-center  my-3">
                                <button type="submit" id="delership_enq_btn" class="btn btn-success mt-1 px-5 w-100" data-bs-toggle="modal" data-bs-target="get_OTP_btn">Submit</button>         
                            </div>        
                            <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Agrimart <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--OTP model-->
    <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="Mobile" class=" text-dark float-start pl-2">Number</label>
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

    <section>
      <div class="container">
        <h3 class=" py-4 display-6 fw-bold">Harvester in <span class="text-success">2023</span></h3>
        <nav class="mb-3">
          <div class="nav nav-tabs " id="nav-tab" role="tablist">
            <a class="nav-link active px-5 py-3 h5 fw-bold text-dark py-2" type="button" id="premium-tab" data-bs-toggle="tab" data-bs-target="#premium" role="tab" aria-controls="premium" aria-selected="true">New Harvester</a>
            <a class="nav-link px-5 py-3 h5 fw-bold text-dark" id="latest-tab" type="button" data-bs-toggle="tab" data-bs-target="#latest" role="tab" aria-controls="latest" aria-selected="false">Old Harvester</a>
          
          </div>
        </nav>
        <div class="tab-content justify-content-center" >
          <div role="tabpanel" class="tab-pane fade show active" id="premium" aria-labelledby="premium-tab">
            <section class="section slider-section">
              <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="new_harvester"> </div>
                <div class="col text-center pb-4 mt-3">
                  <a href="harvester.php" class="btn btn-success px-5">View all New Harvester</a>
                </div>
              </div>
            </section>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
            <section class="section slider-section">
              <div class="container slider-column">
              <div class="carousel-wrap">
                <div class="owl-carousel" id="old_harvester">
              
                </div>
              </div>
                <div class="col text-center pb-4">
                  <a href="used_harvester.php" class="btn btn-success px-5">View all Old Harvester</a>
                </div>
              </div>
            </section>
          </div>
        
        </div>
      </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="row">
                <h1 class=" mt-5">Popular Mahindra Tractors</h1>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/575-di-xp-plus-1632207330.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="Mahindra_575.php" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra 575 DI XP Plus</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 47 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  2979 CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col text-center my-3">
                <a href="#" class="btn btn-success btn-lg">Load More Tractors</a>
            </div>
        </div>
    </section> -->

    <!-- WHY BECOME A DEALER -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Why Become a Dealer</p>
                <p class="justify-content-center">Tractors are the most important solutions for farm mechanisation, utility, and other commercial aspects in India. Tractors demand is growing due to the scalability of farming and the increase of crop growers in India. So, this marks the need for starting a verified distributorship with key tractor brands like Mahindra, Sonalika, John Deere, Farmtrac, and others. With less capital and the right knowledge from us, you can get seamless and authorised tractor dealerships in your area.
                </p>
            </div>
        </div>
    </section>

    <!-- About Authorised Tractor Dealership in India -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">About Authorised Tractor Dealership in India</p>
                <p class="justify-content-center">We will help you select from 700+ tractor models from 25+ tractor brands while getting the right tractor quotes. We are presenting you the online tractor dealership page with quick accessibility to correct information on how to get leading tractor OEMs dealerships. Here you can find certified and authorised tractor brands in India with lucrative opportunities. Since India has more than 25 tractor brands, you can become one of many thousand dealers across India and start a rewarding business plan</p>
                <p>At TractorJunction, you can find information on Mahindra Tractor Dealerships, Swaraj tractor dealerships, Massey Ferguson dealerships, John Deere dealerships, Sonalika dealerships, and many other dealerships of your choice. In addition, you can strike the right tractor dealership opportunity across any state and district in India. To get tractor dealerships online near you, enter the state, district and tractor brand of your choice. So, become a tractor dealer today</p>
            </div>
        </div>
    </section>
    
    <!-- Why Become a Tractor Dealer? -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Why Become a Tractor Dealer?</p>
                <ul class="trac_dealers">
                    <li class="">Leader in utility vehicles for over fifty years, since the company builts the first Willys jeeps on Indian soil in 1947</li>
                    <li class="">Pioneer in the Indian automobile industry</li>
                    <li class="">Major player in the Indian Two Wheeler industry with a robust presence in all product segments</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchisor Support -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchisor Support</p>
                <ul class="trac_dealers">
                    <li class="">Pre and Post opening support</li>
                    <li class="">Marketing Plan & Advertisement support</li>
                    <li class="">On-going operational support</li>
                    <li class="">Products support</li>
                    <li class="">Insights on accounting and inventory system</li>
                    <li class="">Resources on site selection criteria/assistance</li>                    
                    <li class="">Key quality control information</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchise Facts -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchise Facts</p>
                <ul class="trac_dealers">
                    <li class="">Pre and Post opening support</li>
                    <li class="">Key quality control information</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchise Benefits -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchise Benefits</p>
                <ul class="trac_dealers">
                    <li class="">Great returns on investment</li>
                    <li class="">Training & Support</li>
                    <li class="">You can get benefitted from detailed brochures on products</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Get Best Tractor Dealership in India -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Get Best Tractor Dealership in India </p>
                <p class="justify-content-center">You can set up an authorised dealership franchise in your specified location. In the form above, just enter your state, district, and tractor brand choice, and our team will reach out with complete information on the same. We can help you identify important details to apply for tractor dealership agency near you.
                </p>
            </div>
        </div>
    </section>

    <!-- How to Get Authorised Tractor Dealership with TractorJunction? -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">How to Get Authorised Tractor Dealership with TractorJunction? </p>
                <p class="justify-content-center">At TractorJunction, you find access to authorised tractor dealership opportunities. We help you connect with 25+ tractor brands with 700+ tractor models. </p>
                <p class="justify-content-center">We offer you a hassle-free process to buy tractor dealerships in India. You just need to fill up the above form asking for basic details like name, tractor brand preferences, state, district, etc. We will help you identify the right steps to start your new tractor dealerships. We will help you with pre and post-opening & product support, prepare a marketing and advertising plan & even provide assistance on gathering resources for ideal site selection, followed by quality control parameters. For any further Tractor dealership enquiry, reach us.</p>
            </div>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container py-3 mt-2">
            <div class="row">
                <h5 class="bg-light assured py-1 ps-3">Quick links</h5>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="find_new_tractors.php" class="text-decoration-none text-dark">New Tractor</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="compare_trac.php" class="text-decoration-none text-dark">Compare</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="dealership_enq.php" class="text-decoration-none text-dark">Dealership Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="new_tractor_loan.php" class="text-decoration-none text-dark">Finance</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="upcoming_tractors.php" class="text-decoration-none text-dark">Upcoming Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="popular_tractors.php" class="text-decoration-none text-dark">Popular Tractors</a></li> 
                      
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="used_tractor.php" class="text-decoration-none text-dark">Used Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="latest_tractor.php" class="text-decoration-none text-dark">Latest Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="Insurance.php" class="text-decoration-none text-dark">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                       
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="harvester.php" class="text-decoration-none text-dark">Harvester</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="nursery_ui.php" class="text-decoration-none text-dark">Nursery</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="engine_oil.php" class="text-decoration-none text-dark">Engine Oil</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

    <script>
        $(document).ready(function(){
            jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
                return /^[6-9]\d{9}$/.test(value); 
            }, "Phone number must start with 6 or above");
            $("#delership_enq_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='dealership_enq_from']").validate({
                    rules: {
                        f_name: {
                            required: true,
                            minlength: 3
                        },

                        l_name: {
                            required: true,
                            minlength: 3
                        },
                        mob_num: {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            digits: true,
                            customPhoneNumber: true 
                        },
                        // _tehsil: {
                        //     required: true,
                        //     minlength: 3
                        // },
                        _state: {
                            required: true,
                            // minlength: 10
                        },
                        _district: {
                            required: true,
                            // minlength: 10
                        },
                        _brand: {
                            required: true,
                            // minlength: 10
                        }
                    },
                    messages: {
                        f_name: {
                            required: "Enter Your First Name",
                            minlength: "First Name must be atleast 3 characters long"
                        },
                        l_name: {
                            required: "Enter Your Last Name",
                            minlength: "Last Name must be atleast 3 characters long"
                        },
                        mob_num: {
                            required: "Enter Your Phone Number",
                            minlength: "Phone Number must be of 10 Digit",
                            maxlength: "Ensure exactly 10 digits of Mobile No.",
                            digits: "Please enter only digits"
                        },
                        // _tehsil: {
                        //     required: "Select Your Tehsil Name",
                        //     // minlength: "Tehsil Name must be atleast 3 characters long"
                        // },
                        _state: {
                            required: "Select Your State",
                            // minlength: ""
                        },
                        _district: {
                            required: "Select Your District Name",
                            // minlength: ""
                        },
                        _brand: {
                            required: "Select Your Brand Name",
                            // minlength: ""
                        }
                    },

                });
            })
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
</body>
</html>