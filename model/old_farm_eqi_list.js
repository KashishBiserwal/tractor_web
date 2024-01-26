 
   $(document).ready(function(){
    $('#implement_btn').click(edit_data_id);
    // $('#Search').click(search);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#old_farm_implement_from").validate({
      
      rules: {
        bname: {
          required: true,
        },
        // mname: {
        //   required: true,
        // },
        fname: {
          required: true,
        },
        last_name:{
          required: true,
        },
        date:{
          required: true,
        },
        year:{
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
        state:{
          required: true,
        },
        dist:{
          required: true,
        }
    },
        messages:{
          bname: {
            required: "This field is required",
          },
        //   mname: {
        //     required: "This field is required",
        //   },
        fname: {
          required: "This field is required",
        },
        last_name:{
          required: "This field is required",
        },
        date: {
          required: "This field is required",
        },
        year: {
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
        state: {
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        },
      
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#implement_btn").on("click", function () {
    
        $("#old_farm_implement_from").valid();
      
      });
      
  
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
              const selects = document.querySelectorAll('#brand_name');
    
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
    
    function get_model(brand_id) {
      var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              const selects = document.querySelectorAll('#model_enquiry');
    
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
 
 // fetch data
function get() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_data_for_old_implements';
  console.log(url);
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
// console.log(data);
          if (data.getOldImplementEnquiry && data.getOldImplementEnquiry.length > 0) {
              let tableData = [];
              let counter = 1;

              data.getOldImplementEnquiry.forEach(row => {
                const fullName = row.first_name + ' ' + row.last_name;
                  let action = `
                      <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#old_farm_enq">
                          <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#old_farm_implement_enq" id="yourUniqueIdHere" style="padding:5px">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`;

                  tableData.push([
                      counter,
                      row.date,
                      row.brand_name,
                      row.model,
                      fullName,
                      row.mobile,
                      row.purchase_year,
                      row.state,
                      row.district,
                      action
                  ]);

                  counter++;
              });

              $('#example').DataTable().destroy();
              $('#example').DataTable({
                  data: tableData,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Date' },
                      { title: 'Brand' },
                      { title: 'model' },
                      { title: 'Name' },
                      { title: 'Mobile' },
                      { title: 'Year' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false }
                  ],
                  paging: true,
                  searching: true,
                  // ... other options ...
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
get();


// view data
function fetch_data(product_id){
  // alert(product_id);
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  
  var productId = product_id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_data_for_old_implements_by_id/' + product_id;
  var headers = {
  'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function(data) {
      console.log(data, 'abc');
      document.getElementById('bname1').innerText=data.getOldImplementEnquiry[0].brand_name;
      document.getElementById('mname1').innerText=data.getOldImplementEnquiry[0].model;
      document.getElementById('fname1').innerText=data.getOldImplementEnquiry[0].first_name;
      document.getElementById('lname1').innerText=data.getOldImplementEnquiry[0].last_name;
      document.getElementById('number1').innerText=data.getOldImplementEnquiry[0].mobile;
      document.getElementById('email_1').innerText=data.getOldImplementEnquiry[0].email;
      document.getElementById('date_1').innerText=data.getOldImplementEnquiry[0].date;
      document.getElementById('year_1').innerText=data.getOldImplementEnquiry[0].purchase_year;
      document.getElementById('state1').innerText=data.getOldImplementEnquiry[0].state;
      document.getElementById('dist1').innerText=data.getOldImplementEnquiry[0].district;
      document.getElementById('tehsil1').innerText=data.getOldImplementEnquiry[0].tehsil;
    },
    error: function (error) {
    console.error('Error fetching data:', error);
    }
  });
  }


   // edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_data_for_old_implements_by_id/' + id;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.getOldImplementEnquiry [0];
          $('#idUser').val(Data.id);
          // $('#brand_name').val(Data.brand_name);

          $("#brand_name option").prop("selected", false);
          $("#brand_name option[value='" + Data.brand_name+ "']").prop("selected", true);
          console.log(Data.brand_name,'brand');
          $('#model_name').val(Data.model);
          $('#first_name').val(Data.first_name);
          $('#last_name').val(Data.last_name);
          $('#mobile').val(Data.mobile);
          $('#email').val(Data.email);
          $('#date').val(Data.date);
          $("#year option").prop("selected", false);
          $("#year option[value='" + Data.purchase_year+ "']").prop("selected", true);
          
          $("#state_ option").prop("selected", false);
          $("#state_ option[value='" + Data.state+ "']").prop("selected", true);
          
          $("#dist_ option").prop("selected", false);
          $("#dist_ option[value='" + Data.district+ "']").prop("selected", true);
          
          $("#tehsil_ option").prop("selected", false);
          $("#tehsil_ option[value='" + Data.tehsil+ "']").prop("selected", true);
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
var year = $("#year").val();
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
    'model': model_name,
    'first_name': first_name,
    'last_name': last_name,
    'mobile': mobile,
    'email': email,
    'date': date,
    'purchase_year': year,
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
  var url = apiBaseURL + 'customer_enquiries/' + id;
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

function get_year_and_hours() {
  console.log('initsfd')
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          var select_year = $("#year");
          select_year.empty(); // Clear existing options
          select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
          console.log(data,'ok');
          for (var j = 0; j < data.getYears.length; j++) {
            select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
        }

        },

     
        
        complete:function(){
         
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_year_and_hours();

// brand
function get_search_brand() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getBrands';

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
get_search_brand();

// brand
function get_search() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getBrands';

  $.ajax({
    url: url,
    type: "GET",
    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
      console.log(data);

      const select = $('#brand_name1');
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
get_search();

function searchdata() {
  console.log("dfghsfg,sdfgdfg");
  var brand_id = $('#brand_id').val();
  var brandselect = $('#brand_name1').val();
  var modelselect = $('#model_enquiry').val();
  var stateselect = $('#state_enquiry').val();
  var districtselect = $('#district_enquiry').val();
 
console.log(brand_id);
console.log(brandselect);
console.log(modelselect);
console.log(stateselect);
console.log(districtselect);

  var paraArr = {
    'brand_id':brand_id,
    'brand_id':brandselect,
    'model':modelselect,
    'state':stateselect,
    'district':districtselect,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_old_implements_enquiry';
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
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let counter = 1; 
  if(data.newTractor && data.newTractor.length > 0) {
      let tableData = []; 
      data.newTractor.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action =   `
          <div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#old_farm_enq">
              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#old_farm_implement_enq" id="yourUniqueIdHere" style="padding:5px">
                <i class="fas fa-edit" style="font-size: 11px;"></i>
              </button>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                <i class="fa fa-trash" style="font-size: 11px;"></i>
              </button>
          </div>`;
     
          tableData.push([
            counter,
            row.date,
            row.brand_name,
            row.model,
            fullName,
            row.mobile,
            row.purchase_year,
            row.state,
            row.district,
            action
        ]);

        counter++;
    });

    $('#example').DataTable().destroy();
    $('#example').DataTable({
        data: tableData,
        columns: [
          { title: 'S.No.' },
          { title: 'Date' },
          { title: 'Brand' },
          { title: 'model' },
          { title: 'Name' },
          { title: 'Mobile' },
          { title: 'Year' },
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



function resetform(){
  $('#brand_name').val('');
  $('#model3').val('');
  $('#state3').val('');
  $('#district3').val('');
  window.location.reload(); 
}
