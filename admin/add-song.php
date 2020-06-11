<?php 
define('size', '200M');
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
{ 
    header('location:index.php');
}
else{

// For adding post  
    if(isset($_POST['submit']))
    {
        $songtitle=$_POST['songtitle'];
        $catid=$_POST['category'];
        $file_name = $_FILES['audio_file']['name'];
    //          if($_FILES ['audio_file']['type']=='audio/mp3')
    // { 
    //    $new_file_name=$_FILES['audio_file']['name'];

 // Where the file is going to be placed
       //$target_path = "Audios/".$new_file_name;

 //target path where u want to store file.

 //following function will move uploaded file to audios folder. 
 //       if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {

 // //insert query if u want to insert file
 //        $msg="Song successfully added <br>";

 //        saveAudio($target_path);

 //        displayAudios();
 //       }
 //   }

         // Where the file is going to be placed
        //$_FILES ['audio_file']['type']=='audio/mp3')
        //$new_file_name=$_FILES['audio_file']['name'];
        //$target_path = "Audios/".$new_file_name;


        if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path));
        {

           $query=mysqli_query($con,"insert into audios(songtitle,category,filename) values('$songtitle','$catid','$file_name')");
           if($query)
           {
            $msg="Song successfully added ";

        }
        else{
            $error="Something went wrong . Please try again.";    
        }
        //saveAudio($target_path);
    }

}



// function displayAudios()
// {
//    $conn = mysqli_connect("localhost","root","","music");
//    if (!$conn) {
//     die('server not connected');
// }

// $query = "select * FROM audios";

// $r = mysqli_query($conn,$query);

// while ($row = mysqli_fetch_array($r)) 
// {
//  echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
//  echo "<br/>";    
// }
// mysqli_close($conn);
// }

// function saveAudio($fileName)
// {
//     $conn = mysqli_connect("localhost","root","","music");
//     if (!$conn) {
//         die('server not connected');
//     }

//     $query = "INSERT INTO  audios(songtitle,category,filename) values('$songtitle','$catid','$file_name')";

//     mysqli_query($conn,$query);

//     if (mysqli_affected_rows($conn)>0) 
//     {
//         echo "audio file save into database";     
//     }

//     mysqli_close($conn);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>Music Station | Add Song</title>

    <!-- Summernote css -->
    <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>
    <script>
        function getSubCat(val) {
          $.ajax({
              type: "POST",
              url: "get_subcategory.php",
              data:'catid='+val,
              success: function(data){
                $("#subcategory").html(data);
            }
        });
      }
  </script>
</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('includes/topheader.php');?>
        <!-- ========== Left Sidebar Start ========== -->
        <?php include('includes/leftsidebar.php');?>
        <!-- Left Sidebar End -->



        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Song </h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Song</a>
                                </li>
                                <li>
                                    <a href="#">Add Song </a>
                                </li>
                                <li class="active">
                                    Add Song
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">  
                        <!---Success Message--->  
                        <?php if($msg){ ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                            </div>
                        <?php } ?>

                        <!---Error Message--->
                        <?php if($error){ ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
                            <?php } ?>


                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form name="addpost" method="post" enctype="multipart/form-data">
                                       <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Song Title</label>
                                        <input type="text" class="form-control" id="songtitle" name="songtitle" placeholder="Enter title" required>
                                    </div>



                                    <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
                                            <option value="">Select Category </option>
                                            <?php
// Feching active categories
                                            $ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
                                            while($result=mysqli_fetch_array($ret))
                                            {    
                                                ?>
                                                <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
                                            <?php } ?>

                                        </select> 
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-12">
                                         <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title"><b>Select Audio</b></h4>
                                            <input name="audio_file" id="audio_file" type="file"/>
                                            <!-- <input type="file" class="form-control" id="postimage" name="postimage"  required> -->
                                        </div>
                                    </div>
                                </div>

                                <!-- <input type="submit" name="Submit" id="Submit" value="Submit"/> -->
                                <button type="submit" name="submit" id="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
                            </form>
                        </div>
                    </div> <!-- end p-20 -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container -->

    </div> <!-- content -->

    <?php include('includes/footer.php');?>

</div>


</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

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

<!--Summernote js-->
<script src="../plugins/summernote/summernote.min.js"></script>
<!-- Select 2 -->
<script src="../plugins/select2/js/select2.min.js"></script>
<!-- Jquery filer js -->
<script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

<!-- page specific js -->
<script src="assets/pages/jquery.blog-add.init.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>




    </body>
    </html>
    <?php } ?> 