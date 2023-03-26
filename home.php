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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      .signup-op a{
        text-decoration: none;
        border: 2px solid #000;
        background-color: rgba(68,241,154,1);
        padding: 8px 20px;
        color: black;
        transition: 0.8s ease;
      }
      .signup-op a:hover{
        background-color: white;
      }
    </style>
  </head>
  <body>
    <header>   
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="front3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="front2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="front1.jpg" style="width:100%">
        </div>
        <div class="main">
            <ul>
              <ul class="list">
                
                  <li class="logo"><a href="home.php"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
                  <div class="search">
                    <form method="POST" action="info.php">
                      <input type="text" name="search_p" placeholder="Search.." size="50">
                  
                      <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 60px; margin-top: 32px;">
                    </form>
                  </div>
              </ul>
              <ul class="list2">
                <li class="active-menu"><a href="#">Home</a></li>
                <li><a id="long" href="destination.php">Destination</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li><a href="feedback1.php">Feedback</a></li>
              </ul>
            </ul>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </header>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <div class="title">
      <h1>Tour Booking System</h1>
      <!-- <div style="margin: 0px 35%;" class="signup-op">++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        <a href="signup.php">SignUp</a>
        <a href="signin.php">SignIn</a>
      </div> -->
    </div>
    <div class="contain">
      <div class="heading">
        <h2>Popular Destination</h2>
      </div>
      <div class="box" style="width: 350px;height: 250px;">
        <div class="imgBox" style="width: auto;height: 250px;">
          <img src="images//destination//tajmahal1.jpg" alt="Taj Mahal Image">
        </div>
        <div class="name-text left1">
          <h2>Taj Mahal</h2>
          <a href="destination.html" class="btn">Visit</a>
        </div>
      </div>
      <div class="box" style="width: 400px;height: 250px;">
        <div class="imgBox" style="width: 400px;height: 250px;">
          <img src="images//destination//ladakh1.jpg" alt="Taj Mahal Image">
        </div>
        <div class="name-text left2">
          <h2>Ladakh</h2>
          <a href="destination.html" class="btn">Visit</a>
        </div>
      </div>
      <div class="box" style="width: 350px;height: 250px;">
        <div class="imgBox" style="width: auto;height: 250px;">
          <img src="images//destination//kerala1.jpg" alt="Taj Mahal Image">
        </div>
        <div class="name-text left3">
          <h2>Kerala</h2>
          <a href="destination.html" class="btn">Visit</a>
        </div>
      </div>
        <div class="name-text left4">
          <h2>Goa</h2>
          <a href="destination.html" class="btn">Visit</a>
        </div>
      </div>
      <div class="destination-btn">
        <a href="destination.html">View all</a>
      </div>
    </div>
    <div class="about">
      <h2>Abouts Us</h2>
       <footer>
          <a href="https://www.facebook.com/"> <img src="images//logo//facebook.png" height="25px" width="25px"> </a>
          <a href="https://www.instagram.com/"> <img src="images//logo//instagram.png" height="25px" width="25px"> </a>
          <a href="https://twitter.com/"> <img src="images//logo//twitter.png" height="25px" width="25px"> </a>
          <p> <b> Done by: Ragul Karthik<br>
          <br>
          Contact Information: ragul262003@gmail.com<br></b></p>
       </footer>
    </div>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

  </body>
</html> 