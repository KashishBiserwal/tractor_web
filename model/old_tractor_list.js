$(document).ready(function() {
  $('#old_btn').click(store);
  ImgUpload();
    BackgroundUpload();
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
      return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");
      $("#old_tract").validate({
          rules: {
              first_name: 'required',
              last_name: 'required',
              mobile_number: {
                required:true,
                minlength: 10,
                maxlength:10,
                 digits: true,// Allow only digits
                customPhoneNumber: true
              },
              state: "required",
              district: "required",
              // tehsil:"required",
              brand:"required",
              model:"required",
              purchase_year:"required",
              condition:"required",
              tyrecondition:"required",
              price_old:{
                required:'true',        
               },
              // brand_img:"required",
              // image_pic:"required",
              image_pic:{

                required: true,
              },
              hours_driven:"required",
              rc_num:"required",
              description:{
                required: true,
                 minlength: 10, 
                  maxlength: 1000 
              },
              fav_language:"required",
              fav_language1:"required",
          },  
           messages: {
            image:{
              required: "This field is required",
            },
           },

      });
      $('#old_btn').on('click', function() {
          $('#old_tract').valid();
          console.log($('#old_tract').valid());
      });
  });

  function BackgroundUpload() {
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

function get_year_and_hours() {
  console.log('initsfd')
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_year_and_hours';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {

          var hours_select = $("#hours_driven");
          hours_select.empty(); // Clear existing options
          hours_select.append('<option selected disabled="" value="">Please select an option</option>'); 
          console.log(data,'ok');
          for (var k = 0; k < data.getHoursDriven.length; k++){
            var optionText = data.getHoursDriven[k].start + " - " + data.getHoursDriven[k].end;
            hours_select.append('<option value="' + k + '">' + optionText + '</option>');
          } 

          var select_year = $("#purchase_year");
          select_year.empty(); // Clear existing options
          select_year.append('<option selected disabled="" value="">Please select an option</option>'); 
          console.log(data,'ok');
          for (var j = 0; j < data.getYears.length; j++) {
            select_year.append('<option value="' + data.getYears[j] + '">' + data.getYears[j] + '</option>');
        }

        },

     
        
        complete:function(){
         
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_year_and_hours();



// store

// function store(event) {
//     event.preventDefault();
//     console.log('jfhfhw');
//     var form_type = $('#form_type').val();
//     var enquiry_type_id = $('#enquiry_type_id').val();
//     console.log("enquiry type :",$('#enquiry_type_id').val());
//     var first_name = $('#first_name').val();
//     console.log(first_name);
//     var last_name = $('#last_name').val();
//     var mobile = $('#mobile_number').val();
//     var state = $('#state').val();
//     var district = $('#district').val();
//     var brand_name = $('#brand').val();
//     var Model_name = $('#model').val();
//     var purchase_year = $('#purchase_year').val();
//     var product_type_id = $('#product_type_id').val();
//     console.log("enquiry type :",$('#product_type_id').val());
//     var tehsil = $('#tehsil').val();
//     var engine_condition = $('#condition').val();
//     var tyre_condition = $('#tyrecondition').val();
//     var hours_driven = $('#hours_driven').val();
//     var rc = $('#rc_num').val();
//     var finance = $('input[name="fav_language"]:checked').val();
//     var nocAvailable = $('input[name="fav_language1"]:checked').val();
//     var price= $('#price_old').val();
//     // var image = $('#image_pic').val();
//     var image_name = document.getElementById('image_pic').files[0];
//     var description = $('#description').val();

//     var apiBaseURL =APIBaseURL;
//     var url = apiBaseURL + 'customer_enquiries';
//     console.log(url);
//     var token = localStorage.getItem('token');
//     var headers = {
//       'Authorization': 'Bearer ' + token
//     };
//     var data = new FormData();
//     var image_name = document.getElementById('image_name').val();
//     console.log('imgds',image_name);
//     for (var x = 0; x < image_name.length; x++) {
//       console.log('safdas',image_name[x]);
//         data.append("image_names", image_name[x]);
//     }
//     data.append('form_type',form_type);
//       data.append('enquiry_type_id',enquiry_type_id);
//       data.append('first_name', first_name);
//       data.append('last_name', last_name);
//       data.append('mobile', mobile);
//       data.append('brand_id', brand_name);
//       data.append('product_id', product_type_id);
//       data.append('model', Model_name);
//       data.append('purchase_year', purchase_year);
//       data.append('engine_condition', engine_condition);
//       data.append('tyre_condition', tyre_condition);
//       data.append('hours_driven', hours_driven);
//       data.append('state',state);
//       data.append('district',district);
//       data.append('tehsil',tehsil);
//       data.append('rc_number',rc);
//       data.append('price',price);
//       data.append('description', description);
//       data.append('finance', finance);
//       data.append('noc', nocAvailable);
//     $.ajax({
//       url: url,
//       // type: "data",
//       data: data,
//       headers: headers,
//       success: function (result) {
//         // console.log(result, "result");
//         if(result.length){
//           get_tractor_list();
//         }
       
//         // console.log("Add successfully");
//       },
//       error: function (error) {
//         console.error('Error fetching data:', error);
//       }
//     });
//   }


function store(event) {
  console.log('run store function');
  //  var typeDiv = document.getElementById('type_name');
     event.preventDefault();
    
     var image_names = document.getElementById('image_pic').files;
     console.log('imgds',image_names);
     var form_type = $('#form_type').val();
     var product_type_id = $('#product_type_id').val();
     var image_type_id = $('#image_type_id').val();
     var enquiry_type_id = $('#enquiry_type_id').val();
     var tractor_type_id = $('#tractor_type_id').val();enquiry_type_id
     console.log('tractor_type_id',tractor_type_id);
     var first_name = $('#first_name').val();
     console.log(first_name);
     var last_name = $('#last_name').val();
     var mobile = $('#mobile_number').val();
     var state = $('#state').val();
     var district = $('#district').val();
     var brand_name = $('#brand').val();
     var Model_name = $('#model').val();
     var purchase_year = $('#purchase_year').val();;
     var tehsil = $('#tehsil').val();
     var engine_condition = $('#condition').val();
     var tyre_condition = $('#tyrecondition').val();
     var hours_driven = $('#hours_driven').val();
     var rc = $('#rc_num').val();
     var finance = $('input[name="fav_language"]:checked').val();
     var nocAvailable = $('input[name="fav_language1"]:checked').val();
     var price= $('#price_old').val();
     var description = $('#description').val();
 
    
     var apiBaseURL =APIBaseURL;
     var url = apiBaseURL + 'customer_enquiries';
     var token = localStorage.getItem('token');
     var headers = {
       'Authorization': 'Bearer ' + token
     };
     var data = new FormData();
    
     for (var x = 0; x < image_names.length; x++) {
       data.append("images[]", image_names[x]);
       console.log("multiple image", image_names[x]);
     }
       data.append('form_type',form_type);
       data.append('product_type_id', product_type_id);
       data.append('enquiry_type_id', enquiry_type_id);
       data.append('image_type_id', image_type_id);
       data.append('tractor_type_id', tractor_type_id);
       data.append('first_name', first_name);
       data.append('last_name', last_name);
       data.append('mobile', mobile);
       data.append('brand_id', brand_name);
      //  data.append('product_id', product_type_id);
       data.append('model', Model_name);
       data.append('purchase_year', purchase_year);
       data.append('engine_condition', engine_condition);
       data.append('tyre_condition', tyre_condition);
       data.append('hours_driven', hours_driven);
       data.append('state',state);
       data.append('district',district);
       data.append('tehsil',tehsil);
       data.append('rc_number',rc);
       data.append('price',price);
       data.append('description', description);
       data.append('finance', finance);
       data.append('noc', nocAvailable);
      
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




  function formatDateTime(originalDateTimeStr) {
    const originalDateTime = new Date(originalDateTimeStr);

    const pad = (num) => (num < 10 ? '0' : '') + num;

    const day = pad(originalDateTime.getDate());
    const month = pad(originalDateTime.getMonth() + 1);
    const year = originalDateTime.getFullYear();
    const hours = pad(originalDateTime.getHours());
    const minutes = pad(originalDateTime.getMinutes());
    const seconds = pad(originalDateTime.getSeconds());

    return `${day}-${month}-${year} / ${hours}:${minutes}:${seconds}`;
    }
   // fetch data
   function get_tractor_list() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_tractor';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);

            const tableBody = document.getElementById('data-table');

            if (data.product && data.product.length > 0) {
                // console.log(typeof product);

                data.product.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                  // console.log(tableRow, 'helloooo');
                    tableRow.innerHTML = `
                        <td>${row.product_id}</td>
                        <td>${formatDateTime(row.created_at)}</td>
                        <td>${row.customer_id}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model}</td>
                        <td>${row.purchase_year}</td>
                        <td>${row.state}</td>
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
get_tractor_list();

// delete data
  function destroy(id) {
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
        get_tractor_list();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }