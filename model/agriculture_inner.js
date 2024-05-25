$(document).ready(function() {
    console.log("ready!");
    getagrclg();
 $('#college_button').click(storedata);
    $('#Verify').click(verifyotp1);
});

function getagrclg() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var college_id = urlParams.get('id');
    console.log(college_id,'sdfghjksdfghjk');
    var url = 'http://tractor-api.divyaltech.com/api/customer/agriculture_data/' + college_id;
    
    $.ajax({    
        url: url,
        type: "GET",
        success: function(data) {
            console.log(data, 'abc');
            var userId = localStorage.getItem('id');
            getUserDetail(userId);
  
            var fullMobileNumber = data.colleges_data[0].mobile;
            var mobileString = fullMobileNumber.toString();
            var lastFourDigits = mobileString.substring(mobileString.length - 4);
            var maskedPart = 'xxxxxx'.padStart(mobileString.length - 4, 'x');
            var maskedMobileNumber = maskedPart + lastFourDigits;

            document.getElementById('first_College_name').innerText = data.colleges_data[0].college_name;
            document.getElementById('phone_number').innerText = maskedMobileNumber;
            document.getElementById('state_1').innerText = data.colleges_data[0].state_name;
            document.getElementById('district_dist').innerText = data.colleges_data[0].district_name;
            document.getElementById('tehsil_1').innerText = data.colleges_data[0].tehsil_name;
   
            document.getElementById('product_id').value = data.colleges_data[0].id;
          
            var imageNames = data.colleges_data[0].image_names.split(',');
  
              // Select the carousel container
              var carouselContainer = $('.swiper-wrapper_buy');
  
              // Clear existing slides
              carouselContainer.empty();
  
              // Initialize an empty array to store Swiper slides
              var swiperSlides = [];
  
              // Iterate through the image names and create carousel slides
              imageNames.forEach(function(imageName, index) {
                  var imageUrl = "http://tractor-api.divyaltech.com/uploads/agricultureclg_img/" + imageName.trim(); // Update the path
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
            // $('#seller_contact').modal('show');
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
                // $('#seller_contact').modal('show');
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
            $('#college_form')[0].reset();
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
                $('#college_form #fname').val(customer.first_name);
                $('#college_form #lname').val(customer.last_name);
                $('#college_form #number_number').val(customer.mobile);
                $('#college_form #state_2').val(customer.state_id);
                // $('#college_form #district').val(customer.district);
                // $('#college_form #tehsil').val(customer.tehsil);
                
                // Disable fields if user is logged in
                if (isUserLoggedIn()) {
                    // Disable all input and select elements within the form
                    $('#college_form input, #college_form select').not('#district,#tehsil').prop('disabled', true);
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