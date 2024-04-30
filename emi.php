<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<head>
    <?php
   include 'includes/headertag.php';
   ?>
    <style>
    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        margin-bottom: 5px;
        position: absolute;
        padding: 0px 10px;
        margin-top: -11px;
        background: #fff;
        margin-left: 20px;
    }

    label.error {
        color: red !important;
        margin-bottom: 2px;
        font-size: 13px;
    }

    .hidden {
        display: none;
    }

    .text_emi {
        padding: 4px;
        margin-bottom: 15px;
        border: 1px solid black;
        /* border-radius: 5px; */
        color: black;
        /* background-color: rgba(255, 255, 255, 0.8); */
        background-color: rgb(243 238 238 / 80%);

    }

    .slidecontainer {
        width: 100%;
    }

    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 20px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider:hover {
        opacity: 1;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }
    </style>

</head>

<body>
    <?php
   include 'includes/header.php';
   ?>
   <section id="section_1">
        <section class="mt-5 pt-4">
            <div class="container py-1">
                <div class="mt-5 pt-3">
                    <span class="mt-5 text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>
                        <span class="text-dark">EMI Calculator</span>
                    </span>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row siv" id="">
                <img src="assets/images/emi_tractor.png" alt="reload img" class="w-100" style="height: 350px;">
            </div>
        </div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
                <div class="col">
                    <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title fw-bold assured px-2">Tractor Loan EMI Calculator</h3>
                            <p class="py-2">Discover the ease of financial planning with BharatAgrimart's user-friendly Tractor Loan EMI Calculator. It's designed to make your life simpler. With our EMI calculator, you can quickly find out how much your tractor EMI will be, the total interest you'll pay, and the overall amount. Just enter some important details like -</p>
                            <div id="moreContent" style="display:none;">
                                <ul>
                                    <li>(a) The amount you're borrowing</li>
                                    <li>(b) The interest rate</li>
                                    <li>(c) And how long you'll be repaying the loan</li>
                                </ul>
                                <p>BharatAgrimart is here to help you make your tractor ownership dreams come true without any confusion or hassle.</p>
                            </div>
                            <a href="javascript:void(0)" class="text-primary read-more text-decoration-none fw-bold float-end" onclick="toggleContent()">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="my-4">
            <div class="container  shadow">
                <h3 class="fw-bold assured px-2 mt-2">Calculate Your Tractor Loan EMI</h3>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <form id="brandModelForm" method="POST">
                            <div class="form-outline mt-2 py-3">
                                <label class="form-label fw-bold" for="brandSelect">Brand</label>
                                <select class="form-select py-2" aria-label="Default select example" id="brandSelect"name="brandSelect">
                                </select>
                            </div>
                            <div class="form-outline mt-3">
                                <label class="form-label fw-bold" for="modelSelect">Model</label>
                                <select class="form-select py-2" aria-label="Default select example" id="modelSelect" name="modelSelect">
                                </select>
                            </div>
                            <button type="submit" class="w-100 fw-bold btn btn-success mt-3 mb-1" id="calculateEMI">Calculate EMI</button>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mb-4">
                                <h3 class="fw-bold">EMI</h3>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mb-4">
                                <h3 class="fw-bold">--</h3>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                                <h6>*Ex-showroom Price</h6>
                                <p>--</p>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                                <h6>Total Loan Amount</h6>
                                <p>--</p>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                                <h6>Payable Amount</h6>
                                <p>--</p>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                                <h6>You’ll pay extra</h6>
                                <p>--</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-4">
            <div class="container my-5">
                <h3 class="fw-bold assured px-2 py-2">About Tractor Loan EMI Calculator in India</h3>
                <div class="" role="alert">
                    <p>
                        EMI is the monthly payment to repay a loan. It includes interest and principal. The amount is
                        divided by the loan term.</p>
                    <p>The percentage of the EMI that goes towards principal payment depends on the interest rate. The
                        interest portion of the EMI is higher in the beginning and decreases over time.</p>
                    <p>The amount of principal and interest in your EMI will stay the same, but the percentage of each will
                        change over time. You will pay more towards the principal and less towards interest as you make more
                        payments.</p>
                    <p>The formula for calculating EMI is:</p>
                    <P class="text-danger">EMI = P * r * (1 + r)^n / (1 + r)^n - 1</P>Where:
                    <ul>
                        <li><span class="text-danger">p</span> is the principal loan amount</li>
                        <li><span class="text-danger">r</span> is the monthly interest rate</li>
                        <li><span class="text-danger">n</span> is the loan term in months</li>
                    </ul>
                    <p>Let's use an example to calculate the EMI. Let's say you borrow Rs 5,00,000 from a bank at a rate of
                        10% per year for 5 years (60 months). Your EMI will be:</p>
                    <p class="text-danger">EMI = 500000 * 0.01 * (1 + 0.01)^60 / (1 + 0.01)^60 - 1</p>
                    <p class="text-danger">= 10,833.33</p>
                    <p>This means that you will need to pay Rs 10,833.33 every month for 5 years to repay the loan.</p>
                    <h6 class="fw-bold assured px-2">What is Tractor EMI?</h6>
                    <p>It's the money you give back for the tractor loan. Pay it monthly, every 3 or 6 months. Remember,
                        interest is higher at the start and interest rate is the percent added on the main amount. Imagine
                        you borrow money to buy a tractor. The EMI (Equated Monthly Installment) is the amount you pay back
                        each month, every 3 months, or every 6 months to the bank or lender.</p>
                    <h6 class="fw-bold assured px-2">What is Tractor Loan Interest Rate?</h6>
                    <p>The interest rate is like a fee the bank charges for letting you borrow their money. It's calculated
                        as a percentage of the total loan amount. So, when you know the loan amount, the interest rate, and
                        how often you'll pay, you can use the EMI calculator to see exactly how much you'll be paying back.
                        This way, you can plan your finances wisely and make your tractor dream come true.</p>
                    <h6 class="fw-bold assured px-2">Choose Your EMI Plan</h6>
                    <p>At BharatAgrimart, we understand that different farmers have different needs and income cycles.
                        That's why we offer you a variety of options to choose from when it comes to repaying your tractor
                        loan.</p>
                    <p>Certainly, we give you the flexibility to choose your payment frequency – whether it's every month,
                        every three months (quarterly), or every six months (half-yearly). This adaptable approach ensures
                        that your repayment schedule aligns seamlessly with your income patterns, offering you comfort
                        throughout your tractor loan journey. And with our EMI calculator for tractor loans, you can easily
                        determine your repayment amounts.</p>
                    <p>Our platform is designed to make things easy for you. We provide a tool that helps you find out
                        exactly how much you need to pay based on the payment frequency you select. Whether it's on a
                        monthly basis, every few months, or twice a year, you'll know the exact amount you're expected to
                        pay.</p>
                    <p>So, rest assured that with BharatAgrimart, you're in control. You can plan your finances smartly and
                        avoid any surprises.</p>
                    <p>We believe in transparency and ensuring that you're fully aware of your payment commitments. Choose
                        the payment schedule that suits you best and embark on your tractor ownership journey with
                        confidence.</p>
                </div>
            </div>
        </section>

        <section class="my-4">
            <div class="container my-5">
                <h3 class="fw-bold assured px-2 py-2">How to Use a Tractor EMI Calculator?</h3>
                <div class="" role="alert">
                    <p>Calculating your tractor loan EMI is a breeze with our user-friendly EMI Calculator. Here's how to go
                        about it:</p>
                    <p><span class="fw-bold">1. Select Brand:</span> Choose the brand of tractor you're interested in.</p>
                    <p><span class="fw-bold">2. Select Model:</span> Pick the specific model of the tractor you want to know
                        the EMI for.</p>
                    <p><span class="fw-bold">3. Click 'Calculate EMI':</span>After making your selections, click on the
                        'Calculate EMI' button.</p>
                    <p>Once you do that, you'll see the following details displayed:</p>
                    <ul>
                        <li>• EMI: This is your monthly installment amount.</li>
                        <li>• Ex-showroom Price: The cost of the tractor before any additional charges.</li>
                        <li>• Total Loan Amount: The sum you're borrowing for the tractor.</li>
                        <li>• Payable Amount: The overall amount you'll pay, including interest.</li>
                    </ul>
                    <p>You'll Pay Extra: This shows how much more than the tractor's cost you'll be paying due to interest.
                    </p>
                    <p>With these details at your fingertips, you can make informed decisions about your tractor loan. It's
                        simple and hassle-free – just the way we like to help you!</p>

                </div>
            </div>
        </section>

        <section class="my-4">
            <div class="container my-5">
                <h3 class="fw-bold assured px-2 py-2">Why Use Tractor Loan EMI Calculator?</h3>
                <div class="" role="alert">
                    <p>Our offered <span class="fw-bold">tractor EMI calculator</span> is convenient to use and offers quick
                        calculations so that you can make wise decisions before financing your tractor. This well-programmed
                        tool helps you get the precise amount or sum that you would have to pay to buy your new or used
                        tractor in India. You can easily find EMI value for any tractor brand and model of choice in quick
                        clicks.</p>
                    <i>Explore the tool now to know your monthly repayment sum before taking a 
                        <a class="text-decoration-none" href="new_tractor_loan.php">tractor loan</a>!</i>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="lecture_heading text-center">
                    <h4 class="fw-bold mt-4 pt-4">Tractor Loan EMI FAQ's</h4>
                </div>
                <div class="mt-4 pb-5">
                    <div class="accordion " id="accordionFlushExample">
                        <div class="accordion-item  rounded-3">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">Que. What Is a tractor loan EMI?</button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. EMI is Equated Monthly Instalments. It is the monthly
                                        instalment amount you pay throughout the loan time period against the tractor loan
                                        you take from lending banks. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">Que. What is a tractor down payment?</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. Tractor down payment is the partial amount you pay against the
                                        total tractor loan amount.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">Que. What will be the interest rate for a tractor
                                    loan?</button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. The interest rate of your tractor loan depends on the lending
                                        bank you choose for the tractor loan, and it also depends on the down payment,
                                        interest rates and loan tenure you opt for.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">Que. What are the steps to calculate tractor loan EMI
                                    from BharatAgrimart?</button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. You can calculate EMI with BharatAgrimart in 3 steps:
                                    <ul>
                                        <li>(a) Visit BharatAgrimart official website.</li>
                                        <li>(b) Click on the EMI Calculator tab on the main menu bar.</li>
                                        <li>(c) Select the Tractor brand and model, enter the required details, and finally,
                                            click on the “calculate EMI” button.</li>
                                    </ul>
                                    Upon doing that, you will get the total EMI payable based on the loan tenure, interest
                                    rate and loan amount.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">Que. What late charges are applicable on missed
                                    EMI?</button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. The late fees on missed EMI depends on the bank and lending
                                        institution you apply for a tractor loan from. Make sure to read their terms and
                                        conditions before acquiring any loan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false"
                                    aria-controls="flush-collapse6">Que. How much is the tenure of a tractor loan?</button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. The maximum loan tenure for tractors is 84 months which is 7
                                        years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-headingoil">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false"
                                    aria-controls="flush-collapseoil">Que. What to do after paying the last tractor loan
                                    EMI?</button>
                            </h2>
                            <div id="flush-collapseoil" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. After paying the last tractor loan EMI:
                                    <ul>
                                        <li>(a) Make sure to get your bank's close loan receipt and the last EMI receipt.
                                        </li>
                                        <li>(b) Get the NOC (No Objection Certificate) or the NDC (No Due Certificate) from
                                            the
                                            bank or lending institution.</li>
                                        <li>(c) Get the repayment certificate from the Bank.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  rounded-3 my-3">
                            <h2 class="accordion-header" id="flush-heading7">
                                <button class="accordion-button collapsed  fw-bold h4" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false"
                                    aria-controls="flush-collapse7">Que. What documents do you need for a tractor
                                    loan?</button>
                            </h2>
                            <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="text-dark">Ans. For a tractor loan, you must submit a copy of all the KYC
                                        documents to the finance company. The KYC includes your current address, income
                                        proof, Aadhar Card, PAN Card, and Bank statement.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </section>

    <section id="section_2" style="display: none;">
        <section class="mt-5 pt-4 bg-light">
            <div class="container ">
                <div class="mt-5 pt-3">
                    <span class="mt-5 text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>
                        <span class="text-dark">Tractor loan EMI Calculator</span>
                    </span>
                </div>
            </div>
        </section>
        <div class="container mt-2 mb-4">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h3 class="card-title  fw-bold assured px-2"><span id="main_brand"></span> <span id="brand_model"></span> Tractor loan EMI Calculator</h3>
                        
                            <div class="more-content">
                                <p id="description"></p>
                            </div>
                            </p>
                            <a href="javascript:void(0)"
                                class=" text-primary read-more text-decoration-none fw-bold float-end"
                                data-toggle="collapse" data-target="#collapse1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="">
                    <a href="emi.php">
                        <button class="float-end"><i class="fas fa-edit"></i></button>
                    </a>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                      <h3 class="assured  p-2 mt-2 fw-bold"><span id="brand_main"></span></h3>
                        <div>
                            <div class="swiper swiper_buy mySwiper2_buy">
                                <div class="swiper-wrapper swiper-wrapper_buy">
                                    <div class=" swiper-slide swiper-slide_buy">
                                        <img class="img_buy" src="assets/images/437-1632718440.webp" />
                                    </div>
                                </div>
                            </div>
                            <!-- <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div> -->
                        </div>
                        <!-- <img src="assets\images\preet-4049-4WD.webp" class="w-100 mt-3"> -->
                        <button type="button" class="w-100 btn btn-outline-success fw-bold mt-3 mb-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Get on road
                            Price</button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-dark fw-bold" id="staticBackdropLabel">Fill
                                            the form to Get Tyre Price MRF SHAKTI LIFE 13.6 - 28</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="model-cont">
                                            <form id="hire_inner" name="hire_inner" method="post">
                                                <div class="row">
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4" hidden>
                                                        <div class="form-outline">
                                                            <label class="form-label" for="first_name">Product type Id</label>
                                                            <input type="text" id="product_type_id" name=""
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4" hidden>
                                                        <div class="form-outline">
                                                            <label class="form-label" for="first_name">Enquiry Type Id</label>
                                                            <input type="text" id="enquiry_type_id" name=""value="2"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4" hidden>
                                                        <div class="form-outline">
                                                            <label class="form-label" for="first_name">Product Type </label>
                                                            <input type="text" id="product_id" name=""value=""
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="first_name">First
                                                                Name</label>
                                                            <input type="text" id="first_name" name="first_name"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="last_name">Last
                                                                Name</label>
                                                            <input type="text" id="last_name" name="last_name"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="mobile_number">Mobile
                                                                Number</label>
                                                            <input type="text" id="mobile_number" name="mobile_number"
                                                                class=" data_search form-control input-group-sm py-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label for="state" class="form-label  fw-bold"> <i class="fas fa-location"></i> State</label>
                                                            <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label for="district" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                            <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                                            </select>
                                                        </div>
                                                    </div>       
                                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                        <div class="form-outline">
                                                            <label for="Tehsil" class="form-label fw-bold "> Tehsil</label>
                                                            <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                                             </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    
                                        <button type="button" id="button_hire" class="btn btn-danger"  data-bs-dismiss="modal" onclick="savedata()">Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-12 col-md-6 col-sm-6 col-lg-6 mt-5">
                        <div class="row">
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                                <label for="emiAmount" class="form-label h3 text-dark fw-bold">EMI</label>

                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                                <input type="text" class="form-control" id="emiAmount" readonly>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-3 text-center">
                                <label for="exShowroomPrice" class="form-label h5 text-dark fw-bold">Ex-showroom
                                    Price</label>
                                <input type="text" class="form-control" id="exShowroomPrice" value="" readonly>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-3 text-center">
                                <label for="totalLoanAmount" class="form-label h5 text-dark fw-bold">Total Loan
                                    Amount</label>
                                <input type="text" class="form-control" id="totalLoanAmount" readonly>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-3 text-center">
                                <label for="payableAmount" class="form-label h5 text-dark fw-bold">Payable Amount</label>
                                <input type="text" class="form-control" id="payableAmount" readonly>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-3 text-center">
                                <label for="extraPayment" class="form-label h5 text-dark fw-bold">You'll Pay Extra</label>
                                <input type="text" class="form-control" id="extraPayment" readonly>
                            </div>
                            <a href="new_tractor_loan.php">
                                <button type="button"class="w-100 fw-bold btn btn-success mt-4 mb-2">View Loan Offers</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container shadow mt-5 mb-3">
                <div class="row">
                    <!-- Downpayment -->
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 py-2 mt-2 mb-1">
                        <label for="downPayment" class="form-label fw-bold text-dark h5 ">Downpayment (₹)</label>
                        <input type="range" class="form-range" id="downPaymentRange" min="0" max="" step="10000"
                            value="10">
                        <input type="number" class="form-control mt-2 w-25" id="downPayment" min="0" max="" value="10">
                        <div class="invalid-feedback" id="downPaymentError"></div>
                    </div>

                    <!-- Bank Interest Rate -->
                    <div class=" col-12 col-lg-6 col-md-6 col-sm-6 py-2 mt-2 mb-1">
                        <label for="interestRate" class="form-label fw-bold text-dark h5 ">Bank Interest Rate
                            (%)</label>
                        <input type="range" class="form-range" id="interestRateRange" min="11" max="25" value="15">
                        <input type="number" class="form-control mt-2 w-25" id="interestRate" min="11" max="25" value="15">
                        <div class="invalid-feedback" id="interestRateError"></div>
                        <!-- <input type="range" class="form-range" id="interestRate" min="11" max="22" value="15">
                        <input type="number" class="form-control  w-25" id="interestRateValue" value="15" readonly> -->
                    </div>

                    <!-- Loan Period -->
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 py-2 mt-2 mb-1">
                        <label for="loanPeriod" class="form-label fw-bold text-dark h5 ">Loan Period (Months)</label>
                        <select class="form-select w-25" id="loanPeriod">
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="24">24</option>
                            <option value="30">30</option>
                            <option value="36">36</option>
                            <option value="42">42</option>
                            <option value="48">48</option>
                            <option value="54">54</option>
                            <option value="60" selected>60</option>
                            <option value="66">66</option>
                            <option value="72">72</option>
                            <option value="78">78</option>
                            <option value="84">84</option>

                        </select>
                    </div>
                    <!-- Repayment Interval -->
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 py-2 mt-2 mb-1">
                        <label for="repaymentInterval" class="form-label fw-bold text-dark h5">Repayment
                            Interval</label>
                        <select class="form-select w-25" id="repaymentInterval">
                            <option value="monthly" selected>Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="halfYearly">Half-Yearly</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                </div>
                <div class="modal-body">
                    <form id="otp_form">
                        <div class=" col-12 input-group">
                        <!-- <div class="col-12" hidden>
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
                            </div> -->
                            <div class="col-12">
                                <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"name="opt_1">
                            </div>
                            <div class="float-end col-12">
                                <a href="" class="float-end">Resend OTP</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-success" id="Verify" onclick="verifyotp()">Verify</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
    
