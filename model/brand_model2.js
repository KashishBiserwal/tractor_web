function populateBrandDropdown(brandClassName, modelClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const brandSelect = document.getElementsByClassName(brandClassName)[0];
            brandSelect.innerHTML = '<option selected disabled value="">Please select a brand</option>';

            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
                    brandSelect.appendChild(option);
                });

                // Add event listener to brand dropdown
                brandSelect.addEventListener('change', function () {
                    const selectedBrandId = this.value;
                    populateModelDropdown(selectedBrandId, modelClassName);
                });
            } else {
                brandSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function populateModelDropdown(brand_id, modelClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const modelSelect = document.getElementsByClassName(modelClassName)[0];
            modelSelect.innerHTML = '<option selected disabled value="">Please select a model</option>';

            if (data.model.length > 0) {
                data.model.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.model;
                    option.value = row.model;
                    modelSelect.appendChild(option);
                });
            } else {
                modelSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Call the function to populate brand dropdown
populateBrandDropdown('brand_select_1', 'model_select_1');
