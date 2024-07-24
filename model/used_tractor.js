

$(document).ready(function() {
    $('#filter_tractor').click(filter_search); 
    getoldTractorList();
    // getDistricts();
    showOverlay(); 
   
});
function showOverlay() {
    $("#overlay").fadeIn(300);
}

function hideOverlay() {
    $("#overlay").fadeOut(300);
}
function formatPriceWithCommas(price) {
    if (isNaN(price)) {
        return price; 
    }
    
    return new Intl.NumberFormat('en-IN').format(price);
}


var cardsPerPage = 6;
var allCards = [];
var cardsDisplayed = 0;

function getoldTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_old_tractor";
    
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            var productContainer = $("#productContainer");
            
            if (data.product && data.product.length > 0) {
                allCards = data.product.slice().reverse();

                allCards.slice(0, cardsPerPage).forEach(function (p) {
                    appendCard(productContainer, p);
                    cardsDisplayed++;
                });

                if (allCards.length > cardsPerPage) {
                    $("#loadMoreBtn").show();
                } else {
                    $("#loadMoreBtn").hide();
                }
            } else {
                $("#loadMoreBtn").hide();
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        },
        complete: function () {
            // Hide the spinner after the API call is complete
            hideOverlay();
        },
    });
}

// Load more button click event
$(document).on('click', '#loadMoreBtn', function() {
    var productContainer = $("#productContainer");
    
    // Display the next set of cards
    allCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function(p) {
        appendCard(productContainer, p);
        cardsDisplayed++; // Update the count of displayed cards
    });

    // Hide the "Load More" button if all cards are displayed
    if (cardsDisplayed >= allCards.length) {
        $("#loadMoreBtn").hide();
    }
});

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
    var cardId = `card_${p.product_id}`; 
    var modalId = `used_tractor_callbnt_${p.product_id}`; 
    var modalId_2 = `staticBackdrop_${p.product_id}`; 
    var formId = `contact-seller-call_${p.product_id}`; 
    var formattedPrice = formatPriceWithCommas(p.price);
    var fullname = p.first_name + ' ' + p.last_name;
    var userId = localStorage.getItem('id');
    var newCard = `
<div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
    <div class="h-auto success__stry__item d-flex flex-column shadow ">
        <div class="thumb">
            <a href="farmtrac_60.php?product_id=${p.customer_id}">
                <div class="ratio ratio-16x9">
                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                </div>
            </a>
        </div>
        <div class="content d-flex flex-column flex-grow-1 ">
            <div class="caption text-center">
                <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-decoration-none text-dark">
                    <p class="pt-3"><strong class="series_tractor_strong text-center text-truncate h6 fw-bold ">${p.brand_name} ${p.model}</strong></p>
                </a>      
            </div>
           <div class=" row text-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold text-truncate contant-justify-center"><span id="engine_powerhp2">${p.brand_name}</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <p class="fw-bold ">Year: <span id="year">${p.purchase_year}</p>
                    </div>
                   
                </div>
               
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold py-2" style="background-image: linear-gradient(315deg, #ddd 0%, #f5f7fa 74%);
                        font-size: 12px; justify-items: center;
                        margin: 0 auto;">Price: ₹<span id="price">${formattedPrice}</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold pe-2 py-2" style="background-image: linear-gradient(315deg, #ddd 0%, #f5f7fa 74%);
                        font-size: 12px; justify-items: center;
                        margin: 0 auto;">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
                    </div>
                </div>
                <div class=" row text-center mt-3">
                    <div class="col-10 justify-center m-auto">
                        <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                    </div>
                </div>
            </div>
            <div class=" row state_btn">
               <div class="col-12">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Contact Seller
                    </button>
                </div>

                        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header  modal_head">
                                    <h5 class="modal-title text-white ms-1" id="model_form">${p.model}</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                    <form id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                            <div class="row px-3 ">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="21" name="fname">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                    <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fname" name="fname">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                                </div>
                                <div class="col-12 ">
                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                            <!-- Options for state dropdown -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                            <!-- Options for district dropdown -->
                                        </select>
                                    </div>
                                </div>       
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                           
                                        </select>
                                    </div>
                                </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                <div class="form-outline mt-4">
                                    <label for="name" class="form-label text-dark">Price </label>
                                    <input type="text" class="form-control price_form py-2" placeholder="Enter Price" id="price_form" name="price">
                                </div>
                              </div>
                            </div>          
                           </div> 
                                 <div class="modal-footer">
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

     $('.price_form').on('input', function() {
            var value = $(this).val().replace(/\D/g, ''); // Remove non-digit characters
            var formattedValue = Number(value).toLocaleString('en-IN'); // Format using Indian numbering system
            $(this).val(formattedValue);
        });

    // Set cursor position to the beginning of each input field
    $('.price_form').each(function() {
        var input = this;
        input.focus();
        input.setSelectionRange(0, 0);
        input.style.textAlign = 'left';
    });
}

function loadMoreCards() {
    var productContainer = $("#productContainer");
    var remainingCards = allCards.slice(cardsDisplayed);
    var cardsToDisplay = remainingCards.slice(0, cardsPerPage); 
    cardsToDisplay.forEach(function (p) {
        appendCard(productContainer, p);
    });
    cardsDisplayed += cardsToDisplay.length;

    if (cardsDisplayed >= allCards.length) {
        $("#loadMoreBtn").hide();
    }
}

$(document).on('click', '#loadMoreBtn', loadMoreCards);

var formData = {};

function savedata(formId) {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitData(formId);
            openSellerContactModal(formDataToSubmit);
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
        'price': formData.price,
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
    var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
    var first_name = $(`#${formId} #fname`).val();
    var last_name = $(`#${formId} #lname`).val();
    var mobile = $(`#${formId} #number`).val();
    var state = $(`#${formId} #state_form`).val();
    var district = $(`#${formId} #district_form`).val();
    var tehsil = $(`#${formId} #tehsil`).val();
    var price = $(`#${formId} #price_form`).val();
    price = price.replace(/[\,\.\s]/g, '');
    var product_id = $(`#${formId} #product_id`).val();
    var model_form = $(`#${formId} #model_form`).val();

    var formData = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'price': price,
        'model': model_form,
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
                $('#' + formId + ' #fname').val(customer.first_name);
                $('#' + formId + ' #lname').val(customer.last_name);
                $('#' + formId + ' #number').val(customer.mobile);
                $('#' + formId + ' #state_form').val(customer.state_id);
                // $('#' + formId + ' #district_form').val(customer.district_id);
                // $('#' + formId + ' #tehsil').val(customer.tehsil_id);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#price_form,#district_form,#tehsil').prop('disabled', true);
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
    
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const checkboxContainer = $('#checkboxContainer');
            checkboxContainer.empty(); // Clear existing checkboxes

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

