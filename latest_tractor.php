<!DOCTYPE html>
<html lang="en">


<?php
    include 'includes/headertag.php';
   include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   include 'includes/spinner.php';
?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/latest.js" defer></script>
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

<section class="mt-5 pt-5 bg-light">
    <div class="container">
        <div class="mt-5">
            <span class="mt-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark"> Latest Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="pb-3">Latest  <span class="text-success fw-bold"> Tractors in India</span> </h3>
                <div id="productContainer" class="row"></div>
                <div class="col-12 text-center mt-3 pt-2 ">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success p-1"><i class="fas fa-undo"></i>Load More tractors</button>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 p-2">
                                <button onclick="resetform()" type="button" class=" btn add_btn btn-success w-100">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                            <div class="col-6 col-sm-6 p-2">
                                <button id="filter_tractor" type="button" class=" btn add_btn btn-success w-100">
                                <i class="fas fa-filter"></i>Apply Filter</button>
                           </div>
                        </div>
                    </div>
                </div>
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 w-100">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round budget_checkbox mt-1 ms-3" value="0-3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round budget_checkbox mt-1 ms-3" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 5 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round budget_checkbox mt-1 ms-3" value="6 - 9"/><span class="ps-2 fs-6"> 5 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round budget_checkbox mt-1 ms-3" value="6 - 9"/><span class="ps-2 fs-6"> 6 Lakh - 7 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round budget_checkbox mt-1 ms-3" value="6 - 9"/><span class="ps-2 fs-6"> 7 Lakh - 9 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2 w-100">
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="0 - 20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="21 - 30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="31 - 40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="41 - 50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="51 - 60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="61 - 70"/><span class="ps-2 fs-6">61 HP - 75 HP</span><br />
                            <input type="checkbox" class="checkbox-round hp_checkbox mt-1 ms-3" value="71 - 80"/><span class="ps-2 fs-6">Above 75 Hp </span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2 w-100" id="checkboxContainer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about Latest Tractor</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                        <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Que. How many latest tractors are listed at Bharat Agrimart's?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. 66 latest tractors are listed at Bharat Agrimart's.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Que. What is the price range of the latest tractors in India?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. The price range of the latest tractors is Rs. 3.20 to 15.25 Lakh*.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Que. What is the Hp range of the latest tractors in India?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           <p class="text-dark">Ans. The Hp range of the latest tractors is 18 Hp to 75 HP.</p>
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

<section>
    <div class="container my-5">
        <h3 class="fw-bold assured px-3 py-2">Latest Tractor Price List 2023</h3>
        <div class="" role="alert">
            <p class="text-dark">The latest tractor brands in India are now in one place. Find out the best tractor in India for your agriculture needs. We are provides you Latest Tractors in India at an affordable latest tractor price. Popular latest tractors in India are Swaraj 963 FE, Mahindra Arjun Novo 605 Di-i, Sonalika DI 745 III, and many more.</p>
        </div>
        <table class="table table-striped my-3">
            <thead class="">
                <tr class="py-3">
                <th scope="col">Latest Tractor Models</th>
                <th scope="col">Tractor HP</th>
                <th scope="col">Latest Tractors Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="col-12 col-lg-5 col-md-5 col-sm-5 py-3">Mahindra Arjun Novo 605 Di-i 2WD</td>
                    <td class="col-12 col-lg-3 col-md-3 col-sm-3 py-3">57 HP</td>
                    <td class="col-12 col-lg-4 col-md-4 col-sm-4 py-3">Rs. 8.75-8.95 lac*</td>
                </tr>
                <tr  class="py-3">
                    <td class="py-3">Mahindra Oja 3140 4WD</td>
                    <td class="py-3">40 HP</td>
                    <td class="py-3">Rs. 7.40 lac*</td>
                </tr>
                <tr class="py-3">
                    <td class="py-3">Mahindra OJA 2121 4WD</td>
                    <td class="py-3">21 HP</td>
                    <td class="py-3">Rs. 4.78 lac*</td>
                </tr>
                <tr class="py-3">
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
                    <td  class="py-3">Mahindra 275 DI XP Plus</td>
                    <td class="py-3">37 HP</td>
                    <td class="py-3">	Rs. 5.65-5.90 lac*</td>
                </tr>
                <tr>
                    <td  class="py-3">Mahindra Yuvo 575 DI 4WD</td>
                    <td class="py-3">52 HP</td>
                    <td class="py-3">Rs. 7.59-7.90 lac*</td>
                </tr>
                <tr>
                    <td class="py-3" >Sonalika Tiger 50</td>
                    <td class="py-3">	45 HP</td>
                    <td class="py-3">	Rs. 8.35-8.67 lac*</td>
                </tr>
                <tr>
                    <td class="py-3" >Powertrac Euro 50 Next</td>
                    <td class="py-3">52  HP</td>
                    <td class="py-3">	Rs. 8.45-8.75 lac*</td>
                </tr>
                <tr>
                    <td  class="py-3">Sonalika  DI 750III</td>
                    <td class="py-3">55 HP</td>
                    <td class="py-3">Rs. 7.32-7.80 lac*</td>
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
        <h3 class="fw-bold assured px-3 ">Tractors By Price</h3>
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