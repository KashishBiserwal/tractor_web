$(document).ready(function () {
    $('#request-otp').click(get_otp);
    $('#Verify').click(verifyotp);
  //   if (document.getElementById('Verify')) {
  //     document.getElementById('Verify').addEventListener('click', function(event) {
  //         event.preventDefault();
  //         showOverlay(); // Show loading spinner
  //         verifyotp();
  //     });
  // }
});

// insert data
function get_otp() {
       var phone = $('#phone').val();
       var url = "http://tractor-api.divyaltech.com/api/customer/customer_login";
    
       var paraArr = {
        'mobile': phone,
      };
      //  var token = localStorage.getItem('token');
      //   var headers = {
      //   'Headers': 'Bearer ' + token
      //   };
       $.ajax({
         url: url,
         type: "POST",
         data: paraArr,
        //  headers: headers,
         success: function (result) {
           console.log(result, "result");
          
         },
         error: function (error) {
           console.error('Error fetching data:', error);
         }
       });
     }
   
  //    function showOverlay() {
  //     $("#overlay").fadeIn(300);
  // }
  
  // function hideOverlay() {
  //     $("#overlay").fadeOut(300);
  // }
  
  function verifyotp() {
      var mobile = document.getElementById('phone').value;
      var otp = document.getElementById('otp').value;
  
      var paraArr = {};
      paraArr['mobile'] = mobile;
      paraArr['otp'] = otp;

      var token = localStorage.getItem('token');
      // var headers = {
      // // 'Headers': 'Authorization' + token
      // 'Headers': 'Authorization ' + localStorage.getItem('token')
      // };
  // var apiBaseURL =APIBaseURL;
  var url = 'http://tractor-api.divyaltech.com/api/customer/verify_otp';
      $.ajax({
          url: url,
          type: "POST",
          // headers:headers,
          contentType: "application/json", 
          data: JSON.stringify(paraArr), 
          success: function (result) {
            console.log(result)
               console.log(result, 'login success');
              localStorage.setItem('token', result.token);
              localStorage.setItem('mobile', mobile);
              localStorage.setItem('otp', otp);
              // localStorage.setItem('expireIn', result.expires_in);
              const d = new Date();
              d.setTime(d.getTime() + 60 * 60 * 1000);
              var expires_in = d;
              console.log(expires_in,"expires_in")
              localStorage.setItem('expireIn', expires_in);
              console.log(expires_in,'expiry timeeeeee');
              window.location.href = baseUrl + "userProfile.php"; 
             
         
  
          },
          error: function (xhr, textStatus, errorThrown) {
              console.log(xhr.status, 'error');
              if (xhr.status === 401) {
                  console.log('Invalid credentials');
                  var htmlcontent = `<p>Invalid credentials!</p>`;
              document.getElementById("error_message").innerHTML = htmlcontent;
                 
              } else if (xhr.status === 403) {
                  console.log('Forbidden: You don\'t have permission to access this resource.');
                  var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
                  document.getElementById("error_message").innerHTML = htmlcontent;
                 
              } else {
                  console.log('An error occurred:', textStatus, errorThrown);
                  var htmlcontent = `<p>An error occurred while processing your request.</p>`;
              document.getElementById("error_message").innerHTML = htmlcontent;
                  
              }
          },
          // complete: function () {
          //     // Hide the spinner after the API call is complete
          //     hideOverlay();
          // },
          
      });
  }