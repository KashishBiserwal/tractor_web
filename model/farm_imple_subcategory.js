$(document).ready(function() {
    get_data();
    ImgUpload();
    $("body").on("click", ".remove_node_btn_frm_field", function () {
        $(this).closest(".form_field_outer_row").remove();
        console.log("success");
      });
  
    $("#Reset").click(function () {
    
      $("#lookup_type").val("");
      $("#lookup_data").val("");
      
      
  
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
    
  
    $('#dataeditbtn').click(edit_user);
  
    $("#lookup_data_form").validate({
      rules: {
        lookup_Selectbox: {
              required: true,
          },
          lookup_datavalue: {
            required: true,
        }
      },
      messages: {
        lookup_Selectbox: {
              required: "This field is required",
          },
          lookup_datavalue: {
            required: "This field is required",
        }
       },
      submitHandler: function (form) {
          var msg = "Form submitted successfully !"
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Success');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      },
    });
  
    $("#lookup_data_submit").on("click", function () {
        $("#lookup_data_form").valid();
    });
  $('#lookup_data_submit').click(store);
    // for edit model
  
     // for edit model
     $("#lookup_data_form_1").validate({
      rules: {
        lookup_Selectbox1: {
              required: true,
          },
          lookup_datavalue1: {
            required: true,
        }
      },
      messages: {
        lookup_Selectbox1: {
              required: "This field is required",
          },
          lookup_datavalue1: {
            required: "This field is required",
        }
       },
      submitHandler: function (form) {
          var msg = "Form submitted successfully !";
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Success');
          $("#errorStatusLoading").find('.modal-body').html(msg);
      },
    });
    
    $("#dataeditbtn").on("click", function () {
        $("#lookup_data_form_1").valid();
    });
  
  });
  
//   get all subcategory in table 
  function get_data() {
    console.log('hhsdfshdfch');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'implement_sub_category';
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data
  
            if (data.allSubCategory.length > 0) {
                let serialNumber = data.allSubCategory.length; 
                let tableData = [];
                // Loop through the data and create table rows
                data.allSubCategory.forEach(row => {
                   // const tableRow = document.createElement('tr');
                   let action = `<div class="d-flex">
                   <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_new_harvester_enq">
                                <i class="fas fa-eye" style="font-size: 11px;"></i>
                    </button>
                   <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                       <i class="fa fa-trash" style="font-size: 11px;"></i>
                   </button>
                   <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" id="yourUniqueIdHere">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                   </button>
               </div>`;
                 
                    tableData.push([
                      serialNumber--,
                      row.category_name,
                      row.sub_category_name,
                      action
                  ]);
  
                    
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                        data: tableData,
                        columns: [
                          { title: 'ID' },
                          { title: 'Category Name' },
                          { title: 'Sub-Category Name' },
                          { title: 'Action', orderable: false } // Disable ordering for Action column
                      ],
                        paging: true,
                        searching: false,
                        // ... other options ...
                    });
            } else {
                // Display a message if there's no valid data
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('Error');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            // Display an error message or handle the error as needed
        }
    });
  }
  get_data();
  
//   store subcategory
function store(event) {
  event.preventDefault();

  var customDataArray = [];
  var implementDataArray = [];

  // Assuming you have multiple elements with IDs like 'mobileb_no_1', 'mobileb_no_2', etc.
  $('[id^="mobileb_no_"]').each(function() {
    customDataArray.push($(this).val());
  });

  // Assuming you have multiple elements with IDs like 'no_type_1', 'no_type_2', etc.
  $('[id^="no_type_"]').each(function() {
    implementDataArray.push($(this).val());
  });

  var customDataJson = JSON.stringify(customDataArray);
  var implementDataJson = JSON.stringify(implementDataArray);

  var lookup_type = $('#lookupSelectbox').val();
  var lookup_data_value = $('#lookup_data_value').val();
  var image = $('#image')[0].files[0]; 

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'implement_sub_category';

  var token = localStorage.getItem('token');
  var headers = {
    'Authorization': 'Bearer ' + token
  };

  var data = new FormData();
  data.append('implements_category_id', lookup_type);
  data.append('sub_category_name', lookup_data_value);
  data.append('custom_data', customDataJson);
  data.append('implement_data', implementDataJson);
  data.append('thumbnail', image);

  $.ajax({
    url: url,
    type: 'POST',
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function(result) {
      console.log(result, "result");
      console.log("Add successfully");
      var msg = "Added successfully !"
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Success');
      $("#errorStatusLoading").find('.modal-body').html(msg);

      // Hide the modal immediately
      $("#staticBackdrop1").modal('hide');

      // Show alert box with OK button
      var alertConfirmation = confirm("Data added successfully. Do you want to reload the page?");
      if (alertConfirmation) {
        window.location.reload();
      }
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    }
  });
}

  
  //   get implement data in select box
    function get() {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'get_implement_category';
        $.ajax({
            url: url,
            type: "GET",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
            success: function (data) {
                const select = document.getElementById('lookupSelectbox');
                select.innerHTML = ''; // Clear previous data
                $(select).append('<option selected disabled value="">Please select Category</option>');

                if (data.allCategory.length > 0) {
                    data.allCategory.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.category_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
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
    get();
  

    // get data for view
    function openViewdata(userId) {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'implement_sub_category/' + userId;
    
        var headers = {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
    
        $.ajax({
            url: url,
            type: 'GET',
            headers: headers,
            success: function (response) {
                var userData = response.allSubCategory;
                document.getElementById('category_view').innerText = userData.implement_sub_category[0].category_name;
                document.getElementById('subcategory_view').innerText = userData.implement_sub_category[0].sub_category_name;
    
                var tableData = $("#tableData");
                tableData.html('');
                let counter = 1;
                userData.custom_data.forEach(function (p) {
                   
                    var tableRow = `
                        <tr class="">
                            <td class="">${counter}</td>
                            <td class=""><span>${p.custom_column_name}</span></td>
                            <td class=""><span>${p.implement_column_name}</span></td>
                        </tr>
                    `;
                    counter++;
                    tableData.append(tableRow);
                   
                });

                var productContainer = $("#thumbnail");
                $("#thumbnail").empty();
            
                if (userData.implement_sub_category[0] && userData.implement_sub_category[0].length > 0) {
                    userData.implement_sub_category[0].forEach(function (b) {
                    
                        var newCard = `
                        <div class=" col-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="brand-main box-shadow mt-2 text-center shadow ">
                                    <a class="weblink text-decoration-none text-dark" 
                                        title="Old Tractors">
                                        <img class="img-fluid w-50" src="http://tractor-api.divyaltech.com/uploads/product_img/${b.thumbnail}"
                                            data-src="h" alt="Brand Logo">
                                    </a>
                                </div>
                            </div>
                        `;

                        // Append the new card to the container
                        productContainer.append(newCard);
                    });


                }
            },
            error: function (error) {
                console.error('Error fetching user data:', error);
            }
        });
    }
    
    

  
    // **delete***
    function destroy(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_implement_category/' + id;
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
          window.location.reload();
          get_dealers();
    
          console.log("Delete request successful");
          alert("Delete operation successful");
        },
        error: function(error) {
          console.error('Error fetching data:', error);
          alert("Error during delete operation");
        }
      });
    }
  
    
    
  function searchdata() {
    console.log("dfghsfg,sdfgdfg");
    var lookup_type = $('#lookup_type').val();
    var lookup_data = $('#lookup_data').val();
  
    var paraArr = {
      'lookup_type': lookup_type,
      'lookup_data':lookup_data,
      
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_lookup_data';
    $.ajax({
        url:url, 
        type: 'POST',
        data: paraArr,
      
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
          console.log(searchData,"hello brand");
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
    let serialNumber = data.allSubCategory.length; 
  
    if(data.allSubCategory && data.allSubCategory.length > 0) {
        let tableData = []; 
        data.allSubCategory.forEach(row => {
            let action =  `<div class="d-flex">
            <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                <i class="fa fa-trash" style="font-size: 11px;"></i>
            </button>
            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop_2" id="yourUniqueIdHere">
               <i class="fas fa-edit" style="font-size: 11px;"></i>
            </button>
        </div>`;
            tableData.push([
              serialNumber--,
              row.category_name,
              row.sub_category_name,
              action
          ]);
  
      });
  
      $('#example').DataTable().destroy();
      $('#example').DataTable({
          data: tableData,
          columns: [
            { title: 'ID' },
            { title: 'Lookup Type' },
            { title: 'Lookup Data' },
            { title: 'Action', orderable: false }
          ],
          paging: true,
          searching: false,
          // ... other options ...
      });
    } else {
        // Display a message if there's no valid data
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
  }
  
 
        // edit and update 
      function fetch_edit_data(id) {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'lookup_data/' + id; 
        console.log(url);
      
        var headers = {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
      
        $.ajax({
            url: url,
            type: 'GET',
            headers: headers,
            success: function (response) {
              // console.log('sdfgh'); 
                var Data = response.lookup_data[0];
                $('#idUser').val(Data.id);
                $('#lookupSelectbox1').val(Data.lookup_type_id);
                $('#lookup_data_value1').val(Data.lookup_data_value);
                // console.log(Data.name);
                
            },
            error: function (error) {
                console.error('Error fetching user data:', error);
                var msg = error;
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('Error');
                $("#errorStatusLoading").find('.modal-body').html(msg);
            }
        });
      }
    
    function edit_user() {
      var edit_id = $("#idUser").val();
      var lookup_type = $("#lookupSelectbox1").val();
      var lookup_value = $("#lookup_data_value1").val();
  
      var paraArr = {
          'lookup_type_id': lookup_type,
          'lookup_data_value': lookup_value,
          'id': edit_id, 
      };
    
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'lookup_data/' + edit_id;
    
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
              // get();
              window.location.reload();
              console.log("updated successfully");
              var msg = "Updated successfully !"
          $("#errorStatusLoading").modal('show');
          $("#errorStatusLoading").find('.modal-title').html('Success');
          $("#errorStatusLoading").find('.modal-body').html(msg);
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


    // ui work
    // Now we need to write a jQuery function for performing the task  first we will create a clone method function
    ///======Clone method
$(document).ready(function () {
    $("body").on("click", ".add_node_btn_frm_field", function (e) {
      var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
      var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);
  
      $(e.target).closest(".form_field_outer").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
  
      $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
  
      //change id
      $(e.target)
        .closest(".form_field_outer")
        .find(".form_field_outer_row")
        .last()
        .find("input[type='text']")
        .attr("id", "mobileb_no_" + index);
  
      $(e.target)
        .closest(".form_field_outer")
        .find(".form_field_outer_row")
        .last()
        .find("select")
        .attr("id", "no_type_" + index);
  
      console.log(cloned_el);
      //count++;
    });
  });

//   Now we are going to create an append method dfghj

$(document).ready(function() {
    var index = 2;

    $("body").on("click", ".add_new_frm_field_btn", function () {
        console.log("clicked");

        $(".form_field_outer").append(`
            <div class="row form_field_outer_row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control w_90" name="mobileb_no[]" value="CUSTOM_${index}" id="mobileb_no_${index}" readOnly />
                </div>
                <div class="form-group col-md-4">
                <input type="text" class="form-control" name="no_type[]" id="no_type_${index}" placeholder="Enter Value" aria-invalid="false"/>
                </div>
                <div class="form-group col-md-2 add_del_btn_outer">
                    <button class="btn_round remove_node_btn_frm_field" disabled>
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    
                </div>
            </div>
        `);

        $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
        $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);

        // Increment index for the next row
        index++;
    });
});




// $(document).ready(function() {
//     $("body").on("click", ".remove_node_btn_frm_field", function () {
//         $(this).closest(".form_field_outer_row").remove();
//         console.log("success");
//     });
// });
