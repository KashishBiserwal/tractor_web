
// function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             const stateSelect = document.getElementsByClassName(stateClassName)[0];
//             stateSelect.innerHTML = '<option selected value="">Please select a state</option>';

//             const stateIds = [7, 15, 20, 26, 34]; // Array of State IDs you want to fetch districts for

//             stateIds.forEach(stateId => {
//                 const filteredState = data.stateData.find(state => state.id === stateId);
//                 if (filteredState) {
//                     const option = document.createElement('option');
//                     option.textContent = filteredState.state_name;
//                     option.value = filteredState.id;
//                     stateSelect.appendChild(option);
//                 }
//             });

//             // Event listener for state select change
//             stateSelect.addEventListener('change', function() {
//                 const selectedStateId = stateSelect.value;
//                 if (selectedStateId) {
//                     getDistricts(selectedStateId, districtClassName, tehsilClassName);
//                 } else {
//                     clearDropdown(districtClassName);
//                     clearDropdown(tehsilClassName);
//                 }
//             });
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function getDistricts(state_id, districtClassName, tehsilClassName) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
//     var districtSelect = document.getElementsByClassName(districtClassName)[0];
//     districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             if (data.districtData.length > 0) {
//                 data.districtData.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.district_name;
//                     option.value = row.id;
//                     districtSelect.appendChild(option);
//                 });

//                 // Event listener for district select change
//                 districtSelect.addEventListener('change', function() {
//                     populateTehsil(districtSelect.value, tehsilClassName);
//                 });
//             } else {
//                 districtSelect.innerHTML = '<option>No districts available for this state</option>';
//             }

//             // Clear tehsil dropdown when districts are updated
//             clearDropdown(tehsilClassName);
//         },
//         error: function(error) {
//             console.error('Error fetching districts:', error);
//         }
//     });
// }

// function clearDropdown(className) {
//     var dropdown = document.getElementsByClassName(className)[0];
//     dropdown.innerHTML = '';
// }

// function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
//     var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
//     tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             if (data.tehsilData.length > 0) {
//                 data.tehsilData.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.tehsil_name;
//                     option.value = row.id;
//                     if (row.id === selectedTehsilId) {
//                         option.selected = true;
//                     }
//                     tehsilSelect.appendChild(option);
//                 });
//             } else {
//                 tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching tehsils:', error);
//         }
//     });
// }

// // Call the function to populate dropdowns with specific class names
// populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');

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
populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');

// function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             console.log(data);
//             const stateSelect = document.getElementsByClassName(stateClassName)[0];
//             stateSelect.innerHTML = '<option selected value="">Please select a state</option>';

//             const stateIds = [7, 15, 20, 26, 34]; // Array of State IDs you want to fetch districts for

//             stateIds.forEach(stateId => {
//                 const filteredState = data.stateData.find(state => state.id === stateId);
//                 if (filteredState) {
//                     const option = document.createElement('option');
//                     option.textContent = filteredState.state_name;
//                     option.value = filteredState.id;
//                     stateSelect.appendChild(option);
//                 }
//             });

//             // Event listener for state select change
//             stateSelect.addEventListener('change', function() {
//                 const selectedStateId = stateSelect.value;
//                 if (selectedStateId) {
//                     getDistricts(selectedStateId, districtClassName, tehsilClassName);
//                 } else {
//                     clearDropdown(districtClassName);
//                     clearDropdown(tehsilClassName);
//                 }
//             });

//             // Initial population of districts for the first state
//             if (stateIds.length > 0) {
//                 getDistricts(stateIds[0], districtClassName, tehsilClassName);
//             } else {
//                 stateSelect.innerHTML = '<option>No valid data available</option>';
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }
// function getDistricts(state_id, districtClassName, tehsilClassName) {
//     console.log(state_id,districtClassName,tehsilClassName);
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
//     var districtSelect = document.getElementsByClassName(districtClassName)[0];
//     districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             if (data.districtData.length > 0) {
//                 data.districtData.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.district_name;
//                     option.value = row.id;
//                     districtSelect.appendChild(option);
//                 });

//                 // Event listener for district select change
//                 districtSelect.addEventListener('change', function() {
//                     populateTehsil(districtSelect.value, tehsilClassName);
//                 });

//                 // Initial population of tehsils for the first district
//                 populateTehsil(districtSelect.value, tehsilClassName);
//             } else {
//                 districtSelect.innerHTML = '<option>No districts available for this state</option>';
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching districts:', error);
//         }
//     });
// }
// function clearDropdown(className) {
//     var dropdown = document.getElementsByClassName(className)[0];
//     dropdown.innerHTML = '';
// }
// function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
//     var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
//     console.log(url);
//     var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
//     tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function(data) {
//             if (data.tehsilData.length > 0) {
//                 data.tehsilData.forEach(row => {
//                     const option = document.createElement('option');
//                     option.textContent = row.tehsil_name;
//                     option.value = row.id;
//                     if (row.id === selectedTehsilId) {
//                         option.selected = true;
//                     }
//                     tehsilSelect.appendChild(option);
//                 });
//             } else {
//                 tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
//             }
//         },
//         error: function(error) {
//             console.error('Error fetching tehsils:', error);
//         }
//     });
// }

// // Call the function to populate dropdowns with specific class names
// populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');


