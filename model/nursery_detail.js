$(document).ready(function() {
    console.log("ready!");
    // $('#button_nursery').click(storedata);
    var allCards = [];
    nursery_details_list(allCards);
  getNurseryById();
//    getnurseryList();
   $('#button_nursery').click(store);
   $('#Verify').click(verifyotp1);
//    $('#Verify_inner').click(verify_otp);


});
function getNurseryById() {
    console.log('tyufhghfjghyfjkh');
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    console.log(Id,'fghjfdghjkdfghjfgh');
    var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_data/' + Id;
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
             var userId = localStorage.getItem('id');
            getUserDetail(userId);
            var fullMobileNumber = data.nursery_data[0].mobile;
            var mobileString = fullMobileNumber.toString();
            var lastFourDigits = mobileString.substring(mobileString.length - 4);
            var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
            var maskedMobileNumber = maskedPart + lastFourDigits;
            // var formattedPrice = parseFloat(data.product[0].price).toLocaleString('en-IN');
            var fullname = data.nursery_data[0].first_name + ' ' + data.nursery_data[0].last_name;
        console.log(data, 'abc');
        document.getElementById('district_main').innerText=data.nursery_data[0].district_name;
        document.getElementById('description').innerText=data.nursery_data[0].description;
        document.getElementById('address').innerText=data.nursery_data[0].address ;
        document.getElementById('state_1').innerText=data.nursery_data[0].state_name;
        document.getElementById('district_1').innerText=data.nursery_data[0].district_name;
        document.getElementById('tehsil_1').innerText=data.nursery_data[0].tehsil_name;
        document.getElementById('product_id').value=data.nursery_data[0].id;
        document.getElementById('slr_name').value=fullname;
        document.getElementById('mob_num').value = data.nursery_data[0].mobile;
        // document.getElementById('number_1').innerText=data.nursery_data[0].mobile;
        document.getElementById('number_1').innerText= maskedMobileNumber;
     
        var imageNames = data.nursery_data[0].image_names.split(',');

        // Select the carousel container
        var carouselContainer = $('.swiper-wrapper_buy');

        // Clear existing slides
        carouselContainer.empty();

        // Initialize an empty array to store Swiper slides
        var swiperSlides = [];

        // Iterate through the image names and create carousel slides
        imageNames.forEach(function(imageName, index) {
            var imageUrl = "http://tractor-api.divyaltech.com/uploads/nursery_img/" + imageName.trim(); // Update the path
            var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy mt-2" src="' + imageUrl + '" style="height: 300px;" /></div>'); // Set height here
            carouselContainer.append(slide);
            
            // Push the created slide into the swiperSlides array
            swiperSlides.push(slide);
        });

        // Initialize or update the Swiper carousel
        var mySwiper = new Swiper('.swiper_buy', {
            // Your Swiper configuration options
        });

        // Add click event listener to each slide
        swiperSlides.forEach(function(slide, index) {
            slide.on('click', function() {
                // Slide to the clicked slide
                mySwiper.slideTo(index);
            });
        });
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
            $('#seller_model').modal('show');
        }
    } else {
        var mobile = $('#phone_number').val();
        get_otp1(mobile);
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}

function get_otp1(phone) {
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

function verifyotp1() {
    var mobile = $('#phone_number').val();
    var otp = $('#otp1').val();
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
                $('#seller_model').modal('show');
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
    var product_id = $('#product_id').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile_no = $('#phone_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();
    
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'state': state,
        'district': district,
        'tehsil': tehsil,
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
                $('#nursery_form #fname').val(customer.first_name);
                $('#nursery_form #lname').val(customer.last_name);
                $('#nursery_form #phone_number').val(customer.mobile);
                $('#nursery_form #state').val(customer.state_id);
                // $('#haatbazar_form #district').val(customer.district);
                // $('#haatbazar_form #tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#nursery_form input, #nursery_form select').not('#price,#district,#tehsil').prop('disabled', true);
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

function checkLoginStatus(phone, callback) {
    var url = "http://tractor-api.divyaltech.com/api/customer/check_login_status";
    var paraArr = {
        'mobile': phone,
    };

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function(result) {
            console.log(result, "result");
            var isLoggedIn = result.status === 'logged_in';
            callback(isLoggedIn);
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            // Assume the user is not logged in
            callback(false);
        }
    });
}


function nursery_details_list(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_data';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#loadMoreBtn");
         
            if (data.nursery_data && data.nursery_data.length > 0) {
                // Reverse the order of the cards to display the latest ones first
                var reversedCards = data.nursery_data.slice().reverse();
                
                // Update the list of all cards
                allCards = allCards.concat(reversedCards);
                
                // Display the latest 9 cards at the top in the opposite order
                displaynursery(productContainer, reversedCards.slice(0, 4).reverse());

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
        }
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
            var modalId_2 = `staticBackdrop2_${p.id}`; 
            var formId = `nursery_enquiry_form_${p.id}`; 
            var fullname = p.first_name + ' ' + p.last_name;
            var userId = localStorage.getItem('id');
            getUserDetail1(userId, formId);
            var newCard = `
                <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4" id="${cardId}">
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
                        <button type="button" class="btn btn-success py-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#${modalId}"><i class="fa-solid fa-phone"></i>
                            Contact Nursery
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
                                            <input type="text" class="form-control text-dark" placeholder="Enter OTP" id="otp"name="opt_1">
                                        </div>
                                        <div class="float-end col-12">
                                            <a href="" class="float-end">Resend OTP</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="Verify1" onclick="verifyotp('${formId}')">Verify</button>
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
    
    // Now you can use cardId, modalId, and formId in your application as needed.
    
            


//     var myDiv = $('#description_id');
// myDiv.text(myDiv.text().substring(0,120))
    // Append the new card to the container
    container.prepend(newCard);
    populateDropdowns(p.id);
   
});
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
            $('#mobile_number_1').val(mobile);
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

function verifyotp(formId) {
    var mobile = document.getElementById('mobile_number_1').value;
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
    var modalId_2 = `staticBackdrop2_${formDataToSubmit.product_id}`;
    $(`#${modalId_2}`).modal('show');
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