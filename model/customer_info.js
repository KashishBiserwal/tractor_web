$(document).ready(function() {
    $('#btn_edit').click(edit_detail_customer);
    console.log("ready!");
    getInterestedBuyer();
    // getmylist();
    // getpurchase_requestlist();
    // getuserdetail();
    getpurchase_Nursery();
    getpurchase_Tyre();
    getpurchase_Dealer();
    getpurchase_haatbazar();


});


function getInterestedBuyer() {
    var url =  "http://tractor-api.divyaltech.com/api/customer/interested_buyer_list";
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
          const tableBody = $('#data-table-tractor'); 
          tableBody.empty(); 
  
  
            if (data.data.tractor_harvester_implements && data.data.tractor_harvester_implements.length > 0) {
                var table = $('#list_interested_buyers_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                        { title: 'Name' },
                        { title: 'Mobile'},
                        { title: 'Price' }
                    ]
                });
  
                data.data.tractor_harvester_implements.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;
  
                    // Add row to DataTable
                    table.row.add([
                        row.enquiry_type,
                        row.date,
                        row.brand_name,
                        row.model,
                        fullName,
                        row.mobile,
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
  
  function getpurchase_requestlist(tableId, data, isEngineOilTable, includeNameAndMobile) {
    const tableBody = $(tableId + ' tbody');
    tableBody.empty();

    if (data && data.length > 0) {
        var tableConfig = {
            paging: true, // Enable pagination
            searching: true, // Enable search box
            lengthChange: true, // Enable length change
            columns: [
                { title: 'Request Type', data: 'request_type' },
                { title: 'Date', data: 'date' },
                { title: 'Brand', data: 'brand_name' },
                { title: 'model', data: function(row) {
                    return row.oil_model ? row.oil_model : row.model; // Use oil_model if available, otherwise use model
                }},
            ]
        };

        // Optionally include "Name" and "Mobile Number" columns based on the condition
        if (includeNameAndMobile) {
            tableConfig.columns.push(
                { title: 'Name', data: function(row) { return row.first_name + ' ' + row.last_name; } },
                { title: 'Mobile Number', data: 'mobile' }
            );
        }

        // Initialize DataTable with the specified configuration
        var table = $(tableId).DataTable(tableConfig);

        data.forEach(row => {
            // Add row to DataTable
            table.row.add(row).draw(false);
        });

    } else {
        tableBody.html('<tr><td colspan="4">No valid data available</td></tr>'); // Adjust colspan based on column count
    }
}

$(document).ready(function() {
    // Function to fetch data and populate table
    function populateTable(tableId, dataKey, isEngineOilTable, includeNameAndMobile) {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
        var headers = {
            'Authorization': localStorage.getItem('token_customer')
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
                var tableData = data.data[dataKey];
                getpurchase_requestlist(tableId, tableData, isEngineOilTable, includeNameAndMobile);
            },
            error: function (error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Populate the first table initially
    populateTable('#purchase_tractor_table', 'tractorEnquiryData', false, true); // Include "Name" and "Mobile Number"

    // Define table configurations
    var tables = [
        { tableId: '#purchase_harvester_table', dataKey: 'harvesterEnquiryData', isEngineOilTable: false, includeNameAndMobile: false },
        { tableId: '#purchase_implements_table', dataKey: 'implementEnquiryData', isEngineOilTable: false, includeNameAndMobile: true },
        { tableId: '#purchase_engineoil_table', dataKey: 'engineOilEnquiryData', isEngineOilTable: true, includeNameAndMobile: false },
        { tableId: '#purchase_hire_table', dataKey: 'hireEnquiryData', isEngineOilTable: false, includeNameAndMobile: true },
        // Add more tables as needed
    ];

    // Populate other tables
    tables.forEach(function(table) {
        // Check if DataTable is already initialized for the current table
        if (!$(table.tableId).hasClass('dataTable')) {
            populateTable(table.tableId, table.dataKey, table.isEngineOilTable, table.includeNameAndMobile);
        }
    });
});



function getpurchase_haatbazar() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
            var table;

            if (data.data.haatBazarEnquiry && data.data.haatBazarEnquiry.length > 0) {
                const tableBody = $('#data-table5'); // Use jQuery selector for the table body
                tableBody.empty();
                table = $('#purchase_haatbazar_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Category Name' },
                        { title: 'Sub Category Name' },
                        { title: 'Seller Name' },
                        { title: 'Mobile Number' },
                    ]
                });

                data.data.haatBazarEnquiry.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;

                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.category_name,
                        row.sub_category_name,
                        fullName,
                        row.mobile,
                    ]).draw(false);

                });

            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getpurchase_Nursery() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
            var table;

            if (data.data.nurseryEnquiryData && data.data.nurseryEnquiryData.length > 0) {
                const tableBody = $('#data-table5'); // Use jQuery selector for the table body
                tableBody.empty();
                table = $('#purchase_nursery_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Nursery Name' },
                        { title: 'Seller Name' },
                        { title: 'Mobile' },
                       
                    ]
                });

                data.data.nurseryEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;

                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.nursery_name,
                        fullName,
                        row.mobile,
                       
                    ]).draw(false);

                });

            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}
