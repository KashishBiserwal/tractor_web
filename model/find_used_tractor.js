$(document).ready(function () {
      $('#store').click(store);
      get();
      get_year_and_hours();
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
                            // console.log(option);
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
                            // console.log('Adding model:', option); // Debugging statement
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
    
    
    // get puechase year
    // function get_lookup() {
    //     console.log('initsfd')
    //     //   var apiBaseURL = APIBaseURL;
    //       var url ='http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data';
    //       $.ajax({
    //           url: url,
    //           type: "POST",
    //           headers: {
    //               'Authorization': 'Bearer ' + localStorage.getItem('token')
    //           },
    //           success: function (data) {
    //               // accessory 
    //               var acce_Select = $(" #choices-multiple-remove-button");
    //               acce_Select.empty(); // Clear existing options
    //               // acce_Select.append('<option selected disabled="" value=""></option>'); 
      
    //               for (var k = 0; k < data.accessory.length; k++) {
    //                 acce_Select.append('<option value="' + data.accessory[k].id + '">' + data.accessory[k].accessory+ '</option>');
    //               }
      
      
    //           },
              
    //           complete:function(){
               
    //           },
    //           error: function (error) {
    //               console.error('Error fetching data:', error);
    //           }
    //       });
    //   }
    //   get_lookup();
   

// insert data
function store(event) {
    event.preventDefault();

    var selectedOptions = [];
    $("#choices-multiple-remove-button:selected").each(function () {
        var value = $(this).val();
        if ($.trim(value)) {
            selectedOptions.push(value);
        }
    });

    var multiselectss = []; // Replace with your actual values
    var multiselectsmodel = []; // Replace with your actual values

    console.log("accessory select: ", selectedOptions);
    var multiselect = JSON.stringify(selectedOptions);
    var brand_id_array = JSON.stringify(multiselectss);
    var model_array = JSON.stringify(multiselectsmodel);
    var first_name = $('#fName').val();
    var last_name = $('#lName').val();
    var phone = $('#phone').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var budget = $('#budget').val();
    var enquiry_type_id = 24;

    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries';
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = new FormData();

    data.append('brand_id', brand_id_array);
    data.append('model', model_array);
    data.append('first_name', first_name);
    data.append('last_name', last_name);
    data.append('mobile', phone);
    data.append('state', state);
    data.append('budget', budget);
    data.append('district', district);
    data.append('manufacture_year', multiselect);
    data.append('enquiry_type_id', enquiry_type_id);

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
        success: function (result) {
            console.log(result, "result");
            console.log("Add successfully");
            alert("added Successfully..!");
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
