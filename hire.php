<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'includes/headertag.php';
    include 'includes/footertag.php';
    include 'includes/headertagadmin.php';
    include 'includes/spinner.php';
?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/hire_customer.js" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-6Z38E658LD');
</script>
<style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 23px;
    }
    label.error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }
    .custom-font-size {
        font-size: 10.3px;
    }
</style>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <section class="mt-3 pt-5 bg-light">
        <div class="container py-2">
            <div class="mt-4 pt-4">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark">Hire Tractor</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h2 class="pb-3 fw-bold">Search<span class="text-success fw-bold"> Rental Tractors In INDIA</span></h2>
                    <div class="row" id="productContainer"></div>
                        <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                        <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                    <div class="col-12 text-center mt-3 pt-2 ">
                        <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow"><i class="fas fa-undo"></i>  Load More Tractor </button>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class="row mb-3" id="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-sm-6 p-2">
                                    <button onclick="resetform()" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-6 col-sm-6 p-2">
                                    <button id="filter_tractor"  type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>  Apply Filter </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id=" my-2">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                            <div class="HP py-2 w-100" id="state_state" style=" height: 78px;">
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="district_container">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2 w-100" id="get_dist">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4">
        <div class="container my-5">
            <h3 class="fw-bold assured px-3 py-2">Rent Tractors in India</h3>
            <div class="" role="alert">
                <p class="text-dark py-4 ">Many Farmers hire tractor in India for their farming work. KhetiGaadi
                    provides many tractors which can be hired and farmers can complete their work on time without any
                    delay. Hiring tractors is a common practice in India. Farmers can hire tractors from large number of
                    tractors listed on KhetiGaadi. Farmers can rent a tractor as per the requirement from given list of
                    used tractors of many brands like Mahindra tractor on rent, Mahindra 575 tractor on rent, John Deere
                    tractor on rent, Kubota tractor on rent, New Holland tractor on rent, Swaraj Tractor on rent at
                    suitable tractor rent price. KhetiGaadi provides a feature of hiring a tractor nearby his
                    requirement and save time, money and energy.
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2">Quick Links</h4>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=3 Lakh Below" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR PRICE
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="find_new_tractors.php" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR
                    </a>
                </div>
                 <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="harvester.php" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>HARVESTERS
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="used_tractor.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>SECOND HAND TRACTOR
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="new_tractor_loan.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>EASY FINANCE
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="dealership_enq.php" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>DEALERSHIP
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'includes/footer.php';
    ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
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
                    indianMobile: true, 
                },
                state: "required",
                district: "required",
            }
        });
        $('#button_hire').on('click', function() {
            $('#hire_inner').valid();
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
