<?php

require 'includes/header.php';
?>
<?php
require 'config/config.php';

?>

<?php

if(isset($_GET['submit'])){
  if(isset($_GET['search'])){
    $keyword=$_GET['search'];

  $query=mysqli_query($con,"SELECT * FROM album1 WHERE songtitle LIKE '%$keyword%'	");






}
}

?>








<div class="tbl offset-md-3">


<table class="table text-light">
  <thead>
    <tr>
      <tr>
      
      <th scope="col">songtitle</th>
      
      
      
      
      
    </tr>
  </thead>
  <tbody>
  <?php 
 
while ($row=mysqli_fetch_array($query)) {?>
	

   <tr>
      
      
      
      <td> <?php  echo  $row['songtitle'] ?></td>
      
      
      
    </tr>


<?php
}


?>



</tbody>
</table>

</div>




















<script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
