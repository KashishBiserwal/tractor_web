$(document).ready(function() {
    console.log("ready!");
    $('#submit_enquiry').click(store);
    $('#Verify').click(verifyotp);
    getEngineoilById();
    getEngineoilList();

    // $('#engine_oil_form').submit(engineoil_enquiry_1);

    $("#engine_oil_form").validate({
        rules: {
            brandName: {
                required: true
            },
            modeName: {
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
                notEqual: "Select State"
            },
            district: {
                required: true,
                notEqual: "Select District"
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
            engineoil_enquiry();
        }
    });

});
function formatPriceWithCommas(price) {
  // Check if the price is not a number
  if (isNaN(price)) {
      return price; // Return the original value if it's not a number
  }
  
  // Format the price with commas in Indian format
  return new Intl.NumberFormat('en-IN').format(price);
}
function getEngineoilById() {
    console.log(window.location)
    var urlParams = new URLSearchParams(window.location.search);
    var Id = urlParams.get('id');
    var url = "http://tractor-api.divyaltech.com/api/customer/engine_oil_by_id/" + Id;
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        document.getElementById('brand_name').innerText=data.engine_oil_details[0].brand_name ;
        document.getElementById('model_name').innerText=data.engine_oil_details[0].oil_model;
        document.getElementById('grade').innerText=data.engine_oil_details[0].grade;
        document.getElementById('quantity').innerText=data.engine_oil_details[0].quantity;
        document.getElementById('price').innerText=data.engine_oil_details[0].price;
        document.getElementById('compatible_tractor').innerText=JSON.parse(data.engine_oil_details[0].compatible_model);
        document.getElementById('description').innerText=data.engine_oil_details[0].description;
        document.getElementById('product_subject_id').value =data.engine_oil_details[0].id;
        console.log(data.engine_oil_details[0].id,'jhgfsaygtfrds');
            var product = data.engine_oil_details[0];
            var imageNames = product.image_names.split(',');
            var carouselContainer = $('.mySwiper2_data');
            var carouselContainer2 = $('.mySwiper_data');

            carouselContainer.empty();

            imageNames.forEach(function(imageName) {
                var imageUrl = "http://tractor-api.divyaltech.com/uploads/engine_oil_img/" + imageName.trim(); 
                var slide = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                var slide2 = $('<div class="swiper-slide swiper-slide_buy"><img class="img_buy" src="' + imageUrl + '" /></div>');
                carouselContainer.append(slide);
                carouselContainer2.append(slide2);
            });

           // Initialize or update the Swiper carousel
            var mySwiper = new Swiper('.mySwiper2_data', {
              // Your Swiper configuration options
          });
          var mySwiper = new Swiper('.mySwiper_data', {
              // Your Swiper configuration options
          });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
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

function getEngineoilList() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/engine_oil';
  var totalEngineoil = 0;
  var displayedEngineoil = 4;

  $.ajax({
      url: url,
      type: "GET",
      success: function(data) {
          var productContainer = $("#productContainer");
          var loadMoreButton = $("#load_moretract");

          if (data.engine_oil_details && data.engine_oil_details.length > 0) {
              totalEngineoil = data.engine_oil_details.length;

              // Reverse the order of the engine oil items to display the latest ones first
              data.engine_oil_details.reverse();

              // Display the initial set of 6 engine oil items
              displayEngineoil(data.engine_oil_details.slice(0, displayedEngineoil));

              if (totalEngineoil <= displayedEngineoil) {
                  loadMoreButton.hide();
              } else {
                  loadMoreButton.show();
              }

              // Handle "Load More Engine Oil" button click
              loadMoreButton.click(function() {
                  // Display all engine oil items
                  displayedEngineoil = totalEngineoil;
                  displayEngineoil(data.engine_oil_details);

                  // Hide the "Load More Engine Oil" button
                  loadMoreButton.hide();
              });
          }
      },
      error: function(error) {
          console.error('Error fetching data:', error);
      }
  });
}


function displayEngineoil(engineoil) {
var productContainer = $("#productContainer");
var tableData = $("#tableData");
// Clear existing content
productContainer.html('');
tableData.html('');

engineoil.forEach(function (p) {
  var images = p.image_names ? p.image_names.split(',') : [];
  var imageSrc = images.length > 0 ? `http://tractor-api.divyaltech.com/uploads/engine_oil_img/${images[0]}` : '';
  var cardId = `card_${p.id}`; 

  var modalId = `engineoil_callbnt_${p.id}`;
  var formId = `engine_oil_form_${p.id}`; 
  var formattedPrice = formatPriceWithCommas(p.price);
  var newCard2 = `
  <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2 px-1 text-decoration-none" id=${cardId}>           
  <div class="success__stry__item h-100 shadow text-dark">
      <div class="thumb">
          <a href="engine_oil_inner.php?id=${p.id}">
              <img src="${imageSrc}" class="engineoil_img w-100" alt="img">
          </a>
      </div>
      <a href="engine_oil_inner.php?id=${p.id}" class="text-decoration-none text-dark content mb-0">
          <p class="fs-5 fw-bold px-3 mb-0">${p.brand_name}</p>
          <p class="text-success fw-bold px-3" style="font-size:12px;">Model: ${p.oil_model}</p>
          <div class="col-12 px-3">
              <div class="row">
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 engineoil_details pe-1">
                      <p>Grade: ${p.grade}</p>
                  </div>
                  <div class="col-12 col-lg-6 col-md-6 col-sm-6 engineoil_details ps-1">
                      <p>Quantity: ${p.quantity}L</p>
                  </div>                  
              </div>
          </div>
          <div class="row">
              <h3 class="text-center text-dark" style="font-size: 25px;"><i class="fa fa-indian-rupee-sign" style="font-size: 22px;"></i>${formattedPrice}</h3>
          </div>  
      </a>
      <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">Request Call Back</button>
  </div>              
</div>

<div class="modal fade" id="${modalId}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header modal_head">
              <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Request Call Back</h5>
              <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
          </div>
          <!-- MODAL BODY -->
          <div class="modal-body bg-white mt-3">
          <form id="${formId}" class="engine_oil_form" method="POST" onsubmit="return false">
          <div class="row">
              <input type="hidden" id="brandName" value="${p.brand_name}">
              <input type="hidden" id="modelName" value="${p.oil_model}">
              <input type="hidden" id="enquiry_type_id" value="12" name="iduser">
              <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
              <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i>product_id</label>
              <input type="text" class="form-control" id="product_id" value="${p.id}"> 
          </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                  <label for="firstName" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                  <input type="text" class="form-control" placeholder="Enter First Name" id="firstName" name="firstName">
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                  <label for="lastName" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter Last Name" id="lastName" name="lastName">
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                  <label for="mobile_number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                  <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number">
                  <p class="text-danger">*Please make sure mobile number is valid</p>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-outline mt-4 p-2">
                      <label for="state" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                      <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state" name="state">
                          <!-- Options for state dropdown -->
                      </select>
                  </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                  <div class="form-outline">
                      <label for="district" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                      <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district" name="district">
                          <!-- Options for district dropdown -->
                      </select>
                  </div>
              </div>       
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                  <div class="form-outline">
                      <label for="Tehsil" class="form-label fw-bold text-dark"> Tehsil</label>
                      <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil" name="Tehsil">
                          <option value="" selected disabled>Please select a tehsil</option>
                          <!-- Options for Tehsil dropdown -->
                      </select>
                  </div>
              </div>
          </div> 
          <div class="text-center my-3">
              <button type="submit" id="submit_enquiry_${p.id}"   data-bs-dismiss="modal" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')">Submit</button>        
          </div>        
      </form>                           
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
</div>
  `;

  // Append the new card to the container
  productContainer.append(newCard2);
  var myDiv = $('#description_id');
  myDiv.text(myDiv.text().substring(0,120))
          // Append the new card to the container
          // productContainer.append(newCard);
  // Populate dropdowns
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

var formData = {};

function savedata(formId) {
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitData(formId);
            // openSellerContactModal(formDataToSubmit)
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
            $("#engineoil_callbnt_").modal('hide');
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
    $('#get_OTP_btn1').modal('show');
}

function verifyotp1(formId) {
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

    var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
            $('#get_OTP_btn1').modal('hide');
            submitData(formId); 
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
            

            var msg = "Added successfully !";
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
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
    var brandName = $(`#${formId} #brandName`).val();
    var modelName = $(`#${formId} #modelName`).val();
    var first_name = $(`#${formId} #firstName`).val();
    var last_name = $(`#${formId} #lastName`).val();
    var mobile = $(`#${formId} #mobile_number`).val();
    var state = $(`#${formId} #state`).val();
    var district = $(`#${formId} #district`).val();
    var Tehsil = $(`#${formId} #Tehsil`).val();
    var enquiry_type_id =$(`#${formId} #enquiry_type_id`).val();
    var product_id =$(`#${formId} #product_id`).val();

    var formData = {
        'brand_name': brandName,
        'model': modelName,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
        'enquiry_type_id':enquiry_type_id,
        'product_id':product_id,
    };

    return formData;
}

function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#mobile_number').val();
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
            $('#get_OTP_btn').modal('show'); // OTP modal is displayed for entering OTP
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp() {
    var mobile = $('#mobile_number').val();
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
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();
    var enquiry_type_id =$('#enquiry_type_id').val();
    var product_subject_id =$('#product_subject_id').val();

    var paraArr = {
        'first_name': firstName,
        'last_name': lastName,
        'mobile': mobile_number,
        'state': state,
        'district': district,
        'tehsil': Tehsil,
        'enquiry_type_id':enquiry_type_id,
        'product_id':product_subject_id,
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


