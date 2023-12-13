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
    #my-form {
        /* text-align: center; */
        position: relative;
        margin-top: 20px;
    }

    #my-form .field-set {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative;
    }

    #my-form .field-set:not(:first-of-type) {
        display: none
    }

    .previous-step {
        background: #d21515;
    }

    .text {
        color: #2F8D46;
        font-weight: normal
    }

    #progress_bar {
        margin-bottom: -5px;
        overflow: hidden;
        color: lightgrey
    }

    #progress_bar .active_rent {
        color: #2F8D46
    }

    #progress_bar li {
        list-style-type: none;
        font-size: 10.9px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progress_bar #step1:before {
        content: "";
        z-index: 999;
        /* position: relative; */
    }

    #progress_bar #step2:before {
        content: "";
        z-index: 999;
        /* position: relative; */
    }

    #progress_bar #step3:before {
        content: "";
        z-index: 999;
        /* position: relative; */
    }

    #progress_bar #step4:before {
        content: "";
        z-index: 999;
        /* position: relative; */
    }

    #progress_bar li:before {
        width: 36px;
        height: 34px;
        line-height: 35px;
        display: block;
        font-size: 20px;
        color: #f4eeee;
        background: #e8f0e4;
        border-radius: 100%;
        margin: 0 auto 30px auto;
    }

    #progress_bar li:after {
        content: '';
        width: 100%;
        height: 2px;
        position: absolute;
        left: 0;
        top: 19px;
        z-index: -1px;
    }

    #progress_bar li.active_rent:before,
    #progress_bar li.active_rent:after {
        background: #2F8D46
    }

    .progress1 {
        height: 1px;
    }

    .progress_bar {
        background-color: #2F8D46
    }

    .form-outline .form-label {
        color: #454444;
        font-weight: 500;
        margin-bottom: 5px;
        position: absolute;
        margin-top: -12px;
        background: #fff;
        margin-left: 15px;
    }

    .form-group {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        height: 50px;
    }
    </style>
</head>

