$(document).ready(function(){
    $('#update_button').click(edit_data_id);
    
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#haatbazar_buyer").validate({
      
      rules: {
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
      
      
      // fetch data
      function get_haatbzr() {
        console.log('iuytrewsdfgb');
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                // console.log(data);
    
                const tableBody = document.getElementById('data-table');
    
                if (data.allData.haat_bazar_data && data.allData.haat_bazar_data.length > 0) {
                    // console.log(typeof product);
    
                    data.allData.haat_bazar_data.forEach(row => {
                      
                    
                      const tableRow = document.createElement('tr');
                      console.log(tableRow, 'helloooo');

                        tableRow.innerHTML = `
                            <td>${row.haat_bazar_id}</td>
                            <td>${row.category_name}</td>
                            <td>${row.sub_category_name}</td>
                            <td>${row.first_name}</td>
                            <td>${row.mobile}</td>
                            <td>${row.state}</td>
                            <td>${row.district}</td>
                            <td>
                                <div class="d-flex">
                                <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.haat_bazar_id});" data-bs-toggle="modal" data-bs-target="#viewdatamodel" id="viewbtn">
                                <i class="fa fa-eye" style="font-size: 11px;"></i>
                                </button>
                                <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data(${row.haat_bazar_id});" data-bs-toggle="modal" data-bs-target="#data_for_edit" id="your_UniqueId">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                             </button>
                                <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.haat_bazar_id});">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                              </button>
                                </div>
                            </td>
                        `;
                        tableBody.appendChild(tableRow);
                        console.log('suman sahu ');
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
    get_haatbzr();


    // Delete data
    function destroy(id) {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar/' + id; 
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
            window.location.reload();
            console.log("Delete request successful");
            // alert("Delete operation successful");
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
    var url = apiBaseURL + 'haat_bazar/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.allData.haat_bazar_data[0];
        document.getElementById('fname').innerText=userData.first_name;
        document.getElementById('lname').innerText=userData.last_name;
        document.getElementById('mob').innerText=userData.mobile;
        document.getElementById('state').innerText=userData.state;
        document.getElementById('dist').innerText=userData.district;
        document.getElementById('tehsil').innerText=userData.tehsil;
        document.getElementById('price1').innerText=userData.price;
       
        
        $("#selectedImagesContainer1").empty();
  
        if (userData.image_names) {
            var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
        
            imageNamesArray.forEach(function (image_names) {
                var imageUrl = 'http://tractor-api.divyaltech.com/uploads/haat_bazar_img/' + image_names.trim();
        
                var newCard = `
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                <img class="img-fluid d-flex  w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                            </a>
                        </div>
                    </div>
                `;
                
                $("#selectedImagesContainer1").append(newCard);
            });
        }
        
        
          // $('#exampleModal').modal('show');
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }




    //   Edit data
    function fetch_edit_data(userId) {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar/' + userId;
      
        var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
      
        $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function(response) {
            var userData = response.allData.haat_bazar_data[0];
            $('#username').val(userData.haat_bazar_id);
            $('#first_name1').val(userData.first_name);
            $('#last_name1').val(userData.last_name);
            $('#mobile_no').val(userData.mobile);
            $('#state_').val(userData.state);
            $('#district').val(userData.district);
            $('#tehsil').val(userData.tehsil);
            $('#price').val(userData.price);
            
            $("#selectedImagesContainer2").empty();
            if (userData.image_names) {
              var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
          
              imageNamesArray.forEach(function (image_names) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/haat_bazar_img/' + image_names.trim();
                  console.log(imageUrl);
          
                  var newCard = `
                      <div class="col-12 col-md-6 col-lg-4 mb-3">
                          <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
                              <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                  <img class="row img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                              </a>
                          </div>
                      </div>
                  `;
          
                  // Append the new image element to the container
                  $("#selectedImagesContainer2").append(newCard);
              });
          }
          },
          error: function(error) {
            console.error('Error fetching user data:', error);
          }
        });
      }
      
      
      
      function edit_data_id(){
       var edit_id = $("#idUser").val();
       var enquiry_type_id = $('#enquiry_type_id').val();
        var first_name = $("#first_name1").val();
        var last_name = $("#last_name1").val();
        var mobile = $("#mobile_no").val();
        var state = $("#state_").val();
        var district = $("#district").val();
        var tehsil = $("#tehsil").val();
        var price = $("#price").val();
        var paraArr = {
          'enquiry_type_id':enquiry_type_id,
          'first_name': first_name,
          'last_name': last_name,
          'mobile': mobile,
          'state': state,
          'district': district,
          'tehsil': tehsil,
          'price': price,
          'id': edit_id,
      
        };
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'haat_bazar/'+ edit_id;
      
        var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
        $.ajax({
          url: url,
            type: "PUT",
            data: paraArr,
            headers: headers,
            success: function (result) {
              console.log(result, "result");
              get();
              console.log("updated successfully");
              alert('successfully updated..!')
            },
            error: function (error) {
              console.error('Error fetching data:', error);
            }
        })
      }