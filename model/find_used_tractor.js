$(document).ready(function () {
      $('#store').click(store);
    $('#Verify').click(verifyotp);
  
      get_year_and_hours();
      var userId = localStorage.getItem('id');
      getUserDetail(userId);
    });

    function formatPriceWithCommas(price) {
        if (isNaN(price)) {
            return price; 
        }
        
        return new Intl.NumberFormat('en-IN').format(price);
    }

    function get_brands(brandSelect) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                brandSelect.innerHTML = '<option selected disabled value="">Please select a brand</option>';
    
                if (data.brands && data.brands.length > 0) {
                    data.brands.forEach(row => {
                        var option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        brandSelect.appendChild(option);
                    });
                } else {
                    brandSelect.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function(error) {
                console.error('Error fetching brand data:', error);
            }
        });
    }
    
    function get_model(brand_id, modelSelect) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                modelSelect.innerHTML = '<option selected disabled value="">Please select a model</option>';
    
                if (data.model && data.model.length > 0) {
                    data.model.forEach(row => {
                        var option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model; 
                        modelSelect.appendChild(option);
                    });
                } else {
                    modelSelect.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function(error) {
                console.error('Error fetching model data:', error);
            }
        });
    }
    
      function get_year_and_hours() {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                var select_year = $("#choices-multiple-remove-button");
                select_year.empty(); // Clear existing options
                
                // Add an empty option as a placeholder
                // select_year.append('<option value="" selected disabled>Please select an option</option>'); 
    
                if (data.getYears && data.getYears.length > 0) {
                    // Sort the array in descending order
                    data.getYears.sort(function(a, b) {
                        return b - a;
                    });
    
                    for (var j = 0; j < data.getYears.length; j++) {
                        select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
                    }
                    
                    // Reinitialize Choices after updating options
                    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                        removeItemButton: true,
                        maxItemCount: false, // Disable the limit on the number of items displayed
                        searchResultLimit: 5
                    });
                    
                    // Set maximum height for the dropdown to enable scrolling
                    $('#choices-multiple-remove-button').parent().find('.choices__list.choices__list--multiple').css('max-height', '300px'); // Adjust the height as needed
                } else {
                    console.error('No years data found in the API response.');
                }
            },
            complete: function() {
                // You can add code here that will run after the request is complete
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    
    
// insert data



function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
            // $('#staticBackdrop').modal('show');
        }
    } else {
        var mobile = $('#phone').val();
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
    var mobile = $('#phone').val();
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
    var selectedOptions = [];
    $("#choices-multiple-remove-button:selected").each(function () {
        var value = $(this).val();
        if ($.trim(value)) {
            selectedOptions.push(value);
        }
    });

    var brands = $('.brand_select').map(function() {
        return $(this).val();
    }).get();

    var models = $('.model_select').map(function() {
        return $(this).val();
    }).get();

    var years = $('#choices-multiple-remove-button').val(); 

    console.log("accessory select:", selectedOptions);
    var multiselect = JSON.stringify(selectedOptions);
    var brandArray = JSON.stringify(brands);
    var modelArray = JSON.stringify(models);
    var yearArray = JSON.stringify(years);
    var firstName = $('#fName').val();
    var lastName = $('#lName').val();
    var mobile = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var budget = $('#budget').val();
    var enquiryTypeId = 24;

    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
 

    var data = {
        brand_id_array: brandArray, // Corrected from brandArray to brands
        model_array: modelArray,
        first_name: firstName,
        last_name: lastName,
        mobile: mobile,
        state: state,
        budget: budget,
        district: district,
        manufacture_year: yearArray,
        enquiry_type_id: enquiryTypeId
    };
    // API endpoint for form submission
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_enquiries";

    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (response) {
            console.log(response);
            console.log("Data stored successfully !");
            $('#get_OTP_btn').modal('hide');

            if (response.data.length === 0) {
                $("#productContainer").html('<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>').show(); // Show instantly
            } else {
                // If data is available, render the cards
                response.data.forEach(function (p) {
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
                    // var modalId_2 = `staticBackdrop_${p.product_id}`; 
                    var formId = `contact-seller-call_${p.product_id}`; 
                    var formattedPrice = formatPriceWithCommas(p.price);
                    // var fullname = p.first_name + ' ' + p.last_name;
                    var newCard = `
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3 mb-4" id="${cardId}">
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
                                    <p class="pt-3"><strong class="series_tractor_strong text-center text-truncate h5 fw-bold ">${p.model}</strong></p>
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
                               <a href="used_tractor.php">
                                    <button type="button" class="add_btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                        <i class="fa-regular fa-handshake mx-1"></i>Contact Seller
                                    </button>
                                    </a>
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
                                                            
                                                            <!-- Options for Tehsil dropdown -->
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
                                                 <a href="farmtrac_60.php">
                                                            <button type="submit" id="submit_enquiry" class="btn add_btn btn-success w-100 btn_all" onclick="savedata('${formId}')"
                                                            data-bs-dismiss="modal">Submit</button>
                                                       </a>
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
                    `;
                    // Append the new card HTML to the product container
                    $("#productContainer").append(newCard); 
                });
                // Show cards instantly by disabling fading effect
                $("#productContainer").show();
                $(".modal-backdrop.fade.show").remove();
            }
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');

            // Show error message instantly
            $("#productContainer").html('<h5 id="noDataMessage" class="text-center mt-4 text-danger"><img src="assets/images/404.gif" class="w-25" alt=""><br>Data not found..!</h5>').show();
            $(".modal-backdrop.fade.show").remove();
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
                
                $('#find-used-tractor-form #fName').val(customer.first_name);
                $('#find-used-tractor-form #lName').val(customer.last_name);
                $('#find-used-tractor-form #phone').val(customer.mobile);
                $('#find-used-tractor-form #state').val(customer.state_id);
                // $('#find-used-tractor-form #district').val(customer.district);
                
                if (isUserLoggedIn()) {
                    // Disable specific input and select elements within the form
                    $('#find-used-tractor-form #fName, #find-used-tractor-form #lName, #find-used-tractor-form #phone, #find-used-tractor-form #state').not('#district').prop('disabled', true);
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

// function store() {
//     var selectedOptions = [];
//     $("#choices-multiple-remove-button:selected").each(function () {
//         var value = $(this).val();
//         if ($.trim(value)) {
//             selectedOptions.push(value);
//         }
//     });

//     var brands = $('.btand_select').map(function() {
//         return $(this).val();
//     }).get();

//     var models = $('.model_select').map(function() {
//         return $(this).val();
//     }).get();

//     var years = $('#choices-multiple-remove-button').val(); // Assuming it's a multi-select input

//     console.log("accessory select:", selectedOptions);
//     var multiselect = JSON.stringify(selectedOptions);
//     var brandArray = JSON.stringify(brands);
//     var modelArray = JSON.stringify(models);
//     var yearArray = JSON.stringify(years);
//     var firstName = $('#fName').val();
//     var lastName = $('#lName').val();
//     var phone = $('#phone').val();
//     var state = $('#state').val();
//     var district = $('#district').val();
//     var budget = $('#budget').val();
//     var enquiryTypeId = 24;

//     // var apiBaseURL = APIBaseURL;
//     var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
//     var token = localStorage.getItem('token');
//     var headers = {
//         'Authorization': 'Bearer ' + token
//     };

//     var data = {
//         brand_id_array: brandArray, // Corrected from brandArray to brands
//         model_array: modelArray,
//         first_name: firstName,
//         last_name: lastName,
//         mobile: phone,
//         state: state,
//         budget: budget,
//         district: district,
//         manufacture_year: yearArray,
//         enquiry_type_id: enquiryTypeId
//     };

//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: data,
//         headers: headers,
//         success: function (response) {
//             console.log(response);
//             console.log("Data stored successfully !");
//             $('#get_OTP_btn').modal('show');
    
//             if (response.data.length === 0) {
//                 // If data array is empty, display a message or take appropriate action
//                 $("#productContainer").html("<p>No data available.</p>");
//             } else {
//                 // Iterate through the data array and generate cards for each item
//                 response.data.forEach(function (item) {
//                     // Extract necessary data from the item
//                     var images = item.image_names.split(',');
//                     var brandName = item.brand_name;
//                     var model = item.model;
//                     var purchase_year = item.purchase_year;
//                     var hp_category = item.hp_category;
//                     // Generate HTML for the card
//                     var newCard = `
//                         <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
//                             <div class="success__stry__item shadow h-100 bg-white">
//                                 <div class="thumb">
//                                     <div>
//                                         <div class="">
//                                             <img src="http://tractor-api.divyaltech.com/uploads/product_img/${images[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
//                                         </div>
//                                     </div>
//                                 </div>
                               
//                                 <div class="row text-center">
//                                 <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                                 <p class="mb-1 fw-bold text-danger">${brandName}</p>
//                                 </div>
//                                 <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                                 <p class="mb-0 fw-bold text-hover-green">${model}</p>
//                                 </div>
//                                 <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                                 <p class="mb-0 fw-bold pb-2 text-danger">${hp_category} <span>HP</span></p>
//                                 </div>
//                                 <div class="col-12 col-sm-6 col-md-6 col-lg-6">
//                                 <p class="mb-0 fw-bold pb-2 text-hover-green">${purchase_year}</p>
//                                 </div>
//                             </div>
//                             </div>
//                         </div>
//                     `;
    
//                     // Append the new card HTML to the product container
//                     $("#productContainer").append(newCard);
//                 });
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }




// function displayCard() {
//     var container = $("#productContainer");
//     var images = "http://tractor-api.divyaltech.com/uploads/product_img/example.jpg"; // Update with the actual image path
//     var newCard = `
//     <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
//         <div class="success__stry__item shadow h-100 bg-white">
//             <div class="thumb">
//                 <div>
//                     <div class="">
//                         <img src="${images}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
//                     </div>
//                 </div>
//             </div>
//             <div class="row ms-3">
//                 <p class="mb-1 fw-bold text-danger">${brandName}</p>
//                 <p class="mb-0 fw-bold text-hover-green">${model}</p>
//                 <button type="button" class="fs-6 fw-bold text-success text-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Tractor Price</button>
//             </div>
//         </div>
//     </div>
//         `;
//     container.html(newCard);
//     $("#section-2").show(); // Show the section after adding the card
// }
