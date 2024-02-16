$(document).ready(function() {

    get_detail();
    getpopularTractorList();
    getupcomimgTractorList();
    $('#submit_enquiry').click(store);

});

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

function get_detail() {
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_implement_details_by_id/" + Id;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var implementsData = data.getAllImplementsById[0].implements_data[0];
            var customData = data.getAllImplementsById[1][0].implement_custom_data;
            const brand_model = implementsData.brand_name + " " + implementsData.model;
            document.getElementById('title').innerText = implementsData.model;
            document.getElementById('heading').innerText = implementsData.model;
            document.getElementById('model_name').innerText = implementsData.brand_name;
            document.getElementById('model').innerText = implementsData.model;
            document.getElementById('subcategory').innerText = implementsData.sub_category_name;
            document.getElementById('category').innerText = implementsData.category_name;
            document.getElementById('imple_name').innerText = brand_model;
            document.getElementById('product_id').value = implementsData.product_id;
    
            var tableData = $("#tableData");
            tableData.html('');
            let counter = 1;
    
            if (customData && customData.length > 0) {
                customData.forEach(function(customColumn) {
                    var columnName = customColumn[Object.keys(customColumn)[0]];
                    var value = customColumn[Object.keys(customColumn)[1]];
    
                    var tableRow = `
                        <tr class="">
                            <td class="">${counter}</td>
                            <td class="fs-6"><span>${columnName} </span></td>
                            <td class="fs-6"><span>${value}</span></td>
                        </tr>
                    `;
                    counter++;
                    tableData.append(tableRow);
                });
            }
    
            // Call initializeSlickSlider after setting other elements
            initializeSlickSlider(data);
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
    
    // Move the initializeSlickSlider function outside of the AJAX callback
    function initializeSlickSlider(data) {
        if (data.getAllImplementsById && data.getAllImplementsById.length > 0) {
            var implementsDataArray = data.getAllImplementsById[0].implements_data;
        
            if (implementsDataArray && implementsDataArray.length > 0) {
                var imageNames = implementsDataArray[0].image_names ? implementsDataArray[0].image_names.split(',') : [];
                var carouselContainer = $('.slider-for');
                var carouselContainer2 = $('.slider-nav');
                // carouselContainer2.css('float', 'inline-start');
        
                carouselContainer.empty();
                carouselContainer2.empty();  // Added to clear the second slider
        
                imageNames.forEach(function(imageName) {
                    var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim();
                    var slide = $('<div class="slick-slide slick-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                    carouselContainer.append(slide);
        
                    var slide2 = $('<div class="slick-slide slick-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                    carouselContainer2.append(slide2);
                });
        
                // Initialize or update the Slick sliders
                $('.slider-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    asNavFor: '.slider-nav',
                    // Your Slick slider configuration options
                });
        
                $('.slider-nav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true,
                    focusOnSelect: true,
                    asNavFor: '.slider-for',
                });
            } else {
            console.error('Error: Required data is missing for Slick slider initialization.');
        }
    }
    
}
}


function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var enquiry_type_id = 6;
    var product_id = $('#product_id').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();
   
    console.log('jfhfhw',product_id);
  
    // Prepare data to send to the server
    var paraArr = {
      'product_id':product_id,
      'enquiry_type_id':enquiry_type_id,
      'first_name': firstName,
      'last_name':lastName,
      'mobile':mobile_number,
      'state':state,
      'district':district,
      'tehsil':Tehsil,
    };
   
//   var url = apiBaseURL + 'customer_enquiries';
var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
  
  
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        $('#engine_oil_form')[0].reset();
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








