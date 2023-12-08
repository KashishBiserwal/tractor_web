$(document).ready(function() {
    console.log("ready!");
    
    getProductById();
});

function getProductById() {
    var url = "http://192.168.1.41:8000/customer/get_new_tractor_by_id" + id;
    console.log(url);
    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
        console.log(data, 'abc');
        document.getElementsByClassName('model_name').innerText=data.product[0].model;
        document.getElementById('brand_name').innerText=data.product[0].brand_name;
        document.getElementById('total_cyclinder_value').innerText=data.product[0].total_cyclinder_value;
        document.getElementById('hp_category').innerText=data.product[0].hp_category;
        document.getElementById('hp_category_id').innerText=data.product[0].hp_category;
        document.getElementById('horse_power').innerText=data.product[0].horse_power;
        document.getElementById('gear_box_forward').innerText=data.product[0].gear_box_forward;
        document.getElementById('gear_box_reverse').innerText=data.product[0].gear_box_reverse;
        document.getElementById('brake_value').innerText=data.product[0].brake_value;
        document.getElementById('warranty').innerText=data.product[0].warranty;
        document.getElementById('description').innerText=data.product[0].description;
        document.getElementById('steering_column_value').innerText=data.product[0].steering_column_value;
        document.getElementById('engine_capacity_cc').innerText=data.product[0].engine_capacity_cc;
        document.getElementById('engine_rated_rpm').innerText=data.product[0].engine_rated_rpm;
        document.getElementById('cooling_value').innerText=data.product[0].cooling_value;
        document.getElementById('air_filter').innerText=data.product[0].air_filter;
        document.getElementById('horse_power_2').innerText=data.product[0].horse_power_2;
        document.getElementById('fuel_value').innerText=data.product[0].fuel_value;
        document.getElementById('torque').innerText=data.product[0].torque;
        document.getElementById('transmission_type_value').innerText=data.product[0].transmission_type_value;
        document.getElementById('transmission_clutch_value').innerText=data.product[0].transmission_clutch_value;
        document.getElementById('gear_box_forward_2').innerText=data.product[0].gear_box_forward;
        document.getElementById('gear_box_reverse_2').innerText=data.product[0].gear_box_reverse;
        document.getElementById('steering_details_value').innerText=data.product[0].steering_details_value;
        document.getElementById('steering_column_value').innerText=data.product[0].power_take_off_rpm;
        document.getElementById('total_weight').innerText=data.product[0].total_weight;
        document.getElementById('wheel_base').innerText=data.product[0].wheel_base;
        document.getElementById('lifting_capacity').innerText=data.product[0].lifting_capacity;
        document.getElementById('linkage_point_value').innerText=data.product[0].linkage_point_value;
        document.getElementById('wheel_drive_value').innerText=data.product[0].wheel_drive_value;
        document.getElementById('rear_tyre').innerText=data.product[0].rear_tyre;
        document.getElementById('front_tyre').innerText=data.product[0].front_tyre;
        document.getElementById('accessory_id').innerText=data.product[0].accessory_id;
        document.getElementById('warranty_2').innerText=data.product[0].warranty;
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}