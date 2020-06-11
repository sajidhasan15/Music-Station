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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <!-- Navigation bar -->

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark fixed-top">

        <a class="navbar-brand col-md-5" href="index.php"><img src="../images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-md-5 offset-md-3" id="navbarResponsive">
            <ul class="navbar-nav ">

                <li class="nav-item">
                    <h3><a class="nav-link" href="../../music.php">Music</a></h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link" href="../../contact-us.php">Contact us</a></h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link" href="../../about-us.php">About</a></h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link" href="../../user/register.php">Signup/login</a></h3>
                </li>


            </ul>
        </div>
        <!-- </div> -->
    </nav>

    <div class="container text-center">
        <?php

        define('size', '200M');

        if(isset($_POST['Submit']))
        {
            $file_name = $_FILES['audio_file']['name'];

            if($_FILES ['audio_file']['type']=='audio/mp3')
            { 
               $new_file_name=$_FILES['audio_file']['name'];

 // Where the file is going to be placed
               $target_path = "Audios/".$new_file_name;

 //target path where u want to store file.

 //following function will move uploaded file to audios folder. 
               if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) {

 //insert query if u want to insert file
                echo 'Upload Successfully <br>';

                saveAudio($target_path);

                displayAudios();
            }
        }
    }

    function displayAudios()
    {
     $conn = mysqli_connect("localhost","root","","music");
     if (!$conn) {
        die('server not connected');
    }

    $query = "select * FROM audios";

    $r = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($r)) 
    {
       echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
       echo "<br/>";    
   }
   mysqli_close($conn);
}

function saveAudio($fileName)
{
    $conn = mysqli_connect("localhost","root","","music");
    if (!$conn) {
        die('server not connected');
    }

    $query = "INSERT INTO audios(filename) VALUES ('$fileName')";

    mysqli_query($conn,$query);

    if (mysqli_affected_rows($conn)>0) 
    {
        echo "audio file save into database <br>";     
    }

    mysqli_close($conn);
}

?>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>
</html>




