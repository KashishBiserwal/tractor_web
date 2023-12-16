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
   <section class="bg-light mt-5 pt-5">
    <div class="container pt-5">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Old Harvester</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
    <h2 class=" text-dark ">Sell Your <span class="text-success">Used Harvester</span></h2>
    <h4 class="mb-4">Fill the information to sell your used Harvester</h4>
        </div>
</section>
<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <form id="signUpForm_sellused" action="#!" class="bg-light">
                    
                    <div class="form-header d-flex mb-4">
                        <span class="stepIndicator_sellused">Harvester Info</span>
                        <span class="stepIndicator_sellused">Harvester Condition</span>
                        <span class="stepIndicator_sellused">Harvester Images</span>
                        <span class="stepIndicator_sellused">Personal Info</span>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">YOUR HARVESTER INFORMATIONS</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-1">
                                <div class="form-outline">
                                    <label class="form-label text-dark">Brand</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example" name="Brand" id="Brand">
                                        <option value>Select Brand</option>
                                        <option value="1">Mahindra</option>
                                        <option value="2">svaraj</option>
                                        <option value="2">sonakila</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-1">
                            <div class="form-outline">
                                    <label for="" class="form-label text-dark">Model Name</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="model" name="model">
                                        <option value>Select Model Name</option>
                                        <option value="1">John Deere</option>
                                        <option value="2">Mahindra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-2">
                                <div class="form-outline my-3">
                                    <label for="" class="form-label text-dark">Crop Type</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="crop_type" name="crop_type">
                                        <option value="">Enter MultiCrop</option>
                                        <option value="1">Maize</option>
                                        <option value="2">Maize</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-2">
                                <div class="form-outline my-3">
                                    <label for="" class="form-label text-dark">Cutting Width</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="cutting_width" name="cutting_width">
                                        <option value="">Select Cutting Width</option>
                                        <option value="1">1-7 fit</option>
                                        <option value="2">8-14 fit</option>
                                        <option value="2">Above 14 fit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-2">
                                <div class="form-outline my-3">
                                    <label for="" class="form-label text-dark">Power Source</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="power" name="power">
                                        <option value="">Select Power Sourc</option>
                                        <option value="1">Self</option>
                                        <option value="2">Tractor Mounted</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="step_sellused">
                        <p class="text-center mb-4">YOUR HARVESTER CONDITIONS</p>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-outline">
                                    <label for="" class="form-label text-dark">Hours</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="hours" name="hours">
                                        <option value="">Select Hours</option>
                                        <option value="1">Less then 1000</option>
                                        <option value="2">1001-2000</option>
                                        <option value="3">2001-3000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-outline">
                                    <label for="" class="form-label text-dark">Purchase Year</label>
                                    <select class="form-select py-2 " aria-label=".form-select-lg example"id="year" name="year">
                                        <option value="">Select Purchase Year</option>
                                        <option value="1">2007</option>
                                        <option value="2">12008</option>
                                        <option value="3">2010</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-outline my-3">
                                    <label for="" class="form-label text-dark">Pcice</label>
                                    <input type="text" placeholder="Enter Price" name="price" id="price">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-outline my-3">
                                    <label for="" class="form-label text-dark">About your Harvester</label>
                                    <input type="text"  name="about_harvester" id="about_harvester">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">UPLOAD HARVESTER IMAGES</p>
                        <p class="text-center p-2">Please upload Minimun two images</p>
                        <div class="upload__box">
                            <div class="row">
                                <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                                    <div class="upload__btn-box text-center">
                                        <label class="upload__btn px-2">
                                        <p class="mt-2"><i class="fa-solid fa-plus"></i> Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="uplode-img"name="uplode-img">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                                    <div class="upload__btn-box text-center">
                                        <label class="upload__btn px-2">
                                        <p class="mt-2"><i class="fa-solid fa-plus"></i> Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-sm-4 col-md-4">
                                    <div class="upload__btn-box text-center">
                                        <label class="upload__btn px-2">
                                        <p class="mt-2"><i class="fa-solid fa-plus"></i> Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                        </label>
                                    </div>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">Sell Your Used Tractort</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter Number" id="number" name="number">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_tehsil" class="form-label text-dark"> Tehsil</label>
                                <input type="yr_tehsil" class="form-control" placeholder="Enter Tehsil" id="tehsil" name="tehsil">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example"id="state" name="state">
                                    <option value>Select State</option>
                                    <option value="1">Chhattisgarh</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="district" id="district">
                                    <option value>Select District</option>
                                    <option value="1">Raipur</option>
                                    <option value="2">Bilaspur</option>
                                    <option value="2">Durg</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer d-flex my-3">
                        <button type="button" id="prevBtn_sellused" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn_sellused" onclick="nextPrev(1)">Next</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="sell my-4">
            <h3 class="text-dark assured ps-3">Sell Your<span class="text-success"> Used Harvester</span></h3>
        </div>
        <div class="sellcontent">
            <p>Now you can easily sell your used combine harvester. TractorJunction always works according to the needs of the customers. We know that selling an old combine harvester is a problematic job. So, TractorJunction comes up with a separate segment for ‘Sell Your Harvester’ on which you can upload your used harvester and sell it at a proper rate to a genuine buyer. </p>
            <h4>How to sell your old harvester?</h4>
            <!-- <p class="text-center"> TractorJunction has come up with a new page ‘Sell Your Used Implements’ where you can comfortably sell your old implement to the right buyer. If you like to sell used tractor implements online then you have to follow a few simple steps.</p> -->
           
                <p>First, you have to go on the ‘Sell Your Harvester’ page at TractorJunction.</p>
                <p>After that, you have to fill in the information about your second hand harvester like brand name, model name, crop type, cutting width, and power source then select the next step.</p>
                <p>Then you have to fill your harvester condition such as title, hours, purchase year, your harvester price, and about your harvester then select the next step.</p>
                <p>In the next step, you have to upload at least two images of your harvester then select the next step.</p>
                <p>And in the last step, fill your personal information, for example, your name, mobile number, state, district, tehsil, and Pincode then click submit.</p>
                <p class="my-5">After that, your used combine harvester is uploaded on TractorJunction and further our team will help you in selling your old combine harvester. Here you get a genuine buyer for your used harvester. Find a used combine harvester for sale only on TractorJunction</p>
            </div>
    </div>
