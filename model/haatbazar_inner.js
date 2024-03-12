$(document).ready(function() {
    console.log("ready!");
    $('#button_nursery').click(storedata);
    getTractorList();
    gethaatbazzat();
    $('#Verify').click(verifyotp);
    $('#Verify_inner').click(verifyotp_otp);
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
                document.getElementById('slr_name_card').value = data.allData.haat_bazar_data[0].first_name;
                document.getElementById('mob_num_card').value = data.allData.haat_bazar_data[0].mobile;
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
            var a = [];
    
            if (images) {
                if (images.indexOf(',') > -1) {
                    a = images.split(',');
                } else {
                    a = [images];
                }
            }  
            var cardId = `card_${p.product_id}`; // Dynamic ID for the card
            var modalId = `used_tractor_callbnt_${p.product_id}`; // Dynamic ID for the modal
            var formId = `contact-seller-call${p.product_id}`; // Dynamic ID for the form
            var formattedPrice = formatPriceWithCommas(p.price);
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
                                    <p class="pt-3"><strong class="series_tractor_strong text-center h4 fw-bold ">${p.sub_category_name}</strong></p>
                                </a>
                            </div>
                            <div class="power text-center mt-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6"><p class="text-dark ps-2"> ${p.category_name}</p></div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6" style="padding-right: 32px;">
                                        <p class="text-success ps-2"><i class="fa fa-inr" aria-hidden="true"></i>
                                        ${formattedPrice}/<span>  ${p.as_per}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 justify-contant-cente">
                                <p class=" text-center text-truncate" id="district"><span id="engine_powerhp2"></span> ${p.district_name},<span id="year"> ${p.state_name}</span></p>
                            </div>
                            <div class="col-12">
                                <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}" data-product-id="${p.product_id}">
                                    <i class="fa-regular fa-handshake"></i> Contact Seller
                                </button>
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
                                                    <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
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
          // document.getElementById('description').innerText = location;
          document.getElementById('first_name').innerText = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('phone_number').innerText = maskedMobileNumber;
        //   document.getElementById('phone_number').innerText = data.allData.haat_bazar_data[0].mobile;
          document.getElementById('state_1').innerText = data.allData.haat_bazar_data[0].state_name;
          document.getElementById('district_1').innerText = data.allData.haat_bazar_data[0].district_name;
          document.getElementById('tehsil_1').innerText = data.allData.haat_bazar_data[0].tehsil_name;
          document.getElementById('product_id').value = data.allData.haat_bazar_data[0].product_id;
          document.getElementById('slr_name').value = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('mob_num').value = data.allData.haat_bazar_data[0].mobile;
        //   document.getElementById('slr_name1').value = data.allData.haat_bazar_data[0].first_name;
        //   document.getElementById('mob_num1').value = data.allData.haat_bazar_data[0].mobile;
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


// store data throught form

function storedata(event) {
    event.preventDefault();

    // Validate the form
 
        var enquiry_type_id = $('#enquiry_type_id').val();
        var product_id = 30;
        var first_name = $('#fname').val();
        var last_name = $('#lname').val();
        var mobile_no = $('#number_number').val();
        var state = $('#state_2').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
        var price = $('#price').val();
        console.log('jfhfhw', product_id);

        // Prepare data to send to the server
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

        var apiBaseURL = APIBaseURL;
        var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
        console.log(url);

        // Make an AJAX request to the server
        $.ajax({
            url: url,
            type: "POST",
            data: paraArr,
            success: function(result) {
                console.log(result, "result");
            
                // Reset the form
                // $('#nursery_form')[0].reset();
            
                $("#used_tractor_callbnt_").modal('hide');
               
                // Open the model_seller_contact modal after clicking "Got It" in the alert
                $('#get_OTP_btn').modal('show');
                get_otp_1(mobile_no);
            },
            error: function(error) {
                console.error('Error fetching data:', error);
                var msg = error;
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
                $("#errorStatusLoading").find('.modal-body').html(msg);
                $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            }
        });
    }

function get_otp_1(phone) {
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

            // Once OTP is received, store mobile number in hidden field within modal
            $('#mobile_verify').val(phone);

        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp() {
    var mobile = document.getElementById('mobile_verify').value;
    var otp = document.getElementById('otp').value;

    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    }
    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);

            // Assuming your model has an ID 'myModal', hide it on success
            $('#get_OTP_btn').modal('hide'); // Assuming it's a Bootstrap modal
            $('#staticBackdrop').modal('show');
            // Reset input fields
            // document.getElementById('phone').value = ''; 
            // document.getElementById('otp').value = ''; 

            // Access data field in the response
        }, 
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
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
function savedata(formId) {
    submit_enquiry(formId);
    console.log("Form submitted successfully");
}

function openOTPModal() {
    $('#get_OTP_btn1').modal('show');
}

function submit_enquiry(formId) {
    var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
    var product_id = 30;  // You may need to adjust this based on your logic
    var first_name = $(`#${formId} #firstName`).val();
    var last_name = $(`#${formId} #lastName`).val();
    var mobile_number = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district_1`).val();
    var tehsil = $(`#${formId} #Tehsil`).val();

    var paraArr = {
        'enquiry_type_id': enquiry_type_id,
        'product_id': product_id,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': tehsil,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    // You can keep the token-related code if needed
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    $.ajax({
        url: url,
        type: 'POST',  
        data: paraArr,
        // headers: headers, // Remove headers if not needed
        success: function (result) {
            console.log(result, "result");
            $("#used_tractor_callbnt_").modal('hide'); 
            // $('#get_OTP_btn1').modal('show');
            get_otp(mobile_number);

            openOTPModal();
            
            console.log("Add successfully");
            // resetForm(formId);

          },
          error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            // 
          }
    });
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

            // Once OTP is received, store mobile number in hidden field within modal
            $('#Mobile_2').val(phone);

        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


  function verifyotp_otp() {
    var mobile = document.getElementById('Mobile_2').value;
    var otp = document.getElementById('otp_1').value;

    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    }

    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            console.log($('#model_saller')); 
            $('#get_OTP_btn1').modal('hide');
            $('#staticBackdrop_cards').modal('show');
            // resetForm();
            
        }, 
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            var errorMessage = '';

            if (xhr.status === 401) {
                errorMessage = 'Invalid credentials';
            } else if (xhr.status === 403) {
                errorMessage = 'Forbidden: You don\'t have permission to access this resource.';
            } else {
                errorMessage = 'An error occurred while processing your request.';
            }

            $('#error_message').html('<p>' + errorMessage + '</p>'); // Display error message
        },
    });
}