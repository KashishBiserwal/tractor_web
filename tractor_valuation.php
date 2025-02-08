<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/headertag.php';
    include 'includes/footertag.php';
    include 'includes/headertagadmin.php';
?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/tractor_valuation.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
<body>
   <?php
    include 'includes/header.php';
   ?>
<section class=" mt-3 pt-5 bg-light">
    <div class="container pt-5">
        <div class="py-2">
            <span class="bg-light">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class=""><span class="text-dark header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                <span class="text-dark">Used Tractor Valuation</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/istockphoto-1033665866-612x612.png); background-position: center; background-size: cover;"></div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
        <h2 class=" text-dark ">Get True Price of a <span class="text-success">Used Tractor</span></h2>
        <h4 class="mb-4">जानिए अपने ट्रैक्टर की सही कीमत</h4>
    </div>
</section>
<section class="form-view bg-white pb-4">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <form id="tractor-valuation-form" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="b_brand"class="form-label text-dark">Brand</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_brand" id="b_brand" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="m_model"class="form-label text-dark">Model</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="_model" id="m_model" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-2">
                            <div class="form-outline mt-4">
                                <label for="f_name" class="form-label mb-0 text-dark">First Name</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="f_name" name="f_name" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                            <div class="form-outline mt-4">
                                <label for="eo_number" class="form-label text-dark">Phone Number</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Number" id="m_number" name="eo_number"  required>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="Owners" class="form-label text-dark" id="state" name="state">Owners</label>
                                <select class="form-select py-2" aria-label=".form-select-lg example"  name="Owners" id="Owners" required>
                                    <option value>Select Owner</option>
                                    <option value="1st">1st</option>
                                    <option value="2st">2st</option>
                                    <option value="3st">3st</option>
                                    <option value="All">All Above</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="Manufacture" class="form-label text-dark" id="state" name="state">Manufacture Year</label>
                                <select class="form-select py-2" aria-label=".form-select-lg example" name="Manufacture" id="Manufacture" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="Tyre" class="form-label text-dark" id="state" name="state">Tyre Condition</label>
                                <select class="form-select py-2" aria-label=".form-select-lg example" name="Tyre" id="Tyre" required>
                                    <option value>Select Tyre Condition</option>
                                    <option value="0-25%(poor)">0-25%(poor)</option>
                                    <option value="25-50%(Average)">25-50%(Average)</option>
                                    <option value="51-75%(Good)">51-75%(Good)</option>
                                    <option value="76-100%(Very Good)">76-100%(Very Good)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="eo_state" class="form-label text-dark" id="state" name="state"> State</label>
                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example"id="s_state" name="eo_state" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="eo_dist" class="form-label text-dark"> District</label>
                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="eo_dist" id="d_dist" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-outline mt-4">
                                <label for="eo_tehsil" class="form-label text-dark"> Tehsil</label>
                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="t_tehsil" name="eo_tehsil">
                                </select>
                            </div>
                        </div>
                         <div class="col-12 mt-4">
                            <button id="tractor_valuation" data-res="<?php echo $sum; ?>" type="button" class="btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#get_OTP_btn" >Get valuation</button>
                        </div>       
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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
                <button type="button" class="btn btn-success" id="Verify">Verify</button>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container  my-5">
        <div class="my-3">
            <h3 class="fw-bold mt-3">Price Analysis for Used Popular Tractors</h3>
        </div>
        <div class="row my-5">
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light ">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about bg-light">
    <div class="container">
        <div class="lecture_heading text-center">
            <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about Used Tractor Valuation</h3>
        </div>
        <div class="mt-4 pb-5">
            <div class="accordion " id="accordionFlushExample">
                <div class="accordion-item  rounded-3">
                    <h2 class="accordion-header p-2" id="flush-headingOne" >
                        <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Que. What is used tractor valuation?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans: Just after purchasing a tractor, your tractor value starts decreasing that is called depreciation. When you sell your used tractor the price isn’t the same one on which you purchased your tractor. So, this Used Tractor Valuation tool helps you to find out the true tractor resale value of your tractor.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Que. How to know fair tractor value price in our state?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans: It's a simple process you get true value tractor price in just a few seconds. You have to tell you some information regarding tractor like your tractor brand, model number, state, year of purchase, tire condition, your name and mobile number. Now you have to go on, get valuation then you get fair used tractor value.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Que. How to use an old tractor valuation calculator?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           <p class="text-dark">Ans. At BharatAgrimart's, go on used tractor valuation then select your tractor brand name, select model number, select state, then select owner, select year in which you purchased your tractor, select tire condition of your tractor than add your name and mobile number. Then go on, get valuation and finally you get your fair tractor resale value.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading4">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Que. How do we know this is a fair tractor resale value?
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Used tractor value calculator is made by our experts. This tool gives the price according to your tractor details which are given by you. Then this tool studies your tractor details and gives you a fair resale tractor price.</p>
                        </div>
                    </div>                    
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading5">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Que. After using used tractor valuation in India, how to sell the tractor?
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Just like the used tractor valuation, you can easily sale your old tractor on BharatAgrimart's. Go on, sell tractor online and fill the form and after that our team helps you in selling your tractor. Upload photos of your tractor if you want to sell your tractor quicker.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading6">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        Que. Do we have to pay for using used tractor valuation?
                        </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. No, BharatAgrimart's has launched this feature for your convenience. Used tractor value guides free and provides you with a fair tractor resale price in India.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingoil">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                          Que. How does the Used Tractor Valuation impact the condition of my tractor tyre?
                        </button>
                    </h2>
                    <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. If you want to know the fair price of your tractor which you want to sell then you have to also give the condition of your tyre because it affects the price.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        Que. Is BharatAgrimart's the right place to sell our tractor?
                        </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Yes, BharatAgrimart's is India's number one online platform where you get all brands tractors and their specifications. On BharatAgrimart's you can also sell your used tractor. From used tractor valuation you get fair price of your tractor and from that, you can easily sale your tractor online.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
?>
</body>
</html>

<script>
$(document).ready(function(){
    $('#tractor_valuation').prop('disabled', true);

    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
    }, "Please enter a valid mobile number starting with 6 or above");

    $('#tractor-valuation-form').validate({
        rules:{
            _brand:{
                required:true,
            },
            _model:{
                required: true,
             
            },
            eo_state:{
                required:true,
            },
            Owners:{
                required:true,
            },
            Manufacture:{
                required:true,
            },
            Tyre:{
                required:true,
            },
            f_name:{
                required:true,
            },
            m_number:{
                required:true,
                minlength: 10,
                maxlength: 10,
                digits: true,
                customPhoneNumber: true 
            }
        },
        messages:{
            _brand:{
                required:"This field is required",
            },
            _model:{
                required:"This field is required",
             
            },
            eo_state:{
                required:"This field is required",
            },
            Owners:{
                required:"This field is required",
            },
            Manufacture:{
                required:"This field is required",
            },
            Tyre:{
                required:"This field is required",
            },
            f_name:{
                required:"This field is required",
            },
            m_number:{
                required:"This field is required",
                minlength: "Phone Number must be exactly 10 digits",
                maxlength: "Phone Number must be exactly 10 digits",
                digits: "Please enter only digits"
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        success: function(label) {
            $('#tractor_valuation').prop('disabled', false);
        },
        submitHandler: function(form) {
            $('#get_valuation_btn').modal('show');
            return false; 
        }
    });

    $('#tractor_valuation').click(function() {
        var formValid = $('#tractor-valuation-form').valid();
        if (formValid) {
            $('#tractor-valuation-form').submit();
        }
    });
});
</script>
<script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', 
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
