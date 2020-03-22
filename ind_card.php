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
            echo"<a href='exp.php' class='btn btn-primary psButton'>Go</a>";
        echo"</div>";
echo"</div>";
}
echo"</div>";
?>