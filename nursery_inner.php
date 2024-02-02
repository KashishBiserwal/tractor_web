<!DOCTYPE html>
<html lang="en">

<head>
<?php
      include 'includes/headertag.php';
      include 'includes/header.php';
      $id=$_REQUEST['id'];
      //echo $id;
      include 'includes/footertag.php';
      ?>
     
     <script> var CustomerAPIBaseURL = "<?php echo $CustomerAPIBaseURL; ?>";</script>
     <script> var APIBaseURL = "<?php echo $APIBaseURL; ?>";</script>
     <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
     <script src="<?php $baseUrl; ?>model/nursery_detail.js"></script>
  
      
   </head>

<body> 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class="mt-130 bg-light">
            <div class="container ">
                <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                        <span class="text-dark p">Nursery</span>
                    </span>
                </div>
            </div>
        </section>
    <!-- next section start -->
    <section>
        <div class="container my-4">
            <div class="vegehead ">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <!-- <h4 class="fw-bold text-danger pt-4 ">Nursery in District Name</h4> -->
                        <h4 id="district_main"></h4>
                    </div>
                   
                </div>
            </div>

            <div class="row mt-3">
            <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                <div>
                <h4 id="district_main"></h4>
                </div>
                <div>
                    <div class="swiper swiper_buy mySwiper2_buy">
                        <div class="swiper-wrapper swiper-wrapper_buy">
                            <div class=" swiper-slide swiper-slide_buy">
                                 <!-- <img class="img_buy" src="assets/images/437-1632718440.webp" /> -->
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper_buy" style="height:50px; width: 43%;" id="swip_img"></div>
                </div>
            </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <form action="" id="nursery_form" class="bg-light shadow " method="post">
                    <h4 class="fw-bold text-center text-danger pt-4">Are You Intrested In This Nursery ?</h4>
                        <div class="row">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class=" ml-2">
                                            <div class="row">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="11" name="fname">
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                            <input type="text" class="form-control" id="product_id" value="">
                                        </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline">
                                                        <label for="fname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fname" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline">
                                                        <label for="lname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="phone" class="form-label "><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                        <input type="tel" class="form-control" id="phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="state" class="form-label "><i class="fas fa-location"></i> State</label>
                                                        <select class="form-select py-2 "aria-label=".form-select-lg example" id="state"name="state">
                                                            <option value="" selected disabled></option>
                                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="district" class="form-label "><i class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select py-2 "aria-label=".form-select-lg example" name="district"id="district">
                                                            <option value="" selected disabled></option>
                                                            <option value="Raipur">Raipur</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Durg">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="tehsil" class="form-label">Tehsil</label>
                                                        <select class="form-select py-2 "aria-label=".form-select-lg example" name="tehsil"id="tehsil">
                                                            <option value="" selected disabled></option>
                                                            <option value="Raipur">Raipur</option>
                                                            <option value="Bilaspur">Bilaspur</option>
                                                            <option value="Durg">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Button trigger modal -->
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12 mb-4 mt-4">
                                                <button type="button" class="btn btn-success w-100" id="button_nursery">
                                                    Request
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <div id="thankyouModal">
                        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row px-3  mb-4 text-center">
                                            <h2 class="col-12 text-danger"><strong>ThankYou For
                                                    Contacting Us..!</strong></h2>
                                            <div class="col-12 text-center"><img class="tick w-100" alt="dfd"
                                                    src="assets/images/dribbble_yamm.gif">
                                            </div>
                                            <h6 class="col-12 mt-3"><i>We will Connect You Soon</i>
                                            </h6>
                                            <h6 class="col-12 mt-2"><i>Enjoy Your Day..!</i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
        <div class="my-4">
                    <div class="text-editor-black my-4 " style="background-color:#fff">
                        <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured"><span id="model4"></span> About Nursety</p></h4>
                    </div>
                    <p id="description"></p>
                    
                </div>
            <!-- <h3 class="text-danger assured ps-3">About Nursery</h3> -->
            
            <table class="table w-100 table-hover table table-striped my-4  ">
                <tbody>
                    <tr>
                        <td class="table-data col-lg-6">Address</td>
                        <td class="table-data col-lg-6" id="address"></td>
                    </tr>
                    <tr>
                        <td class="table-data">State</td>
                        <td class="table-data" id="state_1"></td>
                    </tr>
                    <tr>
                        <td class="table-data">District</td>
                        <td class="table-data" id="district_1"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Tehsil</td>
                        <td class="table-data"id="tehsil_1"></td>
                    </tr>
                    <tr>
                        <td class="table-data">Phone Number</td>
                        <td class="table-data"id="number_1"></td>
                    </tr>
                   


                </tbody>
            </table>
        </div>
    </section>
<section class="mt-3">
        <div class="container">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
                <div id="productContainer" class="row">
                  <!--   <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <div class="h-auto success__stry__item d-flex flex-column text-decoration-none shadow ">
                            <div class="thumb">
                                <div>
                                    <a href="#" class="ratio ratio-16x9">
                                        <img src="assets/images/navaneet-farms-nursery-puttur-44.webp"
                                            class="object-fit-cover " alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="power text-center mt-3">
                                    <div class="col-12">
                                        <p class="text-success fw-bold">Nursery Name</p>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <p class="fw-bold pe-3 text-primary">Raipur,Chhattisgarh</p>
                                    </div>
                                </div>
                                <div class="col-12 btn-success">
                                    <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                        Contact Nursery
                                    </button>
                                </div>

                              
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="staticBackdropLabel">Contact
                                                    Nursery</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="model-cont">
                                                    <h4 class="text-center text-danger">Request to Call</h3>
                                                        <div class="row px-3 py-2">
                                                            <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                                                <label for="slr_name"
                                                                    class="form-label fw-bold text-dark"> Seller
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="slr_name">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                <label for="number"
                                                                    class="form-label text-dark fw-bold"> Phone
                                                                    Number</label>
                                                                <input type="text" class="form-control" id="number">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                <label for="number"
                                                                    class="form-label text-dark fw-bold"> State</label>
                                                                <select class="form-select py-2 "
                                                                    aria-label=".form-select-lg example">
                                                                    <option selected>Select State</option>
                                                                    <option value="1">Chhattisgarh</option>
                                                                    <option value="2">Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                <label for="number"
                                                                    class="form-label text-dark fw-bold">
                                                                    District</label>
                                                                <select class="form-select py-2 "
                                                                    aria-label=".form-select-lg example">
                                                                    <option selected>Select District</option>
                                                                    <option value="1">Mungeli</option>
                                                                    <option value="2">Durg</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger">Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                 
                </div>
        </div>
        <div class="col text-center my-3 pb-5">
            <a href="nursery_ui.php" class="btn btn-success btn-lg">View All</a>
        </div>
    </section>

    <?php
    include 'includes/footer.php';
    include 'includes/footertag.php';
    ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
    $(document).ready(function() {
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");

        $("#nursery_form").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 2,
                },

                lname:{
                    required: true,
                    minlength: 2,
                },
                phone: {
                    required: true,
                    digits: true, // Allow only digits
                    indianMobile: true,


                },
                state: "required",
                district: "required",
                tehsil: "required",

            },

          


        });


        $('#button_nursery').on('click', function() {
            $('#nursery_form').valid();
        });

        


    });
    </script>


</html>