$(document).ready(function() {
    get_detail();
    getpopularTractorList();
    getupcomimgTractorList();
    blog_details_list();
    $('#submit_enquiry').click(store);
    var allCards = []; 
});

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
                displayPopularTractors(data.product.allProductData.slice(0, 4), new_arr);

                if (data.product.allProductData.length > 4) {
                    $("#loadMoretract").show();
                }
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
                                    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" width="100" height="100" alt=""
                                        style=" border-radius: 10px;" loading="lazy">
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

            productContainer.append(newCard);
        }
    });
}

 // get new popular tractor
 function getupcomimgTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";

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
                displayupcomingTractors(data.product.allProductData.slice(0, 4), new_arr);
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
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }

            var newCard = `<div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color:#fff">
                            <div class="text-center">
                                <a href="detail_tractor.php?product_id=${p.product_id}" class="weblink">
                                    <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" width="100" height="100" alt=""
                                        style=" border-radius: 10px;" loading="lazy">
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
            productContainer.append(newCard);
        }
    });
}

function get_detail() {
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_implement_details_by_id/" + Id;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {

            var userId = localStorage.getItem('id');
            getUserDetail(userId);

            var implementsData = data.getAllImplementsById[0].implements_data[0];
            var customData = data.getAllImplementsById[1][0].implement_custom_data;
            const brand_model = implementsData.brand_name + " " + implementsData.model;
            document.getElementById('title').innerText = implementsData.model;
            document.getElementById('heading').innerText = implementsData.model;
            document.getElementById('model_name').innerText = implementsData.brand_name;
            document.getElementById('model').innerText = implementsData.model;
            var cleanedString = implementsData.sub_category_name.replace(/[^\w\s]/gi, '');
            var spacedString = cleanedString.replace(/_/g, ' ');
            document.getElementById('subcategory').innerText = spacedString;
            document.getElementById('category').innerText = implementsData.category_name;
            document.getElementById('imple_name').innerText = brand_model;
            document.getElementById('product_id').value = implementsData.product_id;
    
            var tableData = $("#tableData");
            tableData.html('');
    
            if (customData && customData.length > 0) {
                customData.forEach(function(customColumn) {
                    var columnName = customColumn[Object.keys(customColumn)[0]];
                    var value = customColumn[Object.keys(customColumn)[1]];
    
                    var tableRow = `
                        <tr class="">
                            <td class="fs-6"><span>${columnName} </span></td>
                            <td class="fs-6"><span>${value}</span></td>
                        </tr>
                    `;
                    tableData.append(tableRow);
                });
            }
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
        
                carouselContainer.empty();
                carouselContainer2.empty();  
        
                imageNames.forEach(function(imageName) {
                    var imageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageName.trim();
                    var slide = $('<div class="slick-slide slick-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                    carouselContainer.append(slide);
        
                    var slide2 = $('<div class="slick-slide slick-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                    carouselContainer2.append(slide2);
                });
                $('.slider-for').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    asNavFor: '.slider-nav',
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
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#mobile_number').val();
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
            console.log(result, "result");
            $('#get_OTP_btn').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp() {
    var mobile = $('#mobile_number').val();
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
    var product_id = $('#product_id').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();

    // Construct parameter array
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

    // API endpoint for form submission
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";

    // Submit form data via AJAX
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            // Show success message or handle accordingly
            console.log("Form submitted successfully!");
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
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
    console.log(url, 'url print ');

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };

    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            console.log(response, "response");

            // Check if customerData exists in the response and has at least one entry
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                console.log(customer, 'customer details');
                
                // Set values based on form ID (used_farm_inner_from)
                $('#engine_oil_form #firstName').val(customer.first_name);
                $('#engine_oil_form #lastName').val(customer.last_name);
                $('#engine_oil_form #mobile_number').val(customer.mobile);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#engine_oil_form input, #engine_oil_form select').not('#price,#state,#district,#Tehsil').prop('disabled', true);
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

