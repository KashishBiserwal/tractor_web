$(document).ready(function(){
    $('#compareButton').click(store);
});



function get() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_all_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('.brandselect');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function get_model(brand_id) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "POST",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('.modelselect');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

get();


function store() {
    var brand_id = $('#brand').val();
    var model = $('#model').val();

    var paraArr = {
      'brand_id': brand_id,
      'model':model,
    };
    // var apiBaseURL = APIBaseURL;
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/compare_tractors';
    $.ajax({
        url:url, 
        type: 'POST',
        data: paraArr,
      
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
          
        },
        error: function (error) {
            console.error('Error searching for brands:', error);
        }
    });
};

 function getbrand() {
      var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_by_product_id/" + 2;
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log(data);
              const selects = document.querySelectorAll('#brand');
    
              selects.forEach(select => {
                  select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
                  if (data.brands.length > 0) {
                      data.brands.forEach(row => {
                          const option = document.createElement('option');
                          option.textContent = row.brand_name;
                          option.value = row.id;
                          console.log(option);
                          select.appendChild(option);
                      });
    
                      // Add event listener to brand dropdown
                      select.addEventListener('change', function() {
                          const selectedBrandId = this.value;
                          get_model(selectedBrandId);
                      });
                  } else {
                      select.innerHTML = '<option>No valid data available</option>';
                  }
              });
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
    }
    
    function get_model(brand_id) {
      var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
      console.log('Requesting models for brand ID:', brand_id); // Debugging statement
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              console.log('Received models data:', data); // Debugging statement
              const selects = document.querySelectorAll('#model');
    
              selects.forEach(select => {
                  select.innerHTML = '<option selected disabled value="">Please select an option</option>';
    
                  if (data.model && data.model.length > 0) {
                      data.model.forEach(row => {
                          const option = document.createElement('option');
                          option.textContent = row.model;
                          option.value = row.model;
                          console.log('Adding model:', option); // Debugging statement
                          select.appendChild(option);
                      });
                  } else {
                      select.innerHTML = '<option>No valid data available</option>';
                  }
              });
          },
          error: function (error) {
              console.error('Error fetching model data:', error);
          }
      });
    }
    getbrand();


    function getbrand2() {
        var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_by_product_id/" + 2;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const selects = document.querySelectorAll('#brand_2');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.brands.length > 0) {
                        data.brands.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.brand_name;
                            option.value = row.id;
                            console.log(option);
                            select.appendChild(option);
                        });
      
                        // Add event listener to brand dropdown
                        select.addEventListener('change', function() {
                            const selectedBrandId = this.value;
                            get_model(selectedBrandId);
                        });
                    } else {
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                });
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
      }
      
      function get_model(brand_id) {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
        console.log('Requesting models for brand ID:', brand_id); // Debugging statement
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log('Received models data:', data); // Debugging statement
                const selects = document.querySelectorAll('#model_2');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.model && data.model.length > 0) {
                        data.model.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.model;
                            option.value = row.model;
                            console.log('Adding model:', option); // Debugging statement
                            select.appendChild(option);
                        });
                    } else {
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                });
            },
            error: function (error) {
                console.error('Error fetching model data:', error);
            }
        });
      }
      getbrand2();

      function get_model(brand_id) {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
        console.log('Requesting models for brand ID:', brand_id); // Debugging statement
        $.ajax({
            url: url,
            type: "POST",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log('Received models data:', data); // Debugging statement
                const selects = document.querySelectorAll('#model');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.model && data.model.length > 0) {
                        data.model.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.model;
                            option.value = row.model;
                            console.log('Adding model:', option); // Debugging statement
                            select.appendChild(option);
                        });
                    } else {
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                });
            },
            error: function (error) {
                console.error('Error fetching model data:', error);
            }
        });
      }
      getbrand();


      function get_model(brand_id) {
        var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
        console.log('Requesting models for brand ID:', brand_id); // Debugging statement
        $.ajax({
            url: url,
            type: "POST",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log('Received models data:', data); // Debugging statement
                const selects = document.querySelectorAll('#model_1');
      
                selects.forEach(select => {
                    select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                    if (data.model && data.model.length > 0) {
                        data.model.forEach(row => {
                            const option = document.createElement('option');
                            option.textContent = row.model;
                            option.value = row.model;
                            console.log('Adding model:', option); // Debugging statement
                            select.appendChild(option);
                        });
                    } else {
                        select.innerHTML = '<option>No valid data available</option>';
                    }
                });
            },
            error: function (error) {
                console.error('Error fetching model data:', error);
            }
        });
      }
      getbrand1();