
$(document).ready(function () {
  getTractorList();

  // $('#submitbtn').click(edit_the_data);

  $('.edit_btn').click(function() {
    var productId = $(this).data('row-productid');
    fetch_edit_data(productId);
});
});

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

//   $('#Search').click(function(){
//     $('#example').DataTable().destroy();
//     $('#example').dataTable({
//         'processing': true,
//         'serverSide': true,
//         'bSort': true,
//         'bPaginate': false, // Set pagination to false
//         'bLengthChange': true,
//         'bFilter': false,
//         'iDisplayLength': 10,
//         'bRetrieve': true,
//         'ajax': {
//             'type': 'GET',
//             'url': 'getRoutes.cfm?method=selectALLData',
//             'data': {
//                 email: $('#search_Email').val(),
//                 name: $('#Search_name').val()
//             },
//             'error': function (jqXHR, textStatus, errorThrown) {
//                 //$("#loader-wrapper").hide();
//             }
//         }
//     });
// });



function displayData(data) {
const tableBody = document.getElementById('data-table');
tableBody.innerHTML = '';

if (data.length > 0) {
  data.forEach(row => {
    const tableRow = document.createElement('tr');
    tableRow.innerHTML = `
      <td>${row.product_id}</td>
      <td>${formatDateTime(row.date)}</td>
      <td>${row.brand_name}</td>
      <td>${row.model}</td>
      <td>${row.wheel_drive_value}</td>
      <td>${row.hp_category}</td>
      <td>${row.ending_price}</td>
      <td>
        <div class="d-flex">
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
            <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button> 
        </div>
      </td>
    `;
    tableBody.appendChild(tableRow);
  });
} else {
  tableBody.innerHTML = '<tr><td colspan="9">No matching data available</td></tr>';
}
}
var originalData = [];




// function getTractorList() {
//   console.log('kjhskdjf');
//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'get_new_tractor';

//   // console.log(url);

//   $.ajax({
//     url: url,
//     type: 'GET',
//     headers: {
//       'Authorization': 'Bearer ' + localStorage.getItem('token')
//     },
//     success: function (data) {
//       console.log(data);
//       originalData = data.product.allProductData;

//       var select_model = $("#model");
//       select_model.empty(); // Clear existing options
//       select_model.append('<option selected disabled="" value="">Please select a model</option>');
//       console.log(data, 'ok');
//       for (var j = 0; j < data.product.allProductData.length; j++) {
//         var model = data.product.allProductData[j].model;
//         select_model.append('<option value="' + model + '">' + model + '</option>');
//       }

//       var select_hp = $("#hp");
//       select_hp.empty(); // Clear existing options
//       select_hp.append('<option selected disabled="" value="">Please select HP</option>');
//       console.log(data, 'ok');
//       for (var j = 0; j < data.product.allProductData.length; j++) {
//         var model = data.product.allProductData[j].hp_category;
//         select_hp.append('<option value="' + model + '">' + model + '</option>');
//       }

//       const tableBody = document.getElementById('data-table');
//       tableBody.innerHTML = '';

//       if (data.product.allProductData && data.product.allProductData.length > 0) {
//         data.product.allProductData.forEach(row => {
//           const tableRow = document.createElement('tr');
//           tableRow.innerHTML = `
//               <td>${row.product_id}</td>
//               <td>${formatDateTime(row.created_at)}</td>
//               <td>${row.brand_name}</td>
//               <td>${row.model}</td>
//               <td>${row.wheel_drive_value}</td>
//               <td>${row.hp_category}</td>
//               <td>${row.ending_price}</td>
//               <td>
//                   <div class="d-flex">
//                       <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//                           <i class="fa fa-trash" style="font-size: 11px;"></i>
//                       </button> 
                 
//                       <button class="btn btn-primary btn-sm btn_edit" data-toggle="modal" onclick="fetch_edit_data(${row.id});" data-target="#exampleModal" id="'+ id +'"><i class="fas fa-edit" style="font-size: 11px;"></i></button>
//                   </div>
//               </td>
//           `;
//           tableBody.appendChild(tableRow);
//         });
//       } else {
//         tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
//       }

//       // Display the original data in the table after populating it
//       // displayData(originalData);
//     },
//     error: function (error) {
//       console.error('Error fetching data:', error);
//     }
//   });
// }







