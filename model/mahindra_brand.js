
var allDealers = [];
$(document).ready(function() {
    getbrands();
    getTractorList();
    getusedTractorList();
    get_certifieddealers();
    $("#contact-seller-call").validate({
        rules: {
            brandName: {
                required: true
            },
            modeName: {
                required: true
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10
            },
            state: {
                required: true,
                notEqual: "Select State"
            },
            district: {
                required: true,
                notEqual: "Select District"
            },
            Tehsil: {
                required: true
            }
        },
        messages: {
            state: {
                notEqual: "Please select a state."
            },
            district: {
                notEqual: "Please select a district."
            }
        },
        submitHandler: function (form) {
            savedata();
            // tractor_enquiry();
        }
    });

   // Custom validation method for notEqual rule
    $.validator.addMethod("notEqual", function (value, element, param) {
        return value !== param;
    }, "Value must not equal {0}");

    function get_certifieddealers() {
        var url = 'http://tractor-api.divyaltech.com/api/customer/dealer_data';
    
        $.ajax({
            url: url,
            type: "GET",
            success: function(data) {
                if (data.dealer_details && data.dealer_details.length > 0) {
                    var reversedDealers = data.dealer_details.slice().reverse();
                    allDealers = allDealers.concat(reversedDealers);
                    
                    displaydealer(reversedDealers.slice(0, 8).reverse());
                    if (data.dealer_details.length > 8) {
                        $("#load_moretract").show();
                    }
                    $("#load_moretract").click(function() {
                        // Display all dealers in the opposite order
                        displaydealer(allDealers.reverse());
                        // Hide the "Load More" button
                        $("#load_moretract").hide();
                    });
                }
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            },
            complete: function () {
                // Hide the spinner after the API call is complete
                hideOverlay();
            },
        });
    }
    
    function displaydealer(dealers) {
        var productContainer = $("#productContainer_dealer");
        productContainer.html('');
    
        dealers.forEach(function (dealer) {
            var images = dealer.image_names ? dealer.image_names.split(',')[0] : '';
    
            var newCard = `
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 px-2 py-3 h-100">
                    <div class="h-auto success__stry__item d-flex flex-column shadow">
                        <div class="thumb">
                            <a href="certified_dealers_inner.php?id=${dealer.id}">
                                <div class="ratio ratio-16x9">
                                    <img src="assets/images/IMG-20240516-WA0006.jpg" class="object-fit-cover" alt="img">
                                </div>
                            </a>
                        </div>
                        <div class="position-absolute">
                            <p class="rounded-pill bg-warning text-center px-2 mt-1">Certified</p>
                        </div>
                        <div>
                            <a href="certified_dealers_inner.php?id=${dealer.id}" class="text-decoration-none text-dark">
                                <h6 class="fw-bold text-center text-truncate mt-3">${dealer.dealer_name}</h6>
                            </a>
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                                <p class="text-center text-dark fw-bold">${dealer.brand_name} <span>Dealer</span></p>
                            </div>
                            <div class="justify-content-center d-flex">
                                <button type="button" class="btn btn-success w-100">Rangareddy, Telangana</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            productContainer.prepend(newCard);
        });
    }
function getQueryParam(parameterName) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(parameterName);
}

function getbrands(){ 
   const brandId = getQueryParam('brand_id');
 
    const url = 'http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_brands/' + brandId;
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            document.getElementById('separated_brand').innerText=data.product.allProductData[0].brand_name;
    
            var slider_head = $("#slider_head");
            var brandContainer = $("#brandContainer");
            // Append slider heading and brand containers
            if (data.brands && data.brands.length > 0) {
                data.brands.forEach(function (p) {
                    if (p.id == brandId) {
                        console.log(p,"pp");
                        var slider_heading = `<h1 class="d3 mb-0 text-white display-5 fw-bold">${p.brand_name}</h1>`;
                        slider_head.append(slider_heading);
                    }
    
                    var brand_container = `
                        <div class="col-6 col-sm-6 col-md-2 col-lg-2 brand_section">
                            <a href="brands.php?brand_id=${p.id}">
                                <div class="d-block">
                                    <img src="http://tractor-api.divyaltech.com/uploads/brand_img/${p.brand_img}">
                                    <p>${p.brand_name}</p>
                                </div>
                            </a>
                        </div>`;
                    brandContainer.append(brand_container);
                });
    
                // Initialize Owl Carousel after adding cards
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}    




function getTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_new_tractor_by_brands/' + Id;
    console.log(url);
   
    var totalTractors = 0;
    var displayedTractors = 8;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // Sort the array in descending order based on product_id
                data.product.allProductData.sort(function(a, b) {
                    return b.product_id - a.product_id;
                });

                // Clear existing content
                productContainer.html('');

                // Display the initial set of 8 tractors
                displayTractors(productContainer, data.product.allProductData.slice(0, displayedTractors));

                // Check if there are more tractors than initially displayed
                if (data.product.allProductData.length > displayedTractors) {
                    loadMoreButton.show();
                } else {
                    loadMoreButton.hide();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Calculate the end index for the next batch of tractors
                    var nextBatchEndIndex = displayedTractors + 8;

                    // Display the next batch of tractors
                    displayTractors(productContainer, data.product.allProductData.slice(displayedTractors, nextBatchEndIndex));

                    // Update the number of displayed tractors
                    displayedTractors = nextBatchEndIndex;

                    // Check if there are still more tractors to load
                    if (displayedTractors >= data.product.allProductData.length) {
                        loadMoreButton.hide();
                    }
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
function displayTractors(productContainer, tractors) {
    tractors.forEach(function(p) {
        var images = p.image_names;
        var a = [];
        populateDropdowns(p.id);
        if (images) {
            if (images.indexOf(',') > -1) {
                a = images.split(',');
            } else {
                a = [images];
            }
        }
        
        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.product_id}`; 
        var modalId_2 = `staticBackdrop_${p.product_id}`; 
        var formId = `contact-seller-call_${p.product_id}`;
        var userId = localStorage.getItem('id');
        var newCard = `
            <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3 mt-4" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                    <div class="thumb" style="width: 100%; height: 180px; overflow: hidden;">
                        <a href="detail_tractor.php?product_id=${p.product_id}">
                            <div class="p-3">
                                <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover" style="width: 100%; height:150px;" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1">
                        <div class="caption text-center">
                            <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                <h6 class="text-center text-truncate mt-2 text-capitalize">${p.brand_name} ${p.model}</h6>
                            </a>     
                        </div>
                        <div class="d-flex mx-auto" style="gap: 25px;">
                            <div>
                                <p class="float-end" style="font-size:14px;"><i class="fas fa-bolt me-2" style="color: #198754;"></i>${p.hp_category} HP</p>
                            </div>
                            <div>
                                <p class="float-start" style="font-size:14px;"><i class="fa fa-cog me-2" aria-hidden="true" style="color: #198754;"></i>${p.wheel_drive_value}</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                                <i class="fa-regular fa-handshake"></i> Get on Road Price
                            </button>
                        </div>
                        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header  modal_head">
                                        <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.model}</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                        <form  id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> product_id</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="product_id" value="${p.product_id}" name="">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="2" name="iduser">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="product_type_id" value="${p.product_type_id}" name="iduser">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                    <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                                </div>
                                               
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                    <!-- Options for state dropdown -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                                    <!-- Options for district dropdown -->
                                                </select>
                                            </div>
                                        </div>       
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                            <div class="form-outline">
                                                <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                                  
                                                    <!-- Options for Tehsil dropdown -->
                                                </select>
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                            </div>      
                                        </form>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="get_OTP_btn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Verify Your OTP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class=" w-100"></button>
                    </div>
                    <div class="modal-body">
                        <form id="otp_form">
                            <div class=" col-12 input-group">
                                <div class="col-12" hidden>
                                    <label for="Mobile" class=" text-dark float-start pl-2">Number</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="Mobile"name="Mobile">
                                </div>
                                <div class="col-12">
                                    <label for="Mobile" class=" text-dark float-start pl-2">Enter OTP</label>
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"name="opt_1">
                                </div>
                                <div class="float-end col-12">
                                    <a href="" class="float-end">Resend OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="Verify" onclick="verifyotp('${formId}')">Verify</button>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="modal fade" id="${modalId_2}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Contact Seller</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"class="w-25"></button>
                    </div>
                    <div class="modal-body">
                        <div class="model-cont">
                            <h4 class="text-center text-danger">Seller Information</h3>
                            <div class="row px-3 py-2">
                                <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                    <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>Seller Name</label>
                                    <input type="text" class="form-control" id="saller_name" value="${p.tractor_type_name}">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6  ">
                                    <label for="number"class="form-label text-dark fw-bold"><i class="fa fa-phone"aria-hidden="true"></i>Phone Number</label>
                                    <input type="text" class="form-control" id="mobile_num" value="${p.mobile}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  id="got_it_btn "class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> `;   
        productContainer.append(newCard);
     
    });

    $(".add_btn").on("click", function() {
        var productId = $(this).data("product-id");
        $("#used_tractor_callbnt_" + productId).modal("show");
    });
}

});

