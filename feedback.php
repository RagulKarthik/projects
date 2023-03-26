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
<?php

$con = mysqli_connect('localhost:3306', 'root', '', 'travel');

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedbk'];

$que="INSERT INTO `feedback` (`id`,`name`,`email`,`feedbk`) VALUES (0,'$name','$email','$feedback')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:home.php');
}

?>