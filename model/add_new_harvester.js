var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function() {
  $('#add_harvester').click(store);
  $('#Search').click(search_data);
  ImgUpload();

  jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
    return /^[6-9]\d{9}$/.test(value);
}, "Phone number must start with 6 or above and should be 10 digits");
$.validator.addMethod("customNumber", function (value, element) {
  return /^(\d+(\.\d+)?|\d*\.\d+)(\*\d+(\.\d+)?|\*\d*\.\d+)?$/.test(value);
}, "Please enter a valid number or multiplication expression");

$("#harvester_form").validate({
    rules: {
        brand: {
            required: true,
        },
        model: {
            required: true,
        },
        rpm: {
            required: true,
            number:true,
        },
        hp_power: {
          required: true,
          number:true,
        },
        AIR_FILTER: {
          required: true,
        },
        TOTAL_CYCLINDER: {
          required: true,
        },
        POWER_SOURCE: {
          required: true,
        },
        cutting_bar: {
          required: true,
          number:true,
        },
        cuttingmax_height: {
          required: true,
          number:true,
        },
        cuttingmin_height: {
          required: true,
          number:true,
        },
        CUTTER_BAR_HEIGHT_ADJUSTMENT: {
          required: true,
        },
        REEL_TYPE: {
          required: true,
        },
        reel_dia: {
          required: true,
          number:true,
        },
        REEL_SPEED_CONTROL: {
          required: true,
        },
        min_revol: {
          required: true,
        },
        max_revol: {
          required: true,
        },
        REEL_HEIGHT_ADJUSTMENT: {
          required: true,
        },
        COOLING: {
          required: true,
        },
        cool_capacity: {
          required: true,
        },
        drump_width: {
          required: true,
          number:true,
        },
        drump_length: {
          required: true,
          number:true,
        },
        drump_diameter: {
          required: true,
          number:true,
        },
        THRESHING_DRUM_SPEED_ADJUSTMENT: {
          required: true,
        },
        clear_concave: {
          required: true,
        },
        tank_capa: {
          required: true,
          number:true,
        },
        transmission_gears: {
          required: true,
        },
        TRANSMISSION_CLUTCH: {
          required: true,
        },
        tyre_sizefront: {
          required: true,
          customNumber: true,
        },
        tyre_sizerear: {
          required: true,
          customNumber: true,
        },
        total_weight_without_grains: {
          required: true,
          number:true,
        },
        dia_length: {
          required: true,
          number:true,
        },
        dia_height: {
          required: true,
          number:true,
        },
        dia_width: {
          required: true,
          number:true,
        },
        ground_clerance: {
          required: true,
        },
        CROPS_TYPE: {
          required: true,
        },
    },
    messages: {
      brand: {
            required: "This field is required",
        },
        model: {
            required: "This field is required",
        },
        rpm: {
            required: "This field is required",
            number:"Enter only digits /Decimal Number",
          },
        hp_power: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        AIR_FILTER: {
          required: "This field is required",
        },
        TOTAL_CYCLINDER: {
           required: "This field is required",
        },
        POWER_SOURCE: {
          required: "This field is required",
        },
        cutting_bar: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        cuttingmax_height: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        cuttingmin_height: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        CUTTER_BAR_HEIGHT_ADJUSTMENT: {
          required: "This field is required",
        },
        REEL_TYPE: {
          required: "This field is required",
        },
        reel_dia: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        REEL_SPEED_CONTROL: {
          required: "This field is required",
        },
        min_revol: {
          required: "This field is required",
        },
        max_revol: {
          required: "This field is required",
        },
        REEL_HEIGHT_ADJUSTMENT: {
          required: "This field is required",
        },
        COOLING: {
          required: "This field is required",
        },
        cool_capacity: {
          required: "This field is required",
        },
        drump_width: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        drump_length: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        drump_diameter: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        THRESHING_DRUM_SPEED_ADJUSTMENT: {
          required: "This field is required",
        },
        clear_concave: {
          required: "This field is required",
        },
        tank_capa: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        transmission_gears: {
          required: "This field is required",
        },
        TRANSMISSION_CLUTCH: {
          required: "This field is required",
        },
        tyre_sizefront: {
          required: "This field is required",
          customNumber: "Please enter a valid number or multiplication expression",
        },
        tyre_sizerear: {
          required: "This field is required",
          customNumber: "Please enter a valid number or multiplication expression",
        },
        total_weight_without_grains: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        dia_length: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        dia_height: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        dia_width: {
          required: "This field is required",
          number:"Enter only digits /Decimal Number",
        },
        ground_clerance: {
          required: "This field is required",

        },
        CROPS_TYPE: {
          required: "This field is required",
        },
    },
    submitHandler: function (form) {
        alert("Form submitted successfully!");
    },
});

