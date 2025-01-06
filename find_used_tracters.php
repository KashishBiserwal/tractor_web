<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

    <?php
 include 'includes/headertag.php';
 include 'includes/headertagadmin.php';
 include 'includes/footertag.php';
   ?>
    <style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 20px;
    }
    body {
    overflow: auto !important;
}
    
    </style>

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
   <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/find_used_tractor.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>

    <section class=" bg-light mt-3 pt-5">
        <div class="container pt-5">
            <div class="py-2">
                <span class="my-4 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" text-dark text-decoration-none header-link  px-1">Buy Used <i
                                class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">Find Used Tractor</span>
                </span>
            </div>
        </div>
    </section>

    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h- "
                style="min-height: 360px; background-image: url(assets/images/tractor-valuation.jpg); background-position: center; background-size: cover;">
            </div>
        </div>
        <div class="page-banner-content text-center position-absolute  px-2"style="top:3%">
            <h2 class=" text-dark  ">Interested To <span class="text-success">Buy Old Tractor</span></h2>
            <h5 class="">Fill the form will contact you shortly</h4>
        </div>
    </section>
    <section class="form-view bg-white pb-4" id="section-1">
        <div class="container-mid" style="position: relative;" id="an">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <form id="find-used-tractor-form" method="POST" class="form-view-inner form-view-overlay bg-light shadow p-3"
                        action="" method="">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="fName">First Name</label>
                                    <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fName" name="fName" required />
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="lName">Last Name</label>
                                    <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lName" name="lName" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4" hidden>
                                <div class="form-outline">
                                    <label class="form-label" for="phone">Mobile Number</label>
                                    <input type="tel" class="form-control" id="enquiry_type_id" value="24" name="enquiry_type_id" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="phone">Mobile Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="state">State</label>
                                    <select class="form-select mb-2 state-dropdown" id="state" name="state" required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="district">District</label>
                                    <select class="form-select mb-2 district-dropdown" id="district" name="district" required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                <div class="form-outline">
                                    <label for="budget" class="form-label">Budget</label>
                                    <select class="form-select mb-2" name="budget" id="budget" required>
                                        <option value="" selected disabled>Select Amount</option>
                                        <option value="1 - 2">1 - 2</option>
                                        <option value="2 - 3">2 - 3</option>
                                        <option value="3 - 4">3 - 4</option>
                                        <option value="4 - 5">4 - 5</option>
                                        <option value="5 - 6">5 - 6</option>
                                        <option value="6 - 7">6 - 7</option>
                                        <option value="7 - 8">7 - 8</option>
                                        <option value="8 - 9">8 - 9</option>
                                        <option value="9 - 10">9 - 10</option>
                                        <option value="10 - 11">10 - 11</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="manufacture" class="form-label text-dark ">Manufacture Year</label>
                                <select id="choices-multiple-remove-button" placeholder="Select Manufacture Year" multiple>
                                </select>
                            </div>
                            <div class="container">
                                <div id="add_more">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="brand" class="form-label">Brand</label>
                                                <select class="form-select mb-2 brand_select" name="brand[]" id="multibrand"required>
                                                    <option selected disabled value="">Please select a brand</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="model" class="form-label">Model</label>
                                                <select class="form-select mb-2 model_select" name="model[]"id="multimodel" required>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="button" class="btn btn-outline-primary btn-sm add-more-btn">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button id="store" type="button" class="btn-success w-100 fw-bold " data-bs-toggle="modal" data-bs-target="#get_OTP_btn">Get OTP</button>
                            </div>
                            <p class="text-center mt-3">By proceeding ahead you expressly agree to the Bharat
                                Tractors
                                <a href="privacy_and_policy.php" class="text-decoration-none">Terms &
                                    Conditions*</a>
                            </p>
                        </div>
                </div>

                </form>
            </div>
        </div>
        </div>
    </section>
<section style="display: block;" id="section-2">
        <div class="container" >
            <div class="row my-3">
                <div id="productContainer" class="row">
                    <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                    <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                </div>
            </div>
        </div>
</section>
            
