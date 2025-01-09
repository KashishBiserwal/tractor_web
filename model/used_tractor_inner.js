$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
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
        document.getElementById('tyre2').innerText=data.product[0].tyre_condition;
        document.getElementById('engine2').innerText=data.product[0].engine_condition;
        document.getElementById('name').innerText=data.product[0].first_name;
        document.getElementById('mobile').innerText = maskedMobileNumber;
        document.getElementById('district').innerText=data.product[0].district_name;
        document.getElementById('state_td').innerText=data.product[0].state_name;
        document.getElementById('description').innerText=data.product[0].description;
        document.getElementById('model4').innerText=data.product[0].model;
        document.getElementById('product_id').value = data.product[0].product_id;

        
        document.getElementById('slr_name').value = fullname;
        document.getElementById('mob_num').value = data.product[0].mobile;
        var userId = localStorage.getItem('id');
        getUserDetail(userId);
        var imageNames = data.product[0].image_names.split(',');

            var carouselContainer = $('.swiper-wrapper_buy');
            carouselContainer.empty();
            var swiperSlides = [];

            imageNames.forEach(function(imageName, index) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/product_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy mt-2" src="' + imageUrl + '" style="height: 300px;" /></div>'); // Set height here
                carouselContainer.append(slide);
                
                swiperSlides.push(slide);
            });
            var mySwiper = new Swiper('.swiper_buy', {
            });

            swiperSlides.forEach(function(slide, index) {
                slide.on('click', function() {
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
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
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
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                $('#used_farm_inner_from #fname').val(customer.first_name);
                $('#used_farm_inner_from #lname').val(customer.last_name);
                $('#used_farm_inner_from #number').val(customer.mobile);
                if (isUserLoggedIn()) {
                    $('#used_farm_inner_from input, #used_farm_inner_from select').not('#price,#state_form,#district_form,#tehsil,#contact_seller').prop('disabled', true);
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

function displayPopularTractors(tractors, popularProductIds) {
    const productContainer = $("#productContainerpopular");
    tractors.forEach(function (tractor) {
        if (popularProductIds.includes(tractor.product_id)) {
            let imagesArray = [];
            const images = tractor.image_names;

            if (images && typeof images === "string") {
                imagesArray = images.includes(",") ? images.split(",") : [images];
            }
            const tractorCard = `
                <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color: #fff;">
                    <div class="text-center">
                        <a href="detail_tractor.php?product_id=${tractor.product_id}" class="weblink">
                            <img src="http://tractor-api.divyaltech.com/uploads/product_img/${imagesArray[0] || 'default.jpg'}" 
                                width="100" height="100" alt="${tractor.model || 'Tractor Image'}"
                                style="border-radius: 10px;">
                        </a>
                    </div>
                    <div class="px-2 d-flex flex-column justify-content-center">
                        <a href="detail_tractor.php?product_id=${tractor.product_id}" class="text-decoration-none">
                            <p class="mb-1">${tractor.model || "Model not available"}</p>
                        </a>
                        <p class="trac">
                            <span class="bg-light">${tractor.hp_category || "N/A"} HP</span>
                            <span class="bg-light">${tractor.wheel_drive_value || "N/A"}</span>
                        </p>
                    </div>
                </div>`;
            productContainer.append(tractorCard);
        }
    });
}
function getUpcomingTractorList() {
    const apiUrl = "http://tractor-api.divyaltech.com/api/customer/get_new_tractor";

    $.ajax({
        url: apiUrl,
        type: "GET",
        success: function (response) {
            if (response && response.product) {
                const { accessory_and_tractor_type, allProductData } = response.product;
                const upcomingProductIds = [];
                accessory_and_tractor_type.forEach((item) => {
                    const tractorTypes = item.tractor_type_name.split(',');
                    if (tractorTypes.includes('Upcoming')) {
                        upcomingProductIds.push(item.product_id);
                    }
                });
                const productContainer = $("#productContainerupcoming");
                if (allProductData && allProductData.length > 0) {
                    displayUpcomingTractors(allProductData.slice(0, 4), upcomingProductIds);
                    if (allProductData.length > 4) {
                        $("#load_btn").show();
                    }
                    $("#load_btn").click(function () {
                        window.location.href = "upcoming_tractors.php";
                    });
                }
            } else {
                console.warn("No product data found in the response.");
            }
        },
        error: function (error) {
            console.error("Error fetching data:", error);
        }
    });
}

function displayUpcomingTractors(tractors, upcomingProductIds) {
    const productContainer = $("#productContainerupcoming");

    tractors.forEach(function (tractor) {
        if (upcomingProductIds.includes(tractor.product_id)) {
            let imagesArray = [];
            const images = tractor.image_names;

            if (images && typeof images === "string") {
                imagesArray = images.includes(",") ? images.split(",") : [images];
            }
            const tractorCard = `
                <div class="used-tractor mb-3 d-flex flex-row shadow p-2" style="background-color: #fff;">
                    <div class="text-center">
                        <a href="detail_tractor.php?product_id=${tractor.product_id}" class="weblink">
                            <img src="http://tractor-api.divyaltech.com/uploads/product_img/${imagesArray[0]}" 
                                width="100" height="100" alt="${tractor.model || 'Tractor Image'}"
                                style="border-radius: 10px;">
                        </a>
                    </div>
                    <div class="px-2 d-flex flex-column justify-content-center">
                        <a href="detail_tractor.php?product_id=${tractor.product_id}" class="text-decoration-none">
                            <p class="mb-1">${tractor.model || "Model not available"}</p>
                        </a>
                        <p class="trac">
                            <span class="bg-light">${tractor.hp_category || "N/A"} HP</span>
                            <span class="bg-light">${tractor.wheel_drive_value || "N/A"}</span>
                        </p>
                    </div>
                </div>`;
            productContainer.append(tractorCard);
        }
    });
}

