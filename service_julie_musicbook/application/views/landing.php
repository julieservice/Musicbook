<section id="banner">
	<h2 class="hidden">Login Form</h2>
	<section id="login">

		<h3>Welcome to MusicBook!</h3>
		<!--Calls to pages controller, login function for login validation -->
		<?php echo form_open('login'); ?>
			<input type="text" name="username" placeholder="User Name:">
			<br><br>
			
			<input type="text" name="password" placeholder="Password">
			<br><br>

			<input id="submit" type="submit" value="Submit">
		</form>
		<p id="bannerp">New User?</p>
		<!--Redirects to signup page -->
		<a href="<?php echo base_url(); ?>signup" id="bannera">Sign Up!</a>
	</section>

</section>

<section id="content">
	<h2 class="hidden">Site Desciption</h2>

	<div id="discover">
		<p class="boxtext">Discover New Music</p>
	</div>

	<div id="share">
		<p class="boxtext">Share with Friends</p>
	</div>

	<div id="create">
		<p class="boxtext">Create Custom Playlists</p>
	</div>

</section>