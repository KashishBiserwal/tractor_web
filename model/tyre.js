$(document).ready(function() {
    console.log("ready!");
    $('#filter_tractor').click(filter_search); 
    getTractorList();
    showOverlay(); 
});

function showOverlay() {
    $("#overlay").fadeIn(300);
}
function hideOverlay() {
    $("#overlay").fadeOut(300);
}
function getTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/tyre_data";

    var totalTyre = 0;
    var displayedTractors = 0;
    var tractorsPerPage = 6;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");

            if (data.tyre_details && data.tyre_details.length > 0) {
                totalTyre = data.tyre_details.length;

                // Display the initial set of tractors
                displayTractors(data.tyre_details.slice(0, tractorsPerPage));
                displayedTractors += tractorsPerPage;

                if (totalTyre > tractorsPerPage) {
                    $("#load_moretract").show();
                }

                $("#load_moretract").click(function() {
                    var endIndex = displayedTractors + tractorsPerPage;
                    if (endIndex > totalTyre) {
                        endIndex = totalTyre;
                    }
                    displayTractors(data.tyre_details.slice(displayedTractors, endIndex));
                    displayedTractors += tractorsPerPage;

                    if (displayedTractors >= totalTyre) {
                        $("#load_moretract").hide();
                    }
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        },
        complete: function () {
            hideOverlay();
        },
    });
}

