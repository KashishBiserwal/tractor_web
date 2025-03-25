$(document).ready(function() {
    getharvesterById();
    $('#enquiry').click(store);
    $('#Verify').click(verifyotp);
});

function getharvesterById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('product_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_harvester_by_id/" + Id;
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {

            var userId = localStorage.getItem('id');
            getUserDetail(userId);
            var minCuttingHeight = data.product[0].min_cutting_height;
            var maxCuttingHeight = data.product[0].max_cutting_height;
            var concatenatedHeight = minCuttingHeight + ' - ' + maxCuttingHeight;
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
        document.getElementById('brand').innerText=data.product[0].brand_name;
        document.getElementById('model_name').innerText=data.product[0].model;
        document.getElementById('hp').innerText=data.product[0].horse_power;
        document.getElementById('cutting_width').innerText=data.product[0].cutting_bar_width;
        document.getElementById('cylinder').innerText=data.product[0].total_cyclinder_value;
        document.getElementById('power_source').innerText=data.product[0].power_source_value;
        document.getElementById('crop').innerText=data.product[0].crops_type_value;
        document.getElementById('brand_specification').innerText=data.product[0].brand_name;
        document.getElementById('engine_type').innerText=data.product[0].engine_rated_rpm;
        document.getElementById('no_of_cylinder').innerText=data.product[0].total_cyclinder_value;
        document.getElementById('cooling_system').innerText=data.product[0].cooling_value;
        document.getElementById('cutting_bar_width').innerText=data.product[0].cutting_bar_width;
        document.getElementById('height_adj1').innerText=data.product[0].cutter_bar_height_adjustment_value;
        document.getElementById('cutting_bar_height_max').innerText = concatenatedHeight;
        document.getElementById('reel_type').innerText=data.product[0].reel_type_value;
        document.getElementById('speed_adj').innerText=data.product[0].speed_adjustment_value;
        document.getElementById('height_adj').innerText=data.product[0].reel_height_adjustment_value;
        document.getElementById('dia_drum').innerText=data.product[0].threshing_drum_diameter;
        document.getElementById('length_drum').innerText=data.product[0].threshing_drum_length;
        document.getElementById('speed_drum').innerText=data.product[0].threshing_drum_speed_adjustment_value;
        document.getElementById('drum_adjustment').innerText=data.product[0].threshing_drum_speed_adjustment_value;
        document.getElementById('clearance_concave').innerText=data.product[0].clearance_concave;
        document.getElementById('tyre_front').innerText=data.product[0].front_tyre;
        document.getElementById('tyre_rear').innerText=data.product[0].rear_tyre;
        document.getElementById('dia_lenght').innerText=data.product[0].dimension_length;
        document.getElementById('dia_height').innerText=data.product[0].dimension_height;
        document.getElementById('min_ground_clear').innerText=data.product[0].ground_clearance;
        document.getElementById('product_id').value=data.product[0].id;
        var product = data.product[0];

        var imageNames = product.image_names.split(',');
        var carouselContainer = $('.swiper-wrapper_buy');
        carouselContainer.empty();

        imageNames.forEach(function(imageName) {
            var imageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageName.trim(); // Update the path
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
            carouselContainer.append(slide);
        });

        var mySwiper = new Swiper('.swiper_buy', {
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
                // $('#staticBackdrop').modal('show');
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
    var product_id = $('#product_id').val();
    var first_name = $('#f_name').val();
    var last_name = $('#lastName').val();
    var mobile_no = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#Tehsil').val();
    // Construct parameter array
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'state': state,
        'district': district,
        'tehsil': tehsil,
    };
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log("Form submitted successfully!");
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
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
                
                $('#engine_oil_form #f_name').val(customer.first_name);
                $('#engine_oil_form #lastName').val(customer.last_name);
                $('#engine_oil_form #mobile_number').val(customer.mobile);
                
                if (isUserLoggedIn()) {
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
