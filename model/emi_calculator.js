
function get_1() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);
            const select = document.getElementById('brandSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
                    // console.log(row.id,);
                    select.appendChild(option);
                });
  
                // Add event listener to brand dropdown
                select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_model_1(selectedBrandId);
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
  
  function get_model_1(id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('modelSelect');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.model.length > 0) {
                data.model.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.model;
                    option.value = row.model;
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
get_1();