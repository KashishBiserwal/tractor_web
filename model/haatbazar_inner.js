$(document).ready(function() {
    console.log("ready!");
    $('#button_nursery').click(storedata);
    getTractorList();
    gethaatbazzat();
    $('#Verify').click(verifyotp1);
    // $('#Verify_inner').click(verifyotp_otp);
    // getProductById();
    // get_allbrand();
    // getpopularTractorList();

    // $('#Verify').click(verifyotp);


    function getTractorList() {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_haat_bazar";
    
        // Keep track of the total tractors and the currently displayed tractors
        var haat_bazar_data = 0;
        var displayedTractors = 4; // Initially display 6 tractors
    
        $.ajax({
            url: url,
            type: "GET",
            success: function(data) {
                var productContainer = $("#productContainer");
                var loadMoreButton = $("#load_more");
                // var name = data.allData.haat_bazar_data[0].first_name + ', ' + data.allData.haat_bazar_data[0].last_name;
                document.getElementById('slr_name').value = data.allData.haat_bazar_data[0].first_name;
                document.getElementById('mob_num').value = data.allData.haat_bazar_data[0].mobile;
              
                if (data.allData.haat_bazar_data && data.allData.haat_bazar_data.length > 0) {
                    haat_bazar_data = data.allData.haat_bazar_data.length;
    
                    // Reverse the order of the cards to display the latest ones first
                    var reversedCards = data.allData.haat_bazar_data.slice().reverse();
                    
                    // Display the latest 6 cards at the top
                    displaylist(productContainer, reversedCards.slice(0, displayedTractors).reverse());
    
                    if (haat_bazar_data <= displayedTractors) {
                        loadMoreButton.hide();
                    } else {
                        loadMoreButton.show();
                    }
    
                    // Handle "Load More Tractors" button click
                    loadMoreButton.click(function() {
                        // Append the remaining tractors after the existing ones
                        displaylist(productContainer, reversedCards.slice(displayedTractors).reverse(), true);
                        // Hide the "Load More Tractors" button
                        loadMoreButton.hide();
                    });
                }
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    
    function displaylist(productContainer, tractors, append) {
        tractors.forEach(function(p) {
            var images = p.image_names;
            var data = p.haat_bazar_id;
            var a = [];
    
            if (images) {
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }  
         var cardId = `card_${data}`; 
        var modalId = `used_tractor_callbnt_${data}`;
        var modalId_2 = `staticBackdrop2_${data}`; 
        var formId = `contact-seller-call${data}`;
        var formattedPrice = formatPriceWithCommas(p.price);
        var fullname = p.first_name + ' ' + p.last_name;
        var userId1 = localStorage.getItem('id');
        getuser(userId1);
        var newCard = `
            <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-3" id="${cardId}">
                <div class="h-auto success__stry__item d-flex flex-column shadow">
                   <div class="thumb">
                        <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}">
                            <div class="ratio ratio-16x9">
                                <img src="http://tractor-api.divyaltech.com/uploads/haat_bazar_img/${a[0]}" class="object-fit-cover " alt="${p.description}">
                            </div>
                        </a>
                    </div>
                    <div class="content d-flex flex-column flex-grow-1">
                        <div class="caption text-center">
                            <a href="hatbzrbuy_inner.php?id=${p.haat_bazar_id}" class="text-decoration-none text-dark">
                                <p class="pt-3"><strong class="series_tractor_strong text-center h6 fw-bold ">${p.sub_category_name}</strong></p>
                            </a>
                        </div>
                        <div class="power text-center">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"> ${p.category_name}</p></div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                    <p class="text-success ps-2 text-truncate"><i class="fa fa-inr" aria-hidden="true"></i>
                                    ${formattedPrice}/<span>${p.as_per}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 justify-contant-center">
                            <p class=" text-center text-truncate" id="district"><span id="engine_powerhp2"></span> ${p.district_name},<span id="year"> ${p.state_name}</span></p>
                        </div>
                        <div class="col-12">
                            <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" data-product-id="${p.product_id}">
                                <i class="fa-regular fa-handshake"></i> Contact Seller
                            </button>
                        </div>
                    </div>
                        <div class="modal fade" id="${modalId}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header  modal_head">
                                  <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">${p.category_name}</h5>
                                  <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png"></button>
                                </div>
                              
                                    <!-- MODAL BODY -->
                                    <div class="modal-body">
                                        <form id="${formId}" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="8" name="iduser">
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                                <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                                <input type="text" class="form-control" id="product_id" value="${p.haat_bazar_id}" hidden> 
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
                                                    <p class="text-danger">*Please make sure mobile no. must be valid</p>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_state" class="form-label text-dark fw-bold"> <i class="fa-solid fa-location-dot"></i>  Select State</label>
                                                    <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                                                      
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                    <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                                    <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_1" name="district">
                                                       
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                                <label for="yr_dist" class="form-label text-dark"><i class="fa-solid fa-location-dot"></i>Tehsil</label>
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
                        <button type="button" class="btn btn-success" id="Verify1" onclick="verifyotp('${formId}')">Verify</button>
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
    
            // Append or prepend the new card to the container based on the "append" parameter
            if (append) {
                productContainer.append(newCard);
            } else {
                productContainer.prepend(newCard);
            }
            populateDropdowns(p.id);
            // Add event listener for modal opening
        });
    }
    
    });

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

    function formatPriceWithCommas(price) {
        // Check if the price is not a number
        if (isNaN(price)) {
            return price; // Return the original value if it's not a number
        }
        
        // Format the price with commas in Indian format
        return new Intl.NumberFormat('en-IN').format(price);
    }
    

function gethaatbazzat() {
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  var customer_id = urlParams.get('id');
  console.log(customer_id,'sdfghjksdfghjk');
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_haat_bazar_by_id/' + customer_id;
  
  $.ajax({    
      url: url,
      type: "GET",
      success: function(data) {
          console.log(data, 'abc');
          // document.getElementById('category_name').innerText = data.allData.haat_bazar_category_name[0].model; 
          // Concatenate district and state
          // var location = data.haat_bazar_data[0].district + ', ' + data.haat_bazar_data[0].state;

          // Update HTML elements with data
          var userId = localStorage.getItem('id');
          getUserDetail(userId);

          var fullMobileNumber = data.allData.haat_bazar_data[0].mobile;
          var mobileString = fullMobileNumber.toString();
          var lastFourDigits = mobileString.substring(mobileString.length - 4);
          var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
          var maskedMobileNumber = maskedPart + lastFourDigits;
          var formattedPrice = parseFloat(data.allData.haat_bazar_data[0].price).toLocaleString('en-IN');

          document.getElementById('Sub_category_main').innerText = data.allData.haat_bazar_data[0].sub_category_name; 
          document.getElementById('original_price').innerText = formattedPrice;   
          document.getElementById('per').innerText = data.allData.haat_bazar_data[0].as_per;  
          document.getElementById('category_name_1').innerText = data.allData.haat_bazar_data[0].category_name;
          document.getElementById('sucategory_name').innerText = data.allData.haat_bazar_data[0].sub_category_name;
          document.getElementById('quantity').innerText = data.allData.haat_bazar_data[0].quantity;
          document.getElementById('price_as').innerText = formattedPrice;
          document.getElementById('Per_price').innerText = data.allData.haat_bazar_data[0].as_per;
          document.getElementById('description_1').innerText = data.allData.haat_bazar_data[0].about;
          document.getElementById('first_name').innerText = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('phone_number').innerText = maskedMobileNumber;
          document.getElementById('state_1').innerText = data.allData.haat_bazar_data[0].state_name;
          document.getElementById('district_dist').innerText = data.allData.haat_bazar_data[0].district_name;
          document.getElementById('tehsil_1').innerText = data.allData.haat_bazar_data[0].tehsil_name;
          document.getElementById('product_id').value = data.allData.haat_bazar_data[0].haat_bazar_id;
          document.getElementById('slr_name').value = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('mob_num').value = data.allData.haat_bazar_data[0].mobile;
       
          var imageNames = data.allData.haat_bazar_data[0].image_names.split(',');

            // Select the carousel container
            var carouselContainer = $('.swiper-wrapper_buy');

            // Clear existing slides
            carouselContainer.empty();

            // Initialize an empty array to store Swiper slides
            var swiperSlides = [];

            // Iterate through the image names and create carousel slides
            imageNames.forEach(function(imageName, index) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/haat_bazar_img/" + imageName.trim(); // Update the path
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" style="height: 300px;" /></div>'); // Set height here
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


function storedata(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            $('#seller_contact').modal('show');
        }
    } else {
        var mobile = $('#number_number').val();
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
            $('#get_OTP_btn1').modal('show'); // OTP modal is displayed for entering OTP
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp1() {
    var mobile = $('#number_number').val();
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
            $('#get_OTP_btn1').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForm();
                $('#seller_contact').modal('show');
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
    var mobile_no = $('#number_number').val();
    var state = $('#state_2').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();
    var price = $('#price').val();
    price = price.replace(/[\,\.\s]/g, '');

    // Construct parameter array
    var paraArr = {
        'product_id': product_id,
        'enquiry_type_id': enquiry_type_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'price': price,
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
            $('#haatbazar_form')[0].reset();
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
                $('#haatbazar_form #fname').val(customer.first_name);
                $('#haatbazar_form #lname').val(customer.last_name);
                $('#haatbazar_form #number_number').val(customer.mobile);
                $('#haatbazar_form #state_2').val(customer.state);
                $('#haatbazar_form #district').val(customer.district);
                $('#haatbazar_form #tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#haatbazar_form input, #haatbazar_form select').not('#price').prop('disabled', true);
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


function resetform(){
  $('#fname').val('');
  $('#lname').val('');
  $('#phone').val('');
  $('#state_2').val('');
  $('#district').val('');
  $('#tehsil').val('');
  $('#price').val('');
  $('#slr_name').val('');
  $('#mob_num').val('');
  $('#model_seller_contact').modal('hide');
  gethaatbazzat();
  // window.location.reload();
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
    var product_id = $(`#${formId} #product_id`).val();
    var first_name = $(`#${formId} #firstName`).val();
    var last_name = $(`#${formId} #lastName`).val();
    var mobile = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district_1`).val();
    var tehsil = $(`#${formId} #Tehsil`).val();

    var formData = {
        'enquiry_type_id': enquiry_type_id,
        'product_id': product_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
    };

    return formData;
}

function openSellerContactModal(formDataToSubmit) {
    var modalId_2 = `staticBackdrop2_${formDataToSubmit.product_id}`;
    $(`#${modalId_2}`).modal('show');
}

function getuser(id, formId) {
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
                $('#' + formId + ' #state').val(customer.state);
                $('#' + formId + ' #district_1').val(customer.district);
                $('#' + formId + ' #Tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    $('#' + formId + ' input, #' + formId + ' select').prop('disabled', true);
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