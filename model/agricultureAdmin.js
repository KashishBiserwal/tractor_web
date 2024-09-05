var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function(){
    ImgUpload();
    $('#submitbtn').click(store);
    $('#submitbtn_edit').click(edit_data_id);
    
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
        return /^[6-9]\d{9}$/.test(value); 
      }, "Phone number must start with 6 or above");
    $('#Agriculture_college_form').validate({

        rules:{
            cname:{
                required: true,
            },
            state:{
                required: true,
            },
            district:{
                required: true,
            },
            Mobile:{
                required: true,
                maxlength:10,
                digits: true,
                customPhoneNumber: true
            }
        },
        messages:{
            cname: {
                required: "This field is required",
              },
              state: {
                required: "This field is required",
              },
              district: {
                required: "This field is required",
              },
              Mobile:{
                required:"This field is required",
                maxlength:"Enter only 10 digits",
                digits: "Please enter only digits"
              }
        }
    })
    $("#submitbtn").on("click", function () {
        $("#Agriculture_college_form").valid();
      });
})

var removedImages = [];
var removedImageFiles = [];
var imageuploadstatus = false;
var imgUploaded=[];
function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];
  $('.upload__inputfile').each(function () {
    console.log("ding dong")
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
            imgUploaded.push(f);
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
      initialImagesCount++; 
      initialimgDivlength++;
      console.log(initialImagesCount, 'when an image is added');
    });
  });
    

  $('body').on('click', ".upload__img-close", function (e) {
    var filename = $(this).parent().data("file");
    var file = new File([null], filename);
    console.log(file,'imagefile',imgArray.length);
        imgArray.splice(1);
        removedImages.push(file); 
    console.log('removedImages-', removedImages, removedImages.length)
    $(this).parent().parent().remove();
    initialimgDivlength = $('.brand-main').length; 
    imageuploadstatus = false;
  });
  var initialiamge = $('.brand-main').length; 
  initialImagesCount = initialiamge;
  imageuploadstatus = true;
}


var fetchdataImage = [];
function removeImage(ele, imagename) {
  console.log('ele',ele,fetchdataImage,imagename);
  initialImagesCount--;
  if(imagename !=''){
    removedImages.push(imagename); 
      var index = fetchdataImage.indexOf(imagename);
      if (index !== -1) {
          fetchdataImage.splice(index, 1);
      }
  }
  console.log('removedImageFiles-',removedImages, fetchdataImage)
  if(removedImages.length > 0){
    imageuploadstatus = false;
  }
  $(ele).closest('.col-12').remove(); 
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

  function agr_clg_data() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'agriculture_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
            let tableData = [];

            if (data.colleges_data && data.colleges_data.length > 0) {
                // Reverse the data array to show the latest added data at the top
                data.colleges_data.reverse().forEach(row => {
                    let action = `<div class="d-flex">
                        <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#agr_clg_view" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_Agrclg(${row.id})" data-bs-toggle="modal" data-bs-target="#Edit_Agr_college" id="your_UniqueId">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                    </div>`;

                    // Push row data as an array into the tableData
                    tableData.push([
                        serialNumber,
                        formatDateTime(row.created_at),
                        row.college_name,
                        row.mobile,
                        row.state_name,
                        row.district_name,
                        action
                    ]);

                    serialNumber++;
                });

                // Initialize DataTable after preparing the tableData
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.'},
                        { title: 'Date/Time'},
                        { title: 'College Name'},
                        { title: 'Mobile'},
                        { title: 'State'},
                        { title: 'District'},
                        { title: 'Action', orderable: false } // Disable ordering for Action column
                    ],
                    paging: true,
                    searching: false,
                    // ... other options ...
                });

            } else {
                tableBody.innerHTML = '<tr><td colspan="6">No valid data available</td></tr>';
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

agr_clg_data();
    function store(event) {
        event.preventDefault();
       
        // var EditIdmain_ = $('#EditIdmain_').val();
        var college_name = $('#cname').val();
        var mobile = $('#Mobile').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
        var image_names = document.getElementById('f_file').files;

        var _method = 'POST';
        var url, method;
      
        var apiBaseURL =APIBaseURL;
        var token = localStorage.getItem('token');
        var headers = {
         'Authorization': 'Bearer ' + token
        };
        if (EditIdmain_!="null" && EditIdmain_!="") {
            _method = 'put';
             url = apiBaseURL + 'agriculture_data/' + EditIdmain_ ;
             console.log(url);
             method = 'POST'; 
        } else {
            url = apiBaseURL + 'agriculture_data';
            method = 'POST';
        }
        var data = new FormData();
      
        for (var x = 0; x < image_names.length; x++) {
          data.append('images[]', image_names[x]);
      }
            // data.append('id',EditIdmain_);
            // data.append('_method',_method);
            data.append('college_name', college_name);
            data.append('mobile', mobile);
            data.append('state',state);
            data.append('district',district);
            data.append('tehsil',tehsil);
  
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
            // old_farm_implement();
            // window.location.reload();
            },
            error: function (error) {
            console.error('Error fetching data:', error);
            }
        });
    }

