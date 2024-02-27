$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
    getusedfarmimplement();
    getOldFarmImplementId();
    getpopularTractorList();
    getupcomimgTractorList();
});

function getOldFarmImplementId() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var customer_id = urlParams.get('id');
    console.log(customer_id,'sdfghjksdfghjk');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_implementsById/' + customer_id;
    
    $.ajax({    
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');

            // Concatenate district and state
            var location = data.getOldImplement[0].district + ', ' + data.getOldImplement[0].state;

            // Update HTML elements with data
            document.getElementById('model_name').innerText = data.getOldImplement[0].model;
            document.getElementById('original_price').innerText = data.getOldImplement[0].price;
            document.getElementById('hours_driven').innerText = data.getOldImplement[0].hours_driven;
            document.getElementById('purchase_year').innerText = data.getOldImplement[0].purchase_year;
            document.getElementById('location_1').innerText = location;
            document.getElementById('model_name2').innerText = data.getOldImplement[0].model;
            document.getElementById('brand_name').innerText = data.getOldImplement[0].brand_name;
            document.getElementById('model_name_3').innerText = data.getOldImplement[0].model;
            document.getElementById('category_1').innerText = data.getOldImplement[0].category_name;
            document.getElementById('price_1').innerText = data.getOldImplement[0].price;
            document.getElementById('model_name4').innerText=data.getOldImplement[0].model;
            document.getElementById('name').innerText = data.getOldImplement[0].first_name;
            document.getElementById('mobile').innerText = data.getOldImplement[0].mobile;
            document.getElementById('district_1').innerText = data.getOldImplement[0].district_name;
            document.getElementById('state_1').innerText = data.getOldImplement[0].state_name;
            document.getElementById('description').innerText = data.getOldImplement[0].description;
            document.getElementById('model4').innerText = data.getOldImplement[0].model;
            document.getElementById('product_id').value = data.getOldImplement[0].product_id;

            // Split the image names into an array
            var imageNames = data.getOldImplement[0].image_names.split(',');

            // Select the carousel container
            var carouselContainer = $('.swiper-wrapper_buy');

            // Clear existing slides
            carouselContainer.empty();

            // Iterate through the image names and create carousel slides
            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
            });

            // Initialize or update the Swiper carousel
            var mySwiper = new Swiper('.swiper_buy', {
                // Your Swiper configuration options
            });

            console.log(data, 'abc');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
// store data throught form

function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = $('#product_id').val();
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form_1').val();
    var district = $('#district_form_1').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
   
    console.log('jfhfhw',product_id);
  
    // Prepare data to send to the server
    var paraArr = {
      'product_id':product_id,
      'enquiry_type_id':enquiry_type_id,
      'first_name': first_name,
      'last_name':last_name,
      'mobile':mobile,
      'state':state,
      'district':district,
      'tehsil':tehsil,
      'price':price,
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

            var productContainer = $("#productContainerpopular");

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
    var productContainer = $("#productContainerpopular");

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


 // get new popular tractor

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
    var productContainer = $("#productContainerupcoming");

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

function getusedfarmimplement() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            // Clear the existing content in the container
            productContainer.empty();

            if (data.getOldImplement && data.getOldImplement.length > 0) {
                var allCards = data.getOldImplement; 

                allCards.sort(function(a, b) {
                    return b.customer_id - a.customer_id;
                });

                // Display all cards
                allCards.forEach(function (p) {
                    appendCard(productContainer, p);
                });

                // Initialize Owl Carousel after appending the cards
                initializeOwlCarousel();

                // Show the "Load More" button
                $("#loadMoreBtn").show();
            } else {
                // Hide the "Load More" button if there are no cards
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

        // Function to append a card to the container
        function appendCard(container, p) {
            var images = p.image_names;
            var a = [];

            if (images) {
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }
            const brandmodel = p.brand_name + '  ' + p.model;
            const location = p.district_name + '  ' + p.stateused_farm_imple;

            var newCard = `
            <div class="col-12 col-lg-12 col-md-12 col-sm-4 mt-3 ">
                <div class="h-auto success__stry__item d-flex flex-column shadow ">
                    <div class="thumb">
                        <a href="used_farm_inner.php?id=${p.id}">
                            <div class="ratio ratio-16x9">
                                <img src='http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}' class="object-fit-cover " alt="${p.description}">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="used_farm_inner.php?id="${p.id}" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${brandmodel}</strong></p>
                            </a>      
                        </div>
                        <div class="power text-center mt-2">
                            <div class="row ">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2"><span>Price:- </span>${p.price}</p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                     <p id="adduser" type="" class="btn-success">
                                     <i class="fa-solid fa-clock"></i> ${p.hours_driven}</p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" id="adduser"class="btn-state state btn-success text-decoration-none px-2 w-100">${location}</a>
                    </div>
                </div>
            </div>`;
            // Append the new card to the container
            container.append(newCard);
        }

        function initializeOwlCarousel() {
            $('#productContainer').owlCarousel({
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
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            });
        }