function showOverlay() {
    $("#overlay").fadeIn(400);
}

function hideOverlay() {
    $("#overlay").fadeOut(400);
}

function resetForm(formId) {
    document.getElementById(formId).reset();
}



var formData = {};

function savedata(formId) {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitData(formId);
            // openSellerContactModal(formDataToSubmit)
        }
    } else {
        formData = collectFormData(formId);
        var mobile = formData.mobile;
        sendOTP(mobile);
        console.log("OTP Sent successfully");
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function sendOTP(mobile) {
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': mobile,
    };
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
        return;
    }
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            $('#Mobile').val(mobile);
            openOTPModal();
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function openOTPModal() {
    $('#get_OTP_btn').modal('show');
}

function verifyotp(formId) {
    var mobile = document.getElementById('Mobile').value;
    var otp = document.getElementById('otp').value;

    var paraArr = {
        'otp': otp,
        'mobile': mobile,
        'enquiry_type_id': formData.enquiry_type_id,
        'first_name': formData.first_name,
        'last_name': formData.last_name,
        'state': formData.state,
        'district': formData.district,
        'tehsil': formData.tehsil,
        'product_id': formData.product_id,
        'model': formData.model,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn').modal('hide');
            submitData(formId); 
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            // Handle errors here
        },
    });
}

