$(document).ready(function() {
    console.log("ready!");
   $('#rent_submit').click(store);
   $('#rent_implement').click(function() {
    console.log('rent_implement button clicked');
    storeImplement();
});
$('#rent_submit_both').click(function() {
    console.log('rent_implement button clicked');
    storeTractorImplement();
});
   $('#Verify_for_onlyTractor').click(verifyotp1);
   $('#Verify').click(verifyotp2);
   $('#VerifytreactorAndImplement').click(verifyotp3);
   var userId = localStorage.getItem('id');
   getUserDetail(userId);
});
function getimplementbrand() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_implement');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
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
  getimplementbrand();
function get() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
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
  function getbrand() { 
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand3');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_modelbrand(selectedBrandId);
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
    
    function get_modelbrand(brand_id) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                const selects = document.querySelectorAll('#model_main3');
    
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
                    if (data.model.length > 0) {
                        data.model.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.model;
                            option.value = row.model;
                            console.log(option);
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
  
getbrand();

  function get_model(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_main');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        console.log(option);
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


  function get_year_and_hours() {
    console.log('initsfd')
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
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
  
  get_year_and_hours();

  function get_year() {
    console.log('initsfd')
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main1");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
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
  
  get_year();
  function get_year_forboth() {
    console.log('initsfd')
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var select_year = $("#year_main3");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
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
  
  get_year_forboth();

  function implementget() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);

            const select = $('#impType_0');
            select.empty(); // Clear existing options

            // Add a default option
            select.append('<option selected disabled value="">Please select Implement Type</option>');

            // Use an object to keep track of unique categories
            var uniqueCategories = {};

            $.each(data.allCategory, function(index, category) {
                var implement_type = category.id;
                var category_name = category.category_name;

                // Check if the category ID is not already in the object
                if (!uniqueCategories[implement_type]) {
                    // Add category ID to the object
                    uniqueCategories[implement_type] = true;

                    // Append the option to the dropdown
                    select.append('<option value="' + implement_type + '">' + category_name + '</option>');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
implementget();
   
function implementgetonly() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);

            const select = $('#impType_1');
            select.empty(); // Clear existing options

            // Add a default option
            select.append('<option selected disabled value="">Please select Implement Type</option>');

            // Use an object to keep track of unique categories
            var uniqueCategories = {};

            $.each(data.allCategory, function(index, category) {
                var implement_type = category.id;
                var category_name = category.category_name;

                // Check if the category ID is not already in the object
                if (!uniqueCategories[implement_type]) {
                    // Add category ID to the object
                    uniqueCategories[implement_type] = true;

                    // Append the option to the dropdown
                    select.append('<option value="' + implement_type + '">' + category_name + '</option>');
                }
            });
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}
implementgetonly();
/// Display the corresponding form step
function displayStep(step) {
    // Your logic to show/hide form steps
}

function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#mynumber').val();
        if (mobile.length === 10 && $.isNumeric(mobile)) {
            get_otp1(mobile);
        } else {
            alert("Please enter a valid 10-digit mobile number.");
        }
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
            $('#get_OTP_btn').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
} 
function verifyotp1() {
    var mobile = $('#mynumber').val();
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
    var forTractor =$('#forTractor').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var brand_name = $('#brand').val();
    var model = $('#model_main').val();
    var year = $('#year_main1').val();
    var workingRadius = $('#workingRadius').val();
    var first_name = $('#myfname').val();
    var last_name = $('#mylname').val();
    var mobile = $('#mynumber').val();
    var state = $('#state_state').val();
    var district = $('#dist_district').val();
    var tehsil = $('#tehsil_t').val();
    var about = $('#textarea_d').val();
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    // Iterate over each row in the table body
    $('#tractor_rent_only tbody tr').each(function(index) {
        var row = $(this);

        var rate = row.find('.implement-rate-input').val().replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        // Push data into arrays
        rateArray.push(rate);
        ratePerArray.push(ratePer);

        // Push each image file to imageFilesArray
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
    });

    // Create a FormData object
    var formData = new FormData();

    // Append form data
    formData.append('enquiry_type_id', enquiry_type_id);
    formData.append('forTractor', forTractor);
    formData.append('brand_id', brand_name);
    formData.append('model', model);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    formData.append('purchase_year', year);
    formData.append('working_radius', workingRadius);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);
    formData.append('message', about);

    // Append arrays as JSON strings
    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    // Append each image file
    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }

    $.ajax({
        url: 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            // Show success message or handle accordingly
            console.log("Form submitted successfully!");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            // Reload page after OK is clicked
            $('#errorStatusLoading').on('hidden.bs.modal', function (){
                window.location.reload();
            });
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error.responseText || "An error occurred.";
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Request Failed"></img>');
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
                $('#tractor_rent_form #myfname').val(customer.first_name);
                $('#tractor_rent_form #mylname').val(customer.last_name);
                $('#tractor_rent_form #mynumber').val(customer.mobile);
                $('#tractor_rent_form #state_state').val(customer.state_id);
                // $('#tractor_rent_form #dist_district').val(customer.district);
                // $('#tractor_rent_form #tehsil_t').val(customer.tehsil);
                
                if (isUserLoggedIn()) {
                    $('#tractor_rent_form input, #tractor_rent_form select').not('#brand,#dist_district,#tehsil_t,#model_main,#year_main1,#workingRadius,#impImage_0,#impType_0,#implement_rent_0,#impRatePer_0').prop('disabled', true);
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

// function store(event) {
//     event.preventDefault();

//     var enquiry_type_id = $('#enquiry_type_id').val();
//     // var added_by = 0;
//     var brand_name = $('#brand').val();
//     var model = $('#model_main').val();
//     var year = $('#year_main').val();
//     var workingRadius = $('#workingRadius').val();
//     var first_name = $('#myfname').val();
//     var last_name = $('#mylname').val();
//     var mobile = $('#mynumber').val();
//     var state = $('#state_state').val();
//     var district = $('#dist_district').val();
//     var tehsil = $('#tehsil_t').val();
//     var about = $('#textarea_d').val();
//     var implementTypeArray = [];
//     var rateArray = [];
//     var ratePerArray = [];
//     var imageFilesArray = [];

//     // Iterate over each row in the table body
//     $('#rentTractorTable tbody tr').each(function(index) {
//         var row = $(this);

//         var implement_type = row.find('.implement-type-input').val();
//         var rate = row.find('.implement-rate-input').val();
//         rate = rate.replace(/[\,\.\s]/g, '');
//         var ratePer = row.find('.implement-unit-input').val();
//         var image_names = row.find('.image-file-input')[0].files; 

//         // Push data into arrays
//         implementTypeArray.push(implement_type);
//         rateArray.push(rate);
//         ratePerArray.push(ratePer);

//         // Push each image file to imageFilesArray
//         for (var i = 0; i < image_names.length; i++) {
//             imageFilesArray.push(image_names[i]);
//         }
//     });

//     // Create a FormData object
//     var formData = new FormData();

//     // Append form data
//     // formData.append('added_by', added_by);
//     formData.append('enquiry_type_id', enquiry_type_id);
//     formData.append('brand_id', brand_name);
//     formData.append('model', model);
//     formData.append('first_name', first_name);
//     formData.append('last_name', last_name);
//     formData.append('purchase_year', year);
//     formData.append('working_radius', workingRadius);
//     formData.append('mobile', mobile);
//     formData.append('state', state);
//     formData.append('district', district);
//     formData.append('tehsil', tehsil);
//     formData.append('message', about);
//     // Append arrays as JSON strings
//     formData.append('implement_type_id', JSON.stringify(implementTypeArray));
//     formData.append('rate', JSON.stringify(rateArray));
//     formData.append('rate_per', JSON.stringify(ratePerArray));

//     // Append each image file
//     for (var i = 0; i < imageFilesArray.length; i++) {
//         formData.append('images[]', imageFilesArray[i]);
//     }

//     // Make an AJAX request to the server
//     $.ajax({
//         url: 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries',
//         type: 'POST',
//         data: formData,
//         processData: false,
//         contentType: false,
//         success: function (result) {
//             console.log(result, 'result');
//             $("#used_tractor_callbnt_").modal('hide');
//             var msg = 'Added successfully !';
//             $("#errorStatusLoading").modal('show');
//             $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
//             $("#errorStatusLoading").find('.modal-body').html(msg);
//             $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
//             console.log('Add successfully');
            
//             $('#errorStatusLoading').on('hidden.bs.modal', function () {
//                 window.location.reload();
//             });
          
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//             var msg = error.statusText;
//             $("#errorStatusLoading").modal('show');
//             $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
//             $("#errorStatusLoading").find('.modal-body').html(msg);
//             $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
//         }
//     });
// }

function resetFormFields(){
    document.getElementById("rent_list_form_").reset(); // Reset the entire form
    
    // Reset each image input and its preview
    var imageInputs = document.getElementsByClassName("image-file-input");
    for (var i = 0; i < imageInputs.length; i++) {
        imageInputs[i].value = ''; 
        
        var imagePreviewId = "impImagePreview_" + i; // Get the corresponding image preview ID
        document.getElementById(imagePreviewId).setAttribute("src", ""); 
        
        var imageIcon = document.getElementById("impImagePreview_" + i).previousElementSibling; // Get the image icon element
        imageIcon.style.display = "block"; // Set the display property to "block" to show the image icon
    }
}

// DATA STORE FOR ONLY IMPLEMENT 

function storeImplement(event) {
    // event.preventDefault();
    // console.log('button click for only implement');
    
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitFormImplement();
        }
    } else {
        var mobile = $('#mynumber1').val();
        if (mobile.length === 10 && $.isNumeric(mobile)) {
            get_otp2(mobile);
        } else {
            alert("Please enter a valid 10-digit mobile number.");
            $('#myModal').modal('hide'); 
        }
      
    }
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
function get_otp2(phone) {
    console.log('Initiating OTP request for phone:', phone);
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    var paraArr = {
        'mobile': phone
    };
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            $('#myModal').modal('show'); // Show OTP modal only after validation
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function verifyotp2() {
    var mobile = $('#mynumber1').val();
    var otp = $('#otp2').val();
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
            $('#myModal').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitFormImplement();
              
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
function submitFormImplement() {
    var forImplement =$('#forImplement').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var brand_name = $('#brand_implement').val();
    console.log(brand_name,'brand_name');
    // var model = $('#model_main').val();
    // var year = $('#year_main1').val();
    var workingRadius = $('#workingRadius1').val();
    var first_name = $('#myfname1').val();
    var last_name = $('#mylname1').val();
    var mobile = $('#mynumber1').val();
    console.log(mobile,'mobile');
    
    var state = $('#state_state1').val();
    var district = $('#dist_district1').val();
    var tehsil = $('#tehsil_t1').val();
    var about = $('#textarea_d1').val();
    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    // Iterate over each row in the table body
    $('#Implement_rent_only tbody tr').each(function(index) {
        var row = $(this);
        var implement_type = row.find('.implement-type-input').val();
        // var rate = row.find('.only-implement-rate-input').val().replace(/[\,\.\s]/g, '');
        var rate = row.find('.implement-rate-input').val().replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        // Push data into arrays
        implementTypeArray.push(implement_type);
        rateArray.push(rate);
        ratePerArray.push(ratePer);

        // Push each image file to imageFilesArray
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
    });

    // Create a FormData object
    var formData = new FormData();

    // Append form data
    formData.append('enquiry_type_id', enquiry_type_id);
    formData.append('forImplement', forImplement);
    formData.append('brand_id', brand_name);
    // formData.append('model', model);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    // formData.append('purchase_year', year);
    formData.append('working_radius', workingRadius);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);
    formData.append('message', about);

    // Append arrays as JSON strings
    formData.append('implement_type_id', JSON.stringify(implementTypeArray));
    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    // Append each image file
    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }

    $.ajax({
        url: 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            // Show success message
            // var msg = 'Added successfully!';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            // $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').append('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successful Request"></img>');
            // Reload page after OK is clicked
            $('#errorStatusLoading').on('hidden.bs.modal', function () {
                window.location.reload();
            });
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenario
            if (error.status === 500) {
                var msg = 'Somthing went wrong,Please try again..';
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
                $("#errorStatusLoading").find('.modal-body').html(msg);
                $("#errorStatusLoading").find('.modal-body').append('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successful Request"></img>');
                // Reload page after OK is clicked
                $('#errorStatusLoading').on('hidden.bs.modal', function () {
                    window.location.reload();
                });
            } else {
                var msg = error.responseText || "An error occurred.";
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
                $("#errorStatusLoading").find('.modal-body').html(msg);
                $("#errorStatusLoading").find('.modal-body').append('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Request Failed"></img>');
            }
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
                $('#implement_rent_form #myfname1').val(customer.first_name);
                $('#implement_rent_form #mylname1').val(customer.last_name);
                $('#implement_rent_form #mynumber1').val(customer.mobile);
                $('#implement_rent_form #state_state1').val(customer.state_id);
                // $('#implement_rent_form #dist_district').val(customer.district);
                // $('#implement_rent_form #tehsil_t').val(customer.tehsil);
                
                if (isUserLoggedIn()) {
                    $('#implement_rent_form input, #implement_rent_form select').not('#dist_district1,#tehsil_t1,#brand_implement,#model_main,#year_main,#workingRadius1,#customFile2,#impType_1,#implement_rent_1,#impRatePer_1,#textarea_d1').prop('disabled', true);
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

// Rent Tractor and Implement both

function storeTractorImplement(event) {
    // event.preventDefault();
    // console.log('button click for only implement');
    
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForTractorAndImplement();
        }
    } else {
        var mobile = $('#mynumber2').val();
        if (mobile.length === 10 && $.isNumeric(mobile) && /^[6-9]\d{9}$/.test(mobile)) {
            get_otp3(mobile);
        } else {
            console.log('Please enter a valid 10-digit mobile number');
        }
    }
}
function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
function get_otp3(phone) {
    console.log('Initiating OTP request for phone:', phone);
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
            $('#get_OTP_btnBoth').modal('show'); 
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function verifyotp3() {
    var mobile = $('#mynumber2').val();
    var otp = $('#otpverify').val();
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
            $('#get_OTP_btnBoth').modal('hide');
            var isConfirmed = confirm("Are you sure you want to submit the form?");
            if (isConfirmed) {
                submitForTractorAndImplement();
              
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
function submitForTractorAndImplement() {
    // var forTractor =$('#forTractor').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var brand_name = $('#brand3').val();
    var model = $('#model_main3').val();
    var year = $('#year_main3').val();
    var workingRadius = $('#workingRadius3').val();
    var first_name = $('#myfname3').val();
    var last_name = $('#mylname3').val();
    var mobile = $('#mynumber2').val();
    var state = $('#state_state3').val();
    var district = $('#dist_district3').val();
    var tehsil = $('#tehsil_t3').val();
    var about = $('#textarea_d3').val();
    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    // Iterate over each row in the table body
    $('#rentTractorTable tbody tr').each(function(index) {
        var row = $(this);
        // var implement_type = row.find('.implement-type-input').val();
        // var rate = row.find('.implement-rate-input').val().replace(/[\,\.\s]/g, '');
        // var ratePer = row.find('.implement-unit-input').val();
        var implement_type = row.find('.implement-type-input').val();
        var rate = row.find('.implement-rate-input').val();
        rate = rate.replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('input[type="file"]')[0].files;

        // Push data into arrays
        implementTypeArray.push(implement_type);
        rateArray.push(rate);
        ratePerArray.push(ratePer);

        // Push each image file to imageFilesArray
        for (var i = 0; i < image_names.length; i++) {
            imageFilesArray.push(image_names[i]);
        }
    });

    // Create a FormData object
    var formData = new FormData();

    // Append form data
    formData.append('enquiry_type_id', enquiry_type_id);
    // formData.append('forTractor', forTractor);
    formData.append('brand_id', brand_name);
    formData.append('model', model);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    formData.append('purchase_year', year);
    formData.append('working_radius', workingRadius);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);
    formData.append('message', about);

    
    // Append arrays as JSON strings
    formData.append('implement_type_id', JSON.stringify(implementTypeArray));
    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    // Append each image file
    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }

    $.ajax({
        url: 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            // Show success message or handle accordingly
            console.log("Form submitted successfully!");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            // Reload page after OK is clicked
            $('#errorStatusLoading').on('hidden.bs.modal', function (){
                window.location.reload();
            });
        },
        error: function (error) {
            console.error('Error submitting form:', error);
            // Handle error scenarios
            var msg = error.responseText || "An error occurred.";
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Request Failed"></img>');
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
                $('#impRatePer_1 #myfname3').val(customer.first_name);
                $('#impRatePer_1 #mylname3').val(customer.last_name);
                $('#impRatePer_1 #mynumber2').val(customer.mobile);
                $('#impRatePer_1 #state_state3').val(customer.state_id);
                // $('#impRatePer_1 #dist_district').val(customer.district);
                // $('#impRatePer_1 #tehsil_t').val(customer.tehsil);
                
                if (isUserLoggedIn()) {
                    $('#impRatePer_1 input, #impRatePer_1 select').not('#dist_district3,#tehsil_t3,#brand3,#year_main3,#model_main3,#workingRadius3,#customFile2,#impType_1,#implement_rent_1,#impRatePer_1,#textarea_d3').prop('disabled', true);
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