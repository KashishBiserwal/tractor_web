var EditIdmain_ = "";
var editId_state= false;

$(document).ready(function(){
  // get('brand2');
  // get('brand');
  ImgUpload();
     $('#submitbtn').click(store);
    // $('#add_trac').on('click', function() {
    //   get('brand');
    // });
    $('#Search').click(search_data);
    $("#Reset").click(function () {
  
      $("#brand2").val("");
      $("#model2").val("");
      $("#state2").val("");
      $("#district2").val("");
      old_farm_implement();

    });
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
          $.validator.addMethod("validPrice", function(value, element) {
      
            const cleanedValue = value.replace(/,/g, '');
      
            return /^\d+$/.test(cleanedValue);
          }, "Please enter a valid price (digits and commas only)");
            
      $("#old_farm_implement").validate({
      
      rules: {
        category:{
            required: true,
        },
        brand: {
          required: true,
        },
        model: {
          required: true,
        },
        year: {
          required: true,
        },
        hours:{
          required: true,
        },
        price:{
          required: true,
          validPrice: true,
       
        },
        about:{
            required: true,
          },
          Mobile:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        'files[]':{
            required:true,
        },
        name:{
          required: true,
        },
        lname:{
          required: true,
        },
        state:{
            required: true,
          },
          district:{
            required: true,
          }
    },
        messages:{
            category: {
            required: "This field is required",
          },
          brand: {
            required: "This field is required",
          },
          model: {
            required: "This field is required",
          },
          year: {
          required: "This field is required",
        },
        hours:{
          required: "This field is required",
        },
        price: {
          required: "This field is required",
          validPrice: "Please enter a valid price",
        },
        about:{
            required:"This field is required",
        },
        Mobile: {
            required:"This field is required",
            maxlength:"Enter only 10 digits",
            digits: "Please enter only digits"
        },
        name: {
            required: "This field is required",
          },
          lname: {
        required: "This field is required",
        },
        'files[]':{
            required:"This field is required",
        },
         state: {
          required: "This field is required",
        },
        district: {
          required: "This field is required",
        },
      
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#submitbtn").on("click", function () {
    
        $("#old_farm_implement").valid();
      
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
  

        function get() {
          var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';
          $.ajax({
              url: url,
              type: "GET",
              headers: {
                  'Authorization': 'Bearer ' + localStorage.getItem('token')
              },
              success: function (data) {
                  console.log(data);
                  const selects = document.querySelectorAll('#brand_brand');
      
                  selects.forEach(select => {
                      select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                      if (data.brands.length > 0) {
                          data.brands.forEach(row => {
                              const option = document.createElement('option');
                              option.textContent = row.brand_name;
                              option.value = row.id;
                              console.log(option);
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
          var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
          console.log('Requesting models for brand ID:', brand_id); // Debugging statement
          $.ajax({
              url: url,
              type: "GET",
              headers: {
                  'Authorization': 'Bearer ' + localStorage.getItem('token')
              },
              success: function (data) {
                  console.log('Received models data:', data); // Debugging statement
                  const selects = document.querySelectorAll('#model_model');
      
                  selects.forEach(select => {
                      select.innerHTML = '<option selected disabled value="">Please select an option</option>';
      
                      if (data.model && data.model.length > 0) {
                          data.model.forEach(row => {
                              const option = document.createElement('option');
                              option.textContent = row.model;
                              option.value = row.model;
                              console.log('Adding model:', option); // Debugging statement
                              select.appendChild(option);
                          });
                      } else {
                          select.innerHTML = '<option>No valid data available</option>';
                      }
                  });
              },
              error: function (error) {
                  console.error('Error fetching model data:', error);
              }
          });
      }
 get();
      

  function get_category() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_implement_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const select = document.getElementById('category');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

            if (data.allCategory.length > 0) {
                data.allCategory.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.category_name;
                    option.value = row.id;
                    select.appendChild(option);
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
get_category();

function store(event) {
  console.log('run store function');
     event.preventDefault();
    var enquiry_type_id = 5;
    var product_type_id = 5;
    var implement_category_id = 1;
    var image_names = document.getElementById('_image').files;
     console.log('image',image_names);
     var EditIdmain_ = $('#EditIdmain_').val();
     var category = $('#category').val();
     var brand = $('#brand').val();
     var model = $('#model').val();
     var year = $('#year').val();
     var hours_driven = $('#hours').val();
     var price= $('#price').val();
     var description = $('#about').val();
     var first_name = $('#name').val();
     var last_name = $('#lname').val();
     var mobile = $('#Mobile').val();
     var state = $('#state').val();
     var district = $('#district').val();
     var tehsil = $('#tehsil').val();

     var _method = 'POST';
    var url, method;
    
    var apiBaseURL =APIBaseURL;
     var token = localStorage.getItem('token');
     var headers = {
       'Authorization': 'Bearer ' + token
     };
    if (EditIdmain_!="null" && EditIdmain_!="") {
        _method = 'put';
        url = apiBaseURL + 'customer_enquiries/' + EditIdmain_ ;
        console.log(url);
        method = 'POST'; 
    } else {
        url = apiBaseURL + 'customer_enquiries';
        method = 'POST';
    }
     var data = new FormData();
    
     for (var x = 0; x < image_names.length; x++) {
       data.append("images[]", image_names[x]);
       console.log("multiple image", image_names[x]);
     }
     data.append('id',EditIdmain_);
       data.append('_method',_method);
       data.append('product_type_id', product_type_id);
       data.append('implement_category_id', implement_category_id);
       data.append('enquiry_type_id', enquiry_type_id);
       data.append('category', category);
       data.append('first_name', first_name);
       data.append('last_name', last_name);
       data.append('mobile', mobile);
       data.append('implement_brand_id', brand);
       data.append('implement_model', model);
       data.append('implement_purchase_year', year);
       data.append('implement_hours_driven', hours_driven);
       data.append('state',state);
       data.append('district',district);
       data.append('tehsil',tehsil);
       data.append('price',price);
       data.append('implement_description',description);
      //  console.log(data, "okk");

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
         old_farm_implement();
         window.location.reload();
          if(result.length){
            // old_farm_implement();
         }
        
       },
       error: function (error) {
         console.error('Error fetching data:', error);
       }
     });
   }


   function old_farm_implement() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_implements';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');

            if (data.getOldImplement && data.getOldImplement.length > 0) {
                let tableData = [];
                let counter = 1;

                // Reverse the order of the fetched data array
                data.getOldImplement.reverse().forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#old_farm_view">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`;

                    tableData.push([
                        counter,
                        row.date,
                        row.brand_name,
                        row.model,
                        fullName,
                        row.mobile,
                        row.purchase_year,
                        row.state_name,
                        row.district_name,
                        action
                    ]);

                    counter++;
                });

                // Destroy existing DataTable instance
                $('#example').DataTable().destroy();

                // Reinitialize DataTable with new data
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Seller Name' },
                        { title: 'Mobile' },
                        { title: 'Year' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
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

old_farm_implement();


// view data
function fetch_data(id){

  var productId = id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_old_implementsById/' + productId; 
  var headers = {
  'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
      url: url,
      type: "GET",
      headers: headers,
      success: function(data) {
      console.log(data, 'abc');
      document.getElementById('brand_2').innerText=data.getOldImplement[0].brand_name;
      document.getElementById('model_2').innerText=data.getOldImplement[0].model;
      document.getElementById('first_name2').innerText=data.getOldImplement[0].first_name;
      document.getElementById('last_name2').innerText=data.getOldImplement[0].last_name;
      document.getElementById('mobile').innerText=data.getOldImplement[0].mobile;
      document.getElementById('email_2').innerText=data.getOldImplement[0].email;
      document.getElementById('date_2').innerText=data.getOldImplement[0].date;
      document.getElementById('year_2').innerText=data.getOldImplement[0].purchase_year;
      document.getElementById('state_2').innerText=data.getOldImplement[0].state_name;
      document.getElementById('district_2').innerText=data.getOldImplement[0].district_name;
      document.getElementById('tehsil2').innerText=data.getOldImplement[0].tehsil_name;
   
      
      $("#selectedImagesContainer1").empty();
  
      if (data.getOldImplement[0].image_names) {
          var imageNamesArray = Array.isArray(data.getOldImplement[0].image_names) ? data.getOldImplement[0].image_names : data.getOldImplement[0].image_names.split(',');
           
          var countclass=0;
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
              countclass++;
              var newCard = `
                  <div class="col-12 col-md-3 col-lg-3 col-sm-3">
                  <div class="" id="closeId${countclass}"></div>
                      <div class="brand-main d-flex box-shadow mt-1 py-2 w-75 text-center shadow upload__img-closeDy${countclass}">
                          <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                              <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                          </a>
                      </div>
                  </div>
              `;
      
              // Append the new image element to the container
              $("#selectedImagesContainer1").append(newCard);
          });
  
  
      }
  },
  error: function (error) {
  console.error('Error fetching data:', error);
  }
  });
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
  
            var hours_select = $("#hours_driven");
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
// fetch edit data


function fetch_edit_data(id) {
  // var productId = id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_old_implementsById/' + id; 
  editId_state= true;
  // EditIdmain_= product_id;
  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.getOldImplement[0];
      $('#EditIdmain_').val(userData.id);
      $('#enquiry_type_id').val(userData.enquiry_type_id);
      $('#image_type_id').val(userData.image_type_id);
      $('#tractor_type_id').val(userData.tractor_type_id);
      $('#form_type').val(userData.form_type);

      $("#category option").prop("selected", false);
      $("#category option[value='" +userData.category_name + "']").prop("selected", true);

      $("#year option").prop("selected", false);
      $("#year option[value='" +userData.purchase_year + "']").prop("selected", true);

      $("#hours_driven option").prop("selected", false);
      $("#hours_driven option[value='" +userData.hours_driven + "']").prop("selected", true);

      $('#price').val(userData.price);
      $('#about').val(userData.description);
      $('#name').val(userData.first_name);
      $('#lname').val(userData.last_name);
      $('#Mobile').val(userData.mobile);
      $('#state').val(userData.state);
      $('#district').val(userData.district);
      $('#tehsil').val(userData.tehsil);

       
      var brandDropdown = document.getElementById('brand_brand');
      for (var i = 0; i < brandDropdown.options.length; i++) {
        if (brandDropdown.options[i].text === userData.brand_name) {
          brandDropdown.selectedIndex = i;
          break;
        }
      }

      $('#model_model').empty(); 
      get_model(userData.brand_id); 

      // Selecting the option in the model dropdown
      setTimeout(function() { // Wait for the model dropdown to populate
          $("#model_model option").prop("selected", false);
          $("#model_model option[value='" + userData.model + "']").prop("selected", true);
      }, 1000); // Adjust the delay time as needed

      setSelectedOption('state', userData.state_id);
      setSelectedOption('district', userData.district_id);
      
      // Call function to populate tehsil dropdown based on selected district
      populateTehsil(userData.district_id, 'tehsil-dropdown', userData.tehsil_id);

     
      $("#selectedImagesContainer").empty();
  
      if (userData.image_names) {
          // Check if Data.image_names is an array
          var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
          var countclass=0;
          imageNamesArray.forEach(function (imageName) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + imageName.trim();
              countclass++;
              var newCard = `
              <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative">
              <div class="upload__img-close_button" id="closeId${countclass}" onclick="removeImage(this);"></div>
                  <div class="brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy${countclass}">
                      <a class="weblink text-decoration-none text-dark" title="Image">
                          <img class="img-fluid w-100 h-100" src="${imageUrl}" alt=" Image">
                      </a>
                  </div>
              </div>
              `;
              // Append the new image element to the container
              $("#selectedImagesContainer").append(newCard);
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

function populateTehsil(selectId, value) {
  var select = document.getElementById(selectId);
  for (var i = 0; i < select.options.length; i++) {
    if (select.options[i].value == value) {
      select.options[i].selected = true;
      break;
    }
  }
}

// delete data
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + id;
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
      console.log("Delete request successful");
      alert("Delete operation successful");
      old_farm_implement();
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

populateStateDropdown('state_select', 'district_select');
// Data Searching
function search_data() {

  var selectedBrand = $('#brand2').val();
  var model = $('#model2').val();
  var state = $('#state2').val();
  var district = $('#district2').val();

  var paraArr = {
    'brand_id': selectedBrand,
    'model':model,
    'state':state,
    'district':district,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_old_implements';
  $.ajax({
      url:url, 
      type: 'POST',
      data: paraArr,
    
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (searchData) {
        console.log(searchData,"hello brand");
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
  let serialNumber = 1; 

  if(data.oldImplement && data.oldImplement.length > 0) {
      let tableData = []; 
      data.oldImplement.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action = `
          <div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#old_farm_view">
              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                <i class="fas fa-edit" style="font-size: 11px;"></i>
              </button>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                <i class="fa fa-trash" style="font-size: 11px;"></i>
              </button>
          </div>`;
console.log(row.customer_id);
          tableData.push([
            serialNumber,
            row.date,
            row.brand_name,
            row.model,
            fullName,
            row.mobile,
            row.purchase_year,
            row.state_name,
            row.district_name,
            action
        ]);

        serialNumber++;
    });

    $('#example').DataTable().destroy();
    $('#example').DataTable({
        data: tableData,
        columns: [
          { title: 'S.No.' },
          { title: 'Date' },
          { title: 'Brand' },
          { title: 'Model' },
          { title: 'Seller Name' },
          { title: 'Mobile' },
          { title: 'Year' },
          { title: 'State' },
          { title: 'District' },
          { title: 'Action', orderable: false }
        ],
        paging: true,
        searching: false,
        // ... other options ...
    });
  } else {
    // Display a message if there's no valid data
    tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
}
}

populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');



