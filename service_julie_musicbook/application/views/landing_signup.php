<section id="banner">
	<h2 class="hidden">Register Banner</h2>
	<section id="login">
		<h2 class="hidden">Register Form</h2>
		<h3>Welcome to MusicBook!</h3>

		<!--Calls to pages controller, register function for form validation rules -->
		<?php echo form_open('pages/register',array('id'=>'registerForm'));?>
			<input type="text" name="fname" id="fname" placeholder="First Name:">
			<br><br>

			<input type="text" name="lname" id="lname" placeholder="Last Name:">
			<br><br>

			<input type="text" name="email" id="email" placeholder="E-mail:">
			<br><br>
			
			<input type="text" name="username" id="username" placeholder="Username:">
			<br><br>

			<input type="text" name="password" id="password" placeholder="Password">
			<br><br>

			<input id="submit" type="submit" value="Sign Up">
		</form>
	</section>

	<div id="feedback"></div>
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
<script type="text/javascript" src="<?php echo base_url(); ?>js/registerUser.js"></script>