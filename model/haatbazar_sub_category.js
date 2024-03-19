$(document).ready(function() {
  
    $('#btn_subcat').click(store_subcategory);
    $('#btn_subcat_1').click(edit_user);

});



function category_main() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('category_1');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

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
        }
    });
}
category_main();



function category_main2() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_category';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const select = document.getElementById('category_2');
            select.innerHTML = '<option selected disabled value="">Please select an option</option>';

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
        }
    });
}
category_main2();




function category_main3() {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_category';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          console.log(data);
          const select = document.getElementById('category_search');
          select.innerHTML = '<option selected disabled value="">Please select an option</option>';

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
      error: function(error) {
          console.error('Error fetching data:', error);
      }
  });
}

function get_sub_category(category_id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_sub_category/' + category_id;
  var select = document.getElementById('sub_category_search');
  select.innerHTML = '<option selected disabled value="">Please select an option</option>';
  $.ajax({
      url: url,
      type: "GET",
      headers: {
          'Authorization': 'Bearer ' + localStorage.getItem('token')
      },
      success: function(data) {
          if (data.data.length > 0) {
              data.data.forEach(row => {
                  const option = document.createElement('option');
                  option.textContent = row.sub_category_name;
                  option.value = row.sub_category_id;
                  select.appendChild(option);
              });
          } else {
              const option = document.createElement('option');
              option.textContent = 'No sub-categories available';
              option.disabled = true;
              select.appendChild(option);
          }
      },
      error: function(error) {
          console.error('Error fetching sub-categories:', error);
      }
  });
}
category_main3();


function get_data() {
    console.log('hhsdfshdfch');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_sub_category';
  
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
                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.sub_category_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                        <i class="fas fa-edit" style="font-size: 11px;"></i>
                    </button>
                    <button class="btn btn-danger btn-sm mx-1"  onclick="destroy(${row.sub_category_id});" style="padding:5px;">
                       <i class="fa fa-trash" style="font-size: 11px;"></i>
                    </button>
                    </div>`;
                 
                    tableData.push([
                      serialNumber--,
                      row.category_name,
                      row.sub_category_name,
                      action
                  ]);
  
                    // Increment serialNumber fo  r the next row
                    // serialNumber++;
                    
                });
                $('#example').DataTable().destroy();
                $('#example').DataTable({
                        data: tableData,
                        columns: [
                          { title: 'ID' },
                          { title: 'Category' },
                          { title: 'Sub Category' },
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


// subcategory
function store_subcategory(event) {
    event.preventDefault();
    console.log('jfhfhw');

    // var category_id = $('#category_id').val();
    var category_id = $('#category_1').val();
    var sub_category_name = $('#sub_category').val();
  
    // Prepare data to send to the server
    var paraArr = {
        'category_id':category_id,
      // 'category_name': category_name,
      'sub_category_name':sub_category_name,
    };
  
  var apiBaseURL =APIBaseURL;
  var url = apiBaseURL + 'haat_bazar_sub_category';
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
        alert('successfully inserted..!')

        window.location.reload();
      },
      error: function (error) {
        console.error('Error fetching data:', error);
      }
    });
  }

  

   // edit and update 
   function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_sub_category_by_id/' + id; 
    console.log(url);

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.data[0];
            $('#idUser').val(Data.userId);
            $('#category_2').val(Data.category_id);
            $('#sub_category_1').val(Data.sub_category_name);
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
    var edit_id = $("#idUser").val(); // Retrieve user ID from a hidden field
    var category_id = $("#category_2").val(); // Retrieve category ID from the select input
    var sub_category_name = $("#sub_category_1").val(); // Retrieve sub-category name from the input field

    var paraArr = {
        'category_id': category_id,
        'sub_category_name': sub_category_name,
        'id': edit_id, 
    };

    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_sub_category/' + edit_id;

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
            // Reload the page or perform any necessary action upon successful update
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


function destroy(id) {
    console.log(id)
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'haat_bazar_sub_category/' + id;
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
        // window.location.reload();
        console.log("Delete request successful");
        alert("Delete operation successful");
      },
      error: function(error) {
        console.error('Error fetching data:', error);
        alert("Error during delete operation");
      }
    });
  }




  function resetForm() {
    $('#category_search').val('');
    $('#sub_category_search').val('');
    window.location.reload();
}

function searchdata() {
    console.log("dfghsfg,sdfgdfg");
    var category = $('#category_search').val();
    var sub_category = $('#sub_category_search').val();

    var paraArr = {
        'category_id': category,
        'sub_category_id': sub_category,
    };

    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'search_for_haat_bazar_sub_category';
    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            console.log(searchData, "hello brand");
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
    let serialNumber = 1;

    if (data.data && data.data.length > 0) {
        let tableData = [];
        data.data.forEach(row => {
            let action = `<div class="d-flex">
            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.sub_category_id})" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                <i class="fas fa-edit" style="font-size: 11px;"></i>
            </button>
            <button class="btn btn-danger btn-sm mx-1"  onclick="destroy(${row.sub_category_id});" style="padding:5px;">
               <i class="fa fa-trash" style="font-size: 11px;"></i>
            </button>
            </div>`;
            tableData.push([
                serialNumber,
                row.category_name,
                row.sub_category_name,
                action
            ]);

            serialNumber++;
        });

        $('#example').DataTable().destroy();
        $('#example').DataTable({
            data: tableData,
            columns: [
                { title: 'S.No.' },
                { title: 'Category' },
                { title: 'Sub Category' },
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