<body>
    <section class="mt-5 pt-5 mb-5">
        <div class="container mt-5 pt-5 mb-5 bg-light">
            <div class="row shadow" style=" width: 80%; justify-content: center;  margin: 0 auto;">
                <h1 class="text-center text-danger fw-bold " style="font-size: 38px;">Sell Your Harvest</h1>
                <div id="my-form">
                    <ul id="progress_bar" style=" text-align: center;">
                        <li class="active_rent" id="step1">
                            <strong>Harvest Information</strong>
                        </li>
                        <li id="step2"><strong>Upload image</strong></li>
                        <li id="step3"><strong>Personal information</strong></li>
                        <li id="step4"><strong>Success</strong></li>
                    </ul>
                    <div class="progress1">
                        <div class="progress_bar"></div>
                    </div>
                    <form id="multistep-form">
                        <fieldset class="field-set mt-4 pt-4 " id="step1">
                            <h4 class="fw-bold text-center">Fill Your Harvest Details Below</h4>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="category">Category</label>
                                        <select class="form-select" id="category" name="category" required>
                                            <option value="" selected disabled>Select Category</option>
                                            <option value="1">Vegetable</option>
                                            <option value="2">Fruits</option>
                                            <option value="3">Grain</option>
                                            <option value="3">Pulses</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="subcategory">Sub-Category</label>
                                        <select class="form-select" id="subcategory" name="subcategory" required>
                                            <option value="" selected disabled>Select Sub-Category</option>
                                            <option value="1">Potato</option>
                                            <option value="2">Papaya</option>
                                            <option value="3">Rice</option>
                                            <option value="3">Wheat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="input-group ">
                                        <input type="number" id="quantity" class="form-control text-black"
                                            placeholder="Quantity" aria-label="Text input with dropdown button"
                                            required>
                                        <select type="button"
                                            class="btn border border-secondary-2 h-25  dropdown-toggle"
                                            data-bs-toggle="dropdown" required>
                                            <ul class="dropdown-menu">
                                                <option class="dropdown-item" href="#">As per</option>
                                                <option class="dropdown-item" href="#">gram</option>
                                                <option class="dropdown-item" href="#">Kg</option>
                                                <option class="dropdown-item" href="#">Quintal</option>
                                                <option class="dropdown-item" href="#">Ton</option>
                                                <option class="dropdown-item" href="#">Pack</option>
                                                <option class="dropdown-item" href="#">Unit</option>
                                            </ul>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="text" id="price" name="price" class="form-control input-group-sm "
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="totalprice">Total Price</label>
                                        <input type="text" id="totalprice" name="totalprice"
                                            class="form-control input-group-sm " readonly />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4 ">
                                    <div class="form-outline">
                                        <label class="form-label" for="aboutharvest">About Your Harvest</label>
                                        <textarea row="30" col="70" id="aboutharvest" name="aboutharvest"
                                            class="form-control input-group-sm">
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next-step" class="next-step  btn btn-dark float-end mt-4 "
                                data-step="step2">Next</button>
                        </fieldset>
                        <fieldset class="field-set  mt-4 pt-4" id="step2">
                            <h4 class="fw-bold text-center">Upload File</h4>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-12">
                                <div class="form-group ">
                                    <input type="file" class="py-3" name="file[]" id="quantity" multiple>
                                    <label for="quantity" class="text-dark">Upload Images</label>
                                </div>
                            </div>
                            <button type="button" name="next-step" class="next-step  float-end btn btn-dark mt-4 "
                                value=" More" data-step="step3">Next</button>
                            <button type="button" name="previous-step"
                                class="previous-step btn btn-danger mt-4 float-end mx-2"
                                data-step="step1">Previous</button>
                        </fieldset>
                        <fieldset class="field-set  mt-4 pt-4" id="step3">
                            <h4 class="fw-bold text-center">Fill Your Information</h4>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label " for="name">Name</label>
                                        <input type="text" id="name" name="name"
                                            class="data_search form-control input-group-sm" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <input type="text" id="phone" name="phone"
                                            class=" data_search form-control input-group-sm" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="state">State</label>
                                        <select class="form-select error mb-2 pb-2" id="state" name="state"
                                            aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">name1</option>
                                            <option value="2">name2</option>
                                            <option value="3">name3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="district">District</label>
                                        <select class="form-select error mb-2 pb-2" id="district" name="district"
                                            aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">name1</option>
                                            <option value="2">name2</option>
                                            <option value="3">name3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="tehsil">Tehsil</label>
                                        <select class="form-select error mb-2 pb-2" id="tehsil" name="tehsil"
                                            aria-label="Default select example">
                                            <option selected></option>
                                            <option value="1">name1</option>
                                            <option value="2">name2</option>
                                            <option value="3">name3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="button" name="next-step" class="next-step  btn btn-success mt-4 float-end "
                                data-step="step4">Submit</button>
                            <button type="button" name="previous-step"
                                class="previous-step btn btn-danger mx-2 mt-4 float-end "
                                data-step="step3">Previous</button>
                        </fieldset>
                        <fieldset class="field-set  mt-4 pt-4" id="step4">
                            <div class="row px-3 mt-2 mb-4 text-center">
                                <h2 class="col-12 text-danger"><strong>Success !</strong></h2>
                                <div class="col-12 text-center"><img class="tick w-50 h-75" style="border-radius: 29%"
                                        src="assets/images/237821848127202.gif"></div>
                                <h5 class="col-12 "><i>Enjoy Your Day..!</i></h5>
                            </div>
                            <button type="button" name="previous-step" class=" btn btn-danger mt-4 float-end "
                                data-step="step1">OK</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>
<script>
$(document).ready(function() {

    $("#multistep-form").validate({
        rules: {
            // Define validation rules for your form fields
            category: "required",
            subcategory: "required",
            quantity: "required",
            // Add rules for other fields
        },
        messages: {
            // Define error messages for your form fields
            category: "Please select a category",
            subcategory: "Please select a sub-category",
            quantity: "Please enter a quantity",
            // Add error messages for other fields
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            // Customize the error message placement if needed
            error.addClass("text-danger");
            error.insertAfter(element);
        },
        submitHandler: function(form) {
            // Handle the form submission (e.g., AJAX request)
            form.submit();
        }
    });

    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $(".field-set").length;
    setProgressBar(current);
    $(".next-step").click(function() {
        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();
        $("#progress_bar li").eq($(".field-set")
            .index(nextGfgStep)).addClass("active_rent");
        nextGfgStep.show();
        currentGfgStep.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
    $(".previous-step").click(function() {
        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();
        $("#progress_bar li").eq($(".field-set")
            .index(currentGfgStep)).removeClass("active_rent");
        previousGfgStep.show();
        currentGfgStep.animate({
            opacity: 0
        }, {
            step: function(now) {
                opacity = 1 - now;
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({
                    'opacity': opacity
                });
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress_bar")
            .css("width", percent + "%")
    }
    $(".submit").click(function() {
        return false;
    })
});
</script>




</html>