<script>
document.getElementById("calculateEMI").addEventListener("click", function() {
  // Hide the parent section of the button (section_1)
  document.getElementById("section_1").style.display = "none";
  
  // Show section_2
  document.getElementById("section_2").style.display = "block";
});

</script>
<script>
  // JavaScript
  $(document).ready(function() {

var noDataMessage = $("<h5>").attr({
  id: "noDataMessage",
  class: "text-center mt-4 text-danger",
  style: "display: none;"
}).html("<img src='assets/images/404.gif' class='w-25' alt=''><br>Data not found..!");

// Append the 'noDataMessage' element to the body of the document
$("body").append(noDataMessage);

$("#brandModelForm").submit(function(event) {
    event.preventDefault();
    
    var brand = $("#brandSelect").val();
    var model = $("#modelSelect").val();
    const paraArr = {
        'brand_id': brand,
        'model': model,
    };
    var url = "<?php echo $CustomerAPIBaseURL; ?>get_price_by_brand_model";
    
    $.ajax({
        url: url,
        method: "POST",
        data: paraArr,
        success: function(response) {
            // Check if 'price' object exists in the response
            if (response.price) {
                var priceData = response.price;
                // Update description
                $("#description").html(priceData.description);
                // Update brand_main
                $("#brand_main").text(priceData.brand_name);
                $("#main_brand").text(priceData.brand_name);
                $("#brand_model").text(priceData.model);

                // Extract starting price (remove commas and spaces)
                var startingPrice = parseFloat(priceData.starting_price.replace(/[, ]/g, ''));
                // Check the format of starting price
                if (priceData.starting_price.includes(',')) {
                    // If the starting price is in "9,60,000" format
                    startingPrice *= 1; // Convert to "9600000" format
                } else {
                    // If the starting price is in "8.10" format
                    startingPrice *= 100000; // Convert to "810000" format
                }
                
                // Update exShowroomPrice input field
                $("#exShowroomPrice").val(startingPrice);

                // Set the range slider value
                $("#downPaymentRange").val(startingPrice);
                $("#downPaymentRange").attr("max", startingPrice);
                var downPayment = Math.round(startingPrice / 10);
                $("#downPayment").val(downPayment);
                $("#downPayment").attr("max", downPayment);
                
                // Get the image URL
                var imageNames = priceData.image_names.split(',');
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageNames[0].trim();

                // Update the image source
                $(".img_buy").attr("src", imageUrl);
                updateEMI();
            } else {
                console.error('Price data not found in the response.');
                // Show noDataMessage and hide section_2 if data not found
                $("#noDataMessage").show();
                $("#section_2").hide();
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            console.error('Request failed:', textStatus);
            console.error('Error:', xhr.responseText);
        }
    });
});
});
</script>
    <script>
    function toggleContent() {
        var moreContent = document.getElementById('moreContent');
        var readMoreLink = document.querySelector('.read-more');
        
        if (moreContent.style.display === 'none') {
            moreContent.style.display = 'block';
            readMoreLink.innerText = 'Read Less';
        } else {
            moreContent.style.display = 'none';
            readMoreLink.innerText = 'Read More';
        }
    }
</script>
    
    <script>
    $(document).ready(function() {
        // var storedData = JSON.parse(localStorage.getItem('formData')) || {};
        //     $('#brandSelect').val(storedData.brandSelect || '');
        //     $('#modelSelect').val(storedData.modelSelect || '');
        $("#brandModelForm").validate({
            rules: {
                brandSelect: 'required',
                modelSelect: 'required',
            },
            submitHandler: function (form) {
             
                    // window.location.href = "emi_inner.php";
                    // return false; 
                }
            });
    
        });


        // $('#calculateEMI').on('click', function() {
        //     $('#brandModelForm').valid();
        //     console.log($('#brandModelForm').valid());
          
        // });

    // function showEMIForm() {
    //     // Validate the first form
    //     if ($("#brandModelForm").valid()) {
    //         // Hide the first form and show the second form
    //         $("#form1").addClass("hidden");
    //         $("#form2").removeClass("hidden");
    //     }
    // }

    </script>

<script>
   function get_1() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
            const select = document.getElementById('brandSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
                    // console.log(row.id,);
                    select.appendChild(option);
                });
  
                // Add event listener to brand dropdown
                select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_model_1(selectedBrandId);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  function get_model_1(id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('modelSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.model.length > 0) {
                data.model.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.model;
                    option.value = row.model;
                    select.appendChild(option);
  
                   
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
get_1();
</script>
<!-- For inner cards and details -->
<script>
    document.querySelectorAll('.read-more').forEach(function(button, index) {
        button.addEventListener('click', function() {
            var moreContent = document.querySelectorAll('.more-content')[index];
            var buttonText = button.innerText.trim().toLowerCase();

            if (buttonText === 'read more') {
                moreContent.style.display = 'inline';
                button.innerText = 'Read Less';
            } else {
                moreContent.style.display = 'none';
                button.innerText = 'Read More';
            }
        });
    });
    var brandModelData = {
        "Brand 1": ["Model A", "Model B", "Model C"],
        "Brand 2": ["Model X", "Model Y", "Model Z"],
        "Brand 3": ["Model I", "Model II", "Model III"]
    };
    var brandSelect = document.getElementById("brandSelect");
    for (var brand in brandModelData) {
        var option = document.createElement("option");
        option.value = brand;
        option.text = brand;
        brandSelect.add(option);
    }
    function populateModels() {
        var brandSelect = document.getElementById("brandSelect");
        var modelSelect = document.getElementById("modelSelect");

        modelSelect.innerHTML = '<option value="">Select Model</option>';

        var selectedBrand = brandSelect.value;

        var models = brandModelData[selectedBrand];
        if (models) {
            models.forEach(function(model) {
                addOption(modelSelect, model);
            });
        }
    }
    function addOption(selectElement, optionText) {
        var option = document.createElement("option");
        option.text = optionText;
        selectElement.add(option);
    }
    $(document).ready(function() {
        $("#brandModelForm").validate({
            rules: {
                brandSelect: 'required',
                modelSelect: 'required',
            }
        });

    });
</script>
<script>
   $(document).ready(function() {
    $('#downPaymentRange').val(10);
});

$('#downPayment, #interestRate, #loanPeriod, #repaymentInterval').on('input change', function() {
    updateEMI();
});

// Update range slider values when textboxes change
$('#downPayment').on('input', function() {
    var value = $(this).val() || 0;  // Use 0 if the textbox is empty
    $('#downPaymentRange').val(value);
    updateEMI();
});

$('#interestRate').on('input', function() {
    var value = $(this).val() || 0;  // Use 0 if the textbox is empty
    $('#interestRateRange').val(value);
    updateEMI();
});

// Update textboxes when range sliders change
$('#downPaymentRange').on('input', function() {
    $('#downPayment').val($(this).val());
    updateEMI();
});

$('#interestRateRange').on('input', function() {
    $('#interestRate').val($(this).val());
    updateEMI();
});

// jQuery validation for downpayment and interest rate
$('#downPayment').on('input', function() {
    var downPayment = parseFloat($(this).val());
    var errorMessage = $('#downPaymentError');
    if (downPayment < 0 || downPayment > exShowroomPrice) {
        $(this).addClass('is-invalid');
        errorMessage.text('Downpayment must be between 0 and ' + exShowroomPrice + '.');
    } else {
        $(this).removeClass('is-invalid');
        errorMessage.text('');
    }
});

$('#interestRate').on('input', function() {
    var interestRate = parseFloat($(this).val());
    var errorMessage = $('#interestRateError');
    if (interestRate < 11 || interestRate > 25) {
        $(this).addClass('is-invalid');
        errorMessage.text('Interest rate must be between 11 and 25.');
    } else {
        $(this).removeClass('is-invalid');
        errorMessage.text('');
    }
});

// Update EMI calculation based on user input
function updateEMI() {
    var exShowroomPrice = parseFloat($("#exShowroomPrice").val());
    var downPayment = parseFloat($('#downPayment').val() || 0); // Use 0 if the textbox is empty
    var loanAmount = exShowroomPrice - downPayment;
    var interestRate = parseFloat($('#interestRate').val()) / 100;
    var loanPeriod = parseInt($('#loanPeriod').val());
    var repaymentInterval = $('#repaymentInterval').val();

    // Set the value of downPaymentRange
    $('#downPaymentRange').val(downPayment);

    // Validation
    if (isNaN(exShowroomPrice) || isNaN(downPayment) || isNaN(interestRate) || isNaN(loanPeriod)) {
        return;
    }

    // Calculate EMI
    var monthlyInterestRate = interestRate / 12;
    var numberOfPayments = loanPeriod;
    var emi;

    if (monthlyInterestRate > 0) {
        emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
            (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);
    } else {
        emi = loanAmount / numberOfPayments;
    }

    // Adjust EMI for different repayment intervals
    if (repaymentInterval === 'quarterly') {
        emi *= 3;
        numberOfPayments /= 3;
    } else if (repaymentInterval === 'halfYearly') {
        emi *= 6;
        numberOfPayments /= 6;
    }

    // Display calculated results
    $('#emiAmount').val(`₹${emi.toFixed(2)} ${repaymentInterval}`);
    $('#totalLoanAmount').val(`₹${loanAmount.toFixed(2)}`);
    $('#payableAmount').val(`₹${(emi * numberOfPayments).toFixed(2)}`);
    $('#extraPayment').val(`₹${((emi * numberOfPayments) - loanAmount).toFixed(2)}`);
}

// Initial EMI calculation
updateEMI();

    // Update EMI when input values change
    $('#downPayment, #interestRate, #loanPeriod, #repaymentInterval').on('input change', function() {
        updateEMI();
    });
</script>

<script>
    $(document).ready(function() {
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
                mobile_number: {
                    required: true,
                    digits: true, // Allow only digits
                },
                state: "required",
                district: "required",
            }
        });
        $('#button_hire').on('click', function() {
            $('#hire_inner').valid();
            console.log($('#hire_inner').valid());
        });
    });
