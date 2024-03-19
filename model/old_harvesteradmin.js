var customer_id = "";
var editId_state= false;


jQuery(document).ready(function () {
  // get('brand2');
  $('#add_trac').on('click', function() {
    // resetFormFields();
  });
    get_old_harvester();
    ImgUpload();
    $('#submitbtn').click(store);
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
      'files[]':{
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
      'files[]':{
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

  function formatPriceWithCommas(price) {
    if (isNaN(price)) {
        return price; 
    }
     return price.toLocaleString('en-IN', { maximumFractionDigits: 2 });
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

  function removeImage(ele){
    console.log("print ele");
      console.log(ele);
      let thisId=ele.id;
      thisId=thisId.split('closeId');
      thisId=thisId[1];
      $("#"+ele.id).remove();
      $(".upload__img-closeDy"+thisId).remove();
  
    }

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
            // console.log(data,'ok');
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
  var product_type_id = 3;
  var enquiry_type_id = 3;
  // var form_type = FOR_SELL_TRACTOR;
  var customer_id = $('#customer_id').val();
  // console.log(customer_id);
  var form_type = $('#form_type').val();
  var brand = $('#brand_brand').val();
  var model = $('#model_model').val();
  var CROPS_TYPE = $('#CROPS_TYPE').val();
  var POWER_SOURCE = $('#POWER_SOURCE').val();
  var hours = $('#hours').val();
  var year = $('#year').val();
  var price = $('#price').val();
  price = price.replace(/[\,\.\s]/g, '');
  var image = document.getElementById('image').files;
  var about = $('#about').val();
  var name = $('#name').val();
  var lname = $('#lname').val();
  var Mobile = $('#Mobile').val();
  var state = $('#state').val();
  var district = $('#district').val();
  var tehsil = $('#tehsil').val();
  var apiBaseURL = APIBaseURL;

  var token = localStorage.getItem('token');
  var headers = {
    'Authorization': 'Bearer ' + token
  };

  var urlParams = new URLSearchParams(window.location.search);
  var editId = urlParams.get('id');
  var url, method;
  _method = 'POST';

  console.log('edit state', editId_state);
  if (customer_id!='' && customer_id !="null") {

    // Update mode
    console.log('abcdefg',customer_id);
    _method = 'PUT';
    url = apiBaseURL + 'customer_enquiries/' + customer_id;
    console.log(url);
   method= 'POST';
    console.log(url);
  } else {
    // Add mode
    method = 'POST';
    url = apiBaseURL + 'customer_enquiries';
  }

  var data = new FormData();
  for (var x = 0; x < image.length; x++) {
    data.append("images[]", image[x]);
  }
   data.append('customer_id', customer_id);  
   data.append('_method', _method); 
  data.append('product_type_id', product_type_id);
  data.append('form_type', form_type);
  data.append('enquiry_type_id', enquiry_type_id);
  data.append('brand_id', brand);
  data.append('model', model);
  data.append('crops_type_id', CROPS_TYPE);
  data.append('power_source_id', POWER_SOURCE);
  data.append('hours_driven', hours);
  data.append('purchase_year', year);
  data.append('price', price);
  data.append('description', about);
  data.append('first_name', name);
  data.append('last_name', lname);
  data.append('mobile', Mobile);
  data.append('state', state);
  data.append('district', district);
  data.append('tehsil', tehsil);

  $.ajax({
    url: url,
    type: method,
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function (result) {
      console.log(result, "result");

      if (editId_state) {
        // Update mode
        console.log("updated successfully");
        alert('Successfully updated!');
        window.location.reload();
      } else {
        // Add mode
        console.log("added successfully");
        alert('Successfully added!');
        window.location.reload();
      }
    },
    error: function (error) {
      console.error('Error:', error);
    }
  });
}




// edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var id = id;
  var url = apiBaseURL + 'get_old_harvester_by_id/' + id;
  editId_state= true;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.product[0];
      var formattedPrice = parseFloat(userData.price).toLocaleString('en-IN');
      // $('#EditIdmain_').val(userData.product_id);
      $('#customer_id').val(userData.customer_id);
      $('#CROPS_TYPE').val(userData.crops_type_id);
      $('#POWER_SOURCE').val(userData.power_source_id);
      $('#model').val(userData.model);
      $('#hours').val(userData.hours_driven);
      $('#year').val(userData.purchase_year);
      $('#price').val(formattedPrice);
      $('#about').val(userData.description);
      $('#name').val(userData.first_name);
      $('#lname').val(userData.last_name);
      $('#Mobile').val(userData.mobile);

      var brandDropdown = document.getElementById('brand_brand');
      for (var i = 0; i < brandDropdown.options.length; i++) {
        if (brandDropdown.options[i].text === userData.brand_name) {
          brandDropdown.selectedIndex = i;
          break;
        }
      }
   

      $('#model_model').empty(); 
      get_model_1(userData.brand_id); 
      setTimeout(function() { 
          $("#model_model option").prop("selected", false);
          $("#model_model option[value='" + userData.model + "']").prop("selected", true);
      }, 1000); 

      
      setSelectedOption('state', userData.state_id);
      setSelectedOption('district', userData.district_id);
      
      // Call function to populate tehsil dropdown based on selected district
      populateTehsil(userData.district_id, 'tehsil-dropdown', userData.tehsil_id);
      $("#selectedImagesContainer").empty();

      if (userData.image_names) {
          var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
           
          var countclass=0;
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
              countclass++;
              var newCard = `
                  <div class="col-12 col-md-6 col-lg-4 position-relative">
                  <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                      <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                          <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                            <img class="img-fluid w-100 h-100" id="img_url" src="${imageUrl}" alt="Tyre Image">
                          </a>
                      </div>
                  </div>
              `;
      
              // Append the new image element to the container
              $("#selectedImagesContainer").append(newCard);
          });
      }
      
    console.log('Fetched data successfully');
   
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

function populateTehsil(selectId, value) {
  var select = document.getElementById(selectId);
  for (var i = 0; i < select.options.length; i++) {
    if (select.options[i].value == value) {
      select.options[i].selected = true;
      break;
    }
  }
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
  //   function get_old_harvester() {
  //     var apiBaseURL = APIBaseURL;
  //     var url = apiBaseURL + 'get_old_harvester';
  //     $.ajax({
  //         url: url,
  //         type: "GET",
  //         headers: {
  //             'Authorization': 'Bearer ' + localStorage.getItem('token')
  //         },
  //         success: function (data) {
  //           const tableBody = $('#data-table');
        
  //           if (data.product && data.product.length > 0) {
  //               // let tableData = [];
  //               // let counter = 1;
        
  //               // Reverse the order of the data array
  //               data.product.reverse();
        
  //               // Clear existing table rows
  //               tableBody.empty();
        
  //               // Iterate over the data and prepend rows to the table
  //               $.each(data.product, function(index, row) {
  //                   let action = `<div class="d-flex">
  //                       <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#view_old_harvester" id="viewbtn">
  //                           <i class="fa fa-eye" style="font-size: 11px;"></i>
  //                       </button>
  //                       <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="your_edit">
  //                           <i class="fas fa-edit" style="font-size: 11px;"></i>
  //                       </button>
  //                       <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
  //                           <i class="fa fa-trash" style="font-size: 11px;"></i>
  //                       </button>
  //                   </div>`;
        
  //                   // Construct table row
  //                   let rowHtml = `<tr>
  //                       <td>${formatDateTime(row.created_at)}</td>
  //                       <td>${row.brand_name}</td>
  //                       <td>${row.model}</td>
  //                       <td>${row.purchase_year}</td>
  //                       <td>${row.state_name}</td>
  //                       <td>${row.district_name}</td>
  //                       <td>${row.mobile}</td>
  //                       <td>${action}</td>
  //                   </tr>`;
        
  //                   // Append row to the beginning of the table
  //                   tableBody.prepend(rowHtml);
  //               });
        
  //               // Destroy existing DataTable instance
  //               $('#example').DataTable().destroy();
        
  //               // Reinitialize DataTable with new data
  //               $('#example').DataTable({
  //                   searching: true,
  //                   ordering: true, // or false, depending on whether you want ordering or not
  //                   destroy: true // Destroy existing DataTable instances before reinitializing
  //               });
  //           } else {
  //               tableBody.html('<tr><td colspan="8">No valid data available</td></tr>');
  //           }
  //       },
        
  //         error: function (error) {
  //             console.error('Error fetching data:', error);
  //         }
  //     });
  // }
  
  
  
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
            const tableBody = $('#data-table');

            if (data.product && data.product.length > 0) {
                data.product.reverse();

                let tableData = [];
                let counter = 0;
                data.product.forEach(row => {
                    counter++; 

                    let action = `<div class="d-flex">
                        <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#view_old_harvester" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="your_edit">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                    </div>`;

                    tableData.push([
                      counter,
                        formatDateTime(row.created_at),
                        row.brand_name,
                        row.model,
                        row.purchase_year,
                        row.mobile,
                        row.state_name,
                        row.district_name,
                        action
                    ]);
                });

                $('#example').DataTable().destroy();

                $('#example').DataTable({
                    data: tableData,
                    columns: [
                      { title: 'S.No' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Year' },
                        { title: 'Phone Number' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
                });
            } else {
                tableBody.html('<tr><td colspan="8">No valid data available</td></tr>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
get_old_harvester();





// get_old_harvester();
  
  
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

   //  for View
  function openViewdata(id) {
    console.log(id, "id");
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
  
    var productId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_harvester_by_id/' + productId; 
  console.log(url);
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (data) {
          console.log(data, 'abc');
          var formattedPrice = parseFloat(data.product[0].price).toLocaleString('en-IN');
          document.getElementById('brand_name').innerText = data.product[0].brand_name;
          document.getElementById('model_name_1').innerText = data.product[0].model;
          document.getElementById('CROPS_TYPE_1').innerText = data.product[0].crops_type_value;
          document.getElementById('POWER_SOURCE_1').innerText = data.product[0].power_source_value;
          document.getElementById('hours_1').innerText =data.product[0].hours_driven;
          document.getElementById('year_1').innerText = data.product[0].purchase_year;
          document.getElementById('Price_1').innerText = formattedPrice;
          document.getElementById('About_1').innerText = data.product[0].description;
          document.getElementById('First_Name').innerText = data.product[0].first_name;
          document.getElementById('Last_Name').innerText = data.product[0].last_name;
          document.getElementById('Mobile_1').innerText = data.product[0].mobile;
          document.getElementById('State_1').innerText = data.product[0].state_name;
          document.getElementById('District_1').innerText = data.product[0].district_name;
          document.getElementById('Tehsil_1').innerText = data.product[0].tehsil_name;
      
          $("#selectedImagesContainer1").empty();
      
          if (data.product[0].image_names) {
              var imageNamesArray = Array.isArray(data.product[0].image_names) ? data.product[0].image_names : data.product[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + imageName.trim();
      
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

  // search data 
  function searchdata() {
    var brand_name = $('#brand2').val();
    var model_name = $('#model_name').val();
    var state = $('#state_name').val();
    var district = $('#district_name').val();

    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_old_harvester';
    var token = localStorage.getItem('token');

    var headers = {
        'Authorization': 'Bearer ' + token
    };

    var data = {
        'brand_id': brand_name,
        'model': model_name,
        'state': state,
        'district': district,
    };

    $.ajax({
        url: url,
        type: "POST",
        data: data,
        headers: headers,
        success: function (response) {
            const tableBody = $('#data-table');

            if (response.oldTractor && response.oldTractor.length > 0) {
                // let tableData = [];
                let tableData = [];
                let counter = 0;
                response.oldTractor.forEach(row => {
                  counter++;
                    let action = `<div class="d-flex">
                        <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#view_old_harvester" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.customer_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="your_edit">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                    </div>`;

                    tableData.push([
                      counter,
                      formatDateTime(row.created_at),
                      row.brand_name,
                      row.model,
                      row.purchase_year,
                      row.mobile,
                      row.state_name,
                      row.district_name,
                        action
                    ]);
                });

                // Destroy existing DataTable instance
                $('#example').DataTable().destroy();

                // Reinitialize DataTable with new data
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                      { title: 'S.No' },
                      { title: 'Date' },
                      { title: 'Brand' },
                      { title: 'Model' },
                      { title: 'Year' },
                      { title: 'Phone Number' },
                      { title: 'State' },
                      { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
                });
            } else {
                // Check if the response is empty or null
                if (!response || !response.oldTractor) {
                    tableBody.html('<tr><td colspan="8">No valid data available</td></tr>');
                } else {
                    // Response is not empty but the data array is empty
                    tableBody.html('<tr><td colspan="8">No matching data available</td></tr>');
                }
            }
        },
        error: function (xhr, status, error) {
            if (xhr.status === 404) {
                // Handle 404 error here
                const tableBody = $('#data-table');
                tableBody.html('<tr><td colspan="8">No matching data available</td></tr>');
            } else {
                console.error('Error fetching data:', error);
            }
        }
    });
}


  
  function resetform(){
    $('#brand2').val('');
    $('#model_name').val('');
    $('#state_name').val('');
    $('#district_name').val('');
    // get_old_harvester();
    window.location.reload();
  }
  
 

      // function resetFormFields() {
      //   $('#name').val('');
      //   $('#lname').val('');
      //   $('#Mobile').val('');
      //   $('#state').val('');
      //   $('#district').val('');
      //   $('#tehsil').val('');
      //   $('#brand').val('');
      //   $('#model').val('');
      //   $('#CROPS_TYPE').val('');
      //   $('#POWER_SOURCE').val('');
      //   $('#price').val('');
      //   $('#image').val('');
      //   $('#about').val('');
      //   $('#hours').val('');
      //   $('#year').val('');
      //   $('#selectedImagesContainer').val('');
      // } $('#img_url').val();

      function get_1() {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('brand_brand');
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
                        get_model_1(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
      }
      
      function get_model_1(brand_id, selectedModel) {
        var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                console.log(data);
                const select = document.getElementById('model_model');
                select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
      
                        // Select the option if it matches the selectedModel
                        if (row.model === selectedModel) {
                            option.selected = true;
                        }
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
      }
      
      get_1();


       
      function resetFormFields(){
        document.getElementById("old_form").reset();
        document.getElementById("image").value = ''; // Clear the value of the image input
        document.getElementById("selectedImagesContainer").innerHTML = ''; // Optionally, clear any displayed images
    }