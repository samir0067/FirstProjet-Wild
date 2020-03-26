<?php require 'g_functions.php' ?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php if (isset($title)) { echo $title; } else { echo 'Dragon ball Z'; } ?> </title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/try.css">
        <link rel="stylesheet" href="css/exp.css">
        <link rel="stylesheet" href="css/contact.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
	</head>
<body> 
<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="b_index.php">Son Goku(kakarot)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <?= nav_title('/c_viePerso.php', 'Mon histoire'); ?>
                  <?= nav_title('/d_exp.php', 'Portfolio'); ?>
                  <?= nav_title('/e_contact.php', 'Contact'); ?>
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