</script>
<script>
function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const stateSelect = document.getElementsByClassName(stateClassName)[0];
            stateSelect.innerHTML = '<option selected  value="">Please select a state</option>';

            const stateId = 7; // State ID you want to filter for
            const filteredState = data.stateData.find(state => state.id === stateId);
            if (filteredState) {
                const option = document.createElement('option');
                option.textContent = filteredState.state_name;
                option.value = filteredState.id;
                stateSelect.appendChild(option);
                // Once the state is populated, fetch and populate districts immediately
                getDistricts(filteredState.id, districtClassName, tehsilClassName);
            } else {
                stateSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getDistricts(state_id, districtClassName, tehsilClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
    console.log(url);
    var districtSelect = document.getElementsByClassName(districtClassName)[0];
    districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.districtData.length > 0) {
                data.districtData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    districtSelect.appendChild(option);
                });
                // If needed, you can fetch and populate tehsils for the default district here
                // For now, let's leave it blank
                districtSelect.addEventListener('change', function() {
                    populateTehsil(districtSelect.value, tehsilClassName);
                });
            } else {
                districtSelect.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
    console.log(url);
    var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
    tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.tehsilData.length > 0) {
                data.tehsilData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.tehsil_name;
                    option.value = row.id;
                    if (row.id === selectedTehsilId) {
                        option.selected = true;
                    }
                    tehsilSelect.appendChild(option);
                });
            } else {
                tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching tehsils:', error);
        }
    });
}

// Call the function to populate dropdowns with specific class names
populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
</script>
<script>
       var userId = localStorage.getItem('id');
            getUserDetail(userId);
 function savedata() {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            // $('#staticBackdrop').modal('show');
        }
    } else {
        var mobile = $('#mobile_number').val();
        get_otp(mobile);
    }
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
function get_otp(phone) {
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            $('#get_OTP_btn').modal('show'); 
            // $('#staticBackdrop').modal('show');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function verifyotp() {
    var mobile = $('#mobile_number').val();
    var otp = $('#otp').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
                // $('#staticBackdrop').modal('show');
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            // Handle different error scenarios
            if (xhr.status === 401) {
                console.log('Invalid credentials');
                var htmlcontent = `<p>Invalid credentials!</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else if (xhr.status === 403) {
                console.log('Forbidden: You don\'t have permission to access this resource.');
                var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else {
                console.log('An error occurred:', textStatus, errorThrown);
                var htmlcontent = `<p>An error occurred while processing your request.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            }
        },
    });
}
function submitForm() {
    // Gather form data
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = $('#product_type_id').val()
    var product_id = $('#product_id').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile = $('#mobile_number').val();
    var state = $('#state_form').val();
    var district = $('#district_form').val();
    var tehsil = $('#tehsil').val();

    // Construct parameter array
    var paraArr = {
        'product_id':product_id,
        'enquiry_type_id':enquiry_type_id,
        'product_type_id': product_type_id,
        'first_name': first_name,
        'last_name':last_name,
        'mobile':mobile,
        'state':state,
        'district':district,
        'tehsil':tehsil,
    };

    // API endpoint for form submission
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";

    // Submit form data via AJAX
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            // Show success message or handle accordingly
            console.log("Form submitted successfully!");
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}
function getUserDetail(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;
    console.log(url, 'url print ');

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };

    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            console.log(response, "response");

            // Check if customerData exists in the response and has at least one entry
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                console.log(customer, 'customer details');
                
                // Set values based on form ID (used_farm_inner_from)
                $('#hire_inner #first_name').val(customer.first_name);
                $('#hire_inner #last_name').val(customer.last_name);
                $('#hire_inner #mobile_number').val(customer.mobile);
                // $('#hire_inner #state_form').val(customer.state.id);
                // $('#hire_inner #district').val(customer.district);
                // $('#hire_inner #Tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#hire_inner input, #hire_inner select').not('#state_form,#district_form,#tehsil').prop('disabled', true);
                }
                
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
</script>

</body>

</html>