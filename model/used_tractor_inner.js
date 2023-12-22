$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
    // getoldTractorList();
    getOldTractorById();
    getpopularTractorList();
    getupcomimgTractorList();
});

function getOldTractorById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
    
        document.getElementById('model_name').innerText=data.product[0].model;
        // console.log(data.product[0].brand_name);
       
        document.getElementById('hours_driven').innerText=data.product[0].hours_driven;
        // document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_condition').innerText=data.product[0].tyre_condition;
        document.getElementById('engine_condition').innerText=data.product[0].engine_condition;
        document.getElementById('noc').innerText=data.product[0].noc;
        document.getElementById('rc_number').innerText=data.product[0].rc_number;
        document.getElementById('model_name2').innerText=data.product[0].model;
        document.getElementById('model_name4').innerText=data.product[0].model;
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
         console.log(data.product[0].brand_name,"hasdgfasgdfj");
        document.getElementById('model_name3').innerText=data.product[0].model;
        // document.getElementById('engine_powerhp2').innerText=data.product[0].hp_category;
        document.getElementById('tyre2').innerText=data.product[0].tyre_condition;
        document.getElementById('engine2').innerText=data.product[0].engine_condition;
        document.getElementById('name').innerText=data.product[0].first_name;
        document.getElementById('mobile').innerText=data.product[0].mobile;
        document.getElementById('district').innerText=data.product[0].district;
        document.getElementById('state_td').innerText=data.product[0].state;
        document.getElementById('description').innerText=data.product[0].description;
        document.getElementById('model4').innerText=data.product[0].model;

        var product = data.product[0];

        // Split the image names into an array
        var imageNames = product.image_names.split(',');

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


// store data throught form
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form').val();
    var district = $('#district_form').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
  
    // Prepare data to send to the server
    var paraArr = {
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
        console.log('prachi',data.product);
        const new_data=data.product.filter((s)=>{ 
            if(s.product_type=="FOR_SELL_TRACTOR"){
                return s;
            }
        });
        console.log('form_type',new_data);
        getOldTractorById();
        console.log("Add successfully");
        alert('successfully inserted..!');
      },
      error: function (error) {
        console.error('Error fetching data:', error);
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




// function getoldTractorList() {
//     var url = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(data) {
//             let new_arr = [];
//             // const new_data = data.product.accessory_and_tractor_type.filter((s) => {
//             //     const arr = s.tractor_type_name.split(',');
//             //     if (arr.includes('Popular')) {
//             //         new_arr.push(s.product_id);
//             //         return s.product_id;
//             //     }
//             // });

//             var productContainer = $("#productContainersimilar");

//             if (data.product.allProductData && data.product.allProductData.length > 0) {
//                 // Display the initial set of 4 cards
//                 displayPopularTractors(data.product.allProductData.slice(0, 8), new_arr);

//                 // Show the "Load More" button if there are more tractors
//                 if (data.product.allProductData.length > 8) {
//                     $("#ViewBtn").show();
//                 }

//                 // Handle "Load More" button click
//                 $("#ViewBtn").click(function() {
//                     window.location.href = "used_tractor.php";
//                 });
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function displayPopularTractors(tractors, new_arr) {
//     var productContainer = $("#productContainersimilar");

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

//             var newCard = `<div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4">
//             <div class="h-auto success__stry__item d-flex flex-column shadow ">
//                 <div class="thumb">
//                     <a href="farmtrac_60.php?product_id=${p.product_id}">
//                         <div class="ratio ratio-16x9">
//                             <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
//                         </div>
//                     </a>
//                 </div>
//                 <div class="content d-flex flex-column flex-grow-1 ">
//                     <div class="caption text-center">
//                         <a href="farmtrac_60.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
//                             <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.model}</strong></p>
//                         </a>      
//                     </div>
//                     <div class=" row">
//                         <div class="col-12 ms-2 ">
//                             <p class="" id="district"><span id="engine_powerhp2">${p.hp_category}</span> | <span id="year">${p.purchase_year}</span>| ${p.district}</p>
//                         </div>
//                     </div>
//                     <div class="row text-center">
//                         <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                             <p class="fw-bold ">Price: ₹<span id="price">${p.price}</p>
//                         </div>
//                         <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                             <p class="fw-bold pe-2">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
//                         </div>
//                     </div>
//                 </div>
//                 <div class=" row state_btn">
//                     <div class="col-12 ">
//                         <button  type ="button" class="btn-success w-100 p-2 rounded-3 text-decoration-none  text-center" data-bs-toggle="modal" data-bs-target="#used_tractor_callbnt"><i class="fa-solid fa-phone pe-2"></i>Call Now</button> 
//                     </div>
//                 </div>
//             </div>
//         </div>`;

//             // Append the new card to the container
//             productContainer.append(newCard);
//         }
//     });
// }