<section class="about bg-white mt-2 ">
  <div class="container">
    <div class="lecture_heading ">
      <h3 class="my-4 pt-5 text-center bg-light">TRACTORS BY BRAND</h3>
    </div>
    <div class="mt-4 pb-5">
      <div class="row allbrands" id="brandContainer">
      </div>
    </div>
  </div>
</section> 
    <section class="">
        <div class="container mt-4 ">
            <div class="col-12 assured mt-3">
                <h4 class="fw-bold p-2">Quick Links</h4>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                    <ul class="justify-content-center ul-box  ">
                        <li class=""> <a href="find_new_tractors.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors </p>
                            </a></li>
                        <li class=""> <a href="new_tractor_loan.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp;Finance </p>
                            </a></li>
                        <li class=""> <a href="popular_tractors.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                    <ul class="justify-content-center ul-box  ">
                        <li class=""> <a href="Insurance.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp;Insurance </p>
                            </a></li>
                        <li class=""> <a href="latest_tractor.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp;Latest Tractors</p>
                            </a></li>
                        <li class=""> <a href="compare_trac.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; Compare</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                    <ul class="justify-content-center ul-box  ">
                        <li class=""> <a href="upcoming_tractors.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p>
                            </a></li>
                        <li class=""> <a href="harvester.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; Harvester </p>
                            </a></li>
                        <li class=""> <a href="used_tractor.php" class="text-dark text-decoration-none">
                                <p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

     <!-- OPT Model -->
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
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
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
    

    <?php
    include 'includes/footer.php';

    ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var formContainer = document.getElementById('add_more');
    var addMoreBtn = document.querySelector('.add-more-btn');
    var maxClones = 2; // Set the maximum number of clones
    var cloneCount = 0; // Initialize clone count

    var initialBrandSelect = formContainer.querySelector('.brand_select');
    var initialModelSelect = formContainer.querySelector('.model_select');

    initialBrandSelect.addEventListener('change', function() {
        var selectedBrandId = this.value;
        get_model(selectedBrandId, initialModelSelect);
        initialModelSelect.disabled = false;
    });

    initialModelSelect.disabled = true;

    get_brands(initialBrandSelect);

    addMoreBtn.addEventListener('click', function() {
        if (cloneCount < maxClones) {
            var clonedFields = formContainer.firstElementChild.cloneNode(true);
            var selects = clonedFields.querySelectorAll('select');
            selects.forEach(function(select) {
                select.selectedIndex = 0;
            });

            formContainer.insertBefore(clonedFields, addMoreBtn.parentNode);

            cloneCount++;

            if (cloneCount === maxClones) {
                addMoreBtn.style.display = 'none';
            }

            var brandSelect = clonedFields.querySelector('.brand_select');
            var modelSelect = clonedFields.querySelector('.model_select');

            brandSelect.addEventListener('change', function() {
                var selectedBrandId = this.value;
                get_model(selectedBrandId, modelSelect);
                modelSelect.disabled = false;
            });

            modelSelect.disabled = true;

            get_brands(brandSelect);
        }
    });
});


    </script>


    <script>
    $(document).ready(function() {
       jQuery.validator.addMethod("indianMobile", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
        $('#find-used-tractor-form').validate({
            rules: {
                fName: {
                    required: true,
                    minlength: 2,
                },
                lName: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true, // Allow only digits
                    indianMobile: true,
                },
                state: "required",
                district: "required",
                brand: "required",
                model: "required",
            },

            submitHandler: function(form) {
                form.submit();
            }
        });


        $('#multiple-select-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
        });
    });
</script>


    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
 document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.getElementById('choices-multiple-remove-button');

    var choices = new Choices(selectElement, {
        placeholder: true,
        placeholderValue: 'Select Manufacture Year',
        searchEnabled: true,
        searchChoices: true,
        removeItemButton: true,
        itemSelectText: '',
    });

    // Manually show the dropdown on click
    selectElement.addEventListener('click', function() {
        choices.showDropdown();
    });
});
</script>
<script>
    $(document).ready(function() {
    $("#PING_IFRAME_FORM_DETECTION").remove();
    
    $(".modal-backdrop.fade.show").remove();
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
</html>
