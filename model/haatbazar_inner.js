$(document).ready(function() {
    console.log("ready!");

    getProductById();
    // get_allbrand();
    getpopularTractorList();
    $('#button_nursery').click(add_enquiry);
});


function add_enquiry(event) {
    event.preventDefault();
    var first_name = $('#fname').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var last_name = $('#fname').val();
    var state = $('#state').val();
    var mobile = $('#phone').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();price
    var price = $('#price').val();

    // Prepare data to send to the server
    var paraArr = {
      'first_name': first_name,
      'enquiry_type_id':enquiry_type_id,
      'last_name': last_name,
      'state': state,
      'mobile': mobile,
      'district': district,
      'tehsil': tehsil,
      'price': price
    };
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiey/" + productId;
    console.log(url);
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      // headers: headers,
      success: function (result) {
        console.log(result, "result");
        get();
        console.log("Add successfully");
       // alert('successfully inserted..!')
       $("#staticBackdrop").modal("hide");
       var msg = "User Inserted successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Error');
        $("#errorStatusLoading").find('.modal-body').html(msg);
      }
    });
  }


// function getProductById() {
//     console.log(window.location)
//     var urlParams = new URLSearchParams(window.location.search);
//     var productId = urlParams.get('product_id');
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_haat_bazar/" + productId;
//     // console.log(url);
//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//         console.log(data, 'abc');
//         document.getElementById('model_name').innerText = data.product.allProductData[0].brand_name + " " + data.product.allProductData[0].model;
//         document.getElementsByClassName('brand_model')[0].innerText = data.product.allProductData[0].brand_name + " " + data.product.allProductData[0].model;

//         var brandModelElements = document.getElementsByClassName('brand_model');
//         var brandName = data.product.allProductData[0].brand_name;
//         var model = data.product.allProductData[0].model;

//             for (var i = 0; i < brandModelElements.length; i++) {
//             brandModelElements[i].innerText = brandName + " " + model;
//             }

//         document.getElementById('brand_name').innerText=data.product.allProductData[0].brand_name;
//         document.getElementById('total_cyclinder_value').innerText=data.product.allProductData[0].total_cyclinder_value;
//         document.getElementById('total_cyclinder_value2').innerText=data.product.allProductData[0].total_cyclinder_value;
//         document.getElementById('hp_category').innerText=data.product.allProductData[0].hp_category;
//         document.getElementById('hp_category_id').innerText=data.product.allProductData[0].hp_category;
//         document.getElementById('horse_power').innerText=data.product.allProductData[0].horse_power;
//         document.getElementById('gear_box_forward').innerText=data.product.allProductData[0].gear_box_forward;
//         document.getElementById('gear_box_reverse').innerText=data.product.allProductData[0].gear_box_reverse;
//         document.getElementById('engine_rated_rpm').innerText=data.product.allProductData[0].engine_rated_rpm;
//         document.getElementById('brake_value').innerText=data.product.allProductData[0].brake_value;
//         document.getElementById('warranty').innerText=data.product.allProductData[0].warranty;
//         document.getElementById('description').innerText=data.product.allProductData[0].description;
//         document.getElementById('steering_column_value').innerText=data.product.allProductData[0].steering_column_value;
//         document.getElementById('engine_capacity_cc').innerText=data.product.allProductData[0].engine_capacity_cc;

//             var product = data.product.allProductData[0];

//             var imageNames = product.image_names.split(',');

//             var carouselContainer = $('.swiper-wrapper_buy');

//             carouselContainer.empty();

//             imageNames.forEach(function(imageName) {
//                 var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
//                 var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
//                 carouselContainer.append(slide);
//             });

//             var mySwiper = new Swiper('.swiper_buy', {
//             });
//             console.log(data, 'abc');
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }


// function get_allbrand() {
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_brands";
//     var initialDisplayCount = 6;

//     // Keep track of the total brands and the currently displayed brands
//     var totalBrands = 0;
//     var displayedBrands = 0;

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             var productContainer = $("#related_brand");

