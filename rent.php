<!DOCTYPE html>
<html lang="en">

<head>
    <?php
				include 'includes/headertag.php';
			?>

    <?php
   include 'includes/header.php';
   ?>

    <style>
    .container-mid {
        max-width: 1280px;
        margin: 0 auto;
        width: 55%;
        padding-left: 8px;
        padding-right: 8px;
        margin-top: -214px;
    }

    .step-container {
        position: relative;
        text-align: center;
        transform: translateY(-43%);
    }

    .step-circle {
        width: 20px;
        height: 22px;
        border-radius: 50%;
        background-color: #4a80d2;
        color: #4a80d2;
        /* border: 6px solid #007bff; */
        line-height: 30px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        cursor: pointer;
    }

    html * {
        box-sizing: border-box;
    }

    .mul_stp_frm {
        overflow-x: hidden;
    }


    p {
        margin: 0;
    }

    .upload__box {
        /* padding: 40px; */
        width: 20;
    }

    .upload__inputfile {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .upload__btn {
        display: inline-block;
        font-weight: 600;
        color: #fff;
        text-align: center;
        min-width: 150px;
        padding: 5px;
        transition: all .3s ease;
        cursor: pointer;
        border: 2px solid;
        background-color: #198754;
        border-color: #198754;
        border-radius: 10px;
        line-height: 26px;
        font-size: 14px;
    }

    .upload__btn:hover {
        background-color: unset;
        color: #198754;
        transition: all .3s ease;
    }

    .upload__img-close:after {
        content: '\2716';
        font-size: 14px;
        color: white;
    }
    </style>
</head>

<body>


    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-3">
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

    <!--Banner-->
    <div class="container-fluid">
        <div class="row siv" id="">
            <img src="assets/images/rent.jpg" alt="reload img" class="w-100" style="height:358px;">
            <div class="container-mid">
                <div class="row justify-content-center loan_form bg-light">
                    <h2 class="text-dark text-center fw-bold mt-3 mb-0">Rent Your Tractors and Implements</h2>
                  
                        <form id="form-step-1" class=" ps-4 pe-4 mul_stp_frm2" method="post">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color: #6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>

                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-1">
                                <!-- Step 1 form fields here -->
                                <div class="step_sellused">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="brand">Brand</label>
                                                <select class="form-select" id="brand" name="brand" required>
                                                    <option value="" selected disabled>Select Brand</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="model">Model</label>
                                                <select class="form-select" id="model" name="model" required>
                                                    <option value="" selected disabled>Select Model</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="year">Year</label>
                                                <select class="form-select" id="year" name="year" required>
                                                    <option value="" selected disabled>Select Year</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="workingRadius">Working Radius</label>
                                                <input type="text" id="workingRadius" name="workingRadius"
                                                    class="form-control input-group-sm " required />
                                            </div>
                                        </div>

                                        <div class="form-outline mt-4">
                                            <label class="form-label" for="note">Note (if any)</label>
                                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                        <button type="submit" class="btn btn-success w-100 next-step" id="step1_form">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form-step-2" class=" mul_stp_frm2  ps-4 pe-4 " style="display:none;" method="post"
                            action="">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color:#6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <div id="formContainer">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="implement">Implement Type</label>
                                                <select class="form-select" id="implement" name="implement" required>
                                                    <option value="" selected disabled>Select Implement Type</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="rate">Rate</label>
                                                <input type="text" id="rate" name="rate"
                                                    class="form-control input-group-sm " required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="ratePer">Rate Per</label>
                                                <select class="form-select" id="ratePer" name="ratePer" required>
                                                    <option value="" selected disabled>Select Rate</option>
                                                    <option value="1">Acre</option>
                                                    <option value="2">Hour</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="upload__box text-center">
                                            <div class="upload__btn-box">
                                                <label>
                                                    <p class="upload__btn w-100">Upload Images</p>
                                                    <input type="file" data-max_length="4" class="upload__inputfile"
                                                        id="imageInput" name="images[]" accept="image/*" multiple
                                                        required>
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="upload__img-wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-footer d-flex mt-3">
                                    <button type="button" class="btn btn-success w-50 mb-4 prev-step"
                                        id="">Previous</button>
                                    <button type="button" class="btn btn-success ms-2 mb-4 w-50 next-step"
                                        id="step2_form">Next</button>
                                    <button type="button" class="btn btn-info ms-2 mb-4 w-25" id="addMore">Add
                                        More</button>
                                </div>

                            </div>
                        </form>

                        <form id="form-step-3" class=" mul_stp_frm2 ps-4 pe-4 " action="" method="post"
                            style="display:none;">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <div class="float-start">Harvest Info</div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                    Upload Image
                                </div>
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                    <div class="float-end">Personal Info</div>
                                </div>
                            </div>
                            <div class="progress px-1" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 0%; background-color: #6f98c2;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="step-container d-flex justify-content-between">
                                <div class="step-circle" onclick="displayStep(1)">1</div>
                                <div class="step-circle" onclick="displayStep(2)">2</div>
                                <div class="step-circle" onclick="displayStep(3)">3</div>
                            </div>
                            <div class="step step-3">
                                <!-- Step 3 form fields here -->
                                <div class="row ">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label " for="fname"><i class="fa-regular fa-user"></i>
                                                First Name</label>
                                            <input type="text" id="fname" name="fname"
                                                class="data_search form-control input-group-sm"
                                                onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label " for="lname"><i class="fa-regular fa-user"></i>
                                                Last Name</label>
                                            <input type="text" id="lname" name="lname"
                                                class="data_search form-control input-group-sm"
                                                onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="phone">
                                                <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                            <input type="text" id="phone" name="phone"
                                                class=" data_search form-control input-group-sm" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state"> <i class="fas fa-location"></i>
                                                State</label>
                                            <select class="form-select error mb-2 pb-2" id="state" name="state"
                                                aria-label="Default select example">
                                                <option selected></option>
                                                <option value="state1">state1</option>
                                                <option value="state2">state2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="district">
                                                <i class="fa-solid fa-location-dot"></i> District</label>
                                            <!-- <select class="form-select error mb-2 pb-2" id="district" name="district"
                                                aria-label="Default select example">
                                                <option selected></option>
                                               
                                            </select> -->
                                            <select class="form-control" id="district" name="district"></select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="tehsil">Tehsil</label>
                                            <!-- <select class="form-select error mb-2 pb-2" id="tehsil" name="tehsil"
                                                aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">name1</option>
                                                <option value="2">name2</option>
                                                <option value="3">name3</option>
                                            </select> -->
                                            <select class="form-control" id="tehsil" name="tehsil"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer d-flex mt-4">
                                    <button type="button" class="btn w-50 btn-primary mb-4 prev-step">Previous</button>
                                    <button type="button" class="btn w-50 ms-2 btn-success mb-4" id="rent_submit">Submit</button>
                                </div>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h3 class="text-center mb-4 fw-bold ">EASY RENTAL FOR TRACTOR AND IMPLEMENT</h3>

        <div class="row">

            <!-- Card 1 with shadow -->
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow ">
                    <img src="assets\images\phone.png" class="card-img-top images" alt="Tractor Insurance 1"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Tractor & Implement</h5>
                        <p class="card-text text-center">List your tractors and implements for additional income</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 with shadow -->
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow ">
                    <img src="assets\images\quick.png" class="card-img-top images " alt="Tractor Insurance 2"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Quick Information</h5>
                        <p class="card-text text-center">List your or implement with minimun information and earning
                            additional income
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 with shadow -->
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 ">
                <div class="card shadow">
                    <img src="assets\images\rent_tractor.jpg" class="card-img-top images" alt="Tractor Insurance 3"
                        style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title text-center  fw-bold ">Rent Tractor</h5>
                        <p class="card-text text-center">Start renting your tractors and implement easy near by you</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <h4 class="mt-5 mb-4 assured px-2 fw-bold">Popular Tractor Insurance Companies</h4>
        <p> Rent tractors are also the best options for some farmers who are looking to purchase on a minimum budget.
            Renting tractors with a few years of work can be the best way to work in the fields for a long time. Though,
            it requires a little maintenance but maintaining it with a proper interval of time reduces time and money.
        </p>

        <p>KhetiGaadi Rent page helps farmers to get tractors on a rent basis. Also, if they wish to sell their products
            on
            a rental basis for various brands then KhetiGaadi is the best option.</p>

        <p>Tractor Rental in India is additional income for farmers. Many farmers buy tractors for both personal and
            commercial use. For such Farmers, KhetiGaadi provides a platform where a Farmer can list his tractor on
            KhetiGaadi and rent out Tractors to needy farmers. There are many tractors available on KhetiGaadi for
            rental
            purpose in India. Farmers can rent their tractors of all brands like Mahindra tractor on rent, Mahindra 575
            tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New Holland tractor on rent, Swaraj
            tractor
            on rent at mutually agreed tractor rent priceTractor Rental in India is additional income for farmers. Many
            farmers buy tractors for both personal and commercial use. For such Farmers KhetiGaadi provides a platform
            where
            a Farmer can list his tractor on KhetiGaadi and rent out Tractors to needy farmers. There are many tractors
            available on KhetiGaadi for rental purpose in India. Farmers can rent their tractors of all brands like
            Mahindra
            tractor on rent, Mahindra 575 tractor on rent, John Deere tractor on rent, Kubota tractor on rent, New
            Holland
            tractor on rent, Swaraj tractor on rent at mutually agreed tractor rent price.</p>
    </div>

    <section>
        <div class="container">
            <h4 class="fw-bold assured px-2">Quick Links</h4>
            <div class="row my-4">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser" class="btn btn-outline-success text-decoration-none border-2 p-2 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR PRICE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class=" btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>HARVESTERS</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none  border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>SECOND HAND TRACTOR</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>EASY FINANCE</a>
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 py-2">
                    <a href="#" id="adduser"
                        class="btn btn-outline-success text-decoration-none border-2 py-2 px-3 w-100">
                        <i class="fas fa-bolt"></i>DEALERSHIP</a>
                </div>
            </div>
        </div>
    </section>
    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

?>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const addMoreButton = document.getElementById('addMore');
        const formContainer = document.getElementById('formContainer');

        addMoreButton.addEventListener('click', function() {
            // Clone the entire row and append it to the container
            const lastRow = formContainer.lastElementChild.cloneNode(true);
            // Clear values of the cloned fields
            const inputFields = lastRow.querySelectorAll('input, select');
            inputFields.forEach(field => {
                field.value = '';
            });

            formContainer.appendChild(lastRow);
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Sample data (replace with your actual data)
        var stateData = {
            "state1": {
                "districts": ["District1", "District2"],
                "tehsils": ["Tehsil1", "Tehsil2"]
            },
            "state2": {
                "districts": ["District3", "District4"],
                "tehsils": ["Tehsil3", "Tehsil4"]
            }
        };

        // Function to populate dropdown based on data
        function populateDropdown(dropdown, data) {
            dropdown.empty();
            $.each(data, function(index, value) {
                dropdown.append($("<option>").val(value).text(value));
            });
        }

        // Event listener for state selection change
        $("#state").change(function() {
            var selectedState = $(this).val();
            var districtsDropdown = $("#district");
            var tehsilsDropdown = $("#tehsil");

            // Check if the selected state exists in the data
            if (stateData.hasOwnProperty(selectedState)) {
                // Populate districts dropdown
                populateDropdown(districtsDropdown, stateData[selectedState].districts);

                // Populate tehsils dropdown
                populateDropdown(tehsilsDropdown, stateData[selectedState].tehsils);
            } else {
                // Clear dropdowns if the selected state is not found
                districtsDropdown.empty();
                tehsilsDropdown.empty();
            }
        });
        $("#step1_form").on('click', function(event) {
            step1_form();
        });
        $("#step2_form").on('click', function(event) {
            step2_form();
        });
        $("#rent_submit").on('click', function(event) {
            rent_submit();
        });
    });
    </script>

    <!-- SCRIPT FOR THE DISPLAY & HIDE -->

    <script>
    $(document).ready(function() {
        var currentStep = 1;
        var updateProgressBar;

        function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 3) {
                $(".mul_stp_frm").hide();
                $("#form-step-" + stepNumber).show();
                currentStep = stepNumber;
                updateProgressBar();
            }
        }

        $(".next-step").click(function(event) {
            event.preventDefault();
            var currentStepForm = $("#form-step-" + currentStep);

            if (currentStepForm.valid()) {
                currentStepForm.hide();
                currentStep++;
                $("#form-step-" + currentStep).show();
                updateProgressBar();
            }
        });

        $(".prev-step").click(function(event) {
            event.preventDefault();
            currentStep--;
            displayStep(currentStep);
        });

        updateProgressBar = function() {
            var progressPercentage = ((currentStep - 1) / 2) * 100;
            $(".progress-bar").css("width", progressPercentage + "%");
        };

        $(".step-circle").click(function() {
            var stepNumber = parseInt($(this).text());

            if (stepNumber > currentStep) {
                var currentStepForm = $("#form-step-" + currentStep);
                if (!currentStepForm.valid()) {
                    return;
                }
            }

            displayStep(stepNumber);
        });

        displayStep(1);
    });

 
    </script>





    <!-- SCRIPT FOR THE VALIDATION OF 1st FORM -->
    <script>
    $(document).ready(function() {
        $("form[id='form-step-1']").validate({
            rules: {
                brand: {
                    required: true,
                },
                model: {
                    required: true,
                },
                year: {
                    required: true,
                    digits: true,

                },
                workingRadius: {
                    required: true,
                    digits: true,

                },
                note: {
                    letterswithspaces: true // Custom rule for alphabets with spaces
                },
            },

        });



        $.validator.addMethod("letterswithspaces", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
        }, "Only alphabets and spaces are allowed");
    });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF 2nd FORM -->
    <script>
    $(document).ready(function() {
        $("form[id='form-step-2']").validate({
            rules: {
                imageInput: {
                    required: true,
                },
                implement: {
                    required: true,
                },
                rate: {
                    required: true,
                    digits: true,
                },
                ratePer: {
                    required: true,
                },

            },

        });
    });
    </script>

    <script>
    $(document).ready(function() {
        // Event listener for file input change
        $("#imageInput").change(function() {
            var selectedFiles = $(this)[0].files;
            var maxAllowedFiles = 4;

            // Check if the number of selected files is within the allowed range
            if (selectedFiles.length < 1 || selectedFiles.length > maxAllowedFiles) {
                alert("Please select between 1 and " + maxAllowedFiles + " images.");
                // You can provide additional feedback to the user, such as disabling a submit button
            } else {
                // You can proceed with handling the selected files
                // For example, display the number of selected files
                alert("Selected " + selectedFiles.length + " image(s).");
            }
        });
    });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF 3rd FORM -->
    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("form[id='form-step-3']").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                },
                lname: {
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true,
                    indianMobile: true,
                },
                state: {
                    required: true,
                },
                district: {
                    required: true,
                },
            },

        });
    });
    </script>

    <!-- SCRIPT FOR THE VALIDATION OF IAMGE UPLOAD -->
    <script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {

                    if (!f.type.match('image.*')) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result + ")' data-number='" + $(
                                        ".upload__img-close").length + "' data-file='" + f
                                    .name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }

    var arry = [];  // Declare arry outside of functions to maintain its scope

