$(document).ready(function() {
    $('#sell_used_trac_btn').click(store);
    $('#Verify').click(verifyotp1);
    var userId = localStorage.getItem('id');
    getUserDetail(userId);
});

function get_lookup() {
    console.log('initsfd')
    //   var apiBaseURL = APIBaseURL;
      var url = 'https://shopninja.in/bharatagri/api/public/api/customer/getLookupData';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
            // lookup select
            var crop_type = $(" #CROPS_TYPE");
            var power_sourse = $(" #POWER_SOURCE");
            crop_type.append('<option selected disabled="" value="">Please select an option</option>');
            power_sourse.append('<option selected disabled="" value="">Please select an option</option>');
            console.log(data,'ok');
              for (var i = 0; i < data.data.length; i++) {
                  $("select#" + data.data[i].name).append('<option value="' + data.data[i].id + '">' + data.data[i].lookup_data_value + '</option>');
              }
          },
          complete:function(){
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
  }
  get_lookup();

function get() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_name');
  
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
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_1');
  
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
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var hours_select = $("#h_hours");
            hours_select.empty(); // Clear existing options
            hours_select.append('<option selected disabled="" value="">Please select an option</option>'); 
            console.log(data, 'ok');
            for (var k = 0; k < data.getHoursDriven.length; k++) {
                var optionText = data.getHoursDriven[k].start + " - " + data.getHoursDriven[k].end;
                // Adding space before hyphen for the first option
                if (k === 0) {
                    optionText = "\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0" + optionText; // Unicode for non-breaking space
                }
                hours_select.append('<option value="' + k + '"' + (k === 0 ? ' style="margin-left: 30px;"'  :  '') + '>' + optionText + '</option>');
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
function displayStep(step) {
}
function store(event) {
    event.preventDefault();
    if (isUserLoggedIn()) {
        var isConfirmed = confirm("Are you sure you want to submit the form?");
        if (isConfirmed) {
            submitForm();
        }
    } else {
        var mobile = $('#m_number').val();
        get_otp1(mobile);
    }
}

function isUserLoggedIn() {
    return localStorage.getItem('token_customer') && localStorage.getItem('mobile') && localStorage.getItem('id');
}
function get_otp1(phone) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_login";
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
    var mobile = $('#m_number').val();
    var otp = $('#otp1').val();
    var paraArr = {
        'otp': otp,
        'mobile': mobile,
    };
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
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
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = 3; 
    var brand_name = $('#brand_name').val();
    var model = $('#model_1').val();
    var cutting_width = $('#c_width').val();
    var power_sourse = $('#POWER_SOURCE').val();
    var crop_type = $('#CROPS_TYPE').val();
    var horse_driven = $('#h_hours').val();
    var purchase_year = $('#p_year').val();
    var price = $('#p_price').val();
    price = price.replace(/[\,\.\s]/g, '');
    var about_harvester = $('#a_hrvst').val();
    var first_name = $('#f_name').val();
    var last_name = $('#l_name').val();
    var mobile = $('#m_number').val();
    var state = $('#s_state').val();
    var district = $('#d_dist').val();
    var tehsil = $('#t_tehsil').val();
    var image_names = document.getElementById('f_file').files;

    var apiBaseURL = "https://shopninja.in/bharatagri/api/public/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    var data = new FormData();
    data.append('product_type_id', product_type_id);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('brand_id', brand_name);
    data.append('model', model);
    data.append('cutting_bar_width', cutting_width);
    data.append('power_source_id', power_sourse);
    data.append('crops_type_id', crop_type);
    data.append('hours_driven', horse_driven);
    data.append('purchase_year', purchase_year);
    data.append('price', price);
    data.append('description', about_harvester);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);

    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
        console.log("multiple image", image_names[x]);
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            console.log("Form submitted successfully!");
            var msg = 'Added successfully !';
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
            $('#errorStatusLoading').on('hidden.bs.modal', function () {
                window.location.reload();
            });
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
function getUserDetail(id) {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_customer_personal_info_by_id/" + id;
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
                $('#form-step-4 #f_name').val(customer.first_name);
                $('#form-step-4 #l_name').val(customer.last_name);
                $('#form-step-4 #m_number').val(customer.mobile);
                
                if (isUserLoggedIn()) {
                    $('#form-step-4 input, #form-step-4 select').not('#d_dist,#t_tehsil,#s_state').prop('disabled', true);
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
