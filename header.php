<?php
function nav_title (string $lien, string $title): string
{
  $classe = 'nav_title';
  if ($_SERVER['SCRIPT_NAME'] === $lien) {
    $classe = $classe . ' active';
  }
  return '<li class="' . $classe . '">
            <a class="nav-item nav-link" href="' . $lien . '"> ' . $title . '</a>
        </li>';
}
?>
<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">Son Goku(kakarot)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <?= nav_title('/viePerso.php', 'Mon histoire'); ?>
                  <?php echo nav_title('/exp.php', 'Portfolio'); ?>
                  <?php echo nav_title('/contact.php', 'Contact'); ?>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner max-height">
              <div class="carousel-item active">
                <img src="img/goku01.2.0.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/goku03.2.0.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/goku02.2.0.png" class="d-block w-100" alt="Il pue un peu de la bouche">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </header>