<h2 class="hidden">Album Detail</h2>



<section id="albumdetail">


	<img src="<?php echo base_url(); ?>images/album_images/<?php echo $array['album']['album_image']; ?>" class="albumthumb" alt="albumthumbnail" height="200" width="200">
	<h2><?php echo $array['album']['album_title']; ?></h2>
	<h2 class="artname"><?php echo $array['album']['album_artist']; ?></h2>
	<?php if($array['rows'] == TRUE) { 
		foreach($array['songs'] as $songs) { ?>
			<p><?php echo $songs['song_title']; ?><a href="#"><img src="<?php echo base_url(); ?>images/add.png" class="addsong" alt="add" height="30" width="30"></a></p>
		<?php }
	} else { ?>
		<p>No songs are currently in this album</p>
	<?php } ?>
</section>
<a href="<?php echo base_url(); ?>page/discover" class="back">Back</a>