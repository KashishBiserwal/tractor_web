$(document).ready(function() {

    $("#form").validate({
      rules:{
        name:"required"
    },
    messages:{
        name:"Field is required"
    }

});

$('#login').click(store);
});

function store(event) {
  // Get values from form fields
  event.preventDefault();
  console.log('jfhfhw');
  var lookup_type = $('#name').val();

  // Prepare data to send to the server
  var paraArr = {
    'lookup_type': lookup_type
  };

  // Define the URL where you want to send the data
//   var url = "<?php echo $APIBaseURL; ?>lookup_type";
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'lookup_type';
  console.log(url);

  // You may need to include headers, but you should ensure they are properly configured
  var token = localStorage.getItem('token');
  var headers = {
    'Authorization': 'Bearer ' + token
  };

  // Make an AJAX request to the server
  $.ajax({
    url: url,
    type: "POST",
    data: paraArr,
    headers: headers,
    success: function (result) {
      console.log(result, "result");
      // Redirect to a success page or perform other actions
    //   window.location.href = "<?php echo $baseUrl; ?>lookupvalue.php"; 
    get();
      console.log("Add successfully");
      alert('successfully inserted..!')
    },
    error: function (error) {
      console.error('Error fetching data:', error);
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
          tableBody.innerHTML = ''; // Clear previous data

          if (data.lookup_type.length > 0) {
              let serialNumber = 1; // Initialize serial number

              // Loop through the data and create table rows
              data.lookup_type.map(row => {
                  const tableRow = document.createElement('tr');
                  tableRow.innerHTML = `
                      <td>${serialNumber}</td>
                    
                      <td>${row.name}</td>
                      <td>
                          <div class="d-flex">
                              <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});">
                                  <i class="fa fa-trash" style="font-size: 11px;"></i>
                              </button>
                          </div>
                      </td>
                  `;
                  tableBody.appendChild(tableRow);
                  
                  // Increment serialNumber for the next row
                  serialNumber++;
              });
          } else {
              // Display a message if there's no valid data
              tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
          // Display an error message or handle the error as needed
      }
  });
}

get();


function destroy(id) {
// var url = "<?php echo $APIBaseURL; ?>lookup_type/" + id;
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
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
    // window.location.reload();
    get();
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
  input = document.getElementById("search_name");
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