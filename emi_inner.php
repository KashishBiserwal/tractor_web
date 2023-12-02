<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'includes/headertag.php';
   ?>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>
    <section class="mt-5 pt-4">
        <div class="container ">
            <div class="mt-5 pt-3">
                <span class="mt-5 text-white">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class="text-dark"> Popular Tractor</span>
                </span>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/emi_calculator.webp" alt="reload img" class="w-100" style="height: 350px;">
        </div>
    </div>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title  fw-bold assured px-2">Preet 4049 4WD Tractor loan EMI Calculator</h3>
                        <p class="py-2">Preet 4049 4WD EMI starts at Rs. 13,703 per month for a time period of 60 months
                            at a 15 % interest rate for a loan amount of Rs. 5,76,000.If you are looking for a Preet
                            4049 4WD EMI calculator, try the Tractorjunction EMI calculator.</p>
                        <p class="card-text">
                        <div class="more-content" style="display:none;">
                            <p>Our Tractor EMI calculator provides detailed EMI payable for Preet 4049 4WD. You just
                                have to enter the down payment, interest rate and loan tenure for Preet 4049 4WD. With
                                our EMI calculator for tractors, you can easily calculate the monthly instalments, total
                                interest payable, and the total amount payable for Preet 4049 4WD after reducing the
                                down payment amount.</p>
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


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <h3 class="assured py-2 p-2 mt-2 fw-bold">Calculate Your Tractor Loan EMI</h3>
                    <img src="assets\images\powertrac-euro-47-1690880683.webp" class="w-100">
                    <button type="button" class="w-100 btn btn-outline-success fw-bold mt-3 mb-2">Get on road
                        Price</button>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6 mt-5">
                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                            <label for="emiResult" class="form-label h4 text-dark fw-bold">EMI per Month (₹)</label>

                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                            <input type="text" class="form-control" id="emiResult" readonly>

                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-4 text-center">

                            <label for="exshowroomprice" class="form-label h6 text-dark fw-bold">*Ex-showroom Price
                                (₹)</label>
                            <input type="text" class="form-control" readonly value="6,40,000.00">

                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-4 text-center">
                            <label for="totalLoanAmount" class="form-label h6 text-dark fw-bold">Total Loan Amount
                                (₹)</label>
                            <input type="text" class="form-control" id="totalLoanAmount" readonly>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-4 text-center">
                            <label for="totalRepayment" class="form-label h6 text-dark fw-bold">Total Repayment Amount
                                (₹)</label>
                            <input type="text" class="form-control" id="totalRepayment" readonly>

                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 mt-4 text-center">
                            <label for="extraAmount" class="form-label h6 text-dark fw-bold">Extra Amount Paid
                                (₹)</label>
                            <input type="text" class="form-control" id="extraAmount" readonly>

                        </div>
                        <button type="button" class="w-100 fw-bold btn btn-success mt-4 mb-1">View Loan
                            Offers</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-3 shadow">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-lg-6 mb-3 ">
                    <label for="interestRate" class="form-label text-dark h5 mb-3 ">Bank Interest Rate (%)</label>
                    <input type="range" class="form-range" id="interestRate" min="11" max="22" step="0.1">
                    <input type="text" class="form-control w-25 mt-2" id="interestRateValue"
                        placeholder="Enter interest rate" readonly>

                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6 mb-3 ">
                    <label for="downPayment" class="form-label text-dark mb-3  h5">Down Payment (₹)</label>
                    <input type="range" class="form-range" id="downPayment" min="0" max="640000" step="1000">
                    <input type="text" class="form-control w-25 mt-2" id="downPaymentValue"
                        placeholder="Enter down payment" readonly>

                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6 mb-3 ">
                    <label for="loanPeriod" class="form-label text-dark mb-3  h5">Loan Period (Months)</label>
                    <select class="form-select" id="loanPeriod">
                        <option value="12">12</option>
                        <option value="24">18</option>
                        <option value="36">24</option>
                        <option value="48">30</option>
                        <option value="12">36</option>
                        <option value="24">42</option>
                        <option value="36">48</option>
                        <option value="48">54</option>
                        <option value="60" selected>60</option>
                        <option value="12">66</option>
                        <option value="24">72</option>
                        <option value="36">78</option>
                        <option value="48">84</option>
                    </select>

                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6  mb-3 ">
                    <label for="repaymentInterval" class="form-label text-dark mb-3  h5">Repayment Interval</label>
                    <select class="form-select" id="repaymentInterval">
                        <option value="monthly" selected>Monthly</option>
                        <option value="quarterly">Quarterly</option>
                        <option value="halfyearly">Half-Yearly</option>
                    </select>

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
    // Get DOM elements
    const downPaymentRange = document.getElementById('downPayment');
    const downPaymentValue = document.getElementById('downPaymentValue');
    const interestRateRange = document.getElementById('interestRate');
    const interestRateValue = document.getElementById('interestRateValue');
    const loanPeriod = document.getElementById('loanPeriod');
    const repaymentInterval = document.getElementById('repaymentInterval');
    const emiResult = document.getElementById('emiResult');
    const totalRepayment = document.getElementById('totalRepayment');
    const extraAmount = document.getElementById('extraAmount');
    const totalLoanAmount = document.getElementById('totalLoanAmount');

    // Initialize values
    downPaymentRange.value = 0;
    downPaymentValue.value = '0';
    interestRateRange.value = 15;
    interestRateValue.value = '15';
    totalLoanAmount.value = '640000';

    // Function to calculate EMI
    function calculateEMI() {
        const exShowroomPrice = 640000;
        const loanAmount = exShowroomPrice - parseFloat(downPaymentValue.value);
        const interestRate = parseFloat(interestRateValue.value);
        const loanTenure = parseInt(loanPeriod.value);
        const repaymentInt = repaymentInterval.value;

        const monthlyInterestRate = (interestRate / 100) / 12;
        const numberOfPayments = loanTenure * (repaymentInt === 'monthly' ? 1 : repaymentInt === 'quarterly' ? 3 : 6);

        const emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments)) /
            (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

        emiResult.value = emi.toFixed(2);

        const totalRepay = emi * numberOfPayments;
        totalRepayment.value = totalRepay.toFixed(2);

        const extraAmountPaid = totalRepay - loanAmount;
        extraAmount.value = extraAmountPaid.toFixed(2);
    }

    // Event listeners

    downPaymentValue.addEventListener('input', function() {
        downPaymentRange.value = totalLoanAmount.value;
        calculateEMI();
    });

    downPaymentRange.addEventListener('input', function() {
        downPaymentValue.value = downPaymentRange.value;
        calculateEMI();
    });

    interestRateRange.addEventListener('input', function() {
        interestRateValue.value = interestRateRange.value;
        calculateEMI();
    });

    downPaymentValue.addEventListener('input', function() {
        downPaymentRange.value = downPaymentValue.value;
        calculateEMI();
    });

    interestRateValue.addEventListener('input', function() {
        interestRateRange.value = parseFloat(interestRateValue.value);
        calculateEMI();
    });

    loanPeriod.addEventListener('change', calculateEMI);
    repaymentInterval.addEventListener('change', calculateEMI);

    // Initial calculation
    calculateEMI();
    </script>

</body>

</html>