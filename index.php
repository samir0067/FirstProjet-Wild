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
				<div class="card-deck Portfolio">
					<div class="card as_card">
						<img src="img/imgPortfolio/attaquedragon.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">
							<h3 class="card-title">L’Attaque du dragon</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>
						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/cyborgs.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">L'Offensive des cyborgs</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/Fusions.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Fusions</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/garlic.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">À la poursuite de Garlic</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/dbzdark.png" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Les Affranchies</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/métal.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Guerriers de métal</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/broly01.png" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Broly le super guerrier</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/mercenaire.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Les Mercenaires de l’espace</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
				</div>
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

