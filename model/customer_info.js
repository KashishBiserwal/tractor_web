$(document).ready(function() {
    // $('#submit_enquiry').click(store);
    console.log("ready!");
    getInterestedBuyer();
    getmylist();
    getpurchase_requestlist();
    getuserdetail();


});


function getInterestedBuyer() {
    var url =  "http://tractor-api.divyaltech.com/api/customer/interested_buyer_list";
    var headers = {
        'Authorization': localStorage.getItem('token')
      };
      var mobileNumber = localStorage.getItem('mobile');
      var paraArr = {
        'mobile': mobileNumber,
      };
    $.ajax({
      url: url,
      type: "POST",
      headers: headers,
      data: paraArr,
      success: function (data) {
          const tableBody = $('#data-table'); 
          tableBody.empty(); 
  
  
            if (data.data.customer_details && data.data.customer_details.length > 0) {
                var table = $('#purchase_haatbazar_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.customer_details.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
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
  function getpurchase_requestlist() {
    var url =  "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
    var headers = {
        'Authorization': localStorage.getItem('token')
      };
      var mobileNumber = localStorage.getItem('mobile');
      var paraArr = {
        'mobile': mobileNumber,
      };
    
    $.ajax({
        url: url,
        type: "POST",
        headers: headers,
        data:paraArr,
      success: function (data) {
        // const tableBody = $('.data-table'); // Use jQuery selector for the table body
        // tableBody.empty(); // Clear previous data

        var table;
  
            if (data.data.tractorEnquiryData && data.data.tractorEnquiryData.length > 0) {
                const tableBody = $('#data-table1'); // Use jQuery selector for the table body
                tableBody.empty(); 
                table = $('#purchase_tractor_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Seller Name' },
                        { title: 'Mobile' },
                    ]
                });
  
                data.data.tractorEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.brand_name,
                        row.model,
                        fullName,
                        row.mobile,
                    ]).draw(false);
  
                });
            } else if (data.data.harvesterEnquiryData && data.data.harvesterEnquiryData.length > 0) {
                const tableBody = $('#data-table2'); // Use jQuery selector for the table body
                tableBody.empty();
                table = $('#purchase_harvester_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.harvesterEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.haatBazarEnquiry && data.data.haatBazarEnquiry.length > 0) {
                const tableBody = $('#data-table3'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_haatbazar_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.harvesterEnquiryData.forEach(row => {
                   
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.implementEnquiryData && data.data.implementEnquiryData.length > 0) {
                const tableBody = $('#data-table4'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_implements_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.implementEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.nurseryEnquiryData && data.data.nurseryEnquiryData.length > 0) {
                const tableBody = $('#data-table5'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_nursery_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.nurseryEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.tyreEnquiryData && data.data.tyreEnquiryData.length > 0) {
                const tableBody = $('#data-table6'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_tyre_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.tyreEnquiryData.forEach(row => {
                   
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.engineOilEnquiryData && data.data.engineOilEnquiryData.length > 0) {
                const tableBody = $('#data-table7'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_tyre_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.engineOilEnquiryData.forEach(row => {
                    
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.dealerEnquiryData && data.data.dealerEnquiryData.length > 0) {
                const tableBody = $('#data-table8'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_tyre_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'Name' },
                        { title: 'Mobile Number' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'State' }
                    ]
                });
  
                data.data.dealerEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                        fullName,
                        row.mobile,
                        row.state,
                        row.district,
                    ]).draw(false);
  
                });
            } else if (data.data.hireEnquiryData && data.data.hireEnquiryData.length > 0) {
                const tableBody = $('#data-table9'); // Use jQuery selector for the table body
                tableBody.empty();
                var table = $('#purchase_tyre_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Date' },
                        { title: 'Request Type' },
                    ]
                });
  
                data.data.hireEnquiryData.forEach(row => {
                    // Add row to DataTable
                    table.row.add([
                        row.date,
                        row.request_type,
                    ]).draw(false);
  
                });
            } 
            if (table) {
                data.data.tractorEnquiryData.forEach(row => {
                    const tableBody = $('#data-table1'); // Use jQuery selector for the table body
                tableBody.empty();
                    const fullName = row.first_name + ' ' + row.last_name;

                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.brand_name,
                        row.model,
                        fullName,
                        row.mobile,
                    ]).draw(false);
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

  function getmylist() {
    var url =  "http://tractor-api.divyaltech.com/api/customer/get_sell_enquiry_data";

    
    var headers = {
        'Authorization': localStorage.getItem('token')
      };
      var mobileNumber = localStorage.getItem('mobile');
      var paraArr = {
        'mobile': mobileNumber,
      };
    
    $.ajax({
      url: url,
      type: "POST",
      headers:headers,
      data: paraArr,

      success: function (data) {
        console.log(data,'data');
          const tableBody = $('#data-table11'); 
          tableBody.empty(); 
  
            if (data.data.sellHaatBazarEnquiry && data.data.sellHaatBazarEnquiry.length > 0) {
                var table = $('#list_purchase_haatbazar_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Type' },
                        { title: 'date' },
                        { title: 'Category Name' },
                        { title: 'Subcategory Name' },
                        { title: 'Quantity' },
                        { title: 'price' },
                       
                    ]
                });
                data.data.sellHaatBazarEnquiry.forEach(row => {
                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.category_name,
                        row.sub_category_name,
                        row.quantity,
                        row.price,
                        
                    ]).draw(false);
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

  function getuserdetail(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;

    var headers = {
        'Authorization': localStorage.getItem('token')
    };
    var mobileNumber = localStorage.getItem('mobile');
    var paraArr = {
      'mobile': mobileNumber,
    };
    // Make an AJAX GET request to the API
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        data: paraArr,
        success: function (data) {
            console.log(data, "data");

            // Clear the existing data in the table body
            const tableBody = $('#data-table');
            tableBody.empty();

            // Check if customer data exists and has at least one entry
            if (data.customerData && data.customerData.length > 0) {
                // Populate form fields with customer data
                document.getElementById('firstname').value = data.customerData[0].first_name;
                document.getElementById('lastname').value = data.customerData[0].last_name;
                document.getElementById('phone').value = data.customerData[0].mobile;
                // document.getElementById('email').value = data.customerData[0].email;
                document.getElementById('state').value = data.customerData[0].state;
                document.getElementById('district').value = data.customerData[0].district;   
                document.getElementById('tehsil').value = data.customerData[0].tehsil;
            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
var userId = localStorage.getItem('id');


getuserdetail(userId);


function edit_personal_detail(){
    $('#firstname').removeAttr("disabled")
    $('#lastname').removeAttr("disabled")
    $('#phone').removeAttr("disabled")
    // $('#email').removeAttr("disabled")
    $('#state').removeAttr("disabled")
    $('#district').removeAttr("disabled")
    $('#tehsil').removeAttr("disabled")
    $(".edit_presonal_detail_btn").show();
}


function edit_detail_customer() {
        // event.preventDefault();
        console.log('jfhfhw');
        var first_name = $('#firstname').val();
        var id = "21";
        var last_name = $('#lastname').val();
        var mobile = $('#phone').val();
        // var email = $('#email').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
      
        // Prepare data to send to the server
        var paraArr = {
            'id':id,
          'first_name': first_name,
          'last_name':last_name,
        //   'email':email,
          'mobile':mobile,
          'state':state,
          'district':district,
          'tehsil':tehsil,
        };
       
    //   var url = apiBaseURL + 'customer_enquiries';
    var url = "http://tractor-api.divyaltech.com/api/customer/update_customer_personal_info/" + id;
        console.log(url);
      
        var headers = {
            'Authorization': localStorage.getItem('token')
          };
        //   var mobileNumber = localStorage.getItem('mobile');
        //   var paraArr = {
        //     'mobile': mobileNumber,
        //   };
        $.ajax({
          url: url,
          type: "PUT",
          data: paraArr,
          headers:headers,
          success: function (result) {
            console.log(result, "result");
            $("#used_tractor_callbnt_").modal('hide'); 
            var msg = "Added successfully !"
            $("#errorStatusLoading").modal('show');    
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Congratulation..! Requested Successful</p>');
         
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/7efs.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
          
            // getOldTractorById();
            console.log("Add successfully");
            $('#firstname').attr('disabled');
            $('#lastname').attr("disabled")
            $('#phone').attr("disabled")
            // $('#email').attr("disabled")
            $('#state').attr("disabled")
            $('#district').attr("disabled")
            $('#tehsil').attr("disabled")
            $(".edit_presonal_detail_btn").hide();
           // location.reload();
           getuserdetail();
          },
          error: function (error) {
            console.error('Error fetching data:', error);
            var msg = error;
            $("#errorStatusLoading").modal('show');
            $("#errorStatusLoading").find('.modal-title').html('<p class="text-center">Process Failed..! Enter Valid Detail</p>');
            $("#errorStatusLoading").find('.modal-body').html(msg);
            $("#errorStatusLoading").find('.modal-body').html('<img src="assets/images/comp_3.gif" style="display:block; margin:0 auto;" class="w-50 text-center" alt="Successfull Request"></img>');
           
          }
        });
      
  }

  