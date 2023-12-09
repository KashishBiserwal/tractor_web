<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/headertag.php';
        include 'includes/header.php';
    ?>
</head>
<body>
    <section>
        <div class="container mt-5 pt-4">
            <div class="mt-5 pt-5">
                <span class="mt-4 pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                <a href="certified_dealers.php" class="text-decoration-none header-link px-1">Certified Dealers <i class="fa-solid fa-chevron-right px-1"></i></a>
                <span class="text-dark">Become Certified Dealer</span>
            </div>
        </div>
    </section>

    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/becomeadealertimg.webp); background-position: center; background-size: cover;"></div>
        </div>
        <div class="page-banner-content position-absolute mt-4 px-2">
            <div class="row w-100 ms-5 text-dark">
                <div class="col-12 text-center">
                    <h1>Join TractorJunction as Certified Dealers</h1>
                    <p class="fw-bold">Get huge amount of enquiries for a perfect buisness. For enquiry call or</p>
                    <p class="fw-bold">WhatsApp on 8769-934-402</p>
                <div>                
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="form-view bg-white pb-4">
        <!-- <div class="container-lg bg-light"> -->
            <div class="container-mid" style="position: relative;">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <form id="become_dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-outline">
                                        <div class="mt-2">
                                            <label class="form-label text-dark">First Name</label>
                                            <input type="text" class="form-control mb-0" id="f_name" name="f_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-outline">
                                        <div class="mt-2">
                                            <label class="form-label text-dark">Last Name</label>
                                            <input type="text" class="form-control mb-0" id="bcd_name" name="bcd_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                                    <div class="form-outline">
                                        <div class="mt-2">
                                            <label class="form-label text-dark">Mobile Number</label>
                                            <input type="text" class="form-control mb-0" id="bcd_num" name="bcd_num"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-2">
                                    <div class="form-outline">
                                        <div class="mt-2">
                                            <label class="form-label text-dark">Email</label>
                                            <input type="email" class="form-control mb-0" id="bcd_email" name="bcd_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="bcd_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2" id="bcd_state" name="bcd_state"aria-label=".form-select-lg example">
                                            <option value="" selected-disabled="">Select State</option>
                                            <option value="1">Chhattisgarh</option>
                                            <option value="2">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                                    <div class="form-outline">
                                        <label for="bcd_district" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2" id="bcd_district" name="bcd_district" aria-label=".form-select-lg example">
                                            <option value=""selected-disabled="">Select District</option>
                                            <option value="1">Raipur</option>
                                            <option value="2">Bilaspur</option>
                                            <option value="2">Durg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="bcd_tehsil" class="form-label text-dark"> Tehsil</label>                                        
                                        <select class="form-select py-2 " id="bcd_tehsil" name="bcd_tehsil"aria-label=".form-select-lg example">
                                            <option value="" selected-disabled="">Select Brand</option>
                                            <option value="1">Mahindra</option>
                                            <option value="2">Swaraj</option>
                                            <option value="2">Powertrac</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="bcd_brand" class="form-label text-dark">Brand</label>
                                        <select class="form-select py-2 " id="bcd_brand" name="bcd_brand"aria-label=".form-select-lg example">
                                            <option value="" selected-disabled="">Select Brand</option>
                                            <option value="1">Mahindra</option>
                                            <option value="2">Swaraj</option>
                                            <option value="2">Powertrac</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12  mt-2">
                                    <div class="form-outline">
                                        <div class="mt-2">
                                            <label for="bcd_message"class="form-label text-dark">Message</label>
                                            <textarea rows="2" class="form-control" id="bcd_message" name="bcd_message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center my-3">
                                    <button type="submit" id="become_delership_enq_btn" class="btn btn-success mt-1 px-5 w-100 ">Submit</button>         
                                </div>        
                                <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Bharat Tractors <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </section>

    <?php
        include 'includes/footer.php';
        include 'includes/footertag.php';
        
    ?>

    <script>
        $(document).ready(function(){
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
            $("#become_delership_enq_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='become_dealership_enq_from']").validate({
                    rules: {
                        f_name: {
                            required: true,
                            minlength: 3
                        },

                        bcd_name: {
                            required: true,
                            minlength: 3
                        },
                        bcd_num: {
                            required: true,
                            minlength: 10,
                            digits: true,
                            customPhoneNumber: true 
                        },
                        bcd_state: {
                            required: true,
                            // minlength: 3
                        },
                        bcd_email: {
                            required: true,
                            // minlength: 3
                        },
                        bcd_message: {
                            required: true,
                            // minlength: 3
                        },
                        
                        bcd_brand: {
                            required: true,
                            // minlength: 3
                        },
                        // eo_tehsil: {
                        //     required: true,
                        //     // minlength: 3
                        // },
                        bcd_district: {
                            required: true,
                            // minlength: 3
                        }
                    },
                    messages: {
                        f_name: {
                            required: "Enter Your First Name",
                            minlength: "First Name must be atleast 3 characters long"
                        },
                        bcd_name: {
                            required: "Enter Your Last Name",
                            minlength: "Last Name must be atleast 3 characters long"
                        },
                        bcd_num: {
                            required: "Enter Your Phone Number",
                            minlength: "Phone Number must be of 10 Digit long",
                            digits: "Please enter only digits"
                        },
                        bcd_state: {
                            required: "Select Your State",
                            // minlength: "First Name must be atleast 3 characters long"
                        },
                        bcd_email: {
                            required: "Enter Your Email Address",
                            // minlength: "First Name must be atleast 3 characters long"
                        },
                        bcd_brand: {
                            required: "Select Your Brand",
                            // minlength: "First Name must be atleast 3 characters long"
                        },
                        bcd_message: {
                            required: "Enter Your Message",
                            // minlength: "First Name must be atleast 3 characters long"
                        },
                        // eo_tehsil: {
                        //     required: "Select Your Tehsil",
                        //     // minlength: "First Name must be atleast 3 characters long"
                        // },
                        bcd_district: {
                            required: "Select Your District",
                            // minlength: "First Name must be atleast 3 characters long"
                        }                        
                    },

                });
            })
        });
    </script>

    
</body>
</html>