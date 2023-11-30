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
            const select = document.getElementById('brand_name');
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

// get model
// function get_model() {
//     // var url = "<?php echo $APIBaseURL; ?>lookup_type";
//     var apiBaseURL =APIBaseURL;
//     // Now you can use the retrieved value in your JavaScript logic
//     var url = apiBaseURL + 'lookup_type';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization':'Bearer' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             console.log(data);
//             const select = document.getElementById('lookupSelectbox');
//             select.innerHTML = ''; // Clear previous data
    
//             if (data.lookup_type.length > 0) {
//                 data.lookup_type.forEach(row => {
//                     const option = document.getElementById('Model_name');
//                     option.textContent = row.name;
                  
//                     option.value = row.id;
//                     select.appendChild(option);
//                 });
//             } else {
//                 select.innerHTML = '<option> No valid data available</option>';
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
//     }
//     get_model();

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
      'image': image,
      'sell_day': sell_day,
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