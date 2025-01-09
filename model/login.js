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
            localStorage.setItem('token', result.access_token);
            localStorage.setItem('email', email);
            const d = new Date();
            d.setTime(d.getTime() + 60 * 60 * 1000);
            var expires_in = d;
            console.log(expires_in,"expires_in")
            localStorage.setItem('expireIn', expires_in);
            console.log(expires_in,'expiry timeeeeee');
            window.location.href = baseUrl + "usermanagement.php"; 
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.status, 'error');
            if (xhr.status === 401) {
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
        complete: function () {
            hideOverlay();
        },
        
    });
}
  
$(function(){
    $('#eyeeye').click(function(){
        if($(this).hasClass('fa-eye-slash')){
            $(this).removeClass('fa-eye-slash');           
            $(this).addClass('fa-eye');          
            $('#password').attr('type','text');              
        }else{
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');  
            $('#password').attr('type','password');
        }
    });
});
  
