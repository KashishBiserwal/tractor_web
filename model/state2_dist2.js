function populateStateDropdown(stateClassName, districtClassName) {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/state_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            console.log(data);
            const stateSelect = document.getElementsByClassName(stateClassName)[0];
            stateSelect.innerHTML = '<option selected disabled value="">Please select a state</option>';

            if (data.stateData && data.stateData.length > 0) {
                data.stateData.forEach(state => {
                    const option = document.createElement('option');
                    option.textContent = state.state_name;
                    option.value = state.id;
                    stateSelect.appendChild(option);
                });
            } else {
                stateSelect.innerHTML = '<option>No valid data available</option>';
            }

            // Add event listener for state dropdown change
            stateSelect.addEventListener('change', function() {
                const selectedStateId = stateSelect.value;
                populateDistrictDropdown(selectedStateId, districtClassName);
            });
        },
        error: function(error) {
            console.error('Error fetching states:', error);
        }
    });
}

function populateDistrictDropdown(state_id, districtClassName) {
    console.log('Fetching districts for state_id:', state_id);
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_district_by_state/' + state_id;
    var districtSelect = document.getElementsByClassName(districtClassName)[0];
    districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            if (data.districtData && data.districtData.length > 0) {
                data.districtData.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.district_name;
                    option.value = row.id;
                    districtSelect.appendChild(option);
                });
            } else {
                districtSelect.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

// Initialize the state dropdown
populateStateDropdown('state_select', 'district_select');