function step1_form() {
    var brand_name = $('#brand').val();
    var model_name = $('#model').val();
    var year = $('#year').val();
    var workingRadius = $('#workingRadius').val();
    var note = $('#note').val();

    console.log(brand_name, model_name, year, workingRadius, note);

    // Push values into the array
    arry.push({
        brand_name: brand_name,
        model_name: model_name,
        year: year,
        workingRadius: workingRadius,
        note: note
    });

    console.log(arry);
}

function step2_form() {
    var implement = $('#implement').val();
    var rate = $('#rate').val();
    var ratePer = $('#ratePer').val();
    var imageInput = $('#imageInput').val();  // Use val() to get the value of file input
   // var images = [] ;
   // for (var x = 0; x < imageInput.length; x++) {
    //  images = imageInput[x];
   // }
    console.log(implement, rate, ratePer, imageInput);

    // Push values into the array
    arry.push({
        implement: implement,
        rate: rate,
        ratePer: ratePer,
        imageInput: imageInput,
    });

    console.log(arry);
}
function rent_submit(){
    console.log(arry);
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var phone = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();
    console.log(fname,lname, phone, state, district, tehsil)
    var data = new FormData();
  
  /*   for (var x = 0; x < image_names.length; x++) {
        data.append('images[]', image_names[x]);
    } */
    if (arry.length > 0) {
        var step1Data = arry[0];  // Assuming step1_form pushes data first
        data.append('brand_id', step1Data.brand_name);
        data.append('model', step1Data.model_name);
        data.append('purchase_year', step1Data.year);
        data.append('working_radius', step1Data.workingRadius);
        data.append('message', step1Data.note);

        if (arry.length > 1) {
            var step2Data = arry[1];  // Assuming step2_form pushes data second
            data.append('implement_type_id', step2Data.implement);
            data.append('rate', step2Data.rate);
            data.append('rate_per', step2Data.ratePer);
            data.append('images[]', step2Data.imageInput);
        }
    }

  
    data.append('rent_first_name', fname);
    data.append('rent_last_name', lname);
   // data.append('email', tyre_position);
    data.append('rent_mobile', phone);
    data.append('rent_state', state);
    data.append('rent_district', district);
    data.append('tehsil', tehsil);
    data.append('rent_enquiry_type_id', '18');
 /*    var apiBaseURL = APIBaseURL; */
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    // var token = localStorage.getItem('token');
  /* 
    var headers = {
        'Authorization': 'Bearer ' + token
    }; */
  
    $.ajax({
      url: url,
      type: "POST",
      data: data,
    //   headers: headers,
      processData: false,
      contentType: false,
      success: function (result) {
        console.log('Success:', result);
      
        $("#staticBackdrop").modal('hide');
        var msg = "Added successfully !"
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Success');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      },
      error: function (error) {
        console.error('Error:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Error');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      }
    });
}
    </script>
</body>

</html>