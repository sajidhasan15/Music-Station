<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Music Station | About us</title>
  <link rel="icon" href="images/icon.png" type="image" sizes="16x16">
  <style>
    .container{
      margin-top: 76px;
    }
    .body{
      background-color: #fad390;
    }
  </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="css/modern-business.css" rel="stylesheet"> -->

</head>

<body>
  <div class="body">
    <!-- Navigation -->
    <div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

        <a class="navbar-brand col-md-4" href="user/display.php"><img src="images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-5 offset-md-4" id="navbarResponsive">
          <ul class="navbar-nav ">

            <li class="nav-item">
              <h5><a class="nav-link" href="user/display.php">Music</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link" href="contact-us.php">Contact us</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link" href="about-us.php">About</a></h5>
            </li>
            <li class="nav-item">
              <h5><a class="nav-link" href="user/includes/handlers/logout.php">Logout</a></h5>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Page Content -->
    <div class="container">

      <?php 
      $pagetype='aboutus';
      $query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
      while($row=mysqli_fetch_array($query))
      {

        ?>
        <h1 class="mt-4 mb-3"><?php echo htmlentities($row['PageTitle'])?>

      </h1>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
    <?php } ?>
    
  </div>
  <!-- /.container -->

  <!-- Footer 
  <?php include('includes/footer.php');?>-->
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
                <a class="text-primary" href="user/display.php">Music</a>
              </li>
              <li>
                <a class="text-primary" href="contact-us.php">Contuct Us</a>
              </li>
              <li>
                <a class="text-primary" href="about-us.php">About</a>
              </li>
              <li>
                <a class="text-primary" href="user/register.php">Signup/Login</a>
              </li>
            </ul>

          </div>
          <!--  <div class="container text-center"> -->

            <!-- Grid row-->
               <!-- <div class="row"> -->

              <!-- Grid column -->
              <div class="col-md-12">
                <div class="mb-5 text-center">

                  <!-- Facebook -->
                  <a href="https://www.facebook.com" class="fb-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="album/image/social/fb.png" width="50px" alt="">
                    </i>
                    
                  </a>
                  <!-- Twitter -->
                  <a href="https://www.twitter.com" class="tw-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="album/image/social/tw.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Linkedin -->
                  <a href="https://www.linkedin.com" class="li-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="album/image/social/linkedin.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Instagram-->
                  <a href="https://www.instasgram.com" class="ins-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="album/image/social/ins.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Pinterest-->
                  <a href="https://www.youtube.com" class="pin-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="album/image/social/youtube.png" width="50px" alt="">
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

      <!--  </div> -->





      </footer>
      <!-- Footer -->




  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</div>


</body>

</html>