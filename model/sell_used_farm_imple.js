



// get brand
function get() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'getBrands';
  
    $.ajax({
      url: url,
      type: "GET",
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
        console.log(data);
       // select.innerHTML = '<option selected disabled value="">Please select an option</option>';
        const select = $('#brand_1');
        select.empty(); // Clear existing options
  
        // Add a default option
        select.append('<option selected disabled value="">Please select Brand</option>');
  
        // Use an object to keep track of unique brands
        var uniqueBrands = {};
  
        $.each(data.brands, function (index, brand) {
          var brand_id = brand.id;
          var brand_name = brand.brand_name;
  
          // Check if the brand ID is not already in the object
          if (!uniqueBrands[brand_id]) {
            // Add brand ID to the object
            uniqueBrands[brand_id] = true;
  
            // Append the option to the dropdown
            select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
          }
        });
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  get();

     
  function get_category() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('c_category');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_category();


function get_year_and_hours() {
    console.log('initsfd')
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            var hours_select = $("#h_driven");
            hours_select.empty(); // Clear existing options
            hours_select.append('<option selected disabled="" value="">Please select an option</option>'); 
            console.log(data, 'ok');
            for (var k = 0; k < data.getHoursDriven.length; k++){
                var optionText = data.getHoursDriven[k].start + " - " + data.getHoursDriven[k].end;
                hours_select.append('<option value="' + k + '">' + optionText + '</option>');
            } 
  
            var select_year = $("#p_year");
            select_year.empty(); // Clear existing options
            select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
  
            // Sort the array in descending order
            data.getYears.sort(function(a, b) {
                return b - a;
            });
  
            for (var j = 0; j < data.getYears.length; j++) {
                select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
            }
        },
        complete: function() {
            // You can add code here that will run after the request is complete
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  
  get_year_and_hours();
  