$(document).ready(function(){
    $('#update_button').click(edit_data_id);
    
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#narsary_list_form").validate({
      
      rules: {
          name: {
          required: true,
        },
        fname:{
          required: true,
        },
        lname:{
          required: true,
        },
        textarea_d:{
          required: true,
        },
        _image:{
          required: true,
        },
        number:{
          required:true, 
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
        loc: {
          required: true
        }
      },
  
      messages:{
          name: {
          required: "This field is required",
        },
        fname:{
          required: "This field is required",
        },
        lname: {
          required: "This field is required",
        },
        textarea_d: {
          required: "This field is required",
        },
        _image: {
          required: "This field is required",
        },
        number: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        state_: {
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        },
        loc: {
          required:"This field is required",
          }
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#btn_sb").on("click", function () {
    
        $("#narsary_list_form").valid();
      
      });
      
  
      });
      
      
      // fetch data
      function get_haatbzr() {
        console.log('iuytrewsdfgb');
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'dealer_data';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                // console.log(data);
    
                const tableBody = document.getElementById('data-table');
    
                if (data.dealer_details && data.dealer_details.length > 0) {
                    // console.log(typeof product);
    
                    data.dealer_details.forEach(row => {
                      
                    
                      const tableRow = document.createElement('tr');
                      console.log(tableRow, 'helloooo');

                        tableRow.innerHTML = `
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.dealer}</td>
                            <td>${row.dealer_name}</td>
                          
                            <td>${row.mobile}</td>
                            <td>${row.state}</td>
                            <td>${row.district}</td>
                            <td>
                                <div class="d-flex">
                                <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.id});" data-bs-toggle="modal" data-bs-target="#viewdatamodel" id="viewbtn">
                                <i class="fa fa-eye" style="font-size: 11px;"></i>
                                </button>
                                <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#data_for_edit" id="your_UniqueId">
                                <i class="fas fa-edit" style="font-size: 11px;"></i>
                             </button>
                                <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
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
        var url = apiBaseURL + 'dealer_data/' + id; // Change product_id to id
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
    var url = apiBaseURL + 'dealer_data/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.dealer_details[0];
        // console.log('ffdtydtrd',$('#dealer'),userData.nursery_name);
        document.getElementById('dealer').innerText=userData.dealer_name;
        document.getElementById('brand').innerText=userData.brand_name;
        document.getElementById('mob').innerText=userData.mobile;
        document.getElementById('email').innerText=userData.email;
        document.getElementById('state').innerText=userData.state;
        document.getElementById('dist').innerText=userData.district;
        document.getElementById('tehsil').innerText=userData.tehsil;
        document.getElementById('loc').innerText=userData.address;
       
        
        $("#selectedImagesContainer1").empty();
  
        if (userData.image_names) {
            var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
        
            imageNamesArray.forEach(function (image_names) {
                var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + image_names.trim();
        
                var newCard = `
                    <div class="col-12 col-lg-3 col-md-3 col-sm-3">
                        <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
                            <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                                <img class="img-fluid d-flex  w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                            </a>
                        </div>
                    </div>
                `;
        
                // Append the new image element to the container
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
        var url = apiBaseURL + 'dealer_data/' + userId;
      
        var headers = {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
      
        $.ajax({
          url: url,
          type: 'GET',
          headers: headers,
          success: function(response) {
            var userData = response.dealer_details[0];
            // $('#idUser').val(userData.id);
            $('#dealer_name1').val(userData.dealer_name);
            $('#brand_name1').val(userData.brand_name);
            $('#mobile_number').val(userData.mobile);
            $('#email1').val(userData.email);
            console.log(userData.email);
            $('#state').val(userData.state);
            $('#district').val(userData.district);
            $('#tehsil').val(userData.tehsil);
            $('#location').val(userData.address);
            
            // editUserId=userData.id;
      
      
            // $('#exampleModal').modal('show');
          },
          error: function(error) {
            console.error('Error fetching user data:', error);
          }
        });
      }
      
      
      
      function edit_data_id(){
    //    var edit_id = $("#idUser").val();
        var dealer_name = $("#dealer_name1").val();
        var brand_name = $("#brand_name1").val();
        var mobile = $("#mobile_number").val();
        var email = $("#email1").val();
        var state = $("#state").val();
        var district = $("#district").val();
        var tehsil = $("#tehsil").val();
        var location = $("#location").val();
        var paraArr = {
          'dealer_name': dealer_name,
          'brand_name': brand_name,
          'mobile': mobile,
          'email': email,
          'state': state,
          'district': district,
          'tehsil': tehsil,
          'address': location,
      
        };
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'dealer_data/' + 3;
      
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