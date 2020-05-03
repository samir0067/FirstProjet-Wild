<?php

$portfolios = [
    "img/imgPortfolio/attaquedragon.jpg" => ["L’Attaque du dragon"],
    "img/imgPortfolio/cyborgs.jpg" => ["L'Offensive des cyborgs"],
    "img/imgPortfolio/Fusions.jpg" => ["Fusions"],
    "img/imgPortfolio/garlic.jpg" => ["À la poursuite de Garlic"],
    "img/imgPortfolio/dbzdark.png" => ["Les Affranchies"],
    "img/imgPortfolio/métal.jpg" => ["Guerriers de métal"],
    "img/imgPortfolio/broly01.png" => ["Broly le super guerrier"],
    "img/imgPortfolio/mercenaire.jpg" => ["Les Mercenaires de l’espace"]
];
echo"<div class='card-deck Portfolio'>";
foreach($portfolios as $img_key => $portfolio) {
echo"<div class='card as_card'>";
        echo"<img src='$img_key' class='card-img-top' alt='item021'>";
        echo"<div class='card-body as_body'>";
            echo"<h3 class='card-title'> $portfolio[0] </h3>";
            echo"<a href='d_exp.php' class='btn btn-primary psButton'>Go</a>";
        echo"</div>";
echo"</div>";
}
echo"</div>";
?>


		<!-- <section class="exp row">
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
			fin de partie samir -->