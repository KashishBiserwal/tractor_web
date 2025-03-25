
document.addEventListener('DOMContentLoaded', function() {
    updateUI();
    window.addEventListener('storage', function() {
        updateUI();
    });
});
function checkLoggedInStatus() {
    return localStorage.getItem('token_customer') !== null;
}
function updateUI() {
    var loginButton = document.getElementById("loginButton");
    var myAccountDropdown = document.getElementById("myAccountDropdown");
    var loggedIn = checkLoggedInStatus();
    if (loggedIn) {
        loginButton.style.display = "none";
        myAccountDropdown.style.display = "block";
    } else {
        loginButton.style.display = "block";
        myAccountDropdown.style.display = "none";
        if (localStorage.getItem('token_customer_expired') === 'true' || localStorage.getItem('token_customer_error') === '401') {
            user_logout();
            window.location.href = "index.php";
        }
    }
}

function user_logout() {
    var url = "https://shopninja.in/bharatagri/api/public/api/customer/customer_logout";
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


