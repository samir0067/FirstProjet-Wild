<?php

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
    } elseif ($radin === $aDeviner) {
        $radin = "<h1>Gros radin</h1>";
    } else {
        $succes = "<p>Bravo ! Tu a trouver $aDeviner bien vu, je te 'appel au $tel à très bientôt</p>";
    }
}

require 'a_head_header.php';
?>



<?php if ($erreur): ?>
<div class="alert as_danger">
    <?= $erreur ?>
</div>

<?php elseif ($radin): ?>
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
        <?php
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['user_email'];
            $tel = $_POST['user_tel'];
            $mess = $_POST['user_message'];

        ?>
    <div class="card container col-md-12 as_quizz">
    <?= "<h2>Bonjour <strong>$firstname</strong> <strong>$lastname</strong> un petit quizz pour tester ta générosite</h2>"; ?>
    <?= "<p>Saisi le prix qui conviendrai le mieux pour une prestation, entre 0 et 3000 attention ta générosité va en prendre un coup...</p>"; ?>
    <?= "<p>Si tu trouve le bon tarif tu recevra une récompense à l'adresse <strong>$email</strong> </p>"; ?>
    <?= "<p>$mess</p>"; ?>
        <form action="/" method="POST" class="container col-md-6">
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