function displayTractors(tractors) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");

    tractors.forEach(function(p) {
        var images = p.image_names;
    var a = [];

    if (images) {
        if (images.indexOf(',') > -1) {
            a = images.split(',');
        } else {
            a = [images];
        }
    }
        var cardId = `card_${p.id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.id}`; // Dynamic ID for the modal
        var formId = `contact-seller-call_${p.id}`; 
        var userId = localStorage.getItem('id');
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3" id="${cardId}">
            <div class="h-auto success__stry__item d-flex flex-column shadow tyre_card">
                <div class="thumb" style="width: 100%; height: 200px; overflow: hidden;">
                    <a href="tyre_inner.php?product_id=${p.id}">
                    <img src="https://shopninja.in/bharatagri/api/public/uploads/tyre_img/${a[0]}" class="object-fit-cover" style="width: 100%; height: auto;" alt="" loading="lazy">
                       
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1">
                    <div class="caption text-center">
                        <a href="tyre_inner.php?product_id=${p.id}" class="text-decoration-none text-dark">
                            <p class="pt-3 text-truncate"><strong class="series_tractor_strong h6 fw-bold"> ${p.brand_name} ${p.tyre_model}</strong></p>
                        </a>
                    </div>
                    <div class="power">
                        <a href="tyre_inner.php" class="text-decoration-none text-dark">
                            <div class="col-12 px-3">
                                <div class="row ">
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details p-1">
                                        <p class="text-dark" style="text-transform:uppercase; font-weight:bolder"> ${p.tyre_position}</p>
                                    </div>
                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details p-1">
                                        <p id="adduser" type="" class="text-dark">${p.tyre_size}</p>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12  engineoil_details p-1">
                                        <p class="text-dark ">Compatible with: <span style="text-transform:uppercase; font-weight:bolder">${p.tyre_category}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                            <i class="fa-regular fa-handshake"></i> Get on Road Price
                        </button>
                    </div>
                </div>
            </div> 
                    <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header modal_head">
                                    <h5 class="modal-title text-white ms-1" id="">Generate Enquiry</h5>
                                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                        </div>
                                        <!-- MODAL BODY -->
                                        <div class="modal-body">
                                            <form id="${formId}" method="POST" onsubmit="return false">
                                                <div class="row">
                                                    <div class="row px-3 ">
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="10" name="fname">
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                            <label for="name" class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i> product_id</label>
                                                            <input type="text" class="form-control" id="id" value="${p.id}"> 
                                                        </div>
                                                    
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                            <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                            <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                                        
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label for="state_form" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                                            <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                            <label for="district_form" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                            <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="tehsil" class="form-label text-dark"> Tehsil</label>
                                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" name="tehsil" id="tehsil">
                                                        </select>
                                                    </div>
                                                </div>          
                                                </div>
                                                <div class="modal-footer mt-3">
                                                    <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
                                                    data-bs-dismiss="modal">Submit</button>
                                                </div>      
                                            </form>                             
                                        </div>
                                    </div>
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
        </div> `;
    
       productContainer.append(newCard);
    });
}

var formData = {};

function savedata(formId) {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitData(formId);
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
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_login";
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

    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
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
        },
    });
}

function submitData(formId) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_enquiries";
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
        data: formDataToSubmit, 
        success: function (result) {
            console.log(result, "result");
            var msg = "Added successfully !";
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
        }
    });
}

function collectFormData(formId) {
    var first_name = $(`#${formId} #fname`).val();
    var product_id = $(`#${formId} #id`).val();
    var last_name = $(`#${formId} #lname`).val();
    var mobile = $(`#${formId} #number`).val();
    var state = $(`#${formId} #state_form`).val();
    var district = $(`#${formId} #district_form`).val();
    var tehsil = $(`#${formId} #tehsil`).val();
    var enquiry_type_id =$(`#${formId} #enquiry_type_id`).val();

    var formData = {
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'product_id':product_id,
        'enquiry_type_id':enquiry_type_id,
    };

    return formData;
}

function getUserDetail(id, formId) {
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
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                
                $('#' + formId + ' #fname').val(customer.first_name);
                $('#' + formId + ' #lname').val(customer.last_name);
                $('#' + formId + ' #number').val(customer.mobile);
                // $('#' + formId + ' #state_form').val(customer.state_id);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#state_form,#price,#district_form,#tehsil').prop('disabled', true);
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

function getBrand() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_tyre_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); 
            // Loop through the data and add checkboxes
            $.each(data.brands, function (index, brand) {
                var brand_id = brand.id;
                var brand_name = brand.brand_name;
                var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 brand_checkbox" value="' + brand_id + '"/>' +
                    '<span class="ps-2 fs-6">' + brand_name + '</span> <br/>';
                checkboxContainer.append(checkboxHtml);
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
getBrand();

var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

function filter_search() {
    var checkboxestype = $(".chechbox-position-tyre:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");
    var selectedtype = checkboxestype.map(function() {
        return $(this).val();
    }).get();
    var selectedBrand = checkboxesBrand.map(function() {
        return $(this).val();
    }).get();
    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'tyre_position': JSON.stringify(selectedtype),
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/tyre_filter';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();
            filteredCards = searchData.tyreData;
            if (filteredCards.length > 0) {
                filterAndDisplayCards();
                $("#noDataMessage").hide();
                $("#load_moretract").hide();

            } else {
                $("#noDataMessage").show();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error searching for blog details:', errorThrown);
            if (jqXHR.status === 404) {
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#load_moretract").hide();

            }
        }
    });
}
function displayFilteredCards() {
    var productContainer = $("#productContainer");
    cardsDisplayed = 0; 
    filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (filter) {
        appendFilterCard(productContainer, filter);
        cardsDisplayed++;
    });
    if (cardsDisplayed >= filteredCards.length) {
        $("#loadMoreBtn").hide();
    }
}

$(document).on('click', '#loadMoreBtn', function () {
    var productContainer = $("#productContainer");
    filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (filter) {
        appendFilterCard(productContainer, filter);
        cardsDisplayed++;
    });
    if (cardsDisplayed >= filteredCards.length) {
        $("#loadMoreBtn").hide();
    }
});

