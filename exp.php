<?php 
$title = 'Portfolio';
$nav = 'exp';
require 'head.php';?>
<?php require 'header.php';?>
        
			
        <section class="exp row">
            <h2 class="ex_title container-fluid as_titre">Des moments de <strong class="samirColor">Jon Snow</strong></h2>
            
            <?php
            $allPortfolios = [
                "L’Attaque du dragon" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/attaquedragon.jpg"],

                "L'Offensive des cyborgs" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/cyborgs.jpg"],

                "Fusions" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/Fusions.jpg"],

                "À la poursuite de Garlic" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/garlic.jpg"],

                "Les Affranchies" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/dbzdark.png"],

                "Cent mille guerriers de métal" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/métal.jpg"],

                "Broly le super guerrier" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/broly01.png"],

                "Les Mercenaires de l’espace" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/mercenaire.jpg"],

                "Le Château du démon" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/majin-buu.jpg"],

                "Le Combat fratricide" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/cellaraine.jpg"],

                "Le Père de Songoku " => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/vegeta.png"],

                "La Menace de Namek" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/gotreunk.png"],

                "La Revanche De Cooler" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/gohan.jpg"],

                "L'Histoire de Trunks" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/frezas.jpg"],

                "Le Plan d'anéantissement des Saiyans " => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/hercule.jpg"],

                "Le Retour de Broly" => ["Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae omnis sequi nisi cupiditate amet magnam, dignissimos consectetur tenetur repellendus ipsum quaerat ratione, ab alias quis, quasi repellat nostrum maiores eaque tempore doloribus eligendi a deserunt maxime. Ipsa magnam exercitationem corporis!", "img/imgPortfolio/black.jpg"]


            ];
            echo"<div class='card-deck Portfolio'>";
            foreach ($allPortfolios as $title_key => $allPortfolio) {
                echo"<div class='card as_card text1'>";
                    echo"<h2><em class='samirColor'> $title_key </em></h2>";
                    echo"<p class='card-title'>$allPortfolio[0]</p>";
                        echo"<div class='card-body image1'>";
                            echo"<img src='$allPortfolio[1]' class='card-img-top' alt='item021'>";
                        echo"</div>";
                echo"</div>";
            }
            echo"</div>";
            ?>
        </section>
        
		<?php require './footer.php';?>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
	</body>
</html>