$(document).ready(function() {
    console.log("ready!");
  
    getpopularTractorList();
    getUpcomingTractorList();
    getLatestTractorList();
    getminiTractorList();
    get_harvester();
    get_oldharvester();
});

function getsearchdata() {
    var url = "http://127.0.0.1:8000/api/customer/get_new_tractor_by_price_brand_hp";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
          console.log(data,"getdata")
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function getpopularTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                if(arr.includes('Popular')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            // if(new_data.product_id==)
            var productContainer = $("#popular_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var images = p.image_names;
                        var a = [];
    
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        
                        var newCard = ` <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
                        <a class="text-decoration-none " href="detail_tractor.php?${p.product_id}">
                        <div class="thumb">
                               <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img" >
                         </div>
                        <div class="new-tractor-content text-center b-t-1">
                            <h5 class="fw-bold mt-2 text-decoration-none text-dark">${p.brand_name} ${p.model}</h5>
                         
                        
                            <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                       
                            <button type="button" class="add_btn btn-success w-100 mt-2">

                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                         </div>
                      </a>
                       </div>`;
                    productContainer.append(newCard);
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function getUpcomingTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                if(arr.includes('Upcoming')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            // if(new_data.product_id==)
            var productContainer3 = $("#upcoming_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var images = p.image_names;
                        var a = [];
    
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        
                        var newCard3 = ` <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
                        <a   class="text-decoration-none " href="detail_tractor.php?${p.product_id}">
                        <div class="thumb">
                               <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img" >
                         </div>
                        <div class="new-tractor-content text-center b-t-1">
                            <h5 class="fw-bold mt-2 text-decoration-none text-dark">${p.brand_name} ${p.model}</h5>
                         
                        
                            <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                       
                            <button type="button" class="add_btn btn-success w-100 mt-2">

                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                         </div>
                      </a>
                       </div>`;
                      productContainer3.append(newCard3);
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function getminiTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                if(arr.includes('Mini')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            // if(new_data.product_id==)
            var productContainer0 = $("#mini_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var images = p.image_names;
                        var a = [];
    
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        
                        var newCard3 = ` <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
                        <a   class="text-decoration-none " href="detail_tractor.php?${p.product_id}">
                        <div class="thumb">
                               <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img" >
                         </div>
                        <div class="new-tractor-content text-center b-t-1">
                            <h5 class="fw-bold mt-2 text-decoration-none text-dark">${p.brand_name} ${p.model}</h5>
                         
                        
                            <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                       
                            <button type="button" class="add_btn btn-success w-100 mt-2">

                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                         </div>
                      </a>
                       </div>`;
                      productContainer0.append(newCard3);
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


function getLatestTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                if(arr.includes('Latest')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            // if(new_data.product_id==)
            var productContainer2 = $("#Latest_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var images = p.image_names;
                        var a = [];
    
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        
                        var newCard2 = `  <div class="swiper-slide success__stry__item  box_shadow  b-t-1 h-100">
                                                <a  class="text-decoration-none " href="detail_tractor.php?${p.product_id}">
                                                <div class="thumb">
                                                       <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="" alt="img" >
                                                 </div>
                                                <div class="new-tractor-content text-center b-t-1">
                                                    <h5 class="fw-bold mt-2 text-decoration-none text-dark">${p.brand_name} ${p.model}</h5>
                                                 
                                                
                                                    <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                                               
                                                    <button type="button" class="add_btn btn-success w-100 mt-2">

                                                    <i class="fa-regular fa-handshake"></i> Get on Road Price
                                                    </button>
                                                 </div>
                                              </a>
                                               </div>`;
                      productContainer2.append(newCard2);
                
                    }
                    });

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}



function get_harvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_harvester";
    

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        console.log(data, "harvster data")

        if (data.product && data.product.length > 0) {
           
            var productContainer = $("#new_harvester");
            data.product.forEach(function (p) {
                var images = p.image_names;
                var a = [];
        
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }
                var newCard = `
                <div class="item box_shadow b-t-1">
              <a  href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold">
                <div class="harvester_img_section">
                  <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" alt="">
                  <div href="harvester_inner.php?product_id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold text-dark"><h5 class="text-dark">${p.brand_name} ${p.model}</h5></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.horse_power} Hp</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
              </div>
               
          
            </div>
                `;
        
                // Append the new card to the container
                productContainer.append(newCard);

                
                

              
            });

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
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}



function get_oldharvester() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
    

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        console.log(data, "harvster data")

        if (data.product && data.product.length > 0) {
           
            var productContainer = $("#old_harvester");
            data.product.forEach(function (p) {
                var images = p.image_names;
                var a = [];
        
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }
                var newCard = `
                <div class="item box_shadow b-t-1">
              <a  href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold">
                <div class="harvester_img_section">
                  <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" alt="">
                  <div href="used_harvester_inner.php?id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="used_harvester_inner.php?id=${p.id}" class="text-decoration-none fw-bold text-dark"><h5 class="text-dark">${p.brand_name} ${p.model}</h5></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.horse_power} Hp</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <button type="button" class="add_btn btn-success w-100 mt-3"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
              </div>
               
          
            </div>
                `;
        
                // Append the new card to the container
                productContainer.append(newCard);

                
                

              
            });

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
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}

