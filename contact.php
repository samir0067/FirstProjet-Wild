	<?php 
	$title = 'Contact';
	require './head.php'; ?>
	<?php require './header.php'; ?>
		<main class="container">
			<section class="col-sm-12">
				<h2 class="col-sm-12">Contacter moi pour toutes demande d'informations.</h2>
				<form action="/thanks.php"  method="POST" class="container col-8">
					<fieldset>
						<div class="form-group">
							<input type="text" id="prenom" class="form-control" name="firstname" placeholder="Prenom">
						</div>
						<div class="form-group">
							<input type="text" id="nom" class="form-control" name="lastname" placeholder="ex: Nom">
						</div>
						<div class="form-group">
							<input type="email" id="courriel" class="form-control" name="user_email" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" name="user_tel" pattern="[0-9]{10}" placeholder="06..">
						</div>
						<div class="form-group">
							<select class="form-control" id="sujet" name="user_sujet">
								<option value="Sujet 1">Sujet 1</option>
								<option value="Sujet 1">Sujet 2</option>
								<option value="Sujet 1">Sujet 3</option>
								<option value="Sujet 1">Sujet 4</option>
								<option value="Sujet 1">Sujet 5</option>
							</select>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="message" name="user_message" rows="3" placeholder="message"></textarea>
						</div>
						<button type="submit" class="btn btn-primary" >Envoyer</button>
					</fieldset>
				</form>
			</section>
		</main>
		<?php require 'footer.php'; ?>
    </body>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
</html>

