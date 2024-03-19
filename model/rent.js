$(document).ready(function() {
    console.log("ready!");
   $('#rent_submit').click(store);
});


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
   
/// Display the corresponding form step
function displayStep(step) {
    // Your logic to show/hide form steps
}

// Store data through form
// function store(event) {
//     event.preventDefault();

//     var enquiry_type_id = $('#enquiry_type_id').val();
//     var added_by = 1;
//     var brand_name = $('#brand').val();
//     var model = $('#model_main').val();
//     var year = $('#year_main').val();
//     var workingRadius = $('#workingRadius').val();
//     // var implement_type = $('#impType_0').val();
//     // var rate = $('#implement_rent').val();
//     // var ratePer = $('#impRatePer_0').val();
//     var first_name = $('#myfname').val();
//     var last_name = $('#mylname').val();
//     var mobile = $('#mynumber').val();
//     var state = $('#state_state').val();
//     var district = $('#dist_district').val();
//     var tehsil = $('#tehsil_t').val();
//     var image_names = document.getElementById('impImage_0').files; // Assuming impImage_0 is your image input field

//     // Convert implement_type, rate, and ratePer to JSON strings
//     var implementTypeArray = JSON.stringify($('#impType_0').val());
//     var rateArray = JSON.stringify($('#implement_rent').val());
//     var ratePerArray = JSON.stringify($('#impRatePer_0').val());

//     // Create an object with all the form data
//     var formData = {
//         added_by: added_by,
//         enquiry_type_id: enquiry_type_id,
//         brand_id: brand_name,
//         model: model,
//         year: year,
//         workingRadius: workingRadius,
//         implement_type_id: implementTypeArray,
//         rate: rateArray,
//         rate_per: ratePerArray,
//         first_name: first_name,
//         last_name: last_name,
//         mobile: mobile,
//         state: state,
//         district: district,
//         tehsil: tehsil,
//     };

//     // Create a FormData object and append the form data
//     var data = new FormData();
//     for (var key in formData) {
//         data.append(key, formData[key]);
//     }

//     // Append each image to the FormData object
//     for (var x = 0; x < image_names.length; x++) {
//         data.append("images[]", image_names[x]);
//     }

//     // Log the JSON representation of the form data
//     console.log(JSON.stringify(formData));

//     // Make an AJAX request to the server
//     $.ajax({
//         url: 'http://192.168.1.12:9000/api/customer/customer_enquiries',
//         type: 'POST',
//         data: data,
//         processData: false,
//         contentType: false,
//         success: function(result) {
//             console.log(result, 'result');
//             // Handle success response
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//             // Handle error response
//         }
//     });
// }


function store(event) {
    event.preventDefault();

    var enquiry_type_id = $('#enquiry_type_id').val();
    var added_by = 1;
    var first_name = $('#myfname').val();
    var last_name = $('#mylname').val();
    var mobile = $('#mynumber').val();
    var state = $('#state_state').val();
    var district = $('#dist_district').val();
    var tehsil = $('#tehsil_t').val();

    var implementTypeArray = [];
    var rateArray = [];
    var ratePerArray = [];
    var imageFilesArray = [];

    // Iterate over each row in the table body
    $('#rentTractorTable tbody tr').each(function(index) {
        var row = $(this);

        var implement_type = row.find('.implement-type-input').val();
        var rate = row.find('.implement-rate-input').val();
        rate = rate.replace(/[\,\.\s]/g, '');
        var ratePer = row.find('.implement-unit-input').val();
        var image_names = row.find('.image-file-input')[0].files; // Assuming image input field class is .image-file-input

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
    formData.append('added_by', added_by);
    formData.append('enquiry_type_id', enquiry_type_id);
    formData.append('first_name', first_name);
    formData.append('last_name', last_name);
    formData.append('mobile', mobile);
    formData.append('state', state);
    formData.append('district', district);
    formData.append('tehsil', tehsil);

    // Append arrays as JSON strings
    formData.append('implement_type_id', JSON.stringify(implementTypeArray));
    formData.append('rate', JSON.stringify(rateArray));
    formData.append('rate_per', JSON.stringify(ratePerArray));

    // Append each image file
    for (var i = 0; i < imageFilesArray.length; i++) {
        formData.append('images[]', imageFilesArray[i]);
    }

    // Make an AJAX request to the server
    $.ajax({
        url: 'http://192.168.1.12:9000/api/customer/customer_enquiries',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, 'result');
            $("#used_tractor_callbnt_").modal('hide');
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
            
            $('#errorStatusLoading').on('hidden.bs.modal', function () {
                window.location.reload();
            });
          
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error.statusText;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        }
    });
}

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