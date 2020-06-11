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

	<title>Music Station | Home</title>
	<link rel="icon" href="../images/icon.png" type="image" sizes="16x16">

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

<!-- 	<div class="top_bar">
		<div class="logo">
			<a href="index.php">My Music</a>
		</div>
		<nav>
			<a href="<?php echo $userLoggedIn ?>">
				<?php echo $user['first_name']; ?>
			</a>
			<a href="#">
				<i class="fas fa-home"></i>
			</a>
			<a href="#">
				<i class="fas fa-list-ul"></i>
			</a>
			<a href="#">
				<i class="fas fa-cog"></i>
			</a>
			<a href="includes/handlers/logout.php">
				<i class="fas fa-sign-out-alt"></i>
			</a>
		</nav>

	</div>
-->

<!-- Navigation -->
<div>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

		<a class="navbar-brand col-md-4"  href="display.php"><img src="../images/logo.png" height="50"></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button> -->
			<div class="collapse navbar-collapse col-md-6 offset-md-2" id="navbarResponsive">
				<ul class="navbar-nav ">


					<form class="form-inline my-2 my-lg-0 text-left" method="get" action="search.php">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" name="search " aria-label="search">
						<input href="user-search.php" class="btn btn-outline-secondary my-2 my-sm-0" name="submit" type="submit" value="Search">  
					</form>

					<li class="nav-item">
						<h5><a class="nav-link" href="display.php">Music</a></h5>
					</li>
					<li class="nav-item">
						<h5><a class="nav-link" href="../contact-us.php">Contact us</a></h5>
					</li>
 				<li class="nav-item">
 					<h5><a class="nav-link" href="../about-us.php">About</a></h5>
 				</li>
 				<li class="nav-item">
 					<h5><a class="nav-link" href="includes/handlers/logout.php">Logout</a></h5>
 				</li>
 			</ul>
			</div>
		</nav>
	</div> 
	<!-- <div class="wrapper"> -->
		
	