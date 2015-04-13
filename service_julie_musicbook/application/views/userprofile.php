<h1 class="hidden">User Profile</h1>

<section id="userinfo">
	<h2>Hello <?php echo $user['user_fname']; ?>!</h2>

	<img src="<?php echo base_url(); ?>images/user_thumbs/<?php echo $user['user_image']; ?>" class="userthumb" alt="<?php echo $user['user_fname']." ". $user['user_lname']; ?>'s Profile Image" height="100" width="100">
	 <p id="uname"><?php echo $user['user_username']; ?></p>
	 <p><?php echo $user['user_fname']; ?></p>
	 <p><?php echo $user['user_lname']; ?></p>
	 <p><?php echo $user['user_email']; ?></p>

</section>
<a href="<?php echo base_url(); ?>page/friends" class="backuser">Back</a>
<!--<section id="playlist">
	<h2>Playlist</h2>
	HERE LYES PROBLEM
	<?php foreach($playlist as $list) { ?>RIP Problem, lived a long prosperus life of fing shit up
	<p><?php echo $list['playlist_title']; ?></p>
	<?php } ?>

</section> -->

<!-- <section id="friends"> 
	<h2>Friends</h2>
	
	<?php foreach($friends as $row) { ?>
<section class="friendlist"> 
	<h2 class="hidden">Friend</h2>
	<img src="<?php echo base_url(); ?>images/user_thumbs/<?php echo $row['user_image'];?>" class="userthumb" alt="<?php echo $row['user_fname']." ".$row['user_lname']; ?>'s Profile Image" height="100" width="100">
	<p><?php echo $row['user_username']; ?></p>
	<p><?php echo $row['user_fname']." ".$row['user_lname']; ?></p>
</section>
<?php } ?>

</section>-->