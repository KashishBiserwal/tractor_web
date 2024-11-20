function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const stateSelect = document.getElementsByClassName(stateClassName)[0];
            stateSelect.innerHTML = '<option selected value="">Please select a state</option>';

            // Populate the state dropdown with all states
            data.stateData.forEach(state => {
                const option = document.createElement('option');
                option.textContent = state.state_name;
                option.value = state.id;
                stateSelect.appendChild(option);
            });

            // Event listener for state select change
            stateSelect.addEventListener('change', function() {
                const selectedStateId = stateSelect.value;
                if (selectedStateId) {
                    getDistricts(selectedStateId, districtClassName, tehsilClassName); // Fetch districts by state
                } else {
                    clearDropdown(districtClassName); // Clear district dropdown
                    clearDropdown(tehsilClassName); // Clear tehsil dropdown
                }
            });
        },
        error: function(error) {
            console.error('Error fetching states:', error);
        }
    });
}

function getDistricts(state_id, districtClassName, tehsilClassName) {
    // If no state_id is provided, fetch all districts
    var url = state_id
        ? 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id
        : 'http://tractor-api.divyaltech.com/api/customer/get_all_districts';

    var districtSelect = document.getElementsByClassName(districtClassName)[0];
    districtSelect.innerHTML = '<option selected value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.districtData.length > 0) {
                data.districtData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    districtSelect.appendChild(option);
                });

                // Allow selecting tehsils only if district is selected
                districtSelect.addEventListener('change', function() {
                    populateTehsil(districtSelect.value, tehsilClassName);
                });
            } else {
                districtSelect.innerHTML = '<option>No districts available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

function clearDropdown(className) {
    var dropdown = document.getElementsByClassName(className)[0];
    dropdown.innerHTML = '<option selected disabled value="">Please select an option</option>';
}

function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId;
    var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
    tehsilSelect.innerHTML = '<option selected value="">Please select a tehsil</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.tehsilData.length > 0) {
                data.tehsilData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.tehsil_name;
                    option.value = row.id;
                    if (row.id === selectedTehsilId) {
                        option.selected = true;
                    }
                    tehsilSelect.appendChild(option);
                });
            } else {
                tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching tehsils:', error);
        }
    });
}

// Call the function to populate dropdowns
populateDropdownsFromClass('state-dropdown1', 'district-dropdown1', 'tehsil-dropdown1');


