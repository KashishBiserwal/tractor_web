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
  <script src="<?php $baseUrl; ?>model/hatbazar_buy_customerlist.js"></script>
</head>

<body>
    <?php
   include 'includes/header.php';
   ?>

    <section class="mt-5 pt-5">
        <div class="container-fullwidth pt-4">
            <div class="">
                <span class="mt-5 text-white pt-5 ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark px-1">Haatbazar<i class="fa-solid fa-chevron-right px-1"></i>
                        </span></span>
                    <span class="text-dark">Buy</span>
                </span>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fullwidth mt-4">
            <div class="row">
                <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                    <h3 class="py-2">Buy Your Item From <span class="text-success fw-bold">Haatbazar</span> </h3>
                    <div class="row my-4" id="productContainer">
                      
                      

                    </div>
                    <div class="col-12 text-center mb-4">
                       <button class="btn btn-success btn-lg" id="load_more">Load more</button>
                    </div>
                </div>

                <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success ">
                                        <i class="fas fa-undo"></i> Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 g-1">
                                    <button id="adduser" type="button" class="add_btn btn btn-success">
                                        <i class="fas fa-filter"></i> Apply Filter </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" mb-3" id="">
                        <div class="force-overflow ">
                            <h5 class=" text-center text-dark fw-bold mb-3">Search By State</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round mt-1 ms-3" value="cg" /><span
                                        class="ps-2 fs-6">Chhattisgarh</span><br />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold pt-2">Search By District</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3  mt-1" value="raipur" /><span
                                        class="ps-2 fs-6">Raipur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Bilaspur" /><span
                                        class="ps-2 fs-6">Bilaspur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Ambikapur" /><span
                                        class="ps-2 fs-6">Ambikapur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Raigarh" /><span
                                        class="ps-2 fs-6">Raigarh</span><br />
                                </div>

                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Surajpur" /><span
                                        class="ps-2 fs-6">Surajpur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Chirmiri" /><span
                                        class="ps-2 fs-6">Chirmiri</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Korba" /><span
                                        class="ps-2 fs-6">Korba</span><br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold pt-2">Search By Tehsil</h5>
                            <div class="HP py-2" style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3  mt-1" value="raipur" /><span
                                        class="ps-2 fs-6">Raipur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Bilaspur" /><span
                                        class="ps-2 fs-6">Bilaspur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Ambikapur" /><span
                                        class="ps-2 fs-6">Ambikapur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Raigarh" /><span
                                        class="ps-2 fs-6">Raigarh</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Surajpur" /><span
                                        class="ps-2 fs-6">Surajpur</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Jagdalpur" /><span
                                        class="ps-2 fs-6">Chirmiri</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="Korba" /><span
                                        class="ps-2 fs-6">Korba</span><br />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" mb-3" id="">
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
                    </div>

                    <div class=" mb-3" id="">
                        <div class="force-overflow">
                            <h5 class=" text-center text-dark fw-bold mb-3">Harvest</h5>
                            <div class="price py-2 " style="margin: 0 auto;">
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="vege" /><span
                                        class="ps-2 fs-6">Vegetable</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="fruits" /><span
                                        class="ps-2 fs-6">Fruits</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="grains" /><span
                                        class="ps-2 fs-6">Grains</span><br />
                                </div>
                                <div class=" d-flex">
                                    <input type="checkbox" class="checkbox-round ms-3 mt-1" value="pulses" /><span
                                        class="ps-2 fs-6">Pulses</span><br />
                                </div>
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
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");
        $("#hire_inner").validate({
            rules: {
                first_name: 'required',

                last_name: 'required',
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