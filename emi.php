<!DOCTYPE html>
<html lang="en">

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
                        <h3 class="card-title  fw-bold assured px-2">Tractor Loan EMI Calculator</h3>
                        <p class="py-2">Discover the ease of financial planning with BharatAgrimart's user-friendly
                            Tractor Loan
                            EMI Calculator. It's designed to make your life simpler. With our EMI calculator, you
                            can quickly find out how much your tractor EMI will be, the total interest you'll pay,
                            and the overall amount. Just enter some important details like -</p>
                        <p class="card-text">
                        <div class="more-content" style="display:none;">
                            <ul>
                                <li>(a) The amount you're borrowing</li>
                                <li>(b) The interest rate</li>
                                <li>(c) And how long you'll be repaying the loan</li>
                            </ul>
                            <p>BharatAgrimart is here to help you make your tractor ownership dreams come true without
                                any confusion or hassle.</p>
                        </div>
                        </p>
                        <a href="javascript:void(0)"
                            class=" text-primary read-more text-decoration-none fw-bold float-end"
                            data-toggle="collapse" data-target="#collapse1">Read More</a>
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
                    <form id="brandModelForm"  method="post">
                        <div class="form-outline mt-2 py-3">
                            <label class="form-label fw-bold" for="brandSelect">Brand</label>
                            <select class="form-select py-2" aria-label="Default select example" id="brandSelect"
                                name="brandSelect">
                        
                            </select>
                        </div>
                        <div class="form-outline mt-3">
                            <label class="form-label fw-bold" for="modelSelect">Model</label>
                            <select class="form-select py-2" aria-label="Default select example" id="modelSelect"
                                name="modelSelect">
                           
                            </select>
                        </div>
                        <button type="submit" class="w-100 fw-bold btn btn-success mt-3 mb-1"
                            id="calculateEMI">Calculate
                            EMI</button>
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
                <i>Explore the tool now to know your monthly repayment sum before taking a <a
                        class="text-decoration-none" href="new_tractor_loan.php">tractor loan</a>!</i>
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
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

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
   

  

    function addOption(selectElement, optionText) {
        var option = document.createElement("option");
        option.text = optionText;
        selectElement.add(option);
    }
    //  function calculateEMI() {
    //     // Add your EMI calculation logic here
    //     alert("EMI Calculation not implemented in this example.");
    // }
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
             
                    window.location.href = "emi_inner.php";
                    return false; // prevent default form submission
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
</body>

</html>