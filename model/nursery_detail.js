$(document).ready(function() {
    console.log("ready!");
    // $('#button_nursery').click(storedata);
    var allCards = [];
    nursery_details_list(allCards);
  getNurseryById();
//    getnurseryList();
   $('#button_nursery').click(store);
   $('#Verify').click(verifyotp);
   $('#Verify_inner').click(verify_otp);


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
    console.log('jfhfhw');
    var product_id = $('#product_id').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var first_name = $('#fname').val();
    var last_name = $('#lname').val();
    var mobile_no = $('#phone_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();

    // Check if the user is already logged in
    checkLoginStatus(mobile_no, function(isLoggedIn) {
        if (!isLoggedIn) {
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
            };

            var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";

            // Make an AJAX request to the server
            $.ajax({
                url: url,
                type: "POST",
                data: paraArr,
                success: function(result) {
                    console.log(result, "result");
                    $("#used_tractor_callbnt_").modal('hide');
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
        } else {
            // User is already logged in, do not open OTP modal
            console.log('User is already logged in.');
            // Optionally, you can show a message to the user indicating they are already logged in
        }
    });
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


// store data throught form
// function store(event) {
//     event.preventDefault();
//     console.log('jfhfhw');
//     var product_id = $('#product_id').val();
//     var enquiry_type_id = $('#enquiry_type_id').val();
//     var first_name = $('#fname').val();
//     var last_name = $('#lname').val();
//     var mobile_no = $('#phone_number').val();
//     var state = $('#state').val();
//     var district = $('#district').val();
//     var tehsil = $('#tehsil').val();
//     // Prepare data to send to the server
//     var paraArr = {
//       'product_id':product_id,
//       'enquiry_type_id':enquiry_type_id,
//       'first_name': first_name,
//       'last_name':last_name,
//       'mobile':mobile_no,
//       'state':state,
//       'district':district,
//       'tehsil':tehsil,
//     };
   
//   var apiBaseURL =APIBaseURL;
// //   var url = apiBaseURL + 'customer_enquiries';
// var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
//     console.log(url);
  
  
//     // Make an AJAX request to the server
//     $.ajax({
//       url: url,
//       type: "POST",
//       data: paraArr,
//       success: function (result) {
//         console.log(result, "result");
       
//         $("#used_tractor_callbnt_").modal('hide'); 
//         $('#get_OTP_btn').modal('show');
//         get_otp_1(mobile_no);
      
//       },
//       error: function (error) {
//         console.error('Error fetching data:', error);
//         var msg = error;
//         $("#errorStatusLoading").modal('show');
//         $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
//         $("#errorStatusLoading").find('.modal-body').html(msg);
//         $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
//         // 
//       }
//     });
//   }

//   function get_otp_1(phone) {
//     var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
 
//     var paraArr = {
//         'mobile': phone,
//     };

//     $.ajax({
//         url: url,
//         type: "POST",
//         data: paraArr,
//         success: function (result) {
//             console.log(result, "result");

//             // Once OTP is received, store mobile number in hidden field within modal
//             $('#mobile_verify').val(phone);

//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function verifyotp() {
//     var mobile = document.getElementById('mobile_verify').value;
//     var otp = document.getElementById('otp').value;

//     var paraArr = {
//         'otp': otp,
//         'mobile': mobile,
//     }
//     var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
//     $.ajax({
//         url: url,
//         type: "POST",
//         data: paraArr,
//         success: function (result) {
//             console.log(result);

//             // Assuming your model has an ID 'myModal', hide it on success
//             $('#get_OTP_btn').modal('hide'); // Assuming it's a Bootstrap modal
//             $('#staticBackdrop').modal('show');
//             // Reset input fields
//             // document.getElementById('phone').value = ''; 
//             // document.getElementById('otp').value = ''; 

//             // Access data field in the response
//         }, 
//         error: function (xhr, textStatus, errorThrown) {
//             console.log(xhr.status, 'error');
//             if (xhr.status === 401) {
//                 console.log('Invalid credentials');
//                 var htmlcontent = `<p>Invalid credentials!</p>`;
//                 document.getElementById("error_message").innerHTML = htmlcontent;
//             } else if (xhr.status === 403) {
//                 console.log('Forbidden: You don\'t have permission to access this resource.');
//                 var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
//                 document.getElementById("error_message").innerHTML = htmlcontent;
//             } else {
//                 console.log('An error occurred:', textStatus, errorThrown);
//                 var htmlcontent = `<p>An error occurred while processing your request.</p>`;
//                 document.getElementById("error_message").innerHTML = htmlcontent;
//             }
//         },
//     });
// }

function nursery_details_list(allCards) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/nursery_data';

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#loadMoreBtn");
            var fullname = data.nursery_data[0].first_name + ' ' + data.nursery_data[0].last_name;
            document.getElementById('slr_name_1').value=fullname;
            document.getElementById('mob_num_1').value = data.nursery_data[0].mobile;
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
    var cardId = `card_${p.id}`; // Dynamic ID for the card
    var modalId = `nursery_callbnt_${p.id}`; // Dynamic ID for the modal
    var formId = `nursery_enquiry_form_${p.id}`; // Dynamic ID for the form
    
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
                            <p class="fw-bold pe-3 text-truncate ">${p.district_name}, ${p.state_name}</p>
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
                                            <label for="name" class="form-label fw-bold text-dark"> <i class="fa-regular fa-user"></i> product_id</label>
                                            <input type="text" class="form-control" id="product_id" value="${p.product_id}" hidden> 
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
function savedata(formId) {
nursery_enquiry(formId);
console.log("Form submitted successfully");
}

function openOTPModal() {
$('#get_OTP_btn_inner').modal('show');
}

function nursery_enquiry(formId) {
// Get mobile number from the form
var mobile_number = $(`#${formId} #mobile_number_1`).val();

// Send nursery enquiry request
var enquiry_type_id = $(`#${formId} #enquiry_type_id`).val();
var product_id = 3;  // You may need to adjust this based on your logic
var first_name = $(`#${formId} #first_name_1`).val();
var last_name = $(`#${formId} #last_Name_1`).val();
var state = $(`#${formId} #state_1`).val();
var district = $(`#${formId} #district_1`).val();
var tehsil = $(`#${formId} #Tehsil_1`).val();

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
        var msg = "Added successfully !";
        $("#errorStatusLoading").modal('hide');
        get_otp(mobile_number); // Pass mobile number to get_otp function
        openOTPModal();
    },
    error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
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

  function verify_otp() {
    var mobile = document.getElementById('Mobile_2').value;
    var otp = document.getElementById('otp_2').value;

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
            $('#get_OTP_btn_inner').modal('hide'); // Assuming it's a Bootstrap modal
            $('#staticBackdrop_inner').modal('show');
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



populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
