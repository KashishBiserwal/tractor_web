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
<script src="<?php $baseUrl; ?>model/popular.js" defer></script>
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
    <section class="mt-5 pt-4 bg-light">
        <div class="container  ">
            <div class="mt-5 pt-3">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark"> Popular Tractor</span>
                </span> 
            </div>
        </div>
    </section>
    <section>
        <div class="container my-4">
            <div class="row">
                <!-- Product Section -->
                <div class="col-12 col-md-9">
                    <h3 class="pb-3">Popular <span class="text-success fw-bold">Tractors in India</span></h3>
                    <div id="productContainer" class="row"></div>
                    <div class="col-12 text-center mt-3 pt-2">
                        <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                        <img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!
                        </h5>
                        <button id="load_moretract" type="button" class="btn add_btn btn-success p-1">
                            <i class="fas fa-undo"></i> Load More tractors
                        </button>
                    </div>
                </div>
                <!-- Filters Section -->
                <div class="col-12 col-md-3">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="row">
                                <!-- Reset Button -->
                                <div class="col-6 col-sm-6 p-2">
                                    <button type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                        <i class="fas fa-undo"></i> Reset
                                    </button>
                                </div>
                                <!-- Apply Filter Button -->
                                <div class="col-6 col-sm-6 p-2">
                                    <button id="filter_tractor" type="button" class="btn add_btn btn-success w-100">
                                        <i class="fas fa-filter"></i> Apply Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Budget Filters -->
                    <div class="mb-3">
                        <div class="force-overflow">
                            <div class="price py-2 w-100">
                                <h5 class="ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3" />
                                <span class="ps-2 fs-6">0 Lakh - 3 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6" />
                                <span class="ps-2 fs-6">3 Lakh - 5 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9" />
                                <span class="ps-2 fs-6">5 Lakh - 6 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9" />
                                <span class="ps-2 fs-6">6 Lakh - 7 Lakh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9" />
                                <span class="ps-2 fs-6">7 Lakh - 9 Lakh</span><br />
                            </div>
                        </div>
                    </div>
                    <!-- HP Filters -->
                    <div class="scrollbar mb-3">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                            <div class="HP py-2 w-100">
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="0 - 20" />
                                <span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="21 - 30" />
                                <span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="31 - 40" />
                                <span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="41 - 50" />
                                <span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="51 - 60" />
                                <span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="61 - 70" />
                                <span class="ps-2 fs-6">61 HP - 75 HP</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="71 - 80" />
                                <span class="ps-2 fs-6">Above 75 HP</span><br />
                            </div>
                        </div>
                    </div>
                    <!-- Brand Filters -->
                    <div class="scrollbar mb-3">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about New Tractor</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                            <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Que. Which is the most popular tractor?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Powertrac Euro 47 PowerHouse, Massery 241 DI DYNATRACK and Swaraj 742 XT is the most popular tractor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Que. Which are the lowest priced popular tractor Models?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. The lowest priced popular tractors are VST VT 224 -1D priced at Rs. 3.71-4.12 lakh*,Mahindra 275 DI TU priced at Rs. 5.60 - 5.80 Lakh*, New Holland 3037 TX priced at Rs. 5.50 - 5.80 Lakh* and Sonalika 42 DI Sikander priced at Rs. 6.45 - 6.75 Lakh*.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Que. How can I get a Popular Tractor without any hassle?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <p class="text-dark">Ans. Visit Bharat Agrimart's, and here you can easily get a separate segment where you can filter Popular tractors according to your choice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Que. How many popular tractors are listed at Bharat Agrimart's?
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. 40+ popular tractor models are available at Bharat Agrimart's.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Que. Which are the highest priced popular tractor models in India?
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. The highest priced popular tractor models are Mahindra ARJUN NOVO 605 DI-i-4WD priced at Rs. 9.80-10.50, John Deere 5050 D - 4WD priced at Rs. 8.70 - 9.22 Lakh*, Mahindra Arjun Novo 605 Di-ps priced at Rs. 7.60 - 7.85 Lakh* and Sonalika WT 60 priced at Rs. 8.90 - 9.25 Lakh*.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                            <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            Que. Which is the most popular tractor in the 50 Hp power range?
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. New Holland 3630-TX Super and Massey Ferguson 7250 Power Up are the most popular tractors in the 50 Hp power range.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4">
        <div class="container my-5">
            <h3 class="fw-bold assured px-3 py-2">Popular Tractor Price List 2023</h3>
            <div class="" role="alert" style="text-align:justify"> 
                <p class="text-dark py-4 ">Most popular tractor in India with their detailed specifications and a fair price is shown below only on at a single place. Here you can also get all the brands popular tractors with their popular tractor price. Popular tractors in India are Swaraj 744 FE, Massey Ferguson 241 DI Maha Shakti, Mahindra 475 DI, and many more.</p>
            </div> 
            <table class="table table-striped my-3 table-responsive custom-table">
                <thead>
                    <tr class="py-3">
                        <th scope="col" class="col-4 col-sm-4 col-md-4">Popular Tractors</th>
                        <th scope="col" class="col-4 col-sm-4 col-md-4">Tractor HP</th>
                        <th scope="col" class="col-4 col-sm-4 col-md-4">Popular Tractors Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3">Powertrac ALT 3000</td>
                        <td class="py-3">28 HP</td>
                        <td class="py-3">Rs. 4.87 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Farmtrac 3600</td>
                        <td class="py-3">47 HP</td>
                        <td class="py-3">Rs. 7.06-7.28 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Swaraj 978 FE</td>
                        <td class="py-3">75 HP</td>
                        <td class="py-3">Rs. 12.60-13.50 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Farmtrac 60 PowerMaxx</td>
                        <td class="py-3">55 HP</td>
                        <td class="py-3">Rs. 7.92-8.24 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Mahindra OJA 2121 4WD</td>
                        <td class="py-3">21 HP</td>
                        <td class="py-3">Rs. 4.78 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Mahindra 275 DI XP Plus</td>
                        <td class="py-3">37 HP</td>
                        <td class="py-3">Rs. 5.65-5.90 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Mahindra Yuvo 575 DI 4WD</td>
                        <td class="py-3">52 HP</td>
                        <td class="py-3">Rs. 7.59-7.90 lac*</td>
                    </tr>
                    <tr>
                        <td class="py-3">Sonalika Tiger 50</td>
                        <td class="py-3">45 HP</td>
                        <td class="py-3">Rs. 8.35-8.67 lac*</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section>
        <div class="container"> 
            <h3 class="fw-bold assured px-3">Tractors By HP</h3>
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