</section>
<section class="">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Quick Links</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Finance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Latest Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor News </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Dealership Enquiry</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Contact / Mail Us</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    <script>
        $(document).ready(function(){
        $('#signUpForm_sellused').validate({
          rules:{
            Brand:{
                required:true,
            },
            model:{
                required:true,
            },
            crop_type:{
                required:true,
            },
            cutting_width:{
                required:true,
            },
            power:{
                required:true,
            },
            hours:{
                required:true,
            },
           year:{
                required:true,
            },
            price:{
                required:true,
            },
            about_harvester:{
                required:true,
            },
            myFile:{
                required:true,
            },
            fname:{
                required:true,
            },
            lname:{
                required:true,
            },
            number:{
                required:true,
            },
            state:{
                required:true,
            },
            district:{
                required:true,
            }
          },
          messages:{
            Brand:{
                required:"This flied is requred",
            },
            model:{
                required:"This flied is requred",
            },
            crop_type:{
                required:"This flied is requred",
            },
            cutting_width:{
                required:"This flied is requred",
            },
            power:{
                required:"This flied is requred",
            },
            hours:{
                required:"This flied is requred",
            },
            year:{
                required:"This flied is requred",
            },
            price:{
                required:"This flied is requred",
            },
            about_harvester:{
                required:"This flied is requred",
            },
            myFile:{
                required:"This flied is requred",
            },
            fname:{
                required:"This flied is requred",
            },
            lname:{
                required:"This flied is requred",
            },
            number:{
                required:"This flied is requred",
            },
            state:{
                required:"This flied is requred",
            },
            district:{
                required:"This flied is requred",
            }
          },
          submitHandler: function(form) {
        form.submit();
          }
        });
        });
</script>
<!-- hdhtdhdtyjfyfyj -->

   
</html>