<?php 
session_start();
include('includes/config.php');
//include('user/register.php');
// include('includes/play.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- 
  <style>
    .a{
      style:none;
    }
  </style> -->

  <meta charset="utf-8">
  <!-- Start Free jQuery Slider HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

    <!-- Free jQuery Slider HEAD section -->

    <title>Music Station | Home Page</title>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>



    <!-- Navigation -->
    <div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

        <a class="navbar-brand col-md-4" href="index.php"><img src="images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-5 offset-md-4" id="navbarResponsive">
          <ul class="navbar-nav ">

            <li class="nav-item">
              <h3><a class="nav-link" href="index.php">Music</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="contact-us.php">Contact us</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="about-us.php">About</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="user/register.php" target="_blank">Signup/login</a></h3>
            </li>
          </ul>
        </div>
      </nav>
  </div>

  <!-- Page Content -->
  <!--   <div class="container"> -->

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/m1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
           <!-- <h1 class="display-1 font-weight-bold text-primary">Music is like a dream. One that I cannot hear.</h1>
             <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/m2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!--<h1 class="display-1 font-weight-bold text-primary">Without music, life would be a blank to me.</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
          </div>
        </div>
        <div class="carousel-item">
        	<img src="images/m3.jpg" class="d-block w-100" alt="...">
        	<div class="carousel-caption d-none d-md-block">
        		<!--<h1 class="display-1 font-weight-bold text-primary">Music is an outburst of the soul.</h1>
        		 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
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
 </div>

 <div class="container">
  <div class="importaint">
    <blockquote class="blockquote text-center">
      <h1 class="mb-0 text-info">If you Want to listening Some demo song please click that link for striming song.
        <footer class="blockquote-footer">
          <a class="card-link font-italic" href="home/display.php" target="_blank">Click here</a>
          <cite title="Source Title text-warning"> For Bangla Music</cite>
        </footer>
      </h1>
    </blockquote>
  </div>
</div>

<!-- Footer -->
<footer class="p-3 w-100 h-100 bg-dark">
  <div class="container">
    <h4 class="m-4 text-center text-white te">Copyright &copy; Sajid hasan 2019-2020</h4>
  </div>
  <!-- /.container -->
</footer>





    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </head>
</body>

</html>
