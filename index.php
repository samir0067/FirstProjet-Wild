<?php $title = "Page d'accueil";?>
<?php require 'head.php';?>
<?php require 'header.php';?>
		<main class="container-fluid">
			
			<!-- début partie perso -->
			
			<h2 class="col-sm-12">Qui suis-je?</h2>
			<p class="col-sm-12 psComment">Hodor..Hodor !</p>
			<section class="psViePerso container">

				<div class="card psCard">
					<img src="img/team01.jpg" class="card-img-top psImgTop" alt="Très souriant aujourd'hui !">
					<div class="card-body">
						<h4 class="card-title">Dragon Ball Super</h4>
						<p class="card-text">
						Pour comprendre cette expression tu dois me comprendre et pour me comprendre, tu dois cliquer ici! 
						Avis à toi cher recruteur, je suis déjà mort une fois donc ce n'est pas le CORONAVIRUS qui va me tuer. 
						Si tu veux découvrir mes nombreuses qualités je t'invite à découvrir mon histoire en cliquant sur ce lien ! 
						</p>
						<a href="viePerso.php" class="btn btn-primary psButton">Where is Winter ?</a>
					</div>
				</div>
			</section>
			
			<!-- fin de partie perso-->
			
			<section class="exp row">
				<h2 class="col-sm-12">Portfolio</h2>

			<?php require 'ind_card.php'?>

			</section>
			
			<!-- fin de partie Portfolio -->
						
			<h2 class="col-sm-12">Contact</h2>
			<section class="psViePerso container">
				<div class="card psCard yb-contact">
					<img src="img/gokuphone.png" class="card-img-top psImgTop" alt="Très souriant aujourd'hui !">
					<div class="card-body yb-card">
						<h4 class="card-title">
							Contactez-moi
						</h4>
						<p class="card-text yb-align">
						Vous pouvez me contacter pour plus d'informations. Ou si vous souhaitez un rendez-vous.
						</p>
						<a href="contact.php" class="btn btn-primary psButton">Where is  Daenerys ?</a>
					</div>
				</div>
			</section>
			<!-- fin de partie Contact -->
		</main>
		<?php require './footer.php';?>

