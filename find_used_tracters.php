<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <?php
   include 'includes/headertag.php';
   ?>
   
</head>

<body>
   <?php
   include 'includes/header.php';
   ?>

<section class=" bg-light mt-5 pt-5">
    <div class="container pt-5">
        <div class="py-2">
            <span class="my-4 text-white">
                <a href="index.php" class="text-decoration-none header-link px-1">Home <i class="fa-solid fa-chevron-right px-1"></i></a>
                    <span class=""><span class=" text-dark text-decoration-none header-link  px-1">Buy Used <i class="fa-solid fa-chevron-right px-1"></i> </span></span>
                    <span class="text-dark"> Buy Old Tractor</span>
            </span> 
        </div>
    </div>
</section>

<section>
    <div class="d-sm-flex align-items-center justify-content-between w-100">
        <div class="col-12 h- " style="min-height: 360px; background-image: url(assets/images/tractor-valuation.jpg); background-position: center; background-size: cover;"></div>
    </div>
    <div class="page-banner-content text-center position-absolute px-2">
    <h2 class=" text-dark ">Interested To <span class="text-success">Buy Old Tractor</span></h2>
            <h5 class="mb-4">Fill the form will contact you shortly</h4>
    </div>
</section>
<section class="form-view bg-white pb-4">
    <div class="container-mid" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <form id="find-used-tractor-form" class="form-view-inner form-view-overlay bg-light box-shadow p-3" action="" method="" >
                        <div class="row justify-content-center">
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Tyre" class=" text-dark float-start  my-2"> First Name</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter Name" id="your_name" name="your_name">
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Tyre" class=" text-dark float-start  my-2">Last Name</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter Name" id="your_lname" name="your_lname">
                                </div>
                                <div class="col-12 col-lg-6 col-sm-5 col-md-6 my-2">
                                    <label for="Mobile" class=" text-dark float-start my-1">Mobile Number</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter Name" id="Mobile" name="Mobile">
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row pt-4 justify-content-center ">
                                        <label for="Manufacture" class=" text-dark float-start  my-2">Manufacture Year</label>
                                        <select class="form-select p-2" id="multiple-select-field" aria-label="Default select example" data-placeholder="Choose anything" multiple name="Manufacture" id="Manufacture">
                                            <option>2023</option>
                                            <option>2022</option>
                                            <option>2021</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                            <option>2015</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="add-more">
                                    <div class="row">
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
                                            <div class="form-outline"></div>
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
                                    </div>
                                     <div class="addbnt text-right">
                                        <p class="addlink "><a href="">Add More</a></p>
                                        </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <button data-res="<?php echo $sum; ?>" type="submit" class="btn-success w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#get_OTP_btn">Get OTP</button>
                                </div>       
                            </div>
                        </div>
                    </form>
               </div>
           </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="old_tracter py-3 text-center">
            <h3 class="fw-bold mt-3">Old Tractors By Brand</h3>
        </div>
        <div class="row mt-3 ps-5 justify-content-center m-0">
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/mahindra-1673872647.webp" data-src="h" alt="Sonalika Brand Logo">
                        <p class="mb-0 oneline">Mahindra</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/swaraj-1608095532.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Swaraj</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main  box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img  class="img-fluid w-50" src="assets/images/sonalika.png" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">Sonalika</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/massey-ferguson-1579512590.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2 oneline">massey ferguson</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/eicher-1608095225.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Eicher</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/farmtrac-1579511831.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Farmtrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/john-deere-1579511882.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">john-deere</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/powertrac-1579511958-2.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Powertrac</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/new-holland-1579511945.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">New-holland</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/kubota-1579512571.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Kubota</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/escort-1579512292.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Escort</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/vst-shakti-1623048840.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">VST</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/a-c-e-1579511768.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">ACE</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/same-deutz-fahr-1579511987.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Same Deutz Fahr</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/preet-1579511971.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Preet</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                <div class="tjcol states-block">
                    <div class="brand-main box-shadow mt-2 text-center">
                        <a class="weblink text-decoration-none text-dark" href="#" title="Sonalika Old Tractors">
                        <img class="img-fluid w-50" src="assets/images/ford.webp" data-src="" alt="Sonalika Brand Logo">
                        <p class="mb-2  oneline">Ford</p>
                        </a>
                    </div>
                </div>
            </div>


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
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; New Tractors </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Finance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Popular Tractors</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-2">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Insurance </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp;Latest Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Compare</p></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 col-md-4 my-3">
                <ul class="justify-content-center ul-box  ">
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Upcoming Tractors</p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p>  <i class="fa-solid fa-angles-right"></i> &nbsp; Tractor News </p></a></li>
                    <li class=""> <a href="#" class="text-dark text-decoration-none"><p> <i class="fa-solid fa-angles-right"></i> &nbsp; Used Tractors</p></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Verify Your OTP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class=" col-12 input-group">
                <div class="col-12">
                    <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile" name="Mobile">
                </div>
                <div class="float-end col-12">
                    <a href="" class="float-end">Resend OTP</a>
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
    console.log('testing');
    $('#find-used-tractor-form').validate({
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

      
  $( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
});
});

    </script>

  
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>
    </html>









    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="path/to/select2.min.css" rel="stylesheet">
    <!-- Include jQuery -->
    <script src="path/to/jquery.min.js"></script>
    <!-- Include Select2 JavaScript -->
    <script src="path/to/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#Manufacture').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false
            });
        });
    </script>
</head>
<body>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row pt-4 justify-content-center">
            <label for="Manufacture" class="text-dark float-start my-2">Manufacture Year</label>
            <select class="form-select p-2" id="Manufacture" aria-label="Default select example" data-placeholder="Choose anything" multiple name="Manufacture">
                <option>2023</option>
                <option>2022</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
            </select>
        </div>
    </div>
</body>
</html>
