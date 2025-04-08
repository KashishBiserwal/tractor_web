$(document).ready(function() {
    getpopularTractorList();
    getUpcomingTractorList();
    getLatestTractorList();
    getminiTractorList();
    get_harvester();
    get_oldharvester();
    get_All_News();
    get_blog();
});


function getpopularTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                if(arr.includes('Popular')){
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            var productContainer = $("#popular_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        var images = p.image_names;
                        var a = [];
    
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        var newCard =  `<div class="item box_shadow b-t-1">
                                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none fw-bold">
                                                <div class="harvester_img_section">
                                                    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="" alt="img" loading="lazy">
                                                </div>
                                            </a>
                                            <div class="harvester_content_section mt-3 text-center">
                                                <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${p.brand_name} ${p.model}</h6>
                                                <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                                                <button type="button" class="w-100 mt-2" style="background-color: #B90405; color: #fff;">
                                                    <i class="fa-regular fa-handshake"></i> Get on Road Price
                                                </button>
                                            </div>
                                        <div> ` ;
                    productContainer.append(newCard);
                
                    }
                });
                productContainer.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
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
                            nav: true,
                            loop: false
                        }
                    },
                    onInitialized: function() {
                        $(".swiper-slide").css('height', 'auto');
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                if(arr.includes('Upcoming')){
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            var productContainer3 = $("#upcoming_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        var images = p.image_names;
                        var a = [];
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        var newCard3 = 
                       `<div class="item box_shadow b-t-1">
                       <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none fw-bold">
                           <div class="harvester_img_section">
                               <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="" alt="img" loading="lazy">
                           </div>
                       </a>
                       <div class="harvester_content_section mt-3 text-center">
                           <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${p.brand_name} ${p.model}</h6>
                           <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                           <button type="button" class=" w-100 mt-2" style=" background-color: #B90405; color: #fff;">
                               <i class="fa-regular fa-handshake"></i> Get on Road Price
                           </button>
                       </div>
                   <div> ` ;
                      productContainer3.append(newCard3);
                    }
                    });
                    productContainer3.owlCarousel({
                        items: 4,
                        loop: true,
                        margin: 10,
                        nav: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
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
                                nav: true,
                                loop: false
                            }
                        },
                        onInitialized: function() {
                            $(".swiper-slide").css('height', 'auto');
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                if(arr.includes('Mini')){
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            var productContainer0 = $("#mini_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
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
                        <a   class="text-decoration-none" href="detail_tractor.php?product_id=${p.product_id}">
                            <div class="thumb">
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="" alt="img" loading="lazy">
                            </div>
                            <div class="new-tractor-content text-center b-t-1">
                                <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${p.brand_name} ${p.model}</h6>
                                <p  class="text-dark text-decoration-none mt-2  mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                                <button type="button" class="w-100 mt-2" style="background-color: #B90405; color: #fff;">
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                if(arr.includes('Latest')){
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });
            var productContainer2 = $("#Latest_tractor");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        var images = p.image_names;
                        var a = [];
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }
                        var newCard2 =  
                        `<div class="item box_shadow b-t-1">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none fw-bold">
                                <div class="harvester_img_section">
                                    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="" alt="img" loading="lazy">
                                </div>
                            </a>
                            <div class="harvester_content_section mt-3 text-center">
                                <h6 class="fw-bold mt-2 text-decoration-none text-truncate text-dark">${p.brand_name} ${p.model}</h6>
                                <p  class="text-dark text-decoration-none  mt-2 mb-0">From: ₹${p.starting_price}-${p.ending_price} lac*</p>
                                <button type="button" class="w-100 mt-2" style=" background-color: #B90405; color: #fff;">
                                    <i class="fa-regular fa-handshake"></i> Get on Road Price
                                </button>
                            </div>
                        <div> ` ;
                        productContainer2.append(newCard2);
                    }
                });
                productContainer2.owlCarousel({
                    items: 4,
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
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
                            nav: true,
                            loop: false
                        }
                    },
                    onInitialized: function() {
                        $(".swiper-slide").css('height', 'auto');
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_harvester";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
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
                        <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="" loading="lazy">
                        <div href="harvester_inner.php?product_id=${p.id}" class="over-layer"><i class="fa fa-link"></i></div>
                        </div>
                    </a>
                    <div class="harvester_content_section mt-3 text-center">
                        <a href="harvester_inner.php?product_id=${p.id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark text-truncate">${p.brand_name} ${p.model}</h6></a>
                        <div class="row w-100 contant-justify-center">
                            <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.horse_power} Hp</p></div>
                            <div class="col-6 p-0 text-truncate" > <p class="mb-0"  style="font-size: 14px;">${p.crops_type_value}</p></div>
                        </div>
                        <a  href="harvester_inner.php?product_id=${p.id}">
                            <button type="button" class="w-100 mt-3" style=" background-color: #B90405; color: #fff;"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
                        </a>
                    </div>
                <div>
                `;
                productContainer.append(newCard);
            });
            productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, 
                autoplay: true,
                autoplayTimeout: 3000,
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
                        nav: true,
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_old_harvester";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
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
              <a  href="used_harvester_inner.php?id=${p.customer_id}" class="text-decoration-none fw-bold">
                <div class="harvester_img_section">
                  <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" alt="" loading="lazy">
                  <div href="used_harvester_inner.php?id=${p.customer_id}" class="over-layer"><i class="fa fa-link"></i></div>
                </div>
              </a>
              <div class="harvester_content_section mt-3 text-center">
                <a href="used_harvester_inner.php?id=${p.customer_id}" class="text-decoration-none fw-bold text-dark"><h6 class="text-dark">${p.brand_name} ${p.model}</h6></a>
                <div class="row w-100">
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;"><span>Hours Driven: </span>${p.hours_driven}</p></div>
                  <div class="col-6 p-0"> <p class="mb-0" style="font-size: 14px;">${p.crops_type_value}</p></div>
                </div>
                <a  href="used_harvester_inner.php?id=${p.customer_id}">
                    <button type="button" class="w-100 mt-3" style=" background-color: #B90405; color: #fff;"><i class="fa-regular fa-handshake"></i> Get on Road Price</button>
                </a>
              </div>
            </div> `;
                productContainer.append(newCard);
            });
             productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, 
                autoplay: true,
                autoplayTimeout: 3000,
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
                        nav: true,
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

