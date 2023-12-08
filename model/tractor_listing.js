$(document).ready(function () {
  get_lookup();
    // $('.js-example-basic-multiple').select2();
    $( '#multiple-select-field' ).select2( {
      theme: "bootstrap-5",
      width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
      placeholder: $( this ).data( 'placeholder' ),
      closeOnSelect: false,
  } );

    getTractorList();
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
        // Now you can use the retrieved value in your JavaScript logic
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
                select.innerHTML = '';

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


  //   function getProductById() {
  //     var url = "http://127.0.0.1:8000/api/admin/getLookupData";
  //     console.log(url);

  //     $.ajax({
  //         url: url,
  //         type: "GET",
  //         headers: {
  //           'Authorization': 'Bearer ' + localStorage.getItem('token')
  //       },
  //         success: function(data) {
  //             console.log(data, 'qqqqqqqq');

  //             data.tractor_type_data.map((i)=>{

  //             })
              
  //         // document.getElementById('productName').innerText=data.product.air_filter;
  //         },
  //         error: function (error) {
  //             console.error('Error fetching data:', error);
  //         }
  //     });
  // }

  // getProductById();


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
          console.log(data,'ok');
            for (var i = 0; i < data.data.length; i++) {
                $("select#" + data.data[i].name).append('<option value="' + data.data[i].id + '">' + data.data[i].lookup_data_value + '</option>');
            }
              
            $("#type_name").empty();
            var tractorTypesArray = [];
            // Create checkboxes for each tractor type
            for (var j = 0; j < data.tractor_type_data.length; j++) {
              var checkbox = $('<input type="checkbox" id="tractor_type_' + data.tractor_type_data[j].id + '" value="' + data.tractor_type_data[j].id + '">');
              var label = $('<label for="tractor_type_' + data.tractor_type_data[j].id + '">' + data.tractor_type_data[j].type_name + '</label>');
          
              // Append checkbox and label to the div
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

// get_lookup();



// insert data
function store(event) {

  // Get the parent div
  var typeDiv = document.getElementById('type_name');

  // Get all input elements inside the div
  var checkboxes = typeDiv.querySelectorAll('input[type="checkbox"]');

  var selectedCheckboxValues = [];
  // Loop through each checkbox and get its value
  checkboxes.forEach(function (checkbox) {
    // Check if the checkbox is checked
    if (checkbox.checked) {
      // If checked, push its value into the array
      var checkboxValue = checkbox.value;
      selectedCheckboxValues.push(checkboxValue);
    }
  });
  
    event.preventDefault();
    console.log("Tractor TYpe : ",selectedCheckboxValues);
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
    var tractor_type_id = selectedCheckboxValues;
    var image_name = $('#image_name').val();
    var CAPACITY_CC = $('#CAPACITY_CC').val();
    var engine_rated_rpm = $('#engine_rated_rpm').val();
    var COOLING = $('#COOLING').val();
    var AIR_FILTER = $('#AIR_FILTER').val();
    var fuel_pump_id = $('#fuel_pump_id').val();
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
    var accessory = $('#accessory').val();
    var STATUS = $('#STATUS').val();
    var description = $('#description').val();

    // Prepare data to send to the server
    var paraArr = {
      'brand_id': brand_id,
      'model': model,
      'product_type_id': product_type_id,
      'hp_category': hp_category,
      'total_cyclinder_id': TOTAL_CYCLINDER,
      'horse_power': horse_power,
      'gear_box_forward': gear_box_forward,
      'gear_box_reverse': gear_box_reverse,
      'brake_type_id': BRAKE_TYPE,
      'starting_price': starting_price,
      'ending_price': ending_price,
      'warranty': warranty,
      'tractor_type_id': tractor_type_id,
      'image_name': image_name,
      'CAPACITY_CC': CAPACITY_CC,
      'engine_rated_rpm': engine_rated_rpm,
      'COOLING': COOLING,
      'AIR_FILTER': AIR_FILTER,
      'fuel_pump_id': fuel_pump_id,
      'TORQUE': TORQUE,
      'TRANSMISSION_TYPE': TRANSMISSION_TYPE,
      'TRANSMISSION_CLUTCH': TRANSMISSION_CLUTCH,
      'min_forward_speed': min_forward_speed,
      'max_forward_speed': max_forward_speed,
      'min_reverse_speed': min_reverse_speed,
      'max_reverse_speed': max_reverse_speed,
      'STEERING_DETAIL': STEERING_DETAIL,
      'STEERING_COLUMN': STEERING_COLUMN,
      'power_take_off_type': power_take_off_type,
      'power_take_off_rpm': power_take_off_rpm,
      'totat_weight': totat_weight,
      'WHEEL_BASE': WHEEL_BASE,
      'LIFTING_CAPACITY': LIFTING_CAPACITY,
      'LINKAGE_POINT': LINKAGE_POINT,
      'fuel_tank_cc': fuel_tank_cc,
      'WHEEL_DRIVE': WHEEL_DRIVE,
      'front_tyre':front_tyre,
      'rear_tyre':rear_tyre,
      'accessory':accessory,
      'STATUS':STATUS,
      'description':description,
    };

    var apiBaseURL =APIBaseURL;
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'storeProduct';
   // var url = "<?php echo $APIBaseURL; ?>user_login";
    // console.log(url);
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
        // getTractorList();
        console.log("Add successfully");
        // alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  // fetch data
  function getTractorList() {
    console.log('kjhskdjf');
    // var url = "<?php echo $APIBaseURL; ?>getProduct";
    var apiBaseURL =APIBaseURL;
    // Now you can use the retrieved value in your JavaScript logic
    var url = apiBaseURL + 'getProduct';

    // console.log(url);  

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const tableBody = document.getElementById('data-table');

            if (data.product && data.product.length > 0) {
                // console.log(typeof product);

                data.product.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                  console.log(tableRow, 'helloooo');
                   

                    tableRow.innerHTML = `
                   
                        <td>${row.id}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model}</td>
                        <td>${row.total_cyclinder_id}</td>
                        <td>${row.hp_category}</td>
                        <td>${row.horse_power}</td>
                        <td>${row.brake_type_id}</td>
                        <td>${row.steering_details_id}</td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                                </button>
                            </div>
                        </td>
                    `;
                    tableBody.appendChild(tableRow);
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// delete data
function destroy(id) {
//   var url = "<?php echo $APIBaseURL; ?>deleteProduct/" + id;
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'deleteProduct/'+ id;

  var token = localStorage.getItem('token');
  
  if (!token) {
    console.error("Token is missing");
    return;
  }

  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      window.location.reload();
      console.log("Delete request successful");
      alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}




            // var tractorTypeSelect = $("#type_name");
            // data.tractor_type_data.map((i)=>{
              
            // });
            // for (var i = 0; i < data.tractor_type_data.length; i++) {
            //     $("select#" + data.tractor_type_data[i].type_name).append('<option value="' + data.tractor_type_data[i].id + '">' + data.tractor_type_data[i].type_name + '</option>');
            // }
            // var tractorTypeSelect = $("select#type_name");
            // var tractorTypeSelect = $("#staticBackdrop #type_name");
            // tractorTypeSelect.empty(); // Clear existing options
            // tractorTypeSelect.append('<option selected disabled="" value="">Please select an option</option>'); 

            // for (var i = 0; i < data.tractor_type_data.length; i++) {
            //     tractorTypeSelect.append('<option value="' + data.tractor_type_data[i].id + '">' + data.tractor_type_data[i].type_name + '</option>');
            // }

            // for (var i = 0; i < data.tractor_type_data.length; i++) {
            //     tractorTypeSelect.append('<option value="' + data.tractor_type_data[i].id + '">' + data.tractor_type_data[i].type_name + '</option>');
            // }

          
            // tractorTypeSelect.select2();