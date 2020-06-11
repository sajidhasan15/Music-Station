<?php 

//include('../includes/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.container{
			margin-top: 100px;
		}
	</style>
	<title>Music Station | Upload Song</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!-- Navigation bar -->

	<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark fixed-top">

		<a class="navbar-brand col-md-5" href="index.php"><img src="../../images/logo.png" height="50"></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse col-md-5 offset-md-3" id="navbarResponsive">
			<ul class="navbar-nav ">

				<li class="nav-item">
					<h5 class="nav-link" href="index.php">Music</h5>
				</li>
				<li class="nav-item">
					<h5 class="nav-link" href="contact-us.php">Contact us</h5>
				</li>
				<li class="nav-item">
					<h5 class="nav-link" href="about-us.php">About</h5>
				</li>
				<li class="nav-item">
					<h5 class="nav-link" href="registration.php">Signup/login</h5>
				</li>


			</ul>
		</div>
		<!-- </div> -->
	</nav>

	<div class="container text-center">
		<form name="audio_form" id="audio_form" action="act_songs.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<label>Audio File:</label>
				<input name="audio_file" id="audio_file" type="file"/>
				<input type="submit" name="Submit" id="Submit" value="Submit"/>
			</fieldset>
		</form>
	</div>

	



	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>
</html>