var EditIdmain_ = "";
var editId_state= false;
var id= "";
$(document).ready(function() {
    get_data();
    ImgUpload();
    $("body").on("click", ".remove_node_btn_frm_field", function () {
        $(this).closest(".form_field_outer_row").remove();
        console.log("success");
      });
  
      $('#Search').click(searchdata1);
      $("#Reset").click(function () {
    
        $("#lookup_type").val("");
        $("#lookup_data").val("");
        get_data();
        
        });
  
    $('#image').each(function () {
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
   
  });
  
    // $('#dataeditbtn').click(edit_user);
  
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
                   <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" id="yourUniqueIdHere">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                   </button>
                   <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                       <i class="fa fa-trash" style="font-size: 11px;"></i>
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
  var id = $('#idUser').val();
  var image = $('#image')[0].files[0]; 

  var apiBaseURL = APIBaseURL;
  // var url = apiBaseURL + 'implement_sub_category';

  var token = localStorage.getItem('token');
  var headers = {
    'Authorization': 'Bearer ' + token
  };

    _method = 'POST';
    var url, method;
    console.log('edit state', id);
    var _method = 'post'; 

    if (id !== '' && id !== null) {
      // Update mode
      _method = 'put';
      url = apiBaseURL + 'implement_sub_category/' + id;
      console.log(url);
      method = 'POST'; 
    } else {
      url = apiBaseURL + 'implement_sub_category';
      console.log('prachi');
      method = 'POST';
    }

  var data = new FormData();
  data.append('id', id);
  data.append('implements_category_id', lookup_type);
  data.append('sub_category_name', lookup_data_value);
  data.append('custom_data', customDataJson);
  data.append('implement_data', implementDataJson);
  data.append('thumbnail', image);
  data.append('_method', _method);

  $.ajax({
    url: url,
    type: method,
    data: data,
    headers: headers,
    processData: false,
    contentType: false,
    success: function(result) {
      // console.log(result, "result");
      // console.log("Add successfully");
      // var msg = "Added successfully !"
      // $("#errorStatusLoading").modal('show');
      // $("#errorStatusLoading").find('.modal-title').html('Success');
      // $("#errorStatusLoading").find('.modal-body').html(msg);

      // // Hide the modal immediately
      $("#staticBackdrop1").modal('hide');
      
      get_data();
     
      // var alertConfirmation = confirm("Data added successfully. Do you want to reload the page?");
      // if (alertConfirmation) {
      //   window.location.reload();
      // }
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
 
    // delete data
    function destroy(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'implement_sub_category/' + id;
      
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
  

      function fetch_edit_data(id) {
        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'implement_sub_category/' + id;
        console.log(url);
        editId_state= true;
        id= id;
    
        var headers = {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
    
        $.ajax({
            url: url,
            type: 'GET',
            headers: headers,
            success: function (response) {
                $('#two_field').hide(); // Correct selector
    
                var Data = response.allSubCategory;
                var Data2 = response.allSubCategory;
                $('#idUser').val(Data.implement_sub_category[0].id);
                $("#lookupSelectbox option").prop("selected", false);
                $("#lookupSelectbox option[value='" + Data.implement_sub_category[0].category_name + "']").prop("selected", true);
                $('#lookup_data_value').val(Data.implement_sub_category[0].sub_category_name);
    
                var tableData = $("#fields");
                tableData.html('');
    
                Data.custom_data.forEach(function (p, index) {
                    var tableRow = `
                        <div class="row form_field_outer_row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control w_90" name="mobileb_no[]" value="${p.custom_column_name}" id="mobileb_no_${index + 1}" readOnly />
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="no_type[]" id="no_type_${index + 1}" placeholder="Enter Value" aria-invalid="false" value="${p.implement_column_name}" />
                            </div>
                            <div class="form-group col-md-2 add_del_btn_outer">
                                <button class="btn_round remove_node_btn_frm_field delete" data-index="${index + 1}" enable>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    tableData.append(tableRow);
                });
    
                // Enable all delete buttons
                
    
                // Add event listener for delete buttons
                $(".remove_node_btn_frm_field").on("click", function () {
                    var indexToDelete = $(this).data("index");
                    console.log("Deleting field with ID: " + indexToDelete);
                });
                $(".delete").prop("disabled", false);
    
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

    function get_search() {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_implement_category';
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              const select = document.getElementById('lookup_type'); 
              select.innerHTML = ''; // Clear previous data
              $(select).append('<option selected disabled value="">Please select Category</option>');
  
              if (data.allCategory.length > 0) {
                  data.allCategory.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.category_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });
                  select.addEventListener('change', function () {
                      const selectedCategoryId = this.value; // Corrected variable name
                      get_subcategory_search(selectedCategoryId);
                  });
                  
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error.responseText; // Use responseText to get error message
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
  }
  
  // get subcategory in select box
  function get_subcategory_search(id) {
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'get_implement_sub_cat_by_category_id/' + id;
  
      $.ajax({
          url: url,
          type: "GET",
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          },
          success: function (data) {
              const select = document.getElementById('lookup_data'); // Corrected selector
              select.innerHTML = ''; // Clear previous data
              $(select).append('<option selected disabled value="">Please select Subcategory</option>'); // Corrected placeholder text
  
              if (data.implementSubCategoryData.length > 0) {
                  data.implementSubCategoryData.forEach(row => {
                      const option = document.createElement('option');
                      option.textContent = row.sub_category_name;
                      option.value = row.id;
                      select.appendChild(option);
                  });
                 
              } else {
                  select.innerHTML = '<option>No valid data available</option>';
              }
          },
          error: function (error) {
              console.error('Error fetching data:', error);
              var msg = error.responseText; 
              $("#errorStatusLoading").modal('show');
              $("#errorStatusLoading").find('.modal-title').html('Error');
              $("#errorStatusLoading").find('.modal-body').html(msg);
          }
      });
  }
  
  get_search();
       
  function searchdata1() {
    console.log("dfghsfg,sdfgdfg");
    var lookup_type = $('#lookup_type').val();
    var lookup_data = $('#lookup_data').val();
  
    var paraArr = {
      'implements_category_id': lookup_type,
      'implement_sub_category_id':lookup_data,
      
    };
  
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_implement_sub_category';
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
                   <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" id="yourUniqueIdHere">
                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                   </button>
                   <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                       <i class="fa fa-trash" style="font-size: 11px;"></i>
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
        tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
    }
  }
    // ui work
    $(document).ready(function () {
      var index = 2;
    
      function updateIndex() {
        $(".form_field_outer_row").each(function (i) {
          $(this)
            .find('input[name^="mobileb_no"]')
            .val("CUSTOM_" + (i + 1))
            .attr("id", "mobileb_no_" + (i + 1));
    
          $(this)
            .find('input[name^="no_type"]')
            .attr("id", "no_type_" + (i + 1));
        });
      }
    
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
              <button class="btn_round remove_node_btn_frm_field">
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        `);
    
        // Enable delete buttons for all rows
        $(".form_field_outer .remove_node_btn_frm_field").prop("disabled", false);
    
        // Disable delete button for the first row if it's the only one
        if ($(".form_field_outer_row").length === 1) {
          $(".form_field_outer .remove_node_btn_frm_field:first").prop("disabled", true);
        }
    
        // Increment index for the next row
        index++;
    
        // Update index values
        updateIndex();
      });
    
      $("body").on("click", ".remove_node_btn_frm_field", function () {
        // Remove the row
        $(this).closest(".form_field_outer_row").remove();
    
        // Enable delete button for the first row if it's the only one
        if ($(".form_field_outer_row").length === 1) {
          $(".form_field_outer .remove_node_btn_frm_field:first").prop("disabled", true);
        }
    
        // Update index values
        updateIndex();
      });
    });

   
    

  
