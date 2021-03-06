<!--
V_home_page.php
View for the home page
Created by Maxime (2014-10-24)
-->

<!DOCTYPE html>

<html>

	<?php
		include_once ("./V/INCLUDE/header.php");
	?>
	
	<body>	
		<div class = "site-wrapper">
			<div class = "site-wrapper-inner">
				<div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-2" >		<!-- Colonne de gauche (Description) -->

					<div class="inner cover">		<!-- Background -->
						<h1 class="cover-heading">
							Bienvenue sur MeetSpace
						</h1>            
					</div>

					<p class="lead">
						Réunissez-vous où que vous soyez et à tout moment avec MeetSpace, l'espace de réunion en ligne.
						<br/> <br/>
						Créez votre réseau et profitez des services offerts par MeetSpace pour gérer votre projet.
					</p>
			
					<p class="lead">
						<a href="./about.php" class="btn btn-lg btn-default">
							En savoir plus
						</a>
					</p>

				</div>

				<div class="col-xs-12 col-sm-5 col-md-2 col-md-offset-2 ">		<!-- Colonne de droite (formulaires de connexion et d'inscription) -->
					<form class="form-horizontal" action="#" method="POST">
						<!-- PSEUDO INPUT -->
							<input id="nickname_login_input" name="nickname_login_input" type="text" placeholder="Pseudo" class="form-control input-md" required="">
							<br/>
						<!-- PASSWORD INPUT -->
							<input id="password_login_input" name="password_login_input" type="password" placeholder="Password" class="form-control input-md" required="">
							<br/>
						<!-- LOG IN BUTTON -->
							<button id="submit" name="login" class="btn btn-primary btn-lg" value="login">Connexion</button>
					</form>

					<form class="form-horizontal" action="#" method="POST">
						<!-- PSEUDO INPUT -->
							<input id="pseudoinput" name="nickname_signin_input" type="text" placeholder="Pseudo" class="form-control input-md" required="">
							<br/>
						<!-- MAIL INPUT -->
							<input id="pseudoinput" name="mail_signin_input" type="text" placeholder="Mail" class="form-control input-md" required="">
							<br/>
						<!-- PASSWORD INPUT 1 -->
							<input id="passwordinput" name="password_signin_input" type="password" placeholder="Mot de passe" class="form-control input-md" required="">
							<br/>
						<!-- PASSWORD VERIFICATION -->
							<input id="passwordinput" name="password_confirmation_input" type="password" placeholder="Confirmation du mot de passe" class="form-control input-md" required="">
							<br/>
						<!-- SIGN IN BUTTON -->
							<button id="submit" name="signin" class="btn btn-success btn-lg" value="signin">Inscription</button>
					</form>
				</div>
				

			</div>
		</div>
	
	</body>

</html>
