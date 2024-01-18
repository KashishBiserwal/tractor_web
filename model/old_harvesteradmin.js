var EditIdmain_ = "";
var editId_state= false;


jQuery(document).ready(function () {
  get('brand2');
  $('#add_trac').on('click', function() {
    get('brand');
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
// get brand
function get() {
  var apiBaseURL = APIBaseURL;
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
        select.innerHTML = '<option selected disabled value="">Please select an option</option>';
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
  var EditIdmain_ = $('#EditIdmain_').val();
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
  console.log('edit id', EditIdmain_);
  if (EditIdmain_!='' && EditIdmain_ !="null") {

    // Update mode
    console.log('abcdefg',EditIdmain_);
    _method = 'PUT';
    url = apiBaseURL + 'customer_enquiries/' + EditIdmain_;
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
   data.append('id', EditIdmain_);  
   data.append('_method', _method); 
  data.append('form_type', form_type);
  data.append('enquiry_type_id', enquiry_type_id);
  data.append('product_type_id', product_type_id);
  data.append('brand_id', brand);
  data.append('model', model);
  data.append('crops_type_id', CROPS_TYPE);
  data.append('power_source_id', POWER_SOURCE);
  // console.log("power_osurce", POWER_SOURCE);
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
      } else {
        // Add mode
        console.log("added successfully");
        alert('Successfully added!');
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
      // $('#userId').val(userData.id);
      $('#EditIdmain_').val(userData.id);
       $('#product_type_id').val(userData.id);
      // $('#brand').val(userData.brand_name);
      $("#brand option").prop("selected", false);
      $("#mySelect option[value='" + userData.brand_name + "']").prop("selected", true);
      $('#model').val(userData.model);
      // $('#CROPS_TYPE').val(userData.crops_type_value);
      $("#CROPS_TYPE option").prop("selected", false);
       $("#mySelect option[value='" + userData.crops_type_value + "']").prop("selected", true);
      console.log(userData.crops_type_value);
      // $('#POWER_SOURCE').val(userData.power_source_value);
      $("#POWER_SOURCE option").prop("selected", false);
      $("#mySelect option[value='" + userData.power_source_value + "']").prop("selected", true);
      console.log(userData.power_source_value );
      $('#hours').val(userData.hours_driven);
      $('#year').val(userData.purchase_year);
      $('#price').val(userData.price);
      $('#about').val(userData.description);
      $('#name').val(userData.first_name);
      $('#lname').val(userData.last_name);
      $('#Mobile').val(userData.mobile);
      $('#state').val(userData.state);
      console.log(userData.state);
      $('#district').val(userData.district);
      $('#tehsil').val(userData.tehsil);

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
                            <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                          </a>
                      </div>
                  </div>
              `;
      
              // Append the new image element to the container
              $("#selectedImagesContainer").append(newCard);
          });
      }
      
    console.log('Fetched data successfully');
      // $('#exampleModal').modal('show'); 
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
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
            let serialNumber = 1;
            let tableData = [];

            if (data.product && data.product.length > 0) {
                // console.log(typeof product);

                data.product.forEach(row => {
                  let action = `  <div class="d-flex">
                  <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#view_old_harvester" id="viewbtn">
                    <i class="fa fa-eye" style="font-size: 11px;"></i>
                  </button>
                  <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data(${row.id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="your_edit">
                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                  </button>
                  <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                    <i class="fa fa-trash" style="font-size: 11px;"></i>
                  </button>
                </div>`;
  
                  // Push row data as an array into the tableData
                  tableData.push([
                    formatDateTime(row.created_at),
                    row.brand_name,
                    row.model,
                    row.purchase_year,
                    row.state,
                    row.district,
                    row.mobile,
                    action
                ]);
  
            });
            // Initialize DataTable after preparing the tableData
          $('#example').DataTable().destroy();
          $('#example').DataTable({
                  data: tableData,
                  columns: [
                    { title: 'Date' },
                    { title: 'Brand' },
                    { title: 'Model Name' },
                    { title: 'Year' },
                    { title: 'State' },
                    { title: 'district' },
                    { title: 'Phone Number' },
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
          document.getElementById('brand_name').innerText = data.product[0].brand_name;
          document.getElementById('model_name_1').innerText = data.product[0].model;
          document.getElementById('CROPS_TYPE_1').innerText = data.product[0].crops_type_value;
          document.getElementById('POWER_SOURCE_1').innerText = data.product[0].power_source_value;
          document.getElementById('hours_1').innerText =data.product[0].hours_driven;
          document.getElementById('year_1').innerText = data.product[0].purchase_year;
          document.getElementById('Price_1').innerText = data.product[0].price;
          console.log(data.product[0].price);
          document.getElementById('About_1').innerText = data.product[0].description;
          document.getElementById('First_Name').innerText = data.product[0].first_name;
          document.getElementById('Last_Name').innerText = data.product[0].last_name;
          document.getElementById('Mobile_1').innerText = data.product[0].mobile;
          document.getElementById('State_1').innerText = data.product[0].state;
          document.getElementById('District_1').innerText = data.product[0].district;
          document.getElementById('Tehsil_1').innerText = data.product[0].tehsil;
      
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
  function searchdata(){
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
  
    var data = new FormData();
    if(brand_name == null){
      data.append('brand_id', '');
    }else{
      data.append('brand_id', brand_name);
    }
    
   
    data.append('model', model_name);
    data.append('state', state);
    data.append('district', district);
  
    $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
      success: function (data) {
        console.log('Success:', data.oldTractor);
        const tableBody = document.getElementById('data-table');
       
        let tableData = [];
  
        if (data.oldTractor && data.oldTractor.length > 0) {
            data.oldTractor.forEach(row => {
               // const tableRow = document.createElement('tr');
               let action = `  <div class="d-flex">
               <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#view_old_harvester" id="viewbtn">
                 <i class="fa fa-eye" style="font-size: 11px;"></i>
               </button>
               <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data(${row.id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="your_edit">
                 <i class="fas fa-edit" style="font-size: 11px;"></i>
               </button>
               <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                 <i class="fa fa-trash" style="font-size: 11px;"></i>
               </button>
             </div>`;

               // Push row data as an array into the tableData
               tableData.push([
                 formatDateTime(row.created_at),
                 row.brand_name,
                 row.model,
                 row.purchase_year,
                 row.state,
                 row.district,
                 row.mobile,
                 action
             ]);

         });
         // Initialize DataTable after preparing the tableData
       $('#example').DataTable().destroy();
       $('#example').DataTable({
               data: tableData,
               columns: [
                 { title: 'Date' },
                 { title: 'Brand' },
                 { title: 'Model Name' },
                 { title: 'Year' },
                 { title: 'State' },
                 { title: 'district' },
                 { title: 'Phone Number' },
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
      const tableBody = document.getElementById('data-table');
      if(error.status == 400){
        tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
      }
        console.error('Error fetching data:', error);
    
    }
  });
  }
  
  function resetform(){
    $('#brand2').val('');
    $('#model_name').val('');
    $('#state_name').val('');
    $('#district_name').val('');
    get_old_harvester();
  }