function getpurchase_Tyre() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
            var table;

            if (data.data.tyreEnquiryData && data.data.tyreEnquiryData.length > 0) {
                const tableBody = $('#data-table6'); // Use jQuery selector for the table body
                tableBody.empty();
                table = $('#purchase_tyre_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Model' },
                  
                    ]
                });

                data.data.tyreEnquiryData.forEach(row => {
                    const fullName = row.first_name + ' ' + row.last_name;

                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.brand_name,
                        row.tyre_model,
                       
                    ]).draw(false);

                });

            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

function getpurchase_Dealer() {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
            var table;

            if (data.data.dealerEnquiryData && data.data.dealerEnquiryData.length > 0) {
                const tableBody = $('#data-table8'); // Use jQuery selector for the table body
                tableBody.empty();
                table = $('#purchase_dealer_table').DataTable({
                    paging: true,
                    searching: true,
                    columns: [
                        { title: 'Request Type' },
                        { title: 'Date' },
                        { title: 'Brand' },
                        { title: 'Dealer Name' },
                        { title: 'Mobile' },
                  
                    ]
                });

                data.data.dealerEnquiryData.forEach(row => {

                    // Add row to DataTable
                    table.row.add([
                        row.request_type,
                        row.date,
                        row.brand_name,
                        row.dealer_name,
                        row.mobile,
                        
                    ]).draw(false);

                });

            }
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}

