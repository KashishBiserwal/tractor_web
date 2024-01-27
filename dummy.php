<?php
    include 'includes/headertag.php';
    include 'includes/headertagadmin.php';
   include 'includes/footertag.php';
   
   ?> 
  <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
  <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
  <script src="<?php $baseUrl; ?>model/costemer_haatbzr.js"></script>

    <style>
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
    <?php
   include 'includes/header.php';
   ?>

    <section class="bg-light mt-5 pt-5">
        <div class="container pt-5">
            <div class="py-2">
                <span class="my-4 text-white pt-4 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Haat Bazar<i
                                class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Product</span>
                </span>
            </div>
        </div>
    </section>
   
    <section class="form-view bg-white mt-5 pt-5">
        <div class="container-mid" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div id="container" class="container mt-3 mb-3 ">
                        <h2 class="text-center  pt-2 mb-4">Sell Your Harvest</h2>
                        <form id="form-step-1" class=" ps-4 pe-4 mul_stp_frm" method="post">
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
                                    <p class="text-center h5 mb-4 pb-2">Fill Your Harvest Details Below</p>
                                    <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="7" id="enquiry_type_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="2" id="image_type_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6" hidden>
                                            <div class="form-outline mt-4">
                                                <input type="text" class="form-control" placeholder="" value="9" id="sub_category_id" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="category">Category</label>
                                                <select class="form-select" id="category" name="category" >
                                                    <!-- <option value="" selected disabled>Select Category</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-outline">
                                                <label class="form-label" for="subcategory">Sub-Category</label>
                                                <select class="form-select" id="subcategory" name="subcategory"
                                                    >
                                                    <!-- <option value="" selected disabled>Select Sub-Category</option>
                                                    <option value="1">Vegetable</option>
                                                    <option value="2">Fruits</option>
                                                    <option value="3">Grain</option>
                                                    <option value="3">Pulses</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="quantity">Quantity</label>
                                                <input type="text" id="quantity" name="quantity"
                                                    class="form-control input-group-sm "  />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="asPer">As Per</label>
                                                <select class="form-select" id="asPer" name="asPer" >
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Kg</option>
                                                    <option value="2">Quintal</option>
                                                    <option value="3">Gram</option>
                                                    <option value="3">Ton</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="text" id="price" name="price"
                                                    class="form-control input-group-sm "  />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="totalprice">Total Price</label>
                                                <input type="text" id="totalprice" name="totalprice"
                                                    class="form-control input-group-sm " readonly />
                                            </div>
                                        </div> -->
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                            <div class="input-group">
                                                <input type="number" id="quantityInput" class="form-control text-black" placeholder="Quantity" aria-label="Text input with dropdown button" name="quantity" >
                                                <select type="button" id="unitSelect" name="unit" class="btn border border-secondary-2 h-25 dropdown-toggle" data-bs-toggle="dropdown">
                                                    <ul class="dropdown-menu">
                                                      <option class="dropdown-item" value="">Select Unit</option>
                                                      <option class="dropdown-item" value="As per">As per</option>
                                                      <option class="dropdown-item" value="gram">gram</option>
                                                      <option class="dropdown-item" value="Kg">Kg</option>
                                                      <option class="dropdown-item" value="Quintal">Quintal</option>
                                                      <option class="dropdown-item" value="Ton">Ton</option>
                                                      <option class="dropdown-item" value="Pack">Pack</option>
                                                      <option class="dropdown-item" value="Unit">Unit</option>
                                                    </ul>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-4">
                                                <label for="name" class="form-label text-dark">Price</label>
                                                <input type="text" class="form-control" placeholder="" id="price" name="price">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                            <div class="form-outline mt-4">
                                                <label for="name" class="form-label text-dark">Total Price Calculation</label>
                                                <input type="text" class="form-control" placeholder="" id="tprice" name="tprice" readonly>
                                            </div>
                                        </div>
                                        <div class="form-outline mt-4">
                                            <label class="form-label" for="aboutharvest">About Your Harvest</label>
                                            <textarea class="form-control" id="aboutharvest" name="aboutharvest"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer d-flex my-3">
                                    <button type="button" class="btn btn-success w-100 next-step">Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form-step-2" class=" mul_stp_frm  ps-4 pe-4 " style="display:none;"
                            method="post" action="">
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
                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <div class="">
                                    <p class="text-center h5 mb-4 pb-2">Upload File</p>


                                    <div class="upload__box text-center">
                                        <div class="upload__btn-box">
                                            <label>
                                                <p class="upload__btn w-100">Upload Images</p>
                                                <input type="file" data-max_length="4"
                                                    class="upload__inputfile" id="imageInput" name="images[]" accept="image/*" multiple >
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                    <!-- <input type="file" id="_file" class="w-100 pb-0 mb-auto" name="_file" required> -->



                                    <div class="form-footer d-flex mt-3">
                                    <button type="button" class="btn w-50 btn-success mb-4 prev-step">Previous</button>
                                        <button type="button" class="btn btn-success ms-2 mb-4 w-50 next-step" >Next</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form-step-3" class=" mul_stp_frm ps-4 pe-4 " action="" method="post"
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
                                <p class="text-center mb-4 h5 ps-2 pe-2 pb-2">Fill Your Information</p>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label " for="fname"><i class="fa-regular fa-user"></i> First Name</label>
                                            <input type="text" id="fname1" name="fname"
                                                class="data_search form-control input-group-sm" onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label " for="lname"><i class="fa-regular fa-user"></i> Last Name</label>
                                            <input type="text" id="lname1" name="lname"
                                                class="data_search form-control input-group-sm" onkeydown="return /[a-zA-Z]/i.test(event.key)" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="phone">
                                            <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                            <input type="text" id="number1" name="phone"
                                                class=" data_search form-control input-group-sm" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="state"> <i class="fas fa-location"></i> State</label>
                                            <select class="form-select error mb-2 pb-2" id="state1" name="state"
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
                                            <select class="form-select error mb-2 pb-2" id="district1" name="district" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="Durg">Durg</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Bemetara">Bemetara</option>
                                            </select>
                                            <!-- <select class="form-control" id="district" name="district"></select> -->
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="tehsil">Tehsil</label>
                                            <select class="form-select error mb-2 pb-2" id="tehsil1" name="tehsil"
                                                aria-label="Default select example">
                                                <option selected></option>
                                                <option value="Durg">Durg</option>
                                                <option value="Raipur">Raipur</option>
                                                <option value="Bhilai">Bhilai</option>
                                                <option value="Bemetara">Bemetara</option>
                                            </select>
                                            <!-- <select class="form-control" id="tehsil" name="tehsil"></select> -->
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-footer d-flex mt-4">
                                 <button type="button" class="btn w-50 btn-success mb-4 prev-step">Previous</button>
                                    <button type="button" id="btn_submit" class="btn w-50 ms-2 btn-success mb-4">Submit</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'includes/footer.php';

