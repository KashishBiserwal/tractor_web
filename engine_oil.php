<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'includes/headertag.php';
            include 'includes/header.php';
            include 'includes/footertag.php';
            include 'includes/spinner.php';
        ?>
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
  
<script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/engineoil.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<style>
  .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
</style>

<section class="mt-4 pt-5 bg-light">
    <div class="container mt-5 pt-4">
        <div class="">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
            </span>
            <span class="text-dark">Engine Oil</span>
            </span> 
        </div>
    </div>
  </section>

    <section class="">
      <div class="container">       
        <div class="row py-1 mb-3">
          <h1 class="mt-2 mb-3">Engine Oil</h1>
          <div id="productContainer" class="row"></div>
          <div class="col text-center mt-3">
            <button id="load_moretract" type="button" class=" btn add_btn btn-success p-2"><i class="fas fa-undo"></i>View All</button>
          </div>
                            
        </div>
      </div>
    </section>

    <?php
       
        include 'includes/footer.php';
       
    ?>
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
  <script>
   /*  $(document).ready(function(){
      jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
      }, "Phone number must start with 6 or above");
      $("#engine_oil_btn").click(function () {
        // setTimeout(() => {
        //     console.log("validation of Department")
        // }, 2000);
        $("form[id='engine_oil_form']").validate({
          rules: {
            f_name: {
              required: true,
              minlength: 3
            },
            eo_name: {
              required: true,
              minlength: 3
            },
            eo_number: {
              required: true,
              minlength: 10,
              maxlength: 10,
              digits: true,
              customPhoneNumber: true 
            },
            eo_state: {
              required: true,
              // minlength: 3
            },
            eo_dist: {
              required: true,
              // minlength: 3
            }
          },
          messages: {
            f_name: {
              required: "Enter Your First Name",
              minlength: "First Name must be atleast 3 characters long"
            },
            eo_name: {
              required: "Enter Your Last Name",
              minlength: "Last Name must be atleast 3 characters long"
            },
            eo_number: {
              required: "Enter Your Phone Number",
              minlength: "Phone Number must be of 10 Digit",
              maxlength: "Ensure exactly 10 digits of Mobile No.",
              digits: "Please enter only digits"
            },
            eo_state: {
              required: "Select Your State",
              // minlength: "First Name must be atleast 3 characters long"
            },
            // eo_tehsil: {
              //     required: "Select Your Tehsil",
              //     // minlength: "First Name must be atleast 3 characters long"
              // },
            eo_dist: {
              required: "Select Your District",
              // minlength: "First Name must be atleast 3 characters long"
            }                        
          },
        });
      })
    }); */
  </script>

</body>
</html>