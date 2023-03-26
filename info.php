<?php
include_once('infop.php');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='CHENNAI'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='VILLUPURAM'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['mysore'])) {
	$que="SELECT * FROM `information` WHERE pname='THIRUNELVELI'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ladakh'])) {
	$que="SELECT * FROM `information` WHERE pname='KANYAKUMARAI'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['agra'])) {
	$que="SELECT * FROM `information` WHERE pname='MADURAI'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='COIMBATORE'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['hampi'])) {
	$que="SELECT * FROM `information` WHERE pname='TRICHY'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['rajasthan'])) {
	$que="SELECT * FROM `information` WHERE pname='THANJAVUR'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['manali'])) {
	$que="SELECT * FROM `information` WHERE pname='Manali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['srinagar'])) {
	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['amritsar'])) {
	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['jogfalls'])) {
	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Information</title>
	
</head>
<body>
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
	      <ul class="list2" style="margin-top:20px">
	        <li><a href="home.php">Home</a></li>
	        <li><a id="long" href="destination.php">Destination</a></li>
	        <li><a href="gallery.php">Gallery</a></li>
	        <li class="active-menu"><a href="feedback1.php">Feedback</a></li>
	      </ul>
	    </ul>
	</div>
    <h1 class="mt-5 mb-5" align="center">Place Information</h1>

	<div class="container">
		<div class="row mb-5" style="border:1px solid black">
			<div class="col-md-5">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width: 450px;height: 300px;">
			</div>
			<div class="col-md-6">
				<h3 align="center"><?php echo $rows['pname']; ?><h3>
				<p style="text-align: justify; font-size: 18px"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px; font-size: 20px" align="center">Package: <?php echo $rows['package']; ?> Rs</p>
				<a href="booking.html"style="text-decoration:none ; font-size:20px ; border: 1px solid black ; border-radius:20%;padding:5px;text-align:center">Book Tour</a>
			</div>
		</div>
		<div >
		<div class='row ' style="border:1px solid black" >
			<div class="col-md-6">
		        <div class="imgBox" align="center">
		          <img src="<?php echo $rows['pi1']; ?>" alt="Taj Mahal Image" style="width: 500px;height: 300px;">
		        </div>
	        </div>
	      <div class="col-md-6">
	        <div class="imgBox" align="center">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Taj Mahal Image" style="width: 500px;height: 300px;">
	        </div>
	      </div>
	        	<?php
					}
				?>
	      
		</div>
		<br>
		<br>

	    </div>
	</div>
</body>

<style>
	.container .image-container{
	width: 80vw;
	height: 55vh;
	margin: -5% 3%;
}
.container{
  background-color: rgba(120, 244, 68, 0.3);
	width: 85vw;
	height: 110vh;
	margin:-2% 5% -1% 5%;
  margin-left: 6%;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>