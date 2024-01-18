var EditIdmain_ = "";
var editId_state= false;

$(document).ready(function(){

    // $('#implement_btn').click(edit_id);
    // $('#Search').click(search);
     $('#submitbtn').click(store);
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
    
      function removeImage(ele){
        console.log("print ele");
          console.log(ele);
          let thisId=ele.id;
          thisId=thisId.split('closeId');
          thisId=thisId[1];
          $("#"+ele.id).remove();
          $(".upload__img-closeDy"+thisId).remove();
      
        }

      
  function get_category() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_category';
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
    // var enquiry_type_id = 1;
    // var image_type_id = 1;
    // var tractor_type_id=1;
    // var product_type_id=1;
    // var form_type ='FOR_SELL_TRACTOR';
     var image_names = document.getElementById('image').files;
     console.log('image',image_names);
     var form_type = $('#form_type').val();
     var product_type_id = $('#product_type_id').val();
    //  var image_type_id = $('#image_type_id').val();
     var enquiry_type_id = $('#enquiry_type_id').val();
    //  var tractor_type_id = $('#tractor_type_id').val();
    //  console.log('tractor_type_id',tractor_type_id);
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


     var apiBaseURL =APIBaseURL;
     var url = apiBaseURL + 'get_old_implements';
     var token = localStorage.getItem('token');
     var headers = {
       'Authorization': 'Bearer ' + token
     };

     var _method = 'POST';
    var url, method;
    
    console.log('edit state',editId_state);
    console.log('edit id', EditIdmain_);
    if (EditIdmain_) {
        // Update mode
        console.log(editId_state, "state");
        console.log(EditIdmain_, "id edit");
        _method = 'put';
        url = apiBaseURL + 'customer_enquiries/' + EditIdmain_ ;
        console.log(url);
        method = 'POST'; 
    } else {
        // Add mode
        url = apiBaseURL + 'customer_enquiries';
        method = 'POST';
    }
     var data = new FormData();
    
     for (var x = 0; x < image_names.length; x++) {
       data.append("images[]", image_names[x]);
       console.log("multiple image", image_names[x]);
     }
       data.append('form_type',form_type);
       data.append('_method',_method);
       data.append('product_type_id', product_type_id);
       data.append('enquiry_type_id', enquiry_type_id);
      //  data.append('image_type_id', image_type_id);
      //  data.append('tractor_type_id', tractor_type_id);
       data.append('category', category);
       data.append('first_name', first_name);
       data.append('last_name', last_name);
       data.append('mobile', mobile);
       data.append('brand_id', brand);
       data.append('model', model);
       data.append('purchase_year', year);
       data.append('hours_driven', hours_driven);
       data.append('state',state);
       data.append('district',district);
       data.append('tehsil',tehsil);
       data.append('price',price);
    
       data.append('description',description);
       console.log(data, "okk");

     $.ajax({
      url: url,
        type: method,
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
       success: function (result) {
         console.log(result, "result");
         // getTractorList();
         console.log("Add successfully");
         get_tractor_list();
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


// fetch data
function old_farm_implement() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_implements';
    console.log(url);
    console.log('asdfghjhgfdsasdfghgfdssdfgh');
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

                data.getOldImplement.forEach(row => {
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
                        row.state,
                        row.district,
                        action
                    ]);

                    counter++;
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
function fetch_data(product_id){
  // alert(product_id);
  console.log(window.location)
  var urlParams = new URLSearchParams(window.location.search);
  
  var productId = product_id;
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_old_implements' 
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
      document.getElementById('state_2').innerText=data.getOldImplement[0].state;
      document.getElementById('district_2').innerText=data.getOldImplement[0].district;
      document.getElementById('tehsil2').innerText=data.getOldImplement[0].tehsil;
   
      
      $("#selectedImagesContainer1").empty();
  
      if (data.getOldImplement[0].image_names) {
          var imageNamesArray = Array.isArray(data.getOldImplement[0].image_names) ? data.getOldImplement[0].image_names : data.getOldImplement[0].image_names.split(',');
           
          var countclass=0;
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/getOldImplement_img/' + image_names.trim();
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
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_old_implements' ;
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

      $('#enquiry_type_id').val(userData.enquiry_type_id);
      $('#image_type_id').val(userData.image_type_id);
      $('#tractor_type_id').val(userData.tractor_type_id);
      $('#form_type').val(userData.form_type);
      $('#category').val(userData.category_name);
      $('#brand').val(userData.brand_name);
      $('#model').val(userData.model);
      $('#year').val(userData.purchase_year);
      $('#hours_driven').val(userData.hours_driven);
      $('#price').val(userData.price);
      $('#about').val(userData.description);
      $('#name').val(userData.first_name);
      $('#lname').val(userData.last_name);
      $('#Mobile').val(userData.mobile);
      $('#state').val(userData.state);
      $('#district').val(userData.district);
      $('#tehsil').val(userData.tehsil);
     
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