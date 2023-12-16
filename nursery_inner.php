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
                        <h4 class="fw-bold text-danger pt-4 ">Nursery in District Name</h4>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <h4 class="fw-bold text-center text-danger pt-4">Are You Intrested In This Nursery ?</h4>
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
                            <div class="swiper-button-prev">

                            </div>
                            <div class="swiper-button-next">

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
                                                        <label for="fname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" id="fname" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline">
                                                        <label for="lname" class="form-label "><i
                                                                class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" id="lname" name="lname">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="phone" class="form-label "><i class="fa fa-phone"
                                                                aria-hidden="true"></i> Phone
                                                            Number</label>
                                                        <input type="tel" class="form-control" id="phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="state" class="form-label "><i
                                                                class="fas fa-location"></i> State</label>
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
                                                        <label for="district" class="form-label "><i
                                                                class="fa-solid fa-location-dot"></i> District</label>
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
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline ">
                                                        <label for="tehsil" class="form-label">Tehsil</label>
                                                        <select class="form-select py-2 "
                                                            aria-label=".form-select-lg example" name="tehsil"
                                                            id="tehsil">
                                                            <option value="" selected disabled></option>
                                                            <option value="1">Raipur</option>
                                                            <option value="2">Bilaspur</option>
                                                            <option value="2">Durg</option>
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
                    <div id="thankyouModal">
                        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
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
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <h3 class="text-danger assured ps-3">About Nursery</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi nesciunt provident aliquid accusamus est reprehenderit repellat inventore quidem officia, porro, non similique rem ipsum quam a, quia unde? Ea laborum tenetur aut dicta veniam, perspiciatis esse natus molestias? Facere commodi distinctio temporibus quia excepturi asperiores aperiam, rem vitae laudantium nostrum porro ratione corrupti reprehenderit ut totam aliquid ipsa provident eveniet ab debitis esse quae deserunt quam nobis. Ullam officiis minus cum vero velit nulla voluptates amet provident praesentium asperiores nam, voluptate molestiae atque sunt accusamus cumque itaque eius commodi consequuntur quidem voluptatem ducimus error libero! Excepturi, blanditiis quisquam eum necessitatibus laudantium eos sequi voluptates cumque! Ab porro cumque repellendus ratione, id dignissimos reprehenderit harum. Harum maiores quia deserunt dicta obcaecati! Ab, architecto voluptatum, neque aliquid doloremque fugit fuga voluptate praesentium quidem, quae vel consectetur labore molestiae error nulla ad minus adipisci in atque eos minima sequi cupiditate itaque. Totam consectetur excepturi laborum ab exercitationem. Dolorum error quo blanditiis quos praesentium, ex quia quasi, minus voluptate quis odit laborum dignissimos vel laboriosam nesciunt accusantium corporis? Ab quos autem optio facilis tempore rem? Odio consequuntur modi numquam odit neque recusandae animi, alias ipsum at unde facilis dolor sunt, quia necessitatibus dolorum.</p>
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
                   


                </tbody>
            </table>
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
                                    <button type="button" class="btn btn-success py-2 w-100"><i
                                            class="fa-solid fa-phone"></i>
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
                                    <button type="button" class="btn btn-success py-2 w-100"><i
                                            class="fa-solid fa-phone"></i>
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
        $.validator.addMethod("indianMobile", function(value, element) {
            return this.optional(element) || /^[789]\d{9}$/.test(value);
        }, "Please enter a valid Indian mobile number.");

        $("#nursery_form").validate({
            rules: {
                fname: 'required',

                lname: 'required',
                phone: {
                    required: true,
                    digits: true, // Allow only digits
                    indianMobile: true,


                },
                state: "required",
                district: "required",

            },

          


        });


        $('#button_nursery').on('click', function() {
            $('#nursery_form').valid();
        });

        


    });
    </script>


</html>