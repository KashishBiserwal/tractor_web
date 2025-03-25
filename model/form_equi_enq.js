 
  $(document).ready(function(){
    get_enquiry();
    $('#Search').click(search_data);
    $('#Reset').click(resetform);
    get_brand();
    $('#undate_btn').on('click', function(event) {
      $("#form_tyre_list").valid();
      store(event);
    });
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
        function get_brand() {
          var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_by_product_id/" + 6;
          $.ajax({
              url: url,
              type: "GET",
              headers: {
                  'Authorization': 'Bearer ' + localStorage.getItem('token')
              },
              success: function (data) {
                  const selects = document.querySelectorAll('#brand_search');
                  selects.forEach(select => {
                      select.innerHTML = '<option selected disabled value="">Please select an option</option>';
                      if (data.brands.length > 0) {
                          data.brands.forEach(row => {
                              const option = document.createElement('option');
                              option.textContent = row.brand_name;
                              option.value = row.id;
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
      const tableBody = document.getElementById('data-table');
      tableBody.innerHTML = '';
      let users = data.getNewImplementEnquiry;
      if (users.length > 0) {
        let serialNumber = users.length;
        let tableData = [];
        users.forEach(row => {
          const catesub = row.category_name + "/" + row.sub_category_name; 
          const name = row.first_name + " " + row.last_name; 
          let action = `<div class="float-start">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.customer_id});" data-bs-target="#view_model_tyre"style="padding:5px">
                            <i class="fas fa-eye" style="font-size: 10px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere"style="padding:5px">
                            <i class="fas fa-edit" style="font-size: 10px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm" id="delete_user" onclick="destroy(${row.customer_id});" style="padding:5px">
                            <i class="fa fa-trash" style="font-size: 10px;"></i>
                          </button>
                       </div>`;

          tableData.push([
            serialNumber--,
            row.date,
            catesub,
            row.brand_name,
            row.model,
            name,
            row.mobile,
            row.district_name, 
            action
          ]);
        });

        $('#example').DataTable().destroy();
        $('#example').DataTable({
          data: tableData,
          columns: [
            { title: 'S.No.' },
            { title: 'Date' },
            { title: 'Category/Subcategory' },
            { title: 'Brand' },
            { title: 'Model' },
            { title: 'Name' },
            { title: 'Mobile Number' },
            { title: 'District' },
            { title: 'Action', orderable: false } 
          ],
          paging: true,
          searching: true,
        });
      } else {
        tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
      }
    },
    error: function (error) {
      console.error('Error fetching data:', error);
      console.error('Error fetching data:', error.status);
      console.error('Error fetching data:', error.responseJSON.error);
      if (error.status == '401' && error.responseJSON.error == 'Token expired or invalid') {
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Error');
        $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
        window.location.href = baseUrl + "login.php";
      }
    }
  });
}
function get_search() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_implement_category';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const select = document.getElementById('brand_search'); 
          select.innerHTML = ''; 
          $(select).append('<option selected disabled value="">Please select Category</option>');

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
          var msg = error.responseText; 
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      }
  });
}
get_search();

  // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_data_for_new_implements_by_id/' + userId;
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
        var userData = response.getNewImplementEnquiry[0];
        const name= userData.first_name+" "+userData.last_name;
        document.getElementById('cate1').innerText=userData.category_name;
        document.getElementById('subcate1').innerText=userData.sub_category_name;
        document.getElementById('brand1').innerText=userData.brand_name;
        document.getElementById('model1').innerText=userData.model;
        document.getElementById('First_Name1').innerText=name;
        document.getElementById('Mobile_1').innerText=userData.mobile;
        document.getElementById('State_1').innerText=userData.state_name;
        document.getElementById('District_1').innerText=userData.district_name;
        document.getElementById('Tehsil_1').innerText=userData.tehsil_name;
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
    var url = apiBaseURL + 'get_enquiry_data_for_new_implements_by_id/' + id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.getNewImplementEnquiry[0];
            $('#userId').val(Data.customer_id);
            $('#product_id').val(Data.product_id);
            $('#namef').val(Data.first_name);
            $('#namel').val(Data.last_name);
            $('#number').val(Data.mobile);

            setSelectedOption('stat_e', Data.state_id);
            getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
              setSelectedOption('dis_t', Data.district_id);
              populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
            }, 2000); 
           
        },
        error: function (error) {
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
  function store(edit_id) {
    var enquiry_type_id = 6;
    var edit_id = $("#userId").val();
    var product_id = $("#product_id").val();
    var first_name = $("#namef").val();
    var last_name = $("#namel").val();
    var mobile = $("#number").val();
    var state = $("#stat_e").val();
    var district = $("#dis_t").val();
    var tehsil = $("#tehsi_l").val();
    if (!/^[6-9]\d{9}$/.test(mobile)) {
        alert("Mobile number must start with 6 or above and should be 10 digits");
        return; 
    }
    if (!first_name || !last_name || !mobile || !state || !district || !tehsil || !product_id) {
        alert("Please fill in all fields");
        return; 
    }
    var paraArr = {
        'first_name': first_name,
        'last_name': last_name,
        'mobile': mobile,
        'state': state,
        'district': district,
        'tehsil': tehsil,
        'customer_id': edit_id,
        'enquiry_type_id': enquiry_type_id,
        'product_id': product_id,
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
            alert('successfully updated..!');
            get_enquiry();
          window.location.reload();
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function search_data() {
  var selectedBrand = $('#brand_search').val();
  var brand_id = $('#model_search').val();
  var paraArr = {
    'brand_id': selectedBrand,
    'model':brand_id,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_new_implements_enquiry';
  $.ajax({
      url: url, 
      type: 'POST',
      data: paraArr,
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        updateTable(searchData.newImplements); 
      },
      error: function (xhr, status, error) {
          if(xhr.status == 404) {
              updateTable([]); 
          } else {
              console.error('Error searching for brands:', error);
          }
      }
  });
};
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  if (data.length > 0) {
    let serialNumber = data.length;
    let tableData = [];
    data.forEach(row => {
      const catesub = row.category_name + "/" + row.sub_category_name; 
      const name = row.first_name + " " + row.last_name; 
      let action = `<div class="float-start">
                      <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.customer_id});" data-bs-target="#view_model_tyre"style="padding:5px">
                          <i class="fas fa-eye" style="font-size: 10px;"></i>
                      </button> 
                      <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere"style="padding:5px">
                      <i class="fas fa-edit" style="font-size: 10px;"></i>
                  </button>
                    <button class="btn btn-danger btn-sm" id="delete_user" onclick="destroy(${row.customer_id});" style="padding:5px">
                        <i class="fa fa-trash" style="font-size: 10px;"></i>
                    </button>
                      
                  </div>`;
      tableData.push([
        serialNumber--,
        row.date,
        catesub,
        row.brand_name,
        row.model,
        name,
        row.mobile,
        row.district_name, 
        action
      ]);
    });
    $('#example').DataTable().destroy();
    $('#example').DataTable({
      data: tableData,
      columns: [
        { title: 'S.No.' },
        { title: 'Date' },
        { title: 'Category/Subcategory' },
        { title: 'Brand' },
        { title: 'Model' },
        { title: 'Name' },
        { title: 'Mobile Number' },
        { title: 'District' },
        { title: 'Action', orderable: false }
      ],
      paging: true,
      searching: true,
    });
  } else {
      tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
  }
}
  function resetform(){
    $('#brand1').val('');
    $('#model1').val('');
    window.location.reload();
  }

  $(document).ready(function () {
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
});