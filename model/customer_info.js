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
   
    
    $.ajax({
      url: url,
      type: "POST",
      success: function (data) {
          const tableBody = $('#data-table'); // Use jQuery selector for the table body
          tableBody.empty(); // Clear previous data
  
  
            if (data.customer_details && data.customer_details.length > 0) {
                var table = $('#interested').DataTable({
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
  
                data.customer_details.forEach(row => {
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
   
    
    $.ajax({
      url: url,
      type: "POST",
      success: function (data) {
          const tableBody = $('#data-table'); // Use jQuery selector for the table body
          tableBody.empty(); // Clear previous data
  
  
            if (data.tractorEnquiryData && data.tractorEnquiryData.length > 0) {
                var table = $('#purchase_tractor_table').DataTable({
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
  
                data.tractorEnquiryData.forEach(row => {
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
            } else if (data.harvesterEnquiryData && data.harvesterEnquiryData.length > 0) {
                var table = $('#purchase_harvester_table').DataTable({
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
  
                data.harvesterEnquiryData.forEach(row => {
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
            } else if (data.haatBazarEnquiry && data.haatBazarEnquiry.length > 0) {
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
  
                data.harvesterEnquiryData.forEach(row => {
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
            } else if (data.implementEnquiryData && data.implementEnquiryData.length > 0) {
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
  
                data.implementEnquiryData.forEach(row => {
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
            } else if (data.nurseryEnquiryData && data.nurseryEnquiryData.length > 0) {
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
  
                data.nurseryEnquiryData.forEach(row => {
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
            } else if (data.tyreEnquiryData && data.tyreEnquiryData.length > 0) {
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
  
                data.tyreEnquiryData.forEach(row => {
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
            } else if (data.engineOilEnquiryData && data.engineOilEnquiryData.length > 0) {
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
  
                data.engineOilEnquiryData.forEach(row => {
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
            } else if (data.dealerEnquiryData && data.dealerEnquiryData.length > 0) {
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
  
                data.dealerEnquiryData.forEach(row => {
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
            } else if (data.rentEnquiryData && data.rentEnquiryData.length > 0) {
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
  
                data.rentEnquiryData.forEach(row => {
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
            } else if (data.hireEnquiryData && data.hireEnquiryData.length > 0) {
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
  
                data.hireEnquiryData.forEach(row => {
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
  

  function getmylist() {
    var url =  "http://tractor-api.divyaltech.com/api/customer/get_sell_enquiry_data";
   
    
    $.ajax({
      url: url,
      type: "POST",
      success: function (data) {
          const tableBody = $('#data-table'); // Use jQuery selector for the table body
          tableBody.empty(); // Clear previous data
  
  
            if (data.customer_details && data.customer_details.length > 0) {
                var table = $('#interested').DataTable({
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
  
                data.customer_details.forEach(row => {
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

  function getuserdetail(){
    var url =  "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/21";
   
    
    $.ajax({
      url: url,
      type: "GET",
      success: function (data) {
        console.log(data,"data")
          const tableBody = $('#data-table'); // Use jQuery selector for the table body
          tableBody.empty(); // Clear previous data
  
  
            if (data.customerData && data.customerData.length > 0) {
                document.getElementById('firstname').value = data.customerData[0].first_name;
                document.getElementById('lastname').value = data.customerData[0].last_name;
                document.getElementById('phone').value = data.customerData[0].mobile;
                document.getElementById('email').value = data.customerData[0].email;
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
function edit_personal_detail(){
    $('#firstname').removeAttr("disabled")
    $('#lastname').removeAttr("disabled")
    $('#phone').removeAttr("disabled")
    $('#email').removeAttr("disabled")
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
        var email = $('#email').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
      
        // Prepare data to send to the server
        var paraArr = {
            'id':id,
          'first_name': first_name,
          'last_name':last_name,
          'email':email,
          'mobile':mobile,
          'state':state,
          'district':district,
          'tehsil':tehsil,
        };
       
    //   var url = apiBaseURL + 'customer_enquiries';
    var url = "http://tractor-api.divyaltech.com/api/customer/update_customer_personal_info/" + id;
        console.log(url);
      
      
        // Make an AJAX request to the server
        $.ajax({
          url: url,
          type: "PUT",
          data: paraArr,
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
            $('#email').attr("disabled")
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
            // 
          }
        });
      
  }

  