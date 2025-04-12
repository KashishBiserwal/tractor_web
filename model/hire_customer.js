$(document).ready(function() {
    console.log("ready!");
    $('#Verify').click(verifyotp);
    $('#filter_tractor').click(filter_search);
    getHiretractor();
    showOverlay(); 
});
function showOverlay() {
    $("#overlay").fadeIn(400);
}
function hideOverlay() {
    $("#overlay").fadeOut(400);
}
function formatPriceWithCommas(price) {
    if (isNaN(price)) {
        return price; 
    }
    return new Intl.NumberFormat('en-IN').format(price);
}
var cardsPerPage = 6;
var cardsDisplayed = 0; 
var allCards = []; 

function getHiretractor() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_rent_data";

    $.ajax({
        url: url,
        type: "GET",
        success: function (response) {
            if (response.rent_details && response.rent_details.data1 && response.rent_details.data2) {
                var totalRentData = [];
                response.rent_details.data2.forEach(function(item2) {
                    var correspondingData1 = response.rent_details.data1.find(function(item1) {
                        return item1.id === item2.customer_id;
                    });
                    if (correspondingData1) {
                        totalRentData.push(Object.assign({}, correspondingData1, item2));
                    }
                });
                allCards = totalRentData; 
                displayNextPage(); 
            } else {
                console.error('Error: Data arrays are undefined');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        },
        complete: function () {
            hideOverlay();
        },
    });
}

