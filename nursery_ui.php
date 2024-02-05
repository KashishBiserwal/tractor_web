<!DOCTYPE html>
<html lang="en">

<head>
    <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';
   ?>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
<script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/nursery_ui.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
   ?>
   
    
    <section class="mt-5 pt-5 bg-light">
        <div class="container-fullwidth py-3 mt-2">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a><span class="text-dark">Nursery</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fullwidth mt-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="py-2  fw-bold">Locate <span class="text-success fw-bold"> Nurseries </span>Near You</h3>
                    <div id="productContainer" class="row my-4">
                    </div>
                    <div class="col-12 text-center mb-4">
                        <button id="load_moretract"  type="button" class="add_btn btn-success btn btn-lg">
                            <i class="fas fa-undo"></i> Load More </button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" onclick="resetform()" class="add_btn btn btn-success">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="filter_button" type="button" class="add_btn btn btn-success">
                                        <i class="fas fa-filter"></i> Apply Filter </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="scrollbar mb-3" id="filter_district">
                        <div class="force-overflow">
                            <h5 class=" ps-1 text-dark fw-bold pt-2">Search By State</h5>
                            <div class="HP py-2">
                                
                                <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Chhattisgarh" /><span class="ps-2 fs-6">Chhattisgarh</span><br />
                                <input type="checkbox" class="checkbox-round mt-1 ms-3 select_state" value="Other" /><span class="ps-2 fs-6">Other</span><br />
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="filter_district">
                       <div class="force-overflow">
                        <h5 class=" ps-1 text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2">
                                
                                <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="raipur" /><span class="ps-2 fs-6">Raipur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Bilaspur" /><span class="ps-2 fs-6">Bilaspur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Ambikapur" /><span class="ps-2 fs-6">Ambikapur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Raigarh" /><span class="ps-2 fs-6">Raigarh</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Surajpur" /><span class="ps-2 fs-6">Surajpur</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Jagdalpur" /><span class="ps-2 fs-6">Chirmiri</span><br />
                                <input type="checkbox" class="checkbox-round ms-3 mt-1 select_district" value="Korba" /><span class="ps-2 fs-6">Korba</span><br />
                            
                            </div>
                        </div>
                    </div>
                    <!-- <div class="scrollbar mb-3" id="districtFilterContainer">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold pt-2">Search By Tehsil</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="raipur" /><span
                                        class="ps-2 fs-6">Raipur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Bilaspur" /><span
                                        class="ps-2 fs-6">Bilaspur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Ambikapur" /><span
                                        class="ps-2 fs-6">Ambikapur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Raigarh" /><span
                                        class="ps-2 fs-6">Raigarh</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Surajpur" /><span
                                        class="ps-2 fs-6">Surajpur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Jagdalpur" /><span
                                        class="ps-2 fs-6">Chirmiri</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1 tehsil_checkbox" value="Korba" /><span
                                        class="ps-2 fs-6">Korba</span><br />
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold mb-3">Last Added</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_30day" /><span
                                        class="ps-2 fs-6">Less than 30 days</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_30mnth" /><span
                                        class="ps-2 fs-6">Less than 3 months</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="less_60_mnth" /><span
                                        class="ps-2 fs-6">Less than 6 months</span><br />
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>




    <?php
    include 'includes/footer.php';
   
    ?>



    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("#hire_inner").validate({
            rules: {
                first_name: {
                    required: true,
                    minlength: 2, 
                },
                last_name:{
                    required: true,
                    minlength: 2,   
                },
                mobile_number: {
                    required: true,
                    digits: true, 
                    indianMobile: true, // Allow only digits
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

</html>