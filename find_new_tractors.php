

<!DOCTYPE html>
<html lang="en">
    <?php
        include 'includes/headertag.php';
        include 'includes/headertagadmin.php';
        include 'includes/footertag.php';
        include 'includes/spinner.php';
    ?> 
   <style>
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
    }
   </style>
    <?php
        include 'includes/header.php';
    ?>
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
<script src="<?php $baseUrl; ?>model/find_new_tractor.js" defer></script>
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
<body>
<section class=" mt-5 pt-5 bg-light">
    <div class="container mt-4">
        <div class="mt-5">
            <span class="mt-5 text-white pt-4">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark">Find New Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="pb-3">New <span class="text-success fw-bold">TRACTORS</span> </h3>
                <div id="productContainer" class="row"></div>
                <div class="col-12 text-center mt-3 pt-2 ">
                    <button id="load_moretract" type="button" class=" btn add_btn btn-success p-1">
                    <i class="fas fa-undo"></i>  Load More tractors</button>
                </div>
            </div>
            <!-- RESET APPLY FILTERS -->
            <div class="col-12 col-sm-3 col-lg-3 col-md-3 ">
                <div class=" row mb-3" id="">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 p-2">
                                <button type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i> Reset
                                </button>
                            </div>
                            <div class="col-6 col-sm-6 p-2">
                                <button  type="button" id="filter_tractor"  class="btn add_btn btn-success w-100">
                                    <i class="fas fa-filter"></i> Apply Filter
                                </button>
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
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2 w-100">
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle1" name="vehicle1" value="0 - 20"><label for="vehicle1" class="fs-6 ps-2">0 HP - 20 HP</label><br>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle2" value="21 - 30"/><label class="ps-2 fs-6" for="vehicle2">21 HP - 30 HP</label><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle3" value="31 - 40"/><lable class="ps-2 mt-0 fs-6" for="vehicle3">31 HP - 40 HP</lable><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle4" value="41 - 50"/><lable class="ps-2 mt-0 fs-6" for="vehicle4">41 HP - 50 HP</lable><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle5" value="51 - 60"/><lable class="ps-2 mt-0  fs-6" for="vehicle5">51 HP - 60 HP</lable><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle6" value="61 - 70"/><lable class="ps-2 mt-0 fs-6" for="vehicle6">61 HP - 75 HP</lable><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" id="vehicle7" value="71 - 80"/><lable class="ps-2 mt-0 fs-6" for="vehicle7">Above 75 Hp </lable><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="container my-5">
        <h3 class="fw-bold assured px-3 py-2">Tractor Price List</h3>
        
        <table class="table table-striped my-3">
            <thead class="">
                <tr class="py-3">
                <th scope="col">New Tractors</th>
                <th scope="col"> Tractors HP</th>
                <th scope="col">New Tractors Price in India</th>
                </tr>
            </thead>
            <tbody id="tableData">
               
            </tbody>
        </table>
    </div>
</section>
<section class="my-3">
    <div class="container my-5">
        <h3 class="fw-bold assured px-3 py-2">Best 45-55 HP Tractor In India</h3>
        <div class="" role="alert" style="text-align:justify">
            <p class="text-dark py-3">Many Indian farmers use a 45-55 hp tractor for their everyday farming needs, including tasks like mowing, landscaping, and more. This range is suitable for Indian farming and comes with advanced technology at an affordable price in India. Some powerful 45 hp tractors are the Mahindra 575 DI, Kubota MU4501 2WD, John Deere 5045 D and many more. Following, we are showing the most popular 45-55 hp tractor price list in India -</p>
        </div>
        <table class="table table-striped my-3 table-responsive custom-table">
            <thead>
                <tr class="py-3">
                    <th scope="col">Tractor Model</th>
                    <th scope="col">Price Range (Rs. Lac)*</th>
                </tr>
            </thead>
            <tbody>
                <tr class="py-3">
                    <td class="col-6 py-3">Force SANMAN 5000</td>
                    <td class="col-6 py-3">Rs. 7.16-7.43 Lakh*</td>
                </tr>
                <tr class="py-3">
                    <td class="col-6 py-3">Eicher 485</td>
                    <td class="col-6 py-3">Rs. 6.50-6.70 Lakh*</td>
                </tr>
                <tr class="py-3">
                    <td class="col-6 py-3">Farmtrac 45</td>
                    <td class="col-6 py-3">Rs. 6.90-7.17 Lakh*</td>
                </tr>
                <tr class="py-3">
                    <td class="col-6 py-3">Sonalika DI 750III</td>
                    <td class="col-6 py-3">Rs. 7.32-7.80 Lakh*</td>
                </tr>
                <tr class="py-3">
                    <td class="col-6 py-3">Powertrac EURO 55</td>
                    <td class="col-6 py-3">Rs. 8.30-8.60 Lakh*</td>
                </tr>
                <tr class="py-3">
                    <td class="col-6 py-3">Swaraj 960 FE</td>
                    <td class="col-6 py-3">Rs. 8.20-8.50 Lakh*</td>
                </tr>
            </tbody>
        </table>
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
                            Que. What is the price of new tractors in India?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. The New Tractor Price range 2023 is Rs. 2.45 to Rs. 31.30 Lakh*.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Que. Which is the best lowest price Tractor in India?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. The lowest priced tractors in India are Swaraj Code, priced at Rs. 2.45 Lakh - 2.50 Lakh and VST VT-180D HS/JAI-4W Priced at Rs. 2.98 - 3.35 Lakh.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                         Que. Which is the most selling Tractor in India?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="text-dark">Ans. The most selling Tractors in India are Mahindra 275 DI TU, Swaraj 744 FE, John Deere 5310 and others.</p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading4">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                        Que. Which Tractor brand is best in India?
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Mahindra, Swaraj, Sonalika, New Holland, John Deere and many more tractor brands are best in India.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading5">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Que. What is the HP range of New Tractors?
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. The HP range of New Tractors is 11.1 HP to 120 HP</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading6">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        Que. Which are the New Tractor models available in India?
                        </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. The new tractor models available in India are Massey Ferguson 6028 Maxpro Wide Track, Mahindra YUVO TECH Plus 415 DI and many more.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-headingoil">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                          Que. Which are the New Tractor series launched in 2023?
                        </button>
                    </h2>
                    <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. The new tractor series launched in 2023 are Massey Ferguson MaxPro and Mahindra Yuvo Tech.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  rounded-3 my-3">
                    <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        Que. How Many New Tractors are Listed at Bharat Agrimart's?
                        </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. 500+ New Tractors are Listed at Bharat Agrimart's.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container"> 
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