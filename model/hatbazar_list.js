var EditIdmain_ = "";
var editId_state= false;
  $(document).ready(function () {
    // $('#Search').click(searchdata);
    ImgUpload();
    // $('#btn_submit').click(store);
    $('#btn_subcat').click(store_subcategory);
    $('#save_btn').click(hatbazar_add);
   
 
    $('#quantityInput').on('input', calculateTotalPrice);
    $('#unitSelect').on('change', calculateTotalPrice);
    $('#price').on('input', calculateTotalPrice);

    // Call the calculateTotalPrice function initially to calculate the total price
    calculateTotalPrice();

    function calculateTotalPrice() {
        var quantity = parseFloat($('#quantityInput').val()) || 0;
        var unit = $('#unitSelect').val();
        var price = parseFloat($('#price').val().replace(/,/g, '')) || 0; // Remove commas before parsing

        var unitConversion = {
            'Each': 1,
            'gram': 1,
            'Kg': 1,
            'Quintal': 1,
            'Ton': 1,
            'Pack': 1,
        };

        var total = quantity * price * unitConversion[unit];

        var formattedTotal = formatPriceWithCommas(total);
        $('#tprice').val(formattedTotal);
    }

    function formatPriceWithCommas(price) {
        if (isNaN(price)) {
            return price; 
        }
         return price.toLocaleString('en-IN', { maximumFractionDigits: 2 });
    }
  
  //category form
    $("#category_details").validate({
    
      rules: {
        category: {
          required: true,
        }
      },
  messages:{

      category: {
         required: "This field is required",
        }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
    });

   
    $("#btn_submit").on("click", function () {
   
      $("#category_details").valid();
      if ($("#category_details").valid()) {
        
        alert("Form is valid. Ready to submit!");
      }
    });

    // sub-category form
    $("#sub_category_form").validate({
    
    rules: {
      category_: {
        required: true,
      },
      sub_category:{

        required: true,
      }
    },

    messages:{

      category_: {
        required: "This field is required",
      },
      sub_category:{

        required: "This field is required",
      }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#sub_bnt").on("click", function () {
 
    $("#sub_category_form").valid();
    if ($("#sub_category_form").valid()) {
      
      alert("Form is valid. Ready to submit!");
    }
  });
   
  // add hartbazar item form
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
  
          $.validator.addMethod("validPrice", function(value, element) {
      
      const cleanedValue = value.replace(/,/g, '');

      return /^\d+$/.test(cleanedValue);
    }, "Please enter a valid price (digits and commas only)");
    $("#hatbazar_form").validate({
    
    rules: {
      _category: {
        required: true,
      },
      sub_cate:{

        required: true,
      },
      firstNumber:{

        required: true,
      },
      price:{

        required: true,
          validPrice: true,
      },
      textarea_:{

        required: true,
      },
      _image:{

        required: true,
      },
      fname:{

        required: true,
      },
      lname:{

        required: true,
      },
      number:{

        required:true,
          minlength: 10,
          maxlength:10,
          digits: true,
          customPhoneNumber: true
      },
      state_:{

        required: true,
      },
      dist:{

        required: true,
      },
      unit: {
        required: true
      }
    },

    messages:{

      _category: {
        required: "This field is required",
      },
      sub_cate:{

        required: "This field is required",
      },
      firstNumber: {
        required: "This field is required",
      },
      price: {
        required: "This field is required",
          validPrice: "Please enter a valid price",
      },
      textarea_: {
        required: "This field is required",
      },
      _image: {
        required: "This field is required",
      },
      fname: {
        required: "This field is required",
      },
      lname: {
        required: "This field is required",
      },
      number: {
        required:"This field is required",
        minlength: "Phone Number must be of 10 Digit long",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
      },
      state_: {
        required: "This field is required",
      },
      dist: {
        required: "This field is required",
      },
      unit: {
        required: "Please select a quantity and unit."
        }
    },
    
    submitHandler: function (form) {
      alert("Form submitted successfully!");
    },
  });

 
  $("#save_btn").on("click", function () {
 
    $("#hatbazar_form").valid();
   
  });
   

  });

    // Function to calculate total price
    
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


    // subcategory
      function store_subcategory(event) {
        event.preventDefault();
        console.log('jfhfhw');
        var category_id = $('#category_id').val();
        var category_name = $('#category').val();
        var sub_category_name = $('#category_').val();
      
        // Prepare data to send to the server
        var paraArr = {
            'category_id':category_id,
          'category_name': category_name,
          'sub_category_id':sub_category_name,
        };
      
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'haat_bazar_sub_category';
        console.log(url);
      
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
         
            console.log("Add successfully");
            alert('successfully inserted..!')
          },
          error: function (error) {
            console.error('Error fetching data:', error);
          }
        });
      }

    function hatbazar_add(event) {
        // event.preventDefault();
    
        var image_names = document.getElementById('_image').files;
         var enquiry_type_id = $('#enquiry_type_id').val();
         var sub_category_id = $('#sub_category_id').val();
         var _category = $('#c_category').val();
         var sub_cate = $('#sub_cate').val();
         var unitSelect = $('#unitSelect').val();
         var quantityInput = $('#quantityInput').val();
         var price = $('#price').val();
         price = price.replace(/[\,\.\s]/g, '');
         var tprice = $('#tprice').val();
         tprice = price.replace(/[\,\.\s]/g, '');
         var textarea_ = $('#textarea_').val();
         var fname = $('#fname').val();
         var lname = $('#lname').val();
         var number = $('#number').val();
         var state_ = $('#state_').val();
         var dist = $('#dist').val();
         var tehsil = $('#tehsil').val();
         var image_type_id = $('#image_type_id').val();
         console.log(state_,"state");
         console.log(dist,"district");
    
         var apiBaseURL = APIBaseURL; 
        //      var url = apiBaseURL + 'haat_bazar';
             var token = localStorage.getItem('token');
             var headers = {
               'Authorization': 'Bearer ' + token
             };
    
        // Check if an ID is present in the URL, indicating edit mode
        var urlParams = new URLSearchParams(window.location.search);                            
        var editId = urlParams.get('id');
        // console.log("editId from URL:", editId);
        console.log('edit state', editId_state);
        console.log('edit id', EditIdmain_);
        var _method = 'post'; 
        var url, method;
    
        if (editId_state) {
          alert("Update operation successful");
          console.log(editId_state);
          _method = 'put';
          url = apiBaseURL + 'haat_bazar/' + EditIdmain_ ;
          console.log(url);
          method = 'POST';  
      } else {
          // Add modeeditId from URL
          url = apiBaseURL + 'haat_bazar';
          console.log('prachi');
      method = 'POST';
      }
    
        var data = new FormData();
    
        for (var x = 0; x < image_names.length; x++) {
                     data.append("images[]", image_names[x]);
                     console.log("multiple image", image_names[x]);
                   }
                   data.append('_method', _method);
                  data.append('sub_category_id', sub_category_id);
                  data.append('enquiry_type_id', enquiry_type_id);
                  data.append('category_name', _category);
                  data.append('sub_category_id', sub_cate);
                  data.append('quantity', quantityInput);
                  data.append('as_per', unitSelect);
                  data.append('price', tprice);
                  data.append('about', textarea_);
                  data.append('first_name', fname);
                  data.append('last_name', lname);
                  data.append('mobile', number);
                  data.append('state', state_);
                  data.append('district', dist);
                  data.append('tehsil',tehsil);
                  data.append('price',price);
                  data.append('image_type_id',image_type_id);
    
        $.ajax({
            url: url,
            type: method,
            data: data,
            headers: headers,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result, "result");
                console.log("Operation successfully");
                window.location.reload();
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    
    }
   
    function get_haatbazar_list() {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'haat_bazar';
      
      $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data

            // const category=data.allData.haat_bazar_data
            let serialNumber = data.allData.haat_bazar_data.length;
    
              if (data.allData.haat_bazar_data && data.allData.haat_bazar_data.length > 0) {
                  var table = $('#example').DataTable({
                      paging: true,
                      searching: true,
                      columns: [
                          { title: 'S.No.' },
                          { title: 'Category' },
                          { title: 'Sub Category' },
                          { title: 'Full Name' },
                          { title: 'Mobile' },
                          { title: 'State' },
                          { title: 'District' },
                          { title: 'Action', orderable: false }
                      ]
                  });
    
                  data.allData.haat_bazar_data.forEach(row => {
                      const fullName = row.first_name + ' ' + row.last_name;
    
                      // Add row to DataTable
                      table.row.add([
                          serialNumber--,
                          row.category_name,
                          row.sub_category_name,
                          fullName,
                          row.mobile,
                          row.state_name,
                          row.district_name,
                          `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.haat_bazar_id})" data-bs-target="#view_model_hatbazar"><i class="fas fa-eye" style="font-size: 11px;"></i></button>

                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.haat_bazar_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.haat_bazar_id})">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>
                  </td>`
                      ]).draw(false);
    
                      // serialNumber++;
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
    
    get_haatbazar_list();




        //****delete data***
function destroy(id) {
    console.log(id);
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar/' + id;
    console.log(url);
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
        // get_tyre_list();
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

//   for View
  function fetch_data(id) {
    console.log(id, "id");
    console.log(window.location);
    var urlParams = new URLSearchParams(window.location.search);
  
    var productId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar/' + productId;
  
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (data) {
          console.log(data, 'abc');
          var formattedPrice = parseFloat(data.allData.haat_bazar_data[0].price).toLocaleString('en-IN');
          document.getElementById('category').innerText = data.allData.category_name[0].haat_bazar_category_name;
          document.getElementById('subcategory').innerText = data.allData.haat_bazar_data[0].sub_category_name;
          document.getElementById('quantity').innerText = data.allData.haat_bazar_data[0].quantity;
          // document.getElementById('as_per').innerText = data.allData.haat_bazar_data[0].as_per;
          document.getElementById('Total_price').innerText = formattedPrice;
          // document.getElementById('dist1').innerText =data.allData.haat_bazar_data[0].district;
          document.getElementById('textarea').innerText = data.allData.haat_bazar_data[0].about;
          document.getElementById('first_name').innerText = data.allData.haat_bazar_data[0].first_name;
          document.getElementById('last_name').innerText = data.allData.haat_bazar_data[0].last_name;
          document.getElementById('number2').innerText = data.allData.haat_bazar_data[0].mobile;
          document.getElementById('state').innerText = data.allData.haat_bazar_data[0].state_name;
          document.getElementById('district').innerText = data.allData.haat_bazar_data[0].district_name;
          document.getElementById('tehsil1').innerText = data.allData.haat_bazar_data[0].tehsil_name;
      
          $("#selectedImagesContainer1").empty();
      
          if (data.allData.haat_bazar_data[0].image_names) {
              var imageNamesArray = Array.isArray(data.allData.haat_bazar_data[0].image_names) ? data.allData.haat_bazar_data[0].image_names : data.allData.haat_bazar_data[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/haat_bazar_img/' + imageName.trim();
      
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6 row">
                     
                          <div class="brand-main d-flex box-shadow   mt-2 text-center shadow ">
                              <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                  <img class="img-fluid w-100 h-100 " src="${imageUrl}" alt="Tyre Image">
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


  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar/' + id;
    editId_state= true;
    EditIdmain_= id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.allData.haat_bazar_data[0];
            // var dta= response.allData.category_name[0];
            var formattedPrice = parseFloat(Data.price).toLocaleString('en-IN');
            $('#c_category').val(Data.category_name);
            $('#sub_cate').val(Data.sub_category_name);
            $('#quantityInput').val(Data.quantity);
            // $('#unitSelect').val(Data.as_per);
            $('#price').val(formattedPrice);
            $('#tprice').val(Data.total_price);
            $('#textarea_').val(Data.about);
            $('#fname').val(Data.first_name);
            $('#number').val(Data.mobile);
            $('#lname').val(Data.last_name);
          
            var selectElement = document.getElementById('unitSelect');
              var options = selectElement.options;
              var valueToSelect = Data.as_per;

              for (var i = 0; i < options.length; i++) {
                  if (options[i].value === valueToSelect) {
                      options[i].selected = true;
                      break;
                  }
              }
            setSelectedOption('state_', Data.state_id);
            setSelectedOption('dist', Data.district_id);
            
            populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
            // var selectedCategoryId = Data.tyre_category_id;
            // $('#category').val(selectedCategoryId).prop('selected', true);
            var categoryDropdown = document.getElementById('c_category');
            for (var i = 0; i < categoryDropdown.options.length; i++) {
                if (categoryDropdown.options[i].text === Data.category_name) {
                    categoryDropdown.selectedIndex = i;
                    break;
                }
            }

            // Call function to populate sub-category based on the selected category
            console.log("User Category ID:", Data.category_id);
            get_sub_category_1(Data.category_id, function() {
                // Set sub-category value
                var subCategoryDropdown = document.getElementById('sub_cate');
                console.log("Sub Categories:", subCategoryDropdown.options);
                for (var i = 0; i < subCategoryDropdown.options.length; i++) {
                    if (subCategoryDropdown.options[i].text === Data.sub_category_name) {
                        subCategoryDropdown.selectedIndex = i;
                        break;
                    }
                }
            });
            // Clear existing images
            $("#selectedImagesContainer").empty();
  
            if (Data.image_names) {
              // Check if Data.image_names is an array
              var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
          
              // Iterate through all image names
              imageNamesArray.forEach(function (imageName, index) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/haat_bazar_img/' + imageName.trim();
                  var countclass = index + 1;
          
                  var newCard = `
                      <div class="col-6 col-lg-6 col-md-6 col-sm-6 position-relative ">
                          <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                          <div class="brand-main d-flex box-shadow mt-2 text-center shadow upload__img-closeDy${countclass}">
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
        },
        error: function (error) {
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
  

//   function get_category() {
//     var apiBaseURL = APIBaseURL; // Assuming APIBaseURL is defined globally
//     var url = apiBaseURL + 'haat_bazar_sub_category';
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             const selects = document.getElementsByClassName('category_cls');
//             for (let i = 0; i < selects.length; i++) {
//                 const select = selects[i];
//                 select.innerHTML = '<option selected disabled value="">Please select an option</option>';

//                 if (data.allSubCategory.length > 0) {
//                     data.allSubCategory.forEach(row => {
//                         const option = document.createElement('option');
//                         option.textContent = row.category_name;
//                         option.value = row.id;
//                         select.appendChild(option);
//                     });
//                 } else {
//                     select.innerHTML = '<option>No valid data available</option>';
//                 }
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }

// function get_sub_category(category_id) {
//     var apiBaseURL = APIBaseURL; // Assuming APIBaseURL is defined globally
//     var url = apiBaseURL + 'haat_bazar_sub_category/' + category_id;
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             const selects = document.getElementsByClassName('sub_category_cls');
//             for (let i = 0; i < selects.length; i++) {
//                 const select = selects[i];
//                 select.innerHTML = ''; // Clear previous options

//                 if (data.data.length > 0) {
//                     data.data.forEach(row => {
//                         const option = document.createElement('option');
//                         option.textContent = row.sub_category_name;
//                         option.value = row.id;
//                         select.appendChild(option);
//                     });
//                 } else {
//                     select.innerHTML = '<option>No sub-categories available</option>';
//                 }
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching sub-categories:', error);
//         }
//     });
// }

// get_category();


function category_main3() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_category';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          console.log(data);
          const select = document.getElementById('cc_category');
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
      error: function(error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_sub_category(category_id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_sub_category/' + category_id;
  var select = document.getElementById('ss_sub_cate');
  select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          if (data.data.length > 0) {
              data.data.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.sub_category_name;
                  option.value = row.sub_category_id;
                  select.appendChild(option);
              });
          } else {
              const option = document.createElement('option');
              option.textContent = 'No sub-categories available';
              option.disabled = true;
              select.appendChild(option);
          }
      },
      error: function(error) {
          console.error('Error fetching sub-categories:', error);
      }
  });
}
category_main3();



function searchdata() {
  var category = $('#cc_category').val();
  var sub_category = $('#ss_sub_cate').val();
  var state = $('#select_state').val();
  var district = $('#select_dist').val();

  var paraArr = {
      'category_id': category,
      'sub_category_id': sub_category,
      'state': state,
      'district': district,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_haat_bazar';

  $.ajax({
      url: url,
      type: 'POST',
      data: paraArr,
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(searchData) {
          updateTable(searchData);
      },
      error: function (xhr, status, error) {
        if (xhr.status === 404) {
          // Handle 404 error here
          const tableBody = $('#data-table');
          tableBody.html('<tr><td colspan="9">No matching data available</td></tr>');
          // Clear the DataTable
          $('#example').DataTable().clear().draw();
        } else {
          console.error('Error searching for brands:', error);
        }
      }
  });
}

function updateTable(data) {
  const tableBody = $('#data-table');
  tableBody.empty();
  let serialNumber = 1;

  if (data.haatBazarData && data.haatBazarData.length > 0) {
      let tableData = [];
      data.haatBazarData.forEach(row => {
          const fullName = row.first_name + ' ' + row.last_name;
          let action = `<div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.haat_bazar_id})" data-bs-target="#view_model_hatbazar"><i class="fas fa-eye" style="font-size: 11px;"></i></button>
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.haat_bazar_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere"><i class="fas fa-edit" style="font-size: 11px;"></i></button>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.haat_bazar_id})"><i class="fa fa-trash" style="font-size: 11px;"></i></button>
          </div>`;

          tableData.push([
              serialNumber++,
              row.category_name,
              row.sub_category_name,
              fullName,
              row.mobile,
              row.state_name,
              row.district_name,
              action
          ]);
      });

      // Initialize or destroy existing DataTable
      if ($.fn.DataTable.isDataTable('#example')) {
          $('#example').DataTable().destroy();
      }

      // Reinitialize DataTable with updated data
      $('#example').DataTable({
          data: tableData,
          columns: [
              { title: 'S.No.' },
              { title: 'Category' },
              { title: 'Sub Category' },
              { title: 'Full Name' },
              { title: 'Mobile' },
              { title: 'State' },
              { title: 'District' },
              { title: 'Action', orderable: false }
          ],
          paging: true,
          searching: false // Disable searching for now
          // ... other options ...
      });
  } else {
      // Display a message if there's no valid data
      tableBody.html('<tr><td colspan="8">No valid data available</td></tr>');
  }
}

function resetForm() {
  $("#cc_category").val("");
  $("#ss_sub_cate").val("");
  $("#select_state").val("");
  $("#select_dist").val("");
  window.location.reload();
};




function category_main_1() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_category';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          console.log(data);
          const select = document.getElementById('c_category');
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
      error: function(error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_sub_category_1(category_id, callback) {
  console.log("Fetching sub-categories for category ID:", category_id);
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_sub_category/' + category_id;
  var select = document.getElementById('sub_cate');
  select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          console.log("Sub-category data received:", data);
          if (data.data.length > 0) {
              data.data.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.sub_category_name;
                  option.value = row.sub_category_id;
                  select.appendChild(option);
              });
          } else {
              const option = document.createElement('option');
              option.textContent = 'No sub-categories available';
              option.disabled = true;
              select.appendChild(option);
          }
          // Call the callback function to indicate that sub-category options have been added
          if (typeof callback === 'function') {
              callback();
          }
      },
      error: function(error) {
          console.error('Error fetching sub-categories:', error);
      }
  });
}
category_main_1();