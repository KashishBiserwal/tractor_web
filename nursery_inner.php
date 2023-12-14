<!DOCTYPE html>
<html lang="en">

<head> <?php
   include 'includes/headertag.php';
   ?> </head>

<body> <?php
   include 'includes/header.php';
   ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <section class=" mt-5 pt-5">
        <div class="container pt-3">
            <div class="py-1">
                <span class="text-white ">
                    <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                            class="fa-solid fa-chevron-right px-1"></i>
                    </a>
                    <span class="">
                        <span class="text-dark header-link  px-1">HaatBazar <i
                                class="fa-solid fa-chevron-right px-1"></i>
                        </span>
                    </span>
                    <span class="text-dark">Sell</span>
                </span>
            </div>
        </div>
    </section>
    <!-- next section start -->
    <section>
        <div class="container">
            <div class="vegehead pt-3">
                <div class="row">
                    <div class="col-12 col-lg-6 ">
                        <h3 class="fw-bold text-danger pt-3 ">Nursery in District Name</h3>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <h4 class="fw-bold text-center text-danger pt-3">Are You Intrested In This Nursery ?</h4>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <div>
                        <div class="swiper swiper_buy mySwiper2_buy">
                            <div class="swiper-wrapper swiper-wrapper_buy">
                                <div class=" swiper-slide swiper-slide_buy">
                                    <img class="img_buy" src="assets/images/nursury.jpg" />
                                </div>
                                <div class="swiper-slide swiper-slide_buy">
                                    <img class="img_buy "
                                        src="assets/images/360_F_244762082_uooufBapemjGDq3em6RW41iiYvMoifJS.jpg" />
                                </div>
                                <div class="swiper-slide swiper-slide_buy">
                                    <img class="img_buy " src="assets/images/nursry.jpg" />
                                </div>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper_buy"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6">
                    <form action="" id="nursery_form" class="bg-light shadow " method="post">
                        <div class="row">
                            <div class="col-12 justify-content-center">
                                <div class="d-flex flex-md-row px-3  flex-column-reverse">
                                    <div class="col-md-12 col-12 col-lg-12 col-lg-12">
                                        <div class=" ml-2">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline">
                                                        <label for="fname" class="form-label ">First Name</label>
                                                        <input type="text" class="form-control"
                                                          id="fname" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline">
                                                        <label for="lname" class="form-label ">Last Name</label>
                                                        <input type="text" class="form-control"
                                                             id="lname" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="phone" class="form-label ">Phone
                                                            Number</label>
                                                        <input type="password" class="form-control"
                                                            id="phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="state" class="form-label " id="state"
                                                            name="state">State</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example" id="state"
                                                            name="state">
                                                            <option value="" selected disabled></option>
                                                            <option value="1">Chhattisgarh</option>
                                                            <option value="2">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label class="form-label ">District</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example" name="district"
                                                            id="district">
                                                            <option value ="" selected disabled></option>
                                                            <option value="1">Raipur</option>
                                                            <option value="2">Bilaspur</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="yr_tehsil"
                                                            class="form-label">Tehsil</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example" name="district"
                                                            id="district">
                                                            <option value="" selected disabled></option>
                                                            <option value="1">Raipur</option>
                                                            <option value="2">Bilaspur</option>
                                                            <option value="2">Durg</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Button trigger modal -->
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-12 mt-4">
                                                <button type="button" class="btn btn-success w-100"
                                                    data-bs-toggle="modal" id="button_nursery"
                                                    data-bs-target="#staticBackdrop3">
                                                    Request
                                                </button>
                                            </div>
                                            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row px-3  mb-4 text-center">
                                                                <h2 class="col-12 text-danger"><strong>ThankYou For
                                                                        Contacting Us..!</strong></h2>
                                                                <div class="col-12 text-center"><img class="tick w-100"
                                                                        alt="dfd" src="assets/images/dribbble_yamm.gif">
                                                                </div>
                                                                <h6 class="col-12 mt-3"><i>We will Connect You Soon</i>
                                                                </h6>
                                                                <h6 class="col-12 mt-2"><i>Enjoy Your Day..!</i></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row px-3 float-end mt-4">
                                <img class="pic  mr-3 " src="assets/images/vege.png">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        
    </section>

    <section>
        <div class="container">
            <h3 class="text-danger assured ps-3">About Nursery</h3>
            <table class="table w-100 table-hover table table-striped my-4  ">
                <tbody>
                    <tr>
                        <td class="table-data col-lg-6">Address</td>
                        <td class="table-data col-lg-6"> fjjfnvjfkdbv</td>
                    </tr>
                    <tr>
                        <td class="table-data">State</td>
                        <td class="table-data">Chhattisgarh</td>
                    </tr>
                    <tr>
                        <td class="table-data">District:</td>
                        <td class="table-data">Ambikapur</td>
                    </tr>
                    <tr>
                        <td class="table-data">Tehsil</td>
                        <td class="table-data">Ambikapur</td>
                    </tr>
                    <tr>
                        <td class="table-data">Phone Number</td>
                        <td class="table-data">+9183*******</td>
                    </tr>
                    <tr>
                        <td class="table-data">About</td>
                        <td class="table-data">about Nursery </td>
                    </tr>


                </tbody>
            </table>
            <!-- <h3 class="text-danger assured ps-3">Personal Information</h3>
        <table class="table w-75 table-hover table table-striped my-4">
            <tbody>
                <tr>
                <td class="table-data">Name</td>
                <td class="table-data">	Ram Singh</td>
                </tr>
                <tr>
                <td class="table-data">District</td>
                <td class="table-data">Ambikapur</td>
                </tr>
                <tr>
                <td class="table-data">Tehsil</td>
                <td class="table-data">Ambikapur</td>
                </tr>
                <tr>
                <td class="table-data">Pincode</td>
                <td class="table-data">496773</td>
                </tr>
            </tbody>
        </table> -->
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Similar Product</h3>
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
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
                                    <!-- <div class="row ">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"> <i class="fa fa-leaf" aria-hidden="true"></i> plant</p></div>
                                        <a href="#" class="col-12 col-lg-6 col-md-6 col-sm-6 text-decoration-none" style="padding-right: 32px;">
                                             <p id="adduser" type="" class="text-danger fw-bold"> plant</p>
                                        </a>
                                    </div>     -->
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

                                <!-- Modal -->
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
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/default-plant-nurseries-9.avif"
                                            class="object-fit-cover w-100 " alt="img">
                                    </div>
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
                                        <p class="fw-bold pe-3">Surajpur,Chhattisgarh</p>
                                    </div>
                                </div>
                                <div class="col-12 btn-success">
                                    <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop"><i class="fa-solid fa-phone"></i>
                                        Contact Nursery
                                    </button>
                                </div>

                                <!-- Modal -->
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
                                                                    class="form-label fw-bold text-dark"> <i
                                                                        class="fa-regular fa-user"></i> Seller
                                                                    Name</label>
                                                                <input type="text" class="form-control" id="slr_name">
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                                                <label for="number"
                                                                    class="form-label text-dark fw-bold"> <i
                                                                        class="fa fa-phone" aria-hidden="true"></i>
                                                                    Phone Number</label>
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
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item d-flex text-decoration-none flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/seed.jpg" class="object-fit-cover " alt="img">
                                    </div>
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
                                        <p class="fw-bold pe-3">Raipur,Chhattisgarh</p>
                                    </div>
                                </div>
                                <div class="col-12 btn-success">
                                    <button type="button" class="btn btn-success py-2 w-100"><i class="fa-solid fa-phone"></i>
                                        Contact Nursery
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
                        <a href="#" class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                            <div class="thumb">
                                <div>
                                    <div class="ratio ratio-16x9">
                                        <img src="assets/images/seeds-child-plant-nature-macro-nursery.jpg"
                                            class="object-fit-cover " alt="img">
                                    </div>
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
                                        <p class="fw-bold pe-3">Surajpur,Chhattisgarh</p>
                                    </div>
                                </div>
                                <div class="col-12 btn-success">
                                    <button type="button" class="btn btn-success py-2 w-100"><i class="fa-solid fa-phone"></i>
                                        Contact Nursery
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
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
        $("#nursery_form").validate({
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass("text-danger");
                error.insertAfter(element);
            },
            rules: {
                fname: {
                    required: true,
                    // Add other rules as needed
                },
                lname_: {
                    required: true,
                    // Add other rules as needed
                },
                phone: {
                    required: true,
                    // Add other rules as needed
                },
                // Add rules for other form elements
            },
            $('#button_nursery').on('click', function() {
                $('#nursery_form').valid();
                console.log($('#nursery_form').valid());
            });
            submitHandler: function(form) {
                // Handle the form submission here (e.g., AJAX request)
                // This function will be called if the form is valid
                // You can trigger the modal or any other action you need
                $('#staticBackdrop3').modal('show');
                console.log('Form submission');
            }
        });
    });
    </script>


</html>