function get_All_News() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/news_details";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        if (data.news_details && data.news_details.length > 0) {
            var productContainer = $("#all_news");
            data.news_details.forEach(function (p) {
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
                    <div class="thumb">
                        <a href="news_content.php?id=${p.id}">
                            <img src="https://shopninja.in/bharatagri/api/public/uploads/news_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
                        </a>
                    </div>
                    <div class="content mb-3 ms-3">
                        <a href="news_content.php?id=${p.id}">
                        <button type="button" class="btn btn-warning mt-3">${p.news_category} </button>
                        </a>  
                        <div class="row mt-2">
                            <p class="fw-bold text-truncate" >${p.news_headline}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>Date/time: </span>${p.date}</p>
                        </div>
                    </div>
                </div> `;
                productContainer.append(newCard);
         });
         productContainer.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
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
                    nav: true,
                    loop: false
                }
            },
            onInitialized: function() {
                $(".swiper-slide").css('height', 'auto');
            }
        });
        }
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}

function get_blog() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/blog_details";
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
        if (data.blog_details && data.blog_details.length > 0) {
            var productContainer = $("#blog");
            data.blog_details.forEach(function (p) {
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
                    <div class="thumb">
                        <a href="blog_customer_inner.php?id=${p.id}">
                            <img src="https://shopninja.in/bharatagri/api/public/uploads/blog_img/${a[0]}" class="engineoil_img  w-100" alt="img" loading="lazy">
                       </a> </a>
                    </div>
                    <div class="content mb-3 ms-3">
                    <a href="blog_customer_inner.php?id=${p.id}">
                        <button type="button" class="btn btn-warning mt-3">${p.blog_category} </button>
                        </a>
                        <div class="row mt-2">
                            <p class="fw-bold text-truncate">${p.heading}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>publisher: </span>${p.publisher}</p>
                        </div>
                        <div class="row">
                            <p class="fw-bold"><span>Date/time: </span>${p.date}</p>
                        </div>
                        
                    </div>
                </div>
            `;
                productContainer.append(newCard);
            });
            productContainer.owlCarousel({
                items:4,
                loop: true,
                margin: 10,
                nav: true, 
                autoplay: true, 
                autoplayTimeout: 3000,
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
                        nav: true,
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
  function get_brand() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand');
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model_1(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  get_brand(); 