?>

<script>
    $(document).ready(function () {
        // Sample data (replace with your actual data)+
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
            $.each(data, function (index, value) {
                dropdown.append($("<option>").val(value).text(value));
            });
        }

        // Event listener for state selection change
        $("#state").change(function () {
            var selectedState = $(this).val();
            var districtsDropdown = $("#district");
            var tehsilsDropdown = $("#tehsil");

            // Check if the selected state exists in the data
            if (stateData.hasOwnProperty(selectedState)) {
                // Populate districts dropdowndistricts
                populateDropdown(districtsDropdown, stateData[selectedState].districts);

                // Populate tehsils dropdown
                populateDropdown(tehsilsDropdown, stateData[selectedState].tehsils);
            } else {
                // Clear dropdowns if the selected state is not found
                districtsDropdown.empty();
                tehsilsDropdown.empty();
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
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

    $(".next-step").click(function (event) {
        event.preventDefault();
        var currentStepForm = $("#form-step-" + currentStep);

        if (currentStepForm.valid()) {
            currentStepForm.hide();
            currentStep++;
            $("#form-step-" + currentStep).show();
            updateProgressBar();
        }
    });

    $(".prev-step").click(function (event) {
        event.preventDefault();
        currentStep--;
        displayStep(currentStep);
    });

    updateProgressBar = function () {
        var progressPercentage = ((currentStep - 1) / 2) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
    };

    $(".step-circle").click(function () {
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
 <script>
        $(document).ready(function(){

            $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");

            $("form[id='form-step-1']").validate({
                rules: {
                    category: {
                        required: true,
                    },
                    subcategory: {
                        required: true,
                    },
                    quantity: {
                        required: true,
                    },
                    asPer: {
                        required: true,
                    },
                    price: {
                        required: true,
                        validPrice: true,
                    },
                    aboutharvest: {
                        required: true,
                    }
                },
                messages: {
                    category: {
                        required: "This field is required",
                    },
                    subcategory: {
                        required: "This field is required",
                    },
                    quantity: {
                        required: "This field is required",
                    },
                    asPer: {
                        required: "This field is required",
                    },
                    price: {
                        required: "This field is required",
                        validPrice: "Please enter a valid price",
                    },
                    aboutharvest: {
                        required: "This field is required",
                    }                 
                },
            });
        });
    </script>

<script>
        $(document).ready(function(){
            $("form[id='form-step-2']").validate({
                rules: {
                    'images[]': {
                        required: true
                    },
                   
                },
                messages: {
                   'images[]': {
                        required: "This field is required"
                    }                     
                },
            });
        });
    </script>

<script>
    $(document).ready(function () {
        // Event listener for file input change
        $("#imageInput").change(function () {
            var selectedFiles = $(this)[0].files;
            var maxAllowedFiles = 4;
            
            // Check if the number of selected files is within the allowed range
            if (selectedFiles.length < 1 || selectedFiles.length > maxAllowedFiles) {
                // alert("Please select between 1 and " + maxAllowedFiles + " images.");
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
                },
                lname: {
                    required: true,
                    minlength: 2, 
                },
                phone: {
                    required: true,
                    minlength: 10,
                    digits: true,
                },
                state: {
                    required: true,
                },
                district: {
                    required: true,
                },
            },
            messages:{
                fname: {
                    required: "This field is required",
                }, 
                lname: {
                    required: "This field is required",
                }, 
                phone: {
                    required: "This field is required",
                    minlength: "Phone Number must be of 10 Digit",
                   digits: "Please enter only digits"
                }, 
                state: {
                    required: "This field is required",
                }, 
                district: {
                    required: "This field is required",
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
    </script>
</body>

</html>