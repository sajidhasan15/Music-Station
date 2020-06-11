<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
	header('location:index.php');
}
else{

	if($_GET['action']='del')
	{
		$postid=intval($_GET['pid']);
		$query=mysqli_query($con,"update tblposts set Is_Active=0 where id='$postid'");
		if($query)
		{
			$msg="Post deleted ";
		}
		else{
			$error="Something went wrong . Please try again.";    
		} 
	}
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/songstyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<!-- App favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		<!-- App title -->
		<title>Music Station | Songs List</title>

		<!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

		<!-- jvectormap -->
		<link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

	<!-- Begin page -->
	<div id="wrapper">

		<!-- Top Bar Start -->
		<?php include('includes/topheader.php');?>

		<!--Left Sidebar Start -->
		<?php include('includes/leftsidebar.php');?>


		<div class="content-page">

			<!-- Start content -->
			<div class="content">
				<div class="container">


					<div class="row">
						<div class="col-xs-12">
							<div class="page-title-box">
								<h4 class="page-title">Manage Songs </h4>
								<ol class="breadcrumb p-0 m-0">
									<li>
										<a href="#">Admin</a>
									</li>
									<li>
										<a href="#">Songs</a>
									</li>
									<li class="active">
										Manage Song  
									</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<?php include('');?>

					<div class="container text-left">
						<h2 class="text-white bg-dark text-center">Album1:</h2>
						<?php  

						function displayAudios1()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM album1";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios1();
						?>
						<h2 class="text-white bg-dark text-center">Album2:</h2>
						<?php

						function displayAudios2()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM album2";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios2();

						?>

						<h2 class="text-white bg-dark text-center">Album3:</h2>

						<?php 

						function displayAudios3()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM album3";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios3();

						?>

						<h2 class="text-white bg-dark text-center">Album4:</h2>

						
						<?php 

						function displayAudios4()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM album4";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios4();

						?>
						
						<h2 class="text-white bg-dark text-center">Album5:</h2>
						<?php

						function displayAudios5()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM album5";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios5();

						?>
	<!-- 					<h2 class="text-white bg-dark text-center">Album5:</h2> -->
						<?php

						function displayAudios6()
						{
							$conn = mysqli_connect("localhost","root","","music");
							if (!$conn) {
								die('server not connected');
							}

							$query = "SELECT * FROM audios";

							$r = mysqli_query($conn,$query);

							while ($row = mysqli_fetch_array($r)) 
							{
								echo '<a href="manage-songs.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
								echo "<br/>";    
							}
							mysqli_close($conn);
						}

						displayAudios6();

						?>

						<div class="box">
							
						</div>
						<!-- <audio controls style="width: 800px; margin-left: 53px">
							<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

							</source>
						</audio>
 -->
						

						

						

					</div>

				</div> <!-- container -->

			</div> <!-- content --> 





			<?php include('includes/footer.php');?>

		</div>


	</div>
	<!-- END wrapper -->


<!-- 
					<script>
						var resizefunc = [];
					</script> -->

					<!-- jQuery  -->
					<script src="assets/js/jquery.min.js"></script>
					<script src="assets/js/bootstrap.min.js"></script>
					<script src="assets/js/detect.js"></script>
					<script src="assets/js/fastclick.js"></script>
					<script src="assets/js/jquery.blockUI.js"></script>
					<script src="assets/js/waves.js"></script>
					<script src="assets/js/jquery.slimscroll.js"></script>
					<script src="assets/js/jquery.scrollTo.min.js"></script>
					<script src="../plugins/switchery/switchery.min.js"></script>

					<!-- CounterUp  -->
					<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
					<script src="../plugins/counterup/jquery.counterup.min.js"></script>

					<!--Morris Chart-->
					<script src="../plugins/morris/morris.min.js"></script>
					<script src="../plugins/raphael/raphael-min.js"></script>

					<!-- Load page level scripts-->
					<script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
					<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
					<script src="../plugins/jvectormap/gdp-data.js"></script>
					<script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


					<!-- Dashboard Init js -->
					<script src="assets/pages/jquery.blog-dashboard.js"></script>

					<!-- App js -->
					<script src="assets/js/jquery.core.js"></script>
					<script src="assets/js/jquery.app.js"></script>

				</body>
				</html>
				<?php } ?>