$("#add_harvester").on("click", function () {
    $("#harvester_form").valid();
});

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
    let thisId=ele.id;
    thisId=thisId.split('closeId');
    thisId=thisId[1];
    $("#"+ele.id).remove();
    $(".upload__img-closeDy"+thisId).remove();
  }
function get_brand_add() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/" + 4;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const selects = document.querySelectorAll('#brand');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });
                  select.addEventListener('change', function() {
                      const selectedBrandId = this.value;
                      get_model_1(selectedBrandId);
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

function get_model_1(brand_id) {
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
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.model.length > 0) {
                  data.model.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.model;
                      option.value = row.model;
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
get_brand_add();
  
  function get_lookup() {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'getLookupData';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              for (var i = 0; i < data.data.length; i++) {
                  $("select#" + data.data[i].name).append('<option value="' + data.data[i].id + '">' + data.data[i].lookup_data_value + '</option>');
              }
          },
          complete:function(){
           
          },
          error: function (error) {
              console.error('Error fetching data:', error);
          }
      });
  }
  get_lookup();

//   add data harvester
  function store(event) {
    event.preventDefault();
    console.log('harvester values');
    var product_type_id = 4;
    var EditIdmain_= $('#id').val();;
    var brand = $('#brand').val();
    var model = $('#model').val();
    var rpm = $('#rpm').val();
    var hp_power = $('#hp_power').val();
    var air_filter = $('#AIR_FILTER').val();
    var engine = $('#engine').val();
    var cylinder = $('#TOTAL_CYLINDER').val();
    var POWER_SOURCE = $('#POWER_SOURCE').val();
    var cutting_bar = $('#cutting_bar').val();
    var cuttingmax_height = $('#cuttingmax_height').val();
    var cuttingmin_height = $('#cuttingmin_height').val();
    var height_adjust = $('#CUTTER_BAR_HEIGHT_ADJUSTMENT').val();
    var type = $('#REEL_TYPE').val();
    var reel_dia = $('#reel_dia').val();
    var speed_adj = $('#REEL_SPEED_CONTROL').val();
    var min_revol = $('#min_revol').val();
    var max_revol = $('#max_revol').val();
    var height_adj = $('#REEL_HEIGHT_ADJUSTMENT').val();
    var cool_system = $('#COOLING').val();
    var cool_capacity = $('#cool_capacity').val();
    var drump_width = $('#drump_width').val();
    var drump_length = $('#drump_length').val();
    var drump_diameter = $('#drump_diameter').val();
    var drump_adjust = $('#THRESHING_DRUM_SPEED_ADJUSTMENT').val();
    var clear_concave = $('#clear_concave').val();
    var tank_capa = $('#tank_capa').val();
    var clutch_type = $('#TRANSMISSION_CLUTCH').val();
    var tyre_sizefront = $('#tyre_sizefront').val();
    var tyre_sizerear = $('#tyre_sizerear').val();
    var total_weight_without_grains = $('#total_weight_without_grains').val();
    var weight_drain = $('#weight_drain').val();
    var dia_length = $('#dia_length').val();
    var dia_height = $('#dia_height').val();
    var dia_width = $('#dia_width').val();
    var ground_clerance = $('#ground_clerance').val();
    var crops = $('#CROPS_TYPE').val();
    var transmission_gears = $('#transmission_gears').val();
    var image_names = document.getElementById('image_name').files;

      var gearsArray = transmission_gears.split('+').map(function(gear) {
        return gear.trim();
      });
      var forwardCount = 0;
      var reverseCount = 0;

      gearsArray.forEach(function(gear) {
        if (gear.includes('Forward')) {
          forwardCount += parseInt(gear, 10); 
        } else if (gear.includes('Reverse')) {
          reverseCount += parseInt(gear, 10); 
        }
      });

      var transforward = forwardCount;
      var transreverse = reverseCount;
      var apiBaseURL =APIBaseURL;
     var token = localStorage.getItem('token');
     var headers = {
       'Authorization': 'Bearer ' + token
     };

    var _method = 'POST';
    var url, method;
    
    if (EditIdmain_!= "" && EditIdmain_!= "null") {
      _method = 'PUT';  
      url = apiBaseURL + 'harvester/' + EditIdmain_;
      method = 'POST';  
  } else {
      url = apiBaseURL + 'harvester';
      method = 'POST';
  }
     var data = new FormData();
     for (var x = 0; x < image_names.length; x++) {
      data.append("images[]", image_names[x]);
    }
      data.append('id',EditIdmain_);
      data.append('brand_id',brand);
      data.append('_method',_method);
      data.append('model', model);
      data.append('engine_rated_rpm', rpm);
      data.append('horse_power',hp_power);
      data.append('air_filter_id',air_filter);
      data.append('engine',engine);
      data.append('total_cyclinder_id',cylinder);
      data.append('power_source_id',POWER_SOURCE);
      data.append('cutting_bar_width',cutting_bar);
      data.append('max_cutting_height',cuttingmax_height);
      data.append('min_cutting_height',cuttingmin_height);
      data.append('cutter_bar_height_adjustment_id',height_adjust);
      data.append('reel_type_id',type);
      data.append('reel_diameter',reel_dia);
      data.append('speed_adjustment_id',speed_adj);
      data.append('min_reel_revolution',min_revol);
      data.append('max_reel_revolution',max_revol);
      data.append('reel_height_adjustment_id',height_adj);
      data.append('cooling_id',cool_system);
      data.append('coolant_capacity',cool_capacity);
      data.append('threshing_drum_width',drump_width);
      data.append('threshing_drum_length',drump_length);
      data.append('threshing_drum_diameter',drump_diameter);
      data.append('threshing_drum_speed_adjustment_id',drump_adjust);
      data.append('clearance_concave',clear_concave);
      data.append('grain_tank_capacity',tank_capa);
      data.append('transmission_forward', transforward);
      data.append('transmission_reverse',transreverse);
      data.append('clutch_type_id',clutch_type);
      data.append('front_tyre',tyre_sizefront);
      data.append('rear_tyre',tyre_sizerear);
      data.append('total_weight_without_grains',total_weight_without_grains);
      data.append('dimension_length',dia_length);
      data.append('dimension_height',dia_height);
      data.append('dimension_width',dia_width);
      data.append('ground_clearance',ground_clerance);
      data.append('crops_type_id',crops);
      data.append('product_type_id', product_type_id);
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
        alert('successfully..!');
          window.location.reload();
        get_harvester();
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
 
  function get_harvester() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'harvester';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data, "datata");

            const tableBody = document.getElementById('data-table');
            let tableData = [];
            if (data.product && data.product.length > 0) {
                let serialNumber = data.product.length;
                data.product.forEach(row => {
                    let action = ` <div class="d-flex">
                    <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_harvester">
                              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                              </button>
                    <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                        <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                </div>`;

                    tableData.unshift([
                        serialNumber,
                        row.brand_name,
                        row.model,
                        row.horse_power,
                        row.air_filter,
                        row.crops_type_value,
                        action
                    ]);

                    serialNumber--;
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Brand' },
                        { title: 'Model Name' },
                        { title: 'HP Power' },
                        { title: 'Air Filter' },
                        { title: 'Crops' },
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                    paging: true,
                    searching: false,
                    // ... other options ...
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
          if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
                  $("#errorStatusLoading").modal('show');
                  $("#errorStatusLoading").find('.modal-title').html('Error');
                  $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
                  window.location.href = baseUrl + "login.php"; 
      
                }
        }
    });
}
get_harvester();

