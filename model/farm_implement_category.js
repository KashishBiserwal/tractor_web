$(document).ready(function() {
    $('#savechangebtn').click(edit_user);
    $('#submit_button').click(store);
  
    $("#look_up_form").validate({
      rules: {
        name: {
              required: true,
          },
          imgfile:{
            required: true,
          }
      },
      messages: {
        name: {
              required: "This field is required",
          },
          imgfile: {
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
  
    $("#look_up_form1").validate({
      rules: {
        name1: {
            required: true,
          },
      },
      messages: {
        name1: {
              required: "This field is required",
          },
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
  var category_name = $('#name').val();
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'implement_category';
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var data = new FormData();
    data.append('category_name', category_name);
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
      success: function (result) {
      get();
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
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = '';
            if (data.allCategory.length > 0) {
                let tableData = [];
                let serialNumber = data.allCategory.length;
                data.allCategory.forEach(row => {
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
                      row.category_name,
                      action
                  ]);
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                        data: tableData,
                        columns: [
                          { title: 'ID' },
                          { title: 'Category Name' },
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
  var url = apiBaseURL + 'implement_category/' + id;
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
  var url = apiBaseURL + 'implement_category/' + id;
  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function (response) {
      var Data = response.allCategory[0];
        $('#idUser').val(Data.id);
        $('#look_up_name').val(Data.category_name);
    },
    error: function (error) {
      console.error('Error fetching user data:', error);
    }
  });
}
    function edit_user(edit_id) {
      var edit_id = $("#idUser").val();
      var category_name1 = $("#look_up_name").val();
      var paraArr = {
          'category_name': category_name1,
          'id': edit_id, 
      };
    
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'implement_category/' + edit_id;
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
              get();
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
  
       