// Function to display all cards
function displayNextPage() {
    var productContainer = $("#productContainer");
    allCards.forEach(function(card) {
        appendCard(productContainer, card);
    });
    cardsDisplayed = allCards.length;
    $("#loadMoreBtn").hide();
}
function appendCard(container, p) {
    var images = p.images;
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
    var modalId_2 = `staticBackdrop_${p.id}`; 
    var formId = `contact-seller-call_${p.id}`; 
    var formattedPrice = formatPriceWithCommas(p.rates);
    var userId = localStorage.getItem('id');
    var fullname = p.first_name + ' ' + p.last_name;
    var newCard =`
                        <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
                            <div class="h-auto success__stry__item d-flex flex-column shadow ">
                                <div class="thumb">
                                    <a href="hire_inner.php?id=${p.customer_id}/${p.id}">
                                        <div class="ratio ratio-16x9">
                                            <img src="https://shopninja.in/bharatagri/api/public/uploads/rent_img/${a[0]}" class="object-fit-cover" alt="${p.description}" loading="lazy">
                                        </div>
                                    </a>
                                    <div class="content d-flex flex-column flex-grow-1 ">
                                        <div class="row text-center mt-1">
                                            <p class="text-center fw-bold text-truncate " id="model_brand">${p.brand_name || ''} ${p.model || ''}</p>
                                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                                <p class="text-dark text-truncate  fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i> ${formattedPrice}<span>/</span>${p.rate_pers}</p>
                                            </div>
                                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                                <p class="text-dark  fw-bold"> <i class="fas fa-calendar-alt"></i> Year: ${p.purchase_year || ' '}</p>
                                            </div>
                                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                                <p class="text-dark  fw-bold"> <i class="far fa-circle"></i> Radius ${p.working_radius || ' '}</p>
                                            </div>
                                        </div>
                                        <div class=" row text-center mt-3">
                                            <div class="col-10 justify-center m-auto">
                                                <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                                            </div>
                                        </div> 
                                    </div>
                                    <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                                        <i class="fa-regular fa-handshake"></i>  Send Enquiry
                                    </button>
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
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                            <label for="name" class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i> product_id</label>
                                                            <input type="text" class="form-control" id="id" value="${p.customer_id}"> 
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                                        </div>
                                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                                        </div>
                                                        <div class="col-12 ">
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
                                                            <label for="tehsil" class="form-label text-dark mt-2"> Tehsil</label>
                                                            <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" Tehsil" id="tehsil" name="tehsil">
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                            <label for="yr_price" class="form-label text-dark">Price</label>
                                                            <input type="yr_price" class="form-control price_form" placeholder="Enter Price" id="price_form" name="price">
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
                        </div>`;
                    container.prepend(newCard);
                        $('.price_form').on('input', function() {
                            var value = $(this).val().replace(/\D/g, ''); 
                            var formattedValue = Number(value).toLocaleString('en-IN'); 
                            $(this).val(formattedValue);
                        });
                        
                        $('.price_form').each(function() {
                            var input = this;
                            input.focus();
                            input.setSelectionRange(0, 0);
                            input.style.textAlign = 'left';
                        });
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
    
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
        $.ajax({
            url: url,
            type: "POST",
            data: paraArr,
            success: function (result) {
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
                var msg = "Added successfully !";
                openSellerContactModal(formDataToSubmit);
            },
            error: function (error) {
                console.error('Error fetching data:', error);
                var msg = error;
                $("#errorStatusLoading").modal('show');
            }
        });
    }
    
    function collectFormData(formId) {
        var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
        var first_name = $(`#${formId} #fname`).val();
        var last_name = $(`#${formId} #lname`).val();
        var mobile = $(`#${formId} #number`).val();
        var state = $(`#${formId} #state_form`).val();
        var district = $(`#${formId} #district_form`).val();
        var tehsil = $(`#${formId} #tehsil`).val();
        var price = $(`#${formId} #price_form`).val();
        price = price.replace(/[\,\.\s]/g, '');
        var product_id = $(`#${formId} #id`).val();
        var formData = {
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
    
        return formData;
    }
    function openSellerContactModal(formDataToSubmit) {
        var modalId_2 = `staticBackdrop_${formDataToSubmit.product_id}`;
        $(`#${modalId_2}`).modal('show');
    }
function getUserDetail(id, formId) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_customer_personal_info_by_id/" + id;

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function(response) {
            if (response.customerData && response.customerData.length > 0) {
                var customer = response.customerData[0];
                
                $('#' + formId + ' #fname').val(customer.first_name);
                $('#' + formId + ' #lname').val(customer.last_name);
                $('#' + formId + ' #number').val(customer.mobile);
                // $('#' + formId + ' #state_form').val(customer.state_id);
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').not('#price_form,$state_form,#district_form,#tehsil').prop('disabled', true);
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

function formatPrice(price) {
    return parseFloat(price.replace(/,/g, '') || 0);
}

var cardsPerPage = 6;
var cardsDisplayed = 0;
var filteredCards = [];
var allData = [];

function filter_search() {
    var checkboxesState = $(".state_checkbox:checked");
    var checkboxesdist = $(".district_checkbox:checked");
    var checkboxesBrand = $(".brand_checkbox:checked");

    var selectedState = checkboxesState.map(function() {
        return $(this).val();
    }).get();
    var selectedDistrict = checkboxesdist.map(function() {
        return $(this).val();
    }).get();
    var selectedBrand = checkboxesBrand.map(function() {
        return $(this).val();
    }).get();

    var paraArr = {
        'brand_id': JSON.stringify(selectedBrand),
        'state': JSON.stringify(selectedState),
        'district': JSON.stringify(selectedDistrict),
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/filter_for_rent_enquiry';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            var filterContainer = $("#productContainer");
            filterContainer.empty();
            if (response.rent_details && response.rent_details.data1 && response.rent_details.data2) {
                var totalRentData = [];

                response.rent_details.data2.forEach(function(item2) {
                    var correspondingData1 = response.rent_details.data1.find(function(item1) {
                        return item1.id === item2.customer_id;
                    });

                    if (correspondingData1) {
                        totalRentData.push(Object.assign({}, correspondingData1, item2));
                    }
                });
                allCards = totalRentData; 
                displayNextPage(); 
            } else {
                console.error('Error: Data arrays are undefined');
            }
            if (response.allCards.length > 0) {
                displayNextPage(filterContainer, response.allCards);
                $("#noDataMessage").hide(); 
                $("#load_moretract").show();
            } else {
                $("#noDataMessage").show();
                $("#load_moretract").hide();
            }
        },
        error: function(error) {
            console.error('Error searching for brands:', error);
        }
    })
}
function appendFilterCard(filterContainer, p) {
    var images = p.images;
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
    var modalId_2 = `staticBackdrop_${p.id}`; 
    var formId = `contact-seller-call_${p.id}`; 
    var formattedPrice = formatPriceWithCommas(p.rate);
    var userId = localStorage.getItem('id');
    var fullname = p.first_name + ' ' + p.last_name;
    // rest of the card HTML generation
    var newCard =`
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-3" id="${cardId}">
                    <div class="h-auto success__stry__item d-flex flex-column shadow ">
                        <div class="thumb">
                            <a href="hire_inner.php?id=${p.customer_id}/${p.id}">
                                <div class="ratio ratio-16x9">
                                    <img src="https://shopninja.in/bharatagri/api/public/uploads/rent_img/${a[0]}" class="object-fit-cover" alt="${p.description}" loading="lazy">
                                </div>
                            </a>
                            <div class="content d-flex flex-column flex-grow-1 ">
                                <div class="row text-center mt-1">
                                    <p class="text-center fw-bold text-truncate " id="model_brand">${p.brand_name} ${p.model}</p>
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark  fw-bold"><i class="fa-solid fa-indian-rupee-sign"></i> ${formattedPrice}<span>/</span>${p.rate_per}</p>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark  fw-bold"> <i class="fas fa-calendar-alt"></i> Year: ${p.purchase_year}</p>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                        <p class="text-dark  fw-bold"> <i class="far fa-circle"></i> Radius ${p.working_radius}</p>
                                    </div>
                                </div>
                                <div class=" row text-center mt-3">
                                    <div class="col-10 justify-center m-auto">
                                        <p class="fw-bold text-truncate" id="district">${p.district_name}<span id="year"></span>, ${p.state_name}</p>
                                    </div>
                                </div> 
                            </div>
                            <button type="button" id="modelbutton" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" onclick="populateDropdowns('${modalId}'); getUserDetail(${userId}, '${formId}')">
                                <i class="fa-regular fa-handshake"></i>  Send Enquiry
                            </button>
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
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="19" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-regular fa-user"></i> product_id</label>
                                                    <input type="text" class="form-control" id="id" value="${p.customer_id}"> 
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> First Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="fname" name="fname">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 ">
                                                    <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="lname" name="lname">
                                                </div>
                                                <div class="col-12 ">
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
                                                    <label for="tehsil" class="form-label text-dark mt-2"> Tehsil</label>
                                                    <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" Tehsil" id="tehsil" name="tehsil">
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                                    <label for="yr_price" class="form-label text-dark">Price</label>
                                                    <input type="yr_price" class="form-control price_form" placeholder="Enter Price" id="price_form" name="price">
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
                        </div>`;

             filterContainer.append(newCard);
}

function displayNextSet() {
    var productContainer = $("#productContainer");

    filteredCards.slice(cardsDisplayed, cardsDisplayed + cardsPerPage).forEach(function(p) {
        appendFilterCard(productContainer, p);
        cardsDisplayed++;
    });
    if (cardsDisplayed >= filteredCards.length) {
        $("#loadMoreBtn").hide();
    }
}

$(document).on('click', '#loadMoreBtn', function() {
    displayNextSet(allData);
});
  function resetform(){
    $('.brand_checkbox').val('');
    $('.budget_checkbox').val('');
    $('.hp_checkbox').val('');
    $('.brand_checkbox:checked').prop('checked', false);
    $('.budget_checkbox:checked').prop('checked', false);
    $('.hp_checkbox:checked').prop('checked', false);
    window.location.reload();
  }

  function getBrand() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
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

function getStates() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
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
                const districtContainer = $('#get_dist');
                districtContainer.empty();
                districtContainer.append('<p></p>');
                $('.state_checkbox').on('change', function () {
                    const stateId = $(this).val();
                    if (stateId) {
                        getDistricts(stateId);
                    }
                });
            } else {
                checkboxContainer.append('<p>No states available.</p>');
            }
        },
        error: function(error) {
            console.error('Error fetching state data:', error);
        }
    });
}

function getDistricts(stateId) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_district_by_state/' + stateId;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const checkboxContainer = $('#get_dist');
            checkboxContainer.empty(); 
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
        error: function(error) {
            console.error('Error fetching districts for state ID ' + stateId + ':', error);
        }
    });
}
getStates();


function get_year_and_hours() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            var selectYearContainer = $("#P_year");
            selectYearContainer.empty();
            if (data.getYears && data.getYears.length > 0) {
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