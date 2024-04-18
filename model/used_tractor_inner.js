$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
    // getoldTractorList();
    getOldTractorById();
    getpopularTractorList();
    getupcomimgTractorList();
    $('#Verify').click(verifyotp);
});



function getOldTractorById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var customer_id = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_id/" + customer_id;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        var fullMobileNumber = data.product[0].mobile;
        var mobileString = fullMobileNumber.toString();
        var lastFourDigits = mobileString.substring(mobileString.length - 4);
        var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
        var maskedMobileNumber = maskedPart + lastFourDigits;
        var formattedPrice = parseFloat(data.product[0].price).toLocaleString('en-IN');
        var noc = data.product === 1 ? "Yes" : "No";
        var rc_number = data.product === 1 ? "Yes" : "No";
        var fullname = data.product[0].first_name + ' ' + data.product[0].last_name;
        document.getElementById('brand_main').innerText=data.product[0].brand_name;
        document.getElementById('price_main').innerText= formattedPrice;
        document.getElementById('model_name').innerText=data.product[0].model;
        document.getElementById('hours_driven').innerText=data.product[0].hours_driven;
        document.getElementById('engine_powerhp').innerText=data.product[0].hp_category;
        document.getElementById('tyre_condition').innerText=data.product[0].tyre_condition;
        document.getElementById('engine_condition').innerText=data.product[0].engine_condition;
        document.getElementById('noc').innerText=noc;
        document.getElementById('rc_number').innerText=rc_number;
        document.getElementById('model_name2').innerText=data.product[0].model;
        document.getElementById('model_name4').innerText=data.product[0].model;
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
         console.log(data.product[0].brand_name,"hasdgfasgdfj");
        document.getElementById('model_name3').innerText=data.product[0].model;
        // document.getElementById('engine_powerhp2').innerText=data.product[0].hp_category;
        document.getElementById('tyre2').innerText=data.product[0].tyre_condition;
        document.getElementById('engine2').innerText=data.product[0].engine_condition;
        document.getElementById('name').innerText=data.product[0].first_name;
        document.getElementById('mobile').innerText = maskedMobileNumber;
        document.getElementById('district').innerText=data.product[0].district_name;
        document.getElementById('state_td').innerText=data.product[0].state_name;
        document.getElementById('description').innerText=data.product[0].description;
        // document.getElementById('description_22').innerText=data.product[0].description;
        document.getElementById('model4').innerText=data.product[0].model;
        document.getElementById('product_id').value = data.product[0].product_id;

        
        document.getElementById('slr_name').value = fullname;
        document.getElementById('mob_num').value = data.product[0].mobile;
        // $('#product_id').val();
        var userId = localStorage.getItem('id');
        getUserDetail(userId);
        var imageNames = data.product[0].image_names.split(',');

            // Select the carousel container
            var carouselContainer = $('.swiper-wrapper_buy');

            // Clear existing slides
            carouselContainer.empty();

            // Initialize an empty array to store Swiper slides
            var swiperSlides = [];

            // Iterate through the image names and create carousel slides
            imageNames.forEach(function(imageName, index) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy mt-2" src="' + imageUrl + '" style="height: 300px;" /></div>'); // Set height here
                carouselContainer.append(slide);
                
                // Push the created slide into the swiperSlides array
                swiperSlides.push(slide);
            });

            // Initialize or update the Swiper carousel
            var mySwiper = new Swiper('.swiper_buy', {
                // Your Swiper configuration options
            });

            // Add click event listener to each slide
            swiperSlides.forEach(function(slide, index) {
                slide.on('click', function() {
                    // Slide to the clicked slide
                    mySwiper.slideTo(index);
                });
            });

        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
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
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            $('#get_OTP_btn').modal('show'); // OTP modal is displayed for entering OTP
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
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
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
            // Handle different error scenarios
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
    // Gather form data
    var enquiry_type_id = $('#enquiry_type_id').val();
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form').val();
    var district = $('#district_form').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
    price = price.replace(/[\,\.\s]/g, '');
    var product_id = $('#product_id').val();

    // Construct parameter array
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'price': price,
    };

    // API endpoint for form submission
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";

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
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;
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
                $('#used_farm_inner_from #fname').val(customer.first_name);
                $('#used_farm_inner_from #lname').val(customer.last_name);
                $('#used_farm_inner_from #number').val(customer.mobile);
                $('#used_farm_inner_from #state_form').val(customer.state_id);
                // $('#used_farm_inner_from #district_form').val(customer.district);
                // $('#used_farm_inner_from #tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#used_farm_inner_from input, #used_farm_inner_from select').not('#price,#district_form,#tehsil,#contact_seller').prop('disabled', true);
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

