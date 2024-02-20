$(document).ready(function() {

  // populateDropdownsFromClass('state-dropdown', 'district-dropdown', 'tehsil-dropdown');
    getEngineoilList();
    $('#engine_oil_form').submit(engineoil_enquiry);

    $("#engine_oil_form").validate({
        rules: {
            brandName: {
                required: true
            },
            modeName: {
                required: true
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            mobile_number: {
                required: true,
                digits: true,
                minlength: 10
            },
            state: {
                required: true,
                notEqual: "Select State"
            },
            district: {
                required: true,
                notEqual: "Select District"
            },
            Tehsil: {
                required: true
            }
        },
        messages: {
            state: {
                notEqual: "Please select a state."
            },
            district: {
                notEqual: "Please select a district."
            }
        },
        submitHandler: function (form) {
            engineoil_enquiry();
        }
    });


});

function getEngineoilList() {
    var url = CustomerAPIBaseURL + 'engine_oil';

    // Keep track of the total tractors and the currently displayed tractors
    var totalEngineoil = 0;
    var displayedEngineoil = 8; // Initially display 6 tractors

    $.ajax({
        url: url,
        type: "GET",
        success: function(data) {
            var productContainer = $("#productContainer");
            var loadMoreButton = $("#load_moretract");

            if (data.engine_oil_details && data.engine_oil_details.length > 0) {
                totalEngineoil = data.engine_oil_details.length;

                // Display the initial set of 6 tractors
                displayEngineoil(data.engine_oil_details.slice(0, displayedEngineoil));

                if (totalEngineoil <= displayedEngineoil) {
                    loadMoreButton.hide();
                } else {
                    loadMoreButton.show();
                }

                // Handle "Load More Tractors" button click
                loadMoreButton.click(function() {
                    // Display all tractors
                    displayedEngineoil = totalEngineoil;
                    displayEngineoil(data.engine_oil_details);

                    // Hide the "Load More Tractors" button
                    loadMoreButton.hide();
                });
            }
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}


function displayEngineoil(engineoil) {
    var productContainer = $("#productContainer");
    var tableData = $("#tableData");
    // Clear existing content
    productContainer.html('');
    tableData.html('');

    engineoil.forEach(function (p) {
        var images = p.image_names ? p.image_names.split(',') : [];
        var imageSrc = images.length > 0 ? `http://tractor-api.divyaltech.com/uploads/engine_oil_img/${images[0]}` : '';

        var newCard = `
            <div class="col-12 col-lg-3 col-sm-3 col-md-3 mt-2 mb-2 px-1 text-decoration-none">           
                <div class="success__stry__item h-100 shadow text-dark">
                    <div class="thumb">
                        <a href="engine_oil_inner.php?id=${p.id}">
                            <img src="${imageSrc}" class="engineoil_img w-100" alt="img">
                        </a>
                    </div>
                    <a href="engine_oil_inner.php?id=${p.id}" class="text-decoration-none text-dark content mb-0">
                        <p class="fs-5 fw-bold px-3 mb-0">${p.brand_name}</p>
                        <p class="text-success fw-bold px-3" style="font-size:12px;">Model: ${p.oil_model}</p>
                        <div class="col-12 px-3">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 engineoil_details pe-1">
                                    <p>Grade: ${p.grade}</p>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 engineoil_details ps-1">
                                    <p>Quantity: ${p.quantity}L</p>
                                </div>                  
                            </div>
                        </div>
                        <div class="row">
                            <h3 class="text-center text-dark" style="font-size: 25px;"><i class="fa fa-indian-rupee-sign" style="font-size: 22px;"></i>${p.price}</h3>
                        </div>  
                    </a>
                    <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#engineoil_callbnt_${p.id}">Request Call Back</button>
                </div>              
            </div>

            <div class="modal fade" id="engineoil_callbnt_${p.id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header modal_head">
                            <h5 class="modal-title text-white ms-1" id="staticBackdropLabel">Request Call Back</h5>
                            <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"><img src="assets/images/close.png" class="w-25"></button>
                        </div>
                        <!-- MODAL BODY -->
                        <div class="modal-body bg-white mt-3">
                            <form id="engine_oil_form_${p.id}" class="engine_oil_form" method="POST" onsubmit="return false">
                                <div class="row">
                                    <input type="hidden" id="brandName_${p.id}" value="${p.brand_name}">
                                    <input type="hidden" id="modelName_${p.id}" value="${p.oil_model}">
                                   
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 " hidden>
                                    <label for="name" class="form-label fw-bold text-dark"><i class="fa-duotone fa-chart-pie-simple"></i> Model Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="enquiry_type_id" value="12" name="iduser">
                                </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="" class="form-label text-dark fw-bold"> <i class="fa-regular fa-user"></i> First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Number" id="firstName" name="firstName">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="" class="form-label text-dark fw-bold"><i class="fa-regular fa-user"></i> Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Number" id="lastName" name="lastName">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                      <label for="number" class="form-label text-dark fw-bold"><i class="fa fa-phone" aria-hidden="true"></i> Mobile Number</label>
                                      <input type="text" class="form-control" placeholder="Enter Number" id="mobile_number" name="mobile_number">
                                      <P class="text-danger">*Please make sure mobile no. must valid</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label for="eo_state_${p.id}" class="form-label text-dark fw-bold"> <i class="fas fa-location"></i> State</label>
                                            <select class="form-select py-2 state-dropdown" aria-label=".form-select-lg example" id="state_${p.id}" name="state_${p.id}">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label for="eo_dist_${p.id}" class="form-label fw-bold text-dark"><i class="fa-solid fa-location-dot"></i> District</label>
                                            <select class="form-select py-2 district-dropdown" aria-label=".form-select-lg example" id="district_${p.id}" name="district_${p.id}">
                                            </select>
                                        </div>                    
                                    </div>       
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 mt-4">
                                        <div class="form-outline">
                                            <label for="eo_tehsil_${p.id}" class="form-label fw-bold text-dark"> Tehsil</label>
                                            <select class="form-select py-2 tehsil-dropdown" aria-label=".form-select-lg example" id="Tehsil_${p.id}" name="Tehsil_${p.id}">
                                                <option value="" selected disabled="">Please select a tehsil</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="text-center my-3">
                                    <button type="submit" id="submit_enquiry_${p.id}" class="btn add_btn btn-success w-100 btn_all" onclick="engineoil_enquiry()" data-bs-dismiss="modal">Submit</button>        
                                </div>        
                            </form>                             
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new card to the container
        productContainer.append(newCard);

        // Populate dropdowns
        populateDropdowns(p.id);
    });
}

function populateDropdowns(productId) {
  var stateId = `state_${productId}`;
  var districtId = `district_${productId}`;
  var tehsilId = `Tehsil_${productId}`;
  var defaultStateId = 7; // Define the default state ID here

var selectYourStateOption = $('<option>').val('').text('Select Your State');
var chhattisgarhOption = $('<option>').val(defaultStateId).text('Chhattisgarh');

$(`#${stateId}`).empty().append(selectYourStateOption).append(chhattisgarhOption);

  // Fetch district data based on the selected state
  $.get(`http://tractor-api.divyaltech.com/api/customer/get_district_by_state/${defaultStateId}`, function(data) {
      var districtSelect = $(`#${districtId}`);
      districtSelect.empty().append($('<option>').val('').text('Please select a district'));
      data.districtData.forEach(district => {
          districtSelect.append($('<option>').val(district.id).text(district.district_name));
      });
  });

  // Event listener for district dropdown
  $(document).on('change', `#${districtId}`, function() {
      var selectedDistrictId = $(this).val();
      if (selectedDistrictId) {
          // Fetch tehsil data based on the selected district
          $.get(`http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/${selectedDistrictId}`, function(data) {
              var tehsilSelect = $(`#${tehsilId}`);
              tehsilSelect.empty().append($('<option>').val('').text('Please select a tehsil'));
              data.tehsilData.forEach(tehsil => {
                  tehsilSelect.append($('<option>').val(tehsil.id).text(tehsil.tehsil_name));
              });
          });
      }
  });
}
// Call the function to display engine oil cards
displayEngineoil(/* Pass your engine oil data here */);


function engineoil_enquiry() {
    var brandName = $('#brandName').val();
    var modelName = $('#modelName').val();
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var mobile_number = $('#mobile_number').val();
    var state = $('#state').val();
    var district = $('#district').val();
    var Tehsil = $('#Tehsil').val();
    var enquiry_type_id =$('#enquiry_type_id').val();
    var paraArr = {
      'brand_name': brandName,
      'model': modelName,
      'first_name': firstName,
      'last_name': lastName,
      'mobile': mobile_number,
      'state': state,
      'district': district,
      'tehsil': Tehsil,
      'enquiry_type_id':enquiry_type_id,
    };
    // console.log(paraArr);
  
//   var apiBaseURL =APIBaseURL;
//   var url = apiBaseURL + 'customer_enquiries';
var url ='http://tractor-api.divyaltech.com/api/customer/customer_enquiries';
    console.log(url);
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    $.ajax({
      url: url,
      type: "POST",
      data: paraArr,
      headers: headers,
      success: function (result) {
        console.log(result, "result");
    console.log("Add successfully");
    $("#used_tractor_callbnt_").modal('hide'); 
    var msg = "Added successfully !"
    $("#errorStatusLoading").modal('show');    
    $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
 
    $("#errorStatusLoading").find('.modal-body').html(msg);
    $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/successfull.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
    // $("#errorStatusLoading").find('.modal-body').html('sdfghj');
  
  
      },
      error: function (error) {
        console.error('Error fetching data:', error);
        var msg = error;
        $("#errorStatusLoading").modal('show');
        $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
        $("#errorStatusLoading").find('.modal-body').html(msg);
        $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
        // 
      }
    });
  }
 

//   function savedata(){
//     engineoil_enquiry();
//     console.log("confirm");
//     console.log("Form submitted successfully");
//   }




function populateDropdownsFromClass(stateClassName, districtClassName, tehsilClassName) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/state_data';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          console.log(data);
          const stateSelect = document.getElementsByClassName(stateClassName)[0];
          stateSelect.innerHTML = '<option selected disabled value="">Please select a state</option>';

          const stateId = 7; // State ID you want to filter for
          const filteredState = data.stateData.find(state => state.id === stateId);
          if (filteredState) {
              const option = document.createElement('option');
              option.textContent = filteredState.state_name;
              option.value = filteredState.id;
              stateSelect.appendChild(option);
              // Once the state is populated, fetch and populate districts immediately
              getDistricts(filteredState.id, districtClassName, tehsilClassName);
          } else {
              stateSelect.innerHTML = '<option>No valid data available</option>';
          }
      },
      error: function(error) {
          console.error('Error fetching data:', error);
      }
  });
}

function getDistricts(state_id, districtClassName, tehsilClassName) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_district_by_state/' + state_id;
  console.log(url);
  var districtSelect = document.getElementsByClassName(districtClassName)[0];
  districtSelect.innerHTML = '<option selected disabled value="">Please select a district</option>';

  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          if (data.districtData.length > 0) {
              data.districtData.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.district_name;
                  option.value = row.id;
                  districtSelect.appendChild(option);
              });
              // If needed, you can fetch and populate tehsils for the default district here
              // For now, let's leave it blank
              districtSelect.addEventListener('change', function() {
                  populateTehsil(districtSelect.value, tehsilClassName);
              });
          } else {
              districtSelect.innerHTML = '<option>No districts available for this state</option>';
          }
      },
      error: function(error) {
          console.error('Error fetching districts:', error);
      }
  });
}

function populateTehsil(districtId, tehsilClassName, selectedTehsilId) {
  var url = 'http://tractor-api.divyaltech.com/api/customer/get_tehsil_by_district/' + districtId; 
  console.log(url);
  var tehsilSelect = document.getElementsByClassName(tehsilClassName)[0];
  tehsilSelect.innerHTML = '<option selected disabled value="">Please select a tehsil</option>';

  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          if (data.tehsilData.length > 0) {
              data.tehsilData.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.tehsil_name;
                  option.value = row.id;
                  if (row.id === selectedTehsilId) {
                      option.selected = true;
                  }
                  tehsilSelect.appendChild(option);
              });
          } else {
              tehsilSelect.innerHTML = '<option>No tehsils available for this district</option>';
          }
      },
      error: function(error) {
          console.error('Error fetching tehsils:', error);
      }
  });
}
