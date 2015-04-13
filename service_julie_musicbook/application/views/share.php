<h1 class="hidden">Share</h1>
<h2 class="heading">Share</h2>

<section id="upload">
	<h2 id="uploadheader">Upload your MP3</h2>

<?php echo form_open_multipart('upload/do_upload');?>
	<input type="text" name="filename" placeholder="Song Title:">
			<br><br>
	<input type="text" name="artistname" placeholder="Artist Name:">
			<br><br>

	<input class="submitBtn" type="file" name="songfile"/>

	<br /><br />

	<input class="uploadbutton" type="submit" value="upload" />

</form>


</section>