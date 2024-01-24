<!DOCTYPE html>
<html lang="en">

   <?php
  include 'includes/headertag.php';
    //include 'includes/headertagadmin.php';
     include 'includes/footertag.php';
     
     ?> 
    <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
    <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
    <script src="<?php $baseUrl; ?>model/used_tractor.js"></script>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class="mt-5 pt-5 bg-light">
    <div class="container py-2">
        <div class="mt-5">
            <span class="mt-4 text-white ">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" text-decoration-none text-dark px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark">  Used Tractor</span>
            </span> 
        </div>
    </div>
</section>
<section >
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-sm-9 col-lg-9 col-md-9">
                <h3 class="">SEARCH USED  <span class="text-success fw-bold">TRACTORS IN INDIA</span> </h3>
                <div class=" row mb-3" id="">
                    <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-3">
                        <button id="adduser" type="button" class="add_btn btn  btn-success px-3">
                             <i class="fa-solid fa-cart-shopping"></i> Buy tractor </button>  &nbsp;
                        <button id="adduser" type="button" class="add_btn btn btn-success">
                            <i class="fa-sharp fa-solid fa-handshake"></i> Sell tractor </button>
                    </div> -->
                </div>
                <div class="row my-3">
                    <div id="productContainer" class="row">
                    </div>
                    <div class="col-12 text-center">
                        <button id="loadMoreBtn" type="button" class="add_btn btn btn-success mt-4 shadow">
                        <i class="fas fa-undo"></i>  Load More Tractor </button>
                       
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-lg-3 col-md-3">
                    <div class=" row mb-3" id="">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class=" row text-center">
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                                    <button id="reset_tractor" type="button" onclick="resetform()" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-undo"></i>  Reset </button>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-6 col-md-6 pe-2">
                                    <button id="filter_tractor" type="button" class="add_btn btn btn-success w-100">
                                    <i class="fas fa-filter"></i>  Apply Filter </button>
                                </div>
                            </div>
                        </div>
                    </div>
               
                <div class=" mb-3" id="">
                    <div class="force-overflow">
                        <div class="price py-2 ">
                            <h5 class=" ps-3 text-dark fw-bold mb-3">Search By Budget</h5>
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="0 - 3"/><span class="ps-2 fs-6"> 0 Lakh - 3 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="3 - 6"/><span class="ps-2 fs-6"> 3 Lakh - 6 Lakh</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 budget_checkbox" value="6 - 9"/><span class="ps-2 fs-6"> 9 Lakh - 9 Lakh</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                    <h5 class=" ps-1 text-dark fw-bold pt-2">Search By HP</h5>
                        <div class="HP py-2">
                            
                            <!-- <input type="checkbox" class="text-align-center ms-3" value=""/><span> This is checkbox </span><br /> -->
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="0 - 20"/><span class="ps-2 fs-6">0 HP - 20 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="21 - 30"/><span class="ps-2 fs-6">21 HP - 30 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="31 - 40"/><span class="ps-2 fs-6">31 HP - 40 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="41 - 50"/><span class="ps-2 fs-6">41 HP - 50 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="51 - 60"/><span class="ps-2 fs-6">51 HP - 60 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="61 - 70"/><span class="ps-2 fs-6">61 HP - 70 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="71 - 80"/><span class="ps-2 fs-6">71 HP - 80 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="81 - 90"/><span class="ps-2 fs-6">81 HP - 90 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="91 - 100"/><span class="ps-2 fs-6">91 HP - 100 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="101 - 110"/><span class="ps-2 fs-6">101 HP - 110 HP</span><br />
                            <input type="checkbox" class="checkbox-round mt-1 ms-3 hp_checkbox" value="111 - 120"/><span class="ps-2 fs-6">111 HP - 120 HP</span><br />
                        </div>
                    </div>
                </div>
                <div class="scrollbar mb-3" id="">
                    <div class="force-overflow">
                            <h5 class="ps-1 text-dark fw-bold pt-2">Search By Brand</h5>
                            <div class="HP py-2" id="checkboxContainer">
                            </div>
                        </div>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Used Tractor by Location</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raigarh </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Raipur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Bilaspur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Surajpur </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In korba </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Ambikapur </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Assured Used Tractor In Manendragarh </p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container mt-4 ">
        <div class="col-12 assured mt-3">
            <h4 class="fw-bold p-2">Second Hand Tractors By Brand</h4>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Farmtrac tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Swaraj tractors for sale </p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;  Second hand Mahindra tractors for sale</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Swaraj tractors for sale </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Second hand Mahindra tractors for sale</p></a></li>
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
    console.log('testing');
    $('#contact-seller-call').validate({
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
            badget:{
                required:true,
            },
            Tehsil:{
                required:true,
            }
        },
        messages:{
            fname:{
                required:"This field is required",
            },
            lname:{
                required:"This field is required",
            },
            number:{
                required:"This field is required",
            },
            state:{
                required:"This field is required",
            },
            district:{
                required:"This field is required",
            },
            badget:{
                required:"This field is required",
            },
            Tehsil:{
                required:"This field is required",
            }
        },
        submitHandler: function(form) {
        form.submit();
        }
    });
});

    </script>
    </html>