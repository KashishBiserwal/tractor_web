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
   <script> var baseUrl = "<?php echo $baseUrl;?>";</script>
   <script src="<?php $baseUrl; ?>model/min_trac.js" defer></script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6Z38E658LD');
</script>
<style>
    @media (max-width: 768px) {
        .mt-5 {
            margin-top: 20px !important; 
        }
    }
</style>
<body>
   <?php
    include 'includes/header.php';
   ?>
<section class="mt-5 pt-3">
    <div class="container pt-2">
        <div class="mt-5  pt-3">
            <span class="mt-5 text-white pt-5 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark">  Mini Tractors</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="pb-3">Mini <span class="text-success fw-bold">Tractors in India</span></h3>
                <div class="row" id="productContainer"> </div>
                <div class="col-12 text-center mt-3 pt-2 ">
                   <button id="load_moretract" type="button" class=" btn add_btn btn-success p-1">
                        <i class="fas fa-undo"></i>  Load More tractors
                    </button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 p-2">
                                <button id="adduser" type="button" class=" btn add_btn btn-success w-100">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                            <div class="col-6 col-sm-6 p-2">
                                <button id="adduser" type="button" class=" btn add_btn btn-success w-100">
                                <i class="fas fa-filter"></i>  Apply Filter </button>
                           </div>
                        </div>
                    </div>
                </div>
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 w-100">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 5 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 5 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 6 Lakh - 7 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 7 Lakh - 9 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2 w-100"> 
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="0 - 20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="21 - 30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="31 - 40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="41 - 50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="51 - 60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="61 - 70"/><span class="ps-2 fs-6">61 HP - 75 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="71 - 80"/><span class="ps-2 fs-6">Above 75 Hp </span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                        <div class="HP py-2 w-100" id="checkboxContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="my-4">
    <div class="container my-5">
        <h3 class="fw-bold assured px-3 py-2">Mini Tractor Price List 2023</h3>
        <div class="" role="alert">
            <p class="text-dark py-3" id="description"></p>
        </div>
        <table class="table table-striped my-3">
            <thead class="">
                <tr class="py-3">
                    <th scope="col">Mini Tractors</th>
                    <th scope="col">Small Tractors HP</th>
                    <th scope="col">Mini Tractors Price</th>
                </tr>
            </thead>
            <tbody id="tableData">
            </tbody>
        </table>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="old_tracter py-3 text-center">
            <h3 class="fw-bold mt-3">Old Tractors By Brand</h3>
        </div>
        <div class="row mt-3 ps-5 justify-content-center m-0" id="brandcontainer">
        </div>
    </div>
</section>
    <section>
        <div class="container mt-4"> 
            <h3 class="fw-bold assured px-3 ">Tractors By HP</h3>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=0 - 20" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>UNDER 20 HP
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=21 - 30" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>21-30 HP
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=31 - 40" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>31-40 HP
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=41 - 45" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>41-45 HP
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=46 - 50" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>46-50 HP
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_hp.php?hp=51 - 60" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>51-60 HP
                    </a>
                </div>
            </div>
        </div>
        <div class="container"> 
            <h3 class="fw-bold assured px-3">Tractors By Price</h3>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=3 Lakh Below" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>UNDER 3 LAKH
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=3-5" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>3-5 LAKH
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=5-7" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>5-7 LAKH
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=7-10" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>7-10 LAKH
                    </a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="tractor_by_budget.php?budget=11 Lakh Above" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>ABOVE 10 LAKH
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
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