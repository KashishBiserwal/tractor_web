$(document).ready(function(){
    // $('#compareButton').click(store);
});



function get() {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_all_brands';

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            console.log(data);
            const selects = document.querySelectorAll('.brandselect');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Brand Name</option>';

                if (data.brands.length > 0) {
                    data.brands.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.brand_name;
                        option.value = row.id;
                        select.appendChild(option);
                    });

                    // Add event listener to brand dropdown
                    select.addEventListener('change', function () {
                        const selectedBrandId = this.value;
                        get_model(selectedBrandId);
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}



function get_model(brand_id) {
    var url = 'http://tractor-api.divyaltech.com/api/customer/get_brand_model/' + brand_id;

    $.ajax({
        url: url,
        type: "GET",
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (data) {
            const selects = document.querySelectorAll('.modelselect');

            selects.forEach(select => {
                select.innerHTML = '<option selected disabled value="">Please select Model Name</option>';

                if (data.model.length > 0) {
                    data.model.forEach(row => {
                        const option = document.createElement('option');
                        option.textContent = row.model;
                        option.value = row.model;
                        select.appendChild(option);
                    });

                    // Add event listener to model dropdown
                    select.addEventListener('change', function () {
                        const selectedModelId = this.value;
                        const selectedModelId1 = this.value;
                        const selectedModelId2 = this.value;
                        const selectedModelId3 = this.value;
                        getcompare_data(selectedModelId); 
                        getcompare_data1(selectedModelId1); 
                        getcompare_data2(selectedModelId2); 
                        getcompare_data3(selectedModelId3); 
                    });
                } else {
                    select.innerHTML = '<option>No valid data available</option>';
                }
            });
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
}


function getcompare_data() {
    var brand_id = $('#brand').val();
    var model_name1 = $('#model').val();
    console.log('model', model_name1);
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData) {
            // Handle success if needed
            var responseData = searchData;
            console.log('responseData',responseData);
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
function getcompare_data1() {
    var brand_id = $('#brand_1').val();
    var model_name1 = $('#model_1').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData1) {
            // Handle success if needed
            var responseData1 = searchData1;
            console.log('responseData',responseData1);
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
function getcompare_data2() {
    var brand_id = $('#brand_2').val();
    var model_name1 = $('#model_2').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData2) {
            var responseData2 = searchData2;
            console.log('responseData',responseData2);
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
function getcompare_data3() {
    var brand_id = $('#brand_3').val();
    var model_name1 = $('#model_3').val();
 

    var paraArr = {
        'brand_id': brand_id,
        'model': model_name1,
        
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

    $.ajax({
        url: url,
        type: 'POST',
        data: paraArr,
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function (searchData3) {
            var responseData3 = searchData3;
            console.log('responseData',responseData3);
        },
        error: function (error) {
            console.error('Error comparing tractors:', error);
        }
    });
}
get();

// function compareTractors() {
//     var brand_id_1 = $('#brand').val();
//     var model_name_1 = $('#model').val();
    
//     var brand_id_2 = $('#brand_1').val();
//     var model_name_2 = $('#model_1').val();

//     var brand_id_3 = $('#brand_2').val();
//     var model_name_3 = $('#model_2').val();

//     var brand_id_4 = $('#brand_3').val();
//     var model_name_4 = $('#model_3').val();

//     var paraArr = [
//         { 'brand_id': brand_id_1, 'model': model_name_1 },
//         { 'brand_id': brand_id_2, 'model': model_name_2 },
//         { 'brand_id': brand_id_3, 'model': model_name_3 },
//         { 'brand_id': brand_id_4, 'model': model_name_4 }
//     ];

//     var url = 'http://tractor-api.divyaltech.com/api/customer/compare_tractors';

//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: { 'data': paraArr },
//         headers: {
//             'Authorization': 'Bearer ' + localStorage.getItem('token')
//         },
//         success: function (responseData) {
//             // Handle success if needed
//             console.log('responseData', responseData);

//             // Redirect to compare_trac_model.php with the data
//             window.location.href = 'compare_trac_model.php?data=' + JSON.stringify(responseData);
//         },
//         error: function (error) {
//             console.error('Error comparing tractors:', error);
//         }
//     });
// }