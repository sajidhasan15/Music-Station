<?php include('doctor-header.php') ?>
<?php include('db.php') ?>


<?php
if(!isset($_SESSION['valid'])) {
  header('Location: index.php');
}
?>

<?php

if(isset($_GET['submit'])){
  if(isset($_GET['search'])){
    $keyword=$_GET['search'];

  $query=mysqli_query($connection,"SELECT * FROM users WHERE nid LIKE '%$keyword%'	");


}
}

?>


<div class="tbl offset-md-3">


<table class="table text-light">
  <thead>
    <tr>
      <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">NID</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 
while ($row=mysqli_fetch_array($query)) {?>
	

   <tr>
      <th scope="row">  <?php  echo  $row['id'] ?>   </th>
      <td> <?php  echo  $row['name'] ?></td>
      <td> <?php  echo  $row['nid'] ?></td>
      <td> <?php  echo  $row['email'] ?></td>
      <td> <?php  echo  $row['phone'] ?></td>
      
      <td>
      <a href="pateient-details.php?id=<?php  echo  $row['id'] ?>">View</a> |
      <a href="prescribe.php?id=<?php  echo  $row['id'] ?>">Prescribe</a> |
      </td>
    </tr>


<?php
}


?>



</tbody>
</table>

</div>



<?php include('admin_footer.php') ?>