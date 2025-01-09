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
    <script src="<?php $baseUrl; ?>model/tractor_loan_customer.js" defer></script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js" defer></script>
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
.form-outline .form-label {
    color: #454444;
    font-weight: 500;
    margin-bottom: 5px;
    position: absolute;
    margin-top: -12px;
    background: #fff;
    margin-left: 20px;
}
.card {
    margin-right: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.cards {
    max-height: 4rem;
    object-fit: contain;
    width: 100%;
}
.card-title{
    font-size: 14px;
}
.container-mid {
    max-width: 1280px;
    margin: 0 auto;
    width: 98%;
    padding-left: 8px;
    padding-right: 8px;
}
</style>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <section class=" mt-4 pt-5 bg-light">
        <div class="container pt-3 mt-4">
            <div class="py-2">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                        class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="">
                        <span class="text-dark header-link  px-1">Enquiries <i
                            class="fa-solid fa-chevron-right px-1"></i>
                        </span>
                    </span>
                    <span class="text-dark">All Loan</span>
                </span>
            </div>
        </div>
    </section>
    <!--Popular Tractor Insurance Companies-->
    <div class="container">
        <h4 class="mt-5 mb-4 assured px-2 fw-bold">Popular Tractor Loan Companies</h4>
        <div class="row mt-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/CHOLA.png" class="card-img-top cards p-2" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Chola</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/HDB.png" class="card-img-top cards p-3" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">HDB</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/HDFC_bank.jpg" class="card-img-top cards p-3" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">HDFC</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/IDFC_bank.png" class="card-img-top cards p-3" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">IDFC</h5>
                    </div>
                </div>
            </div>
             <div class="col-12 col-lg-2 col-sm-6  mb-4">
                <div class="card">
                    <img src="assets/images/INDUSIND BANK.png" class="card-img-top cards" alt="Company 3">
                    <div class="card-body">
                        <h5 class="card-title text-center">INDUSIND</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/KOTAK MAHINDRA.png" class="card-img-top cards" alt="Company 4">
                    <div class="card-body">
                        <h5 class="card-title text-center">KOTAK MAHINDRA</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/L AND T.png" class="card-img-top cards" alt="Company 5">
                    <div class="card-body">
                        <h5 class="card-title text-center">L AND T</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/MMFSL.jpg" class="card-img-top cards" alt="Company 6">
                    <div class="card-body">
                        <h5 class="card-title text-center">MMFSL</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/RBL_bank.jpg" class="card-img-top cards" alt="Company 6">
                    <div class="card-body">
                        <h5 class="card-title text-center">RBL</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-sm-6 mb-4">
                <div class="card">
                    <div class="">
                    <img src="assets/images/SHRIRAM.png" class="card-img-top cards p-1" alt="Company 6">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">SHRIRAM</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--Banner-->
    <div class="container-fluid">
        <div class="row siv" id="">
            <div class="container-mid mt-4">
                <div class="justify-content-center loan_form bg-light border border-dark">
                    <div id="loanForm">
                        <form id="applicationForm" method="POST">
                            <h3 class="text-dark text-center fw-bold mt-4">Secure Your Loan with the Best Rates</h3>
                            <h6 class="text-dark text-center mt-2">Provide Your Details to Access Exclusive Loan Options
                            </h6>
                            <div class="row px-4">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="loanType">Loan Type</label>
                                        <select class="form-select" id="loanType" name="loanType" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4" hidden>
                                    <div class="form-outline">
                                        <label class="form-label" for="firstName"> Name</label>
                                        <input type="text" class="form-control" id="enquiry_type_id" value="" name="" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="mobileNo">Mobile Number</label>
                                        <input type="tel" class="form-control" id="mobileNo" name="mobileNo" required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="brand">Brand</label>
                                        <select class="form-select" id="brand" name="brand" >
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="model">Model</label>
                                        <select class="form-select" id="model" name="model" >
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="vehicleRegNo">Vehicle Registered Number</label>
                                        <input type="text" class="form-control" id="vehicleRegNo" name="vehicleRegNo"  />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="registeredYear">Registered Year</label>
                                        <select class="form-select" id="registeredYear" name="registeredYear" >
                                            <option value="" selected disabled>Select Year</option>
                                            <script>
                                            for (let year = 2023; year >= 2008; year--) {
                                                document.write(`<option value="${year}">${year}</option>`);
                                            }
                                            </script>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="state">State</label>
                                        <select class="form-select state-dropdown" id="state" name="state" required>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="district">District</label>
                                        <select class="form-select district-dropdown"  id="district" name="district" required>
                                        </select>
                                    </div>
                                </div>
                             
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="tehsil">Tehsil</label>
                                        <select class="form-select tehsil-dropdown" id="tehsil" name="tehsil">>
                                        </select>
                                    </div>
                                </div>
                                <p class="text-center mt-3">By proceeding ahead you expressly agree to the Bharat
                                    Agrimart's
                                    <a href="privacy_and_policy.php" class="text-decoration-none">Terms &
                                        Conditions*</a>
                                </p>
                                <div class="d-grid col-8 mx-auto mb-3">
                                <button type="button" class="btn btn-success fw-bold" id="apply_loan">Apply for Loan</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light">
        <div class="section-heading mb-2 text-center">
            <h3 class="text-dark fw-bold mt-5">Tractor Loan Interest Rate Comparison</h3>
            <p class="mb-2">Compare the tractor loan interest rate below.</p>
        </div>
        <div class="row text-center">
            <!-- Make the table responsive -->
            <div class="table-responsive">
                <table class="mb-3 table table-bordered border border-dark" style="background-color:#77bd57;">
                    <thead>
                        <tr>
                            <th>Bank Name</th>
                            <th>Interest Rate</th>
                            <th>Loan Amount</th>
                            <th>Loan Tenure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ICICI Bank</td>
                            <td>13% p.a. to 22% p.a.</td>
                            <td>As per terms and conditions</td>
                            <td>Up to 5 years</td>
                        </tr>
                        <tr>
                            <td>State Bank of India</td>
                            <td>9.00% p.a. - 10.25% p.a.</td>
                            <td>Up to 100% finance</td>
                            <td>Up to 5 years</td>
                        </tr>
                        <tr>
                            <td>HDFC Bank</td>
                            <td>12.57% p.a. to 23.26% p.a.*</td>
                            <td>Up to 90% finance</td>
                            <td>12 months to 84 months</td>
                        </tr>
                        <tr>
                            <td>Poonawalla Fincorp</td>
                            <td>16% p.a. to 20% p.a.</td>
                            <td>Up to 90% - 95% finance</td>
                            <td>According to bank</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Table Content End-->
    <!-- Loan Solutions Tailored for Your Agricultural Needs at Bharat Agrimart's Start -->
    <div class="container">
        <h4 class="mt-5 assured px-2 fw-bold">Loan Solutions Tailored for Your Agricultural Needs at Bharat Agrimart's
        </h4>
        <p class="px-2 mt-3">Empower your farming journey with the right financial support. At Bharat Agrimart's, we offer
            a variety of loan options to suit your specific requirements. Whether you are looking to invest in a new
            tractor, a used one, implements, or even a harvester, we have you covered. Explore our diverse range of loan
            offerings and take the first step towards achieving your agricultural goals.
        </p>
        ​​​​​ <h6 class="assured px-1 fw-bold">New Tractor Loan: Transforming Agriculture</h6>
        <p class=" px-2">Unleash the potential of modern farming with our New Tractor Loans. We understand the
            significance of a reliable tractor in boosting agricultural productivity. Benefit from competitive interest
            rates and flexible repayment options, ensuring you don't compromise on your farming ambitions.
        <p>
        <h6 class=" assured fw-bold px-1 mt-5">Used Tractor Loan: Maximizing Value</h6>
        <p class="px-2">Looking to invest in a pre-owned tractor? Our Used Tractor Loans provide a financial bridge to
            make it happen. Enjoy hassle-free documentation and attractive interest rates, allowing you to bring home
            the tractor you need without financial stress.</p>
        <h6 class="assured fw-bold px-1 mt-5">Implement Loan: Enhance Your Efficiency</h6>
        <p class="px-2">Upgrade your farming equipment with our Implement Loans. From plows to harvesters, we've got you
            covered. Flexible repayment options and quick approvals make acquiring the necessary implements a seamless
            process.</p>

        <h6 class="assured  fw-bold px-1 mt-5">New Harvester Loan: Harvesting Success</h6>

        <p class="px-2">Invest in the latest harvesting technology with our New Harvester Loans. Avail yourself of
            attractive interest rates and financing options, ensuring you stay at the forefront of agricultural
            innovation.
        </p>

        <h6 class="assured fw-bold px-1 mt-5">Old Harvester Loan: Sustaining Tradition</h6>
        <p class="px-2">Preserve your traditional harvesting methods with our Old Harvester Loans. Enjoy cost-effective
            financing solutions that honor your farming heritage.
        </p>

        <h6 class="assured fw-bold px-1 mt-5">Loan Against Tractor: Unlock Your Tractor's Value</h6>
        <p class="px-2">Harness the equity in your tractor with our Loan Against Tractor. Quick approvals and convenient
            repayment options provide you with the financial flexibility you need.</p>

        <h6 class="assured fw-bold px-1 mt-5">Personal Loan: Flexible Financing for Your Needs</h6>
        <p class="px-2">For miscellaneous agricultural expenses, our Personal Loans offer a versatile financing
            solution. Whether it's for farm improvements or unexpected costs, our personal loans are tailored to meet
            your unique needs.</p>

        <h6 class="assured fw-bold px-1 mt-5">Why Choose Bharat Agrimart's for Your Agricultural Loans?</h6>
        <p class=" px-2">Specialization in Agricultural Equipment: We understand the unique needs of farmers,
            specializing in tractors and related equipment.</p>
        <p class=" px-2">Extensive Network: Our wide network of dealers, lenders, and financial institutions ensures you
            have access to the best loan options available.
        </p>
        <p class=" px-2">Tailored Solutions: We provide customized loan solutions based on your individual requirements,
            ensuring a perfect fit for your financial situation.</p>
        <p class="px-2">Transparency: We believe in transparent communication, ensuring you fully understand the terms,
            interest rates, and fees associated with your loan.</p>
        <p class="px-2">Online Accessibility: With our online services, the loan application and approval process
            becomes convenient and accessible, especially for those in remote areas.</p>
        <p class="px-2">Take the first step towards securing your agricultural future. Explore our loan options today at
            Bharat Agrimart's and experience farming with financial confidence. Get in touch with us to start your loan
            application process.</p>
        <p class="px-2">Protect Your Investment: While you're investing in your farm, don't forget to safeguard your
            equipment with our comprehensive Tractor Insurance. Learn more (link to insurance page).</p>
    </div>
    <!--Question Section-->
    <section class="about bg-white">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">FAQs on Tractor Loan</h3>
                <p>Check out the frequently asked questions below.</p>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header " id="flush-headingOne">
                            <button class="accordion-button collapsed  text-primary fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">Questions Related to New Tractor Loan</button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">
                                <ul>
                                    <li>
                                        <b>Que. Who can apply for a new tractor loan?</b>
                                        <p>Ans. All cultivators and farmland owners are eligible to apply for a new
                                            tractor loan.</p>
                                    </li>

                                    <li><b>Que. How long is the repayment period, and what is the repayment rate for a
                                            new tractor loan?</b>
                                        <p>Ans. The repayment period for a new tractor loan is typically 60 months (5
                                            years), and the rate is decided based on the customer's repayment capacity.
                                        </p>
                                    </li>

                                    <li>
                                        <b>Que. Is property mortgaging required for a new tractor loan?</b>
                                        <p>Ans. No, property mortgaging is not required for a new tractor loan.</p>
                                    </li>
                                    <li>
                                        <b>Que. Do I need a guarantor for a new tractor loan application?</b>
                                        <p>Ans. No, a guarantor is not required for a new tractor loan application.</p>
                                    </li>

                                    <li>
                                        <b>Que. What documents are needed when applying for a new tractor loan?</b>
                                        <p>Ans. Required documents include a filled application form, KYC documents,
                                            passport-sized photos, loan statements (if applicable), and land documents.
                                        </p>
                                    <li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed  text-primary fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">Questions Related to Used Tractor Loan</button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">
                                <ul>
                                    <li>
                                        <b>Que. Who is eligible for a used tractor loan?</b>
                                        <p>Ans. Individuals with a satisfactory credit history are eligible for a used
                                            tractor loan.</p>
                                    </li>

                                    <li><b>Que. How much can I borrow for a used tractor loan?</b>
                                        <p>Ans. You can borrow up to 90% of the tractor's price with a used tractor
                                            loan.
                                        </p>
                                    </li>

                                    <li>
                                        <b>Que. Is there an early repayment option for a used tractor loan?</b>
                                        <p>Ans. Repayment and closure are allowed after 6 months with some charges as
                                            mentioned in the loan agreement.</p>
                                    </li>
                                    <li>
                                        <b>Que. Where can I get a hassle-free used tractor loan?</b>
                                        <p>
                                            Ans. Tractor Junction provides hassle-free used tractor loans.</p>
                                    </li>

                                    <li>
                                        <b>Que. How long does it take to approve a used tractor loan?</b>
                                        <p>Ans. Approval for a used tractor loan is immediate after the application is
                                            submitted.</p>
                                    <li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed text-primary fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">Questions Related to Implement Loan</button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">
                                <ul>
                                    <li>
                                        <b>Que. Who is eligible for an implement loan?</b>
                                        <p>Ans. Individuals aged 18 to 65 years with a satisfactory credit history can
                                            apply for an implement loan.</p>
                                    </li>

                                    <li><b>Que. Can I use the implement loan for any type of farming equipment?</b>
                                        <p>Ans. Yes, the implement loan can be used for various farming equipment.
                                        </p>
                                    </li>

                                    <li>
                                        <b>Que. What documents are required for an implement loan?</b>
                                        <p>Ans. Required documents include a filled application form, KYC documents,
                                            passport-sized photos, loan statements (if applicable), and land documents.
                                        </p>
                                    </li>
                                    <li>
                                        <b>Que. Is there a specific repayment period for implement loans?</b>
                                        <p>Ans. The repayment period for implement loans is typically 60 months (5
                                            years).</p>
                                    </li>

                                    <li>
                                        <b>Que. Can I get an implement loan without submitting collateral?</b>
                                        <p>
                                            Ans. Yes, implement loans can be availed with or without submitting
                                            collateral, providing flexibility to applicants.</p>
                                    <li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed text-primary fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                aria-controls="flush-collapse4">Questions Related to Loan Against Tractor </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">
                                <ul>
                                    <li>
                                        <b>Que. Who is eligible for a loan against tractor?</b>
                                        <p>Ans. The owner of the tractor is eligible for a loan against tractor.</p>
                                    </li>

                                    <li><b>Que. Do I have to mortgage my tractor for a loan against tractor?</b>
                                        <p>Ans. No, you do not have to mortgage your tractor for a loan against tractor.
                                        </p>
                                    </li>

                                    <li>
                                        <b>Que. What is the minimum ownership period required for a loan against
                                            tractor?</b>
                                        <p>Ans. To be eligible, the owner must have paid at least 12 EMIs of the current
                                            loan.</p>
                                    </li>
                                    <li>
                                        <b>Que. What documents are needed for a loan against tractor?</b>
                                        <p>Ans. Required documents include proof of ownership (RC), bank account
                                            statement, KYC documents, and PAN card.</p>
                                    </li>

                                    <li>
                                        <b>Que. Is there a specific waiting period for repayment and closure?</b>
                                        <p>Ans. Repayment and closure are not allowed for the first 6 months. After
                                            that, it can be done with charges mentioned in the loan agreement.</p>
                                    <li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed text-primary fw-bold h4" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                aria-controls="flush-collapse5">Questions Related to Personal Loan</button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">
                                <ul>
                                    <li>
                                        <b>Que. Who is eligible for a personal loan?</b>
                                        <p>Ans. Personal loan eligibility depends on the lender's policy.</p>
                                    </li>

                                    <li><b>Que. What documents are required for a personal loan?</b>
                                        <p>Ans. Required documents include a photo, identity proof, address proof,
                                            income proof, and a 3-month bank statement.
                                        </p>
                                    </li>

                                    <li>
                                        <b>Que. Can I apply for a personal loan online?</b>
                                        <p>Ans. Yes, you can apply for a personal loan online at Bharat Agrimart's.</p>
                                    </li>
                                    <li>
                                        <b>Que. What is the age requirement for availing a personal loan?</b>
                                        <p>Ans. The age requirement for availing a personal loan is 23-57 years.</p>
                                    </li>

                                    <li>
                                        <b>Que. What is the interest rate for a personal loan?</b>
                                        <p>Ans. The interest rate for a personal loan ranges from 11.00% to 24.00%.</p>
                                    <li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Question Section End-->
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
    <script>
    $(document).ready(function() {
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
        }, "Phone number must start with 6 or above");

        $("#applicationForm").validate({
            rules: {
                loanType: "required",
                firstName: "required",
                lastName: "required",
                mobileNo: {
                    required:true, 
                    maxlength:10,
                    digits: true,
                    customPhoneNumber: true
                },
                enterModel: {
                },
                state: "required",
                district: "required"
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#loanType').change(function() {
            var selectedLoanTypeId = $(this).val();
            $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #enterModel, #vehicleRegNo, #registeredYear').prop('disabled', true);
            switch (selectedLoanTypeId) {
                case '1': 
                    $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #registeredYear').prop('disabled', false);
                    break;
                case '2':    
                    $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #enterModel, #vehicleRegNo, #registeredYear').prop('disabled', false);
                    break;
                case '3':      
                    $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #enterModel, #vehicleRegNo, #registeredYear').prop('disabled', false);
                    break;  
                case '4':     
                    $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #enterModel, #vehicleRegNo, #registeredYear').prop('disabled', false);
                    break;
                case '5': 
                $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #registeredYear').prop('disabled', false);
                    break;
                case '6':    
                    $('#firstName, #lastName, #mobileNo, #brand, #model, #state, #district, #tehsil, #registeredYear').prop('disabled', false);
                    break;
                case '7': 
                    $('#firstName, #lastName, #mobileNo, #state, #tehsil, #district').prop('disabled', false);
                    break;
            
                default:
                
                    break;
            }
        });
    });

</script>
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
</body>

</html>