// function getState() {
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
//                 ge_tDistricts(stateId);
//             } else {
//                 checkboxContainer.html('<p>No valid data available</p>');
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching state data:', error);
//         }
//     });
// }
// function ge_tDistricts(stateId) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + stateId;
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log("District data:", data);
            
//             const checkboxContainer = $('#get_dist');
//             checkboxContainer.empty(); // Clear existing checkboxes
            
//             if (data && data.districtData && data.districtData.length > 0) {
//                 data.districtData.forEach(district => {
//                     var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
//                         '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
//                     checkboxContainer.append(checkboxHtml);
//                 });
//             } else {
//                 checkboxContainer.html('<p>No districts available for this state</p>');
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching districts:', error);
//         }
//     });
// }
// getState();


function getState() {
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
                    var checkboxHtml = '<input type="radio" name="state" class="checkbox-round mt-1 ms-3 state_checkbox" value="' + filteredState.id + '"/>' +
                        '<span class="ps-2 fs-6">' + filteredState.state_name + '</span> <br/>';
                    checkboxContainer.append(checkboxHtml);
                } else {
                    checkboxContainer.append('<p>No valid data available for state ID: ' + stateId + '</p>');
                }
            });

            // Fetch and display all districts initially
            getAllDistricts();

            // Add event listeners to state checkboxes
            $('.state_checkbox').on('change', function() {
                const stateId = $(this).val();
                ge_tDistricts(stateId);
            });
        },
        error: function(error) {
            console.error('Error fetching state data:', error);
        }
    });
}

