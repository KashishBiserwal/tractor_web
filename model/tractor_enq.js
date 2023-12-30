
//  data fetch  
function tractor_enquiries() {
    console.log('suman');
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'customer_enquiries';
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);

            const tableBody = document.getElementById('data-table');

            if (data.enquiry_data && enquiry_data.length > 0) {
                // console.log(typeof product);

                data.enquiry_data.forEach(row => {
                  
                  const tableRow = document.createElement('tr');
                  // console.log(tableRow, 'helloooo');
                    tableRow.innerHTML = `
                        <td>${row.id}</td>
                        <td>${row.brand_id}</td>
                        <td>${row.first_name}</td>
                        <td>${row.mobile}</td>
                        <td>${row.state}</td>
                        <td>${row.district}</td>
                        <td>
                            <div class="d-flex">
                            <button class="btn btn-warning text-white btn-sm mx-1" onclick="openView${row.id});" data-bs-toggle="modal" data-bs-target="#" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick=" fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#" id="your_UniqueId">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                         </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                          </button>
                            </div>
                        </td>
                    `;
                    tableBody.appendChild(tableRow);
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
tractor_enquiries();