	<?php 
	$title = 'Contact';
	require './head.php'; ?>
	<?php require './header.php'; ?>
		<main class="container">
			<section class="col-sm-12">
				<h2 class="col-sm-12">N'hésitez pas a me contacter pour toutes demande d'informations.</h2>
			
				<article class="yb-align">
					<img src="img/vegito.png" alt="fusion de vegeta et goku">
					<form class="col-sm-6" action="" method="get" class="form-example">
						<div class="col-sm-12 yb-select">
							<label class="col-sm-12" for="pet-select">Qui est votre personnage favori:</label>
							<select id="pet-select" class="col-sm-12">
								<option value="">Moi Son Goku</option>
								<option value="dog">Ou Vegeta</option>
								<option value="cat">Peut être Trunk ?</option>
								<option value="hamster">Sans doute Son gohan</option>
								<option value="parrot">Bah... Picolo</option>
							</select>
                        </div>
                        <div class="yb-align">
							<input class="col-sm-12" type="text" name="name" id="name" placeholder="Nom"required>
						</div>
						<div class="yb-align">
							<input class="col-sm-12" type="text" name="prenom" id="prenom" placeholder="Prénom"required>
                        </div>
                        <div class="yb-align">
							<input class="col-sm-12" type="email" name="email" id="email" placeholder="Email" required>
						</div>
						<div id="txt">
							<label class="col-sm-12" for="msg">Message: </label>
							<textarea class="col-sm-12"></textarea>
						</div>
						<div id="button-form" class="col-sm-12">
							<input type="submit" value="Envoyez">
						</div>
					</form>
				</article>
			</section>
		</main>
		<?php require 'footer.php'; ?>
    </body>


		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
</html>

