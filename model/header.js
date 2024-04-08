// Check if user is logged in initially based on some condition
var loggedIn = checkLoggedInStatus();

function checkLoggedInStatus() {
    return (localStorage.getItem('token_customer') !== null);
}

function updateUI() {
    var loginButton = document.getElementById("loginButton");
    var myAccountDropdown = document.getElementById("myAccountDropdown");

    if (loggedIn) {
        loginButton.style.display = "none";
        myAccountDropdown.style.display = "block";
    } else {
        loginButton.style.display = "block";
        myAccountDropdown.style.display = "none";
        redirectToLoginPage(); // Add this line to check for token expiration
    }
}   

function redirectToLoginPage() {
    if (!localStorage.getItem('token_customer')) {
        window.location.href = "user-login.php";
    }
}
function user_logout() {
    var url = "http://tractor-api.divyaltech.com/api/customer/customer_logout";
    var phone = localStorage.getItem('mobile');
    var headers = {
        'Authorization': localStorage.getItem('token_customer')
    };

    var paraArr = {
        'mobile': phone,
    };

    $.ajax({
        url: url,
        type: "POST",
        headers: headers,
        data: paraArr,
        success: function(result) {
            console.log("Logout customer");
            loggedIn = false; 
            localStorage.removeItem('token_customer'); 
            localStorage.removeItem('mobile');
            updateUI();
            window.location.href = "index.php"; 
        },
        error: function(error) {
            console.error('Error logging out:', error);
        }
    });
}
window.onload = function() {
    updateUI();
};



// function user_logout(mobileNumber) {
//   var url = "http://tractor-api.divyaltech.com/api/customer/customer_logout";
//   var token = localStorage.getItem('token');

//   if (!token) {
//       console.error('Token not found. Cannot log out.');
//       return;
//   }

//   // Construct the request body including the mobile number
//   var requestBody = {
//       token: token,
//       mobileNumber: mobileNumber
//   };
//   console.log(requestBody,'zsdfsdfdfghj');

//   // Make an API call to logout with the request body
//   fetch(url, {
//       method: 'POST',
//       headers: {
//           'Content-Type': 'application/json',
//           'Authorization': 'Bearer ' + token
//       },
//       body: JSON.stringify(requestBody)
//   })
//   .then(response => {
//       if (!response.ok) {
//           throw new Error('Network response was not ok');
//       }
//       // Remove token from localStorage
//       localStorage.removeItem("token");
//       // Set loggedIn to false
//       loggedIn = false;
//       // Update UI
//       updateUI();
//   })
//   .catch(error => {
//       console.error('Error logging out:', error);
//   });
// }
