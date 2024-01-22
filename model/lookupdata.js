$(document).ready(function() {

  $('#dataeditbtn').click(edit_user);

  $("#lookup_data_form").validate({
    rules: {
      lookup_Selectbox: {
            required: true,
        },
        lookup_datavalue: {
          required: true,
      }
    },
    messages: {
      lookup_Selectbox: {
            required: "This field is required",
        },
        lookup_datavalue: {
          required: "This field is required",
      }
     },
    submitHandler: function (form) {
        var msg = "Form submitted successfully !"
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
  });

  $("#lookup_data_submit").on("click", function () {
      $("#lookup_data_form").valid();
  });
$('#lookup_data_submit').click(store);
  // for edit model

   // for edit model
   $("#lookup_data_form_1").validate({
    rules: {
      lookup_Selectbox1: {
            required: true,
        },
        lookup_datavalue1: {
          required: true,
      }
    },
    messages: {
      lookup_Selectbox1: {
            required: "This field is required",
        },
        lookup_datavalue1: {
          required: "This field is required",
      }
     },
    submitHandler: function (form) {
        var msg = "Form submitted successfully !";
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('Success');
        $("#errorStatusLoading").find('.modal-body').html(msg);
    },
  });
  
  $("#dataeditbtn").on("click", function () {
      $("#lookup_data_form_1").valid();
  });

});


function get_data() {
  console.log('hhsdfshdfch');
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'lookup_data';

  $.ajax({
      url: url,
      type: 'GET',
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = document.getElementById('data-table');
          tableBody.innerHTML = ''; // Clear previous data

          if (data.lookup_data.length > 0) {
              let serialNumber = 1; 
              let tableData = [];
              // Loop through the data and create table rows
              data.lookup_data.forEach(row => {
                 // const tableRow = document.createElement('tr');
                 let action = `<div class="d-flex">
                 <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                     <i class="fa fa-trash" style="font-size: 11px;"></i>
                 </button>
                 <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" id="yourUniqueIdHere">
                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                 </button>
             </div>`;
               
                  tableData.push([
                    serialNumber,
                    row.lookup_type_id,
                    row.lookup_data_value,
                    action
                ]);

                  // Increment serialNumber fo  r the next row
                  serialNumber++;
                  
              });
              $('#example').DataTable().destroy();
              $('#example').DataTable({
                      data: tableData,
                      columns: [
                        { title: 'ID' },
                        { title: 'Lookup Type' },
                        { title: 'Lookup Data' },
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                      paging: true,
                      searching: false,
                      // ... other options ...
                  });
          } else {
              // Display a message if there's no valid data
              tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
          var msg = error;
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Error');
          $("#errorStatusLoading").find('.modal-body').html(msg);
          // Display an error message or handle the error as needed
      }
  });
}

get_data();


function store(event) {
  event.preventDefault();
  console.log('jfhfhw');
  var lookup_type = $('#lookupSelectbox').val();
  var lookup_data_value = $('#lookup_data_value').val();
  console.log(lookup_type);

  // Prepare data to send to the server
  var paraArr = {
    'lookup_type_id': lookup_type,
    'lookup_data_value': lookup_data_value
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'lookup_data';

  console.log(url);

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
      console.log(result, "result");
      console.log("Add successfully");
      var msg = "Added successfully !"
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Success');
      $("#errorStatusLoading").find('.modal-body').html(msg);

      // Hide the modal immediately
      $("#staticBackdrop1").modal('hide');

      // Show alert box with OK button
      var alertConfirmation = confirm("Data added successfully. Do you want to reload the page?");
      if (alertConfirmation) {
        window.location.reload();
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

//   get data in select box
function get() {
  // var url = "<?php echo $APIBaseURL; ?>lookup_type";
  var apiBaseURL =APIBaseURL;
  // Now you can use the retrieved value in your JavaScript logic
  var url = apiBaseURL + 'lookup_type';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization':'Bearer' + localStorage.getItem('token')
      },
      success: function (data) {
          // console.log(data);
          const select = document.getElementById('lookupSelectbox');
          select.innerHTML = ''; // Clear previous data
  
          if (data.lookup_type.length > 0) {
              data.lookup_type.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.name;
                
                  option.value = row.id;
                  select.appendChild(option);
              });
          } else {
              select.innerHTML = '<option> No valid data available</option>';
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
  get();

  function get_lookup() {
    // var url = "<?php echo $APIBaseURL; ?>lookup_type";
    var apiBaseURL =APIBaseURL;
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'lookup_type';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization':'Bearer' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
            const select = document.getElementById('lookupSelectbox1');
            select.innerHTML = ''; // Clear previous data
    
            if (data.lookup_type.length > 0) {
                data.lookup_type.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.name;
                  
                    option.value = row.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option> No valid data available</option>';
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
    get_lookup();


// get data in table


// // delete data
// function destroy(id) {
// // var url = "<?php echo $APIBaseURL; ?>lookup_data/" + id;
// var apiBaseURL =APIBaseURL;
// // Now you can use the retrieved value in your JavaScript logic
// var url = apiBaseURL + 'lookup_data/'+ id;
// var token = localStorage.getItem('token');

// if (!token) {
// console.error("Token is missing");
// return;
// }

// $.ajax({
// url: url,
// type: "DELETE",
// headers: {
//   'Authorization': 'Bearer ' + token
// },
// success: function(result) {
//   // window.location.reload();
//   get_data();
//   console.log("Delete request successful");
//   var msg = "Deleted successfully !"
//         $("#errorStatusLoading").modal('show');
//         $("#errorStatusLoading").find('.modal-title').html('Success');
//         $("#errorStatusLoading").find('.modal-body').html(msg);
// },
// error: function(error) {
//   console.error('Error fetching data:', error);
//   var msg = error;
//   $("#errorStatusLoading").modal('show');
//   $("#errorStatusLoading").find('.modal-title').html('Error');
//   $("#errorStatusLoading").find('.modal-body').html(msg);
// }
// });
// }
  // **delete***
  function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'lookup_data/' + id;
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
          break; // Break the inner loop if a match is found in any td
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  function resetForm() {
          document.getElementById("myform").reset();
  
          // Show all rows in the table
          var table = document.getElementById("example");
          var rows = table.getElementsByTagName("tr");
  
          for (var i = 0; i < rows.length; i++) {
              rows[i].style.display = "";
          }
      }


      // edit and update 
    function fetch_edit_data(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'lookup_data/' + id; 
      console.log(url);
    
      var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function (response) {
            // console.log('sdfgh'); 
              var Data = response.lookup_data[0];
              $('#idUser').val(Data.id);
              $('#lookupSelectbox1').val(Data.lookup_type_id);
              $('#lookup_data_value1').val(Data.lookup_data_value);
              // console.log(Data.name);
              
          },
          error: function (error) {
              console.error('Error fetching user data:', error);
              var msg = error;
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
    }
  
  function edit_user() {
    var edit_id = $("#idUser").val();
    var lookup_type = $("#lookupSelectbox1").val();
    var lookup_value = $("#lookup_data_value1").val();

    var paraArr = {
        'lookup_type_id': lookup_type,
        'lookup_data_value': lookup_value,
        'id': edit_id, 
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'lookup_data/' + edit_id;
  
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
            // get();
            window.location.reload();
            console.log("updated successfully");
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