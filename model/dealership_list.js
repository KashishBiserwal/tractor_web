var EditIdmain_ = "";
var editId_state= false;
$(document).ready(function () {
    $('#subbtn_').click(add_dealership);
    ImgUpload();
    jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
      return /^[6-9]\d{9}$/.test(value); 
    }, "Phone number must start with 6 or above");
    $("#dealer_list_form").validate({
    
      rules: {
        dname: {
          required: true,
        },
        brand: {
          required: true,
        },
        cno:{
          required:true, 
          maxlength:10,
          digits: true,
          customPhoneNumber: true
        },
        address:{
          required:true,
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
         cno:{
          required:"This field is required",
        maxlength:"Enter only 10 digits",
        digits: "Please enter only digits"
        },
        address:{
          required:"This field is required",
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
      let thisId=ele.id;
      thisId=thisId.split('closeId');
      thisId=thisId[1];
      $("#"+ele.id).remove();
      $(".upload__img-closeDy"+thisId).remove();
    }
    function get(selectId) {
      var apiBaseURL =APIBaseURL;
      var url = apiBaseURL + 'getBrands';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              const select = document.getElementById(selectId);
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';
              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML ='<option>No valid data available</option>';
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error;
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
    }
get('brand');

function add_dealership(event) {
    event.preventDefault();
    var image_names = document.getElementById('_image').files;
    var dealer_name = $('#dname').val();
    var brand = $('#brand').val();
    var email = $('#email').val();
    var cno = $('#cno').val();
    var address = $('#address').val();
    var state = $('#state_').val();
    var district = $('#dist').val();
    var tehsil = $('#tehsil').val();
    var apiBaseURL = APIBaseURL;
    var token = localStorage.getItem('token');
    var headers = {
        'Authorization': 'Bearer ' + token
    };
    var urlParams = new URLSearchParams(window.location.search);
    var editId = urlParams.get('id');
    var _method = 'post'; 
    var url, method;
    if (editId_state) {
        _method = 'put';
        url = apiBaseURL + 'dealer_data/' + EditIdmain_ ;
        method = 'POST'; 
    } else {
        // Add mode
        url = apiBaseURL + 'dealer_data';
        method = 'POST';
    }
    var data = new FormData();
    for (var x = 0; x < image_names.length; x++) {
        data.append("images[]", image_names[x]);
    }
    data.append('_method', _method);
    data.append('dealer_name', dealer_name);
    data.append('brand_id', brand);
    data.append('email', email);
    data.append('mobile', cno);
    data.append('address', address);
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
            alert("successfully Inserted..!")
            window.location.reload();
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
}

// get dealers
function get_dealers() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'dealer_data';
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

          if (data.dealer_details && data.dealer_details.length > 0) {
              data.dealer_details.reverse();

              data.dealer_details.forEach(row => {
                  let action = ` <div class="d-flex">
                  <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_dealers" style="padding:5px;">
                  <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                      <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px;">
                          <i class="fas fa-edit" style="font-size: 11px;"></i>
                      </button>
                      <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px;">
                          <i class="fa fa-trash" style="font-size: 11px;"></i>
                      </button>
                  </div>`;

                  tableData.push([
                      serialNumber,
                      row.date,
                      row.brand_name,
                      row.dealer_name,
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
                      { title: 'Dealer Name' },
                      { title: 'State' },
                      { title: 'District' },
                      { title: 'Action', orderable: false } 
                  ],
                  paging: true,
                  searching: false,
              });
          } else {
              tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
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

function destroy(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + id;
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
        window.location.reload();
        get_dealers();
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }

  // for View
  function fetch_data(id) {
    var urlParams = new URLSearchParams(window.location.search);
    var productId = id;
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + productId;
    var headers = { 
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        success: function (data) {
          document.getElementById('dealer_name').innerText = data.dealer_details[0].dealer_name;
          document.getElementById('brand_nmae').innerText = data.dealer_details[0].brand_name;
          document.getElementById('email_id').innerText = data.dealer_details[0].email;
          document.getElementById('contact').innerText = data.dealer_details[0].mobile;
          document.getElementById('state').innerText =data.dealer_details[0].state_name;
          document.getElementById('district').innerText = data.dealer_details[0].district_name;
          document.getElementById('tehsil_').innerText = data.dealer_details[0].tehsil_name;
          document.getElementById('addrss').innerText = data.dealer_details[0].address;
          $("#selectedImagesContainer1").empty();
      
          if (data.dealer_details[0].image_names) {
              var imageNamesArray = Array.isArray(data.dealer_details[0].image_names) ? data.dealer_details[0].image_names : data.dealer_details[0].image_names.split(',');
      
              imageNamesArray.forEach(function (imageName) {
                  var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/dealer_img/' + imageName.trim();
      
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

  function fetch_edit_data(id) {
    get('brand');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'dealer_data/' + id;
    editId_state= true;
    EditIdmain_= id;
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.dealer_details[0];
            $('#dname').val(Data.dealer_name);
            $('#email').val(Data.email);
            $('#cno').val(Data.mobile);
            $('#address').val(Data.address);
            setTimeout(function () {
              var brandDropdown = document.getElementById('brand');
              for (var i = 0; i < brandDropdown.options.length; i++) {
                  if (brandDropdown.options[i].text === Data.brand_name) {
                      brandDropdown.selectedIndex = i;
                      break;
                  }
              }
          }, 1000);
            setSelectedOption('state_', Data.state_id);
            getDistricts(Data.state_id, 'district-dropdown', 'tehsil-dropdown');
            setTimeout(function() {
              setSelectedOption('dist', Data.district_id);
              populateTehsil(Data.district_id, 'tehsil-dropdown', Data.tehsil_id);
            }, 2000);
            $("#selectedImagesContainer").empty();
            if (Data.image_names) {
                var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
                var countclass=0;
                imageNamesArray.forEach(function (imageName) {
                    var imageUrl = 'https://shopninja.in/bharatagri/api/public/uploads/dealer_img/' + imageName.trim();
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
function searchdata() {
  var selectedBrand = $('#brand1').val();
  var model = $('#name1').val();
  var state = $('#search_state').val();
  var district = $('#search_dist').val();
  var paraArr = {
    'brand_id': selectedBrand,
    'dealer_name': model,
    'state': state,
    'district': district,
  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_dealer';
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
    error: function(xhr, status, error) {
      if (xhr.status === 404) {
        console.error('404 Not Found:', error);
        $('#example').DataTable().clear().draw(); 
        $('#data-table').html('<tr><td colspan="9">No valid data available</td></tr>'); 
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

  if (data.dealerData && data.dealerData.length > 0) {
    let tableData = [];
    data.dealerData.forEach(row => {
      let action = ` <div class="d-flex">
      <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.id});" data-bs-target="#view_model_dealers" style="padding:5px;">
      <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px;">
              <i class="fas fa-edit" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});" style="padding:5px;">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button>
      </div>`;
      tableData.push([
        serialNumber,
        row.date,
        row.brand_name,
        row.dealer_name,
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
        { title: 'Dealer Name' },
        { title: 'State' },
        { title: 'District' },
        { title: 'Action', orderable: false }
      ],
      paging: true,
      searching: false,
    });
  } else {
    tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
  }
}
  function resetform(){
    $('#brand1').val('');
    $('#name1').val('');
    $('#district_1').val('');
    get_dealers();
  }
  function get_1() {
    var url = 'https://shopninja.in/bharatagri/api/public/api/customer/get_brand_for_finance';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('brand1');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  
            if (data.brands.length > 0) {
                data.brands.forEach(row => {
                    const option = document.createElement('option');
                    option.textContent = row.brand_name;
                    option.value = row.id;
                    select.appendChild(option);
                });
                  select.addEventListener('change', function() {
                    const selectedBrandId = this.value;
                    get_model(selectedBrandId);
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
  get_1()

  function resetFormFields(){
    document.getElementById("dealer_list_form").reset();
    document.getElementById("_image").value = '';
    document.getElementById("selectedImagesContainer").innerHTML = '';
   
}