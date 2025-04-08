<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/headertag.php';
    include 'includes/footertag.php';
    include 'includes/headertagadmin.php';
    ?>

</head>
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
<style>
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

    .buttonn:hover {
        background-color: #fff;
        color: #B90405;
        border: 1px solid #B90405;
    }

    .text-truncate {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;

    }

    label.error {
        color: red;
        font-size: 12px;
        display: block;
        margin-top: 5px;
    }
</style>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <script>
        var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";
    </script>
    <script>
        var baseUrl = "<?php echo $baseUrl; ?>";
    </script>
    <script src="<?php $baseUrl; ?>model/certified_dealers.js" defer></script>
    <script src="<?php $baseUrl; ?>model/state2_dist2.js"></script>
    <section class="bg-light pt-2 ">
        <div class="container mt-4 pt-4">
            <div class="mt-5 py-2">
                <span class="">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="px-1 text-dark">Certified Dealers</span></span>
                </span>
            </div>
        </div>
    </section>


    <!-- FORM -->
<!-- FORM -->
<section class="form-view position-relative" id="section-1" style="min-height: 300px;">
  <!-- Background Image -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="
    background-image: url('assets/images/tractordealerqqqqq.webp');
    background-size: cover;
    background-position: center;
    z-index: 1;">
  </div>

  <!-- Centered Form -->
  <div class="container h-100 d-flex justify-content-center align-items-center" style="position: relative; z-index: 2;">
    <div class="row w-100 mt-5">
      <div class="col-12 col-md-10 col-lg-8 mx-auto">
        <form id="certified_dealer_from" class="bg-light p-4 rounded shadow ">
          <div class="row justify-content-center g-3">
            <div class="col-12 col-md-4 mt-2">
              <label for="_brand" class="form-label fw-bold text-dark">Brand</label>
              <select class="form-select form-select-sm" id="b_brand" name="_brand"></select>
            </div>
            <div class="col-12 col-md-4 mt-2">
              <label for="_state" class="form-label fw-bold text-dark">State</label>
              <select class="form-select form-select-sm state_select" id="_state" name="_state"></select>
            </div>
            <div class="col-12 col-md-4 mt-2">
              <label for="_district" class="form-label fw-bold text-dark">District</label>
              <select class="form-select form-select-sm district_select" id="_district" name="_district"></select>
            </div>
            <div class="col-12 mt-3">
              <div class="row g-2">
                <div class="col-12 col-sm-4">
                  <button type="button" id="dealership_enq_btn" class="btn buttonn w-100" onclick="searchdata()">Search Dealer</button>
                </div>
                <div class="col-12 col-sm-5">
                  <a href="become_certified.php" class="btn buttonn w-100">Become Certified Dealer</a>
                </div>
                <div class="col-12 col-sm-3">
                  <button type="button" id="Reset" class="btn w-100 buttonn" onclick="resetform()">
                    <i class="fas fa-undo"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>




    <section id="section-2">
        <div class="container mt-5" style="float:start;">
            <h3 class="">Recent Certified Dealers</h3>
            <div id="productContainer" class="row "></div>
            <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!
            </h5>
            <div class="col-12 text-center mb-4">
                <button id="load_moretract" type="button" class=" buttonn btn">
                    <i class="fas fa-undo"></i> Load More </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Find tractor dealers near you</p>
                <p class="justify-content-center">Bharat Tractor is India’s leading digital platform for all kinds of Tractor related services be it buying, selling, financing, insuring or servicing the machine we serve you all. Bharat Tractor, in order to meet your expectations and needs strive hard in order to get more resources on-board for your betterment. One such feature we offer you is to find best and certified dealers for your desired activity. Finding a dealer we know can be very messy sometimes but we assure you ease through our highly selective database. Find best dealers in your locality and get a list of all the dealers in your proximity. We believe in making the tasks of buying and selling tractors easy for you and hassle free. When it is with us, it is assured, it is guaranteed and it is safe. Bharat Tractor brings to you the best after scrutinizing the companies, brands, models and dealers through our integrated process of selection</p>
                <p class="justify-content-center">We offer you a hassle-free process to buy tractor dealerships in India. You just need to fill up the above form asking for basic details like name, tractor brand preferences, state, district, etc. We will help you identify the right steps to start your new tractor dealerships. We will help you with pre and post-opening & product support, prepare a marketing and advertising plan & even provide assistance on gathering resources for ideal site selection, followed by quality control parameters. For any further Tractor dealership enquiry, reach us.</p>
            </div>
        </div>
    </section>

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
    ?>
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
</body>

</html>