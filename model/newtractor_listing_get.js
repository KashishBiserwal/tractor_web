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

  //   $('#Search').click(function(){
  //     $('#example').DataTable().destroy();
  //     $('#example').dataTable({
  //         'processing': true,
  //         'serverSide': true,
  //         'bSort': true,
  //         'bPaginate': false, // Set pagination to false
  //         'bLengthChange': true,
  //         'bFilter': false,
  //         'iDisplayLength': 10,
  //         'bRetrieve': true,
  //         'ajax': {
  //             'type': 'GET',
  //             'url': 'getRoutes.cfm?method=selectALLData',
  //             'data': {
  //                 email: $('#search_Email').val(),
  //                 name: $('#Search_name').val()
  //             },
  //             'error': function (jqXHR, textStatus, errorThrown) {
  //                 //$("#loader-wrapper").hide();
  //             }
  //         }
  //     });
  // });
  


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
            var select_model = $("#model");
            select_model.empty(); // Clear existing options
            select_model.append('<option selected disabled="" value="">Please select a model</option>'); 
            console.log(data, 'ok');
            for (var j = 0; j < data.product.allProductData.length; j++) {
              var model = data.product.allProductData[j].model;
              select_model.append('<option value="' + model + '">' + model + '</option>');
          }
          var select_hp = $("#hp");
          select_hp.empty(); // Clear existing options
          select_hp.append('<option selected disabled="" value="">Please select HP</option>'); 
          console.log(data, 'ok');
          for (var j = 0; j < data.product.allProductData.length; j++) {
            var model = data.product.allProductData[j].hp_category;
            select_hp.append('<option value="' + model + '">' + model + '</option>');
        }

            const tableBody = document.getElementById('data-table');

            if (data.product.allProductData && data.product.allProductData.length > 0) {
                // console.log(typeof product);

                data.product.allProductData.forEach(row => {
                  const tableRow = document.createElement('tr');
                  // console.log(tableRow, 'helloooo');
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

// get brand
function get() {
  // var url = "<?php echo $APIBaseURL; ?>getBrands";
  var apiBaseURL =APIBaseURL;
  // Now you can use the retrieved value in your JavaScript logic
  var url = apiBaseURL + 'getBrands';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const select = document.getElementById('brand');
          select.innerHTML = '';

          if (data.brands.length > 0) {
              data.brands.forEach(row => {
                  const option = document.createElement('option');
                  option.value = row.id; // You might want to set a value for each option
                  option.textContent = row.brand_name;
                  select.appendChild(option);
              });
          } else {
              select.innerHTML ='<option>No valid data available</option>';
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}
get();

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