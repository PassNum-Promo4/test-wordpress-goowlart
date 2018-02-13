<?php
/*
Template Name: contact
*/
?>
	<?php get_header(); ?>

	<div class="w3-container w3-white w3-padding-32 w3-padding-large" id="contact">
		<div class="w3-content" style="max-width:600px">
			<h4 class="w3-center">
				<b>Me contacter</b>
			</h4>

			<form action="/action_page.php" target="_blank">
				<div class="w3-section">
					<label>Votre nom</label>
					<input class="w3-input w3-border" type="name" name="Name" required>
				</div>
				<div class="w3-section">
					<label>Votre email</label>
					<input class="w3-input w3-border" type="email" name="Email" required>
				</div>
				<div class="w3-section">
					<label>Votre besoin</label>
					<textarea class="form-control w3-input w3-border " rows="5" name="Message"></textarea>

				</div>
				<button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Envoyer</button>


			</form>



		</div>
	</div>

	</div>
	<div class=" w3-center ">
		<a href="https://www.linkedin.com/in/alexvieiragoulart/">
			<i class="fa fa-linkedin"></i>
			<p> Linkedin </p>
		</a>
		<a href="https://github.com/goowlart">
			<i class="fa fa-github"></i>
			<p> Github </p>
		</a>
	</div>