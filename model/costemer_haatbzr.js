

  $(document).ready(function() {
    console.log("ready!");
    $('#btn_submit').click(store);
});

function calculateTotalPrice() {
    var quantity = parseFloat(document.getElementById('quantityInput').value) || 0;
    var unit = document.getElementById('unitSelect').value;
    var price = parseFloat(document.getElementById('price').value) || 0;

    var unitConversion = {
        'As per': 1,
        'gram': 1,
        'Kg': 1000,
        'Quintal': 100000,
        'Ton': 1000000,
        'Pack': 1,
        'Unit': 1
    };
    var total = quantity * price * unitConversion[unit];

    document.getElementById('tprice').value = total.toFixed(2);
}

document.getElementById('quantityInput').addEventListener('input', calculateTotalPrice);
document.getElementById('unitSelect').addEventListener('change', calculateTotalPrice);
document.getElementById('price').addEventListener('input', calculateTotalPrice);

// select category
  function get_category() {
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/haat_bazar_category';
    // var url = apiBaseURL + 'haat_bazar_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('category');
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


    // select sub-category
     function get_category_main() {
        // var apiBaseURL =APIBaseURL;
        // var url = apiBaseURL + 'haat_bazar_sub_category';
        var url = 'http://tractor-api.divyaltech.com/api/customer/haat_bazar_sub_category';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('subcategory');
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                if (data.allSubCategory.length > 0) {
                    data.allSubCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.sub_category_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML ='<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    get_category_main();

   // Define a global array to store form data
var formDataArray = [];

// Function to add data to the formDataArray based on the step
function hatbazar_add(step) {
    // Get the form based on the step
    var formId = "form-step-" + step;
    var form = $("#" + formId);

    // Serialize form data and push it to the array
    var formData = form.serializeArray();
    formDataArray.push(formData);

    // Display the next step if it exists
    var nextStep = step + 1;
    var nextFormId = "form-step-" + nextStep;
    $("#" + formId).hide();
    $("#" + nextFormId).show();
}

// Function to submit all form data to the specified URL
function submitFormData() {
    // Combine all form data into a single array
    var allFormData = [];
    for (var i = 0; i < formDataArray.length; i++) {
        allFormData = allFormData.concat(formDataArray[i]);
    }

    // Use ajax to send the data to the server
    $.ajax({
        type: "POST",
        url: 'http://tractor-api.divyaltech.com/api/customer/haat_bazar',
        data: allFormData,
        success: function (response) {
            console.log("Data submitted successfully:", response);
        },
        error: function (error) {
            console.error("Error submitting data:", error);
        }
    });
}





    
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



    
    


    
    // function hatbazar_add(event) {
    //     event.preventDefault();
    
    //     var image_names = document.getElementById('imageInput').files;
    //      var enquiry_type_id = $('#enquiry_type_id').val();
    //      var sub_category_id = $('#sub_category_id').val();
    //      var image_type_id = $('#image_type_id').val();
    //      var category = $('#category').val();
    //      var subcategory = $('#subcategory').val();
    //      var quantity = $('#quantity').val();
    //      var asPer = $('#asPer').val();
    //      var price = $('#price').val();
    //      var totalprice = $('#totalprice').val();
    //      var about = $('#aboutharvest').val();
    //      var first_name = $('#fname1').val();
    //      var last_name = $('#lname1').val();
    //      var number = $('#number1').val();
    //      var state = $('#state1').val();
    //      var district = $('#district1').val();
    //      var tehsil = $('#tehsil1').val();
        
    //      console.log(state_,"state");
    //      console.log(dist,"district");

    //     var url = 'http://tractor-api.divyaltech.com/api/customer/haat_bazar';
    
    //     var data = new FormData();
    
    //     for (var x = 0; x < image_names.length; x++) {
    //                  data.append("images[]", image_names[x]);
    //                  console.log("multiple image", image_names[x]);
    //                }
    //               data.append('_method', _method);
    //               data.append('sub_category_id', sub_category_id);
    //               data.append('enquiry_type_id', enquiry_type_id);
    //               data.append('image_type_id',image_type_id);
    //               data.append('_category', category);
    //               data.append('tractor_type_id', subcategory);
    //               data.append('quantity', quantity);
    //               data.append('as_per', asPer);
    //               data.append('price', price);
    //               data.append('price', totalprice);
    //               data.append('about', about);
    //               data.append('first_name', first_name);
    //               data.append('last_name', last_name);
    //               data.append('mobile', number);
    //               data.append('state', state);
    //               data.append('district', district);
    //               data.append('tehsil',tehsil);
    //     $.ajax({
    //         url: url,
    //         type: method,
    //         data: data,
    //         headers: headers,
    //         processData: false,
    //         contentType: false,
    //         success: function (result) {
    //             console.log(result, "result");
    //             console.log("Add successfully");
                
    //            var msg = "User Inserted successfully !"
    //            $("#errorStatusLoading").modal('show');
    //            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
            
    //            $("#errorStatusLoading").find('.modal-body').html(msg);
    //            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    //            document.getElementById("myform").reset();
               
    //           },
    //           error: function (error) {
    //             console.error('Error fetching data:', error);
    //             var msg = error;
    //             $("#errorStatusLoading").modal('show');
    //             $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
    //             $("#errorStatusLoading").find('.modal-body').html(msg);
    //             $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    //           }
    //     });
    
    // }


    
    