function appendFilterCard(filterContainer, p) {
    var images = p.image_names;
    var a = [];
    if (images) {
        if (images.indexOf(',') > -1) {
            a = images.split(',');
        } else {
            a = [images];
        }
    }
    var cardId = `card_${p.id}`; 
    var modalId = `used_tractor_callbnt_${p.id}`; 
    var formId = `contact-seller-call_${p.id}`; 
    var userId = localStorage.getItem('id');
    var newCard = `
    <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3" id="${cardId}">
        <div class="h-auto success__stry__item d-flex flex-column shadow tyre_card">
            <div class="thumb">
                <a href="tyre_inner.php?product_id=${p.id}">
                <img src="https://shopninja.in/bharatagri/api/public/uploads/tyre_img/${a[0]}" class="object-fit-cover text-truncate" alt="" loading="lazy">
                   
                </a>
            </div>
            <div class="content d-flex flex-column flex-grow-1 contant-justify-center">
                <div class="caption contant-justify-center">
                    <a href="tyre_inner.php?product_id=${p.id}" class="text-decoration-none text-dark">
                        <p class="pt-3"><strong class="series_tractor_strong text-center h6 fw-bold  text-truncate "> ${p.brand_name} ${p.tyre_model}</strong></p>
                    </a>
                </div>
                <div class="power">
                    <a href="tyre_inner.php" class="text-decoration-none text-dark">
                        <div class="col-12 px-3">
                            <div class="row ">
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details pe-1">
                                    <p class="text-dark" style="text-transform:uppercase; font-weight:bolder"> ${p.tyre_position}</p>
                                </div>
                                <div class="col-6 col-lg-6 col-md-6 col-sm-6  engineoil_details ps-1">
                                    <p id="adduser" type="" class="text-dark">${p.tyre_size}</p>
                                </div>
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12  engineoil_details">
                                    <p class="text-dark ">Compatible with: <span style="text-transform:uppercase; font-weight:bolder">${p.tyre_category}</span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Get on Road Price
                    </button>
                </div>
            </div>
        </div> 
                <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header modal_head">
                                <h5 class="modal-title text-white ms-1" id="">Generate Enquiry</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="row px-3 ">
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="10" name="fname">
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                        <label for="name" class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i> product_id</label>
                                                        <input type="text" class="form-control" id="id" value="${p.id}"> 
                                                    </div>
                                                
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                        <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                                    </div>
                                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                        <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                        <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                                        
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label for="yr_state" class="form-label text-dark fw-bold" id="state" name="state"> <i class="fas fa-location"></i> State</label>
                                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                        <label class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label class="form-label text-dark"> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" name="tehsil" id="tehsil">
                                                    </select>
                                                </div>
                                            </div>          
                                            </div>
                                            <div class="modal-footer mt-3">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
                                                data-bs-dismiss="modal">Submit</button>
                                            </div>      
                                        </form>                             
                                    </div>
                                </div>
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
    </div>`;
    filterContainer.append(newCard);
}
function filterAndDisplayCards() {
    var productContainer = $("#productContainer");
    productContainer.empty(); 
    cardsDisplayed = 0;
    filteredCards.forEach(function(filter) {
        appendFilterCard(productContainer, filter);
        cardsDisplayed++;
    });
    if (cardsDisplayed >= filteredCards.length) {
        $("#loadMoreBtn").hide();
    }
}
function resetform(){
    $('.chechbox-position-tyre').val('');
    $('.brand_checkbox').val('');
    $('.chechbox-position-tyre:checked').prop('checked', false);
    $('.brand_checkbox:checked').prop('checked', false);
    window.location.reload();
  }
  function populateDropdowns(identifier) {
    var stateDropdowns = document.querySelectorAll(`#${identifier} .state-dropdown`);
    var districtDropdowns = document.querySelectorAll(`#${identifier} .district-dropdown`);
    var tehsilDropdowns = document.querySelectorAll(`#${identifier} .tehsil-dropdown`);
    $.get('https://shopninja.in/bharatagri/api/public/api/customer/state_data', function(stateDataResponse) {
        var stateData = stateDataResponse.stateData;
        var selectYourStateOption = '<option value="">Select Your State</option>';
        var stateOptions = stateData
            .map(state => `<option value="${state.id}">${state.state_name}</option>`)
            .join('');
        stateDropdowns.forEach(function (dropdown) {
            dropdown.innerHTML = selectYourStateOption + stateOptions;

            dropdown.addEventListener('change', function() {
                var selectedStateId = this.value;
                var districtSelect = this.closest('.row').querySelector('.district-dropdown');
                districtSelect.innerHTML = '<option value="">Please select a district</option>';
                if (selectedStateId) {
                    $.get(`https://shopninja.in/bharatagri/api/public/api/customer/get_district_by_state/${selectedStateId}`, function(data) {
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
                    $.get(`https://shopninja.in/bharatagri/api/public/api/customer/get_tehsil_by_district/${selectedDistrictId}`, function(data) {
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