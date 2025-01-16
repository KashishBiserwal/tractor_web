$(document).ready(function() {
    var allCards = [];
    $('#apply_filter_bnt').click(filter_search);
    college_details_list(allCards);
function college_details_list(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/agriculture_data';
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_more");
            if (data.colleges_data && data.colleges_data.length > 0) {
                var reversedCards = data.colleges_data.slice().reverse();
                allCards = allCards.concat(reversedCards);
                displayagriculturecollege(productContainer, reversedCards.slice(0, 6).reverse());
                loadMoreButton.show();
                loadMoreButton.click(function() {
                    displayagriculturecollege(productContainer, allCards.reverse());
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        },
        complete: function () {
         
        },
    });
}
    function displayagriculturecollege(container, nursery) {
        container.html('');
        nursery.forEach(function (p) {
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
            var modalId = `nursery_callbnt_${p.id}`;
            var formId = `nursery_enquiry_form_${p.id}`; 
            var userId = localStorage.getItem('id');
            var newCard = `
                <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
                    <a href="agriculture_inner.php?id=${p.id}"
                        class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                        <div class="thumb">
                            <div>
                                <div class="ratio ratio-16x9">
                                    <img src="http://tractor-api.divyaltech.com/uploads/agricultureclg_img/${a[0]}" class="object-fit-cover" loading="lazy" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="content d-flex flex-column flex-grow-1 ">
                            <div class="power text-center mt-3">
                                <div class="col-12">
                                    <p class="text-success fw-bold text-truncate">${p.college_name}</p>
                                </div>
                                <div class="col-12 mt-1">
                                    <p class="text-dark fw-bold text-truncate"><span>Contact No.-</span> ${p.mobile}</p>
                                </div>
                            </div>
                            <div class="row text-center mt-2">
                                <div class="col-12 text-center">
                                    <p class="fw-bold pe-3 text-truncate text-dark">${p.district_name}, ${p.state_name}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-12 btn-success">
                        <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                            <i class="fa-regular fa-handshake"></i> Contact Now
                        </button>
                    </div>
            
                    <!-- Modal -->
                    <div class="modal fade" id="${modalId}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header  modal_head">
                            <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.college_name}</h5>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                          </div>
                                <div class="modal-body">
                                    <div class="model-cont">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="27" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>product_id</label>
                                                    <input type="text" class="form-control" id="product_id" value="${p.id}"> 
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-outline">
                                                        <label for="f_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="first_name_1" name="firstName">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="form-outline">
                                                        <label for="last_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                        <input type="text" class="form-control mb-0" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)"  id="last_Name_1" name="lastName">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="eo_number" class="form-label fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                        <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number_1" name="mobile_number">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="state_1" class="form-label fw-bold"> <i class="fas fa-location"></i> State</label>
                                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_1" name="state">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="district_1" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_1" name="district">
                                                        </select>
                                                    </div>                    
                                                </div>       
                                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                    <div class="form-outline">
                                                        <label for="Tehsil_1" class="form-label fw-bold "> Tehsil</label>
                                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil_1" name="Tehsil">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                                <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                            </div>
                                            </div>
                                        </form>
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
            container.prepend(newCard);
           
        });
    }
    });
    
    function resetForm(formId) {
        document.getElementById(formId).reset();
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
            'nursery_name': formData.nursery_name,
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
            },
        });
    }
    
    function submitData(formId) {
        var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
        var formDataToSubmit = formData;
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
        // Collect form data
        var mobile = $(`#${formId} #mobile_number_1`).val();
        var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
        var product_id = $(`#${formId} #product_id`).val();
        var first_name = $(`#${formId} #first_name_1`).val();
        var last_name = $(`#${formId} #last_Name_1`).val();
        var state = $(`#${formId} #state_1`).val();
        var district = $(`#${formId} #district_1`).val();
        var tehsil = $(`#${formId} #Tehsil_1`).val();
        var nursery_name = $(`#${formId} #nursery_name`).val();
    
        var formData = {
            'enquiry_type_id': enquiry_type_id,
            'product_id': product_id,
            'first_name': first_name,
            'last_name': last_name,
            'mobile': mobile,
            'state': state,
            'district': district,
            'tehsil': tehsil,
            'nursery_name': nursery_name,
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
                    $('#' + formId + ' #first_name_1').val(customer.first_name);
                    $('#' + formId + ' #last_Name_1').val(customer.last_name);
                    $('#' + formId + ' #mobile_number_1').val(customer.mobile);
                    // $('#' + formId + ' #state_1').val(customer.state_id);
                    // $('#' + formId + ' #district_1').val(customer.district);
                    // $('#' + formId + ' #Tehsil_1').val(customer.tehsil);
                    
                    // Disable fields if user is logged in
                    if (isUserLoggedIn()) {
                        $('#' + formId + ' input, #' + formId + ' select').not('#price,#district_1,#state_1,#Tehsil_1').prop('disabled', true);
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

    var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

// Function to perform search/filter action
function filter_search() {
    var select_state = $(".state_checkbox:checked");
    var select_district = $(".district_checkbox:checked");

    var selectedCheckboxValues = select_state.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues2 = select_district.map(function () {
        return $(this).val();
    }).get();


    var paraArr = {
        'state': JSON.stringify(selectedCheckboxValues),
        'district': JSON.stringify(selectedCheckboxValues2),
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/agriculture_filter';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();

            filteredCards = searchData.college_data;

            cardsDisplayed = 0;

            appendFilterCard(filterContainer, searchData);
            $("#load_more").hide();
            $("#noDataMessage").hide();
            $("#noDataMessage img").hide();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error searching for brands:', errorThrown);

            if (jqXHR.status === 400 || jqXHR.status === 404) { // Corrected logical OR operator
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#noDataMessage img").show();
                $("#load_more").hide();
            }
        },
        complete: function () {
            hideOverlay();
        },
    });
}

function appendFilterCard(filterContainer, filter) {
    console.log("Filter:", filter); // Debugging: Check filter data
    function appendCard(container, p) {
        var data = p.haat_bazar_id;
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
        var modalId = `nursery_callbnt_${p.id}`;
        var formId = `nursery_enquiry_form_${p.id}`; 
        var userId = localStorage.getItem('id');
        var newCard = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
                <a href="agriculture_inner.php?id=${p.id}"
                    class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                    <div class="thumb">
                        <div>
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/agricultureclg_img/${a[0]}" class="object-fit-cover" loading="lazy" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="power text-center mt-3">
                            <div class="col-12">
                                <p class="text-success fw-bold text-truncate">${p.college_name}</p>
                            </div>
                        </div>
                        <div class="row text-center mt-2">
                            <div class="col-12 text-center">
                                <p class="fw-bold pe-3 text-truncate text-dark">${p.district_name}, ${p.state_name}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-12 btn-success">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Contact Now
                    </button>
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="${modalId}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header  modal_head">
                        <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.college_name}</h5>
                        <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                      </div>
                            <div class="modal-body">
                                <div class="model-cont">
                                    <form id="${formId}" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="27" name="fname">
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>product_id</label>
                                                <input type="text" class="form-control" id="product_id" value="${p.id}"> 
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-outline">
                                                    <label for="f_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="first_name_1" name="firstName">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-outline">
                                                    <label for="last_name" class="form-label fw-bold"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control mb-0" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)"  id="last_Name_1" name="lastName">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="eo_number" class="form-label fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                                    <input type="text" class="form-control mb-0" placeholder="Enter Number" id="mobile_number_1" name="mobile_number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="state_1" class="form-label fw-bold"> <i class="fas fa-location"></i> State</label>
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_1" name="state">
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="district_1" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_1" name="district">
                                                    </select>
                                                </div>                    
                                            </div>       
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="Tehsil_1" class="form-label fw-bold "> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil_1" name="Tehsil">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                            <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
                                        </div>
                                        </div>
                                    </form>
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

        `;
    container.append(newCard);
}

// Extract haat_bazar_data from the filter object
var haat_bazar_data = filter.college_data;

console.log("Filtered Data:", haat_bazar_data); // Debugging: Check filtered data

// Display filtered cards
if (haat_bazar_data && haat_bazar_data.length > 0) {
    var productContainer = $("#productContainer");
    haat_bazar_data.forEach(function(p) {
        appendCard(productContainer, p);
    });
} else {
    // Handle case when no data is available
    console.log("No data available to display.");
}
}
function resetform(){
    $('.state_state').val('');
    $('.get_dist').val('');
    $('.state_state:checked').prop('checked', false);
    $('.get_dist:checked').prop('checked', false);
    
    filter_search();
    window.location.reload();
    
  }

  function getState() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';

    // Fetch states data
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("State data:", data);

            const checkboxContainer = $('#state_state');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            // Loop through all states and display them as radio buttons
            if (data && data.stateData && data.stateData.length > 0) {
                data.stateData.forEach(state => {
                    const checkboxHtml = `
                        <div class="mt-1">
                            <input type="radio" 
                                   class="checkbox-round state_checkbox"  name="state" value="${state.id}" 
                                   id="state_${state.id}">
                            <label for="state_${state.id}" class="ms-2 fs-6 text-dark">
                                ${state.state_name}
                            </label>
                        </div>`;
                    checkboxContainer.append(checkboxHtml);
                });

                // Add event listeners to state radio buttons
                $('.state_checkbox').on('change', function () {
                    const stateId = $(this).val();
                    ge_tDistricts(stateId); // Fetch districts for the selected state
                });
            } else {
                checkboxContainer.append('<p>No states available.</p>');
            }
        },
        error: function (error) {
            console.error('Error fetching state data:', error);
        }
    });
}

function ge_tDistricts(stateId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;

    // Fetch districts data
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(`District data for state ID ${stateId}:`, data);

            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes

            if (data && data.districtData && data.districtData.length > 0) {
                // Loop through and display districts as checkboxes
                data.districtData.forEach(district => {
                    const checkboxHtml = `
                        <div class="mt-1">
                            <input type="checkbox" 
                                   class="checkbox-round district_checkbox" 
                                   value="${district.id}" 
                                   id="district_${district.id}">
                            <label for="district_${district.id}" class="ms-2 fs-6">
                                ${district.district_name}
                            </label>
                        </div>`;
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.append(`<p>No districts available for state ID: ${stateId}</p>`);
            }
        },
        error: function (error) {
            console.error(`Error fetching districts for state ID ${stateId}:`, error);
        }
    });
}

// Initialize states and setup
getState();



