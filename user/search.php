<?php
include("includes/header.php");

//include("user-search.php");

?>
<?php include("config/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .body{
      background-color: #fad390;
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
  <?php 

     if(isset($_GET['submit'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM album1 WHERE filename LIKE '%$keyword%'";
     }else
     $sql = "SELECT * FROM mu";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-bordered">
  <tr>
     <th>songtitle</th>
    
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->songtitle ?></td>
  </tr>
  <?php endwhile; ?>
</table>



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
        <!--  <div class="container text-center"> -->

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

        <!--  </div> -->


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
  
</body>
</html>