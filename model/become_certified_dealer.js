$(document).ready(function () {
    // get('brand1');
      $('#subbtn_').click(edit_data_id);
      $('#Search').click(search_data);
      $('#Reset').click(reset);
      ImgUpload();
      $("#dealer_list_form").validate({
      
        rules: {
          dname: {
            required: true,
          },
          brand: {
            required: true,
          },
          email:{
            required:true,
           email:true
          },
          cno:{
              required:true,
              maxlength:10,
              digits: true,
              customPhoneNumber: true
          },
          address:{
            required:true,
          //   digits: true,
  
          },
          state_:{
            required: true,
          },
          dist: {
            required: true,
          }
        },
    
        messages: {
          dname: {
            required: "This field is required",
          },
          brand: {
            required: "This field is required",
          },
        
          email:{
            required:"This field is required",
            email:"Please Enter vaild Email",
          },
           cno:{
            required:"This field is required",
            maxlength:"Enter only 10 digits",
            digits: "Please enter only  digits"
          },
          address:{
            required:"This field is required",
          //   digits: "Please enter only digits"
          },
          state_:{
            required: "This field is required",
          },
          dist: {
            required: "This field is required",
          }
        },
        
        submitHandler: function (form) {
          alert("Form submitted successfully!");
        },
      });
  
      $('#add_trac').on('click', function() {
        get('brand');
      });
      $("#subbtn_").on("click", function () {
     
        $("#dealer_list_form").valid();
    
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
    // var apiBaseURL = APIBaseURL;
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_for_finance';
  
    $.ajax({
      url: url,
      type: "GET",
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
        console.log(data);
  
        const select = $('#brand');
        select.empty(); // Clear existing options
  
        // Add a default option
        select.append('<option selected disabled value="">Please select Brand</option>');
  
        // Use an object to keep track of unique brands
        var uniqueBrands = {};
  
        $.each(data.brands, function (index, brand) {
          var brand_id = brand.id;
          var brand_name = brand.brand_name;
  
          // Check if the brand ID is not already in the object
          if (!uniqueBrands[brand_id]) {
            // Add brand ID to the object
            uniqueBrands[brand_id] = true;
  
            // Append the option to the dropdown
            select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
          }
        });
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }
  get();

//****get data***
function get_dealers() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_become_dealer_enquiry_data';
  console.log('dfghjkiuytgf');
  
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          const tableBody = $('#data-table');
          tableBody.empty();

          if (data.become_dealer_enquiry_details && data.become_dealer_enquiry_details.length > 0) {
              // Reverse the array to display latest data at the top
              data.become_dealer_enquiry_details.reverse();

              var table = $('#example').DataTable({
                  paging: true,
                  searching: true,
                  columns: [
                      { title: 'S.No.' },
                      { title: 'Date' },
                      { title: 'Dealer Name' },
                      { title: 'Brand Name' },
                      { title: 'Mobile' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false }
                  ]
              });

              let serialNumber = 1;

              data.become_dealer_enquiry_details.forEach(row => {
                  table.row.add([
                      serialNumber,
                      row.date,
                      row.dealer_name,
                      row.brand_name,
                      row.mobile,
                      row.state_name,
                      row.district_name,
                      `<div class="d-flex">
                          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealers">
                              <i class="fas fa-eye" style="font-size: 11px;"></i>
                          </button> 
                          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </button>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                      </div>`
                  ]).draw(false);

                  serialNumber++;
              });
          } else {
              tableBody.html('<tr><td colspan="6">No valid data available</td></tr>');
          }
      },
      error: function (error) {
          console.error('Error fetching data:', error);
          if(error.status == '401' && error.responseJSON.error == 'Token expired or invalid'){
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
            window.location.href = baseUrl + "login.php"; 

          }
      }
  });
}

get_dealers();


    // View data
function openViewdatacertifed(userId) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_become_dealer_enquiry_data_by_id/' + userId;
     
      var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
  
      $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function(response) {
              var userData = response.become_dealer_enquiry_details[0];
  
              document.getElementById('dealer_name').innerText = userData.dealer_name;
              document.getElementById('brand_nmae').innerText = userData.brand_name;
              document.getElementById('email_id').innerText = userData.email;
              document.getElementById('contact').innerText = userData.mobile;
              document.getElementById('addrss_1').innerText = userData.message;
              document.getElementById('date').innerText = userData.date;
              document.getElementById('state').innerText = userData.state_name;
              document.getElementById('district').innerText = userData.district_name;
              document.getElementById('tehsil_').innerText = userData.tehsil_name;
              $("#selectedImagesContainer1").empty();
  
              if (userData.image_names) {
                  var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
  
                  var countclass = 0;
                  imageNamesArray.forEach(function(image_names) {
                      var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealer_img/' + image_names.trim();
                      countclass++;
                      var newCard = `
                          <div class="col-12 col-md-3 col-lg-3 col-sm-3 position-relative">
                              <div class="upload__img-close_button" id="closeId${countclass}"></div>
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
          error: function(error) {
              console.error('Error fetching data:', error);
          }
      });
}
  



// edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_become_dealer_enquiry_data_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function(response) {
          var userData = response.become_dealer_enquiry_details[0];
          console.log(response);
          $('#userId').val(userData.id);
          $('#dname').val(userData.dealer_name);
          $('#email').val(userData.email);
          $('#cno').val(userData.mobile);
          $('#address').val(userData.message);

          // Set brand dropdown
          var brandName = userData.brand_name.trim(); // Remove whitespace
          var brandDropdown = $('#brand');
          var brandOption = brandDropdown.find('option').filter(function() {
              return $(this).text().trim() === brandName; // Case-insensitive match
          });
          if (brandOption.length > 0) {
              brandDropdown.val(brandOption.val());
          } else {
              console.error('Brand name not found in dropdown options:', brandName);
          }

          setSelectedOption('state_', userData.state_id);
          setSelectedOption('dist_', userData.district_id);

          // Call function to populate tehsil dropdown based on selected district
          populateTehsil(userData.district_id, 'tehsil-dropdown', userData.tehsil_id);

          // Clear existing images
          $("#selectedImagesContainer").empty();

          if (userData.image_names) {
              // Check if userData.image_names is an array
              var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
              var countclass = 0;
              imageNamesArray.forEach(function(imageName) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealer_img/' + imageName.trim();
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
          console.error('Error fetching user Data:', error);
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

function populateTehsil(selectId, value, selectedTehsilId) {
  var select = document.getElementById(selectId);
  for (var i = 0; i < select.options.length; i++) {
      if (select.options[i].value == selectedTehsilId) {
          select.options[i].selected = true;
          break;
      }
  }
}

 
function edit_data_id() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var edit_id = $("#userId").val();
  var dealer_name = $('#dname').val();
  var brand = $('#brand').val();
  var email = $('#email').val();
  var cno = $('#cno').val();
  var address = $('#address').val();
  var state = $('#state_').val();
  var district = $('#dist_').val();
  var tehsil = $('#tehsil_1').val();
  var image = document.getElementById('_image').files;
  var _method = 'put';

  var data = new FormData();
  for (var x = 0; x < image.length; x++) {
      data.append("dealer_img[]", image[x]);
  }

  // Append other data fields to FormData
  data.append('brand_id', brand);
  data.append('dealer_name', dealer_name);
  data.append('message', address);
  data.append('mobile', cno);
  data.append('email', email);
  data.append('state', state);
  data.append('district', district);
  data.append('tehsil', tehsil);
  data.append('id', edit_id);
  data.append('enquiry_type_id', enquiry_type_id);
  data.append('_method', _method);

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + edit_id;

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: "POST",
    data: data, // Use FormData object with image data and other fields
    headers: headers,
    contentType: false,
    processData: false,
    success: function (result) {
        console.log(result, "result");
        console.log("updated successfully");
        alert('successfully updated..!');
        // window.location.reload();
        $('#staticBackdrop').modal('hide'); 
    },
    error: function (error) {
        console.error('Error fetching data:', error);
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
          console.log("Delete request successful");
          // Remove the deleted row from the data table
          $('#row_' + id).remove(); // Assuming each row has an ID like "row_123" where 123 is the id of the deleted row
          alert("Delete operation successful");
          window.location.reload();
      },
      error: function(xhr, status, error) {
          console.error('Error during delete operation:', error);
          // Display the error message from the server, if available
          var errorMessage = xhr.responseText || 'Error during delete operation';
          alert(errorMessage);
      }
  });
}

populateStateDropdown('state_select', 'district_select');

  
function search_data() {
    console.log("dfghsfg,sdfgdfg");
    var state = $('#state_state_1').val();
    var district = $('#district_1').val();
  
    var paraArr = {
     
      'state':state,
      'district':district,
     
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_become_dealer_enquiry';
    $.ajax({
        url:url, 
        type: 'POST',
        data: paraArr,
      
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
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
  };
  function updateTable(data) {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = '';
    let serialNumber = 1; 
    if(data.dealerData && data.dealerData.length > 0) {
        let tableData = []; 
        data.dealerData.forEach(row => {
        //   const fullName = row.first_name + ' ' + row.last_name;
            let action =      `<div class="d-flex">
            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealers">
                <i class="fas fa-eye" style="font-size: 11px;"></i>
            </button> 
            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                <i class="fas fa-edit" style="font-size: 11px;"></i>
            </button>
            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                <i class="fa fa-trash" style="font-size: 11px;"></i>
            </button>
        </div>`
       
            tableData.push([
              serialNumber,
              row.date,
              row.dealer_name,
              row.brand_name,
              row.mobile,
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
            { title: 'Dealer Name' },
            { title: 'Brand Name' },
            { title: 'Mobile' },
            { title: 'State' },
            { title: 'District' },
            { title: 'Action', orderable: false }
          ],
          paging: true,
          searching: true,
          // ... other options ...
      });
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
  }
  

  function reset() {
    // $("#dealers_1").val("");
    $("#state_state_1").val("");
    $("#district_1").val("");
    window.location.reload();
    // get_dealers(); // Call get_dealers() function to reload the original table data
};


