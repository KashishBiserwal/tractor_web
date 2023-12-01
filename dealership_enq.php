<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'includes/header.php';
        include 'includes/headertag.php';
        
    ?>
</head>
<body>
    
    <section class=" mt-5 pt-5 bg-light">
        <div class="container pt-3">
            <div class="py-2">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                        <span class=""><span class="text-dark header-link  px-1">Enquiries<i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                        <span class="text-dark">On-Road Price</span>
                </span> 
            </div>
        </div>
    </section>
    
    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-12 h-100 " style="min-height: 360px; background-image: url(assets/images/dealership-enquiry.jpg); background-position: center; background-size: cover;">
            </div>
        </div>
        <div class="page-banner-content text-center position-absolute px-2">
            <h1>Tractor Dealer Enquiry</h1>
            <p>Enquiry Form</p>
        </div>
    </section>

    <!-- FORM -->
    <section class="form-view bg-white pb-4">
        <div class="container-mid" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <form id="dealership_enq_from" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label class="form-label text-dark">First Name</label>
                                    <input type="text" class="form-control" id="f_name" name="f_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="mt-2">
                                    <label class="form-label text-dark">Last Name</label>
                                    <input type="text" class="form-control" id="l_name" name="l_name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="mt-2">
                                    <label class="form-label text-dark">Mobile Number</label>
                                    <input type="text" class="form-control" id="mob_num" name="mob_num">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                <select class="form-select py-2" id="_state" name="_state"aria-label=".form-select-lg example">
                                    <option selected>Select State</option>
                                    <option value="1">Chhattisgarh</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                <select class="form-select py-2" id="_district" name="_district" aria-label=".form-select-lg example">
                                    <option selected>Select District</option>
                                    <option value="1">Raipur</option>
                                    <option value="2">Bilaspur</option>
                                    <option value="2">Durg</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_price" class="form-label text-dark"> Tehsil</label>
                                <input type="yr_price" class="form-control" placeholder="Enter Tehsil" id="_tehsil" name="_tehsil">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <label for="yr_dist" class="form-label text-dark">Brand</label>
                                <select class="form-select py-2 " id="_brand" name="_brand"aria-label=".form-select-lg example">
                                    <option selected>Select Brand</option>
                                    <option value="1">Mahindra</option>
                                    <option value="2">Swaraj</option>
                                    <option value="2">Powertrac</option>
                                </select>
                            </div>
                            <div class="text-center my-3">
                                <button type="submit" id="delership_enq_btn" class="btn btn-success px-5 w-100 ">Click Here</button>         
                            </div>        
                            <p class="mb-0 text-center">By proceeding ahead you expressly agree to the Tractor Junctions <a href="#" class="text-decoration-none" target="_blank" title="terms and conditions">terms and conditions*</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <h1 class=" mt-5">Popular Mahindra Tractors</h1>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/575-di-xp-plus-1632207330.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="Mahindra_575.php" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra 575 DI XP Plus</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 47 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  2979 CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/mahindra-oja-3140-4wd-1692164169.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra Oja 3140 4WD</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 40 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <!-- <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  CC </p> -->
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/mahindra-oja-2121-4wd-1692163509.webp" class="object-fit-cover" alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra OJA 2121 4WD</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 21 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <!-- <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  3531 CC </p> -->
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/275-di-tu-1632206550.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra 275 DI TU</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 39 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  2048 CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/arjun-novo-605-di-i-1632207718.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra Yuvo 575 DI 4WD</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 45 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  2979 CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3  fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-4 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/265-di-xp-plus-1632206429.webp" class="object-fit-cover" alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">

                            <a href="#" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">Mahindra 265 DI XP Plus</h3>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class=" ps-3"> <i class="fas fa-bolt"></i> 33 HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i>  2048 CC </p>
                                </div>
                            </div>
                            <a href="#" class="text-decoration-none text-dark pb-3 fw-bold">
                                <span class="p-3">
                                    Get On Road price
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center my-3">
                <a href="#" class="btn btn-success btn-lg">Load More Tractors</a>
            </div>
        </div>
    </section>



    <!-- <section>
        <div class="container">
            <div class="row mt-3 mb-3">
                <img src="assets/images/dealership_image2.jpg" alt="image">
                
            </div>
        </div>
    </section> -->

    <!-- WHY BECOME A DEALER -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Why Become a Dealer</p>
                <p class="justify-content-center">Tractors are the most important solutions for farm mechanisation, utility, and other commercial aspects in India. Tractors demand is growing due to the scalability of farming and the increase of crop growers in India. So, this marks the need for starting a verified distributorship with key tractor brands like Mahindra, Sonalika, John Deere, Farmtrac, and others. With less capital and the right knowledge from us, you can get seamless and authorised tractor dealerships in your area.
                </p>
            </div>
        </div>
    </section>

    <!-- About Authorised Tractor Dealership in India -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">About Authorised Tractor Dealership in India</p>
                <p class="justify-content-center">We will help you select from 700+ tractor models from 25+ tractor brands while getting the right tractor quotes. We are presenting you the online tractor dealership page with quick accessibility to correct information on how to get leading tractor OEMs dealerships. Here you can find certified and authorised tractor brands in India with lucrative opportunities. Since India has more than 25 tractor brands, you can become one of many thousand dealers across India and start a rewarding business plan</p>
                <p>At TractorJunction, you can find information on Mahindra Tractor Dealerships, Swaraj tractor dealerships, Massey Ferguson dealerships, John Deere dealerships, Sonalika dealerships, and many other dealerships of your choice. In addition, you can strike the right tractor dealership opportunity across any state and district in India. To get tractor dealerships online near you, enter the state, district and tractor brand of your choice. So, become a tractor dealer today</p>
            </div>
        </div>
    </section>
    
    <!-- Why Become a Tractor Dealer? -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Why Become a Tractor Dealer?</p>
                <ul class="trac_dealers">
                    <li class="">Leader in utility vehicles for over fifty years, since the company builts the first Willys jeeps on Indian soil in 1947</li>
                    <li class="">Pioneer in the Indian automobile industry</li>
                    <li class="">Major player in the Indian Two Wheeler industry with a robust presence in all product segments</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchisor Support -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchisor Support</p>
                <ul class="trac_dealers">
                    <li class="">Pre and Post opening support</li>
                    <li class="">Marketing Plan & Advertisement support</li>
                    <li class="">On-going operational support</li>
                    <li class="">Products support</li>
                    <li class="">Insights on accounting and inventory system</li>
                    <li class="">Resources on site selection criteria/assistance</li>                    
                    <li class="">Key quality control information</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchise Facts -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchise Facts</p>
                <ul class="trac_dealers">
                    <li class="">Pre and Post opening support</li>
                    <li class="">Key quality control information</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Franchise Benefits -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Franchise Benefits</p>
                <ul class="trac_dealers">
                    <li class="">Great returns on investment</li>
                    <li class="">Training & Support</li>
                    <li class="">You can get benefitted from detailed brochures on products</li>
                </ul> 
            </div>
        </div>
    </section>

    <!-- Get Best Tractor Dealership in India -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">Get Best Tractor Dealership in India </p>
                <p class="justify-content-center">You can set up an authorised dealership franchise in your specified location. In the form above, just enter your state, district, and tractor brand choice, and our team will reach out with complete information on the same. We can help you identify important details to apply for tractor dealership agency near you.
                </p>
            </div>
        </div>
    </section>

    <!-- How to Get Authorised Tractor Dealership with TractorJunction? -->
    <section>
        <div class="container">
            <div class="row">
                <p class="fw-bold text-dark bg-light text-start mt-4 assured ps-3">How to Get Authorised Tractor Dealership with TractorJunction? </p>
                <p class="justify-content-center">At TractorJunction, you find access to authorised tractor dealership opportunities. We help you connect with 25+ tractor brands with 700+ tractor models. </p>
                <p class="justify-content-center">We offer you a hassle-free process to buy tractor dealerships in India. You just need to fill up the above form asking for basic details like name, tractor brand preferences, state, district, etc. We will help you identify the right steps to start your new tractor dealerships. We will help you with pre and post-opening & product support, prepare a marketing and advertising plan & even provide assistance on gathering resources for ideal site selection, followed by quality control parameters. For any further Tractor dealership enquiry, reach us.</p>
            </div>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container py-3 mt-2">
            <div class="row">
                <h5 class="bg-light assured py-1 ps-3">Quick links</h5>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">New Tractor</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Compare</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Dealership Enquiry</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Finance</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Upcoming Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Contact/Mail Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Popular Tractors</a></li>                    
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Tractor News</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Insurance</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 py-1">
                    <ul>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Used Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Latest Tractors</a></li>
                        <li><i class="fa-solid fa-angles-right pe-1"></i><a href="#" class="text-decoration-none text-dark">Offers</a></li>
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
            $("#delership_enq_btn").click(function () {
                // setTimeout(() => {
                //     console.log("validation of Department")
                // }, 2000);
                $("form[id='dealership_enq_from']").validate({
                    rules: {
                        f_name: {
                            required: true,
                            minlength: 3
                        },

                        l_name: {
                            required: true,
                            minlength: 3
                        },
                        mob_num: {
                            required: true,
                            minlength: 10
                        },
                        _tehsil: {
                            required: true,
                            minlength: 3
                        },
                        _state: {
                            required: true,
                            // minlength: 10
                        },
                        _district: {
                            required: true,
                            // minlength: 10
                        },
                        _brand: {
                            required: true,
                            // minlength: 10
                        }
                    },
                    messages: {
                        f_name: {
                            required: "Enter Your First Name",
                            minlength: "First Name must be atleast 3 characters long"
                        },
                        l_name: {
                            required: "Enter Your Last Name",
                            minlength: "Last Name must be atleast 3 characters long"
                        },
                        mob_num: {
                            required: "Enter Your Mobile Number",
                            minlength: "Mobile must be 10 characters long"
                        },
                        _tehsil: {
                            required: "Enter Your Tehsil Name",
                            minlength: "Tehsil Name must be atleast 3 characters long"
                        },
                        _state: {
                            required: "Select Your State",
                            // minlength: ""
                        },
                        _district: {
                            required: "Select Your District Name",
                            // minlength: ""
                        },
                        _brand: {
                            required: "Enter Your Brand Name",
                            // minlength: ""
                        }
                    },

                });
            })
        });
    </script>
    
</body>
</html>