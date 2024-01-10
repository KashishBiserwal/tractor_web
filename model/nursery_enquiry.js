$(document).ready(function(){
  $('#Search').click(search_data);
  $('#undate_btn_nursery_enq').click(edit_data_id);
  
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
        }, "Phone number must start with 6 or above");
  
          
    $("#narsary_list_enq_form").validate({
    
    rules: {
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

  
    $("#undate_btn_nursery_enq").on("click", function () {
  
      $("#narsary_list_enq_form").valid();
    
    });
    

    });
  //****get data***
function get_nursery() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_nursery_enquiry_data';
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

          if (data.nursery_enquiry_data && data.nursery_enquiry_data.length > 0) {
              var table = $('#example').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Full Name' },
                      { title: 'Mobile' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false }
                  ]
              });

              data.nursery_enquiry_data.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table.row.add([
                      serialNumber,
                      fullName,
                      row.mobile,
                      row.state,
                      row.district,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_nursery_enq">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
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
get_nursery();

// Search data

$(document).ready(function() {
  BackgroundUpload();
  $('#save').click(store);
  $('#save_brand').click(edit_brand);
  $('#Search').click(search_data);


}); 

function search_data() {

  var selectedBrand = $('#brand').val();
  var brand_id = $('#brand_id').val();
  console.log(brand_id);
  var paraArr = {
    'brand_id': selectedBrand,
    'id':brand_id,
  };

  var url = '<?php echo $APIBaseURL; ?>search_for_brand' ;
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
     
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        console.log(searchData,"hello brand");
        updateTable(searchData);
      },
      error: function (error) {
          console.error('Error searching for brands:', error);
      }
  });
};

//****delete data***
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
        // get_tyre_list();
        window.location.reload();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

  
// View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_nursery_enquiry_data_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.nursery_enquiry_data[0];
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
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

  // edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_nursery_enquiry_data_by_id/' + id;
  // console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.nursery_enquiry_data[0];
          $('#userId').val(Data.id);
          $('#fname_2').val(Data.first_name);
          $('#lname_2').val(Data.last_name);
          $('#number_2').val(Data.mobile);
          $('#email_2').val(Data.email);
          $('#date_2').val(Data.date);
          $('#state_2').val(Data.state);
          $('#dist_2').val(Data.district);
          $('#tehsil_2').val(Data.tehsil);
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

// get_hire_tract();

function edit_data_id() {
var enquiry_type_id = $("#enquiry_type_id").val();
var edit_id = $("#userId").val();
console.log(edit_id);
var first_name = $("#fname_2").val();
console.log(first_name);
var last_name = $("#lname_2").val();
var mobile = $("#number_2").val();
var email = $("#email_2").val();
var date = $("#date_2").val();
var state = $("#state_2").val();
var district = $("#dist_2").val();
var tehsil = $("#tehsil_2").val();

// Validate mobile number
if (!/^[6-9]\d{9}$/.test(mobile)) {
    alert("Mobile number must start with 6 or above and should be 10 digits");
    return; // Exit the function if validation fails
}

var paraArr = {
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
};

var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'customer_enquiries/' + edit_id;

var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
};

$.ajax({
    url: url,
    type: "PUT",
    data: paraArr,
    headers: headers,
    success: function (result) {
        console.log(result, "result");
        window.location.reload();
        console.log("updated successfully");
        alert('successfully updated..!')
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}


// For Search Data

function search_data() {
 
  var name = $('#nameselect').val();
  console.log(name);
  var state = $('#stateselect').val();
  var district = $('#distselect').val();
  var paraArr = {
    'nursery_name': name,
    'state':state,
    'district':district,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_nursery_enquiry';
  console.log(url);
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
     
      success: function (searchData) {
        updateTable(searchData);
      },
      error: function (error) {
          console.error('Error searching for brands:', error);
      }
  });
};

  function updateTable(data) {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';
    let counter = 1; 
  
    if(data.hire_details && data.hire_details.length > 0) {
        let tableData = []; 
        data.hire_details.forEach(row => {
            let action = ` 
            <div class="d-flex">
            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#exampleModal">
              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
              <i class="fas fa-edit" style="font-size: 11px;"></i>
            </button>
            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
            </button>
          </div>`;
          tableData.push([
            counter,
            // formatDateTime(row.date),
            formatDateTime(row.created_at),
            serialNumber,
            fullName,
            row.mobile,
            row.state,
            row.district,
        ]);

        counter++;
    });

    $('#example').DataTable().destroy();
    $('#example').DataTable({
        data: tableData,
        columns: [
          { title: 'S.No.' },
          { title: 'Full Name' },
          { title: 'Mobile' },
          { title: 'State' },
          { title: 'District' },
          { title: 'Action', orderable: false }
        ],
        paging: true,
        searching: true,
        // ... other options ...
    });
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
  }