$(document).ready(function () {
      $('#store').click(store);
    //   $('#Mobile').click(get_otp);
    $('#Verify').click(verifyotp);
      get();
      get_year_and_hours();
      $('#find-used-tractor-form').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();
        
        // Call the store function to handle form submission
        store();
    });
    // get_lookup();
    });

    function get() {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                // console.log(data);
                const selects = document.querySelectorAll('.btand_select');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.brands.length > 0) {
                        data.brands.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.brand_name;
                            option.value = row.id;
                            console.log(option);
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
      
      function get_model(brand_id) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
        console.log('Requesting models for brand ID:', brand_id); // Debugging statement
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log('Received models data:', data); // Debugging statement
                const selects = document.querySelectorAll('.model_select');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.model && data.model.length > 0) {
                        data.model.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.model;
                            option.value = row.model;
                            console.log('Adding model:', option); // Debugging statement
                            select.appendChild(option);
                        });
                    } else {
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                });
            },
            error: function (error) {
                console.error('Error fetching model data:', error);
            }
        });
      }
      get();
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
                    $('#choices-multiple-remove-button').parent().find('.choices__list.choices__list--multiple').css('max-height', '200px'); // Adjust the height as needed
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
function store() {
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
    var phone = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var budget = $('#budget').val();
    var enquiryTypeId = 24;

    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = {
        brand_id_array: brandArray, // Corrected from brandArray to brands
        model_array: modelArray,
        first_name: firstName,
        last_name: lastName,
        mobile: phone,
        state: state,
        budget: budget,
        district: district,
        manufacture_year: yearArray,
        enquiry_type_id: enquiryTypeId
    };

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        headers: headers,
        success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            // Show the OTP modal
            $('#get_OTP_btn').modal('show');
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function get_otp() {
    var phone = $('#phone').val();
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
 
    var paraArr = {
     'mobile': phone,
   };
   //  var token = localStorage.getItem('token');
   //   var headers = {
   //   'Headers': 'Bearer ' + token
   //   };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
     //  headers: headers,
      success: function (result) {
        console.log(result, "result");
       
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }


  function verifyotp() {
    var mobile = document.getElementById('phone').value;
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
            $('#otp_form').modal('hide'); // Assuming it's a Bootstrap modal

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
