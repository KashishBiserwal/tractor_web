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
  <script src="<?php $baseUrl; ?>model/onroad.js" defer></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
<style>
  .page-banner-content-size
  {
    position: fixed;
    content: "";
    left: 0;
    top: 3% !important;
    width: 100%;
  }
</style>
<body>
   <?php
    include 'includes/header.php';
   ?>
  <section class=" mt-5 pt-5 bg-light">
    <div class="container pt-4 mt-2">
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
      <div class="col-12 h-100 " loading="lazy" style="min-height: 360px; background-image: url(assets/images/on-road-price.jpg); background-position: center; background-size: cover;">
      </div>
    </div>
    <div class="page-banner-content-size text-center position-absolute px-2 pb-2">
      <h1>Get on road price</h1>
      <p>Please fill the form to Get on road price</p>
    </div>
  </section>
  <section class="form-view bg-white pb-4 mt-3">
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
                  <label for="brand" class="form-label text-dark">Brand</label>
                  <select class="form-select" name="brand" id="brand" onchange="getModel(this.value)" required="">
                  </select>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6  ">
                <div class=" form-outline mt-5">
                  <label for="model_1" class="form-label text-dark">Model</label>
                  <select class="form-select" name="model" id="model_1" required="">
                  </select>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                <div class="form-outline mt-2">
                  <label for="first_name" class="form-label text-dark">First Name</label>
                  <input type="text" id="first_name" placeholder="Enter Name" name="first_name" class=" search form-control input-group-sm" />
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                <div class="form-outline mt-2">
                  <label for="last_name" class="form-label text-dark">Last Name</label>
                  <input type="text" id="last_name" placeholder="Enter Name" name="last_name" class=" search form-control input-group-sm" />
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2 ">
                <div class="form-outline mt-2">
                  <label for="mobile_no" class="form-label text-dark">Mobile Number</label>
                  <input type="text" id="mobile_no" placeholder="Enter Number"  name="mobile_no" class=" search form-control input-group-sm" />
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                <div class=" form-outline mt-2">
                  <label for="state" class="form-label text-dark">State</label>
                  <select class="form-select" name="state" id="state" required="" onchange="getDistricts(this.value)">
                  </select>
                  <span class="text-danger"></span>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                <div class=" form-outline mt-2">
                  <label for="district" class="form-label text-dark">District</label>
                  <select class="form-select" name="district" id="district"  required="">
                  </select>
                  <span class="text-danger"></span>
                 </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                <div class="form-outline mt-2">
                  <label for="tehsil" class="form-label text-dark">Tehsil </label>
                  <select class="form-select" name="tehsil" id="tehsil"  required="">
                  </select>
                </div>
              </div> 
              <div class="col-12 mt-3">
                <button class="tractor_submit form-submit-btn  text-white bg-success w-100 px-3 mt-2 mb-3" id="get_on_road" type="submit">CHECK ON ROAD PRICE</button>
              </div>
              <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Agrimart's <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="about bg-white mt-2 ">
    <div class="container">
      <div class="lecture_heading ">
        <h3 class="my-4 pt-5">Featured Brands</h3>
      </div>
      <div class="mt-4 pb-5">
        <div class="row allbrands" id="brandContainer">
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
        <p class="mt-3">Bharat Agrimart's presents to you the ease of buying a tractor and the other required implements with clicks of fingers.
          Best in Class tractors now do not need deep and engrossed research, the revolution of the tractor industry has come.
          On Road Price section brings to you the details about the pricing and the related queries at your ease, all you need to do is fill up the enquiry,
          submitting the enquiry will lead you to procuring the privilege of being personally handled and served by our friendly and knowledgeable customer care executives. </p>
      </div>
      <div class="col-12 assured mt-3">
        <h4 class="fw-bold p-2">Get New Tractor On Road Price</h4>
      </div>
      <div>
        <p class="mt-3">Bharat Agrimart's cares for you, and we know how keen you know the tractor price on road of your selected tractor.
          We came up with this easy solution, here on this separate page “Tractor On Road Price” you get the on road tractor price in just a few steps.
          We are following explaining steps to get a new tractor on road price for your comfort.  
        </p>
        <p class="mt-2">At Bharat Agrimart's, you can easily find the “Tractor On Road Price '' page.
          You have to fill the given form like your tractor brand, tractor model no., your name, mobile no.,
          state district, and tehsil. After that, you have to click on the check on road price.
        </p>
      </div>
    </div>
  </section>

<?php
  include 'includes/footer.php';
  include 'includes/footertag.php';
?>
<script>
  $(document).ready(function () {
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
      return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");

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
    $("#get_on_road").on("click", function () {
      if ($("#tractor_submit_form").valid()) {
        alert("Form is valid. Ready to submit!");
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
</html>