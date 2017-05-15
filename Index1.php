<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Complaint Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Complaint Portal</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                 <?php header('Location: http://localhost/confusion/index1.php'); exit(); ?>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <div class="container" >
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                </div>
                
                <?php } ?>
                
            </ul>
        </div>
    </div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
    
    
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '606484032882322',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
      
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    <script>
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
    
{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}
        </script>
    
<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>
  <script>  
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
      </script>
    <script>
    {"web":{"client_id":"153784174244-heepfkleec0r9mlrrj3ieqn3cqvotc7n.apps.googleusercontent.com","project_id":"weblogin-165516","auth_uri":"https://accounts.google.com/o/oauth2/auth","token_uri":"https://accounts.google.com/o/oauth2/token","auth_provider_x509_cert_url":"https://www.googleapis.com/oauth2/v1/certs","client_secret":"6Es6C8M9Fe5fvR5PPeT8NiSN","redirect_uris":["http://localhost/confusion/index.php"],"javascript_origins":["http://www.google.com"]}}
        </script>
    
</body>
</html>