
$(document).ready(function() {
    $('#add_harvester').click(store);
    console.log("ready!");
    ImgUpload();
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
            const select = document.getElementById('brand');
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
    var product_type_id = $('#product_type_id').val();
    var brand = $('#brand').val();
    var model = $('#model').val();
    var rpm = $('#rpm').val();
    var hp_power = $('#hp_power').val();
    var air_filter = $('#AIR_FILTER').val();
    var engine = $('#engine').val();
    var cylinder = $('#TOTAL_CYCLINDER').val();
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
    var fuel_capacity = $('#fuel_capacity').val();
    var weight_drain = $('#weight_drain').val();
    var dia_length = $('#dia_length').val();
    var dia_height = $('#dia_height').val();
    var dia_width = $('#dia_width').val();
    var ground_clerance = $('#ground_clerance').val();
    var crops = $('#CROPS_TYPE').val();
    var image = $('#_image').val();
    var transmission_gears = $('#transmission_gears').val();

      // Split the string by '+' and trim the whitespace
      var gearsArray = transmission_gears.split('+').map(function(gear) {
        return gear.trim();
      });

      // Initialize counters for forward and reverse gears
      var forwardCount = 0;
      var reverseCount = 0;

      // Loop through the gearsArray to count Forward and Reverse gears
      gearsArray.forEach(function(gear) {
        if (gear.includes('Forward')) {
          forwardCount += parseInt(gear, 10); // Extract the number of forward gears
        } else if (gear.includes('Reverse')) {
          reverseCount += parseInt(gear, 10); // Extract the number of reverse gears
        }
      });

      // Store the counts in variables
      var transforward = forwardCount;
      var transreverse = reverseCount;

      // Output the results
      console.log('Forward Gears:', transforward);
      console.log('Reverse Gears:', transreverse);
  
    // Prepare data to send to the server
    var paraArr = {
    'brand_id':brand,
    'model':model,
      'engine_rated_rpm': rpm,
      'horse_power':hp_power,
      'air_filter_id':air_filter,
      'engine':engine,
      'total_cyclinder_id':cylinder,
      'cutting_bar_width':cutting_bar,
      'max_cutting_height':cuttingmax_height,
      'min_cutting_height':cuttingmin_height,
      'cutter_bar_height_adjustment_id':height_adjust,
      'reel_type_id':type,
      'reel_diameter':reel_dia,
      'speed_adjustment_id':speed_adj,
      'min_reel_revolution':min_revol,
      'max_reel_revolution':max_revol,
      'reel_height_adjustment_id':height_adj,
      'cooling_id':cool_system,
      'coolant_capacity':cool_capacity,
      'threshing_drum_width':drump_width,
      'threshing_drum_length':drump_length,
      'threshing_drum_diameter':drump_diameter,
      'threshing_drum_speed_adjustment_id':drump_adjust,
      'clearance_concave':clear_concave,
      'grain_tank_capacity':tank_capa,
      'transmission_forward': transforward,
      'transmission_reverse':transreverse,
      'clutch_type_id':clutch_type,
      'front_tyre':tyre_sizefront,
      'rear_tyre':tyre_sizerear,
      'fuel_capacity':fuel_capacity,
      'total_weight_without_grains':weight_drain,
      'dimension_length':dia_length,
      'dimension_height':dia_height,
      'dimension_width':dia_width,
      'ground_clearance':ground_clerance,
      'crops_type_id':crops,
      'image':image,
      'product_type_id': product_type_id,
    };
  
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL +'harvester';
    console.log(url);
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
  
    // Make an AJAX request to the server
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
       
        console.log("Add successfully");
        alert('successfully inserted..!')
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  $(document).ready(function() {
  function get_harvester() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL +'harvester';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
             console.log(data,"datata");


            if (data.product && data.product.length > 0) {
                // console.log(typeof product);
                let serialNumber = 1;
                let tableData = [];
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
        }
    });
}
get_harvester();
  });
// delete data
function destroy(id) {
  console.log(id);
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'deleteProduct/' + id;
    var token = localStorage.getItem('token');
  
    if (!token) {
      console.error("Token is missing");
      return;
    }
  
    // Show a confirmation popup
    var isConfirmed = confirm("Are you sure you want to delete this data?");
    if (!isConfirmed) {
      // User clicked 'Cancel' in the confirmation popup
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


  function fetch_data(id) {
    console.log(id, "id");
    console.log(window.location);
    //var urlParams = new URLSearchParams(window.location.search);
  
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
          document.getElementById('hp_power').innerText = data.product[0].horse_power;
          document.getElementById('air_filter').innerText =data.product[0].air_filter;
          document.getElementById('engine').innerText = data.product[0].brand_name;
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
          document.getElementById('drump_length').innerText =data.product[0].threshing_drum_length;
          document.getElementById('drump_diameter').innerText = data.product[0].threshing_drum_diameter;
          document.getElementById('drump_speed_adjust').innerText = data.product[0].threshing_drum_speed_adjustment_value;
          document.getElementById('clearance_concave').innerText = data.product[0].clearance_concave;
          document.getElementById('grain_tank_capacity').innerText = data.product[0].grain_tank_capacity;
          document.getElementById('transmission').innerText = data.product[0].transmission_forward;
          document.getElementById('clutch_type').innerText = data.product[0].clutch_type_value;
          document.getElementById('front_tyre').innerText = data.product[0].front_tyre;
          document.getElementById('rear_tyre').innerText =data.product[0].rear_tyre;
          document.getElementById('fuel_capacity').innerText = data.product[0].brand_name;
          document.getElementById('weight_grain').innerText = data.product[0].brand_name;
          document.getElementById('length').innerText = data.product[0].dimension_length;
          document.getElementById('width').innerText = data.product[0].dimension_width;
          document.getElementById('ground_clearance').innerText = data.product[0].brand_name;
          document.getElementById('crops').innerText = data.product[0].crops_type_value;
          document.getElementById('selectedImagesContainer1').innerText = data.product[0].brand_img;
      
          $("#selectedImagesContainer1").empty();
      
          if (data.dealer_details[0].image_names) {
              var imageNamesArray = Array.isArray(data.dealer_details[0].image_names) ? data.dealer_details[0].image_names : data.dealer_details[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealer_img/' + imageName.trim();
      
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                          <div class="brand-main d-flex box-shadow   mt-2 text-center shadow">
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