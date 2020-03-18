<?php $title = "Page d'accueil"; 
require './head.php';?>

<?php require './header.php';?>
		<main class="container-fluid">
			
			<!-- début partie perso -->
			
			<h2 class="col-sm-12">Qui suis-je?</h2>
			<p class="col-sm-12 psComment">Hodor..Hodor !</p>
			<section class="psViePerso container">

				<div class="card psCard">
					<img src="img/jon_card.jpg" class="card-img-top psImgTop" alt="Très souriant aujourd'hui !">
					<div class="card-body">
						<h4 class="card-title">
							Winter is comming...
						</h4>
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
						<img src="img/imgPortfolio/jon16.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">
							<h3 class="card-title">La Mère des Dragons</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>
						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon01.png" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">La Garde de Nuit</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon02.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Rencontre de Ygritte</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon03.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Son premier meurtre</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon12.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Bataille des bâtards</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon13.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Tuez un marcheur</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon14.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">L’attaque de Château noir</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
					<div class="card as_card">
						<img src="img/imgPortfolio/jon15.jpg" class="card-img-top" alt="item021">
						<div class="card-body as_body">

							<h3 class="card-title">Combat avec la Reine Cersei</h3>
							<a href="exp.php" class="btn btn-primary psButton">Go</a>

						</div>	
					</div>
				</div>
			</section>
			
			<!-- fin de partie Portfolio -->
						
			<h2 class="col-sm-12">Contact</h2>
			<section class="psViePerso container">
				<div class="card psCard yb-contact">
					<img src="img/jon-contact.jpg" class="card-img-top psImgTop" alt="Très souriant aujourd'hui !">
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

