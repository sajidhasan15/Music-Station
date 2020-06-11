<?php
include("includes/header.php");
include("includes/classes/User.php");
?>

<div class="user_details column">
	<a href="<?php echo $userLoggedIn ?>"><img src="<?php echo $user['profile_pic']; ?>"></a>

	<div class="user_details_left_right">
		<a href="<?php echo $userLoggedIn ?>">
			<?php echo $user['first_name'] ." ". $user['last_name']; ?>
		</a>
		<br>
		<?php echo "Age: " . $user['age'] ?>
		<br>
		<?php echo "Birthdate: " . $user['birthdate'] ?>
	</div>

</div>

<div class="main_column column">

	<form action="index.php" class="post_form" method="POST">
		<div class="demo">
			<p>New Bangla Song</p>
			<audio controls="controls">
				<source src="music/music.mp3"/>
			</audio> 
		</div>
		
	</form>

</div>

<div class="main_column column">

	<form action="index.php" class="post_form" method="POST">
		<div class="demo">
			<p>New Bangla Song</p>
			<audio controls="controls">
				<source src="music/music.mp3"/>
			</audio> 
		</div>
		
	</form>

</div>
<div class="main_column column">

	<form action="index.php" class="post_form" method="POST">
		<div class="demo">
			<p>New Bangla Song</p>
			<audio controls="controls">
				<source src="music/music.mp3"/>
			</audio> 
		</div>
		
	</form>

</div>



<?php  

	$user_obj = new user($con, $userLoggedIn);
	echo $user_obj->getFirstAndLastName();

?>




<!-- </div> -->
</body>
</html>