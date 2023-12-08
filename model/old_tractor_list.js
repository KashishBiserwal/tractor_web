$(document).ready(function() {
    BackgroundUpload()
      $("#old_tract").validate({
          rules: {
              first_name: 'required',
              last_name: 'required',
              mobile_number: {
                  required: true,
                  digits: true, // Allow only digits
              },
              state: "required",
              district: "required",
              brand:"required",
              model:"required",
              year:"required",
              condition:"required",
              tyrecondition:"required",
              brand_img:"required",
              hour:"required",
              rc:"rc",
              description:"required",
              fav_language:"required",
              fav_language1:"required",
          }
      });
      $('#old_btn').on('click', function() {
          $('#old_tract').valid();
          console.log($('#old_tract').valid());
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

$('body').on('click', ".background__img-close", function (e) {
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


// get brand
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


// store

function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var location = $('#location').val();
    var name = $('#name').val();
    var mobile_no = $('#mobile_no').val();
    var brand_name = $('#brand_name').val();
    var Model_name = $('#Model_name').val();
    var year = $('#year').val();
    var engine_condition = $('#engine_condition').val();
    var hr_driven = $('#hr_driven').val();
    var rc = $('#rc').val();
    var financed = $('input[name="fav_language"]:checked').val();
    var nocAvailable = $('input[name="fav_language1"]:checked').val();
    var image = $('#image').val();
    var sell_day = $('#sell_day').val();

    // Prepare data to send to the server
    var paraArr = {
      'location': location,
      'name': name,
      'mobile_no': mobile_no,
      'brand_name': brand_name,
      'Model_name': Model_name,
      'year': year,
      'engine_condition': engine_condition,
      'hr_driven': hr_driven,
      'rc':rc,
      'image': image,
      'sell_day': sell_day,
      'financed': financed,
      'nocAvailable': nocAvailable,
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
        // window.location.href = "<?php echo $baseUrl; ?>old_tractor_list.php"; 
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
    var url = apiBaseURL + 'getOldTractor';

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