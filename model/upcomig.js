
$(document).ready(function() {
    console.log("ready!");
    getTractorList();
    showOverlay(); 
    $('#filter_tractor').click(filter_search);
});

function showOverlay() {
    $("#overlay").fadeIn(400);
}

function hideOverlay() {
    $("#overlay").fadeOut(400);
}
function model_click(){
    get();
  }

  function get() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';

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
get();

function getTractorList() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor";

    var totalTractors = 0;
    var displayedTractors = 6;
    var startIndex = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                data.product.allProductData.sort(function(a, b) {
                    return b.product_id - a.product_id;
                });

                displayTractors(data.product.allProductData.slice(startIndex, displayedTractors));
                totalTractors = data.product.allProductData.length;

                if (totalTractors <= displayedTractors) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }
                loadMoreButton.click(function() {
                    startIndex += displayedTractors;
                    var endIndex = startIndex + displayedTractors;
                    displayTractors(data.product.allProductData.slice(startIndex, endIndex));

                    if (endIndex >= totalTractors) {
                        loadMoreButton.hide();
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
    if (tractors && tractors.length > 0) {
        tractors.forEach(function (p) {
            var images = p.image_names;
            var a = [];

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
                        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3"id="${cardId}">
                                             <div class="h-auto success__stry__item d-flex flex-column shadow">
                                                 <div class="thumb">
                                                     <a href="detail_tractor.php?product_id=${p.product_id}">
                                                         <div class="ratio ratio-16x9">
                                                         <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}" loading="lazy">
                                                         </div>
                                                     </a>
                                                 </div>
                                                 <div class="content d-flex flex-column flex-grow-1">
                                                     <div class="caption text-center">
                                                         <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                                             <p class="pt-3"><strong class="series_tractor_strong text-center h6 fw-bold ">${p.model}</strong></p>
                                                         </a>      
                                                     </div>
                                                     <div class="power text-center mt-2">
                                                         <div class="row">
                                                             <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i>  ${p.hp_category}HP</p></div>
                                                             <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                                                  <p id="adduser" type="" class="text-dark">
                                                                   <i class="fa-solid fa-gear"></i>  ${p.engine_capacity_cc} CC </p>
                                                             </div>
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
                                                                 <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
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
                                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <label for="state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <label for="district" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                                                                
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                                                <label for="Tehsil" class="form-label text-dark">Tehsil</label>
                                                                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                                                                
                                                                                </select>
                                                                            </div>                          
                                                                         </div> 
                                                                    
                                                        
                                                                         <div class="modal-footer">
                                                                         <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                                                         <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
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
            </div>`;
             productContainer.append(newCard);
            });
        }
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
            // Handle errors here
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
    var firstName = $(`#${formId} #firstName`).val();
    var lastName = $(`#${formId} #lastName`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district`).val();
    var Tehsil = $(`#${formId} #Tehsil`).val();
    var enquiry_type_id =$(`#${formId} #enquiry_type_id`).val();

    var formData = {
        'product_id':product_id,
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
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
                
                $('#' + formId + ' #firstName').val(customer.first_name);
                $('#' + formId + ' #lastName').val(customer.last_name);
                $('#' + formId + ' #mobile_number').val(customer.mobile);
             
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#state,#district,#Tehsil').prop('disabled', true);
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

// filter tractor
var filteredCards = [];
var cardsDisplayed = 0;
var cardsPerPage = 6; 

function filter_search() {
    var checkboxes = $(".budget_checkbox:checked");
    var checkboxes2 = $(".hp_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");

    var selectedCheckboxValues = checkboxes.map(function () {
        return $(this).val();
    }).get();

    var selectedCheckboxValues2 = checkboxes2.map(function () {
        return $(this).val();
    }).get();

    var selectedBrand = checkboxesBrand.map(function () {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'price_ranges': JSON.stringify(selectedCheckboxValues),
        'horse_power_ranges': JSON.stringify(selectedCheckboxValues2),
    };

    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_new_tractor_by_price_brand_hp';
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
           
            var allProductData = searchData.product.allProductData;
            if (Array.isArray(allProductData)) {
                allProductData.forEach(function(product) {
                    // Your code to process each product goes here
                    console.log(product);
                    appendFilterCard(filterContainer, product); // Assuming this is the correct function to append the filter card
                });
            }
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        },
        complete: function () {
            hideOverlay();
        },
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
        var cardId = `card_${p.product_id}`; // Dynamic ID for the card
        var modalId = `used_tractor_callbnt_${p.product_id}`; 
        var modalId_2 = `staticBackdrop_${p.product_id}`; 
        var formId = `contact-seller-call_${p.product_id}`; 
        var userId = localStorage.getItem('id');
        var newCard = `
        <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-3"id="${cardId}">
                             <div class="h-auto success__stry__item d-flex flex-column shadow">
                                 <div class="thumb">
                                     <a href="detail_tractor.php?product_id=${p.product_id}">
                                         <div class="ratio ratio-16x9">
                                         <img src="https://shopninja.in/bharatagri/api/public/uploads/product_img/${a[0]}" class="object-fit-cover" alt="${p.description}" loading="lazy">
                                         </div>
                                     </a>
                                 </div>
                                 <div class="content d-flex flex-column flex-grow-1">
                                     <div class="caption text-center">
                                         <a href="detail_tractor.php?product_id=${p.product_id}" class="text-decoration-none text-dark">
                                             <p class="pt-3"><strong class="series_tractor_strong text-center h6 fw-bold ">${p.model}</strong></p>
                                         </a>      
                                     </div>
                                     <div class="power text-center mt-2">
                                         <div class="row">
                                             <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"><i class="fas fa-bolt"></i>  ${p.hp_category}HP</p></div>
                                             <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                                  <p id="adduser" type="" class="text-dark">
                                                   <i class="fa-solid fa-gear"></i>  ${p.engine_capacity_cc} CC </p>
                                             </div>
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
                                                 <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
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
                                                             <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                <label for="state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                                <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                                <label for="district" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                                <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                                                                
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                                                <label for="Tehsil" class="form-label text-dark">Tehsil</label>
                                                                <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                                                                
                                                                </select>
                                                            </div>                          
                                                         </div> 
                                                         <div class="modal-footer">
                                                         <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')" data-bs-dismiss="modal">Submit</button>
                                                         <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
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
                        </div>
    `;
        container.append(newCard);
     
    }

    function displayNextSet() {
        var productContainer = $("#productContainer");
    
        filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function (p) {
            appendCard(productContainer, p);
            cardsDisplayed++;
        });
    
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
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
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

            // Add event listener to state dropdown to fetch district data
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
