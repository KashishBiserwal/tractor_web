// fetch data
function get_tractor_list() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'implement_details';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');

            if (data.product && data.product.length > 0) {
                let tableData = [];
                let counter = 1;

                data.product.forEach(row => {
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.product_id});" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere" style="padding:5px">
                              <i class="fas fa-edit" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.product_id});" style="padding:5px">
                              <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`;

                    tableData.push([
                        counter,
                        formatDateTime(row.date),
                        row.brand_name,
                        row.model,
                        row.purchase_year,
                        row.state,
                        action
                    ]);

                    counter++;
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Purchase Year' },
                        { title: 'State' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: true,
                    // ... other options ...
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

get_tractor_list();