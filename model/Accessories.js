var EditIdmain_ = "";
var editId_state= false;
$( document ).ready(function() {
    $('#add_ass').click(store);
    $('#update_ass').click(update_data);
    console.log('fjfej');
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
    var accessories = $('#accessories').val();
  
    // Prepare data to send to the server
    var paraArr = {
      'accessory': accessories
    };
    var url, method;
    var apiBaseURL =APIBaseURL;
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (editId_state) {
        // Update mode
        console.log(editId_state);
        _method = 'put';
        url = apiBaseURL + 'accessory/' + EditIdmain_ ;
        console.log(url);
        method = 'PUT'; 
    } else {
        // Add mode
        url = apiBaseURL + 'accessory';
        method = 'POST';
    }
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: method,
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        get_data();
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }


//   get data
function get_data() {
  console.log('get data on table');
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'accessory';

  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
        const tableBody = document.getElementById('data-table');
        tableBody.innerHTML = ''; // Clear previous data
    
        if (data.product.length > 0) {
            let tableData = [];
            let counter = 1; // Initialize counter for serial numbers
    
            // Reverse the data array to display the latest data first
            data.product.reverse().forEach(row => {
                let action = `<div class="d-flex">
                                <button class="btn btn-primary text-white btn-sm mx-1"  onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1" id="yourUniqueIdHere" style="padding:5px">
                                <i class="fas fa-edit" style="font-size: 11px;"></i></button>
                                <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px">
                                <i class="fa fa-trash" style="font-size: 11px;"></i></button>
                            </div>`;
    
                tableData.push([
                    counter++, // Increment counter for serial numbers
                    row.accessory,
                    action
                ]);
            });
    
            $('#example').DataTable().destroy();
            $('#example').DataTable({
                data: tableData,
                columns: [
                    { title: 'S.No.' },
                    { title: 'Accessories Name' },
                    { title: 'Action', orderable: false } // Disable ordering for Action column
                ],
                paging: true,
                searching: false,
                // ... other options ...
            });
        } else {
            tableBody.innerHTML = '<tr><td colspan="3">No valid data available</td></tr>';
        }
    },
    
      error: function (error) {
          console.error('Error fetching data:', error);
          // Display an error message or handle the error as needed
      }
  });
}

get_data();

    function fetch_edit_data(userId) {
      // editId_state= true;
      // EditIdmain_= product_id;
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'accessory/' + userId;
      console.log("dhbcjkf");
    
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
          var userData = response.product[0];
          // $('#idUser').val(userData.id);
          $('#accessories_1').val(userData.accessory);
          $('#idUser').val(userData.id);
    
    
          // $('#exampleModal').modal('show');
        },
        error: function(error) {
          console.error('Error fetching user data:', error);
        }
      });
    }

    function update_data(){
      var edit_id = $("#idUser").val();
      var accessories_1 = $("#accessories_1").val();
      
      var paraArr = {
        'accessory': accessories_1,
        'id': edit_id,
    
      };
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'accessory/' + edit_id;
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
            get_data();
            console.log("updated successfully");
            alert('successfully updated..!')
          },
          error: function (error) {
            console.error('Error fetching data:', error);
          }
      })
    }

        // delete data

function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'accessory/' + id;
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