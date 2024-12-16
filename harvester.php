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
    <script src="<?php $baseUrl; ?>model/harvester_customer.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z38E658LD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6Z38E658LD');
    </script>
<style>
  .negative-margin {
    margin-top: -10px !important; /* Adjust this value as needed */
  }
  .text-truncate {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
   
    }
</style>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-5 bg-light">
    <div class="container py-2">
        <div class=" mt-4 pt-4">
            <span class="text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark">Harvesters</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class=" fw-bold">Harvesters</h3>
              
                <div class="row my-4" id="productContainer">
                </div>
                <h5 id="noDataMessage" class="text-center mt-4 text-danger" style="display: none;">
                <img src="assets/images/404.gif" class="w-25" alt=""></br>Data not found..!</h5>
                <div class="text-center my-2">
                    <button type="submit" id="loadMoreBtn" class="btn btn-success shadow px-5 w-40">Load More</button>         
                </div> 
            </div>
            <!-- RESET APPLY FILTER -->
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                <div class=" row mb-3" id="">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button id="reset_tractor" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor" type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>Apply Filter</button>
                                </div>
                            </div>
                        </div>
                </div> 
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <h5 class=" ps-1  text-dark fw-bold mb-3">Cutting Width</h5>
                        <div class="price py-2 ">
                            <div class=" d-flex">
                                <input type="checkbox" class="checkbox-round mt-1 ms-3" value="0-3"/><span class="ps-2 fs-6"> 1 to 10</span><br />
                            </div>
                            <div class=" d-flex">
                                <input type="checkbox" class="checkbox-round mt-1 ms-3" value="3-6"/><span class="ps-2 fs-6">11 to 20</span><br />
                            </div>
                            <div class=" d-flex">
                                <input type="checkbox" class="checkbox-round mt-1 ms-3" value="6-9"/><span class="ps-2 fs-6"> 9 Lakh - 9 Lakh</span><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id=" my-2">
                    <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold  pt-2">Search By Brand</h5>
                        <div class="HP py-2" id="checkboxContainer">
                        </div>
                    </div>
                </div>
                <div class="mb-3" id="">
                    <div class="force-overflow">
                        <h5 class="ps-1 text-dark fw-bold">Power Source</h5>
                        <div class="price pt-4 "  id="POWER_SOURCE">
                            <!-- Checkbox options will be dynamically added here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="conntainer text-center">
        <div class="py-4"><h3 class="fw-bold">About Combine <span class="text-success">Harvester</span></h3></div>
        <div class="py-3 container">
            <p class="text-dark"> This Platform brings to you the options to choose the best Tractor Combine Harvesters for your farming needs. Best-in-Class machines with up to date technologies and high reliability brand support all through one site, BharatAgrimart's. We at BharatAgrimart's, know how crucial it can be for you to choose amongst the varied options amongst Tractor Combine Harvester and therefore we bring to you the best options along with reasonable price listing and description about all the specifications. The choice might be yours but you are never alone to make this choice, we make sure about this.</p> 

            <p class="py-2">Choose amongst various brands such as Hind Agro, Dashmesh, Claas, New Hind, Preet, etc. Also you can select according to the needed Cutting Width. Not only this you can also filter your search on the basis of the Power Source, be it Self Propelled or Tractor Mounted, but we also have it all. BharatAgrimart's is committed to bringing to you the best products from the finest houses so you don’t have to mess with service providers thereafter. We bring to you the best because we know the value of the best. BharatAgrimart's serving you 24*7 at your finger clicks.</p>
        </div>
    </div>
</section>

<section class="">
    <div class="container mt-4 ">
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
    include 'includes/footer.php'
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