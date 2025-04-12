<html lang="en">
<?php
include 'includes/headertag.php';
include 'includes/footertag.php';
// include 'includes/categorySidebar.php';
include 'includes/headertagadmin.php';
include 'includes/spinner.php';
?>
<script>
    var APIBaseURL = "<?php echo $APIBaseURL; ?>";
</script>
<script>
    var baseUrl = "<?php echo $baseUrl; ?>";
</script>
<script src="<?php $baseUrl; ?>model/used_tractor_new.js" defer></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-6Z38E658LD');
</script>

<body>
    <style>
         .mainContainer{
        margin-top: 12rem;
    }
        .buttonn {
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
        .mainContainer {
            margin-top: 8rem;
        }

    }
    </style>
    <?php
    include 'includes/header.php';
    ?>
    <!-- <section class="mt-3 pt-5 bg-light">
        <div class="container py-2">
            <div class="mt-5">
                <span class="mt-4 text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" text-decoration-none text-dark px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">Used Tractor</span>
                </span>
            </div>
        </div>
    </section> -->
 
    <section class="mainContainer">
        <div class="mt-5 my-4" style="max-width: 95%; width: auto; margin: auto;">

            <button class="btn buttonn d-md-none mb-3" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i> Menu
            </button>

            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 d-none d-md-block" id="sidebarMenu">
                    <div class="mb-4">
                        <?php include 'includes/categorySidebar.php'; ?>
                    </div>
                </div>

                <div class="col-12 col-md-7">
                    <h3 class="d-flex justify-content-center gap-2 pb-3">Used <span class="fw-bold" style="color: #B90405">TRACTORS</span> </h3>
                    <div id="productContainer" class="row "></div>
                    <div class="col-12 text-center">
                        <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                            <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!
                        </h5>
                        <button type="button" id="loadMoreBtn" class="btn buttonn">Load More</button>
                    </div>
                </div>
                

                <!-- Mobile Sidebar (offcanvas-style) -->
                <div id="mobileSidebar" class="d-md-none" style="display: none; position: fixed; top: 16%; left: 0; width: 100%; height: 100vh;  background: white; padding: 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.2); overflow-y: auto;">
                    <button class="btn btn-danger mb-3" onclick="toggleSidebar()">Close</button>
                    <?php include 'includes/categorySidebar.php'; ?>
                </div>

                <!-- Mobile Sidebar (offcanvas-style) -->
                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-sm-6 p-2">
                                    <button type="button" onclick="resetform()" class="btn buttonn">
                                        <i class="fas fa-undo"></i> Reset
                                    </button>
                                </div>
                                <div class="col-6 col-sm-6 p-2">
                                    <button type="button" id="filter_tractor" class="btn buttonn w-100">
                                        <i class="fas fa-filter"></i> Apply Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <div class="price py-2 w-100">
                                <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3" /><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6" /><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9" /><span class="ps-2 fs-6"> 6 Lakh - 9 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="9 - 12" /><span class="ps-2 fs-6"> 9 Lakh - 12 Lakh</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                            <div class="HP py-2 w-100" id="state_state" style=" height: 140px;"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="district_container">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2 w-100" id="get_dist" style=" height: 140px;"></div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="my-2">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Year</h5>
                            <div class="HP py-2 w-100" id="P_year"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('mobileSidebar');
            sidebar.style.display = sidebar.style.display === 'none' || sidebar.style.display === '' ? 'block' : 'none';
        }
    </script>
    <script>
        $(document).ready(function() {
            console.log('testing');
            $('#contact-seller-call').validate({
                rules: {
                    fname: {
                        required: true,
                    },
                    lname: {
                        required: true,
                    },
                    number: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                    district: {
                        required: true,
                    },
                    badget: {
                        required: true,
                    },
                    Tehsil: {
                        required: true,
                    }
                },
                messages: {
                    fname: {
                        required: "This field is required",
                    },
                    lname: {
                        required: "This field is required",
                    },
                    number: {
                        required: "This field is required",
                    },
                    state: {
                        required: "This field is required",
                    },
                    district: {
                        required: "This field is required",
                    },
                    badget: {
                        required: "This field is required",
                    },
                    Tehsil: {
                        required: "This field is required",
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
                includedLanguages: 'en,hi,bn,mr,pa,or,te,ta,ml',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>

</html>