$(document).ready(function() {
    getProductById();
    get_allbrand();
    getpopularTractorList();
    $('#submit_enquiry').click(store);
    $('#Verify').click(verifyotp);
});

function getProductById() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor_by_id/" + productId;
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        var userId = localStorage.getItem('id');
        getUserDetail(userId);
        document.getElementById('model_name').innerText = data.product.allProductData[0].brand_name + " " + data.product.allProductData[0].model;
        document.getElementsByClassName('brand_model')[0].innerText = data.product.allProductData[0].brand_name + " " + data.product.allProductData[0].model;
        var brandModelElements = document.getElementsByClassName('brand_model');
        var brandName = data.product.allProductData[0].brand_name;
        var model = data.product.allProductData[0].model;
            for (var i = 0; i < brandModelElements.length; i++) {
                brandModelElements[i].innerText = brandName + " " + model;
            }
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
        document.getElementById('product_id').value = data.product.allProductData[0].product_id;
      
            var product = data.product.allProductData[0];
            var imageNames = product.image_names.split(',');
            var carouselContainer = $('.swiper-wrapper_buy');
            carouselContainer.empty();
            imageNames.forEach(function(imageName) {
                var imageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
            });
            var mySwiper = new Swiper('.swiper_buy', {});
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function get_allbrand() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brands";
    var initialDisplayCount = 6;
    var totalBrands = 0;
    var displayedBrands = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#related_brand");

            if (data.brands && data.brands.length > 0) {
                totalBrands = data.brands.length;
                displayBrands(data.brands.slice(0, initialDisplayCount));
                displayedBrands = initialDisplayCount;

                if (displayedBrands === totalBrands) {
                    $("#loadMoreButton").hide();
                } else {
                    $("#loadMoreButton").show();
                }
                $("#loadMoreButton").click(function() {
                    var remainingBrands = totalBrands - displayedBrands;
                    var nextDisplayCount = Math.min(remainingBrands, 6);
                    displayBrands(data.brands.slice(displayedBrands, displayedBrands + nextDisplayCount));
                    displayedBrands += nextDisplayCount;
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
            <div class="col-6 col-lg-6 col-md-6 col-sm-6 p-2">
                <div class="brand-main box_shadow text-center">
                    <a class="weblink text-decoration-none text-dark" href="#" title="Old Tractors">
                        <img class="img-fluid " src="https://shopninja.in/bharatagri/api/public/uploads/brand_img/${b.brand_img}"
                            data-src="h" alt="Brand Logo" style=" height: 120px; padding: 10px;" loading="lazy">
                        <p class="mb-0 pb-1 oneline">${b.brand_name}</p>
                    </a>
                </div>
            </div>
        `;

        productContainer.append(newCard);
    });
}

function getpopularTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";

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
                displayPopularTractors(data.product.allProductData.slice(0, 6), new_arr);

                if (data.product.allProductData.length > 6) {
                    $("#loadMoretract").show();
                }
                $("#loadMoretract").click(function() {
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
        if (new_arr.includes(p.product_id)) 
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
                            <a href="detail_tractor.php?product_id=${p.product_id}">
                                <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" width="100" height="100" alt=""style="border-radius: 10px;" loading="lazy">
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
                                    <a href="#"><img src="assets/images/index_trac_files/park-solid_phone-call.svg" width="15" height="15" alt="phone-call-icon">Call Now</span></a>
                                </div>
                            </div>
                        </div>`;
            productContainer.append(newCard);
        
    });
}

function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            $('#staticBackdrop').modal('show');
        }
    } else {
        var mobile = $('#number').val();
        get_otp(mobile);
    }
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function get_otp(phone) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            $('#get_OTP_btn').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp() {
    var mobile = $('#number').val();
    var otp = $('#otp').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
                $('#staticBackdrop').modal('show');
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            if (xhr.status === 401) {
                console.log('Invalid credentials');
                var htmlcontent = `<p>Invalid credentials!</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else if (xhr.status === 403) {
                console.log('Forbidden: You don\'t have permission to access this resource.');
                var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            } else {
                console.log('An error occurred:', textStatus, errorThrown);
                var htmlcontent = `<p>An error occurred while processing your request.</p>`;
                document.getElementById("error_message").innerHTML = htmlcontent;
            }
        },
    });
}

function submitForm() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = $('#product_type_id').val()
    var product_id = $('#product_id').val();
    var first_name = $('#firstName').val();
    var last_name = $('#lastName').val();
    var mobile = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#Tehsil').val();
    var paraArr = {
        'product_id':product_id,
        'enquiry_type_id':enquiry_type_id,
        'product_type_id': product_type_id,
        'first_name': first_name,
        'last_name':last_name,
        'mobile':mobile,
        'state':state,
        'district':district,
        'tehsil':tehsil,
    };

    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            console.log("Form submitted successfully!");
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}

function getUserDetail(id) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_customer_personal_info_by_id/" + id;
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            console.log(response, "response");
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                // Set values based on form ID (used_farm_inner_from)
                $('#inner_brand_form #firstName').val(customer.first_name);
                $('#inner_brand_form #lastName').val(customer.last_name);
                $('#inner_brand_form #mobile_number').val(customer.mobile);
                // $('#inner_brand_form #state').val(customer.state_id);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#inner_brand_form input, #inner_brand_form select').not('#price,#state,#district,#Tehsil').prop('disabled', true);
                }
                
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}




