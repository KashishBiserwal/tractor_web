$(document).ready(function() {
    console.log("ready!");
    $('#contact_seller').click(store);
    // getusedfarmimplement();
    getOldFarmImplementId();
    // getpopularTractorList();
    getUsedFarmImplements();
    $('#Verify').click(verifyotp);
    var cardsPerPage = 4;
    var cardsDisplayed = 0;
    var allCards = [];

    function getUsedFarmImplements() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_old_implements";
    
        $.ajax({
            url: url,
            type: "GET",
            success: function (data) {
                allCards = data.getOldImplement || [];
                allCards.reverse(); // Reverse the order of cards
                displayCards();
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    
    // Function to display cards
    function displayCards() {
        var productContainer = $("#productContainer");
    
        // Display only the latest four cards
        for (var i = cardsDisplayed; i < Math.min(cardsDisplayed + cardsPerPage, allCards.length); i++) {
            appendCard(productContainer, allCards[i]);
        }
        
        // Update cards displayed count
        cardsDisplayed = Math.min(cardsDisplayed + cardsPerPage, allCards.length);
    
        // Hide or show the "Load More" button based on remaining cards
        if (cardsDisplayed < allCards.length) {
            $("#loadMoreBtn").show();
        } else {
            $("#loadMoreBtn").hide();
        }
    }
    
    // Function to append a card to the container
    function appendCard(container, cardData) {
        var images = cardData.image_names ? cardData.image_names.split(',') : [];
        var brandmodel = cardData.brand_name + ' ' + cardData.model;
        var location = cardData.district_name + ' ' + cardData.state_name;
        var formattedPrice = formatPriceWithCommas(cardData.price);
    
        var cardHtml = `
            <div class="col-12 col-lg-3 col-md-3 col-sm-3 mt-3">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb">
                        <a href="used_farm_inner.php?id=${cardData.id}">
                            <div class="ratio ratio-16x9">
                                <img src='http://tractor-api.divyaltech.com/uploads/product_img/${images[0]}' class="object-fit-cover" alt="${cardData.description}">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1">
                        <div class="caption text-center">
                            <a href="used_farm_inner.php?id=${cardData.id}" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h6 text-truncate fw-bold">${brandmodel}</strong></p>
                            </a>      
                        </div>
                        <div class="power text-center mt-2">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-success ps-2 text-truncate"><span>Price:- </span>${formattedPrice}</p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                    <p id="adduser" type="" class="">
                                    <span>Year:- </span>${cardData.purchase_year}
                                    </p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12">
                
                        <a href="used_farm_imple.php?id=${cardData.id}" type="button" id="adduser"class="btn btn-state state btn-success text-decoration-none text-truncate px-2 w-100">${location}</a>
                      
                        </div>
                </div>
            </div>`;
            container.append(cardHtml);
        }
    
        // Load initial cards on page load
        // getUsedFarmImplements();
    
        // Event listener for the "Load More" button
        $("#loadMoreBtn").on("click", function() {
            displayCards(); // Append more cards
        });
    });

    function formatPriceWithCommas(price) {
        // Check if the price is not a number
        if (isNaN(price)) {
            return price; // Return the original value if it's not a number
        }
        
        // Format the price with commas in Indian format
        return new Intl.NumberFormat('en-IN').format(price);
    }


function getOldFarmImplementId() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var customer_id = urlParams.get('id');
    console.log(customer_id,'sdfghjksdfghjk');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_implementsById/' + customer_id;
    
    $.ajax({    
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var userId = localStorage.getItem('id');
            getUserDetail(userId);


            var fullMobileNumber = data.getOldImplement[0].mobile;
            var mobileString = fullMobileNumber.toString();
            var lastFourDigits = mobileString.substring(mobileString.length - 4);
            var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
            var maskedMobileNumber = maskedPart + lastFourDigits;
            var formattedPrice = parseFloat(data.getOldImplement[0].price).toLocaleString('en-IN');
            var location = data.getOldImplement[0].district_name + ', ' + data.getOldImplement[0].state_name;
            var fullname = data.getOldImplement[0].first_name + ' ' + data.getOldImplement[0].last_name;
            document.getElementById('model_name').innerText = data.getOldImplement[0].model;
            document.getElementById('original_price').innerText = formattedPrice;
            document.getElementById('hours_driven').innerText = data.getOldImplement[0].hours_driven;
            document.getElementById('purchase_year').innerText = data.getOldImplement[0].purchase_year;
            document.getElementById('location_1').innerText = location;
            document.getElementById('model_name2').innerText = data.getOldImplement[0].model;
            document.getElementById('Power_powerhp').innerText = data.getOldImplement[0].category_name;
            document.getElementById('brand_name').innerText = data.getOldImplement[0].brand_name;
            document.getElementById('model_name_3').innerText = data.getOldImplement[0].model;
            document.getElementById('category_1').innerText = data.getOldImplement[0].category_name;
            document.getElementById('price_1').innerText = formattedPrice;
            document.getElementById('model_name4').innerText=data.getOldImplement[0].model;
            document.getElementById('name').innerText = data.getOldImplement[0].first_name;
            document.getElementById('mobile').innerText = maskedMobileNumber;
            document.getElementById('district_8').innerText = data.getOldImplement[0].district_name;
            document.getElementById('state_8').innerText = data.getOldImplement[0].state_name;
            document.getElementById('description').innerText = data.getOldImplement[0].description;
            document.getElementById('model4').innerText = data.getOldImplement[0].model;
            document.getElementById('product_id').value = data.getOldImplement[0].product_id;
            document.getElementById('slr_name').value = fullname;
            document.getElementById('mob_num').value = data.getOldImplement[0].mobile;
            // Split the image names into an array

           
            var imageNames = data.getOldImplement[0].image_names.split(',');

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
    var product_id = $('#product_id').val();
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile = $('#number').val();
    var state = $('#state_form_1').val();
    var district = $('#district_form_1').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
    price = price.replace(/[\,\.\s]/g, '');

    // Construct parameter array
    var paraArr = {
        'product_id':product_id,
        'enquiry_type_id':enquiry_type_id,
        'first_name': first_name,
        'last_name':last_name,
        'mobile':mobile,
        'state':state,
        'district':district,
        'tehsil':tehsil,
        'price':price,
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
                $('#interested-form #fname').val(customer.first_name);
                $('#interested-form #lname').val(customer.last_name);
                $('#interested-form #number').val(customer.mobile);
                $('#interested-form #state_form_1').val(customer.state_id);
                // $('#interested-form #district_form_1').val(customer.district);
                // $('#interested-form #tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#interested-form input, #interested-form select').not('#price,#district_form_1,#tehsil').prop('disabled', true);
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




