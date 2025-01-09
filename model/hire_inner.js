$(document).ready(function() {
    console.log("ready!");
    $('#button_hire').click(store);
    getHireTracById();
    get_oldharvester();
    $('#Verify').click(verifyotp);
});
function formatPriceWithCommas(price) {
    if (isNaN(price)) {
        return price; 
    }
    return new Intl.NumberFormat('en-IN').format(price);
}
function getHireTracById() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_rent_data_by_id/' + Id;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var userId = localStorage.getItem('id');
            getUserDetail(userId);
            var brand_model = data.rent_details.data1[0].brand_name + " " + (data.rent_details.data1[0].model ? data.rent_details.data1[0].model : "");
            var full_name = data.rent_details.data1[0].first_name + " " + data.rent_details.data1[0].last_name;
            document.getElementById('brand_name1').innerText = brand_model;
            document.getElementById('get_slr_name').value = full_name;
            document.getElementById('get_mob_num').value = data.rent_details.data1[0].mobile;
            document.getElementById('customer_id').value = data.rent_details.data1[0].id;
            document.getElementById('brand_name_brand').value = data.rent_details.data1[0].brand_name;
            document.getElementById('model_form').value = data.rent_details.data1[0].model;
            var carouselContainer = $('.swiper-wrapper_buy');
            carouselContainer.empty();

            data.rent_details.data2.forEach(function(item) {
                var imageNames = item.images.split(',');

                imageNames.forEach(function(imageName) {
                    var imageUrl = "http://tractor-api.divyaltech.com/uploads/rent_img/" + imageName.trim();
                    var slide = $('<div class="swiper-slide swiper-slide_buy"><div class="row"></div></div>');
                    var imageCol = $('<div class="col-6 mt-5"><img class="img_buy" src="' + imageUrl + '" /></div>');
                    var tableCol = $(` 
                        <div class="col-6">
                            <table class="table border bg-light mt-5">
                                <tbody class="implement_table">
                                    <tr>
                                        <td><p class="text-dark"><i class="fa-solid fa-user mx-2"></i>Name</p></td>
                                        <td><p class="text-dark">${full_name}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="text-dark"><i class="fa-solid fa-location-dot mx-2"></i>Location</p></td>
                                        <td><p class="text-dark">${data.rent_details.data1[0].district_name}, ${data.rent_details.data1[0].state_name}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="text-dark"><i class="fa-solid fa-gear mx-2"></i>Implement Type</p></td>
                                        <td><p class="text-dark">${item.category_name}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="text-dark"><i class="fas fa-bolt mx-2"></i>Price</p></td>
                                        <td><p class="text-dark">${parseFloat(item.rate).toLocaleString('en-IN')} /-</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="text-dark"><i class="fa-solid fa-gear mx-2"></i>Rate Per</p></td>
                                        <td><p class="text-dark">per ${item.rate_per}</p></td>
                                    </tr>
                                </tbody>
                                 
                            </table>
                            <div class="col-12">
                                <button id="send_enquiry" type="button" class="add_btn  btn-success w-100"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Send Enquiry</button>
                            </div>
                        </div>
                    `);

                    slide.find('.row').append(imageCol, tableCol);
                    carouselContainer.append(slide);
                });
            });

            var mySwiper = new Swiper('.swiper_buy', {
                loop: true, 
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        },
        error: function(error) {
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
            $('#staticBackdrop1').modal('show');
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
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            $('#get_OTP_btn').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
                $('#staticBackdrop1').modal('show');
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
    var customer_id = $('#customer_id').val();  
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state_form').val();
    var district = $('#the_district').val();
    var tehsil = $('#the_tehsil').val();
    var price = $('#price_form').val();
    price = price.replace(/[\,\.\s]/g, '');

    var paraArr = {
        'enquiry_type_id': enquiry_type_id,
        'product_id': customer_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_number,
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
            console.log(response, "response");
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                
                $('#hire_inner #first_name').val(customer.first_name);
                $('#hire_inner #last_name').val(customer.last_name);
                $('#hire_inner #mobile_number').val(customer.mobile);
                // $('#hire_inner #state_form').val(customer.state_id);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#hire_inner input, #hire_inner select').not('#price_form,#state_form,#the_district,#the_tehsil').prop('disabled', true);
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

    function get_oldharvester() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_old_harvester";
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
            if (data.product && data.product.length > 0) {
                var productContainer = $("#old_harvester_car");
                data.product.forEach(function (p) {
                    var images = p.image_names;
                    var a = [];
            
                    if (images) {
                        if (images.indexOf(',') > -1) {
                            a = images.split(',');
                        } else {
                            a = [images];
                        }
                    }
                    var formattedPrice = formatPriceWithCommas(p.price);
                    var newCard = `
                    <div class="item box_shadow b-t-1">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="used_harvester_inner.php?id=${p.customer_id}">
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="img">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="caption text-center">
                            <a href="used_harvester_inner.php?id=${p.customer_id}" class="text-decoration-none text-dark">
                          
                                <p class="pt-1"><strong class="series_tractor_strong text-center h6 fw-bold text-truncate "><span>${p.brand_name}</span> <span>${p.model}</span></strong></p>
                            </a>      
                        </div>
                        <div class="power text-center">
                            <div class="row ">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success text-truncate ps-2">Price : ₹ <span>${formattedPrice}</span></p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                     <p id="adduser" type="" class=" rounded-3"> Year : <span>${p.purchase_year}</span></p>
                                </div>
                            </div>  
                            <div class="col-12 text-center">
                                <p class="text-dark fw-bold">Hours :<span>${p.hours_driven}</span> </p>
                            </div>  
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="used_harvester_inner.php?id=${p.customer_id}" id="adduser"class="btn-state btn w-100 btn-success text-decoration-none text-white text-truncate p-2 text-truncate"><span>${p.district_name}</span>, <span><span>${p.state_name}</span></span>
                        </a>
                    </div>
                </div>
            </div>`;
        productContainer.append(newCard);
    });
    productContainer.owlCarousel({
    items:4,
    loop: true,
    margin: 10,
    nav: true, 
    autoplay: true, 
    autoplayTimeout: 3000,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});
    }
    },
    error: function(error) {
        console.error('Error fetching data:', error);
    }
    });
}


 populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
