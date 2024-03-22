$(document).ready(function(){

    // populateStates();
  
    // Listen for changes in the state dropdown and populate districts accordingly
    // $('#state_state').change(function() {
    //     var state_id = $(this).val();
    //     populateDistricts(state_id);
    // });
  
    // Listen for changes in the district dropdown and populate tehsils accordingly
    // $('#dist2').change(function() {
    //     var district_id = $(this).val();
    //     populateTehsils(district_id);
    // });
  
    //   $('#subbtn').click(edit_id_data);
    //   $('#subbtn_2').click(edit_id_data_2);
    //   $('#Reset').click(reset);
  
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
        function get_dealers() {
            var apiBaseURL = APIBaseURL;
            var url = apiBaseURL + 'get_dealer_enquiry_data_for_particular_dealer';
            console.log('dfghjkiuytgf');
            
            $.ajax({
                url: url,
                type: "GET",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function (data) {
                    const tableBody = $('#data-table1');
                    tableBody.empty();
          
                    if (data.dealer_enquiry_details_for_particular_data && data.dealer_enquiry_details_for_particular_data.length > 0) {
                        // Reverse the array to display latest data at the top
                        data.dealer_enquiry_details_for_particular_data.reverse();
          
                        var table = $('#example1').DataTable({
                            paging: true,
                            searching: true,
                            columns: [
                                { title: 'S.No.' },
                                { title: 'Date' },
                                { title: 'Brand Name' },
                                { title: 'Name' },
                                { title: 'Mobile' },
                                { title: 'State' },
                                { title: 'District' },
                                { title: 'Action', orderable: false }
                            ]
                        });
          
                        let serialNumber = 1;
          
                        data.become_dealer_enquiry_details.forEach(row => {
                            table.row.add([
                                serialNumber,
                                row.date,
                                row.brand_name,
                                row.first_name,
                                row.mobile,
                                row.state_name,
                                row.district_name,
                                `<div class="d-flex">
                                    <button class="btn btn-warning btn-sm text-white mx-1" data-bs-toggle="modal" onclick="openViewdatacertifed(${row.id});" data-bs-target="#view_model_dealers">
                                        <i class="fas fa-eye" style="font-size: 11px;"></i>
                                    </button> 
                                    <button class="btn btn-primary btn-sm btn_edit" onclick="fetch_edit_data(${row.id});" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="yourUniqueIdHere">
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
          