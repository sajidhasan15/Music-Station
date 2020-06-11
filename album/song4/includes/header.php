<?php  
require 'config/config.php';

if (isset($_SESSION['username'])) {
	
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
	$user  = mysqli_fetch_array($user_details_query);
}
else {
	
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.container{
			margin-top: 0;
		}
	</style>

	<title>Music Station | Album</title>
	<link rel="icon" href="../../images/icon.png" type="image" sizes="16x16">
	<!-- Bootstrap core CSS -->
	<!-- <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Custom styles for this template -->
	<!-- <link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- javaScripts -->
	<!-- <script src="https://kit.fontawesome.com/76ab82c050.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script> -->

	<!-- CSS -->

	<!--<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> load all styles -->
	 <!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->

</head>
<body>
<!-- 	<div class="container"> -->
		 <!-- Navigation -->
		 <div>
		 	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

		 		<a class="navbar-brand col-md-4"  href="../../user/display.php"><img src="../../images/logo.png" height="50"></a>
		 		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
		 			<span class="navbar-toggler-icon"></span>
		 		</button>

		 		<div class="collapse navbar-collapse col-md-6 offset-md-2" id="navbarResponsive">
		 			<ul class="navbar-nav ">


		 				<form class="form-inline my-2 my-lg-0 text-left">
		 					<input class="form-control mr-sm-2" type="search" placeholder="Search" name="id" aria-label="search">
		 					<button href="user-search.php" class="btn btn-outline-secondary my-2 my-sm-0" name="search" type="submit" value="Search Data">Search</button>
		 				</form>

		 				<li class="nav-item">
		 					<h5><a class="nav-link" href="../../user/display.php">Music</a></h5>
		 				</li>
		 				<li class="nav-item">
		 					<h5><a class="nav-link" href="../../contact-us.php">Contact us</a></h5>
		 				</li>
		 				<li class="nav-item">
		 					<h5><a class="nav-link" href="../../about-us.php">About</a></h5>
		 				</li>
		 				<li class="nav-item">
		 					<h5><a class="nav-link" href="includes/handlers/logout.php">Logout</a></h5>
		 				</li>
		 			</ul>
		 		</div>
		 	</nav>
		 </div>



<!-- 	<div class="wrapper">
	 -->	
	