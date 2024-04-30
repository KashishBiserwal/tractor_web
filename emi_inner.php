<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'includes/headertag.php';
   ?>
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/State_dist_tehsil.js"></script>
    <script src="<?php $baseUrl; ?>model/emi_inner.js"></script>
    <style>

        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>
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
    <!-- <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/emi_tractor.png" alt="reload img" class="w-100" style="height: 373px;">
        </div>
    </div> -->
    <div class="container mt-2 mb-4">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title  fw-bold assured px-2"><span id="main_brand"></span> <span id="brand_model"></span> Tractor loan EMI Calculator</h3>
                      
                        <div class="more-content">
                            <p id="description">Our Tractor EMI calculator provides detailed EMI payable for Preet 4049 4WD. You just
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
            <div class="">
                <a href="emi.php">
                    <button class="float-end"><i class="fas fa-edit"></i></button>
                </a>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                         <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i>Brand</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="get_brand" value="" name="">
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                         <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" id="get_model" value="" name="iduser">
                    </div>

                    <h3 class="assured  p-2 mt-2 fw-bold"><span id="brand_main"></span> 4WD Tractor</h3>
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class=" swiper-slide swiper-slide_buy">
                                    <img class="img_buy" src="assets/images/437-1632718440.webp" />
                                </div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy" style="height:75px; width: 43%;" id="swip_img"></div>
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
                                </div>
                                <div class="modal-body">
                                    <div class="model-cont">
                                        <form id="hire_inner" name="hire_inner" method="post">
                                            <div class="row">
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
                                                            <!-- Options for state dropdown -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                    <div class="form-outline">
                                                        <label for="district" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                                            <!-- Options for district dropdown -->
                                                        </select>
                                                    </div>
                                                </div>       
                                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                                                    <div class="form-outline">
                                                        <label for="Tehsil" class="form-label fw-bold "> Tehsil</label>
                                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                                            
                                                            <!-- Options for Tehsil dropdown -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" id="button_hire" class="btn btn-danger">Request</button>
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
                            <input type="text" class="form-control" id="exShowroomPrice" value="₹640000" readonly>
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
                        <a href="new_tractor_loan.php"><button type="button"
                                class="w-100 fw-bold btn btn-success mt-4 mb-2">View Loan
                                Offers</button></a>
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
                    <input type="range" class="form-range" id="downPaymentRange" min="0" max="640000" step="10000"
                        value="64000">
                    <input type="number" class="form-control mt-2 w-25" id="downPayment" min="0" max="640000" value="64000">
                    <div class="invalid-feedback" id="downPaymentError"></div>
                    <!-- <input type="range" class="form-range" id="downPayment" min="0" max="640000" value="64000">
                    <input type="number" class="form-control  w-25" id="downPaymentValue" value="64000" readonly> -->
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
        // Update EMI when input values change
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
            if (downPayment < 0 || downPayment > 640000) {
                $(this).addClass('is-invalid');
                errorMessage.text('Downpayment must be between 0 and 640,000.');
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
            var exShowroomPrice = 640000;  // Example value, you can modify this
            var downPayment = parseFloat($('#downPayment').val());
            var loanAmount = exShowroomPrice - downPayment;
            var interestRate = parseFloat($('#interestRate').val());
            var loanPeriod = parseInt($('#loanPeriod').val());
            var repaymentInterval = $('#repaymentInterval').val();

            // Validation
            if (downPayment < 0 || downPayment > 640000 || interestRate < 11 || interestRate > 25) {
                return;
            }

            // Calculate EMI
            var monthlyInterestRate = (interestRate / 100) / 12;
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

    <!-- <script>
    // Update downpayment value on range input change
    document.getElementById('downPayment').addEventListener('input', function() {
        var downPaymentValue = document.getElementById('downPayment').value;
        document.getElementById('downPaymentValue').value = downPaymentValue;
        updateEMI();
    });

    // Update interest rate value on range input change
    document.getElementById('interestRate').addEventListener('input', function() {
        var interestRateValue = document.getElementById('interestRate').value;
        document.getElementById('interestRateValue').value = interestRateValue;
        updateEMI();
    });

    // Update EMI when loan period or repayment interval changes
    document.getElementById('loanPeriod').addEventListener('change', updateEMI);
    document.getElementById('repaymentInterval').addEventListener('change', updateEMI);

    // Update EMI calculation based on user input
    function updateEMI() {
        var exShowroomPrice = 640000; // Example value, you can modify this
        var downPayment = parseFloat(document.getElementById('downPayment').value);
        var loanAmount = exShowroomPrice - downPayment;
        var interestRate = parseFloat(document.getElementById('interestRate').value);
        var loanPeriod = parseInt(document.getElementById('loanPeriod').value);
        var repaymentInterval = document.getElementById('repaymentInterval').value;

        // Calculate EMI
        var monthlyInterestRate = (interestRate / 100) / 12;
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
        document.getElementById('emiAmount').value = `₹${emi.toFixed(2)} ${repaymentInterval}`;
        document.getElementById('totalLoanAmount').value = `₹${loanAmount.toFixed(2)}`;
        document.getElementById('payableAmount').value = `₹${(emi * numberOfPayments).toFixed(2)}`;
        document.getElementById('extraPayment').value = `₹${((emi * numberOfPayments) - loanAmount).toFixed(2)}`;
    }

    // Initial EMI calculation
    updateEMI();
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
    </script> -->




</body>

</html>