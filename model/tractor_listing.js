var EditIdmain_ = "";
var editId_state= false;
var editId_stateedit= "";
$(document).ready(function () {
  get_lookup();
  ImgUpload();
    $('#submitbtn').click(store);
  });
 
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {

          if (!f.type.match('image.*')) {
            return;
          }

          if (imgArray.length > maxLength) {
            return false
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
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });

    $('body').on('click', ".upload__img-close", function (e) {
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

  function removeImage(ele){
    console.log("print ele");
      console.log(ele);
      let thisId=ele.id;
      thisId=thisId.split('closeId');
      thisId=thisId[1];
      $("#"+ele.id).remove();
      $(".upload__img-closeDy"+thisId).remove();
  
    }
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
          console.log(data,'lookup data value');
            for (var i = 0; i < data.data.length; i++) {
                $("select#" + data.data[i].name).append('<option value="' + data.data[i].id + '">' + data.data[i].lookup_data_value + '</option>');
            }
            var acce_Select = $(" #ass_list");
            acce_Select.empty();  

            for (var k = 0; k < data.accessory.length; k++) {
              acce_Select.append('<option value="' + data.accessory[k].id + '">' + data.accessory[k].accessory+ '</option>');
            }
            $("#type_name").empty();
            for (var j = 0; j < data.tractor_type_data.length; j++) {
              var checkbox = $(`<input type="checkbox" id=tractor_type_${data.tractor_type_data[j].id} value= ${data.tractor_type_data[j].id }>`);
              var label = $('<label for="tractor_type_' + data.tractor_type_data[j].id + '">' + data.tractor_type_data[j].type_name + '</label>');
            
              $("#type_name").append(checkbox);
              $("#type_name").append(label);
            }
        },
        complete:function(){
          fetch_edit_data();
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
    if ($(this).prop("checked")) {
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
    var TOTAL_CYCLINDER = $('#TOTAL_CYLINDER').val();
    var horse_power = $('#horse_power').val();
    var gear_box_forward = $('#gear_box_forward').val();
    var gear_box_reverse = $('#gear_box_reverse').val();
    var BRAKE_TYPE = $('#BRAKE_TYPE').val();
    var starting_price = $('#starting_price').val();
    starting_price = starting_price.replace(/[\,\.\s]/g, '');
    var  ending_price= $('#ending_price').val();
    ending_price = ending_price.replace(/[\,\.\s]/g, '');
    var  warranty= $('#warranty').val();
    var tractor_type_id = JSON.stringify(selectedCheckboxValues);
    console.log(selectedCheckboxValues);
    console.log('tractor_type_id',tractor_type_id);
    var CAPACITY_CC = $('#CAPACITY_CC').val();
    var engine_rated_rpm = $('#engine_rated_rpm').val();
    var COOLING = $('#COOLING').val();
    var AIR_FILTER = $('#AIR_FILTER').val();
    var fuel_pump_id = $('#FUEL_PUMP').val();
    var TORQUE = $('#TORQUE').val();
    var TRANSMISSION_TYPE = $('#TRANSMISSION_TYPE').val();
    var TRANSMISSION_CLUTCH = $('#TRANSMISSION_CLUTCH').val();
     var min_forward_speed = $('#min_forward_speed').val();
    var min_reverse_speed = $('#min_reverse_speed').val();
    var STEERING_DETAIL = $('#STEERING_DETAIL').val();
    var STEERING_COLUMN = $('#STEERING_COLUMN').val();
    var power_take_off_type = $('#POWER_TAKE_OFF_TYPE').val();
    var power_take_off_rpm = $('#power_take_off_rpm').val();
    var totat_weight = $('#totat_weight').val();
    var WHEEL_BASE = $('#WHEEL_BASE').val();
    var LIFTING_CAPACITY = $('#LIFTING_CAPACITY').val();
    var LINKAGE_POINT = $('#LINKAGE_POINT').val();
    var WHEEL_DRIVE = $('#WHEEL_DRIVE').val();
    var front_tyre = $('#front_tyre').val();
    var rear_tyre = $('#rear_tyre').val();
    var accessory =  JSON.stringify(selectedOptions);
    var STATUS = $('#STATUS').val();
    var description = $('#description').val();
    
    var apiBaseURL = APIBaseURL; 
         var token = localStorage.getItem('token');
         var headers = {
           'Authorization': 'Bearer ' + token
         };
    var urlParams = new URLSearchParams(window.location.search);
    editId_stateedit = urlParams.get('trac_edit');
    console.log("editId from URL:", editId_stateedit);
    _method = 'POST';
    var url, method;
    console.log('edit state', editId_stateedit);
    var _method = 'post'; 

    if (editId_stateedit !== '' && editId_stateedit !== null) {
      // Update mode
      _method = 'put';
      url = apiBaseURL + 'updateProduct/' + editId_stateedit;
      console.log(url);
      method = 'POST'; 
    } else {
      url = apiBaseURL + 'storeProduct';
      console.log('prachi');
      method = 'POST';
    }
    var data = new FormData();
   
    for (var x = 0; x < image_names.length; x++) {
      data.append("images[]", image_names[x]);
      console.log("multiple image", image_names[x]);
    }
    data.append('_method', _method);
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
      data.append('tractor_type_id', tractor_type_id);
      data.append('engine_capacity_cc', CAPACITY_CC);
      data.append('engine_rated_rpm', engine_rated_rpm);
      data.append('cooling_id', COOLING);
      data.append('air_filter_id', AIR_FILTER);
      data.append('fuel_pump_id', fuel_pump_id);
      data.append('torque', TORQUE);
      data.append('transmission_type_id', TRANSMISSION_TYPE);
      data.append('transmission_clutch_id', TRANSMISSION_CLUTCH);
      data.append('transmission_forward', min_forward_speed);
      data.append('transmission_reverse', min_reverse_speed);
      data.append('steering_details_id', STEERING_DETAIL);
      data.append('steering_column_id', STEERING_COLUMN);
      data.append('power_take_off_type', power_take_off_type);
      data.append('power_take_off_rpm', power_take_off_rpm);
      data.append('total_weight', totat_weight);
      data.append('wheel_base', WHEEL_BASE);
      data.append('lifting_capacity', LIFTING_CAPACITY);
      data.append('linkage_point_id', LINKAGE_POINT);
      data.append('wheel_drive_id', WHEEL_DRIVE);
      data.append('front_tyre',front_tyre);
      data.append('rear_tyre',rear_tyre);
      data.append('accessory_id',accessory);
      data.append('status_id',STATUS);
      data.append('description',description);
    $.ajax({
      url: url,
      type: method,
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
      success: function (result) {
        console.log(result, "result");
        console.log("Add successfully");
        window.location.href="tractor_listing.php";
         if(result.length){
        }
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  
  function fetch_edit_data() {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('trac_edit');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_new_tractor_by_id/' + productId ;
    editId_state= true;
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
        var editData = response.product.allProductData[0];
        var editData2 = response.product.accessory_and_tractor_type[0];
        var formattedPrice = parseFloat(editData.starting_price).toLocaleString('en-IN');
        var formattedPrice1 = parseFloat(editData.ending_price).toLocaleString('en-IN');
      
        var brandDropdown = document.getElementById('brand_name');
        for (var i = 0; i < brandDropdown.options.length; i++) {
          if (brandDropdown.options[i].text === editData.brand_name) {
            brandDropdown.selectedIndex = i;
            break;
          }
        }
        $('#model').empty(); 
        get_model(editData.brand_id); 

        // Selecting the option in the model dropdown
        setTimeout(function() { // Wait for the model dropdown to populate
            $("#model option").prop("selected", false);
            $("#model option[value='" + editData.model + "']").prop("selected", true);
        }, 2000); 

        $('#product_type_id').val(editData.product_type_id);
        $('#hp_category').val(editData.hp_category);

        $("#TOTAL_CYLINDER option").prop("selected", false);
        $("#TOTAL_CYLINDER option[value='" + editData.total_cyclinder_id + "']").prop("selected", true);

        $('#horse_power').val(editData.horse_power);
        $('#gear_box_forward').val(editData.gear_box_forward);
        $('#gear_box_reverse').val(editData.gear_box_reverse);

        $("#BRAKE_TYPE option").prop("selected", false);
        $("#BRAKE_TYPE option[value='" + editData.brake_type_id + "']").prop("selected", true);

        $('#starting_price').val(formattedPrice);
        $('#ending_price').val(formattedPrice1);
        $('#warranty').val(editData.warranty);
        var tractorTypeIdToCheck = editData2.tractor_type_id;
        $("#tractor_type_ input[type='checkbox']").prop("checked", false);
        document.getElementById(`tractor_type_${tractorTypeIdToCheck}`).checked = true;
        $('#_image').val(editData.image_type_id);
        
        $('#CAPACITY_CC').val(editData.engine_capacity_cc);

        $('#engine_rated_rpm').val(editData.engine_rated_rpm);

        $("#COOLING option").prop("selected", false);
        $("#COOLING option[value='" + editData.cooling_id + "']").prop("selected", true);

        $("#AIR_FILTER option").prop("selected", false);
        $("#AIR_FILTER option[value='" + editData.air_filter + "']").prop("selected", true);

        $("#FUEL_PUMP option").prop("selected", false);
        $("#FUEL_PUMP option[value='" + editData.fuel_pump_id + "']").prop("selected", true);

        $('#TORQUE').val(editData.torque);
        $("#TRANSMISSION_TYPE option").prop("selected", false);
        $("#TRANSMISSION_TYPE option[value='" + editData.transmission_type_id + "']").prop("selected", true);

        $("#TRANSMISSION_CLUTCH option").prop("selected", false);
        $("#TRANSMISSION_CLUTCH option[value='" + editData.transmission_clutch_id + "']").prop("selected", true);

        $('#min_forward_speed').val(editData.transmission_forward);
        $('#min_reverse_speed').val(editData.transmission_reverse);
        $("#STEERING_DETAIL option").prop("selected", false);
        $("#STEERING_DETAIL option[value='" + editData.steering_details_id + "']").prop("selected", true);

        $("#STEERING_COLUMN option").prop("selected", false);
        $("#STEERING_COLUMN option[value='" + editData.steering_column_id + "']").prop("selected", true);


        $("#POWER_TAKE_OFF_TYPE option").prop("selected", false);
        $("#POWER_TAKE_OFF_TYPE option[value='" + editData.power_take_off_type + "']").prop("selected", true);

        $('#power_take_off_rpm').val(editData.power_take_off_rpm);
        $('#totat_weight').val(editData.total_weight);

        $('#WHEEL_BASE').val(editData.wheel_base);

        $('#LIFTING_CAPACITY').val(editData.lifting_capacity);

        $("#LINKAGE_POINT option").prop("selected", false);
        $("#LINKAGE_POINT option[value='" + editData.linkage_point_id + "']").prop("selected", true);

        $("#WHEEL_DRIVE option").prop("selected", false);
        $("#WHEEL_DRIVE option[value='" + editData.wheel_drive_id + "']").prop("selected", true);

        $('#front_tyre').val(editData.front_tyre);
        $('#rear_tyre').val(editData.rear_tyre);

        $("#STATUS option").prop("selected", false);
        $("#STATUS option[value='" + editData.status_id + "']").prop("selected", true);

        $('#description').val(editData.description);

        $("#selectedImagesContainer2").empty();

           if (editData.image_names) {
            $('#_image1').val
             var imageNamesArray = Array.isArray(editData.image_names) ? editData.image_names : editData.image_names.split(',');
             console.log('imageNamesArray',imageNamesArray);  
             var countclass = 0;
             imageNamesArray.forEach(function (image_names) {
                 var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/product_img/' + image_names.trim();
                 countclass++;
                 var newCard = `
                     <div class="col-12 col-md-2 col-lg-2 position-relative" style="left:6px;">
                     <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                     <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                  
                             <a class="weblink text-decoration-none text-dark" title="Image">
                                 <img class="img-fluid w-100" src="${imageUrl}" alt="Image">
                              </a>
                          </div>
                      </div>`;
       $("#selectedImagesContainer2").append(newCard);
   
      });
    }
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }
  
  function get_brand() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/get_brand_by_product_id/" + 2;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#brand_name');
  
            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
  
                    // Add event listener to brand dropdown
                    select.addEventListener('change', function() {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
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
    var product_type_id = 2; 
  var url = `https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/${brand_id}?product_type_id=${product_type_id}`;
    // var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_model/' + brand_id;
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('#model');
  
            selects.forEach(select => {
              // Clear the existing options
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
          
              if (Array.isArray(data.model) && data.model.length > 0) {
                  data.model.forEach(modelName => {
                      const option = document.createElement('option');
                      option.textContent = modelName;  // Directly use the model name string
                      option.value = modelName;
                      select.appendChild(option);
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
  
  get_brand(); 
 
 

