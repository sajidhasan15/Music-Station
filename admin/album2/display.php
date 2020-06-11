<!DOCTYPE html>
<html>
<head>
	<style>
		.container{
			margin-top: 100px;
		}
	</style>
	<title>Music Station | Display Song</title>
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<!-- Navigation -->
	<div>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

			<a class="navbar-brand col-md-4" href="../index.php"><img src="../images/logo.png" height="50"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse col-md-5 offset-md-4" id="navbarResponsive">
				<ul class="navbar-nav ">

					<li class="nav-item">
						<h5><a class="nav-link" href="../index.php">Music</a></h5>
					</li>
					<li class="nav-item">
						<h5><a class="nav-link" href="../contact-us.php">Contact us</a></h5>
					</li>
					<li class="nav-item">
						<h5><a class="nav-link" href="../about-us.php">About</a></h5>
					</li>
					<li class="nav-item">
						<h5><a class="nav-link" href="../user/register.php">Signup/login</a></h5>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="container text-center">
		<h2 class="text-light bg-dark">Top Play List For New Listener, If You Want to listen more song please signup <a href="../user/register.php">here</a></h2>
		<?php  

		function displayAudios()
		{
			$conn = mysqli_connect("localhost","root","","music");
			if (!$conn) {
				die('server not connected');
			}

			$query = "SELECT * FROM audios";

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

		<audio controls style="width: 900px">
			<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

			</source>
		</audio>

	

</div>

<div class="container">
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

	
</div>



	<!-- <script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
		</script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
		</script>
	</body>
	</html>




