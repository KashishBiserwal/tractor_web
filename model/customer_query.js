
$(document).ready(function(){
    $('#Search').click(search_data);
    $("#Reset").click(function () {
        $("#name").val("");
        $("#phone_number").val("");
        feedback_query();
    
      });
    feedback_query();
});

function feedback_query() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'feedbacks';  
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')  // Add token if needed
        },
        success: function (data) {
            console.log(data, "feedback data");

            const tableBody = document.getElementById('data-table');
            let tableData = [];
            if (data.data && data.data.length > 0) {
                data.data.reverse();

                let serialNumber = 1;

                data.data.forEach(row => {
                    const fullName = row.full_name;
                    const phoneNumber = row.phone_number || ' ';
                    const subject = truncateText(row.subject, 50); 
                    const message = truncateText(row.message, 100); 
                    const date = new Date(row.created_at).toLocaleString();  

                    let action = `<div class="d-flex">
                        <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#customer_view_model" id="viewbtn">
                            <i class="fa fa-eye" style="font-size: 11px;"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
                            <i class="fa fa-trash" style="font-size: 11px;"></i>
                        </button>
                    </div>`;

                    tableData.push([ 
                        serialNumber,
                        date,
                        fullName,
                        phoneNumber,
                        subject,
                        message,
                        action
                    ]);

                    serialNumber++;
                });

                $('#example').DataTable().destroy();
                $('#example').DataTable({
                    data: tableData,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Full Name' },
                        { title: 'Phone No.' },
                        { title: 'Subject' },
                        { title: 'Query/Message' },
                        { title: 'Action', orderable: false }
                    ],
                    paging: true,
                    searching: false,
                });
            } else {
                tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
            if (error.status == '401' && error.responseJSON.error == 'Token expired or invalid') {
                $("#errorStatusLoading").modal('show');
                $("#errorStatusLoading").find('.modal-title').html('Error');
                $("#errorStatusLoading").find('.modal-body').html(error.responseJSON.error);
                window.location.href = baseUrl + "login.php";
            }
        }
    });
}

// Function to truncate text to a specified length and add ellipsis if needed
function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}


function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'feedbacks/' + userId;

    var headers = {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    };

    $.ajax({
        url: url,
        type: 'GET',
        headers: headers,
        success: function (response) {
            if (response.status === 'success') {
                var userData = response.data;

                document.getElementById('fullname').innerText = userData.full_name || ' ';
                document.getElementById('email').innerText = userData.email_address || ' ';
                document.getElementById('mo_number').innerText = userData.phone_number || ' ';
                document.getElementById('subject').innerText = userData.subject || ' ';
                document.getElementById('query').innerText = userData.message || ' ';

                // Show the modal if required
                // $('#exampleModal').modal('show');
            } else {
                console.error('Error: Unexpected response format', response);
            }
        },
        error: function (error) {
            console.error('Error fetching user data:', error);
        }
    });
}

function destroy(id) {
    console.log(id);
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'feedbacks/' + id;
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
            console.log("Delete request successful");
            alert("Delete operation successful");
        },
        error: function(error) {
            console.error('Error fetching data:', error);
            if (error.status === 405) {
                alert("Method Not Allowed. Please check the server configuration.");
            } else {
                alert("Error during delete operation");
            }
        }
    });
}

function search_data() {
    var name = $('#name').val();
    var mobile = $('#phone_number').val(); 

    var paraArr = {
        'full_name': name,
        'phone_number': mobile,
    };

    var apiBaseURL = APIBaseURL; 
    var url = apiBaseURL + 'search-feedback'; 

    console.log('URL:', url);
    console.log('Parameters:', paraArr);

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(response) {
            console.log(response, "Search Response");
            updateTable(response); 
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            console.log('Response:', xhr.responseText); // Log the full response
            if (xhr.status === 404) {
                $('#example').DataTable().clear().draw();
                $('#data-table').html('<tr><td colspan="7">No valid data available</td></tr>'); 
            } else {
                console.error('Error searching feedback:', error);
            }
        }
    });
}

function updateTable(data) {
    const tableBody = document.getElementById('data-table');
    tableBody.innerHTML = ''; 

    let serialNumber = 1;

    if (data.status === 'success' && data.data.length > 0) {
        let tableData = [];

        data.data.forEach(row => {
            let date = new Date(row.created_at).toLocaleDateString(); 
            let fullName = row.full_name; 
            let phoneNumber = row.phone_number || 'N/A'; 
            let subject = truncateText(row.subject, 50);  
            let message = truncateText(row.message, 100);

            let action = `<div class="d-flex">
                            <button class="btn btn-warning text-white btn-sm mx-1" onclick="openViewdata(${row.id})" data-bs-toggle="modal" data-bs-target="#customer_view_model" id="viewbtn">
                                <i class="fa fa-eye" style="font-size: 11px;"></i>
                            </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id})">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`;

            tableData.push([
                serialNumber,
                date,
                fullName,
                phoneNumber,
                subject,
                message,
                action
            ]);

            serialNumber++;
        });

        $('#example').DataTable().destroy();
        $('#example').DataTable({
            data: tableData,
            columns: [
                { title: 'S.No.' },
                { title: 'Date' },
                { title: 'Full Name' },
                { title: 'Phone No.' },
                { title: 'Subject' },
                { title: 'Query/Message' },
                { title: 'Action', orderable: false }
            ],
            paging: true,
            searching: false,
        });
    } else {
        tableBody.innerHTML = '<tr><td colspan="7" class="text-center">No results found</td></tr>';
    }
}
