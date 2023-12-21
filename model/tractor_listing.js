$(document).ready(function () {
  get_lookup();
  // $('.js-example-basic-multiple').select2();

    // getTractorList();
    // BackgroundUpload();

    $('#save').click(store);
    console.log('fjfej');

   
  });

  

    function get() {
        // var url = "<?php echo $APIBaseURL; ?>getBrands";
        var apiBaseURL =APIBaseURL;
        var url = apiBaseURL + 'getBrands';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('brand_name');
                // select.innerHTML = '';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.value = row.id; // You might want to set a value for each option
                        option.textContent = row.brand_name;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML ='<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }
    get();



// fetch lookup data in select box
function get_lookup() {
  console.log('initsfd')
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'getLookupData';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
          // lookup select
          console.log(data,'ok');
            for (var i = 0; i < data.data.length; i++) {
                $("select#" + data.data[i].name).append('<option value="' + data.data[i].id + '">' + data.data[i].lookup_data_value + '</option>');
            }
            // accessory 
            var acce_Select = $(" #ass_list");
            acce_Select.empty(); // Clear existing options
            // acce_Select.append('<option selected disabled="" value=""></option>'); 

            for (var k = 0; k < data.accessory.length; k++) {
              acce_Select.append('<option value="' + data.accessory[k].id + '">' + data.accessory[k].accessory+ '</option>');
            }


            // checkbox
            $("#type_name").empty();

            // var tractorTypesArray = [];
            
            for (var j = 0; j < data.tractor_type_data.length; j++) {
              var checkbox = $('<input type="checkbox" id="tractor_type_' + data.tractor_type_data[j].id + '" value="' + data.tractor_type_data[j].id + '">');
              var label = $('<label for="tractor_type_' + data.tractor_type_data[j].id + '">' + data.tractor_type_data[j].type_name + '</label>');
            
              $("#type_name").append(checkbox);
              $("#type_name").append(label);
            }
          
        },
        
        complete:function(){
         
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


// insert data
function store(event) {
 console.log('run store function');
  var typeDiv = document.getElementById('type_name');
  var checkboxes = $("#type_name").find('input[type="checkbox"]');

  var selectedCheckboxValues = [];

  checkboxes.each(function () {
    // Check if the checkbox is checked
    if ($(this).prop("checked")) {
      // If checked, push its value into the array
      var checkboxValue = $(this).val();
      selectedCheckboxValues.push(checkboxValue);
      console.log(selectedCheckboxValues);
    }
  });

  if(Array.isArray(selectedCheckboxValues)){
    console.log("Array");
  }else{
    console.log("Not Array");
  }

  var selectedOptions = [];

  $("#ass_list option:selected").each(function(){
      var value = $(this).val();
      if($.trim(value)){
          selectedOptions.push(value);
      }
  });
  
    event.preventDefault();
    console.log("accessory select : ",selectedOptions);
    var brand_id = $('#brand_name').val();
    var image_names = document.getElementById('image_name').files;
    console.log('imgds',image_name);
    var model = $('#model').val();
    var product_type_id = $('#product_type_id').val();
    var image_type_id = $('#image_type_id').val();
    var hp_category = $('#hp_category').val();
    var TOTAL_CYCLINDER = $('#TOTAL_CYCLINDER').val();
    var horse_power = $('#horse_power').val();
    var gear_box_forward = $('#gear_box_forward').val();
    var gear_box_reverse = $('#gear_box_reverse').val();
    var BRAKE_TYPE = $('#BRAKE_TYPE').val();
    var starting_price = $('#starting_price').val();
    var  ending_price= $('#ending_price').val();
    var  warranty= $('#warranty').val();
    var tractor_type_id = JSON.stringify(selectedCheckboxValues);
    console.log(selectedCheckboxValues);
    console.log('tractor_type_id',tractor_type_id);
    // var image_name = $('#image_name').val();
    // var image_name = document.getElementById('image_name').files[0];
    // console.log("imageselect : ",image_name);
    var CAPACITY_CC = $('#CAPACITY_CC').val();
    var engine_rated_rpm = $('#engine_rated_rpm').val();
    var COOLING = $('#COOLING').val();
    var AIR_FILTER = $('#AIR_FILTER').val();
    var fuel_pump_id = $('#FUEL_PUMP').val();
    var TORQUE = $('#TORQUE').val();
    var TRANSMISSION_TYPE = $('#TRANSMISSION_TYPE').val();
    var TRANSMISSION_CLUTCH = $('#TRANSMISSION_CLUTCH').val();
    var min_forward_speed = $('#min_forward_speed').val();
    var max_forward_speed = $('#max_forward_speed').val();
    var min_reverse_speed = $('#min_reverse_speed').val();
    var max_reverse_speed = $('#max_reverse_speed').val();
    var STEERING_DETAIL = $('#STEERING_DETAIL').val();
    var STEERING_COLUMN = $('#STEERING_COLUMN').val();
    var power_take_off_type = $('#POWER_TAKEOFF_TYPE').val();
    var power_take_off_rpm = $('#power_take_off_rpm').val();
    var totat_weight = $('#totat_weight').val();
    var WHEEL_BASE = $('#WHEEL_BASE').val();
    var LIFTING_CAPACITY = $('#LIFTING_CAPACITY').val();
    var LINKAGE_POINT = $('#LINKAGE_POINT').val();
    var fuel_tank_cc = $('#fuel_tank_cc').val();
    var WHEEL_DRIVE = $('#WHEEL_DRIVE').val();
    var front_tyre = $('#front_tyre').val();
    var rear_tyre = $('#rear_tyre').val();
    var accessory =  JSON.stringify(selectedOptions);
    var STATUS = $('#STATUS').val();
    var description = $('#description').val();

   
    var apiBaseURL =APIBaseURL;
    var url = apiBaseURL + 'storeProduct';
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var data = new FormData();
   
    for (var x = 0; x < image_names.length; x++) {
      data.append("image_names[]", image_names[x]);
      console.log("multiple image", image_names[x]);
    }
    
    data.append('brand_id', brand_id);
      data.append('model', model);
      data.append('product_type_id', product_type_id);
      data.append('image_type_id', image_type_id);
      data.append('hp_category', hp_category);
      data.append('total_cyclinder_id', TOTAL_CYCLINDER);
      data.append('horse_power', horse_power);
      data.append('gear_box_forward', gear_box_forward);
      data.append('gear_box_reverse', gear_box_reverse);
      data.append('brake_type_id', BRAKE_TYPE);
      data.append('starting_price', starting_price);
      data.append('ending_price', ending_price);
      data.append('warranty', warranty);
      data.append('tractor_type_id[]', tractor_type_id);
      data.append('engine_capacity_cc', CAPACITY_CC);
      data.append('engine_rated_rpm', engine_rated_rpm);
      data.append('cooling_id', COOLING);
      data.append('air_filter', AIR_FILTER);
      data.append('fuel_pump_id', fuel_pump_id);
      data.append('torque', TORQUE);
      data.append('transmission_type_id', TRANSMISSION_TYPE);
      data.append('transmission_clutch_id', TRANSMISSION_CLUTCH);
      data.append('transmission_reverse', min_forward_speed);
      data.append('transmission_forward', max_forward_speed);
      data.append('min_reverse_speed', min_reverse_speed);
      data.append('max_reverse_speed', max_reverse_speed);
      data.append('steering_details_id', STEERING_DETAIL);
      data.append('steering_column_id', STEERING_COLUMN);
      data.append('power_take_off_type_id', power_take_off_type);
      data.append('power_take_off_rpm', power_take_off_rpm);
      data.append('total_weight', totat_weight);
      data.append('wheel_base', WHEEL_BASE);
      data.append('lifting_capacity', LIFTING_CAPACITY);
      data.append('linkage_point_id', LINKAGE_POINT);
      data.append('fuel_tank_cc', fuel_tank_cc);
      data.append('wheel_drive_id', WHEEL_DRIVE);
      data.append('front_tyre',front_tyre);
      data.append('rear_tyre',rear_tyre);
      data.append('accessory_id[]',accessory);
      data.append('status_id',STATUS);
      data.append('description',description);
      data.append('id',idEditUser);
    $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false, 
      contentType: false,
      success: function (result) {
        console.log(result, "result");
        // getTractorList();
        console.log("Add successfully");
         if(result.length){
        //   get_tractor_list();
        }
        // alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

 