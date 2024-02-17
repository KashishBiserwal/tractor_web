<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
      include 'includes/headertag.php';
      include 'includes/header.php';
      $id=$_REQUEST['id'];
      include 'includes/footertag.php';
      
      ?>
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

     <script> var baseUrl = "<?php echo $baseUrl; ?>";</script>
     <script src="<?php $baseUrl; ?>model/farm_subcat_inner.js"></script>

<style>
   .slick-list{
    height: 99%;
   }
.slider-nav{
    height: 134px;
    /* display: flex; */
}


</style>

</head>
<body>
<section class="mt-130 bg-light">
        <div class="container">
        <div class="py-2">
                    <span class="text-white">
                        <a href="index.php" class="text-decoration-none header-link px-1">Home <i
                                class="fa-solid fa-chevron-right px-1"></i></a>

                                <a href="farm_imole_category_customer.php" class="text-decoration-none header-link px-1"> <span class="text-dark" id="title"></span></a>
                    </span>
                </div>
        </div>
    </section>

    <!-- IMAGE SWIPER WITH THREE THUMBNAIL IMAGE -->
    <section>
        <div class="container">
            <div class="row mt-3">
                <h4 id="heading" class="assured bg-light ps-3 py-2"></h4>
                <div class="col-12 col-sm-6 col-lg-6 col-md-6" style="position: relative;">
                    <div>
                    <h1 class="fw-bold text-danger pt-3" id="brand_name"></h1>
                        <div class="slider slider-for">
                          
                        </div>
                        <div class="slider slider-nav">
                          
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mt-5" style="z-index: 9; background: #fff;">
                    <table class="table border bg-light  mt-5">
                        <tbody>
                            <tr>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5> <i class="fa-solid fa-award"></i> Brand</h5>
                                </td>
                                <td class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <h5><a href="" class="text-decoration-none h5 text-danger " id="model_name"></a></h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-font-awesome"></i> Model</h6>
                                </td>
                                <td><p id="model"></p></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> <i class="fa-solid fa-layer-group"></i> Implement Type</h6>
                                </td>
                                <td><p> <span id="subcategory"></span></p> </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa-solid fa-fill"></i> Category</h6>
                                </td>
                                <td>
                                    <p> <span  id="category"></span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row my-3 text-center">
                       
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <button type="button" class="btn btn-success text-center w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                Request Call Back
                            </button>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                            <a type="button" href="loan.php" class="btn btn-success text-decoration-none text-center w-100">
                               Apply Loan
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <section>
        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Request Call Back</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                    </div>
                    <!-- MODAL BODY -->
                    <div class="modal-body bg-light">
                    <form id="engine_oil_form" method="POST" onsubmit="return false">
                <div class="row">
            
             <!--    <input type="hidden" id="brand_name">
                <input type="hidden" id="model_name" > -->
                <input type="hidden" id="enquiry_type_id" value="6" >
                <input type="hidden" id="product_id" value="" >
                
            
         
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-outline">
                      <label for="f_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="firstName" name="firstName">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-outline">
                      <label for="last_name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Your Name" id="lastName" name="lastName">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                      <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                        <option value="" selected disabled=""> </option>  
                        <option value="1">Chhattisgarh</option>
                        <option value="2">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_dist" class="form-label fw-bold  text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                        <option value="" selected disabled=""></option>
                        <option value="1">Raipur</option>
                        <option value="2">Bilaspur</option>
                        <option value="2">Durg</option>
                      </select>
                    </div>                    
                  </div>       
                  <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                    <div class="form-outline">
                      <label for="eo_tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                      <select class="form-select py-2 " aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                        <option value="" selected disabled=""></option>
                        <option value="2">Durg</option>
                      </select>
                    </div>
                  </div>

                </div> 
                <div class="text-center my-3">
                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" data-bs-dismiss="modal">Submit</button>        
                </div>        
              </form>           
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--DESCRIPTION  -->
    <section>
        <div class="container">
            <div class="row ">
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9" >
                        <div class="my-4">
                            <div class="text-editor-black my-4 " style="background-color:#fff">
                                <h4><p class="mt-md mt-4 p-2 mb-3 my-4 assured">Specifications For <span id="imple_name"></span></p></h4>
                            </div>
                        </div>
                        <table class="table w-100 table-hover table table-striped my-4">
                        <thead>
                            <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Specification Name</th>
                                        <th scope="col">About Specification</th>
                                        </tr>
                                    </thead>
                            <tbody id="tableData">
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3" >
                <div class="row">
                    <div>
                        <h1 class="h4  my-4">New Popular Tractor</h1>
                    </div>
                    <div id="productContainerpopular" class="row"></div>
                    <div class="text-center"><button id="load_more" class="btn btn-success">Load More</button></div>
                    <div class="sticky my-3">
                        <div class="popular_used_tractor mb-3">
                            <h4>New Upcoming Tractors</h4>
                        </div>
                        <div class="popular-used-tractor">
                            <div class="row">
                            <div id="productContainerupcoming" class="row"></div>
                            <div class="col-12 text-center ">
                            <button id="load_btn" type="button" class="btn btn-success">
                                <i class="fas fa-undo"></i> Load More
                            </button>
                            </div>
                        </div>
                    </div>
            </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row py-1 mb-3">
                <h2 class="fw-bold text-dark text-start mt-4 assured ps-3">Latest Blog</h3>
                <div id="similarproduct" class="row"></div>


                <div class="col text-center mt-3">
                    <a href="blog.php" class="btn btn-success btn-lg">View All</a>
                </div>

            </div>

        </div>
    </section>
   


    <?php   
        include 'includes/footer.php';
       
    ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  

  <!-- <script>
  // slick slider
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    focusOnSelect: true
  });

  $('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.slider-nav').slick('slickGoTo', slideno - 1);
  });
</script> -->

</body>
</html>