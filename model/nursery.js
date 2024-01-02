
 $(document).ready(function(){
  $('#btn_sb').click(store);
  $('#undate_btn').click(edit_data_id);
  nursery_data();
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
  
// for image
jQuery(document).ready(function () {
    ImgUpload();
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




//  **********data add**********
function store(event) {
  event.preventDefault();

  var image_names = document.getElementById('_image').files;
  var name = $('#name').val();
  var first_name = $('#fname').val();
  var last_name = $('#lname').val();
  var number = $('#number').val();
  var state = $('#state_').val();
  var district = $('#dist').val();
  var tehsil = $('#tehsil').val();
  var location = $('#loc').val();
  var description = $('#textarea_d').val();

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'nursery_data';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  for (var x = 0; x < image_names.length; x++) {
      data.append('images[]', image_names[x]);
  }

  data.append('nursery_name', name);
  data.append('first_name', first_name);
  data.append('last_name', last_name);
  data.append('mobile', number);
  data.append('state', state);
  data.append('district', district);
  data.append('tehsil', tehsil);
  data.append('address', location);
  data.append('description', description);

  $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      processData: false,
      contentType: false,
      success: function (result) {
          console.log('Success:', result);

          // Close the modal
          $('#staticBackdrop').modal('hide');

          // Clear form values
          $('#name, #fname, #lname, #number, #state_, #dist, #tehsil, #loc, #textarea_d, #_image').val('');

          // Reload the page (try without forcing a full reload)
          window.location.reload();

          alert('Successfully inserted!');
      },
      error: function (error) {
          console.error('Error:', error);

          alert('Error inserting data. See console for details.');
      }
  });
}


        // fetch data
  function nursery_data() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'nursery_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            // console.log(data);

            const tableBody = document.getElementById('data-table');

            if (data.nursery_data && data.nursery_data.length > 0) {
                // console.log(typeof product);

                data.nursery_data.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                  // console.log(tableRow, 'helloooo');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.nursery_name}</td>
                        <td>${row.mobile}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>
                            <div class="d-flex">
                            <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.product_id});" data-bs-toggle="modal" data-bs-target="#view_model_nursery" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data_nursery(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel" id="your_UniqueId">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                         </button>
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
// delete
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'nursery_data/' + id; // Change product_id to id
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
function openViewdata(userId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'nursery_data/' + userId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
  
    success: function(response) {
      var userData = response.nursery_data[0];
      console.log('ffdtydtrd',$('#nursery_name'),userData.nursery_name);
      document.getElementById('nursery_name').innerText=userData.nursery_name;
      document.getElementById('fname1').innerText=userData.first_name;
      document.getElementById('lname1').innerText=userData.last_name;
      document.getElementById('number1').innerText=userData.mobile;
      document.getElementById('state1').innerText=userData.state;
      document.getElementById('dist1').innerText=userData.district;
      document.getElementById('tehsil1').innerText=userData.tehsil;
      document.getElementById('loc1').innerText=userData.address;
      document.getElementById('textarea').innerText=userData.description;
      
      $("#selectedImagesContainer1").empty();

      if (userData.image_names) {
          var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
      
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/tyre_img/' + image_names.trim();
      
              var newCard = `
                  <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                      <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
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
      
      
        // $('#exampleModal').modal('show');
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}


// edit data 

function fetch_edit_data_nursery(id) {
  var apiBaseURL = APIBaseURL;
  var nursery_id= id;
  var url = apiBaseURL + 'nursery_data/' + nursery_id; 

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.nursery_data[0];

      $('#nursery_name2').val(userData.nursery_name);
      $('#fname2').val(userData.first_name);
      console.log(userData.first_name);
      $('#lname2').val(userData.last_name);
      $('#number2').val(userData.mobile);
      $('#state2').val(userData.state);
      $('#dist2').val(userData.district);
      $('#tehsil2').val(userData.tehsil);
      $('#loc2').val(userData.address);
      $('#textarea_d2').val(userData.description);
      $('#userId').val(userData.id);
      $("#selectedImagesContainer2").empty();

      if (userData.image_names) {
          var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
      
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/nursery_image/' + image_names.trim();
      
              var newCard = `
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow">
                          <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                              <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Tyre Image">
                          </a>
                      </div>
                  </div>
              `;
      
              // Append the new image element to the container
              $("#selectedImagesContainer2").append(newCard);
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

function edit_data_id(id){
  console.log(id);
  console.log('suman sahu');
  var edit_id = $("#userId").val();

   var nursery_name = $("#nursery_name2").val();
   console.log(nursery_name);
   var first_name = $("#fname2").val();
   var last_name = $("#lname2").val();
   var mobile = $("#number2").val();
   var state = $("#state2").val();
   var district = $("#dist2").val();
   var tehsil = $("#tehsil2").val();
   var address = $("#loc2").val();
   var description = $("#textarea_d2").val();
   var image_names = document.getElementById('_image2').files;

   var paraArr = {
    'nursery_name': nursery_name,
     'first_name': first_name,
     'last_name': last_name,
     'mobile': mobile,
     'state': state,
     'district': district,
     'tehsil': tehsil,
     'address': address,
     'description': description,
     'id': edit_id,
     'image_names': image_names,

     
 
   };
  
   var apiBaseURL = APIBaseURL;
   var url = apiBaseURL + 'nursery_data/'+ edit_id; 

   console.log(url); 
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
        //  get();
        // nursery_data();
        window.location.reload();
         console.log("updated successfully");
         alert('successfully updated..!')
       },
       error: function (error) {
         console.error('Error fetching data:', error);
       }
   })
 }