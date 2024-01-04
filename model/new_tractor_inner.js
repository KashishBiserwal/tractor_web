$(document).ready(function() {
    console.log("ready!");

    getProductById();
    get_allbrand();
    getpopularTractorList();
});

function getProductById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_id/" + productId;
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
    
        document.getElementById('model_name').innerText=data.product.allProductData[0].model;
        // document.getElementById('image_id').innerText=data.product.allProductData[0].image_name;
        document.getElementById('brand_name').innerText=data.product.allProductData[0].brand_name;
        document.getElementById('total_cyclinder_value').innerText=data.product.allProductData[0].total_cyclinder_value;
        document.getElementById('total_cyclinder_value2').innerText=data.product.allProductData[0].total_cyclinder_value;
        document.getElementById('hp_category').innerText=data.product.allProductData[0].hp_category;
        document.getElementById('hp_category_id').innerText=data.product.allProductData[0].hp_category;
        document.getElementById('horse_power').innerText=data.product.allProductData[0].horse_power;
        document.getElementById('gear_box_forward').innerText=data.product.allProductData[0].gear_box_forward;
        document.getElementById('gear_box_reverse').innerText=data.product.allProductData[0].gear_box_reverse;
        document.getElementById('engine_rated_rpm').innerText=data.product.allProductData[0].engine_rated_rpm;
        document.getElementById('brake_value').innerText=data.product.allProductData[0].brake_value;
        document.getElementById('warranty').innerText=data.product.allProductData[0].warranty;
        document.getElementById('description').innerText=data.product.allProductData[0].description;
        document.getElementById('steering_column_value').innerText=data.product.allProductData[0].steering_column_value;
        document.getElementById('engine_capacity_cc').innerText=data.product.allProductData[0].engine_capacity_cc;
        document.getElementById('cooling_value').innerText=data.product.allProductData[0].cooling_value;
        document.getElementById('air_filter').innerText=data.product.allProductData[0].air_filter;
        document.getElementById('horse_power_2').innerText=data.product.allProductData[0].horse_power;
        document.getElementById('fuel_value').innerText=data.product.allProductData[0].fuel_value;
        document.getElementById('torque').innerText=data.product.allProductData[0].torque;
        document.getElementById('transmission_type_value').innerText=data.product.allProductData[0].transmission_type_value;
        document.getElementById('transmission_clutch_value').innerText=data.product.allProductData[0].transmission_clutch_value;
        document.getElementById('transmission_clutch_value2').innerText=data.product.allProductData[0].transmission_clutch_value;
        document.getElementById('gear_box_forward_2').innerText=data.product.allProductData[0].gear_box_forward;
        document.getElementById('gear_box_reverse_2').innerText=data.product.allProductData[0].gear_box_reverse;
        document.getElementById('brake_value2').innerText=data.product.allProductData[0].brake_value;
        document.getElementById('steering_details_value').innerText=data.product.allProductData[0].steering_details_value;
        document.getElementById('steering_column_value2').innerText=data.product.allProductData[0].steering_column_value;
        document.getElementById('total_weight').innerText=data.product.allProductData[0].total_weight;
        document.getElementById('wheel_base').innerText=data.product.allProductData[0].wheel_base;
        document.getElementById('lifting_capacity').innerText=data.product.allProductData[0].lifting_capacity;
        document.getElementById('liftingC').innerText =data.product.allProductData[0].lifting_capacity;
        document.getElementById('engine_rated_rpm2').innerText=data.product.allProductData[0].engine_rated_rpm;
        document.getElementById('linkage_point_value').innerText=data.product.allProductData[0].linkage_point_value;
        document.getElementById('wheel_drive_value').innerText=data.product.allProductData[0].wheel_drive_value;
        document.getElementById('rear_tyre').innerText=data.product.allProductData[0].rear_tyre;
        document.getElementById('front_tyre').innerText=data.product.allProductData[0].front_tyre;
        document.getElementById('accessory_id').innerText=data.product.accessory_and_tractor_type[0].accessory;
        document.getElementById('status_value').innerText=data.product.allProductData[0].status_value;
        document.getElementById('warranty_2').innerText=data.product.allProductData[0].warranty; 
        document.getElementById('transmission_forward').innerText=data.product.allProductData[0].transmission_forward;
        document.getElementById('power_take_off_type').innerText=data.product.allProductData[0].power_take_off_type;
        document.getElementById('power_take_off_type_rpm').innerText=data.product.allProductData[0].power_take_off_rpm;
        document.getElementById('transmission_reverse').innerText=data.product.allProductData[0].transmission_reverse;
        document.getElementById('wheel_drive').innerText=data.product.allProductData[0].wheel_drive_value;

            var product = data.product.allProductData[0];

            // Split the image names into an array
            var imageNames = product.image_names.split(',');

            var carouselContainer = $('.swiper-wrapper_buy');

            carouselContainer.empty();

            // Iterate through the image names and create carousel slides
            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
            });

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


