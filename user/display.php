<?php
include("includes/header.php");
include("config/config.php");
//include("user-search.php");

?>


<!DOCTYPE html>
<html>
<head>
	<style>

		.body_wrapper{
			margin: 0;
			padding: 0;
			background-color:#57606f;
			height: 1000px;
		}
		.container{
			margin-top: 0px;
		}
		.column{
			background-color: 
			#fff;
			padding: 10px;
			/*border: 1px solid #D3D3D3;*/
			border-radius: 10px;
			box-shadow: 2px 2px 1px #bdbaba;
			z-index: -1;
		}
		.user_details{
			width: 330px;
			float: left;
			margin-bottom: 20px;
		}
		.user_details_left_right{
			width: 160px;
			display: inline-block;
			position: absolute;
		}
		.user_details img{
			height: 125px;
			border-radius: 5px;
			margin-right: 5px;
		}
		.container{
			/*padding-top: 76px;*/
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
		.body{
			background-color: #fad390;
		}
		#myBtn {
			display: none; /* Hidden by default */
			position: fixed; /* Fixed/sticky position */
			bottom: 20px; /* Place the button at the bottom of the page */
			right: 30px; /* Place the button 30px from the right */
			z-index: 99; /* Make sure it does not overlap */
			border: none; /* Remove borders */
			outline: none; /* Remove outline */
			background-color: red; /* Set a background color */
			color: white; /* Text color */
			cursor: pointer; /* Add a mouse pointer on hover */
			padding: 15px; /* Some padding */
			border-radius: 10px; /* Rounded corners */
			font-size: 18px; /* Increase font size */
		}

		#myBtn:hover {
			background-color: #555; /* Add a dark-grey background on hover */
		}
	</style>
	<title>Music Station | Display Song</title>
	<link rel="icon" href="../images/icon.png" type="image/gif" sizes="16x16">

	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="body">
		<div class="container">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/Picture1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/Picture2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../images/Picture3.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<?php 
		if (isset($_POST['search'])) {
			
			$filename = $_POST['filename'];

			$query = "SELECT * FROM album1 where filename = '$filename' ";
			$query_run = mysqli_query($con, $query);

			while ($row = mysqli_fetch_array($query_run)) {

				?>

				<form action="" method="POST">
					<input type="text" name="filename" value="<?php echo $row['filename'] ?>"/>
				</form>


				<?php 
			}
		}

		?>
		

		<!-- <div class="container">
			<div id="carouselExampleCaptions" class="carousel" data-ride="carousel">

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../images/Picture1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
           
           </div>
       </div>
       <div class="carousel-item">
       	<img src="../images/Picture2.jpg" class="d-block w-100" alt="...">
       	<div class="carousel-caption d-none d-md-block">
            
            </div>
        </div>
        <div class="carousel-item">
        	<img src="../images/Picture3.jpg" class="d-block w-100" alt="...">
        	<div class="carousel-caption d-none d-md-block">
            
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
    </a>
</div>
</div> -->

<div class="w">
	<img src="../images/001.png" width="100%" height="100px" alt="cover picture"><br>
</div>

<div class="container text-center">
	
	

	<div class="list">
		<div class="artist1">
			<img width="200px" height="200px" src="../images/Ashaji.jpg" alt="">
			<a name="asha" href="../album/song1/display.php"><h2>Asha Bhosle</h2></a>
			<p>Asha Bhosle, is an Indian playback singer.Bhosle's career started in 1943 and has spanned over six decades. She has done playback singing for over a thousand Bollywood movies.</p>

			<br>
		</div>
		<div class="artist2">
			<img width="200px" height="200px" src="../images/kazi.jpg" alt="">
			<a href="../album/song2/display.php"><h2>Kazi Nazrul Islam </h2></a>
			<p>Kazi Nazrul Islam was a Bengali poet, writer, musician, anti-colonial revolutionary and the national poet of Bangladesh. Popularly known as Nazrul, he produced a large body of poetry and music with themes that included religious devotion.</p>

			<br>
		</div>
		<div class="artist3">
			<img width="200px" height="200px" src="../images/Lata-Mangeshkar.jpg" alt="">
			<a href="../album/song3/display.php"><h2>Lata Mangeshkar</h2></a>
			<p>Lata Mangeshkar is an Indian playback singer and music director. She is one of the best-known and most respected playback singers in India.</p>

			<br>
		</div>
		<div class="artist4">
			<img width="200px" height="200px" src="../images/manna.jpg" alt="">
			<a href="../album/song4/display.php"><h2>Manna Dey</h2></a>
			<p>Prabodh Chandra Dey, known by his stage name Manna Dey, was an internationally acclaimed Indian playback singer, music director, musician and Indian classical vocalist.</p>

			<br>
		</div>
		<div class="artist5">
			<img width="200px" height="200px" src="../images/robi.jpg" alt="">
			<a href="../album/song5/display.php"><h2>Rabindranath Tagore</h2></a>
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
							<a class="text-primary" href="display.php">Music</a>
						</li>
						<li>
							<a class="text-primary" href="../contact-us.php">Contuct Us</a>
						</li>
						<li>
							<a class="text-primary" href="../about-us.php">About</a>
						</li>
						<li>
							<a class="text-primary" href="register.php">Signup/Login</a>
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
										<img src="../album/image/social/fb.png" width="50px" alt="">
									</i>

								</a>
								<!-- Twitter -->
								<a href="https://www.twitter.com" class="tw-ic">
									<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
										<img src="../album/image/social/tw.png" width="50px" alt="">
									</i>
								</a>
								<!--Linkedin -->
								<a href="https://www.linkedin.com" class="li-ic">
									<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
										<img src="../album/image/social/linkedin.png" width="50px" alt="">
									</i>
								</a>
								<!--Instagram-->
								<a href="https://www.instasgram.com" class="ins-ic">
									<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
										<img src="../album/image/social/ins.png" width="50px" alt="">
									</i>
								</a>
								<!--Pinterest-->
								<a href="https://www.youtube.com" class="pin-ic">
									<i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
										<img src="../album/image/social/youtube.png" width="50px" alt="">
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


			


			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
			</script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
			</script>

		</div>


<!-- 	<?php  

	$user_obj = new user($con, $userLoggedIn);
	echo $user_obj->getFirstAndLastName();

	?> -->
</body>
</html>




