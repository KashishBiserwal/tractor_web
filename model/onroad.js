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
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#model');

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

function get_on_roadadd(event) {
    event.preventDefault();
    console.log('jfhfhw');
     enquiry_type_id = 20;
    console.log('enquiry_type_id', enquiry_type_id);
    var brand = $('#brand').val();
    var model = $('#model').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var mobile_no = $('#mobile_no').val();
    var state = $('#state').val();
    var tehsil = $('#tehsil').val();
    var district = $('#district').val();
   
    // Prepare data to send to the server
    var paraArr = {
        'enquiry_type_id':enquiry_type_id,
    //   'insurance_type_id': insurance_type,
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile_no,
      'brand_id': brand,
      'model': model,
      'state': state,
      'tehsil': tehsil,
      'district': district,
    };

    // var apiBaseURL =APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);

    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      success: function (result) {
        console.log(result, "result");
        console.log("Add successfully");
        
       var msg = "User Inserted successfully !"
       $("#errorStatusLoading").modal('show');
       $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
    
       $("#errorStatusLoading").find('.modal-body').html(msg);
       $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
       document.getElementById("myform").reset();
       
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
      }
    });
  }