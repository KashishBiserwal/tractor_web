$(document).ready(function() {
    console.log("ready!");
    $('#Verify').click(verifyotp);
    $('#tyre_enq_btn').click(store);
    gettyre();
    getTractorList();
});
function model_click(){
    get();
  }
function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tyre_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_select');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                   
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  get();

  function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            $('#staticBackdrop').modal('show');
        }
    } else {
        var mobile = $('#mob_num').val();
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
    var mobile = $('#mob_num').val();
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
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_id = $('#product_id').val();
    var brand_name = $('#brand_select').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#mob_num').val();
    var state = $('#s_state').val();
    var district = $('#s_district').val();
    var tehsil = $('#t_tehsil').val();

    // Construct parameter array
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'brand_id':brand_name,
    };

    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
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
                console.log(customer, 'customer details');
                
                $('#dealership_enq_from #f_name').val(customer.first_name);
                $('#dealership_enq_from #l_name').val(customer.last_name);
                $('#dealership_enq_from #mob_num').val(customer.mobile);
                $('#dealership_enq_from #s_state').val(customer.state_id);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#dealership_enq_from input, #dealership_enq_from select').not('#price,#s_district,#t_tehsil,#brand_select').prop('disabled', true);
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

function gettyre() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('product_id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_tyre_data_by_id/" + productId;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var userId = localStorage.getItem('id');
            getUserDetail(userId);
        console.log(data, 'abc');
        document.getElementById('brand_name1').innerText=data.tyre_details[0].brand_name;
        document.getElementById('tyre').innerText=data.tyre_details[0].tyre_model;
        document.getElementById('brand_name').innerText=data.tyre_details[0].tyre_model;
        document.getElementById('tyre_type').innerText=data.tyre_details[0].tyre_category;
        document.getElementById('tyre_size').innerText=data.tyre_details[0].tyre_size;
        document.getElementById('product_id').value=data.tyre_details[0].id;
            if(data.tyre_details[0].image_names != null){
                var imageNames = data.tyre_details[0].image_names.split(',');
            }
     
        var carouselContainer = $('.swiper-wrapper_buy');

        carouselContainer.empty();
        if(data.tyre_details[0].image_names != null){
        imageNames.forEach(function(imageName) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/tyre_img/" + imageName.trim(); 
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
            carouselContainer.append(slide);
        });
    }
        var mySwiper = new Swiper('.swiper_buy', {
        });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getTractorList() {
    var url = "http://tractor-api.divyaltech.com/api/customer/tyre_data";
    var totalTyre = 0;
    var displayedTractors = 0;

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            if (data.tyre_details && data.tyre_details.length > 0) {
                totalTyre = data.tyre_details.length;

                displayTractors(data.tyre_details.slice(0, 6));
                if (totalTyre > 6) {
                    $("#load_moretract").show();
                }
                $("#load_moretract").click(function() {
                    displayTractors(data.tyre_details);
                    $("#load_moretract").hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function displayTractors(tractors) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    productContainer.html('');
    tableData.html('');
    tractors.sort((a, b) => b.product_id - a.product_id);
    var tractorsToDisplay = tractors.slice(0, 4);
    tractorsToDisplay.forEach(function (p) {
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
        var modalId = `staticBackdrop2_${p.id}`;
        var formId = `contact-seller-call_${p.id}`;
        var userId = localStorage.getItem('id');
        getUserDetail1(userId, formId);
        var newCard2 = `
        <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3" id="${cardId}">
            <div class="h-auto success__stry__item d-flex flex-column shadow tyre_card">
                <div class="thumb">
                    <a href="tyre_inner.php?product_id=${p.id}">
                    <img src="http://tractor-api.divyaltech.com/uploads/tyre_img/${a[0]}" class="object-fit-cover  text-truncate" alt="">
                       
                    </a>
                </div>
                <div class="content d-flex flex-column flex-grow-1 ">
                    <div class="caption text-center">
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
                        <button type="button" class="add_btn btn-success w-100" onclick="model_click()" data-bs-toggle="modal"  data-bs-target="#${modalId}">
                            Get  Price
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
                                                            <input type="text" class="form-control" id="Productid" value="${p.id}"> 
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
                                                            <p class="text-danger">*please provide valid Phone Number.</p>
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

                
        <div class="modal fade" id="get_OTP_btn1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp1"name="opt_1">
                                </div>
                                <div class="float-end col-12">
                                    <a href="" class="float-end">Resend OTP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="Verify" onclick="verifyotp1('${formId}')">Verify</button>
                    </div>
                </div>
            </div>
        </div>`;

             productContainer.append(newCard2);
             populateDropdowns(p.id);
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
            $('#number').val(mobile);
            openOTPModal();
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function openOTPModal() {
    $('#get_OTP_btn1').modal('show');
}

function verifyotp1(formId) {
    var mobile = document.getElementById('number').value;
    var otp = document.getElementById('otp1').value;

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
            $('#get_OTP_btn1').modal('hide');
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
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
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
    var first_name = $(`#${formId} #fname`).val();
    var product_id = $(`#${formId} #Productid`).val();
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

function getUserDetail1(id, formId) {
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
                // $('#' + formId + ' #state_form').val(customer.state_id);
                // $('#' + formId + ' #district_form').val(customer.district);
                // $('#' + formId + ' #tehsil').val(customer.tehsil);
                
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

function populateDropdowns() {
    var stateDropdowns = document.querySelectorAll('.state-dropdown');
    var districtDropdowns = document.querySelectorAll('.district-dropdown');
    var tehsilDropdowns = document.querySelectorAll('.tehsil-dropdown');

    var defaultStateId = 7; // Define the default state ID here

    var selectYourStateOption = '<option value="">Select Your State</option>';
    var chhattisgarhOption = `<option value="${defaultStateId}">Chhattisgarh</option>`;

    stateDropdowns.forEach(function (dropdown) {
        dropdown.innerHTML = selectYourStateOption + chhattisgarhOption;

        // Fetch district data based on the selected state
        $.get(`http://tractor-api.divyaltech.com/api/customer/get_district_by_state/${defaultStateId}`, function(data) {
            var districtSelect = dropdown.closest('.row').querySelector('.district-dropdown');
            districtSelect.innerHTML = '<option value="">Please select a district</option>';
            data.districtData.forEach(district => {
                districtSelect.innerHTML += `<option value="${district.id}">${district.district_name}</option>`;
            });
        });
    });

    // Event listener for district dropdown
    districtDropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('change', function() {
            var selectedDistrictId = this.value;
            var tehsilSelect = this.closest('.row').querySelector('.tehsil-dropdown');
            if (selectedDistrictId) {
                // Fetch tehsil data based on the selected district
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
}