function getTractorList() {
console.log('kjhskdjf');
var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'get_new_tractor';

$.ajax({
url: url,
type: 'GET',
headers: {
  'Authorization': 'Bearer ' + localStorage.getItem('token')
},
success: function (data) {
  console.log(data);
  originalData = data.product.allProductData;

  var select_model = $("#model");
  select_model.empty(); // Clear existing options
  select_model.append('<option selected disabled="" value="">Please select a model</option>');

  for (var j = 0; j < data.product.allProductData.length; j++) {
    var model = data.product.allProductData[j].model;
    select_model.append('<option value="' + model + '">' + model + '</option>');
  }

  var select_hp = $("#hp");
  select_hp.empty(); // Clear existing options
  select_hp.append('<option selected disabled="" value="">Please select HP</option>');

  for (var j = 0; j < data.product.allProductData.length; j++) {
    var model = data.product.allProductData[j].hp_category;
    select_hp.append('<option value="' + model + '">' + model + '</option>');
  }

  const tableBody = document.getElementById('data-table');
  tableBody.innerHTML= '';
  
  let serialNumber = 1;

  if (data.product.allProductData && data.product.allProductData.length > 0) {

    data.product.allProductData.forEach(row => {
      const tableRow = document.createElement('tr');
      tableRow.innerHTML = `
          <td>${serialNumber}</td>
          <td>${formatDateTime(row.date)}</td>
          <td>${row.brand_name}</td>
          <td>${row.model}</td>
          <td>${row.wheel_drive_value}</td>
          <td>${row.hp_category}</td>
          <td>${row.ending_price}</td>
          <td>
              <div class="d-flex">
              <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.product_id})" data-bs-toggle="modal" data-bs-target="#viewModal_btn" id="viewbtn">
              <i class="fa fa-eye" style="font-size: 11px;"></i>
              </button>
            <a href="tractor_form_list.php?trac_edit=${row.product_id}" onclick="fetch_edit_data(${row.product_id})" class="btn btn-primary btn-sm edit_btn" ><i class="fas fa-edit" style="font-size: 11px;"></i></a>
              <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id})">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
              </button> 
                
            </div>
          </td>
      `;
      console.log(tableRow);
      tableBody.appendChild(tableRow);
      serialNumber++;
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



$("#Search").click(function () {
var brand = $("#brand").val();
var model = $("#model").val();
var hp = $("#hp").val();
var table = $('#example');
var searchData = {
brand: brand,
  model_name: model,
  hp_category: hp,
};

var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'get_new_tractor';
$.ajax({
  url: url, 
  type: 'GET',
  data: searchData,
  headers: {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
  dataType: 'json',
  success: function (data) {
      console.log('data',data);    
      table.clear().rows.add(data.product.allProductData).draw(); 
      console.log("Search records");
  },
  error: function (xhr, status, error) {
      console.log("Error: " + error);
  }
});
});
$("#Reset").click(function () {

$("#brand").val("");
$("#model").val("");
$("#hp").val("");

if (originalData) {
  table.clear().rows.add(originalData).draw();
} else {
  
getTractorList();
}
});

// function performSearch() {
//   var brandValue = $("#brand").val();
//   var modelValue = $("#model").val();
//   var hpValue = $("#hp").val();

//   // Perform the search
//   var filteredData = originalData.filter(function (row) {
//     return (
//       (brandValue === "" || row.brand_name === brandValue) &&
//       (modelValue === "" || row.model === modelValue) &&
//       (hpValue === "" || row.hp_category === hpValue)
//     );
//   });

//   // Display the filtered data in the table
//   displayData(filteredData);
// }

// function displayData(data) {
//   const tableBody = document.getElementById('data-table');

//   tableBody.innerHTML = '';

//   if (data.length > 0) {
//     data.forEach(row => {
//       const tableRow = document.createElement('tr');
//       tableRow.innerHTML = `
//         <td>${row.product_id}</td>
//         <td>${formatDateTime(row.created_at)}</td>
//         <td>${row.brand_name}</td>
//         <td>${row.model}</td>
//         <td>${row.wheel_drive_value}</td>
//         <td>${row.hp_category}</td>
//         <td>${row.ending_price}</td>
//         <td>
//         <div class="float-start">
//         <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
//         <i class="fa fa-trash" style="font-size: 11px;"></i>
//         </button> 
//         <button class="btn btn-primary btn-sm " id="" onclick="update(${row.id});"><i class="fas fa-edit" style="font-size: 11px;"></i></button>
//         </div>
//         </td>
//       `;
//       tableBody.appendChild(tableRow);
  
//     });

//   } else {
//     tableBody.innerHTML = '<tr><td colspan="9">No matching data available</td></tr>';
//   }
// }

// Initialize data on page load


// get brand
function get() {
// var url = "<?php echo $APIBaseURL; ?>getBrands";
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'getBrands';
$.ajax({
  url: url,
  type: "GET",
  headers: {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
  success: function (data) {
      console.log(data);
      const select = document.getElementById('brand');
      select.innerHTML = '';

      if (data.brands.length > 0) {
          data.brands.forEach(row => {
              const option = document.createElement('option');
              option.value = row.id; // You might want to set a value for each option
              option.textContent = row.brand_name;
              select.appendChild(option);
          });
      } else {
          select.innerHTML ='<option>No valid data available</option>';
      }
  },
  error: function (error) {
      console.error('Error fetching data:', error);
  }
});
}
get();

// delete data
function destroy(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'deleteProduct/' + id;
  var token = localStorage.getItem('token');

  if (!token) {
    console.error("Token is missing");
    return;
  }

  // Show a confirmation popup
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
      getTractorList();
      // window.location.reload();
      console.log("Delete request successful");
      // alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

// *********View data******

function openView(product_id){
// alert(product_id);
console.log(window.location)
var urlParams = new URLSearchParams(window.location.search);

var productId = product_id;
var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'get_new_tractor_by_id/' + productId;

// var url = "http://127.0.0.1:8000/api/admin/getBrandsById/" + productId;
// console.log(url);
var headers = {
'Authorization': 'Bearer ' + localStorage.getItem('token')
};
$.ajax({
    url: url,
    type: "GET",
    headers: headers,
    success: function(data) {
    console.log(data, 'abc');
    document.getElementById('brand_').innerText=data.product.allProductData[0].brand_name;
    document.getElementById('model_').innerText=data.product.allProductData[0].model;
    document.getElementById('hp_').innerText=data.product.allProductData[0].hp_category;
    document.getElementById('cylinder_').innerText=data.product.allProductData[0].total_cyclinder_value;
    document.getElementById('POWER_TAKEOFF_TYPE').innerText=data.product.allProductData[0].power_take_off_type;
    document.getElementById('Gear_Box_Forward_1').innerText=data.product.allProductData[0].gear_box_forward;
    document.getElementById('Gear_Box_Reverse_1').innerText=data.product.allProductData[0].gear_box_reverse;
    document.getElementById('brakes_1').innerText=data.product.allProductData[0].brake_value;
    document.getElementById('Starting_Price_1').innerText=data.product.allProductData[0].starting_price;
    document.getElementById('Ending_Price_1').innerText=data.product.allProductData[0].ending_price;
    document.getElementById('Warranty_1').innerText=data.product.allProductData[0].warranty;
    document.getElementById('Select_Tractor_Type_1').innerText=data.product.accessory_and_tractor_type[0].tractor_type_name;
    document.getElementById('capacity_cc_1').innerText=data.product.allProductData[0].engine_capacity_cc;
    document.getElementById('Engine_Rated_RPM_1').innerText=data.product.allProductData[0].engine_rated_rpm;
    document.getElementById('Select_Cooling_1').innerText=data.product.allProductData[0].cooling_value;
    document.getElementById('Air_Filter_1').innerText=data.product.allProductData[0].air_filter;
    document.getElementById('Fuel_pump_1').innerText=data.product.allProductData[0].fuel_value;
    document.getElementById('Torque_1').innerText=data.product.allProductData[0].torque;
    document.getElementById('Type_1').innerText=data.product.allProductData[0].transmission_type_value;
    document.getElementById('Clutch_1').innerText=data.product.allProductData[0].transmission_clutch_value;
    document.getElementById('Min_Forward_Speed_1').innerText=data.product.allProductData[0].transmission_forward;
    document.getElementById('Max_Forward_Speed_1').innerText=data.product.allProductData[0].transmission_forward;
    document.getElementById('Min_Reverse_Speed_1').innerText=data.product.allProductData[0].transmission_reverse;
    document.getElementById('Max_Reverse_Speed_1').innerText=data.product.allProductData[0].transmission_reverse;
    document.getElementById('st_Type_1').innerText=data.product.allProductData[0].steering_details_value;
    document.getElementById('Coloumn_1').innerText=data.product.allProductData[0].steering_column_value;
    document.getElementById('Type2_1').innerText=data.product.allProductData[0].power_take_off_type;
    document.getElementById('RPM_1').innerText=data.product.allProductData[0].power_take_off_rpm;
    document.getElementById('Total_Weight_1').innerText=data.product.allProductData[0].total_weight;
    document.getElementById('Wheel_Base_1').innerText=data.product.allProductData[0].wheel_base;
    document.getElementById('Lifting_Capacity_1').innerText=data.product.allProductData[0].lifting_capacity;
    document.getElementById('Point_Linkage_1').innerText=data.product.allProductData[0].linkage_point_value;
    document.getElementById('Wheel_Drive_1').innerText=data.product.allProductData[0].wheel_drive_value;
    document.getElementById('Front_1').innerText=data.product.allProductData[0].front_tyre;
    document.getElementById('Rear_1').innerText=data.product.allProductData[0].rear_tyre;
    document.getElementById('Accessories_1').innerText=data.product.accessory_and_tractor_type[0].accessory;
    document.getElementById('Status_1').innerText=data.product.allProductData[0].status_value;
    document.getElementById('About_1').innerText=data.product.allProductData[0].description;
    $("#selectedImagesContainer1").empty();

    if (data.product.allProductData[0].image_names) {
        var imageNamesArray = Array.isArray(data.product.allProductData[0].image_names) ? data.product.allProductData[0].image_names : data.product.allProductData[0].image_names.split(',');
         
        var countclass=0;
        imageNamesArray.forEach(function (image_names) {
            var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
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
// ********for edit*******

// function fetch_edit_data(product_id) {
//   console.log('Fetching data for product_id:', product_id);
//   var productId = product_id;
//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'get_new_tractor_by_id/' + productId;
//   console.log('API URL:', url);

//   var headers = {
//     'Authorization': 'Bearer ' + localStorage.getItem('token')
//   };

//   $.ajax({
//     url: url,
//     type: 'GET',
//     headers: headers,
//     success: function(response) {
//       console.log('Response:', response);

//       if (response && response.product && response.product.allProductData && response.product.allProductData.length > 0) {
//         var editData = response.product.allProductData[0];
//         console.log('Edit Data:', editData);

//         // Rest of your code to populate the modal with data
//         $('#brand_name').val(editData.brand_id);
//         $('#model').val(editData.model);
//         $('#product_type_id').val(editData.product_type_id);
//         // ... (populate other fields)

//       } else {
//         console.error('Invalid or empty response data.');
//       }
//     },
//     error: function(error) {
//       console.error('Error fetching data:', error);
//     }
//   });
// }


// function fetch_edit_data(){
// alert("ding dong");
//   var apiBaseURL = APIBaseURL;
//   // var nursery_id= id;
//   var url = apiBaseURL + 'updateUser/' + idEditUser;
//   console.log(url);

//   var headers = {
//     'Authorization': 'Bearer ' + localStorage.getItem('token')
//   };

//   $.ajax({
//     url: url,
//     type: 'GET',
//     headers: headers,
//     success: function(response) {
//       var userData = response.product.allProductData[0];
//       $('#product_id').val(userData.product_id);
//       $('#brand_name').val(userData.brand_name);
//       $('#model').val(userData.model);
//       $('#product_type_id').val(userData.product_type_id);
//       $('#hp_category').val(userData.hp_category);
//       $('#TOTAL_CYCLINDER').val(userData.total_cyclinder_value);
//       $('#horse_power').val(userData.horse_power);
//       $('#gear_box_forward').val(userData.gear_box_forward);
//       $('#gear_box_reverse').val(userData.gear_box_reverse);
//       $('#BRAKE_TYPE').val(userData.brake_value);
//       $('#starting_price').val(userData.starting_price);
//       $('#ending_price').val(userData.ending_price);
//       $('#warranty').val(userData.warranty);
//       $('#type_name').val(userData.transmission_type_value);
//       // $('#_image').val(userData._image);
//       $('#CAPACITY_CC').val(userData.engine_capacity_cc);
//       $('#engine_rated_rpm').val(userData.engine_rated_rpm);
//       $('#COOLING').val(userData.cooling_value);
//       $('#AIR_FILTER').val(userData.air_filter);
//       $('#FUEL_PUMP').val(userData.fuel_value);
//       $('#TORQUE').val(userData.torque);
//       $('#TRANSMISSION_TYPE').val(userData.transmission_type_value);
//       $('#TRANSMISSION_CLUTCH').val(userData.transmission_clutch_value);
//       $('#min_forward_speed').val(userData.min_forward_speed);
//       $('#max_forward_speed').val(userData.max_forward_speed);
//       $('#min_reverse_speed').val(userData.min_reverse_speed);
//       $('#max_reverse_speed').val(userData.max_reverse_speed);
//       $('#STEERING_DETAIL').val(userData.steering_details_value);
//       $('#STEERING_COLUMN').val(userData.steering_column_value);
//       $('#POWER_TAKEOFF_TYPE').val(userData.power_take_off_type);
//       $('#power_take_off_rpm').val(userData.power_take_off_rpm);
//       $('#totat_weight').val(userData.totat_weight);
//       $('#WHEEL_BASE').val(userData.wheel_base);
//       $('#LIFTING_CAPACITY').val(userData.lifting_capacity);
//       $('#LINKAGE_POINT').val(userData.linkage_point_value);
//       $('#WHEEL_DRIVE').val(userData.wheel_drive_value);
//       $('#front_tyre').val(userData.front_tyre);
//       $('#rear_tyre').val(userData.rear_tyre);
//       $('#ass_list').val(product.accessory_and_tractor_type[0].accessory);
//       $('#STATUS').val(userData.status_value);
//       $('#description').val(userData.description);

//       // $("#selectedImagesContainer").empty();

//       // if (userData.image_names) {
//       //   var imageNamesArray = Array.isArray(userData.image_names) ? userData.image_names : userData.image_names.split(',');
//       //   console.log('imageNamesArray',imageNamesArray);  
//       //   var countclass = 0;
//       //   imageNamesArray.forEach(function (image_names) {
//       //       var imageUrl = 'http://tractor-api.divyaltech.com/uploads/product_img/' + image_names.trim();
            
//       //       countclass++;
//       //       var newCard = `
//       //           <div class="col-12 col-md-6 col-lg-4 position-relative" style="left:6px;">
//       //               <div class="upload__img-close_button " id="closeId${countclass}" onclick="removeImage(this);"></div>
//       //               <div class="brand-main d-flex box-shadow mt-1 py-2 text-center shadow upload__img-closeDy${countclass}">
//       //                   <a class="weblink text-decoration-none text-dark" title="Image">
//       //                       <img class="img-fluid w-100 h-100" src="${imageUrl}" alt="Image">
//       //                   </a>
//       //               </div>
//       //           </div>
//       //       `;
//       var productContainer = $("#image_1");

//       if (data.product.allProductData && data.product.allProductData.length > 0) {
//           data.product.allProductData.forEach(function (b) {
//               var newCard = `
//             <div class=" col-12 col-lg-3 col-md-3 col-sm-3">
//               <div class="row">
//                 <div>
//                   <div class="brand-main box-shadow mt-2 text-center shadow">
//                     <a class="weblink text-decoration-none text-dark" 
//                       title="Old Tractors">
//                       <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/customer/uploads/product_img/"
//                       data-src="h" alt="Brand Logo">
//                     </a>
//                   </div>
//                 </div>
//               </div>
//             </div>
//             `;
  
//               // Append the new card to the container
//              productContainer.append(newCard);
//           });
  
//       }
      
//     console.log('Fetched data successfully');
//       // $('#exampleModal').modal('show'); 
//     },
//     error: function(error) {
//       console.error('Error fetching user data:', error);
//     }
//   });






// }



