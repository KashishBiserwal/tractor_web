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

    /* .hidden {
        display: none;
    } */

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
    <!-- 
        
     -->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <img src="assets\images\powertrac-euro-47-1690880683.webp" class="w-100">
                    <button type="button" class="w-100 btn btn-outline-success fw-bold mt-3 mb-1">Get on road
                        Price</button>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6 mt-5">
                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                            <h3 class="fw-bold">EMI</h3>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-center mt-4 mb-4">
                            <h3 class="fw-bold"><span class="px-1">₹</span>0</h3>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                            <h5>*Ex-showroom Price</h5>
                            <h6><span class="px-1">₹</span>0</h6>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                            <h5>Total Loan Amount</h5>
                            <h6><span class="px-1">₹</span>0</h6>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                            <h5>Payable Amount</h5>
                            <h6><span class="px-1">₹</span>0</h6>
                        </div>
                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 py-2 text-center">
                            <h5>You’ll pay extra</h5>
                            <h6><span class="px-1">₹</span>0</h6>
                        </div>
                        <button type="button" class="w-100 fw-bold btn btn-success mt-3 mb-1">View Loan
                            Offers</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <h5 class="mt-4">Bank Interest Rate</h5>
                    <input type="text" class="text_emi"> <i class="fa-solid fa-percent ms-2"></i>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="7500" class="slider py-1" id="myRange2">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <h5 class="mt-4 ">Down Payment</h5>
                    <i class="fa-solid fa-indian-rupee-sign fs-5 mx-2 "></i><input type="text" class="text_emi">
                    <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="750000" class="slider py-1" id="myRange">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <h5 class="mt-4 fw-bold">Loan Period Months</h5>
                    <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                        <label class="btn btn-success ">
                            <input type="radio" name="options" id="option1" autocomplete="off"></br>12
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option2" autocomplete="off"></br>18
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option3" autocomplete="off"></br>24
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option4" autocomplete="off"></br>30
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option5" autocomplete="off"></br>36
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option6" autocomplete="off"></br>42
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option7" autocomplete="off"></br>48
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option8" autocomplete="off"></br>54
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option9" autocomplete="off" checked></br>60
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option10" autocomplete="off"></br>66
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option11" autocomplete="off"></br>72
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option12" autocomplete="off"></br>78
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="options" id="option13" autocomplete="off"></br>84
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                    <h5 class="mt-4 mx-5 fw-bold">Repayment Interval</h5>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input border border-dark  mx-2" type="radio" id="inlineCheckbox1"
                            name="x" value="option1">
                        <label class="form-check-label text-dark" for="inlineCheckbox1">Monthly</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input border border-dark  mx-2" type="radio" id="inlineCheckbox2"
                            name="x" value="option2">
                        <label class="form-check-label text-dark" for="inlineCheckbox2">Quarterly</label>
                    </div>
                    <div class="form-check form-check-inline text-center">
                        <input class="form-check-input border border-dark  mx-2" type="radio" id="inlineCheckbox3"
                            name="x" value="option3">
                        <label class="form-check-label text-dark" for="inlineCheckbox3">Half-Yearly</label>
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
    //  function calculateEMI() {
    //     // Add your EMI calculation logic here
    //     alert("EMI Calculation not implemented in this example.");
    // }


    $(document).ready(function() {
        $("#brandModelForm").validate({
            rules: {
                brandSelect: 'required',
                modelSelect: 'required',
            }
        });

    });

    // function showEMIForm() {
    //     // Validate the first form
    //     if ($("#brandModelForm").valid()) {
    //         // Hide the first form and show the second form
    //         $("#form1").addClass("hidden");
    //         $("#form2").removeClass("hidden");
    //     }
    // }

    // function showBrandModelForm() {
    //     // Hide the second form and show the first form
    //     $("#form2").addClass("hidden");
    //     $("#form1").removeClass("hidden");
    // })
    </script>


</body>

</html>