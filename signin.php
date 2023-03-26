<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/signin.css">
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
<div class="main">
    <ul>
      <ul class="list">
        <li class="logo"><a href="index.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
        <div class="search">
            <form method="POST" action="info.php">
              <input type="text" name="search_p" placeholder="Search.." size="50">
          
              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
            </form>
        </div>
      </ul>
      <ul class="list2">
        <li><a href="index.html">Home</a></li>
        <li><a id="long" href="destination.html">Destination</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li class="active-menu"><a href="signup.php">Sign Up</a></li>
        <li><a href="feedback.html">Feedback</a></li>
      </ul>
    </ul>
</div>
	<div class="phppot-container"><div class="
	
	
	
	
	
	
	
	
	
	"></div>
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="index.html" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>

