jQuery(document).ready(function () {
    get_old_harvester();
    ImgUpload();
    $('#submitbtn').click(store);
    // $('#old_form').on('submit',function(event){
    //   store();
    // });
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");
    $.validator.addMethod("validPrice", function(value, element) {
      
        const cleanedValue = value.replace(/,/g, '');
  
        return /^\d+$/.test(cleanedValue);
      }, "Please enter a valid price (digits and commas only)");
 
   $("#old_form").validate({
   
   rules: {
       brand:{
           required: true,
       },
       model:{
           required: true,
       },
       CROPS_TYPE:{
           required: true,
       },
       POWER_SOURCE:{
           required: true,
       },
       hours:{
           required: true,
       },
       year:{
           required: true,
       },
       price:{
        required: true,
          validPrice: true,
      },
       image:{
       required: true,
       },
       about: {
           required: true,
       },
       name:{
           required: true,
       },
       lname:{
        required: true,
       },
       Mobile:{
           required:true, 
           maxlength:10,
           digits: true,
           customPhoneNumber: true
       },
       state:{
           required: true,
       },
       district:{
           required: true,
       }
   },

   messages:{
       brand:{
           required: "This field is required", 
       },
       model:{
           required: "This field is required",
       },
       CROPS_TYPE:{
           required: "This field is required",
       },
       POWER_SOURCE:{
           required: "This field is required",
       },
       hours:{
           required: "This field is required",
       },
       year:{
           required: "This field is required",
       },
       price: {
        required: "This field is required",
          validPrice: "Please enter a valid price",
      },
       image:{
           required: "This field is required",
       },
       about: {
            required: "This field is required",
      
     },
     name:{
       required: "This field is required",
     },
     lname:{
        required: "This field is required",
     },
     Mobile: {
       required:"This field is required",
       maxlength:"Enter only 10 digits",
       digits: "Please enter only digits"
     },
     state: {
       required: "This field is required",
     },
     district: {
       required: "This field is required",
     }
   },
   
   submitHandler: function (form) {
     alert("Form submitted successfully!");
   },
   });

 
   $("#submitbtn").on("click", function () {
 
     $("#old_form").valid();
   
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
  
            var hours_select = $("#hours");
            hours_select.empty(); // Clear existing options
            hours_select.append('<option selected disabled="" value="">Please select an option</option>'); 
            console.log(data,'ok');
            for (var k = 0; k < data.getHoursDriven.length; k++){
              var optionText = data.getHoursDriven[k].start + " - " + data.getHoursDriven[k].end;
              hours_select.append('<option value="' + k + '">' + optionText + '</option>');
            } 
            var select_year = $("#year");
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


// store
function store(event) {
    event.preventDefault();
    console.log('jfhfhw');
    var form_type = $('#form_type').val();
    var enquiry_type_id = $('#enquiry_type_id').val();
    var product_type_id = $('#product_type_id').val();
    var brand = $('#brand').val();
    var model = $('#model').val();
    var CROPS_TYPE = $('#CROPS_TYPE').val();
    var POWER_SOURCE = $('#POWER_SOURCE').val();
    var hours = $('#hours').val();
    var year = $('#year').val();
    var price = $('#price').val();
    // var image = $('#image').val();
    var image = document.getElementById('image').files[0];
    var about = $('#about').val();
    var name = $('#name').val();
    var lname =$('#lname').val();
    var Mobile = $('#Mobile').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var tehsil = $('#tehsil').val();
    var apiBaseURL =APIBaseURL;
    // var url = apiBaseURL + 'harvester';
    var url="http://tractor-api.divyaltech.com/api/customer/customer_enquiries";
    console.log(url);
   // var url = "<?php echo $APIBaseURL; ?>user_login";
    // console.log(url);
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var data = new FormData();
    var image = document.getElementById('image').files;
for (var x = 0; x < image.length; x++) {
    data.append("images[]", image[x]);
}
    // data.append('image', image);
    data.append('form_type', form_type);
    data.append('enquiry_type_id', enquiry_type_id);
    data.append('product_type_id', product_type_id);
    data.append('brand_id', brand);
    data.append('model', model);
    data.append('crops_type_id', CROPS_TYPE);
    console.log(CROPS_TYPE);
    data.append('power_source_id', POWER_SOURCE);
    console.log("power_osurce",POWER_SOURCE);
    data.append('hours_driven', hours);
    console.log(hours);
    data.append('purchase_year', year);
    console.log(year);
    data.append('price', price);
    console.log(price);
    data.append('description', about);
    console.log(about);
    data.append('first_name', name);
    data.append('last_name', lname);
    data.append('mobile', Mobile);
    data.append('state', state);
    data.append('district', district);
    data.append('tehsil', tehsil);
    $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false, 
      contentType: false,
      success: function (result) {
        // console.log(result, "result");
        if(result.length){
        //   get_tractor_list();
        }
       
        // console.log("Add successfully");
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

  function get_old_harvester() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_harvester';
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
                        <td>${formatDateTime(row.created_at)}</td>
                        <td>${row.brand_name}</td>
                        <td>${row.model}</td>
                        <td>${row.purchase_year}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>${row.mobile}</td>
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
        get_old_harvester();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }