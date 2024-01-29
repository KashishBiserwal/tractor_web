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

            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (p) {
                    if(p.id == Id){
                    console.log(p,"pp");
                    var silder_heading = ` <h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                  

                    // Append the new card to the container
                    slider_head.append(silder_heading);
                    }
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
              

             
                data.product.allProductData.forEach(function (p) {
                    console.log(p.brand_id,"pp");
                    if(p.brand_id == Id){
                        console.log(p.brand_id,"pp");

                    var images = p.image_names;
                    var a = [];

                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                     var popular_tractor_heading = ` <h1 class=" mt-5">Popular ${p.brand_name} Tractors</h1>`;
                    var newCard = `
                    <div class="item px-2 py-3 h-100 ">
                    <div class="h-auto success__stry__item shadow">
                        <div class="thumb">
                            <a href="detail_tractor.php?product_id=${p.product_id}">
                                <div class="ratio ratio-16x9">
                                    <img src="http://tractor-api.divyaltech.com/customer/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                <h4 class="fw-bold mt-3 mx-3">${p.model}</h4>
                            </a>
                            <div class="row mt-1 ps-1">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="ps-3"> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                    <p class="pe-5 me-4"> <i class="fa fa-cog" aria-hidden="true"></i> ${p.engine_capacity_cc} CC </p>
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
                    `;

                    // Append the new card to the container
                    productContainer.append(newCard);
                    popular_tractor.append(popular_tractor_heading);
                }
                });
            

                // Initialize Owl Carousel after adding cards
                productContainer.owlCarousel({
                    items:3,
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 3,
                            nav: true,
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
                var used_tractor_heading = ` <h3 class="mt-3 fw-bold">Used ${brandid[0]} Tractors</h3>`;
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
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-2 py-3 ">
                        <div class="h-auto success__stry__item shadow">
                            <div class="thumb">
                                <a href="#">
                                    <div class="ratio ratio-16x9">
                                        <img src="http://tractor-api.divyaltech.com/customer/uploads/product_img/${a[0]}" class="object-fit-cover  "  alt="img">
                                    </div>
                                </a>
                            </div>
                            <div class="content d-flex flex-column flex-grow-1 ms-3">
                                <a href="#" class="text-decoration-none text-dark ps-3">
                                    <h4 class="fw-bold mt-3">${p.brand_name} ${p.model}</h3>
                                </a>
        
                                <a href="# " class="text-dark flex-grow-1 text-decoration-none ps-3">
                                    <p>Price: ₹ ${p.price}*</p>
                                </a>
        
                                <div class="row mt-1 ps-3">
                                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                                        <p class=""> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                    </div>
                                    <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                                        <p class="ps-1">${p.model} Model</p>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-5 col-sm-5 pe-1">
                                        <button class="btn btn-success p-1">Great Deal <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <a href="#" class="text-decoration-none text-dark mb-4 ps-3">
                                    <span>${p.district} ${p.state} </span>
                                    <span class="icon">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>`;

                    // Append the new card to the container
                    productContainer2.append(newCard2);
                  
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
                var old_implement_heading = `<h3 class="my-4 pt-2 fw-bold">${brandid[0]} Tractor Implements</h3>`;
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
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="#">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/thresher1.webp" class="object-fit-cover " alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="caption text-center">
                                <a href="#" class="text-decoration-none text-dark">
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">Thresher</strong></p>
                                </a>        
                            </div>
                            <div class="power text-center mt-1">Power : 35-55 hp</div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="fw-bold ps-2">By Mahindra </p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold pe-2">Post Harvest </p>
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
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}