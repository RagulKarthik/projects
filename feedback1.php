<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Feedback Form</title>
	<link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="home.php"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
                <form method="POST" action="info.php">
                  <input type="text" name="search_p" placeholder="Search.." size="50">
              
                  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
	      </ul>
	      <ul class="list2">
	        <li><a href="home.php">Home</a></li>
	        <li><a id="long" href="destination.php">Destination</a></li>
	        <li><a href="gallery.html">Gallery</a></li>
	        <li class="active-menu"><a href="feedback.html">Feedback</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="feedback">
		<h1>Feedback Form</h1>
		<form name='feedbackForm' method="POST" action="feedback.php">
			<div class="form-group">
			    <label>Your Name</label>
			    <input type="text" name="name" class="form-control" id="inputText" placeholder="Your Name" required>
			</div>
			<div class="form-group">
			    <label>Your Email</label>
			    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Your Email" required>
			</div>
			<div class="form-group text1">
			    <label>Feedback:</label>
			    <textarea class="inputTextarea" name="feedbk" rows="4" class="form-control" ng-model='feedback' placeholder="Please write your Feedback here" required></textarea>
			</div>
			<div class="wrapper">
				<button type="submit" class="btn btn-primary" ng-click="performValidation()" name='submit'>Submit Feedback</button>
			</div>
		</form>
	</div>
</body>
</html>