$(document).ready(function() {
    console.log("ready!");
    $('#sell_used_trac_btn').click(store);
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
            const selects = document.querySelectorAll('#b_brand');
  
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
            const selects = document.querySelectorAll('#m_model');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.id;
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
            var hours_select = $("#h_driven");
            hours_select.empty(); // Clear existing options
            hours_select.append('<option selected disabled="" value="">Please select an option</option>'); 
            console.log(data, 'ok');
            for (var k = 0; k < data.getHoursDriven.length; k++){
                var optionText = data.getHoursDriven[k].start + " - " + data.getHoursDriven[k].end;
                hours_select.append('<option value="' + k + '">' + optionText + '</option>');
            } 
  
            var select_year = $("#p_year");
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



    
// Display the corresponding form step
function displayStep(step) {
    // Your logic to show/hide form steps
}

// Store data through form
function store(event) {
    event.preventDefault();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = 1; 
    var brand_name = $('#b_brand').val();
    var model = $('#m_model').val();
    var horse_driven = $('#h_hours').val();
    var purchase_year = $('#p_year').val();
    var engine_condition = $('#engine_condition').val();
    var tyre_condition = $('#tyre_condition').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#m_number').val();
    var state = $('#s_state').val();
    var district = $('#d_dist').val();
    var tehsil = $('#t_tehsil').val();
    var price = $('#p_price').val();
    var about = $('#about').val();
    // var want_to_sell = $('#td_duration').val();
    var rc = $('#rc_num').val();
    var rc_number = $('input[name="fav_rc"]:checked').val();
    var finance = $('input[name="fav_language"]:checked').val();
    var nocAvailable = $('input[name="fav_language1"]:checked').val();
    var image_names = document.getElementById('f_file').files;

    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    // Create a FormData object and append all form data
    var data = new FormData();
    data.append('product_type_id', product_type_id);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('brand_id', brand_name);
    data.append('model', model);
    data.append('hours_driven', horse_driven);
    data.append('purchase_year', purchase_year);
    data.append('engine_condition', engine_condition);
    data.append('tyre_condition', tyre_condition);
    // data.append('description', about_harvester);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);
    data.append('vehicle_registered_num', rc);
    data.append('rc_number', rc_number);
    data.append('finance', finance);
    data.append('noc', nocAvailable);
    data.append('price', price);
    data.append('description', about);


    // Append each image to the FormData object
    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
        console.log("multiple image", image_names[x]);
    }

    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
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
