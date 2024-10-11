<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     include 'includes/spinner.php';
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/used_farm_imple.js"></script>
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
   <style>
     .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
   </style>

<section class="mt-5 pt-5 bg-light">
    <div class="container py-2">
        <div class="pt-5">
            <span class="mt-5 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark"> Used Farm Implements</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="fw-bold">Used <span class="text-success fw-bold">Farm Implements</span> </h3>
                <div class="row my-3">
                    <div id="productContainer" class="row "></div>
                        <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                        <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                    <div class="col-12 text-center">
                        <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow">
                        <i class="fas fa-undo"></i>  Load More Tractor </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class=" row">
                            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                <button id="adduser" type="button" class="add_btn btn-success w-100" onclick="resetform()">
                                <i class="fas fa-undo"></i>  Reset </button>
                            </div>
                           <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                <button id="filter_implement" type="button" class="add_btn btn-success w-100">
                                <i class="fas fa-filter"></i>  Apply Filter </button>
                           </div>
                            
                        </div>
                    </div>
                </div>
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 6 Lakh - 9 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="9 - 12"/><span class="ps-2 fs-6"> 9 Lakh - 12 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <!-- <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2">
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="0-20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="21-30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="31-40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="41-50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="51-60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="61-70"/><span class="ps-2 fs-6">61 HP - 70 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="71-80"/><span class="ps-2 fs-6">71 HP - 80 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="81-90"/><span class="ps-2 fs-6">81 HP - 90 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="91-100"/><span class="ps-2 fs-6">91 HP - 100 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="101-110"/><span class="ps-2 fs-6">101 HP - 110 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="111-120"/><span class="ps-2 fs-6">111 HP - 120 HP</span><br />
                        </div>
                    </div>
                </div> -->

                <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2" id="checkboxContainer"></div>
                        </div>
                    </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By State</h5>
                        <div class="HP py-2" id="state_state" style=" height: 78px;">
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By District</h5>
                        <div class="HP py-2" id="district_dist">
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="my-2">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold pt-2">Search By Year</h5>
                        <div class="HP py-2" id="P_year">
                        </div>
                    </div>
                </div>
                <!-- <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Year</h5>
                        <div class="HP py-2">
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2021"/><span class="ps-2 fs-6">2021</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2020"/><span class="ps-2 fs-6">2020</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2019"/><span class="ps-2 fs-6">2019</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2018"/><span class="ps-2 fs-6">2018 </span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2017"/><span class="ps-2 fs-6">2017</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2016"/><span class="ps-2 fs-6">2016</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2015"/><span class="ps-2 fs-6">2015</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2014"/><span class="ps-2 fs-6">2006</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2013"/><span class="ps-2 fs-6">2005</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3" value="2012"/><span class="ps-2 fs-6">2009</span><br />
                            

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used implement by Location</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Implement for sale in Raigarh </p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used implement  By Brand</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj Implement for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra Implement for sale</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used Implement By Category</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Rotavator for Sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Thresher for Sale</p></a></li>
                </ul>
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
 includedLanguages:'en,hi,bn,mr,pa,or,te,ta,ml', // <- remove this line to show all language
 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
 }, 'google_translate_element');
 }
</script>
    </html>