// View data
    function openViewdata(Id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'agriculture_data/' + Id;
    
      var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
      };
    
      $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
      
        success: function(response) {
          var userData = response.colleges_data[0];
          document.getElementById('agr_clg').innerText=userData.college_name;
          document.getElementById('mob_nub').innerText=userData.mobile;
          document.getElementById('state_2').innerText=userData.state_name;
          document.getElementById('district_2').innerText=userData.district_name;
          document.getElementById('tehsil2').innerText=userData.tehsil_name;
          document.getElementById('date_1').innerText=formatDateTime(userData.created_at);
          
          $("#selectedImagesContainer1").empty();
    
          if (userData.image_names) {
              var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
          
              imageNamesArray.forEach(function (image_names) {
                  var imageUrl = 'http://tractor-api.divyaltech.com/uploads/agricultureclg_img/' + image_names.trim();
          
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
    

var initialImagesCount;
var initialimgDivlength;
function fetch_edit_data_Agrclg(id) {
  var apiBaseURL = APIBaseURL;
  var clg_id = id;
  var url = apiBaseURL + 'agriculture_data/' + clg_id; 

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.colleges_data[0];
      $('#userId').val(userData.id);
      $('#cname_edit').val(userData.college_name);
      $('#Mobile_edit').val(userData.mobile);
  
      setSelectedOption('state_', userData.state_id);
      setSelectedOption('district_', userData.district_id);
      // Call function to populate tehsil dropdown based on selected district
      populateTehsil(userData.district_id, 'tehsil-dropdown1', userData.tehsil_id);
     
      $("#selectedImagesContainer2").empty();

      if (userData.image_names) {
        var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
        var countclass = 0;
        fetchdataImage = imageNamesArray
        imageNamesArray.forEach(function(image_name) {
          var imageUrl = 'http://tractor-api.divyaltech.com/uploads/agricultureclg_img/' + image_name.trim();
          console.log('imageUrl',imageUrl);
          countclass++;
          var newCard = `
          <div class="col-12 col-md-6 col-lg-4 position-relative">
          <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this, '${image_name.trim().replace(/'/g, "\\'")}');"></div>
              <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                  <a class="weblink text-decoration-none text-dark" title="Tyre Image">
                    <img class="img-fluid w-100 h-100" id="img_url" src="${imageUrl}" alt="Tyre Image">
                  </a>
              </div>
          </div>
          `;
          $("#selectedImagesContainer2").append(newCard);
        });
      }
      var initialiamge = $('.brand-main').length; 
      initialImagesCount = initialiamge;
      initialimgDivlength = initialiamge;
      console.log(initialImagesCount,'initialimagelengh');
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


function edit_data_id(id) {
  var edit_id = $("#userId").val();
  var college_name = $("#cname_edit").val();
  var mobile = $('#Mobile_edit').val();
  var state = $('#state_').val();
  var district = $('#district_').val();
  var tehsil = $('#tehsil_').val();

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'agriculture_data/' + edit_id;
  var token = localStorage.getItem('token');
  var _method = 'put';
  var headers = {
    'Authorization': 'Bearer ' + token
  };

  var data = new FormData();

  data.append('_method', _method);
  data.append('id', edit_id);
  data.append('college_name', college_name);
  data.append('mobile', mobile);
  data.append('state', state);
  data.append('district', district);
  data.append('tehsil', tehsil);


  var remainingImagesCount;
  if(removedImages.length ==0){
    remainingImagesCount =0;
  }
  else{
    remainingImagesCount = $('.brand-main').length; 
  }


  if(fetchdataImage.length>0 && removedImages.length>0 && imgUploaded.length==0){
    for(i=0;i<removedImages.length; i++){
      var imageName = removedImages[i];
      var file = new File([null], imageName);
      data.append('images[]',  file);
    }
    data.append('flag', 'deleteimage');
  }
  else if(fetchdataImage.length==0 && removedImages.length>0 && imgUploaded.length==0){
    data.append('flag', 'noimg');
  }
  else if(fetchdataImage.length==0 && removedImages.length==0 && imgUploaded.length>0){
    for(i=0;i<imgUploaded.length; i++){
      console.log(' imgUploaded[i]-', imgUploaded[i])
      data.append('images[]',  imgUploaded[i]);
    }
  }
  else if(fetchdataImage.length>0 && removedImages.length==0 && imgUploaded.length>0){
    for(i=0;i<imgUploaded.length; i++){
      console.log(' imgUploaded[i]-', imgUploaded[i])
      data.append('images[]',  imgUploaded[i]);
    }
  }
  else if(fetchdataImage.length==0 && removedImages.length>0 && imgUploaded.length>0){
    for(i=0;i<imgUploaded.length; i++){
      data.append('images[]',  imgUploaded[i]);
    }
    for(i=0;i<removedImages.length; i++){
      var imageName = removedImages[i];
      var file = new File([null], imageName);
      data.append('remimages[]',  file);
    }
    data.append('flag', 'newimguploaded');
  }
  else if(fetchdataImage.length>0 && removedImages.length>0 && imgUploaded.length>0){
    for(i=0;i<removedImages.length; i++){
      var imageName = removedImages[i];
      var file = new File([null], imageName);
      data.append('remimages[]',  file);
    }
    for(i=0;i<imgUploaded.length; i++){
      data.append('images[]',  imgUploaded[i]);
    }
    data.append('flag', 'newimguploaded');
  }
  $.ajax({
    url: url,
    type: "POST",
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function(result) {
      console.log(result, "result");
      alert('successfully updated..!');
      removedImages=[];
      fetchdataImage=[];
      imgUploaded=[];
      window.location.reload();
    },
    error: function(error) {
      console.error('Error fetching data:', error);
    }
  });

}


function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'agriculture_data/' + id; // Change product_id to id
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

function searchdata() {
  var college_name = $('#cpllege_name').val();
  var state = $('#state2').val();
  var district = $('#district2').val();
  
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_agriculture_clg';
  var token = localStorage.getItem('token');

  var headers = {
      'Authorization': 'Bearer ' + token
  };

  var data = {
      'college_name': college_name,
      'state': state,
      'district': district
  };

  $.ajax({
      url: url,
      type: "POST",
      data: data,
      headers: headers,
      success: function (response) {
          console.log('Success:', response);
          const tableBody = document.getElementById('data-table');
          let serialNumber = 1;

          if (response.college_data && response.college_data.length > 0) {
              let tableData = response.college_data.map(row => {
                  let action = `<div class="d-flex">
                  <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#agr_clg_view" id="viewbtn">
                      <i class="fa fa-eye" style="font-size: 11px;"></i>
                  </button>
                  <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data_Agrclg(${row.id})" data-bs-toggle="modal" data-bs-target="#Edit_Agr_college" id="your_UniqueId">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                  </button>
                  <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
                      <i class="fa fa-trash" style="font-size: 11px;"></i>
                  </button>
              </div>`;

                  return [
                    serialNumber,
                    formatDateTime(row.created_at),
                    row.college_name,
                    row.mobile,
                    row.state_name,
                    row.district_name,
                    action
                  ];
              });

              // Initialize DataTable after preparing the tableData
              $('#example').DataTable().destroy();
              $('#example').DataTable({
                  data: tableData,
                  columns: [
                    { title: 'S.No.'},
                    { title: 'Date/Time'},
                    { title: 'College Name'},
                    { title: 'Mobile'},
                    { title: 'State'},
                    { title: 'District'},
                    { title: 'Action', orderable: false } // Disable ordering for Action column
                  ],
                  paging: true,
                  searching: false,
                  // ... other options ...
              });
          } else {
              tableBody.innerHTML = '<tr><td colspan="6">No valid data available</td></tr>';
          }
      },
      error: function (xhr, status, error) {
        const tableBody = $('#data-table');
        if (xhr.status === 400) {
          tableBody.html('<tr><td colspan="7">No valid data available</td></tr>');
        } else {
          console.error('Error searching for brands:', error);
          tableBody.html('<tr><td colspan="7">Error fetching data</td></tr>');
        }
      }
  });
}


function resetform(){
  $('#cpllege_name').val('');
  $('#state2').val('');
  $('#district2').val('');
  agr_clg_data();
}