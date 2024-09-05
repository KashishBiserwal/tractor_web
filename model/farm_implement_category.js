$(document).ready(function() {
    // BackgroundUpload();
    $('#savechangebtn').click(edit_user);
    $('#submit_button').click(store);
  
    $("#look_up_form").validate({
      rules: {
        name: {
              required: true,
          },
          imgfile:{
            required: true,
          }
      },
      messages: {
        name: {
              required: "This field is required",
          },
          imgfile: {
            required: "This field is required",
        }
       },
     submitHandler: function (form) {
          alert("Form submitted successfully!");
      }, 
    });
  
    $("#submit_button").on("click", function () {
        $("#look_up_form").valid();
    });
  
    // for edit model
    $("#look_up_form1").validate({
      rules: {
        name1: {
              required: true,
          },
          
      },
      messages: {
        name1: {
              required: "This field is required",
          },
        
       },
    submitHandler: function (form) {
          alert("Form submitted successfully!");
      }, 
    });
    
    $("#savechangebtn").on("click", function () {
        $("#look_up_form1").valid();
    });
  
  
  });
  
//   function load() {
//     var imgWrap = "";
//     var imgArray = [];

//     function generateUniqueClassName(index) {
//       return "background-image-" + index;
//     }

//     $('.background__inputfile').each(function () {
//       $(this).on('change', function (e) {
//         imgWrap = $(this).closest('.background__box').find('.background__img-wrap');
//         var maxLength = $(this).attr('data-max_length');

//         var files = e.target.files;
//         var filesArr = Array.prototype.slice.call(files);
//         var iterator = 0;
//         filesArr.forEach(function (f, index) {

//           if (!f.type.match('image.*')) {
//             return;
//           }

//           if (imgArray.length > maxLength) {
//             return false;
//           } else {
//             var len = 0;
//             for (var i = 0; i < imgArray.length; i++) {
//               if (imgArray[i] !== undefined) {
//                 len++;
//               }
//             }
//             if (len > maxLength) {
//               return false;
//             } else {
//               imgArray.push(f);

//               var reader = new FileReader();
//               reader.onload = function (e) {
//                 var className = generateUniqueClassName(iterator);
//                 var html = "<div class='background__img-box'><div onclick='BackgroundImage(\"" + className + "\")' style='background-image: url(" + e.target.result + ")' data-number='" + $(".background__img-close").length + "' data-file='" + f.name + "' class='img-bg " + className + "'><div class='background__img-close'></div></div></div>";
//                 imgWrap.append(html);
//                 iterator++;
//               }
//               reader.readAsDataURL(f);
//             }
//           }
//         });
//       });
//     });

//     $('body').on('click', ".background__img-close", function (e) {
//       var file = $(this).parent().data("file");
//       for (var i = 0; i < imgArray.length; i++) {
//         if (imgArray[i].name === file) {
//           imgArray.splice(i, 1);
//           break;
//         }
//       }
//       $(this).parent().parent().remove();
//     });
// }
  
  
  $('#submit_button').click(store);
  
  function store(event) {
    // Get values from form fields
    event.preventDefault();
    console.log('jfhfhw');
    var category_name = $('#name').val();
  
    // Prepare data to send to the server
    // var paraArr = {
    //   'category_name': category_name,
    //   'image': category_img
    // };

  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'implement_category';
  
    var token = localStorage.getItem('token');
    var headers = {
      'Authorization': 'Bearer ' + token
    };
    var data = new FormData();
    data.append('category_name', category_name);
  
    // Make an AJAX request to the server
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        headers: headers,
        processData: false,
        contentType: false,
      success: function (result) {
        console.log(result, "result");
      get();
        console.log("Add successfully");
        $("#staticBackdrop1").modal('hide');
        var msg = "Added successfully !"
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
            const tableBody = document.getElementById('data-table');
            tableBody.innerHTML = ''; // Clear previous data
  
            if (data.allCategory.length > 0) {
                // let serialNumber = 1; 
                let tableData = [];
                let serialNumber = data.allCategory.length;
                // Loop through the data and create table rows
                data.allCategory.forEach(row => {
                   // const tableRow = document.createElement('tr');
                   let action = ` <div class="d-flex">
                                    <button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});" style="padding:5px;">
                                      <i class="fa fa-trash" style="font-size: 11px;"></i>
                                    </button>
                                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" id="yourUniqueIdHere">
                                      <i class="fas fa-edit" style="font-size: 11px;"></i>
                                  </button>
                                  </div>`;
                
                    tableData.push([
                      serialNumber--,
                      row.category_name,
                      action
                  ]);
                    
                    // Increment serialNumber for the next row
                    // serialNumber++;
                    
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                        data: tableData,
                        columns: [
                          { title: 'ID' },
                          { title: 'Category Name' },
                          { title: 'Action', orderable: false } // Disable ordering for Action column
                      ],
                        paging: true,
                        searching: true,
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
  
  get();
  
  
  function destroy(id) {
    console.log('destroy id', id);
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'implement_category/' + id;
  var token = localStorage.getItem('token');
  
  if (!token) {
    console.error("Token is missing");
    return;
  }
  
  $.ajax({
    url: url,
    type: "DELETE",
    headers: {
      'Authorization': 'Bearer ' + token
    },
    success: function(result) {
      // window.location.reload();
      get();
      console.log("Delete request successful");
      var msg = "Deleted successfully !"
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Success');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    },
    error: function(error) {
      console.error('Error fetching data:', error);
      //alert("Error during delete operation");
      var msg = error;
      $("#errorStatusLoading").modal('show');
      $("#errorStatusLoading").find('.modal-title').html('Error');
      $("#errorStatusLoading").find('.modal-body').html(msg);
    }
  });
  }
  
  function myFunction() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("namesearch");
    filter = input.value.toUpperCase();
    table = $('#example').DataTable(); // Initialize DataTable
  
    // Use DataTables search method to filter rows
    table.search(filter).draw();
  }
  
  function resetForm() {
    document.getElementById("myform").reset();
  
    // Clear search and redraw the table to show all rows
    var table = $('#example').DataTable();
    table.search('').draw();
  }
  
      // edit and update 
      function fetch_edit_data(id) {

        var apiBaseURL = APIBaseURL;
        var url = apiBaseURL + 'implement_category/' + id;
        console.log(url);
      
        var headers = {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        };
      
        $.ajax({
            url: url,
            type: 'GET',
            headers: headers,
            success: function (response) {
                var Data = response.allCategory[0];
               
                $('#idUser').val(Data.id);
                $('#look_up_name').val(Data.category_name);
                console.log(Data.category_name);
               
            },
            error: function (error) {
                console.error('Error fetching user data:', error);
            }
        });
      }
    
    function edit_user(edit_id) {
      var edit_id = $("#idUser").val();
      var category_name1 = $("#look_up_name").val();
    
      var paraArr = {
          'category_name': category_name1,
          'id': edit_id, 
      };
    
      var apiBaseURL = APIBaseURL;
      var url = apiBaseURL + 'implement_category/' + edit_id;
    
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
            
              get();
             // window.location.reload();
              console.log("updated successfully");
              //alert('successfully updated..!')
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
  
       