//             if (data.brands && data.brands.length > 0) {
//                 totalBrands = data.brands.length;

//                 // Display the initial set of brands
//                 displayBrands(data.brands.slice(0, initialDisplayCount));
//                 displayedBrands = initialDisplayCount;

//                 // Hide the button if all brands are already displayed
//                 if (displayedBrands === totalBrands) {
//                     $("#loadMoreButton").hide();
//                 } else {
//                     $("#loadMoreButton").show();
//                 }

//                 $("#loadMoreButton").click(function() {
//                     var remainingBrands = totalBrands - displayedBrands;
//                     var nextDisplayCount = Math.min(remainingBrands, 6);

//                     // Display the next set of brands
//                     displayBrands(data.brands.slice(displayedBrands, displayedBrands + nextDisplayCount));

//                     // Update the displayed brands count
//                     displayedBrands += nextDisplayCount;

//                     // Hide the button if all brands are displayed
//                     if (displayedBrands === totalBrands) {
//                         $("#loadMoreButton").hide();
//                     }
//                 });
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function displayBrands(brands) {
//     var productContainer = $("#related_brand");

//     brands.forEach(function (b) {
//         var newCard = `
//             <div class="col-6 col-lg-6 col-md-6 col-sm-6">
//                 <div class="brand-main box-shadow mt-2 text-center shadow">
//                     <a class="weblink text-decoration-none text-dark" href="#" title="Old Tractors">
//                         <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/brand_img/${b.brand_img}"
//                             data-src="h" alt="Brand Logo">
//                         <p class="mb-0 oneline">${b.brand_name}</p>
//                     </a>
//                 </div>
//             </div>
//         `;

//         // Append the new card to the container
//         productContainer.append(newCard);
//     });
// }


// function getpopularTractorList() {
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             let new_arr = [];
//             const new_data = data.product.accessory_and_tractor_type.filter((s) => {
//                 const arr = s.tractor_type_name.split(',');
//                 if (arr.includes('Popular')) {
//                     new_arr.push(s.product_id);
//                     return s.product_id;
//                 }
//             });

//             var productContainer = $("#productContainerpopular");

//             if (data.product.allProductData && data.product.allProductData.length > 0) {
//                 // Display the initial set of 6 cards
//                 displayPopularTractors(data.product.allProductData.slice(0, 6), new_arr);

//                 // Show the "Load More" button if there are more tractors
//                 if (data.product.allProductData.length > 6) {
//                     $("#loadMoretract").show();
//                 }

//                 // Handle "Load More" button click
//                 $("#loadMoretract").click(function() {
//                     // Redirect to popular.php
//                     window.location.href = "popular_tractors.php";
//                 });
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function displayPopularTractors(tractors, new_arr) {
//     var productContainer = $("#productContainerpopular");

//     tractors.forEach(function(p) {
//         if (new_arr.includes(p.product_id)) {
//             var images = p.image_names;
//             var a = [];

//             if (images) {
//                 if (images.indexOf(',') > -1) {
//                     a = images.split(',');
//                 } else {
//                     a = [images];
//                 }
//             }

//             var newCard = `<div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
//                             <div class="text-center">
//                                 <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
//                                     <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" width="100" height="100" alt=""
//                                         style=" border-radius: 10px;">
//                                 </a>
//                             </div>
//                             <div class="px-2 d-flex flex-column justify-content-center">
//                                 <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none">
//                                     <p class="mb-1">${p.model}</p>
//                                 </a>
//                                 <p class="trac">
//                                     <span class="bg-light"> ${p.hp_category} HP</span>
//                                     <span class="bg-light">${p.wheel_drive_value}</span>
//                                 </p>
//                                 <div class="">
//                                     <a href="#"><img
//                                             src="assets/images/index_trac_files/park-solid_phone-call.svg"
//                                             width="15" height="15" alt="phone-call-icon">Call
//                                         Now</span></a>
//                                 </div>
//                             </div>
//                         </div>`;

//             // Append the new card to the container
//             productContainer.append(newCard);
//         }
//     });
// }
