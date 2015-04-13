<h1 class="hidden">Users</h1>
<h2 class="heading">Users</h2>

<?php foreach($allusers as $row) { ?>
<section class="friendbox"> 
	<h2 class="hidden">Friend</h2>



	<img src="<?php echo base_url(); ?>images/user_thumbs/<?php echo $row['user_image'];?>" class="userthumb" alt="<?php echo $row['user_fname']." ".$row['user_lname']; ?>'s Profile Image" height="100" width="100">
	<p class="uname"><?php echo $row['user_username']; ?></p>
	<p><?php echo $row['user_fname']." ".$row['user_lname']; ?></p>
	


	<a href="<?php echo base_url(); ?>friendprofile/view/<?php echo $row['user_id']; ?>"><p>See Profile</p>


	<a href="<?php echo base_url(); ?>add/friend/<?php echo $row['user_id']; ?>"><img src="<?php echo base_url(); ?>images/add.png" alt="addusericon"  class="addusericon" height="40" width="40"></a>
</section>
<?php } ?>


