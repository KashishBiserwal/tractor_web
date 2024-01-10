<?php
   include 'headertag.php';
   ?> 
   <header>
    <nav class="admin-header navbar navbar-expand-sm py-1">
            <div class="container">
                <div class="row w-100">
                <div class="col-12 col-sm-9 col-md-9 col-lg-9"></div>
                <div class="col-12 col-sm-3 col-md-3 col-lg-3">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse float-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                
                    <!-- <li class="nav-item">
                        <a class="navbar-link d-flex" style="text-decoration: none;">
                                <div class="user-avatar">
                                    <img src="./assets/images/why.jpg" class=""/>
                                </div>
                                <div class="is-user-name"><span>Admin <span>Name</span></div>
                            </a>
                            
                    </li>     -->
                    <li class="nav-item1 dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                				<i class="align-middle" data-feather="settings"></i>
              				</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
									<img src="./assets/images/why.jpg" class="avatar img-fluid user-avatar" alt="admin " /> <span class="text-white is-user-name">Admin Name</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="admin_profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" id="logoutBtnClick" href="#" onclick="user_logout();">Log out</a>
							</div>
						</li>
                </ul>
                </div>
                </div>
                </div>
                
            </div>
        </nav>
   </header>

  <div class="modal fade" id="errorStatusLoading" tabindex="-1" role="dialog" aria-labelledby="errorStatusLoadingTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorStatusLoadingTitle">Loading Status</h5>
      </div>
      <div class="modal-body">
        <p>Sorry, there was an issue with the Data Loading , please try again.</p>
         <!-- <img src="../assets/images/success.gif">  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn add_btn btn-success btn_all" data-bs-dismiss="modal">OK</button>
        <!-- <a class="btn  text-primary" data-dismiss="modal">Ok</a> -->
      </div>
    </div>
  </div>
</div>
   <script>
    function user_logout() {
    var url = "<?php echo $APIBaseURL; ?>user_logout";
    var token = localStorage.getItem('token');
    
    if (!token) {
        console.error('Token not found. Cannot log out.');
        return;
    }

    $.ajax({
        url: url,
        type: "POST",
        headers: {
            'Authorization': 'Bearer ' + token
        },
        success: function (result) {
            console.log("Logout admin");
            // alert("Logged out successfully");
            // Redirect to the login page
            localStorage.removeItem("token");
            localStorage.removeItem("expireIn");
            window.location.href = "login.php";
        },
        error: function (error) {
            console.error('Error logging out:', error);
        }
    });
}
// window.setInterval(() => {
//     console.log(localStorage.getItem('expireIn') === null,"isLogin")
//         if (localStorage.getItem('expireIn') === null) {
//            localStorage.removeItem("token");
//            window.location.href = "login.php";
//         } 
    
//         }
//         ,1000);

// window.onload = function() {
//   if (localStorage.getItem('expireIn') === null) {
//            localStorage.removeItem("token");
//            window.location.href = "login.php";
//         } 
//             // alert('Page loaded!');
//         };


</script>
<script>
//       const expireTimeString = localStorage.getItem('expireIn');

//     const expireTime = new Date(expireTimeString);

// window.setInterval(() => {
  

//     var currentdate = new Date();
//     console.log(currentdate >= expireTime)
//     console.log(currentdate >= expireTime)
//     if (currentdate >= expireTime) {
        
//         user_logout();
//         localStorage.removeItem("expireIn");
//          window.location.href = baseUrl + "login.php";
//     }

// }, 5000);

</script>
   
