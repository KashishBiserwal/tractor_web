$(document).ready(function() {
    $('#btn_edit').click(edit_detail_customer);
    console.log("ready!");
    getInterestedBuyer();
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
                { title: 'Model', data: function(row) {
                    return row.oil_model ? row.oil_model : row.model;
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
    // Remove click event listener for '.nav-link'
    $('.nav-link').off('click');

    // Show the Tractor table when the page loads
    $('#purchase_tractor_table').closest('.table-responsive').show();

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

    // Populate the Tractor table initially without requiring a click
    populateTable('#purchase_tractor_table', 'tractorEnquiryData', false, true); // Include "Name" and "Mobile Number"

    // Define table configurations for other tables
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

    function populateDataTable(tableIds, dataKeys, columns, isPagingEnabled, isSearchingEnabled) {
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
                tableIds.forEach(function(tableId) {
                    if ($.fn.DataTable.isDataTable(tableId)) {
                        $(tableId).DataTable().destroy();
                    }
                });

                tableIds.forEach(function(tableId, index) {
                    const tableBody = $(tableId + ' tbody');
                    tableBody.empty();

                    var tableConfig = {
                        paging: isPagingEnabled,
                        searching: isSearchingEnabled,
                        lengthChange: false,
                        columns: columns[index]
                    };

                    if (data.data && data.data[dataKeys[index]] && data.data[dataKeys[index]].length > 0) {
                        var table = $(tableId).DataTable(tableConfig);

                        data.data[dataKeys[index]].forEach(row => {
                            table.row.add(row).draw(false);
                        });

                    } else {
                        tableBody.html('<tr><td colspan="' + columns[index].length + '">No valid data available</td></tr>');
                    }
                });
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
    var tableIds = tables.map(function(table) { return table.tableId; });
    var dataKeys = tables.map(function(table) { return table.dataKey; });
    var columns = tables.map(function(table) { return table.columns; });

    populateDataTable(tableIds, dataKeys, columns, true, true);
});


function getuserdetail(id) {
    var url = "http://tractor-api.divyaltech.com/api/customer/get_customer_personal_info_by_id/" + id;

    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };
    var mobileNumber = localStorage.getItem('mobile');
    var paraArr = {
        'mobile': mobileNumber,
    };
    $.ajax({
        url: url,
        type: "GET",
        headers: headers,
        data: paraArr,
        success: function(data) {
            const userData = data.customerData[0];
            $('#idUser').val(userData.id);
            $('#firstname').val(userData.first_name);
            $('#lastname').val(userData.last_name);
            $('#phone').val(userData.mobile);
            populateStateDropdown(data, userData.state_id);
            populateDistrictDropdown(data, userData.district_id);
            populateTehsilDropdown(data, userData.tehsil_id);
        },
        error: function(error) {
            console.error('Error fetching data:', error);
        }
    });
}

function populateStateDropdown(data, stateId) {
    var stateDropdown = $('#state');
    stateDropdown.empty(); 
    const stateName = data.customerData[0].state_name;
    const stateIdValue = data.customerData[0].state_id;
    stateDropdown.append(
        `<option value="${stateIdValue}" selected>${stateName}</option>`
    );
}

function populateDistrictDropdown(data, districtId) {
    var districtDropdown = $('#dist');
    districtDropdown.empty(); // Clear existing options

    // Populate district dropdown from response data
    const districtName = data.customerData[0].district_name;
    const districtIdValue = data.customerData[0].district_id;

    districtDropdown.append(
        `<option value="${districtIdValue}" selected>${districtName}</option>`
    );
}

// Populate tehsil dropdown dynamically
function populateTehsilDropdown(data, tehsilId) {
    var tehsilDropdown = $('#tehsil');
    tehsilDropdown.empty(); // Clear existing options

    // Populate tehsil dropdown from response data
    const tehsilName = data.customerData[0].tehsil_name;
    const tehsilIdValue = data.customerData[0].tehsil_id;

    tehsilDropdown.append(
        `<option value="${tehsilIdValue}" selected>${tehsilName}</option>`
    );
}


var userId = localStorage.getItem('id');
getuserdetail(userId);


function edit_personal_detail(){
    $('#firstname').removeAttr("disabled")
    $('#lastname').removeAttr("disabled")
    $('#phone').removeAttr("disabled")
    $('#state').removeAttr("disabled")
    $('#dist').removeAttr("disabled")
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
        var district = $('#dist').val();
        var tehsil = $('#tehsil').val();
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
            $('#firstname').attr('disabled');
            $('#lastname').attr("disabled")
            $('#phone').attr("disabled")
            $('#state').attr("disabled")
            $('#dist').attr("disabled")
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
 