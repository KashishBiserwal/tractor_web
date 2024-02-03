$(document).ready(function() {
    console.log("ready!");
    getbrands();
    getTractorList();
    getusedTractorList();
    getoldimplementList();
});

function getbrands(){
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_all_brands";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");

            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (p) {
                    if(p.id == Id){
                    console.log(p,"pp");
                    var silder_heading = ` <h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                  

                    // Append the new card to the container
                    slider_head.append(silder_heading);
                    }
                  

                    var brand_container = `<div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                    <a href="brands.php?brand_id=${p.id}"><div class="d-block">
                        <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${p.brand_img}">
                        <p>${p.brand_name}</p>
                    </div></a>
                </div>`;
                  

                    brandContainer.append(brand_container);
                });


                // Initialize Owl Carousel after adding cards
              
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var productContainer = $("#productContainer");
             var popular_tractor = $("#popular_tractor");
      
            if (data.product.allProductData && data.product.allProductData.length > 0) {
              
                var brandid = [];
                for (var j = 0; j <  data.product.allProductData.length; j++) {
                    if( data.product.allProductData[j].brand_id == Id){
                    var model =  data.product.allProductData[j].brand_name;
                   
                    }
                }
                brandid.push(model);
                var popular_tractor_heading = ` <h3 class="mb-0 py-4 text-uppercase">Used ${brandid[0]} Tractors</h3>`;
                popular_tractor.append(popular_tractor_heading);
             
                data.product.allProductData.forEach(function (p) {
                    console.log(p.brand_id,"pp");
                    if(p.brand_id == Id){
                        console.log(p.brand_id,"pp");
                    var modalId = `tractor_callbnt_${p.product_id}`;
                    var formId = `tractor-call_${p.product_id}`; 
                    var images = p.image_names;
                    var a = [];

                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                    //  var popular_tractor_heading = ` <h3 class="mb-0 py-4 text-uppercase">Popular ${p.brand_name} Tractors</h3>`;
                    var newCard = `
                    <div class="item  h-100 bg-white">
                    <div class="h-auto success__stry__item box_shadow b-t-1">
                        <div class="thumb">
                            <a href="detail_tractor.php?product_id=${p.product_id}">
                                <div class="p-3">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}" style="height:180px;    width: 100%;">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 " style="">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                <h4 class="text-center mt-2 text-capitalize">${p.brand_name} ${p.model}</h4>
                            </a>
                            <div class="d-flex d-flex mx-auto" style="gap: 25px;">
                                <div class="">
                                    <p class="float-end" style="font-size:14px;"> <i class="fas fa-bolt me-2" style="color: #198754;"></i> ${p.hp_category} HP</p>
                                </div>
                                <div class="">
                                    <p class="float-start" style="font-size:14px;"> <i class="fa fa-cog me-2" aria-hidden="true" style="color: #198754;"></i> ${p.wheel_drive_value}</p>
                                </div>
                            </div>
                            <button type="button" class="add_btn btn-success w-100"  ata-bs-toggle="modal" data-bs-target="#${modalId}">

                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>

                            <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header  modal_head">
                                    <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                        <form  id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> product_id</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id" value="${p.product_id}" name="">
                                            </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                                            </div>
                                               
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                                    <P class="text-danger">*Please make sure mobile no. must valid</p>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                    <select class="form-select py-2 " aria-label=".form-select-lg example" id="state" name="state">
                                                        <option value>Select State</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 " aria-label=".form-select-lg example" id="district" name="district">
                                                    <option value>Select District</option>
                                                    <option value="Raipur">Raipur</option>
                                                    <option value="Bilaspur">Bilaspur</option>
                                                    <option value="Durg">Durg</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                <label for="yr_price" class="form-label text-dark">Tehsil</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Tehsil" id="Tehsil" name="Tehsil">
                                            </div>                          
                                            </div> 
                                        
                            
                                            <div class="modal-footer">
                                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                            <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                            </div>      
                                        </form>                             
                                    </div>
                                </div>
                            </div>
                        </div>

               
                        </div>
                    </div>
                </div>


                
                    `;

                    // Append the new card to the container
                    productContainer.append(newCard);
                   
                }
                });
            

                // Initialize Owl Carousel after adding cards
                productContainer.owlCarousel({
                    items:4,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: false,
                            loop: false
                        }
                    }
                });
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}



function getusedTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'xyz');
            var productContainer2 = $("#productContainer2");
             var used_tractor = $("#used_tractor");
      
            if (data.product && data.product.length > 0) {
              
                 var brandid = [];
                for (var j = 0; j < data.product.length; j++) {
                    if(data.product[j].brand_id == Id){
                    var model = data.product[j].brand_name;
                   
                    }
                }
                brandid.push(model);
                var used_tractor_heading = ` <h3 class="mb-0 py-4 text-uppercase">Used ${brandid[0]} Tractors</h3>`;
                used_tractor.append(used_tractor_heading);
                data.product.forEach(function (p) {
                    if(p.brand_id == Id){
                   
                            
                    var images = p.image_names;
                    var a = [];

                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                  
                 
                   
                  
                   
                    var newCard2 = `
                    <div class="item px-2 py-3 h-100 ">
                        <div class="h-auto success__stry__item box_shadow b-t-1">
                            <div class="thumb">
                                <a href="#">
                                    <div class="p-3 ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover  "  alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 mx-3">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h4 class=" mt-3" style="font-size: 20px;">${p.brand_name} ${p.model}</h4>
                                </a>
                                <p class="mb-1">${p.district}, ${p.state}</p>
        
                                
        
                                <div class="row mt-1 w-100 mx-auto">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 ps-0">
                                        <p class="mb-1"> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                    </div>
                                    
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 pe-0">
                                        <button class="btn btn-success p-1" style=" font-size: 12px;  text-align: right; float: right; ">Great Deal <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <a href="# " class="text-dark flex-grow-1 text-decoration-none">
                                    <p>Price: ₹ ${p.price}*</p>
                                </a>
                               
                            </div>
                        </div>
                    </div>`;

                    // Append the new card to the container
                    productContainer2.append(newCard2);
                  
                }
            
                });
            

              
             
            }

            $('#productContainer2').owlCarousel({
                items:4,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: false,
                            loop: false
                        }
                    }
            })
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getoldimplementList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'xyz');
            var productContainer3 = $("#productContainer3");
             var old_implement = $("#old_implement");
      
            if (data.getOldImplement && data.getOldImplement.length > 0) {
              
                 var brandid = [];
                for (var j = 0; j < data.getOldImplement.length; j++) {
                    if(data.getOldImplement[j].brand_id == Id){
                    var model = data.getOldImplement[j].brand_name;
                   
                    }
                }
                brandid.push(model);
                var old_implement_heading = `<h3 class="py-4 mb-0 text-uppercase">${brandid[0]} Tractor Implements</h3>`;
                old_implement.append(old_implement_heading);
                data.getOldImplement.forEach(function (p) {
                    if(p.brand_id == Id){
                   
                            
                    var images = p.image_names;
                    var a = [];

                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                  
                 
                   
                  
                   
                    var newCard2 = `
                    <div class="item  h-100 bg-white">
                    <div class="h-auto success__stry__item d-flex flex-column box_shadow b-t-1 ">
                        <div class="thumb">
                            <a href="#">
                                <div class="">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img" style="height:200px">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 " style="height:150px">
                            <div class="caption text-center">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h5 class="pt-3"><strong class="series_tractor_strong text-center  fw-bold ">${p.brand_name} ${p.model}</strong></h5>
                                </a>        
                            </div>
                            <div class="power text-center mt-1">Price : ${p.price}</div>
                            <div class="row text-center">
                                <div class="col-12">
                                    <p class="fw-bold pe-2">${p.category_name} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;

                    // Append the new card to the container
                    productContainer3.append(newCard2);
                  
                }
            
                });
            

                // Initialize Owl Carousel after adding cards
              /*   $('#productContainer2').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:true,
                            loop:false
                        }
                    }
                }) */
            }
            $('#productContainer3').owlCarousel({
                items:4,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: false,
                            loop: false
                        }
                    }
            })
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}