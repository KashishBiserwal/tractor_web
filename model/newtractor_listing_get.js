
$(document).ready(function () {
  getTractorList();

  $("#Reset").click(function () {

    $("#brand").val("");
    $("#model_3").val("");
    $("#hp").val("");
    getTractorList();
    
    });
  // $('#Search').click(search_data);

  $('.edit_btn').click(function() {
    // var productId = $(this).data('row-productid');
  //  fetch_edit_data(productId);
});
});

function formatPriceWithCommas(price) {
  if (isNaN(price)) {
      return price; 
  }
   return price.toLocaleString('en-IN', { maximumFractionDigits: 2 });
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
var originalData = [];

function getTractorList() {
var apiBaseURL = APIBaseURL;
var url = apiBaseURL + 'get_new_tractor_for_admin';
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
  
  // let serialNumber = 1;

  if (data.product.allProductData && data.product.allProductData.length > 0) {

      let tableData = [];
                let counter = data.product.allProductData.length;
                
                data.product.allProductData.forEach(row => {
                  var formattedPrice = parseFloat(row.ending_price).toLocaleString('en-IN');
                    let action = `
                        <div class="d-flex">
                        <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.product_id})" data-bs-toggle="modal" data-bs-target="#viewModal_btn" id="viewbtn">
                                 <i class="fa fa-eye" style="font-size: 11px;"></i>
                                 </button>
                               <a href="tractor_form_list.php?trac_edit=${row.product_id}" class="btn btn-primary btn-sm edit_btn" ><i class="fas fa-edit" style="font-size: 11px;"></i></a>
                                 <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id})">
                                 <i class="fa fa-trash" style="font-size: 11px;"></i>
                                 </button> 
                        </div>`;

                        tableData.push([
                          counter--,
                          formatDateTime(row.date),
                          row.brand_name,
                          row.model,
                          row.wheel_drive_value,
                          row.hp_category,
                          formattedPrice,
                          action
                        ]);
                    // counter++;
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                      { title: 'S.No.' },
                      { title: 'Date' },
                      { title: 'Brand' },
                      { title: 'Model' },
                      { title: 'Wheel Drive' },
                      { title: 'HP Category' },
                      { title: 'Price' },
                      { title: 'Action', orderable: false }
                    ],
                    
                    paging: true,
                    searching: false,
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

            function search_data() {
              var selectedBrand = $('#brand').val();
              var model = $('#model_3').val();
              var hp = $('#hp').val();
          
              var paraArr = {
                  'brand_id': selectedBrand,
                  'model': model,
                  'horse_power':hp,
              };
          
              var apiBaseURL = APIBaseURL;
              var url = apiBaseURL + 'search_for_new_tractor';
              $.ajax({
                  url: url,
                  type: 'POST',
                  data: paraArr,
                  headers: {
                      'Authorization': 'Bearer ' + localStorage.getItem('token')
                  },
                  success: function (searchData) {
                      updateTable(searchData);
                  },
                  error: function (error) {
                      console.error('Error searching for brands:', error);
                  }
              });
          };
          
          function updateTable(data) {
              const tableBody = document.getElementById('data-table');
              tableBody.innerHTML = '';
          
              if (data.newTractor.allProductData && data.newTractor.allProductData.length > 0) {
                  let tableData = [];
                  let counter = data.newTractor.allProductData.length;
          
                  data.newTractor.allProductData.forEach(row => {
                    var formattedPrice = parseFloat(row.ending_price).toLocaleString('en-IN');
                      let action = `<div class="float-start">
                          <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView(${row.product_id})" data-bs-toggle="modal" data-bs-target="#viewModal_btn" id="viewbtn">
                              <i class="fa fa-eye" style="font-size: 11px;"></i>
                          </button>
                          <a href="tractor_form_list.php?trac_edit=${row.product_id}" onclick="fetch_edit_data(${row.product_id})" class="btn btn-primary btn-sm edit_btn" >
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                          </a>
                          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id})">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button> 
                      </div>`;
          
                      tableData.push([
                          counter--,
                          formatDateTime(row.date),
                          row.brand_name,
                          row.model,
                          row.wheel_drive_value,
                          row.hp_category,
                          formattedPrice,
                          action
                      ]);
                      // counter++;
                  });

                  $('#example').DataTable().destroy();
                  $('#example').DataTable({
                      data: tableData,
                      columns: [
                          { title: 'S.No.' },
                          { title: 'Date' },
                          { title: 'Brand' },
                          { title: 'Model' },
                          { title: 'Wheel Drive' },
                          { title: 'HP Category' },
                          { title: 'Price' },
                          { title: 'Action', orderable: false }
                      ],
                      paging: true,
                      searching: true,
                  });
              } else {
                  // Display a message if there's no valid data
                  tableBody.innerHTML = '<tr><td colspan="8">No valid data available</td></tr>';
              }
          }

// get brand
// function get() {
//   var apiBaseURL = APIBaseURL;
//   var url = apiBaseURL + 'getBrands';

//   $.ajax({
//     url: url,
//     type: "GET",
//     headers: {
//       'Authorization': 'Bearer ' + localStorage.getItem('token')
//     },
//     success: function (data) {
//       console.log(data);
//      // select.innerHTML = '<option selected disabled value="">Please select an option</option>';
//       const select = $('#brand');
//       select.empty(); // Clear existing options

//       // Add a default option
//       select.append('<option selected disabled value="">Please select Brand</option>');

//       // Use an object to keep track of unique brands
//       var uniqueBrands = {};

//       $.each(data.brands, function (index, brand) {
//         var brand_id = brand.id;
//         var brand_name = brand.brand_name;

//         // Check if the brand ID is not already in the object
//         if (!uniqueBrands[brand_id]) {
//           // Add brand ID to the object
//           uniqueBrands[brand_id] = true;

//           // Append the option to the dropdown
//           select.append('<option value="' + brand_id + '">' + brand_name + '</option>');
//         }
//       });
//     },
//     error: function (error) {
//       console.error('Error fetching data:', error);
//     }
//   });
// }



// get();

function get() {
  var url = "http://tractor-api.divyaltech.com/api/customer/get_brand_by_product_id/" + 2;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log(data);
          const selects = document.querySelectorAll('#brand');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.brands.length > 0) {
                  data.brands.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.brand_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });

                  // Add event listener to brand dropdown
                  select.addEventListener('change', function() {
                      const selectedBrandId = this.value;
                      get_model(selectedBrandId);
                  });
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          });
      },
      error: function (error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_model(brand_id) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function (data) {
          console.log('Received models data:', data); // Debugging statement
          const selects = document.querySelectorAll('#model_3');

          selects.forEach(select => {
              select.innerHTML = '<option selected disabled value="">Please select an option</option>';

              if (data.model && data.model.length > 0) {
                  data.model.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.model;
                      option.value = row.model;
                      select.appendChild(option);
                  });
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          });
      },
      error: function (error) {
          console.error('Error fetching model data:', error);
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
      // alert("Delete operation successful");
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      alert("Error during delete operation");
    }
  });
}

