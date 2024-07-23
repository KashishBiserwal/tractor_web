function populateStateDropdown(stateClassName, districtClassName) {
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
            stateSelect.innerHTML = '<option selected disabled value="">Please select a state</option>';

            const stateIds = [7, 15, 20, 26, 32]; // Array of State IDs you want to filter for
            stateIds.forEach(stateId => {
                const filteredState = data.stateData.find(state => state.id === stateId);
                if (filteredState) {
                    const option = document.createElement('option');
                    option.textContent = filteredState.state_name;
                    option.value = filteredState.id;
                    stateSelect.appendChild(option);

                    // Once the state dropdown is populated, populate the corresponding district dropdown
                    populateDistrictDropdown(filteredState.id, districtClassName);
                }
            });

            if (stateSelect.children.length === 1) {
                stateSelect.innerHTML = '<option>No valid data available</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function populateDistrictDropdown(state_id, districtClassName) {
    console.log('districtClassName',state_id,districtClassName);
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
    console.log('url',url);
    var districtSelect = document.getElementsByClassName(districtClassName)[0];

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
            } else {
                districtSelect.innerHTML = '<option>No districts available for this state</option>';
            }
        },
        error: function(error) {
            console.error('Error fetching districts:', error);
        }
    });
}

populateStateDropdown('state_select', 'district_select');



