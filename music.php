<?php
// include("user/includes/header.php");
// include("user/includes/classes/User.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Music Station | Rabintra Songit</title>
	<style>
		.container{
			padding-top: 76px;
		}
		body{
			color: #ee5253;
			background-color: #2e86de;
		}
		p{
			text-align: justify-all;		
		}
		.list{
			padding-top: 15px;
		}
		</style>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

		<!-- Navigation -->
<!-- 		<div>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

				<a class="navbar-brand col-md-4" href="index.php"><img src="images/logo.png" height="50"></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse col-md-5 offset-md-4" id="navbarResponsive">
					<ul class="navbar-nav ">

						<li class="nav-item">
							<h5><a class="nav-link" href="music.php">Album</a></h5>
						</li>
						<li class="nav-item">
							<h5><a class="nav-link" href="contact-us.php">Contact us</a></h5>
						</li>
						<li class="nav-item">
							<h5><a class="nav-link" href="about-us.php">About</a></h5>
						</li>
						<li class="nav-item">
							<h5><a class="nav-link" href="user/register.php">Signup/login</a></h5>
						</li>
					</ul>
				</div>
			</nav>
		</div> -->

		<div class="container text-center">
			<img src="images/songlist.png" height="300px" alt="cover picture"><br>

			<div class="list">
				<div class="artist1">
					<img width="200px" height="200px" src="images/Ashaji.jpg" alt="">
					<a href="album/song1/display.php"><h2>Asha Bhosle</h2></a>
					<p>Asha Bhosle, is an Indian playback singer.Bhosle's career started in 1943 and has spanned over six decades. She has done playback singing for over a thousand Bollywood movies.</p>

					<br>
				</div>
				<div class="artist2">
					<img width="200px" height="200px" src="images/kazi.jpg" alt="">
					<a href="album/song2/display.php"><h2>Kazi Nazrul Islam </h2></a>
					<p>Kazi Nazrul Islam was a Bengali poet, writer, musician, anti-colonial revolutionary and the national poet of Bangladesh. Popularly known as Nazrul, he produced a large body of poetry and music with themes that included religious devotion.</p>

					<br>
				</div>
				<div class="artist3">
					<img width="200px" height="200px" src="images/Lata-Mangeshkar.jpg" alt="">
					<a href="album/song3/display.php"><h2>Lata Mangeshkar</h2></a>
					<p>Lata Mangeshkar is an Indian playback singer and music director. She is one of the best-known and most respected playback singers in India.</p>

					<br>
				</div>
				<div class="artist4">
					<img width="200px" height="200px" src="images/manna.jpg" alt="">
					<a href="album/song4/display.php"><h2>Manna Dey</h2></a>
					<p>Prabodh Chandra Dey, known by his stage name Manna Dey, was an internationally acclaimed Indian playback singer, music director, musician and Indian classical vocalist.</p>

					<br>
				</div>
				<div class="artist5">
					<img width="200px" height="200px" src="images/robi.jpg" alt="">
					<a href="album/song5/display.php"><h2>Rabindranath Tagore</h2></a>
					<p>Rabindranath Tagore was a polymath, poet, musician, and artist from the Indian subcontinent. He reshaped Bengali literature and music, as well as Indian art with Contextual Modernism in the late 19th and early 20th centuries.</p>

					<br>
				</div>
				
			</div>



		<!-- <audio controls style="width: 900px">
			<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

			</source>
		</audio> -->
	</div>
	<div class="container text-center">
		
		<?php  

		// function displayAudios()
		// {
		// 	$conn = mysqli_connect("localhost","root","","music");
		// 	if (!$conn) {
		// 		die('server not connected');
		// 	}

		// 	$query = "SELECT * FROM audios";

		// 	$r = mysqli_query($conn,$query);

		// 	while ($row = mysqli_fetch_array($r)) 
		// 	{
		// 		echo '<a href="a.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
		// 		echo "<br/>";    
		// 	}
		// 	mysqli_close($conn);
		// }

		// displayAudios();

		?>

		<!-- <audio controls style="width: 900px">
			<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

			</source>
		</audio>  -->

	</div>


	<!-- Footer -->
<footer class="page-footer list-inline font-small text-white bg-dark">

	<!-- Footer Links -->
	<div class="container text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-4 mx-auto">

				<!-- Content -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Music Station</h5>
				<p>Music station is collect all old song. We peserved bangla song for our main culture. Ours songs is represent our culture.</p>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-2 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful sLinks</h5>

				<ul class="list-unstyled">
					<li>
						<a class="text-secondary" href="../../music.php">Music</a>
					</li>
					<li>
						<a class="text-secondary" href="../../contact-us.php">Contuct Us</a>
					</li>
					<li>
						<a class="text-secondary" href="../../about-us.php">About</a>
					</li>
					<li>
						<a class="text-secondary" href="../../user/register.php">Signup/Login</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-2 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social Media</h5>

				<ul class="list-unstyled">
					<li>
						<a href="https://www.facebook.com"class="btn-floating btn-xl rgba-white-slight mx-1">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#!">Link 2</a>
					</li>
					<li>
						<a href="#!">Link 3</a>
					</li>
					<li>
						<a href="#!">Link 4</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<!-- <hr class="clearfix w-100 d-md-none"> -->

			<!-- Grid column -->
			<!-- <div class="col-md-2 mx-auto"> -->

				<!-- Links -->
				<!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!">Link 1</a>
					</li>
					<li>
						<a href="#!">Link 2</a>
					</li>
					<li>
						<a href="#!">Link 3</a>
					</li>
					<li>
						<a href="#!">Link 4</a>
					</li>
				</ul>

			</div> -->
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Social buttons -->
	<ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item">
			<a href="https://www.facebook.com"class="btn-floating btn-fb mx-1">
				<i class="fab fa-facebook-f"> </i>
			</a>
		</li>
		<li class="list-inline-item">
			<a href="https://www.twitter.com" class="btn-floating btn-tw mx-1">
				<i class="fab fa-twitter"> </i>
			</a>
		</li>
		<li class="list-inline-item">
			<a href="https://www.youtube.com"class="btn-floating btn-gplus mx-1">
				<i class="fab fa-youtube"> </i>
			</a>
		</li>
		<li class="list-inline-item">
			<a href="https://www.linkedin.com"class="btn-floating btn-li mx-1">
				<i class="fab fa-linkedin-in"> </i>
			</a>
		</li>
	</ul>
	<!-- Social buttons -->


</footer>
<!-- Footer -->
	



	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>
</html>



<!-- <h2 class="text-light bg-dark">Top Play List For New Listener, If You Want to listen more song please signup</h2> -->