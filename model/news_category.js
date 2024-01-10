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
    var category = $('#accessories').val();
  
    // Prepare data to send to the server
    var paraArr = {
      'category_name': category
    };
    var url, method;
    var apiBaseURL =APIBaseURL;
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (editId_state) {
        // Update mode
        console.log(editId_state);
        _method = 'put';
        url = apiBaseURL + 'news_category/' + EditIdmain_ ;
        console.log(url);
        method = 'PUT'; 
    } else {
        // Add mode
        url = apiBaseURL + 'news_category';
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
    console.log('get data on table');
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'news_category';
    
    // console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
        //   console.log(data);
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data
    
            if (data.news_category.length > 0) {
              let tableData = [];
          console.log(typeof data.news_category);
                data.news_category.forEach(row => {
                //   console.log(row);
                   // const tableRow = document.createElement('tr');
                   let action = ` <div class="d-flex"></button>
                   <button class="btn btn-primary text-white btn-sm mx-1" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_1" id="yourUniqueIdHere" style="padding:5px">
                   <i class="fas fa-edit" style="font-size: 11px;"></i></button><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px"><i class="fa fa-trash" style="font-size: 11px;"></i></div>`;

                    tableData.push([
                      row.id,
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
                          { title: 'Action', orderable: false } // Disable ordering for Action column
                      ],
                        paging: true,
                        searching: true,
                        // ... other options ...
                    });
            } else {
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
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
      var url = apiBaseURL + 'news_category/' + userId;
      console.log("dhbcjkf");
    
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
          var userData = response.news_category[0];
          // $('#idUser').val(userData.id);
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
            console.log(result, "result");
            get_data();
            console.log("updated successfully");
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

  // Show a confirmation popup
  var isConfirmed = confirm("Are you sure you want to delete this data?");
  if (!isConfirmed) {
    // User clicked 'Cancel' in the confirmation popup
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
      console.log("Delete request successful");
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