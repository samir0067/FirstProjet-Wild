<?php

$bonNumero = 2020;
$radin = 0;
$erreur = null;
$succes = null;
$value =null;

if (isset($_POST['reponce'])) {
    $value = (int)$_POST['reponce'];
    if ($value > $bonNumero) {
        $erreur = "<h3>C'est trop pour moi je n'ai pas besoin d'autant</h3>";
    } elseif ($value < $bonNumero && $value != 0) {
        $erreur = "<h3>Tu peu faire un petit effort</h3>";
    } elseif ($radin === $value) {
        $radin = "<h1 class 'radin'>Gros radin</h1>";
    } else {
        $succes = "<h3>Bravo ! Tu a trouver $bonNumero, on ce rappel à très bientôt</h3>";
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
            $firstname = @$_POST['firstname'];
            $lastname = @$_POST['lastname'];
            $email = @$_POST['user_email'];
            $tel = @$_POST['user_tel'];
            $mess = @$_POST['user_message'];

        ?>
    <div class="card container col-md-12 as_quizz">
    <?= "<h2>Bonjour <strong>$firstname</strong> <strong>$lastname</strong> un petit quizz pour tester ta générosite</h2>"; ?>
    <?= "<p>Saisi le prix qui conviendrai le mieux pour une prestation, entre 0 et 3000 attention ta générosité va en prendre un coup...</p>"; ?>
    <?= "<p>Si tu trouve le bon tarif tu recevra une récompense à l'adresse <strong>$email</strong> </p>"; ?>
    <?= "<p>$mess</p>"; ?>
        <form action="/i_quizz.php" method="POST" class="container col-md-6">
            <div class="form-group">
                <input type="number" id="jeu" class="form-control" name="reponce" value="<?= $value ?>">
                <button type="submit" class="btn btn-primary" >Tente ta chance</button>
            </div>
        </form>
    </div>
</main>

<?php
require 'f_footer.php'
?>