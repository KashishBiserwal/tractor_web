
<html lang="en">
    <?php
include 'includes/headertag.php';
//    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/mahindra_brand.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<body>
   <?php
   include 'includes/header.php';
   ?>
   <!-- Banner Here -->
   
   <section class="bg-cover bg-overlay" style="background-image: url('assets/images/mahindra-oja-tractors-homepage-desktop-1920x600.webp')">
        <div class="container-fullwidth position-relative mt-5 pt-5">
            <div class="py-4"></div>
            <div class="py-5"></div>
            <div class="row justify-content-center">
                <div class="col-12  text-center">
                    <div class="banner__wrapper">
                        <div class="row  w-100 float-start">
                            <div class="col-12 col-sm-12 col-xxl-6 col-xl-6 col-lg-6">
                                <div class="banner__content float-start" id="slider_head">
                                    <!-- <h1 class="d3 mb-0 text-white display-5 fw-bold">Mahindra </h1> -->
                                    
                                    <div>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
            <div class="py-3"></div>
        </div>
   </section>
<section class="bg-light pb-4">
    <div class="container-fullwidth ">
        <div class="row">
            <!-- <h1 class=" mt-5">Popular Mahindra Tractors</h1> -->
            <div id="popular_tractor"></div>
            <div id="productContainer" class="row"></div>
                
		
		</div>
        <div class="col-12 text-center mt-3 pt-2 ">
            <button id="load_moretract" type="button" class=" btn add_btn btn-success">
            <i class="fas fa-undo"></i>  Load More tractors</button>
         </div>
    </div>
