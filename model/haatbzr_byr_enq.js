$(document).ready(function(){
  $('#Search').click(searchdata);
  $('#Reset').click(resetForm);
  ImgUpload();
    $('#update_button').click(edit_data_id);
    
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#haatbazar_buyer").validate({
      
      rules: {
        category: {
          required: true,
        },
        sub_category1: {
          required: true,
        },
        first_name: {
          required: true,
        },
        last_name:{
          required: true,
        },
        'files[]':{
          required: true,
        },
        mobile:{
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
        },
        price_name: {
          required: true
        }
      },
  
      messages:{
        category: {
          required: "This field is required",
        },
        sub_category1: {
          required: "This field is required",
        },
        first_name: {
          required: "This field is required",
        },
        last_name:{
          required: "This field is required",
        },
        'files[]': {
          required: "This field is required",
        },
        mobile: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        state: {
          required: "This field is required",
        },
        district: {
          required: "This field is required",
        },
        price_name: {
          required:"This field is required",
          }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#update_button").on("click", function () {
    
        $("#haatbazar_buyer").valid();
      
      });
      
    });
    function removeImage(ele){
      console.log("print ele");
        console.log(ele);
        let thisId=ele.id;
        thisId=thisId.split('closeId');
        thisId=thisId[1];
        $("#"+ele.id).remove();
        $(".upload__img-closeDy"+thisId).remove();
    
      }

 // fetch data
 function get_haatbzr() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_enquiry_for_haat_bazar';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = $('#example tbody');

          if (data.haatBazarData && data.haatBazarData.length > 0) {
              let tableData = [];
              let counter = 1;

              data.haatBazarData.reverse().forEach(row => { // Reverse the array to display latest data first
                  let action = `
                      <div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openView(${row.id});" data-bs-target="#viewdatamodel">
                          <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#data_for_edit" id="yourUniqueIdHere" style="padding:5px">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`;

                  tableData.push([
                      counter,
                      row.category_name,
                      row.sub_category_name,
                      row.first_name,
                      row.mobile,
                      row.state_name,
                      row.district_name,
                      action
                  ]);

                  counter++;
              });

              var dataTable = $('#example').DataTable();
              dataTable.clear().draw();
              dataTable.rows.add(tableData).draw();
          } else {
              tableBody.html('<tr><td colspan="9">No valid data available</td></tr>');
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

get_haatbzr();


// ****delete data***
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + id;
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

      // View data
function openView(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_for_haat_bazar_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.haatBazarData[0];
        document.getElementById('category').innerText=userData.category_name;
        document.getElementById('sub_category').innerText=userData.sub_category_name;
        document.getElementById('fname').innerText=userData.first_name;
        document.getElementById('lname').innerText=userData.last_name;
        document.getElementById('mob').innerText=userData.mobile;
        document.getElementById('state').innerText=userData.state_name;
        document.getElementById('dist').innerText=userData.district_name;
        document.getElementById('tehsil').innerText=userData.tehsil_name;
        document.getElementById('price1').innerText=userData.price;
       
        
        // $("#selectedImagesContainer1").empty();
  
        // if (userData.image_names) {
        //     var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
        
        //     imageNamesArray.forEach(function (image_names) {
        //         var imageUrl = 'http://tractor-api.divyaltech.com/uploads/haat_bazar_img/' + image_names.trim();
        
        //         var newCard = `
        //             <div class="col-12 col-lg-3 col-md-3 col-sm-3">
        //                 <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
        //                     <a class="weblink text-decoration-none text-dark" title="Tyre Image">
        //                         <img class="img-fluid d-flex  w-100 h-100" src="${imageUrl}" alt="Tyre Image">
        //                     </a>
        //                 </div>
        //             </div>
        //         `;
                
        //         $("#selectedImagesContainer1").append(newCard);
        //     });
        // }
        
        
          // $('#exampleModal').modal('show');
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }


  function fetch_edit_data(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_for_haat_bazar_by_id/' + userId;

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function(response) {
            var userData = response.haatBazarData[0];
            $('#userId').val(userData.haat_bazar_id);
            $('#username').val(userData.haat_bazar_id);
            $('#first_name1').val(userData.first_name);
            $('#last_name1').val(userData.last_name);
            $('#mobile_no').val(userData.mobile);
            $('#price').val(userData.price);
           
       
            console.log("User Data:", userData);

            // Set category value
            var categoryDropdown = document.getElementById('category1');
            for (var i = 0; i < categoryDropdown.options.length; i++) {
                if (categoryDropdown.options[i].text === userData.category_name) {
                    categoryDropdown.selectedIndex = i;
                    break;
                }
            }

            // Call function to populate sub-category based on the selected category
            console.log("User Category ID:", userData.category_id);
            get_sub_category_1(userData.category_id, function() {
                // Set sub-category value
                var subCategoryDropdown = document.getElementById('sub_category1');
                console.log("Sub Categories:", subCategoryDropdown.options);
                for (var i = 0; i < subCategoryDropdown.options.length; i++) {
                    if (subCategoryDropdown.options[i].text === userData.sub_category_name) {
                        subCategoryDropdown.selectedIndex = i;
                        break;
                    }
                }
            });
            setSelectedOption('state_', userData.state_id);
            setSelectedOption('district_1', userData.district_id);
            
            // Call function to populate tehsil dropdown based on selected district
            populateTehsil(userData.district_id, 'tehsil-dropdown', userData.tehsil_id);
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
  
      function edit_data_id(edit_id) {
        console.log(edit_id);
        var edit_id = $("#userId").val();
        console.log(edit_id);
        var image_names = document.getElementById('image_pic').files;
        var enquiry_type_id = $("#enquiry_type_id").val();
        console.log(enquiry_type_id);
        var category = $('#category1').val();
        var sub_category = $('#sub_category1').val();
        var first_name = $('#first_name1').val();
        var last_name = $('#last_name1').val();
        var mobile = $('#mobile_no').val();
        var state = $('#state_').val();
        var district = $('#district_1').val();
        var tehsil = $('#tehsil_1').val();
        var price = $('#price').val();

        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar/' + edit_id;
        var token = localStorage.getItem('token');
        var _method = 'put';
        var headers = {
            'Authorization': 'Bearer ' + token
        };
      
        var data = new FormData();
      
        for (var x = 0; x < image_names.length; x++) {
            data.append('images[]', image_names[x]);
        }
        data.append('_method', _method);
        data.append('id',edit_id)
        data.append('enquiry_type_id', enquiry_type_id);
        data.append('category_name', category);
        data.append('sub_category_name', sub_category);
        data.append('first_name', first_name);
        data.append('last_name', last_name);
        data.append('mobile', mobile);
        data.append('state', state);
        data.append('district', district);
        data.append('tehsil', tehsil);
        data.append('price', price);
        data.append('id', edit_id);
        $.ajax({
          url: url,
          type: "POST",
          data: data,
          headers: headers,
          processData: false,
          contentType: false,
           success: function (result) {
             console.log(result, "result");
             get_haatbzr();
            // nursery_data();
            // window.location.reload();
             console.log("updated successfully");
             alert('successfully updated..!')
           },
           error: function (error) {
             console.error('Error fetching data:', error);
           }
        });
    }


  
  // image script 
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];

    $('.upload__inputfile').on('change', function (e) {
        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;

        filesArr.forEach(function (f, index) {
            if (!f.type.match('image.*')) {
                return;
            }

            if (imgArray.length >= maxLength) {
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
        });
    });

    $('.upload__img-wrap').on('click', ".upload__img-close", function (e) {
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

// function get_category() {
//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'haat_bazar_category';
//   $.ajax({
//       url: url,
//       type: "GET",
//       headers: {
//           'Authorization': 'Bearer ' + localStorage.getItem('token')
//       },
//       success: function (data) {
//           const select = document.getElementById('category1');
//           select.innerHTML = '<option selected disabled value="">Please select an option</option>';

//           if (data.allCategory.length > 0) {
//               data.allCategory.forEach(row => {
//                   const option = document.createElement('option');
//                   option.textContent = row.category_name;
//                   option.value = row.id;
//                   select.appendChild(option);
//               });
//           } else {
//               select.innerHTML = '<option>No valid data available</option>';
//           }
//       },
//       error: function (error) {
//           console.error('Error fetching data:', error);
//       }
//   });
// }
// get_category();


function searchdata() {
  var category = $('#cc_category').val();
  var sub_category = $('#ss_sub_cate').val();
  var state = $('#state_1').val();
  var district = $('#dist_district').val();

  console.log("Category:", category);
  console.log("Sub-Category:", sub_category);
  console.log("State:", state);
  console.log("District:", district);

  var paraArr = {
      'category_id': category,
      'sub_category_id': sub_category,
      'state': state,
      'district': district,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_haat_bazar_enquiry';

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
      error: function(error) {
          console.error('Error searching for brands:', error);
      }
  });
}

function updateTable(data) {
  const tableBody = $('#data-table');
  tableBody.empty();
  let counter = 1;

  if (data.haatBazarData && data.haatBazarData.length > 0) {
      let tableData = [];
      data.haatBazarData.forEach(row => {
          // const fullName = row.first_name + ' ' + row.last_name;
          let action = `
          <div class="d-flex">
              <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openView(${row.id});" data-bs-target="#viewdatamodel">
              <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
              <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#data_for_edit" id="yourUniqueIdHere" style="padding:5px">
                <i class="fas fa-edit" style="font-size: 11px;"></i>
              </button>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px">
                <i class="fa fa-trash" style="font-size: 11px;"></i>
              </button>
          </div>`;
          tableData.push([
            counter,
            row.category_name,
            row.sub_category_name,
            row.first_name,
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
            { title: 'Sub-Category' },
            { title: 'Name' },
            { title: 'Phone Number' },
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
  $("#state_1").val("");
  $("#dist_district").val("");
  window.location.reload();
};



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
                  option.value = row.id;
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
          const select = document.getElementById('category1');
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
  var select = document.getElementById('sub_category1');
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
                  option.value = row.id;
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