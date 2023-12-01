$(document).ready(function() {
    $("#form").validate({
    rules:{
        lookupSelectbox:"required",
        lookup_data_value:"required"
    },
    messages:{
        lookupSelectbox:"Select field",
        lookup_data_value:"Field is required"
    }

});
$('#login').click(store);
});
function get_data() {
console.log('hhsdfshdfch');
// var url = "<?php echo $APIBaseURL; ?>lookup_data";
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'lookup_data';

// console.log(url);
$.ajax({
    url: url,
    type: "GET",
    headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('token')
    },
    success: function (data) {
    //   console.log(data);
        const tableBody = document.getElementById('data-table');
        tableBody.innerHTML = ''; // Clear previous data

        

        if (data.lookup_data.length > 0) {
    //   console.log(typeof data.lookup_data);

            // Loop through the data and create table rows 
            data.lookup_data.map(row => {
              console.log(row);
                const tableRow = document.createElement('tr');
                tableRow.innerHTML = `
                    <td>${row.id}</td>
                    <td>${row.lookup_type_id}</td>
                    <td>${row.lookup_data_value}</td>
                    <td><div class="d-flex"><button class="btn btn-danger btn-sm mx-1" id="delete_user" onclick="destroy(${row.id});"><i class="fa fa-trash" style="font-size: 11px;"></i></button></div></td>
                `;
                tableBody.appendChild(tableRow);
            });
        } else {
            // Display a message if there's no valid data
            tableBody.innerHTML = '<tr><td colspan="7">No valid data available</td></tr>';
        }
    },
    error: function (error) {
        console.error('Error fetching data:', error);
        // Display an error message or handle the error as needed
    }
});
}
get_data();

function store(event) {
event.preventDefault();
console.log('jfhfhw');
var lookup_type = $('#lookupSelectbox').val();
var lookup_type = $('#lookup_data_value').val();
console.log(lookup_type);

// Prepare data to send to the server
var paraArr = {
  'lookup_type_id': lookup_type,
  'lookup_type':lookup_type
};

// var url = "<?php echo $APIBaseURL; ?>lookup_data";
var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'lookup_data';

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
    window.location.href = "<?php echo $baseUrl; ?>lookup_data.php"; 
    console.log("Add successfully");
    alert('successfully inserted..!')
  },
  error: function (error) {
    console.error('Error fetching data:', error);
  }
});
}

//   get data in select box
function get() {
// var url = "<?php echo $APIBaseURL; ?>lookup_type";
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'lookup_type';
$.ajax({
    url: url,
    type: "GET",
    headers: {
        'Authorization':'Bearer' + localStorage.getItem('token')
    },
    success: function (data) {
        // console.log(data);
        const select = document.getElementById('lookupSelectbox');
        select.innerHTML = ''; // Clear previous data

        if (data.lookup_type.length > 0) {
            data.lookup_type.forEach(row => {
                const option = document.createElement('option');
                option.textContent = row.name;
              
                option.value = row.id;
                select.appendChild(option);
            });
        } else {
            select.innerHTML = '<option> No valid data available</option>';
        }
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}
get();


// get data in table
// delete data
function destroy(id) {
// var url = "<?php echo $APIBaseURL; ?>lookup_data/" + id;
var apiBaseURL =APIBaseURL;
// Now you can use the retrieved value in your JavaScript logic
var url = apiBaseURL + 'lookup_data/'+ id;
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
  get_data();
  console.log("Delete request successful");
  alert("Delete operation successful");
},
error: function(error) {
  console.error('Error fetching data:', error);
  alert("Error during delete operation");
}
});
}