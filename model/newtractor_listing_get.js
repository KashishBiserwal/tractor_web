
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
                  <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.product_id});" data-bs-toggle="modal" data-bs-target="#viewModal_btn" id="viewbtn">
                  <i class="fa fa-eye" style="font-size: 11px;"></i>
                  </button>
                <a href="tractor_form_list.php" onclick="edit_values_id(${row.id});" class="btn btn-primary btn-sm btn_edit" ><i class="fas fa-edit" style="font-size: 11px;"></i></a>
                  <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                  <i class="fa fa-trash" style="font-size: 11px;"></i>
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
        document.getElementById('pto_hp_').innerText=data.product.allProductData[0].power_take_off_type;
        document.getElementById('Gear_Box_Forward_1').innerText=data.product.allProductData[0].gear_box_forward;
        document.getElementById('Gear_Box_Reverse_1').innerText=data.product.allProductData[0].gear_box_reverse;
        document.getElementById('brakes_1').innerText=data.product.allProductData[0].brake_value;
        document.getElementById('Starting_Price_1').innerText=data.product.allProductData[0].starting_price;
        document.getElementById('Ending_Price_1').innerText=data.product.allProductData[0].ending_price;
        document.getElementById('Warranty_1').innerText=data.product.allProductData[0].warranty;
        document.getElementById('Select_Tractor_Type_1').innerText=data.product.allProductData[0].tractor_type_name;
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
        document.getElementById('Accessories_1').innerText=data.product.allProductData[0].accessory;
        document.getElementById('Status_1').innerText=data.product.allProductData[0].status_value;
        document.getElementById('About_1').innerText=data.product.allProductData[0].description;




        var productContainer = $("#image_1");

        if (data.product.allProductData && data.product.allProductData.length > 0) {
            data.product.allProductData.forEach(function (b) {
                var newCard = `
              <div class=" col-12 col-lg-3 col-md-3 col-sm-3">
                <div class="row">
                  <div>
                    <div class="brand-main box-shadow mt-2 text-center shadow">
                      <a class="weblink text-decoration-none text-dark" 
                        title="Old Tractors">
                        <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/customer/uploads/product_img/"
                        data-src="h" alt="Brand Logo">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              `;

                // Append the new card to the container
               productContainer.append(newCard);
            });


        }
},
error: function (error) {
console.error('Error fetching data:', error);
}
    });
}
// ********for edit*******



function edit_values_id(editId) {
  console.log('sumannn',editId);
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_new_tractor_by_id/' + id;
  console.log('prachi');

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
      $('#brand_name').val(editData.brand_id);
      $('#model').val(editData.model);
      $('#product_type_id').val(editData.product_type_id);
      $('#hp_category').val(editData.hp_category);
      $('#TOTAL_CYCLINDER').val(editData.total_cyclinder_id);
      $('#horse_power').val(editData.horse_power);
      $('#gear_box_forward').val(editData.gear_box_forward);
      $('#gear_box_reverse').val(editData.gear_box_reverse);
      $('#BRAKE_TYPE').val(editData.brake_type_id);
      $('#starting_price').val(editData.starting_price);
      $('#ending_price').val(editData.ending_price);
      $('#warranty').val(editData.warranty);
      $('#type_name').val(editData.tractor_type_id);
      $('#_image').val(editData.image_type_id);
      $('#CAPACITY_CC').val(editData.engine_capacity_cc);
      $('#engine_rated_rpm').val(editData.engine_rated_rpm);
      $('#COOLING').val(editData.cooling_id);
      $('#AIR_FILTER').val(editData.air_filter);
      $('#FUEL_PUMP').val(editData.fuel_pump_id);
      $('#TORQUE').val(editData.torque);
      $('#TRANSMISSION_TYPE').val(editData.transmission_type_id);
      $('#TRANSMISSION_CLUTCH').val(editData.transmission_clutch_id);
      $('#min_forward_speed').val(editData.transmission_reverse);
      $('#max_forward_speed').val(editData.transmission_forward);
      $('#min_reverse_speed').val(editData.min_reverse_speed);
      $('#max_reverse_speed').val(editData.max_reverse_speed);
      $('#STEERING_DETAIL').val(editData.steering_details_id);
      $('#STEERING_COLUMN').val(editData.steering_column_id);
      $('#POWER_TAKEOFF_TYPE').val(editData.power_take_off_type_id);
      $('#power_take_off_rpm').val(editData.power_take_off_rpm);
      $('#totat_weight').val(editData.total_weight);
      $('#WHEEL_BASE').val(editData.wheel_base);
      $('#LIFTING_CAPACITY').val(editData.lifting_capacity);
      $('#LINKAGE_POINT').val(editData.linkage_point_id);
      $('#WHEEL_DRIVE').val(editData.wheel_drive_id);
      $('#front_tyre').val(editData.front_tyre);
      $('#rear_tyre').val(editData.rear_tyre);
      $('#ass_list').val(editData.accessory_id);
      $('#STATUS').val(editData.status_id);
      $('#description').val(editData.description);
      
    },
    error: function(error) {
      console.error('Error fetching user data:', error);
    }
  });
}

  function edit_the_data(){
  var brand_name = $("#brand_name").val();
  var model = $("#model").val();
  var product_type_id = $("#product_type_id").val();
  var hp_category = $("#hp_category").val();
  var TOTAL_CYCLINDER = $("#TOTAL_CYCLINDER").val();
  var horse_power = $("#horse_power").val();
  var gear_box_forward = $("#gear_box_forward").val();
  var gear_box_reverse = $("#gear_box_reverse").val();
  var BRAKE_TYPE = $("#BRAKE_TYPE").val();
  var starting_price = $("#starting_price").val();
  var ending_price = $("#ending_price").val();
  var warranty = $("#warranty").val();
  var type_name = $("#type_name").val();
  var _image = $("#_image").val();
  var CAPACITY_CC = $("#CAPACITY_CC").val();
  var engine_rated_rpm = $("#engine_rated_rpm").val();
  var COOLING = $("#COOLING").val();
  var AIR_FILTER = $("#AIR_FILTER").val();
  var fuel_pump_id = $("#FUEL_PUMP").val();
  var TORQUE = $("#TORQUE").val();
  var TRANSMISSION_TYPE = $("#TRANSMISSION_TYPE").val();
  var TRANSMISSION_CLUTCH = $("#TRANSMISSION_CLUTCH").val();
  var min_forward_speed = $("#min_forward_speed").val();
  var max_forward_speed = $("#max_forward_speed").val();
  var min_reverse_speed = $("#min_reverse_speed").val();
  var max_reverse_speed = $("#max_reverse_speed").val();
  var STEERING_DETAIL = $("#STEERING_DETAIL").val();
  var STEERING_COLUMN = $("#STEERING_COLUMN").val();
  var POWER_TAKEOFF_TYPE = $("#POWER_TAKEOFF_TYPE").val();
  var power_take_off_rpm = $("#power_take_off_rpm").val();
  var totat_weight = $("#totat_weight").val();
  var WHEEL_BASE = $("#WHEEL_BASE").val();
  var LIFTING_CAPACITY = $("#LIFTING_CAPACITY").val();
  var LINKAGE_POINT = $("#LINKAGE_POINT").val();
  var WHEEL_DRIVE = $("#WHEEL_DRIVE").val();
  var front_tyre = $("#front_tyre").val();
  var rear_tyre = $("#rear_tyre").val();
  var ass_list = $("#ass_list").val();
  var STATUS = $("#STATUS").val();
  var description = $("#description").val();

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



