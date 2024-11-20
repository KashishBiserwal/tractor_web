$(document).ready(function() {
    var allCards = [];
    $('#filter_button').click(filter_search);
    nursery_details_list(allCards);
    showOverlay(); 
    $("#nursery_enquiry_form").validate({
        rules: {
            product_id: {
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
            },
            district: {
                required: true,
                
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
            nursery_enquiry();
        }
    });

    function showOverlay() {
        $("#overlay").fadeIn(300);
    }
    
    function hideOverlay() {
        $("#overlay").fadeOut(300);
    }

    function nursery_details_list(allCards) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_data';
    
        $.ajax({
            url: url,
            type: "GET",
            success: function(data) {
                var productContainer = $("#productContainer");
                var loadMoreButton = $("#loadMoreBtn");
            
                // document.getElementById('mob_num').value = data.nursery_data[0].mobile;
                if (data.nursery_data && data.nursery_data.length > 0) {
                    // Reverse the order of the cards to display the latest ones first
                    var reversedCards = data.nursery_data.slice().reverse();
                    
                    // Update the list of all cards
                    allCards = allCards.concat(reversedCards);
                    
                    // Display the latest 9 cards at the top in the opposite order
                    displaynursery(productContainer, reversedCards.slice(0, 6).reverse());
    
                    // Show the "View All" button
                    loadMoreButton.show();
    
                    // Handle "View All" button click
                    loadMoreButton.click(function() {
                        // Display all cards in the opposite order
                        displaynursery(productContainer, allCards.reverse());
                        // Hide the "View All" button
                        loadMoreButton.hide();
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

    

        function displaynursery(container, nursery) {
            // Clear existing content
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
        var modalId_2 = `staticBackdrop_${p.id}`; 
        var formId = `nursery_enquiry_form_${p.id}`; 
        var fullname = p.first_name + ' ' + p.last_name;
        var userId = localStorage.getItem('id');
        var newCard = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
                <a href="nursery_inner.php?id=${p.id}"
                    class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                    <div class="thumb">
                        <div>
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/nursery_img/${a[0]}" class="object-fit-cover " alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="power text-center mt-3">
                            <div class="col-12">
                                <p class="text-success fw-bold text-truncate">${p.nursery_name}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12 text-center">
                                <p class="fw-bold pe-3 text-truncate">${p.district_name}, ${p.state_name}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-12 btn-success">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Contact Nursery
                    </button>
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="${modalId}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header  modal_head">
                                <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Contact Nursery</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body my-3">
                                <div class="model-cont">
                                    <form id="${formId}" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="11" name="fname">
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>product_id</label>
                                                <input type="text" class="form-control" id="product_id" value="${p.id}"> 
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Nursery name</label>
                                            <input type="text" class="form-control" id="nursery_name" value="${p.nursery_name}"> 
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
                                                    <label for="eo_state" class="form-label fw-bold"> <i class="fas fa-location"></i> State</label>
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_1" name="state">
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="eo_dist" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_1" name="district">
                                                       
                                                    </select>
                                                </div>                    
                                            </div>       
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="eo_tehsil" class="form-label fw-bold "> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil_1" name="Tehsil">
                                                        
                                                    </select>
                                                </div>
                                            </div>
        
                                            <div class="text-center my-3">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>        
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
        
            <div class="modal fade" id="${modalId_2}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Nursery Contact Seller</h5>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"class="w-25"></button>
                        </div>
                        <div class="modal-body">
                            <div class="model-cont">
                                <h4 class="text-center text-danger">Nursery Seller Information</h3>
                                <div class="row px-3 py-2">
                                    <div class="col-12  col-sm-12 col-md-6 col-lg-6 ">
                                        <label for="slr_name"class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i>Nursery Seller Name</label>
                                        <input type="text" class="form-control" id="saller_name" value="${fullname}">
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
            </div>

        `;
        
        
        container.prepend(newCard);
       
    });
}
});

function resetForm(formId) {
    // Reset the form by using its ID
    document.getElementById(formId).reset();
}


var formData = {};

function savedata(formId) {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitData(formId);
            openSellerContactModal(formDataToSubmit)
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
            submitData(formId); // Submit the form after OTP verification
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
            openSellerContactModal(formDataToSubmit);
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

function openSellerContactModal(formDataToSubmit) {
    var modalId_2 = `staticBackdrop_${formDataToSubmit.product_id}`;
    $(`#${modalId_2}`).modal('show');
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
                $('#' + formId + ' #state_1').val(customer.state_id);
                // $('#' + formId + ' #district_1').val(customer.district);
                // $('#' + formId + ' #Tehsil_1').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#price,#district_1,#Tehsil_1').prop('disabled', true);
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

function getState() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("State data:", data);

            const checkboxContainer = $('#state_state');
            checkboxContainer.empty(); 
            if (data.stateData && data.stateData.length > 0) {
                data.stateData.forEach(state => {
                    var checkboxHtml = `
                        <input type="radio" class="checkbox-round mt-1 ms-3 state_checkbox" 
                               name="state" value="${state.id}" id="state_${state.id}" />
                        <label for="state_${state.id}" class="ps-2 fs-6 text-dark">${state.state_name}</label>
                        <br/>`;
                    checkboxContainer.append(checkboxHtml);
                });

                // Placeholder for districts
                const districtContainer = $('#get_dist');
                districtContainer.empty();
                districtContainer.append('<p></p>');

                // Add event listeners to state checkboxes
                $('.state_checkbox').on('change', function () {
                    const stateId = $(this).val();
                    if (stateId) {
                        ge_tDistricts(stateId);
                    }
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
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log("District data for state ID " + stateId + ":", data);

            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes

            if (data && data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    var checkboxHtml = `
                        <input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" 
                               value="${district.id}" id="district_${district.id}" />
                        <label for="district_${district.id}" class="ps-2 fs-6">${district.district_name}</label>
                        <br/>`;
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.append('<p>No districts available for the selected state.</p>');
            }
        },
        error: function (error) {
            console.error('Error fetching districts for state ID ' + stateId + ':', error);
        }
    });
}

// Initial call to fetch and display all states
getState();


var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6;

function filter_search() {
    var checkboxesState = $(".state_checkbox:checked");
    var checkboxesdist = $(".district_checkbox:checked");

    var selectedState = checkboxesState.map(function () {
        return $(this).val();
    }).get();
    var selectedDistrict = checkboxesdist.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'state': JSON.stringify(selectedState),
        'district': JSON.stringify(selectedDistrict),
    };

    console.log(paraArr);

    var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_filter';
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

            if (searchData.nursery_data.length > 0) {
                searchData.nursery_data.forEach(function (filter) {
                    appendFilterCard(filterContainer, filter);
                });
                $("#noDataMessage").hide();
                $("#noDataMessage img").hide();
                $("#loadMoreBtn").hide(); // Hide the load more button when filtered data is displayed
            } else {
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#noDataMessage img").show();
                $("#loadMoreBtn").hide();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error searching for brands:', errorThrown);

            if (jqXHR.status === 400 || jqXHR.status === 404) { // Corrected logical OR operator
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#noDataMessage img").show();
                $("#loadMoreBtn").hide();
            }
        }
    });
}
function appendFilterCard(filterContainer, filter) {
    function appendCard(container, p) {
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
        var modalId_2 = `staticBackdrop_${p.id}`; 
        var formId = `nursery_enquiry_form_${p.id}`; 
        var fullname = p.first_name + ' ' + p.last_name;
        var userId = localStorage.getItem('id');
        var newCard = `
            <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
                <a href="nursery_inner.php?id=${p.id}"
                    class="h-auto success__stry__item text-decoration-none d-flex flex-column shadow ">
                    <div class="thumb">
                        <div>
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/nursery_img/${a[0]}" class="object-fit-cover " alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1 ">
                        <div class="power text-center mt-3">
                            <div class="col-12">
                                <p class="text-success fw-bold text-truncate">${p.nursery_name}</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-12 text-center">
                                <p class="fw-bold pe-3 text-truncate">${p.district_name}, ${p.state_name}</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col-12 btn-success">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Contact Nursery
                    </button>
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="${modalId}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header  modal_head">
                                <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Contact Nursery</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body my-3">
                                <div class="model-cont">
                                    <form id="${formId}" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                                <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="11" name="fname">
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>product_id</label>
                                                <input type="text" class="form-control" id="product_id" value="${p.id}"> 
                                            </div>
                                            <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>Nursery name</label>
                                            <input type="text" class="form-control" id="nursery_name" value="${p.nursery_name}"> 
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
                                                    <label for="eo_state" class="form-label fw-bold"> <i class="fas fa-location"></i> State</label>
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_1" name="state">
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="eo_dist" class="form-label fw-bold"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_1" name="district">
                                                       
                                                    </select>
                                                </div>                    
                                            </div>       
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                                <div class="form-outline">
                                                    <label for="eo_tehsil" class="form-label fw-bold "> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil_1" name="Tehsil">
                                                        
                                                    </select>
                                                </div>
                                            </div>
        
                                            <div class="text-center my-3">
                                                <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>        
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
                                        <input type="text" class="form-control" id="saller_name" value="${fullname}">
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
            </div>
        `;
        container.append(newCard);
    }

    function displayNextSet() {
        var productContainer = $("#productContainer");
    
        // Display the next set of filtered cards
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
    
        // Hide the "Load More" button if all filtered cards are displayed
        if (cardsDisplayed >= filteredCards.length) {
            $("#loadMoreBtn").hide();
        }
    }
    
    $(document).on('click', '#loadMoreBtn', function () {
        // Display the next set of filtered cards when the "Load More" button is clicked
        displayNextSet();
    });

    appendCard(filterContainer, filter);
    displayNextSet();
}

  function resetform(){
    $('.select_state').val('');
    $('.select_district').val('');
    $('.select_state:checked').prop('checked', false);
    $('.select_district:checked').prop('checked', false);
    
    filter_search();
    window.location.reload();
    
  }


//   function get() {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log("State data:", data);

//             const checkboxContainer = $('#state_state');
//             checkboxContainer.empty(); // Clear existing checkboxes
            
//             const stateId = 7; // Replace 7 with the desired state ID
//             const filteredState = data.stateData.find(state => state.id === stateId);
//             if (filteredState) {
//                 var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
//                     '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
//                 checkboxContainer.append(checkboxHtml);
//                 // Call getDistricts with the stateId
//                 getDistricts(stateId);
//             } else {
//                 checkboxContainer.html('<p>No valid data available</p>');
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching state data:', error);
//         }
//     });
// }

function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("State data:", data);

            const checkboxContainer = $('#state_state');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            const stateIds = [7, 15, 20, 26, 34]; // Array of State IDs you want to fetch checkboxes for

            stateIds.forEach(stateId => {
                const filteredState = data.stateData.find(state => state.id === stateId);
                if (filteredState) {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
                        '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
                    checkboxContainer.append(checkboxHtml);
                } else {
                    checkboxContainer.append('<p>No valid data available for state ID: ' + stateId + '</p>');
                }
            });

            // Initially load districts for the first state in stateIds
            if (stateIds.length > 0) {
                ge_tDistricts(stateIds[0]);
            }
        },
        error: function(error) {
            console.error('Error fetching state data:', error);
        }
    });
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
