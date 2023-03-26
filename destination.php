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
<html lang="en">
<head>
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/destination.css">
	<title>Destinations</title>
	<style type="text/css">
		.container .box .name-text input{
			position: relative;
			display: none;
			background: transparent;
			border: 1px solid #fff;
			top: -20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
			text-align: center;
		}
		.btn{
			padding: 5px 40px;
		}
		.btn1{
			margin: 0px -20px;
			padding: 5px 40px;
		}
		.btn2{
			padding: 5px 60px;
		}
		.btn3{
			padding: 5px 37px;
			margin: 0px -2px;
		}
		.btn4{
			padding: 5px 50px;
		}
		.btn5{
			padding: 5px 25px;
		}
		.container .box:hover .name-text input{
			display: block;
			top: -20px;
		}
		.container .box .name-text input:hover{
			background-color: #fff;
		    color: #000;
		}
	</style>
</head>
<body>
	<h1 class="heading">Poupular Destinations</h1>
	<div class="main">
        <ul>
          <ul class="list">
            <li class="logo"><a href="index.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
            <div class="search">
            <div class="search">
	            <form method="POST" action="info.php">
	              <input type="text" name="search_p" placeholder="Search.." size="50">
	          
	              <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
	            </form>
          	</div>
          </ul>
          <ul class="list2">
            <li><a href="home.php">Home</a></li>
            <li class="active-menu"><a id="long" href="destination.php">Destination</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="feedback1.php">Feedback</a></li>
          </ul>
        </ul>
    </div>
	<div class="container" >
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//goa1.jpg" alt="Goa Image" style="width: auto;height: 270px;">
			</div>
			<div class="name-text name-pading1 top1">
				<h1>CHENNAI</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="goa" class="btn1" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//kerala1.jpg" alt="Russia Image" style="width: auto;height: 270px;">
			</div>
			<div class="name-text name-pading2 top1">
				<h2>VILLUPURAM</h2>
				<form method="POST" action="info.php">
					<input type="submit" name="kerala" class="btn" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//mysore1.jpg" alt="Russia Image">
			</div>
			<div class="name-text name-pading3 top1">
				<h2>TIRUNELVELI</h2>
				<form method="POST" action="info.php">
					<input type="submit" name="mysore" class="btn" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//ladakh1.jpg" alt="Russia Image">
			</div>
			<div class="name-text name-pading4 top1">
				<h3>KANYAKUMARAI</h3>
				<form method="POST" action="info.php">
					<input type="submit" name="ladakh" class="btn" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//tajmahal1.jpg" alt="Russia Image">
			</div>
			<div class="name-text name-pading5 top2">
				<h1>MADURAI</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="agra" class="btn5" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//india_gate1.jpg" alt="Russia Image">
			</div>
			<div class="name-text name-pading6 top2">
				<h3>COIMBATORE</h3>
				<form method="POST" action="info.php">
					<input type="submit" name="india_gate" class="btn2" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//hampi1.jpg" alt="Russia Image">
			</div>
			<div class="name-text name-pading7 top2">
				<h3>TIRCHY</h3>
				<form method="POST" action="info.php">
					<input type="submit" name="hampi" class="btn3" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//rajasthan1.jpg" alt="Rajasthan Image">
			</div>
			<div class="name-text name-pading8 top2">
				<h3>THANJAVUR</h3>
				<form method="POST" action="info.php">
					<input type="submit" name="rajasthan" class="btn2" value="Visit">
				</form>
			</div>
		</div>
		<!-- <div class="box">
			<div class="imgBox">
				<img src="images//destination//manali1.jpg" alt="Manali Image">
			</div>
			<div class="name-text name-pading9 top3">
				<h1>Manali</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="manali" class="btn3" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//srinagar1.jpg" alt="Srinagar Image">
			</div>
			<div class="name-text name-pading10 top3">
				<h1>Srinagar</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="srinagar" class="btn4" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//amritsar1.jpg" alt="Amritsar Image">
			</div>
			<div class="name-text name-pading11 top3">
				<h1>Amritsar</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="amritsar" class="btn4" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//jogfalls1.jpg" alt="Jog Falls Image">
			</div>
			<div class="name-text name-pading12 top3">
				<h1>Jog Falls</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="jogfalls" class="btn2" value="Visit">
				</form>
			</div>
		</div> -->
	</div>
</body>
</html>