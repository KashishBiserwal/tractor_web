$(document).ready(function () {
    console.log("ready!");
    $('#contact_seller').click(store);
    getOldTractorById();
    getpopularTractorList();
    // $('#Verify').click(verifyotp);
});


function getOldTractorById() {
    var urlParams = new URLSearchParams(window.location.search);
    var customer_id = urlParams.get('product_id');
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_old_tractor_by_id/" + customer_id;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            console.log(data, 'abc');
            var product = data.product.allProductData[0];
            var fullMobileNumber = product.mobile;
            var mobileString = fullMobileNumber.toString();
            var lastFourDigits = mobileString.substring(mobileString.length - 4);
            var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
            var maskedMobileNumber = maskedPart + lastFourDigits;
            var formattedPrice = parseFloat(product.price).toLocaleString('en-IN');
            var noc = product.noc === 1 ? "Yes" : "No";
            var formattedDescription = data.product.allProductData[0].description.replace(/\n/g, '<br>');
            document.getElementById('description').innerHTML = formattedDescription;

            document.getElementById('hours_driven').innerText = product.hours_driven;
            document.getElementById('engine_powerhp').innerText = product.hp_category;
            document.getElementById('tyre_condition').innerText = product.tyre_condition;
            document.getElementById('engine_condition').innerText = product.engine_condition;
            document.getElementById('noc').innerText = noc;
            document.getElementById('purchase_year').innerText = product.purchase_year;
            document.getElementById('vehicle_registered_num').innerText = product.vehicle_registered_num;
            document.getElementById('model').innerText = product.model;
            document.getElementById('price_main').innerText = product.price;
            document.getElementById('product_id').value = product.product_id;
            document.getElementById('product_type_id').innerText = product.product_type_id;

            var imageNames = product.image_names.split(',');
            var mainImageContainer = $('#main-image');
            var mainImageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageNames[0].trim();
            mainImageContainer.attr('src', mainImageUrl);
            var leftBarContainer = $('#left-bar');
            var threeImageNames = imageNames.slice(0, 3);
            threeImageNames.forEach(function (imageName) {
                var imageUrl = "https://shopninja.in/bharatagri/api/public/uploads/product_img/" + imageName.trim();
                var image = $('<img class="img-fluid" style="width: 120px; cursor: pointer;" src="' + imageUrl + '" />');
                image.on('click', function () {
                    console.log(imageUrl, "imageUrl");
                    mainImageContainer.attr('src', imageUrl);
                });
                leftBarContainer.append(image);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getpopularTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
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
                $("#loadMoretract").click(function () {
                    window.location.href = "popular_tractors.php";
                });
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayPopularTractors(tractors, new_arr) {
    var productContainer = $("#productContainerpopular");
    tractors.forEach(function (p) {
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

function submitForm() {
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = $('#product_type_id').val();
    var product_id = $('#product_id').val();
    var first_name = $('#fullname').val();
    var last_name = ""
    var mobile = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#Tehsil').val();
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'product_type_id': product_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
    };
    console.log(paraArr, "paraArr");

    if (mobile.length < 10 || mobile.length > 10) {
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter 10 digits Mobile Number</p>');
        return;
    }


    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            alert("Enquiry submitted successfully!");
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
        success: function (response) {
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
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function store(event) {
    event.preventDefault();
    var isConfirmed = confirm("Are you sure you want to submit the form?");
    if (isConfirmed) {
        submitForm();
        $('#staticBackdrop').modal('show');
    }
}
