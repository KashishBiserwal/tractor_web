
$(document).ready(function () {
      getTractorList();

      $('#submitbtn').click(edit_the_data);
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
          <td>${formatDateTime(row.created_at)}</td>
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
      tableBody.innerHTML = '';
      
      let serialNumber = 1;

      if (data.product.allProductData && data.product.allProductData.length > 0) {
        data.product.allProductData.forEach(row => {
          const tableRow = document.createElement('tr');
          tableRow.innerHTML = `
              <td>${serialNumber}</td>
              <td>${formatDateTime(row.created_at)}</td>
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
                      <a href="tractor_listing_edit.php?trac_edit=${row.product_id};"  onclick="trac_edit_id(${row.id});" class="btn btn-primary btn-sm btn_edit"><i class="fas fa-edit" style="font-size: 11px;"></i></a>
                      <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.id});" data-bs-toggle="modal" data-bs-target="#viewModal_btn" id="viewbtn">
                      <i class="fa fa-eye" style="font-size: 11px;"></i>
                  </button>
                </div>
              </td>
          `;
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
function editbutton(idValue) {
  any = idValue;
  console.log("Edit the value of id of the row  " + idValue);
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'get_new_tractor';

  $.ajax({
      url: url,
      type: 'post',
      data: {
          id: idValue,
      },
      success: function (data) {
          var json = JSON.parse(data);

          // Show modal
          $('#edit_user').modal('show');
      },
      error: function (xhr, status, error) {
          console.log("Error: " + error);
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
  var confirmed = confirm("Are you sure you want to delete this item?");
  if (confirmed) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'deleteProduct/' + id;

    var token = localStorage.getItem('token');

    if (!token) {
      console.error("Token is missing");
      return;
    }
  };
}

// *********View data******

function openView(viewID){
  console.log('');
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getSelfData/' + editId;
  console.log(url);
}

// ********for edit*******

function trac_edit_id(editId) {
  console.log('ggcghcgfgk');
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getSelfData/' + editId;
  console.log(url);

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var editData = response.user[0];
      // $('#idUser').val(userData.id);
      $('#brand_name1').val(editData.brand_name);
      $('#model1').val(editData.model);
      $('#product_type_id1').val(editData.product_type_id);
      $('#hp_category1').val(editData.hp_category);
      $('#TOTAL_CYCLINDER1').val(editData.TOTAL_CYCLINDER);
      $('#horse_power1').val(editData.horse_power);
      $('#gear_box_forward1').val(editData.gear_box_forward);
      $('#gear_box_reverse1').val(editData.gear_box_reverse);
      $('#BRAKE_TYPE1').val(editData.BRAKE_TYPE);
      $('#starting_price1').val(editData.starting_price);
      $('#ending_price1').val(editData.ending_price);
      $('#warranty1').val(editData.warranty);
      $('#type_name1').val(editData.type_name);
      $('#_image1').val(editData._image);
      $('#CAPACITY_CC1').val(editData.CAPACITY_CC);
      $('#engine_rated_rpm1').val(editData.engine_rated_rpm);
      $('#COOLING1').val(editData.COOLING);
      $('#AIR_FILTER1').val(editData.AIR_FILTER);
      $('#FUEL_PUMP1').val(editData.fuel_pump_id);
      $('#TORQUE1').val(editData.TORQUE);
      $('#TRANSMISSION_TYPE1').val(editData.TRANSMISSION_TYPE);
      $('#TRANSMISSION_CLUTCH1').val(editData.TRANSMISSION_CLUTCH);
      $('#min_forward_speed1').val(editData.min_forward_speed);
      $('#max_forward_speed1').val(editData.max_forward_speed);
      $('#min_reverse_speed1').val(editData.min_reverse_speed);
      $('#max_reverse_speed1').val(editData.max_reverse_speed);
      $('#STEERING_DETAIL1').val(editData.STEERING_DETAIL);
      $('#STEERING_COLUMN1').val(editData.STEERING_COLUMN);
      $('#POWER_TAKEOFF_TYPE1').val(editData.POWER_TAKEOFF_TYPE);
      $('#power_take_off_rpm1').val(editData.power_take_off_rpm);
      $('#totat_weight1').val(editData.totat_weight);
      $('#WHEEL_BASE1').val(editData.WHEEL_BASE);
      $('#LIFTING_CAPACITY1').val(editData.LIFTING_CAPACITY);
      $('#LINKAGE_POINT1').val(editData.LINKAGE_POINT);
      $('#WHEEL_DRIVE1').val(editData.WHEEL_DRIVE);
      $('#front_tyre1').val(editData.front_tyre);
      $('#rear_tyre1').val(editData.rear_tyre);
      $('#ass_list1').val(editData.ass_list);
      $('#STATUS1').val(editData.STATUS);
      $('#description1').val(editData.description);
      $('#idEditUser1').val(editData.idEditUser);
    
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}



function edit_the_data(){
  var idEditUser = $("#idEditUser1").val();
 var brand_name = $("#brand_name1").val();
  var model = $("#model1").val();
  var product_type_id = $("#product_type_id1").val();
  var hp_category = $("#hp_category1").val();
  var TOTAL_CYCLINDER = $("#TOTAL_CYCLINDER1").val();
  var horse_power = $("#horse_power1").val();
  var gear_box_forward = $("#gear_box_forward1").val();
  var gear_box_reverse = $("#gear_box_reverse1").val();
  var BRAKE_TYPE = $("#BRAKE_TYPE1").val();
  var starting_price = $("#starting_price1").val();
  var ending_price = $("#ending_price1").val();
  var warranty = $("#warranty1").val();
  var type_name = $("#type_name1").val();
  var _image = $("#_image1").val();
  var CAPACITY_CC = $("#CAPACITY_CC1").val();
  var engine_rated_rpm = $("#engine_rated_rpm1").val();
  var COOLING = $("#COOLING1").val();
  var AIR_FILTER = $("#AIR_FILTER1").val();
  var fuel_pump_id = $("#FUEL_PUMP1").val();
  var TORQUE = $("#TORQUE1").val();
  var TRANSMISSION_TYPE = $("#TRANSMISSION_TYPE1").val();
  var TRANSMISSION_CLUTCH = $("#TRANSMISSION_CLUTCH1").val();
  var min_forward_speed = $("#min_forward_speed1").val();
  var max_forward_speed = $("#max_forward_speed1").val();
  var min_reverse_speed = $("#min_reverse_speed1").val();
  var max_reverse_speed = $("#max_reverse_speed1").val();
  var STEERING_DETAIL = $("#STEERING_DETAIL1").val();
  var STEERING_COLUMN = $("#STEERING_COLUMN1").val();
  var POWER_TAKEOFF_TYPE = $("#POWER_TAKEOFF_TYPE1").val();
  var power_take_off_rpm = $("#power_take_off_rpm1").val();
  var totat_weight = $("#totat_weight1").val();
  var WHEEL_BASE = $("#WHEEL_BASE1").val();
  var LIFTING_CAPACITY = $("#LIFTING_CAPACITY1").val();
  var LINKAGE_POINT = $("#LINKAGE_POINT1").val();
  var WHEEL_DRIVE = $("#WHEEL_DRIVE1").val();
  var front_tyre = $("#front_tyre1").val();
  var rear_tyre = $("#rear_tyre1").val();
  var ass_list = $("#ass_list1").val();
  var STATUS = $("#STATUS1").val();
  var description = $("#description1").val();

  var paraArr1 = {
    'brand_id': brand_name,
    'model': model,
    'product_type_id': product_type_id,
    'hp_category': hp_category,
    'total_cyclinder_id': TOTAL_CYCLINDER,
    'horse_power': horse_power,
    'gear_box_forward': gear_box_forward,
    'gear_box_reverse': gear_box_reverse,
    'brake_type_id': BRAKE_TYPE,
    'starting_price': starting_price,
    'ending_price': ending_price,
    'warranty': warranty,
    'tractor_type_id[]': type_name,
    'image_type_id': _image,
    'engine_capacity_cc': CAPACITY_CC,
    'engine_rated_rpm': engine_rated_rpm,
    'cooling_id': COOLING,
    'air_filter': AIR_FILTER,
    'fuel_pump_id': fuel_pump_id,
    'torque': TORQUE,
    'transmission_type_id': TRANSMISSION_TYPE,
    'transmission_clutch_id': TRANSMISSION_CLUTCH,
    'transmission_reverse': min_forward_speed,
    'transmission_forward': max_forward_speed,
    'min_reverse_speed': min_reverse_speed,
    'max_reverse_speed': max_reverse_speed,
    'steering_details_id': STEERING_DETAIL,
    'steering_column_id': STEERING_COLUMN,
    'power_take_off_type_id': POWER_TAKEOFF_TYPE,
    'power_take_off_rpm': power_take_off_rpm,
    'total_weight': totat_weight,
    'wheel_base': WHEEL_BASE,
    'lifting_capacity': LIFTING_CAPACITY,
    'linkage_point_id': LINKAGE_POINT,
    'wheel_drive_id': WHEEL_DRIVE,
    'front_tyre': front_tyre,
    'rear_tyre': rear_tyre,
    'accessory_id[]': ass_list,
    'status_id': STATUS,
    'description': description,
    'id': idEditUser,


  };
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'updateUser/' + idEditUser;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };
  $.ajax({
    url: url,
      type: "PUT",
      data: paraArr1,
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


function openView(viewId) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'getSelfData/' + viewId;

  var headers = {
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: 'GET',
    headers: headers,
    success: function(response) {
      var userData = response.user[0];
      // $('#idUser').val(userData.id);
      // $('#first_name1').val(userData.first_name);
      // $('#last_name1').val(userData.last_name);
      // $('#mobile1').val(userData.mobile);
      // $('#email1').val(userData.email);
      // console.log(userData.email);
      // $('#user_type1').val(userData.user_type);
      // $('#status1').val(userData.status);
      // $('#idUser').val(userData.id);
      // editUserId=userData.id;


      
      
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}
