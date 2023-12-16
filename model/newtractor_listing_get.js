$(document).ready(function () {
      getTractorList();
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
  // fetch data
  function getTractorList() {
    console.log('kjhskdjf');
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'get_new_tractor';

    // console.log(url);  

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const tableBody = document.getElementById('data-table');

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // console.log(typeof product);

                data.product.allProductData.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                //   console.log(tableRow, 'helloooo');
                    tableRow.innerHTML = `
                   
                        <td>${row.product_id}</td>
                        <td>${formatDateTime(row.created_at)}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model}</td>
                        <td>${row.wheel_base}</td>
                        <td>${row.hp_category}</td>
                        <td>${row.ending_price}</td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                                </button>
                            </div>
                        </td>
                    `;
                    tableBody.appendChild(tableRow);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// delete data
function destroy(id) {
//   var url = "<?php echo $APIBaseURL; ?>deleteProduct/" + id;
var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'deleteProduct/'+ id;

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