$(document).ready(function () {
  get_lookup();
  $('.js-example-basic-multiple').select2();

    // getTractorList();
    BackgroundUpload();

    $('#save').click(store);
    console.log('fjfej');

    $("#add_tractor_form").validate({
      
      rules: {
        brand_name: "required",
        model: "required",
        product_type_id: "required",
        hp_category: "required",
        // TOTAL_CYCLINDER: "required",
        // horse_power: "required",
        // gear_box_forward: "required",
        // gear_box_reverse: "required",
        // BRAKE_TYPE: "required",
        // starting_price: "required",
        // ending_price: "required",
        // warranty: "required",
        // BRAKE_TYPE: "required",
        // CAPACITY_CC: "required",
        // engine_rated_rpm: "required",
        // COOLING: "required",
        // AIR_FILTER: "required",
        // fuel_pump_id: "required",
        // TORQUE: "required",
        // TRANSMISSION_TYPE: "required",
        // TRANSMISSION_CLUTCH: "required",
        // min_forward_speed: "required",
        // max_forward_speed: "required",
        // min_reverse_speed: "required",
        // max_reverse_speed: "required",
        // STEERING_DETAIL: "required",
        // STEERING_COLUMN: "required",
        // POWER_TAKEOFF_TYPE: "required",
        // power_take_off_rpm: "required",
        // totat_weight: "required",
        // WHEEL_BASE: "required",
        // LIFTING_CAPACITY: "required",
        // LINKAGE_POINT: "required",
        // fuel_tank_cc: "required",
        // WHEEL_DRIVE: "required",
        // front_tyre: "required",
        // rear_tyre: "required",
        // accessory: "required",
        // STATUS: "required",
        // description: "required",
      },
      messages: {
        brand_name: "Please enter the brand name",
        model: "Please enter the model",
        product_type_id: "Please select a product type",
        hp_category: "Please enter the HP category",
      },
      errorElement: "div",
      errorPlacement: function (error, element) {
        error.addClass("text-danger");
        error.insertAfter(element);
      },
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      }
    });
  });

  function BackgroundUpload(){
    var imgWrap = "";
    var imgArray = [];

    function generateUniqueClassName(index) {
      return "background-image-" + index;
    }

    $('.background__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.background__box').find('.background__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false;
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);

              var reader = new FileReader();
              reader.onload = function (e) {
                var className = generateUniqueClassName(iterator);
                var html = "<div class='background__img-box'><div onclick='BackgroundImage(\"" + className + "\")' style='background-image: url(" + e.target.result + ")' data-number='" + $(".background__img-close").length + "' data-file='" + f.name + "' class='img-bg " + className + "'><div class='background__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".background__img-close", function (e){
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
}

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
  // Get the parent div
  var typeDiv = document.getElementById('type_name');

  // Get all input elements inside the div
  var checkboxes = $("#type_name").find('input[type="checkbox"]');

  var selectedCheckboxValues = [];

  // Loop through each checkbox and get its value
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
    console.log("Tractor TYpe : ", JSON.stringify(selectedCheckboxValues));
    console.log("accessory select : ",selectedOptions);
    var brand_id = $('#brand_name').val();
    var model = $('#model').val();
    var product_type_id = $('#product_type_id').val();
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
    console.log('tractor_type_id',tractor_type_id);
    // var image_name = $('#image_name').val();
    var image_name = document.getElementById('image_name').files[0];
    console.log("imageselect : ",image_name);
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
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'storeProduct';
    // console.log(url);
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var data = new FormData();
    var image_name = document.getElementById('image_name').files;
    console.log('imgds',image_name);
    for (var x = 0; x < image_name.length; x++) {
      console.log('safdas',image_name[x]);
        data.append("image_name", image_name[x]);
    }
    data.append('brand_id', brand_id);
      data.append('model', model);
      data.append('product_type_id', product_type_id);
      data.append('hp_category', hp_category);
      data.append('total_cyclinder_id', TOTAL_CYCLINDER);
      data.append('horse_power', horse_power);
      data.append('gear_box_forward', gear_box_forward);
      data.append('gear_box_reverse', gear_box_reverse);
      data.append('brake_type_id', BRAKE_TYPE);
      data.append('starting_price', starting_price);
      data.append('ending_price', ending_price);
      data.append('warranty', warranty);
      data.append('tractor_type_id', tractor_type_id);
      data.append('CAPACITY_CC', CAPACITY_CC);
      data.append('engine_rated_rpm', engine_rated_rpm);
      data.append('cooling_id', COOLING);
      data.append('AIR_FILTER', AIR_FILTER);
      data.append('fuel_pump_id', fuel_pump_id);
      data.append('TORQUE', TORQUE);
      data.append('TRANSMISSION_TYPE', TRANSMISSION_TYPE);
      data.append('TRANSMISSION_CLUTCH', TRANSMISSION_CLUTCH);
      data.append('min_forward_speed', min_forward_speed);
      data.append('max_forward_speed', max_forward_speed);
      data.append('min_reverse_speed', min_reverse_speed);
      data.append('max_reverse_speed', max_reverse_speed);
      data.append('STEERING_DETAIL', STEERING_DETAIL);
      data.append('STEERING_COLUMN', STEERING_COLUMN);
      data.append('power_take_off_type', power_take_off_type);
      data.append('power_take_off_rpm', power_take_off_rpm);
      data.append('totat_weight', totat_weight);
      data.append('WHEEL_BASE', WHEEL_BASE);
      data.append('LIFTING_CAPACITY', LIFTING_CAPACITY);
      data.append('LINKAGE_POINT', LINKAGE_POINT);
      data.append('fuel_tank_cc', fuel_tank_cc);
      data.append('WHEEL_DRIVE', WHEEL_DRIVE);
      data.append('front_tyre',front_tyre);
      data.append('rear_tyre',rear_tyre);
      data.append('accessory_id',accessory);
      data.append('STATUS',STATUS);
      data.append('description',description);
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

 