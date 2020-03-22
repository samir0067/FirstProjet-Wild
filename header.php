<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">Son Goku(kakarot)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <li class= "<?php if ($nav === "vieperso") : ?>active<?php endif; ?>">
                    <a class="nav-item nav-link" href="viePerso.php">Mon histoire</a>
                  </li>
                  <li class= "<?php if ($nav === "exp") : ?>active<?php endif; ?>">
                    <a class="nav-item nav-link" href="exp.php">Portfolio</a>
                  </li>
                  <li class= "<?php if ($nav === "contact") : ?>active<?php endif; ?>">
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                  </li>  
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