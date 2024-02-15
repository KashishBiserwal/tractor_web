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
    <script src="<?php $baseUrl; ?>model/onroad.js"></script>
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class=" mt-5 pt-5 bg-light">
    <div class="container pt-3">
        <div class="py-2">
            <span class="text-white ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark header-link  px-1">Enquiries<i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">On-Road Price</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <!-- in mobile remove the clippath -->
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/on-road-price.jpg); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
        <h1>Get on road price</h1>
        <p>Please fill the form to Get on road price</p>
        </div>
</section>

<section class="form-view bg-white pb-4">
  <div class="container-mid">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-7">
        <form id="tractor_submit_form" method="POST" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" novalidate="novalidate">
            <div class="row justify-content-center">
            <div class="col- col-sm-6 col-lg-6 col-md-6" hidden>
                    <label class="text-dark"> enquiry<span class="text-danger">*</span></label>
                        <input type="text" class="form-control py-2" for=""  id="enquiry_type_id" value="20" name="first_name" placeholder="Enter First Name">
                    <small></small>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                    <div class=" form-outline mt-5">
                        <label class="form-label text-dark">Brand</label>
                        <select class="form-select" name="brand" id="brand" onchange="getModel(this.value)" required="">
                           
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                    <div class=" form-outline mt-5">
                        <label class="form-label text-dark">Model</label>
                        <select class="form-select" name="model" id="model_1" required="">
                        </select>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                    <div class="form-outline mt-2">
                        <label class="form-label text-dark">First Name</label>
                        <input type="text" id="first_name" placeholder="Enter Name" name="first_name" class=" search form-control input-group-sm" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                    <div class="form-outline mt-2">
                        <label class="form-label text-dark">Last Name</label>
                        <input type="text" id="last_name" placeholder="Enter Name" name="last_name" class=" search form-control input-group-sm" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                    <div class="form-outline mt-2">
                        <label class="form-label text-dark">Mobile Number</label>
                        <input type="text" id="mobile_no" placeholder="Enter Number"  name="mobile_no" class=" search form-control input-group-sm" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class=" form-outline mt-2">
                    <label class="form-label text-dark">State</label>
                        <select class="form-select" name="state" id="state"  required="" onchange="getDistricts(this.value)">
                           
                        </select>
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class=" form-outline mt-2">
                    <label class="form-label text-dark">District</label>
                        <select class="form-select" name="district" id="district"  required="">
                     
                        </select>
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="form-outline mt-2">
                        <label class="form-label text-dark">Tehsil </label>
                        <select class="form-select" name="tehsil" id="tehsil"  required="">
                        
                          
                        </select>
                    </div>
                </div> 
                <div class="col-12 mt-3">
                    <button class="tractor_submit form-submit-btn  text-white bg-success w-100 px-3 mt-2 mb-3" id="get_on_road" type="submit">CHECK ON ROAD PRICE</button>
                </div>
                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="bg-light">
    <div class="container mb-4">
        <div class="old_tracter py-3 ">
            <h3 class="fw-bold mt-3">Featured Brands</h3>
        </div>
        <div class="row mt-3 ps-5 py-4 justify-content-center m-0">
            <div class="col-12 col-md-3 col-lg-3 col-sm-3 ">
                <div class="tjcol states-block rounded-3">
                    <div class="brand-main shadow my-2 text-center ">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/mahindra-1673872647.webp" data-src="h" alt="Sonalika Brand Logo">
                        <p class="mb-0 oneline">Mahindra</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3 ">
                <div class="tjcol states-block rounded-3">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/swaraj-1608095532.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Swaraj</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img  class="img-fluid w-50" src="assets/images/sonalika.png" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Sonalika</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/massey-ferguson-1579512590.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">massey ferguson</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/eicher-1608095225.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Eicher</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/farmtrac-1579511831.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Farmtrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/john-deere-1579511882.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">john-deere</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/powertrac-1579511958-2.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Powertrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/new-holland-1579511945.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">New-holland</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/kubota-1579512571.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Kubota</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/escort-1579512292.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Escort</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/vst-shakti-1623048840.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">VST</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/a-c-e-1579511768.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">ACE</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/same-deutz-fahr-1579511987.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Same Deutz Fahr</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/preet-1579511971.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Preet</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main shadow my-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/ford.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Ford</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">More About Tractor Price</h4>
        </div>

        <div>
            <p class="mt-3">Bharat Tractor  presents to you the ease of buying a tractor and the other required implements with clicks of fingers. Best in Class tractors now do not need deep and engrossed research, the revolution of the tractor industry has come. On Road Price section brings to you the details about the pricing and the related queries at your ease, all you need to do is fill up the enquiry, submitting the enquiry will lead you to procuring the privilege of being personally handled and served by our friendly and knowledgeable customer care executives. </p>
        </div>
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Get New Tractor On Road Price</h4>
        </div>

        <div>
            <p class="mt-3">Bharat Tractor cares for you, and we know how keen you know the tractor price on road of your selected tractor. We came up with this easy solution, here on this separate page “Tractor On Road Price” you get the on road tractor price in just a few steps. We are following explaining steps to get a new tractor on road price for your comfort.  </p>
            <p class="mt-2">At Bharat Tractor, you can easily find the “Tractor On Road Price '' page. You have to fill the given form like your tractor brand, tractor model no., your name, mobile no., state district, and tehsil. After that, you have to click on the check on road price.</p>
        </div>
    </div>
    
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>


<script>
  $(document).ready(function () {
    // Custom method for phone number validation
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
      return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");

    // Validate hatbazar form
    $("#tractor_submit_form").validate({
      rules: {
        first_name: {
          required: true,
        },
        last_name: {
          required: true,
        },
        mobile_no: {
          required: true,
          minlength: 10,
          maxlength: 10,
          digits: true,
          customPhoneNumber: true
        },
        state: {
          required: true,
        },
        district: {
          required: true,
        }
      },
      messages: {
        first_name: {
          required: "This field is required",
        },
        last_name: {
          required: "This field is required",
        },
        mobile_no: {
          required: "This field is required",
          minlength: "Phone Number must be 10 digits long",
          maxlength: "Phone Number must be 10 digits long",
          digits: "Please enter only digits"
        },
        state: {
          required: "This field is required",
        },
        district: {
          required: "This field is required",
        }
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      }
    });

    // On click event for submit button
    $("#get_on_road").on("click", function () {
      // Check if tractor_submit_form is valid
      if ($("#tractor_submit_form").valid()) {
        alert("Form is valid. Ready to submit!");
      }
    });
  });
</script>

    </html>