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

<section class=" mt-5 pt-5 bg-light">
    <div class="container pt-5">
        <div class="py-2">
            <span class="bg-light">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class="text-dark header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">Used Tractor Valuation</span>
            </span> 
        </div>
    </div>
</section>
<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/istockphoto-1033665866-612x612.jpg); background-position: center; background-size: cover;"></div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
        <h2 class=" text-dark ">Get True Price of a <span class="text-success">Used Tractor</span></h2>
        <h4 class="mb-4">जानिए अपने ट्रैक्टर की सही कीमत</h4>
    </div>
</section>
<section class="form-view bg-white pb-4">
    <div class="container-mid" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <form id="tractor-valuation-form" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label for="your-name" class=" text-dark float-start">Select Brand</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="select_brand" id="select_brand">
                                        <option value>Hindustan</option>
                                        <option value="1">Mahindra</option>
                                        <option value="2">Swaraj</option>
                                        <option value="3">Massey Ferguson</option>
                                        <option value="4">Sonalika</option>
                                        <option value="5">Farmtrac</option>
                                        <option value="6">Eicher</option>
                                        <option value="7">John Deere</option>
                                        <option value="8">Powertrac</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label for="model" class=" text-dark float-start">Model</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="model" id="model">
                                        <option value>select Model</option>
                                        <option value="1">3055 DI</option>
                                        <option value="2">3040 DI</option>
                                        <option value="3">3048 DI</option>
                                        <option value="4">2035 DI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="State" class=" text-dark float-start my-2">State</label>
                                <select class="form-select form-control" aria-label="Default select example" name="select_state" id="select_state">
                                    <option value>Select State</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="Owners" class=" text-dark float-start my-2">Owners</label>
                                <select class="form-select form-control" aria-label="Default select example" name="Owners" id="Owners">
                                    <option value>Select Owner</option>
                                    <option value="1st">1st</option>
                                    <option value="2st">2st</option>
                                    <option value="3st">3st</option>
                                    <option value="All">All Above</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                 <label for="Manufacture" class=" text-dark float-start  my-2">Manufacture Year</label>
                                <select class="form-select form-control" aria-label="Default select example" name="Manufacture" id="Manufacture">
                                    <option value>Select Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="Tyre" class=" text-dark float-start my-2">Tyre Condition</label>
                                <select class="form-select form-control" aria-label="Default select example" name="Tyre" id="Tyre">
                                    <option value>Select Tyre Condition</option>
                                    <option value="10">10%</option>
                                    <option value="20">20%</option>
                                    <option value="30">30%</option>
                                    <option value="40">40%</option>
                                    <option value="50">50%</option>
                                    <option value="60">60%</option>
                                    <option value="70">70%</option>
                                    <option value="80">80%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                <label for="Tyre" class=" text-dark float-start  my-2">Name</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter Name" id="your_name" name="your_name">
                            </div>
                            <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                <label for="Mobile" class=" text-dark float-start  my-2">Mobile Number</label>
                                <input type="text" class="form-control text-dark" placeholder="Enter Name" id="Mobile" name="Mobile">
                            </div>
                            <div class="col-12 mt-3">
                                <button id="tractor_valuation" data-res="<?php echo $sum; ?>" type="button" class="btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#get_valuation_btn" >Get valuation</button>
                            </div>       
                        </div>
                    </form>
               </div>
           </div>
    </div>
</section>

<section>
    <div class="container  my-5">
        <div class="my-3">
            <h3 class="fw-bold mt-3">Price Analysis for Used Popular Tractors</h3>
        </div>

        <div class="row my-5">
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-4 col-lg-4 col-sm-4 assured bg-light ">
                <div class="avg_content  mt-3">
                    <a href="#" class="text-decoration-none text-success mt-4">2018 SWARAJ 744 FE</a>
                    <p class="text-dark">Average Price - ₹442390.93333333</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-dark">₹310000 - ₹710000</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="text-success add_btn"> <i class="fa-solid fa-list"></i>  105 listings</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
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

  <!-- Modal -->
  <!-- <div class="modal fade" id="get_valuation_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Please Verify Your Mobile Numbers</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class=" col-12 input-group">
                    <div class="row">
                    <div class="col-12">
                    <label for="Mobile" class=" text-dark float-start">Mobile Number</label>
                    <input type="text" class="form-control text-dark"  id="Mobile" name="Mobile">
                    </div>
                    <div class="col-12">
                    <label for="Mobile" class=" text-dark float-start">Enter OTP</label>
                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile" name="Mobile">
                    </div>
                    <div class=" text-right">
                        <a href="" class="bnt bnt-link text-right pt-2">Resend OTP</a>
                    </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Verify</button>
        </div>
      </div>
    </div>
  </div>
    
</div> -->

<!-- Modal -->
<div class="modal fade" id="get_valuation_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Please Verify Your Mobile Numbers</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class=" col-12 input-group">
                <div class="row">
                    <div class="col-12">
                        <label for="Mobile" class=" text-dark float-start">Mobile Number</label>
                        <input type="text" class="form-control text-dark"  id="Mobile" name="Mobile">
                    </div>
                    <div class="col-12">
                        <label for="Mobile" class=" text-dark float-start">Enter OTP</label>
                        <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile" name="Mobile">
                    </div>
                        <div class="">
                          <a href="#" class=""style="text-align: right;"><p>Resend OTP</p></a>
                        </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-success">Verify</button>
      </div>
    </div>
  </div>
</div>
<?php
    include 'includes/footer.php';
    include 'includes/footertag.php';

    ?>

    <script>
        $(document).ready(function(){
            $("#tractor_valuation").on('click', function(event) {
                tractor_valuation();
        });
    console.log('testing');
    $('#tractor-valuation-form').validate({
        rules:{
            select_brand:{
                required:true,
            },
            model:{
                required:true,
            },
            select_state:{
                required:true,
            },
            Owners:{
                required:true,
            },
            Manufacture:{
                required:true,
            },
            Tyre:{
                required:true,
            },
            your_name:{
                required:true,
            },
            Mobile:{
                  required:true,
            }
        },
        messages:{
            select_brand:{
                required:"This field is required",
            },
            model:{
                required:"This field is required",
            },
            select_state:{
                required:"This field is required",
            },
            Owners:{
                required:"This field is required",
            },
            Manufacture:{
                required:"This field is required",
            },
            Tyre:{
                required:"This field is required",
            },
            your_name:{
                required:"This field is required",
            },
            Mobile:{
                required:"This field is required",
            }
        },
        submitHandler: function(form) {
    form.submit();
        }
    });
});
    </script>
    <script>
       function tractor_valuation(){
            var brand_id = $('#select_brand').val();
            var brand_id = $('#model').val();
            var brand_id = $('#select_state').val();
            var brand_id = $('#Owners').val();
            var brand_id = $('#Manufacture').val();
            var brand_id = $('#Tyre').val();
            var brand_id = $('#your_name').val();
            var brand_id = $('#Mobile').val();
        }
    </script>
</body>
</html>