$(document).ready(function () {
      $('#store').click(store);
      get();
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
                console.log(data);
                const selects = document.querySelectorAll('#brand_used');
    
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
                        // select.addEventListener('change', function() {
                        //     const selectedBrandId = this.value;
                        //     get_model(selectedBrandId);
                        // });
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
    
    // function get_model(brand_id) {
    //     var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    //     $.ajax({
    //         url: url,
    //         type: "GET",
    //         headers: {
    //             'Authorization': 'Bearer ' + localStorage.getItem('token')
    //         },
    //         success: function (data) {
    //             console.log(data);
    //             const selects = document.querySelectorAll('#model_used');
    
    //             selects.forEach(select => {
    //                 select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
    //                 if (data.model.length > 0) {
    //                     data.model.forEach(row => {
    //                         const option = document.createElement('option');
    //                         option.textContent = row.model;
    //                         option.value = row.model;
    //                         console.log(option);
    //                         select.appendChild(option);
    //                     });
    //                 } else {
    //                     select.innerHTML = '<option>No valid data available</option>';
    //                 }
    //             });
    //         },
    //         error: function (error) {
    //             console.error('Error fetching data:', error);
    //         }
    //     });
    // }
    

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
    //               var acce_Select = $(" #ass_list");
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
