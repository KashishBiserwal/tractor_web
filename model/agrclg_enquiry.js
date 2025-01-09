$(document).ready(function(){
    $('#undate_btn_nursery_enq').click(edit_id);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
      $("#narsary_list_enq_form").validate({
      
      rules: {
        cname: {
          required: true,
        },
        fname: {
          required: true,
        },
        lname:{
          required: true,
        },
        mobile_no:{
          required:true, 
          maxlength:10,
          digits: true,
          customPhoneNumber: true
        },
        state_2:{
          required: true,
        },
        dist_2:{
          required: true,
        }
    },
        messages:{
          cname: {
            required: "This field is required",
          },
          fname: {
          required: "This field is required",
        },
        lname:{
          required: "This field is required",
        },
        
        mobile_no: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        state_2: {
          required: "This field is required",
        },
        dist_2: {
          required: "This field is required",
        },
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
      $("#undate_btn_nursery_enq").on("click", function () {
      $("#narsary_list_enq_form").valid();
    });
  });

    function formatDateTime(originalDateTimeStr) {
      const originalDateTime = new Date(originalDateTimeStr);
      const pad = (num) => (num < 10 ? '0' : '') + num;
      const day = pad(originalDateTime.getDate());
      const month = pad(originalDateTime.getMonth() + 1);
      const year = originalDateTime.getFullYear();
      const hours = pad(originalDateTime.getHours());
      const minutes = pad(originalDateTime.getMinutes());
      const seconds = pad(originalDateTime.getSeconds());
  
      return `${day}-${month}-${year} / ${hours}:${minutes}:${seconds}`;
    }

    function get_agr_clgdata() {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_collge_enquiry_data';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              const tableBody = $('#data-table'); 
              let serialNumber = 1;
              if (data.college_enquiry_data && data.college_enquiry_data.length > 0) {
                  var table = $('#example').DataTable({
                      paging: true,
                      searching: true,
                      columns: [
                          { title: 'S.No.' },
                          { title: 'Date' },
                          { title: 'College Name' },
                          { title: 'fullName' },
                          { title: 'Phone Number' },
                          { title: 'State' },
                          { title: 'District' },
                          { title: 'Action', orderable: false }
                      ]
                  });
                  table.clear();
                      for (let i = data.college_enquiry_data.length - 1; i >= 0; i--) {
                      const row = data.college_enquiry_data[i];
                      const fullName = row.first_name + ' ' + row.last_name;
                          table.row.add([
                          serialNumber,
                          formatDateTime(row.date),
                          row.college_name,
                          fullName,
                          row.mobile,
                          row.state_name,
                          row.district_name,
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
                      ]);
                      serialNumber++;
                  }
    
                  table.draw();
              } else {
                  tableBody.html('<tr><td colspan="9">No valid data available</td></tr>');
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('Error');
                $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
                window.location.href = baseUrl + "login.php"; 
  
              }
          }
      });
    }
    get_agr_clgdata();

    function openViewdata(userId) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_agriculture_enquiry_data_by_id/' + userId;
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
      $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
          var userData = response.nursery_enquiry_data[0];
          document.getElementById('agr_clg').innerText=userData.nursery_name;
          document.getElementById('first_name_view').innerText=userData.first_name;
          document.getElementById('last_name_view').innerText=userData.last_name;
          document.getElementById('mob_nub').innerText=userData.mobile;
          document.getElementById('date_view').innerText=userData.date;
          document.getElementById('state_view').innerText=userData.state_name;
          document.getElementById('district_view').innerText=userData.district_name;
          document.getElementById('tehsil_view').innerText=userData.tehsil_name;
        },
        error: function(error) {
          console.error('Error fetching user data:', error);
        }
      });
    }

    function fetch_edit_data(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_agriculture_enquiry_data_by_id/' + id;    
      var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function (response) {
              var Data = response.college_enquiry_data[0];
              $('#product_id').val(Data.product_subject_id);
              $('#userId').val(Data.id);
              $('#college_name_edit').val(Data.college_name);
              $('#first_name_edit').val(Data.first_name);
              $('#last_name_edit').val(Data.last_name);
              $('#mobile_no').val(Data.mobile);
              setSelectedOption('state_2', Data.state_id);
              getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
              setTimeout(function() {
                setSelectedOption('dist_2', Data.district_id);
                populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
              }, 1000); 
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
          function edit_id() {
            var enquiry_type_id = $("#enquiry_type_id").val();
            var product_id = $("#product_id").val();
            var edit_id = $("#userId").val();
            var first_name = $("#first_name_edit").val();
            var last_name = $("#last_name_edit").val();
            var mobile = $("#mobile_no").val();
            var college_name = $("#college_name_edit").val();
            var state = $("#state_2").val();
            var district = $("#dist_2").val();
            var tehsil = $("#tehsil_2").val();
            var _method = 'put';
          
            if (!/^[6-9]\d{9}$/.test(mobile)) {
                alert("Mobile number must start with 6 or above and should be 10 digits");
                return; 
            }
            var paraArr = {
                'first_name': first_name,
                'last_name': last_name,
                'mobile': mobile,
                'college_name': college_name,
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
                    alert('successfully updated..!')
                },
                error: function (error) {
                    console.error('Error fetching data:', error);
                }
            });
          }

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
          alert("Delete operation successful");
        },
        error: function(error) {
          console.error('Error fetching data:', error);
          alert("Error during delete operation");
        }
      });
    }
    
function search_data() {
  var college_name = $('#college_name').val();
  var stateselect = $('#state_state').val();
  var districtselect = $('#dist_state').val();
  var paraArr = {
    'college_name': college_name,
    'state': stateselect,
    'district': districtselect,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_college_enquiry';
  $.ajax({
    url: url,
    type: 'POST',
    data: paraArr,

    headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (searchData) {
      updateTable(searchData);
    },
    error: function (xhr, status, error) {
      if (xhr.status === 400) {
        const tableBody = $('#data-table');
        tableBody.html('<tr><td colspan="9">No matching data available</td></tr>');
        $('#example').DataTable().clear().draw();
      } else {
        console.error('Error searching for brands:', error);
      }
    }
  });
}

function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';
  let serialNumber = 1;
  if (data.collegeEnquiry && data.collegeEnquiry.length > 0) {
    let tableData = [];
    data.collegeEnquiry.forEach(row => {
      const fullName = row.first_name + ' ' + row.last_name;
      let action = `<div class="d-flex">
      <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_nursery_enq">
          <i class="fas fa-eye" style="font-size: 11px;"></i>
      </button>
      <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_nursery_enq" id="yourUniqueIdHere">
          <i class="fas fa-edit" style="font-size: 11px;"></i>
      </button>
      <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
          <i class="fa fa-trash" style="font-size: 11px;"></i>
      </button>
  </div>`;

      tableData.push([
        serialNumber,
        formatDateTime(row.date),
        row.college_name,
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
        { title: 'College Name' },
        { title: 'fullName' },
        { title: 'Phone Number' },
        { title: 'State' },
        { title: 'District' },
        { title: 'Action', orderable: false }
      ],
      paging: true,
      searching: true,
    });
  } else {
    tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
  }
}
function resetform(){
  $('#college_name').val('');
  $('#state_state').val('');
  $('#dist_state').val('');
  window.location.reload();
}