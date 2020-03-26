<?php
require 'a_head_header.php';

$aDeviner = 2020;
$radin = 0;
$erreur = null;
$succes = null;
$value =null;

if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
    if ($value > $aDeviner) {
        $erreur = "<p>C'est trop pour moi je n'ai pas besoin d'autant</p>";
    } elseif ($value < $aDeviner) {
        $erreur = "<p>Tu peu faire un petit effort</p>";
    } elseif ($radin < ($aDeviner - $aDeviner)) {
        $radin = "<h1>Gros radin</h1>";
    } else {
        $succes = "<p>Bravo ! Tu a trouver mon taux horaire... $aDeviner À très bientôt</p>";
    }
}
?>



<?php if ($erreur): ?>
<div class="alert as_danger">
    <?= $erreur ?>
</div>

<?php elseif ($erreur): ?>
<div class="alert as_danger">
    <?= $radin ?>
</div>

<?php elseif ($succes): ?>
<div class="alert as_succes">
    <?= $succes ?>
</div>
<?php endif ?>






<main class="box_quizz container-fluid">
<img src="img/background.jpg" alt="background image">
    <div class="card container col-md-12 as_quizz">
        <h2>Petit quizz pour tester votre générosite</h2>
        <p>Saisi le prix qui conviendrai le mieux pour une prestation, entre 0 et 3000 attention votre générosité va en prendre un coup...</p>
        <p>Si tu trouve le bon tarif tu recevra une récompense.</p>
        <form action="/i_quizz.php" method="POST" class="container col-md-6">
            <div class="form-group">
                <input type="number" id="jeu" class="form-control" name="chiffre" value="<?= $value ?>">
                <button type="submit" class="btn btn-primary" >Deviner</button>
            </div>
        </form>
    </div>
</main>

<?php
require 'f_footer.php'
?>