// delete data
function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'deleteProduct/' + id;
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      return;
    }
    $.ajax({
      url: url,
      type: "DELETE",
      headers: {
        'Authorization': 'Bearer ' + token
      },
      success: function(result) {
        // get_old_harvester();
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

// for view
  function fetch_data(id) {
    console.log(id, "id");
    console.log(window.location);
    editId_state= true;
    var harvesterId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'harvester/' + harvesterId;
  
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (data) {
          console.log(data, 'abc');
          document.getElementById('brand_name').innerText = data.product[0].brand_name;
          document.getElementById('model_name').innerText = data.product[0].model;
          document.getElementById('engine_rpm').innerText = data.product[0].engine_rated_rpm;
          document.getElementById('hp_power2').innerText = data.product[0].horse_power;
          document.getElementById('air_filter').innerText =data.product[0].air_filter;
          document.getElementById('cylinder').innerText = data.product[0].total_cyclinder_value;
          document.getElementById('cutter_bar_width').innerText = data.product[0].cutting_bar_width;
          document.getElementById('max_cutting_height').innerText = data.product[0].max_cutting_height;
          document.getElementById('min_cutting_height').innerText = data.product[0].min_cutting_height;
          document.getElementById('height_adjust').innerText = data.product[0].cutter_bar_height_adjustment_value;
          document.getElementById('reel_type').innerText = data.product[0].reel_type_value;
          document.getElementById('reel_diameter').innerText =data.product[0].reel_diameter;
          document.getElementById('speed_adjust').innerText = data.product[0].speed_adjustment_value;
          document.getElementById('min_revo').innerText = data.product[0].min_reel_revolution;
          document.getElementById('max_revo').innerText = data.product[0].max_reel_revolution;
          document.getElementById('reel_height_adjust').innerText = data.product[0].reel_height_adjustment_value;
          document.getElementById('cooling_sys').innerText = data.product[0].cooling_value;
          document.getElementById('coolent_capacity').innerText = data.product[0].coolant_capacity;
          document.getElementById('thresing_duump_width').innerText = data.product[0].threshing_drum_width;
          document.getElementById('drump_length1').innerText =data.product[0].threshing_drum_length;
          document.getElementById('drump_diameter1').innerText = data.product[0].threshing_drum_diameter;
          document.getElementById('height').innerText = data.product[0].dimension_height;
          document.getElementById('drump_speed_adjust').innerText = data.product[0].threshing_drum_speed_adjustment_value;
          document.getElementById('clearance_concave').innerText = data.product[0].clearance_concave;
          document.getElementById('grain_tank_capacity').innerText = data.product[0].grain_tank_capacity;
          document.getElementById('clutch_type').innerText = data.product[0].clutch_type_value;
          document.getElementById('front_tyre').innerText = data.product[0].front_tyre;
          document.getElementById('rear_tyre').innerText =data.product[0].rear_tyre;
          document.getElementById('total_weight_without_grains').innerText = data.product[0].total_weight_without_grains;
          document.getElementById('weight_grain').innerText = data.product[0].brand_name;
          document.getElementById('length').innerText = data.product[0].dimension_length;
          document.getElementById('width').innerText = data.product[0].dimension_width;
          document.getElementById('ground_clearance').innerText = data.product[0].ground_clearance;
          document.getElementById('crops').innerText = data.product[0].crops_type_value;
          $("#selectedImagesContainer1").empty();
      
          if (data.product[0].image_names) {
              var imageNamesArray = Array.isArray(data.product[0].image_names) ? data.product[0].image_names : data.product[0].image_names.split(',');
      
                var countclass = 0;
             imageNamesArray.forEach(function (image_names) {
                 var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
            
                 countclass++;
      
                  var newCard = `
                      <div class="col-3 col-lg-3 col-md-3 col-sm-3">
                          <div class="brand-main d-flex box-shadow  mt-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Image">
                                  <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Image">
                              </a>
                          </div>
                      </div>
                  `;
      
                  $("#selectedImagesContainer1").append(newCard);
              });
          }
      },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  } 
  // for edit
  function fetch_edit_data(id) {
    var harvesterId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'harvester/' + harvesterId;
    editId_state= true;
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
        var editData = response.product[0];
        $('#id').val(harvesterId);
        $('#model').empty(); 
        get_model_1(editData.brand_id); 
  
        setTimeout(function() { 
            $("#model option").prop("selected", false);
            $("#model option[value='" + editData.model + "']").prop("selected", true);
        }, 2000);
        $('#rpm').val(editData.engine_rated_rpm);
        $('#hp_power').val(editData.horse_power);

        $("#AIR_FILTER option").prop("selected", false);
        $("#AIR_FILTER option[value='" + editData.air_filter + "']").prop("selected", true);

        $('#engine').val(editData.engine);

        $("#TOTAL_CYLINDER option").prop("selected", false);
        $("#TOTAL_CYLINDER option[value='" + editData.total_cyclinder_id + "']").prop("selected", true);

        $("#POWER_SOURCE option").prop("selected", false);
        $("#POWER_SOURCE option[value='" + editData.POWER_SOURCE + "']").prop("selected", true);

        $('#cutting_bar').val(editData.cutting_bar_width);
        $('#cuttingmax_height').val(editData.max_cutting_height);
        $('#cuttingmin_height').val(editData.min_cutting_height);

        $("#CUTTER_BAR_HEIGHT_ADJUSTMENT option").prop("selected", false);
        $("#CUTTER_BAR_HEIGHT_ADJUSTMENT option[value='" + editData.cutter_bar_height_adjustment_id + "']").prop("selected", true);

        $("#REEL_TYPE option").prop("selected", false);
        $("#REEL_TYPE option[value='" + editData.reel_type_id + "']").prop("selected", true);

        $('#reel_dia').val(editData.reel_diameter);

        $("#REEL_SPEED_CONTROL option").prop("selected", false);
        $("#REEL_SPEED_CONTROL option[value='" + editData.speed_adjustment_id + "']").prop("selected", true);

        $('#min_revol').val(editData.min_reel_revolution);
        $('#max_revol').val(editData.max_reel_revolution);

        $("#REEL_HEIGHT_ADJUSTMENT option").prop("selected", false);
        $("#REEL_HEIGHT_ADJUSTMENT option[value='" + editData.reel_height_adjustment_id + "']").prop("selected", true);

        $('#cool_capacity').val(editData.coolant_capacity);
        
        $("#COOLING option").prop("selected", false);
        $("#COOLING option[value='" + editData.cooling_id + "']").prop("selected", true);

        $('#drump_width').val(editData.threshing_drum_width);
        $('#drump_length').val(editData.threshing_drum_length);
        $('#drump_diameter').val(editData.threshing_drum_diameter);  
      
        $("#THRESHING_DRUM_SPEED_ADJUSTMENT option").prop("selected", false);
        $("#THRESHING_DRUM_SPEED_ADJUSTMENT option[value='" + editData.threshing_drum_speed_adjustment_id + "']").prop("selected", true);

        $('#clear_concave').val(editData.clearance_concave);

        $("#TRANSMISSION_CLUTCH option").prop("selected", false);
        $("#TRANSMISSION_CLUTCH option[value='" + editData.clutch_type_id + "']").prop("selected", true);

        $('#tank_capa').val(editData.grain_tank_capacity);
        $('#transmission_gears').val(editData.model);
        $('#tyre_sizefront').val(editData.front_tyre);
        $('#tyre_sizerear').val(editData.rear_tyre);
        $('#total_weight_without_grains').val(editData.total_weight_without_grains);
        $('#weight_drain').val(editData.model);
        $('#dia_length').val(editData.dimension_length);
        $('#dia_height').val(editData.dimension_height);
        $('#dia_width').val(editData.dimension_width);
        $('#ground_clerance').val(editData.ground_clearance);

        $("#CROPS_TYPE option").prop("selected", false);
        $("#CROPS_TYPE option[value='" + editData.crops_type_id + "']").prop("selected", true);

        $('#product_type_id').val(editData.product_type_id);

        var brandDropdown = document.getElementById('brand');
        for (var i = 0; i < brandDropdown.options.length; i++) {
          if (brandDropdown.options[i].text === editData.brand_name) {
            brandDropdown.selectedIndex = i;
            break;
          }
        }
        $("#selectedImagesContainer2").empty();

        if (editData.image_names) {
         $('#image_name').val
          var imageNamesArray = Array.isArray(editData.image_names) ? editData.image_names : editData.image_names.split(',');
          console.log('imageNamesArray',imageNamesArray);  
          var countclass = 0;
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
          
              countclass++;
              var newCard = `
                  <div class="col-12 col-md-2 col-lg-2 position-relative" style="left:6px;">
                  <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                  <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
               
                          <a class="weblink text-decoration-none text-dark" title="Image">
                              <img class="img-fluid w-100" src="${imageUrl}" alt="Image">
                           </a>
                       </div>
                   </div>
                `;
                $("#selectedImagesContainer2").append(newCard);
           });
  
          }
        },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

  function setSelectedOption(selectId, value) {
    var select = document.getElementById(selectId);
    for (var i = 0; i < select.options.length; i++) {
      if (select.options[i].value == value) {
        select.selectedIndex = i;
        break;
      }
    }
  }
  
function get_brand() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/" + 4;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const selects = document.querySelectorAll('#brand_name1');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });

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
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const selects = document.querySelectorAll('#model1');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.model.length > 0) {
                  data.model.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.model;
                      option.value = row.model;
                      console.log(option);
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

// search
function search_data() {
  var selectedBrand = $('#brand_name1').val();
  var model = $('#model1').val();
  var paraArr = {
    'brand_id': selectedBrand,
    'model':model, 
  }

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_new_harvester';
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        updateTable(searchData);
      },
      error: function (error) {
          console.error('Error searching for brands:', error);
      }
  });
};
function updateTable(data) {
  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML = '';

  if(data.newHarvester && data.newHarvester.length > 0) {
    let tableData = [];
    let serialNumber = 1;
      data.newHarvester.forEach(row => {
          let action = `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_harvester">
                    <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button>
      </div>`;

      tableData.push([
        serialNumber,
        row.brand_name,
        row.model,
        row.horse_power,
        row.air_filter,
        row.crops_type_value,
        action
    ]);

    serialNumber++;
  });
    $('#example').DataTable().destroy();
    $('#example').DataTable({
            data: tableData,
            columns: [
              { title: 'S.No.' },
              { title: 'Brand' },
              { title: 'Model Name' },
              { title: 'HP Power' },
              { title: 'Air Filter' },
              { title: 'Crops' },
              { title: 'Action', orderable: false } 
          ],
            paging: true,
            searching: false,
        });
  } else {
      tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
  }
}
function resetform(){
  $('#brand_name1').val('');
  $('#model1').val('');
  get_harvester();
  
}
function resetFormFields(){
  document.getElementById("harvester_form").reset();
  document.getElementById("image_name").value = '';
  document.getElementById("selectedImagesContainer2").innerHTML = '';
 
}