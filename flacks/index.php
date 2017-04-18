<? require_once("sever/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Flacks | Video Conference Software</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" href="css/main.css?v=0.0.1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Login Stylesheet //Michael Mavashev -->
<link rel="stylesheet" href="flacks/login/css/styles.css">

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>
<body>
<script src="js/top.js?v=0.0.1"></script>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 id="Auth" class="text-center login-title">Welcome to Flacks. Please Sign In.</h1>
            <div class="account-wall">
                <img id="userIcon" class="profile-img" src="flacks/login/sprites/flacks-loggedout.png"
                    alt="">
                    
                <form class="form-signin" name="loginForm" id="login" action="#" onsubmit="return login(this);">
                <input type="text" name="username" id="username" readonly="true" class="form-control" required autofocus>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_submit" id="loginBtn" value="Sign in" class="btn btn-success" onClick="changeActive_Auth();">
                    Sign in</button>
				</form>
				<center><div id="loading-box"></div></center>
				<form class="form-signin" name="callForm" id="call" action="#" onsubmit="return makeVideoCall(this);">
                <input type="text" name="number" id="caller" placeholder="Enter user to dial!" class="form-control" required autofocus>
				<button class="btn btn-lg btn-success btn-block" type="submit" value="Call" class="btn btn-primary" onClick="changeAuth_Timer();" >
                    Call</button>
                <label class="checkbox pull-left">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="remember-me">Remember this info
                </label>
                <tdb id="contactLinkShow"> <a href="#" class="pull-right need-help">Need help? </a></tdb><span class="clearfix"></span>
				</form>
            </div>
            <tdb id="registerLinkShow"><a href="#" class="text-center new-account">Create an account </a></tdb>
        </div>
        <center><div id="vid-box"></div></center>
    </div>
    
    <div class="modalContact" id="modalContact">
    	<? include("includes/contactForm.php"); ?>
    </div>
    
    <div class="modalRegister" id="modalRegister">
    	<? include("includes/registerForm.php"); ?>
    </div>
</div>
<script src="https://cdn.pubnub.com/pubnub-3.7.14.min.js"></script>
<script src="https://stephenlb.github.io/webrtc-sdk/js/webrtc.js"></script>
<script src="js/main.js?v=0.0.2"></script>
<script src="js/helper.js?v=0.0.1"></script>
<script src="js/listeners.js?v=0.0.2"></script>
</body>
</html>
