
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



//****get data***
//  function get_old_harvester_enqu() {
//     var apiBaseURL = APIBaseURL;
//     var url = apiBaseURL + 'get_old_harvester';
//     console.log('dfghjkiuytgf');
//     $.ajax({
//         url: url,
//         type: "GET",
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (data) {
//             const tableBody = document.getElementById('data-table');
//             let serialNumber = 1;

//             if (data.product
//                 && data.product.length > 0) {
//                 data.product.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
//                     const tableRow = document.createElement('tr');
//                     tableRow.innerHTML = `
//                         <td>${serialNumber}</td>
//                         <td>${fullName} </td>
//                         <td>${row.mobile}</td>
//                         <td>${row.state}</td>
//                         <td>${row.district}</td>
//                         <td>${row.price}</td>
//                         <td>
//                             <div class="d-flex">
//                                 <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_old_harvester_enqu"><i class="fas fa-eye" style="font-size: 11px;"></i></button>
//                                <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
//                                 <i class="fas fa-edit" style="font-size: 11px;"></i>
//                             </button>
//                             <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//                             <i class="fa fa-trash" style="font-size: 11px;"></i>
//                         </button>
//                             </div>
//                         </td>
//                     `;
//                     tableBody.appendChild(tableRow);
//                     serialNumber++;
//                 });
//             } else {
//                 tableBody.innerHTML = '<tr><td colspan="6">No valid data available</td></tr>';
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
//   }
//   get_old_harvester_enqu();

//****get data***
function get_old_harvester_enqu() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_harvester';
    console.log('dfghjkiuytgf');
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data

            let serialNumber = 1;

            if (data.product && data.product.length > 0) {
                // Initialize DataTable
                var table = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Full Name' },
                        { title: 'Mobile' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Price' },
                        { title: 'Action', orderable: false }
                    ]
                });

                data.product.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;

                    // Add row to DataTable
                    table.row.add([
                        serialNumber,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                        row.price,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_old_harvester_enqu">
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
                tableBody.html('<tr><td colspan="7">No valid data available</td></tr>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

// Call the get_old_harvester_enqu() function to fetch and display data
get_old_harvester_enqu();



  //****delete data***
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
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_old_harvester_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.product[0];
        document.getElementById('brand_name').innerText=userData.brand_name;
        document.getElementById('model_name_1').innerText=userData.model;
        document.getElementById('CROPS_TYPE_1').innerText=userData.crops_type_value;
        document.getElementById('POWER_SOURCE_1').innerText=userData.power_source_value;
        document.getElementById('hours_1').innerText=userData.hours_driven;
        document.getElementById('year_1').innerText=userData.purchase_year;
        document.getElementById('Price_1').innerText=userData.price;
        document.getElementById('About_1').innerText=userData.description;
        document.getElementById('First_Name').innerText=userData.first_name;
        document.getElementById('Last_Name').innerText=userData.last_name;
        document.getElementById('Mobile_1').innerText=userData.mobile;
        document.getElementById('State_1').innerText=userData.state;
        document.getElementById('District_1').innerText=userData.district;
        document.getElementById('Tehsil_1').innerText=userData.tehsil;

        $("#selectedImagesContainer1").empty();

        if (response.product[0].image_names) {
          var imageNamesArray = Array.isArray(response.product[0].image_names) ? response.product[0].image_names : response.product[0].image_names.split(',');
          var countclass=0;
          imageNamesArray.forEach(function (image_names) {
              var imageUrl = 'http://tractor-api.divyaltech.com/uploads/image_names/' + image_names.trim();
              countclass++;
              var newCard = `
                  <div class="col-12 col-md-6 col-lg-4 position-relative" style="left:6px;">
                  <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
                      <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
                          <a class="weblink text-decoration-none text-dark" title=" Image">
                              <img class="img-fluid w-100 h-100" src="${imageUrl}" alt=" Image">
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
        console.error('Error fetching user data:', error);
      }
    });
  }


  // edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_nursery_enquiry_data_by_id/' + id;
  // console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.nursery_enquiry_data[0];
          $('#userId').val(Data.id);
          $('#fname_2').val(Data.first_name);
          $('#lname_2').val(Data.last_name);
          $('#number_2').val(Data.mobile);
          $('#email_2').val(Data.email);
          $('#date_2').val(Data.date);
          $('#state_2').val(Data.state);
          $('#dist_2').val(Data.district);
          $('#tehsil_2').val(Data.tehsil);
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

// get_hire_tract();

function edit_data_id() {
var enquiry_type_id = $("#enquiry_type_id").val();
var edit_id = $("#userId").val();
console.log(edit_id);
var first_name = $("#fname_2").val();
console.log(first_name);
var last_name = $("#lname_2").val();
var mobile = $("#number_2").val();
var email = $("#email_2").val();
var date = $("#date_2").val();
var state = $("#state_2").val();
var district = $("#dist_2").val();
var tehsil = $("#tehsil_2").val();

// Validate mobile number
if (!/^[6-9]\d{9}$/.test(mobile)) {
    alert("Mobile number must start with 6 or above and should be 10 digits");
    return; // Exit the function if validation fails
}

var paraArr = {
    'first_name': first_name,
    'last_name': last_name,
    'mobile': mobile,
    'email': email,
    'date': date,
    'state': state,
    'district': district,
    'tehsil': tehsil,
    'id': edit_id,
    'enquiry_type_id': enquiry_type_id,
};

var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'customer_enquiries/' + edit_id;

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
        window.location.reload();
        console.log("updated successfully");
        alert('successfully updated..!')
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}