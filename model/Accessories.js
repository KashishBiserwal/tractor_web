$( document ).ready(function() {
    $('#add_ass').click(store);
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
  
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'accessory';
    console.log(url);
  
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
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'accessory';
    
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
    
            if (data.product.length > 0) {
          console.log(typeof data.product);
                data.product.map(row => {
                //   console.log(row);
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.accessory}</td>
                        <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
                    `;
                    tableBody.appendChild(tableRow);
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

    // delete data
    function destroy(id) {
        var apiBaseURL =APIBaseURL;
        var url = apiBaseURL + 'accessory/'+ id;
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
          get_data();
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
        $(".data_search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#data-table tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });