<?php 
session_start();
include('includes/config.php');
//include('user/register.php');
// include('includes/play.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8">
<!-- Start Free jQuery Slider HEAD section -->
<!-- <link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script> -->

<!-- Free jQuery Slider HEAD section -->

<title>Music Station | Home Page</title>

<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="js/jquery.js"></script> -->

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <div class="bodyd" style="background-color: #fad390">
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
              <h3><a class="nav-link" href="#">Music</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="#">Contact us</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="#">About</a></h3>
            </li>
            <li class="nav-item">
              <h3><a class="nav-link" href="user/register.php">Signup/login</a></h3>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Picture1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
           <!-- <h1 class="display-1 font-weight-bold text-primary">Music is like a dream. One that I cannot hear.</h1>
             <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
           </div>
         </div>
         <div class="carousel-item">
          <img src="images/Picture2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!--<h1 class="display-1 font-weight-bold text-primary">Without music, life would be a blank to me.</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
           </div>
         </div>
         <div class="carousel-item">
          <img src="images/Picture3.jpg" class="d-block w-100" alt="...">
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

 <!-- <div class="container">
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
</div> -->

<div class="image">
  <img width="100%"  src="images/Cover.png" alt="LOVE WHAT YOU HEAR?
  Enjoy Our Music">

  <div class="container">
    <h2 class="display-1">About Us</h2>
    <h1>Music Station is a site dependent on Bengali melodies where we can locate our Bengali tunes from the old age. This site works with the possibility of an old Bengali melody since we can't locate our old culture of music all over the place. So we imagine that we can assemble a site where we can locate our everything old and endless Bengali tunes. </h1>
  </div>

 <!--  <div class="row">
    <div class="col-3">
      <img width="350px"src="images/m.png" alt="">
    </div>
    <div class="col-3">
      <img width="350px"src="images/o.png" alt="">
    </div>
  </div>
  <div class="container">
    <h2>Modern Song</h2>
    <h3>The earliest music in Bengal was influenced by Sanskrit chants, and evolved under the influence of Vaishnav poetry such as the 13th-century Gitagovindam by Jayadeva, whose work continues to be sung in many eastern Hindu temples. The Middle Ages saw a mixture of Hindu and Islamic trends when the musical tradition was formalized under the patronage of Sultan and Nawabs and the powerful landlords baro bhuiyans.</h3>

    <h2>Old Song</h2>
    <h3>Much of the early canon is devotional, as in the Hindu devotional songs of Ramprasad Sen a bhakta who captures the Bengali ethos in his poetic, rustic, and ecstatic vision of the Hindu goddess of time and destruction in her motherly incarnation, Ma Kali. Another writer of the time was Vidyapati. Notable in this devotional poetry is an earthiness that does not distinguish between love in its carnal and devotional forms; some see connections between this and Tantra, which originated sometime in the middle of the first millennium CE.</h3>
  </div> -->
      <!-- Footer -->
    <footer class="page-footer list-inline font-smal1 text-white bg-dark">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h1 class="font-weight-bold text-uppercase mt-2 mb-4">About Our Services</h1>
            <h4 style="line-height: 1.5">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
              consectetur
            adipisicing elit.</h4>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h1 class="font-weight-bold text-uppercase mt-2 mb-4">Links</h1>

            <ul class="list-unstyled">
              <h4>
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
              </h4>
              
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
                      <img src="images/social/fb.png" width="50px" alt="">
                    </i>
                    
                  </a>
                  <!-- Twitter -->
                  <a href="https://www.twitter.com" class="tw-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="images/social/tw.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Linkedin -->
                  <a href="https://www.linkedin.com" class="li-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="images/social/linkedin.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Instagram-->
                  <a href="https://www.instasgram.com" class="ins-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="images/social/ins.png" width="50px" alt="">
                    </i>
                  </a>
                  <!--Pinterest-->
                  <a href="https://www.youtube.com" class="pin-ic">
                    <i class="fa-lg white-text mr-md-5 mr-3 fa-2x">
                      <img src="images/social/youtube.png" width="50px" alt="">
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



</div>

</div>





<!-- Footer 
<footer class="p-3 w-100 h-100 bg-dark">
  <div class="container">
    <h4 class="m-4 text-center text-white te">Copyright &copy; Sajid hasan 2019-2020</h4>
  </div>
</footer>-->





    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </head>
</body>

</html>
