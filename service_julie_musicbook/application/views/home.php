<h1 class="hidden">Home</h1>

<section id="userinfo">
	<h2>Hello <?php echo $fname; ?>!</h2>

	<img src="<?php echo base_url(); ?>images/user_thumbs/<?php echo $image; ?>" class="userthumb" alt="<?php echo $fname." ".$lname; ?>'s Profile Image" height="100" width="100">
	 <p id="uname"><?php echo $username; ?></p>
	 <p><?php echo $fname; ?></p>
	 <p><?php echo $lname; ?></p>
	 <p><?php echo $email; ?></p>

</section>

<section id="playlist">
	<h2>Playlist</h2>
	<?php foreach($playlist as $list) { ?>
	<p><?php echo $list['playlist_title']; ?></p>
	<?php } ?>

</section>

<section id="friends">
	<h2>Friends</h2>
	
	<?php foreach($friends as $row) { ?>
<section class="friendlist"> 
	<h2 class="hidden">Friend</h2>
	<img src="<?php echo base_url(); ?>images/user_thumbs/<?php echo $row['user_image'];?>" class="userthumb" alt="<?php echo $row['user_fname']." ".$row['user_lname']; ?>'s Profile Image" height="100" width="100">
	<p><?php echo $row['user_username']; ?></p>
	<p><?php echo $row['user_fname']." ".$row['user_lname']; ?></p>
</section>
<?php } ?>

</section>