function formatPriceWithCommas(price) {
  if (isNaN(price)) {
      return price; 
  }
   return new Intl.NumberFormat('en-IN').format(price);
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
    var formattedPrice = parseFloat(data.product.allProductData[0].starting_price).toLocaleString('en-IN');
    var formattedPrice1 = parseFloat(data.product.allProductData[0].ending_price).toLocaleString('en-IN');
    document.getElementById('brand_').innerText=data.product.allProductData[0].brand_name;
    document.getElementById('model_').innerText=data.product.allProductData[0].model;
    document.getElementById('hp_').innerText=data.product.allProductData[0].hp_category;
    document.getElementById('cylinder_').innerText=data.product.allProductData[0].total_cyclinder_value;
    document.getElementById('POWER_TAKE_OFF_TYPE').innerText=data.product.allProductData[0].power_take_off_type;
    document.getElementById('Gear_Box_Forward_1').innerText=data.product.allProductData[0].gear_box_forward;
    document.getElementById('Gear_Box_Reverse_1').innerText=data.product.allProductData[0].gear_box_reverse;
    document.getElementById('brakes_1').innerText=data.product.allProductData[0].brake_value;
    document.getElementById('Starting_Price_1').innerText= formattedPrice;
    document.getElementById('Ending_Price_1').innerText= formattedPrice1;
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
    document.getElementById('Min_Forward_Speed_1').innerText=data.product.allProductData[0].transmission_forward + " kmph";
    document.getElementById('Max_Forward_Speed_1').innerText=data.product.allProductData[0].transmission_forward  + " kmph";
    document.getElementById('Min_Reverse_Speed_1').innerText=data.product.allProductData[0].transmission_reverse + " kmph";
    document.getElementById('Max_Reverse_Speed_1').innerText=data.product.allProductData[0].transmission_reverse + " kmph";
    document.getElementById('st_Type_1').innerText=data.product.allProductData[0].steering_details_value;
    document.getElementById('Coloumn_1').innerText=data.product.allProductData[0].steering_column_value;
    document.getElementById('Type2_1').innerText=data.product.allProductData[0].power_take_off_type;
    document.getElementById('RPM_1').innerText=data.product.allProductData[0].power_take_off_rpm;
    document.getElementById('Total_Weight_1').innerText=data.product.allProductData[0].total_weight + " kg";
    document.getElementById('Wheel_Base_1').innerText=data.product.allProductData[0].wheel_base + " mm";
    document.getElementById('Lifting_Capacity_1').innerText=data.product.allProductData[0].lifting_capacity + " kg";
    document.getElementById('Point_Linkage_1').innerText=data.product.allProductData[0].linkage_point_value;
    document.getElementById('Wheel_Drive_1').innerText=data.product.allProductData[0].wheel_drive_value;
    document.getElementById('Front_1').innerText=data.product.allProductData[0].front_tyre + " mm";
    document.getElementById('Rear_1').innerText=data.product.allProductData[0].rear_tyre + " mm";
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
                <div class="col-12 col-md-2 col-lg-2 col-sm-2">
                <div class="" id="closeId${countclass}"></div>
                    <div class="brand-main d-flex box-shadow mt-1 py-2 w-100 text-center shadow upload__img-closeDy${countclass}">
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




