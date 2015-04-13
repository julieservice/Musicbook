<h1 class="hidden">Discover</h1>

 
                
<form id="searchForm" name="searchForm" action="index.php" method="get">

<input id="topsearch" type="text" name="topsearch" onkeyup="showResults(this.value)" placeholder="Search">
</form>
<div id="txtHint"></div>



<div clas="full">
<h2 class="heading">Discover</h2>

<?php foreach($albums as $row) { ?>
<section class="artistbox"> 
	<h2 class="hidden">Artist</h2>
	<!--echos out the $row and albumimage from db-->
	<img src="<?php echo base_url(); ?>images/album_images/<?php echo $row['album_image']; ?>" class="album" alt="albumthumbnail" height="200" width="200">
	<p class="albumname"><?php echo $row['album_title']; ?></p>
	<p><?php echo $row['album_artist']; ?></p>
	


	<!--echos out the $row and albumDetails from db-->
	<a href="<?php echo base_url(); ?>albumdetail/view/<?php echo $row['album_id']; ?>"><img src="<?php echo base_url(); ?>images/add.png" class="add" alt="add" height="40" width="40"></a>
</section>
<?php } ?>
</div>