function submitData(formId) {
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    var formDataToSubmit = formData;
    
    // If user is logged in, use formData from parameter directly
    if (isUserLoggedIn()) {
        formDataToSubmit = collectFormData(formId);
    }
    
    if (!formDataToSubmit.enquiry_type_id || !formDataToSubmit.mobile) {
        console.error('Required fields are missing.');
        return;
    }
    $.ajax({
        url: url,
        type: "POST",
        data: formDataToSubmit, // Submit all form data
        
        success: function (result) {
            console.log(result, "result");
            var msg = "Added successfully !";
            
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');

            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            // openSellerContactModal(formDataToSubmit);
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            // Handle errors here
        }
    });
}


function collectFormData(formId) {
    var product_id = $(`#${formId} #product_id`).val();
    var product_type_id = $(`#${formId} #product_type_id`).val(); 
    var firstName = $(`#${formId} #firstName`).val();
    var lastName = $(`#${formId} #lastName`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district`).val();
    var Tehsil = $(`#${formId} #Tehsil`).val();
    var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();

    var formData = {
        'product_id': product_id,
        'product_type_id': product_type_id,
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
        'enquiry_type_id': enquiry_type_id,
    };

    return formData;
}

function getUserDetail(id, formId) {
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
                
                // Set values based on formId
                $('#' + formId + ' #firstName').val(customer.first_name);
                $('#' + formId + ' #lastName').val(customer.last_name);
                $('#' + formId + ' #mobile_number').val(customer.mobile);
                $('#' + formId + ' #state').val(customer.state_id);
                // $('#' + formId + ' #district').val(customer.district);
                // $('#' + formId + ' #Tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#district ,#Tehsil').prop('disabled', true).prop('disabled', true);
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


function getusedTractorList() {
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('brand_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
    console.log(url);

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'xyz');
            var productContainer2 = $("#productContainer2");
            var used_tractor = $("#used_tractor");
            var viewAllButton = $("#view_all_used_tractor"); // Get the view all button by ID

            if (data.product && data.product.length > 0) {
                var brandid = [];
                for (var j = 0; j < data.product.length; j++) {
                    if (data.product[j].brand_id == Id) {
                        var model = data.product[j].brand_name;
                    }
                }
                brandid.push(model);
                var used_tractor_heading = `<h3 class="mb-0 py-4 text-uppercase">Used ${brandid[0]} Tractors</h3>`;
                used_tractor.append(used_tractor_heading);

                var cardCount = 0;
                data.product.forEach(function(p) {
                    if (p.brand_id == Id) {
                        var images = p.image_names;
                        var a = [];
                        if (images) {
                            if (images.indexOf(',') > -1) {
                                a = images.split(',');
                            } else {
                                a = [images];
                            }
                        }

                        var newCard2 = `
                        <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3 mt-4">
                            <div class="h-auto success__stry__item box_shadow b-t-1">
                                <div class="thumb">
                                    <a href="farmtrac_60.php?product_id=${p.customer_id}">
                                        <div class="p-3 ratio ratio-16x9">
                                            <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover  "  alt="img">
                                        </div>
                                    </a>
                                </div>
                                <div class="content d-flex flex-column flex-grow-1 mx-3">
                                    <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-decoration-none text-dark">
                                        <h4 class=" mt-3" style="font-size: 20px;">${p.brand_name} ${p.model}</h4>
                                    </a>
                                    <p class="mb-1">${p.district_name}, ${p.state_name}</p>
                                    <div class="row mt-1 w-100 mx-auto">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 ps-0">
                                            <p class="mb-1"> <i class="fas fa-bolt"></i> ${p.hp_category} HP</p>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 pe-0">
                                            <button class="btn btn-success p-1" style=" font-size: 12px;  text-align: right; float: right; ">Great Deal <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-dark flex-grow-1 text-decoration-none">
                                        <p>Price: ₹ ${p.price}*</p>
                                    </a>
                                </div>
                            </div>
                        </div>`;

                        // Append the new card to the container if less than 4 cards
                        if (cardCount < 4) {
                            productContainer2.append(newCard2);
                            cardCount++;
                        }
                    }
                });

                // If there are more than 4 cards and the "View All" button exists, show it
                if (data.product.length > 4 && viewAllButton.length > 0) {
                    viewAllButton.show();
                }
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
showOverlay(); 
function populateDropdowns(identifier) {
    var stateDropdowns = document.querySelectorAll(`#${identifier} .state-dropdown`);
    var districtDropdowns = document.querySelectorAll(`#${identifier} .district-dropdown`);
    var tehsilDropdowns = document.querySelectorAll(`#${identifier} .tehsil-dropdown`);

    $.get('http://tractor-api.divyaltech.com/api/customer/state_data', function(stateDataResponse) {
        var stateData = stateDataResponse.stateData;
        var selectYourStateOption = '<option value="">Select Your State</option>';
        var stateOptions = stateData
            .map(state => `<option value="${state.id}">${state.state_name}</option>`)
            .join('');

        stateDropdowns.forEach(function (dropdown) {
            dropdown.innerHTML = selectYourStateOption + stateOptions;

            // Add event listener to state dropdown to fetch district data
            dropdown.addEventListener('change', function() {
                var selectedStateId = this.value;
                var districtSelect = this.closest('.row').querySelector('.district-dropdown');
                districtSelect.innerHTML = '<option value="">Please select a district</option>';
                if (selectedStateId) {
                    $.get(`http://tractor-api.divyaltech.com/api/customer/get_district_by_state/${selectedStateId}`, function(data) {
                        data.districtData.forEach(district => {
                            districtSelect.innerHTML += `<option value="${district.id}">${district.district_name}</option>`;
                        });
                    });
                }
            });
        });

        districtDropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('change', function() {
                var selectedDistrictId = this.value;
                var tehsilSelect = this.closest('.row').querySelector('.tehsil-dropdown');
                if (selectedDistrictId) {
                    $.get(`http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/${selectedDistrictId}`, function(data) {
                        tehsilSelect.innerHTML = '<option value="">Please select a tehsil</option>';
                        data.tehsilData.forEach(tehsil => {
                            tehsilSelect.innerHTML += `<option value="${tehsil.id}">${tehsil.tehsil_name}</option>`;
                        });
                    });
                } else {
                    tehsilSelect.innerHTML = '<option value="">Please select a district first</option>';
                }
            });
        });
    });
}

