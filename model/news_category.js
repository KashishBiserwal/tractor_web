var EditIdmain_ = "";
var editId_state= false;
$( document ).ready(function() {
    $('#add_ass').click(store);
    $('#update_ass').click(update_data);
    $("#acc_form").validate({
        rules: {
            accessories: 'required',
        }
    });
    $('#add_ass').on('click', function() {
        $('#acc_form').valid();
        console.log($('#acc_form').valid());
    });
});

function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var category = $('#accessories').val();
    var paraArr = {
      'category_name': category
    };
    var url, method;
    var apiBaseURL =APIBaseURL;
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (editId_state) {
        _method = 'put';
        url = apiBaseURL + 'news_category/' + EditIdmain_ ;
        method = 'PUT'; 
    } else {
        url = apiBaseURL + 'news_category';
        method = 'POST';
    }
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
  
    $.ajax({
      url: url,
      type: method,
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        get_data();
        console.log("Add successfully");
        alert('successfully inserted..!');
        $('#staticBackdrop1').modal('hide');
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
//   get data
function get_data() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'news_category';

  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
          tableBody.innerHTML = ''; 

          if (data.news_category.length > 0) {
              let tableData = [];
              let serialNumber = data.news_category.length;

              data.news_category.forEach(row => {
                  let action = `<div class="d-flex">
                      <button class="btn btn-primary text-white btn-sm mx-1" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1" id="yourUniqueIdHere" style="padding:5px">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px">
                          <i class="fa fa-trash" style="font-size: 11px;"></i>
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
                      { title: 'S.No.' },
                      { title: 'Category Name' },
                      { title: 'Action', orderable: true } 
                  ],
                  paging: true,
                  searching: false,
              });
          } else {
              tableBody.innerHTML = '<tr><td colspan="3">No valid data available</td></tr>';
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
get_data();

    function fetch_edit_data(userId) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'news_category/' + userId;
    
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
          var userData = response.news_category[0];
          $('#accessories_1').val(userData.category_name);
          $('#idUser').val(userData.id); 
        },
        error: function(error) {
          console.error('Error fetching user data:', error);
        }
      });
    }

    function update_data(){
      var edit_id = $("#idUser").val();
      var category_name = $("#accessories_1").val();
      var paraArr = {
        'category_name': category_name,
        'id': edit_id,
      };
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'news_category/' + edit_id;
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
      $.ajax({
        url: url,
          type: "PUT",
          data: paraArr,
          headers: headers,
          success: function (result) {
            get_data();
            alert('successfully updated..!');
            $('#staticBackdrop_1').modal('hide');
          },
          error: function (error) {
            console.error('Error fetching data:', error);
          }
      })
    }

// delete data
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'news_category/' + id;
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
      get_data();
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

// searching 
function myFunction() {
  var input, filter, table, tr, td, i, j, txtValue;
  input = document.getElementById("name");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      // Loop through all td elements in the current row
      td = tr[i].getElementsByTagName("td");
      for (j = 0; j < td.length; j++) {
      txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break; 
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
function resetForm() {
  document.getElementById("myform").reset();
  var table = document.getElementById("example");
  var rows = table.getElementsByTagName("tr");
  for (var i = 0; i < rows.length; i++) {
    rows[i].style.display = "";
  }
}