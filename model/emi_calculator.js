
$(document).ready(function() {
    console.log("ready!");

    $('#calculateEMI').click(store);
    
});


function store() {
    var brand = $('#brandSelect').val();
    var model = $('#modelSelect').val();

    var paraArr = {
        'brand_id': brand,
        'model': model,
      
    };

    var url = 'http://tractor-api.divyaltech.com/api/customer/get_price_by_brand_model';
    $.ajax({
        url: url,
        type: "POST",
        data: paraArr,
        success: function (result) {
            console.log(result);
           
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            // Handle errors here
        },
    });
}