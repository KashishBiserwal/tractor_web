 
   $(document).ready(function(){
    $('#implement_btn').click(edit_id);
    // $('#Search').click(search);
          jQuery.validator.addMethod("customPhoneNumber", function(value, element) {
          return /^[6-9]\d{9}$/.test(value); 
          }, "Phone number must start with 6 or above");
    
            
      $("#old_farm_implement_from").validate({
      
      rules: {
        bname: {
          required: true,
        },
        // mname: {
        //   required: true,
        // },
        fname: {
          required: true,
        },
        last_name:{
          required: true,
        },
        date:{
          required: true,
        },
        year:{
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
        state:{
          required: true,
        },
        dist:{
          required: true,
        }
    },
        messages:{
          bname: {
            required: "This field is required",
          },
        //   mname: {
        //     required: "This field is required",
        //   },
        fname: {
          required: "This field is required",
        },
        last_name:{
          required: "This field is required",
        },
        date: {
          required: "This field is required",
        },
        year: {
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
        state: {
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
  
    
      $("#implement_btn").on("click", function () {
    
        $("#old_farm_implement_from").valid();
      
      });
      
  
    });
 
 
 
 // fetch data
 function get_tractor_list() {
    var apiBaseURL = APIBaseURL;
    var url = apiBaseURL + 'get_enquiry_data_for_old_implements';
    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const tableBody = document.getElementById('data-table');

            if (data.getOldImplementEnquiry && data.getOldImplementEnquiry.length > 0) {
                let tableData = [];
                let counter = 1;

                data.getOldImplementEnquiry.forEach(row => {
                    let action = `
                        <div class="d-flex">
                            <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="fetch_data(${row.product_id});" data-bs-target="#old_farm_enq">
                            <i class="fa-solid fa-eye" style="font-size: 11px;"></i></button>
                            <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.product_id});" data-bs-toggle="modal" data-bs-target="#old_farm_implement_enq" id="yourUniqueIdHere" style="padding:5px">
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
                        row.name,
                        row.mobile,
                        row.purchase_year,
                        row.state,
                        row.district,
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
                        { title: 'Name' },
                        { title: 'Mobile' },
                        { title: 'Year' },
                        { title: 'State' },
                        { title: 'District' },
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
