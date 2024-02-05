$(document).ready(function(){
    // $('#compareButton').click(store);
});

// for card1

function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';

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
                select.innerHTML = '<option selected disabled value="">Please select Brand Name</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function () {
                        const selectedBrandId0 = this.value;
                        get_model(selectedBrandId0);
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
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Model Name</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
                    });

                    // Add event listener to model dropdown
                    select.addEventListener('change', function () {
                        const selectedModelId9 = this.value;
                        getcompare_data(selectedModelId9); 
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
function getcompare_data() {
    var brand_id = $('#brand').val();
    var model_name1 = $('#model').val();

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var responseData = searchData;
            console.log('responseData11', responseData);

            if (responseData.compare_data && responseData.compare_data.allProductData && responseData.compare_data.allProductData.length > 0) {
                var productContainer = $("#productContainer1");
                var p = responseData.compare_data.allProductData[0]; // Take the first product only
                const price= p.starting_price + " - " + p.ending_price ;

                document.getElementById('cylinder-1').innerText = p.total_cyclinder_value; 
                document.getElementById('hp_category-1').innerText = p.hp_category; 
                document.getElementById('cc-1').innerText = p.engine_capacity_cc; 
                document.getElementById('rpm-1').innerText = p.engine_rated_rpm; 
                document.getElementById('cooling-1').innerText = p.cooling_value; 
                document.getElementById('air_filter-1').innerText = p.air_filter; 
                document.getElementById('pto-1').innerText = p.horse_power; 
                document.getElementById('torque-1').innerText = p.torque; 
                document.getElementById('trans_clutch-1').innerText = p.transmission_clutch_value; 
                document.getElementById('gear_box_forward-1').innerText = p.gear_box_forward; 
                document.getElementById('gear_box_reverse-1').innerText = p.gear_box_reverse; 
                document.getElementById('transmission_forward-1').innerText = p.transmission_forward; 
                document.getElementById('transmission_reverse-1').innerText = p.transmission_reverse; 
                document.getElementById('brake_value-1').innerText = p.brake_value; 
                document.getElementById('steering_type-1').innerText = p.steering_details_value;
                document.getElementById('steering_col-1').innerText = p.steering_column_value;  
                document.getElementById('takeoff_type-1').innerText = p.power_take_off_type; 
                document.getElementById('takeoff_rpm-1').innerText = p.power_take_off_rpm; 
                document.getElementById('fuel_tank-1').innerText = p.fuel_value; 
                document.getElementById('total_weight-1').innerText = p.total_weight; 
                document.getElementById('wheel_base-1').innerText = p.wheel_base;
                document.getElementById('lifting_capacity-1').innerText = p.lifting_capacity;
                document.getElementById('3_pont-1').innerText = p.linkage_point_value;
                document.getElementById('wheel_drive-1').innerText = p.wheel_drive_value;
                document.getElementById('front-1').innerText = p.front_tyre;
                document.getElementById('rear-1').innerText = p.rear_tyre;
                document.getElementById('warranty-1').innerText = p.warranty;
                document.getElementById('status-1').innerText = p.status_value;
                document.getElementById('price-1').innerText = price;
                document.getElementById('trans_tye-1').innerText = p.transmission_type_value;
                document.getElementById('brand_nav').innerText = p.brand_name;
                document.getElementById('model_nav').innerText = p.model;
                document.getElementById('hp_nav-1').innerText = p.hp_category;
                // document.getElementById('img_1').innerText = p.image_names;
                const imageNames = p.image_names.split(',');
                const firstImagePath = `http://tractor-api.divyaltech.com/uploads/product_img/${imageNames[0].trim()}`;
                document.getElementById('img_1').src = firstImagePath;

                var images = p.image_names;
                var a = [];
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }

                var newCard = `
                    <div class="success__stry__item shadow h-100 bg-white">
                        <div class="thumb">
                            <div>
                                <div class="">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="row ms-3">
                            <p class="mb-1 fw-bold text-danger">${p.brand_name}</p>
                            <p class="mb-0 fw-bold text-hover-green">${p.model}</p>
                            <button type="button" class="fs-6 fw-bold text-success text-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Tractor Price</button>
                        </div>
                    </div>
                `;
                productContainer.html(newCard); // Use html() instead of append() to replace existing content
            } else {
                console.error('Invalid API response format');
            }
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
get();


// for 2nd card
function get_card2() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#brand_1');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Brand Name</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function () {
                        const selectedBrandId2 = this.value;
                        get_model_card2(selectedBrandId2);
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

function get_model_card2(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_1');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Model Name</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
                    });

                    // Add event listener to model dropdown
                    select.addEventListener('change', function () {
                        const selectedModelId2 = this.value;
                        getcompare_data1(selectedModelId2);  
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

function getcompare_data1() {
    var brand_id = $('#brand_1').val();
    var model_name1 = $('#model_1').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },

        success: function (searchData) {
            var responseData = searchData;

            if (responseData.compare_data && responseData.compare_data.allProductData && responseData.compare_data.allProductData.length > 0) {
                var productContainer = $("#productContainer2");
                var p = responseData.compare_data.allProductData[0]; // Take the first product only
                const price= p.starting_price + " - " + p.ending_price ;

                document.getElementById('cylinder-2').innerText = p.total_cyclinder_value; 
                document.getElementById('hp_category-2').innerText = p.hp_category; 
                document.getElementById('cc-2').innerText = p.engine_capacity_cc; 
                document.getElementById('rpm-2').innerText = p.engine_rated_rpm; 
                document.getElementById('cooling-2').innerText = p.cooling_value; 
                document.getElementById('air_filter-2').innerText = p.air_filter; 
                document.getElementById('pto-2').innerText = p.horse_power; 
                document.getElementById('torque-2').innerText = p.torque; 
                document.getElementById('trans_clutch-2').innerText = p.transmission_clutch_value; 
                document.getElementById('gear_box_forward-2').innerText = p.gear_box_forward; 
                document.getElementById('gear_box_reverse-2').innerText = p.gear_box_reverse; 
                document.getElementById('transmission_forward-2').innerText = p.transmission_forward; 
                document.getElementById('transmission_reverse-2').innerText = p.transmission_reverse; 
                document.getElementById('brake_value-2').innerText = p.brake_value; 
                document.getElementById('steering_type-2').innerText = p.steering_details_value;
                document.getElementById('steering_col-2').innerText = p.steering_column_value;  
                document.getElementById('takeoff_type-2').innerText = p.power_take_off_type; 
                document.getElementById('takeoff_rpm-2').innerText = p.power_take_off_rpm; 
                document.getElementById('fuel_tank-2').innerText = p.fuel_value; 
                document.getElementById('total_weight-2').innerText = p.total_weight; 
                document.getElementById('wheel_base-2').innerText = p.wheel_base;
                document.getElementById('lifting_capacity-2').innerText = p.lifting_capacity;
                document.getElementById('3_pont-2').innerText = p.linkage_point_value;
                document.getElementById('wheel_drive-2').innerText = p.wheel_drive_value;
                document.getElementById('front-2').innerText = p.front_tyre;
                document.getElementById('rear-2').innerText = p.rear_tyre;
                document.getElementById('warranty-2').innerText = p.warranty;
                document.getElementById('status-2').innerText = p.status_value;
                document.getElementById('price-2').innerText = price;
                document.getElementById('trans_tye-2').innerText = p.transmission_type_value;
                document.getElementById('brand_nav-2').innerText = p.brand_name;
                document.getElementById('model_nav-2').innerText = p.model;
                document.getElementById('hp_nav-2').innerText = p.hp_category;

                const imageNames = p.image_names.split(',');
                const firstImagePath = `http://tractor-api.divyaltech.com/uploads/product_img/${imageNames[0].trim()}`;
                document.getElementById('img_2').src = firstImagePath;

                var images = p.image_names;
                var a = [];
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }

                var newCard = `
                    <div class="success__stry__item shadow h-100 bg-white">
                        <div class="thumb">
                            <div>
                                <div class="">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="row ms-3">
                            <p class="mb-1 fw-bold text-danger">${p.brand_name}</p>
                            <p class="mb-0 fw-bold text-hover-green">${p.model}</p>
                            <button type="button" class="fs-6 fw-bold text-success text-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Tractor Price</button>
                        </div>
                    </div>
                `;
                productContainer.html(newCard); // Use html() instead of append() to replace existing content
            } else {
                console.error('Invalid API response format');
            }
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
get_card2();


// for 3rd card
function get_card3() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';

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
                select.innerHTML = '<option selected disabled value="">Please select Brand Name</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function () {
                        const selectedBrandId = this.value;
                        get_model_card3(selectedBrandId);
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

function get_model_card3(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_2');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Model Name</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
                    });

                    // Add event listener to model dropdown
                    select.addEventListener('change', function () {
                        const selectedModelId2 = this.value;
                        getcompare_data2(selectedModelId2);  
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

function getcompare_data2() {
    var brand_id = $('#brand_2').val();
    var model_name1 = $('#model_2').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var responseData = searchData;

            if (responseData.compare_data && responseData.compare_data.allProductData && responseData.compare_data.allProductData.length > 0) {
                var productContainer = $("#productContainer3");
                var p = responseData.compare_data.allProductData[0]; // Take the first product only
                const price= p.starting_price + " - " + p.ending_price ;

                document.getElementById('cylinder-2').innerText = p.total_cyclinder_value; 
                document.getElementById('hp_category-2').innerText = p.hp_category; 
                document.getElementById('cc-2').innerText = p.engine_capacity_cc; 
                document.getElementById('rpm-2').innerText = p.engine_rated_rpm; 
                document.getElementById('cooling-2').innerText = p.cooling_value; 
                document.getElementById('air_filter-2').innerText = p.air_filter; 
                document.getElementById('pto-2').innerText = p.horse_power; 
                document.getElementById('torque-2').innerText = p.torque; 
                document.getElementById('trans_clutch-2').innerText = p.transmission_clutch_value; 
                document.getElementById('gear_box_forward-2').innerText = p.gear_box_forward; 
                document.getElementById('gear_box_reverse-2').innerText = p.gear_box_reverse; 
                document.getElementById('transmission_forward-2').innerText = p.transmission_forward; 
                document.getElementById('transmission_reverse-2').innerText = p.transmission_reverse; 
                document.getElementById('brake_value-2').innerText = p.brake_value; 
                document.getElementById('steering_type-2').innerText = p.steering_details_value;
                document.getElementById('steering_col-2').innerText = p.steering_column_value;  
                document.getElementById('takeoff_type-2').innerText = p.power_take_off_type; 
                document.getElementById('takeoff_rpm-2').innerText = p.power_take_off_rpm; 
                document.getElementById('fuel_tank-2').innerText = p.fuel_value; 
                document.getElementById('total_weight-2').innerText = p.total_weight; 
                document.getElementById('wheel_base-2').innerText = p.wheel_base;
                document.getElementById('lifting_capacity-2').innerText = p.lifting_capacity;
                document.getElementById('3_pont-2').innerText = p.linkage_point_value;
                document.getElementById('wheel_drive-2').innerText = p.wheel_drive_value;
                document.getElementById('front-2').innerText = p.front_tyre;
                document.getElementById('rear-2').innerText = p.rear_tyre;
                document.getElementById('warranty-2').innerText = p.warranty;
                document.getElementById('status-2').innerText = p.status_value;
                document.getElementById('price-2').innerText = price;
                document.getElementById('trans_tye-2').innerText = p.transmission_type_value;
                document.getElementById('brand_nav-3').innerText = p.brand_name;
                document.getElementById('model_nav-3').innerText = p.model;
                document.getElementById('hp_nav-3').innerText = p.model;

                const imageNames = p.image_names.split(',');
                const firstImagePath = `http://tractor-api.divyaltech.com/uploads/product_img/${imageNames[0].trim()}`;
                document.getElementById('img_3').src = firstImagePath;

                var images = p.image_names;
                var a = [];
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }

                var newCard = `
                    <div class="success__stry__item shadow h-100 bg-white">
                        <div class="thumb">
                            <div>
                                <div class="">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="row ms-3">
                            <p class="mb-1 fw-bold text-danger">${p.brand_name}</p>
                            <p class="mb-0 fw-bold text-hover-green">${p.model}</p>
                            <button type="button" class="fs-6 fw-bold text-success text-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Tractor Price</button>
                        </div>
                    </div>
                `;
                productContainer.html(newCard); // Use html() instead of append() to replace existing content
            } else {
                console.error('Invalid API response format');
            }
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
get_card3();


// for card4

function get_card4() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('#brand_3');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Brand Name</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function () {
                        const selectedBrandId = this.value;
                        get_model_card4(selectedBrandId);
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

function get_model_card4(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model_3');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Model Name</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
                    });

                    // Add event listener to model dropdown
                    select.addEventListener('change', function () {
                        // const selectedModelId = this.value;
                        // const selectedModelId1 = this.value;
                        // const selectedModelId2 = this.value;
                        const selectedModelId3 = this.value;


                        // getcompare_data(selectedModelId); 
                        // getcompare_data1(selectedModelId1); 
                        // getcompare_data2(selectedModelId2); 
                        getcompare_data3(selectedModelId3); 
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
function getcompare_data3() {
    var brand_id = $('#brand_3').val();
    var model_name1 = $('#model_3').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            var responseData = searchData;

            if (responseData.compare_data && responseData.compare_data.allProductData && responseData.compare_data.allProductData.length > 0) {
                var productContainer = $("#productContainer4");
                var p = responseData.compare_data.allProductData[0]; // Take the first product only
                const price= p.starting_price + " - " + p.ending_price ;

                document.getElementById('cylinder-4').innerText = p.total_cyclinder_value; 
                document.getElementById('hp_category-4').innerText = p.hp_category; 
                document.getElementById('cc-4').innerText = p.engine_capacity_cc; 
                document.getElementById('rpm-4').innerText = p.engine_rated_rpm; 
                document.getElementById('cooling-4').innerText = p.cooling_value; 
                document.getElementById('air_filter-4').innerText = p.air_filter; 
                document.getElementById('pto-4').innerText = p.horse_power; 
                document.getElementById('torque-4').innerText = p.torque; 
                document.getElementById('trans_clutch-4').innerText = p.transmission_clutch_value; 
                document.getElementById('gear_box_forward-4').innerText = p.gear_box_forward; 
                document.getElementById('gear_box_reverse-4').innerText = p.gear_box_reverse; 
                document.getElementById('transmission_forward-4').innerText = p.transmission_forward; 
                document.getElementById('transmission_reverse-4').innerText = p.transmission_reverse; 
                document.getElementById('brake_value-4').innerText = p.brake_value; 
                document.getElementById('steering_type-4').innerText = p.steering_details_value;
                document.getElementById('steering_col-4').innerText = p.steering_column_value;  
                document.getElementById('takeoff_type-4').innerText = p.power_take_off_type; 
                document.getElementById('takeoff_rpm-4').innerText = p.power_take_off_rpm; 
                document.getElementById('fuel_tank-4').innerText = p.fuel_value; 
                document.getElementById('total_weight-4').innerText = p.total_weight; 
                document.getElementById('wheel_base-4').innerText = p.wheel_base;
                document.getElementById('lifting_capacity-4').innerText = p.lifting_capacity;
                document.getElementById('3_pont-4').innerText = p.linkage_point_value;
                document.getElementById('wheel_drive-4').innerText = p.wheel_drive_value;
                document.getElementById('front-4').innerText = p.front_tyre;
                document.getElementById('rear-4').innerText = p.rear_tyre;
                document.getElementById('warranty-4').innerText = p.warranty;
                document.getElementById('status-4').innerText = p.status_value;
                document.getElementById('price-4').innerText = price;
                document.getElementById('trans_tye-4').innerText = p.transmission_type_value;
                document.getElementById('brand_nav-4').innerText = p.brand_name;
                document.getElementById('model_nav-4').innerText = p.model;
                document.getElementById('hp_nav-4').innerText = p.model;
                const imageNames = p.image_names.split(',');
                const firstImagePath = `http://tractor-api.divyaltech.com/uploads/product_img/${imageNames[0].trim()}`;
                document.getElementById('img_4').src = firstImagePath;

                var images = p.image_names;
                var a = [];
                if (images) {
                    if (images.indexOf(',') > -1) {
                        a = images.split(',');
                    } else {
                        a = [images];
                    }
                }

                var newCard = `
                    <div class="success__stry__item shadow h-100 bg-white">
                        <div class="thumb">
                            <div>
                                <div class="">
                                    <img src="http://tractor-api.divyaltech.com/uploads/product_img/${a[0]}" class="object-fit-cover mt-4 p-3 w-100" width="100px" height="200px" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="row ms-3">
                            <p class="mb-1 fw-bold text-danger">${p.brand_name}</p>
                            <p class="mb-0 fw-bold text-hover-green">${p.model}</p>
                            <button type="button" class="fs-6 fw-bold text-success text-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Check Tractor Price</button>
                        </div>
                    </div>
                `;
                productContainer.html(newCard); // Use html() instead of append() to replace existing content
            } else {
                console.error('Invalid API response format');
            }
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
get_card4();