 
  $(document).ready(function(){
   
    get_enquiry();
  
      });



//****get data***
function get_enquiry() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_data_for_new_implements';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data


            if (data.getNewImplementEnquiry && data.getNewImplementEnquiry.length > 0) {
                var table = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Date' },
                        { title: 'Category' }, // Corrected column title
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Full Name' },
                        { title: 'Mobile' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ]
                });

                data.getNewImplementEnquiry.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    const formattedDate = new Date(row.date).toLocaleString(); // Format date

                    // Add row to DataTable
                    table.row.add([
                        formattedDate,
                        row.category_name,
                        row.brand_name, 
                        row.model,
                        fullName,
                        formatMobileNumber(row.mobile), // Format mobile number
                        row.state_name,
                        row.district_name,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.customer_id});" data-bs-target="#view_model_engine_oil">
                                <i class="fas fa-eye" style="font-size: 11px;"></i>
                            </button> 
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.customer_id});">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`
                    ]).draw(false);
                });
            } else {
                tableBody.html('<tr><td colspan="6">No valid data available</td></tr>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Function to format mobile number as per your requirement
function formatMobileNumber(mobileNumber) {
    // Implement your mobile number formatting logic here if needed
    return mobileNumber;
}

  


  // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.customer_details[0];
        document.getElementById('bname1').innerText=userData.brand_name;
        document.getElementById('mname1').innerText=userData.oil_model;
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
        console.log(userData.last_name);
        document.getElementById('number1').innerText=userData.mobile;
        document.getElementById('email_1').innerText=userData.email;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state;
        document.getElementById('dist1').innerText=userData.district;
        document.getElementById('tehsil1').innerText=userData.tehsil;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

// **delete***
 function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + id;
    console.log(url);
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      return;
    }
  
    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        window.location.reload();
        get_dealers();

        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }


   // edit data 

function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_by_id/' + id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.customer_details[0];
            $('#idUser').val(Data.id);
            $('#brand_name').val(Data.brand_name);
            $('#model_name').val(Data.oil_model);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#email').val(Data.email);
            $('#date').val(Data.date);
            $('#state_').val(Data.state);
            $('#dist_').val(Data.district);
            $('#tehsil_').val(Data.tehsil);
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }
  

  function edit_data_id() {
    var enquiry_type_id = $("#enquiry_type_id").val();
    var product_id = $("#product_id").val();
    var edit_id = $("#idUser").val();
    var brand_name = $("#brand_name").val();
    var model_name = $("#model_name").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var date = $("#date").val();
    var state = $("#state_").val();
    var district = $("#dist_").val();
    var tehsil = $("#tehsil_").val();
    var _method = 'put';


    // Validate mobile number
    if (!/^[6-9]\d{9}$/.test(mobile)) {
        alert("Mobile number must start with 6 or above and should be 10 digits");
        return; // Exit the function if validation fails
    }
   
    var paraArr = {
        'brand_name': brand_name,
        'oil_model': model_name,
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'email': email,
        'date': date,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'id': edit_id,
        'enquiry_type_id': enquiry_type_id,
        'product_id': product_id,
        '_method': _method,
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries/' + edit_id;
    
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
 
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        headers: headers,
        success: function (result) {
            console.log(result, "result");
            window.location.reload();
            console.log("updated successfully");
            alert('successfully updated..!');
            get_new_harvester();

        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }

  $(document).ready(function () {
    // Initialize DataTable
    var table = $('#example').DataTable({
        paging: true,
        searching: true,
        columns: [
            { title: 'S.No.' },
            { title: 'Date' },
            { title: 'Brand' },
            { title: 'Model' },
            { title: 'Full Name' },
            { title: 'Mobile' },
            { title: 'State' },
            { title: 'District' },
            { title: 'Action', orderable: false }
        ]
    });

    // Search Button Click Event
    $("#Search").click(function () {
        var selectedBrand = $('#brand_name').val();
        var selectedModel = $('#model').val();
        var selectedState = $('#state').val();
        var selectedDistrict = $('#district').val();

        // Perform search
        table.columns(2).search(selectedBrand).draw();
        table.columns(3).search(selectedModel).draw();
        table.columns(6).search(selectedState).draw();
        table.columns(7).search(selectedDistrict).draw();
    });

    // Reset Button Click Event
    $("#Reset").click(function () {
        // Reset all select options
        $('#brand_name, #model, #state, #district').val('');

        // Clear search and redraw the table
        table.search('').columns().search('').draw();
    });
});