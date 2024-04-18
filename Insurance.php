<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'includes/headertag.php';
include 'includes/headertagadmin.php';
include 'includes/footertag.php';
?> 
<script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/insurance_customer.js"></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
</head>
<style>
.error .form-label {
    color: red !important;
    margin-bottom:2px;
    font-size:13px;
}

.images {
    width: 100%;
    height: 10rem;
}

.card {
    margin-right: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


.cards {
    max-height: 5rem;
    object-fit: contain;
    width: 100%;
}

.form-outline .form-label {
    color: #454444;
    font-weight: 500;
    margin-bottom: 5px;
    position: absolute;
    margin-top: -12px;
    background: #fff;
    margin-left: 20px;
}

#atag {
    text-decoration: none;
}
.container-mid {
    max-width: 1280px;
    margin: 0 auto;
    width: 98%;
    padding-left: 8px;
    padding-right: 8px;
    margin-top: -160px;
}
</style>

<body>
    <?php
				include 'includes/header.php';
			?>
    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-3">
            <div class="py-2 mt-4">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                </span>
                <span class="text-dark header-link  px-1">Enquiries <i class="fa-solid fa-chevron-right px-1"></i>
                </span>

                <span class="text-dark">All Loan</span>
            </div>
        </div>
    </section>



    <!--Banner-->
    <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/insurancee.png" alt="reload img" class="w-100" style="height: 350px;">
            <div class="container-mid">
                <div class="row justify-content-center loan_form bg-light border border-dark">
                    <h3 class="text-dark text-center fw-bold mt-4">Renew Your Tractor insurance at Best Price</h3>
                    <h6 class="text-dark text-center mb-3">Fill your information to get tractor insurance</h6>

                    <form id="myform" name="myform" method="post">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">

                                    <label class="form-label" for="insurance_type">Insurance Type</label>
                                    <select class="form-select error mb-2 pb-2" aria-label="Default select example"
                                        id="insurance_type" name="insurance_type">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4" style="display:none">
                                <div class="form-outline">
                                    <label class="form-label" >First Name</label>
                                    <input type="hidden" id="enquiry_type_id" value="17" name="enquiry_type_id"
                                        class="data_search form-control input-group-sm" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label " for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name"
                                        class="data_search form-control input-group-sm" />
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name"
                                        class=" data_search form-control input-group-sm" />
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="mobile_number">Mobile Number</label>
                                    <input type="text" id="mobile_number" name="mobile_number"
                                        class=" data_search form-control input-group-sm"/>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label  " for="brand">Brand</label>
                                    <select class="form-select error mb-2 pb-2" id="brand" name="brand"
                                        aria-label="Default select example">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="model">Model</label>
                                    <select class="form-select   error mb-2 pb-2" id="model" name="model"
                                        aria-label="Default select example">
                                       
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="enterModel">Enter Model</label>
                                        <input type="text" class="form-control" id="enterModel" name="enterModel"
                                        required />
                                    </div>
                                </div> -->
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label" for="vehicle_registered_number">Vehicle Registered
                                        Number</label>
                                    <input type="text" id="vehicle_registered_number" name="vehicle_registered_number"
                                        class=" data_search form-control input-group-sm " />
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label  " for="registered_year">Registered Year</label>
                                    <select class="form-select error mb-2 pb-2" id="registered_year" name="registered_year"
                                        aria-label="Default select example">
                                        <option value="" selected disabled>Select Year</option>
                                        <script>
                                            for (let year = 2023; year >= 2008; year--) {
                                                document.write(`<option value="${year}">${year}</option>`);
                                            }
                                            </script>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label  " for="state">State</label>
                                    <select class="form-select error mb-2 pb-2 state-dropdown" id="state" name="state" aria-label="Default select example">
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label  " for="district">District</label>
                                    <select class="form-select error mb-2 pb-2 district-dropdown" id="district" name="district"aria-label="Default select example">
                                      
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                <div class="form-outline">
                                    <label class="form-label " for="tehsil">Tehsil</label>
                                    <select class="form-select error mb-2 pb-2 tehsil-dropdown" id="tehsil" name="tehsil" aria-label="Default select example">
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <label class="pe-3 fs-6 mt-2 text-dark">Claims made in previous policy</label>
                                    <input type="radio" id="pcy_res" name="fav_rc" value="1">
                                    <label for="policy" class="text-dark">Yes</label> 
                                    <input type="radio" id="pcy_no" name="fav_rc" value="0">
                                    <label for="policy" class="text-dark">No</label>
                                </div>
                            <!-- <div class="col-12">
                                <p class=" mt-3 "> Claims Made in Previous Policy</p>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input border border-dark" type="radio" id="inlineCheckbox1"
                                        name="x" value="Yes">
                                    <label class="form-check-label text-dark" for="inlineCheckbox1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input border border-dark" type="radio" id="inlineCheckbox2"
                                        name="x" value="No">
                                    <label class="form-check-label text-dark" for="inlineCheckbox2">No</label>
                                </div>
                            </div> -->
                            <p class="text-center mt-3">By proceeding ahead you expressly agree to the Bharat Agrimart <a
                                    href="privacy_and_policy.php" class="text-decoration-none">Terms & Conditions*</a>
                            </p>
                            <div class="d-grid col-8 mx-auto mb-3">
                                <button type="button" class="btn btn-success fw-bold" value="" id='button2'>Apply For
                                    Insurance</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="contactModalLabel">Thank You!</h5>
                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">“Thankyou for contacting us we will get back to you”</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Banner End-->
    <!--How to Buy Tractor Insurance Online?-->

    <div class="container mt-5">
        <h3 class="text-center mb-4 fw-bold ">How to Buy Tractor Insurance Online?</h3>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">

            <!-- Card 1 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\fill_form.avif" class="card-img-top images" alt="Tractor Insurance 1">
                    <div class="card-body">
                        <h6 class="card-title text-center  fw-bold ">Fill Your Tractor Details</h6>
                        <p class="card-text text-center">You have to fill the form i.e. registration no., brand, model,
                            registration and so on. Along with this, you have to fill your details like your name,
                            mobile no, state and district.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\compare3.png" class="card-img-top images" alt="Tractor Insurance 2">
                    <div class="card-body">
                        <h6 class="card-title text-center  fw-bold ">Get Best Insurance Policy</h6>
                        <p class="card-text text-center">Now you have to compare all the top companies policies, premium
                            and other details. Then After that, you have to compare according to your needs and budget.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\payment2.jpg" class="card-img-top images" alt="Tractor Insurance 3">
                    <div class="card-body">
                        <h6 class="card-title text-center  fw-bold ">Make Payment Online</h6>
                        <p class="card-text text-center">You don’t have to worry about the payment of Insurance. Now you
                            could also pay your tractor insurance premium online and get documents immediately on your
                            phone.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--How to Buy Tractor Insurance Online? End-->


    <!--Popular Tractor Insurance Companies-->


    <!-- <div class="container">
        <h4 class="mt-5 mb-4 assured px-2 fw-bold">Popular Tractor Insurance Companies</h4>
        <div class="row mt-3 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">

            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\tata1.png" class="card-img-top cards" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">TATA AIG</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\magma1.png" class="card-img-top cards" alt="Company 2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Magma HDI</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\icici.jpg" class="card-img-top cards" alt="Company 3">
                    <div class="card-body">
                        <h5 class="card-title text-center">ICICI Lombard</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\iffco.png" class="card-img-top cards" alt="Company 4">
                    <div class="card-body">
                        <h5 class="card-title text-center">IFFCO-TOKIO</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\chola.webp" class="card-img-top cards" alt="Company 5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Chola MS</h5>
                    </div>
                </div>
            </div>

            <div class="col mb-4">
                <div class="card">
                    <img src="assets\images\bajaj.jpeg" class="card-img-top cards" alt="Company 6">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bajaj Allianz</h5>
                    </div>
                </div>
            </div>

        </div>
    </div> -->


    <!--Popular Tractor Insurance Companies End-->

    <!-- Why Choose TractorJunction for Agriculture/Commercial Tractor Insurance Online -->

    <div class="container mt-5">
        <h4 class="assured mb-4 fw-bold px-2">Why Choose Bharat Tractors for Agriculture/Commercial Tractor Insurance
            Online?</h4>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">

            <!-- Card 1 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\img1.jpg" class="card-img-top images" alt="Tractor Insurance 1">
                    <div class="card-body">
                        <h6 class="card-title text-center  mt-2 fw-bold ">Get Tractor Insurance Within 5 Minutes</h6>
                        <p class="card-text text-center mt-2">We provide Tractor Insurance in an easy and quick process.
                            Now you can get tractor Insurance without any documents in just 5 minutes. So, worry less
                            and get your Tractor Insured with us. Here you can also renew tractor insurance online
                            within 5 minutes.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\img2.jpg" class="card-img-top images" alt="Tractor Insurance 2">
                    <div class="card-body">
                        <h6 class="card-title text-center  mt-2 fw-bold ">Committed Customer Support Team</h6>
                        <p class="card-text text-center mt-2">Our committed customer support team is available 7 days a
                            week for your comfort. So, ask away any question regarding Tractor Insurance. From our team
                            you can ask details regarding policy bazaar commercial tractor insurance, magma hdi tractor
                            insurance renewal online and tractor bima price.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 with shadow -->
            <div class="col">
                <div class="card shadow">
                    <img src="assets\images\img3.png" class="card-img-top images" alt="Tractor Insurance 3">
                    <div class="card-body">
                        <h6 class="card-title text-center mt-2 fw-bold ">Get Insurance Plans with Minimum Paperwork</h6>
                        <p class="card-text text-center mt-2">Online Tractor Insurance takes less paperwork as compared
                            to offline. At the time of filling out an offline insurance form, you have to be more
                            careful than the online process because you can correct any mistakes and it also requires
                            fewer documents.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!--Why Choose TractorJunction for Agriculture/Commercial Tractor Insurance Online End  -->

    <!-- Get insured your tractor with best offers -->
    <div class="container">
        <h4 class="mt-5 assured px-2 fw-bold">Get insured your tractor with best offers</h4>
        <h6 class="fw-bold px-2 mt-5"> Insure your tractor at the best price</h6>
        ​​​​​ <p class="mt-1 px-2">Secure Yourself with a Tractor Insurance </p>
        <p class="mt-4 px-2">“Tractor Insurance offers you peace of mind that you should not deny yourself. “Bharat
            Tractors offers countless online tractor insurance options for your dream machine at competitive prices. We
            know what a tractor costs you and what it takes to manage the maintenance costs. So, here we are with the
            newly inducted tractor insurance price list!
        <p>
        <h6 class="fw-bold px-2 mt-5">So, What Is A Tractor Insurance?</h6>
        <p class="mt-4 px-2">A tractor insurance policy is a legal agreement between the insured and the insurer. It is
            designed to protect your tractor from any unfortunate damages and losses caused by accidents, collisions,
            natural disasters or theft.</p>

        <p class="mt-4 px-2">With agriculture tractor insurance, you can leave the task of paying for the wreckages and
            wearing the tears of your tractor to the insurance companies. All you must do is choose the finest tractor
            insurance policy that suits your budget and the needs of the tractor simultaneously.</p>

        <h6 class="fw-bold px-2 mt-5">If You Have A Plan, Let’s Discuss</h6>

        <p class="mt-4 px-2">At Bharat Tractors, you can obtain online tractor insurance policies from different tractor
            insurance companies like SBI tractor insurance. Additionally, you can check for tractor insurance details,
            apply for tractor insurance policy renewal online and much more. You can also choose from farm tractor
            insurance from different companies and check tractor insurance 1-year price and tractor insurance status
            check in real-time. Bharat Tractors experts have made the online commercial tractor insurance process very
            simple.</p>

        <p class="mt-4 px-2">It is fairly simple, fill in the details regarding the tractor, such as the Brand, the
            Model, the Registered City and your Name, along with Contact Details, and you are good to go. You can
            leverage the tractor insurance premium calculator to check the tractor insurance amount and, ultimately,
            tractor insurance price in India!</p>

        <p class="mt-4 px-2">Bharat Tractors is committed to bringing you the best tractor insurance cost in India for
            your development and security. When you choose us, we make sure you get the best agricultural tractor
            insurance online and don't regret your choices upon your decisions.</p>
    </div>
    <!-- Get insured your tractor with best offers End -->



    <!--Popular Tractor Brands -->

    <section class="about bg-white mt-2 ">
  <div class="container">
    <div class="lecture_heading ">
      <h3 class="my-4 pt-5">TRACTORS BY BRAND</h3>
    </div>
    <div class="mt-4 pb-5">
      <div class="row allbrands" id="brandContainer">
      </div>
    </div>
  </div>
