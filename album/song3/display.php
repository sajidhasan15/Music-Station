<?php
include("includes/header.php");
include("config/config.php");
//include("includes/classes/User.php");


// if(!isset($_SESSION['valid'])) {
//   header('Location: display.php');
// }




?>
<!DOCTYPE html>
<html>
<head>
	<title>Music Station | Display Song</title>

	<!-- Bootstrap core CSS -->

	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/3.style.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="body">
		

		<div class="container text-center text-light">
			<img src="../image/lata_cover.png" alt=""> <br>
		</div>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col col-lg-4 ">
					<?php  

					function displayAudios()
					{
						$conn = mysqli_connect("localhost","root","","music");
						if (!$conn) {
							die('server not connected');
						}

						$query = "SELECT * FROM album3";

						$r = mysqli_query($conn,$query);

						while ($row = mysqli_fetch_array($r)) 
						{
							echo '<a href="display.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
							echo "<br/>";    
						}
						mysqli_close($conn);
					}

					displayAudios();

					?>
				</div>
			</div>

		</div>
		<div class="container text-center">
			<audio controls style="width: 900px">
				<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

				</source>
			</audio>
		</div>


		<div class="box" style="line-height: .56rem">
			<div class="left">
				<ul>1.</ul>
				<ul>2.</ul>
				<ul>3.</ul>
				<ul>4.</ul>
				<ul>5.</ul>
				<ul>6.</ul>
				<ul>7.</ul>
				<ul>8.</ul>
				<ul>9.</ul>
				<ul>10.</ul>
				<ul>11.</ul>

			</div>
		</div>

<!-- <div class="container">
	<div class="row justify-content-md-center">
		<div class="Page1 float-left">
			<a href="../album/a.php" target="_blank"><img src="robindra_songit.png" alt="" height="200px"></a>
		</div>
		<div class="Page2 float-left ml-5">
			<a href="../album/a.php" target="_blank"><img src="nazrul_songit.png" alt="" height="200px"></a>
		</div>
		<div class="Page3 float-left ml-5">
			<a href="../album/a.php" target="_blank"><img src="robindra_songit.png" alt="" height="200px"></a>
		</div>
		<div class="Page4 float-left ml-5">
			<a href="../album/a.php" target="_blank"><img src="nazrul_songit.png" alt="" height="200px"></a>
		</div>
	</div>

	
</div> -->




<!-- Footer -->
<!-- <footer class="p-3 w-100 h-100 bg-dark">
	<div class="container">
		<h4 class="m-4 text-center text-white te">Copyright &copy; Sajid hasan 2019-2020</h4>
	</div>
</footer> -->


		<!-- Footer -->
		<footer class="page-footer list-inline font-small text-white bg-dark">

			<!-- Footer Links -->
			<div class="container text-center text-md-left">

				<!-- Grid row -->
				<div class="row">

					<!-- Grid column -->
					<div class="col-md-4 mx-auto">

						<!-- Content -->
						<h5 class="font-weight-bold text-uppercase mt-2 mb-4">About Our Services</h5>
						<p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
							consectetur
						adipisicing elit.</p>

					</div>
					<!-- Grid column -->

					<hr class="clearfix w-100 d-md-none">

					<!-- Grid column -->
					<div class="col-md-2 mx-auto">

						<!-- Links -->
						<h5 class="font-weight-bold text-uppercase mt-2 mb-4">Links</h5>

						<ul class="list-unstyled">
							<li>
								<a class="text-primary" href="../../music.php">Music</a>
							</li>
							<li>
								<a class="text-primary" href="../../contact-us.php">Contuct Us</a>
							</li>
							<li>
								<a class="text-primary" href="../../about-us.php">About</a>
							</li>
							<li>
								<a class="text-primary" href="../../user/register.php">Signup/Login</a>
							</li>
						</ul>

					</div>
				<!-- 	<div class="container text-center"> -->

						<!-- Grid row-->
						   <!-- <div class="row"> -->

							<!-- Grid column -->
							<div class="col-md-12">
								<div class="mb-5 text-center">

									<!-- Facebook -->
									<a href="https://www.facebook.com" class="fb-ic">
										<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
											<img src="../image/social/fb.png" width="50px" alt="">
										</i>
										
									</a>
									<!-- Twitter -->
									<a href="https://www.twitter.com" class="tw-ic">
										<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
											<img src="../image/social/tw.png" width="50px" alt="">
										</i>
									</a>
									<!--Linkedin -->
									<a href="https://www.linkedin.com" class="li-ic">
										<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
											<img src="../image/social/linkedin.png" width="50px" alt="">
										</i>
									</a>
									<!--Instagram-->
									<a href="https://www.instasgram.com" class="ins-ic">
										<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
											<img src="../image/social/ins.png" width="50px" alt="">
										</i>
									</a>
									<!--Pinterest-->
									<a href="https://www.youtube.com" class="pin-ic">
										<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
											<img src="../image/social/youtube.png" width="50px" alt="">
										</i>
									</a>
								</div>
							</div>
							<!-- Grid column -->

							<!--     </div> -->
							<!-- Grid row-->

						</div>
						<!-- Footer Elements -->

					</div>
					<!-- Grid row -->

			<!-- 	</div> -->





			</footer>
			<!-- Footer -->




	<!-- <script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
		</script>
	</div>

</body>
</html>




