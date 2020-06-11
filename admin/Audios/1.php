<?php  

function displayAudios()
{
  $conn = mysqli_connect("localhost","root","","music");
  if (!$conn) {
    die('server not connected');
  }

  $query = "SELECT * FROM audios WHERE songtitle = 'Baba Kotodin Dekhina'";

  $r = mysqli_query($conn,$query);

  while ($row = mysqli_fetch_array($r)) 
  {
    echo '<a href="demo.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
    echo "<br/>";    
  }
   mysqli_close($conn);
}

displayAudios();

?>

<audio controls>
	<source src="<?php echo $_GET['name']; ?>" type="audio/mpeg">

	</source>
</audio>