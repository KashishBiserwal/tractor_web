function populateBrandDropdown(brandClassName, modelClassName) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
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
                brandSelect.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    populateModelDropdown(selectedBrandId, modelClassName);
                });
            } else {
                brandSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching brands:', error);
        }
    });
}

function populateModelDropdown(brand_id, modelClassName) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    console.log(url);
    var modelSelect = document.getElementsByClassName(modelClassName)[0];
    modelSelect.innerHTML = '<option selected disabled value="">Please select a model</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (Array.isArray(data.model) && data.model.length > 0) {
                data.model.forEach(modelName => {  // Since it's an array of strings
                    const option = document.createElement('option');
                    option.textContent = modelName;  // Use modelName directly
                    option.value = modelName;
                    modelSelect.appendChild(option);
                });
            } else {
                modelSelect.innerHTML = '<option>No models available for this brand</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching models:', error);
        }
    });
}


// Call the function to populate brand dropdown
populateBrandDropdown('brand_select', 'model_select');
