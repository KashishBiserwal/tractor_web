
<!DOCTYPE html>
<html lang="en">
    <?php
        include 'includes/headertag.php';
        include 'includes/footertag.php';
        include 'includes/headertagadmin.php';
        include 'includes/spinner.php';
    ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/mahindra_brand.js" defer></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

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
   @media (max-width: 768px) {
        .mt-5 {
            margin-top: 15px !important; 
        }
    }
</style>

    <?php
        include 'includes/header.php';
    ?>
<body>
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="mt-5">
                <span class="mt-4 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-decoration-none text-dark px-1" id="brand_section">Brand <i class="fa-solid fa-chevron-right px-1"></i></span>
                    <span class=" text-danger" id="separated_brand"></span> <!-- Corrected ID -->
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid mt-4">
            <div class="mt-5 bg-light" style="float:start;">
                <div id="productContainer" class="row "></div>
                <div class="col-12 text-center mb-4">
                    <button id="load_moretract"  type="button" class="add_btn btn-success btn btn-lg">
                    <i class="fas fa-undo"></i>  Load More tractors
                    </button>
                </div>
            </div>
        </div>
    </section>
        <!-- used tractor -->
    <section>
        <div class="container-fullwidth mt-4">
            <div class="m-2 mt-5" style="float:start;">
                <div id="used_tractor"></div>
                <div id="productContainer2" class="row "></div>
                <div class="col-12 text-center mb-4">
                    <button id="view_all_used_tractor"  type="button" class="add_btn btn-success btn btn-lg">
                        <i class="fas fa-undo"></i> View All Used Tractors
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--  Mahindra Tractor Dealers & Service Centers-->
    <section>
        <div class="container-fullwidth mt-4">
            <h3 class=" my-4 text-uppercase ">Tractor Dealers</h3>
            <div class="container mt-5 bg-light" style="float:start;">
                <div id="productContainer_dealer" class="row "></div>
                <div class="col-12 text-center mb-4">
                    <a href="certified_dealers.php">
                        <button id="load_moretract"  type="button" class="add_btn btn-success btn btn-lg p-2">
                            <i class="fas fa-undo"></i>View All
                        </button>
                    </a>
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
    includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', 
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
    }, 'google_translate_element');
    }
</script>
</html>