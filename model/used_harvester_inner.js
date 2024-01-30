$(document).ready(function() {
    console.log("ready!");
    $('#submit_enquiry').click(store);
    // getoldTractorList();
    get_old_harvester_byiD();
    getpopularTractorList();
    getupcomimgTractorList();
    
});

function get_old_harvester_byiD() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id'); 
    console.log(productId);
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester_by_id/" + productId;
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var brand_model_name = data.product[0].brand_name + ', ' + data.product[0].model;
            var location = data.product[0].district + ', ' + data.product[0].state;
            var name = data.product[0].first_name + ', ' + data.product[0].last_name;
    
        document.getElementById('brand_model_name').innerText=brand_model_name;
        document.getElementById('location').innerText=location;
        document.getElementById('power_source1').innerText=data.product[0].power_source_value;
        document.getElementById('hour').innerText=data.product[0].hours_driven;
        document.getElementById('year1').innerText=data.product[0].purchase_year;
        // console.log(data.product[0].brand_name);
        document.getElementById('model2').innerText=data.product[0].model;
        document.getElementById('brand').innerText=data.product[0].brand_name;
        document.getElementById('cutting_width').innerText=data.product[0].cutting_width;
        document.getElementById('crop_type').innerText=data.product[0].crops_type_value;
        document.getElementById('power_source').innerText=data.product[0].power_source_value;
        document.getElementById('hours').innerText=data.product[0].hours_driven;
        document.getElementById('year').innerText=data.product[0].purchase_year;
        document.getElementById('price_').innerText=data.product[0].price;
        document.getElementById('first_name').innerText=name;
        document.getElementById('mobile_').innerText=data.product[0].mobile;
        document.getElementById('district_').innerText=data.product[0].district;
        document.getElementById('state_').innerText=data.product[0].state;
        document.getElementById('model3').innerText=brand_model_name;
        document.getElementById('description').innerText=data.product[0].description;
        document.getElementById('id').value = data.product[0].customer_id;
        document.getElementById('product_subject_id').value = data.product[0].product_id;

        
        var product = data.product[0];
    var imageNames = product.image_names.split(',');
    var carouselContainer = $('.mySwiper2_data');
    var carouselContainer2 = $('.mySwiper_data');

    carouselContainer.empty();
    carouselContainer2.empty();

    imageNames.forEach(function (imageName) {
        var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim();
        var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
        var slide2 = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
        carouselContainer.append(slide);
        carouselContainer2.append(slide2);
    });

    // Initialize or update the Swiper carousel
    var gallerySwiper = new Swiper('.gallery-slider', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var thumbsSwiper = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        touchRatio: 0.2,
        slideToClickedSlide: true,
    });

    gallerySwiper.controller.control = thumbsSwiper;
    thumbsSwiper.controller.control = gallerySwiper;
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}





  // get new popular tractor

function getpopularTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            console.log('prachi',data.product.accessory_and_tractor_type[0].tractor_type_name);
            let new_arr=[];
            const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
                const arr=s.tractor_type_name.split(',');
                
                console.log('arr',arr);
                if(arr.includes('Popular')){
                    new_arr.push(s.product_id);
                    // jisme upcoming tha uska product_id ko new arr me push
                    return s.product_id;
                }
            });
            console.log('new_data',new_data);
            console.log('new_arr',new_arr);
            // if(new_data.product_id==)
            var productContainer = $("#productContainerpopular");
            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.forEach(function (p) {
                    if(new_arr.includes(p.product_id)){
                        // new aar me match aa rhi array 
                        var newCard = `
                        <div class="tractor-list mb-3 box-shadow grey-bg d-flex flex-row shadow p-1">
                        <div class="tractor-list-left text-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                            <img src="${p.image_url}" id="image_popular" width="100" height="70" alt="${p.model}">
                            </a>
                        </div>
                        <div class="px-2 tractor-list-right d-flex flex-column justify-cintent-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none"><p class="mb-1">${p.model} </p></a>
                            <div class="tractor-list-info mb-0 boldfont">
                                <div class="row">
                                <div class="col-12 col-lg-5 col-md-5 col-sm-5">
                                    <p class=" bg-light m-1" style=" font-size: 0.9rem;"> <span> ${p.hp_category}</span><span>HP</span></p>
                                </div>
                                <div class="col-12 col-lg-7  col-md-7 col-sm-7">
                                    <p class=" bg-light m-1"style=" font-size: 0.9rem;"> ${p.wheel_drive_value}</p>
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

           
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

 // get new popular tractor
 function getpopularTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr = [];
            const new_data = data.product.accessory_and_tractor_type.filter((s) => {
                const arr = s.tractor_type_name.split(',');
                if (arr.includes('Popular')) {
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });

            var productContainer = $("#productContainerupcoming");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // Display the initial set of 4 cards
                displayPopularTractors(data.product.allProductData.slice(0, 4), new_arr);

                // Show the "Load More" button if there are more tractors
                if (data.product.allProductData.length > 4) {
                    $("#loadMoretract").show();
                }

                // Handle "Load More" button click
                $("#load_more").click(function() {
                    window.location.href = "popular_tractors.php";
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayPopularTractors(tractors, new_arr) {
    var productContainer = $("#productContainerupcoming");

    tractors.forEach(function(p) {
        if (new_arr.includes(p.product_id)) {
            var images = p.image_names;
            var a = [];

            if (images) {
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }

            var newCard = `<div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                            <div class="text-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" width="100" height="100" alt=""
                                        style=" border-radius: 10px;">
                                </a>
                            </div>
                            <div class="px-2 d-flex flex-column justify-content-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none">
                                    <p class="mb-1">${p.model}</p>
                                </a>
                                <p class="trac">
                                    <span class="bg-light"> ${p.hp_category} HP</span>
                                    <span class="bg-light">${p.wheel_drive_value}</span>
                                </p>
                                
                            </div>
                        </div>`;

            // Append the new card to the container
            productContainer.append(newCard);
        }
    });
}






function getupcomimgTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            let new_arr = [];
            const new_data = data.product.accessory_and_tractor_type.filter((s) => {
                const arr = s.tractor_type_name.split(',');
                if (arr.includes('Upcoming')) {
                    new_arr.push(s.product_id);
                    return s.product_id;
                }
            });

            var productContainer = $("#productContainerupcoming");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // Display the initial set of 4 cards
                displayupcomingTractors(data.product.allProductData.slice(0, 4), new_arr);

                // Show the "Load More" button if there are more tractors
                if (data.product.allProductData.length > 4) {
                    $("#load_btn").show();
                }

                $("#load_btn").click(function() {
                    window.location.href = "upcoming_tractors.php";
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayupcomingTractors(tractors, new_arr) {
    var productContainer = $("#productContainerupcoming2");

    tractors.forEach(function(p) {
        if (new_arr.includes(p.product_id)) {
            var images = p.image_names;
            var a = [];

            if (images && typeof images === 'string') {
                // Check if images is not null and is a string before splitting
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }

            var newCard = `<div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                            <div class="text-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" width="100" height="100" alt=""
                                        style=" border-radius: 10px;">
                                </a>
                            </div>
                            <div class="px-2 d-flex flex-column justify-content-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none">
                                    <p class="mb-1">${p.model}</p>
                                </a>
                                <p class="trac">
                                    <span class="bg-light"> ${p.hp_category} HP</span>
                                    <span class="bg-light">${p.wheel_drive_value}</span>
                                </p>
                               
                            </div>
                        </div>`;

            // Append the new card to the container
            productContainer.append(newCard);
        }
    });
}

// enquiry form
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = 3;
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form').val();
    var district = $('#district_form').val();
    var tehsil = $('#tehsil').val();
    var customer_id = $('#id').val();
    var product_subject_id = $('#product_subject_id').val();
  
    // Prepare data to send to the server
    var paraArr = {
      'customer_id':customer_id, 
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,   
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'enquiry_type_id':enquiry_type_id,
      'product_id':product_subject_id,
    };
   
  var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
     
        $("#used_tractor_callbnt_").modal('hide'); 
        var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');    
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
     
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      
        // getOldTractorById();
        console.log("Add successfully");
      
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        // 
      }
    });
  }
