
$(document).ready(function(){
    $('#subbtn').click(edit_id_data);
    // $('#Search_data').click(search);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#dealers_form").validate({
      
      rules: {
        dname: {
          required: true,
        },
        fname: {
          required: true,
        },
        last_name:{
          required: true,
        },
        date:{
          required: true,
        },
        mobile:{
          required:true, 
            maxlength:10,
            digits: true,
            customPhoneNumber: true
        },
        email:{
        required:true,
        email:true
          },
        state_:{
          required: true,
        },
        dist:{
          required: true,
        },
      },
  
      messages:{
        dname: {
          required: "This field is required",
        },
        fname: {
          required: "This field is required",
        },
        last_name:{
          required: "This field is required",
        },
        date: {
          required: "This field is required",
        },
        mobile: {
          required:"This field is required",
          maxlength:"Enter only 10 digits",
          digits: "Please enter only digits"
        },
        email:{
            required:"This field is required",
            email:"Please Enter vaild Email",
          },
        
        state_: {
          required: "This field is required",
        },
        dist: {
          required: "This field is required",
        },
      },
      
      submitHandler: function (form) {
        alert("Form submitted successfully!");
      },
      });
  
    
      $("#subbtn").on("click", function () {
    
        $("#dealers_form").valid();
      
      });
      
  
      });



//****get data***

function get_dealers() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_dealer_enquiry_data';
    console.log('dfghjkiuytgf');
    
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = $('#data-table'); // Use jQuery selector for the table body
            tableBody.empty(); // Clear previous data
  
            let serialNumber = 1;
  
            if (data.dealer_enquiry_details && data.dealer_enquiry_details.length > 0) {
                var table = $('#example').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'S.No.' },
                        { title: 'Date' },
                        { title: 'Dealer Name' },
                        { title: 'Full Name' },
                        { title: 'Mobile' },
                        { title: 'State' },
                        { title: 'District' },
                        { title: 'Action', orderable: false }
                    ]
                });
  
                data.dealer_enquiry_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        serialNumber,
                        row.date,
                        row.dealer_name ,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                        `<div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_dealer">
                                <i class="fas fa-eye" style="font-size: 11px;"></i>
                            </button> 
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#edit_dealers" id="yourUniqueIdHere">
                            <i class="fas fa-edit" style="font-size: 11px;"></i>
                        </button>
                            <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
                                <i class="fa fa-trash" style="font-size: 11px;"></i>
                            </button>
                        </div>`
                    ]).draw(false);
  
                    serialNumber++;
                });
            } else {
                tableBody.html('<tr><td colspan="6">No valid data available</td></tr>');
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
  }
  get_dealers();

  // View data
function openViewdata(userId) {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_dealer_enquiry_data_by_id/' + userId;
  
    var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
    };
  
    $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
    
      success: function(response) {
        var userData = response.dealer_enquiry_details[0];
        document.getElementById('dname1').innerText=userData.dealer_name;
        document.getElementById('fname1').innerText=userData.first_name;
        document.getElementById('lname1').innerText=userData.last_name;
        document.getElementById('number1').innerText=userData.mobile;
        document.getElementById('email_1').innerText=userData.email;
        document.getElementById('date_1').innerText=userData.date;
        document.getElementById('state1').innerText=userData.state;
        document.getElementById('dist1').innerText=userData.district;
        document.getElementById('tehsil1').innerText=userData.tehsil;
      },
      error: function(error) {
        console.error('Error fetching user data:', error);
      }
    });
  }

 

 // **delete***
//  function destroy(id) {
//     var apiBaseURL = APIBaseURL;
//     var url = apiBaseURL + 'customer_enquiries/' + id;
//     console.log(url);
//     var token = localStorage.getItem('token');
  
//     if (!token) {
//       console.error("Token is missing");
//       return;
//     }
//     var isConfirmed = confirm("Are you sure you want to delete this data?");
//     if (!isConfirmed) {
//       return;
//     }
  
//     $.ajax({
//       url: url,
//       type: "DELETE",
//       headers: {
//         'Authorization': 'Bearer ' + token
//       },
//       success: function(result) {
//         window.location.reload();
//         get_dealers();

//         console.log("Delete request successful");
//         alert("Delete operation successful");
//       },
//       error: function(error) {
//         console.error('Error fetching data:', error);
//         alert("Error during delete operation");
//       }
//     });
//   }

    
// edit data 