function getAllDistricts() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_districts';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log("All districts data:", data);
            
            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            if (data && data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                        '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.append('<p>No districts available</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching all districts:', error);
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
        success: function(data) {
            console.log("District data for state ID " + stateId + ":", data);
            
            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); // Clear existing checkboxes
            
            if (data && data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(district => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 district_checkbox" value="' + district.id + '" id="district_' + district.id + '"/>' +
                        '<label for="district_' + district.id + '" class="ps-2 fs-6">' + district.district_name + '</label> <br/>';
                    checkboxContainer.append(checkboxHtml);
                });
            } else {
                checkboxContainer.append('<p>No districts available for state ID: ' + stateId + '</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching districts for state ID ' + stateId + ':', error);
        }
    });
}

getState();

function get_year_and_hours() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            var selectYearContainer = $("#P_year");
            selectYearContainer.empty(); // Clear existing content
            
            // Checkboxes for years
            if (data.getYears && data.getYears.length > 0) {
                // Reverse the array of years to display latest year at the top
                data.getYears.reverse();
                data.getYears.forEach(year => {
                    var checkboxHtml = '<input type="checkbox" class="checkbox-round mt-1 ms-3 year_checkbox" value="' + year + '"/>' +
                        '<span class="ps-2 fs-6">' + year + '</span><br />';
                    selectYearContainer.append(checkboxHtml);
                });
            } else {
                selectYearContainer.html('<p>No years available</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_year_and_hours();

var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 


function formatPrice(price) {
    return parseFloat(price.replace(/,/g, '') || 0);
}

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxesState = $(".state_checkbox:checked");
    var checkboxesdist = $(".district_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");
    var checkboxesYear = $(".year_checkbox:checked");

    var selectedCheckboxValues = checkboxes.map(function() {
        return $(this).val();
    }).get();

    // Modify to handle comma-separated values
    var selectedCheckboxValuesFormatted = selectedCheckboxValues.map(function(value) {
        return value.replace(/,/g, ''); // Remove commas from values
    });

    var selectedState = checkboxesState.map(function() {
        return $(this).val();
    }).get();
    var selectedDistrict = checkboxesdist.map(function() {
        return $(this).val();
    }).get();
    var selectedBrand = checkboxesBrand.map(function() {
        return $(this).val();
    }).get();
    var selectedYear = checkboxesYear.map(function() {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'state': JSON.stringify(selectedState),
        'district': JSON.stringify(selectedDistrict),
        'price_ranges': JSON.stringify(selectedCheckboxValuesFormatted), // Use the modified array here
        // 'horse_power_ranges': JSON.stringify(selectedCheckboxState),
        'purchase_year': JSON.stringify(selectedYear),
    };
 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_old_tractor_by_filter';
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
            filteredCards = searchData.product; 

            if (filteredCards.length > 0) {
                displayFilteredCards();
                $("#noDataMessage").hide();
                $("#loadMoreBtn").hide();
            } else {
                $("#noDataMessage").show();
                $("#loadMoreBtn").hide(); 
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error searching for blog details:', errorThrown);
            // Check if the error status is 404 (Not Found)
            if (jqXHR.status === 404) {
                // Hide all cards and show the "Data not found" message
                $("#productContainer").empty();
                $("#noDataMessage").show();
                $("#noDataMessage").hide();
            }
        },
        complete: function () {
            // Hide the spinner after the API call is complete
            hideOverlay();
        },
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
    var cardId = `card_${p.product_id}`; 
    var modalId = `used_tractor_callbnt_${p.product_id}`; 
    var modalId_2 = `staticBackdrop_${p.product_id}`; 
    var formId = `contact-seller-call_${p.product_id}`; 
    var formattedPrice = formatPriceWithCommas(p.price);
    var fullname = p.first_name + ' ' + p.last_name;
    var userId = localStorage.getItem('id');
    var newCard = `
<div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4" id="${cardId}">
    <div class="h-auto success__stry__item d-flex flex-column shadow ">
        <div class="thumb">
            <a href="farmtrac_60.php?product_id=${p.customer_id}">
                <div class="ratio ratio-16x9">
                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                </div>
            </a>
        </div>
        <div class="content d-flex flex-column flex-grow-1 ">
            <div class="caption text-center">
                <a href="farmtrac_60.php?product_id=${p.customer_id}" class="text-decoration-none text-dark">
                    <p class="pt-3"><strong class="series_tractor_strong text-center text-truncate h6 fw-bold ">${p.brand_name} ${p.model}</strong></p>
                </a>      
            </div>
           <div class=" row text-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold text-truncate contant-justify-center"><span id="engine_powerhp2">${p.brand_name}</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <p class="fw-bold ">Year: <span id="year">${p.purchase_year}</p>
                    </div>
                   
                </div>
               
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold py-2" style="background-image: linear-gradient(315deg, #ddd 0%, #f5f7fa 74%);
                        font-size: 12px; justify-items: center;
                        margin: 0 auto;">Price: ₹<span id="price">${formattedPrice}</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <p class="fw-bold pe-2 py-2" style="background-image: linear-gradient(315deg, #ddd 0%, #f5f7fa 74%);
                        font-size: 12px; justify-items: center;
                        margin: 0 auto;">Great Deal  <i class="fa-regular fa-thumbs-up"></i></p>
                    </div>
                </div>
                <div class=" row text-center mt-3">
                    <div class="col-10 justify-center m-auto">
                        <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                    </div>
                </div>
            </div>
            <div class=" row state_btn">
               <div class="col-12">
                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                        <i class="fa-regular fa-handshake"></i> Contact Seller
                    </button>
                </div>

                        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header  modal_head">
                                    <h5 class="modal-title text-white ms-1" id="model_form">${p.model}</h5>
                                    <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                                    </div>
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                    <form id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                            <div class="row px-3 ">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> enquiryName</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="21" name="fname">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                    <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="fname" name="fname">
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" onkeydown="return /[a-zA-Z]/i.test(event.key)" id="lname" name="lname">
                                </div>
                                <div class="col-12 ">
                                    <label for="number" class="form-label text-dark fw-bold"> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Number" id="number" name="number">
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                        <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_form" name="state">
                                            <!-- Options for state dropdown -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                        <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" name="district" id="district_form">
                                            <!-- Options for district dropdown -->
                                        </select>
                                    </div>
                                </div>       
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                    <div class="form-outline">
                                        <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                                        <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="tehsil" name="tehsil">
                                           
                                        </select>
                                    </div>
                                </div>
                              <div class="col-12 col-lg-6 col-sm-5 col-md-6">
                                <div class="form-outline mt-4">
                                    <label for="name" class="form-label text-dark">Price </label>
                                    <input type="text" class="form-control price_form py-2" placeholder="Enter Price" id="price_form" name="price">
                                </div>
                              </div>
                            </div>          
                           </div> 
                                 <div class="modal-footer">
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

    filterContainer.append(newCard);
   
}
function filterAndDisplayCards() {
    var productContainer = $("#productContainer");
    productContainer.empty(); // Clear existing content
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
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
    
    getoldTractorList();
    window.location.reload();
    
  }
  function populateDropdowns(identifier) {
    var stateDropdowns = document.querySelectorAll(`#${identifier} .state-dropdown`);
    var districtDropdowns = document.querySelectorAll(`#${identifier} .district-dropdown`);
    var tehsilDropdowns = document.querySelectorAll(`#${identifier} .tehsil-dropdown`);

    const stateIds = [7, 15, 20, 26, 34];

    $.get('http://tractor-api.divyaltech.com/api/customer/state_data', function(stateDataResponse) {
        var stateData = stateDataResponse.stateData;
        var selectYourStateOption = '<option value="">Select Your State</option>';
        var stateOptions = stateData
            .filter(state => stateIds.includes(state.id))
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


