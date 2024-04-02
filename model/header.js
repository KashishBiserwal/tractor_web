// Check if user is logged in initially based on some condition
var loggedIn = checkLoggedInStatus();

// Function to check if user is logged in
function checkLoggedInStatus() {
    return (localStorage.getItem('token_customer') !== null);
}

// Function to update UI based on loggedIn status
function updateUI() {
    var loginButton = document.getElementById("loginButton");
    var myAccountDropdown = document.getElementById("myAccountDropdown");

    if (loggedIn) {
        // User is logged in, hide login button and show my account dropdown
        loginButton.style.display = "none";
        myAccountDropdown.style.display = "block";
    } else {
        // User is not logged in, show login button and hide my account dropdown
        loginButton.style.display = "block";
        myAccountDropdown.style.display = "none";
    }
}

// Function to handle logout
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
            loggedIn = false; // Update loggedIn status after logout
            localStorage.removeItem('token_customer'); // Remove token from localStorage
            localStorage.removeItem('mobile'); // Remove mobile from localStorage
            updateUI(); // Update UI after logout
            window.location.href = "index.php"; // Redirect to index page
        },
        error: function(error) {
            console.error('Error logging out:', error);
        }
    });
}

// Call updateUI function when the window loads
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
