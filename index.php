<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>index</title>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous" />
	</head>
<body>
		<?php include 'header.php';?>
		<main class="container-fluid">
	  <!-- paul -->
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
			<!-- fin de paul-->
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
			<!-- fin de partie samir-->
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
			<!-- fin de partie yann-->
		</main>
		<?php include 'footer.php';?>

		<script>
            var checkbox = document.querySelector('input[name=theme]');

            checkbox.addEventListener('change', function () {
                if (this.checked) {
                    trans()
                    document.documentElement.setAttribute('data-theme', 'dark')
                } else {
                    trans()
                    document.documentElement.setAttribute('data-theme', 'light')
                }
            })

            let trans = () => {
                document.documentElement.classList.add('transition');
                window.setTimeout(() => {
                    document.documentElement.classList.remove('transition')
                }, 1000)
            }
		</script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>

