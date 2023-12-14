
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


//   add data harvester
  function store(event) {
    event.preventDefault();
    console.log('harvester values');
    var brand = $('#brand').val();
    var model = $('#model').val();
    var rpm = $('#rpm').val();
    var hp_power = $('#hp_power').val();
    var air_filter = $('#air_filter').val();
    var engine = $('#engine').val();
    var cylinder = $('#cylinder').val();
    var cutting_bar = $('#cutting_bar').val();
    var cuttingmax_height = $('#cuttingmax_height').val();
    var cuttingmin_height = $('#cuttingmin_height').val();
    var height_adjust = $('#height_adjust').val();
    var type = $('#type').val();
    var reel_dia = $('#reel_dia').val();
    var speed_adj = $('#speed_adj').val();
    var min_revol = $('#min_revol').val();
    var max_revol = $('#max_revol').val();
    var height_adj = $('#height_adj').val();
    var cool_system = $('#cool_system').val();
    var cool_capacity = $('#cool_capacity').val();
    var drump_width = $('#drump_width').val();
    var drump_length = $('#drump_length').val();
    var drump_adjust = $('#drump_adjust').val();
    var clear_concave = $('#clear_concave').val();
    var tank_capa = $('#tank_capa').val();
    var clutch_type = $('#clutch_type').val();
    var tyre_sizefront = $('#tyre_sizefront').val();
    var tyre_sizerear = $('#tyre_sizerear').val();
    var fuel_capacity = $('#fuel_capacity').val();
    var weight_drain = $('#weight_drain').val();
    var dia_length = $('#dia_length').val();
    var dia_height = $('#dia_height').val();
    var dia_width = $('#dia_width').val();
    var ground_clerance = $('#ground_clerance').val();
    var crops = $('#crops').val();
    var image = $('#_image').val();
  
    // Prepare data to send to the server
    var paraArr = {
    'brand_id':brand,
    'model':model,
      'engine_rated_rpm': rpm,
      'horse_power':hp_power,
      'air_filter':air_filter,
      'engine':engine,
      'total_cyclinder_id':cylinder,
      'cutting_bar_width ':cutting_bar,
      'max_cutting_height':cuttingmax_height,
      'min_cutting_height':cuttingmin_height,
      'height_adjust':height_adjust,
      'rear_tyre':type,
      'reel_diameter':reel_dia,
      'speed_adjustment_id':speed_adj,
      'min_reel_revolution':min_revol,
      'max_cutting_height':max_revol,
      'reel_height_adjustment_id':height_adj,
      'cooling_id':cool_system,
      'coolant_capacity':cool_capacity,
      'threshing_drum_width':drump_width,
      'threshing_drum_length':drump_length,
      'drump_adjust':drump_adjust,
      'clearance_concave':clear_concave,
      'grain_tank_capacity':tank_capa,
      'clutch_type_id':clutch_type,
      'front_tyre':tyre_sizefront,
      'tyre_sizerear':tyre_sizerear,
      'fuel_capacity':fuel_capacity,
      'total_weight_without_grains':weight_drain,
      'dimension_length':dia_length,
      'dimension_height':dia_height,
      'dia_width':dia_width,
      'ground_clearance':ground_clerance,
      'crops_type_id':crops,
      'image':image,
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