function get_allbrand() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_brands";
    var initialDisplayCount = 6;

    // Keep track of the total brands and the currently displayed brands
    var totalBrands = 0;
    var displayedBrands = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#related_brand");

            if (data.brands && data.brands.length > 0) {
                totalBrands = data.brands.length;

                // Display the initial set of brands
                displayBrands(data.brands.slice(0, initialDisplayCount));
                displayedBrands = initialDisplayCount;

                // Hide the button if all brands are already displayed
                if (displayedBrands === totalBrands) {
                    $("#loadMoreButton").hide();
                } else {
                    $("#loadMoreButton").show();
                }

                $("#loadMoreButton").click(function() {
                    var remainingBrands = totalBrands - displayedBrands;
                    var nextDisplayCount = Math.min(remainingBrands, 6);

                    // Display the next set of brands
                    displayBrands(data.brands.slice(displayedBrands, displayedBrands + nextDisplayCount));

                    // Update the displayed brands count
                    displayedBrands += nextDisplayCount;

                    // Hide the button if all brands are displayed
                    if (displayedBrands === totalBrands) {
                        $("#loadMoreButton").hide();
                    }
                });
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayBrands(brands) {
    var productContainer = $("#related_brand");

    brands.forEach(function (b) {
        var newCard = `
            <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                <div class="brand-main box-shadow mt-2 text-center shadow">
                    <a class="weblink text-decoration-none text-dark" href="#" title="Old Tractors">
                        <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/brand_img/${b.brand_img}"
                            data-src="h" alt="Brand Logo">
                        <p class="mb-0 oneline">${b.brand_name}</p>
                    </a>
                </div>
            </div>
        `;

        // Append the new card to the container
        productContainer.append(newCard);
    });
}



// function getpopularTractorList() {
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";
//     console.log(url);

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             console.log(data, 'abc');
//             console.log('prachi',data.product.accessory_and_tractor_type[0].tractor_type_name);
//             let new_arr=[];
//             const new_data=data.product.accessory_and_tractor_type.filter((s)=>{ 
//                 const arr=s.tractor_type_name.split(',');
                
//                 console.log('arr',arr);
//                 if(arr.includes('Popular')){
//                     new_arr.push(s.product_id);
//                     // jisme upcoming tha uska product_id ko new arr me push
//                     return s.product_id;
//                 }
//             });
//             console.log('new_data',new_data);
//             console.log('new_arr',new_arr);
//             // if(new_data.product_id==)
//             var productContainer = $("#productContainerpopular");
//             if (data.product.allProductData && data.product.allProductData.length > 0) {
//                 data.product.allProductData.forEach(function (p) {
//                     if(new_arr.includes(p.product_id)){
//                         var images = p.image_names;
//                         var a = [];
                      
//                         if (images) {
//                           if (images.indexOf(',') > -1) {
//                             a = images.split(',');
//                           } else {
//                             a = [images];
//                           }
//                         }
//                         // new aar me match aa rhi array 
//                         var newCard = `<div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
//                                     <div class="text-center">
//                                         <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
//                                             <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" width="100" height="100" alt=""
//                                                 style=" border-radius: 10px;">
//                                         </a>
//                                     </div>
//                                     <div class="px-2 d-flex flex-column justify-cintent-center">
//                                         <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none">
//                                             <p class="mb-1">${p.model}</p>
//                                         </a>
//                                         <p class="trac">
//                                             <span class="bg-light"> ${p.hp_category} HP</span>
//                                             <span class="bg-light">${p.wheel_drive_value}</span>
//                                         </p>
//                                         <div class="">
//                                             <a href="#"><img
//                                                     src="assets/images/index_trac_files/park-solid_phone-call.svg"
//                                                     width="15" height="15" alt="phone-call-icon">Call
//                                                 Now</span></a>
//                                         </div>
//                                     </div>
//                                 </div>
//                     `;

//                     // Append the new card to the container
//                     productContainer.append(newCard);
                
//                     }
//                     });

           
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

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
                // Display the initial set of 6 cards
                displayPopularTractors(data.product.allProductData.slice(0, 6), new_arr);

                // Show the "Load More" button if there are more tractors
                if (data.product.allProductData.length > 6) {
                    $("#loadMoretract").show();
                }

                // Handle "Load More" button click
                $("#loadMoretract").click(function() {
                    // Redirect to popular.php
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
                                <div class="">
                                    <a href="#"><img
                                            src="assets/images/index_trac_files/park-solid_phone-call.svg"
                                            width="15" height="15" alt="phone-call-icon">Call
                                        Now</span></a>
                                </div>
                            </div>
                        </div>`;

            // Append the new card to the container
            productContainer.append(newCard);
        }
    });
}
