
$(document).ready(function () {
  // Check if user is already logged in
  if (localStorage.getItem('token') && localStorage.getItem('mobile') && localStorage.getItem('id')) {
      // If logged in, hide the login button and show the My Account button
      $('#loginButton').hide();
      $('#myAccountButton').show();
  }

  $('#request-otp').click(get_otp);
  $('#Verify').click(verifyotp);
});
// insert data
function get_otp() {
    var phone = $('#phone').val();
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_login";
    var paraArr = {
        'mobile': phone,
      };
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

function verifyotp() {
  var mobile = document.getElementById('phone').value;
  var otp = document.getElementById('otp').value;

  var paraArr = {};
  paraArr['mobile'] = mobile;
  paraArr['otp'] = otp;

  var token = localStorage.getItem('token');
  var mobile1 = localStorage.getItem('mobile');
  var id = localStorage.getItem('id');

  var url = 'https://shopninja.in/bharatagri/api/public/api/customer/verify_otp';
  $.ajax({
    url: url,
    type: "POST",
    contentType: "application/json",
    data: JSON.stringify(paraArr),
    success: function (result) {
      console.log(result);

      // Access data field in the response
      var data = result.data;
      var userId = data.id;
      var userMobile = data.mobile;

      console.log(userId, 'User ID');
      console.log(userMobile, 'User Mobile');

      localStorage.setItem('token_customer', result.token);
      localStorage.setItem('mobile', userMobile);
      localStorage.setItem('id', userId);

      // Display "My Account" link and hide "Login" link
      var loginButton = document.getElementById("loginButton");
      var myAccountButton = document.getElementById("myAccountButton");

      if (loginButton && myAccountButton) {
        loginButton.style.display = "none";
        myAccountButton.style.display = "block";
      }

      const d = new Date();
      d.setTime(d.getTime() + 60 * 60 * 1000);
      var expires_in = d;
      console.log(expires_in, "expires_in");
      localStorage.setItem('expireIn', expires_in);
      console.log(expires_in, 'expiry timeeeeee');

      // Redirect to userProfile.php
      window.location.href = "userProfile.php";
    },
    error: function (xhr, textStatus, errorThrown) {
      // Handle errors
      console.log(xhr.status, 'error');
      // if (xhr.status === 401) {
      //   console.log('Invalid credentials');
      //   var htmlcontent = `<p>Invalid credentials!</p>`;
      //   document.getElementById("error_message").innerHTML = htmlcontent;
      // } 
      // else if (xhr.status === 403) {
      //   console.log('Forbidden: You don\'t have permission to access this resource.');
      //   var htmlcontent = ` <p> You don't have permission to access this resource.</p>`;
      //   document.getElementById("error_message").innerHTML = htmlcontent;
      // } else {
      //   console.log('An error occurred:', textStatus, errorThrown);
      //   var htmlcontent = `<p>An error occurred while processing your request.</p>`;
      //   document.getElementById("error_message").innerHTML = htmlcontent;
      // }
    },
  });
}