$(document).ready(function() {
    function setTableWidth() {
        $('.table-responsive').each(function() {
            $(this).find('table').addClass('w-100');
        });
    }

    function populateDataTable(tableId, dataKey, columns, isPagingEnabled, isSearchingEnabled) {
        var url = "http://tractor-api.divyaltech.com/api/customer/get_sell_enquiry_data";
        var headers = {
            'Authorization': localStorage.getItem('token_customer')
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
            success: function(data) {
                console.log(data, 'data');
                const tableBody = $(tableId + ' tbody');
                tableBody.empty();

                // Destroy DataTable instance if it already exists
                if ($.fn.DataTable.isDataTable(tableId)) {
                    $(tableId).DataTable().destroy();
                }

                var tableConfig = {
                    paging: isPagingEnabled,
                    searching: isSearchingEnabled,
                    lengthChange: false,
                    columns: columns
                };

                if (data.data && data.data[dataKey] && data.data[dataKey].length > 0) {
                    var table = $(tableId).DataTable(tableConfig);

                    data.data[dataKey].forEach(row => {
                        // Add row to DataTable
                        table.row.add(row).draw(false);
                    });

                } else {
                    tableBody.html('<tr><td colspan="' + columns.length + '">No valid data available</td></tr>');
                }
                setTableWidth();
            },
            error: function(error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    // Define tables configuration
    var tables = [{
            tableId: '#list_purchase_tractor_table',
            dataKey: 'sellTractorData',
            columns: [
                { data: 'request_type' },
                { data: 'date' },
                { data: 'brand_name' },
                { data: 'model' },
                { data: 'purchase_year' },
                { data: 'price' }
            ],
            isPagingEnabled: true,
            isSearchingEnabled: true
        },
        {
            tableId: '#list_purchase_harvest_table',
            dataKey: 'sellHarvesterData',
            columns: [
                { data: 'request_type' },
                { data: 'date' },
                { data: 'brand_name' },
                { data: 'model' },
                { data: 'purchase_year' },
                { data: 'price' }
            ],
            isPagingEnabled: true,
            isSearchingEnabled: true
        },
        {
            tableId: '#list_purchase_imple_table',
            dataKey: 'sellImplementData',
            columns: [
                { data: 'request_type' },
                { data: 'date' },
                { data: 'brand_name' },
                { data: 'model' },
                { data: 'purchase_year' },
                { data: 'price' }
            ],
            isPagingEnabled: true,
            isSearchingEnabled: true
        },
        {
            tableId: '#list_purchase_haatbazar_table',
            dataKey: 'sellHaatBazarEnquiry',
            columns: [
                { data: 'request_type' },
                { data: 'date' },
                { data: 'category_name' },
                { data: 'sub_category_name' },
                { data: 'quantity' },
                { data: 'price' }
            ],
            isPagingEnabled: true,
            isSearchingEnabled: true
        }
    ];

    // Populate all tables with data initially
    tables.forEach(function(config) {
        populateDataTable(config.tableId, config.dataKey, config.columns, config.isPagingEnabled, config.isSearchingEnabled);
        // Set tables width to 100%
        $(config.tableId).addClass('w-100');
    });

    $('.nav-link').on('click', function() {
        var tableIdToShow = $(this).attr('href');
        $('.table-responsive').hide();
        $(tableIdToShow).closest('.table-responsive').show();
    });
    $('.table-responsive').hide();
});





  
function getuserdetail(id) {
    console.log(id,'sdfghjc id');
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
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
                document.getElementById('idUser').value = data.customerData[0].id;
                document.getElementById('firstname').value = data.customerData[0].first_name;
                document.getElementById('lastname').value = data.customerData[0].last_name;
                document.getElementById('phone').value = data.customerData[0].mobile;
                // document.getElementById('email').value = data.customerData[0].email;
                document.getElementById('state').value = data.customerData[0].state_name;
                document.getElementById('district').value = data.customerData[0].district_name;   
                document.getElementById('tehsil').value = data.customerData[0].tehsil_name;
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
        console.log('jfhfhw');
        var first_name = $('#firstname').val();
        var edituser = $('#idUser').val();
        var last_name = $('#lastname').val();
        var mobile = $('#phone').val();
        var state = $('#state').val();
        var district = $('#district').val();
        var tehsil = $('#tehsil').val();
      
        // Prepare data to send to the server
        var paraArr = {
          'id':edituser,
          'first_name': first_name,
          'last_name':last_name,
          'mobile':mobile,
          'state':state,
          'district':district,
          'tehsil':tehsil,
        };
       
        var url = "http://tractor-api.divyaltech.com/api/customer/update_customer_personal_info/" + edituser;
        console.log(url);
      
        var headers = {
            'Authorization': localStorage.getItem('token_customer')
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
            $('#state').attr("disabled")
            $('#district').attr("disabled")
            $('#tehsil').attr("disabled")
            $(".edit_presonal_detail_btn").hide();
            window.location.reload();
        
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
  

  //   function getpurchase_requestlist() {
//     var url =  "http://tractor-api.divyaltech.com/api/customer/get_purchase_enquiry_data";
//     var headers = {
//         'Authorization': localStorage.getItem('token')
//       };
//       var mobileNumber = localStorage.getItem('mobile');
//       var paraArr = {
//         'mobile': mobileNumber,
//       };
    
//     $.ajax({
//         url: url,
//         type: "POST",
//         headers: headers,
//         data:paraArr,
//       success: function (data) {
//         // const tableBody = $('.data-table'); // Use jQuery selector for the table body
//         // tableBody.empty(); // Clear previous data

//         var table;
  
//             if (data.data.tractorEnquiryData && data.data.tractorEnquiryData.length > 0) {
//                 const tableBody = $('#data-table1'); // Use jQuery selector for the table body
//                 tableBody.empty(); 
//                 table = $('#purchase_tractor_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Request Type' },
//                         { title: 'Date' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'Seller Name' },
//                         { title: 'Mobile' },
//                     ]
//                 });
  
//                 data.data.tractorEnquiryData.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.request_type,
//                         row.date,
//                         row.brand_name,
//                         row.model,
//                         fullName,
//                         row.mobile,
//                     ]).draw(false);
  
//                 });
//               }else if (data.data.engineOilEnquiryData && data.data.engineOilEnquiryData.length > 0) {
//                     const tableBody = $('#data-table7'); // Use jQuery selector for the table body
//                     tableBody.empty();
//                     var table = $('#purchase_engineoil_table').DataTable({
//                         paging: true,
//                         searching: true,
//                         columns: [
//                             { title: 'Request Type' },
//                             { title: 'Date' },
//                             { title: 'Brand' },
//                             { title: 'Model' },
//                             { title: 'Name' },
//                             { title: 'Mobile' }
//                         ]
//                     });
      
//                     data.data.engineOilEnquiryData.forEach(row => {
                        
//                         const fullName = row.first_name + ' ' + row.last_name;
      
//                         // Add row to DataTable
//                         table.row.add([
//                             row.request_type,
//                             row.date,
//                             row.brand_name,
//                             row.oil_model,
//                             fullName,
//                             row.mobile,
//                         ]).draw(false);
      
//                     });
//             } else if (data.data.harvesterEnquiryData && data.data.harvesterEnquiryData.length > 0) {
//                 const tableBody = $('#data-table2'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 table = $('#purchase_harvester_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Request Type' },
//                         { title: 'Date' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'Name' },
//                         { title: 'Mobile' },
//                     ]
//                 });
  
//                 data.data.harvesterEnquiryData.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.request_type,
//                         row.date,
//                         row.brand_name,
//                         row.model,
//                         fullName,
//                         row.mobile,
//                     ]).draw(false);
  
//                 });
//             } else if (data.data.haatBazarEnquiry && data.data.haatBazarEnquiry.length > 0) {
//                 const tableBody = $('#data-table3'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_haatbazar_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Request Type' },
//                         { title: 'Date' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'Name' },
//                         { title: 'Mobile' },
//                     ]
//                 });
  
//                 data.data.haatBazarEnquiry.forEach(row => {
                   
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.request_type,
//                         row.date,
//                         row.brand_name,
//                         row.model,
//                         fullName,
//                         row.mobile,
//                     ]).draw(false);
  
//                 });
//             } else if (data.data.implementEnquiryData && data.data.implementEnquiryData.length > 0) {
//                 const tableBody = $('#data-table4'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_implements_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Type' },
//                         { title: 'Name' },
//                         { title: 'Mobile Number' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'State' }
//                     ]
//                 });
  
//                 data.data.implementEnquiryData.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.date,
//                         row.brand_name,
//                         row.tyre_model,
//                         fullName,
//                         row.mobile,
//                         row.state,
//                         row.district,
//                     ]).draw(false);
  
//                 });
//             } else if (data.data.nurseryEnquiryData && data.data.nurseryEnquiryData.length > 0) {
//                 const tableBody = $('#data-table5'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_nursery_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Type' },
//                         { title: 'Name' },
//                         { title: 'Mobile Number' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'State' }
//                     ]
//                 });
  
//                 data.data.nurseryEnquiryData.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.date,
//                         row.brand_name,
//                         row.tyre_model,
//                         fullName,
//                         row.mobile,
//                         row.state,
//                         row.district,
//                     ]).draw(false);
  
//                 });
//             } else if (data.data.tyreEnquiryData && data.data.tyreEnquiryData.length > 0) {
//                 const tableBody = $('#data-table6'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_tyre_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Type' },
//                         { title: 'Name' },
//                         { title: 'Mobile Number' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'State' }
//                     ]
//                 });
  
//                 data.data.tyreEnquiryData.forEach(row => {
                   
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.date,
//                         row.brand_name,
//                         row.tyre_model,
//                         fullName,
//                         row.mobile,
//                         row.state,
//                         row.district,
//                     ]).draw(false);
  
//                 });
            
//             } else if (data.data.dealerEnquiryData && data.data.dealerEnquiryData.length > 0) {
//                 const tableBody = $('#data-table8'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_tyre_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Type' },
//                         { title: 'Name' },
//                         { title: 'Mobile Number' },
//                         { title: 'Brand' },
//                         { title: 'Model' },
//                         { title: 'State' }
//                     ]
//                 });
  
//                 data.data.dealerEnquiryData.forEach(row => {
//                     const fullName = row.first_name + ' ' + row.last_name;
  
//                     // Add row to DataTable
//                     table.row.add([
//                         row.date,
//                         row.brand_name,
//                         row.tyre_model,
//                         fullName,
//                         row.mobile,
//                         row.state,
//                         row.district,
//                     ]).draw(false);
  
//                 });
//             } else if (data.data.hireEnquiryData && data.data.hireEnquiryData.length > 0) {
//                 const tableBody = $('#data-table9'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                 var table = $('#purchase_tyre_table').DataTable({
//                     paging: true,
//                     searching: true,
//                     columns: [
//                         { title: 'Date' },
//                         { title: 'Request Type' },
//                     ]
//                 });
  
//                 data.data.hireEnquiryData.forEach(row => {
//                     // Add row to DataTable
//                     table.row.add([
//                         row.date,
//                         row.request_type,
//                     ]).draw(false);
  
//                 });
//             } 
//             if (table) {
//                 data.data.tractorEnquiryData.forEach(row => {
//                     const tableBody = $('#data-table1'); // Use jQuery selector for the table body
//                 tableBody.empty();
//                     const fullName = row.first_name + ' ' + row.last_name;

//                     // Add row to DataTable
//                     table.row.add([
//                         row.request_type,
//                         row.date,
//                         row.brand_name,
//                         row.model,
//                         fullName,
//                         row.mobile,
//                     ]).draw(false);
//                 });
//             } else {
//                 tableBody.innerHTML = '<tr><td colspan="9">No valid data available</td></tr>';
//             }
//         },
//         error: function (error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }