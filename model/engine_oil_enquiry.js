 
  $(document).ready(function(){
    // $('#Search_btn').click(search_data);
    $('#engine_subbtn').click(edit_data_id);
    
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#engine_oilr_form").validate({
      
      rules: {
        bname: {
          required: true,
        },
        mname: {
          required: true,
        },
          name: {
          required: true,
        },
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        number:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        email:{
  
          required:true,
         email:true
        },
        date:{
          required: true,
        },
        state_:{
          required: true,
        },
        dist:{
          required: true,
        },
        loc: {
          required: true
        }
      },
  
      messages:{
        bname: {
          required: "This field is required",
        },
        mname: {
          required: "This field is required",
        },
          name: {
          required: "This field is required",
        },
        fname:{
          required: "This field is required",
        },
        lname: {
          required: "This field is required",
        },
        number: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        email:{
  
          required:"This field is required",
          email:"Please Enter vaild Email",
        },
        date: {
          required: "This field is required",
        },
        state_: {
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        },
        loc: {
          required:"This field is required",
          }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#engine_subbtn").on("click", function () {
    
        $("#engine_oilr_form").valid();
      
      });
      
  
      });



//****get data***
var table; // Declare table variable outside the function scope

function get_engine() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_engine_oil_enquiry_data';
    console.log('dfghjkiuytgf');
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data
  
            let serialNumber = 1;
  
            if ($.fn.DataTable.isDataTable('#example')) {
                $('#example').DataTable().clear().destroy(); // Clear and destroy DataTable instance
            }

            table = $('#example').DataTable({
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

            // Reverse the data array to display the latest data at the top
            data.customer_details.reverse();
  
            if (data.customer_details && data.customer_details.length > 0) {
                data.customer_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        serialNumber,
                        row.date,
                        row.brand_name,
                        row.oil_model,
                        fullName,
                        row.mobile,
                        row.state_name,
                        row.district_name,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_engine_oil">
                                <i class="fas fa-eye" style="font-size: 11px;"></i>
                            </button> 
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`
                    ]).draw(false);
  
                    serialNumber++;
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

get_engine();

  
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
        // document.getElementById('email_1').innerText=userData.email;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state_name;
        document.getElementById('dist1').innerText=userData.district_name;
        document.getElementById('tehsil1').innerText=userData.tehsil_name;
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
            // $('#brand_name').val(Data.brand_name);
            $('#model_name').val(Data.oil_model);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#email').val(Data.email);
            $('#date').val(Data.date);
             
          var brandDropdown = document.getElementById('brand_name');
          for (var i = 0; i < brandDropdown.options.length; i++) {
            if (brandDropdown.options[i].text === Data.brand_name) {
              brandDropdown.selectedIndex = i;
              break;
            }
          }
            setSelectedOption('state_', Data.state_id);
            setSelectedOption('dist_', Data.district_id);
            
            // Call function to populate tehsil dropdown based on selected district
            populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
  
            // setSelectedOption('tehsil-dropdown', Data.tehsil_id);
          },
          error: function(error) {
            console.error('Error fetching user data:', error);
          }
        });
      }
      
        function setSelectedOption(selectId, value) {
          var select = document.getElementById(selectId);
          for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value == value) {
              select.selectedIndex = i;
              break;
            }
          }
        }
        
        function populateTehsil(selectId, value) {
          var select = document.getElementById(selectId);
          for (var i = 0; i < select.options.length; i++) {
            if (select.options[i].value == value) {
              select.options[i].selected = true;
              break;
            }
          }
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
    $("#Reset").click(function () {
        $('#brand_name, #model, #state, #district').val('');
        table.search('').columns().search('').draw();
    });
});


function search_data() {
  var brand = $('#brand_name_search').val();
  var model = $('#model_search').val();
  var state = $('#state_search').val();
  var district = $('#district_search').val();

  // Create an object to store search parameters
  var paraArr = {
    'brand_id': brand,
    'model': model,
    'state': state,
    'district': district,
  };


  console.log('Search Parameters:', paraArr);

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_engine_oil_enquiry';

  $.ajax({
    url: url,
    type: 'POST',
    data: paraArr,
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (searchData) {
      console.log('API Response:', searchData); // Log API response for debugging
      updateTable(searchData);
    },
    error: function (error) {
      console.error('Error searching for brands:', error);
  
      if (error.status === 400) {
        // Display a message in the table when no valid data is available
        updateTable({ nurseryEnquiry: [] });
      } else {
        // Handle other errors as needed
      }
    }
  });
}

// Update table function
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let serialNumber = 1;

  if (data.nurseryEnquiry && data.nurseryEnquiry.length > 0) {
    let tableData = [];
    data.nurseryEnquiry.forEach(row => {
      const fullName = row.first_name + ' ' + row.last_name;
      const action = buildActionButtons(row.id);

      tableData.push([
        serialNumber,
        row.date,
        row.brand_name,
        row.oil_model,
        fullName,
        row.mobile,
        row.state_name,
        row.district_name,
        action
      ]);

      serialNumber++;
    });

    $('#example').DataTable().destroy();
    $('#example').DataTable({
      data: tableData,
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
      ],
      paging: true,
      searching: false,
      // ... other options ...
    });
  } else {
    tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
    
  }
 
}
function buildActionButtons(id) {
  return `<div class="d-flex">
<button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_engine_oil">
    <i class="fas fa-eye" style="font-size: 11px;"></i>
</button> 
<button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
<i class="fas fa-edit" style="font-size: 11px;"></i>
</button>
<button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
    <i class="fa fa-trash" style="font-size: 11px;"></i>
</button>
</div>`
}
function get_oil() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_oil_brands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name_search');
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
get_oil();

function get_oilUpdate() {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_oil_brands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name');
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
get_oilUpdate();