$(document).ready(function() {
    if (document.getElementById('login')) {
        document.getElementById('login').addEventListener('click', function(event) {
            event.preventDefault();
            showOverlay(); 
            login();
        });
    }


});

function showOverlay() {
    $("#overlay").fadeIn(300);
}

function hideOverlay() {
    $("#overlay").fadeOut(300);
}

function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var paraArr = {};
    paraArr['email'] = email;
    paraArr['password'] = password;
    
var apiBaseURL =APIBaseURL;
var url = apiBaseURL + 'user_login';
    $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json", 
        data: JSON.stringify(paraArr), 
        success: function (result) {
            console.log(result, 'login success');
            localStorage.setItem('token', result.access_token);
            localStorage.setItem('expireIn', result.expires_in);
            console.log(result.expires_in,'expiry timeeeeee');
            window.location.href = baseUrl + "usermanagement.php";

        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            if (xhr.status === 401) {
                console.log('Invalid credentials');
                alert('Please enter valid credentials..!');
            } else if (xhr.status === 403) {
                console.log('Forbidden: You don\'t have permission to access this resource.');
                alert('Forbidden: You don\'t have permission to access this resource.');
            } else {
                console.log('An error occurred:', textStatus, errorThrown);
                alert('An error occurred while processing your request.');
            }
        },
        complete: function () {
            hideOverlay();
        },
        
    });
}
  
