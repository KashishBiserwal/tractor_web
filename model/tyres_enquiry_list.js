
  
$(document).ready(function(){
  $('#subbtn_tyre').click(edit_id_data);
  // $('#Search_data').click(search);
        jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
        }, "Phone number must start with 6 or above");
  
          
    $("#tyres_form").validate({
    
    rules: {
      fname: {
        required: true,
      },
      last_name:{
        required: true,
      },
      date:{
        required: true,
      },
      mobile:{
        required:true, 
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      email:{
      required:true,
      email:true
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
      fname: {
        required: "This field is required",
      },
      last_name:{
        required: "This field is required",
      },
      date: {
        required: "This field is required",
      },
      mobile: {
        required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      email:{
          required:"This field is required",
          email:"Please Enter vaild Email",
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

  
    $("#subbtn_tyre").on("click", function () {
  
      $("#tyres_form").valid();
    
    });
    

    });


    
//****get data***
function get_tyre_list() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_tyre_enquiry_data';
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

          if (data.customer_details && data.customer_details.length > 0) {
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

              data.customer_details.forEach(row => {
                  const fullName = row.first_name + ' ' + row.last_name;

                  // Add row to DataTable
                  table.row.add([
                      serialNumber,
                      row.date,
                      row.brand_name,
                      row.tyre_model,
                      fullName,
                      row.mobile,
                      row.state,
                      row.district,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tyre">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_tyres" id="yourUniqueIdHere">
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

get_tyre_list();

// View data
function openViewdata(userId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_tyre_enquiry_by_id/' + userId;

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
      document.getElementById('mname1').innerText=userData.tyre_model;
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
  var url = apiBaseURL + 'get_tyre_enquiry_by_id/' + id;
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
          $('#model_name').val(Data.tyre_model);
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

function edit_id_data() {
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


if (!/^[6-9]\d{9}$/.test(mobile)) {
    alert("Mobile number must start with 6 or above and should be 10 digits");
    return; 
}

var paraArr = {
    'brand_name': brand_name,
    'tyre_model': model_name,
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
        alert('successfully updated..!')
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}
  

//****delete data***
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data/' + id;
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




