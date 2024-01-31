$(document).ready(function () {
    $('#request-otp').click(get_otp);
});

// insert data
function get_otp() {
       var phone = $('#phone').val();
       var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    
       var paraArr = {
        'mobile': phone,
      };
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
          
         },
         error: function (error) {
           console.error('Error fetching data:', error);
         }
       });
     }
   