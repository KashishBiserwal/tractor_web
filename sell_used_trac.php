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
    <div class="container py-2">
        <div class="py-2">
            <span class="my-4 text-white pt-4 ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><a href="#" class="text-decoration-none header-link  px-1">Sell Used <i class="fa-solid fa-chevron-right px-1"></i> </a></span>
                    <span class="text-dark">Sell Used Tractor</span>
            </span> 
        </div>
    </div>
</section>
<!-- <section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-md-4 mx-auto mb-4 mb-sm-0 text-center headline ">
            <span class="text-secondary text-uppercase"></span>
            <h2 class=" text-dark ">Sell Your <span class="text-success">Used Tractor</span></h2>
            <h4 class="mb-4">"Photo Khicho Tractor Becho"</h4>
        </div>
            
        <div class="col-md-8 h-100 clipped" id="backgraund_img" style="min-height: 350px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">

        </div>
    </div>
</section> -->
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">

        <!-- in mobile remove the clippath -->
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/image_2023_09_02T08_22_01_554Z.png); background-position: center; background-size: cover;">
        </div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
    <h2 class=" text-dark ">Sell Your <span class="text-success">Used Tractor</span></h2>
    <h4 class="mb-4">"Photo Khicho Tractor Becho"</h4>
        </div>
</section>

<section class="form-view bg-white ">
    <div class="container-mid" style="position: relative;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <form id="signUpForm_sellused" action="#!" class="bg-light">
                    <div class="form-header d-flex mb-4">
                        <span class="stepIndicator_sellused">Tractor Type</span>
                        <span class="stepIndicator_sellused">Condition State</span>
                        <span class="stepIndicator_sellused">Images</span>
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
                                <input type="password" class="form-control" placeholder="Enter Number" id="number" name="number">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_tehsil" class="form-label text-dark">Tehsil</label>
                                <input type="yr_tehsil" class="form-control" placeholder="Enter Your Tehsil" id="tehsil_" name="tehsil_">
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
                    <div class="step_sellused">
                        <p class="text-center mb-4">Which tractor do you Own?</p>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="form-label text-dark">Brand</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="Brand" id="Brand">
                                    <option value>Select Brand</option>
                                    <option value="1">Mahindra</option>
                                    <option value="2">svaraj</option>
                                    <option value="2">sonakila</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Model</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="Model" id="Model">
                                    <option value>Select Model</option>
                                    <option value="1">MU4501 2WD</option>
                                    <option value="2">MU5501</option>
                                    <option value="2">A211N-OP</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Year</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="year" id="year">
                                    <option value>Select year</option>
                                    <option value="1">2007</option>
                                    <option value="2">2008</option>
                                    <option value="2">2010</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Engine Condition</label>
                               <select class="form-select py-2 " aria-label=".form-select-lg example" name="engine_condition" id="engine_conditin">
                                    <option value>Select Engine Condition</option>
                                    <option value="1">0-25%(poor)</option>
                                    <option value="2">25-50%(Average)</option>
                                    <option value="2">51-75%(Good)</option>
                                    <option value="2">76-100%(Very Good)</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label class="form-label text-dark my-1">Tyre Condition</label>
                                <select class="form-select py-2" aria-label=".form-select-lg example" name="Tyre_Condition"id="Tyre_Condition">
                                    <option value>Select Engine Condition</option>
                                    <option value="1">0-25%(poor)</option>
                                    <option value="2">25-50%(Average)</option>
                                    <option value="2">51-75%(Good)</option>
                                    <option value="2">76-100%(Very Good)</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="form-label text-dark my-1">Hours driven</label>
                                <select class="form-select py-2 " aria-label=".form-select-lg example" name="hours_driven" id="hours_driven">
                                    <option value>Select Hours Driven</option>
                                    <option value="1">Less then 1000</option>
                                    <option value="2">1001-2000</option>
                                    <option value="2">2001-3000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="step_sellused">
                        <p class="text-center mb-4">Upload Tractor Images</p>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="file" id="myFile" name="myFile">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="form-label text-dark my-1">How early do you want to sell?</label>
                            <select class="form-select py-2 " aria-label=".form-select-lg example" name="" id="">
                                <option value>Within 15 days</option>
                                <option value="1">15-30 days</option>
                                <option value="2">More then 30 days</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-footer d-flex my-3">
                        <button type="submit" id="prevBtn_sellused" onclick="nextPrev(-1)">Previous</button>
                        <button type="submit" id="nextBtn_sellused" onclick="nextPrev(1)">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">

