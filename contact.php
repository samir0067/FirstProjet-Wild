<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
        integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous" />
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="contact.css">
    </head>
    <?php include 'header.php'; ?>
	<body>
		<main class="container">
			<section class="col-sm-12">
				<h2 class="col-sm-12">N'hésitez pas a me contacter pour toutes demande d'informations.</h2>
			
				<article class="yb-align">
					<iframe class="col-sm-5"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84484.10413707854!2d7.692054347319952!3d48.569092311382086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c8495e18b2c1%3A0x971a483118e7241f!2sStrasbourg!5e0!3m2!1sfr!2sfr!4v1583876695778!5m2!1sfr!2sfr" width="600" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<form class="col-sm-6" action="" method="get" class="form-example">
						<div class="radio">
							<label class="yb-veq"for="question">Vous êtes ?</label>
							<div class="yb-test">
								<div class="yb-colum col-sm-3">
									<label for="contactChoice1">Daenerys</label>
									<input type="radio" id="contactChoice1" name="contact" value="email">
								</div>
								<div class="yb-colum col-sm-3">
									<label for="contactChoice2">Un dragon</label>
									<input type="radio" id="contactChoice2" name="contact" value="email">
								</div>
								<div class="yb-colum col-sm-3">
									<label for="contactChoice3">Le throne</label>
									<input type="radio" id="contactChoice3" name="contact" value="email">
								</div>
								<div class="yb-colum col-sm-3">
									<label for="contactChoice4">Un lannister</label>
									<input type="radio" id="contactChoice4" name="contact" value="email">
								</div>
							</div>
						</div>
						<div class="col-sm-12 yb-select">
							<label class="col-sm-12" for="pet-select">Qui est votre personnage favori:</label>
							<select id="pet-select" class="col-sm-12">
								<option value="">--Faites votre choix--</option>
								<option value="dog">Jon Snow</option>
								<option value="cat">Peut être Jon Snow ?</option>
								<option value="hamster">Sans doute Jon Snow</option>
								<option value="parrot">Bah... Jon Snow</option>
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
    </body>
	<?php include 'footer.php'; ?>
	<!-- script -->
	<script>
			var checkbox = document.querySelector('input[name=theme]');
			checkbox.addEventListener('change', function () {
				if (this.checked) {
					trans();document.documentElement.setAttribute('data-theme', 'dark')
				}
				 else {
					trans();document.documentElement.setAttribute('data-theme', 'light')
				}
			}
			);let trans = () => {
				document.documentElement.classList.add('transition');
				window.setTimeout(() => {
					document.documentElement.classList.remove('transition')
				}
				, 1000)
			}
		</script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
</html>

