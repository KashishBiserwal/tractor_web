$(document).ready(function() {
  $('#savechangebtn').click(edit_user);
  $('#submit_button').click(store);
  $("#look_up_form").validate({
    rules: {
      lookup_name: {
        required: true,
        }
    },
    messages: {
      lookup_name: {
        required: "This field is required",
      }
    },
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    }, 
  });

  $("#submit_button").on("click", function () {
      $("#look_up_form").valid();
  });

  // for edit model
  $("#look_up_form1").validate({
    rules: {
      lookup_name1: {
         required: true,
      }
    },
    messages: {
      lookup_name1: {
        required: "This field is required",
      }
    },
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    }, 
  });
  
  $("#savechangebtn").on("click", function () {
      $("#look_up_form1").valid();
  });
});

$('#submit_button').click(store);

function store(event) {
  event.preventDefault();
  console.log('jfhfhw');
  var lookup_type = $('#name').val();
  var paraArr = {
    'lookup_type': lookup_type
  };

var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'lookup_type';
  var token = localStorage.getItem('token');
  var headers = {
    'Authorization': 'Bearer ' + token
  };

  $.ajax({
    url: url,
    type: "POST",
    data: paraArr,
    headers: headers,
    success: function (result) {
    get();
      console.log("Add successfully");
      $("#staticBackdrop1").modal('hide');
      var msg = "Added successfully !"
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Success');
      $("#errorStatusLoading").find('.modal-body').html(msg);
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

function get() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'lookup_type';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
          tableBody.innerHTML = ''; 

          if (data.lookup_type.length > 0) {
              let serialNumber = data.lookup_type.length;
              let tableData = [];
              data.lookup_type.forEach(row => {
                 let action = ` <div class="d-flex">
                    <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                      <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
                  </div>`;
               tableData.push([
                    serialNumber--,
                    row.name,
                    action
                ]);
              });
              $('#example').DataTable().destroy();
              $('#example').DataTable({
                      data: tableData,
                      columns: [
                        { title: 'ID' },
                        { title: 'Lookup Type' },
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
          if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
            window.location.href = baseUrl + "login.php"; 

          }
      }
  });
}

get();

function destroy(id) {
var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'lookup_type/' + id;
var token = localStorage.getItem('token');
if (!token) {
  console.error("Token is missing");
  return;
}
$.ajax({
  url: url,
  type: "DELETE",
  headers: {
    'Authorization': 'Bearer ' + token
  },
  success: function(result) {
    get();
    var msg = "Deleted successfully !"
    $("#errorStatusLoading").modal('show');
    $("#errorStatusLoading").find('.modal-title').html('Success');
    $("#errorStatusLoading").find('.modal-body').html(msg);
  },
  error: function(error) {
    console.error('Error fetching data:', error);
    var msg = error;
    $("#errorStatusLoading").modal('show');
    $("#errorStatusLoading").find('.modal-title').html('Error');
    $("#errorStatusLoading").find('.modal-body').html(msg);
  }
});
}

function myFunction() {
  var input, filter, table, tr, td, i, j, txtValue;
  input = document.getElementById("namesearch");
  filter = input.value.toUpperCase();
  table = $('#example').DataTable(); 
  table.search(filter).draw();
}

function resetForm() {
  document.getElementById("myform").reset();
  var table = $('#example').DataTable();
  table.search('').draw();
}
  // edit and update 
    function fetch_edit_data(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'lookup_type/' + id;
      console.log(url);
    
      var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function (response) {
              var Data = response.lookup_type[0];
              $('#idUser').val(Data.id);
              $('#look_up_name').val(Data.name);
             
          },
          error: function (error) {
              console.error('Error fetching user data:', error);
          }
      });
    }
  
  function edit_user() {
    var edit_id = $("#idUser").val();
    var lookup_name = $("#look_up_name").val();
    var paraArr = {
        'lookup_type': lookup_name,
        'id': edit_id, 
    };
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'lookup_type/' + edit_id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "PUT",
        data: paraArr,
        headers: headers,
        success: function (result) {
            get();
            $("#staticBackdrop2").modal('hide');
            var msg = "Updated successfully !"
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Success');
            $("#errorStatusLoading").find('.modal-body').html(msg);
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

     