function fetch_edit_data(id) {
  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'get_dealer_enquiry_data_by_id/' + id;
  console.log(url);

  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
      url: url,
      type: 'GET',
      headers: headers,
      success: function (response) {
          var Data = response.dealer_enquiry_details[0];
          $('#idUser').val(Data.id);
          $('#dname_name').val(Data.dealer_name);
          $("#brand_name option").prop("selected", false);
          $("#brand_name option[value='" + Data.brand_name + "']").prop("selected", true);
          $('#first_name').val(Data.first_name);
          $('#first_name').val(Data.first_name);
          $('#last_name').val(Data.last_name);
          $('#mobile').val(Data.mobile);
          $('#email').val(Data.email);
          $('#date').val(Data.date);
          $('#state_').val(Data.state)
          $('#dist_').val(Data.district);
          $('#tehsil_').val(Data.tehsil);
      },
      error: function (error) {
          console.error('Error fetching user data:', error);
      }
  });
}

function edit_id_data() {
  var enquiry_type_id = $("#enquiry_type_id").val();
  var product_id = $("#product_id").val();
  var edit_id = $("#idUser").val();
  var dealer_name = $("#dname_name").val();
  var first_name = $("#first_name").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var mobile = $("#mobile").val();
  var email = $("#email").val();
  var date = $("#date").val();
  var state = $("#state_").val();
  var district = $("#dist_").val();
  var tehsil = $("#tehsil_").val();
  var _method = 'put';

  // Validate mobile number
  if (!/^[6-9]\d{9}$/.test(mobile)) {
      alert("Mobile number must start with 6 or above and should be 10 digits");
      return; // Exit the function if validation fails
  }

  var paraArr = {
      'dealer_name': dealer_name,
      'first_name': first_name,
      'last_name': last_name,
      'mobile': mobile,
      'email': email,
      'date': date,
      'state': state,
      'district': district,
      'tehsil': tehsil,
      'id': edit_id,
      'enquiry_type_id': enquiry_type_id,
      'product_id': product_id,
      '_method': _method,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'customer_enquiries/' + edit_id;
console.log(url);
  var headers = {
      'Authorization': 'Bearer ' + localStorage.getItem('token')
  };

  $.ajax({
    url: url,
    type: "POST",
    data: paraArr,
    headers: headers,
    success: function (result) {
        console.log(result, "result");
        window.location.reload();
        console.log("updated successfully");
        alert('successfully updated..!')
    },
    error: function (error) {
        console.error('Error fetching data:', error);
    }
});
}


// search
function searchdata() {
  console.log("dfghsfg,sdfgdfg");
  
  var dealer_name = $('#dealerNameSelect').val();
  var state = $('#stateSelect').val();
  var district = $('#districtSelect').val();
 
  var paraArr = {

    'dealer_name':dealer_name,
    'state':state,
    'district':district,
  };

  var apiBaseURL = APIBaseURL;
  var url = apiBaseURL + 'search_for_dealer_for_enquiry';
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
  let serialNumber = 1; 
  if(data.oldTractor && data.oldTractor.length > 0) {
      let tableData = []; 
      data.oldTractor.forEach(row => {
        const fullName = row.first_name + ' ' + row.last_name;
          let action =  `<div class="d-flex">
          <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdata(${row.id});" data-bs-target="#view_model_tractor_enq">
              <i class="fas fa-eye" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#editmodel_oldtractor_enq" id="yourUniqueIdHere">
              <i class="fas fa-edit" style="font-size: 11px;"></i>
          </button>
          <button class="btn btn-danger btn-sm mx-1" onclick="destroy(${row.id});">
              <i class="fa fa-trash" style="font-size: 11px;"></i>
          </button>
      </div>`
     
          tableData.push([
            serialNumber,
            row.date,
            row.dealer_name ,
            fullName,
            row.mobile,
            row.state,
            row.district,
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
          { title: 'Dealer Name' },
          { title: 'Full Name' },
          { title: 'Mobile' },
          { title: 'State' },
          { title: 'District' },
          { title: 'Action', orderable: false }
        ],
        paging: true,
        searching: true,
        // ... other options ...
    });
  } else {
      // Display a message if there's no valid data
      tableBody.innerHTML = '<tr><td colspan="4">No valid data available</td></tr>';
  }
}