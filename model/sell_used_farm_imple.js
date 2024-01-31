$(document).ready(function() {
    console.log("ready!");
    $('#sell_used_trac_btn').click(store);
});

// get brand
function get() {
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/getBrands';
  
    $.ajax({
      url: url,
      type: "GET",
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
        console.log(data);
       // select.innerHTML = '<option selected disabled value="">Please select an option</option>';
        const select = $('#brand_1');
        select.empty(); // Clear existing options
  
        // Add a default option
        select.append('<option selected disabled value="">Please select Brand</option>');
  
        // Use an object to keep track of unique brands
        var uniqueBrands = {};
  
        $.each(data.brands, function (index, brand) {
          var brand_id = brand.id;
          var brand_name = brand.brand_name;
  
          // Check if the brand ID is not already in the object
          if (!uniqueBrands[brand_id]) {
            // Add brand ID to the object
            uniqueBrands[brand_id] = true;
  
            // Append the option to the dropdown
            select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
          }
        });
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  get();

     
  function get_category() {
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('c_category');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_category();


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
    var product_type_id = 5; // Assuming this value is static
    var category = $('#c_category').val();
    var brand = $('#brand_1').val();
    var model = $('#m_name').val();
    var purchase_year = $('#p_year').val();
    var price = $('#p_price').val();
    var horse_driven = $('#h_driven').val();
    var about_implement = $('#a_imple').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#m_number').val();
    var state = $('#s_state').val();
    var district = $('#d_dist').val();
    var tehsil = $('#t_tehsil').val();
    var image_names = document.getElementById('m_file').files;

    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    // Create a FormData object and append all form data
    var data = new FormData();
    data.append('product_type_id', product_type_id);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('implement_category_id', category);
    data.append('implement_brand_id', brand);
    data.append('implement_model', model);
    data.append('implement_purchase_year', purchase_year);
    data.append('price', price);
    data.append('implement_hours_driven', horse_driven);
    data.append('implement_description', about_implement);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);

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
