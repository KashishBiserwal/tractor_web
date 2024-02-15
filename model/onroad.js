$(document).ready(function() {
    $('#get_on_road').click(get_on_roadadd);
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
            console.log(data);
            const selects = document.querySelectorAll('#brand');

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
            const selects = document.querySelectorAll('#model_1');

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

function get_on_roadadd(event) {
    event.preventDefault();

    // Validate the form
    if (!validateForm()) {
        return; // Stop further execution if form is not valid
    }

    console.log('Form is valid. Proceeding with AJAX request...');

    // Prepare data to send to the server
    // var enquiry_type_id = 2;
    var enquiry_type_id = $('#enquiry_type_id').val();
    var brand = $('#brand').val();
    var model = $('#model_1').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();

    var paraArr = {
        'enquiry_type_id': enquiry_type_id,
        //'insurance_type_id': insurance_type,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile_no,
        'brand_id': brand,
        'model': model,
        'state': state,
        'tehsil': tehsil,
        'district': district,
    };

    // AJAX settings
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';

    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            console.log('Add successfully');
            document.getElementById("tractor_submit_form").reset();
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

function validateForm() {
    // Perform validation on each form field
    var brand = $('#brand').val();
    var model = $('#model_1').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();

    // Example validation: Check if any of the required fields are empty
    if (!brand || !model || !first_name || !last_name || !mobile_no || !state || !tehsil || !district) {
        var msg = "Please fill out all required fields.";
        $("#errorStatusLoading").modal('show');
        // $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Form Validation Failed</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        return false; // Form is not valid
    }

    // If all validations pass, return true
    return true;
}


// function getState() {
//     // var apiBaseURL = APIBaseURL;
//     var url = 'http://tractor-api.divyaltech.com/api/admin/state_data';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log(data);
//             const select = document.getElementById('state');
//             select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
//             if (data.stateData.length > 0) {
//                 data.stateData.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.state_name;
//                     option.value = row.id;
//                     select.appendChild(option);
//                 });
//             } else {
//                 select.innerHTML = '<option>No valid data available</option>';
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//         }
//     });
//   }
//   getState();



function getState() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const select = document.getElementById('state');
            select.innerHTML = '<option selected disabled value="">Please select a state</option>';

            const stateId = 7; // State ID you want to filter for
            const filteredState = data.stateData.find(state => state.id === stateId);
            if (filteredState) {
                const option = document.createElement('option');
                option.textContent = filteredState.state_name;
                option.value = filteredState.id;
                select.appendChild(option);
                // Once the state is populated, fetch districts for this state
                getDistricts(filteredState.id);
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getDistricts(state_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
    console.log(url);
    var select = document.getElementById('district');
    select.innerHTML = '<option selected disabled value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.districtData.length > 0) {
                data.districtData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
    
    $(select).change(function() {
        var districtId = $(this).val();
        var tehsilSelect = document.getElementById('tehsil');
        tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

        var tehsilUrl = ' http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
        $.ajax({
            url: tehsilUrl,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function(data) {
                if (data.tehsilData.length > 0) {
                    data.tehsilData.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.tehsil_name;
                        option.value = row.id;
                        tehsilSelect.appendChild(option);
                    });
                } else {
                    tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
                }
            },
            error: function(error) {
                console.error('Error fetching tehsils:', error);
            }
        });
    });
}

getState();