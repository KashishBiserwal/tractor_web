
$(document).ready(function() {
    console.log("ready!");
    $('#become_delership_enq_btn').click(store);
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
  get();

// Store data through form
function store(event) {
    event.preventDefault();
    var enquiry_type_id = $('#enquiry_type_id').val();
    // var product_id = 2; 
    var brand_name = $('#brand').val();
    var brand_name = $('#dname').val();
    var email = $('#email').val();
    var address = $('#address').val();
    var mobile = $('#mobnumber').val();
    var state = $('#bcd_state').val();
    var district = $('#bcd_district').val();
    var tehsil = $('#bcd_tehsil').val();
  
   
    var apiBaseURL = "http://tractor-api.divyaltech.com/api";
    var endpoint = '/customer/customer_enquiries';
    var url = apiBaseURL + endpoint;

    // Create a FormData object and append all form data
    var data = new FormData();
    // data.append('product_id', product_id);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('brand_id', brand_name);
    data.append('email', email);
    data.append('address', address);
    data.append('mobile', mobile);
    data.append('email', email);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);
  
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