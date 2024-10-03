<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/spinner.php';
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/hatbazar_buy_customerlist.js"></script>
  

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
    .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
    </style>
<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class=" bg-light mt-5 pt-5">
        <div class="container pt-5">
            <div class="mt-4">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark px-1">Haatbazar<i class="fa-solid fa-chevron-right px-1"></i>
                        </span></span>
                    <span class="text-dark">Buy</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-4">
                <div class="row">
                    <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                        <h3 class="py-2">Buy Your Item From <span class="text-success fw-bold">Haatbazar</span> </h3>
                        <div class="row my-3">
                            <div class="row my-4" id="productContainer"></div>
                                <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                            <div class="col-12 text-center mb-4">
                                <button class="btn btn-success btn-lg" id="load_more">Load more</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                        <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="row text-center">
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="resetButton" type="button" onclick="resetform()" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-6 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="apply_filter_bnt" type="button" class="add_btn btn btn-success w-75">
                                        <i class="fas fa-filter"></i> Apply Filter</button>
                                </div>
                            </div>
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
                    <div class="scrollbar mb-3" id="category_filter">
                             <div class="force-overflow">
                                <h5 class="ps-1 text-dark fw-bold pt-2">Search By category</h5>
                                <div class="HP py-2" id="checkboxContainercategory"></div>
                            </div>
                        </div>
                    <div class="scrollbar mb-3" id="Sub_category_filter">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Sub category</h5>
                            <div class="HP py-2" id="sub_cateory_checkbox"></div>
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
    </script>
    <script>
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({
 pageLanguage: 'en',
 autoDisplay: 'true',
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>

</html>