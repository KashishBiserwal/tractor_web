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


// store

function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var location = $('#location').val();
    var name = $('#name').val();
    var mobile_no = $('#mobile_no').val();
    var brand_name = $('#brand_name').val();
    var Model_name = $('#Model_name').val();
    var year = $('#year').val();
    var engine_condition = $('#engine_condition').val();
    var hr_driven = $('#hr_driven').val();
    // var rc = $('#rc').val();
    var financed = $('input[name="fav_language"]:checked').val();
    var nocAvailable = $('input[name="fav_language1"]:checked').val();
    var image = $('#image').val();
    var sell_day = $('#sell_day').val();

    // Prepare data to send to the server
    var paraArr = {
      'location': location,
      'name': name,
      'mobile_no': mobile_no,
      'brand_name': brand_name,
      'Model_name': Model_name,
      'year': year,
      'engine_condition': engine_condition,
      'hr_driven': hr_driven,
      // 'rc':rc,
      'image': image,
      'sell_day': sell_day,
      'financed': financed,
      'nocAvailable': nocAvailable,
    };

    var apiBaseURL =APIBaseURL;
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'storeProduct';
   // var url = "<?php echo $APIBaseURL; ?>user_login";
    // console.log(url);
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
        window.location.href = "<?php echo $baseUrl; ?>old_tractor_list.php"; 
        console.log("Add successfully");
        // alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }


   // fetch data
   function getTractorList() {
    console.log('kjhskdjf');
    // var url = "<?php echo $APIBaseURL; ?>getProduct";
    var apiBaseURL =APIBaseURL;
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'getProduct';

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

            if (data.product && data.product.length > 0) {
                // console.log(typeof product);

                data.product.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                  console.log(tableRow, 'helloooo');
                   

                    tableRow.innerHTML = `
                   
                        <td>${row.id}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model}</td>
                        <td>${row.total_cyclinder_id}</td>
                        <td>${row.hp_category}</td>
                        <td>${row.horse_power}</td>
                        <td>${row.brake_type_id}</td>
                        <td>${row.steering_details_id}</td>
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