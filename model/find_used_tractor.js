$(document).ready(function () {
      $('#store').click(store);
    $('#Verify').click(verifyotp);
  
      get_year_and_hours();
    
    });

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
                        option.value = row.id; // Assuming model ID should be used as value
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
                // $('#staticBackdrop').modal('show');
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

    var brands = $('.btand_select').map(function() {
        return $(this).val();
    }).get();

    var models = $('.model_select').map(function() {
        return $(this).val();
    }).get();

    var years = $('#choices-multiple-remove-button').val(); // Assuming it's a multi-select input

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

    // Submit form data via AJAX
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (response) {
           console.log(response);
                        console.log("Data stored successfully !");
            $('#get_OTP_btn').modal('hide');
                
               if (response.data.length === 0) {
                          // If data array is empty, display a message or take appropriate action
                         $("#productContainer").html("<p>No data available.</p>");
                      } else {
                             // Iterate through the data array and generate cards for each item
                        response.data.forEach(function (item) {
                           // Extract necessary data from the item
                           var images = item.image_names.split(',');
                            var brandName = item.brand_name;
                             var model = item.model;
                             var purchase_year = item.purchase_year;
                              var hp_category = item.hp_category;
                                // Generate HTML for the card
                              var newCard = `
                                <div class="col-12 col-lg-4 col-md-4 col-sm-4 mb-4">
                                         <div class="success__stry__item shadow h-100 bg-white">
                                          <div class="thumb">
                                             <div>
                                                     <div class="">
                                                       <img src="http://tractor-api.divyaltech.com/uploads/product_img/${images[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                                                    </div>
                                            </div>
                                            </div>
                                           
                                            <div class="row text-center">
                                           <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                           <p class="mb-1 fw-bold text-danger">${brandName}</p>
                                             </div>
                                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <p class="mb-0 fw-bold text-hover-green">${model}</p>
                                             </div>
                                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <p class="mb-0 fw-bold pb-2 text-danger">${hp_category} <span>HP</span></p>
                                           </div>
                                          <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                          <p class="mb-0 fw-bold pb-2 text-hover-green">${purchase_year}</p>
                                          </div>
                                         </div>
                                  </div>
                                    </div>
                               `;
                
                                // Append the new card HTML to the product container
                               $("#productContainer").append(newCard);
                            });
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
        }
    });
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
