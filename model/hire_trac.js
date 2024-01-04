function get_hire_tract() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'hire_data';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const tableBody = document.getElementById('data-table');
            let serialNumber = 1;
  
            if (data.hire_details && data.hire_details.length > 0) {
                data.hire_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
                    const tableRow = document.createElement('tr');
                    tableRow.innerHTML = `
                        <td>${serialNumber}</td>
                        <td>${row.date}</td>
                        <td>${fullName}</td> 
                        <td>${row.mobile}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
                                    <i class="fas fa-edit" style="font-size: 11px;"></i>
                                </button>
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

  function fetch_edit_data(id) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'hire_data/' + id;
    console.log(url);
  
    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            var Data = response.hire_details[0];
            $('#idUser').val(Data.id);
            $('#first_name').val(Data.first_name);
            $('#last_name').val(Data.last_name);
            $('#mobile').val(Data.mobile);
            $('#state_').val(Data.state);
            $('#dist').val(Data.district);
            $('#tehsil').val(Data.tehsil);
            $('#idUser').val(Data.id);
  
            // Clear existing images
            // $("#selectedImagesContainer").empty();
  
            // if (Data.image_names) {
            //     // Check if Data.image_names is an array
            //     var imageNamesArray = Array.isArray(Data.image_names) ? Data.image_names : Data.image_names.split(',');
  
            //     imageNamesArray.forEach(function (imageName) {
            //         var imageUrl = 'http://tractor-api.divyaltech.com/uploads/dealers_img/' + imageName.trim();
  
            //         var newCard = `
            //             <div class="col-6 col-lg-6 col-md-6 col-sm-6">
            //                 <div class="brand-main d-flex box-shadow mt-2 text-center shadow">
            //                     <a class="weblink text-decoration-none text-dark" title="Image">
            //                         <img class="img-fluid w-100 h-100" src="${imageUrl}" alt=" Image">
            //                     </a>
            //                 </div>
            //             </div>
            //         `;
            //         // Append the new image element to the container
            //         $("#selectedImagesContainer").append(newCard);
            //     });
            // }
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
  }



  get_hire_tract();

// **delete data**//
  function destroy(id) {
    console.log(id);
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