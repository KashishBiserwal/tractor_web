<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/footertag.php';
     
        include 'includes/headertagadmin.php';
        include 'includes/spinner.php';
    ?>

<style>
    .buttonn{
        background-color: #B90405;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }
    label.error {
        color: red;
        font-size: 12px;
        display: block;
        margin-top: 5px;
    }
    .text-truncate {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    @media (max-width: 768px) {
    .mt-5 {
        margin-top: 10px !important;
    }
    .container {
        padding: 0 15px;
    }
    
}
   </style>


   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/nursery_ui.js" defer></script>
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
    <section class=" pt-5 bg-light" style="margin-top: 5rem;">
    <div class="container mt-4">
        
    </div>

</section>
    <section>
        <div class="mt-5 my-4" style="max-width: 95%; width: auto;">
               <!-- Toggle button for mobile -->
            <button class="btn buttonn d-md-none mb-3" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> Menu
            </button>

            <div class="row" style="margin-left: auto;">
                <!-- Sidebar -->
                <div class="col-md-2 d-none d-md-block" id="sidebarMenu">
                    <div class="mb-4">
                        <?php include 'includes/categorySidebar.php'; ?>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <!-- <h3 class="py-2  fw-bold">Locate <span class="text-success fw-bold"> Nurseries </span>Near You</h3> -->
                    <h3 class="d-flex justify-content-center gap-2 pb-3">Locate  Nurseries <span class="fw-bold" style="color: #B90405">NEAR YOU</span> </h3>
                    <div id="productContainer" class="row"></div>
                        <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                        <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                    <div class="col-12 text-center mb-4 pt-2">
                        <button id="loadMoreBtn"  type="button" class="btn  buttonn "><i class="fas fa-undo"></i> Load More </button>
                    </div>
                </div>
                <!-- Mobile Sidebar (offcanvas-style) -->
                <div id="mobileSidebar" class="d-md-none" style="display: none; position: fixed; top: 16%; left: 0; width: 100%; height: 100vh;  background: white; padding: 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.2); overflow-y: auto;">
                    <button class="btn btn-danger mb-3" onclick="toggleSidebar()">Close</button>
                    <?php include 'includes/categorySidebar.php'; ?>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3 ">
                    <div class=" row mb-3 text-center" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" onclick="resetform()" class="btn buttonn"><i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="filter_button" type="button" class="buttonn btn"><i class="fas fa-filter"></i> Apply Filter </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                            <div class="HP py-2" id="state_state" style=" height: 120px;"></div>
                       </div>
                    </div>
                    <div class="scrollbar mb-3" id="district_container">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2" id="get_dist"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    ?>

<script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.style.display = sidebar.style.display === 'none' || sidebar.style.display === '' ? 'block' : 'none';
        }
    </script>

    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("#hire_inner").validate({
            rules: {
                first_name: {
                    required: true,
                    minlength: 2, 
                },
                last_name:{
                    required: true,
                    minlength: 2,   
                },
                mobile_number: {
                    required: true,
                    digits: true, 
                    indianMobile: true, 
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
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', 
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
</html>