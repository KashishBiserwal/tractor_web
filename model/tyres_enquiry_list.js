
  
$(document).ready(function(){
  getbrand('brand1');

  $('#submit_btn').on('click', function(event) {
    $("#form_tyre_list").valid();
    store(event);
  });

          
    $("#form_tyre_list").validate({
    
    rules: {
      brand: {
        required: true,
      },
      tyre:{
        required: true,
      },
      tyre_position:{
        required: true,
      },
      tyre_size:{
        required: true,
      },
      tyre_width:{
        required: true,
      },
      category:{
        required:true, 
      },
      _image:{
        required:true,
      }
    },

    messages:{
      brand: {
        required: "This field is required",
      },
      tyre:{
        required: "This field is required",
      },
      tyre_position: {
        required: "This field is required",
      },
      tyre_size: {
        required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      tyre_width:{
          required:"This field is required",
          email:"Please Enter vaild Email",
        },
      
        category: {
        required: "This field is required",
      },
      _image: {
        required: "This field is required",
      },
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
    });

  
   
    $('#add_trac').on('click', function() {
      getbrand('brand');
      getcategory('category');
    });
    });


    function getbrand(selectId) {
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'getBrands';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log(data);
              const select = document.getElementById(selectId);
            
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML ='<option>No valid data available</option>';
              }
        
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error;
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
    }

    function getcategory(selectId) {
      var apiBaseURL =APIBaseURL;
      var url = 'http://tractor-api.divyaltech.com/api/customer/get_tyre_category';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log(data);
              const select = document.getElementById(selectId);
            
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
              if (data.tyre_category.length > 0) {
                  data.tyre_category.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.category;
                      option.value = row.id;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML ='<option>No valid data available</option>';
              }
        
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error;
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
    }
   
//****get data***
function get_tyre_list() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data';
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
            tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_tyre_list();


function store(event) {
  event.preventDefault();



  var image_names = document.getElementById('_image').files;
  var brand_name = $('#brand').val();
  var tyre_model = $('#tyre').val();
  var tyre_position = $('#tyre_position').val();
  var tyre_size = $('#tyre_size').val();
  var tyre_width = $('#tyre_width').val();
  var category = $('#category').val();


  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'tyre_data';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  for (var x = 0; x < image_names.length; x++) {
      data.append('images[]', image_names[x]);
  }

  data.append('brand_id', brand_name);
  data.append('tyre_model', tyre_model);
  data.append('tyre_position', tyre_position);
  data.append('tyre_size', tyre_size);
  data.append('tyre_width', tyre_width);
  data.append('tyre_category_id', category);

  $.ajax({
    url: url,
    type: "POST",
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function (result) {
      console.log('Success:', result);
      // Clear form values
      $('#brand, #tyre, #tyre_position, #tyre_size, #tyre_width, #tyre_category_id, #_image').val('');
      // window.location.reload();
      $("#staticBackdrop").modal('hide');
      var msg = "Added successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function (error) {
      console.error('Error:', error);
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    }
  });
}

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
      console.log("tyre data:" , response)
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