</section>

 

  <!-- used tractor -->
    <section>
        <div class="container-fullwidth">
        <div class="row">
            <div id="used_tractor"></div>
            <div class="row">
                <div id="productContainer2" class="owl-carousel owl-theme">
                   
                </div>
            </div>
            <!-- <div id="productContainer2" class="row"></div> -->
        </div>

        <div class="col text-center my-3  py-3">
            <a href="#" class="btn btn-success btn-lg">View All Used Mahindra Tractors</a>
        </div>
    </section>

    <!-- Mahindra Tractor Implements -->
    <section class="bg-light">
        <div class="container-fullwidth">
        <div id="old_implement"></div>
        <div class="row">
                <div id="productContainer3" class="owl-carousel owl-theme">
                   
                </div>
              
            </div>
            <div class="col text-center my-3 pb-5">
                <a href="#" class="btn btn-success btn-lg ">View All Tractor Implements</a>
            </div>
        </div>
    </section>

  <!--  Mahindra Tractor Dealers & Service Centers-->
    <section>
        <div class="container-fullwidth mt-4">
            <h3 class=" my-4 text-uppercase ">Mahindra Tractor Dealers & Service Centers</h3>
            <nav class=" pt-3 w-50">
                <div class="nav nav-tabs mb-3 " id="nav-tab" role="tablist">
                    <button class="nav-link active px-5 py-3 h5  mx-2 fw-bold text-dark" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">Tractor Dealers</button>
                    <button class="nav-link px-5 py-3 h5  mx-2 fw-bold text-dark" id="nav-tractor-tab" data-bs-toggle="tab" data-bs-target="#nav-tractor" type="button" role="tab" aria-controls="nav-tractor" aria-selected="false">Tractor Service Centers</button>
                   
                   
                </div>
		    </nav>
            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                   <div class="row">
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>VINAYAKA MOTORS</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - Survey No. 18-1H, Opp. Vartha Office Gooty Road Anantapur, Andhra Pradesh (515001)</p>
                                    <p> <strong>Contact</strong> - 9603347444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>SRI SAIRAM AUTOMOTIVES</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - Opp.Girls Highschool, Byepass Road Anantapur, Andhra Pradesh (515591)</p>
                                    <p> <strong>Contact</strong> - 9603347444</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>B.K.N. AUTOMOTIVES</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> -23/13/4,5,6, Chittor - Puttu Main Road, Near Nagamani petrol BunkChittoor, Andhra Pradesh (517001)</p>
                                    <p> <strong>Contact</strong> - 9441151813</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>J.N.R. AUTOMOTIVES</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - Plot No. E6, Industrial Estate,CTM Road,,Madanapalle Chittoor, Andhra Pradesh (517325)</p>
                                    <p> <strong>Contact</strong> - 9676224999</p>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="col text-center mt-3 ">
                        <a href="#" class="btn btn-success btn-lg">View All Dealers</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-tractor" role="tabpanel" aria-labelledby="nav-tractor-tab">
                    <div class="row">
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>JAJALA TRADING PVT. LTD.</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - 1-2107/2, Jayaram Rao Street, VMC Circhittoor, Andhra Pradesh (517644).</p>
                                    <p> <strong>Contact</strong> - 8008504488</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>SHANMUKI MOTORS</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - S. No. 6,Renigunta Road, Next to KSR Kalyana Mandapam, Tirupathi -Chittoor, Andhra Pradesh (517501)</p>
                                    <p> <strong>Contact</strong> - 9885711169 /9573722677</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>SRI DURGA AUTOMOTIVES</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> - 8 / 325-B, Almaspet Cuddapah, Andhra Pradesh (516001)</p>
                                    <p> <strong>Contact</strong> - 9848074339 / 9866678222</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 my-3">
                            <div class="row align-items-center bg-white shadow rounded-3" >
                                <div class="col-lg-3 col-12 col-sm-3 col-lg-3">
                                    <a href="#" class="">
                                        <img src="assets/images/tractor-1693984999.webp" class="w-100 rounded-3 newsimg " alt="">
                                    </a>
                                </div>
                                <div class="col-lg-8 pt-4">
                                    <h5>RAM'S AGROSE</h5> 
                                    <p> <strong>Authorization</strong> - Mahindra</p>
                                    <p> <strong>Address</strong> -  D.No. 3/7, Palli Kuchivari,Palli Panchayathi, Dist- YSR Kadapa Cuddapah, Andhra Pradesh (516115)</p>
                                    <p> <strong>Contact</strong> - 9849971978</p>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center mt-3 ">
                            <a href="#" class="btn btn-success btn-lg">View  All Service Centers</a>
                        </div>
                    </div>
                </div>
               
		    </div>
        </div>
    </section>
 

    <section class="about bg-light">
        <div class="container-fullwidth">
            <div class="lecture_heading ">
                <h3 class="my-4 pt-5">TRACTORS BY BRAND</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="row" id="brandContainer">
                    
                    
                </div>
               <!--  <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                        <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         <strong>Que</strong>:-  What is the HP range of Mahindra Tractors?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:-  Mahindra offers models ranging from 15 to 74 HP</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <strong>Que</strong>:-  Which are the Latest models of Mahindra Tractor?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:- Mahindra 275 XP Plus and the Mahindra 575 XP Plus are the latest models of the Mahindra Tractor.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <strong>Que</strong>:-  Where to find the nearest Mahindra Tractor showroom in my area?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:-  At Tractor Junction, Visit the Mahindra Tractor Dealer page and find the nearest tractor dealers/showrooms in your area.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                         <strong>Que</strong>:-  What are the different types of steering in Mahindra Tractors?
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:- Mahindra Tractors are available in both power and mechanical steering systems.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                        <strong>Que</strong>:-  Where can we get updated Mahindra tractors price 2023?
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:- At Tractor Junction, you can get updated Mahindra tractors price with images, user reviews, videos and specifications.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        <strong>Que</strong>:-  What is the price range of Mahindra Tractor?
                        </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:-  The Mahindra tractor price range is Rs. 3.05 to 12.90 Lakh, having mini tractors from Rs. 3.05.50-5.00 lakh* and utility tractors from Rs. 5.50-12.90 lakh*.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingoil">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                        <strong>Que</strong>:-  Which Mahindra Tractors are best for agriculture?
                        </button>
                        </h2>
                        <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>Ans:-  Mahindra Jivo, Mahindra XP Plus, Mahindra SP Plus, etc., are the best Mahindra tractor series for farming.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading8">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                        <strong>Que</strong>:- Where to get complete information on Mahindra Tractors?
                        </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:-  Tractor Junction is a reliable platform to get complete Mahindra Tractors’ information, including price, dealers and service centers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                        <strong>Que</strong>:- Why are Mahindra tractors reliable for customers?
                        </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:- Mahindra has been a renowned tractor brand since 1945. Nowadays, the company is the farmers' first choice by producing many reliable tractors</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading11">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                        <strong>Que</strong>:- Que. Which is the leading tractor brand in India?
                        </button>
                        </h2>
                        <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:- Mahindra Tractor is the leading tractor brand in India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                        <strong>Que</strong>:- Which are the best Mahindra mini tractors?
                        </button>
                        </h2>
                        <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:- The best Mahindra mini tractors are Mahindra Yuvraj 215 NXT, Mahindra JIVO 225 DI, Mahindra JIVO 245 DI, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                        <strong>Que</strong>:-  What kind of engine oil does a Mahindra tractor use?
                        </button>
                        </h2>
                        <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Ans:- The company tractor uses 15W/40 engine oil in summer and 10W/30 engine oil in winter.</p>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
            </div>

        </div>
    </section>

<!--    
<script>
$('#productContainer2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

</script> -->

    <?php
    include 'includes/footer.php';
    ?>

    