</div>
</section> 
<section class="about bg-light">
        <div class="container">
            <div class="lecture_heading text-center">
                <h3 class="fw-bold mt-4 pt-4">Recently Asked User Questions about Used Tractor Valuation</h3>
            </div>
            <div class="mt-4 pb-5">
                <div class="accordion " id="accordionFlushExample">
                    <div class="accordion-item  rounded-3">
                        <h2 class="accordion-header p-2" id="flush-headingOne" >
                        <button class="accordion-button collapsed fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Que. What is used tractor valuation?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans: Just after purchasing a tractor, your tractor value starts decreasing that is called depreciation. When you sell your used tractor the price isn’t the same one on which you purchased your tractor. So, this Used Tractor Valuation tool helps you to find out the true tractor resale value of your tractor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingTwo">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Que. How to know fair tractor value price in our state?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans: It's a simple process you get true value tractor price in just a few seconds. You have to tell you some information regarding tractor like your tractor brand, model number, state, year of purchase, tire condition, your name and mobile number. Now you have to go on, get valuation then you get fair used tractor value.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingThree">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Que. How to use an old tractor valuation calculator?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                           <p class="text-dark">Ans. At TractorJunction, go on used tractor valuation then select your tractor brand name, select model number, select state, then select owner, select year in which you purchased your tractor, select tire condition of your tractor than add your name and mobile number. Then go on, get valuation and finally you get your fair tractor resale value.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading4">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Que. How do we know this is a fair tractor resale value?
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="text-dark">Ans. Used tractor value calculator is made by our experts. This tool gives the price according to your tractor details which are given by you. Then this tool studies your tractor details and gives you a fair resale tractor price.</p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading5">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            Que. After using used tractor valuation in India, how to sell the tractor?
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <p class="text-dark">Ans. Just like the used tractor valuation, you can easily sale your old tractor on TractorJunction. Go on, sell tractor online and fill the form and after that our team helps you in selling your tractor. Upload photos of your tractor if you want to sell your tractor quicker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading6">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        Que. Do we have to pay for using used tractor valuation?
                        </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. No, TractorJunction has launched this feature for your convenience. Used tractor value guides free and provides you with a fair tractor resale price in India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-headingoil">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseoil" aria-expanded="false" aria-controls="flush-collapseoil">
                          Que. How does the Used Tractor Valuation impact the condition of my tractor tyre?
                        </button>
                        </h2>
                        <div id="flush-collapseoil" class="accordion-collapse collapse" aria-labelledby="flush-headingoil" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark">Ans. If you want to know the fair price of your tractor which you want to sell then you have to also give the condition of your tyre because it affects the price.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  rounded-3 my-3">
                        <h2 class="accordion-header p-2" id="flush-heading7">
                        <button class="accordion-button collapsed  fw-bold h4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        Que. Is TractorJunction the right place to sell our tractor?
                        </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                               <p class="text-dark">Ans. Yes, TractorJunction is India's number one online platform where you get all brands tractors and their specifications. On TractorJunction you can also sell your used tractor. From used tractor valuation you get fair price of your tractor and from that, you can easily sale your tractor online.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

           
        </div>
</section>

<section class="bestplace">
    <div class="container py-4 mb-1">
       <div class="col-12 text-center py-4 my-1">
        <div class="col-12"></div>
       
        <h2 class="my-4 text-white">Bharat tractor is Best Place to <span class=" fw-bold text-warning"> sell your Tractor</span></h3>
        <div class="text-center">
            <span><i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star text-warning"></i> <i class="fa-solid fa-star-half text-warning"></i></span>
        </div>
        <p class="text-white py-2 mt-3">As famous agriculture researchers quote, Tractors do not come with glamorous features like any other automobile but for sure go out with a glamorous price. In simple words, a tractor that comes with a high resale value is more dependable than the ones which do not offer a good resale price. Tractor Junction works to make this price even better for you. If you want to sell your old tractor at the best price and ease then we have got you a simplified process that comforts you and does not hamper you in your daily lives. Register with us, submit your inquiry, post the update about your tractor and you are done, our highly trained tractor specialists quote the best price for your tractor and work to get hassle free buyers on-board. Selling an old tractor had never been this easy, with Tractor Junction your tractor loves you back the way you do.</p>
       </div>
    </div>
</section>
<!-- <section class="bg-light">
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
</section> -->




<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>
    <script>
        $(document).ready(function(){
        $('#signUpForm_sellused').validate({
          rules:{
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
            },
            Brand:{
                required:true,
            },
            Model:{
                required:true,
            },
            year:{
                required:true,
            },
            engine_condition:{
                required:true,
            },
            Tyre_Condition:{
                required:true,
            },
            hours_driven:{
                required:true,
            },
            myFile:{
                required:true,
            }
          },
          messages:{
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
            },
            Brand:{
                required:"This flied is requred",
            },
            Model:{
                required:"This flied is requred",
            },
            year:{
                required:"This flied is requred",
            },
            engine_condition:{
                required:"This flied is requred",
            },
            Tyre_Condition:{
                required:"This flied is requred",
            },
            hours_driven:{
                required:"This flied is requred",
            },
            myFile:{
                required:"This flied is requred",
            }
          },
          submitHandler: function(form) {
        form.submit();
          }
        });
        });
        
    </script>
    </html>
    