</section>
    


    <!--Popular Tractor Brands End -->

    <!--Tractor Insurance FAQ's  -->
    <section class="about">
        <div class="container">
            <div class="lecture_heading text-center">
                <h4 class="fw-bold mt-4 pt-4">Tractor Insurance FAQ's</h4>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne">
                            <button class="accordion-button collapsed fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne"> Que. What damages are covered under Tractor
                                Insurance?</button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Tractor Insurance gives security against damage, fire, theft,
                                    earthquake and many more. Along with this, it offers protection against any 3rd
                                    party liability in terms of death.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo"> Que. Is Tractor Insurance compulsory? </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. No, it is not necessary without tractor insurance you wouldn’t
                                    have securities against contingent happenings. So it becomes compulsory to take
                                    tractor insurance. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree"> Que.What are the advantages of buying Tractor
                                Insurance online? </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. If you buy tractor insurance online then you get these
                                    advantages.
                                    <li>Carefree procedure</li>
                                    <li>Document less procedure</li>
                                    <li>Security against contingencies</li>
                                    <li>Security against fraud</li>
                                    <li>Quick procedure</li>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                aria-controls="flush-collapse4"> Que. How to file a claim? </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Immediately informs Tractor Insurance company. Then until the
                                    company agent visits, don't use a tractor. After the survey, you’ll get all damage
                                    changers. If your tractor is stolen then report FIR and notify the Insurance
                                    company.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                aria-controls="flush-collapse5"> Que. How much does tractor insurance cost in
                                India?</button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. It purely depends on the insurance company and your budget.
                                    Tractor Insurance varies according to the company.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false"
                                aria-controls="flush-collapse6"> Que.If someone is killed by the tractor, would the
                                insurance company pay a claim? </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Yes, insurance companies are liable for it. It is third party
                                    insurance for tractors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingoil">
                            <button class="accordion-button collapsed  fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false"
                                aria-controls="flush-collapseoil"> Que. Which bank is best for tractor loans? </button>
                        </h2>
                        <div id="flush-collapseoil" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. Visit our Loan Page, where you can find top banks for tractor
                                    loans. Here you can get a loan at the best rate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Tractor Insurance FAQ's End  -->

    <?php
include 'includes/footer.php';
include 'includes/footertag.php';

?>
    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
        return this.optional(element) || /^[789]\d{9}$/.test(value);
      },"Please enter a valid Indian mobile number.");

        $("#myform").validate({
            rules: {
                insurance_type: 'required',
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true, // Allow only digits
                    indianMobile: true,
                
                   
                },
                brand: "required",
                model: "required",
                enter_model: "required",
              
                registered_year: "required",
                state: "required",
                district: "required",
                
            }
           
        });


        $('#button2').on('click', function() {
            $('#myform').valid();
            console.log($('#myform').valid());
        });
    });
    </script>




</body>

</html>